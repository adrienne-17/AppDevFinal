<?php
    require_once("connect.php");

    //Get the id from the URL
    $id = $_GET['id'];

    //Create a query statement
    $sql = "DELETE FROM tbl_pokemon WHERE id = $id";

    //Execute the query
    $result = $conn->query($sql);

    header("Location: ..\\index.php");
?>