<?php
    require("ketnoiDatabase.php");
    $masp = (int) $_GET['id'];
    $sql = "DELETE FROM `cart` WHERE `cart`.`iditem` = $masp";
    mysqli_query($cn, $sql);
    header("location: ./Cart.php");
?>