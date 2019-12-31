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
        <link rel="stylesheet" href="<?php echo base_url('assets/css/shahbazstyle sheet.css'); ?>">
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
                            <div class="col-sm-12">
                                <?php if ($this->session->flashdata('success')) { ?>
                                    <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
                                <?php } else if ($this->session->flashdata('error')) { ?>
                                    <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
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
                                        <form action="<?php echo base_url('post/add_1'); ?>" method="POST"> 
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
                                                <h5 style="color:black;">Start with Choosing the Category for Your Post:</h5>

                                                <div class="form-group">
                                                    <div>
                                                        <select required id="category" class="form-control" value="<?php echo isset($_SESSION["category"]) ? $_SESSION["category"] : ''; ?>" name="category">
                                                            <option>Select A Category</option>
                                                            <option value="Vehicals">Vehicals</option>
                                                            <option value="Rent">For Rent</option>
                                                            <option value="Pets">Pets</option>
                                                            <option value="Personal">Personal</option>
                                                            <option value="For_Sale">Items For Sale</option>
                                                            <option value="Jobs">Jobs</option>
                                                            <option value="Real_Estate">Real Estate</option>
                                                            <option value="Services">Services</option>
                                                            <option value="Comunity">Comunity</option>                                                           
                                                        </select>
                                                    </div>

                                                    <div id="Vehicals" style="margin-top:5px;">
                                                        <select class="form-control" name="Vehicals">
                                                            <option>Sub Category</option>
                                                            <option value="Aircraft">Aircraft</option>
                                                            <option value="Automotive">Automotive Items & Parts</option>
                                                            <option value="Boats&Watercraft">Boats & Watercraft</option>
                                                            <option value="Cars">Cars</option>
                                                            <option value="ClassicCars">Classic Cars</option>
                                                            <option value="CommercialTrucks">Commercial Trucks</option>
                                                            <option value="Motorcycles">Motorcycles</option>
                                                            <option value="OffRoadVehicles">Off Road Vehicles</option>
                                                            <option value="RV&Motorhomes">RV & Motorhomes</option>
                                                            <option value="SUVs">SUVs</option>
                                                            <option value="Utility&WorkTrailers">Utility & Work Trailers</option>
                                                            <option value="Vans">Vans</option>
                                                            <option value="VehiclesWanted">Vehicles Wanted</option>
                                                        </select>
                                                    </div>
                                                    <div id="Rent" class="Rent" style="margin-top:5px;">
                                                        <select class="form-control" name="Rent">
                                                            <option>A Category</option>
                                                            <option value="Apartments">Apartments</option>
                                                            <option value="Commercial Lease">Commercial Lease</option>
                                                            <option value="CondosForRent">Condos For Rent</option>
                                                            <option value="HousesForRent">Houses For Rent</option>
                                                            <option value="HousingWanted">Housing Wanted</option>
                                                            <option value="Mobile Homes For Rent">Mobile Homes For Rent</option>
                                                            <option value="Roommates">Roommates</option>
                                                            <option value="Townhomes For Rent">Townhomes For Rent</option>
                                                            <option value="Vacation Homes">Vacation Homes</option>
                                                        </select>
                                                    </div>
                                                    <div id="Pets" class="Pets" style="margin-top:5px;">
                                                        <select class="form-control" name="Pets">
                                                            <option>Select A Category</option>
                                                            <option value="Birds">Birds</option>
                                                            <option value="Cats">Cats</option>
                                                            <option value="Dogs">Dogs</option>
                                                            <option value="Livestock">Livestock</option>
                                                            <option value="Other Pets">Other Pets</option>
                                                            <option value="Pet Services & Stores">Pet Services & Stores</option>
                                                            <option value="Pet Supplies">Pet Supplies</option>
                                                            <option value="Pets Lost & Found">Pets Lost & Found</option>
                                                            <option value="Pets Wanted">Pets Wanted</option>
                                                        </select>
                                                    </div>
                                                    <div id="Personal" class="Personal" style="margin-top:5px;">
                                                        <select class="form-control" name="Personal">
                                                            <option>Select A Category</option>
                                                            <option value="Casual Dating">Casual Dating</option>
                                                            <option value="Men Seeking Men">Men Seeking Men</option>
                                                            <option value="Men Seeking Women">Men Seeking Women</option>
                                                            <option value="Missed Connections">Missed Connections</option>
                                                            <option value="Women Seeking Men">Women Seeking Men</option>
                                                            <option value="Women Seeking Women">Women Seeking Women</option>
                                                        </select>
                                                    </div>
                                                    <div id="For_Sale" class="For_Sale" style="margin-top:5px;">
                                                        <select class="form-control" name="For_Sale">
                                                            <option>Select A Category</option>
                                                            <option value="Appliances">Appliances</option>
                                                            <option value="Art & Crafts">Art & Crafts</option>
                                                            <option value="Automotive Items & Parts">Automotive Items & Parts</option>
                                                            <option value="Bicycles">Bicycles</option>
                                                            <option value="Books & Magazines">Books & Magazines</option>
                                                            <option value="Cell Phones">Cell Phones</option>
                                                            <option value="Clothing & Apparel">Clothing & Apparel</option>
                                                            <option value="Computers & Electronics">Computers & Electronics</option>
                                                            <option value="Collectibles">Collectibles</option>
                                                            <option value="Farm & Ranch">Farm & Ranch</option>
                                                            <option value="Games">Games</option>
                                                            <option value="Health & Beauty Item">Health & Beauty Items</option>
                                                            <option value="Heavy Equipment">Heavy Equipment</option>
                                                            <option value="Hobbies">Hobbies</option>
                                                            <option value="Household & Furniture">Household & Furniture</option>
                                                            <option value="Jewelry">Jewelry</option>
                                                            <option value="Kids Stuff">Kids Stuff</option>
                                                            <option value="Lawn & Garden">Lawn & Garden</option>
                                                            <option value="Mattresses">Mattresses</option>
                                                            <option value="Miscellaneous Items">Miscellaneous Items</option>
                                                            <option value="Movies & DVDs">Movies & DVDs</option>
                                                            <option value="Music & CDs">Music & CDs</option>
                                                            <option value="Musical Instruments">Musical Instruments</option>
                                                            <option value="Office & Business">Office & Business</option>
                                                            <option value="Sports Equipment">Sports Equipment</option>
                                                            <option value="Tickets">Tickets</option>
                                                            <option value="Tools">Tools</option>

                                                        </select>
                                                    </div>
                                                    <div id="Jobs" class="Jobs" style="margin-top:5px;">
                                                        <select class="form-control" name="Jobs">
                                                            <option>Select A Category</option>
                                                            <option value="Accounting & Bookkeeping Jobs">Accounting & Bookkeeping Jobs</option>
                                                            <option value="Business Opportunities">Business Opportunities</option>
                                                            <option value="Cleaning Jobs">Cleaning Jobs</option>
                                                            <option value="Construction Work">Construction Work</option>
                                                            <option value="Creative Jobs">Creative Jobs</option>
                                                            <option value="Educational Jobs">Educational Jobs</option>
                                                            <option value="Financial & Real Estate Jobs">Financial & Real Estate Jobs</option>
                                                            <option value="Internships">Internships</option>
                                                            <option value="IT Jobs">IT Jobs</option>
                                                            <option value="Labor Jobs">Labor Jobs</option>
                                                            <option value="Legal Jobs">Legal Jobs</option>
                                                            <option value="Management Jobs">Management Jobs</option>
                                                            <option value="Marketing Jobs">Marketing Jobs</option>
                                                            <option value="Medical Jobs">Medical Jobs</option>
                                                            <option value="Office Jobs">Office Jobs</option>
                                                            <option value="Other Jobs">Other Jobs</option>
                                                            <option value="People Seeking Jobs">People Seeking Jobs</option>
                                                            <option value="Restaurant Jobs">Restaurant Jobs</option>
                                                            <option value="Retail Jobs">Retail Jobs</option>
                                                            <option value="Sales Jobs">Sales Jobs</option>
                                                            <option value="Science & Engineering Jobs">Science & Engineering Jobs</option>
                                                            <option value="Security & Safety Jobs">Security & Safety Jobs</option>
                                                            <option value="Skilled Trade Jobs">Skilled Trade Jobs</option>
                                                            <option value="Transportation Jobs">Transportation Jobs</option>
                                                        </select>
                                                    </div>
                                                    <div id="Real_Estate" class="Real_Estate" style="margin-top:5px;">
                                                        <select class="form-control" name="Real_Estate">
                                                            <option>Select A Category</option>
                                                            <option value="Commercial Real Estate">Commercial Real Estate</option>
                                                            <option value="Condos For Sale">Condos For Sale</option>
                                                            <option value="Farms & Ranches">Farms & Ranches</option>
                                                            <option value="Homes For Sale">Homes For Sale</option>
                                                            <option value="Land For Sale">Land For Sale</option>
                                                            <option value="Manufactured Homes">Manufactured Homes</option>
                                                            <option value="Other Real Estate">Other Real Estate</option>
                                                            <option value="Real Estate Services">Real Estate Services</option>
                                                            <option value="Time Shares">Time Shares</option>
                                                            <option value="Townhomes For Sale">Townhomes For Sale</option>
                                                            <option value="Vacation Homes">Vacation Homes</option>
                                                        </select>
                                                    </div>
                                                    <div id="Services" class="Services" style="margin-top:5px;">
                                                        <select class="form-control" name="Services">
                                                            <option>Select A Category</option>
                                                            <option value="Automotive Services">Automotive Services</option>
                                                            <option value="Beauty & Salon Services">Beauty & Salon Services</option>
                                                            <option value="Caregivers & Baby Sitting">Caregivers & Baby Sitting</option>
                                                            <option value="Cleaning Services">Cleaning Services</option>
                                                            <option value="Construction & Remodeling">Construction & Remodeling</option>
                                                            <option value="Financial Services">Financial Services</option>
                                                            <option value="Health & Wellness">Health & Wellness</option>
                                                            <option value="Home Services">Home Services</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="Lawn & Garden Services">Lawn & Garden Services</option>
                                                            <option value="Legal Services">Legal Services</option>
                                                            <option value="Marketing Services">Marketing Services</option>
                                                            <option value="Moving & Storage">Moving & Storage</option>
                                                            <option value="Office Services">Office Services</option>
                                                            <option value="Real Estate Services">Real Estate Services</option>
                                                            <option value="Training & Education Services">Training & Education Services</option>
                                                            <option value="Web Design & Tech">Web Design & Tech</option>
                                                            <option value="Weddings & Photography">Weddings & Photography</option>
                                                        </select>
                                                    </div>
                                                    <div id="Comunity" class="Comunity" style="margin-top:5px;">
                                                        <select class="form-control" name="Comunity">
                                                            <option>Select A Category</option>
                                                            <option value="Announcements">Announcements</option>
                                                            <option value="Carpool">Carpool</option>
                                                            <option value="Churches">Churches</option>
                                                            <option value="Free Stuff">Free Stuff</option>
                                                            <option value="Garage Sales">Garage Sales</option>
                                                            <option value="General Entertainment">General Entertainment</option>
                                                            <option value="Items Wanted">Items Wanted</option>
                                                            <option value="Lost & Found">Lost & Found</option>
                                                            <option value="Musicians & Bands">Musicians & Bands</option>
                                                            <option value="Volunteers">Volunteers</option>
                                                        </select>
                                                    </div>


                                                </div>
                                            </fieldset>
                                            <fieldset style="height: 200px !important;">
                                            </fieldset>
                                            <button type="submit" class="form-control" style="color: white;background-color: #5CB85C;margin-bottom: 10px;">Continue</button>
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
        <script>
            $('docoment').ready(function () {
                $('#Vehicals').hide();
                $('#Rent').hide();
                $('#Pets').hide();
                $('#Personal').hide();
                $('#For_Sale').hide();
                $('#Jobs').hide();
                $('#Real_Estate').hide();
                $('#Services').hide();
                $('#Comunity').hide();

                $('#category').change(function () {
                    $('#Vehicals').hide();
                    $('#Rent').hide();
                    $('#Pets').hide();
                    $('#Personal').hide();
                    $('#For_Sale').hide();
                    $('#Jobs').hide();
                    $('#Real_Estate').hide();
                    $('#Services').hide();
                    $('#Comunity').hide();

                    $('#' + $(this).val()).show();
                    // $('#sub').show();
                });
            });

        </script>
    </body>
</html>