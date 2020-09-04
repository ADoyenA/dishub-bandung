<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $data['judul']; ?></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= BASEURL; ?>/public/img/favicon.png" rel="icon">
    <link href="<?= BASEURL; ?>/public/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= BASEURL; ?>/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/public/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/public/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/public/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/public/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/public/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= BASEURL; ?>/public/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Sailor - v2.1.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo"><a href="<?= BASEURL; ?>/home">Sailor</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">

                <ul>
                    <li class="active"><a href="<?= BASEURL; ?>/home">Home</a></li>

                    <li class="drop-down"><a href="#">About</a>
                        <ul>
                            <li><a href="<?= BASEURL; ?>/about">About Us</a></li>
                            <li><a href="<?= BASEURL; ?>/team">Team</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>

                            <li class="drop-down"><a href="#">Deep Drop Down</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="<?= BASEURL; ?>/services">Services</a></li>
                    <li><a href="<?= BASEURL; ?>/portofolio">Portfolio</a></li>
                    <li><a href="<?= BASEURL; ?>/pricing">Pricing</a></li>
                    <li><a href="<?= BASEURL; ?>/blog">Blog</a></li>
                    <li><a href="<?= BASEURL; ?>/contact">Contact</a></li>

                </ul>

            </nav><!-- .nav-menu -->

            <a href="<?= BASEURL; ?>/home" class="get-started-btn ml-auto">Get Started</a>

        </div>
    </header><!-- End Header -->