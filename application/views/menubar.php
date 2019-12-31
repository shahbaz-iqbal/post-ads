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

    <div class="row align-items-stretch no-gutters thenHide" id="hide">
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