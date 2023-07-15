<?php
    require_once("connect.php");

    $sql = "TRUNCATE TABLE tbl_cart";
    $result = $conn->query($sql);

    header("Location: store.php");
?>