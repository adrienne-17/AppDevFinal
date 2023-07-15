<!DOCTYPE html>
<html lang="en">

<?php
require_once("..\store\connect.php");
$sql = "SELECT * FROM tbl_cart";

if ($result = mysqli_query($conn, $sql)) {
    $rowcount = mysqli_num_rows($result);
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="This website is a complete redesign of the webstore Pokemon Go. This website is for edicational purposes only.">
    <link rel="stylesheet" href="assets/style-homepage.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .bag img {
            width: 22%;
            float: right;
            margin-right: -228px;
            z-index: -1;
        }

        .circle {
            border-radius: 50%;
            width: 34px;
            height: 34px;
            padding: 3px;
            background: black;
            border: 3px solid #000;
            text-align: center;
            font: 20px Arial, sans-serif;
            color: white;
            display: block;
            margin-left: auto;
            margin-top: -40px;
            margin-right: 180px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light transparent-navbar">
                <a class="navbar-brand" href="../index.php">
                    <img src="https://store.pokemongolive.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpgo-logo.ee62bad9.png&w=1080&q=75" alt="POKEMON GO WEBSTORE" width="160px" class="d-inline-block align-top">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <h5>
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="store.php">Shop</a>
                            </li>
                            <?php
                            if (empty($_SESSION['email'])) :
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="registration.php">Register</a>
                                </li>
                            <?php
                            endif;
                            if (!empty($_SESSION['email'])) :
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.php">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="transactionHistory.php">Transactions</a>
                                </li>
                            <?php
                            endif;
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="teams.php">Team</a>
                            </li>
                            <?php
                            if (!empty($_SESSION['email'])) :
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>
                            <?php
                            endif;
                            ?>
                        </ul>
                    </h5>
                    <?php
                    if (!empty($_SESSION['email'])) :
                    ?>
                        <a href="cart.php" class="bag"><img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_Shopping_Bag-512.png"></a>
                        <div class="circle">
                            <?= $rowcount ?>
                        </div>
                    <?php
                    endif;
                    ?>
                </div>

            </nav>
        </div>