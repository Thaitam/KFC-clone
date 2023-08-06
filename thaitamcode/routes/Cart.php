<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/slidernav.css">
    <link rel="stylesheet" href="../asset/css/content.css">
    <link rel="stylesheet" href="../asset/css/menu.css">
    <link rel="stylesheet" href="../asset/css/footer.css">
    <link rel="stylesheet" href="../asset/css/cart1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../asset/icon/themify-icons-font/themify-icons/themify-icons.css">
</head>
<body>
    <!-- Header -->
    <section class="section-header">
        <header id="header">
            <div class="header-nav">
                <a class="logo" href="http://localhost/project_final/thaitamcode/index.php"><img class="logo" src="../asset/image/logo/kfc-logo.svg"
                        alt=""></a>
                <ul>
                    <li><a href="./thucdon.php">Thực đơn</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                </ul>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="./Manament.php"><i class="icon icon-user ti-user"></i></a></li>
                    <li><a href="./Productmanement.php"><i class="icon icon-memu ti-menu"></i></a></li>
                </ul>
            </div>
        </header>
    </section>
    <!-- Header -->
    <!-- Cart -->
    <section class="container cart-container">
        <h1 class="cart-heading">
            Giỏ hàng của tôi
        </h1>
        <a class="deleteall" href="./btndeleteall.php">Xóa tất cả</a>
        <!-- Cart is empty -->
        <div class="cart-is-empty">
            <div class="cart-empty-heading">
                <h1>GIỎ HÀNG CỦA BẠN ĐANG TRỐNG. HÃY ĐẶT MÓN NGAY!</h1>
                <button class="cart-empty-btn">
                    <a href="./thucdon.php">Bắt đầu đặt hàng</a>
                </button>
            </div>
        </div>
        <!-- Cart is empty -->
        <!-- Cart is fill -->
        <div class="cart">
            <div class="cart-fill-container">
            <?php
                // Thực hiện kết nối đến cơ sở dữ liệu
                require("ketnoiDatabase.php");

                // Truy vấn để lấy các giá trị từ bảng cart
                $id_item = "SELECT iditem FROM cart";
                $result = mysqli_query($cn, $id_item);

                // Kiểm tra và lấy các số nguyên từ kết quả truy vấn
                $id_array = array();
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_array[] = $row['iditem'];
                    }
                }

                // Kiểm tra nếu có các số nguyên trong $id_array, thực hiện truy vấn $sql
                if (!empty($id_array)) {
                    // Chuyển mảng $id_array thành chuỗi để sử dụng trong truy vấn $sql
                    $id_list = implode(",", $id_array);

                    // Truy vấn $sql để lấy dữ liệu từ bảng food
                    $sql = "SELECT * FROM food WHERE id IN ($id_list)";
                    $query = mysqli_query($cn, $sql);

                    // Xử lý dữ liệu lấy được từ bảng food
                    while ($row = mysqli_fetch_array($query)) {
                        // Hiển thị thông tin món ăn
                        ?>
                        <div class="item-in-cart product">
                            <div class="item-cart-img">
                                <img src="../asset/image/product/<?= $row["imageURL"] ?>" alt="">
                            </div>
                            <div class="item-cart-content">
                                <h2 class="cart-content_title">
                                    <?= $row["name"] ?>
                                </h2>
                                <p class="cart-content_desct">
                                    <?= $row["description"] ?>
                                </p>
                                <button class="delete-btn">
                                    <a class="delete-btn-a" data-product-id="<?= $row['id'] ?>">Xóa</a>
                                </button>
                            </div>
                            <div class="item-cart-price">
                                <p><?= $row["price"] ?>.000<span>₫</span></p>
                                <p class="xoagia"></p>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    // Nếu không có dữ liệu, thêm class .activeblock vào cart-is-empty
                    echo "<script>
                        const empty = document.querySelector('.cart-is-empty');
                        const cartfill = document.querySelector('.cart');
                        const btndeleteall = document.querySelector('.deleteall');
                            btndeleteall.classList.add('activenone');
                            empty.classList.add('activeblock');
                            cartfill.classList.add('activenone');
                        </script>";
                }

                // Đóng kết nối đến cơ sở dữ liệu
                mysqli_close($cn);
            ?>
            <?php
                // Thực hiện kết nối đến cơ sở dữ liệu
                require("ketnoiDatabase.php");

                // Truy vấn để lấy các giá trị từ bảng cart
                $id_item = "SELECT iditem FROM cart";
                $result = mysqli_query($cn, $id_item);

                // Kiểm tra và lấy các số nguyên từ kết quả truy vấn
                $id_array = array();
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_array[] = $row['iditem'];
                    }
                }

                // Kiểm tra nếu có các số nguyên trong $id_array, thực hiện truy vấn $sql
                if (!empty($id_array)) {
                    // Chuyển mảng $id_array thành chuỗi để sử dụng trong truy vấn $sql
                    $id_list = implode(",", $id_array);

                    // Truy vấn $sql để lấy dữ liệu từ bảng food
                    $sql = "SELECT * FROM hotdeal WHERE id IN ($id_list)";
                    $query = mysqli_query($cn, $sql);

                    // Xử lý dữ liệu lấy được từ bảng food
                    while ($row = mysqli_fetch_array($query)) {
                        // Hiển thị thông tin món ăn
                        ?>
                        <div class="item-in-cart product">
                            <div class="item-cart-img">
                                <img src="../asset/image/hotdeal/<?= $row["image"] ?>" alt="">
                            </div>
                            <div class="item-cart-content">
                                <h2 class="cart-content_title">
                                    <?= $row["name_food"] ?>
                                </h2>
                                <p class="cart-content_desct">
                                    <?= $row["description"] ?>
                                </p>
                                <button class="delete-btn">
                                    <a class="delete-btn-a" data-product-id="<?= $row['id'] ?>">Xóa</a>
                                </button>
                            </div>
                            <div class="item-cart-price">
                                <p><?= $row["pricedeal"] ?>.000<span>₫</span></p>
                                <p class="xoagia"><?= $row["priceorg"] ?>.000<span>₫</span></p>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    // Nếu không có dữ liệu, thêm class .activeblock vào cart-is-empty
                    echo "<script>
                        const empty = document.querySelector('.cart-is-empty');
                        const cartfill = document.querySelector('.cart');
                        const btndeleteall = document.querySelector('.deleteall');
                            btndeleteall.classList.add('activenone');
                            empty.classList.add('activeblock');
                            cartfill.classList.add('activenone');
                        </script>";
                }

                // Đóng kết nối đến cơ sở dữ liệu
                mysqli_close($cn);
            ?>
                <div class="list-product-gw">
                    <h3 class="product-gw_heading">
                        SẼ NGON HƠN KHI THƯỞNG THỨC CÙNG…
                    </h3>
                    <ul class="product-ul">
                        <li class="product-li">
                            <div class="cover-text">
                                3 VIÊN KHOAI MÔN KIM SA <br> 22.000₫
                            </div>
                        </li>
                        <li class="product-li">
                            <div class="cover-text">
                                1 Viên Khoai Môn Kim Sa<br> 22.000₫
                            </div>
                        </li>
                        <li class="product-li">
                            <div class="cover-text">
                                KHOAI TÂY CHIÊN (VỪA)<br> 19.000₫
                            </div>
                        </li>
                        <li class="product-li">
                            <div class="cover-text">
                                KHOAI TÂY CHIÊN (LỚN)<br> 28.000₫
                            </div>
                        </li>
                        <li class="product-li">
                            <div class="cover-text">
                                1 BÁNH TRỨNG<br> 18.000₫
                            </div>
                        </li>
                        <li class="product-li">
                            <div class="cover-text">
                                TRÀ ĐÀO<br> 24.000₫
                            </div>
                        </li>
                        <li class="product-li">
                            <div class="cover-text">
                                4 BÁNH TRỨNG<br> 58.000₫
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-sticky">
                <div class="Payment">
                <?php
                    require("ketnoiDatabase.php");
                    $sql = "SELECT COUNT(DISTINCT iditem) AS total_product FROM cart;";
                    $result = mysqli_query($cn, $sql);
                    $row = mysqli_fetch_assoc($result);
                ?>
                    <div class="title">
                        <?= $row["total_product"] ?> Món
                    </div>
                    <hr class="hr_first">
                    <div class="question">Bạn có Mã giảm giá?</div>
                    <div class="enter">
                        <input class="input_box" type="text" required>
                        <label >Mã giảm giá*</label>
                        <button>Áp dụng</button>
                    </div>
                    <hr class="hr_first">
                    <div class="Description_payment">
                    <?php
                        require("ketnoiDatabase.php");

                        $sql = "SELECT cart.id, cart.iditem, food.price AS food_price, hotdeal.pricedeal AS hotdeal_price
                                FROM cart
                                LEFT JOIN food ON cart.iditem = food.id
                                LEFT JOIN hotdeal ON cart.iditem = hotdeal.id";

                        $result = mysqli_query($cn, $sql);

                        // Khởi tạo biến tổng
                        $total_price = 0;

                        while ($row = mysqli_fetch_assoc($result)) {
                            $food_price = $row['food_price'];
                            $hotdeal_price = $row['hotdeal_price'];

                            // Tính tổng của hai cột food_price và hotdeal_price
                            $total_price += $food_price + $hotdeal_price;
                        }
                    ?>
                        <div class="total-order">
                            <div>Tổng đơn hàng</div>
                            <div><?= $total_price ?>.000<span>₫</span></div>
                        </div>
                        <div class="total-order">
                            <div>Phí giao hàng</div>
                            <div>10.000<span>₫</span></div>
                        </div>
                        <?php
                            require("ketnoiDatabase.php");

                            $sql = "SELECT cart.id, cart.iditem, food.price AS food_price, hotdeal.pricedeal AS hotdeal_price
                                    FROM cart
                                    LEFT JOIN food ON cart.iditem = food.id
                                    LEFT JOIN hotdeal ON cart.iditem = hotdeal.id";

                            $result = mysqli_query($cn, $sql);

                            // Khởi tạo biến tổng
                            $total_price_at = 0;

                            while ($row = mysqli_fetch_assoc($result)) {
                                $food_price = $row['food_price'];
                                $hotdeal_price = $row['hotdeal_price'];

                                // Tính tổng của hai cột food_price và hotdeal_price
                                $total_price_at += $food_price + $hotdeal_price + 10;
                            }
                        ?>
                        <div class="total-order">
                            <div>Tổng thanh toán</div>
                            <div><?= $total_price_at?>.000<span>₫</span></div>
                        </div>
                    </div>
                    <hr class="hr_first">
                    <div class="Check_out">
                        <div class="check">Thanh toán</div>
                        <div class="price_total"><?= $total_price_at?>.000₫</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart is fill -->
    </section>
    <!-- Cart -->
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
        // Bắt sự kiện click nút "Xóa"
        $(".delete-btn-a").on('click', function() {
            var productId = $(this).data('product-id');
            var clickedButton = $(this);
            // Gửi yêu cầu AJAX để xóa sản phẩm
            $.ajax({
                type: 'GET',
                url: './btndeletehd.php',
                data: { id: productId },
                success: function() {
                    // Xóa thành công, ẩn sản phẩm khỏi giao diện
                    clickedButton.closest('.product').addClass('activenone');
                    // Kiểm tra xem còn sản phẩm hiển thị hay không
                    var remainingProducts = $('.product:not(.activenone)');
                    if (remainingProducts.length === 0) {
                        // Không còn sản phẩm nào hiển thị, thực hiện load lại trang
                        location.reload();
                    }
                    setTimeout(function() {
                        location.reload();
                    }, 50);
                },
                error: function() {
                    alert('Đã xảy ra lỗi khi xóa sản phẩm.');
                }
            });
        });
    });
</script>
</body>
</html>