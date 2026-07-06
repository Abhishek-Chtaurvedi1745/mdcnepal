<section class="pt10 pb30 homelinks">
	<div class="container-fluid">
		<div class="row">
			
			<?php if (count($this->rs_gs_city) > 0) { ?>
				<div class="col-lg-12 col-sm-12 pb50  pt50 bg-light-secondary text-center">
					<h6 class="fw-semibold mb20">Our Location in Nepal</h6>
					<?php for ($i = 0; $i < count($this->rs_gs_city); $i++) { ?>
						<a class="tags footer_changecity_<?= $this->rs_gs_city[$i]['id'] ?>" onclick="changeCity(<?= $this->rs_gs_city[$i]['id'] ?>,'premium-health-checkup')" data-page="premium-health-checkup"><?= $this->rs_gs_city[$i]['name'] ?></a>
					<?php } ?>
				</div>
			<?php } ?>

			<?php if (count($items) > 0) { ?>
				<div class="col-lg-12 col-sm-12 pb50 pt50 bg-white text-center">
					<h6 class="fw-semibold mb20">Popular Tests</h6>
					<?php $j = 0;
					foreach ($items as $test) {
						$testCats = explode(',', $test['item_other_data_item_department_ids']);
						if (count($testCats) > 0 && in_array('1', $testCats) && $test['set_at_popular_test'] == 'Yes') {
							if ($j > 30) {
								break;
							}
							?>
							<a class="tags" href="lab-test/<?= $test['slug']; ?>/<?= $_SESSION['citySlug']; ?>">
								<?= $test['name'].' In '.$_SESSION['cityName']; ?>
							</a>
							<?php $j++;
						}
					} ?>
				</div>
			<?php } ?>


			<?php if (count($item_category) > 0) { ?>
				<div class="col-lg-12 col-sm-12  pb50 pt50 bg-light-secondary text-center">
					<h6 class="fw-semibold mb20">Popular Categories</h6>
					<?php
					$j = 0;
					foreach ($item_category as $item) {
						$Cats = explode(',', $item['item_department_ids']);
						if (count($Cats) > 0 && in_array('1', $Cats)) {
							if ($j > 30) {
								break;
							}
					?>
						<a class="tags" href="category/<?= $_SESSION['citySlug']; ?>/<?= $item['slug']; ?>">
							<?= $item['name']; ?>
						</a>
						<?php $j++;
						}
					} ?>
				</div>
			<?php } ?>

			<?php if (count($item_diseases) > 0) { ?>
				<div class="col-lg-12 col-sm-12 pb50 bg-white text-center">
					<h6 class="fw-semibold mt50 mb20">TEST BY RISK</h6>
					<?php
					$j = 0;
					foreach ($item_diseases as $item) {
						$Cats = explode(',', $item['item_department_ids']);
						if (count($Cats) > 0 && in_array('1', $Cats)) {
							if ($j > 30) {
								break;
							}
							?>
							<a class="tags" href="diseases/<?= $_SESSION['citySlug']; ?>/<?= $item['slug']; ?>">
								<?= $item['name']; ?>
							</a>
							<?php $j++;
						}
					} ?>
				</div>
			<?php } ?>

			<?php if (count($this->rs_gs_city) > 0) { ?>
				<div class="col-lg-12 col-sm-12 pb50 pt50 bg-light-secondary text-center">
					<h6 class="fw-semibold mb20">Full Body Checkup</h6>
					<?php for ($i = 0; $i < count($this->rs_gs_city); $i++) { ?>
						<a class="tags footer_changecity_<?= $this->rs_gs_city[$i]['id'] ?>"
							onclick="changeCity(<?= $this->rs_gs_city[$i]['id'] ?>,'full-body-health-checkup')"
							data-page='full-body-health-checkup'>
							Full body Checkup Test in <?= $this->rs_gs_city[$i]['name'] ?>
						</a>
					<?php } ?>
				</div>
			<?php } ?>

		</div>
	</div>
</section>

<?php

$currentPage = $this->getCurrentView();

$pages = ['cart', 'checkout'];

if (!in_array($currentPage, $pages)) {

?>



<?php } ?>



<!--Start Preloader -->

<div class="onloadpage" id="page_loader">

	<div class="pre-content">

		<div class="logo-pre d-flex justify-content-center"><img src="images/favicon.png" alt="Logo" class="img-fluid" /></div>

		<!-- <div class="pre-text- text-radius text-light text-animation bg-b">MDC</div> -->

		<!-- <div class="pre-text- color-red fw-bold">MDC</div> -->

	</div>

</div>

<!--End Preloader -->

<!-- <div class="RprtBtn-Wppr"> -->

<!-- <a href="#" target="_blank">Download Report </a> -->

<!-- </div> -->

<!-- 

<div class="watsap_links">

	<a class="wtsapp-desktop" href="https://wa.me/918586988847?text=Hello :) Thank you for contacting Modern Diagnostic and Research Centre. How can we help you please?" target="_blank"><img src="images/whatsapp_i.png" alt="best diagnostic centre" /></a>

</div> -->



<div class="stickyBarBottom">

	<div class="container">



		<!-- <div class="row"> -->

		<!-- <div class="col-lg-4 col-4 ft text-center"> -->

		<!-- <a href="#" target="_blank"><em class="FxdBtn-Icn"><img src="images/blood-test.png" alt="blood-test"></em>Book a Lab Test </a> -->

		<!-- </div> -->

		<!-- <div class="col-lg-4 col-4 sd"> -->

		<!-- <a href="javascript:void(0)" class="report-top"> <em class="FxdBtn-Icn"><img src="images/file.png" alt="file"></em>Download reports  </a> -->

		<!-- </div> -->

		<!-- <div class="col-lg-4 col-4 td"> -->

		<!-- <a href="contact-us.html"> <em class="FxdBtn-Icn"><img class=" lazyloaded" src="images/phonew.png" alt="ct scan in gurgaon"></em>Contact Us  </a> -->

		<!-- </div> -->

		<!-- </div> -->

	</div>

</div>

<!--Start Footer-->

<footer class="p-0">
	<div>
		<!-- <div class="">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-5">
						<div class="email-subs text-start">
							<h4 class="text-white">View Report Online</h4>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-5 text-end">
						<div class="email-subs">
							<h4 class="text-white">View Report Online</h4>
						</div>
					</div>
				</div>

			</div>
		</div> -->
		<!-- <div class="sub-footer-bg ">
			<div class="copyright p-3">
				<div class="container">
					<div class="row justify-content-between  text-md-start">
						<div class="col-lg-6 text-md-start text-center">
							<div class="footer-">
								<h4 class="text-white">View Report Online</h4>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 text-md-end text-center">
							<div class="footer-">
								<a href="">
									<button class="ps-4 pe-4 pt-2 pb-2 custom-btn1">CLICK HERE</button>
								</a>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div> -->
		<div class="footer-row2 main-bg text-white pb">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-3 col-sm-6 mb-4 mb-sm-0"> <!-- Added mb-4 for small devices -->
						<h4 class="text-white mb-2">About us</h4>
						<p class="text-white">Modern Diagnostic Centre
							Nepal is a pioneer in the field
							of pathology in Kathmandu.</p>
						<h4 class="text-white pt">Follow in Us</h4>
						<div class="social-icons pt-2">
							<?php if($this->gs['facebook_link'] != '') { ?>
								<a href="<?=$this->gs['facebook_link']?>" target="_blank" class="social-icon facebook-icon text-white me-2">
									<i class="fab fa-facebook"></i>
								</a>
							<?php } 
							if($this->gs['instagram_link'] != '') { ?>
								<a href="<?=$this->gs['instagram_link']?>" target="_blank" class="social-icon instagram-icon text-white me-2">
									<i class="fab fa-instagram"></i>
								</a>
							<?php } 
							if($this->gs['linkedin_link'] != '') { ?>
							<a href="<?=$this->gs['linkedin_link']?>" target="_blank" class="social-icon linkedin-icon text-white me-2">
								<i class="fab fa-linkedin"></i>
							</a>
							<?php } ?>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6 mb-4 mb-sm-0"> <!-- Added mb-4 for small devices -->
						<h4 class="text-white mb-2">Important Links</h4>
						<ul class="footer-address-list">
							<li><a href="" class="text-white">Home</a></li>
							<li><a href="/know-us" class="text-white">About Modern Nepal</a></li>
							<li><a href="/lab/blood-test/<?= $_SESSION['citySlug']; ?>" class="text-white">Book A Lab Test</a></li>
							<li><a href="/full-body-health-checkup/<?= $_SESSION['citySlug']; ?>" class="text-white">Health Checkup Tests</a></li>
							<li><a href="/full-body-health-checkup/<?= $_SESSION['citySlug']; ?>" class="text-white">Advance Health Test</a></li>
							<li><a href="/full-body-health-checkup/<?= $_SESSION['citySlug']; ?>" class="text-white">For Healthcare Specialist</a></li>
							<li><a href="http://139.5.71.145/Online_MDC/Forms/fm_Login.aspx" target="_blank" class="text-white">Download Reports</a></li>

						</ul>
					</div>
					<div class="col-lg-2 col-sm-6 mb-4 mb-sm-0"> <!-- Added mb-4 for small devices -->
						<h4 class="text-white mb-2">Other Links</h4>
						<ul class="footer-address-list">
							<li><a href="/our-locations" class="text-white">Contact</a></li>
							<li><a href="/lab-insights" class="text-white">Lab Insights</a></li>
							<li><a href="/blog" class="text-white">Blogs</a></li>
							<li><a href="#" class="text-white">Booking & Test Reports</a></li>
							<li><a href="/schedule-your-test" class="text-white">Schedule a Test</a></li>
							<?php if(count($this->rs_pages)>0){
								foreach($this->rs_pages as $pagess){ ?>
								<li><a href="/page/<?=$pagess['slug']?>" target="_blank" class="text-white"><?=$pagess['page_title']?></a></li>
							<?php } } ?>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 mb-4 mb-sm-0"> <!-- Added mb-4 for small devices -->
						<h4 class="text-white mb-2">Contact Information</h4>
						<ul class="footer-address-list">
							<li><a href="mailto:customercare@mdcnepal.com" class="text-white">Email: customercare@mdcnepal.com</a></li>
							<li><a href="tel:01-4377425 " class="text-white">Phone: 01-4377425 / 01-4377450 / 9801081735</a></li>
							<li><a href="https://www.google.com/maps?q=Amrit+Bhawan+Third+Floor,+Narayangopal+Chowk,+Kathmandu,+Nepal" class="text-white">Address: Opposite, Bhatbhateni Supermarket, Maharajgunj Kathmandu.</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="footer-row3 mt50">
				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 text-md-start text-center">
								<div class="footer-">
									<p>©2025 Modern Diagnostic Center Nepal Pvt. Ltd. All Rights Reserved</p>
								</div>
							</div>
							<div class="col-lg-6 text-md-end text-center">
								<div class="footer-">
									<p>Web Services by Razobyte</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	</div>
</footer>


<!--End Footer-->

<div id="ajax_modal_container" class="ajax_modal_container"></div>

<!--start Modal html -->

<div class="popup-modals big-modal">

	<div class="modal" id="modalform-full">

		<div class="modal-dialog">

			<div class="modal-content">

				<button type="button" class="closes abt" data-bs-dismiss="modal">&times;</button>

				<div class="modal-body">

					<div class="col-md-12 col-12">

						<div class="row justify-content-center">

							<div class="col-md-12 text-center">

								<h3 class="mb10">Not able to find your test?</h3>

								<p>Blood tests can be done through home blood sample collection services that do away with the need to travel to the laboratory. Please fill up the following details for appointment. You will receive an confirmation call from centre regarding appointment details.</p>

							</div>

						</div>



						<div class="row justify-content-center mt30">

							<div class="col-md-12">

								<div class="form-block fdgn2 mt10 mb10">

									<form method="post" id="collection_appointment" name="collection_appointment">

										<div class="fieldsets row">



											<?php $name = '';
											if ($this->rs_customer['name'] != '') {

												$name = $this->rs_customer['name'] . " " . $this->rs_customer['last_name'];
											}

											?>

											<div class="col-md-6"><input required="required" type="text" placeholder="Full Name*" name="name" id="name" value="<?= $name ?>"></div>

											<div class="col-md-6"><input required="required" type="email" placeholder="Email*" name="email" id="email" value="<?= $this->rs_customer['email'] ?>"></div>

										</div>

										<div class="fieldsets row">

											<div class="col-md-6"><input required="required" type="phone" placeholder="Phone*" class="numbersOnly" value="<?= $this->rs_customer['phone'] ?>" name="phone" id="phone"></div>

											<div class="col-md-6"><input type="text" placeholder="Age" class="numbersOnly" name="age" id="age"></div>

										</div>

										<div class="fieldsets row">

											<div class="col-md-6">

												<select required="required" name="city" id="city">

													<option value="">Select City</option>

													<?php for ($i = 0; $i < count($this->rs_gs_city); $i++) { ?>

														<option value="<?= $this->rs_gs_city[$i]['name'] ?>"><?= $this->rs_gs_city[$i]['name'] ?></option>

													<?php } ?>

												</select>

											</div>





											<div class="col-md-6 form-group">

												<div class="row align-items-center no-gutters">

													<div class="col-lg-6 col-md-5">

														<input type="date" placeholder="Date*" id="date" name="date">

													</div>

													<div class="col-lg-6 col-md-7 mt-2 mt-lg-0 mt-md-0 mb-2 mb-lg-0 mb-md-0">

														<label class="text-dark ms-0 me-2"><input type="radio" value="Male" id="customRadio" name="example" /> Male</label>

														<label class="text-dark"><input type="radio" value="Female" id="customRadio2" name="example" /> Female</label>

													</div>

												</div>

											</div>

										</div>

										<div class="fieldsets row">

											<div class="col-md-6"><textarea placeholder="Address" id="address" name="address"></textarea></div>

											<div class="col-md-6"><textarea placeholder="Brief details of your illness" id="brief_details" name="brief_details"></textarea></div>

										</div>

										<div class="fieldsets row">

											<div class="col-md-12">

												<select name="reference" id="reference">

													<option selected="selected" value="">How did you hear about us</option>

													<option value=""> - Select Reference - </option>

													<option value="newspaper">From Newspaper</option>

													<option value="facebook">From Facebook</option>

													<option value="twitter">From Twitter</option>

													<option value="youtube">From Youtube</option>

													<option value="just_dial">From Just Dial</option>

													<option value="friends">Friends Reference</option>

													<option value="doctor_reference">Doctor Reference</option>

													<option value="old_patients">Patient Reference</option>

													<option value="none">Any Other</option>

												</select>

											</div>

										</div>

										<div class="fieldsets row mt30 pb20 justify-content-center">

											<div class="col-md-8">

												<button type="submit" class="lnk btn-main bg-btn collection_appointment_btn">Submit <i class="fas fa-chevron-right fa-icon"></i></button>

											</div>

										</div>

										<div class="fieldsets row">

											<div class="col-md-12">

												<div id="collection_appointment_error_msg">

												</div>

											</div>

										</div>

									</form>



								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>



<div class="popup-modals modal-ad-style coup-modal cities-modal">

	<div class="modal" id="modal-cities" tabindex="-1">

		<div class="modal-dialog">

			<div class="modal-content">

				<div class="modal-body">

					<div class="col-md-12 text-center w-100 pb-2">

						<div class="float-end pt-2">

							<button type="button" class="closes" data-bs-dismiss="modal">×</button>

						</div>

						<h5 class="pt-3 tx-thm">Select Your City</h5>

					</div>

					<div class="form-block fdgn2 mt0 mb0">

						<div class="fieldsets row justify-content-center m-auto">

							<div class="col-md-6 col-10 ps-2 pe-2 mt-1 mb-0 space_coupon position-relative">

								<form action="" method="post" name="feedback-form">

									<input type="text" placeholder="Search for your city" name="" class="m-0" onkeyup="show_suggestion(this.value)">

									<button type="button" class="check-coupon" id=""><i class="fas fa-search"></i></button>

								</form>

							</div>

							<div class="col-md-3  col-2 ps-2 pe-2 mt-1 mb-0 space_coupon position-relative">

								<div class="btn-main bg-btn1 btn-blue map-btn" onclick="getLocation()">

									<i class="fas fa-map-marker-alt"></i>

								</div>

							</div>

						</div>

					</div>

					<div class="row m-auto">

						<div class="col-md-12 cities-ul text-center ">

							<ul class="sCity">

								<?php for ($i = 0; $i < count($this->rs_gs_city); $i++)
								{
									
										$cityName = $this->rs_gs_city[$i]['name'];
										$cityId = $this->rs_gs_city[$i]['id'];
										$cityimage = $this->rs_gs_city[$i]['image'];
										$activeClass = '';
										if($cityId == $_SESSION['cityID'])
										{
											$activeClass = 'active';
										}
										$cityimage = $this->utility->get_image_path($cityimage, 'city', 'large'); ?>

										<li><a class="<?= $activeClass ?>" href="javascript:void(0)" onclick="changeCity(<?= $cityId ?>)"><img src="<?= $cityimage ?>" alt="" /><br /><span><?= $cityName ?></span></a></li>
									<?php 
								} ?>

							</ul>



						</div>



						



						<div id="googleMapApiResult" class="text-center col-md-12 pt-2 pb-3">

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>



<!-- <div class="popup-modals modal-ad-style coup-modal">

  <div class="modal" id="coupon-modal" tabindex="-1" >

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <div class="common-heading">

            <h4 class="mt0 mb0">APPLY COUPONS</h4>

          </div>

          <button type="button" class="closes" data-bs-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body p-0">

         	 <div class="form-block fdgn2 mt10 mb10">

	            <form action="#" method="post" name="feedback-form">

	              <div class="fieldsets row m-auto">

	                	<div class="col-md-12 ps-4 pe-4 mt-3 mb-3 space_coupon position-relative">

		                	<input type="text" placeholder="Enter coupon code" name="coupon_code" class="m-0">

		                	<button type="submit" class="check-coupon" id="appyCouponBtn">CHECK</button>

										</div>

								</div>

						</form>

					</div>

          <div class="form-block fdgn2 mt10 ">

            <form action="#" method="post" name="feedback-form">

              <div class="fieldsets row m-auto bdr">

                <div class="col-md-12 pt-3 pb-3 ps-4 pe-4">

                		<div class="custom-control custom-radio">

												<label class="custom-control-label">

														<input type="radio" name="coupon-check">

														<svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

															<path d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>

														</svg>

														<span class="d-inline-block c-bdr text-dark rounded fwseb">SWSKAPCK</span> <span class="d-block mt-2 text-dark fs__13">Special Offers</span>

												</label>

										</div>

                </div>

                <div class="col-md-12 pt-3 pb-3 ps-4 pe-4">

                		<div class="custom-control custom-radio">

												<label class="custom-control-label">

														<input type="radio" name="coupon-check">

														<svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

															<path d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>

														</svg>

														<span class="d-inline-block c-bdr text-dark rounded fwseb">TEST2021</span> <span class="d-block mt-2 text-dark fs__13">Minimum Order Amount Rs.100/- Require. Once Per User.</span>

												</label>

										</div>

                </div>

              </div>

              <div class="fieldsets row m-auto pt-3 pb-3">

                	<div class="col-md-6">

                	</div>

                	<div class="col-md-6">

           				 		<button type="submit" name="submit" class="btn-main bg-btn1 btn-blue lnk text-uppercase  appyCouponBtn w-100" data-bs-dismiss="modal">Apply<span class="circle"></span></button>

           				</div>

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </div>

</div> -->

<div class="popup-modals modal-ad-style coup-modal">

	<div class="modal" id="Modalselect-add-patients" tabindex="-1">

		<div class="modal-dialog">

			<div class="modal-content">

				<div class="modal-header">

					<div class="common-heading">

						<h4 class="mt0 mb0">SELECT / ADD PATIENTS</h4>

					</div>

					<button type="button" class="closes" data-bs-dismiss="modal">&times;</button>

				</div>

				<div class="modal-body p-0">

					<div class="form-block fdgn2 add-patient mt10">

						<form action="#" method="post" name="feedback-form">

							<div class="fieldsets row m-auto bdr border-top-0">

								<div class="col-md-12 pt-3 pb-3 ps-4 pe-4">

									<div class="custom-control custom-radio">

										<label class="custom-control-label">

											<input type="radio" value="1" name="address1">

											<svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

												<path d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>

											</svg>

											<span class="ml-3 adri"><span class="fw-semibold">1. Mr Tester</span><br>Male , 30 yrs.</span></label>

									</div>

								</div>

								<div class="col-md-12 pt-3 pb-3 ps-4 pe-4">

									<div class="custom-control custom-radio">

										<label class="custom-control-label">

											<input type="radio" value="1" name="address1">

											<svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

												<path d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>

											</svg>

											<span class="ml-3 adri"><span class="fw-semibold">2. Mr John</span><br>Male , 30 yrs.</span></label>

									</div>

								</div>

							</div>

							<div class="fieldsets row m-auto pt-3 pb-3">

								<div class="col-md-6">

								</div>

								<div class="col-md-6">

									<button type="submit" name="submit" class="btn-main bg-btn1 btn-blue lnk text-uppercase  appyCouponBtn w-100" data-bs-dismiss="modal">Apply</button>

								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="popup-modals modal-ad-style coup-modal">

	<div class="modal" id="modal-cancelorder" tabindex="-1">

		<div class="modal-dialog mwidth">

			<div class="modal-content">

				<div class="modal-header">

					<div class="common-heading">

						<h4 class="mt0 mb0">CANCEL ORDER #MF61</h4>

					</div>

					<button type="button" class="closes" data-bs-dismiss="modal">&times;</button>

				</div>

				<div class="modal-body">

					<div class="form-block fdgn2 mt10">

						<form action="#" method="post" name="feedback-form">

							<div class="fieldsets row">

								<div class="col-md-12">

									<label>Cancel Remark</label>

									<textarea class="h-100px" placeholder="Address" name="message"></textarea>

								</div>

							</div>

							<div class="row">

								<div class="fieldsets mt10 pb20">

									<button type="submit" name="submit" class="lnk btn-main bg-btn w-auto me-2" data-bs-dismiss="modal">Submit</button>

								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="popup-modals modal-ad-style coup-modal">

	<div class="modal" id="myModal-add-money" tabindex="-1">

		<div class="modal-dialog mwidth">

			<div class="modal-content">

				<div class="modal-header border-0 align-items-end d-block">

					<button type="button" class="closes float-end" data-bs-dismiss="modal">&times;</button>

				</div>

				<div class="modal-body">

					<div class="form-block fdgn2 mt10">

						<form action="#" method="post" name="feedback-form">

							<div class="row justify-content-center">

								<div class="col-lg-11 col-12">

									<div class="col-lg-12 mt__30 text-center mb-3 mt-2 col-12">

										<img src="images/add-money-wallet.png" alt="">

										<h5 class="mt-3">Add Money to your Wallet</h5>

									</div>

									<div class="fieldsets row">

										<div class="col-lg-12 col-12">

											<input type="text" placeholder="Enter Amount to be Added in Wallet" name="search_keyword" class="h-45">

										</div>

									</div>

									<div class="col-lg-12 mb-3 text-center radi-btn col-12">

										<label><input type="radio" name="deliver" checked="true"><span>+<i class="fas fa-rupee-sign"></i>50</span></label>

										<label><input type="radio" name="deliver"><span>+<i class="fas fa-rupee-sign"></i>100</span></label>

										<label><input type="radio" name="deliver"><span>+<i class="fas fa-rupee-sign"></i>500</span></label>

										<label><input type="radio" name="deliver"><span>+<i class="fas fa-rupee-sign"></i>1000</span></label>

									</div>

									<div class="col-lg-12 mb-3 mt-3 text-center col-12">

										<button type="submit" name="submit" class="lnk btn-main bg-btn w-auto" data-bs-dismiss="modal">Continue</button>

									</div>

								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="popup-modals modal-ad-style">

	<div class="modal" id="modalform-Reschedule-Booking" tabindex="-1">

		<div class="modal-dialog">

			<div class="modal-content">

				<div class="modal-header">

					<div class="common-heading">

						<h4 class="mt0 mb0">Reschedule Booking</h4>

					</div>

					<button type="button" class="closes" data-bs-dismiss="modal">&times;</button>

				</div>

				<div class="modal-body ">

					<div class="form-block fdgn2 mt10 mb10">

						<form action="#" method="post" name="feedback-form">

							<div class="fieldsets row">

								<div class="col-md-12 mb-4">

									<label class="f-semibold">Current Sample Collection Date & Time :</label>

									<span class="text-blue d-block w-100 fs-14">15 Sep, 2022 (06:00 am - 07:00 am)</span>

								</div>

								<div class="col-md-12">

									<label>Select New Reschedule Sample Collection Date</label>

									<input type="date" placeholder="Date" name="date">

								</div>

								<div class="col-md-12">

									<label>Select New Reschedule Sample Collection Time</label>

									<select>

										<option>Select Collection Time</option>

										<option>Select Collection Time</option>

										<option>Select Collection Time</option>

									</select>

								</div>

								<div class="col-md-12">

									<label>Select Reschedule Reason</label>

									<select>

										<option>Select Reason</option>

										<option>Select Reason</option>

										<option>Select Reason</option>

									</select>

								</div>

							</div>

							<div class="fieldsets mt20 pb20 d-flex justify-content-center">

								<button type="submit" name="submit" class="lnk btn-main bg-btn w-auto" data-bs-dismiss="modal">Submit</button>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="popup-modals modal-ad-style coup-modal collectionmodal">

	<div class="modal" id="modal-homeCollection" tabindex="-1">

		<div class="modal-dialog">

			<div class="modal-content">

				<button type="button" class="closes abt" data-bs-dismiss="modal">×</button>

				<div class="modal-body">

					<div class="col-md-12 mt-5 mb-4 col-12">

						<div class="row justify-content-center">

							<div class="col-md-12 text-center">

								<img class="img_del_boy_modal" src="images/login-slide.png" alt="">

								<h3 class="mb10 mt20">Do you prefer Home Sample Collection?</h3>

								<p>Blood tests made easy at your doorstep!</p>

								<p>Click "Yes" to avail Home Collection Service.</p>
								<p>Click "No" to visit your nearest Collection Point.</p>

							</div>

						</div>

						<div class="row justify-content-center mt40">

							<div class="col-md-12 colecbtns text-center">

								<button type="button" onclick="changeHomeCollectionStatus('Yes')" class="btn lnk btn-main bg-btn bg-success">Yes </button>

								<button type="button" onclick="changeHomeCollectionStatus('No')" class="btn lnk btn-main bg-btn bg-danger">No </button>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>



