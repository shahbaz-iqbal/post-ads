<?php $this->load->view('header') ?>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Register</h1>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>  

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 mb-5"  data-aos="fade">


                <div class="row">
                    <div class="col-sm-12">
                        <?php if ($this->session->flashdata('add')) { ?>
                            <p class="alert alert-success"><?php echo $this->session->flashdata('add'); ?></p>
                        <?php } else if ($this->session->flashdata('error')) { ?>
                            <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <form action="<?php echo base_url('welcome/user_register'); ?>" method="post" class="p-5 bg-white">

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label> 
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Password</label> 
                            <input type="password" name="pass" id="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Re-type Password</label> 
                            <input type="password" name="pass" id="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-12">
                            <p>Have an account? <a href="<?php echo base_url('Welcome/login'); ?>">Log In</a></p>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>

<?php $this->load->view('footer') ?>