<?php
/**
 * Created by PhpStorm.
 * User: lau
 * Date: 05.2.2020
 * Time: 10:23
 */

namespace App\Services;
use App\Utils\Utility;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Utils\Configuration;
use Zend\Code\Scanner\Util;

class TranslatorService
{
    public $language_code;
    private $lang_array;
    public $availableLanguage;
    public function __construct(SessionInterface $session, Configuration $configuration){
        $this->availableLanguage= Configuration::$availableLanguages;

        $geoIp = strtolower(geoip_country_code_by_name ($this->get_client_ip()));
//        $geoIp = strtolower(geoip_country_code_by_name ('162.158.18.182'));

        $SiteLanguages = explode(',',isset($_SERVER['SkinLanguages']) ? $_SERVER['SkinLanguages'] : 'en');
        $cookieLang = ((isset($_COOKIE["language_usr"])) ? $_COOKIE["language_usr"] : false);
        if($cookieLang){
            if(!in_array($cookieLang, $SiteLanguages)){
                $_COOKIE["language_usr"] = $SiteLanguages[0];
            }
        }

        if($session->get('_locale')!=null){
            if ($cookieLang){
                $this->language_code = $cookieLang;
            }else if($geoIp){
                if(in_array(strtolower($geoIp), $SiteLanguages))
                    $this->language_code = strtolower($geoIp);
                else
                    $this->language_code = $SiteLanguages[0];
            }else
            {
                $this->language_code = $session->get('_locale');
            }
        }
        else {
            if ( !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ) {
                $accept_lang =  strtoupper(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
                if ( in_array($accept_lang, $this->availableLanguage) ) {
                    if ($cookieLang){
                        if(in_array(strtolower($cookieLang), $SiteLanguages)) {
                            $this->language_code = $cookieLang;
                            $session->set('_locale', $cookieLang);
                        }else{
                            $this->language_code = $SiteLanguages[0];
                            $session->set('_locale', $SiteLanguages[0]);
                        }

                    }else {if($geoIp){
                        if(in_array(strtolower($geoIp), $SiteLanguages)) {
                            $this->language_code = strtolower($geoIp);
                            $session->set('_locale', strtolower($geoIp));
                        }
                        else {
                            $this->language_code = $SiteLanguages[0];
                            $session->set('_locale', $SiteLanguages[0]);
                        }
                    }else
                        $this->language_code = $accept_lang;
                        $session->set('_locale',$accept_lang);
                    }

                }
            }
        }
        if($this->language_code==''){
            $langFromSrv = explode(',',isset($_SERVER['SkinLanguages'])? $_SERVER['SkinLanguages'] : $SiteLanguages[0]);

            if ($cookieLang){
                $this->language_code = $cookieLang;
            }else if($geoIp){
                if(in_array(strtolower($geoIp), $SiteLanguages))
                    $this->language_code = strtolower($geoIp);
                else
                    $this->language_code = $SiteLanguages[0];
            }else if ($cookieLang){
                if(in_array(strtolower($cookieLang), $SiteLanguages))
                    $this->language_code = $cookieLang;
                else
                    $this->language_code = $SiteLanguages[0];

            }else
                $this->language_code= strtolower($langFromSrv[0]);
        }
        include_once(TRANSLATION_PATH.'/lang_'.strtolower($this->language_code).'.inc');


        $this->lang_array = $this->array_change_key_case_unicode($language,CASE_LOWER);
    }

    public function array_change_key_case_unicode($arr, $c = CASE_LOWER) {
        $c = ($c == CASE_LOWER) ? MB_CASE_LOWER : MB_CASE_UPPER;
        $ret = [];
        foreach ($arr as $k => $v) {
            $ret[mb_convert_case($k, $c, "UTF-8")] = $v;
        }
        return $ret;
    }

    public function get_lang_code()
    {
        return strtolower($this->language_code);
    }

    public function getItalianCities()
    {
        return Utility::$italianCityList;
    }

    public function get_client_ip(){
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    public function getLang(){
        $arg_list = func_num_args();
        $text = func_get_arg(0);
        $args = func_get_args();
        $isLower = isset($args[2]) != false ? $args[2] : 0;
        array_shift($args);

        $arg_list--;



        if($arg_list == 0){

            if(isset($this->lang_array[strtolower($text)]) &&  trim($this->lang_array[strtolower($text)])!=''){
                if($isLower != 0)
                    return trim(preg_replace('/\s+/', ' ', ($this->lang_array[strtolower($text)])));
                else
                    return trim(preg_replace('/\s+/', ' ', ucfirst($this->lang_array[strtolower($text)])));

            }else{
                if($isLower != 0)
                    return trim(preg_replace('/\s+/', ' ', $text));
                else
                    return trim(preg_replace('/\s+/', ' ', ucfirst($text)));
            }
        }else{

            if(isset($this->lang_array[strtolower($text)]) && trim($this->lang_array[strtolower($text)])!=''){
                $languageString = $this->lang_array[strtolower($text)];

            }else{
                if($isLower != 0)
                    $languageString = ($text);
                else
                    $languageString = ucfirst($text);

            }

            foreach($args as $k=>$v){
                if(isset($this->lang_array[strtolower($v)]) && trim($this->lang_array[strtolower($v)])!=''){
                    $args[$k]=$this->lang_array[strtolower($v)];
                }
            }
            $languageString = explode(" " , $languageString);

            for($i = 0; $i < count($languageString) ; $i++){
                if(strpos($languageString[$i],"%") === false) continue;
                $languageString[$i] = str_replace("%",array_shift($args),$languageString[$i]);
            }
            $languageString = implode(" ", $languageString);
            return  trim(preg_replace('/\s+/', ' ', str_replace("'","`",$languageString)));
        }
    }
}
