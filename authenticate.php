<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['logged_in']) || ($_SESSION['logged_in']) !== true) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: signin.html");
    exit();
}
?>