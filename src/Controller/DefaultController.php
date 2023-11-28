<?php
/**
 * Created by PhpStorm.
 * User: lau
 * Date: 2/3/21
 * Time: 10:01 AM
 */
namespace App\Controller;

use mysql_xdevapi\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Cookie;

class DefaultController extends AbstractController {

    /**
     * @Route("/", name="home")
     *
     */
    public function indexAction(Request $request, Session $session) : Response
    {
        $randomString = $this->randomString(true);
//        $session = new Session();
        $errorMessage = '';

        $cookieCheck = isset($_COOKIE['bsid']) ? $_COOKIE['bsid'] :$randomString;
        if(!isset($_COOKIE['bsid'])) {
            if(isset($_COOKIE['asid'])) {
                setcookie('bsid', $_COOKIE['asid'], time() + (86400 * 30), '/', '.cspstar.com');

            }else{
                setcookie('asid', $randomString, time() + (86400 * 30), '/', '.cspstar.com');
                setcookie('bsid', $randomString, time() + (86400 * 30), '/', '.cspstar.com');
            }
        }
     $session->start();
        if($session->get( 'id' ) != $cookieCheck){

        }

        $number = 0;
        $loggedUser = '';
        if (isset($_SESSION["admin_username"])) {
            setcookie('logged',$randomString, time() + (86400 * 30),'/');
            return $this->render('default/index.html.twig',[
                'number' => $number,
                'loggedUser' => $_SESSION["admin_username"],
                'credit' => $_SESSION["jurisdiction_credit"],
                'challenge' => $randomString,
                'errorMessage' => $errorMessage,
                'currency' => $_SESSION['currency_html'],
            ]);
        } else {
            return $this->render('default/index.html.twig', [
                'number' => $number,
                'loggedUser' => $loggedUser,
                'credit' => 0,
                'challenge' => $randomString,
                'errorMessage' => $errorMessage,
                'currency' => '&euro;',
            ]);
        }
    }

    function generateSessionId(){
        return md5(uniqid(microtime()) . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
    }

    /**
     * @return string
     * @param string $short
     *
     */
    public function randomString($short=false) {
        mt_srand((double)microtime()*1000000000000);
        $str = md5 (uniqid (rand(100, 900), true));
        return ( $short ? substr($str, 0, 8) : $str );
    }


    /**
     * @Route("/lng/{locale}", name="lang")
     */
    public function changeLangAction($locale,Request $request)
    {
        $url = $request->headers->get('referer');
        $request->setLocale($locale);
        setcookie('language_usr', $locale, time() + (3600 * 24 * 60), '/');
        $request->getSession()->set('_locale',$locale);

        if(is_null($url))
            return $this->redirect('/');
        else
            return $this->redirect($url);
    }
}

