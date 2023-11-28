<?php
namespace App\Repository;

use App\Services\TranslatorService;
use App\Utils\UtilityFunctions;
use Doctrine\DBAL\Portability\Connection;
use Doctrine\ORM\EntityRepository;
use App\Services\HTTPRequestSender;
use Doctrine\ORM\NoResultException;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Cache\Adapter\RedisAdapter;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Utils\Configuration;

class UserRepository extends EntityRepository
{

    function getUserSessionInfo($usr){
        $sql = "SELECT aus_id, aus_name, aus_access, aty_code, aus_jurisdiction_id, aus_cou_id, aus_password, aus_username" . "  , aus_failed_logins, aus_lock_start" . "  , aus_password_set_time" . "  , aty_jurisdiction_class, jur_code, aus_ssl_key, aus_has_key, aus_aty_id, aty_level, jur_available_credit,jur_overdraft,jur_reserved_fund, jur_skn_id, jur_childs_limit, jur_users_limit " . "  , cur_name,cur_code_for_web,cur_id " . "  FROM admin_user
                       LEFT JOIN admin_user_type ON aty_id = aus_aty_id
                       LEFT JOIN jurisdiction on jur_id = aus_jurisdiction_id
                       LEFT JOIN currency on cur_id = jur_currency " . " WHERE aus_username = '$usr'" ;
        $em = $this->getEntityManager();
        $em->getConnection()->setAutoCommit(true);
        $connection = $em->getConnection();

        try {
            $statement = $connection->prepare($sql);
            $statement->execute();
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e->getCode().' with error :'.$e->getMessage();
        }

        try{
            $result = $statement->fetchAllAssociative();
            return $result;
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e->getCode().' with error :'.$e->getMessage();
        }
    }

    function getAllClubsUnderJurisdiction($jur_id,$recent=false) {

        $jur_class=$_SESSION['jurisdiction_class'];
        $sql = "select c.jur_name club_name,c.jur_id club_id,d.jur_name district_name
            FROM jurisdiction c
            JOIN jurisdiction d on d.jur_id = c.jur_parent_id";
        if($jur_class == "club"){
            $sql .= " WHERE c.jur_id = " . $jur_id;
        }
        elseif($jur_class == "district"){
            $sql .= "
				  WHERE d.jur_id = " . $jur_id;
        }
        elseif($jur_class=="region"){        $sql .="
				  JOIN jurisdiction r on r.jur_id = d.jur_parent_id
				  WHERE r.jur_id=".$jur_id;
        }
        elseif ($jur_class=="nation"){
            $sql .=" JOIN jurisdiction r on r.jur_id = d.jur_parent_id
				 JOIN jurisdiction n on n.jur_id = r.jur_parent_id
				WHERE n.jur_id=".$jur_id;
        }
        else{
            $sql .=" WHERE 1=1";
        }
        $sql.=" AND c.jur_class='club'
            AND c.jur_status=1";
        if($recent){
            $sql.=" AND c.JUR_CREATION_DATE > now() - interval 120 day";
        }

        $em = $this->getEntityManager();
        $em->getConnection()->setAutoCommit(true);
        $connection = $em->getConnection();

        try {
            $statement = $connection->prepare($sql);
            $statement->execute();
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e->getCode().' with error :'.$e->getMessage();
        }

        try{
            $result = $statement->fetchAllAssociative();
            return $result;
        }catch (\Doctrine\DBAL\Exception $e)
        {
            return $e->getCode().' with error :'.$e->getMessage();
        }
    }

    /**
     * @param $jurId
     * @param $max_row
     * @param $exact
     * @param $field
     * @param $orderby
     * @param $operation
     * @param $asc_desc
     * @return array
     * @throws \Doctrine\DBAL\Driver\Exception
     */
    function getUsersSearch($jurId, $max_row, $exact, $field, $orderby, $operation, $asc_desc, $search_string){
        $sql       = "";
//        $_SESSION["jurisdiction_class"] = 'club';
            $jurisdiction_level = "club";
            $jurisdiction       = $jurId;
//$_SESSION['jurisdiction_class'] = "club";
        $safe_checked = 1;
        if (empty($search_string) &&
            ($_SESSION["jurisdiction_class"] == "club" || $jurisdiction_level == "club")) {
            $search_type = SEARCH_TYPE_EMPTY;
        } elseif($field == 0) {
            if (preg_match(RGX_NUMER, $search_string)) {
                $search_type =  SEARCH_TYPE_CUSTNUM;
                settype($search_string, 'integer');
            }
            elseif (preg_match(RGX_EMAIL, $search_string)) {
                $search_type = SEARCH_TYPE_EMAIL;
                $safe_str    = strtolower(str_replace('%', '%%', $search_string));
            }
            elseif (preg_match(RGX_IPADD, $search_string)) {
                $search_type = SEARCH_TYPE_IPADDRESS;
            }elseif (preg_match(RGX_NIN_CODE, $search_string)){
                $search_type = SEARCH_TYPE_NIN_CODE;
            }elseif (preg_match(RGX_NAME, $search_string)){
                $search_type = SEARCH_TYPE_NAME;
            }
            else {
                $search_type = SEARCH_TYPE_USERNAME;
                $safe_str    = $search_string; //Modificata Manuel Rinaldi

            }
        }
        elseif ($field == 1) {
            $search_type = SEARCH_TYPE_USERNAME;
            $safe_str    = $search_string; //Modificata Manuel Rinaldi

        }
        elseif ($field == 2) {
            $search_type = SEARCH_TYPE_CUSTNUM ;
            $search_string= (int)$search_string;

        }
        elseif ($field == 3) {
            $search_type = SEARCH_TYPE_EMAIL;
            $safe_str    = strtolower(str_replace('%', '%%', $search_string));
        }
        elseif ($field == 4) {
            $search_type = SEARCH_TYPE_IPADDRESS;
        }
        elseif ($field == 5){
            $search_type = SEARCH_TYPE_NIN_CODE;
        }
        elseif ($field == 6){
            $search_type = SEARCH_TYPE_NAME;
        }

        elseif ($field == 7){
            $search_type = SEARCH_TYPE_PARTNERUSER;
            $search_string = (int)$search_string;
        }

        $sql  = "select pun_id, pun_first_name, pun_middle_name, pun_last_name" .
            ", pun_member_type, pcr_credits, pun_access, pcr_total_bets" .
            ", pcr_total_wins, coalesce(pun_email, '-'), pun_username, pun_reg_date" .
            ", pun_customer_number, pun_identified" .
            ", pun_notes, cou_name, pun_investigate" .
            ", pun_dob, pun_address_line1, pun_address_line2, pun_city_suburb" .
            ", pun_state_province, pun_postcode_zip, pun_phone_business" .
            ", pun_phone_home, pun_phone_mobile, pun_fax, pun_daily_allowance" .
            ", pun_gender, pun_temp_password, pun_num_logins, pun_last_logged_in" .
            ", pcr_reserved_funds, pun_lock_reason, pun_id_documents, pun_preg_code" .
            ", pun_login_lock_start, pun_email_reg_code, pun_sms_reg_code" .
            ", pun_registration_status, pun_pre_registered, pcr_total_deposits,pcr_fees_retained" .
            ", pcr_total_withdrawals, pun_password_set_time, pun_sre_code, pun_confirmation_list" .
            ", c.jur_name as \"Betting Club\"".
            ", d.jur_name as \"District\"".
            ", r.jur_name as \"Region\"".
            ", n.jur_name as \"Nation\"".
            ", cur_code_for_web as pun_currency ".
            " FROM punter " .
            " LEFT JOIN punter_credit on pun_id=pcr_pun_id " .
            " LEFT JOIN jurisdiction c ON pun_betting_club=c.jur_id" .
            " LEFT JOIN jurisdiction d ON c.jur_parent_id=d.jur_id" .
            " LEFT JOIN jurisdiction r ON d.jur_parent_id=r.jur_id" .
            " LEFT JOIN jurisdiction n ON r.jur_parent_id=n.jur_id" .
            " LEFT JOIN currency ON c.jur_currency=cur_id " ;
        if($search_type == SEARCH_TYPE_IPADDRESS ){
            $sql .=" JOIN customer_log  ON clg_punid=pun_id";
        }
        $sql .=" LEFT OUTER JOIN country ON pun_cou_code = cou_code" .
            " WHERE pcr_pun_id = pun_id "; //Modificata query Manuel Rinaldi

        if (isset($safe_checked) && !empty($jurisdiction_level) && !empty($jurisdiction)) {
            if ($jurisdiction_level == "club"){
                $sql .= " AND c.jur_id =".$jurisdiction;
            }
            elseif ($jurisdiction_level == "district"){
                $sql .= " AND d.jur_id =".$jurisdiction;
            }
            elseif ($jurisdiction_level == "region"){
                $sql .= " AND r.jur_id =".$jurisdiction;
            }
            elseif ($jurisdiction_level == "nation"){
                $sql .= " AND n.jur_id =".$jurisdiction;
            }
            else {
                $sql .= " AND 1 = 0 ";
            }
        }
        else {
            if ( 'club' == $_SESSION['jurisdiction_class'] ) { //If a club admin user
                //only show punters in same club as admin user
                $sql .= " and c.jur_id = ".$_SESSION['jurisdiction_id'];
            }
            elseif ( 'district' == $_SESSION['jurisdiction_class'] )  { //If a district manager admin user
                $sql .= " and d.jur_id = ".$_SESSION['jurisdiction_id'];
            }
            elseif ( 'region' == $_SESSION['jurisdiction_class'] ) { //If a district manager admin user
                // only select punters where their betting club (bottom level jurisdiction)
                // is under the admin user's district
                // select only  records within admin user's jurisdiction
                $sql .= " and r.jur_id = ".$_SESSION['jurisdiction_id'];
            }
            elseif ( 'nation' == $_SESSION['jurisdiction_class'] )  { //If a district manager admin user
                // only select punters where their betting club (bottom level jurisdiction)
                // is under the admin user's district
                // select only  records within admin user's jurisdiction
                $sql .= " and n.jur_id = ".$_SESSION['jurisdiction_id'];
            }
            elseif ( 'casino' != $_SESSION["jurisdiction_class"] ) {
                $sql .= " and 1 = 0 ";
            }
        }

        if ($search_type == SEARCH_TYPE_USERNAME) {
            if ($exact)
                $sql .= " AND pun_username='".($search_string)."'";
            else
                $sql .= " AND pun_username LIKE '%$safe_str%'"; //Modificata query Manuel Rinaldi
        }
        elseif ($search_type == SEARCH_TYPE_EMAIL) {
            if ($exact)
                $sql .= " AND pun_email=" . ($search_string);
            else
                $sql .= " AND pun_email LIKE ('%$safe_str%')";
        }
        elseif ($search_type == SEARCH_TYPE_PARTNERUSER) {

            $sql .= " AND (";
            $sql .= " pun_id IN (SELECT pnu_local_id FROM partner_users WHERE pnu_id = $search_string) ";
            $sql .= ")";
        }
        elseif ($search_type == SEARCH_TYPE_CUSTNUM) {
            $sql .= " AND (";
            $sql .= " (pun_customer_number = $search_string OR pun_id = $search_string ) ";

            /* if($_SERVER["HTTP_HOST"] == "poker.leonardogames.it"){
             $sql .= " OR REGEXP_LIKE(pun_first_name, '[a-z0-9]{3}_$search_string', 'i')";
            $sql .= " OR pun_id IN (SELECT pnu_local_id FROM partner_users WHERE pnu_username = 'itp_$search_string')";
            }*/ //Modificata query Manuel Rinaldi

            $sql .= ")";


            //$sql .= " AND (pun_customer_number = $search_string OR pun_id = $search_string OR REGEXP_LIKE(pun_first_name, '[a-z0-9]{3}_$search_string', 'i') OR pun_id IN (SELECT pnu_local_id FROM partner_users WHERE pnu_id = $search_string))";
        }

        elseif ($search_type == SEARCH_TYPE_IPADDRESS) {
            $sql .= " AND pun_id  = clg_punid AND clg_ipaddress = " . ($search_string) ." GROUP BY pun_id ";
            $ip =$search_string;
//                    require_once 'getIp.php';
        }
        elseif ($search_type == SEARCH_TYPE_NIN_CODE){
            $sql .= " AND pun_nin_code = " . ($search_string) . " ";
        }elseif ($search_type == SEARCH_TYPE_NAME) {
            list($last_name, $first_name) = explode(",", $search_string);

            $sql .= " AND (TRIM(pun_last_name) = " . (trim(strtolower($last_name )));

            if(!is_null($first_name)){
                $sql .= " AND TRIM(pun_first_name) = " . (trim(strtolower($first_name)));
            }
            $sql .= ")";
        }
        elseif ($search_type != SEARCH_TYPE_EMPTY) {
            $sql .= " AND 1 = 0 ";

        }

//            $orderby   = $orderby;
//            $operation = $operation;
//            $asc_desc  = $asc_desc;

        if($max_row == NULL)
            $max_row = 20;


        if ( 'desc' == $asc_desc || !$orderby )
            $asc_desc = 'desc';
        else
            $asc_desc = 'asc';

        switch ($orderby )
        {  case "number":
            $sql .= " order by pun_customer_number";
            $sql .= ", upper(pun_middle_name)";
            break;
            case "country":
                $sql .= " order by upper(cou_name)";
                break;
            case "member_type":
                $sql .= " order by upper(pun_member_type)";
                break;
            case "status":
                $sql .= " order by lower(pun_registration_status), lower(pun_access) ";
                break;
            case "city":
                $sql .= " order by lower(pun_city_suburb)";
                break;
            case "funds":
                $sql .= " order by pcr_credits";
                break;
            case "bets":
                $sql .= " order by pcr_total_bets";
                break;
            case "wins":
                $sql .= " order by pcr_total_wins";
                break;
            case "access":
                $sql .= " order by pun_access";
                break;
            case "email":
                $sql .= " order by lower(pun_email)";
                break;
            case "investigate":
                $sql .= " order by lower(pun_investigate  )";
                break;
            case "num_logins":
                $sql .= " order by lower(pun_num_logins)";
                break;
            case "last_login":
                $sql .= " order by pun_last_logged_in";
                break;
            case "deposits":
                $sql .= " order by pcr_total_deposits";
                break;
            case "withdrawals":
                $sql .= " order by pcr_total_withdrawals";
                break;
            case "name":
                $sql .= " order by upper(pun_last_name) $asc_desc, upper(pun_first_name)";
                $sql .= ", upper(pun_middle_name)";
                break;
            case "fees":
                $sql .= " order by pcr_fees_retained";
                break;
            case "returned":
                $sql .= " order by pcr_total_bets-pcr_total_wins";
                break;

            case "Betting Club":
                $sql .= " order by \"Betting Club\"";
                break;
            case "District":
                $sql .= " order by \"District\"";
                break;
            case "Region":
                $sql .= " order by \"Region\"";
                break;
            case "Nation":
                $sql .= " order by \"Nation\"";
                break;
            //order by name
            default:{
                $orderby = 'reg_date';
                $sql .= " order by pun_reg_date";
            }
        }

        $sql .= " $asc_desc"; //ascending or descending

        $em = $this->getEntityManager();
        $em->getConnection()->setAutoCommit(true);
        $connection = $em->getConnection();

        try {
            $statement = $connection->prepare($sql);
            $statement->execute();
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e->getCode().' with error :'.$e->getMessage();
        }
        try{
            $rs = $statement->fetchAllAssociative();
            $filter = 'x=y';
            $num_rows = count($rs);
            if ( $num_rows  > 0 ){



                $show_search_results = true;
                return $rs;
            }else{
                return [("No Matching Customers Found")];
            }
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return [$e->getCode().' with error :'.$e->getMessage()];
        }

    }

    function inConfirmationList($medium, $confirmation_str) {
        if ( $confirmation_str ){
            $arr = explode(',', strtolower($confirmation_str));
            return in_array(strtolower($medium), $arr);
        }
        return false;
    }

      public function nextSequence ( $sequence_name ) {
        $sequence_name = strtoupper("'$sequence_name'");
        $sql = "SELECT last_seq_id(UPPER(".($sequence_name).")) as next ";
        $em = $this->getEntityManager();
        $em->getConnection()->setAutoCommit(true);
        $connection = $em->getConnection();
         try {
            $statement = $connection->prepare($sql);
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e;
        }
        try {
            $statement->execute();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        try {
            $result = $statement->fetchAllAssociative();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        return $result[0]['next'];
        //return $this->Connection->nextId($sequence_name);
    }

    function fastRegisterCustomer($username,$password,$pun_club_id){

        $customer_number = $this->generateCustomerNumber($username.$username);
        $_site = $this->getSkinId($pun_club_id);

        $id = $this->nextSequence('pun_id_seq');
        $sql = 'SELECT * from punter where pun_username="'.$username.'"';

        $em = $this->getEntityManager();
        $em->getConnection()->setAutoCommit(true);
        $connection = $em->getConnection();

        try {
            $statement = $connection->prepare($sql);
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e;
        }
        try {
            $statement->execute();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        try {
            $result = $statement->fetchAllAssociative();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        if(count($result) > 0){
            return -11;
        }

        $sql  = "INSERT INTO punter
            (  pun_id, pun_customer_number, pun_username, pun_password
            ,  pun_first_name,  pun_last_name, pun_dob,  pun_member_type, pun_reg_date, pun_access
            ,  pun_betting_club, pun_site_id)
            VALUES ( $id,$customer_number, ".UtilityFunctions::db_quote($username).", ".UtilityFunctions::db_quote($password).
            ", " . UtilityFunctions::db_quote($username).", " . UtilityFunctions::db_quote($username) .", '1970-01-01', 'LIMITED', CURRENT_TIMESTAMP
            , 'ALLOW',  " . $pun_club_id.", " . ($_site).")";


        try {
            $statement = $connection->prepare($sql);
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e;
        }
        try {
            $statement->execute();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }


        $log  = "customer_number:$customer_number|username:$username|" .
            "password:$password|first_name:$username|" .
            "last_name:$username|member_type:LIMITED|reg_date:".UtilityFunctions::databaseTimestampToday()."|" .
            "access:ALLOW|site_id:".$_site;
        $this->doAdminUserLog($_SESSION['admin_id'], 'pre-register_customer', UtilityFunctions::escapeSingleQuotes($log), $id);
        $this->update_user_limit_creation($_SESSION['jurisdiction_id']);
        return 1;

    }

    function update_user_limit_creation($jurisdictionId) {
        $lang = TranslatorService::class;
        if ($_SESSION['jurisdiction_class'] != 'club') {
            return TRUE;
        }
        $sql = "UPDATE jurisdiction SET jur_users_limit = jur_users_limit - 1 WHERE jur_id = " . $jurisdictionId . " ";


        $em = $this->getEntityManager();
        $em->getConnection()->setAutoCommit(true);
        $connection = $em->getConnection();

        try {
            $statement = $connection->prepare($sql);
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e;
        }
        try {
            $statement->execute();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        try {
            $result = $statement->fetchAllAssociative();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        if (!$result) {
            UtilityFunctions::addError('generic_error', $lang->getLang('Unable to update Users creation limit'));
            return FALSE;
        } else {
            $_SESSION['jur_users_limit'] = $_SESSION['jur_users_limit'] - 1;
            return TRUE;
        }
    }


    /**
     * @return int
     * @param string $customer_number
     * @desc Returns associative array of punter
     */
    public function customerNumberExists($customer_number) {
        $sql = 'select count(*) from punter where pun_customer_number = "'.$customer_number.'"';

        $em = $this->getEntityManager();
        $em->getConnection()->setAutoCommit(true);
        $connection = $em->getConnection();

        try {
            $statement = $connection->prepare($sql);
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e;
        }
        try {
            $statement->execute();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        try {
            $result = $statement->fetchAllAssociative();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }
        return $result[0]['count(*)'];
    }

    public function getSkinId($jur_id){
        $sql = "SELECT jur_skn_id FROM jurisdiction WHERE jur_id = $jur_id";

        $em = $this->getEntityManager();
        $em->getConnection()->setAutoCommit(true);
        $connection = $em->getConnection();

        try {
            $statement = $connection->prepare($sql);
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e;
        }
        try {
            $statement->execute();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        try {
            $skin_id = $statement->fetchAllAssociative();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        $skin_id = $skin_id[0]['jur_skn_id'];
        if(is_null($skin_id)){
            $skin_id = -1;
        }

        return $skin_id;
    }

    /**
     * @return int
     * @param string name
     * @desc Returns a customer number
     */
    public function generateCustomerNumber($name, $aux = 0) {
        global $dbh;

        $num_chars = strlen($name);

        $aux++;
        //get array representation of string (a character to a cell)
        for ($i=0; $i<$num_chars; $i++)
            $char_array[$i] = substr($name, $i, 1);

        $cust_number = array(0,0,0,0,0,0);

        for ($i=0; $i<$num_chars; $i+=6 ) {
            if(isset($char_array[$i]))
                $cust_number[0] = substr($cust_number[0] + substr(ord($char_array[$i]),-1),-1);
            if(isset($char_array[$i+1]))
                $cust_number[1] = substr($cust_number[1] + substr(ord($char_array[$i+1]),-1),-1);
            if(isset($char_array[$i+2]))
                $cust_number[2] = substr($cust_number[2] + substr(ord($char_array[$i+2]),-1),-1);
            if(isset($char_array[$i+3]))
                $cust_number[3] = substr($cust_number[3] + substr(ord($char_array[$i+3]),-1),-1);
            if(isset($char_array[$i+4]))
                $cust_number[4] = substr($cust_number[4] + substr(ord($char_array[$i+4]),-1),-1);
            if(isset($char_array[$i+5]))
                $cust_number[5] = substr($cust_number[5] + substr(ord($char_array[$i+5]),-1),-1);


        }
        $customer_number_string = implode("", $cust_number);

        if ( strlen($customer_number_string) < 6 )
            return $this->generateCustomerNumber($name.preg_replace("/[^a-zA-Z]/", "",UtilityFunctions::randomString()), $aux);

        if ($this->customerNumberExists($customer_number_string) ) {

            $str = preg_replace("/[^a-zA-Z]/", "",UtilityFunctions::randomString().UtilityFunctions::randomString());
            return $this->generateCustomerNumber($str, $aux);
        }
        return $customer_number_string;
    }

    public function doAdminUserLog($admin_id, $log_type, $log_data, $pun_id='NULL', $ipaddr = null ) {
        //  $next_id  = $dbh->nextSequence('ALG_ID_SEQ');
        //  $sql  = "insert into admin_user_log (alg_id, alg_time, alg_type, alg_data, alg_aus_id, alg_pun_id)";
        //  $sql .= " values ($next_id, CURRENT_TIMESTAMP, '$log_type', '$log_data', $admin_id, $pun_id)";
        $alg_id = $this->nextSequence("alg_id_seq");
        if ($ipaddr == null)
            $ipaddr =UtilityFunctions::getIpAddress();
        $sql  = "INSERT INTO admin_user_log (alg_id, alg_type, alg_time, alg_data, alg_aus_id, alg_pun_id, alg_ipaddr)";
        $sql .= "  VALUES ($alg_id, '$log_type', CURRENT_TIMESTAMP, '$log_data', $admin_id, $pun_id, '$ipaddr')";

        $em = $this->getEntityManager();
        $em->getConnection()->setAutoCommit(true);
        $connection = $em->getConnection();

        try {
            $statement = $connection->prepare($sql);
        } catch (\Doctrine\DBAL\Exception $e) {
            return $e;
        }
        try {
            $statement->execute();
        } catch (\Doctrine\DBAL\Driver\Exception $e) {
            return $e;
        }

        return 1;
    }
}