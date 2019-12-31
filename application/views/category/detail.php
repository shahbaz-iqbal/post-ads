<?php $this->load->view('header'); ?>
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
        <?php $this->load->view('menubar'); ?>

        <?php if (!empty($data)) { ?>
            <?php foreach ($data as $value) { ?>
                <div class="row"  style="margin-top: 50; background-color: white; padding: 50px;">
                    <div class="col-lg-6">
                        <h3 class="h5 text-black mb-3">Price:</h3>
                        <p><?php echo $value->price; ?></p>
                        <div class="mb-4">
                            <!--<div class="slide-one-item home-slider owl-carousel">-->
                            <div>
                                <?php   $file =  $value->file; ?>
                                <?php if (!empty($file)) { ?>
                                <img src="<?php echo base_url(); ?>assets/images/post_img/<?php echo $value->file; ?>" alt="Image" class="img-fluid" style="height: 227px; width: 69%;">
                                <?php } else { ?>
                                           <?php echo 'Image Not Available'; ?>
                                       <?php } ?>
                            </div>

                        </div>
                        <h4 class="h5 mb-4 text-black">Title</h4>
                        <p><?php echo $value->title; ?></p>
                        <h4 class="h5 mb-4 text-black">Description</h4>
                        <p><?php echo $value->discription; ?></p>
                    </div>

                    <div class="col-lg-6">
                        <h3 class="h5 text-black mb-3">Contact_Info:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $value->name; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $value->email; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Country:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $value->country; ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="">State:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $value->state; ?></p>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-md-6">
                                <label>City:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $value->city; ?></p>
                            </div>
                        </div>

                        <h3 class="h5 text-black mb-3">Website:</h3>
                        <div style=" margin-top: 30px;">
                            <a href="#"><?php echo $value->web; ?></a>
                        </div>
                    </div> 
                </div>
            <?php }
        }
        ?>

    </div>
         <div class="site-section" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Recent Posts</h2>
                        <p class="color-black-opacity-5"></p>
                    </div>
                </div>
                <div class="row" style="margin-top: 35px;">
                    <?php if (!empty($recent)) { ?>
                        <?php foreach ($recent as $value) { ?>
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
</div>


<?php $this->load->view('footer'); ?>