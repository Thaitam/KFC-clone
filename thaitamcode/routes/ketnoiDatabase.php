<?php
    $serverName = "localhost";
    $userName = "root";
    $pwd = "";
    $nameDB = "kfc";

    $cn = new mysqli($serverName, $userName, $pwd, $nameDB);

    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
    }
?>