<?php
// Kết nối đến cơ sở dữ liệu (Bạn cần điền thông tin cơ sở dữ liệu của bạn)
$servername = "localhost";
$username = "admin";
$password = "123456";
$dbname = "sinhvien";
$port = 3307;
session_start();

$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Lấy dữ liệu từ form đăng nhập
$username = $_POST['username'];
$password = $_POST['password'];

// Bảo vệ dữ liệu
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Mã hóa mật khẩu (tránh lưu mật khẩu trong cơ sở dữ liệu dưới dạng plain text)
$hashed_password = md5($password);

// Kiểm tra đăng nhập
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: home.php");
    $_SESSION['logged_in'] = true;
    exit();
} else {
    echo "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.";
}

// Đóng kết nối
$conn->close();
?>
