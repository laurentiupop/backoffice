<?php
/**
 * Created by PhpStorm.
 * User: lau
 * Date: 2/11/21
 * Time: 12:59 PM
 */

namespace App\Controller;

use App\Entity\Users;
use App\Services\HTTPRequestSender;
use mysql_xdevapi\Exception;
use App\Utils\Configuration;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpKernel\Log\Logger;

class SecurityController extends AbstractController{


    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, Session $session)
    {
        $em = $this->getDoctrine()->getManager();
        //$em->getConnection()->connect();
        $errorMessage = '';

        $randomString = (new DefaultController)->randomString(true);
        $cookieCheck = isset($_COOKIE['bsid']) ? $_COOKIE['bsid'] :$randomString;
        if(!isset($_COOKIE['bsid'])) {
            if(isset($_COOKIE['asid'])) {
                setcookie('bsid', $_COOKIE['asid'], time() + (86400 * 30), '/', '.cspstar.com');

            }else{
                setcookie('asid', $randomString, time() + (86400 * 30), '/', '.cspstar.com');
                setcookie('bsid', $randomString, time() + (86400 * 30), '/', '.cspstar.com');
            }
        }
//        session_set_cookie_params(time() + (86400 * 30), '/', '.cspstar.com', true);
        $sess_id_cookie = new Cookie ( 'bsid');
        if (is_null ( $sess_id_cookie->getValue () )) {
            $sess_id_cookie->create('bsid', $cookieCheck, time() + (86400 * 30), '/', '.cspstar.com');
        }
//        session_name("asid");
        if($session->get( 'id' ) != $cookieCheck){
            $session->start();

        }

        if(isset($_COOKIE['logged']) && isset($_SESSION["admin_username"])){
            return $this->redirect($this->generateUrl('home'));

        }
        $logger = new Logger();
        $requestLog = new HTTPRequestSender($logger);
        $loggedUser = isset($_SESSION['admin_username'] )?  $_SESSION['admin_username'] : '';
        $sessId = null;
        if($request->get('admin_username') != '' && $request->get('admin_password') != null) {
            $doLogin =  $request->get('do_login');
            $challenge =  $request->get('challenge');
            $hashed_password =  $request->get('hashed_password');
            $admin_username =  $request->get('admin_username');
            $admin_password =  $request->get('admin_password');
            $captcha_code =  $request->get('captcha_code');

            $data = '';
            $info = $requestLog->sendHttpPostRequest('do_login=' . $doLogin . '&challenge=' . $challenge. '&admin_password=' . $admin_password. '&admin_username=' . $admin_username. '&hashed_password=' . $hashed_password.'&extsys=true&cookieid=' .$cookieCheck, Configuration::WEB_APP . "login.inc");

            $sessId = json_decode($info);
            if(isset($sessId->status)){
                if($sessId->status == -100){
                    $errorMessage = $sessId->error0;
                }
            }else{
                $errorMessage = $info;
            }

        }
        if (isset($sessId) && $sessId->status == 0) {
            try {
                $entityManager = $this->getDoctrine()->getManager();
                $sessionData = $entityManager->getRepository(Users::class)->getUserSessionInfo($sessId->username);
                $sessionData = $sessionData[0];
                $aus_id = $sessionData['aus_id'];
                $aty_level = $sessionData['aty_level'];
                $jurisdiction_id = $sessionData['aus_jurisdiction_id'];
                $aty_id = $sessionData['aus_aty_id'];
                $jurisdiction_class = $sessionData['aty_jurisdiction_class'];
                $cou_id = $sessionData['aus_cou_id'];
                $credit = $sessionData['jur_available_credit'];
                $overdraft = $sessionData['jur_overdraft'];
                $pending = $sessionData['jur_reserved_fund'];
                $jur_code = $sessionData['jur_code'];
                $admin_username = $sessionData['aus_username'];
                $curr = $sessionData['cur_name'];
                $curr_html = $sessionData['cur_code_for_web'];
                $curr_id = $sessionData['cur_id'];
                $jurChildsLimit = $sessionData['jur_childs_limit'];
                $jurUsersLimit = $sessionData['jur_users_limit'];
                $aty_code = trim($sessionData['aty_code']);

                $_SESSION["admin_id"] = $aus_id;
                $_SESSION["jurisdiction_credit"] = $credit;
                $_SESSION["jurisdiction_overdraft"] = $overdraft;
                $_SESSION["jurisdiction_pending"] = $pending;
                $_SESSION["admin_username"] = $admin_username;
                $_SESSION["username"] = $admin_username;
                $_SESSION["aty_id"] = $aty_id;
                $_SESSION["aty_level"] = $aty_level;
                $_SESSION["aty_code"] = $aty_code;
                $_SESSION['jurisdiction_id'] = ($jurisdiction_id) ? $jurisdiction_id : 0;
                $_SESSION['jurisdiction_class'] = $jurisdiction_class;
                $_SESSION['aus_cou_id'] = $cou_id;
                $_SESSION['totem_code'] = $jur_code;
                $_SESSION['currency'] = $curr;
                $_SESSION['currency_html'] = $curr_html;
                $_SESSION['currency_id'] = $curr_id;
                $_SESSION['jur_childs_limit'] = $jurChildsLimit;
                $_SESSION['jur_users_limit'] = $jurUsersLimit;
            } catch (\Exception $e) {
                $listOfMenuContent = [(object)["id" => "-1", "pos" => "0", "name" => "Home"]];
            }
            return $this->redirect($this->generateUrl('home'));
        } else {
            if (isset($_SESSION["admin_username"])) {
                return $this->render('default/index.html.twig', [
                    'loggedUser' => $_SESSION["admin_username"],
                    'credit' => $_SESSION["jurisdiction_credit"],
                    'currency' => $_SESSION['currency_html'],
                    'challenge' => $randomString,
                    'errorMessage' => $errorMessage,
                ]);
            }
            $number = '';

            // TODO manage in case $sessId- is set and $sessId-status -100 ... is needed to show the error message
            return $this->render('default/index.html.twig', [
                'number' => $number,
                'errorMessage' => $errorMessage,
                'loggedUser' => $loggedUser,
                'credit' => 0,
                'currency' => '&euro;',
                'challenge' => $randomString
            ]);
        } // end if - else


    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request, Session $session)
    {

        $logger = new Logger();
        $requestLog = new HTTPRequestSender($logger);
        $randomString = (new DefaultController)->randomString(true);
        $session->remove($_COOKIE['asid']);
        $cookieCheck = isset($_COOKIE['bsid']) ? $_COOKIE['bsid'] :$randomString;
        if(isset($_COOKIE['asid'])) {
            setcookie('bsid', $_COOKIE['asid'], time() + (86400 * 30), '/', '.cspstar.com');

        }else{
            setcookie('asid', $randomString, time() + (86400 * 30), '/', '.cspstar.com');
            setcookie('bsid', $randomString, time() + (86400 * 30), '/', '.cspstar.com');
        }
        $requestLog->sendHttpPostRequest("extsys=true&cookieid=" . $cookieCheck, Configuration::WEB_APP . "logout.inc");
        $session = $request->getSession();

        $session->invalidate(); //here we can now clear the session.


        return $this->redirectToRoute('home');
    }


    function generateSessionId(){
        return md5(uniqid(microtime()) . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
    }

}