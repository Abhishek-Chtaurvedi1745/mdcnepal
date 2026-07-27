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
<?php include 'includes/header.php'; ?>
<!--End Header -->
<!--Shop Products-->
<section class="hero-creative-agenc1 banner-twostyle" data-background="images/cart-banner.jpg" style="background-image: url('images/cart-banner.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
   <div class="text-block">
      <div class="container">
          
      </div>
   </div>
</section>
<section class="shop-products-bhv  pt60 pb60">
	<div class="container">
		<div class="row d-none">
			<div class="col-lg-12 stepsinfo text-center mb-3">
				<ul>
					<li class="active">
						<a href="cart"><span>1</span><br />Cart</a>
					</li>
					<li>
						<a href="checkout"><span>2</span><br />Schedule & Book</a>
					</li>
					<li>
						<a href="payment-success"><span>3</span><br />Booked</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row my-cart-row d-flex justify-content-between align-items-center border-bottom-dark mb-4">
			<div class="col-6 mb-2">
				<h6 class=""><a class="main-heading-1">Test In Your Cart</a></h6>
			</div>
			 
			<div class="col-6 text-end mb-2"><b><a href="pathology/lab-blood-test-near/<?=$_SESSION['citySlug'];?>" class="text-202024 btn-main bg-btn1 btn-blue">Add Test</a></b></div>
			</div>
		 
		<div class="row">
			<div class="col-lg-12 cartError">
				<?= $this->utility->get_message() ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="col-lg-12 AddressCard CartItems shadow">
				</div>
				 
			</div>
			<div class="col-lg-4 right-cart ">
				<div class="HomeCollection">
				</div>
				<div class="cart-extra-sevc div-for-data shadow">
					<!-- <h4 class="mb30">Cart Totals</h4> -->
					<!-- <h5 class="prc-info mb-3 border-bottom pb-3"><span class=""><i class="fas fa-rupee-sign"></i>399 <del><i class="fas fa-rupee-sign"></i>580</del></span> <span class="percnt float-end">Get 20 % OFF</span></h5> -->
					<h6 class="fs__14 mb-2 pb-1">Booking Summary <span class="fs__12">(<?= count($this->rs_cartmini) ?> Items)</span></h6>
					<table class="table mb-0">
						<tbody>
							<tr class="tpayable">
								<th class="text-dark p-0">Subtotal</th>
								<td><span class="prc sub_total"><?= $this->utility->moneyFormatIndia($_SESSION['sub_total']) ?></span></td>
							</tr>
							
							
							<tr class="tpayable p-0 border-topblue">
								<th class="p-0 text-blue">To Pay</th>
								<td><span class="prc sub_total"><?= $this->utility->moneyFormatIndia($_SESSION['sub_total']) ?></span></td>
							</tr>
						</tbody>
					</table>
					<?php
					if ($_SESSION['MDRCCustID'] > 0) {
						$htmll = 'Schedule & Book';
						$extraItemsHtml = 'onclick="paynow()" href="javascript:void(0)" ';
					} else {
						$htmll = 'Login To Continue';
						$extraItemsHtml = 'data-bs-toggle="offcanvas" href="#offcanvasExample-login"';
					}
					?>
				</div>
				<a <?= $extraItemsHtml ?> class="btn-main bg-btn checkout-btn lnk w-100 mb-1 rounded-2"><?=$htmll ?> <i class="fas fa-chevron-right fa-icon fa-ani"></i></a>
			</div>
		</div>
	</div>
</section>
<!--End Shop Products-->
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
<script id="rendered-js">
	function readFile(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var htmlPreview =
					'<img width="200" src="' + e.target.result + '" />' +
					'<p>' + input.files[0].name + '</p>';
				var wrapperZone = $(input).parent();
				var previewZone = $(input).parent().parent().find('.preview-zone');
				var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');
				wrapperZone.removeClass('dragover');
				previewZone.removeClass('hidden');
				boxZone.empty();
				boxZone.append(htmlPreview);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}

	function reset(e) {
		e.wrap('<form>').closest('form').get(0).reset();
		e.unwrap();
	}
</script>
<?php if ($_SESSION['HomeCollectionModalShow'] == 'Yes') { ?>
	<script>
		$(window).on('load', function() {
			$('#modal-homeCollection').modal('show');
		});
	</script>
<?php } ?>