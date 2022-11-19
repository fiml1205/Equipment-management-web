<?php
require '../ConnectDb.php';

// Add new device to DB
$date = date('Y/m/d');
$mac = rand(0, 100);
$power = rand(0, 100);

if (isset($_POST['btn-submit'])) {
    $namedevice = $_POST['namedevice'];
    $ip = $_POST['ip'];

    if (!empty($namedevice) && !empty($ip)) {
        $sql = "INSERT INTO `devices` (`device`,`mac`, `ip`, `createdate`, `power`) 
        VALUES('$namedevice','$mac', '$ip', '$date', '$power')";

        if ($conn->query($sql) === true) {
            header('location: /views/dashboard.php');
        } else {
            echo "loi {$sql}" . $conn->error;
        }
    } else {
        echo 'thieu thong tin';
    }
}
