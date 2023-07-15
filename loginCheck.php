<?php 
    session_start(); 
    require_once("connect.php");

    if (isset($_POST['email']) && isset($_POST['password'])) {
        function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);

           return $data;
        }

        $email = validate($_POST['email']);
        $password = validate($_POST['password']);

        $sql = "SELECT * FROM tbl_pokemon WHERE email_address='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['email_address'] === $email && $row['password'] === $password) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email_address'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['player_id'] = $row['player_id'];

                header("Location: ..\\index.php");

                exit();
            }
            else{
                header("Location: login.php?error=Incorrect Username or Password");

                exit();
            }
        }
        else{
            header("Location: login.php?error=Incorrect Username or Password");

            exit();
        }
    }
    else{
        header("Location: login.php");

        exit();
    }
?>