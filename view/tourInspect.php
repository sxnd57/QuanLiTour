<!doctype html>
<html lang="en">

<head>
    <title>TravelVi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./asset/css/tourinspect.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./asset/css/base.css">
</head>

<body>

    <header>
        <?php
        include './header.php'
            ?>
    </header>

    <div class="bg-light container-fluid min-vh-100 p-0">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active text-dark" aria-current="page">Tour</li>
                </ol>
            </nav>
        </div>
        <div class="container bg-white rounded-3 shadow">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                require_once '/laragon/www/hotel/model/connect.php';
                $sql = "SELECT * FROM tour WHERE id = $id";
                $all_tour = $conn->query($sql);

                while ($row = mysqli_fetch_assoc($all_tour)) {
                    ?>
                    <div class="mt-3 mx-2">
                        <div class="py-3">
                            <h1>
                                <?php echo $row["tour_title"] ?>
                            </h1>
                        </div>
                        <div class="d-flex">
                            <div class="tourist-type me-5 p-1 rounded-3 text-primary">
                                Điểm Tham Quan
                            </div>
                            <div class="tourist-nation">
                                <i class="fa-solid fa-location-dot"></i>
                                Việt Nam
                            </div>
                        </div>

                        <!-- Banner -->
                        <?php
                        $sql = "SELECT * FROM tour_detail WHERE detail_id = $id";
                        $all_tour = $conn->query($sql);

                        while ($row = mysqli_fetch_assoc($all_tour)) {
                            ?>
                            <?php
                            $imageArr = preg_split("/\,/", $row["image_about"]);
                            ?>
                            <div class="image-frame">
                                <div class="frame p-2">
                                    <img src="<?php echo $imageArr[0] ?>" id="tour-image"
                                        class="rounded-3 w-100 h-100 object-fit-cover" alt="">
                                </div>
                                <div class="frame">
                                    <div class="p-2 h-50">
                                        <img src="<?php echo $imageArr[1] ?>" id="tour-image"
                                            class="rounded-3 w-100 h-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="all-image p-2 h-50">
                                        <button type="button" class="btn-all" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Xem tất cả
                                        </button>
                                        <img src="<?php echo $imageArr[2] ?>" class="rounded-3 w-100 h-100 object-fit-cover" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php
                            ?>
                            <?php
                        }
                        ?>

                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content h-100">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php
                            $sql = "SELECT * FROM tour_detail WHERE detail_id = $id";
                            $all_tour = $conn->query($sql);

                            while ($row = mysqli_fetch_assoc($all_tour)) {
                                ?>
                                <?php
                                $imageArr = preg_split("/\,/", $row["image_about"]);
                                foreach ($imageArr as $image) {
                                    ?>
                                    <div class="swiper-slide p-5">
                                        <img src="<?php echo $image ?>" class="rounded-3" alt="">
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container -->
        <div class="container">
            <div class="row py-3">
                <div class="col-9">
                    <h2 class="fw-bold">Chi tiết sản phẩm</h2>
                </div>
            </div>
            <div class="row gx-5 rounded-3">
                <div class="col-9">

                    <!-- Description -->
                    <div class="row bg-white shadow rounded-3">
                        <div class="container pb-5">
                            <div class="mx-2">
                                <h3 class="py-4 mx-3 fw-bold">Điểm nổi bật</h3>
                                <ul>
                                    <?php
                                    $sql = "SELECT * FROM tour_detail WHERE detail_id = $id";
                                    $all_tour = $conn->query($sql);

                                    while ($row = mysqli_fetch_assoc($all_tour)) {
                                        ?>
                                        <?php
                                        $detailArr = preg_split("/,\./", $row["detail"]);
                                        foreach ($detailArr as $detail) {
                                            echo '<li>' . $detail . '</li>';
                                        }
                                        ?>
                                        <?php
                                    }
                                    ?>
                                </ul>
                                <div class="characteristic p-2 mx-2 rounded-2">
                                    <div><b>Phù hợp với:: </b>Chụp ảnh, Thời gian rảnh, Trò chơi, Thư giãn, Yêu thích
                                        thiên nhiên, Lãng mạn,...</div>
                                </div>
                                <h3 class="py-4 mx-3 fw-bold">Bạn sẽ trải nghiệm</h3>
                                <p align="justify">
                                    Ai đến Đà Nẵng mà không đi du lịch Bà Nà Hills thì thật là thiếu sót đấy!
                                    Bạnhãy cầm trên tay vé Bà Nà Hills và dành nguyên 1 ngày để khám phá điểm đến ấn
                                    tượng này nhé.
                                    Với vé Bà Nà Hills này, bạn sẽ có cơ hội chiêm ngưỡng quang cảnh hùng vĩ xung quanh
                                    khi hệ thống
                                    cáp treo dần đưa bạn lên đỉnh núi.
                                </p>
                                <p align="justify">
                                    Lên đến Bà Nà Hills, bạn tha hồ bung lựa với hơn 105 trò chơi ở công viên giải trí
                                    Fantasy Park mà không mất phí. Chưa hết, khu làng Pháp là địa điểm vô cùng lý tưởng
                                    để sống
                                    ảo. À mà nhớ hãy dành thời gian ngắm cảnh trên Cầu Vàng, nơi được tạp chí TIME bình
                                    chọn vào
                                    năm 2018 là 1 trong 100 địa điểm tuyệt vời nhất trên thế giới. Bạn đã sẵn sàng bắt
                                    đầu chuyến
                                    đi du lịch Bà Nà Hills hứa hẹn nhiều bất ngờ chưa?
                                </p>

                                <!-- Image Description -->
                                <?php
                                $sql = "SELECT * FROM tour_detail WHERE detail_id = $id";
                                $all_tour = $conn->query($sql);

                                while ($row = mysqli_fetch_assoc($all_tour)) {
                                    ?>
                                    <?php
                                    $imageArr = preg_split("/\,/", $row["image_about"]);
                                    ?>
                                    <div class="d-flex justify-content-center m-5">
                                        <div class="image-content">
                                            <img src="<?php echo $imageArr[0] ?>" class="w-100 h-100" alt="">
                                            <div class="fw-bold text-center">Đừng quên tác nghiệp sống ảo tại Cầu Vàng ngoạn
                                                mục
                                                nhé!</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center m-5">
                                        <div class="image-content">
                                            <img src="<?php echo $imageArr[1] ?>" class="w-100 h-100" alt="">
                                            <div class="fw-bold text-center">Đừng quên tác nghiệp sống ảo tại Cầu Vàng ngoạn
                                                mục
                                                nhé!</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center m-5">
                                        <div class="image-content">
                                            <img src="<?php echo $imageArr[2] ?>" class="w-100 h-100" alt="">
                                            <div class="fw-bold text-center">Đừng quên tác nghiệp sống ảo tại Cầu Vàng ngoạn
                                                mục
                                                nhé!</div>
                                        </div>
                                    </div>
                                    <?php
                                    ?>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Address part -->
                    <div class="row py-3">
                        <div class="col-9">
                            <h2 class="fw-bold">Thông tin địa điểm</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container ">
                            <div class="row bg-white p-3 rounded-3 shadow">
                                <div class="address py-3 fw-semibold fs-6">
                                    Hòa Vang, Da Nang, Vietnam
                                </div>
                                <div class="map-address">
                                    <img src="./asset/img/map.png" class="w-100 h-100 object-fit-cover rounded-3"
                                        alt="">
                                </div>
                                <div class="py-3 d-flex justify-content-between fw-medium text-secondary">
                                    <div class="contact d-flex align-items-center">
                                        <i class="fa-solid fa-phone"></i>
                                        <div class="text px-2">Liên hệ đối tác: </div>
                                        <div class="phone-number">+84932426360</div>
                                    </div>
                                    <a target="_blank"
                                        href="https://www.google.com/maps/place/B%C3%A0+N%C3%A0+Hills/@15.9954137,107.9946372,18z/data=!4m6!3m5!1s0x3141f7b5026661c9:0x847bab3e51ad7ea2!8m2!3d15.9951358!4d107.9961386!16s%2Fm%2F0gfdsrk!5m1!1e1?hl=vi-VN&entry=ttu"
                                        class="btn btn-primary fw-medium">
                                        <i class="fa-solid fa-location-dot"></i>
                                        Xem bản đồ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card price -->
                <div class="col-3">
                    <div class="row sticky-top bg-white rounded-3 shadow">
                        <div class="container">
                            <div class="pt-3 d-flex align-items-center justify-content-between">
                                <div class="fw-medium fs-5">Giá từ</div>
                                <i class="fa-regular fa-bookmark text-primary"></i>
                            </div>

                            <div class="m-2">
                                <!-- TOUR COST -->
                                <?php
                                // DIVIDE VMD FUNCTION
                                function divideVND($amount)
                                {
                                    $result = number_format($amount / 1000, 3, '.', ',');

                                    return $result;
                                }
                                $sql = "SELECT * FROM tour WHERE id = $id";
                                $all_tour = $conn->query($sql);

                                while ($row = mysqli_fetch_assoc($all_tour)) {
                                    ?>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <h1 id="price" class="me-2 fw-bold price-color">
                                            <?php echo divideVND($row["tour_cost"]) ?>
                                        </h1>
                                        <h1 class="fw-bold price-color">VNĐ</h1>
                                    </div>
                                    <?php
                                }
                                ?>

                                <!-- FIND TICKETBOX BUTTON -->
                                <a href="#ticketbox__state"
                                    class="btn-buy__ticketbox w-100 fw-bold rounded-3 my-3 text-center">
                                    Tìm vé
                                </a>

                                <!-- TICKETBOX STATE  -->
                                <div>
                                    <div class="fs-6 fw-semibold py-1">
                                        <i class="fa-solid fa-calendar-days price-color"></i>
                                        Có vé hôm nay
                                    </div>
                                    <?php
                                    $sql = "SELECT * FROM tour_detail WHERE detail_id = $id";
                                    $all_tour = $conn->query($sql);

                                    while ($row = mysqli_fetch_assoc($all_tour)) {
                                        ?>
                                        <div class="fs-6 fw-semibold py-1">
                                            <i class="fa-solid fa-clock price-color"></i>
                                            Giờ hoạt động
                                            <div class="fs-6 fw-semibold ps-4">
                                                <?php echo $row["time_line"] ?>
                                            </div>
                                        </div>
                                        <div class="fs-6 fw-semibold py-1">
                                            <i class="fa-solid fa-language price-color"></i>
                                            Dịch vụ có sẵn:
                                            <?php
                                            $langArr = preg_split("/\,/", $row["language"]);
                                            foreach ($langArr as $language) {
                                                echo '<div class="fs-6 fw-semibold ps-4">' . $language . '</div>';
                                            }
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- TICKETBOX BOOK -->
            <div id="ticketbox__state" class="row mt-5 mb-3">
                <div class="col-9">
                    <div class="fw-bold fs-5">Có vé hôm nay</div>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM find_ticket WHERE id_tour = $id";
            $all_tour = $conn->query($sql);

            while ($row = mysqli_fetch_assoc($all_tour)) {
                ?>
                <div class="row my-4">
                    <div class="container">
                        <div class="row bg-white p-3 rounded-3 shadow">
                            <div>
                                <button class="text-white py-1 px-2 rounded-5 bg-primary fs-8">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                    Lựa chọn của chúng tôi
                                </button>
                            </div>
                            <div class="fs-6 fw-bold my-3"><?php echo $row["name"]?></div>
                            <div class="px-4 py-3 bg-light">
                                <div class="fs-6 fw-semibold text-secondary">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    Sử dụng vào ngày đã chọn
                                </div>
                                <div class="fs-6 fw-semibold text-secondary text-success">
                                    <i class="fa-solid fa-phone-flip"></i>
                                    Không cần đặt chỗ trước
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fs-6 fw-semibold text-secondary">
                                        <i class="fa-solid fa-hand-holding-dollar"></i>
                                        Không hoàn tiền
                                    </div>
                                    <div class="fs-5 fw-bold text-danger"><?php echo divideVND($row["total_cost"]) ?> VND</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end my-3">
                                <button class="btn__choosen py-2 px-4 rounded-3 text-white fw-bold fs-7">Chọn</button>
                                <button
                                    class="btn__cancel py-2 px-4 rounded-3 text-primary bg-light fw-bold fs-7">Hủy</button>
                            </div>
                            <div class="d-flex align-items-center px-3 py-4 border-top">
                                <!-- Datetime picker -->
                                <div class="datetimepicker px-5">
                                    <label for="datetimepicker" class="fw-semibold">Ngày tham gia</label>
                                    <input type="date" name="datetimepicker" id="datetimepicker">
                                </div>

                                <!-- Ticket quantity -->
                                <div class="ticket__quantity d-flex align-items-center px-5 border-start">
                                    <i class="fa-solid fa-users"></i>
                                    <div class="px-3">
                                        <label class="fs-6 fw-semibold">Giá vé</label>
                                        <div class="ticket__price fs-8" data-price="<?php echo $row["total_cost"]?>">
                                            <?php echo divideVND($row["total_cost"])?> VND
                                        </div>
                                    </div>
                                    <input type="number" name="" value="0"
                                        class="quantity w-25 text-center border rounded-3 p-1">
                                    <div class="mx-5">
                                        <div class="fs-8 text-secondary">Tổng giá tiền</div>
                                        <div class="total__ticket fs-6 fw-bold">0 VND</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <footer class="">
            <?php
            include './footer.php'
                ?>
        </footer>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="./datepickerController.js"></script>
        <script src="./tourInspect.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    type: "fraction",
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
</body>

</html>