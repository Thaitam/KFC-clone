<?php
    require("ketnoiDatabase.php");
    $masp = (int) $_GET['id'];
    $img = "SELECT image FROM `food` WHERE `food`.`id` = $masp";
    $query = mysqli_query($cn, $img);
    $after = mysqli_fetch_assoc($query);

    //Delete img
    if (file_exists("../asset/image/product/".$after['imageURL'])) {
        unlink("../asset/image/product/".$after['imageURL']);
    }
    $sql = "DELETE FROM `food` WHERE `food`.`id` = $masp";
    mysqli_query($cn, $sql);
    exit;
?>