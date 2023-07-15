<?php
    require_once("connect.php");

    //Get the id from the URL
    $product_id = $_GET['product_id'];

    //Create a query statement
    $sql = "DELETE FROM tbl_cart WHERE product_id = $product_id";

    //Execute the query
    $result = $conn->query($sql);

    header("Location: cart.php");
?>