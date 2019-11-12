<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Azam Post</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/fonts/icomoon/style.css'); ?>">
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

        <style>

            /* The containernow */
            .containernow {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            /* Hide the browser's default radio button */
            .containernow input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
            }

            /* Create a custom radio button */
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
                border-radius: 50%;
            }

            /* On mouse-over, add a grey background color */
            .containernow:hover input ~ .checkmark {
                background-color: #ccc;
            }

            /* When the radio button is checked, add a blue background */
            .containernow input:checked ~ .checkmark {
                background-color: #2196F3;
            }

            /* Create the indicator (the dot/circle - hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the indicator (dot/circle) when checked */
            .containernow input:checked ~ .checkmark:after {
                display: block;
            }

            /* Style the indicator (dot/circle) */
            .containernow .checkmark:after {
                top: 9px;
                left: 9px;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: white;
            }
            /* End Check box */
            .form-box {
                padding-top: 40px;
                padding-bottom: 40px;

                background: rgb(234,88,4); /* Old browsers */
                background: -moz-linear-gradient(top,  rgba(234,88,4,1) 0%, rgba(234,40,3,1) 51%, rgba(234,88,4,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top,  rgba(234,88,4,1) 0%,rgba(234,40,3,1) 51%,rgba(234,88,4,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom,  rgba(234,88,4,1) 0%,rgba(234,40,3,1) 51%,rgba(234,88,4,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ea5804', endColorstr='#ea5804',GradientType=0 ); /* IE6-9 */
            }

            .form-wizard {
                padding: 25px; 
                background: #fff;
                -moz-border-radius: 4px; 
                -webkit-border-radius: 4px; 
                border-radius: 4px; 
                box-shadow: 0px 0px 6px 3px #777;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-weight: 300;
                color: #888;
                line-height: 30px;
                text-align: center;
            }

            .form-wizard strong { font-weight: 500; }

            .form-wizard a, .form-wizard a:hover, .form-wizard a:focus {
                color: #ea2803;
                text-decoration: none;
                -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
            }

            .form-wizard h1, .form-wizard h2 {
                margin-top: 10px;
                font-size: 38px;
                font-weight: 100;
                color: #555;
                line-height: 50px;
            }

            .form-wizard h3 {
                font-size: 25px;
                font-weight: 300;
                color: #ea2803;
                line-height: 30px;
                margin-top: 0; 
                margin-bottom: 5px; 
                text-transform: uppercase; 
            }

            .form-wizard h4 {
                float:left;
                font-size: 20px;
                font-weight: 300;
                color: #ea2803;
                line-height: 26px;
                width:100%;
            }
            .form-wizard h4  span{
                float:right;
                font-size: 18px;
                font-weight: 300;
                color: #555;
                line-height: 26px;
            }

            .form-wizard table tr th{font-weight:normal;}

            .form-wizard img { max-width: 100%; }

            .form-wizard ::-moz-selection { background: #ea2803; color: #fff; text-shadow: none; }
            .form-wizard ::selection { background: #ea2803; color: #fff; text-shadow: none; }


            .form-control {
                height: 44px;
                width:100%;
                margin: 0;
                padding: 0 20px;
                vertical-align: middle;
                background: #fff;
                border: 1px solid #ddd;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-weight: 300;
                line-height: 44px;
                color: #888;
                -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
                -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
                -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
            }
            .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"], .radio input[type="radio"], .radio-inline input[type="radio"] {
                position: absolute;
                margin-top: 9px;
                margin-left: -20px;
            }

            .form-control option:hover, .form-control option:checked  {
                box-shadow: 0 0 10px 100px #ea2803 inset;
            }

            .form-control:focus {
                outline: 0;
                background: #fff;
                border: 1px solid #ccc;
                -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
            }

            .form-control:-moz-placeholder { color: #888; }
            .form-control:-ms-input-placeholder { color: #888; }
            .form-control::-webkit-input-placeholder { color: #888; }

            .form-wizard label { font-weight: 300; }
            .form-wizard label span { color:#ea2803; }


            .form-wizard .btn {
                min-width: 105px;
                height: 40px;
                margin: 0;
                padding: 0 20px;
                vertical-align: middle;
                border: 0;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-weight: 300;
                line-height: 40px;
                color: #fff;
                -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
                text-shadow: none;
                -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
                -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
            }

            .form-wizard .btn:hover {
                background:#f34727; 
                color: #fff; 
            }
            .form-wizard .btn:active { 
                outline: 0; 
                background:#f34727; 
                color: #fff; 
                -moz-box-shadow: none; 
                -webkit-box-shadow: none; 
                box-shadow: none; 
            }
            .form-wizard .btn:focus,
            .form-wizard .btn:active:focus,
            .form-wizard .btn.active:focus { 
                outline: 0; 
                background:#f34727; 
                color: #fff; 
            }

            .form-wizard .btn.btn-next,
            .form-wizard .btn.btn-next:focus,
            .form-wizard .btn.btn-next:active:focus, 
            .form-wizard .btn.btn-next.active:focus { 
                background: #ea2803; 
            }

            .form-wizard .btn.btn-submit,
            .form-wizard .btn.btn-submit:focus,
            .form-wizard .btn.btn-submit:active:focus, 
            .form-wizard .btn.btn-submit.active:focus { 
                background: #ea2803; 
            }

            .form-wizard .btn.btn-previous,
            .form-wizard .btn.btn-previous:focus,
            .form-wizard .btn.btn-previous:active:focus, 
            .form-wizard .btn.btn-previous.active:focus { 
                background: #bbb;
            }

            .form-wizard .success h3{
                color: #4F8A10;
                text-align: center;
                margin: 20px auto !important;
            }
            .form-wizard .success .success-icon {
                color: #4F8A10;
                font-size: 100px;
                border: 5px solid #4F8A10;
                border-radius: 100px;
                text-align: center !important;
                width: 110px;
                margin: 25px auto;
            }
            .form-wizard .progress-bar {
                background-color: #ea2803;
            }

            .form-wizard-steps{ 
                margin:auto; 
                overflow: hidden; 
                position: relative; 
                margin-top: 20px;
            }
            .form-wizard-step{
                padding-top:10px !important;
                border:2px solid #fff;
                background:#ccc;
                -ms-transform: skewX(-30deg); /* IE 9 */
                -webkit-transform: skewX(-30deg); /* Safari */
                transform: skewX(-30deg); /* Standard syntax */
            }
            .form-wizard-step.active{
                background:#ea2803;
            }
            .form-wizard-step.activated{
                background:#ea2803;
            }
            .form-wizard-progress { 
                position: absolute; 
                top: 36px;
                left: 0; 
                width: 100%; 
                height: 0px; 
                background: #ea2803;
            }
            .form-wizard-progress-line { 
                position: absolute; 
                top: 0; 
                left: 0; 
                height: 0px; 
                background: #ea2803; 
            }

            .form-wizard-tolal-steps-3 .form-wizard-step { 
                position: relative;
                float: left; 
                width: 33.33%; 
                padding: 0 5px; 
            }
            .form-wizard-tolal-steps-4 .form-wizard-step { 
                position: relative; 
                float: left; 
                width: 25%; 
                padding: 0 5px; 
            }
            .form-wizard-tolal-steps-5 .form-wizard-step { 
                position: relative;
                float: left;
                width: 20%;
                padding: 0 5px;
            }

            .form-wizard-step-icon {
                display: inline-block;
                width: 40px; 
                height: 40px; 
                margin-top: 4px; 
                background: #ddd;
                font-size: 16px; 
                color: #777; 
                line-height: 40px;
                -moz-border-radius: 50%; 
                -webkit-border-radius: 50%; 
                border-radius: 50%;
                -ms-transform: skewX(30deg); /* IE 9 */
                -webkit-transform: skewX(30deg); /* Safari */
                transform: skewX(30deg); /* Standard syntax */
            }
            .form-wizard-step.activated .form-wizard-step-icon {
                background: #ea2803; 
                border: 1px solid #fff; 
                color: #fff; 
                line-height: 38px;
            }
            .form-wizard-step.active .form-wizard-step-icon {
                background: #fff; 
                border: 1px solid #fff; 
                color: #ea2803; 
                line-height: 38px;
            }

            .form-wizard-step p { 
                color: #fff;
                -ms-transform: skewX(30deg); /* IE 9 */
                -webkit-transform: skewX(30deg); /* Safari */
                transform: skewX(30deg); /* Standard syntax */
            }
            .form-wizard-step.activated p { color: #fff; }
            .form-wizard-step.active p { color: #fff; }

            .form-wizard fieldset { 
                display: none; 
                text-align: left; 
                border:0px !important
            }

            .form-wizard-buttons { text-align: right; }

            .form-wizard .input-error { border-color: #ea2803;}

            /** image uploader **/
            .image-upload a[data-action] {
                cursor: pointer;
                color: #555;
                font-size: 18px;
                line-height: 24px;
                transition: color 0.2s;
            }
            .image-upload a[data-action] i {
                width: 1.25em;
                text-align: center;
            }
            .image-upload a[data-action]:hover {
                color: #ea2803;
            }
            .image-upload a[data-action].disabled {
                opacity: 0.35;
                cursor: default;
            }
            .image-upload a[data-action].disabled:hover {
                color: #555;
            }
            .settings_wrap{
                margin-top:20px;
            }
            .image_picker .settings_wrap {
                overflow: hidden;
                position: relative;
            }
            .image_picker .settings_wrap .drop_target,
            .image_picker .settings_wrap .settings_actions {
                float: left;
            }
            .image_picker .settings_wrap .drop_target {
                margin-right: 18px;
            }
            .image_picker .settings_wrap .settings_actions {
                float: left;
                margin-top: 100px;
                margin-left: 20px;
            }
            .settings_actions.vertical a {
                display: block;
            }
            .drop_target {
                position: relative;
                cursor: pointer;
                transition: all 0.2s;
                width: 250px;
                height: 250px;
                background: #f2f2f2;
                border-radius: 100%;
                margin: 0 auto 25px auto;
                overflow: hidden;
                border: 8px solid #E0E0E0;
            }
            .drop_target input[type="file"] {
                visibility: hidden;
            }
            .drop_target::before {
                content: 'Drop Hear';
                font-family: FontAwesome;
                position: absolute;
                display: block;
                width: 100%;
                line-height: 220px;
                text-align: center;
                font-size: 40px;
                color: rgba(0, 0, 0, 0.3);
                transition: color 0.2s;
            }
            .drop_target:hover,
            .drop_target.dropping {
                background: #f80;
                border-top-color: #cc6d00;
            }
            .drop_target:hover:before,
            .drop_target.dropping:before {
                color: rgba(0, 0, 0, 0.6);
            }
            .drop_target .image_preview {
                width: 100%;
                height: 100%;
                background: no-repeat center;
                background-size: contain;
                position: relative;
                z-index: 2;
            }
        </style>
    </head>
    <body>

        <div class="site-wrap">

            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <header class="site-navbar container py-0 bg-white" role="banner">

                <!-- <div class="container"> -->
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo"><a href="#" class="text-black mb-0">Classy<span class="text-primary">Ads</span>  </a></h1>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="<?php echo base_url('welcome/listings'); ?>">Ads</a></li>
                                <li>
                                    <a href="<?php echo base_url('welcome/about'); ?>">About</a>                
                                </li>
                                <li><a href="<?php echo base_url('welcome/blog'); ?>">Blog</a></li>
                                <li><a href="<?php echo base_url('welcome/contact'); ?>">Contact</a></li>

                                <li class="ml-xl-3 login"><a href="login"><span class="border-left pl-xl-4"></span>Log In</a></li>
                                <li><a href="<?php echo base_url('register'); ?>">Register</a></li>

                                <li><a href="#" class="cta"><span class="bg-primary text-white rounded">+ Post an Ad</span></a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                    </div>

                </div>
                <!-- </div> -->

            </header>


            <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo base_url('assets/images/hero_1.jpg'); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">

                        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                            <div class="row justify-content-center mt-5">
                                <div class="col-md-8 text-center">
                                    <h1>Ads Listings</h1>
                                    <p class="mb-0">Choose product you want</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div> 
            <div class="site-section bg-light">
                <div class="container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="row" style="border:#ddd 1px solid; background-color: white; margin-top: 5px;">
                                    <div class="col-md-12">
                                        <fieldset style="height: 200px !important;">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row" style="border:#ddd 1px solid; background-color: white; margin-top: 5px;">
                                    <div class="col-md-12">
                                        <form action="<?php echo base_url('post/submit');?>" method="POST"> 
                                            <fieldset style="height: auto !important;">
                                                <div class="cat-box-title" style="text-align:center; margin-top: 20px;">
                                                    <h3>Publish a listing</h3>
                                                    <div class="stripe-line"></div>
                                                </div>
                                                <div class="form-group">
                                                    <p>Posting a classified ad on this portal is rather simple and it perhaps can be done in under a minute; however, please take your time and do your best to provide as much as details possible.</p>
                                                    <p>The ads can, of course, be posted for free and you'd have the option of editing them after.</p>
                                                    <p>Please choose the category and subcategory carefully as it will enable buyers to spot your ads if they browse through the website using provided category menu items.</p>
                                                    <p>The easiest method of getting your ads more viewed most likely will be to provide more details. This increases your posted ad chances of being viewed through the site search.</p>
                                                </div>
                                                <label class="containernow">Free
                                                    <input type="radio" checked="checked" name="feature" value="free">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label style="display:none;" class="containernow">Premium Ad - Make your ad to stand out on the search pages for 30 days - $9.96 USD
                                                    <input type="radio" name="feature" value="paid">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </fieldset>
                                            <fieldset style="height: 200px !important;">

                                            </fieldset>
                                            <button type="submit" class="form-control"style="color: white;background-color: #5CB85C;margin-bottom: 10px;">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row" style="border:#ddd 1px solid; background-color: white; margin-top: 5px;">
                                    <div class="col-md-12">
                                        <fieldset style="height: 200px !important;">

                                        </fieldset>
                                    </div>
                                </div>   
                            </div>

                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter bg-primary py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2>Newsletter</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="col-md-6">

                            <form class="d-flex">
                                <input type="text" class="form-control" placeholder="Email">
                                <input type="submit" value="Subscribe" class="btn btn-white"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="footer-heading mb-4">About</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem fuga, illo quis fugiat!</p>
                                </div>

                                <div class="col-md-3">
                                    <h2 class="footer-heading mb-4">Navigations</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h2 class="footer-heading mb-4">Follow Us</h2>
                                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <form action="#" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Search products..." aria-label="Enter Email" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary text-white" type="button" id="button-addon2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-5">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
        </div>

        <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-ui.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.stellar.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.countdown.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/aos.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/rangeslider.min.js'); ?>"></script>

        <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
        <script>
                                        "use strict";
                                        function scroll_to_class(element_class, removed_height) {
                                            var scroll_to = $(element_class).offset().top - removed_height;
                                            if ($(window).scrollTop() != scroll_to) {
                                                $('.form-wizard').stop().animate({scrollTop: scroll_to}, 0);
                                            }
                                        }

                                        function bar_progress(progress_line_object, direction) {
                                            var number_of_steps = progress_line_object.data('number-of-steps');
                                            var now_value = progress_line_object.data('now-value');
                                            var new_value = 0;
                                            if (direction == 'right') {
                                                new_value = now_value + (100 / number_of_steps);
                                            } else if (direction == 'left') {
                                                new_value = now_value - (100 / number_of_steps);
                                            }
                                            progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
                                        }

                                        jQuery(document).ready(function () {

                                            /*
                                             Form
                                             */
                                            $('.form-wizard fieldset:first').fadeIn('slow');
                                            $('.form-wizard .required').on('focus', function () {
                                                $(this).removeClass('input-error');
                                            });
// next step
                                            $('.form-wizard .btn-next').on('click', function () {
                                                var parent_fieldset = $(this).parents('fieldset');
                                                var next_step = true;
                                                // navigation steps / progress steps
                                                var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
                                                var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');
                                                // fields validation
                                                parent_fieldset.find('.required').each(function () {
                                                    if ($(this).val() == "") {
                                                        $(this).addClass('input-error');
                                                        next_step = false;
                                                    } else {
                                                        $(this).removeClass('input-error');
                                                    }
                                                });
                                                // fields validation

                                                if (next_step) {
                                                    parent_fieldset.fadeOut(400, function () {
                                                        // change icons
                                                        current_active_step.removeClass('active').addClass('activated').next().addClass('active');
                                                        // progress bar
                                                        bar_progress(progress_line, 'right');
                                                        // show next step
                                                        $(this).next().fadeIn();
                                                        // scroll window to beginning of the form
                                                        scroll_to_class($('.form-wizard'), 20);
                                                    });
                                                }

                                            });
// previous step
                                            $('.form-wizard .btn-previous').on('click', function () {
                                                // navigation steps / progress steps
                                                var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
                                                var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');
                                                $(this).parents('fieldset').fadeOut(400, function () {
                                                    // change icons
                                                    current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
                                                    // progress bar
                                                    bar_progress(progress_line, 'left');
                                                    // show previous step
                                                    $(this).prev().fadeIn();
                                                    // scroll window to beginning of the form
                                                    scroll_to_class($('.form-wizard'), 20);
                                                });
                                            });
// submit
                                            $('.form-wizard').on('submit', function (e) {

                                                // fields validation
                                                $(this).find('.required').each(function () {
                                                    if ($(this).val() == "") {
                                                        e.preventDefault();
                                                        $(this).addClass('input-error');
                                                    } else {
                                                        $(this).removeClass('input-error');
                                                    }
                                                });
                                                // fields validation

                                            });
                                        });
// image uploader scripts 

                                        var $dropzone = $('.image_picker'),
                                                $droptarget = $('.drop_target'),
                                                $dropinput = $('#inputFile'),
                                                $dropimg = $('.image_preview'),
                                                $remover = $('[data-action="remove_current_image"]');
                                        $dropzone.on('dragover', function () {
                                            $droptarget.addClass('dropping');
                                            return false;
                                        });
                                        $dropzone.on('dragend dragleave', function () {
                                            $droptarget.removeClass('dropping');
                                            return false;
                                        });
                                        $dropzone.on('drop', function (e) {
                                            $droptarget.removeClass('dropping');
                                            $droptarget.addClass('dropped');
                                            $remover.removeClass('disabled');
                                            e.preventDefault();
                                            var file = e.originalEvent.dataTransfer.files[0],
                                                    reader = new FileReader();
                                            reader.onload = function (event) {
                                                $dropimg.css('background-image', 'url(' + event.target.result + ')');
                                            };
                                            console.log(file);
                                            reader.readAsDataURL(file);
                                            return false;
                                        });
                                        $dropinput.change(function (e) {
                                            $droptarget.addClass('dropped');
                                            $remover.removeClass('disabled');
                                            $('.image_title input').val('');
                                            var file = $dropinput.get(0).files[0],
                                                    reader = new FileReader();
                                            reader.onload = function (event) {
                                                $dropimg.css('background-image', 'url(' + event.target.result + ')');
                                            }

                                            reader.readAsDataURL(file);
                                        });
                                        $remover.on('click', function () {
                                            $dropimg.css('background-image', '');
                                            $droptarget.removeClass('dropped');
                                            $remover.addClass('disabled');
                                            $('.image_title input').val('');
                                        });
                                        $('.image_title input').blur(function () {
                                            if ($(this).val() != '') {
                                                $droptarget.removeClass('dropped');
                                            }
                                        });
// image uploader scripts
        </script>
    </body>
</html> 