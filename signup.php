<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gym</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="./asset/css/base.css" />
        <link rel="stylesheet" href="./asset/css/signup.css" />
    </head>
    <body>
        <div class="wrapper">
            <div class="container text-center">
                <div class="form-section row h-100">
                    <div class="col-md-5 d-none d-lg-block pannel-left">
                        <img
                            src="./asset/img/Group 1.png"
                            class="form-img"
                            width="600"
                            alt=""
                        />
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <form
                            action="./signup.php"
                            class="w-100 form-wrapper needs-validation"
                            method="post"
                        >
                            <h1 class="form-heading">SIGN UP</h1>
                            <div class="form-group position-relative m-5">
                                <label for="username" class="form-label"
                                    >User name</label
                                >
                                <input
                                    type="text"
                                    class="input"
                                    id="username"
                                    name="username"
                                    validation
                                />
                            </div>
                            <div class="form-group position-relative m-5">
                                <label for="email" class="form-label"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="input"
                                    id="email"
                                    name="email"
                                    validation
                                />
                            </div>
                            <div class="form-group position-relative m-5">
                                <label for="password" class="form-label"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    class="input"
                                    id="password"
                                    name="password"
                                    validation
                                />
                            </div>
                            <div class="form-group position-relative m-5">
                                <label for="confirm-password" class="form-label"
                                    >Confirm Password</label
                                >
                                <input
                                    type="password"
                                    id="confirm-password"
                                    name="confirm-password"
                                    class="input"
                                />
                            </div>
                            
                            <div class="link-section d-flex align-items-center justify-content-between mx-5 my-4">
                                <div>
                                    <input type="checkbox" name="accpept-term" id="accpept-term">
                                    <a href="./term.html" for="accpept-term" class="link-section accpept-term ps-3">Accept term & conditions</a>
                                </div>
                                <a href="./signin.html">I have a account</a>
                            </div>
                            <button type="submit" class="btn-submit px-5 mb-5">
                                Sign Up
                            </button>
                        </form>
                    </div>
                </div>
                <!-- <div class="complete-section row h-100">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="./asset/img/complete.gif" alt="">
                        <h1 class="ps-5">Đăng kí tài khoản thành công</h1>
                    </div>
                </div> -->
                <span class="copyright-text"> &#169; 2023 sxnd</span>
            </div>
        </div>
    </body>
    <script src="./checkSignup.js"></script>
</html>
