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
                    <li><a href="#"><i class="icon icon-user ti-user"></i></a></li>
                    <li><a href="#"><i class="icon icon-cart ti-shopping-cart"></i></a></li>
                    <li><a href="#"><i class="icon icon-memu ti-menu"></i></a></li>
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
                <li class="tab-btn"><a class="btn-a" href="#hotdeal">Ưu đãi</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#new-product">Món mới</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#">Combo 1 người</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#">Combo nhóm</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#">Gà rán - Gà quay</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#">Burger - Cơm - Mì ý</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#">Thức ăn nhẹ</a></li><!--
                --><li class="tab-btn"><a class="btn-a" href="#">Thức uống & Tráng miệng</a></li>
            </ul>
        </div>
    </nav>

    <?php
        require("ketnoiDatabase.php");
        $sql = "SELECT * FROM `hotdeal`";
        $query = mysqli_query($cn, $sql);
    ?>

    <section class="container container-list_product">
        <section id="hotdeal" class="magin-top">
            <div class="heading">
                <h3>Ưu đãi</h3>
            </div>
            <div class="container_product">
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/hotdeal/<?= $row["image"] ?>" alt="" class="product-img">
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
        <div id="new-product"></div>
        <section id="new-product" class="magin-top">
            <div class="heading">
                <h3>Món mới</h3>
            </div>
            <div class="container_product">
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/hotdeal/happy-meal.jpg" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                            Happy Meal
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                                89.000<span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p>3 miếng gà + 1 lon 7Up</p>
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
            </div>
        </section>
        <section id="for-one" class="magin-top">
            <div class="heading">
                <h3>Món mới</h3>
            </div>
            <div class="container_product">
                <div class="product-card">
                    <div class="outer-img">
                        <img src="../asset/image/hotdeal/happy-meal.jpg" alt="" class="product-img">
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">
                            Happy Meal
                        </p>
                        <div class="product-content_price">
                            <p class="price_deal">
                                89.000<span>₫</span>
                            </p>
                        </div>
                    </div>
                    <div class="product-dest">
                        <p>3 miếng gà + 1 lon 7Up</p>
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
            </div>
        </section>
    </section>
    
    <script src="../asset/js/tabnavbar.js"></script>
    <script src="../asset/js/fixheaderfixed.js"></script>
</body>
</html>