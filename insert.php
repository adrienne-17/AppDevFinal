<?php 
    require_once("connect.php");

    if($_POST['password'] == $_POST['confirm']){
        if(isset($_POST["submit"])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $player_id = rand(1000,9999).' '.rand(1000,9999).' '.rand(1000,9999);

            $sql = "INSERT INTO tbl_pokemon (email_address, password, player_id) VALUES (?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $email, $password, $player_id);
            $stmt->execute();
            $stmt->close();

            header("Location: login.php");
        }
    }
    else{
        header("Location: register.php?error=Password and Confirm Password are not the same");

        exit();
    }
?>