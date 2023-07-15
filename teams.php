<?php
$title = "Pokemon Webstore";

session_start();
require_once("..\\include\\header.php");
?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
    body {
        margin-top: 20px;
        background: radial-gradient(circle at 0.3% 1.3%, rgb(235, 217, 221) 0%, rgb(216, 174, 211) 45.1%, rgb(145, 130, 196) 100.2%);
    }

    .our-team {
        overflow: hidden;
        border-radius: 50%;
        position: relative;
        box-shadow: 0 10px 40px -10px rgba(0, 64, 128, .2);
    }

    .our-team img {
        width: 100%;
        height: auto;
        position: relative;
        right: 0;
        -webkit-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
    }

    .our-team:hover img {
        right: 60%;
    }

    .our-team .team-content {
        width: 80%;
        height: 100%;
        background: #fcfcfc;
        padding: 20% 30px 0;
        position: absolute;
        top: 0;
        right: -80%;
        -webkit-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
    }

    .our-team:hover .team-content {
        right: 0;
    }

    .our-team .title {
        font-size: 22px;
        color: #554c86;
        margin: 0 0 5px 0;
        font-weight: 500;
    }

    .our-team .post {
        display: block;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .our-team .description {
        font-size: 14px;
        color: #191b26;
    }

    .our-team .social {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .our-team .social li {
        display: inline-block;
        margin-right: 10px;
    }

    .our-team .social li:last-child {
        margin-right: 0;
    }

    .our-team .social li a {
        display: block;
        width: 36px;
        height: 36px;
        line-height: 36px;
        font-size: 14px;
        color: #fff;
        border-radius: 4px;
        text-align: center;
        -webkit-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
        border: 1px solid #eee;
    }

    .our-team .social li a:hover {
        color: #fff;
    }

    .our-team .social li a.fa-facebook {
        background: #3b5a9b;
        border: 1px solid #3b5a9b;
    }

    .our-team .social li a.fa-twitter {
        background: #2baae1;
        border: 1px solid #2baae1;
    }

    .our-team .social li a.fa-youtube {
        background: #c3181e;
        border: 1px solid #c3181e;
    }

    @media only screen and (max-width: 990px) {
        .our-team {
            margin-bottom: 50px;
        }
    }

    @media only screen and (max-width: 360px) {
        .team-content {
            padding: 15% 15px 0;
        }

        .our-team .social li {
            margin-right: 0;
        }
    }

    a {
        text-decoration: none;
    }

    .section-title {
        margin-bottom: 60px;
    }

    .text-center {
        text-align: center !important;
    }

    .section-title h2 {
        font-size: 45px;
        font-weight: 600;
        margin-top: 0;
        position: relative;
        text-transform: capitalize;
    }
</style>
<section id="team" class="team-area section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>Creative team</h2>
            <p>TX21 AGD Students</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="our-team">
                    <img src="..\images\team\marielle.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Marielle Odette Chua</h3>
                        <span class="post">Developer</span>
                        <ul class="social">
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-youtube" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div><!--- END COL -->
            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="our-team">
                    <img src="..\images\team\gwen.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Gwyneth Adrienne Esteban</h3>
                        <span class="post">Developer</span>
                        <ul class="social">
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-youtube" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div><!--- END COL -->
            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="our-team">
                    <img src="..\images\team\ron.png" alt="">
                    <div class="team-content">
                        <h3 class="title"> Ron Daniel Magday</h3>
                        <span class="post">Developer</span>
                        <ul class="social">
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-youtube" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div><!--- END COL -->
            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="our-team">
                    <img src="..\images\team\francis.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Francis Nicolo Medina</h3>
                        <span class="post">Developer</span>
                        <ul class="social">
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-youtube" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>