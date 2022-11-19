<?php
require '../ConnectDb.php';
$id = $_GET['id'];
$sql = "DELETE from devices WHERE deviceid = $id";
if (mysqli_query($conn, $sql)) {
    header('location: /views/dashboard.php');
}
