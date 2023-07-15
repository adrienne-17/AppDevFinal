<!DOCTYPE html>
<html lang="en">

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
</head>
<style>
    .navbar {
        background-color: rgba(255, 255, 255, 0.2);
    }
</style>
<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="https://store.pokemongolive.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpgo-logo.ee62bad9.png&w=1080&q=75" alt="POKEMON GO WEBSTORE" width="160px" class="d-inline-block align-top">

                    </a>
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <h5>
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="store\store.php">Shop</a>
                            </li>
                            <?php
                            if (empty($_SESSION['email'])) :
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="store\login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="store\registration.php">Register</a>
                                </li>
                            <?php
                            endif;
                            if (!empty($_SESSION['email'])) :
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="store\profile.php">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="store\transactionHistory.php">Transactions</a>
                                </li>
                            <?php
                            endif;
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="store\teams.php">Team</a>
                            </li>
                            <?php
                            if (!empty($_SESSION['email'])) :
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="store\cart.php">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="store\logout.php">Logout</a>
                                </li>
                            <?php
                            endif;
                            ?>
                        </ul>
                        </h5>
                    </div>
                </div>
            </nav>
        </div>