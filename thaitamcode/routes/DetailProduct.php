
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/slidernav.css">
    <link rel="stylesheet" href="../asset/css/content.css">
    <link rel="stylesheet" href="../asset/css/menu.css">
    <link rel="stylesheet" href="../asset/css/footer.css">
    <link rel="stylesheet" href="../asset/css/DetailProduct.css">
    <link rel="stylesheet" href="../asset/icon/themify-icons-font/themify-icons/themify-icons.css">
</head>
<body>
    <!-- Header -->
    <section class="section-header">
        <header id="header">
            <div class="header-nav">
                <a class="logo" href="http://localhost/project_final/thaitamcode/index.php"><img class="logo" src="../asset/image/logo/kfc-logo.svg" alt=""></a>
                <ul>
                    <li><a href="./thucdon.php">Thực đơn</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                </ul>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="./Manament.php"><i class="icon icon-user ti-user"></i></a></li>
                    <?php
                        require("ketnoiDatabase.php");
                        $sql = "SELECT COUNT(DISTINCT iditem) AS total_product FROM cart;";
                        $result = mysqli_query($cn, $sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <li class="cartquantity"><a href="./Cart.php"><span id="totalProduct"><?= $row["total_product"] ?></span></a></li>
                    <li><a href="./Productmanement.php"><i class="icon icon-memu ti-menu"></i></a></li>
                </ul>
            </div>
        </header>
    </section>
    <!-- Header -->
    <?php
        require("ketnoiDatabase.php");
        $masp = (int) $_GET['id'];
        $sql = "SELECT * FROM `hotdeal` WHERE `id` = '$masp'";
        $query = mysqli_query($cn, $sql);
        $row = mysqli_fetch_array($query);
        $img = $row['image'];
    ?>

    <!-- Detail product -->
    <section class="container detail-product-container">
        <div class="detail_information">
            <img src="../asset/image/hotdeal/<?=$row['image']?>" alt="">
            <div class="Button_detail">
                <div class="Cover">
                    <div class="Cover1"></div>
                    <div class="Cover2"></div>
                    <div class="Cover3"></div>
                </div>
                <div class="title"><?=$row['name_food']?></div>
                <p><?=$row['description']?></p>
                <p><?=$row['pricedeal']?>.000<span>₫</span></p>
                <p style="text-decoration: line-through;"><?=$row['priceorg']?>.000<span>₫</span></p>
                <div class="btnsection">
                        <button class="btn-add-indetail" data-product-id="<?= $row['id'] ?>">
                            Thêm
                        </button>
                    </div>
            </div>
        </div>
        <div id="hideDiv" class="hidediv">
            Thêm vào giỏ hàng thành công! <a href="./Cart.php">Xem giỏ hàng</a>
        </div> 
    </section>
    <!-- Detail product -->
    

    <!-- Footer -->
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
                            <img src="../asset/image/content/index/pngwing.com.png" alt="">
                            <img src="../asset/image/content/index/pngwing.com (1).png" alt="">
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
    <!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btn-add-indetail").click(function() {
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
                        }, 2000);
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
    <script src="../asset/js/showquantity.js" ></script>
    
</body>
</html>