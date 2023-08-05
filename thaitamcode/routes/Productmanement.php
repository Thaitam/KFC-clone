<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quản lý sản phẩm</title>
        <link rel="stylesheet" href="../asset/css/reset.css">
        <link rel="stylesheet" href="../asset/css/header.css">
        <link rel="stylesheet" href="../asset/css/slidernav.css">
        <link rel="stylesheet" href="../asset/css/content.css">
        <link rel="stylesheet" href="../asset/css/menu.css">
        <link rel="stylesheet" href="../asset/css/footer.css">
        <link rel="stylesheet" href="../asset/css/form.css">
        <link rel="stylesheet" href="../asset/icon/themify-icons-font/themify-icons/themify-icons.css">
    </head>
<body>
    <!-- HEADER -->
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
                    <li><a href="./Cart.php"><i class="icon icon-cart ti-shopping-cart"></i></a></li>
                    <li><a href="#"><i class="icon icon-memu ti-menu"></i></a></li>
                </ul>
            </div>
        </header>
    </section>
    <!-- HEADER -->
    <section class="container container-manament">
        <h1>Danh sách sản phẩm</h1>
        <div class="list-product">
            <ul>
                <p>các ưu đãi</p>
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `hotdeal`";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <li class="list-product_item">
                    <div class="product_item">
                        <div class="product_item_img ">
                            <img src="../asset/image/hotdeal/<?= $row["image"]?>" alt="">
                        </div>
                        <div class="product_item_content">
                            <h1><?= $row["name_food"] ?></h1>
                            <p class="item_content_desct"><?= $row["description"] ?></p>
                            <p class="item_content_pricedeal"> <?= $row["pricedeal"] ?><span>₫</span></p>
                            <p class="item_content_priceorg"><?= $row["priceorg"] ?><span>₫</span></p>
                        </div>
                    </div>
                    <div class="button-manament">
                        <button class="btn-update"><a href="./Updatehotdeal.php?id=<?= $row['id']?>">Sửa</a></button>
                        <button class="btn-delete"><a href="./Deleteproduct.php?id=<?= $row['id']?>">Xóa</a></button>
                    </div>
                </li>
            <?php
                }
            ?>
            <p>các sản phẩm khác</p>
            <?php
                require("ketnoiDatabase.php");
                $sql = "SELECT * FROM `food`";
                $query = mysqli_query($cn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <li class="list-product_item">
                    <div class="product_item">
                        <div class="product_item_img ">
                            <img src="../asset/image/product/<?= $row["imageURL"] ?>" alt="">
                        </div>
                        <div class="product_item_content">
                            <h1><?= $row["name"] ?></h1>
                            <p class="item_content_desct"><?= $row["description"] ?></p>
                            <p class="item_content_price"><?= $row["price"] ?><span>₫</span></p>
                            <p class="item_content_tyeof"><?= $row["typeof"] ?></p>
                        </div>
                    </div>
                    <div class="button-manament">
                        <button class="btn-update"><a href="./Update.php?id=<?= $row['id']?>">Sửa</a></button>
                        <button class="btn-delete"><a href="./Update.php?id=<?= $row['id']?>">Xóa</a></button>
                    </div>
                </li>
            <?php
                }
            ?>
            </ul>
        </div>
    </section>
</body>
</html>