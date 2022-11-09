<?php 
require '../model/database/ConnectDb.php';

// take data from DB for table
$sql = "SELECT * FROM `devices`";
$result = mysqli_query($conn, $sql);
// take data form DB for Chart
$dataChart = "SELECT device, sum(power) as pow FROM `devices` Group BY device";
$takeChart = mysqli_query($conn, $dataChart);
$valuex = [];
$valuey = [];
while ($row = $takeChart->fetch_assoc()) {
    array_push($valuex, $row['device']);
    array_push($valuey, $row['pow']);
}