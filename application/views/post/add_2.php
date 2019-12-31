<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Azam Post</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/shahbazstyle sheet.css'); ?>">
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
                                 <li class="ml-xl-3 login"><a href="<?php echo base_url('Welcome/login'); ?>"><span class="border-left pl-xl-4"></span>Log In</a></li>
                                <li><a href="<?php echo base_url('Welcome/register'); ?>">Register</a></li>
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
                                        <form action="<?php echo base_url('post/add_3'); ?>" method="POST"> 
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
                                                <h5 style="color:black;margin-bottom: 30px;">Select your address belongs to you...</h5>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5 style="color:black;">Select Country*</h5>
                                                        <select name="country" class="countries form-control" id="countryId">
                                                            <option value="">Select Country</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 style="color:black;">Select State*</h5>
                                                        <select name="state" class="states form-control" id="stateId">
                                                            <option value="">Select State</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 style="color:black;">Select City*</h5>
                                                        <select name="city" class="cities form-control" id="cityId">
                                                            <option value="">Select City</option>
                                                        </select>
                                                    </div>           
                                                </div>

                                                <div class="form-group">
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-md-8">
                                                            <h5 style="color:black;">Address</h5>
                                                            <input type="text" name="adress" value="<?php echo isset($_SESSION["address"]) ? $_SESSION["address"] : ''; ?>" class="form-control" >
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h5 style="color:black;;">Zipcode</h5>
                                                            <input type="text" name="zipcode" value="<?php echo isset($_SESSION["zipcode"]) ? $_SESSION["zipcode"] : ''; ?>" class="form-control">
                                                        </div>
                                                    </div>

                                                </div>
                                            </fieldset>
                                            <fieldset style="height: 200px !important;">

                                            </fieldset>
                                            <button type="submit" class="form-control"style="color: white;background-color: #5CB85C;margin-bottom: 10px;">Continue</button>
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
        <script src="<?php echo base_url('assets/js/abc.js'); ?>"></script>
        <!--<script src="//geodata.solutions/includes/countrystatecity.js"></script>-->
        <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
<!--        <script>
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
        </script>-->




    </body>
</html> 