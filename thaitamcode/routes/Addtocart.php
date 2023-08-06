<?php
    require("ketnoiDatabase.php");
    $masp = (int) $_GET['id'];
    $img = "SELECT image FROM `hotdeal` WHERE `hotdeal`.`id` = $masp";
    $query = mysqli_query($cn, $img);
    $after = mysqli_fetch_assoc($query);

    $sql = "INSERT INTO `cart` (`iditem`) VALUES ($masp)";
    mysqli_query($cn, $sql);
    exit();
?>
