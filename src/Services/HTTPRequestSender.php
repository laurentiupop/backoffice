<?php
namespace App\Services;
use App\Utils\Configuration;
use Psr\Log\LoggerInterface;
class HTTPRequestSender
{
//    protected $url='http://srv.genesisdev.xyz/platform/WebSiteManager';
    protected $url = Configuration::WEB_APP;
    private $data;
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function sendHttpPostRequest($dataToSend, $url=false, $userIP = null) {
        $msg = "[HTTPRequestSender.sendHttpPostRequest]";
        $proxy = isset($_SERVER['PROXY']) ? $_SERVER['PROXY'] : false;
        if($url){
            if(strpos($url,'http') !== false) {

            } else {
                $url = "http:".$url;
            }
            $this->url=$url;
        }
        $response = null;
        try {
            $this->logger->info($msg . " The current parameters: " . $dataToSend . "  Will be sended to: " . $this->url);
            $curl = curl_init($this->url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $dataToSend);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            if($proxy){
                $proxy = explode(':', $proxy);
                $proxyauth = $proxy[2].':'.$proxy[3];
                curl_setopt($curl, CURLOPT_PROXY, $proxy[0]);
                curl_setopt($curl, CURLOPT_PROXYPORT, $proxy[1]);
                curl_setopt($curl, CURLOPT_PROXYUSERPWD, $proxyauth);
            }

            if ($userIP != null) {
                curl_setopt( $curl, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: $userIP", "X_FORWARDED_FOR: $userIP"));
            }
            $response = curl_exec($curl);
            if($response<0){
                $this->logger->info('Response: '.$response);
            }
            $this->logger->info('Response: '.$response);
            $this->logger->info('Response: '.$curl);

        } catch(Exception $e) {
            $this->logger->error($msg . " Exception: " . $e->getMessage());
            $this->logger->error($msg . " Exception trace: " . $e->getTraceAsString());
            throw new Exception($msg . " Unable to get connection from DataBase");
        } finally {
            if (isset($curl)) {
                curl_close($curl);
            } // end if
        } // end try - catch - finally
        return $response;
    }

}