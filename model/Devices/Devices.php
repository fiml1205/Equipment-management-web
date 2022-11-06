<?php

namespace Model\Devices;

class Device {
    protected $id;
    protected $name;
    protected $mac;
    protected $ip;
    protected $date;
    protected $power;

    public function __construct($name, $mac, $ip, $date, $power) 
    {
        $this->name = $name;
        $this->mac = $mac;
        $this->ip = $ip;
        $this->date = $date;
        $this->power = $power;
    }

    public function getName() {
        return $this->name;
    }
    public function getMac() {
        return $this->mac;
    }
    public function getIp() {
        return $this->ip;
    }
    public function getDate() {
        return $this->date;
    }
    public function getPower() {
        return $this->power;
    }
}