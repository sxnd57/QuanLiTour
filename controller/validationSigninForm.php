<?php
session_start();
include("./connect.php");

// Get value to signin
$username = $_POST['username'];
$password = $_POST['password'];

// Escapes special characters
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Query selector
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['userpassword'])) {
        header("Location: home.php");
        $_SESSION['signed_in'] = true;
        exit();
    }
} else {
    $_SESSION['signin_error'] = true;
    header('Location: signin.php');
}

// Đóng kết nối
$conn->close();
?>