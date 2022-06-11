<?php
session_start();
include("prosesregistrasi.php");
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Anime Template" />
    <meta name="keywords" content="Anime, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Streaming Film SMA Negeri 7 Medan</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/plyr.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <style>
        ::selection {
            color: #fff;
            background-color: #f0542c;
        }

        .md-section {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        @media (min-width: 320px) {
            .md-section {
                padding-top: calc(6.81818vw + 18.18182px);
                padding-bottom: calc(6.81818vw + 18.18182px);
            }
        }

        @media (min-width: 1200px) {
            .md-section {
                padding-top: 100px;
                padding-bottom: 100px;
            }
        }

        .md-overlay {
            background-color: rgba(0, 0, 0, .7) !important;
        }

        .md-skin-dark hr {
            border-top-color: #555;
        }





        /* 15. socialicon
--------------------------------------------------------------------------------*/

        .social-icon {
            display: inline-block;
            margin: 5px;
            transition: all .3s ease;
        }

        .social-icon.si-facebook {
            color: #3b5998;
        }

        .social-icon.si-facebook-bg .social-icon__icon {
            color: #fff;
            background-color: #3b5998;
        }

        .social-icon.si-facebook-bg .social-icon__icon:hover {
            background-color: #2d4373;
        }

        .social-icon.si-twitter {
            color: #00acee;
        }

        .social-icon.si-twitter-bg .social-icon__icon {
            color: #fff;
            background-color: #00acee;
        }

        .social-icon.si-twitter-bg .social-icon__icon:hover {
            background-color: #0087bb;
        }

        .social-icon.si-google-plus {
            color: #dd4b39;
        }

        .social-icon.si-google-plus-bg .social-icon__icon {
            color: #fff;
            background-color: #dd4b39;
        }

        .social-icon.si-google-plus-bg .social-icon__icon:hover {
            background-color: #c23321;
        }

        .social-icon.si-pinterest {
            color: #c8232c;
        }

        .social-icon.si-pinterest-bg .social-icon__icon {
            color: #fff;
            background-color: #c8232c;
        }

        .social-icon.si-pinterest-bg .social-icon__icon:hover {
            background-color: #9d1b22;
        }

        .social-icon.si-vimeo {
            color: #86c9ef;
        }

        .social-icon.si-vimeo-bg .social-icon__icon {
            color: #fff;
            background-color: #86c9ef;
        }

        .social-icon.si-vimeo-bg .social-icon__icon:hover {
            background-color: #59b5e9;
        }

        .social-icon.si-youtube {
            color: #c4302b;
        }

        .social-icon.si-youtube-bg .social-icon__icon {
            color: #fff;
            background-color: #c4302b;
        }

        .social-icon.si-youtube-bg .social-icon__icon:hover {
            background-color: #9a2622;
        }

        .social-icon.si-yahoo {
            color: #720e9e;
        }

        .social-icon.si-yahoo-bg .social-icon__icon {
            color: #fff;
            background-color: #720e9e;
        }

        .social-icon.si-yahoo-bg .social-icon__icon:hover {
            background-color: #500a6f;
        }

        .social-icon.si-google {
            color: #dd4b39;
        }

        .social-icon.si-google-bg .social-icon__icon {
            color: #fff;
            background-color: #dd4b39;
        }

        .social-icon.si-google-bg .social-icon__icon:hover {
            background-color: #c23321;
        }

        .social-icon.si-linkedin {
            color: #0e76a8;
        }

        .social-icon.si-linkedin-bg .social-icon__icon {
            color: #fff;
            background-color: #0e76a8;
        }

        .social-icon.si-linkedin-bg .social-icon__icon:hover {
            background-color: #0a5579;
        }

        .social-icon.si-dribbble {
            color: #ea4c89;
        }

        .social-icon.si-dribbble-bg .social-icon__icon {
            color: #fff;
            background-color: #ea4c89;
        }

        .social-icon.si-dribbble-bg .social-icon__icon:hover {
            background-color: #e51e6b;
        }

        .social-icon.si-delicious {
            color: #205cc0;
        }

        .social-icon.si-delicious-bg .social-icon__icon {
            color: #fff;
            background-color: #205cc0;
        }

        .social-icon.si-delicious-bg .social-icon__icon:hover {
            background-color: #194794;
        }

        .social-icon.si-paypal {
            color: #00588b;
        }

        .social-icon.si-paypal-bg .social-icon__icon {
            color: #fff;
            background-color: #00588b;
        }

        .social-icon.si-paypal-bg .social-icon__icon:hover {
            background-color: #003858;
        }

        .social-icon.si-android {
            color: #a4c639;
        }

        .social-icon.si-android-bg .social-icon__icon {
            color: #fff;
            background-color: #a4c639;
        }

        .social-icon.si-android-bg .social-icon__icon:hover {
            background-color: #839e2e;
        }

        .social-icon.si-foursquare {
            color: #25a0ca;
        }

        .social-icon.si-foursquare-bg .social-icon__icon {
            color: #fff;
            background-color: #25a0ca;
        }

        .social-icon.si-foursquare-bg .social-icon__icon:hover {
            background-color: #1d7e9f;
        }

        .social-icon.si-stumbleupon {
            color: #f74425;
        }

        .social-icon.si-stumbleupon-bg .social-icon__icon {
            color: #fff;
            background-color: #f74425;
        }

        .social-icon.si-stumbleupon-bg .social-icon__icon:hover {
            background-color: #e12808;
        }

        .social-icon.si-digg {
            color: #191919;
        }

        .social-icon.si-digg-bg .social-icon__icon {
            color: #fff;
            background-color: #191919;
        }

        .social-icon.si-digg-bg .social-icon__icon:hover {
            background-color: black;
        }

        .social-icon.si-reddit {
            color: #c6c6c6;
        }

        .social-icon.si-reddit-bg .social-icon__icon {
            color: #fff;
            background-color: #c6c6c6;
        }

        .social-icon.si-reddit-bg .social-icon__icon:hover {
            background-color: #adadad;
        }

        .social-icon.si-spotify {
            color: #81b71a;
        }

        .social-icon.si-spotify-bg .social-icon__icon {
            color: #fff;
            background-color: #81b71a;
        }

        .social-icon.si-spotify-bg .social-icon__icon:hover {
            background-color: #628a14;
        }

        .social-icon.si-blogger {
            color: #fc4f08;
        }

        .social-icon.si-blogger-bg .social-icon__icon {
            color: #fff;
            background-color: #fc4f08;
        }

        .social-icon.si-blogger-bg .social-icon__icon:hover {
            background-color: #ce3e03;
        }

        .social-icon.si-cc {
            color: #688527;
        }

        .social-icon.si-cc-bg .social-icon__icon {
            color: #fff;
            background-color: #688527;
        }

        .social-icon.si-cc-bg .social-icon__icon:hover {
            background-color: #495e1b;
        }

        .social-icon.si-evernote {
            color: #5ba525;
        }

        .social-icon.si-evernote-bg .social-icon__icon {
            color: #fff;
            background-color: #5ba525;
        }

        .social-icon.si-evernote-bg .social-icon__icon:hover {
            background-color: #447b1c;
        }

        .social-icon.si-flickr {
            color: #ff0084;
        }

        .social-icon.si-flickr-bg .social-icon__icon {
            color: #fff;
            background-color: #ff0084;
        }

        .social-icon.si-flickr-bg .social-icon__icon:hover {
            background-color: #cc006a;
        }

        .social-icon.si-vk {
            color: #2b587a;
        }

        .social-icon.si-vk-bg .social-icon__icon {
            color: #fff;
            background-color: #2b587a;
        }

        .social-icon.si-vk-bg .social-icon__icon:hover {
            background-color: #1e3d54;
        }

        .social-icon.si-skype {
            color: #00aff0;
        }

        .social-icon.si-skype-bg .social-icon__icon {
            color: #fff;
            background-color: #00aff0;
        }

        .social-icon.si-skype-bg .social-icon__icon:hover {
            background-color: #008abd;
        }

        .social-icon.si-podcast {
            color: #e4b21b;
        }

        .social-icon.si-podcast-bg .social-icon__icon {
            color: #fff;
            background-color: #e4b21b;
        }

        .social-icon.si-podcast-bg .social-icon__icon:hover {
            background-color: #b68e16;
        }

        .social-icon.si-dropbox {
            color: #3d9ae8;
        }

        .social-icon.si-dropbox-bg .social-icon__icon {
            color: #fff;
            background-color: #3d9ae8;
        }

        .social-icon.si-dropbox-bg .social-icon__icon:hover {
            background-color: #1a81d8;
        }

        .social-icon.si-github {
            color: #171515;
        }

        .social-icon.si-github-bg .social-icon__icon {
            color: #fff;
            background-color: #171515;
        }

        .social-icon.si-github-bg .social-icon__icon:hover {
            background-color: black;
        }

        .social-icon.si-bitbucket {
            color: #0e4984;
        }

        .social-icon.si-bitbucket-bg .social-icon__icon {
            color: #fff;
            background-color: #0e4984;
        }

        .social-icon.si-bitbucket-bg .social-icon__icon:hover {
            background-color: #093056;
        }

        .social-icon.si-soundcloud {
            color: #f70;
        }

        .social-icon.si-soundcloud-bg .social-icon__icon {
            color: #fff;
            background-color: #f70;
        }

        .social-icon.si-soundcloud-bg .social-icon__icon:hover {
            background-color: #cc5f00;
        }

        .social-icon.si-tumblr {
            color: #34526f;
        }

        .social-icon.si-tumblr-bg .social-icon__icon {
            color: #fff;
            background-color: #34526f;
        }

        .social-icon.si-tumblr-bg .social-icon__icon:hover {
            background-color: #24384c;
        }

        .social-icon.si-wordpress {
            color: #1e8cbe;
        }

        .social-icon.si-wordpress-bg .social-icon__icon {
            color: #fff;
            background-color: #1e8cbe;
        }

        .social-icon.si-wordpress-bg .social-icon__icon:hover {
            background-color: #176c92;
        }

        .social-icon.si-drupal {
            color: #27537a;
        }

        .social-icon.si-drupal-bg .social-icon__icon {
            color: #fff;
            background-color: #27537a;
        }

        .social-icon.si-drupal-bg .social-icon__icon:hover {
            background-color: #1b3953;
        }

        .social-icon.si-yelp {
            color: #c41200;
        }

        .social-icon.si-yelp-bg .social-icon__icon {
            color: #fff;
            background-color: #c41200;
        }

        .social-icon.si-yelp-bg .social-icon__icon:hover {
            background-color: #910d00;
        }

        .social-icon.si-scribd {
            color: #666;
        }

        .social-icon.si-scribd-bg .social-icon__icon {
            color: #fff;
            background-color: #666;
        }

        .social-icon.si-scribd-bg .social-icon__icon:hover {
            background-color: #4d4d4d;
        }

        .social-icon.si-stripe {
            color: #008cdd;
        }

        .social-icon.si-stripe-bg .social-icon__icon {
            color: #fff;
            background-color: #008cdd;
        }

        .social-icon.si-stripe-bg .social-icon__icon:hover {
            background-color: #006caa;
        }

        .social-icon.si-print {
            color: #111;
        }

        .social-icon.si-print-bg .social-icon__icon {
            color: #fff;
            background-color: #111;
        }

        .social-icon.si-print-bg .social-icon__icon:hover {
            background-color: black;
        }

        .social-icon.si-acrobat {
            color: #d3222a;
        }

        .social-icon.si-acrobat-bg .social-icon__icon {
            color: #fff;
            background-color: #d3222a;
        }

        .social-icon.si-acrobat-bg .social-icon__icon:hover {
            background-color: #a71b21;
        }

        .social-icon.si-stackoverflow {
            color: #ef8236;
        }

        .social-icon.si-stackoverflow-bg .social-icon__icon {
            color: #fff;
            background-color: #ef8236;
        }

        .social-icon.si-stackoverflow-bg .social-icon__icon:hover {
            background-color: #e06712;
        }

        .social-icon.si-instagram {
            color: #3f729b;
        }

        .social-icon.si-instagram-bg .social-icon__icon {
            color: #fff;
            background-color: #3f729b;
        }

        .social-icon.si-instagram-bg .social-icon__icon:hover {
            background-color: #305777;
        }

        .social-icon.si-quora {
            color: #a82400;
        }

        .social-icon.si-quora-bg .social-icon__icon {
            color: #fff;
            background-color: #a82400;
        }

        .social-icon.si-quora-bg .social-icon__icon:hover {
            background-color: #751900;
        }

        .social-icon.si-openid {
            color: #e16309;
        }

        .social-icon.si-openid-bg .social-icon__icon {
            color: #fff;
            background-color: #e16309;
        }

        .social-icon.si-openid-bg .social-icon__icon:hover {
            background-color: #b04d07;
        }

        .social-icon.si-amazon {
            color: #e47911;
        }

        .social-icon.si-amazon-bg .social-icon__icon {
            color: #fff;
            background-color: #e47911;
        }

        .social-icon.si-amazon-bg .social-icon__icon:hover {
            background-color: #b5600d;
        }

        .social-icon.si-steam {
            color: #111;
        }

        .social-icon.si-steam-bg .social-icon__icon {
            color: #fff;
            background-color: #111;
        }

        .social-icon.si-steam-bg .social-icon__icon:hover {
            background-color: black;
        }

        .social-icon.si-rss {
            color: #ee802f;
        }

        .social-icon.si-rss-bg .social-icon__icon {
            color: #fff;
            background-color: #ee802f;
        }

        .social-icon.si-rss-bg .social-icon__icon:hover {
            background-color: #d86612;
        }

        .social-icon__text {
            margin-left: 6px;
        }

        .social-icon__style-02,
        .social-icon__style-03,
        .social-icon__style-04 {
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            color: #fff;
            border-radius: 50%;
            background-color: #222;
            margin: 5px;
            background-color: #f0542c;
            color: #fff;
        }

        .social-icon__style-02:hover,
        .social-icon__style-03:hover,
        .social-icon__style-04:hover {
            background-color: #444;
            color: #fff;
        }

        .social-icon__style-03 {
            background-color: #444;
            color: #fff;
        }

        .social-icon__style-03:hover {
            color: #444;
            background-color: #fff;
        }

        .social-icon__style-04 {
            width: 30px;
            height: 30px;
            line-height: 30px;
            margin: 0;
        }


        /* 16. swiper
--------------------------------------------------------------------------------*/


        /* 17. team 
--------------------------------------------------------------------------------*/

        .team {
            margin-bottom: 30px;
            overflow: hidden;
        }

        .team .social-icon {
            visibility: hidden;
            opacity: 0;
        }

        .team .social-icon:nth-child(2) {
            transition: all .5s ease .1s;
        }

        .team .social-icon:nth-child(3) {
            transition: all .5s ease .2s;
        }

        .team:hover .team__img img {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .team:hover .team__overlay {
            visibility: visible;
            opacity: 1;
        }

        .team:hover .social-icon {
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 767px) {
            .team {
                text-align: center;
            }
        }

        .team__img {
            overflow: hidden;
            display: inline-block;
            position: relative;
            margin-bottom: 30px;
        }

        .team__img img {
            -webkit-transform: scale(1) translateZ(0);
            transform: scale(1) translateZ(0);
            transition: all .3s ease;
        }

        .team__overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(240, 84, 44, .9);
            visibility: hidden;
            opacity: 0;
            transition: all .3s ease;
        }

        .team__name {
            font-size: 14px;
            text-transform: uppercase;
        }

        .team__work {
            display: inline-block;
            font-family: "Playfair Display", serif;
            font-style: italic;
            letter-spacing: 1px;
            color: #444;
            margin-bottom: 10px;
        }

        .team__text {
            margin-bottom: 20px;
        }

        .md-skin-dark .team__work {
            color: #ccc;
        }

        h4 {
            color: white;
        }

        p {
            color: white;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.html">Homepage</a></li>
                                <li>
                                    <a href="#categories" id="categories">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Action</a></li>
                                        <li><a href="./Pendidikan.html">Pendidikan</a></li>
                                        <li><a href="./Biography.html">Biography</a></li>
                                </li>
                                <li class="active"><a href="./blog-details.html"></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <section class="awal text-center" style="padding-top: 2rem;">
        <img src="logo/logo.jpg" alt="Logo Kelompok 2" width="200" class="rounded-circle" />
        <h1 style="color: white;">Group 2</h1>
        <h5 style="color: white;">Proyek Akhir | PSW</h5>
    </section>

    <!-- Blog Details Section Begin -->
    <section id="About" style="padding-top: 2rem;">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 style="color: white;">About This Website</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center" style="padding-top: 1rem">
                <div class="col-4">
                    <p style="color: white;">Streaming adalah cara untuk menikmati suara atau video yang diunggah di internet. Suara atau video yang bisa diputar dan dinikmati terus menerus, tanpa harus mengunduh video atau suaranya terlebih dahulu. Beberapa film mampu menarik minat masyarakat dunia seperti dapat menikmati hiburan, menyentuh emosional dan dapat menambah pengetahuan..</p>
                </div>
                <div class="col-4">
                    <p style="color: white;">Dengan adanya fitur-fitur teknologi yang semakin canggih, streaming bisa dilakukan dengan menggunakan smartphone, laptop, atau komputer yang terhubung ke internet. Untuk itu dalam website berikut dapat memberikan fitur untuk digunakan dan dinikmati oleh pengguna.</p>
                </div>
                <div class="col-4">
                    <p style="color: white;">Website Streaming Film ini merupakan website yang akan digunakan di SMAN 7 Medan dengan menggunakan browser dan dalam mengaksesnya harus memiliki koneksi internet. Website ini dibangun untuk mempermudah pengguna mencari informasi terkait film film yang disediakan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Anggota -->

    <section class="md-section md-skin-dark" id="id6" style="background-image: url('assets/img/bg/demo.jpg'); padding-bottom: 50px">
        <div class="md-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2">
                    <!-- sec-title -->
                    <div class="sec-title sec-title__lg-title ">
                        <span class="sec-title__divider"></span>
                    </div>
                    <!-- End / sec-title -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- team -->
                    <div class="team">
                        <div class="team__img">
                            <img src="anggota/Joe.jpg" alt="Joe Abraham Wahid Manurung" />
                            <div class="team__overlay">
                                <div class="md-tb">
                                    <div class="md-tb__cell md-text-center">
                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="https://web.facebook.com/joe.wahid.77"><i class="social-icon__icon fa fa-facebook"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-twitter"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="https://www.instagram.com/joewahid006/"><i class="social-icon__icon fa fa-instagram"></i> </a><!-- End / social-icon -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team__body">
                            <div class="team__user">
                                <h4 class="team__name">Joe Arbaham Wahid Manurung</h4>
                                <span class="team__work">Programmer</span>
                            </div>
                            <p class="team__text">Contact : 082172825899 <br>
                                Gmail : joewahid006@gmail.com</p>
                        </div>
                    </div>
                    <!-- End / team -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- team -->
                    <div class="team">
                        <div class="team__img">
                            <img src="Anggota/Merry.jpg" alt="Merry Margaretha Wijaya Tamba" />
                            <div class="team__overlay">
                                <div class="md-tb">
                                    <div class="md-tb__cell md-text-center">
                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="https://m.facebook.com/merrymargarethayuin.margarethayuin.3?tsid=0.4044410951784845&source=result"><i class="social-icon__icon fa fa-facebook"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="https://mobile.twitter.com/Merrymargaret15"><i class="social-icon__icon fa fa-twitter"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="https://instagram.com/merryywijaya?utm_medium=copy_link"><i class="social-icon__icon fa fa-instagram"></i> </a><!-- End / social-icon -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team__body">
                            <div class="team__user">
                                <h4 class="team__name">Merry Margaretha Wijaya Tamba</h4>
                                <span class="team__work">CEO & Founder</span>
                            </div>
                            <p class="team__text">Contact : 082112141734 <br>
                                Gmail : merrytamba50@gmail.com</p>
                        </div>
                    </div>
                    <!-- End / team -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- team -->
                    <div class="team">
                        <div class="team__img">
                            <img src="Anggota/Louis.jpeg" alt="Louis Cristiano Ronaldo Panggabean" />
                            <div class="team__overlay">
                                <div class="md-tb">
                                    <div class="md-tb__cell md-text-center">
                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="https://www.facebook.com/louis.panggabean"><i class="social-icon__icon fa fa-facebook"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="#"><i class="fa fa-youtube-play"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href=" https://www.instagram.com/louis_gabe17/"><i class="social-icon__icon fa fa-instagram"></i> </a><!-- End / social-icon -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team__body">
                            <div class="team__user">
                                <h4 class="team__name">Louis Cristiano Ronaldo Panggabean</h4>
                                <span class="team__work">Programmer</span>
                            </div>
                            <p class="team__text">Contact : 082363217710 <br>
                                Gmail : panggabeanlouis17@gmail.com</p>
                        </div>
                    </div>
                    <!-- End / team -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4" style="justify-content: center;">
                    <!-- team -->
                    <div class="team">
                        <div class="team__img">
                            <img src="Anggota/Tasya.jpg" alt="Tasya" />
                            <div class="team__overlay">
                                <div class="md-tb">
                                    <div class="md-tb__cell md-text-center">
                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href=""><i class="social-icon__icon fa fa-facebook"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-twitter"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="https://www.instagram.com/invites/contact/?i=1gvt4ksabg815&utm_content=21vspx0"><i class="social-icon__icon fa fa-instagram"></i> </a><!-- End / social-icon -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team__body">
                            <div class="team__user">
                                <h4 class="team__name">Tasya Diva Aulia Simanjuntak</h4>
                                <span class="team__work">Designer</span>
                            </div>
                            <p class="team__text">Contact : 083181339359<br>
                                Gmail : tasyaaulia473@gmail.com </p>
                        </div>
                    </div>
                    <!-- End / team -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4" style="justify-content: center;">
                    <!-- team -->
                    <div class="team">
                        <div class="team__img">
                            <img src="Anggota/Eirene.jpg" alt="Eiren Lasmariani Sipayung" />
                            <div class="team__overlay">
                                <div class="md-tb">
                                    <div class="md-tb__cell md-text-center">
                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-facebook"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-twitter"></i> </a><!-- End / social-icon -->

                                        <!-- social-icon -->
                                        <a class="social-icon social-icon__style-03" href=""><i class="social-icon__icon fa fa-instagram"></i> </a><!-- End / social-icon -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team__body">
                            <div class="team__user">
                                <h4 class="team__name">Eirene Lasmariani Sipayung</h4>
                                <span class="team__work">Designer</span>
                            </div>
                            <p class="team__text">Contact : 085361137039 <br>
                                Gmail : irenesipayo@gmail.com
                            </p>
                        </div>
                    </div>
                    <!-- End / team -->
                </div>
            </div>
        </div>
    </section>

    <!-- Akhir Anggota -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="#categories">Categories</a></li>
                            <li><a href="./blog-details.html">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here....." />
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>