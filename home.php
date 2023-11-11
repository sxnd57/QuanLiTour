<?php 
    // session_start();
    include("./authenticate.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang chính</h1>
    <form action="authenticate.php" method="post">
        <input type="submit" name="sign_out" value="Đăng xuất">
    </form>
</body>
</html>