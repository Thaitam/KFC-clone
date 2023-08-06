// get_total_product.php
<?php
    require("ketnoiDatabase.php");
    $sql = "SELECT COUNT(DISTINCT iditem) AS total_product FROM cart;";
    $result = mysqli_query($cn, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_product = $row["total_product"];

    // Trả về dữ liệu dưới dạng JSON
    header("Content-Type: application/json");
    echo json_encode($total_product);
?>