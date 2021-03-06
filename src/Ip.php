<?php 
namespace IpLocationFinder;

use Curl;

/**
*  A Ip class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author Rajan Kumar
*/

class Ip{

  public static function getInfo($ip){

    if (!isset($ip)) throw new \Exception("Ip not set");

    $curl = new Curl\Curl();
    $curl->get("http://ipinfo.io/".$ip."/geo");

    if($curl->error) throw new \Exception("Curl Request Failed");
    $jsonBody = $curl->response;
		$jsonArray = (array) $jsonBody;
		$location = new IpInfo($jsonArray);
		return $location;
  }
}