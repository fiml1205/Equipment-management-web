<?php

namespace Controllers;

use Model\Database\DbConnect;
use Model\Devices\Device;
use Model\Devices\DevicesDb;


class DevicesController {
    protected $deviceDb;
    public function __construct()
    {
        $db = new DbConnect();
        $this->deviceDb = new DevicesDb($db->connect());
    }

    public function getAllDevices() {
        return $this->deviceDb->getAllDevices();
    }

    public function addDevice($name, $mac, $ip, $date, $power){
        $device = new Device($name, $mac, $ip, $date, $power);
        $this->deviceDb->addDevice($device);
    }
}