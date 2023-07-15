<?php
    require_once("connect.php");

    $sql = "SELECT * FROM tbl_products ORDER BY product_id ASC";

    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $records = $result->fetch_all(MYSQLI_ASSOC);
    } else{
        $records = [];
    }

    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        die();
    }   
?>

