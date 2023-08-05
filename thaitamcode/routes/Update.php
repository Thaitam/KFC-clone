<?php
    require("ketnoiDatabase.php");
    $masp = (int) $_GET['id'];
    $sql = "SELECT * FROM `food` WHERE `id` = '$masp'";
    $query = mysqli_query($cn, $sql);
    $row = mysqli_fetch_array($query);
    $img = $row['imageURL'];
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quản lý</title>
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
                    <li><a href="#"><i class="icon icon-cart ti-shopping-cart"></i></a></li>
                    <li><a href="./Productmanement.php"><i class="icon icon-memu ti-menu"></i></a></li>
                </ul>
            </div>
        </header>
    </section>
    <!-- HEADER -->
    <!-- FORM -->
    <section class="container form-container">
        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <div class="box box1"></div>
            <div class="box box2"></div>
            <div class="box box3"></div>
            <h1 class="form-heading">
                Quản lý sản phẩm
            </h1>
            <div class="form-product_name jc-spacebtw">
                <label class="margin-bottom-10 font" for="name">Tên sản phẩm</label>
                <input class="margin-bottom-15 font pding-lr-5px" type="text" id="name" name="name"  value="<?= $row["name"]?>">
            </div>
            <div class="form-product_priceorg jc-spacebtw">
                <label class="margin-bottom-10 font" for="price-org">Giá sản phẩm</label>
                <input class="margin-bottom-15 font pding-lr-5px" type="number" id="price-org" name="price-org" value="<?= $row["price"] ?>">
            </div>
            <div class="form-product_img jc-spacebtw">
                <label class="margin-bottom-10 font" for="product-img">Hình ảnh sản phẩm</label>
                <img src="../asset/image/product/<?= $row["imageURL"]?>" alt="">
                <input class="margin-bottom-15 font pding-lr-5px" type="file" id="product-img" name="product-img" value="Choose File">
            </div>
            <div class="form-product_desct jc-spacebtw">
                <label class="margin-bottom-10 font" for="product-desct">Mô tả sản phẩm</label>
                <textarea name="product-desct" class="font" id="product-desct" cols="30" rows="10"><?=$row["description"]?></textarea>
            </div>
            <div class="center">
                <button class="btn-cancel ">
                    <a href="./Productmanement.php" class="font">Hủy</a>
                </button>
                <button class="btn-add_product font" type="submit" name="submit">
                    Cập nhật sản phẩm
                </button>
            </div>
        </form>
    </section>
    <?php
        require("ketnoiDatabase.php");
        if (isset($_POST["submit"])) {
            $tensp = $_POST["name"];
            $giasp = $_POST["price-org"];
            $mota = $_POST["product-desct"];
            $hinhanh = $_FILES['product-img']['name'];
            //Tạo thư mục , tạo thư mục images ở bên ngoài
            $taget_dir = "../asset/image/product/";
            if($hinhanh) {
                if (file_exists("../asset/image/product/".$img)) {
                    unlink("../asset/image/product/".$img);
                } 
                $target_file = $taget_dir.$hinhanh;
            } else {
                $target_file = $taget_dir.$img;
                $hinhanh = $img;
            }
            //Check đủ các thông tin
            if(isset($tensp) && isset($giasp) && isset($mota) && isset($hinhanh)) {
                move_uploaded_file($_FILES["product-img"]["tmp_name"], $target_file);
                $sql = "UPDATE `food` SET `name`='$tensp', `price`='$giasp', `description`='$mota', `imageURL`='$hinhanh' WHERE `id`='$masp'";
                mysqli_query($cn, $sql);
                echo "<script> alert('Bạn đã cập nhật thành công')
                    window.location.href = 'Productmanement.php';
                </script>";
            }
        }
    ?>
</body>
</html>