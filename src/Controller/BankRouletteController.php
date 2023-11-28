<?php


/**
 * Created by PhpStorm.
 * User: lau
 * Date: 3/3/21
 * Time: 1:27 PM
 */


namespace App\Controller;
use App\Services\TranslatorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Log\Logger;
use Symfony\Component\Routing\Annotation\Route;

class BankRouletteController extends AbstractController{

    /**
     * @Route("/lobby", name="lobby")
     */
    function indexAction(Request $request, Session $session, TranslatorService $translator){
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        define( 'WEB_ROOT', "/srv/workspace/egaming/site" );
        define( 'WEB_CONFIG', WEB_ROOT . '/configs' );
        define( 'WEB_INCLUDES', WEB_ROOT . '/includes' );
        define( 'WEB_LOCALIZATION', WEB_ROOT . '/localization' );
        define( 'WEB_LOG', WEB_ROOT . '/logs' );
        define( 'WEB_LIBS', WEB_ROOT . '/libs' );
        define( 'WEB_CLASSES', WEB_ROOT . '/classes' );
        define( 'WEB_SERVICES', WEB_ROOT . '/service');
        define( 'SKINS_PATH', WEB_ROOT . '/skins' );
        define( 'WEB_WWW', WEB_ROOT . '/www' );
        define( 'HOST', "http://" . $_SERVER ["HTTP_HOST"] );
        define( 'SELF', $_SERVER ["PHP_SELF"] );
        define( 'WEB_COMMONS' , ((isset($_SERVER['MEDIA_COMMONS'])) ? $_SERVER['MEDIA_COMMONS'] : $protocol . $_SERVER['HTTP_HOST'] . "/skins/commons"));
        define( 'WEB_SKINS', HOST . '/skins' );
        define( 'GAMES_URL' , WEB_COMMONS . "/media/images/games/");
        define( 'WEBAPP_ADDRESS', 'http://testsrv.cspstar.com/services/WebSiteServiceManager');
        define( 'GENERIC_WEBAPP_ADDRESS', 'http://testsrv.cspstar.com/services/');
        define( 'GENERIC_WEBAPP_ADDRESS_SSL', 'https://testsrv.cspstar.com/services/');
        define( 'WEBAPP_SERVICES', $_SERVER['WEB_SERVICES'] );
        define( 'WEBAPP_MESSAGE', $_SERVER['WEBAPP_MESSAGE'] );
        define( 'SQL_CACHE_DIR', WEB_ROOT . '/cache' );
        define( 'SECURITY_PID', 'SECURITY_PID_USER' );
        define( "MEMSERVERCACHE", "localhost");
        define( "MEMPORTCACHE", 11211);
        define( "USER_PHOTOS", "");
        define( 'LANGUAGES_PATH', WEB_ROOT . '/languages' );

        define("COOKIE_TIME" , 3600);
        define('SECURE_SITE', "https://".$_SERVER['SERVER_NAME']);

        define('REGISTRATION_SMART', 3000);
        define('LOGIN_SMART', 3001);
        define('LOGOUT', 3002);
        define('REGISTRATION_FULL', 3003);
        define('TANSFER_CREDIT', 3011);
        define('CREDIT_HISTORY', 3005);
        define('GET_DETAILS', 3006);
        define('RECOVERPASS', 3007);
        define('GET_CREDITS', 3008);
        define('UPDATE_DATA', 3009);
        define('GAME_HISTORY', 3010);
        define('GET_MESSAGES', 3011);
        define('REGISTRATION777',3012);
        define('REGISTRATION', 3015);
        define('WEBAPP_KEY', $_SERVER['WKEY']);
        define('CHECK_USERNAME', 3016);
        define('CLOSE_ACCOUNT', 3017 );
        define('CHECK_PROMOTIONS', 3018 );
        define('ADD_WEB_AFFILIATE', 3030 );
        define('GET_AFFILIATES', 3031 );
        define('AFFILIATES_TRANSFER', 3033 );
        define('LOBBY_INFO', 4000 );
        define('LOBBY_CREDIT', 4001 );

        define('LOG_FILE_NAME', '/var/log/httpd/gamelauncher.log');
        define('HEADER_FILE_LOG', 'games.php');

        define ( "REDISSERVER", "10.10.0.101");
        define ( "REDISPORT", 6379);

        $session->start();
        $bannerClicked = isset($_COOKIE['bannerClk']) ? $_COOKIE['bannerClk'] : 2;
//        $template->assign('bannerClicked', $bannerClicked);
        $_SESSION['key'] = $_COOKIE['bsid'];
        $sessionId = isset($_GET['_key']) ?  $_GET['_key'] :  $_SESSION['key'];
        $hasKeyVal = isset($_GET['_key']) ?  1 : 0;
        if (isset($_GET['_key']) && isset($_GET['ptn'])) {
            $_SESSION['key'] = $sessionId;
            $hasKeyVal= 0;
        } // end if
        $username = isset($_GET['usr']) ? $_GET['usr'] : $_SESSION['username'];

        if(isset($_GET['mobile'])) {
            $isMobile = $_GET['mobile'] ? $_GET['mobile'] : false;
        }else {
            $useragent = $_SERVER['HTTP_USER_AGENT'];

            if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4)))
                $isMobile = true;
            else {
                $isMobile = false;
            }
        }

        $currency = isset($_GET['curr']) ? $_GET['curr'] : $_SESSION["currency"];
        $credit = isset($_GET['credit']) ? isset($_GET['credit']) : (isset($_SESSION["jurisdiction_credit"]) ? $_SESSION["jurisdiction_credit"] : 0);



        $hostLobby = GENERIC_WEBAPP_ADDRESS . "LobbyService";
        $logoUrl = $_SERVER["MEDIA_DIR"]."/media/images/logo_small.png";
        $gameFolderConfig = "wbsite";
        $webApp = GENERIC_WEBAPP_ADDRESS."WebSiteServiceManager";


        if (isset($_GET['ptn'])) {
            $partnersConfigured = parse_ini_file(WEBAPP_ADDRESS . '/lobbypartnerlogo.ini');
            $partnersList = $partnersConfigured ['partner'];
            $logoUrl = $partnersList[$_SERVER['HTTP_HOST']];
            $gameFolderConfig = "ptngeneric";
//            $twig->addGlobal('username', $username);
            //var_dump($logoUrl . "  ---   " . $_SERVER['HTTP_HOST']);
            if (!isset($logoUrl)) {

            }
        }

        if($sessionId) {
            $toPrint = '<span class="username" style="display:none;">' . $username . '</span>';
            $toPrint .= '<span class="credit" style="display:none;">' . $credit . ' ' . $currency . '</span>';
        }

        $mobileGame = '&cltype=HTML5&ismo=' . ($isMobile ? 'true' : 'false');

        if(!$isMobile){
            $toPrint .= '<img class="logoH" src="'. $logoUrl . '">';


        }


        if (isset($_SERVER['SYSTEM_FORFUN']) && $_SERVER['SYSTEM_FORFUN'] == "true") {
            $openGamesUrl = GENERIC_WEBAPP_ADDRESS . "GameLauncherForFun";
        } else {
            $openGamesUrl = GENERIC_WEBAPP_ADDRESS . "GameLauncher";
        }

        $url = '' . $openGamesUrl . '?_key='.$sessionId.'&hst=2'.$mobileGame.'&ptnc=' . $gameFolderConfig;

        $toPrint .= '';






        if( isset($_SERVER['SHOW_CURRENCY']))
            $showCurrency =  $_SERVER['SHOW_CURRENCY'];
        else
            $showCurrency = 'true';

        if($isMobile)
            return $this->render('default/games/lobby_mobile.html.twig', [
                'scripts' => $toPrint,
                'skikeyn' => $sessionId,
                'username' => $username,
                'key' => $sessionId,
                'credit' => $credit,
                'hasKeyVal' => $hasKeyVal,
                'webApp' => WEBAPP_ADDRESS,
                'currency' => $currency,
                'lobbyInfoRequestCode' => LOBBY_INFO,
                'lobbyCreditRequestCode' => LOBBY_CREDIT,
                'hostLobby' => $hostLobby,
                'gamesDisabled' => $_SERVER['LOBBY_DISABLED_GAMES'] ? $_SERVER['LOBBY_DISABLED_GAMES'] : 0,
                'skinid' => $_SERVER['SKINS_ID'],
                'showCurrency' => $showCurrency,
                'commons_dir' => 'http://commons.jack30.com/',
                'url' => $url
            ]);
        else
            return $this->render('default/games/new_lobby.html.twig', [
                'scripts' => $toPrint,
                'skikeyn' => $sessionId,
                'username' => $username,
                'key' => $sessionId,
                'credit' => $credit,
                'hasKeyVal' => $hasKeyVal,
                'webApp' => WEBAPP_ADDRESS,
                'currency' => $currency,
                'lobbyInfoRequestCode' => LOBBY_INFO,
                'lobbyCreditRequestCode' => LOBBY_CREDIT,
                'hostLobby' => $hostLobby,
                'gamesDisabled' => isset($_SERVER['LOBBY_DISABLED_GAMES']) ? $_SERVER['LOBBY_DISABLED_GAMES'] : 0,
                'skinid' => $_SERVER['SKINS_ID'],
                'showCurrency' => $showCurrency,
                'commons_dir' => 'http://commons.jack30.com/',
                'url' => $url
            ]);

    }
}