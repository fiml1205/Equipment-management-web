<?php
require '/xampp/htdocs/model/database/ConnectDb.php';

if (isset($_POST["btn-save"])) {
    $id = $_POST["deviceid"];
    $device = $_POST["device"];
    $mac = $_POST["mac"];
    $ip = $_POST["ip"];
    $date = $_POST["date"];
    $power = $_POST["power"];
    $sqlEdit = "UPDATE devices SET device = '$device', mac = '$mac', ip = '$ip', createdate = '$date', power = '$power' WHERE deviceid = '$id'";

    if (mysqli_query($conn, $sqlEdit)) {
        header('location: /views/dashboard.php');
    }
}

