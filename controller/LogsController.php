<?php

// take DB from MySql
require '../model/database/ConnectDb.php';

$sql = "SELECT * FROM `logs`";
$result = mysqli_query($conn, $sql);

$option = null;
// selection num of pagination
if(isset($_POST['btn-option'])){
    $option = $_POST['option'];
}

// Pagination
$total = mysqli_num_rows($result);
$limit = null;
if(!$option == ''){
    $limit = $option;
}else {
    $limit = 10;
}
$page = ceil($total / $limit);
$currentPage = (isset($_GET['page']) ? $_GET['page'] : 1);
$start = ($currentPage - 1) * $limit;
$result = mysqli_query($conn, "SELECT * FROM `logs` LIMIT $start, $limit");

?>