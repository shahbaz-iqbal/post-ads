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


        <div class="site-section" style="padding: 0px;">
            <div class="row mb-5" style="padding: 50px;">
                <div class="col-md-7 text-left border-primary">
                    <h2 class="font-weight-light text-primary">
                       <?php if (!empty($data)) { ?>
                      <?php echo $data[0]->category; ?>
                       <?php } ?>
                    </h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="row list-wrapper" id="myDIV">
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $value) { ?>
                                    <div class="col-lg-6 list-item">

                                        <div class="d-block d-md-flex listing vertical">
                                           <a href="<?php echo base_url(); ?>category/vehical_detail/<?php echo $value->id; ?>" class="img d-block" style=" background-image: url(<?php echo base_url(); ?>assets/images/post_img/<?php echo $value->file; ?>)"height: 193;></a>
<!--<img src="<?php echo base_url(); ?>assets/images/post_img/<?php echo $value->file; ?>" alt="Image" class="img-fluid" style="height: 190px; width:100%;">  <a href="<?php echo base_url(); ?>category/vehical_detail/<?php echo $value->id; ?>" class="img d-block" style="background-image: url(<?php echo base_url(); ?>assets/images/post_img/<?php echo $value->file; ?>)"></a>-->
                                            <div class="lh-content">
                                                <span class="category a"><?php echo $value->sub_category; ?></span>
                                                <h3><a href="<?php echo base_url(); ?>category/vehical_detail/<?php echo $value->id; ?>"><?php echo $value->title; ?></a></h3>
                                                <address><?php echo $value->address; ?></address>
                                                <p class="mb-0">
                                                    <span class="icon-star text-warning"></span>
                                                    <span class="icon-star text-warning"></span>
                                                    <span class="icon-star text-warning"></span>
                                                    <span class="icon-star text-warning"></span>
                                                    <span class="icon-star text-secondary"></span>
                                                    <span class="review"></span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="custom-pagination">
                            <?php echo $pagination; ?>
                        </div>
                        
                        
<!--                        <div class="col-12 mt-5 text-center">
                             
                            <div id="pagination-container" class="custom-pagination">
                                <span>1</span>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span class="more-page">...</span>
                                <a href="#">10</a>
                            </div>
                                
                        </div>-->

                    </div>
                    <div class="col-lg-3 ml-auto">

                        <div class="mb-5">
                            <h3 class="h5 text-black mb-3">Filters</h3>
                            <form action="<?php echo base_url(); ?>Category/personal" method="post" id="personal">
                                 <input type="hidden" name="search_type" id="search_type" value="1" />
                                <div class="form-group">
                                    <input type="text" name="search" placeholder="What are you looking for?" class="form-control" >
                                </div>
<!--                                <div class="form-group">
                                    <div class="select-wrap">
                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                        <select class="form-control" name="" id="selected">
                                            <option value="">All Categories</option>
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
                                </div>-->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-submit">Search</button>
                                      <button type="button" class="btn btn-success btn-submit" onclick="reset_search()" >Reset</button>
                                </div>
<!--                                <div class="form-group">
                                    <div class="select-wrap">
                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                        <select class="form-control" name="" id="location">
                                            <option value="">All Location</option>
                                            <option value="bwp">Apartments</option>
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
                                </div>-->
<!--                                <div class="form-group">
                                     select-wrap, .wrap-icon 
                                    <div class="wrap-icon">
                                        <span class="icon icon-room"></span>
                                        <input type="text" placeholder="Location" class="form-control">
                                    </div>
                                </div>-->
                            </form>
                        </div>
<!--
                        <div class="mb-5">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <p>Radius around selected destination</p>
                                </div>
                                <div class="form-group">
                                    <input type="range" min="0" max="100" value="20" data-rangeslider>
                                </div>
                            </form>
                        </div>

                        <div class="mb-5">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <p>Category 'Real Estate' is selected</p>
                                    <p>More filters</p>
                                </div>
                                <div class="form-group">
                                    <ul class="list-unstyled">
                                        <li>
                                            <label for="option1">
                                                <input type="checkbox" id="option1">
                                                Residential
                                            </label>
                                        </li>
                                        <li>
                                            <label for="option2">
                                                <input type="checkbox" id="option2">
                                                Commercial
                                            </label>
                                        </li>
                                        <li>
                                            <label for="option3">
                                                <input type="checkbox" id="option3">
                                                Industrial
                                            </label>
                                        </li>
                                        <li>
                                            <label for="option4">
                                                <input type="checkbox" id="option4">
                                                Land
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>

                        <div class="mb-5">
                            <h3 class="h6 mb-3">More Info</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem placeat facilis, reprehenderit eius officiis.</p>
                        </div>-->

                    </div>

                </div>
            </div>
        </div>



    </div>
</div>


<?php $this->load->view('footer'); ?>
<script>
//$(document).ready(function(){
//  $("#myInput").on("keyup", function() {
//    var value = $(this).val().toLowerCase();
//    $("#myDIV *").filter(function() {
//      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//    });
//  });
//});
</script>
<script>
//$(document).ready(function(){
//  $("#selected").on("change", function() {
//    var value = $(this).val().toLowerCase();
//    $("#myDIV *").filter(function() {
//      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//    });
//  });
//});
</script>
<script>
//$(document).ready(function(){
//  $("#location").on("change", function() {
//    var value = $(this).val().toLowerCase();
//    $("#myDIV *").filter(function() {
//      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//    });
//  });
//});
</script>
<script>
// jQuery Plugin: http://flaviusmatis.github.io/simplePagination.js/

//var items = $(".list-wrapper .list-item");
//    var numItems = items.length;
//    var perPage = 4;
//
//    items.slice(perPage).hide();
//
//    $('#pagination-container').pagination({
//        items: numItems,
//        itemsOnPage: perPage,
//        prevText: "&laquo;",
//        nextText: "&raquo;",
//        onPageClick: function (pageNumber) {
//            var showFrom = perPage * (pageNumber - 1);
//            var showTo = showFrom + perPage;
//            items.hide().slice(showFrom, showTo).show();
//        }
//    });
</script>
<script>
function reset_search() {
    $('#search_type').val('0');
    $('#personal').submit();
}
</script>