<?php $this->load->view('header'); ?>
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo base_url('assets/images/hero_1.jpg'); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Search Ads</h1>
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
         <div class="row mb-5" style="padding: 50px;">
                <div class="col-md-7 text-left border-primary">
                    <h2 class="font-weight-light text-primary">
                       <?php if (!empty($data)) { ?>
                      <?php echo $data[0]->category; ?>
                       <?php } ?>
                    </h2>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table list-wrapper">
                    <?php foreach($data as $dt) { ?>
                    <tr class="list-item">
                        <td>
                            <div class="listing-item-content">
                                <!--<a class="px-3 mb-3 category" href="<?php echo base_url(); ?>category/vehical_detail/<?php echo $dt->id; ?>"><?php echo $dt->category; ?></a>-->
                                <h4 class="mb-1"><a href="<?php echo base_url(); ?>category/vehical_detail/<?php echo $dt->id; ?>"><?php echo $dt->sub_category; ?></a></h4>
                                <span class="address"><?php echo $dt->address; ?></span>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                   
                </table>
                <div id="pagination-container"></div>
            </div>
             
        </div>

    </div>
</div>


<?php $this->load->view('footer'); ?>
<script>
var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 8;

    items.slice(perPage).hide();

    $('#pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "&laquo;",
        nextText: "&raquo;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        }
    });
</script>