<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./asset/css/base.css" />
    <link rel="stylesheet" href="./asset/css/signin.css" />
</head>

<body>
    <div class="wrapper">
        <div class="container text-center">
            <div class="row h-100">
                <div class="col-lg-5 d-none d-lg-block pannel-left">
                    <img src="./asset/img/Group 1.png" class="form-img" width="600" alt="" />
                </div>
                <div class="col-lg-7 col-md-12 d-flex align-items-center">
                    <form action="validationSigninForm.php" class="w-100 form-wrapper needs-validation" method="post">
                        <h1 class="form-heading">SIGN IN</h1>
                        <div class="form-group position-relative px-5 pt-5">
                            <label for="username" class="form-label">User name</label>
                            <input type="text" class="input" id="username" name="username" required />
                        </div>
                        <div class="form-group position-relative px-5 pt-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="input" required />
                        </div>

                        <div class="link-section d-flex align-items-center mx-5 my-4 justify-content-between">
                            <div>
                                <input type="checkbox" name="remember-me" id="remember-me">
                                <label for="remember-me" class="link-section ps-3">Remember me</label>
                            </div>
                            <a href="./signup.php" class="">Create new account</a>
                        </div>
                        <p class="text-start mx-5 my-4 feedback-text" name="signinError">
                            <?php
                                if(isset($_SESSION["signin_error"])){
                                    echo "&#x2716; Invalid email or password";
                                    unset($_SESSION["signin_error"]);
                                }
                            ?>
                        </p>
                        <input type="submit" value="Sign In" class="btn-submit px-5">
                    </form>
                </div>
            </div>
            <span class="copyright-text"> &#169; 2023 sxnd</span>
        </div>
    </div>
</body>

</html>