<?php
/**
 * Created by PhpStorm.
 * User: lau
 * Date: 2/18/21
 * Time: 12:51 PM
 */

namespace App\Controller;

use App\Entity\Users;
use App\Services\HTTPRequestSender;
use App\Services\TranslatorService;
use App\Utils\Configuration;
use App\Utils\UtilityFunctions;
use App\Utils\UtilsFunction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Log\Logger;
use Symfony\Component\Routing\Annotation\Route;


//use Symfony\Component\HttpFoundation\Response;

class UsersController extends AbstractController
{
    /**
     * @Route("/fastregistration", name="fast_registration")
     */
    public function fastregistrationAction(Request $request, Session $session, TranslatorService $translator)
    {
        $session->start();
        $userSessActive = UtilityFunctions::checkUserSession();
        if(!$userSessActive){
            return new JsonResponse(-1);
        }
        $logger = new Logger();
        $requestLog = new HTTPRequestSender($logger);
        $loggedUser = isset($_SESSION['admin_username'] )?  $_SESSION['admin_username'] : '';
        $sessId = null;
//        $cookieCheck = isset($_COOKIE['bsid']) ? $_COOKIE['bsid'] :$randomString;
        if($request->get('username') != '' && $request->get('username') != null) {
            $username =  $request->get('username');
            $password =  $request->get('password');
            $confirm_password =  $request->get('confirm_password');
            $jurisdiction =  $request->get('jurisdiction');

            $data = '';
//            $info = $requestLog->sendHttpPostRequest('username=' . $username . '&password=' . $password. '&confirm_password=' . $confirm_password. '&jurisdiction=' . $jurisdiction.'&extsys=true&mode=save&section=1', Configuration::WEB_APP . "customers/add.inc");

            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            if ( UtilityFunctions::isBlank($username ) )
               return new JsonResponse($translator->getLang("A username must be entered"));
            if ( UtilityFunctions::isBlank($password ) )
               return new JsonResponse($translator->getLang("Insert a password for user"));
            if ( UtilityFunctions::isBlank($confirm_password ) )
                return new JsonResponse($translator->getLang("Insert the password confirm"));
            if ( $confirm_password !=$password )
                return new JsonResponse($translator->getLang("The password and password confirmation do not match"));

            $password = md5($password);
            if(!UtilityFunctions::areErrors()){
                $entityManager = $this->getDoctrine()->getManager();
//                $response=$entityManager->getRepository(Users::class )->fastRegisterCustomer($username,$password,$_POST['jurisdiction']);
                $response=$entityManager->getRepository(Users::class )->fastRegisterCustomer($username,$password,$_POST['jurisdiction']);
                if ($response < 0) {
                    if($response == -11)
                        return new JsonResponse($translator->getLang('User already exists'));

                }
            }else
                return new JsonResponse(-13);

//            if($sessId->status == -100){
//                $errorMessage = $sessId->error0;
//            }else
//                $errorMessage = '';
            return new JsonResponse(1);
        }else{
            $entityManager = $this->getDoctrine()->getManager();
            $result=$entityManager->getRepository(Users::class )->getAllClubsUnderJurisdiction($_SESSION['jurisdiction_id']);
            $clubs=array();
            for($i = 0; $i < count($result); $i++){
                $row=$result[$i];
//                dump($row);
                if(isset($row['district_name']) && !isset($clubs[$row['district_name']])){
                    $clubs[$row['district_name']]=array();
                }
                $clubs[$row['district_name']][$row['club_id']]=$row['club_name'];
            }

        }

        return new JsonResponse($this->renderView('default/users/fastRegister.html.twig', [
            'jurList' => $clubs
        ]));
    }

    /**
     * @Route("/usersearch", name="user_search")
     */
    public function searchAction(Request $request, Session $session)
    {
        define('SEARCH_TYPE_NONE',         0);
        define('SEARCH_TYPE_EMPTY',        1);
        define('SEARCH_TYPE_USERNAME',     2);
        define('SEARCH_TYPE_USERID',       3);
        define('SEARCH_TYPE_CUSTNUM',      4);
        define('SEARCH_TYPE_EMAIL',        5);
        define('SEARCH_TYPE_IPADDRESS',    6);
        define('SEARCH_TYPE_PARTNERUSER',  7);
        define('SEARCH_TYPE_NIN_CODE',     8);
        define('SEARCH_TYPE_NAME',         9);
        define('RGX_EMAIL',    '#[a-z0-9!\#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!\#$%&\'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?#');
        define('RGX_IPADD',    '#\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b#');
        define('RGX_NUMER',    '#^\d+$#');
        define('RGX_NIN_CODE', '/^[a-z]{6}[0-9]{2}[a-z]{1}[0-9]{2}[a-z]{1}[0-9]{3}[a-z]{1}$/i');
        define('RGX_NAME',     '/^.*,.*/i');

        $session->start();
        $userSessActive = UtilityFunctions::checkUserSession();
        if(!$userSessActive){
            return new JsonResponse(-1);
        }
        $logger = new Logger();
        $requestLog = new HTTPRequestSender($logger);
        $sessId = null;
        if($request->get('search_string') !== null) {
            $entityManager = $this->getDoctrine()->getManager();
            $search_string =  $request->get('search_string');
            $max_row =  $request->get('max_rows');
            $doQuery =  $request->get('doQuery');
            $page =  $request->get('page');
            $exact =  $request->get('exact');
            $start_search =  $request->get('start_search');
            $field =  $request->get('field');
            $jurId =  $request->get('jurisdiction');
            $orderby = $request->get('orderby');
            $asc_desc = $request->get('asc_desc');
            $operation = '';
            $sessionData = $entityManager->getRepository(Users::class)->getUsersSearch($jurId, $max_row, $exact, $field, $orderby, $operation, $asc_desc, $search_string);
            return new JsonResponse($sessionData);
        }else{
            $session->start();
            $entityManager = $this->getDoctrine()->getManager();
            $result=$entityManager->getRepository(Users::class )->getAllClubsUnderJurisdiction($_SESSION['jurisdiction_id']);
            $clubs=array();
            for($i = 0; $i < count($result); $i++){
                $row=$result[$i];
//                dump($row);
                if(isset($row['district_name']) && !isset($clubs[$row['district_name']])){
                    $clubs[$row['district_name']]=array();
                }
                $clubs[$row['district_name']][$row['club_id']]=$row['club_name'];
            }
            return new JsonResponse($this->renderView('default/users/search.html.twig', [
                'jurList' => $clubs
            ]));

        }
    }
}