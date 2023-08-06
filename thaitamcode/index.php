<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KFC</title>
    <link rel="stylesheet" href="./asset/css/header.css">
    <link rel="stylesheet" href="./asset/css/menu.css">
    <link rel="stylesheet" href="./asset/css/logo.css">
    <link rel="stylesheet" href="./asset/css/reset.css">
    <link rel="stylesheet" href="./asset/css/slider.css">
    <link rel="stylesheet" href="./asset/css/content.css">
    <link rel="stylesheet" href="./asset/css/footer.css">
    <link rel="stylesheet" href="./asset/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./dist/assets/owl.theme.default.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
</head>
<body>
    <!-- HEADER -->
    <section class="section-header">
        <header id="header">
            <div class="header-nav">
                <a class="logo" href="./index.php"><img class="logo" src="./asset/image/logo/kfc-logo.svg" alt=""></a>
                <ul>
                    <li><a href="./routes/thucdon.php">Thực đơn</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                </ul>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="./routes/Manament.php"><i class="icon icon-user ti-user"></i></a></li>
                <?php
                    require("./routes/ketnoiDatabase.php");
                    $sql = "SELECT COUNT(DISTINCT iditem) AS total_product FROM cart;";
                    $result = mysqli_query($cn, $sql);
                    $row = mysqli_fetch_assoc($result);
                ?>    
                    <li class="cartquantity"><a href="./routes/Cart.php"><?= $row["total_product"] ?></a></li>
                    <li><a href="./routes/Productmanement.php"><i class="icon icon-memu ti-menu"></i></a></li>
                </ul>
            </div>
        </header>
    </section>
    <!-- HEADER -->
    <!-- SLIDER -->
    <section id="section-slider">
        <div class="owl-carousel owl-theme">
            <div class="item slider-item">
                <img src="./asset/image/slider/buatruavuive.jpg" alt="">
            </div>
            <div class="item slider-item ">
                <img src="./asset/image/slider/Homde-phase2.jpg" alt="">
            </div>
            <div class="item slider-item">
                <img src="./asset/image/slider/gacuon.jpg" alt="">
            </div>
            <div class="item slider-item">
                <img src="./asset/image/slider/Bali.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- SLIDER -->
    <!-- CONTENT -->
    <section class="container">
        <h2 class="heading_line">
            <span>
                Danh mục món ăn
            </span>
        </h2>
        <div class="content-container">
            <div class="content_item">
                <div class="outter-img">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#hotdeal"><img src="./asset/image/content/index/KHUYEN MAI.jpg" alt="Khuyến mãi" class="item_img"></a>
                </div>
                <div class="item_subline">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#hotdeal">Ưu đãi</a><i class="ti-angle-right"></i>
                </div>
            </div>
            <div class="content_item">
                <div class="outter-img">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#new-product">
                        <img src="./asset/image/content/index/MON MOI.jpg" alt="Khuyến mãi" class="item_img">
                    </a>
                </div>
                <div class="item_subline">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#new-product">Món mới</a><i class="ti-angle-right"></i>
                </div>
            </div>
            <div class="content_item">
                <div class="outter-img">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#for-one">
                        <img src="./asset/image/content/index/COMBO 1 NGUOI.jpg" alt="Khuyến mãi" class="item_img">
                    </a>
                </div>
                <div class="item_subline">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#for-one">Combo 1 Người</a><i class="ti-angle-right"></i>
                </div>
            </div>
            <div class="content_item">
                <div class="outter-img">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#sharing">
                        <img src="./asset/image/content/index/COMBO NHOM.jpg" alt="Khuyến mãi" class="item_img">
                    </a>
                </div>
                <div class="item_subline">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#sharing">Combo Nhóm</a><i class="ti-angle-right"></i>
                </div>
            </div>
            <div class="content_item">
                <div class="outter-img">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#fried-rosted-chicken">
                        <img src="./asset/image/content/index/GA.jpg" alt="Khuyến mãi" class="item_img">
                    </a>
                </div>
                <div class="item_subline">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#fried-rosted-chicken">Gà rán - Gà Quay</a><i class="ti-angle-right"></i>
                </div>
            </div>
            <div class="content_item">
                <div class="outter-img">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#burger---rice">
                        <img src="./asset/image/content/index/COM.jpg" alt="Khuyến mãi" class="item_img">
                    </a>
                </div>
                <div class="item_subline">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#burger---rice">Burger - Cơm - Mì ý</a><i class="ti-angle-right"></i>
                </div>
            </div>
            <div class="content_item">
                <div class="outter-img">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#snack">
                        <img src="./asset/image/content/index/MON AN NHE.jpg" alt="Khuyến mãi" class="item_img">
                    </a>
                </div>
                <div class="item_subline">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#snack">Thức ăn nhẹ</a><i class="ti-angle-right"></i>
                </div>
            </div>
            <div class="content_item">
                <div class="outter-img">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#dessert-&-drink">
                        <img src="./asset/image/content/index/TRANG MIENG.jpg" alt="Khuyến mãi" class="item_img">
                    </a>
                </div>
                <div class="item_subline">
                    <a href="http://localhost/project_final/thaitamcode/routes/thucdon.php#dessert-&-drink">Thức uống & Tráng miệng</a><i class="ti-angle-right"></i>
                </div>
            </div>
        </div>
        <div class="container_list">
            <h2 class="heading_line">
                <span>
                    <i class="fi fi-sr-hand-holding-heart"></i> Có thể bạn sẽ thích món này
                </span>
            </h2>
            <div class="container_content_item">
            <?php
                require("./routes/ketnoiDatabase.php");
                $sql = "SELECT * FROM `food` WHERE typeof LIKE '%sharing%'";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="content_item content_item_rcm">
                    <div class="outter-img outter-img_rcm">
                        <a href="./routes/Detail.php?id=<?= $row['id']?>">
                            <img src="./asset/image/product/<?= $row["imageURL"] ?>" alt="Khuyến mãi" class="item_img">
                        </a>
                    </div>
                    <div class="item_subline item_subline_rcm no-shadow">
                        <p class="item_subline-title">
                        <?= $row["name"] ?>
                        </p>
                        <p class="item_subline-price">
                        <?= $row["price"] ?>.000<span>₫</span>
                        </p>
                    </div>
                    <div class="item_subline content_item_dsct no-shadow">
                        <p class="dsct">
                            <?= $row["description"] ?>
                        </p>
                        <button class="btn_add-item" data-product-id="<?= $row['id'] ?>">Thêm</button>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>
        </div>
        <div id="hideDiv" class="hidediv">
            Thêm vào giỏ hàng thành công! <a href="./Cart.php">Xem giỏ hàng</a>
        </div>
    </section>
    <!-- CONTENT -->
    <!-- FOOTER -->
    <div class="background-footer">
        <section class="container container-footer">
            <footer id="footer">
                <section class="section_card-footer">
                    <div class="card_footer">
                        <div class="card-header">
                            Danh mục món ăn
                        </div>
                        <ul class="card-body">
                            <li><a href="">Ưu đãi</a></li>
                            <li><a href="">Món mới</a></li>
                            <li><a href="">Combo 1 người</a></li>
                            <li><a href="">Combo nhóm</a></li>
                            <li><a href="">Gà rán - Gà quay</a></li>
                            <li><a href="">Burger - Cơm - Mì ý</a></li>
                            <li><a href="">Thức ăn nhẹ</a></li>
                            <li><a href="">Thức uống & Tráng miệng</a></li>
                        </ul>
                    </div>
                    <div class="card_footer">
                        <div class="card-header">
                            Về KFC
                        </div>
                        <ul class="card-body">
                            <li><a href="">Câu chuyện của chúng tôi</a></li>
                            <li><a href="">Tin Khuyến Mãi</a></li>
                            <li><a href="">Tuyển dụng</a></li>
                            <li><a href="">Combo nhóm</a></li>
                            <li><a href="">Đặt tiệc Sinh nhật</a></li>
                        </ul>
                    </div>
                    <div class="card_footer">
                        <div class="card-header">
                            Liên hệ KFC
                        </div>
                        <ul class="card-body">
                            <li><a href="">Theo dõi đơn hàng</a></li>
                            <li><a href="">Hệ Thống Nhà Hàng</a></li>
                            <li><a href="">Liên hệ KFC</a></li>
                        </ul>
                    </div>
                    <div class="card_footer">
                        <div class="card-header">
                            Chính sách
                        </div>
                        <ul class="card-body">
                            <li><a href="">Chính sách hoạt động</a></li>
                            <li><a href="">Chính sách và quy định</a></li>
                            <li><a href="">Chính sách bảo mật thông tin</a></li>
                        </ul>
                    </div>
                    <div class="card_footer">
                        <div class="card-header">
                            Download App
                        </div> 
                        <div class="card-download">
                            <img src="./asset/image/content/index/pngwing.com.png" alt="">
                            <img src="./asset/image/content/index/pngwing.com (1).png" alt="">
                        </div>
                    </div>
                </section>
                <div class="social-link">
                    <p class="copyright">
                        Copyright © 2023 LeTranThaiTamKFC
                    </p>
                    <div class="social_media">
                        <div class="icon-social_media">
                            <a href="https://www.facebook.com/thaitam.letran.7/" target="_blank"><i class="ti-facebook"></i></a>
                        </div>
                        <div class="icon-social_media">
                            <a href="https://www.instagram.com/tamletranthai/" target="_blank"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="icon-social_media">
                            <a href="https://github.com/Thaitam" target="_blank"><i class="ti-github"></i></a>
                        </div>
                        <div class="icon-social_media">
                            <a href=""><i class="ti-twitter-alt"></i></a>
                        </div>
                    </div>
                </div>
                <hr>
            </footer>
        </section>
    </div>
    <!-- FOOTER -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./dist/owl.carousel.min.js"></script>
    <script src="./asset/js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".btn-add").click(function() {
                // Lấy ID sản phẩm từ thuộc tính data
                var productId = $(this).data("product-id");

                // Gửi yêu cầu AJAX đến tệp Addtocart.php
                $.ajax({
                    type: "GET",
                    url: "./Addtocart.php",
                    data: { id: productId },
                    success: function(data) {
                        // Xử lý dữ liệu nếu cần thiết
                        // Ví dụ: hiển thị thông báo, cập nhật giỏ hàng, v.v.
                        // Thêm class activeflex vào #hideDiv
                        const thongbao = document.getElementById('hideDiv');
                        thongbao.classList.add('activeflex');

                        // Sau 5 giây, thêm class activenone và ẩn #hideDiv
                        setTimeout(function() {
                            thongbao.classList.remove('activeflex');
                        }, 1500);
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi nếu có
                        console.log("Đã xảy ra lỗi khi thêm sản phẩm vào giỏ hàng.");
                    }
                });

                // Ngăn chặn hành vi mặc định của nút
                return false;
            });
        });
    </script>
</body>
</html>