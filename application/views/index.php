<?php  $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); ?>

<html lang="en">
    <head>
        <title>Ads</title>
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
            .site-navbar .site-navigation .site-menu > li > a:active {
    color: #30e3ca !important;
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
                        <h1 class="mb-0 site-logo"><a href="#" class="text-black mb-0">Azam<span class="text-primary">Ads</span>  </a></h1>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="<?php echo (($uri == "/ads") ? "active" : ""); ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="<?php echo (($uri == "/ads/welcome/listings") ? "active" : ""); ?>"><a href="<?php echo base_url('welcome/listings'); ?>">Ads</a></li>
                                <li class="<?php echo (($uri == "/ads/index.php/welcome") ? "active" : ""); ?>">
                                    <a href="<?php echo base_url('welcome/about'); ?>">About</a>                
                                </li>
                                <!--<li class="<?php echo (($uri == "") ? "active" : ""); ?>"><a href="<?php echo base_url('welcome/blog'); ?>">Blog</a></li>-->
                                <li class="<?php echo (($uri == "") ? "active" : ""); ?>"><a href="<?php echo base_url('welcome/contact'); ?>">Contact</a></li>
                                <li class="ml-xl-3 login <?php echo (($uri == "") ? "active" : ""); ?>"><a href="Welcome/login"><span class="border-left pl-xl-4"></span>Log In</a></li>
                                <li class="<?php echo (($uri == "") ? "active" : ""); ?>"><a href="<?php echo base_url('Welcome/register'); ?>">Register</a></li>
                                <li class="<?php echo (($uri == "") ? "active" : ""); ?>"><a href="<?php echo base_url('post/add'); ?>" class="cta"><span class="bg-primary text-white rounded">+ Post an Ad</span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                    </div>
                </div>
                <!-- </div> -->
            </header>
            <div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url('assets/images/hero_2.jpg'); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12">
                            <div class="row justify-content-center mb-4">
                                <div class="col-md-8 text-center">
                                    <h1 class="" data-aos="fade-up">Largest Classifieds In The World</h1>
                                    <p data-aos="fade-up" data-aos-delay="100">You can buy, sell anything you want.</p>
                                </div>
                            </div>
                            <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
                                <form method="post" action="<?php echo base_url(); ?>Welcome/search">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 mb-4 mb-xl-0 col-xl-6">
                                            <input type="text" name="search" class="form-control rounded" placeholder="What are you looking for?">
                                        </div>
<!--                                        <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                           <div class="select-wrap">
                                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                                <select class="form-control rounded" name="category_id">
                                                    <option value="">All Categories</option>
                                                    <option value="">Real Estate</option>
                                                    <option value="">Books &amp;  Magazines</option>
                                                    <option value="">Furniture</option>
                                                    <option value="">Electronics</option>
                                                    <option value="">Cars &amp; Vehicles</option>
                                                    <option value="">Others</option>
                                                </select>
                                            </div>
                                        </div>-->
                                        <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                                            <div class="select-wrap">
                                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                                <select class="form-control rounded" name="sub_category_id">
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
                                        </div>
                                        <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                            <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>  
            <div class="site-section bg-light">
               <div class="container">
    <div class="overlap-category mb-5">
        <div class="row align-items-stretch no-gutters">
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                <a href="<?php echo base_url('category/rent'); ?>" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-books"></span></span>
                    <span class="caption mb-2 d-block">Rent</span>
                    <span class="number"><?php echo $Rent; ?></span>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                <a href="<?php echo base_url('category/sale_item'); ?>" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-bunk-bed"></span></span>
                    <span class="caption mb-2 d-block">Items For Sale</span>
                    <span class="number"><?php echo $For_Sale; ?></span>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                <a href="<?php echo base_url('category/jobs'); ?>" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-innovation"></span></span>
                    <span class="caption mb-2 d-block">Jobs</span>
                    <span class="number"><?php echo $Jobs; ?></span>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                <a href="<?php echo base_url('category/real_estate'); ?>" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-car"></span></span>
                    <span class="caption mb-2 d-block">Real Estate</span>
                    <span class="number"><?php echo $Real_Estate; ?></span>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                <a href="<?php echo base_url('category/vehicals'); ?>" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-house"></span></span>
                    <span class="caption mb-2 d-block">Vehicals</span>
                    <span class="number"><?php echo $vehical; ?></span>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2" id="show">
                <a href="#" class="popular-category h-100 closeLink">
                    <span class="icon"><span class="flaticon-pizza"></span></span>
                    <span class="caption mb-2 d-block">Other</span>
                    <!--<span class="number"></span>-->
                </a>
            </div>
        </div>
    </div>

                   <div class="row align-items-stretch no-gutters" id="hide" style="    margin-top: -35px;">
        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="<?php echo base_url('category/pets'); ?>" class="popular-category h-100">
                <span class="icon"><span class="flaticon-car"></span></span>
                <span class="caption mb-2 d-block">Pets</span>
                <span class="number"><?php echo $Pets; ?></span>
            </a>
        </div>
        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="<?php echo base_url('category/services'); ?>" class="popular-category h-100">
                <span class="icon"><span class="flaticon-car"></span></span>
                <span class="caption mb-2 d-block">Services</span>
                <span class="number"><?php echo $Services; ?></span>
            </a>
        </div>
        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="<?php echo base_url('category/personal'); ?>" class="popular-category h-100">
                <span class="icon"><span class="flaticon-car"></span></span>
                <span class="caption mb-2 d-block">Personal</span>
                <span class="number"><?php echo $Personal; ?></span>
            </a>
        </div>
        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="<?php echo base_url('category/comunity'); ?>" class="popular-category h-100">
                <span class="icon"><span class="flaticon-car"></span></span>
                <span class="caption mb-2 d-block">Comunity</span>
                <span class="number"><?php echo $Comunity; ?></span>
            </a>
        </div>
    </div>
</div> 
            </div>
        </div>
        <div class="site-section" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Latest Products</h2>
                        <p class="color-black-opacity-5"></p>
                    </div>
                </div>
                <div class="row">
                    <?php if (!empty($data)) { ?>
                        <?php foreach ($data as $value) { ?>
                            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

                                <div class="listing-item">
                                    <div class="listing-image">
                                        <?php $file = $value->file; ?>
                                        <?php if (!empty($file)) { ?>
                                            <img src="<?php echo base_url(); ?>assets/images/post_img/<?php echo $value->file; ?>" alt="Image" class="img-fluid" style="height: 227px; width: 69%;">
                                        <?php } else { ?>
                                            <?php echo 'Image Not Available'; ?>
                                        <?php } ?>
                                    </div>
                                    <div class="listing-item-content">
                                        <a class="px-3 mb-3 category" href="<?php echo base_url(); ?>category/vehical_detail/<?php echo $value->id; ?>"><?php echo $value->category; ?></a>
                                        <h2 class="mb-1"><a href="#"><?php echo $value->sub_category; ?></a></h2>
                                        <span class="address"><?php echo $value->address; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>


        <!--            <div class="site-section bg-light">
                        <div class="container">
                            <div class="row mb-5">
                                <div class="col-md-7 text-left border-primary">
                                    <h2 class="font-weight-light text-primary">Trending Today</h2>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-6">
        
                                    <div class="d-block d-md-flex listing">
                                        <a href="listings-single.html" class="img d-block" style="background-image: url(<?php echo base_url('assets/images/img_2.jpg'); ?>)"></a>
                                        <div class="lh-content">
                                            <span class="category">Real Estate</span>
                                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                            <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
                                            <address>Don St, Brooklyn, New York</address>
                                            <p class="mb-0">
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-secondary"></span>
                                                <span class="review">(3 Reviews)</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-block d-md-flex listing">
                                        <a href="listings-single.html" class="img d-block" style="background-image: url(<?php echo base_url('assets/images/img_3.jpg'); ?>)"></a>
                                        <div class="lh-content">
                                            <span class="category">Furniture</span>
                                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                            <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                                            <address>Don St, Brooklyn, New York</address>
                                            <p class="mb-0">
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-secondary"></span>
                                                <span class="review">(3 Reviews)</span>
                                            </p>
                                        </div>
                                    </div>
        
                                    <div class="d-block d-md-flex listing">
                                        <a href="listings-single.html" class="img d-block" style="background-image: url(<?php echo base_url('assets/images/img_4.jpg'); ?>)"></a>
                                        <div class="lh-content">
                                            <span class="category">Electronics</span>
                                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                            <h3><a href="listings-single.html">iPhone X gray</a></h3>
                                            <address>Don St, Brooklyn, New York</address>
                                            <p class="mb-0">
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-secondary"></span>
                                                <span class="review">(3 Reviews)</span>
                                            </p>
                                        </div>
                                    </div>
        
        
        
                                </div>
                                <div class="col-lg-6">
        
                                    <div class="d-block d-md-flex listing">
                                        <a href="listings-single.html" class="img d-block" style="background-image: url(<?php echo base_url('assets/images/img_1.jpg'); ?>)"></a>
                                        <div class="lh-content">
                                            <span class="category">Cars &amp; Vehicles</span>
                                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                            <h3><a href="listings-single.html">Red Luxury Car</a></h3>
                                            <address>Don St, Brooklyn, New York</address>
                                            <p class="mb-0">
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-secondary"></span>
                                                <span class="review">(3 Reviews)</span>
                                            </p>
                                        </div>
                                    </div>
        
                                    <div class="d-block d-md-flex listing">
                                        <a href="listings-single.html" class="img d-block" style="background-image: url(<?php echo base_url('assets/images/img_2.jpg'); ?>)"></a>
                                        <div class="lh-content">
                                            <span class="category">Real Estate</span>
                                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                            <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
                                            <address>Don St, Brooklyn, New York</address>
                                            <p class="mb-0">
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-secondary"></span>
                                                <span class="review">(3 Reviews)</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-block d-md-flex listing">
                                        <a href="listings-single.html" class="img d-block" style="background-image: url(<?php echo base_url('assets/images/images/img_3.jpg'); ?>)"></a>
                                        <div class="lh-content">
                                            <span class="category">Furniture</span>
                                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                            <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                                            <address>Don St, Brooklyn, New York</address>
                                            <p class="mb-0">
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-warning"></span>
                                                <span class="icon-star text-secondary"></span>
                                                <span class="review">(3 Reviews)</span>
                                            </p>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>   -->
        <!--            <div class="site-section bg-light">
                        <div class="container">
                            <div class="row justify-content-center mb-5">
                                <div class="col-md-7 text-center border-primary">
                                    <h2 class="font-weight-light text-primary">Our Blog</h2>
                                    <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
                                </div>
                            </div>
                            <div class="row mb-3 align-items-stretch">
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                    <div class="h-entry">
                                        <img src="<?php echo base_url('assets/images/hero_1.jpg'); ?>" alt="Image" class="img-fluid rounded">
                                        <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
                                        <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                    </div> 
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                    <div class="h-entry">
                                        <img src="<?php echo base_url('assets/images/hero_1.jpg'); ?>" alt="Image" class="img-fluid rounded">
                                        <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
                                        <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                    </div> 
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                    <div class="h-entry">
                                        <img src="<?php echo base_url('assets/images/hero_1.jpg'); ?>" alt="Image" class="img-fluid rounded">
                                        <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
                                        <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                    </div>
                                </div>
        
                                <div class="col-12 text-center mt-4">
                                    <a href="#" class="btn btn-primary rounded py-2 px-4 text-white">View All Posts</a>
                                </div>
                            </div>
                        </div>
                    </div>-->


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
     $("#hide").hide();
      $(document).ready(function() {
    $("#show").click(function(e) {
        $("#hide").toggle();
        e.preventDefault();
    });
});


</script>
    <script>

        $("a.s").click(function (e) {
            e.preventDefault();
            return false;
        });

    </script>
</body>
</html>