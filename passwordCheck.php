<?php 
    require_once("connect.php");

    if(isset($_POST["submit"])){
        if($_POST["password"] == $_POST["cur_pass"]){
            if($_POST["new_pass"] == $_POST["new_confirm_pass"]){
                $id = $_POST["id"];
                $password = $_POST["new_pass"];

                $sql = "UPDATE tbl_pokemon SET password=? WHERE id = $id";
                $stmt = $conn->prepare($sql);

                $stmt->bind_param("s", $password);
                $stmt->execute();
                $stmt->close();

                header("Location: login.php");
            }
            else{
                header("Location: profile.php?error=New Password and Re-Enter New Password should be the same");

                exit();
            }
        }
        else{
            header("Location: profile.php?error=Current Password is not the same with the Old Password");

            exit();
        }        
    }
?>