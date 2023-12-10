<!doctype html>
<html lang="en">

<head>
    <title>TravelVi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./asset/css/bookTour.css">
</head>

<body>

    <header>
        <?php
        include './header.php'
            ?>
    </header>

    <main>
        <div class="container mt-5 min-vh-100">
            <h4 class="fw-bold">Đặt chỗ của tôi</h4>
            <h5 class="fs-6 fw-semibold text-secondary my-3">Điền thông tin và xem lại đặt chỗ.</h5>
            <div class="row">
                <div class="col-9">
                    <!-- Login box -->
                    <div class="login__box__to__member mt-3 mb-5 py-3 d-flex shadow rounded-3">
                        <img src="./asset/img/gifbox.png" class="p-3" alt="">
                        <div class="d-flex flex-column">
                            <h5 class="fs-6 fw-bold py-3 m-0">Đăng nhập hoặc Đăng ký và tận hưởng ưu đãi dành riêng cho
                                thành viên</h5>
                            <div class="fs-6 text-secondary fw-semibold"><i class="fa-solid fa-users pe-3"></i>Đặt chỗ
                                nhanh
                                và dễ dàng hơn với Passenger
                                Quick Pick</div>
                            <a href="" class="text-info fs-6 fw-bold text-decoration-none my-auto">Đăng nhập hoặc Đăng
                                kí</a>
                        </div>
                    </div>

                    <!-- Info contact -->
                    <form action="">
                        <div class="fs-5 fw-bold">
                            Thông tin liên hệ
                        </div>
                        <div class="my-4 shadow p-3 rounded-3">
                            <div class="fs-6 fw-bold border-bottom py-3">Thông tin liên hệ (nhận vé/phiếu thanh toán)
                            </div>
                            <div class="d-flex flex-column mt-3">
                                <label class="fw-bold fs-7 " for="full__name">
                                    Họ tên
                                    <span class="text-danger">*</span>
                                </label>
                                <input class="form-control mt-1" name="full__name" type="text" required>
                                <label class="text-secondary fs-8" for="">như trên CCCD (không dấu)</label>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="d-flex flex-column me-5">
                                    <label class="fw-bold fs-7 " for="phone__number">
                                        Điện thoại di động
                                        <span class="text-danger"> *</span>
                                    </label>
                                    <input class="form-control mt-1" name="phone__number" type="text" pattern="\d[0-9]*"
                                        required>
                                    <label class="text-secondary fs-8" for="">VD: +84 901234567 trong đó (+84) là mã
                                        quốc gia và 901234567 là số di động</label>
                                </div>
                                <div class="d-flex flex-column ">
                                    <label class="fw-bold fs-7 " for="email">
                                        Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control mt-1" name="email" type="email" required>
                                    <label class="text-secondary fs-8" for="">VD: email@example.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-3 shadow p-3 rounded-3">
                            <label class="fw-bold fs-7 " for="customer__note">Yêu cầu thêm (tùy chọn)</label>
                            <textarea class="form-control mt-1" name="customer__note"></textarea>
                            <label class="text-secondary fs-8" for="">Định dạng: bằng tiếng Anh hoặc ngôn ngữ địa
                                phương tại điểm đến. Yêu cầu tuỳ vào tình hình thực tế của nhà cung cấp.</label>
                        </div>
                        <div class="fs-5 fw-bold my-3">
                            Tóm tắt
                        </div>
                        <div class="d-flex flex-column mt-3 shadow px-3 rounded-3 py-2">
                            <div class="show__price d-flex align-items-center justify-content-between py-3">
                                <div class="fs-6 fw-semibold">Giá bạn trả</div>
                                <div class="d-flex align-items-center">
                                    <div class="price fs-6 fw-bold ">1.144.713 VND</div>
                                    <i class="icon__up fa-solid fa-chevron-up mx-2"></i>
                                    <!-- <i class="icon__down fa-solid fa-chevron-down mx-2"></i> -->
                                </div>
                            </div>
                            <div
                                class="detail__price d-flex align-items-center justify-content-between py-3 border-top d-none">
                                <div class="fw-semibold fs-7">Adult(1x)</div>
                                <div class="d-flex align-items-center">
                                    <div class="fs-7 fw-bold ">1.144.713 VND</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mb-5 d-flex justify-content-end">
                            <button class="btn-book__tour text-white border-0 rounded-5 py-2 px-4 fs-6 fw-bold shadow"
                                type="submit">Đặt vé</button>
                        </div>
                    </form>

                </div>
                <div class="col-3">
                    <div class="row sticky-top py-3 shadow rounded-3 mt-3">
                        <div class="d-flex align-items-center border-bottom py-3 mb-2">
                            <img src="./asset/icons/activity.svg" alt="">
                            <div class="fs-6">Tóm tắt đặt chỗ</div>
                        </div>
                        <div class="fs-6 my-2">Sun World Ba Na Hills tại Đà Nẵng </div>
                        <div class="d-flex align-items-center my-2" style="height: 90px;">
                            <img src="./asset/img/banahill.webp" class="w-100 h-100 rounded-3" alt="">
                            <div class="fs-8 fw-semibold mx-1">Combo Vé Vào Cửa & Buffet Trưa - Nhà hàng Bốn Mùa
                                (Quét
                                Mã QR Vào Cửa Trực Tiếp) - Khách Quốc Tế</div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between py-1">
                                <div class="fs-7">Ngày tham quan</div>
                                <div class="fs-7 fw-semibold">Thứ 2, 11 thg 12 2023</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between py-1">
                                <div class="fs-7">Áp dụng cho</div>
                                <div class="fs-7 fw-semibold">Adult(1x)</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <script src="./showMorePriceDetail.js"></script>
</body>

</html>