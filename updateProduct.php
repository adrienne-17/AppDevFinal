<?php 
    require_once("connect.php");

    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    //Create a query statement with placeholders
    $sql = "UPDATE tbl_cart SET quantity=? WHERE product_id = $product_id";
    //Create a prepared statement
    $stmt = $conn->prepare($sql);
    //Bind the parameters to the placeholders
    $stmt->bind_param("i", $quantity); //s - string, d - double, i - integer
    
    //Execute the query
    $stmt->execute();

    //Close the statement
    $stmt->close();

    //Redirect to index.php
    header("Location: cart.php");
?>