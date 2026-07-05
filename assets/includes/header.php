<?php
    $title = "Viaja tus Sueños";
    $email = "correo@correo.com";
    $phone = "+521234567891";
    $logo = "assets/images/logo.png";
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $title; ?> - Agencia de Viajes</title>
  <meta name="author" content="vecuro">
  <meta name="description" content="<?php echo $title; ?> -  Agencia de Viajes">
  <meta name="keywords" content="<?php echo $title; ?> -  Agencia de Viajes">
  <meta name="robots" content="INDEX,FOLLOW">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicons - Place favicon.ico in the root directory -->
  <!-- <link rel="icon" type="image/png" href="assets/img/favicons/favicon.png"> -->
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!--==============================
      Google Fonts
  ============================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!--==============================
        All CSS File
    ============================== -->
  <!-- Bootstrap -->
  <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Fontawesome Icon -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="assets/css/slick.min.css">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<!--********************************
Code Start From Here 
******************************** -->

<!--==============================
    Mobile Menu
============================== -->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.php"><img src="<?php echo $logo; ?>" alt="logo"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="index.php">
                        Inicio
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">
                        Nosotros
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">
                        Destinos
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">
                        Ofertas
                    </a>
                    <ul class="sub-menu">
                        <li><a href="#">Nacional</a></li>
                        <li><a href="#">Internacional</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Popup Search Box
============================== -->
<!-- <div class="popup-search-box d-none d-lg-block  ">
<button class="searchClose"><i class="fal fa-times"></i></button>
<form action="#">
    <input type="text" class="border-theme" placeholder="What are you looking for">
    <button type="submit"><i class="fal fa-search"></i></button>
</form>
</div> -->

<!--==============================
    Header Area
==============================-->
<header class="vs-header header-layout1">
    <div class="container">
        <div class="header-top">
            <div class="row justify-content-between align-items-center">
                <div class="col d-none d-lg-block">
                    <ul class="header-contact">
                        <li><i class="fas fa-envelope"></i> 
                            <a href="mailto:<?php echo $email; ?>">
                                <?php echo $email; ?>
                            </a>
                        </li>
                        <li><i class="fas fa-phone-alt"></i> 
                            <a href="tel:<?php echo $phone; ?>">
                                <?php echo $phone; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <div class="header-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="container position-relative z-index-common">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="vs-logo">
                            <a href="index.html">
                                <img src="<?php echo $logo; ?>" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col text-end text-xl-center">
                        <nav class="main-menu  menu-style1 d-none d-lg-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="index.php">
                                        Inicio
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        Nosotros
                                    </a>
                                </li>
                                <li class="menu-item-has-children mega-menu-wrap">
                                    <a href="#">
                                        Destinos
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        Ofertas
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Nacional</a></li>
                                        <li><a href="#">Internacional</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Contacto</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>