<?php
session_start();
include("./connect.php");

// Get value to signup
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$confirmPassword = $_POST['confirm-password'];

// Escapes special characters
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$email = mysqli_real_escape_string($conn, $email);
$confirmPassword = mysqli_real_escape_string($conn, $confirmPassword);

if ($password === $confirmPassword) {
    // Hash mật khẩu trước khi lưu vào cơ sở dữ liệu
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username, userpassword, email) VALUES ('$username', '$hashedPassword', '$email')";
    
    if ($conn->query($sql)) {
        // Kiểm tra xem câu lệnh INSERT đã thêm dữ liệu thành công hay không
        if ($conn->affected_rows > 0) {
            $_SESSION['signup_success'] = true;
            header("Location: signin.php");
            exit();
        } else {
            $_SESSION['signup_error'] = "&#x2716; Đăng kí thất bại.";
            header('Location: signup.php');
            exit();
        }
    } else {
        $_SESSION['signup_error'] = "&#x2716; Đăng kí thất bại ";
        header('Location: signup.php');
        exit();
    }
} else {
    $_SESSION['signup_error'] = "&#x2716; Password not match";
    header('Location: signup.php');
}

// Đóng kết nối
$conn->close();
?>
