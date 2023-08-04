<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực đơn</title>
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/slidernav.css">
    <link rel="stylesheet" href="../asset/css/content.css">
    <link rel="stylesheet" href="../asset/css/menu.css">
    <link rel="stylesheet" href="../asset/css/footer.css">
    <link rel="stylesheet" href="../asset/icon/themify-icons-font/themify-icons/themify-icons.css">
</head>
<body>
    <!-- HEADER -->
    <section class="section-header">
        <header id="header">
            <div class="header-nav">
                <a class="logo" href="http://localhost/project_final/thaitamcode/index.php"><img class="logo" src="../asset/image/logo/kfc-logo.svg" alt=""></a>
                <ul>
                    <li><a href="#">Thực đơn</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                </ul>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="./Manament.php"><i class="icon icon-user ti-user"></i></a></li>
                    <li><a href="#"><i class="icon icon-cart ti-shopping-cart"></i></a></li>
                    <li><a href="./Productmanement.php"><i class="icon icon-memu ti-menu"></i></a></li>
                </ul>
            </div>
        </header>
    </section>
    <!-- HEADER -->
    <!-- NAV -->
    <nav class="tab-nav-bar">
        <div class="tab-navigation">
            <i class="ti-angle-left btn-prev"></i>
            <i class="ti-angle-right btn-next"></i>
            <ul class="tab-menu">
                <li class="tab-btn"><a class="btn-a active" href="#hotdeal">Ưu đãi</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#new-product">Món mới</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#for-one">Combo 1 người</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#sharing">Combo nhóm</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#fried-rosted-chicken">Gà rán - Gà quay</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#burger---rice">Burger - Cơm - Mì ý</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#snack">Thức ăn nhẹ</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#dessert-&-drink">Thức uống & Tráng miệng</a></li>
            </ul>
        </div>
    </nav>
    <section class="container container-list_product">
        <section id="hotdeal" class="magin-top sectionscroll">
            <div class="heading">
                <h3>Ưu đãi</h3>
            </div>
            <div class="container_product">
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `hotdeal`";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/hotdeal/<?= $row["image"]?>" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                        <?= $row["name_food"] ?>
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                            <?= $row["pricedeal"] ?><span>₫</span>
                            </p>
                            <p class="price_org">
                            <?= $row["priceorg"] ?><span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p><?= $row["description"] ?></p>
                    </div>
                    <div class="btnsection">
                        <button class="btn-edit">
                            Tùy chỉnh
                        </button>
                        <button class="btn-add">
                            Thêm
                        </button>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>
        </section>
        <!-- my change -->
        <section id="new-product" class="magin-top sectionscroll">
            <div class="heading">
                <h3>Món mới</h3>
            </div>
            <div class="container_product">
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `food` WHERE typeof LIKE '%new-product%'";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/product/<?= $row["imageURL"] ?>" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                            <?= $row["name"] ?>
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                                <?= $row["price"] ?><span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p><?= $row["description"] ?></p>
                    </div>
                    <div class="btnsection">
                        <button class="btn-add onlyone">
                            Thêm
                        </button>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>
        </section>
        <!-- my change -->
        <!-- my change -->
        <section id="for-one" class="magin-top sectionscroll">
            <div class="heading">
                <h3>Combo 1 người</h3>
            </div>
            <div class="container_product">
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `food` WHERE typeof LIKE '%for-one%'";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/product/<?= $row["imageURL"] ?>" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                            <?= $row["name"] ?>
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                                <?= $row["price"] ?><span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p><?= $row["description"] ?></p>
                    </div>
                    <div class="btnsection">
                        <button class="btn-add onlyone">
                            Thêm
                        </button>
                    </div>
                </div>
            <?php 
                }
            ?>
            </div>
        </section>
        <!-- my change -->
        <!-- my change -->
        <section id="sharing" class="magin-top sectionscroll">
            <div class="heading">
                <h3>Combo nhóm</h3>
            </div>
            <div class="container_product">
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `food` WHERE typeof LIKE '%sharing%'";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/product/<?= $row["imageURL"] ?>" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                            <?= $row["name"] ?>
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                                <?= $row["price"] ?><span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p><?= $row["description"] ?></p>
                    </div>
                    <div class="btnsection">
                        <button class="btn-add onlyone">
                            Thêm
                        </button>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>
        </section>
        <!-- my change -->
        <!-- my change -->
        <section id="fried-rosted-chicken" class="magin-top sectionscroll">
            <div class="heading">
                <h3>Gà rán - Gà quay</h3>
            </div>
            <div class="container_product">
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `food` WHERE typeof LIKE '%fried-rosted-chicken%'";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/product/<?= $row["imageURL"] ?>" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                            <?= $row["name"] ?>
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                                <?= $row["price"] ?><span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p><?= $row["description"] ?></p>
                    </div>
                    <div class="btnsection">
                        <button class="btn-add onlyone">
                            Thêm
                        </button>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>
        </section>
        <!-- my change -->
        <!-- my change -->
        <section id="burger---rice" class="magin-top sectionscroll">
            <div class="heading">
                <h3>Burger - cơm - mì ý</h3>
            </div>
            <div class="container_product">
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `food` WHERE typeof LIKE '%burger---rice%'";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/product/<?= $row["imageURL"] ?>" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                            <?= $row["name"] ?>
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                                <?= $row["price"] ?><span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p><?= $row["description"] ?></p>
                    </div>
                    <div class="btnsection">
                        <button class="btn-add onlyone">
                            Thêm
                        </button>
                    </div>
                </div>
            <?php 
                }
            ?>
            </div>
        </section>
        <!-- my change -->
        <!-- my change -->
        <section id="snack" class="magin-top sectionscroll">
            <div class="heading">
                <h3>Thức ăn nhẹ</h3>
            </div>
            <div class="container_product">
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `food` WHERE typeof LIKE '%snack%'";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/product/<?= $row["imageURL"]?>" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                            <?= $row["name"] ?>
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                                <?= $row["price"] ?><span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p><?= $row["description"] ?></p>
                    </div>
                    <div class="btnsection">
                        <button class="btn-add onlyone">
                            Thêm
                        </button>
                    </div>
                </div>
            <?php 
                }
            ?>
            </div>
        </section>
        <!-- my change -->
        <!-- my change -->
        <section id="dessert-&-drink" class="magin-top sectionscroll">
            <div class="heading">
                <h3>Thức uống & tráng miệng</h3>
            </div>
            <div class="container_product">
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `food` WHERE typeof LIKE '%dessert-&-drink%'";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/product/<?= $row["imageURL"] ?>" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                            <?= $row["name"] ?>
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                                <?= $row["price"] ?><span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p><?= $row["description"] ?></p>
                    </div>
                    <div class="btnsection">
                        <button class="btn-add onlyone">
                            Thêm
                        </button>
                    </div>
                </div>
            <?php 
                }
            ?>
            </div>
        </section>
        <!-- my change -->
    </section>
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
    <script src="../asset/js/tabnavbar.js"></script>
    <script src="../asset/js/fixheaderfixed.js"></script>
    <!-- mychange -->
    <script src="../asset/js/scollandactive.js"></script>
</body>
</html>