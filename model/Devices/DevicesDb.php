<?php 

namespace Model\Devices;

class DevicesDb {
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function addDevice($device) {
        $sql = "INSERT INTO devices(device, mac, ip, createdate, power) VALUE (?, ?, ?, ?, ?)";
        $stmt = $this->connect->prepare($sql);
        $newDevice = [
            $device->getName(),
            $device->getMac(),
            $device->getIp(),
            $device->getDate(),
            $device->getPower(),
        ];

        $stmt->execute($newDevice);
    }

    public function getAllDevices() {
        $sql = "Select * From devices";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $this->createDeviceFromDb($result);
    }

    public function createDeviceFromDb($result){
        $devices = [];
        foreach($result as $key => $item) {
            $device = new Device($item['device'], $item['mac'],$item['ip'],$item['createdate'],$item['power']);
            array_push($devices, $device);
        }
        return $devices;
    }
}