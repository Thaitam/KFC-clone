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
        <link rel="stylesheet" href="../asset/icon/themify-icons-font/themify-icons/themify-icons.css">
    </head>
<body>
    <!-- HEADER -->
    <section class="section-header">
        <header id="header">
            <div class="header-nav">
                <a class="logo" href="http://localhost/project_final/thaitamcode/index.php"><img class="logo" src="../asset/image/logo/kfc-logo.svg" alt=""></a>
                <ul>
                    <li><a href="./routes/thucdon.php">Thực đơn</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                </ul>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="./routes/Manament.php"><i class="icon icon-user ti-user"></i></a></li>
                    <li><a href="#"><i class="icon icon-cart ti-shopping-cart"></i></a></li>
                    <li><a href="#"><i class="icon icon-memu ti-menu"></i></a></li>
                </ul>
            </div>
        </header>
    </section>
    <!-- HEADER -->
    <section class="container form-container">
        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <div class="box box1"></div>
            <div class="box box2"></div>
            <div class="box box3"></div>
            <h1 class="form-heading">
                Thêm ưu đãi
            </h1>
            <div class="form-product_name jc-spacebtw">
                <label class="margin-bottom-10 font" for="ten">Tên sản phẩm</label>
                <input class="margin-bottom-15 font pding-lr-5px" type="text" id="ten" name="ten" required>
            </div>
            <div class="form-product_pricedeal jc-spacebtw">
                <label class="margin-bottom-10 font" for="price-deal">Giá giảm sản phẩm</label>
                <input class="margin-bottom-15 font pding-lr-5px" type="number" id="price-deal" name="price-deal" required>
            </div>
            <div class="form-product_priceorg jc-spacebtw">
                <label class="margin-bottom-10 font" for="price-org">Giá góc sản phẩm</label>
                <input class="margin-bottom-15 font pding-lr-5px" type="number" id="price-org" name="price-org" required>
            </div>
            <div class="form-product_img jc-spacebtw">
                <label class="margin-bottom-10 font" for="product-img">Hình ảnh sản phẩm</label>
                <input class="margin-bottom-15 font pding-lr-5px" type="file" id="product-img" name="product-img" value="Choose File" required>
            </div>
            <div class="form-product_desct jc-spacebtw">
                <label class="margin-bottom-10 font" for="product-desct">Mô tả sản phẩm</label>
                <textarea name="product-desct" font id="product-desct" cols="30" rows="10"></textarea>
            </div>
            <div class="center">
                <button class="btn-cancel ">
                    <a href="./thucdon.html" class="font">Hủy</a>
                </button>
                <button class="btn-add_product font" type="submit" name="submit">
                    Thêm sản phẩm
                </button>
            </div>
        </form>
    </section>
</body>
</html>