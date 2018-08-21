<?php

namespace IpLocationFinder;

class IpInfo {

    /**
     * @var string Type Ip
     */
    private $_ip;

    /**
     * @var string Type City
     */
    private $_city;

    /**
     * @var string Type Region
     */
    private $_region;

    /**
     * @var string Type Country
     */
    private $_country;

    /**
     * @var string Type Location
     */
    private $_loc;

    /**
     * @var string Type Postal Code
     */
    private $_postal;

    public function __construct($options) {

        if (!isset($options["ip"])) throw new \Exception("ip not set");

        $this->_ip      = $options["ip"];
        $this->_city    = $options["city"] ?? '';
        $this->_region = $options["region"] ?? '';
        $this->_country      = $options["country"] ?? '';
        $this->_loc      = $options["loc"] ?? 'none';
        $this->_postal       = $options["postal"] ?? '';
    }

    //Ip getter
    public function getIp(){
        return $this->_ip;
    }

    //City getter
    public function getCity(){
        return $this->_city;
    }

    //Region getter
    public function getRegion(){
        return $this->_region;
    }

    //Country getter
    public function getCountry(){
        return $this->_country;
    }

    //Location getter
    public function getLocation(){
        return $this->_loc;
    }

    //Postal Code getter
    public function getPostalCode(){
        return $this->_postal;
    }
}