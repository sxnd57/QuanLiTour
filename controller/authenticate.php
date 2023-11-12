<?php
session_start();
if (!isset($_SESSION['signed_in']) || ($_SESSION['signed_in']) !== true) {
    header("Location: signin.php");
    exit();
}

if(isset($_POST["sign_out"])){
    $_SESSION["signed_in"] = false;
    header('Location: signin.php');
    exit();
}
?>