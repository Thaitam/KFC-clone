<?php
    require("ketnoiDatabase.php");
    $sql = "DELETE FROM `cart`";
    mysqli_query($cn, $sql);
    header("location: ./Cart.php");
?>