<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="keywords" content="bootstrap, bootstrap4"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Slabo+27px&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <title>De Cuyper Witter</title>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<style>
    /* Default font size */
    body {
        font-size: 16px;
    }

    /* Responsive font size adjustments */
    @media (max-width: 768px) {
        body {
            font-size: 14px; /* Adjust font size for smaller screens */
        }
    }

    @media (max-width: 576px) {
        body {
            font-size: 12px; /* Further adjust font size for even smaller screens */
        }
    }
</style>

<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="header-top bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-3">
                    <a href="index.html" class="logo">
                        <img src="../images/part1/decuyperwitters.png" width="60" alt="Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex align-items-center">
                        <div class="icon align-self-center mt-1">
                            <span class="icon-room text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h6 d-block" style="width: 280px;">Koningsbaan 40 - 2220 Heist-op-den-Berg</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex align-items-center">
                        <div class="icon align-self-center mt-1">
                            <span class="icon-phone text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h6 d-block"><a href="tel:015233237" target="_blank">015 233 237</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex align-items-center">
                        <div class="icon align-self-center mt-1">
                            <span class="icon-envelope text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h6 d-block" style="width: 280px;"><a href="mailto:decuyper-gilbert@hotmail.com" target="_blank">decuyper-gilbert@hotmail.com</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-block d-lg-none text-right">
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h4"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="mx-auto">

                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">

                        <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                            <a href="index.php" class="nav-link text-left">Home</a>
                        </li>
                        <li class="<?php echo ($current_page == 'about.html') ? 'active' : ''; ?>">
                            <a href="about.html" class="nav-link text-left">Over ons</a>
                        </li>
                        <li class="<?php echo ($current_page == '#diensten') ? 'active' : ''; ?>">
                            <a href="index.php#diensten" class="nav-link text-left">diensten</a>
                        </li>
                        <li class="<?php echo ($current_page == 'blog.html') ? 'active' : ''; ?>">
                            <a href="blog.html" class="nav-link text-left">Blog</a>
                        </li>
                        <li class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                            <a href="contact.php" class="nav-link text-left">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>



