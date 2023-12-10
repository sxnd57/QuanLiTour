<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelVi - Nền tảng du lịch hàng đầu Việt Nam</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./view/asset/css/home.css">
    <link rel="stylesheet" href="./view/asset/css/footer.css">
</head>

<body>





    <!--  -->
    <!--  -->
    <!-- Địa điểm du lịch -->

    <div class="wrapper bg-dark">
        <div class="wrapper">
            <?php
            include './view/header.php'
                ?>
        </div>


        <!-- Container -->
        <div class="mt-5 rounded-top-5 bg-light">
            <div class="container pt-5">
                <div class="slider_content">
                    <h2 class="d-flex align-items-center mb-4">
                        <img src="./view/asset/icons/xebuyt.webp" alt="" style="font-weight: 900;">
                        &nbsp;
                        Không thể không đến
                    </h2>
                    <h3 class="mb-4 text-secondary">Đi cùng người thân vừa vui vừa thích</h3>
                    <div class="tab">
                        <div class="tab_index">
                            <div class="button_style_1 blue_dark" id="tab_attraction">Atrraction</div>
                        </div>
                        <div class="tab_index">
                            <div class="tab_index_item button_style_1" id="tab_tour">Tour</div>
                        </div>
                    </div>

                    <div class="slider_container_style">
                        <div class="slider_container" id="">
                            <div class="slider" id="slider_tour">
                                <?php
                                function divideVND($amount)
                                {
                                    $result = number_format($amount / 1000, 3, '.', ',');
                                    return 'VND ' . $result;
                                }
                                require_once './model/connect.php';
                                $sql = "SELECT * FROM tour";
                                $all_tour = $conn->query($sql);

                                while ($row = mysqli_fetch_assoc($all_tour)) {
                                    ?>
                                    <div class="item" data-id="<?php echo $row["id"] ?>">
                                        <div class="image">
                                            <img src="<?php echo $row["tour_img"]; ?>" alt="image-item" class="item_image">
                                        </div>
                                        <div class="caption">
                                            <p class="item_title">
                                                <?php echo $row["tour_title"]; ?>
                                            </p>
                                            <div class="item_discount"><span class="item_cost_value">
                                                    <?php if ($row["tour_discount"] != 0)
                                                        echo divideVND($row["tour_discount"]); ?>
                                                </span></div>
                                            <div class="item_cost">
                                                <?php echo divideVND($row["tour_cost"]); ?>
                                            </div>
                                        </div>
                                        <div class="location">
                                            <p>
                                                <?php echo $row["tour_location"]; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                        <div class="slider_control">
                            <button class="slider_prev" onclick="prevFunc('slider_tour')"><i
                                    class="fa-solid fa-angle-left"></i></button>
                            <button class="slider_next" onclick="nextFunc('slider_tour')"><i
                                    class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>


                    <div class="slider_more">
                        <div class="button_style_2">
                            Xem tất cả <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>








                <!--  -->
                <!--  -->
                <!-- Hành trình phiêu lưu -->

                <div class="slider_content">
                    <h2 class="mt-5 mb-4 d-flex align-items-center"><img src="./view/asset/icons/blog.webp"
                            alt="">&nbsp;Đọc tiếp và
                        bắt đầu
                        hành trình phiêu lưu
                    </h2>

                    <div class="slider_container_style">
                        <div class="slider_container">
                            <div class="slider" id="slider_blog">
                                <?php
                                $all_tour = $conn->query($sql);
                                while ($row = mysqli_fetch_assoc($all_tour)) {
                                    ?>
                                    <div class="item">
                                        <div class="image">
                                            <img src="<?php echo $row["tour_img"]; ?>" alt="image-item" class="item_image">
                                        </div>
                                        <div class="caption">
                                            <p class="item_title">
                                                <?php echo $row["tour_title"]; ?>
                                            </p>
                                            <div class="sub_caption">
                                                <div class="item_author">Nguyen Tan Phat</div>
                                                <div class="item_view_count"><i class="fa-solid fa-eye"></i>&nbsp;1000 View
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="slider_control">
                            <button class="slider_prev" onclick="prevFunc('slider_blog')"><i
                                    class="fa-solid fa-angle-left"></i></button>
                            <button class="slider_next" onclick="nextFunc('slider_blog')"><i
                                    class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>

                    <div class="slider_more">
                        <div class="button_style_2">
                            Đọc các bài báo đầy cảm hứng <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>

                <!--  -->
                <!--  -->
                <!-- Body bottom -->
                <div class="body_footer" style="text-align:center; margin-top: 50px">
                    <h1>Chỉ dành riêng cho thành viên TravelVi</h1>
                    <h3 style="color: #8f8f8f"><a href="#">Đăng nhập</a> hoặc <a href="#">đăng ký</a> để khám phá thêm
                        nhiều ưu
                        đãi
                        đặc
                        biệt</h3>

                    <div class="time_line my-3">
                        <div>
                            <i class="fa-solid fa-bell" style="color: var(--primary-color)"></i>
                            Thông báo giá vé
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                        <div>
                            <i class="fa-solid fa-ticket" style="color: var(--primary-color)"></i>
                            Thông báo giá vé
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                        <div>
                            <i class="fa-solid fa-bell" style="color: var(--primary-color)"></i>
                            Thông báo giá vé
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                        <div>
                            <i class="fa-solid fa-bell" style="color: var(--primary-color)"></i>
                            Thông báo giá vé
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>

                    <div class="card">
                        <h1 style="margin-top: 50px">Tại sao nên đặt chỗ với TravelVi?</h1>
                        <div class="card-content">
                            <div class="card_item">
                                <img src="./view/asset/icons/GiaiPhapHoanThien.webp" class="card_img">
                                <h2 class="card_title">Giải pháp du lịch hoàn thiện</h2>
                                <p>Giải pháp toàn diện - giúp bạn tìm chuyến bay và khách sạn khắp Việt Nam và Đông Nam
                                    Á một cách tiết
                                    kiệm.
                                </p>
                            </div>

                            <div class="card_item">
                                <img src="./view/asset/icons/GiaiPhapHoanThien2.webp" class="card_img">
                                <h2 class="card_title">Giá rẻ mỗi ngày</h2>
                                <p>Giá bạn thấy là giá bạn trả! Nhiều lựa chọn giá rẻ để bạn thỏa sức so sánh!</p>
                            </div>

                            <div class="card_item">
                                <img src="./view/asset/icons/GiaiPhapHoanThien3.webp" class="card_img">
                                <h2 class="card_title">Phương thức thanh toán an toàn và linh hoạt</h2>
                                <p>Giao dịch trực tuyến an toàn với nhiều lựa chọn như thanh toán tại cửa hàng tiện lợi,
                                    chuyển khoản
                                    ngân
                                    hàng, thẻ tín dụng đến Internet Banking. </p>
                            </div>

                            <div class="card_item">
                                <img src="./view/asset/icons/GiaiPhapHoanThien4.webp" class="card_img">
                                <h2 class="card_title">Hỗ trợ khách hàng 24/7</h2>
                                <p class="card_body">Đội ngũ nhân viên hỗ trợ khách hàng luôn sẵn sàng giúp đỡ bạn trong
                                    từng bước của
                                    quá
                                    trình đặt vé</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab_main_recovery">
                        <h1 style="margin-top: 50px">Bạn muốn khám phá điều gì?</h1>
                        <div class="tabs_recovery">
                            <div class="tab_recovery" onclick="selectTab(1)">Các chặn bay hàng đầu</div>
                            <div class="tab_recovery" onclick="selectTab(2)">Các khách sạn hàng đầu</div>
                            <div class="tab_recovery" onclick="selectTab(3)">Combo vé máy bay và khách sạn</div>
                            <div class="tab_recovery" onclick="selectTab(4)">Hoạt động tham quan và giải trí</div>
                        </div>

                        <div class="tab_recovery-content">
                            <div class="content_recovery" id="content1">
                                <div class="col_recovery">
                                    <a href="">Vé máy bay đi Đà Nẵng</a><br>
                                    <a href="">Vé máy bay đi Phú Quốc</a><br>
                                    <a href="">Vé máy bay đi Nha Trang</a><br>
                                    <a href="">Vé máy bay đi Hà Nội</a><br>
                                    <a href="">Vé máy bay đi Hà Nội</a><br>
                                    <a href="">Vé máy bay đi Hải Phòng</a>
                                </div>
                                <div class="col_recovery">
                                    <a href="">Vé máy bay đi Sài Gòn - Hà Nội</a><br>
                                    <a href="">Vé máy bay đi Sài Gòn - Đà Nẵng</a><br>
                                    <a href="">Vé máy bay đi Sài Gòn - Phú Quốc</a><br>
                                    <a href="">Vé máy bay đi Sài Gòn - Nha Trang</a><br>
                                    <a href="">Vé máy bay đi Sài Gòn - Đà Lạt</a><br>
                                    <a href="">Vé máy bay đi Singapore</a>
                                </div>
                                <div class="col_recovery">
                                    <a href="">Vé máy bay đi Hà Nội - Sài Gòn</a><br>
                                    <a href="">Vé máy bay đi Hà Nội - Phú Quốc</a><br>
                                    <a href="">Vé máy bay đi Hà Nội - Đà Nẵng</a><br>
                                    <a href="">Vé máy bay đi Hà Nội - Nha Trang</a><br>
                                    <a href="">Vé máy bay đi Hà Nội - Đà Lạt</a><br>
                                    <a href="">Vé máy bay đi Sài Gòn</a>
                                </div>
                                <div class="col_recovery">
                                    <a href="">Vé máy bay đi Đà Nẵng - Hà Nội</a><br>
                                    <a href="">Vé máy bay đi Đà Nẵng - Sài Gòn</a><br>
                                    <a href="">Vé máy bay đi Hồ Chí Minh - Bangkok</a><br>
                                    <a href="">Vé máy bay đi Hà Nội - Singapore</a><br>
                                    <a href="">Vé máy bay đi Hà Nội - Bangkok</a><br>
                                    <a href="">Vé máy bay đi Bangkok</a>
                                </div>
                            </div>

                            <div class="content_recovery" id="content2">
                                <div class="col_recovery">
                                    <a href="">Khách sạn Vũng Tàu</a><br>
                                    <a href="">Khách sạn Đà Lạt</a><br>
                                    <a href="">Khách sạn Đà Nẵng</a><br>
                                    <a href="">Khách sạn Hồ Chí Minh</a><br>
                                </div>
                                <div class="col_recovery">
                                    <a href="">Khách sạn Nha Trang</a><br>
                                    <a href="">Khách sạn Hội An</a><br>
                                    <a href="">Khách sạn Sa Pa</a><br>
                                    <a href="">Khách sạn Hà Nội</a><br>
                                </div>
                                <div class="col_recovery">
                                    <a href="">Khách sạn Phan Thiết</a><br>
                                    <a href="">Khách sạn Phú Quốc</a><br>
                                    <a href="">Khách sạn Quy Nhơn</a><br>
                                </div>
                            </div>

                            <div class="content_recovery" id="content3">
                                <div class="col_recovery">
                                    <a href="">Combo du lịch TP Hồ Chí Minh</a><br>
                                    <a href="">Combo du lịch Hà Nội</a><br>
                                </div>
                                <div class="col_recovery">
                                    <a href="">Combo du lịch Đà Nẵng</a><br>
                                    <a href="">Combo du lịch Singapore</a><br>
                                </div>
                                <div class="col_recovery">
                                    <a href="">Combo du lịch Nha Trang</a><br>
                                    <a href="">Combo du lịch Phú Quốc</a><br>
                                </div>
                            </div>

                            <div class="content_recovery" id="content4">
                                <div class="col_recovery">
                                    <a href="">Hoạt động Tham quan & Giải trí tại TP. HCM</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Hội An</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Đà Nẵng</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Nha Trang</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Đà Lạt</a><br>
                                </div>
                                <div class="col_recovery">
                                    <a href="">Hoạt động Tham quan & Giải trí tại Hà Nội</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Phú Quốc</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Sa Pa</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Hà Giang</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Ninh Bình</a><br>
                                </div>
                                <div class="col_recovery">
                                    <a href="">Hoạt động Tham quan & Giải trí tại Singapore</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Thái Lan</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Malaysia</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Hàn Quốc</a><br>
                                    <a href="">Hoạt động Tham quan & Giải trí tại Nhật Bản</a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /*end body*/ 



  /*footer*/ -->
    <div class="container-fluid p-0 mt-5">
        <footer class="footer">

            <div class="footer-top">
                <div class="container">

                    <div class="footer-brand">

                        <a href="#" class="logo">
                            <img src="./view/asset/icons/logo.svg" alt="Tourly logo">
                        </a>

                        <p class="footer-text">
                            Urna ratione ante harum provident, eleifend, vulputate molestiae proin fringilla,
                            praesentium
                            magna conubia
                            at
                            perferendis, pretium, aenean aut ultrices.
                        </p>

                    </div>

                    <div class="footer-contact">

                        <h4 class="contact-title">Contact Us</h4>

                        <p class="contact-text">
                            Feel free to contact and reach us !!
                        </p>

                        <ul>

                            <li class="contact-item">
                                <ion-icon name="call-outline"></ion-icon>

                                <a href="tel:+01123456790" class="contact-link">+01 (123) 4567 90</a>
                            </li>

                            <li class="contact-item">
                                <ion-icon name="mail-outline"></ion-icon>

                                <a href="mailto:info.tourly.com" class="contact-link">info.tourly.com</a>
                            </li>

                            <li class="contact-item">
                                <ion-icon name="location-outline"></ion-icon>

                                <address>3146 Koontz, California</address>
                            </li>

                        </ul>

                    </div>

                    <div class="footer-form">

                        <p class="form-text">
                            Subscribe our newsletter for more update & news !!
                        </p>

                        <form action="" class="form-wrapper">
                            <input type="email" name="email" class="input-field" placeholder="Enter Your Email"
                                required>

                            <button type="submit" class="btn btn-secondary">Subscribe</button>
                        </form>

                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">

                    <p class="copyright">
                        &copy; 2022 <a href="">codewithsadee</a>. All rights reserved
                    </p>

                    <ul class="footer-bottom-list">

                        <li>
                            <a href="#" class="footer-bottom-link">Privacy Policy</a>
                        </li>

                        <li>
                            <a href="#" class="footer-bottom-link">Term & Condition</a>
                        </li>

                        <li>
                            <a href="#" class="footer-bottom-link">FAQ</a>
                        </li>

                    </ul>

                </div>
            </div>

        </footer>
    </div>

</body>
<script src="./view/main.js"></script>
<script src="./view/switchPage.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</html>