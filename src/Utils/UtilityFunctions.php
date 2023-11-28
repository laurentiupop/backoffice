<?php
/**
 * Created by PhpStorm.
 * User: lau
 * Date: 2/24/21
 * Time: 5:18 PM
 */

namespace App\Utils;


class UtilityFunctions
{

    public function checkUserSession(){
        return isset($_SESSION );
    }

    public function removeLeadingZero ($number_string)
    {	if ( strlen($number_string) > 1 )
        if ( substr($number_string, 0, 1) == "0" )
            $number_string = substr($number_string, 1, 1);
        return $number_string;
    }

    public function getDBDate( $db_date )
    {	$arr = explode(" ", $db_date);
        $date = $arr[0];
        return $date;
    }


    public function getDBTime( $db_date )
    {	$arr = explode(" ", $db_date);
        $time = $arr[1];
        return $time;
    }


    public function m2month ( $mon_num )
    {
        UtilityFunctions::removeLeadingZero($mon_num);

        switch( $mon_num )
        {  case "1" :  return "January";
            case "2" :  return "February";
            case "3" :  return "March";
            case "4" :  return "April";
            case "5" :  return "May";
            case "6" :  return "June";
            case "7" :  return "July";
            case "8" :  return "August";
            case "9" :  return "September";
            case "10" :  return "October";
            case "11" :  return "November";
            case "12" :  return "December";
            default:	return;
        }
    }


    public function month2m ( $mon_num )
    {
        switch( $mon_num )
        {  case "January" :  return 1;
            case "February" :  return 2;
            case "March" :  return 3;
            case "April" :  return 4;
            case "May" :  return 5;
            case "June" :  return 6;
            case "July" :  return 7;
            case "August" :  return 8;
            case "September" :  return 9;
            case "October" :  return 10;
            case "November" :  return 11;
            case "December" :  return 12;
            default:	return;
        }
    }


//formats a hyphen-delimited or forward-slash-delimited date into user-friendly display
    public function formatDate( $date, $show_hour=false, $newline=false )
    {  //$just_date	= getDBDate($date);
        //$hour		= getDBTime($date);
        $date_arr =UtilityFunctions::splitDate($date);
        $year  = $date_arr["year"];
        $month =UtilityFunctions::removeLeadingZero($date_arr["month"]);
        $day   =UtilityFunctions::removeLeadingZero($date_arr["day"]);
        $time  = $date_arr["time"];

        if ( $newline )
            $nl = "<br>";

        if ( $show_hour )
            return  "$day ".$this->m2month($month)." $year, $nl" .UtilityFunctions::formatTime($time)." hours";
        else
            return "$day ".$this->m2month($month)." $year";
    }


    public function shortDate ( $date, $show_time=false, $newline=false )
    {
        $date_arr =UtilityFunctions::splitDate($date);

        settype($date_arr["hour"], "integer");
        settype($date_arr["minute"], "integer");
        settype($date_arr["second"], "integer");
        settype($date_arr["month"], "integer");
        settype($date_arr["day"], "integer");
        settype($date_arr["year"], "integer");
        $mktime = mktime($date_arr["hour"],$date_arr["minute"],$date_arr["second"],$date_arr["month"],$date_arr["day"],$date_arr["year"]);

        if ( $newline )
            $nl = "<br>";
        else
            $nl = " ";

        if ( $show_time )
            $date_formatted = date('j/n/Y',$mktime).'&nbsp;<nobr>'.date('H:i:s', $mktime);
        else
            $date_formatted = date('j/n/Y', $mktime);

        return  $date_formatted;
    }


    public function formatTime($time)
    {
        if ( strstr($time, ":") )
            return substr($time, 0, 5);

        $hr   = substr($time, 0, 2);
        $min   = substr($time, 2, 2);
        return "$hr:$min";
    }

    public function phpTsToDbTs ($php_timestamp, $showtime=false)
    {  if ( $showtime )
        return date('Y-m-d H:i:s',$php_timestamp);
    else
        return date('Y-m-d',$php_timestamp);
    }

    public function toMySQLTimestamp ($day, $month, $year, $time="00:00:00")
    {  return toPGTimestamp ($day, $month, $year, $time);
    }

    public function limited_date_selector($day_name, $month_name, $year_name, $options="",$with_id=false ) {
        $arr = ( count($_POST) > 0 ? $_POST : $_GET );
        if ( ! ( $arr[$day_name] || $arr[$month_name] || $arr[$year_name] ) )
            $arr = $GLOBALS;

        $prev_day = $arr[$day_name];
        $prev_month = $arr[$month_name];
        $prev_year = $arr[$year_name];
        $today_day = date('j');
        $today_month = date('n');
        $today_year = date('Y');
        $def_day = $today_day;

        //day select
        if ( $day_name ) {
            $str = "<select ".(($with_id)?"id=$day_name":"")." name=$day_name $options>";
            if ( !$def_day && !$prev_day )
                $str .= "<option value=\"\">day";
            for ( $i = $today_day-2; $i <= $today_day; $i++) {
                $disp = ( $i < 10 ? "0$i" : $i );
                $str .= "\n  <option value=$disp";
                if ( $prev_day == $i || (!$prev_day && $def_day == $i) )
                    $str .= " SELECTED";
                $str .= ">$i";
            }
            $str .= "\n</select> / ";
        }
        //month select
        $str .= "<select ".(($with_id)?"id=$month_name":"")." name=$month_name $options>";
        $disp = ( $today_month < 10 ? "0$today_month" : $today_month );
        $str .= "\n  <option value=$disp SELECTED>".$this->m2month($today_month)."</select> /";

        //year select
        $str .= "<select ".(($with_id)?"id=$year_name":"")."  name=$year_name $options>";
        $str .= "\n  <option value=$today_year SELECTED>".$today_year."</select> /";
        echo $str;
    }



    public function date_selector($day_name, $month_name, $year_name, $min_year, $max_year, $default="", $options="",$with_id=false){
        $prev_day   = $GLOBALS[$day_name];
        $prev_month = $GLOBALS[$month_name];
        $prev_year  = $GLOBALS[$year_name];
        $today_year = date('Y');

        if ($default)
            if ( $default == "today" ){
                $def_day    = date("j");
                $def_month  = date("n");
                $def_year   = date("Y");
            } elseif ( $default == "todaynextmonth" ) {
                $def_day    = date("j");
                $def_month  = date("n")+1;
                $def_year   = date("Y");

                if ( $def_month > 12 ){
                    $def_year++;
                    $def_month = 1;
                }

                while ( !checkdate($def_month, $def_day, $def_year) )
                    $def_day--;
            }   elseif ( $default == "todaylastmonth" ) {
                $def_day    = date("j");
                $def_month  = date("n")-1;
                $def_year   = date("Y");

                if ( $def_month < 1 ){
                    $def_year--;
                    $def_month = 12;
                }

                while ( !checkdate($def_month, $def_day, $def_year) )
                    $def_day--;
            }   elseif ( $default == "todaynextyear" ) {
                $def_day    = date("j");
                $def_month  = date("n");
                $def_year   = date("Y")+1;

                while ( !checkdate($def_month, $def_day, $def_year) )
                    $def_day--;

            }elseif ( $default == "todaylastyear" ){
                $def_day    = date("j");
                $def_month  = date("n");
                $def_year   = date("Y")-1;

                while ( !checkdate($def_month, $def_day, $def_year) )
                    $def_day--;

            }elseif ( $default == "todaylastweek" ){
                $def_day    = date("j");
                $def_month  = date("n");
                $def_year   = date("Y");
                $mktime = mktime(0,0,0,$def_month, $def_day-7, $def_year);
                $def_day    = date("j", $mktime);
                $def_month  = date("n", $mktime);
                $def_year   = date("Y", $mktime);

            }else{
                $def_day   = "";
                $def_month = "";
                $def_year  = "";
                if($default['day']!=""){
                    if( is_array($default)){
                        $def_day   = $default['day'];
                        $def_month = $default['month'];
                        $def_year  = $default['year'];
                    }else{
                        $default_arr =UtilityFunctions::splitDate($default);
                        $def_day   = $default_arr['day'];
                        $def_month = $default_arr['month'];
                        $def_year  = $default_arr['year'];
                    }
                    if ( !checkdate($def_month, $def_day, $def_year) ){
                        echo "<font color=red size=2><b>Invalid default date paramater: \"$default\"</b></font> ";
                        return;
                    }
                }

            }

        //day select
        if ( $day_name ){
            $str = "<select ".(($with_id)?"id=$day_name":"")." name=$day_name $options>";
            if ( !$def_day && !$prev_day )
                $str .= "<option value=\"\">day";
            for ( $i=1; $i<=31; $i++ ){
                $disp = ( $i < 10 ? "0$i" : $i );

                $str .= "\n  <option value=$disp";
                if ( $prev_day == $i || (!$prev_day && $def_day == $i) )
                    $str .= " SELECTED";
                $str .= ">$i";
            }
            $str .= "\n</select> / ";
        }

        //month select
        $str .= "<select ".(($with_id)?"id=$month_name":"")." name=$month_name $options>";
        if ( !$def_month && !$prev_month )
            $str .= "<option value=\"\">month";
        for ( $i=1; $i<=12; $i++ )
        {

            $disp = ( $i < 10 ? "0$i" : $i );
            $str .= "\n  <option value=$disp";
            if ( $prev_month == $i || (!$prev_month && $def_month == $i) )
                $str .= " SELECTED";
            $str .= ">".$this->m2month($i);
        }
        $str .= "\n</select> / ";

        //year select
        $str .= "<select ".(($with_id)?"id=$year_name":"")." name=$year_name $options>";
        if ( !$def_year && ! $prev_year)
            $str .= "<option value=\"\">year";
        if ( $min_year == "today")
            $min_year = $today_year;
        elseif ( !$min_year )
            $min_year = $today_year - 2;

        if ( $max_year == "today" || !$max_year)
            $max_year = $today_year;

        for ( $i=$min_year; $i<=$max_year; $i++)
        {	$str .= "\n<option value=$i";
            if ( $i == $prev_year || (!$prev_year && $def_year == $i)  )
                $str .= " SELECTED";
            $str .= ">$i";
        }
        $str .= "\n</select>";

        echo $str;
    }


    public function time_selector ( $hour_name, $min_name, $options="", $default="")
    {

    }



    public function splitDate( $pg_timestamp )
    {
        if ( strstr($pg_timestamp, "/") )
            $delim = "/";
        elseif ( strstr($pg_timestamp, "-") )
            $delim = "-";

        if ( $delim )
        {	//get date part
            $date = strtok($pg_timestamp, " ");
            $d_arr = explode($delim, $date);
            $year  = $d_arr[0];
            $month = $d_arr[1];
            $day   = $d_arr[2];

            //get time part
            $time = strtok(" ");
            $t_arr = explode(':', $time);
            $hour  = $t_arr[0];

            $minute = $t_arr[1];

            $second = strtok($t_arr[2], '.');
            $second = strtok($second, '+');
        }
        else
        {	//mysql-type timetamp
            $year  = substr($pg_timestamp, 0, 4);
            $month = substr($pg_timestamp, 4, 2);
            $day   = substr($pg_timestamp, 6, 2);
            $hour   = substr($pg_timestamp, 8, 2);
            $minute   = substr($pg_timestamp, 10, 2);
            $second   = substr($pg_timestamp, 12, 2);
        }
        $arr = array("year"=>$year, "month"=>$month, "day"=>$day,
            "hour"=>$hour, "minute"=>$minute, "second"=>$second);

        return $arr;
    }

    public function getTimeOnly ( $dbTimestamp)
    {  $ts = splitDate($dbTimestamp);
        $time = $ts['hour'].":".$ts['minute'].":".$ts['second'];
        return $time;
    }

    public function isValidDateString ($date_str)
    {  $db_date_arr = explode('-',$date_str);

        $year = (int)$db_date_arr[0];
        $month = (int)$db_date_arr[1];
        $day = (int)$db_date_arr[2];

        return checkDate($month, $day, $year);
    }

    public function extractTime ($date)
    {  $date_arr =UtilityFunctions::splitDate($date);
        $hour  = $date_arr["hour"];
        $minute  = $date_arr["minute"];
        $second  = $date_arr["second"];

        return  "$hour:$minute:$second";
    }


    public function shorterDate ( $date, $show_time=false, $newline=false, $show_seconds=false)
    {  $date_arr =UtilityFunctions::splitDate($date);
        $year  = $date_arr["year"];
        $month =UtilityFunctions::removeLeadingZero($date_arr["month"]);
        $day   =UtilityFunctions::removeLeadingZero($date_arr["day"]);
        $hour  = $date_arr["hour"];
        $minute  = $date_arr["minute"];
        $second  = $date_arr["second"];

        $mktime = mktime($hour, $minute, $second, $month, $day, $year);

        $time_format = ( $show_seconds ?  'H:i:s' : 'H:i' );

        if ( $show_time )
            if ( $newline )
                $date = date('j/n/y', $mktime)."<br>".date($time_format, $mktime);
            else
                $date = date("j/n/y $time_format", $mktime);
        else
            $date = date('j/n/y', $mktime);

        return  $date;
    }

    public function checkTime($hour, $min, $sec)
    {  if ( $hour < 0 || $hour > 23 )
        return false;

        if ( $min < 0 || $min > 59 )
            return false;

        if ( $sec < 0 || $sec > 59 )
            return false;

        return true;
    }

    public function secondsToDisplay ($php_timestamp, $showtime=true)
    {   return UtilityFunctions::shortdate(date('Y-m-d H:i:s',$php_timestamp),$showtime);
    }


    public function sqlTimestampToY_M_D ( $field_name )
    {  return "to_char($field_name, 'YYYY-MM-DD')";
    }

    public function sqlTimestampToY_M ( $field_name)
    {  return "to_char($field_name, 'YYYY-MM')";
    }

    public function sqlTimestampToY_M_D_H ( $field_name)
    {  return "to_char($field_name, 'YYYY-MM-DD HH24')";
    }

    public function sqlTimestampToY_M_D_H_I ( $field_name)
    {  return "to_timestamp($field_name, 'YYYY-MM-DD HH24:MI')";
    }

    public function sqlTimestampToY_M_D_H_I_S ( $field_name)
    {  return "to_timestamp($field_name, 'YYYY-MM-DD HH24:MI:SS')";
    }

    public function sqlTimestamp ( $field_name, $timezone=false)
    {
        if ( $timezone )
            return $field_name;
        else
        {  return "to_timestamp($field_name, 'YYYY-MM-DD HH24:MI:SS')";
        }

        return $str;
    }

    public function toDatabaseDate ($day, $month, $year, $time="00:00:00")
    {
        return "$year-".$this->addLeadingZero($month)."-".$this->addLeadingZero($day);
    }


    public function toDatabaseDateTime ($day, $month, $year, $time="00:00:00")
    {
        return "$year-".$this->addLeadingZero($month)."-".$this->addLeadingZero($day)." $time";
    }

    public function toDatabaseTimestamp ($day, $month, $year, $time="00:00:00")
    {  return UtilityFunctions::toDatabaseDateTime ($day, $month, $year, $time);
    }

    public function toSQLTimestamp ($day, $month, $year, $time="00:00:00")
    {  $month =UtilityFunctions::addLeadingZero($month);
        $day =UtilityFunctions::addLeadingZero($day);

        return "$year-$month-$day $time";
    }

    public function toYYYY_M_D_H ($day, $month, $year, $time="00")
    {  $month =UtilityFunctions::addLeadingZero($month);
        $day =UtilityFunctions::addLeadingZero($day);

        return "$year-$month-$day $time";
    }


    public function toYYYY_M_D ($day, $month, $year)
    {  $month =UtilityFunctions::addLeadingZero($month);
        $day =UtilityFunctions::addLeadingZero($day);

        return "$year-$month-$day";
    }


    public function toYYYY_M ($month, $year)
    {	$month =UtilityFunctions::addLeadingZero($month);

        return "$year-$month";
    }


    public function phpTsToDb ($php_timestamp)
    {  return date('Y-m-d H:i:s',$php_timestamp);

    }


    public function dbTsToPhpTs ( $db_timestamp )
    {
        return strtotime($db_timestamp);
    }

    public function dbDateToday($showtime=false)
    {  return date('Y-m-d'); //postresql database format YYYY-MM-DD
    }


    public function databaseTimestampToday()
    {	return date('Y-m-d H:i:s');
    }

    public function getReadableDate($timestamp){
        $now = time();
        //test
        //$timestamp = $now - (60 * 60 * 24 * 31);

        $time_diff = $now - $timestamp;
        $daydiff   = floor($time_diff / (60 * 60 * 24));

        $ret = "";

        if($time_diff < 60){
            $ret = $time_diff . "s ago";
        }elseif($time_diff < 60 * 5){
            $ret = floor($time_diff / 60) . "m ago";
        }elseif($time_diff < 60 * 30){
            $ret = (floor($time_diff / (60 * 5)) * 5) . "m ago";
        }elseif($time_diff < 60 * 60){
            $ret = (floor($time_diff / (60 * 10)) * 10) . "m ago";
        }elseif($daydiff == 0){
            $ret = floor($time_diff / (60 * 60)) . "h ago";
        }elseif($daydiff == 1){
            $ret = "yesterday";
        }elseif($daydiff <= 30){
            $ret = $daydiff . " days ago";
        }elseif($daydiff <= 365){
            $ret = floor($daydiff / 30) . " months ago";
        }else{
            $ret = floor($daydiff / 365) . " years ago";
        }

        return "<span class='tip'>$ret</span>";
    }

//Modificate tutte le query Manuel Rinaldi tolto TO_CHAR
    public function checkSingleUserLogged($user_id, $sessionID){
        global $memcached;
        if(is_null($user_id)) return false;
        $value = $memcached->get($user_id);
        if($value != $sessionID){
            session_destroy();
            return false;
        }
        return true;
    }
    public function generateSessionId(){
        return md5(uniqid(microtime()) . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
    }
    public function browserName() {
        if ( strstr(strtoupper($_SERVER["HTTP_USER_AGENT"]), "MSIE") )
            return "ie";
        else
            return "netscape";
    }

    public function getMagic() {
        $user_agent = $_SERVER["HTTP_USER_AGENT"];
        $accept     = $_SERVER["HTTP_ACCEPT"];
        $accept_lang= $_SERVER["HTTP_ACCEPT_LANGUAGE"];
        $accept_enc = $_SERVER["HTTP_ACCEPT_ENCODING"];
        $accept_chs = $_SERVER["HTTP_ACCEPT_CHARSET"];
        $ipaddress  =UtilityFunctions::getIpAddress();
        return md5($user_agent.$accept.$accept_lang.$accept_enc.$accept_chs.$ipaddress);
    }

    public function getGamesReturn($win, $bet){
        return number_format(($win / $bet) * 100 , 2);
    }


    public function returnRealGamesName($tbl_name){
        $table = explode("_", $tbl_name);
        if(strpos($tbl_name,'Mega_Lotto_Agency')!==false){
            $table=str_replace('_',' ',$tbl_name);
            return $table;
        }
        return $table[0];
    }

    /**
     *
     * @param string $var
     * @param string $relative
     * @desc Prints the value of a variable, inside a div (layer).  If $var is an array, will print key=>value pairs
     */
    public function showVal($var, $position='relative') {

    }

    /**
     *
     * @param string $var
     * @param string $relative
     * @desc aliases for $showval
     */
    public function printval($var, $position='relative') { return UtilityFunctions::showVal($var, $position='relative'); }
    public function printvar($var, $position='relative') { return UtilityFunctions::showVal($var, $position='relative'); }
    public function showvar($var, $position='relative')  { return UtilityFunctions::showVal($var, $position='relative'); }

    /**
     * @return boolean
     * @param string $str
     * @desc Returns true if a variable contains white space only
     */
    public function isBlank($str) {
        return mb_ereg("^\s*$", $str);
    }

    /**
     * @return boolean
     * @desc Returns true string contains numbers only
     */
    public function isInteger($var) {
        return  preg_match("/^[0-9]+$/", $var);
    }

    /**
     * @return string
     * @param string $short
     * @desc Returns a string of random charcters
     */
    public function randomString($short=false) {
        mt_srand((double)microtime()*1000000);
        $str = md5 (uniqid (rand(100, 900), true));
        return ( $short ? substr($str, 0, 8) : $str );
    }

    /**
     *
     * @param string $first_name
     * @param string $middle_name
     * @param string $last_name
     * @desc Returns a display-formatted name string
     */
    public function concatNames($first_name, $middle_name, $last_name, $indexed=false) {
        if ( $middle_name )
            $middle_name = " ".$middle_name." ";
        else
            $middle_name = " ";

        if ( $indexed )
            return "$last_name, $first_name$middle_name";
        else
            return "$first_name$middle_name$last_name";
    }


    /**
     * @return boolean
     * @desc Returns true if the customer is logged in (Session variables/cookies are set)
     */
    public function isLoggedIn()  {
        return isset($_SESSION["admin_id"]);
    }


    public function printInDollars($amount, $decimal_places=2, $return=false,$sym=false,$greaterThanZero=false) {
        global $symbol;
        if(!isset($sym) || $sym=='' || is_null($sym)){
            if(!isset($symbol) || $symbol=='' || is_null($symbol)){
                if(isset($_SESSION['currency_html']) && $_SESSION['currency_html']!=''){
                    $symbol = $_SESSION['currency_html']." ";
                }
                elseif (defined('CURRENCY_SYMBOL')) {
                    $symbol = CURRENCY_SYMBOL;
                }
                else {
                    $symbol = ' NaN ';
                }
            }
            else{
                $symbol=trim($symbol)." ";
            }
        }
        else{
            $symbol=trim($sym)." ";
        }
        if ( $return )
            ob_start();

        if ( 0 == $amount && !$greaterThanZero ) {

        } else {
            $val_out = number_format($amount,  $decimal_places, ',' , '.'); //get abs value
            if ( $amount <= 0 ) {
                return '<span style="color:red"><span class="cSymbol">'.$symbol.'</span><span class="cAmount">'.$val_out.'</span></span>';
            } else {
                return '<span class="cSymbol">'.$symbol.'</span><span class="cAmount"> '.$val_out.'</span>';
            }
        }

        if ( $return )
            return ob_get_clean();
    }

    /**
     * @return string
     * @param double amount
     * @param integer cents
     * @desc Returns display formatted currency
     */
    public function getInDollars($amount, $cents=2,$sym=false,$greaterThanZero=false) {
        return UtilityFunctions::printInDollars($amount, $cents, $return=true,$sym,$greaterThanZero);
    }

    /**
     * @return string
     * @param string $num
     * @param string $decimal_places
     * @desc returns an amount in 'fun token' format
     */
    public function getInFunTokens($amount, $cents=2) {
        if ( 0 == $amount ) {
            return '#0';
        }
        elseif ( $amount < 0 ) {
            return "<span style=\"color: red; \">(#" .number_format(abs($amount),  $cents). ")</span>";

        }
        else {
            return "#   ".number_format($amount,  $cents);
        }
    }

    public function printInFunTokens($amount, $decimal_places=2) {
        return UtilityFunctions::getInFunTokens($amount, $decimal_places);
    }

    /**
     *
     * @param string $err_str
     * @desc Die and print formatted error message
     */
    public function dieWithError($err_str) {
        die("<font color=\"red\"><strong>$err_str</strong></font>");
    }

    /**
     * @return String
     * @param string $str
     * @desc Removes non-numeric characters froma string
     */
    public function toNumbersOnly($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    /**
     * @return String
     * @param string $str
     * @desc Alias for toNumbersOnly
     */
    public function toDigitsOnly($str) {
        return UtilityFunctions::toNumbersOnly($str);
    }

    /**
     * @return int
     * @param string $customer_number
     * @desc Returns id (primary key) of customer record with matching number
     */
    public function getPunterIDByCustNum($customer_number)  {
        global $dbh;

        $pun_id =0;
        $sql = "select pun_id from punter where pun_customer_number = $customer_number";
        $rs=$dbh->exec($sql);
        $num_rows = $rs->getNumRows();

        if ( 1 == $num_rows ) {
            $rec = $rs->next();
            $pun_id = $rec['pun_id'];
        }
        return $pun_id;
    }



    /**
     * @return array
     * @param string $punter_id
     * @desc Returns associative array of punter
     */
    public function getPunter($punter_id, $is_customer_num=false, $include_internet_users = false,$forceMaster=false) {
        global $dbh;

        //Select punter details record using punter id
        $sql  = "select pun_id, pun_first_name, pun_middle_name, pun_last_name,pun_betting_type,pun_daily_deposits_limit,pun_login_lock_start,pun_aff_id " .
            ", pun_member_type, pcr_credits, pcr_bonus AS bonus_credits, pun_access, pcr_total_bets" .
            ", pcr_total_wins, pun_email, pun_username, pun_reg_date" .
            ", pun_customer_number, pun_identified, pun_connection_type" .
            ", pun_notes, pun_cou_code, pun_investigate" .
            ", pun_dob, pun_address_line1, pun_address_line2, pun_city_suburb" .
            ", pun_state_province, pun_postcode_zip, pun_phone_business" .
            ", pun_phone_home, pun_phone_mobile, pun_fax, pun_daily_allowance" .
            ", pun_gender, pun_temp_password, pun_num_logins, pun_last_logged_in" .
            ", pcr_reserved_funds, pun_lock_reason, pun_id_documents, pun_preg_code" .
            ", pun_login_lock_start, pun_email_reg_code, pun_sms_reg_code" .
            ", pun_registration_status, pun_pre_registered, pcr_total_deposits" .
            ", pun_password, pcr_total_withdrawals, pun_password_set_time, pun_sre_code" .
            ", pun_last_request_time,pun_sess_id,pun_site_id, pun_num_failed_logins, pun_betting_club, pun_lang, pun_nin_code,pun_preferences,cur_code_for_web,cur_id as cur_cur_id,skn_url, " .


            " j1.jur_name as 'pun_betting club',
          j2.jur_name as 'pun_district',
          j3.jur_name as 'pun_region',
          j4.jur_name as 'pun_nation',
          j1.jur_id as 'pun_betting_club_id',
          j2.jur_id as 'pun_district_id',
          j3.jur_id as 'pun_region_id',
          j4.jur_id as 'pun_nation_id',
          (select pnu_id from partner_users where pnu_local_id = pun_id) partner_user_id
          from punter
              LEFT JOIN punter_credit on pun_id = pcr_pun_id
              LEFT JOIN jurisdiction j1 on pun_betting_club = j1.jur_id
              LEFT JOIN jurisdiction j2 on j1.jur_parent_id = j2.jur_id
              LEFT JOIN jurisdiction j3 on j2.jur_parent_id = j3.jur_id
              LEFT JOIN jurisdiction j4 on j3.jur_parent_id = j4.jur_id
              LEFT JOIN currency on j1.jur_currency=cur_id
              LEFT JOIN skins on pun_site_id=skn_id
         where ";

        if ( $is_customer_num )
            $sql .= " pun_customer_number = $punter_id";
        else
            $sql .= " pun_id = $punter_id";

        if ( ! empty($_SESSION['admin_id']) ) {
            //Filter punters according to their jurisdiction and the admin user's jurisdiction

            if ( 'club' == $_SESSION['jurisdiction_class'] ) { //If a club admin user
                // only show punters in same club as admin user, unless we're also including
                // internet users (nonfinancial only)
                if($include_internet_users)
                    $sql .= " AND (pun_betting_club = " . $_SESSION['jurisdiction_id'] . " OR " .
                        " (pun_betting_club = (SELECT jur_id FROM jurisdiction WHERE jur_name = 'Internet' AND jur_class = 'club') AND pun_member_type = 'NONFINANCIAL')) ";
                else
                    $sql .= " and pun_betting_club = " . $_SESSION['jurisdiction_id'];
            }
            elseif ( 'district' == $_SESSION['jurisdiction_class'] ) { //If a district manager admin user
                // only select punters where their betting club (bottom level jurisdiction)
                // is under the admin user's district
                $sql .= ' AND pun_betting_club IN' .
                    '       (   SELECT jur_id FROM jurisdiction' .
                    '           WHERE jur_parent_id = ' . $_SESSION['jurisdiction_id'] .
                    '       )';
            }
            elseif ( 'region' == $_SESSION['jurisdiction_class'] )  { //If a region manager admin user
                // only select punters where their betting club (bottom level jurisdiction)
                // is under the admin user's district
                // select only  records within admin user's jurisdiction
                $sql .= ' AND (pun_betting_club IN ' .
                    '     (SELECT jur_id FROM jurisdiction WHERE jur_parent_id IN ' .
                    '         (  SELECT jur_id FROM jurisdiction ' .
                    '             WHERE jur_parent_id = ' .$_SESSION['jurisdiction_id'] .
                    '         )' .
                    '     )';

                if($_SESSION["aty_code"] == "SKINMANAGER"){
                    $skin_id =UtilityFunctions::getSkinClubId($_SESSION["jurisdiction_id"]);
                    $sql .= " OR pun_betting_club = $skin_id";
                }

                $sql .= ")";
            }
            elseif ( 'nation' == $_SESSION['jurisdiction_class'] ) { // If a nation manager admin user
                $sql .= ' AND pun_betting_club IN ' .
                    '     (SELECT jur_id FROM jurisdiction WHERE jur_parent_id IN ' .
                    '        (SELECT jur_id FROM jurisdiction WHERE jur_parent_id IN ' .
                    '            (  SELECT jur_id FROM jurisdiction ' .
                    '                WHERE jur_parent_id = ' .$_SESSION['jurisdiction_id'] .
                    '            )' .
                    '        ) ' .
                    '     )  ';
            }
            else {
                if ( 'casino' != $_SESSION['jurisdiction_class'] ) {
                    UtilityFunctions::dieWithError("Invalid user Jurisdiction Class!");
                }
            }
        }
        if($forceMaster){
            $rs = $dbh->exec($sql,false,true);

        }else{
            $rs = $dbh->exec($sql);
        }
        $num_rows = $rs->getNumRows();

        $new_row = null;
        if ( $num_rows > 0 ){
            $rec = $rs->next();
            $new_row = array();
            foreach ( $rec as $colname => $val )
                $new_row[$this->removeTablePrefix($colname)] = $val;

            $new_row['balance'] = $new_row['credits'];
            $new_row['available_balance'] = $new_row['credits'] - $new_row['reserved_funds'];
            $new_row['address1'] = $new_row['address_line1'];
            $new_row['address2'] = $new_row['address_line2'];
            $new_row['country_code'] = $new_row['cou_code'];
            $new_row['country'] = $new_row['cou_code'];
            $new_row['full_name'] =UtilityFunctions::concatNames($new_row['first_name'],$new_row['middle_name'],$new_row['last_name']);
            $new_row['bonus_credits'] = $rec["bonus_credits"];

            $timeout_end_mt =UtilityFunctions::dbTsToPhpTs($new_row['last_request_time']) + 3600;
            $new_row['sess_timeout'] = mktime() > $timeout_end_mt;
            $new_row['bonus_credits'] = $rec["bonus_credits"];
            $new_row['partner_user_id'] = $rec["partner_user_id"];
        }
        return $new_row;
    }


    public function getCustomerByAuth($username, $password) {
        global $dbh;

        $password = md5($password);

        //Select punter details record using punter id
        $sql  = "select pun_id, pun_first_name, pun_middle_name, pun_last_name";
        $sql .= ", pun_member_type, pcr_credits, pcr_bonus AS bonus_credits, pun_access, pcr_total_bets";
        $sql .= ", pcr_total_wins, pun_email, pun_username,  pun_reg_date";
        $sql .= ", pun_customer_number, pun_identified, pun_connection_type";
        $sql .= ", pun_notes, pun_cou_code, pun_investigate";
        $sql .= ", pun_dob, pun_address_line1, pun_address_line2, pun_city_suburb";
        $sql .= ", pun_state_province, pun_postcode_zip, pun_phone_business";
        $sql .= ", pun_phone_home, pun_phone_mobile, pun_fax, pun_daily_allowance";
        $sql .= ", pun_gender, pun_temp_password, pun_num_logins, pun_last_logged_in";
        $sql .= ", pcr_reserved_funds, pun_lock_reason, pun_id_documents, pun_preg_code";
        $sql .= ", pun_login_lock_start, pun_email_reg_code, pun_sms_reg_code";
        $sql .= ", pun_registration_status, pun_pre_registered, pcr_total_deposits";
        $sql .= ", pun_password, pcr_total_withdrawals, pun_password_set_time, pun_sre_code";
        $sql .= ", pun_last_request_time";
        $sql .= "  FROM punter, punter_credit WHERE";
        $sql .= "  pun_username = '$username' and pun_password = '$password'";
        $sql .= "  AND pun_id = pcr_pun_id";

        $rs = $dbh->exec($sql);
        $num_rows = $rs->getNumRows();

        if ( $num_rows > 0 ) {
            $rec = $rs->next();

            foreach ( $rec as $colname => $val )
                $new_row[$this->removeTablePrefix($colname)] = $val;

            $new_row['balance'] = $new_row['credits'];
            $new_row['address1'] = $new_row['address_line1'];
            $new_row['address2'] = $new_row['address_line2'];
            $new_row['available_balance'] = $new_row['credits'] - $new_row['reserved_funds'];
            $new_row['country_code'] = $new_row['cou_code'];
            $new_row['country'] = $new_row['cou_code'];
            $new_row['full_name'] =UtilityFunctions::concatNames($new_row['first_name'],$new_row['middle_name'],$new_row['last_name']);
            $new_row['available_balance'] = $new_row['credits'] - $new_row['reserved_funds'];

            $timeout_end_mt =UtilityFunctions::dbTsToPhpTs($new_row['last_request_time']) + 3600;
            $new_row['sess_timeout'] = mktime() > $timeout_end_mt;
            $new_row['bonus_credits'] = $rec["bonus_credits"];

        }
        return $new_row;
    }

    /**
     * @return array
     * @param string $punter_id
     * @desc alias for getPunter
     */
    public function getCustomer ($customer_id, $is_customer_num=false, $include_internet_users = false) {
        return UtilityFunctions::getPunter($customer_id, $is_customer_num, $include_internet_users);
    }

    /**
     * @return array
     * @param string $punter_id
     * @desc Returns associative array of punter
     */
    public function removeTablePrefix($column_name, $prefix='') {
        if ( $prefix && substr($column_name, 0, 3) != $prefix ) {  //if prefix specified and column doesn't have prefix
            return $column_name;                                  //then return the column as-is
        }
        return substr($column_name, 4, strlen($column_name)-4);
    }

    public function sendToWebApp($DataToSend,$WebAppAddr='http://wsap.cslivegames.net:8080/services/InternalService') {
        error_log('Sending data to webapp: '.$DataToSend);
        $ch = curl_init ($WebAppAddr);
        curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $DataToSend );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        $result = curl_exec ( $ch );
        error_log('Received: '.$result);
        return $result;
    }


    /**
     * @return array
     * @desc Returns array indexed by game_id punter, containing array of punters
     */
    public function getPunterSessions() {
        $punter_sessions = array();

        //send request to gameserver to obtain list of punters currently playing
        if ($sock = fsockopen("10.15.0.7", 60001, $errno, $errstr, 30)) {  //attempt to open socket to localhost:3032
            $request = "4\n";
            fwrite($sock, $request); //send request

            while ( $line = fgets($sock, 1024) ) {
                $arr = explode(";", $line);  //split comma-delimited string into array elements
                $game_id       = $arr[0];   //first token
                $total_players = $arr[1];   //second token
                $punters       = $arr[2];  //list of punter session strings "pun_id:session_start_time:member_type"

                //explode into punter session strings such that each sell contains pun_id,session_start,member_type
                $punters_sessions_arr   = explode(',', $arr[2]);
                array_pop($punters_sessions_arr); //since comma at the end of punter list, remove last cell

                //Iterate through array of punter session strings
                foreach ( $punters_sessions_arr as $key => $val ) {
                    $punter_session = explode(':', $val);
                    $id = $punter_session[0];
                    $session_start = $punter_session[1];
                    $member_type = $punter_session[2];

                    //store customer sessions for each game
                    $punter_sessions[$game_id][$id] = array('session_start'=>$session_start, 'member_type'=>$member_type);
                }
            }
            fclose($sock);
        }
        else
            return;

        return $punter_sessions;
    }

    public function getConnectedClients() {
        $connected_clients = array();
        if ($sock = fsockopen("localhost", 50000, $errno, $errstr, 30)) {
            $request = "lusers\n";
            fputs($sock, $request);
            $buf = "";
            while ($line = fgets($sock, 1024)) {
                $buf .= $line;
            }
            $clients_arr = explode(',', $buf);
            array_pop($clients_arr);
            foreach ($clients_arr as $client) {
                list($pun_id, $pun_username) = split(":", $client);
                $connected_clients[$pun_id] = $pun_username;
            }
            fclose($sock);
        }
        return $connected_clients;
    }

    public function sendPunterCredits($pun_id, $console_port) {
        return true;
        if (!is_numeric($pun_id))
            return false;
        if ($sock = fsockopen("10.10.0.2", $console_port , $errno, $errstr, 30)) {
            $request = "sendCredits,$pun_id\n";
            fputs($sock, $request);
            while ($line = fgets($sock, 1024)) {
                list ($errCode, $errStr) = explode('/', $line);
                if ($errCode == 1) {
                    return true;
                }
            }
            fclose($sock);
        }
        return false;
    }


    public function disconnectClient($pun_id) {
        if (!is_numeric($pun_id))
            return false;
        if ($sock = fsockopen("localhost", 50000, $errno, $errstr, 30)) {
            $request = "kick,$pun_id\n";
            fputs($sock, $request);
            $buf = "";
            while ($line = fgets($sock, 1024)) {
                $buf .= $line;
            }
            fclose($sock);
            if (substr($buf, 0, 1) == "1") {
                return true;
            }
        }
        return false;
    }

    /**
     * @return array
     * @param pun_id
     * @param sessions
     * @desc Checks if a punter is logged in and playing a game; $sessions can be supplied to reduce overhead if it contains punter sessions already
     */
    public function punterIsPlaying( $pun_id, $sessions="" ) {
        global $conn;

        if (defined('DYNAMIC_RECHARGE') && DYNAMIC_RECHARGE == true)
            return false;

        if ( !is_array($sessions) )
            $sessions =UtilityFunctions::getPunterSessions();

        if ( ! $sessions )  //gameserver is not running
            return false;

        foreach ( $sessions as $game_id =>  $punter_sessions_arr )
            if ( $punter_sessions_arr[$pun_id]  )
                return true;
        return false;
    }





    /**
     * @return int
     * @param string name
     * @desc Returns the name of the country with id $country_id
     */
    public function getCountryName($country_code) {
        global $dbh;

        $sql = "SELECT cou_name from country where cou_code = '$country_code'";
        $rs = $dbh->exec($sql);

        if ( $rs->getNumRows() > 0 ) {
            $rec = $rs->next();
            $country_name = $rec['cou_name'];
        }
        return $country_name;
    }


    public function getCustomerProfiles() {
        global $dbh;
        $sql = "SELECT * from punter_profiles";
        $rs = $dbh->exec($sql);
        return $rs;
    }
    /**
     * @return int
     * @param int country_id
     * @desc Returns a three-character country code
     */
    public function getCountryCode($country_id) {
        global $dbh;

        $sql = "select cou_code_three_chars from country where cou_id = $country_id";
        $rs = $dbh->exec($sql);

        if($rs->getNumRows() > 0) {
            $rec = $rs->next();
            $country_code = $rec['cou_code_three_chars'];
        }
        return $country_code;
    }

    public function getCountryCode2Chars($country_id){
        global $dbh;
        $country_code = "US";
        $sql = "select cou_code_two_chars from country where cou_id = $country_id";
        try {
            $rs = $dbh->queryRow($sql);
            if ( count($rs) > 0 ) {
                $country_code = $rs['cou_code_two_chars'];
            }
        } catch (Exception $e) {}

        return $country_code;
    }

    public function getCountry($country_code){
        global $dbh;
        $sql = "select cou_id, cou_code, cou_code_three_chars, cou_dns_code, cou_phone_code, cou_name from country where cou_code = ".$dbh->prepareString($country_code);
        $country_rec = $dbh->queryOne($sql);

        return $country_rec;
    }

    /**
     * @return boolean
     * @param int country_id
     * @desc Returns true if the customer has credit card deposit records
     */
    public function hasDepositedByCreditCard($pun_id) {
        global $dbh;

        $cnt = $dbh->countQuery("select count(*) from customer_transaction where ctr_pun_id = $pun_id and ctr_pme_code = 'CRD'");
        return $cnt > 0;
    }

    /**
     * @return string
     * @desc Returns IP address of client
     */
    public function getIpAddress() {
        return ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
    }

    /**
     *
     * @desc Recordsactivity of a customer
     */
    public function doCustomerLog($pun_id, $log_type,$log_data='') {
        global $dbh;

        $ip_address =UtilityFunctions::getIpAddress();
        $sql  = "insert into customer_log";
        $sql .= " (clg_id, clg_time, clg_pun_id, clg_clt_code, clg_data, clg_ip_address)";
        $sql .= " values(nextval('seq_clg_id'), CURRENT_TIMESTAMP, $pun_id, '$log_type', '$log_data', '$ip_address')";

        $dbh->exec($sql);
    }

    public function getPunterGroups($pun_id) {
        global $dbh;
        $pun_groups = array();
        $sql  = "select pcg_cgr_code FROM punter_cgroup WHERE pcg_pun_id=$pun_id";
        $res = $dbh->exec($sql);
        while($res->hasNext()) {
            $res_data = $res->next();
            $pun_groups[] = $res_data["pcg_cgr_code"];
        }
        return $pun_groups;
    }

    /**
     * @return boolean
     * @param string $group_code
     * @param int $pun_id
     * @desc Returns true if the customer $pun_id is in the group $group_code
     */
    public function punterInGroup($group_code, $pun_id) {
        global $dbh;

        $sql  = "select count(*) from punter_cgroup";
        $sql .= " where pcg_cgr_code = '$group_code' and pcg_pun_id = $pun_id";
        $count = $dbh->countQuery($sql);
        return ($count > 0 );
    }

    public function punterInCCGroups($pun_id) {
        global $dbh;
        $sql  = "SELECT count(*) FROM punter_cgroup";
        $sql .= " WHERE pcg_pun_id=$pun_id AND (pcg_cgr_code='WMC' OR pcg_cgr_code='ITC')";
        $count = $dbh->countQuery($sql);
        return ($count > 0);
    }

    /**
     *
     * @param string $group_code
     * @param int $pun_id
     * @desc Adds the customer with id $pun_id to the group $group_code
     */
    public function addToGroup($group_code, $pun_id) {
        global $dbh;

        $sql = " insert into punter_cgroup (pcg_pun_id,  pcg_cgr_code)";
        $sql .= " values ($pun_id,'$group_code')";
        $dbh->exec($sql);
    }

    /**
     *
     * @param string $group_code
     * @param int $pun_id
     * @desc Removes the customer with id $pun_id to the group $group_code
     */
    public function removeFromGroup($group_code, $pun_id) {
        global $dbh;

        $sql  = "DELETE FROM punter_cgroup";
        $sql .= " WHERE pcg_pun_id = $pun_id and pcg_cgr_code = '$group_code'";
        $dbh->exec($sql);
    }

    /**
     * @return boolean
     * @param string $url
     * @desc returns true if $url begins with 'https'
     */
    public function isSecureUrl ($url) {
        return substr($url, 0, 5) == 'https';
    }

    /**
     * @return boolean
     * @param string $var
     * @desc Used to prevent multiple submissions; registers $var that was sent in the request
     */
    public function registerSubmitVar($var_name) {
        $var_val = ( isset($_POST[$var_name])  ? $_POST[$var_name] : $_GET[$var_name] );
        $_SESSION[$var_name] = $var_val;
    }

    /**
     * @return boolean
     * @param string $var
     * @desc Used to prevent multiple submissions; returns true if a POST/GET variable has been recorded in the session
     */
    public function isRepeatSubmit($var_name) {
        $val =UtilityFunctions::getPostGetVar($var_name);
        return ( isset($_SESSION[$var_name]) && $_SESSION[$var_name] == $val);
    }

    /**
     * @return boolean
     * @param string $var
     * @desc Used to prevent multiple submissions; unregisters a submit variable so a request can be repeated
     */
    public function unregisterSubmitVar($var_name) {
        unset($_SESSION[$var_name]);
    }

    /**
     * @return boolean
     * @param string $number
     * @desc checks if string is in a correct currency format
     */
    public function isValidMoney($number) {
        $pattern = "/^[0-9]*(\.{1,1}[0-9]{1,2}){0,1}$/";
        return preg_match($pattern, $number);
    }


    /**
     * @return boolean
     * @param string $number
     * @desc alias for isValidMoney
     */
    public function isMoney($number) {
        return UtilityFunctions::isValidMoney($number);
    }


    /**
     * @return boolean
     * @param string $number
     * @desc Returns true if $number looks like a phone number
     */
    public function isValidPhoneNumber ( $number )
    {	$PHONE_PATTERN = "^[0-9\-\+\(\) ]+$";

        return  mb_ereg ($PHONE_PATTERN, $number);
    }


    /**
     * @return array
     * @param string $number
     * @desc Returns array [config key]=>value by reading in the config file
     *       specified in $file_path
     */
    public function getCfgFile($file_path)
    {  if ( file_exists($file_path) )
    {  if ( $f = fopen($file_path, 'r') )
    {  while ( $line = fgets($f, 2048) )
    {  $arr = explode("=", $line);
        $directive = $arr[0];
        $value = ereg_replace("\n", '', ereg_replace("\r", "", $arr[1]));
        $cfg[$directive] = $value;
    }
        fclose($f);
    }
    else
        UtilityFunctions::dieWithError("cannot open: CFG".( DEBUG ? $file_path : ''));
    }
    else
        UtilityFunctions::dieWithError("does not exist: CFG".( DEBUG ? $file_path : ''));

        return $cfg;
    }



    /**
     * @return int
     * @param string $sre_code
     * @param boolean $surname
     * @desc Returns name in proper case
     *
     */
    public function salesCodeExists ( $sre_code )
    {  global $dbh;

        $sql  = "select count(*) from admin_user";
        $sql .= " where lower(aus_sales_code) = '".strtolower($sre_code)."'";

        return $dbh->countQuery($sql);
    }


    /**
     * @return string
     * @param int $number
     * @desc Adds leading zero to a single-digit number
     *
     */
    public function addLeadingZero ($number)
    {  if ( $number < 10 )
        if ( strlen($number) < 2 )
            return "0$number";
        return $number;
    }


    /**
     * @return string
     * @param string $url
     * @desc returns array with directory names in conexutive order
     *
     */
    public function getDirs($url="")
    {  if ( ! $url ) //if no argument, use current script path
        $url = $_SERVER['SCRIPT_NAME'];

        $dir_arr = explode('/', $url);
        array_shift($dir_arr); //blank before first '/'
        array_pop($dir_arr);//don't want filename or blank after last '/'
        return $dir_arr;
    }

    /**
     * @return boolean
     * @param string $page_name
     * @desc returns true if page has pop or popup at end of filename
     *
     */
    public function isPopupPage($page_name) {
        $arr = explode ('.', $page_name);
        $filename = $arr[0];
        return ( substr ($filename, -4) == '_pop' || substr ($filename, -6) == '_popup' );
    }


    /**
     * @return string
     * @param string $varname
     * @desc returns contents of post or get variable (if exists)
     *
     */
    public function getPostGetVar($var_name) {
        return ( isset($_POST[$var_name]) ? $_POST[$var_name] : $_GET[$var_name] ) ;
    }

    /**
     *
     * @param string $var_name
     * @desc Makes a POST or GET variable global
     *
     */
    public function globalize($var_name,$func="") {
        return UtilityFunctions::globalise($var_name,$func);
    }

    public function globalizeFloat($var_name) {
        UtilityFunctions::globalise($var_name, "floatval");
    }

    public function globalizeInt($var_name) {
        UtilityFunctions::globalise($var_name, "intval");
    }

    public function globalizeStr($var_name) {
        UtilityFunctions::globalise($var_name, "strval");
    }

    public function globalizeSql($var_name) {
        UtilityFunctions::globalise($var_name, "addslashes");
    }

    public function globalisePost($var_name) {
        if ( $_POST[$var_name] )
            $GLOBALS[$var_name] = $_POST[$var_name];
    }

    public function globalise($var_name, $func="") {
        $value = ( $_POST[$var_name] ? $_POST[$var_name] : $_GET[$var_name]);

        if ( $func )
            @$value = $func($value);

        $GLOBALS[$var_name] = $value;
        return $value;
    }

    /**
     * @return boolean
     * @param string $varname
     * @desc returns true if a contact medium for a customer has been confirmed .e.g mobile, email
     *
     */
    public function isConfirmed($customer_id, $comm_medium) {
        global $dbh;

        $sql  = "select pun_confirmation_list from punter";
        $sql .= " where pun_id = $customer_id";
        $rs   = $dbh->exec($sql);

        if ( $rs->getNumRows() == 1 ) {
            $rec = $rs->next();
            $confirmation_list = $rec['pun_confirmation_list'];

            if ( $confirmation_list ) {
                $arr = explode(',', $confirmation_list);
                return in_array(strtolower($medium), $arr);
            }
        }
        return false;
    }


    /**
     * @return array
     * @param int $id
     * @desc returns associative array of columns for admin user with id == $id
     *
     */
    public function getAdminUser($id) {
        global $dbh;

        $sql  = "SELECT aus_id, aus_name, aus_username, aus_password, aus_aty_id, aus_access";
        $sql .= ", aus_last_logged_in, aus_num_logins, aus_email, aus_address1, aus_address2, aty_name";
        $sql .= ", aus_city_suburb, aus_state_province, aus_postcode_zip, aus_phone_home, aus_phone_work";
        $sql .= ", aus_phone_mobile, aus_cou_id, aus_notes,  aus_sales_code ";
        $sql .= " FROM admin_user, admin_user_type";
        $sql .= " where aus_id = $id and aus_aty_id = aty_id";

        $rs = $dbh->queryRow($sql);

        if ( count($rs)!=0) {
            return UtilityFunctions::removeTablePrefixFromKeys($rs,'aus');
        }
        return;
    }


    /**
     * @return array
     * @param int $id
     * @desc returns associative array of columns for admin user with id == $id
     *
     */
    public function removeTablePrefixFromKeys($arr,$prefix=""){
        foreach( $arr as $key => $val )
            $arr2[$this->removeTablePrefix($key,$prefix)] = $val;
        return $arr2;
    }


    /**
     * @return string
     * @param int $id
     * @desc returns name of a game with gam_id == $id
     *
     */
    public function getGameName($id){
        global $dbh;
        $rs=$dbh->queryOne("select gam_name from game where gam_id= $id");
        $game_name = $rs;
        return $game_name;
    }

    /**
     *
     * @param string $path
     * @param bollean $has_ext
     * @param string $session_id
     * @param int $min_atime_diff
     * @desc Cleans the temporary download files created for the current session
     */
    public function cleanTempFiles ($path, $has_ext=false, $session_id='', $min_atime_diff=0) {
        $time = mktime();
        clearstatcache();

        if ( $dir = opendir($path) ) {
            while ( $file_name = readdir($dir) ) {
                $file_path = "$path/$file_name";

                $nam_arr  = explode ('.', $file_name);
                $ext = $nam_arr[count($nam_arr)-1];

                if ( 'html' != $ext  && 'log' != $ext && 'lg' != $ext && 'inc' != $ext && 'cfg' != $ext && 'js' != $ext ) {
                    if ( is_file($file_path) ) {
                        $atime = fileatime($file_path);
                        $atime_diff = $time - $atime;
                        //echo "$file_path ".date('d/m/Y H:i:s', fileatime($file_path))."<br>";

                        if ( $atime_diff >  $min_atime_diff ) {
                            $arr = explode('.', $file_name);

                            if ( $has_ext )
                                $file_sid = $arr[count($arr)-2]; //filename.sid.extension
                            else
                                $file_sid = $arr[count($arr)-1]; //filename.sid

                            if ( $session_id ) {
                                if ( $file_sid == $session_id )
                                    unlink($file_path);
                            }
                            else {
                                unlink($file_path);
                            }
                        }
                    }
                }
            }
        }
    }


    /**
     * @return boolean
     * @param string $str
     * @desc Returns true is a string looks like it is utf8 encoded
     */
    public function seems_utf8($str) {
        for ($i = 0; $i < strlen($str); $i++)  {
            if ( ord($str[$i]) < 0x80)  continue;  // 0bbbbbbb
            else if ((ord($str[$i]) & 0xE0) == 0xC0)  $n = 1;    // 110bbbbb
            else if ((ord($str[$i]) & 0xF0) == 0xE0)  $n = 2;    // 1110bbbb
            else if ((ord($str[$i]) & 0xF8) == 0xF0)  $n = 3;    // 11110bbb
            else if ((ord($str[$i]) & 0xFC) == 0xF8)  $n = 4;    // 111110bb
            else if ((ord($str[$i]) & 0xFE) == 0xFC)  $n = 5;    // 1111110b
            else  return false;                                  // Does not match any model

            for ($j = 0; $j < $n; $j++) {                        // n bytes matching 10bbbbbb follow?
                if ((++$i == strlen($str)) || ((ord($str[$i]) & 0xC0) != 0x80))
                    return false;
            }
        }
        return true;
    }


    public function form_head($action=SELF, $name="", $method="POST", $onsubmit="", $noautocomplete=false, $encType = false) {
//        global $page, $header_page, $operation;
//
//        if ( ! $action )
//            $action = SELF;
//        if ( $name )
//            $name_str = " name=\"$name\"";
//        if ( $onsubmit )
//            $onsubmit = " onSubmit=\"$onsubmit\"";
//        if ($encType)
//            $encType=" enctype=\"$encType\"";
//
//        if ( $noautocomplete )
//            $noautocomplete = " autocomplete=\"off\"";
//        else
//            $noautocomplete = "";
//
//
    }


    public function refPage($page_name="", $header_page=""){
        return "/?page=".$page_name."&header_page=".$header_page;
    }
    public function refFormPage($page_name="", $header_page=""){
        return "/?page=".$page_name."&header_page=".$header_page;
    }

    public function pdaRefPage($page_name="", $header_page="") {
        return secure_host."/pda/?page=".$page_name."&header_page=".$header_page;
    }

    public function getPhoneContactString($cust_row) {
        $phone_home = $cust_row['phone_home'];
        $phone_business = $cust_row['phone_business'];
        $phone_mobile = $cust_row['phone_mobile'];
        $fax = $cust_row['fax'];
        $pun_id = $cust_row['id'];

        if ( $phone_home ) {
            $contact_str .= "Home: $phone_home";
            if (UtilityFunctions::isConfirmed($pun_id, 'homephone') )
                $contact_str .= ' <img src="'.image_dir.'/icon_activated_sm.gif">';
            $contact_str .="<br/>";
        }
        if ( $phone_business ) {
            $contact_str .= "Work: $phone_business";
            if (UtilityFunctions::isConfirmed($pun_id, 'businessphone') )
                $contact_str .= ' <img src="'.image_dir.'/icon_activated_sm.gif">';
            $contact_str .="<br>";
        }
        if ( $phone_mobile ) {
            $contact_str .= "Mobile: $phone_mobile";
            if (UtilityFunctions::isConfirmed($pun_id, 'mobilephone') )
                $contact_str .= ' <img src="'.image_dir.'/icon_activated_sm.gif">';
            $contact_str .="<br>";
        }
        if ( $fax ) {
            $contact_str .= "Fax: $fax<br>";

            if (UtilityFunctions::isConfirmed($pun_id, 'fax') )
                $contact_str .= ' <img src="'.image_dir.'/icon_activated_sm.gif">';
            $contact_str .="<br>";
        }
        return $contact_str;
    }

    public function numFailedLogins($pun_id) {
        global $dbh;

        $sql  = "select pun_num_failed_logins";
        $sql .= " from punter where pun_id = $pun_id";
        $rs  = $dbh->exec($sql);
        $row  = $rs->next();
        return $row['num_failed_logins'];
    }

    public function totalBets($customer_id) {
        global $dbh;

        $sql  = "select pcr_total_bets from punter_credit";
        $sql .= " where pcr_pun_id = $customer_id";
        $rs  = $dbh->exec($sql);
        $row  = $rs->next();
        return $row['total_bets'];
    }

    public function deleteCustomer($customer_id) {
        global $dbh;

        $customer =UtilityFunctions::getCustomer($customer_id);

        if ( $customer ) {
            if ( ! $customer['num_logins']) {
                $dbh->begin();

                //delete customer group record if exists
                $sql  = "delete from customer_log";
                $sql .= " where clg_pun_id = $customer_id";
                $dbh->exec($sql);

                //delete customer group record if exists
                $sql  = "delete from punter_cgroup";
                $sql .= " where pcg_pun_id = $customer_id";
                $dbh->exec($sql);


                //delete customer credit record
                $sql  = "delete from punter_credit";
                $sql .= " where pcr_pun_id = $customer_id";
                $dbh->exec($sql);

                //delete customer record
                $sql  = "delete from punter ";
                $sql .= " where pun_id = $customer_id";
                $dbh->exec($sql);
                $dbh->commit();

                $_SESSION['message'] =  "Customer ".$customer['full_name']." has been deleted successfully";
            }
        }
        else {
            $_SESSION['message'] =  "The customer record for ".$customer['full_name']." cannot be deleted, because the customer is a financial member";
        }
    }


    /****** ADMIN  public functionS *****/
    public function adminUserAuthenticated($username, $password){
        global $dbh;
        $md5_pwd = md5($password);
        $sql = "select count(*) from admin_user";
        $sql .= " where aus_username = '$username'";
        $sql .= " and aus_password = '$md5_pwd'";
        $num = $dbh->queryOne($sql);
        return (1 == $num);
    }


    public function clearInvestigation($pun_id) {
        global $conn;

        $sql  = "update punter set pun_investigate = NULL";
        $sql .= " where pun_id = $pun_id";
        UtilityFunctions::sqlExec($conn, $sql);
    }

    public function adminAlert($msg) {
        global $_SESSION;
        $_SESSION['alert_message'] = $msg;
    }

    public function allChecked($checkboxArray) {
        if ( ! is_array($checkboxArray) )
            return false;

        foreach($checkboxArray as $key => $val )
            if ( ! $val )
                return false;
        return true;
    }


    public function arrayHasValueSet ($array) {
        foreach ( $array as $key => $val )
            if ( $val )
                return true;
        return false;
    }

    function nextSequence ( $sequence_name ) {

        $sql = "SELECT last_seq_id(UPPER(".$sequence_name."))";

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

        return $result;

    }




    public function numMembers($group_code) {
        global $dbh;
        $sql  = "select count(*) from punter_cgroup where pcg_cgr_code = '$group_code'";
        $num_members  = $dbh->countQuery($sql);
        return $num_members;
    }
    public function getAllGames() {
        global $dbh;
        $sql = "Select * from game";
        $result = $dbh->doCachedQuery ( $sql, 0 );
        return $result;
    }



    public function getGames () {
        global $dbh;

        if ( ! $dbh )
            $dbh = new DatabaseHandler;

        if ( ! $dbh->isConnected() )
            $dbh->connect();

        $sql  = "select gameid, gamename";//, gty_name, gam_max_bet, gam_min_bet, gam_max_pos_bet, gam_min_pos_bet
        $sql .= " from game ";//, game_type where gam_gty_id = gty_id

        return $dbh->exec($sql);
    }


    public function getAddressString($cust_row) {
//        $address_line1 = $cust_row['address_line1'];
//        $address_line2 = $cust_row['address_line2'];
//        $city_suburb = $cust_row['city_suburb'];
//        $state_province = $cust_row['state_province'];
//        $postcode_zipcode = $cust_row['postcode_zip'];
//        $cou_code = $cust_row['cou_code'];
//        $pun_id = $cust_row['id'];
//
//        $country_arr  =UtilityFunctions::getCountryName($cou_code);
//
//
//        $addr_str = $address_line1;
//        if ( $address_line2 )
//            $addr_str .= "<br>$address_line2";
//        $addr_str .= "<br>$city_suburb";
//
//        if ( $state_province && 'NA' != $state_province && 'N/A' != $state_province)
//            $addr_str .= "<br>$state_province";
//
//        if ( $postcode_zipcode && 'NA' != $postcode_zipcode && 'N/A' != $postcode_zipcode)
//            $addr_str .= "<br>$postcode_zipcode";
//
//        $addr_str .= "<br>$country";
//
//        if (UtilityFunctions::isConfirmed($pun_id, 'address') ) {
//            ob_start();
//
//            $addr_str = ob_get_contents();
//            ob_end_clean();
//        }
//
//        return $addr_str;
    }

    public function checkHashedPassword($username,$password){
        global $dbh;
        $sql = "select AUS_PASSWORD from admin_user";
        $sql .= " where aus_username = '$username'";
        $password_against =md5($dbh->queryOne($sql).$username);
        return ($password == $password_against);
    }


    /****** END ADMIN  public functionS *****/

    public function setEditable() {
        global $mode;

        if ( $mode == "view" )
            echo " onFocus='this.blur()' ";
        else
            echo " onChange='ChangesMade=true'";
    }

    public function emailIsRegistered($email) {
        global $dbh;
        $sql = "select pun_id from punter";
        $sql .= " where (pun_email = '$email' OR pun_username = '$email') AND pun_access = 'allow'";
        $sql .= " and pun_registration_status != 'activation expired' ";
        $rs = $dbh->exec($sql);
        return ($rs->getNumRows() > 0);
    }

    public function ninCodeIsRegistered($nin_code) {
        global $dbh;
        $sql = "select pun_id from punter";
        $sql .= " where pun_nin_code = '$nin_code' AND pun_access = 'allow'";
        $sql .= " and pun_registration_status != 'activation expired' ";
        $rs = $dbh->exec($sql);
        return ($rs->getNumRows() > 0);
    }


    public function isValidEmail ( $email ) {
        $EMAIL_PATTERN = "^[a-zA-Z0-9_\-\+\.]+@{1,1}([a-zA-Z0-9_\-]+\.{1,1}([a-zA-Z0-9_\-\+])+)+$";
        return mb_ereg($EMAIL_PATTERN,$email);
    }



    public function getErrors(){
        global $ERRORS;
        return $ERRORS;

    }

    public function showErrors($only_global = false, $return = false) {
        global $ERRORS, $lang, $isExternalSystem;

        $num_errors = count($ERRORS);
        $s = $num_errors > 1 ? 's' : '';

        $num_printed = 0;
        $out = "";
        $array = array();
        if ($num_errors > 0) {
            $out .= "<div class=error><table>";
            $out .= "  <tr>";
            $out .= "    <td class=error colspan=2>";
            $out .= "     <div class=\"errorbold\">" . $lang->getLang("The following error$s occurred:") . "</div>";
            $out .= "      <table cellpadding=2 cellspacing=0 border=0>";

            for ($i = 0; $i < $num_errors; $i ++) {
                if ($only_global) {
                    if (! empty($ERRORS[$i]['field']))
                        continue;
                }
                $num_printed ++;
                $out .= "  <tr valign=top>";
                $out .= "    <td class=error>-</td>";
                $out .= "    <td class=error>";
                $out .= $ERRORS[$i]["message"];
                $out .= "    </td>";
                $out .= "  </tr>";
                $array['error' . $i] = $ERRORS[$i]["message"];
            }

            $out .= "</table>";
            $out .= "      </td>";
            $out .= "   </tr>";
            $out .= "</table></div>";
            if ($isExternalSystem == 'false') {
                if ($return) {
                    return $out;
                }
                if ($num_printed > 0) {
                    echo $out;
                }
            } else {
                $array['status'] = -100;
                error_log("Reponse: " . json_encode($array));
                return print_r(json_encode($array));
            }
        }
    }

    public function showResult ($only_global=false) {
        global $RESULT;

        $num_result = count($RESULT);
        $s = $num_result > 1 ? 's' : '';

        $num_printed = 0;

        if ($num_result > 0 ) {
            $out .= "<div class='result'><table>";
            $out .= "  <tr>";
            $out .= "    <td class='result' colspan=2>";
            $out .= "     <div class=\"resultbold\">The following message$s for you:</div>";
            $out .= "      <table cellpadding=2 cellspacing=0 border=0>";

            for ( $i=0; $i<$num_result; $i++ ) {
                if ( $only_global ) {
                    if ( ! empty($RESULT[$i]['field']) )
                        continue;
                }
                $num_printed++;

                $out .= "  <tr valign=top>";
                $out .= "    <td class='result'>-</td>";
                $out .= "    <td class='result'>";
                $out .= $RESULT[$i]["message"];
                $out .= "    </td>";
                $out .= "  </tr>";
            }

            $out .= "</table>";
            $out .= "      </td>";
            $out .= "   </tr>";
            $out .= "</table></div>";

            if ( $num_printed > 0 ) {
                echo $out;
            }
        }
    }


    public function printError ( $message ) {

    }


    public function areErrors () {
        global $ERRORS;
        if ($ERRORS)
            return (count($ERRORS) >= 1);
        else
            return 0;
    }

    public function clearErrors() {
        global $ERRORS;
        unset($ERRORS);
    }

    public function addError($field_name, $msg) {
        global $ERRORS, $ERROR_MESSAGES;

        $num_errors = count($ERRORS);

        $ERRORS[$num_errors]["field"] = $field_name;
        $ERRORS[$num_errors]["message"] = $msg;
        $ERROR_MESSAGES[$field_name] = $msg;
    }

    public function addResult($field_name, $msg) {
        global $RESULT, $RESULT_MESSAGES;

        $num_result = count($RESULT);

        $RESULT[$num_result]["field"] = $field_name;
        $RESULT[$num_result]["message"] = $msg;
        $RESULT_MESSAGES[$field_name] = $msg;
    }

    public function clearResult() {
        global $RESULT;
        unset($RESULT);
    }


    public function destroySession() {
        session_destroy();
    }

    public function sessionTimeout() {
        global $dbh, $dirs, $page_name;

        if ( $_SESSION['customer_number'] ) {
            $sql = "update punter set pun_last_request_time = NULL";
            $sql .= " where pun_customer_number = ".$_SESSION['customer_number'];
            $dbh->exec($sql);
        }

        UtilityFunctions::destroySession();

        $dirs =UtilityFunctions::getDirs();

        if ( 'applets' == $dirs[0] ||UtilityFunctions::isPopupPage($page_name) ) {
            UtilityFunctions::jscriptStart();
            UtilityFunctions::jscriptLine("window.opener.location = '".secure_host."/auth/session_timeout.html';");
            UtilityFunctions::jscriptLine("window.close()");
            UtilityFunctions::jscriptEnd();
        }
        else {
            header("Location: ".secure_host.'/auth/session_timeout.html');
        }
        exit;
    }

    public function revokeUserAccess($arg_username="") {
        global $_SESSION;

        $conn =UtilityFunctions::casinoConnect();
        $user = ( $arg_username ? $arg_username : $_SESSION["username"] );
        $sql = "update user set usr_access = 'deny' where usr_username = $user";
        if ( $user ) {
            $sql = "update user set usr_access = 'deny' where usr_username = '$user'";
            UtilityFunctions::sqlExec($conn, $sql);
        }
    }

    public function flagPunterForInvestigation($pun_id) {
        global $conn;

        $sql  = "update punter set pun_investigate = 1";
        $sql .= " where pun_id = $pun_id";
        UtilityFunctions::sqlExec($conn, $sql);
    }

    public function lockAccount($pun_id, $reason="") {
        global $dbh;

        $sql  = "update punter";
        $sql .= " set pun_access = 'deny'";
        $sql .= ", pun_lock_reason = '$reason'";
        $sql .= "where pun_id = $pun_id";
        $dbh->exec($sql);
    }

    public function checkSessionTimeout($page_name) {
        global $dbh, $cookie, $customer_row;

        if ( 'login.html' == $page_name || 'logout.html' == $page_name ||
            'session_timeout.html' == $page_name || 'applet.html' == $page_name ) {
            return false;
        }

        $customer_number =UtilityFunctions::toNumbersOnly($cookie->getFieldValue('customer_number'));

        if (UtilityFunctions::isBlank($customer_number) )
            return true;

        if ( $customer_row ) {
            return $customer_row['sess_timeout'];
        }
        else {
            $sql = "select pun_last_request_time from punter" .
                " where pun_customer_number = $customer_number";
            $rs  =  $dbh->exec($sql);

            if ( $rs->getNumRows() == 1 ) {
                $row = $rs->next();
                $timeout_end_mt = dbTsToPhpTs($row['pun_last_request_time']) + 3600; //convert to seconds ts
                return mktime() > $timeout_end_mt;  //return timeout if now is later than lat request time + 1 hour
            }
        }
        return false;
    }


    public function updateRequestTime($customer_number="") {
        global $dbh, $cookie;

        if ( ! $customer_number )
            $customer_number =UtilityFunctions::toNumbersOnly($cookie->getFieldValue('customer_number'));

        if (UtilityFunctions::isBlank($customer_number) )
            return;

        $sql  = "update punter set pun_last_request_time = CURRENT_TIMESTAMP";
        $sql .= " where pun_customer_number = $customer_number";
        $dbh->exec($sql);
    }


    public function loginOnlyPage($redir_page) {
        if ( !$this->isLoggedIn() ) {
            header("Location: $redir_page");
            exit;
        }
    }

    public function financialMemberOnlyPage($redir_page) {
        if (UtilityFunctions::isLoggedIn() ) {
            if ( $_SESSION['member_type'] != 'FINANCIAL' ) {
                header("Location: $redir_page");
                exit;
            }
        }
        else {
            header("Location: $redir_page");
            exit;
        }
    }


    public function isSecurePage () {
        return (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on");
        //  return $_SERVER['SERVER_PORT'] == SSL_PORT;
    }

    public function fieldInError($field_name) {
        global $ERRORS;

        $num_errors = count($ERRORS);

        for ( $i=0; $i<$num_errors; $i++ )
            if ( $ERRORS[$i]['field'] == $field_name )
                return $ERRORS[$i]['message'];
        return 0;
    }

    public function set_login_sess_vars ($punter_row) {
        global $cookie;

        //register session variables
        $_SESSION["username"]        = $punter_row['username'];
        $_SESSION["pun_id"]          = $punter_row['id'];
        $_SESSION["customer_id"]     = $punter_row['id'];
        $_SESSION["member_type"]     = $punter_row['member_type'];
        $_SESSION["customer_number"] = $punter_row['customer_number'];
        $_SESSION["ip_address"]      =UtilityFunctions::getIpAddress();


        if ( $punter_row['temp_password'] ) {  //to flag that the customer must change their password
            setCookie("chp", 'yes',0,'/');
            $_SESSION["chp"] = 'yes';
        }

        $cookie->setFieldValue('customer_number', $punter_row['customer_number']);
        $cookie->setFieldValue('member_type', $punter_row['member_type']);

        $cookie->set();
    }


    public function doLogin($punter_row, $referrer="") {
        UtilityFunctions::doLoginNoRedirect($punter_row);

        $referrer_t = trim(strtok($referrer, '?'));

        if ( !$referrer_t
            || secure_host.'/auth/logout.html' == $referrer_t
            || nonsecure_host.'/index.html' == $referrer_t
            // || secure_host.'/auth/forgot_password.html' == $referrer_t
            || secure_host.'/auth/session_timeout.html' == $referrer_t
            || secure_host.'/cookies_blocked.html' == $referrer_t
            || ! isSecureUrl($referrer_t)
        )
            $referrer = secure_host."/myaccount/";
        else {
            $ref_arr = parse_url($referrer);

            if ( $ref_arr['host'] != $_SERVER['HTTP_HOST'] )
                $referrer = secure_host."/myaccount/";
        }

        header("Location: $referrer");
        exit;
    }


    public function doLoginNoRedirect($punter_row) {
        global $dbh;

        $sql  = "UPDATE punter " .
            "SET pun_login_lock_start = NULL, " .
            " pun_num_logins = pun_num_logins+1, " .
            " pun_last_logged_in = CURRENT_TIMESTAMP, " .
            " pun_num_failed_logins=0, " .
            " pun_last_request_time = CURRENT_TIMESTAMP, " .
            " pun_sess_id = '" . session_id() . "' " .
            "WHERE pun_id = ".$punter_row['id'];

        $dbh->exec($sql);

        //    if ( "NONFINANCIAL" == $member_type )
        //    {  $sql  = "update punter_credit set pcr_credits = 1000";
        //   	   $sql .= " where pcr_pun_id = ".$punter_row['pun_id']." and pcr_credits < 1000";
        //   	   $dbh->exec($sql);
        //    }

        /* topup user who just logged in) credits where the user has less
        than $1000 and is a non-financial memeber */
        // session_regenerate_id();

        //register session variables
        UtilityFunctions::set_login_sess_vars ($punter_row);
    }



    public function numLogins($pun_id) {
        global $dbh;

        $sql  = "select pun_num_logins";
        $sql .= " from punter";
        $sql .= " where pun_id = $pun_id";
        $rs   = $dbh->exec($sql);

        $row = $rs->next();
        return $row['pun_num_logins'];
    }


    //Querys user table for matching user record
    /**
     * @return unknown
     * @param unknown $username
     * @param unknown $password
     * @desc Enter description here...
     */
    public function authenticate( $username, $password )
    {  global $dbh;

        $password = md5($password);

        $sql  = "select pun_id, pun_member_type, pun_access, pun_first_name" .
            ", pun_customer_number, pun_reg_date, pun_email_reg_code" .
            ", pun_sms_reg_code, pun_temp_password, pun_registration_status" .
            ", pun_confirmation_list, pun_login_lock_start, pun_lang" .
            " from punter where pun_username = '$username'" .
            " and pun_password = '$password' and  pun_registration_status != 'activation expired'";



        $rs   = $dbh->exec($sql);

        if ( $rs->getNumRows() == 1 )
            return $rs->next();
    }

    public function check_swf_login($sid) {
        global $dbh;
        $sanity_chk =  preg_match('/^[A-Za-z0-9]{32,32}$/', $sid);
        if ($sanity_chk) {
            $query = "SELECT pun_id FROM punter WHERE pun_sess_id='$sid'";
            $rs = $dbh->exec($query);
            if ($rs->getNumRows() == 1) {
                $cus_row = $rs->next();
                $cus_id = $cus_row["pun_id"];
                $cus_row =UtilityFunctions::getCustomer($cus_id);
                UtilityFunctions::doLoginNoRedirect($cus_row);
                return $cus_id;
            }
        }
        return 0;
    }


    public function doLoginLock ($customer_id) {
        global $conn;

        $sql  = "update punter set pun_login_lock_start = CURRENT_TIMESTAMP";
        $sql .= " where pun_id = $customer_id";
        UtilityFunctions::sqlExec($conn, $sql);
    }


    public function getLoginLockStart($customer_id) {
        global $conn;

        $sql  = "select pun_login_lock_start from punter";
        $sql .= " where pun_id = $customer_id";
        $res =UtilityFunctions::sqlExec($conn, $sql);
        $num_rows =$this->sqlNumRows($res);
        if ( $num_rows > 0 ) {
            $row =UtilityFunctions::sqlResult($res);
            UtilityFunctions::sqlFreeResult($res);
            $login_lock_start = $row[0];
            return  $login_lock_start;
        }
        return;
    }


    public function removeLoginLock ($customer_id) {
        global $dbh;

        $sql  = "update punter set pun_login_lock_start = NULL";
        $sql .= " where pun_id = $customer_id";
        $dbh->exec($sql);
    }


    public function getMsg($id, $replace_arr="", $lang="") {
        global $dbh;

        if ( !$lang )
            if ( ! $lang = $_SESSION['lang'] )
                $lang = 'EN';

        $sql = "select mes_text from message where mes_id = $id and mes_lang_code = '$lang'";
        $rs  = $dbh->exec($sql);

        if ( $rs->getNumRows() == 1 ) {
            $rec = $rs->next();
            $mes_text = $rec['mes_text'];
            if ( $replace_arr ) {
                foreach ( $replace_arr as $key => $val )
                    $mes_text = ereg_replace("<val$key>", $val, $mes_text);
            }
        }
        return $mes_text;
    }



    public function getPunterByUsername($username) {
        global $dbh;
        include_once 'JurisdictionsList.class.inc';
        $jurisdiction = JurisdictionsList::getInstance ( $dbh );
        $clubs=implode(",",$jurisdiction->getChilJurisdictionsIdList($_SESSION['jurisdiction_id'],'club'));
        //Select punter details record using punter id
        $sql  = "select pun_id, pun_first_name, pun_middle_name, pun_last_name";
        $sql .= ", pun_member_type, pcr_credits, pcr_bonus , pun_access, pcr_total_bets";
        $sql .= ", pcr_total_wins, pun_email, pun_username,  pun_reg_date";
        $sql .= ", pun_customer_number, pun_identified";
        $sql .= ", pun_notes, pun_cou_code, pun_investigate";
        $sql .= ", pun_dob, pun_address_line1, pun_address_line2, pun_city_suburb";
        $sql .= ", pun_state_province, pun_postcode_zip, pun_phone_business";
        $sql .= ", pun_phone_home, pun_phone_mobile, pun_fax, pun_daily_allowance";
        $sql .= ", pun_gender, pun_temp_password, pun_num_logins, pun_last_logged_in";
        $sql .= ", pcr_reserved_funds, pun_lock_reason, pun_id_documents, pun_preg_code";
        $sql .= ", pun_login_lock_start, pun_email_reg_code, pun_sms_reg_code";
        $sql .= ", pun_registration_status, pun_pre_registered, pcr_total_deposits";
        $sql .= ", pcr_total_withdrawals, pun_password_set_time, pun_sre_code";
        $sql .= ", pun_last_request_time, pun_num_failed_logins, pun_lang,cur_code,cur_code_for_web ";
        $sql .= " from punter, punter_credit,jurisdiction, currency where";
        $sql .= " pun_username = '".$dbh->escape($username)."' and pun_id = pcr_pun_id and jur_id=pun_betting_club and jur_currency=cur_id";
        $sql .= " AND pun_betting_club in (".$dbh->escape($clubs).") and pun_id = pcr_pun_id";
        $rs = $dbh->exec($sql);
        if ( $rs->getNumRows() > 0 ) {
            $new_row = $rs->next();
        }
        return $new_row;
    }

    public function breakPoint($displayval="") {
        UtilityFunctions::showval($displayval);
        UtilityFunctions::showval("<span style=\"color: red; \">(BREAKPOINT)</span>");
        exit;
    }

    public function setNav($include_filename) {
        $GLOBALS['side_nav'] = "$include_filename.inc";
    }


    public function hasCustomerEditPriv ($aty_code) {
        return in_array($aty_code, array('SUPPORT','SUPERUSER', 'ACCOUNTSADMINISTRATOR', 'CLUBMANAGER','CASINOMANAGER'));
    }

    public function hasCustomerDeletePriv ($aty_code) {
        return in_array($aty_code, array('SUPPORT','SUPERUSER','CASINOMANAGER'));
    }


    public function hasCustomerTransactionPriv ($aty_code) {
        return in_array($aty_code, array('SUPPORT','SUPERUSER','CASHIER'));
    }


    public function hasCustomerAdjustmentTransactionPriv ($aty_code) {
        return in_array($aty_code, array('SUPPORT','SUPERUSER','FINANCIALMANGER'));
    }


    public function hasCustomerViewTransactionPriv ($aty_code) {
        return in_array($aty_code, array('SUPPORT','SUPERUSER','CASINOMANAGER', 'CLUBMANAGER', 'ACCOUNTSADMINISTRATOR', 'FINANCIALMANAGER'));
    }

    public function isManager ($aty_code) {
        return in_array($aty_code, array('SUPPORT','SUPERUSER','CASINOMANGER'));
    }



    public function dec2hex2 ( $textString ) {
        $hexequiv = Array ("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
        return $$hexequiv[($textString >> 4) & 0xF] + $hexequiv[$textString & 0xF];
    }

    public function dec2hex4 ( $textString ) {
        $hexequiv = Array ("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
        return $hexequiv[($textString >> 12) & 0xF] + $hexequiv[($textString >> 8) & 0xF] + $hexequiv[($textString >> 4) & 0xF] + $hexequiv[$textString & 0xF];
    }

    public function convertCP2UTF16 ( $textString )
    {
        $outputString = "";
        $textString = preg_replace('/^\s+/', '',$textString, $limit=1);
        if (strlen($textString) == 0) { return ""; }
        $textString = preg_replace('/^\s+/', '',$textString);

        $listArray = explode(' ',$textString);
        $listArrayLen = count($listArray);
        for ( $i=0; $i<$listArrayLen; $i++ )
        {
            $n = hexdec($listArray[$i]);
            if ($i > 0) { $outputString .= ' ';}
            if ($n <= 0xFFFF)
            {
                $outputString .=UtilityFunctions::dec2hex4($n);
            }
            else if ($n <= 0x10FFFF)
            {
                $n -= 0x10000;
                $outputString .=UtilityFunctions::dec2hex4(0xD800 | ($n >> 10)) . ' ' .UtilityFunctions::dec2hex4(0xDC00 | ($n & 0x3FF));
            }
            else
            {
                $outputString .= '!errorr ' . dechex($n) .'!';
            }
        }
        return $outputString;
    }



    public function convertUTF82CP ( $textString ) {
        require 'utf8.inc';
        $outputString = "";
        $compte = 0;
        $n = 0;

        $textString = preg_replace("/^\s+/", '',$textString, $limit=1);
        if (strlen($textString) == 0) { return ""; }
        $textString = preg_replace("/^\s+/", '',$textString);

        //$listArray = explode(' ',$textString);
        $listArray =  &UtilityFunctions::utf8ToUnicode($textString);
        $listArrayLen = count($listArray);
        //breakpoint($listArray);
        for ( $i=0; $i<$listArrayLen; $i++ )  {
            //$b = hexdec($listArray[$i]); // alert('b:'+dec2hex(b));
            $b = $listArray[$i];
            switch ($compte) {
                case 0:
                    if (0 <= $b && $b <= 0x7F) {  // 0xxxxxxx
                        $outputString .= dechex($b) . ' ';
                    } else if (0xC0 <= $b && $b <= 0xDF) {  // 110xxxxx
                        $compte = 1;
                        $n = $b & 0x1F;
                    } else if (0xE0 <= $b && $b <= 0xEF) {  // 1110xxxx
                        $compte = 2;
                        $n = $b & 0xF;
                    } else if (0xF0 <= $b && $b <= 0xF7) {  // 11110xxx
                        $compte = 3;
                        $n = $b & 0x7;
                    } else {
                        $outputString .= '!error ' . dechex($b) . '! ';
                    }
                    break;
                case 1:
                    if ($b < 0x80 || $b > 0xBF) {
                        $outputString .= '!error ' . dechex($b) . '! ';
                    }
                    $compte--;
                    $outputString .= dechex(($n << 6) | ($b-0x80)) . ' ';
                    $n = 0;
                    break;
                case 2: case 3:
                if ($b < 0x80 || $b > 0xBF) {
                    $outputString .= '!error ' . dechex($b) . '! ';
                }
                $n = ($n << 6) | ($b-0x80);
                $compte--;
                break;
            }
        }
        return preg_replace('/ $/', '', $outputString);
    }


    public function convertUTF8toUTF16($string) {
        $cp_str =UtilityFunctions::convertUTF82CP($string);
        return UtilityFunctions::convertCP2UTF16 ( $cp_str);
    }

    public function _T($file) {
        return include_content($file);
    }

    public function getClubName($id) {
        global $dbh;
        $sql = "select jur_name from jurisdiction where jur_id=$id";
        $rs = $dbh->exec($sql);
        if ( $rs->getNumRows() == 1 ) {
            $row =$rs->next();
            $name = $row['jur_name'];
        }
        return $name;
    }

    /**
     * @return string
     * @param string $str
     * @desc Escapes single quotes (changes ' to \');
     */
    public function escapeSingleQuotes($str) {
        $str = mb_ereg_replace("\\\\", "\\\\", $str); //escape slashes
        return mb_ereg_replace("'", "\'", $str); //escape single quotes
    }

    /**
     * @return string
     * @param string $str
     * @desc converts double quotes (") to html entity (&amp;quot);
     */
    public function replace_quotes($str) { return mb_ereg_replace('"', '&quot;', $str);  }


    public function form_td_style ($field_name) {
        $message =UtilityFunctions::fieldInError($field_name);

        echo 'id="td_'.$field_name.'"';

        if ( $message ) {
            echo ' class="contenterror" ';
        }
        else {
            echo ' class="content" ';
        }
    }


    public function err_field($field_name, $no_br=false) {
        $message =UtilityFunctions::fieldInError($field_name);

        if ( $message ) {
            if ( $no_br ) { return $message; }
            else {
                return '<br /><span style="font-weight:bold;color:yellow">[ERROR: '. $message.']</span>';
            }
        }
        return '';
    }


    public function check_access ($task_code, $do_redirect=false, $popup=false)  {
        global $dbh;
        if ( !$this->isLoggedIn() ) {
            header("Location: /?err=expired");
            exit;
        }

        if (empty($_SESSION["access"])) {
            $sql = "SELECT rule_task_code FROM admin_access_rule " .
                "  WHERE rule_aty_id = " . $_SESSION['aty_id'];
            $rs  = $dbh->exec($sql);
            $access = array();
            while ($rs->hasNext()) {
                $r = $rs->next();
                $access[] = $r["rule_task_code"];
            }
            $_SESSION["access"] = $access;
        }
        else {
            $access = $_SESSION["access"];
        }

        //  $sql = "SELECT count(*) from admin_access_rule WHERE rule_aty_id = " . $_SESSION['aty_id'].
        //           "   AND rule_task_code = " . $dbh->prepareString($task_code);
        //  $count =$dbh->queryOne($sql);

        $count = 0;
        if (in_array($task_code, $access)) {
            $count = 1;
        }

        if ( 1 == $count ) {
            return true;
        }
        else {
            if ( $do_redirect ) {
                $_SESSION['restrict_access_msg'] = 'You do not have the proper privileges to access the section that you requested';
                if ( $popup ) {
                    UtilityFunctions::jscriptBlock("window.opener.location='".secure_host."/'; window.close()");
                }
                else{
                    header('Location:'.secure_host.'/');
                }
                exit;
            }
            return false;
        }
    }


    public function get_jurisdiction($id) {
        global $dbh;
        $sql = "SELECT jur_id, jur_name, jur_class, jur_parent_id, jur_address1, jur_address2, " .
            "jur_postcode_zip, jur_notes, jur_phone FROM jurisdiction " .
            "WHERE jur_id = $id";
        $rs = $dbh->exec($sql);
        $num_rows = $rs->getNumRows();

        if ( 1 == $num_rows ) {
            $row = $rs->next();
            return $row;
        }
    }


    public function new_session_id ($session_id) {
        if ( preg_match('/^[A-Za-z0-9]{32,32}$/', $session_id) ) {
            foreach ( $_SESSION as $key => $val ) {
                $session_vars[$key] = $val;
            }
            session_id($session_id); // set new session id
            session_start(); // start new session
            foreach ( $_SESSION as $key => $val ) {
                $_SESSION['key'] = $val;
            }
        }
        return session_id();
    }


    public function currency($number){
        $symbol = defined('CURRENCY_SYMBOL')?CURRENCY_SYMBOL:'&#8364;';
        $decimal = number_format($number,2);

        $string = $symbol . $decimal;

        return $string;
    }

    public function removeUnsafeAttributesAndGivenTags($input, $validTags = ''){
        $regex = '#\s*<(/?\w+)\s+(?:on\w+\s*=\s*(["\'\s])?.+?\(\1?.+?\1?\);?\1?|style=["\'].+?["\'])\s*>#is';
        return preg_replace($regex, '<${1}>',strip_tags($input, $validTags));
    }

    public function escapeAndQuote($string, $type){
        global $dbh;

        $string = trim($string);

        if(is_null($string) || $string == ""){
            return "NULL";
        }

        if($type == "string"){
            $string = str_ireplace("�", "&euro;", $string);

            //$string = str_replace("�", "&euro;", $string);
        }

        $string = $dbh->escape($string);

        if($type == "string" || $type == "date"){
            $string = "'$string'";
        }

        if($type == "date"){
            $string = "DATE_FORMAT($string, '%Y-%m-%d %H:%i')";
        }

        if($type == "boolean"){
            $string = (($string >= 1)?(1):(0));
        }

        if($type == "integer"){
            $string = (int)$string;
        }

        return $string;
    }

    public function checkType($data, $type = "string", $rules = null, $nullable){
        if(is_null($data) || $data == ""){
            return $nullable;
        }

        switch ($type){
            case "string":
                return is_string($data);
                break;
            case "integer":
                if(is_numeric($data)){
                    return is_int((int)$data);
                }
                return false;
                break;
            case "decimal":
                if(is_numeric($data)){
                    return is_float((float)$data);
                }
                return false;
                break;
            case "boolean":
                return is_bool((boolean)$data);
                break;
            case "date":
                if(is_array($data)){
                    $data = $data["year"] . "-" . $data["month"] . "-" . $data["day"] . " " . $data["hour"] . ":" . $data["minute"];
                }
                return strtotime($data) > 0;
                break;
        }

    }

    public function string2regexp($str){
        $str = preg_replace('#\W#', '.', $str);
        $charcount = preg_match_all('#\w#', $str, $m);
        if ($charcount < 3) {
            return null;
        }
        return strtolower("^$str");
    }

    public function randomCode($length = 8){
        $key = '';
        for($i = 0 ; $i < $length ; $i++){
            $key .= rand(0,9);
        }
        return $key;
    }

    public function generateCouponCode(){
        $consonants = "wrtpsdfghjklzxcvbnmq";
        return strtoupper(
            UtilityFunctions::escapeAndQuote(
                $consonants[rand(0, strlen($consonants) - 1)] .
                $consonants[rand(0, strlen($consonants) - 1)] .
                $consonants[rand(0, strlen($consonants) - 1)] .
                UtilityFunctions::randomCode(4) .
                $consonants[rand(0, strlen($consonants) - 1)] .
                $consonants[rand(0, strlen($consonants) - 1)] .
                UtilityFunctions::randomCode(3)
                , "string")
        );
    }

    public function addPunterNote($pun_id, $aus_id, $message){
        global $dbh;
        if(empty($pun_id) || empty($aus_id) || empty($message)){
            return false;
        }
        $sql = "INSERT INTO admin_user_note VALUES ("  . $dbh->nextSequence('AUN_ID_SEQ').", " .UtilityFunctions::escapeAndQuote($pun_id, "integer") . ", " .UtilityFunctions::escapeAndQuote($aus_id, "integer") . ", CURRENT_TIMESTAMP, " .UtilityFunctions::escapeAndQuote($message, "string") . ")";
        return ($dbh->exec($sql) === 1);
    }

    public function checkNinCode($cf){
        return true;
        if( $cf == '' )  return false;
        if( strlen($cf) != 16 )
            return false;
        $cf = strtoupper($cf);
        if( ! ereg("^[A-Z0-9]+$", $cf) ){
            return false;
        }
        $s = 0;
        for( $i = 1; $i <= 13; $i += 2 ){
            $c = $cf[$i];
            if( '0' <= $c && $c <= '9' )
                $s += ord($c) - ord('0');
            else
                $s += ord($c) - ord('A');
        }
        for( $i = 0; $i <= 14; $i += 2 ){
            $c = $cf[$i];
            switch( $c ){
                case '0':  $s += 1;  break;
                case '1':  $s += 0;  break;
                case '2':  $s += 5;  break;
                case '3':  $s += 7;  break;
                case '4':  $s += 9;  break;
                case '5':  $s += 13;  break;
                case '6':  $s += 15;  break;
                case '7':  $s += 17;  break;
                case '8':  $s += 19;  break;
                case '9':  $s += 21;  break;
                case 'A':  $s += 1;  break;
                case 'B':  $s += 0;  break;
                case 'C':  $s += 5;  break;
                case 'D':  $s += 7;  break;
                case 'E':  $s += 9;  break;
                case 'F':  $s += 13;  break;
                case 'G':  $s += 15;  break;
                case 'H':  $s += 17;  break;
                case 'I':  $s += 19;  break;
                case 'J':  $s += 21;  break;
                case 'K':  $s += 2;  break;
                case 'L':  $s += 4;  break;
                case 'M':  $s += 18;  break;
                case 'N':  $s += 20;  break;
                case 'O':  $s += 11;  break;
                case 'P':  $s += 3;  break;
                case 'Q':  $s += 6;  break;
                case 'R':  $s += 8;  break;
                case 'S':  $s += 12;  break;
                case 'T':  $s += 14;  break;
                case 'U':  $s += 16;  break;
                case 'V':  $s += 10;  break;
                case 'W':  $s += 22;  break;
                case 'X':  $s += 25;  break;
                case 'Y':  $s += 24;  break;
                case 'Z':  $s += 23;  break;
            }
        }

        if( chr($s%26 + ord('A')) != $cf[15] )
            return false;

        return true;
    }



    public function db_quote($element){
        $element = mb_ereg_replace("\\\\", "\\\\", $element);
        return "'".$element."'";
    }

    public function getSkinClubId($jur_id){
        global $dbh;
        $club_id = $_SESSION["skin_club_id"];
        if(empty($club_id) && $club_id != -1){
            $sql = "SELECT skn_internet_club_id FROM skins WHERE skn_jur_id = $jur_id";
            $club_id = $dbh->queryOne($sql);

            if(is_null($club_id)){
                $club_id = -1;
            }

            $_SESSION["skin_club_id"] = $club_id;
        }
        return $club_id;
    }

    public function getSkinDetailsByJurisdiction($jur_id, $jur_class){
        $ret = null;

        if(!isset($_SESSION["skin_details"]) || 1 == 1){
            global $dbh;

            $sql = "SELECT
              skins.*, (SELECT jur_class FROM jurisdiction WHERE jur_id = skins.skn_jur_id) as jur_class
            FROM
              jurisdiction club
            LEFT JOIN
              jurisdiction district ON district.jur_id = club.jur_parent_id
            LEFT JOIN
              jurisdiction region   ON region.jur_id = district.jur_parent_id
            LEFT JOIN
              jurisdiction nation   ON nation.jur_id = region.jur_parent_id
            LEFT JOIN
              skins ON (skn_jur_id = club.jur_id OR skn_jur_id = district.jur_id OR skn_jur_id = region.jur_id OR skn_jur_id = nation.jur_id) AND skn_status = '1' ";


            switch ($jur_class){
                case "club":
                    $sql .= "WHERE club.jur_id = $jur_id";
                    break;
                case "district":
                    $sql .= "WHERE district.jur_id = $jur_id";
                    break;
                case "region":
                    $sql .= "WHERE region.jur_id = $jur_id";
                    break;
                case "casino":
                    $sql .= "WHERE skn_id = 0";
                    break;
                default:
                    $sql .= "WHERE 1 = 0";
                    break;
            }

            $sql .= " OR skn_id = 0";

            $rs = $dbh->exec($sql);

            $jur_r = array();

            while($rs->hasNext()){
                $row = $rs->next();
                $jur_r[$row["jur_class"]] = $row;
            }

            $ret           = $jur_r["nation"];

            $order = array(
                "club"     => 0,
                "district" => 1,
                "region"   => 2,
                "nation"   => 3,
                "casino"   => 4
            );

            if(!empty($jur_r["club"])           && ($order[$jur_class] <= $order["club"])){
                $ret = $jur_r["club"];
            }elseif (!empty($jur_r["district"]) && ($order[$jur_class] <= $order["district"])){
                $ret = $jur_r["district"];
            }elseif (!empty($jur_r["region"])   && ($order[$jur_class] <= $order["region"])){
                $ret = $jur_r["region"];
            }elseif (!empty($jur_r["nation"])   && ($order[$jur_class] <= $order["nation"])){
                $ret = $jur_r["nation"];
            }elseif (!empty($jur_r["casino"])   && ($order[$jur_class] <= $order["casino"])){
                $ret = $jur_r["casino"];
            }

            $_SESSION["skin_details"] = $ret;
        }else{
            $ret = $_SESSION["skin_details"];
        }
        return $ret;
    }

    public function isolateDomainName($url){
        $ret = preg_replace("/^https?:\/\//", "", $url);
        $ret = strtolower($ret);
        if (!preg_match("#\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b#", $ret)) {
            preg_match('/([^.]+\.[^.:]+)[:0-9]*$/', $ret, $m);
            $ret = $m[1];
        }
        $ret = preg_replace("/\//", "", $ret);

        return $ret;
    }

    //return array
    public function getPunterDocuments($pun_id){
        $documents = array("idcard_front", "idcard_back");


        array_push($documents, "nin_code_front");
        array_push($documents, "photo");
        array_push($documents, "firma");
        array_push($documents, "creditcard");
        array_push($documents, "extra");

        $ret = array();
        foreach ($documents as $doc){
            $filename =UtilityFunctions::getUploadedDocFileName($pun_id, $doc);
            $file_path = CUSTOMERS_DOCS_PATH . "/" . $filename;
            $file_list = glob(CUSTOMERS_DOCS_PATH . "/" . $filename . "*");

            foreach ($file_list as $key => $fname){
                if(eregi("$filename(\.[a-zA-Z0-9]{3,4})$", $fname, $match)){
                    $file_list[$key] = $match[1];
                }else{
                    unset($file_list[$key]);
                }
            }


            $ret[$doc] = implode("|", $file_list);
        }
        return $ret;
    }

    public function getUploadedDocFileName($pun_id, $doc_type, $isThumb=false){
        return floor($pun_id / 1000) . "000/" . floor($pun_id / 100) . "00/" . $pun_id . "_" . $doc_type . (($isThumb)?("_t"):(""));
    }

    public function saveDocumentImage($pun_id, $doc_file_ref, $doc_type){
        if(!file_exists($doc_file_ref)){
            return false;
        }

        $file_name       =UtilityFunctions::getUploadedDocFileName($pun_id, $doc_type, false);
        $thumb_file_name =UtilityFunctions::getUploadedDocFileName($pun_id, $doc_type, true);
        $file_path       = CUSTOMERS_DOCS_PATH . "/" . $file_name;
        $thumb_file_path = CUSTOMERS_DOCS_PATH . "/" . $thumb_file_name;

        if(!is_dir(dirname($file_path))){

            mk_dir(dirname($file_path));
        }


        require_once 'Image/Transform.php';
        $it = Image_Transform::factory('GD');

        $it->load($doc_file_ref);
        $it->scaleByX(800);
        $it->save($file_path . ".jpg");

        $it->free();

        UtilityFunctions::addPunterNote($pun_id,$_SESSION['admin_id'],"Admin user uploaded ".$doc_type);

        $it->load($file_path . ".jpg");
        $it->scaleByX(120);
        $it->save($thumb_file_path . ".jpg");
        $it->free();
    }

    //recursively creates a folder.
    public function mk_dir($path, $rights = 0777) {
        if (!@is_dir($path)) {
            $folder_path = array($path);
        } else {
            return;
        }

        while(!@is_dir(dirname(end($folder_path)))
            && dirname(end($folder_path)) != '/'
            && dirname(end($folder_path)) != '.'
            && dirname(end($folder_path)) != '')
        {
            array_push($folder_path, dirname(end($folder_path)));
        }

        while($parent_folder_path = array_pop($folder_path)) {
            if(!@mkdir($parent_folder_path, $rights)) {
                user_error("Can't create folder \"$parent_folder_path\".\n");
            }
        }
    }

    public function checkMessages(){
        global $dbh;
        $now = time();

        $admin_user_id = $_SESSION['admin_id'];
        if(!empty($admin_user_id)){
            if(empty($_SESSION["messages"]) || $now - $_SESSION["messages"]["last_check"] >= 60){

                $sql = "SELECT aum_id, aum_level
            FROM admin_user_mailbox 
            JOIN admin_user f ON f.aus_id = aum_from 
            JOIN jurisdiction fj ON fj.jur_id = f.aus_jurisdiction_id
            WHERE aum_status = 0 AND aum_to = $admin_user_id ORDER BY aum_send_date";
                $rs = $dbh->exec($sql);
                $_SESSION["messages"]["last_check"] = $now;
                $_SESSION["messages"]["inbox"]      = $rs->Records;
            }
        }
        return $_SESSION["messages"]["inbox"];
    }

    public function get_free_jurcode(){
        global $dbh;
        $ret = null;

        $rs = $dbh->exec("SELECT get_free_jurcode() as get_free_jurcode");
        if($rs->hasNext()){
            $row = $rs->next();
            $jur_code = $row["get_free_jurcode"];

            if(!empty($jur_code)){
                $ret = $jur_code;
            }
        }

        return $ret;
    }

    public function serverCmd($host, $port, $cmd) {
        $sock = fsockopen( $host, $port );
        if ($sock){
            fputs($sock, $cmd);
            //stream_set_timeout($sock, 0);
            $info = stream_get_meta_data($sock);
            $s="";

            while(!feof($sock) && !$info["timed_out"]){
                $s    .= trim(fgets($sock, 4096));
                $info  = stream_get_meta_data($sock);
            }

            fclose($sock);
            return $s;
        }
    }

    public function mb_unserialize($string) {
        $string = preg_replace('!s:(\d+):"(.*?)";!se', "'s:'.strlen('$2').':\"$2\";'", $string);
        return unserialize($string);
    }


    public function getAllClubsUnderJurisdiction($jur_id,$recent=false) {
        global $dbh;
        $jur_class=$_SESSION['jurisdiction_class'];
        $sql = "select c.jur_name club_name,c.jur_id club_id,d.jur_name district_name
            FROM jurisdiction c
            JOIN jurisdiction d on d.jur_id = c.jur_parent_id
    ";
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
            AND c.jur_status=1
    ";
        if($recent){
            $sql.=" AND c.JUR_CREATION_DATE > now() - interval 120 day";
        }
        $result = $dbh->doCachedQuery ( $sql, 0 );
        return $result;
    }


    public function rand_str($length = 32, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890') {
        // Length of character list
        $chars_length = (strlen($chars) - 1);
        // Start our string
        $string = $chars{rand(0, $chars_length)};
        // Generate random string
        for ($i = 1; $i < $length; $i = strlen($string)) {
            // Grab a random character from our list
            $r = $chars{rand(0, $chars_length)};
            // Make sure the same two characters don't appear next to each other
            if ($r != $string{$i - 1}) $string .=  $r;
        }
        // Return the string
        return $string;
    }

    public function month_select_box($defaultmonth=false,$betting=false,$type='select')
    {
        global $lang;
        if($type=='select') {
            $month_options = '<option value="" >' . $lang->getLang("Select a month") . '</option>';
        }
        else{
            $month_options=[];
        }
        $curryear = date("Y");
        $firstyear=$curryear-3;
        for ($j = $firstyear; $j <= $curryear; $j++) {
            for ($i = 1; $i <= 12; $i++) {
                if($betting){
                    $currMonth=$j."-".($i<10? "0".$i:$i);
                    if(date('D',strtotime($currMonth))=='Tue'){
                        $firstmonth=date('Y-m',strtotime($currMonth));
                        $month_num = date('Y-m-d',strtotime($firstmonth));
                        $month_name = date('F', mktime(0, 0, 0, $i + 1, 0, 0, 0));
                        $month_num2 = date('Y-m-d',strtotime("Last Monday of ".$firstmonth));
                    }
                    else {
                        $firstmonth = ($i == 1 ? ($j - 1) . "-12" : $j . "-" . ($i - 1));
                        $month_num = date('Y-m-d',strtotime("Last Tuesday of ".$firstmonth));
                        $month_name = date('F', mktime(0, 0, 0, $i + 1, 0, 0, 0));
                        $month_num2 = date('Y-m-d',strtotime("Last Monday of".date('Y-m',strtotime("$firstmonth+1 month"))));
                    }


                    if((date('Y-m')) >= date('Y-m',strtotime($j."-".$i))) {
                        if($type=='select') {
                            $month_options .= '<option value="' . ($month_num) . '~' . ($month_num2) . '" ' . ($defaultmonth == ($month_num . "~" . $month_num2) ? 'selected' : '') . '  >' . $lang->getLang($month_name) . ' ' . $j . '</option>';
                        }
                        else{
                            array_push($month_options,[$month_num,$month_num2]);
                        }
                    }


                }
                else{
                    $month_num = str_pad($i, 2, 0, STR_PAD_LEFT);
                    $month_name = date('F', mktime(0, 0, 0, $i + 1, 0, 0, 0));
                    if((date('Y-m')) >= date('Y-m',strtotime($j.'-'.$month_num))) {
                        $month_options .= '<option value="' . $j . '-' . ($month_num) . '" '.($defaultmonth==($j.'-'.$month_num)? 'selected':'').'  >' . $lang->getLang($month_name) . ' ' . $j . '</option>';
                    }
                }
            }

        }
        if($type=='select') {
            return '<select id="monthHelper" name="monthHelper" class="monthHelper">' . $month_options . '</select>';
        }
        else{
            return $month_options;

        }
    }

    public function month_select_box2($defaultmonth=false,$monthsNumber=1)
    {
        global $lang;
        $month_options = '<option value="" >'.$lang->getLang("Select months").'</option>';
        $months=$monthsNumber-1;
        $curryear = date("Y");
        $firstyear=$curryear-3;
        for ($j = $firstyear; $j <= $curryear; $j++) {
            for ($i = 1; $i <= 12; $i++) {
                $currMonth=$j."-".($i<10? "0".$i:$i);
                if(date('D',strtotime($currMonth))=='Tue'){
                    $firstmonth=date('Y-m',strtotime($currMonth));
                    $month_num1 = date('Y-m-d',strtotime($firstmonth));
                    $month_name1 = date('F', strtotime($j."-".$i))." ".$j;
                    $month_num2 = date('Y-m-d',strtotime("Last Monday of".date('Y-m',strtotime("$month_num1+".($months)." months"))));
                    $month_name2 = date('F',strtotime("$month_num1++".($months)." months"))." ".date('Y',strtotime("$month_num1+".($months)." months"));
                }
                else {
                    $month_num1 = date('Y-m-d',strtotime("Last Tuesday of ".($i==1? ($j-1)."-12" : $j."-".($i-1))));
                    $month_name1 = date('F', strtotime($j."-".$i))." ".$j;
                    $month_num2 = date('Y-m-d',strtotime("Last Monday of".date('Y-m',strtotime("$month_num1+".($months+1)." months"))));
                    $month_name2 = date('F',strtotime("$month_num1++".($months+1)." months"))." ".date('Y',strtotime("$month_num1+".($months+1)." months"));
                }

                if((date('Y-m')) >= date('Y-m',strtotime($j."-".$i))) {
                    $month_options .= '<option value="'. ($month_num1) . '~'.($month_num2)  .'" '.($defaultmonth==($month_num1."~".$month_num2)? 'selected':'').'  >' . $month_name1.' untill '.$month_name2. '</option>';
                }
            }
        }
        return '<select id="monthHelper'.$monthsNumber.'" name="monthHelper'.$monthsNumber.'" class="monthHelper">' . $month_options . '</select>';
    }

    public function week_select_box($defaultweek=false,$betting=false,$type='select')
    {
        global $lang;
        $year           = date('Y', strtotime('-1 year'));
        $firstDayOfYear = mktime(0, 0, 0, 1, 1, $year);
        $nextMonday     = strtotime('monday', $firstDayOfYear);
        $nextSunday     = strtotime('sunday', $nextMonday);
        if($betting){
            $nextMonday     = strtotime('Tuesday', $firstDayOfYear);
            $nextSunday     = strtotime('Monday', $nextMonday);
        }
        if($type=='select') {
            $week_options = '<option value="" disabled>'.$lang->getLang("Select a week").'</option>';
        }
        else{
            $week_options=[];
        }

        $i=1;
        while ( $nextMonday <= strtotime('now') ) {
            $prevYear=$year;
            $year=date('Y', ($nextMonday));
            if($prevYear!=$year){
                $i=1;
            }
            if($type=='select') {
                $week_options .= '<option value="'.date('Y-m-d', $nextMonday). '~'. date('Y-m-d', $nextSunday). '" '.($defaultweek==(date('Y-m-d', $nextMonday).'~'. date('Y-m-d', $nextSunday))? 'selected':'').' >'.$year.' '.$lang->getLang('Week').' # '.$i.', '.date('d M', $nextMonday).' - '. date('d M', $nextSunday).'</option>';
            }
            else{
                array_push($week_options,[date('Y-m-d', $nextMonday),date('Y-m-d', $nextSunday)]);
            }
            $nextMonday = strtotime('+1 week', $nextMonday);
            $nextSunday = strtotime('+1 week', $nextSunday);
            $i++;
        }
        if($type=='select') {
            return '<select id="weekHelper" name="weekHelper" class="weekHelper" size="3">' . $week_options . '</select>';
        }
        else{
            return  $week_options ;
        }

    }

    public function getBettingInterval($month,$type='weekly'){
        $interval=array();
        if(date('D',strtotime($month))=='Tue'){
            $firstDay=date('Y-m-d',strtotime($month));
        }
        else {
            $firstDay=date('Y-m-d',strtotime("Last Tuesday of ".date('Y-m',strtotime($month.' -1 month'))));
        }
        $lastDay = date('Y-m-d',strtotime("Last Monday of $month"));
        if($type!='weekly'){
            $interval['start']=$firstDay;
            $interval['end']= $lastDay;
            return $interval;
        }

        $prev=0;
        $last=0;
        While(strtotime($lastDay)>strtotime($last) && strtotime('now')>strtotime($last)){
            $section=array();

            if($prev==0){
                $prev=$firstDay;


            }
            elsE{
                $prev=date('Y-m-d',strtotime($prev." +7 days" ));
            }
            $last= date('Y-m-d',strtotime( $prev." +6 days"));
            $section['start']=$prev;
            $section['end']=$last;
            array_push($interval,$section);
        }
        return $interval;
    }

    public function toJsonTable($i,$children){
        $output = array(
            "sEcho" => intval($_REQUEST['sEcho']),
            "iTotalRecords" => intval($i),
            "iTotalDisplayRecords" => intval($i),
            "aaData" => $children
        );
        return json_encode($output);
    }


    public function calculateTaxValue($amount,$tax){
        if($tax<100){
            return  $amount*$tax/100;
        }
        else{
            return ($tax-100)*$amount/$tax;
        }
    }


    /**
     * @param $jurisdictionClass
     * @return string
     */
    public function getAllSubJurisdictions($jurisdictionClass){
        $subjurisdiction='';
        $jurisdictionClass=strtolower($jurisdictionClass);
        if($jurisdictionClass=='casino')
        {
            $subjurisdiction='nation,region,district,club';
        }
        elseif($jurisdictionClass=='nation')
        {
            $subjurisdiction='region,district,club';
        }
        elseif($jurisdictionClass=='region')
        {
            $subjurisdiction='district,club';
        }
        elseif($jurisdictionClass=='district'){
            $subjurisdiction='club';
        }
        return $subjurisdiction;
    }


    public function containsLetter($string){
        $pattern = '/[A-Za-z]/';
        preg_match($pattern, $string, $matches);
        if (!$matches)
        {
            return false;
        }
        return true;
    }
    public function containsNumber($string){
        if( preg_match('/\d/',          $string)) {
            return true;
        }
        return false;
    }

    public function doJurisdictionCheck(){
        $jur_id = $_SESSION["jurisdiction_id"];
        $return='';
        if($_SESSION["jurisdiction_class"] != "casino"){
            $return .= " JOIN jurisdiction club ON club.jur_id  = pun_betting_club
  		        JOIN jurisdiction district ON district.jur_id = club.jur_parent_id
                JOIN jurisdiction region ON region.jur_id = district.jur_parent_id
                JOIN jurisdiction nation   ON nation.jur_id   = region.jur_parent_id";
        }
        switch($_SESSION["jurisdiction_class"]){
            case "club":
                $return .= " WHERE club.jur_id = $jur_id";
                break;
            case "district":
                $return .= " WHERE district.jur_id = $jur_id";
                break;
            case "region":
                $return .= " WHERE region.jur_id = $jur_id";
                break;
            case "nation":
                $return .= " WHERE nation.jur_id = $jur_id";
                break;

            case "casino":
                $return .= " WHERE 1=1";
                break;
        }
        return $return;
    }

    public function getJurisdictionCurrencies(){
        global $dbh;
        $return='';
        if($_SESSION['jurisdiction_class']=='casino'){
            $sql='select cur_id,ccn_date, cur_name, cur_code, cur_code_for_web, ccn_cur_master, ccn_cur_secondary, ccn_convers_value
              from currency, currencies_conversion,
              ( select max(ccn_date) max_date from currencies_conversion) t
              where cur_code_for_web is not null
              and cur_code = ccn_cur_secondary
              and ccn_date = max_date ';
            $return=$dbh->doCachedQuery($sql,3600*5);
            if($return->getNumRows()<1){
                error_log("Currency extraction error.Query results : ".$return->getNumRows());
                $return=$dbh->doCachedQuery($sql,0);
            }
        }
        elseif(strtolower($_SESSION['currency_id'])!='1'){
            $sql='select cur_id,ccn_date, cur_name, cur_code, cur_code_for_web, ccn_cur_master, ccn_cur_secondary, ccn_convers_value
              from currency, currencies_conversion,
              ( select max(ccn_date) max_date from currencies_conversion) t
              where cur_code_for_web is not null
              and cur_code = ccn_cur_secondary
              and ccn_date = max_date
              and cur_name='.$dbh->prepareString($_SESSION['currency']);
            $return=$dbh->doCachedQuery($sql,3600*5);
            if($return->getNumRows()<1){
                error_log("Currency extraction error.Query results : ".$return->getNumRows());
                $return=$dbh->doCachedQuery($sql,3600*5);
            }
        }
        return $return;

    }

    public function getAllCurrencies(){
        global $dbh;
        return $dbh->doCachedQuery('Select * from currency where cur_code_for_web is not null',3600);
    }

    public function getAllCurrency($currencys) {
        // !start query removed
        /* $str  = '<select name="currency">';
        $str .= '<option value="1">Euro</option>';
        $str .= '</select>';
        return $str; */
        // !end query removed

        global $dbh;
        $sql = "SELECT * FROM currency where cur_code_for_web is not null ";
        $rs = $dbh->exec($sql);
        $selected = '';
        $str  = '<select name="currency">';
        while ($rs->hasNext()) {
            $row = $rs->next();
            $selected = '';
            if($row['cur_id']==$currencys){
                $selected = 'selected';
            }
            $str .= '<option value="' . $row['cur_id'] . '"' . $selected . '>' . $row['cur_name'] . '</option>';
        }
        $str .= '</select>';
        return $str;
    }

    public function updateAllHierarchy($jur,$jurClass,$field,$punterfield=false,$punterFieldValue=false){
        global $dbh;
        $jurisdiction = JurisdictionsList::getInstance ( $dbh );
        $allChildren=implode(",",$jurisdiction->getChilJurisdictionsIdList($jur,( $punterfield ? 'club' : null )));
        if ($allChildren == '') {
            return true;
        }
        $sql= " update ";
        if($punterfield){
            $sql.=" punter ";
            $sql.=" SET $punterfield =".(is_numeric($punterFieldValue)? $dbh->escape($punterFieldValue) : $dbh->prepareString($punterFieldValue));
            $sql.=" WHERE pun_betting_club in (".$allChildren.")";
        }
        else{
            $sql.=" jurisdiction SET ";
            foreach($field as $name=>$value){
                $sql.= " $name = ".(is_int($value)? $dbh->escape($value) : $dbh->prepareString($value)).",";
            }
            $sql=rtrim($sql,',');
            $sql.=" WHERE jur_id in (".$allChildren.")";
        }
        return $dbh->exec($sql);
    }



    public function getAllClubsAndDistricts(){
        global $dbh;
        $today=date('Y-m-d');
        $sql=" SELECT d.jur_id dis_jur_id,
           d.jur_name dis_jur_name, c.jur_id cl_jur_id, c.jur_name cl_jur_name, c.jur_status cl_jur_status
           FROM jurisdiction ca
           JOIN jurisdiction n ON n.jur_parent_id = ca.jur_id
           JOIN jurisdiction r ON r.jur_parent_id = n.jur_id
           JOIN jurisdiction d ON d.jur_parent_id = r.jur_id
           JOIN jurisdiction c ON c.jur_parent_id = d.jur_id
           ";
        if($_SESSION['jurisdiction_class']=='nation'){
            $sql .=" WHERE n.jur_id=". $_SESSION['jurisdiction_id'];
        }
        if($_SESSION['jurisdiction_class']=='region'){
            $sql.=" WHERE r.jur_id=". $_SESSION['jurisdiction_id'];
        }
        if($_SESSION['jurisdiction_class']=='district'){
            $sql.=" WHERE d.jur_id=". $_SESSION['jurisdiction_id'];
        }
        if($_SESSION['jurisdiction_class']=='club'){
            $sql.="  WHERE c.jur_id=". $_SESSION['jurisdiction_id'];
        }

        $sql.=" GROUP BY d.jur_id, c.jur_id
           ORDER BY d.jur_id, c.jur_id ";
        return $dbh->exec($sql);
    }


    /**
     * @param $country
     * @return array
     */
    public function formatCountry($country){
        $formattedCountryArr=array();
        foreach($country as $k=>$v){
            $formattedCountryArr[$v['cou_code']]=$v['cou_name'];
        }
        return $formattedCountryArr;
    }

    public function checkAffiliateIsUnderJurisdiction($affID,$jurID){
        global $dbh;
        $result=$dbh->queryOne('Select jur_id from affiliate join admin_user on aff_aus_id=aus_id join jurisdiction on aus_jur_id=jur_id  where aff_id='.$dbh->escape($affID));
        return ($result==$jurID);

    }


    public function getPartnersByJurisdiction(){
        global $dbh;
        $jur_id = $_SESSION["jurisdiction_id"];
        $sql=" Select * from partners";
        if($_SESSION["jurisdiction_class"] != "casino"){
            $sql .= "   join jurisdiction club on club.jur_id=ptn_jur_id
  		        JOIN jurisdiction district ON district.jur_id = club.jur_parent_id
                JOIN jurisdiction region ON region.jur_id = district.jur_parent_id
                JOIN jurisdiction nation   ON nation.jur_id   = region.jur_parent_id";
        }
        switch($_SESSION["jurisdiction_class"]){
            case "club":
                $sql .= " WHERE club.jur_id = $jur_id";
                break;
            case "district":
                $sql .= " WHERE district.jur_id = $jur_id";
                break;
            case "region":
                $sql .= " WHERE region.jur_id = $jur_id";
                break;
            case "nation":
                $sql .= " WHERE nation.jur_id = $jur_id";
                break;

            case "casino":
                $sql .= " WHERE 1=1";
                break;
        }
        return $dbh->exec($sql);
    }

    public function getNumberOfNewPlayers($start, $until)
    {
        global $dbh;
        $sql = "SELECT count(*) as players from punter";
        $sql .=UtilityFunctions::doJurisdictionCheck();
        $sql .= " AND pun_reg_date BETWEEN " . $dbh->prepareString($start) . " AND " . $dbh->prepareString($until);
        return $dbh->queryOne($sql);
    }

    public function getSubjurisdictionClass($jurisdictionClass)
    {

        $subjurisdiction='';

        if($jurisdictionClass=='casino')
        {
            $subjurisdiction='nation';
        }
        elseif($jurisdictionClass=='nation')
        {
            $subjurisdiction='region';
        }
        elseif($jurisdictionClass=='region')
        {
            $subjurisdiction='district';
        }
        elseif($jurisdictionClass=='district'){
            $subjurisdiction='club';
        }
        elseif($jurisdictionClass=='club'){
            $subjurisdiction='club';
        }
        return $subjurisdiction;
    }


    /**
     * Return the name of the jurisdiciton type
     *
     * @param $jurisdictionType the unique id of the jurisdiction.
     * Can have one of the following value:
     * <ul>
     *      <li>1 - Owner</li>
     *      <li>2 - Seller</li>
     *      <li>3 - Re-seller</li>
     *      <li>4 - Agent</li>
     *      <li>5 - Star</li>
     * </ul>
     * @return string the name of the jurisdiction type. can have of the following value:
     * <ul>
     *      <li>Owner</li>
     *      <li>Seller</li>
     *      <li>Re-seller</li>
     *      <li>Agent</li>
     *      <li>Star</li>
     * </ul>
     * @throws ServiceException exception returned in case the jurisdictionType is not valid
     */
    public function getJurisdictionClassName($jurisdictionType)
    {
        $msg = "[general_ public function.inc]";
        $jurTypeName='';
        switch($jurisdictionType) {
            case 1: $jurTypeName = "owner"; break;
            case 2: $jurTypeName = "seller"; break;
            case 3: $jurTypeName = "re-seller"; break;
            case 4: $jurTypeName = "agent"; break;
            case 5: $jurTypeName = "star"; break;
            default: throw new ServiceException(SystemErrorMapper::$ERROR_INVALID_STRUCTURE_TYPE, "");
        } // end switch
        return $jurTypeName;
    } // end method getJurisdictionClassName()


    public function buildJurisdictionsTree($childArray,$onlyChild=false,$agencyCode=false,$class=false){
//        global $lang;
//        foreach($childArray as $key => $value){
//            if(!$class) {
//                if ($value['class'] == 'casino') {
//                    $class_type = "casino";
//                } elseif ($value['class'] == 'nation') {
//                    $class_type = "nation";
//                } elseif ($value['class'] == 'region') {
//                    $class_type = "region";
//                } elseif ($value['class'] == 'district') {
//                    $class_type = "district";
//                } elseif ($value['class'] == 'club') {
//                    $class_type = "club";
//                }
//            }
//            $blocked='';
//            if($value['jur_status']!='1' && $value['class']!='casino'){
//                $blocked=' <span class="tip" style="color:red">('.$lang->getLang("blocked").')</span>';
//            }
//
//        }
    }

    public function getJurisdictionPathByIdAndClass($id,$class='nation'){
        global $dbh;
        $select=" n.jur_id nation_id ";
        $from=" jurisdiction n ";
        $where= "   n.jur_parent_id=1
     AND n.jur_id =".$dbh->escape($id);
        if($class=='region'){
            $select=" n.jur_id nation_id,r.jur_id region_id ";
            $from=" jurisdiction n,jurisdiction r";
            $where= "   r.jur_parent_id=n.jur_id
                   AND n.jur_parent_id=1
                   AND r.jur_id =".$dbh->escape($id);
        }
        if($class=='district'){
            $select=" n.jur_id nation_id,r.jur_id region_id,d.jur_id district_id ";
            $from=" jurisdiction n, jurisdiction r,jurisdiction d ";
            $where= "      d.jur_parent_id=r.jur_id
                   AND r.jur_parent_id=n.jur_id
                   AND n.jur_parent_id=1
                   AND d.jur_id =".$dbh->escape($id);
        }
        if($class=='club'){
            $select="n.jur_id nation_id,r.jur_id region_id,d.jur_id district_id,c.jur_id club_id";
            $from=" jurisdiction n, jurisdiction r, jurisdiction d,jurisdiction c ";
            $where= "  c.jur_parent_id=d.jur_id
                    AND d.jur_parent_id=r.jur_id
                    AND r.jur_parent_id=n.jur_id
                    AND n.jur_parent_id=1
                    AND c.jur_id =".$dbh->escape($id);
        }

        $sql="SELECT $select FROM $from WHERE $where";
        $jurisdicitons=  $dbh->doCachedQuery($sql, 0);
        $return=array();
        while ($jurisdicitons->hasNext()) {
            $row = $jurisdicitons->next();
            if ($row['club_id']== $id) {
                array_push($return, "n" . $row['club_id']);
                array_push($return, "n" . $row['district_id']);
                array_push($return, "n" . $row['region_id']);
                array_push($return, "n" . $row['nation_id']);
            }
            elseif($row['district_id']== $id){
                array_push($return, "n" . $row['district_id']);
                array_push($return, "n" . $row['region_id']);
                array_push($return, "n" . $row['nation_id']);
            }
            elseif($row['region_id']== $id) {
                array_push($return, "n" . $row['region_id']);
                array_push($return, "n" . $row['nation_id']);
            }
            elseif($row['nation_id']== $id) {
                array_push($return, "n" . $row['nation_id']);
            }
        }
        return json_encode(array_unique($return));
    }

    public function getPartners($request){
        global $dbh,$lang;
        $jur_id = $_SESSION["jurisdiction_id"];
        $columns = array('ptn_id','jur_name','jur_available_credit',"ptn_name",'jur_id','jur_status', 'jur_currency','cur_code_for_web','ptn_id','ptn_status' );
        $sTable = " partners ptn
            JOIN jurisdiction club on  ptn_jur_id = club.jur_id
            JOIN currency ON  club.jur_currency=cur_id    " ;
        if($_SESSION["jurisdiction_class"] != "casino"){
            $sTable .= "
  		        JOIN jurisdiction district ON district.jur_id = club.jur_parent_id
                JOIN jurisdiction region ON region.jur_id = district.jur_parent_id
                JOIN jurisdiction nation   ON nation.jur_id   = region.jur_parent_id";
        }

        $limit = '';
        if ( isset($request['start']) && $request['length'] != -1 ) {
            $limit = "LIMIT ".intval($request['start']).", ".intval($request['length']);
        }
        $order = '';
        if ( isset($request['order']) && count($request['order']) ) {
            $orderBy = array();
            for ( $i=0, $ien=count($request['order']) ; $i<$ien ; $i++ ) {
                $columnIdx = intval($request['order'][$i]['column']);
                $requestColumn = $request['columns'][$columnIdx];
                $column = $columns[ $columnIdx ];
                if ( $requestColumn['orderable'] == 'true' ) {
                    $dir = $request['order'][$i]['dir'] === 'asc' ?
                        'ASC' :
                        'DESC';
                    $orderBy[] = ''.$column.' '.$dir;
                }
            }
            $order = 'ORDER BY '.implode(', ', $orderBy);
        }

        switch($_SESSION["jurisdiction_class"]){
            case "club":
                $sWhere = " WHERE club.jur_id = $jur_id";
                break;
            case "district":
                $sWhere = " WHERE district.jur_id = $jur_id";
                break;
            case "region":
                $sWhere = " WHERE region.jur_id = $jur_id";
                break;
            case "nation":
                $sWhere= " WHERE nation.jur_id = $jur_id";
                break;

            case "casino":
                $sWhere= " WHERE 1=1";
                break;
        }
        if($request['status']!=2){
            if($request['status']==0){
                $sWhere.=" And ptn_status=0";
            }
            else{
                $sWhere.=" And ptn_status!=0";
            }
        }

        if($request["maxValue"]){
            $sWhere.=" AND club.jur_available_credit < ".$dbh->escape($request["maxValue"]);
        }

        $str = $request['search']['value'];
        if ( isset($request['search']) && $request['search']['value'] != '' ) {
            $extrasWhere = " AND ";
            $extrasWhere .=" (club.jur_name  LIKE '%".mysql_real_escape_string( $str )."%' OR ptn_name LIKE '%".$dbh->escape($str)."%' )";
        }
        $sQuery = "  SELECT SQL_CALC_FOUND_ROWS ".str_replace(" , ", " ", implode(", ", $columns))."
    FROM   $sTable
    $sWhere
    $extrasWhere
    $order  
    $limit";
        $rResult = $dbh->exec($sQuery)  ;

        $sQuery = " SELECT FOUND_ROWS() ";
        $iFilteredTotal = $dbh->queryOne($sQuery) ;

        $rResultFilterTotal = $dbh->queryOne("SELECT count(*) from $sTable $sWhere");
        $tableArray=array();

        while ($rResult->hasNext()){
            $row=$rResult->next();
            $section=array();
            $i=0;
            $section[$i++]=$row['ptn_id'];
            $section[$i++]=$row['jur_name']."<br />".($row['jur_status']!=1? "<span class='text-error'>".$lang->getLang('Blocked')."</span>" :"<span class='text-success'>".$lang->getLang('Active')."</span>");
            $section[$i++]="<span id='".$row['jur_id']."_credit'>".getInDollars($row["jur_available_credit"],2,$row["cur_code_for_web"])."</span>";
            $section[$i++]="<span class='partnerName'>".$row['ptn_name']."</span><br />".
                ($row['ptn_status']==0? "<span class='text-error partnerStatus'>".$lang->getLang('Disabled')."</span>" :
                    ($row['ptn_status']==2 ? "<span class='text-success partnerStatus'>".$lang->getLang('Enabled -Force rollback ')."</span>" :
                        "<span class='text-success partnerStatus'>".$lang->getLang('Enabled')."</span>"));
            $section[$i++]="<button class='btn btn-small showPartnerDetails' data-id='".$row['ptn_id']."'>".$lang->getLang("Show details")."</button>";
            $section[$i]="";
            if($this->check_access('manage_partners_modification')) {
                //dropdown menu
                $section[$i].='<div class="btn-group">
                    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">'.$lang->getLang("Action").'<span class="caret"></span></button>
                    <ul class="dropdown-menu" style="min-width:80px "  data-id="'.$row['ptn_id'].'" data-status="'.$row['ptn_status'].'" data-name="'.$row['ptn_name'].'" data-club="'.$row['jur_id'].'">
                        <li class="modifyPartner"><a href="javascript:void(0)" ><i class="icon-pencil"> </i> '.$lang->getLang("Modify").'</a></li>
                        <li class="blockPartner" ><a href="javascript:void(0)" >'.($row['ptn_status']==1? '<i class="icon-ban-circle"></i>'. $lang->getLang("Disable") : '<i class="icon-ok"></i>'. $lang->getLang("Enable")).'</a></li>
                        <li class="depositWithdraw" data-type="deposit" ><a href="#depositWithdrawDiv"  data-toggle="modal" ><i class="icon-hand-left"> </i> '.$lang->getLang("Deposit").'</a></li>
                        <li class="depositWithdraw" data-type="withdraw"><a href="#depositWithdrawDiv"  data-toggle="modal" ><i class="icon-hand-right"> </i> '. $lang->getLang("Withdraw").'</a></li>
                        <li class="clonePartner" data-id="'.$row['ptn_id'].'"><a href="#myModal"  data-toggle="modal" ><i class="icon-file"> </i> '. $lang->getLang("Clone").'</a></li>
                    </ul>
                </div>';
            } else {
                $section[$i]=$lang->getLang("No action available");
            }
            array_push($tableArray,$section);
        }

        $output= array(
            "draw"            => intval( $request['draw'] ),
            "recordsTotal"    => intval( $rResultFilterTotal ),
            "recordsFiltered" => intval( $iFilteredTotal ),
            "data"            => $tableArray
        );
        echo json_encode( $output);

    }

    public function deleteGameLimit($request) {
        global $dbh,$lang;
        $jur_id = $_POST["jur_id"];
        $jur_class = $_POST["jur_type"];



        $username = $request['username'];

        $jurisdiction = '';
        if ($jur_class == 'casino') {
            $jurisdiction = 'n.jur_id';
        } else if ($jur_class == 'nation') {
            $jurisdiction = 'n.jur_id';
        } else if ($jur_class == 'region') {
            $jurisdiction = 'r.jur_id';
        } else if ($jur_class == 'district') {
            $jurisdiction = 'd.jur_id';
        } else if ($jur_class == 'club') {
            $jurisdiction = 'c.jur_id';
        }

        $sTable = " egamessystem.jurisdiction n
            JOIN egamessystem.jurisdiction r ON n.jur_id = r.jur_parent_id
            JOIN egamessystem.jurisdiction d ON r.jur_id = d.jur_parent_id
            JOIN egamessystem.jurisdiction c ON d.jur_id = c.jur_parent_id
            JOIN egamessystem.punter ON pun_betting_club = c.jur_id
            JOIN egamessystem.punter_games_limit gl ON pun_id = pgl_pun_id
            LEFT JOIN egamessystem.providers ON pes_game_code = pgl_pes_game_code ";
        $sWhere = " WHERE $jurisdiction = $jur_id";

        $sQuery = "DELETE gl.*
                from 
                $sTable
                $sWhere";


        $rResult = $dbh->exec($sQuery);

        return '2';
    }

    public function getGamesLimit($request){
        global $dbh,$lang;
        $jur_id = $_SESSION["jurisdiction_id"];
        $jur_class = $_SESSION['jurisdiction_class'];

        if($request['searchBy'] == 1) {
            $username = $request['username'];

            $jurisdiction = '';
            if ($jur_class == 'casino') {
                $jurisdiction = 'n.jur_parent_id';
            } else if ($jur_class == 'nation') {
                $jurisdiction = 'n.jur_parent_id';
            } else if ($jur_class == 'region') {
                $jurisdiction = 'r.jur_parent_id';
            } else if ($jur_class == 'district') {
                $jurisdiction = 'd.jur_parent_id';
            } else if ($jur_class == 'club') {
                $jurisdiction = 'c.jur_parent_id';
            }

            $sTable = "egamessystem.jurisdiction n
        JOIN egamessystem.jurisdiction r ON n.jur_id = r.jur_parent_id
        JOIN egamessystem.jurisdiction d ON r.jur_id = d.jur_parent_id
        JOIN egamessystem.jurisdiction c ON d.jur_id = c.jur_parent_id
        JOIN egamessystem.punter ON pun_betting_club = c.jur_id AND pun_id = $username
        JOIN egamessystem.punter_games_limit gl ON pun_id = pgl_pun_id
        LEFT JOIN egamessystem.providers ON pes_game_code = pgl_pes_game_code";
            $sWhere = " WHERE $jurisdiction = $jur_id";
            $sQuery = "SELECT n.jur_id as nation_id, n.jur_name as nation, r.jur_id as region_id, r.jur_name as region, d.jur_id as district_id, d.jur_name as district, c.jur_id as club_id, c.jur_name as club, gl.*, COALESCE(pes_name, 'ALL') provider_name, pun_username
        from 
        $sTable
        $sWhere";

        }

        if($request['searchBy'] == 2) {

            $jur_id = $request["jur_select"];
            $jur_class = $request['jur_level'];

            $jurisdiction = '';
            if ($jur_class == 'casino') {
                $jurisdiction = 'n.jur_id';
            } else if ($jur_class == 'nation') {
                $jurisdiction = 'n.jur_id';
            } else if ($jur_class == 'region') {
                $jurisdiction = 'r.jur_id';
            } else if ($jur_class == 'district') {
                $jurisdiction = 'd.jur_id';
            } else if ($jur_class == 'club') {
                $jurisdiction = 'c.jur_id';
            }

            $sTable = " egamessystem.jurisdiction n
            JOIN egamessystem.jurisdiction r ON n.jur_id = r.jur_parent_id
            JOIN egamessystem.jurisdiction d ON r.jur_id = d.jur_parent_id
            JOIN egamessystem.jurisdiction c ON d.jur_id = c.jur_parent_id
            JOIN egamessystem.punter ON pun_betting_club = c.jur_id
            JOIN egamessystem.punter_games_limit gl ON pun_id = pgl_pun_id
            LEFT JOIN egamessystem.providers ON pes_game_code = pgl_pes_game_code ";
            $sWhere = " WHERE $jurisdiction = $jur_id";
            $sQuery = "SELECT n.jur_id as nation_id, n.jur_name as nation, r.jur_id as region_id, r.jur_name as region, d.jur_id as district_id, d.jur_name as district, c.jur_id as club_id, c.jur_name as club, gl.*, COALESCE(pes_name, 'ALL') provider_name, pun_username
            from 
            $sTable
            $sWhere";

        }

        $rResult = $dbh->exec($sQuery) ;

        $sQuery = " SELECT FOUND_ROWS() ";
        $iFilteredTotal = $dbh->queryOne($sQuery);

        $rResultFilterTotal = $dbh->queryOne("SELECT count(*) from $sTable $sWhere");
        $tableArray=array();

        while ($rResult->hasNext()){
            $row=$rResult->next();
            $section=array();
            $i=0;
            $section[$i++]=$row['nation'];
            $section[$i++]=$row['region'];
            $section[$i++]=$row['district'];
            $section[$i++]=$row['club'];
            $section[$i++]=$row['pun_username'];
            $section[$i++]=$row['pgl_creation'].'<br>'.$row['pgl_last_update'];
            $section[$i++]=$row['pgl_deposit_limit'];
            $section[$i++]=$row['pgl_withdraw_limit'];
            $section[$i++]=$row['pgl_bet_limit'];
            $section[$i++]=$row['pgl_win_limit'];
            $section[$i++]=$row['provider_name'];

            $section[$i]="";
            if(check_access('casino_games_limit_modify')) {
                //dropdown menu
                $section[$i].='<div class="btn-group">
                    <button class="btn btn-small modifyGameLimit" data-id="'.$row['pgl_id'].'" ><i class="icon-pencil"> </i>'.$lang->getLang("Modify").'</button>
                    <button class="btn btn-danger btn-small deleteUserGameLimit" data-id="'.$row['pgl_id'].'" ><i class="icon-trash"> </i> </button>
                </div>';
            } else {
                $section[$i]=$lang->getLang("No action available");
            }
            array_push($tableArray,$section);
        }

        $output= array(
            "draw"            => intval( $request['draw'] ),
            "recordsTotal"    => intval( $rResultFilterTotal ),
            "recordsFiltered" => intval( $iFilteredTotal ),
            "data"            => $tableArray
        );
        echo json_encode( $output);

    }

    public function getAllClubs() {
        global $dbh;
        $sql = "select jur_name,jur_id from jurisdiction where jur_class='club'";

        $result = $dbh->doCachedQuery ( $sql, 0 );
        return $result;
    }

    public function getProviders($poker=false)
    {
        global $dbh;
        $sql="Select * from providers";
        if($poker){
            $sql.=" where pes_name like '%poker%'";
        }
        $result= $dbh->doCachedQuery($sql,0);
        return $result;
    }
    public function getProvidersList($search=false)
    {

        global $dbh;
        $sql="Select * from egamessystem.providers";
        if($search){
            $sql.=" where pes_name like '%".$search."%'";
        }
//        die($sql);
        $result= $dbh->doCachedQuery($sql,0);
        return $result;
    }
    public function checkGames($games)
    {
        $gid=strpos($games, 'gid:');
        if($gid!==false){
            $games=substr($games, 4);
        }
        return $games;
    }



    public function addProvider($props)
    {
        global $dbh;
        if($props['name']!=''){
            $sql="SELECT * FROM providers where pes_name=".$dbh->prepareString($props['name']);
            if($result=$dbh->queryRow($sql))
            {
                return '2';
            }
            $sql="SELECT pes_id from providers where pes_remote_key=".$dbh->prepareString($props['key']);
            if($result=$dbh->queryRow($sql))
            {
                return '4';
            }
            $sql = "SELECT pes_id from providers where pes_id =" .$dbh->prepareString($props['providerNewId']);
            $result=$dbh->queryRow($sql);
            //var_dump($result);
            if( $result != null) {
                return '5';
            }

            if($props['providerNewId'] == "") {
                $sql="INSERT INTO providers 
            (
            pes_name,
            pes_allowip,
            pes_remote_id,
            pes_game_code,
            pes_gam_id,
            pes_remote_key,
            pes_remote_url,
            pes_status,
            pes_transfer_type,
            pes_params,
            pes_master_currency,
            pes_other_currency,
            pes_has_multy_cur_param)
			          VALUES(
			          ".$dbh->prepareString($props['name']).",
			           ".$dbh->prepareString(implode("|",$props['ips'])).",
			          ".$dbh->prepareString($props['remoteId']).",
			          ".$dbh->prepareString($props['games']).",
			          ".$dbh->prepareString($props['gameId']).",
			          ".$dbh->prepareString($props['key']).",
			          ".$dbh->prepareString($props['websiteURL']).",
			          ".$dbh->prepareString($props['status']).",
			          ".$dbh->prepareString($props['transfer_type']).",
			          ".$dbh->prepareString($props['params']).",
			          ".$dbh->prepareString($props['mcurrency']).",
			          ".$dbh->prepareString(implode(";",$props['ocurrency'])).",
			          ".$dbh->prepareString($props['hmcurrency']).")";
            }
            else {
                $sql="INSERT INTO providers 
            (
            pes_id,
            pes_name,
            pes_allowip,
            pes_remote_id,
            pes_game_code,
            pes_gam_id,
            pes_remote_key,
            pes_remote_url,
            pes_status,
            pes_transfer_type,
            pes_params,
            pes_master_currency,
            pes_other_currency,
            pes_has_multy_cur_param)
			          VALUES(
			           ".$dbh->prepareString($props['providerNewId']).",
			          ".$dbh->prepareString($props['name']).",
			           ".$dbh->prepareString(implode("|",$props['ips'])).",
			          ".$dbh->prepareString($props['remoteId']).",
			          ".$dbh->prepareString($props['games']).",
			          ".$dbh->prepareString($props['gameId']).",
			          ".$dbh->prepareString($props['key']).",
			          ".$dbh->prepareString($props['websiteURL']).",
			          ".$dbh->prepareString($props['status']).",
			          ".$dbh->prepareString($props['transfer_type']).",
			          ".$dbh->prepareString($props['params']).",
			          ".$dbh->prepareString($props['mcurrency']).",
			          ".$dbh->prepareString(implode(";",$props['ocurrency'])).",
			          ".$dbh->prepareString($props['hmcurrency']).")";
            }
            $result = $dbh->exec($sql);
            if($result)
            {
//                $id = mysql_insert_id();
                return '1';
            }
            else{
                return '3';
            }
        }
        else{
            return '3';
        }
    }
    public function updateProvider($props) {
        global $dbh;
        $sql = "SELECT pes_id from providers where pes_id =" .$dbh->prepareString($props['providerNewId']);
        $result = $dbh->queryRow($sql);
        if($result != null && $props['providerNewId'] != $props['providerid']) {
            return '5';
        } else {
            $sql = "Update providers
        SET
        pes_id=".$dbh->prepareString($props['providerNewId']).",
        pes_name=".$dbh->prepareString($props['name']).",
        pes_allowip=".$dbh->prepareString(implode("|",$props['ips'])).",
        pes_remote_id=".$dbh->prepareString($props['remoteId']).",
        pes_game_code=".$dbh->prepareString($props['games']).",
        pes_gam_id=".$dbh->prepareString($props['gameId']).",
        pes_remote_key=".$dbh->prepareString($props['key']).",
        pes_remote_url= ".$dbh->prepareString($props['websiteURL']).",
        pes_status= ".$dbh->prepareString($props['status']).",
        pes_transfer_type= ".$dbh->prepareString($props['transfer_type']).",
        pes_params=  ".$dbh->prepareString($props['params']).",
        pes_master_currency=".$dbh->prepareString($props['mcurrency']).",
        pes_other_currency= ".$dbh->prepareString(implode(";",$props['ocurrency'])).",
        pes_has_multy_cur_param= ".$dbh->prepareString($props['hmcurrency']) .
                "  WHERE pes_id=".$dbh->escape($_REQUEST['providerid']);
            $result = $dbh->exec ($sql);
            if($result){
                return '1';
            }
        }


    }

    public function getJurisdictionSkins($jur_id=false,$class=false){
        global $dbh;
        if(!$jur_id){
            $jur_id = $_SESSION["jurisdiction_id"];
        }

        if(!$class){
            $class=$_SESSION['jurisdiction_class'];
        }
        $sql="select skn_id,  skn_name";
        if($class!='casino'){
            $sql.=" from
                        (
                       select n2.jur_id nation_jur_id
                        " ;



            switch($class){
                case "club":
                    $sql .= "
                        from jurisdiction c2, jurisdiction d2, jurisdiction r2, jurisdiction n2
                        where c2.jur_id = $jur_id
                        and c2.jur_parent_id = d2.jur_id
                        and d2.jur_parent_id = r2.jur_id
                        and r2.jur_parent_id = n2.jur_id
                        and n2.jur_parent_id = 1 ";
                    break;
                case "district":
                    $sql .= "
                        from  jurisdiction d2, jurisdiction r2, jurisdiction n2
                        where d2.jur_id = $jur_id
                        and d2.jur_parent_id = r2.jur_id
                        and r2.jur_parent_id = n2.jur_id
                        and n2.jur_parent_id = 1 ";
                    break;
                case "region":
                    $sql .= "
                        from  jurisdiction r2, jurisdiction n2
                        where r2.jur_id = $jur_id
                        and r2.jur_parent_id = n2.jur_id
                        and n2.jur_parent_id = 1 ";
                    break;
                case "nation":
                    $sql .= "
                        from   jurisdiction n2
                        where n2.jur_id = $jur_id
                        and n2.jur_parent_id = 1 ";
                    break;
            }
            $sql.=") t, skins, jurisdiction c, jurisdiction d, jurisdiction r, jurisdiction n
                        where c.jur_id = skn_jur_id
                        and c.jur_parent_id = d.jur_id
                        and d.jur_parent_id = r.jur_id
                        and r.jur_parent_id = n.jur_id
                        and n.jur_id = nation_jur_id ";
        }

        else{
            $sql .= "
                        from   skins ";
        }
        return $dbh->exec($sql);
    }
    public function createSkinSelect($availableSkins,$defaultSkin=-1,$optionNone=false,$optionAll=false) {
        global $dbh;

        $selected = '';
        $str  = '<select name="skin">';
        if($optionNone){
            $str.= '<option value="'.$optionNone.'"' . $selected . '>Not configured</option>';
        }
        if($optionAll){
            $str.= '<option value="">All</option>';
        }
        while ($availableSkins->hasNext()) {
            $row = $availableSkins->next();
            $selected = '';
            if($row['skn_id']==$defaultSkin){
                $selected = 'selected';
            }


            $str .= '<option value="' . $row['skn_id'] . '"' . $selected . '>' . $row['skn_name'] . '</option>';
        }
        $str .= '</select>';
        return $str;
    }


    public function getAvailableCountries(){
        global $dbh,$skinsettings;
        $sql="SELECT COU_CODE,COU_NAME FROM country";
        $result = $dbh->doCachedQuery($sql, 3600*24*30);

        return $result;
    }

    public function getAllPaymentProcessors(){
        global $dbh,$skinsettings;
        $sql="SELECT * FROM processor_payment";
        $result = $dbh->doCachedQuery($sql, 3600*24*30);
        return $result;
    }
    /**
     * @param $jur_id
     * @return bool|int|RecordSet|string
     */
    public function getSkinByJurisdiction($jur_id,$full=false){
        global $dbh;
        if($full){
            $sql="Select * from skins,jurisdiction where jur_skn_id=skn_id AND jur_id=".$jur_id;
            $skin=$dbh->queryRow($sql);
        }
        else{
            $sql="Select skn_name from skins,jurisdiction  where jur_skn_id=skn_id AND jur_id=".$jur_id;
            $skin=$dbh->queryOne($sql);
        }

        if($skin==''){
            $skin="None";
        }
        return $skin;
    }
}