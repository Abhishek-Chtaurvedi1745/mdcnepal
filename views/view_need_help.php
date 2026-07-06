
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


<!--Start Header -->

<?php include 'includes/header.php';?>

<!--End Header -->

<!--Breadcrumb Area-->
<section class="profile-area  banner-6">
	<div class="text-block ">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-start v-center">
					<div class="bread-inner">
						<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="blogs">Need Help?</a></li>
								<?php if ($this->array_bread != '') { ?>
									<li><a href="javascript:void()"><?= $this->array_bread ?></a></li>
								<?php } ?>
							</ul>
						</div>
						<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
							<?php if ($this->array_bread != '') {
								$title = $this->array_bread;
							} else {
								$title = 'Need Help?';
							}
							?>
							<h1 class="f-bold fs-2 text-white"><?= $title ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Info Personal-->
<section class="info-personal pt60 pb60">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
            <?php include 'includes/myaccount.php';?>				
				
			</div>
			<div class="col-lg-8">
				<div class="row m-auto">
					<div class="col-lg-12 bg-white col-12 mb20">
						<div class="row main-bg-2 border-bottom align-items-center">
				            <div class="col-lg-12 p-0 col-12">
				           		<h5 class="m-0 head text-white">Need Help?</h5>
				            </div>
			            </div>
						<div class="row m-auto helps pt-3 pb-3 align-items-center">
							<div class="col-lg-4 col-md-4 col-12">
					            <img src="images/helpandsupport.png" alt="Need Help?" />
							</div>
							<div class="col-lg-7 col-md-8 ms-auto col-12">
								<h4 class="text-blue-2">We're here to help!</h4>
								<p>If you have any queries related to any of our tests or packages, you can contact us on the below mentioned phone number or email.</p>
								<div class="d-flex calinfo mt-3 gap-3">
									<img src="images/call-small.png" alt=""><a class="mt-2 text-dark" href="tel:9801081735">+977 4377425/4377450</a></span>
								</div>
								<div class="d-flex calinfo mt-3 gap-3">
									<img src="images/whatsapp-small.png" alt=""><a class="mt-2 text-dark" href="tel:9801081735">+977 9801081735</a></span>
								</div>
								<div class="d-flex calinfo mt-3 gap-3">
									<img src="images/email-small.png" alt=""><a class="mt-2 text-dark" href="mailto:customercare@mdcnepal.com">customercare@mdcnepal.com</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!--End Info Personal-->

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

<?php include 'includes/general_data.php';?>