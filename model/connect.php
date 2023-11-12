<?php

$servername = "localhost";
$username = "admin";
$password = "123456";
$dbname = "sinhvien";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

?>