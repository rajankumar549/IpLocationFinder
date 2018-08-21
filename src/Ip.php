<?php 
namespace IpLocationFinder;
use Curl;
/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author Rajan Kumar
*/
class Ip{

   /**  @var string $m_SampleProperty define here what this variable is for, do this for every instance variable */

 
  
   public static function getInfo($ip){
    if (!isset($ip)) {
            throw new \Exception("ip not set");
    }
    if (preg_match('/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/',$ip)){ 
      $curl = new Curl\Curl();
      $curl->get("http://ipinfo.io/".$ip."/geo");
      if($curl->error)
      {
        throw new \Exception("Curl Request Failed");
      }
      else{
        $response = $curl->response;
        $jsonBody = json_decode($response);
        $location = new IpInfo((array)$jsonBody);
        return $location;
      }
    }
    else{
      throw new \Exception("Invalid Ip address");
    }
    
  }
}