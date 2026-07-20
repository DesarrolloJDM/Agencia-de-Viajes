<?php
    $title = "Viaja tus Sueños";
    $email = "correo@correo.com";
    $phone = "(449) 142-9172";
    $phone_link = "+524491429172";
    $logo = "assets/images/logo.png";
    $facebook = "https://www.facebook.com/profile.php?id=100063464355506";
    $instagram = "https://www.instagram.com/viaja_tus_suenos/";
    $whatsapp = "";
    $tiktok = "https://www.tiktok.com/tag/viajatussue%C3%B1os";
?>

<!DOCTYPE html>
<html class="no-js" lang="es-MX">

<head>
    <!-- Meta Básico -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Título principal -->
    <title><?php echo $title; ?> - Agencia de Viajes</title>

    <!-- SEO Básico -->
    <meta 
        name="description" 
        content="Agencia de viajes especializada en paquetes nacionales e internacionales. En Viaja Tus Sueños te ayudamos a planear vacaciones, escapadas y experiencias inolvidables."
    >
    <meta 
        name="keywords" 
        content="agencia de viajes, paquetes de viaje, viajes nacionales, viajes internacionales, vacaciones familiares, viajes a la playa, viajes a Canadá, viajes a Europa, destinos turísticos, paquetes vacacionales, viajes personalizados, asesoría de viajes, Viaja Tus Sueños, reservar viajes, viajes para parejas, viajes todo incluido"
    >      
    <meta name="author" content="Viaja tus Suenos">
    <meta name="robots" content="index, follow">

    <!-- URL principal de la página -->
    <link rel="canonical" href="https://viajatussuenos.com/">

    <!-- Open Graph: WhatsApp, Facebook, LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Viaja Tus Sueños | Agencia de viajes">
    <meta 
        property="og:description" 
        content="Planea tus próximas vacaciones con Viaja Tus Sueños. Encuentra paquetes nacionales e internacionales, asesoría personalizada y destinos inolvidables."
    >
    <meta property="og:url" content="https://viajatussuenos.com/">
    <meta property="og:site_name" content="Viaja tus Suenos">
    <!-- <meta property="og:image" content="https://viajatussuenos.com/assets/img/og-image.png"> -->
    <meta property="og:image:alt" content="Viaja Tus Sueños - Agencia de viajes y paquetes vacacionales">
	
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png">  

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
                        <li><a href="promos.php">Super Promos! 🔥🔥</a></li>
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
                            <a href="tel:<?php echo $phone_link; ?>">
                                <?php echo $phone; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <div class="header-social">
                        <a href="<?php echo $facebook; ?>" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo $instagram; ?>" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="<?php echo $tiktok; ?>" target="_blank">
                            <img width="50" height="50" src="https://img.icons8.com/ios/50/tiktok--v1.png" alt="tiktok--v1"/>
                        </a>
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
                            <a href="index.php">
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
                                        <li><a href="promos.php">Super Promos! 🔥🔥</a></li>
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