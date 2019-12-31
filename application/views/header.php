<?php $uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<html>
    <head>
        <title>Azam Iqbal Ads Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
        <!--<link rel="stylesheet" href="<?php echo base_url('fonts/icomoon/style.css'); ?>">-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/fonts/flaticon/font/flaticon.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/rangeslider.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/shahbazstyle sheet.css'); ?>">
        <style>
            .custom-pagination a:active, .custom-pagination span:active {
                text-align: center;
                color: green;
            }
            .custom-pagination a:active {
    text-align: center;
    color: green;
}
.site-navbar .site-navigation .site-menu .active > a {
    color: #30e3ca;
    border-radius: 30px;
    display: inline-block;
}
        </style>
    </head>
    <body>
        <header class="site-navbar container py-0 bg-white" role="banner">

            <!-- <div class="container"> -->
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="#" class="text-black mb-0">Azam<span class="text-primary">Ads</span>  </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu">
                            <li class="<?php echo (($uri == "http://localhost/ads/") ? "active" : ""); ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="<?php echo (($uri == "http://localhost/ads/welcome/listings") ? "active" : ""); ?>"><a href="<?php echo base_url('welcome/listings'); ?>">Ads</a></li>
                            <li class="<?php echo (($uri == "http://localhost/ads/welcome/about") ? "active" : ""); ?>"><a href="<?php echo base_url('welcome/about'); ?>">About</a></li>
<!--                            <li class="<?php echo (($uri == "http://localhost/ads/welcome/blog") ? "active" : ""); ?>"><a href="<?php echo base_url('welcome/blog'); ?>">Blog</a></li>-->
                            <li class="<?php echo (($uri == "http://localhost/ads/welcome/contact") ? "active" : ""); ?>"><a href="<?php echo base_url('welcome/contact'); ?>">Contact</a></li>
                            <li class="<?php echo (($uri == "http://localhost/ads/Welcome/login") ? "active" : ""); ?>"><a href="<?php echo base_url('Welcome/login'); ?>"><span class="border-left pl-xl-4"></span>Log In</a></li>
                            <li class="<?php echo (($uri == "http://localhost/ads/Welcome/register") ? "active" : ""); ?>"><a href="<?php echo base_url('Welcome/register'); ?>">Register</a></li>
                            <li><a href="<?php echo base_url('post/add'); ?>" class="cta"><span class="bg-primary text-white rounded">+ Post an Ad</span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                </div>

            </div>
            <!-- </div> -->

        </header>