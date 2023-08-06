<?php
    require("ketnoiDatabase.php");
    $masp = (int) $_GET['id'];
    $img = "SELECT image FROM `hotdeal` WHERE `hotdeal`.`id` = $masp";
    $query = mysqli_query($cn, $img);
    $after = mysqli_fetch_assoc($query);

    //Delete img
    if (file_exists("../asset/image/hotdeal/".$after['image'])) {
        unlink("../asset/image/hotdeal/".$after['image']);
    }
    $sql = "DELETE FROM `hotdeal` WHERE `hotdeal`.`id` = $masp";
    mysqli_query($cn, $sql);
    echo "<script>confirm('Xác nhận xóa');</script>";
    header("location: ./Productmanement.php");
?>