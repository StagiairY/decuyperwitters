<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>De Cuyper Witter</title>
    <link rel="shortcut icon" href="favicon.png">

    <!-- Meta Tags -->
    <meta name="keywords" content="bootstrap, bootstrap4"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Slabo+27px&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- If you need a specific version, uncomment the line below -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-jJ3DJk7fZgIbdzT/baVTIu7ZfSxFKTRSDzLfeF+3fJkuE03qQq3w+nlM1z/wYfTtMa8ezPe1zG4D+YeKdAM+rw==" crossorigin="anonymous" />

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>


<style>
    @media (max-width: 991px) {
        .hideNow {
            display: none;
            height: 0px;
        }


</style>


<body >

<div class="custom-header hideNow">
    <div class="custom-header-top bg-white text-dark py-2 py-md-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="custom-quick-contact-icons d-flex align-items-center">
                        <div class="custom-icon align-self-center">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="custom-text">
                            <span class="h6 d-block"
                                  style="font-size: 12px;">Koningsbaan 40 - 2220 Heist-op-den-Berg</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-md-0">
                    <div class="custom-quick-contact-icons d-flex align-items-center">
                        <div class="custom-icon align-self-center">
                            <i class="fas fa-phone text-primary"></i>
                        </div>
                        <div class="custom-text">
                            <span class="h6 d-block" style="font-size: 12px;"><a href="tel:015233237" target="_blank"
                                                                                 class="text-dark">015 233 237</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mt-3 mt-lg-0">
                    <div class="custom-quick-contact-icons d-flex align-items-center">
                        <div class="custom-icon align-self-center">
                            <i class="fas fa-envelope text-primary"></i>
                        </div>
                        <div class="custom-text">
                            <span class="h6 d-block" style="font-size: 12px;"><a
                                        href="mailto:decuyper-gilbert@hotmail.com" target="_blank" class="text-dark">decuyper-gilbert@hotmail.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="custom-header">
    <div class="col-6 d-block d-lg-none text-left"> <!-- Added float-left class -->
        <a href="#" class="custom-site-menu-toggle d-inline-block d-lg-none js-menu-toggle text-dark">
            <i class="fas fa-bars fa-2x"></i>
        </a>
    </div>
</div>


<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3 text-right">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
</div>

<!-- Add Bootstrap JS and Popper.js scripts here -->


<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
    <div class="container">
        <div class="d-flex align-items-center">

            <div class="site-logo">
                <a href="index.php" class="logo">
                    <img src="../images/part1/decuyperwitters.png" width="60" alt="Logo" class="img-fluid">
                </a>
            </div>

            <div class="mx-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                        <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                            <a href="index.php" class="nav-link text-left">Home</a>
                        </li>
                        <li class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                            <a href="about.php" class="nav-link text-left">Over ons</a>
                        </li>
                        <li class="<?php echo ($current_page == 'index.php#diensten') ? 'active' : ''; ?>">
                            <a href="index.php#diensten" class="nav-link text-left">diensten</a>
                        </li>
                        <!--                        <li class="-->
                        <?php //echo ($current_page == 'blog.html') ? 'active' : ''; ?><!--">-->
                        <!--                            <a href="blog.html" class="nav-link text-left">Blog</a>-->
                        <!--                        </li>-->
                        <li class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                            <a href="contact.php" class="nav-link text-left">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


