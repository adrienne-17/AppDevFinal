<?php
    require_once("connect.php");

    $sql = "SELECT * FROM tbl_transactions";

    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $transactions = $result->fetch_all(MYSQLI_ASSOC);
    } else{
        $transactions = [];
    }

    $sql2 = "SELECT * FROM tbl_quantity";

    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0){
        $products = $result2->fetch_all(MYSQLI_ASSOC);
    } else{
        $products = [];
    }

    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        die();
    } 
?>