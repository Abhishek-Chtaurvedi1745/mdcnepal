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
<!-- <div class="FixBtnMain"><a data-bs-toggle="modal" data-bs-target="#modalform-full" class="btn-main bg-btn1 btn-blue lnk btn-fixright" data-wow-delay=".6s">Book A Test<span class="circle"></span></a></div> -->
<?php include 'includes/header.php'; ?>
<!--End Header -->


<!--Start Hero
<section class="hero-creative-agenc1 banner-twostyle pt40 pb30"  data-background="images/bg-gradient.png">
	 <div class="text-block">
		<div class="container">
		   <div class="row">
				<div class="col-lg-6">
					<h1 class="wow fadeInUp h3 f-bold text-white" data-wow-delay=".2s">Pathology Blood Test </h1>
					<h4 class="text-white h6 fw-normal">Biochemistry | Allergy Testing | Hormonal Assays | Cytogenetics</h4>
					<p class="text-white f-normal">and many more tests at labs near you</p>
					<ul class="w-100 mt30 mb30 labsimg">
						<li class="text-center pe-3">
							<img src="images/certified-labs-white.svg" alt="" /><br/>
							<span>Certified Labs</span>
						</li>
						
						<li class="text-center pe-3">
							<img src="images/img-quality-white.svg" alt="" /><br/>
							<span>Assured Quality</span>
						</li>
						<li class="text-center pe-3">
							<img src="images/img-world-white.svg" alt="" /><br/>
							<span>Online Reports</span>
						</li>
						<li class="text-center pe-3">
							<img src="images/img-location-white.svg" alt="" /><br/>
							<span>Sample Pick Up</span>
						</li>
					</ul>
					<a href="#" class="btn-main bg-btn1 green-btn lnk wow fadeInUp text-uppercase" data-wow-delay=".6s">View Packages <span class="circle"></span></a>
				</div>
				<div class="col-lg-6">
					<div class="bannerSlide owl-carousel">
						<div class="items">
							<div class="col-12 p-0">
								<img src="images/MDRC-overview.jpg" alt="" />
							</div>
						</div>
						<div class="items">
							<div class="col-12 p-0">
								<img src="images/niramaya.jpg" alt="" />
							</div>
						</div>
						<div class="items">
							<div class="col-12 p-0">
								<img src="images/allergy-inhalation.jpg" alt="" />
							</div>
						</div>
					</div>
				</div>
		   </div>
		</div>
	 </div>
</section>-->
<!--End Hero-->




<!--slider-->
<?php if (count($this->rs_banner) > 0) { ?>
	<section class="moderSection">
		<div class="container-fluid">
			<div class="row">
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
		</div>
	</section>
<?php } ?>

<section class="hero-creative-agenc1 banner-twostyle pt10 pb10 main-bg-2 p-0">
	<div class="text-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<h2 class="wow fadeInUp fs-3 f-bold text-white" data-wow-delay=".2s">Pathology Blood Test</h2>

				</div>

				<div class="col-lg-9">
					<ul class="w-100 mt15 mb15 labsimg">
						<!-- <li class="text-center pe-3">
							<img src="images/certified-labs-white.svg" alt="" />
							<span>NABL Certified</span>
						</li> -->

						<!--<li class="text-center pe-3">
							<img src="images/img-quality-white.svg" alt="" />
							<span>Assured Quality</span>
						</li>-->
						<li class="text-center pe-3">
							<img src="images/img-world-white.svg" alt="" />
							<span>Online Reports</span>
						</li>
						<li class="text-center pe-3">
							<img src="images/img-location-white.svg" alt="" />
							<span>Home Sample Collection</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Hero-->

<!--End Hero-->
<!--<section id="" class="pt40 bg-f8f8f8">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <img src="images/info-skyblue.png" alt="">
        	</div>
        </div>
    </div>
</section>-->


<section id="packages" class="pb30 pt40 healthSection packages pathology-sec">
	<div class="container">
		<div class="row align-items-end section-title">
			<div class="col-lg-9 col-md-8 col-12">
				<div class="common-heading-2 text-start">
					<?php
					if ($this->areaName != '') {
						$this->areaName = $this->areaName . ' ';
					}
					?>
					<h1 class="mb20 ">Pathology Tests and Packages in <?= $this->areaName; ?> <?= $this->city_name ?></h1>
					<span>Home > Pathology Packages</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-12 text-end">
				<div class="sortby mb10">
					<select name="sort_order" id="sort_order" onchange="ChanegeSortOrder(this.value)">
						<option value="">Latest</option>
						<option value="name_a_z">Name (A - Z)</option>
						<option value="name_z_a">Name (Z - A)</option>
						<option value="price_l_h">Price (Low - High)</option>
						<option value="price_h_l">Price (High - Low)</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<hr class="line" />
			</div>
		</div>
		<div class="row mt20">
			<div class="col-lg-3 col-md-4 col-12 ">
				<div class="col-lg-12 col-md-12 col-12 FilterAccordion">
					<div class="accordion" id="accordionExample1">
						<div class="accordion-item border-0">
							<h2 class="accordion-header" id="heading-1">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapseOne">
									Filters <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="margin-left: 1rem; font-size: 20px;">
										<path fill-rule="evenodd" d="M4 7H3V2h1v5zm-1 7h1v-3H3v3zm5 0h1V8H8v6zm5 0h1v-2h-1v2zm1-12h-1v6h1V2zM9 2H8v2h1V2zM5 8H2c-.55 0-1 .45-1 1s.45 1 1 1h3c.55 0 1-.45 1-1s-.45-1-1-1zm5-3H7c-.55 0-1 .45-1 1s.45 1 1 1h3c.55 0 1-.45 1-1s-.45-1-1-1zm5 4h-3c-.55 0-1 .45-1 1s.45 1 1 1h3c.55 0 1-.45 1-1s-.45-1-1-1z"></path>
									</svg>
								</button>
							</h2>
							<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample1">
								<div class="accordion-body">
									<?php
									if ($_SESSION['getId'] > 0) {
										$filterDivMaster = '';
									} else {
										$filterDivMaster = 'style="display:none"';
									}
									?>
									<div class="col-md-12 filterDiv filterDivMaster pb-3 col-sm-12 mb30" <?= $filterDivMaster ?>>
										<h4>FILTERS</h4>
										<div class="row">
											<div class="col-md-12">
												<ul id="crnt-select">
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-12 filterDiv pb-3 col-sm-12 mb30 bg-light-white">
										<h4 class="text-dark ps-0">FILTER BY</h4>
										<?php
										if ($_SESSION['getId'] > 0) {
											$typeCheckID = '';
											$category_id = $_SESSION['getId'];
											$typeCheckID_array = array();
										} else {
											$typeCheckID = '1,2';
											$typeCheckID_array = explode(',', $typeCheckID);
											$category_ids = '';
										}
										?>
										<div class="btn-group-toggle d-flex flex-wrap gap-2 healthSection" data-toggle="buttons">
											<?php foreach ($this->rs_type as $type) {
												$id = $type['id'];
												$name = $type['name'];
												$isChecked = in_array($id, $typeCheckID_array);
											?>
												<input type="checkbox" class="toggleInput d-none" id="types<?= $id ?>" name="types[]" value="<?= $id ?>" <?= $isChecked ? 'checked' : '' ?>>
												<label class="btn custom-btn" for="types<?= $id ?>">
													<?= $name ?>
												</label>
											<?php } ?>
										</div>
									</div>


									<div class="col-md-12 filterDiv col-sm-12 mb30">
										<h4>TEST BY DISEASES </h4>
										<div class="row m-auto">
											<div class="col-lg-12 mb-4 mt-0 col-12 text-center">
												<input class="search-input" id="serach_input1" name="serach_input1" type="text" placeholder="Search" onkeyup="show_suggestion_diseases(this.value)">
											</div>
										</div>
										<div class="scrollbarDiv w-100 d-block diseasesDiv">
											<?php for ($i = 0; $i < count($this->rs_diseases); $i++) { ?>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck<?= $this->rs_diseases[$i]['id'] ?>" name="diseases[]" value="<?= $this->rs_diseases[$i]['id'] ?>" data-title="<?= $this->rs_diseases[$i]['name'] ?>">
													<label class="custom-control-label" for="customCheck<?= $this->rs_diseases[$i]['id'] ?>"><?= $this->rs_diseases[$i]['name'] ?></label>
												</div>
											<?php } ?>
										</div>
									</div>
									<div class="col-md-12 filterDiv col-sm-12 mb30">
										<h4>TEST CATEGORIES</h4>
										<div class="row m-auto">
											<div class="col-lg-12 mb-4 mt-0 col-12 text-center">
												<input class="search-input" id="serach_input2" name="serach_input2" type="text" placeholder="Search" onkeyup="show_suggestion_category(this.value)">
											</div>
										</div>
										<div class="scrollbarDiv w-100 d-block categoryDiv">
											<?php for ($i = 0; $i < count($this->rs_category); $i++) { ?>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheckCat<?= $this->rs_category[$i]['id'] ?>" name="category[]" value="<?= $this->rs_category[$i]['id'] ?>" data-title="<?= $this->rs_category[$i]['name'] ?>">
													<label class="custom-control-label" for="customCheckCat<?= $this->rs_category[$i]['id'] ?>"><?= $this->rs_category[$i]['name'] ?></label>
												</div>
											<?php } ?>
										</div>
									</div>
									<div class="col-md-12  col-sm-12 mb30 d-none">
										<a href="pathology/lab-blood-test-near/<?= $_SESSION['citySlug'] ?>" class="btn-main bg-grengradi lnk w-100">Pathology Packages <i class="fas fa-chevron-right fa-icon"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-8 col-12">
				<div class="row">
					<div class="col-lg-12 mb-4 col-12 text-center">
						<input class="search-input" id="serach_keyword" name="serach_keyword" type="text" placeholder="Find your Test and Packages" onkeyup="searchData(this.value)">
					</div>
				</div>
				<div class="row" id="results">
				</div>
				<div class="nonvalued">
					<input type="hidden" name="type_ids" id="type_ids" value="<?= $typeCheckID ?>">
					<input type="hidden" name="dieses_ids" id="dieses_ids" value="">
					<input type="hidden" name="category_ids" id="category_ids" value="<?= $category_ids ?>">
					<input type="hidden" name="sort_by" id="sort_by" value="">
					<input type="hidden" name="search_data" id="search_data" value="">
					<input type="hidden" name="city_id" id="city_id" value="<?= $this->city_id ?>">
					<input type="hidden" name="department_id" id="department_id" value="<?= $this->department_id ?>">
					<input type="hidden" name="total_data" id="total_data" value="0">
					<input type="hidden" name="pageType" id="pageType" value="<?= $this->pageType ?>">
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<button class="btn-main bg-btn1 main-bg-2 text-white lnk wow fadeInUp animation_image" id="l_more" align="center">Load More </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Why Choose Start  -->

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
<!-- Why Choose End  -->


<?php if ($this->rs_department['description'] != '') { ?>
	<section class="service why-service-sec pb60 pt40">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 block-1">
					<div class="common-heading text-l pl25">
						<div><?= $this->rs_department['description'] ?></div>
					</div>

				</div>
			</div>
		</div>
	</section>
<?php } ?>


<section class="pb60 pt40 testsbyCondition bg-bluegradient condition-tests-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading-2">
					<h2 class="mb30 text-white">Health Tests by Condition</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="logo-weworkfor condition-tests-slider owl-carousel">
					<?php for ($i = 0; $i < count($this->rs_diseases); $i++) {
						$name = $this->rs_diseases[$i]['name'];
						$image = $this->rs_diseases[$i]['image'];
						$slug = $this->rs_diseases[$i]['slug'];
						$folder = 'item_diseases';
						$item_diseases_img = $this->utility->get_disease_icon_path($image, $folder, "large", $slug, $name);
						$url = SERVER_ROOT . '/diseases/' . $_SESSION['citySlug'] . '/' . $slug . '';
					?>
						<div class="items"><a href="<?= $url ?>">
								<div class="imgDiv"><img src="<?= $item_diseases_img ?>" alt="<?= $name ?>"></div><span class="condition-item-label text-white"><?= $name ?></span>
							</a></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Faqs-->
<section class="pt40 pb50 faqSection">
	<div class="container">
		<?php if (count($this->rs_faq_data) > 0) { ?>
			<div class="row ">
				<div class="col-lg-6 col-md-6 mt15">
					<img src="images/img-faq.jpg" alt="image" class="img-fluid rounded-cust">
				</div>
				<div class="col-md-6 col-md-6 mt-3 mt-lg-0 mt-md-0">
					<div class="common-heading-2 text-start">
						<h2 class="mb20">Frequently Asked Questions</h2>
					</div>
					<div class="accordion" id="accordionExample">
						<?php for ($i = 0; $i < count($this->rs_faq_data); $i++) { ?>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading-1<?= $i; ?>">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1<?= $i; ?>" aria-expanded="false" aria-controls="collapseOne">
										<?= $this->rs_faq_data[$i]['question'] ?>
									</button>
								</h2>
								<div id="collapse-1<?= $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading-1<?= $i; ?>" data-bs-parent="#accordionExample">
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
		<?php } ?>
	</div>
</section>
<!--End Faqs-->
<section class=" pt60 testimonials  testimonial-bg pb20">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="  col-md-12">
				<div class="common-heading-2">
					<h3 class="mb0 main-heading-1">What People Say About Us</h2>
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

<section class="homelinks">
	<div class="container-fluid">
		<div class="row">
			<?php if (count($this->rs_area) > 0) { ?>
				<div class="col-lg-12 col-sm-12 pb50 pt50 bg-light text-center">
					<h6 class="fw-semibold mb20">Lab Tests Near You</h6>
					<?php for ($i = 0; $i < count($this->rs_area); $i++) { ?>
						<a href="pathology/lab-blood-test-near/<?= $_SESSION['citySlug'] ?>/<?= $this->rs_area[$i]['slug'] ?>" class="tags">Lab Test In <?= $this->rs_area[$i]['name'] ?></a>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- faq -->


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
<script src='https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async=""></script>
<script>
	< div class = "btn-group-toggle ..." > ... < /div>
</script>


<?php include 'includes/general_data.php'; ?>