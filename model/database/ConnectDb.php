<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bss';

$conn = new mysqli($host, $username, $password, $dbname);

if($conn -> connect_error) {
    die('fail connect'. $conn->connect_error);
}
?>