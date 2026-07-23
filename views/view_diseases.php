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
<link href="css/custom.css" rel="stylesheet">
<!--Start Header -->
<?php include 'includes/header.php';?>
<!--End Header -->
<!--Start Hero-->

<!--End Hero-->
<section class="hero-creative-agenc1 banner-twostyle pt10 pb10"  data-background="images/radiology-bg.png">
	<div class="text-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1 class="wow fadeInUp h3 f-bold text-white" data-wow-delay=".2s"><?=$this->data_name?> Test & Package Cost In <?=$this->city_name?></h1>
					
				</div>
				
			</div>
		</div>
	</div>
</section>
<!--End Hero-->
<!--slider-->
<?php if(count($this->rs_banner)>0){ ?>
<section class="moderSection">
	<div class="container-fluid">
		<div class="row">
			<div class="bannerSlide owl-carousel" style="padding:0px; margin:0px">
				<?php for($i=0;$i<count($this->rs_banner);$i++){
					$folder='main_banner_images';
					$image=$this->utility->get_image_path($this->rs_banner[$i]['banner_image'],$folder,"large");
					$url='javascript:void(0)';
					if($this->rs_banner[$i]['banner_link']!='')
					{
						$url=$this->rs_banner[$i]['banner_link'];
					}
				?>
				<div class="items">
					<div class="col-12 p-0">
						<a href="<?=$url?>"><img src="<?=$image?>" alt="Banner" /></a>
					</div>
				</div>
				<?php } ?>
				
				<?php for($i=0;$i<count($this->item_diseases_banner);$i++){
					$folder='item_diseases_banner';
					$image=$this->utility->get_image_path($this->item_diseases_banner[$i]['banner_image'],$folder,"large");
					$url='javascript:void(0)';
					if($this->item_diseases_banner[$i]['banner_link']!='')
					{
						$url=$this->item_diseases_banner[$i]['banner_link'];
					}
				?>
				<div class="items">
					<div class="col-12 p-0">
						<a href="<?=$url?>"><img src="<?=$image?>" alt="Banner" /></a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<!--End Hero-->

<section class="pb30 pt40 healthSection packages">
	<div class="container">
		<div class="row align-items-end section-title">
			<div class="col-lg-6 col-md-8 col-12">
				<div class="common-heading-2 text-start">
					<h2 class="mb20 "><?=$this->data_name?> Tests/Packages</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-4 col-12 text-end">
				
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<hr class="line"/>
			</div>
		</div>
		<div class="row mt20">
			
			
			<div class="col-lg-12 col-md-12 col-12">
				<div class="row">
					<div class="col-lg-12 mb-4 col-12 text-center">
						<input class="search-input" id="serach_keyword" name="serach_keyword" type="text" placeholder="Find your Test/Package/Scan" onkeyup="searchData(this.value)">
					</div>
				</div>
				<div class="row" id="results">
					
					
					
					
					
					
					
					
					
					
					
					
				</div>
				<div class="nonvalued">
					<input type="hidden" name="type_ids" id="type_ids" value="">
					<input type="hidden" name="dieses_ids" id="dieses_ids" value="<?=$this->data_id?>">
					<input type="hidden" name="category_ids" id="category_ids" value="">
					<input type="hidden" name="sort_by" id="sort_by" value="">
					<input type="hidden" name="search_data" id="search_data" value="">
					<input type="hidden" name="city_id" id="city_id" value="<?=$this->city_id?>">
					<input type="hidden" name="department_id" id="department_id" value="<?=$this->department_id?>">
					<input type="hidden" name="total_data" id="total_data" value="0">
					<input type="hidden" name="pageType" id="pageType" value="<?=$this->pageType?>">
					
				</div>
				
				
				<div class="row">
					
					<div class="col-lg-12 loaderDiv d-none" style="text-align:center">
						<img src="images/loader.gif">
						
					</div>
					<div class="col-lg-12 " style="text-align:center">
						<button class="btn-main bg-btn1 bg-grengradi text-white lnk wow fadeInUp animation_image" id="l_more" align="center"  style="display:none">Load More</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<?php if($this->disease_read_more['preview']!=''){?>
<section class="service why-service-sec  pad-tb pt40">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 block-1">
				<div class="common-heading text-l pl25">
					<div class="disease-description-wrap">
						<?php if($this->disease_read_more['has_more']){ ?>
						<div class="disease-description-preview"><?=$this->disease_read_more['preview']?></div>
						<div class="disease-description-full d-none"><?=$this->disease_read_more['full']?></div>
						<a href="javascript:void(0)" class="disease-read-more">Read More</a>
						<?php } else { ?>
						<div><?=$this->disease_read_more['preview']?></div>
						<?php } ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<?php }?>
<!--start Faqs-->
<?php if (count($this->rs_faq_data) > 0) { ?>
<section class="pt40 pb50 faqSection">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6 col-md-6 mt15">
				<img src="images/img-faq.png" alt="image" class="img-fluid rounded-cust">
			</div>
			<div class="col-md-6 col-md-6 mt-3 mt-lg-0 mt-md-0">
				<div class="common-heading-2 text-start">
					<h2 class="mb20">Pathology Packages FAQ</h2>
				</div>
				<div class="accordion" id="accordionExample">
					<?php for ($i = 0; $i < count($this->rs_faq_data); $i++) { ?>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-1">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapseOne">
							<?= $this->rs_faq_data[$i]['question'] ?>
							</button>
						</h2>
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="data-reqs">
									<p><?= $this->rs_faq_data[$i]['answer'] ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<!-- end faq -->

<section class="why-choose-usearea pt60 pb70">
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

<section class="pb60 pt40 testsbyCondition bg-bluegradient">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading-2">
                    <h2 class="mb30 text-white">Tests by Condition</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
				<div class="logo-weworkfor owl-carousel">
                <?php for($i=0;$i<count($this->all_diseases);$i++){
					  $name=$this->all_diseases[$i]['name'];
					  $image=$this->all_diseases[$i]['image'];
					  $slug=$this->all_diseases[$i]['slug'];
					  $folder='item_diseases';
					  $item_diseases_img=$this->utility->get_image_path($image,$folder,"large");
					  $url=SERVER_ROOT.'/diseases/'.$_SESSION['citySlug'].'/'.$slug.'';
					  ?>
				  <div class="items"><a href="<?=$url?>"><div class="imgDiv"><img src="<?=$item_diseases_img?>" alt="<?=$name?>" class=""></div><br/><span class="text-white"><?=$name?></span></a></div>
                  <?php }?>
				</div>
			</div>
        </div>
    </div>
</section>

<section class=" pt70 testimonials  testimonial-bg pb70">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-lg-4  col-md-7">
                <div class="common-heading-2">
                    <h3 class="mb0 main-heading-1">What Our Client Say</h2>
                        <!--<p class="text-101010">Lorem ipsum is a placeholder text commonly </p>-->
                </div>
            </div>
        </div>
        <?php if (count($this->rs_testimonial) > 0) { ?>
            <div class="row normal position-relative">
                <div class="col-md-12 p-0 mt20">
                    <div class="niwax-review-slider owl-carousel center-dots  testimonial-slider-bg">
                        <?php for ($i = 0; $i < count($this->rs_testimonial); $i++) {
                            $image = $this->utility->get_image_path($this->rs_testimonial[$i]['image'], 'testimonial', 'large');
                        ?>
                            <div class="reviews-card pr-shadow  mb100">
                                <div class="review-text text-center">
                                    <div class="col mb-3"> <span class="revbx-lr"><img src="images/img-quote.png"
                                                alt="quote" /></span> </div>
                                    <p>
                                        <?= $this->rs_testimonial[$i]['content'] ?>
                                    </p>
                                </div>
                                <div class="-client-details- d-flex flex-column text-center">
                                    <div class="-reviewr mx-auto">
                                        <img src="<?= $image ?>" alt="<?= $this->rs_testimonial[$i]['name'] ?>"
                                            class="img-fluid">
                                    </div>
                                    <div class="reviewer-text">
                                        <h4 class="tx-main">
                                            <?= $this->rs_testimonial[$i]['name'] ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="owl-theme">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>


<!--Start Footer -->
<?php include 'includes/footer.php';?>
<!--End Footer -->
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/plugin.min.js"></script>
<script src="js/preloader.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js'></script>
<script>
$(document).on('click', '.disease-read-more', function(e) {
	e.preventDefault();
	var $link = $(this);
	var $wrap = $link.closest('.disease-description-wrap');
	var isExpanded = $wrap.hasClass('is-expanded');

	if (isExpanded) {
		$wrap.removeClass('is-expanded');
		$wrap.find('.disease-description-preview').removeClass('d-none');
		$wrap.find('.disease-description-full').addClass('d-none');
		$link.text('Read More');
	} else {
		$wrap.addClass('is-expanded');
		$wrap.find('.disease-description-preview').addClass('d-none');
		$wrap.find('.disease-description-full').removeClass('d-none');
		$link.text('Read Less');
	}
});
</script>
<?php include 'includes/general_data.php';?>