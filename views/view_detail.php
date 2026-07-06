<!--plugin-css-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/plugin.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- template-style-->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!-- Bootstrap Select -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css'>
<link href="css/custom.css" rel="stylesheet">
<style>
   .dis-text {
      color: #E8603E !important;
   }

   .shop-products-bhv .right-cart .need-help .subtext {
      color: #E8603E !important;

   }
</style>
<!--Start Header -->
<?php include 'includes/header.php'; ?>
<!--End Header -->
<section class="hero-creative-agenc1 banner-twostyle" data-background="images/cart-banner.jpg" style="background-image: url('images/cart-banner.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
   <div class="text-block">
      <div class="container">

      </div>
   </div>
</section>
<!--Start Hero-->
<section class="shop-products-bhv package-details  pt60 pb60 bg-white">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 shadow-box mb-5">
            <div class="row">
               <div class="col-lg-12">
                  <h1 class="main-heading-1 mb20"><?= $this->rs_data['name'] ?> in <?= $this->city_name ?></h1>
                  <p class="subhead"><span><strong><?= $this->rs_data['test_count'] ?> Tests</strong></span></p>
                  <?php if (count($this->rs_package_data) > 0) {
                     $pName = array();
                     for ($i = 0; $i < count($this->rs_package_data); $i++) {
                        $pName[] = $this->rs_package_data[$i]['item_description_item_name'];
                     }
                  ?>
                     <p class="mt20 mb40" style="display:none"><?= implode(', ', $pName) ?></p>
                  <?php } ?>
                  <?php if (count($this->rs_key_fetures_data) > 0) { ?>
                     <div class="col-lg-12 item-key-features mb-2 mt-4">
                        <div class="row">
                           <?php for ($i = 0; $i < count($this->rs_key_fetures_data); $i++) {
                              $folder = 'item_key_fetures';
                              $item_key_fetures_img = $this->utility->get_image_path($this->rs_key_fetures_data[$i]['image'], $folder, "large");
                           ?>
                              <div class="col-lg-4 col-sm-12 wow fadeIn item-key-features-item" data-wow-delay="0.3s">
                                 <div class="industry-workfor hoshd">
                                    <img src="<?= $item_key_fetures_img ?>" alt="img">
                                    <div class="item-key-features-item-desc">
                                       <h6><?= $this->rs_key_fetures_data[$i]['name']; ?></h6>
                                       <p><?= $this->rs_key_fetures_data[$i]['subtext']; ?></p>
                                    </div>
                                 </div>
                              </div>
                           <?php } ?>
                        </div>
                     </div>
                  <?php } ?>

               </div>
            </div>
            <div class="row mb10">
               <div class="col-lg-12">
                  <hr />
               </div>
            </div>
            <div class="row mt10 ">
               <div class="col-lg-12 ">
                  <div class="accordion" id="package-details-accordion">
                     <?php if ($this->rs_data['item_other_data_description'] != '') { ?>
                        <h2 class="mb-2 mt-4 fs-5 fw-bold">Description</h2>
                        <p class="text-202024 font-weight-normal tx-14"><?= $this->rs_data['item_other_data_description'] ?>
                        <p>
                        <?php } ?>
                        <?php if ($this->rs_data['item_other_data_item_department_ids'] == 1) {
                           $test_parameter_heading = 'Test Remark';
                        } else {
                           $test_parameter_heading = 'Test Parameters';
                        } ?>
                        <h3 class="mb-2 mt-4 fs-5 fw-bold"> <?= $test_parameter_heading; ?></h3>
                        <?php if ($this->rs_data['item_other_data_item_type_id'] == 1) { ?>
                           <?php for ($i = 0; $i < count($this->rs_package_data); $i++) { ?>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="package-details-<?= $i ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-detail-<?= $i ?>" aria-expanded="false" aria-controls="collapseOne">
                                       <?= $this->rs_package_data[$i]['item_description_item_name'] ?>
                                    </button>
                                 </h2>
                                 <div id="collapse-detail-<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="heading-detail-<?= $i ?>" data-bs-parent="#package-details-accordion" style="">
                                    <div class="accordion-body">
                                       <div class="data-reqs">
                                          <?php if ($this->rs_package_data[$i]['item_description_sample_remark'] != '') { ?>
                                             <p> <strong>Sample Remark</strong> : <?= $this->rs_package_data[$i]['item_description_sample_remark'] ?></p>
                                          <?php } ?>
                                          <?php if ($this->rs_package_data[$i]['item_description_sample_type_name'] != '') { ?>
                                             <p> <strong>Sample Type</strong> : <?= $this->rs_package_data[$i]['item_description_sample_type_name'] ?></p>
                                          <?php } ?>
                                          <?php if ($this->rs_package_data[$i]['item_description_sample_remark1'] != '') { ?>
                                             <p> <strong>Sample Remark1</strong> : <?= $this->rs_package_data[$i]['item_description_sample_remark1'] ?></p>
                                          <?php } ?>
                                          <?php if ($this->rs_package_data[$i]['item_description_test_parameters'] != '') { ?>
                                             <div> <strong>Test Parameters</strong> : <?= $this->rs_package_data[$i]['item_description_test_parameters'] ?></div>
                                          <?php } ?>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           <?php } ?>
                        <?php } else { ?>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="package-details-1">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-detail-1" aria-expanded="false" aria-controls="collapseOne">
                                    <?= $this->rs_data['item_description_item_name'] ?>
                                 </button>
                              </h2>
                              <div id="collapse-detail-1" class="accordion-collapse collapse" aria-labelledby="heading-detail-1" data-bs-parent="#package-details-accordion" style="">
                                 <div class="accordion-body">
                                    <div class="data-reqs">
                                       <?php if ($this->rs_data['item_description_sample_remark'] != '') { ?>
                                          <p> <strong>Sample Remark</strong> : <?= $this->rs_data['item_description_sample_remark'] ?></p>
                                       <?php } ?>
                                       <?php if ($this->rs_data['item_description_sample_type_name'] != '') { ?>
                                          <p> <strong>Sample Type</strong> : <?= $this->rs_data['item_description_sample_type_name'] ?></p>
                                       <?php } ?>
                                       <?php if ($this->rs_data['item_description_sample_remark1'] != '') { ?>
                                          <p> <strong>Sample Remark1</strong> : <?= $this->rs_data['item_description_sample_remark1'] ?></p>
                                       <?php } ?>
                                       <?php if ($this->rs_data['item_description_test_parameters'] != '') { ?>
                                          <div> <strong>Test Parameters</strong> : <?= $this->rs_data['item_description_test_parameters'] ?></div>
                                       <?php } ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php } ?>


                        <?php if ($this->rs_data['item_other_data_reporting_time'] != '') { ?>
                           <h2 class=" mt-4 fs-5 fw-bold">Reporting Time</h2>
                           <p class="text-202024 font-weight-normal tx-14"><?= $this->rs_data['item_other_data_reporting_time'] ?>
                           <p>
                           <?php } ?>

                           <?php if ($this->rs_data['item_other_data_specimen'] != '') { ?>
                           <h2 class=" mt-4 fs-5 fw-bold">Specimen</h2>
                           <p class="text-202024 font-weight-normal tx-14"><?= $this->rs_data['item_other_data_specimen'] ?>
                           <p>
                           <?php } ?>


                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 right-cart">
            <div class="cart-extra-sevc div-for-data-removed">
               <div class="cart-extra-sevc div-for-data border-0 ps-0 d-flex mb-0 pb-1 pe-0 pt-1 shadow-none">
                  <div class="col-lg-6 prdiv p-0">
                     <?php
                     $priceDetail = $this->rs_data['item_price_price'];
                     $mrpDetail = $this->rs_data['item_price_mrp'];
                     $sch_price = $this->rs_data['item_price_sch_price'];
                     $sch_start_date = $this->rs_data['item_price_sch_start_date'];
                     $sch_end_date = $this->rs_data['item_price_sch_end_date'];
                     if ($sch_price > 0 && $sch_start_date != '' && $sch_end_date != '') {
                        $today_date = date('d-m-Y');
                        $todaySlot = strtotime($today_date);
                        $startSlot = strtotime($sch_start_date);
                        $endSlot = strtotime($sch_end_date);
                        if ($todaySlot >= $startSlot && $todaySlot <= $endSlot) {
                           $priceDetail = $sch_price;
                        }
                     }
                     $price_html = $this->utility->detailpackagePrice2025($this->rs_data['id'], $priceDetail, $mrpDetail);
                     echo $price_html;
                     ?>
                  </div>
                  <div class="col-lg-6">
                     <div class="pr_<?= $this->rs_data['id'] ?>">
                        <?php if (in_array($this->rs_data['id'], $_SESSION['cartitemIds'])) { ?>
                           <a href="cart" class="btn-main bg-btn1 btn-blue checkout-btn lnk w-100 mb-1 alreadyInCart">Schedule and Book <i class="fas fa-chevron-right fa-icon fa-ani"></i></a>
                        <?php } else { ?>
                           <button type="button" class="btn-main bg-btn1 btn-blue checkout-btn lnk w-100 mb-1 addToClass" onclick="addtocart('<?= $this->rs_data['id'] ?>','<?= $this->rs_data['item_price_id'] ?>')">Add to Cart <i class="fas fa-chevron-right fa-icon fa-ani"></i></button>
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <div class="d-flex mt-2 justify-content-between">
                  <?php
                  $mrpB = $this->utility->detailPriceMrp2025($this->rs_data['id'], $priceDetail, $mrpDetail);
                  $discB = $this->utility->detailPriceDis2025($this->rs_data['id'], $priceDetail, $mrpDetail);
                  if ($mrpDetail > 0) {
                     echo $mrpB;
                     echo $discB;
                  }
                  ?>
               </div>

            </div>
            <div class="col-lg-12 need-help">
               <h4 class="fs-5 tx-thm d-flex aligm-items-center mb-3 fw-bold"><img src="images/need-help.png" class="float-start cto me-2"> Need help with booking your test? </h4>
               <span class="subtext d-inline-block w-100" style="color : #000000 !important">Our experts are here to help you</span>
               <a href="tel:977 9801081735" class="call-icon"><i class="fas fa-phone-alt"></i> +977 9801081735</a>
               <span class="subtext d-inline-block w-100 mt-3" style="color : #000000 !important">WhatsApp Chat with Us</span>
               <a href="https://wa.me/9801081735?text=Hello :) Thank you for contacting Modern Diagnostic Nepal Pvt. ltd . How can we help you please?" target="_blank" class="whatsapp-icon"><i class="fab fa-whatsapp"></i> +977 9801081735
               </a>
            </div>
            <div class="cart-extra-sevc div-for-data-removed mt-4">
               <h6 class="fs-5 mb-2 pb-1 fw-bold tx-thm">Add More Tests to Your Selection</h6>
               <span class="d-block fs-14 mb20">*Prices cover all taxes and fees, subject to availability.</span>

               <div class="row  cart-quick-links">
                  <div class="col-lg-12"><b><a href="lab/blood-test/<?= $_SESSION['citySlug']; ?>" class="text-202024 btn-main bg-btn1 btn-blue">+ Add Other Test</a></b></div>
               </div>
            </div>

            <?php if (count($this->rs_banner) > 0) { ?>
               <div class="col-lg-12 mt-2">
                  <div class="bannerSlide owl-carousel" style="padding:0px; margin:0px">
                     <?php for ($i = 0; $i < count($this->rs_banner); $i++) {
                        $folder = 'main_banner_images';
                        $image = $this->utility->get_image_path($this->rs_banner[$i]['banner_image'], $folder, "large");
                        $url = 'javascript:void(0)';
                        if ($this->rs_banner[$i]['banner_link'] != '') {
                           $url = $this->rs_banner[$i]['banner_link'];
                        }
                     ?>
                        <div class="items">
                           <div class="col-12 p-0">
                              <a href="<?= $url ?>"><img src="<?= $image ?>" alt="banner" /></a>
                           </div>
                        </div>
                     <?php } ?>
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
   </div>
</section>

<!-- Why Choose Start  -->


<section class="why-choose-usearea">
   <div class="container">
      <!-- Hide on mobile, show on desktop -->
      <div class="row justify-content-center align-items-center d-none d-md-flex">
         <div class="col-md-12 mb-5">
            <div class="common-heading-2">
               <h3 class="main-heading-1">
                  Book Your Health Test With MDC Nepal
               </h3>
            </div>
         </div>
         <div class="col-md-3 mb-3 mb-md-0 text-center">
            <img src="images/why-choose/1.png" alt="" class="">
         </div>
         <div class="col-md-3 mb-3 mb-md-0 text-center">
            <img src="images/why-choose/3.png" alt="" class="">
         </div>
         <div class="col-md-3 mb-3 mb-md-0 text-center">
            <img src="images/why-choose/2.png" alt="" class="">
         </div>
      </div>

      <!-- Show only on mobile -->
      <div class="row justify-content-center align-items-center d-md-none">
         <div class="col-md-12 mb-5">
            <div class="common-heading-2">
               <h3 class="main-heading-1">
                  Book Your Health Test With MDC Nepal
               </h3>
            </div>
         </div>
         <div class="col-12 text-center">
            <img src="images/why-choose/mobile.jpg" alt="" class="">
         </div>
      </div>


   </div>
</section>
<!-- Why Choose End  -->
<section class="pt20 pb30 faq-sec bg-white">
   <div class="container">
      <div class="row justify-content-center">
         <?php if (count($this->rs_faq_data) > 0) { ?>
            <div class="col-lg-10 test-detail-faq bg-white mt20 shop-products-bhv cart-extra-sevc ">
               <h4 class="main-heading-1 mb10 text-center">Frequently Asked Questions about <?= $this->rs_data['name'] ?></h4>
               <div class="accordion" id="accordionExample">
                  <?php foreach ($this->rs_faq_data as $faq) { ?>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-<?= $faq['id'] ?>">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $faq['id'] ?>" aria-expanded="false" aria-controls="collapseOne"><?= $faq['question'] ?></button>
                        </h2>
                        <div id="collapse-<?= $faq['id'] ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?= $faq['id'] ?>" data-bs-parent="#accordionExample" style="">
                           <div class="accordion-body">
                              <div class="data-reqs">
                                 <p><?= $faq['answer'] ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php }; ?>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
</section>
<!--Start Footer -->
<?php include 'includes/footer.php'; ?>
<!--End Footer -->
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/plugin.min.js"></script>
<script src="js/preloader.js"></script>
<script src="js/jquery.lazy.min.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js'></script>
<?php include 'includes/general_data.php'; ?>