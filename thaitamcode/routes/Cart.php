<?php
    require("ketnoiDatabase.php");
    $id = "SELECT iditem FROM `cart`";
    $sql = "SELECT * FROM `food` WHERE `id` = '$id'";
    $query = mysqli_query($cn, $sql);
?>

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
    <link rel="stylesheet" href="../asset/css/Cart.css">
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
                    <li><a href="#"><i class="icon icon-cart ti-shopping-cart"></i></a></li>
                    <li><a href="./Productmanement.php"><i class="icon icon-memu ti-menu"></i></a></li>
                </ul>   
            </div>
        </header>
    </section>
    <!-- Header -->

    <!-- MY BUCKET -->
    <section style="margin-bottom: 20px;">
        <div class="title">MY BUCKET</div>
    <?php
        while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="Button_detail">
            <img src="../asset/image/procduct/<?= $row["image"]?>" alt="">
            <div class="Infomation_Product">
                <div class="Name_product">Happy Meal</div>
                <div class="description">View Details <i class="fa-solid fa-chevron-down"></i></div>
                <div class="button">
                    <div class="edit">Edit</div>
                    <div class="remove">Remove</div>
                </div>
            </div>
        
            <div class="order">
                <img class="minus" src="../asset/image/Cart/minus.png" alt="" onclick="handlesMinus()">
                <input type="text" value="1" name="amount" id="amount">
                <img class="plus" src="../asset/image/Cart/add.png" alt="" onclick="handlesPlus()">
                <div class="price">
                    <input type="text" value="87,000₫" name="price_product" id="price_product">
                </div>
            </div>
        </div>
    <?php
        }
    ?>
        <div class="list_product">
            <div class="main_sentence">THIS GOES GREAT WITH...</div>
            <div class="product">
                <div class="detail_product">
                    <img class="image_datail" src="../asset/image/Cart/egg-taro.jpg" alt="">
                    <div class="cover_text">
                        <div class="cover"></div>
                        <div class="description_product">1 GOLDEN LAVA TARO + 1 EGGTART <span>22,000₫</span></div>
                    </div>
                    
                    <img class="add" src="../asset/image/Cart/addRed.png" alt="" style="height: 30px;
                    width: 30px;
                    position: relative;
                    top: -222px; 
                    left: 160px;
                    border-radius: 50%;
                    box-shadow: -1px 2px 10px 0px #000000;">
                </div>
                <div class="detail_product">
                    <img class="image_datail" src="../asset/image/Cart/egg-taro.jpg" alt="">
                    <div class="cover_text">
                        <div class="cover"></div>
                        <div class="description_product">1 GOLDEN LAVA TARO + 1 EGGTART <span>22,000₫</span></div>
                    </div>
                    
                    <img class="add" src="../asset/image/Cart/addRed.png" alt="" style="height: 30px;
                    width: 30px;
                    position: relative;
                    top: -222px; 
                    left: 160px;
                    border-radius: 50%;
                    box-shadow: -1px 2px 10px 0px #000000;">
                </div>
                <div class="detail_product">
                    <img class="image_datail" src="../asset/image/Cart/FF-L.jpg" alt="">
                    <div class="cover_text">
                        <div class="cover"></div>
                        <div class="description_product">FRENCH FRIES (R) <span>19,000₫</span></div>
                    </div>
                    <img class="add" src="../asset/image/Cart/addRed.png" alt="" style="height: 30px;
                    width: 30px;
                    position: relative;
                    top: -222px; 
                    left: 160px;
                    border-radius: 50%;
                    box-shadow: -1px 2px 10px 0px #000000;">
                </div>
                <div class="detail_product">
                    <img class="image_datail" src="../asset/image/Cart/FF-R.jpg" alt="">
                    <div class="cover_text">
                        <div class="cover"></div>
                        <div class="description_product">FRENCH FRIES (L) <span>28,000₫</span></div>
                    </div>
                    <img class="add" src="../asset/image/Cart/addRed.png" alt="" style="height: 30px;
                    width: 30px;
                    position: relative;
                    top: -222px; 
                    left: 160px;
                    border-radius: 50%;
                    box-shadow: -1px 2px 10px 0px #000000;">
                </div>
            </div>
        </div>
        <div class="Payment">
            <div class="title">
                1 ITEM
            </div>
            <hr class="hr_first">
            <div class="question">Have an Online Coupon?</div>
            <div class="enter">
                <input class="input_box" type="text" required>
                <label >Online Coupon*</label>
                <button>Redeem</button>
            </div>
            <hr class="hr_second">
            <div class="Description_payment">
                <div class="Name_product">
                    <div >Subtotal</div>
                    <div>Delivery Charge</div>
                    <div class="total">Total</div>
                </div>
                <div class="Price_product">
                    <input value="87,000₫" name="Subtotal" id="Subtotal" ></input>
                    <p>10,000₫</p>
                    <input value="97,000₫" name="total" id="total" ></input>
                </div>
            </div>
            <hr class="hr_third">
            <div class="Check_out">
                <div class="check">Checkout</div>
                <div class="price_total">97,000₫</div>
            </div>
            
        </div>
    </section>
    <!-- MY BUCKET -->
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
      <script>
        let amountElement = document.getElementById('amount')
        let priceElement = document.getElementById('price_product')
        let subtotalElement = document.getElementById('Subtotal')
        let subtotal = subtotalElement.value
        let totalElement = document.getElementById('total')
        let total = totalElement.value
        let price_product = priceElement.value 
        let amount = amountElement.value 
        let render = (amount, price) => {
            amountElement.value = amount
            priceElement.value = price + ',000₫'
            subtotalElement.value = price + ',000₫'
            totalElement.value = price + 10 + ',000₫'
            
        }
        
        
        
        let handlesPlus = () =>
        {
            amount++;
            price_product = 87 * amount
            render(amount, price_product)
        }
        let handlesMinus = () =>
        {
            if (amount > 1)
            {
                amount--;
                price_product -= 87 ;
            }
            render(amount, price_product)
        }

      
      </script>
      <!-- Footer -->
</body>

</html>