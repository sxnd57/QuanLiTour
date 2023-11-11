<?php
session_start();
include("./connect.php");

// Get value to signin
$username = $_POST['username'];
$password = $_POST['password'];

// Escapes special characters
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Query selector
$sql = "SELECT * FROM users WHERE username='$username' AND userpassword='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: home.php");
    $_SESSION['signed_in'] = true;
    exit();
} else {
    $_SESSION['signin_error'] = true;
    header('Location: signin.php');
}

// Đóng kết nối
$conn->close();
?>
