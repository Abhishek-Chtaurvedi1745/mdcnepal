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



<?php include 'includes/header.php'; ?>



<!--End Header -->





<!--Breadcrumb Area-->

<section class="doctor-creative-agenc1 banner-twostyle" data-background="images/our-team-mdc.png" style="background-image: url(&quot;images/our-team-mdc.png&quot;);">
	<div class="text-block">
		<div class="container">
		</div>
	</div>
</section>

<!--End Breadcrumb Area-->



<!--End Hero-->

<!--Start Team Leaders-->


<section class="team pad-tb  pb-0 our-team">

	<div class="container">

		<div class="row align-items-center justify-content-center mb-4">
			<div class="col-md-8 text-center">
				<div class="common-heading-2">
					<h3 class="mb20 main-heading-1">MEET OUR TEAM</h3>
					<p class="text-center">At Modern Diagnostic Center (MDC) Nepal, our dedicated team comprises skilled pathologists, laboratory scientists, trained technicians, and experienced phlebotomists.
						Together, they ensure the delivery of accurate, reliable, and timely diagnostic results.
						Adhering to strict ISO-certified protocols, we utilize advanced diagnostic technology
						to maintain the highest standards in pathology services. Our professionals are committed to precision and efficiency, from sample collection to report generation,
						ensuring every test is handled with utmost care.

					</p>
				</div>

			</div>
		</div>


		<div class="row justify-content-center text-center">



			<?php for ($i = 0; $i < count($this->rs_doctor); $i++) {

				$image = $this->utility->get_image_path($this->rs_doctor[$i]['image'], 'doctor', 'large');

			?>

				<div class="col-lg-3 col-sm-6 mb30 ">

					<div class="full-image-card pb-4  up-hor">

						<div class="image-div shadow-none"><img src="<?= $image ?>" alt="<?= $this->rs_doctor[$i]['name'] ?>" class="img-fluid" /></div>

						<div class="info-text-block">

							<h4><?= $this->rs_doctor[$i]['name'] ?></h4>

							<?php if ($this->rs_doctor[$i]['doctor_category_name'] != '') { ?>
								<p><?= $this->rs_doctor[$i]['doctor_category_name'] ?></p>
							<?php }
							if ($this->rs_doctor[$i]['designation'] != '') { ?>
								<p><?= $this->rs_doctor[$i]['designation'] ?></p>
							<?php } ?>
							<span><?= $this->rs_doctor[$i]['about_info'] ?></span>

						</div>

					</div>

				</div>



			<?php } ?>

			<div class=" text-center">
				<a href="" class="vallbtn-2 btn-main bg-btn1 btn-blue lnk wow fadeInUp text-uppercase" style="visibility: visible; animation-name: fadeInUp;">KNOW MORE
				</a>
			</div>

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

<!--common script file-->

<script src="js/main.js"></script>

<script src='https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js'></script>



<?php include 'includes/general_data.php'; ?>