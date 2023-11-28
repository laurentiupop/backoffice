<?php
/**
 * Created by PhpStorm.
 * User: lau
 * Date: 2/11/21
 * Time: 1:36 PM
 */

namespace App\Utils;
use Symfony\Component\HttpFoundation\Request;


define('TRANSLATION_PATH','../translations');
class Configuration
{
    const defaultCurrMaster = ['EUR'];
    const SKINS_PATH ='/templates/views/content';
    const BANNERS_PATH ='../public/commons/img/banners';
    const REDIS_SERVER = '10.10.0.111';
    const REDIS_PORT = '6379';
    const REDIS_BETTING_SERVER = '10.10.0.111';
    const REDIS_BETTING_PORT = '6379';
    public $redisServer ='10.10.0.111';
    public $redisPort='6379';
    public $webappKey;
    public $skinId;
    public $siteConf;
    const WEB_APP = 'https://testadm.cspstar.com/';
    const GENERIC_WEBAPP_ADDRESS = 'http://jack30.com/';
    const WEB_CONFIG = 'https://testadm.cspstar.com/';
    const LOBBY_INFO = 'https://testadm.cspstar.com/';
    const LOBBY_CREDIT = '';


    public $webappServices;
    private $configs;
    public static $availableLanguages=[
        'en'=>'English'
    ];

    public static $availableLanguages2=[
        'en'=>'English',
        'it'=>'Italiano',
        'ro'=>'Romana',
        'pt'=>'Portugues',
        'fr'=>'Francais',
        'nl'=>'Nederlands',
        'de'=>'Deutsch',
        'es'=>'Español',
        'cn'=>'Chinese',
        'tr'=>'Turkish',
        'sr'=>'Serbian',
        'ua'=>'Ukrainian'
    ];

    public function __construct()
    {
        if(isset($_SERVER['SiteConf'])) {
            if (file_exists(CONFIG_PATH . "/skins/" . $_SERVER['SITE_PATH'])) {
                $this->configs = parse_ini_file(CONFIG_PATH . "/skins/" . $_SERVER['SITE_PATH']);
                if (isset($this->configs['redisServer'])) {
                    $this->redisServer = $this->configs['redisServer'];
                }
                if (isset($this->configs['redisServer'])) {
                    $this->redisServer = $this->configs['redisPort'];
                }
            }
        }

        $SkinLanguages = explode(',',isset($_SERVER['SkinLanguages']) ? $_SERVER['SkinLanguages'] : 'en');

        if(isset($_SERVER['SkinLanguages'])){
            self::$availableLanguages = [];
        }
        foreach($SkinLanguages as $key => $lang){
            if(isset($this::$availableLanguages2[strtolower($lang)])){
                self::$availableLanguages[strtolower($lang)] = self::$availableLanguages2[strtolower($lang)];
            }
        }

        self::$availableLanguages = self::sortArrayByArray($this::$availableLanguages,$SkinLanguages);

        $request = Request::createFromGlobals();
        //self::$webapp=$request->server->get('WEB_APP');
        $this->webappServices=$request->server->get('WEB_SERVICES');
        $this->webappKey=$request->server->get('WKEY');
        $this->skinId=$request->server->get('siteId');

    }

    public function sortArrayByArray(array $array, array $orderArray) {
        $ordered = array();
        foreach ($orderArray as $key) {
            if (array_key_exists($key, $array)) {
                $ordered[$key] = $array[$key];
                unset($array[$key]);
            }
        }
        return $ordered + $array;
    }

    public function getRedisUrl(){

        return 'redis://'.$this->getRedisServer().':'.$this->getRedisPort();
    }

    /**
     * @return string
     */
    public function getRedisServer()
    {
        return $this->redisServer;
    }

    /**
     * @param string $redisServer
     */
    public function setRedisServer($redisServer)
    {
        $this->redisServer = $redisServer;
    }

    /**
     * @return string
     */
    public function getRedisPort()
    {
        return $this->redisPort;
    }

    /**
     * @param string $redisPort
     */
    public function setRedisPort($redisPort)
    {
        $this->redisPort = $redisPort;
    }

    /**
     * @return mixed
     */
    public function getWebappKey()
    {
        return $this->webappKey;
    }

    /**
     * @param mixed $webappKey
     */
    public function setWebappKey($webappKey)
    {
        $this->webappKey = $webappKey;
    }

    /**
     * @return mixed
     */
    public function getSkinId()
    {
        return $this->skinId;
    }

    /**
     * @param mixed $skinId
     */
    public function setSkinId($skinId)
    {
        $this->skinId = $skinId;
    }

    /**
     * @return string
     */
    public function getWebapp()
    {
        return $this->webapp;
    }

    /**
     * @param string $webapp
     */
    public function setWebapp($webapp)
    {
        $this->webapp = $webapp;
    }

    /**
     * @return mixed
     */
    public function getWebappServices()
    {
        return $this->webappServices;
    }

    /**
     * @param mixed $webappServices
     */
    public function setWebappServices($webappServices)
    {
        $this->webappServices = $webappServices;
    }

    /**
     * @return array|bool
     */
    public function getConfigs()
    {
        return $this->configs;
    }

    /**
     * @param array|bool $configs
     */
    public function setConfigs($configs)
    {
        $this->configs = $configs;
    }

    /**
     * @return array
     */
    public static function getAvailableLanguages()
    {
        return self::$availableLanguages;
    }

    /**
     * @param array $availableLanguages
     */
    public static function setAvailableLanguages($availableLanguages)
    {
        self::$availableLanguages = $availableLanguages;
    }

}






