<?php
include("./connect.php");
// Lấy dữ liệu từ form đăng nhập
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$confirm_password = $_POST['confirm-password'];

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$confirm_password = mysqli_real_escape_string($conn, $confirm_password);

// Kiểm tra đăng kí
if ($password === $confirm_password) {
    $sql = "INSERT INTO users(username, userpassword, email) values('{$username}', '{$password}', '{$email}')";
    $conn->query($sql);
    header("Location: signin.html");
} else {
    echo "Lỗi đăng kí !";
}


// Đóng kết nối
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
</head>
<style>
    .complete-section {
        height: 100vh;
        max-width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <div class="complete-section row">
        <div class="d-flex justify-content-center align-items-center">
            <img src="./asset/img/cancel.gif" alt="">
            <h1 class="ps-5">Đăng kí tài khoản không thành công</h1>
        </div>
    </div>
</body>

</html>