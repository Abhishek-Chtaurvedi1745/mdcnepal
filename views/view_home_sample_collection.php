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
<!-- <section class="about-lead-gen abpage pb40" data-background="">
	<div class="home-collection-bg">
		<img src="images/banner-dummy.png" alt="home-collection-banner">
	</div>
</section> -->
<section class="booking-inquiry half-bg ">
	<div class="px-5">
		<div class="row align-items-center">
			<div class="col-lg-4 col-md-6 col-12">
				<h2 class="text-blue-2">Blood Test at Home with Easy Home Blood Sample</h2>

			</div>
			<div class="col-lg-4 col-md-6 col-12 d-flex align-items-end">
				<img src="images/home-semple-dr.png" alt="">
			</div>

			<div class="col-lg-4 col-md-6 lead-intro-  col-12 form-main">
				<div class="form-block fdgn2 mt10 mb10 form-border">
					<form method="post" id="collection_appointment" name="collection_appointment">
						<div class="fieldsets row">
							<div class="col-md-6"><input required="required" type="text" placeholder="Full Name*" name="name" id="name" value=""></div>
							<div class="col-md-6"><input required="required" type="phone" placeholder="Mobile Number*" class="numbersOnly" value="" name="phone" id="phone"></div>
						</div>
						<div class="fieldsets row d-none">
							<div class="col-md-6"><input required="required" type="email" placeholder="Email*" name="email" id="email" value=""></div>
							<div class="col-md-6"><input type="text" placeholder="Age" class="numbersOnly" name="age" id="age"></div>
						</div>
						<div class="fieldsets row">
							<div class="col-md-6">
								<select required="required" name="city" id="city">
									<option value="">Select City</option>
									<option value="Kathmandu">Kathmandu</option>
									<option value="Butwal">Butwal</option>
								
								</select>
							</div>
							<div class="col-md-6"><input required="required" type="email" placeholder="Email*" name="email" id="email" value=""></div>

							<div class="col-md-6 d-none"><textarea placeholder="Address" id="address" name="address" rows="1" style="height: initial;"></textarea></div>
						
						</div>
						<div class="fieldsets row d-none">
							<div class="col-lg-6 col-md-5">
								<input type="date" placeholder="Date*" id="date" name="date">
							</div>
							<div class="col-lg-6 col-md-5">
							
								<div class="input-group align-items-center hc-raodio-btns">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" id="customRadio" name="example" value="Male">
										<label class="custom-control-label text-202024" for="customRadio">Male</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" id="customRadio2" name="example" value="Female">
										<label class="custom-control-label text-202024" for="customRadio2">Female</label>
									</div>
								</div>
							</div>
						</div>
						<div class="fieldsets row">
							<div class="col-md-12"><textarea placeholder="Brief details of your illness" id="brief_details" name="brief_details"></textarea></div>
						</div>
						<div class="fieldsets row d-none">
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
								<button type="submit" class="lnk btn-main bg-btn collection_appointment_btn rounded-2">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
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
</section>
<!--Start Mission Vision-->
<section class="missionvision dark-bg4 pb40 pt40 bg-gradient-light-blue-2">
	<div class="container-fluid">
		<div class="row justify-content-center gap-5">
			<div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
				<div class="s-block2">
					<div class="card-icon"><img src="images/booktest-icon/home.png" alt="icon" class="w80"></div>
					<h3>Expert Home Sample Collection</h3>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
				<div class="s-block2">
					<div class="card-icon"><img src="images/booktest-icon/time.png" alt="icon" class="w80"></div>
					<h3>Bookings slots from as early as 6:30 AM</h3>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
				<div class="s-block2">
					<div class="card-icon"><img src="images/booktest-icon/message.png" alt="icon" class="w80"></div>
					<h3>Accurate Reports on WhatsApp and Email in 24 hours</h3>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
				<div class="s-block2">
					<div class="card-icon"><img src="images/booktest-icon/hour.png" alt="icon" class="w80"></div>
					<h3>Service available even on Sundays</h3>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
				<div class="s-block2">
					<div class="card-icon"><img src="images/booktest-icon/dr.png" alt="icon" class="w80"></div>
					<h3>Trusted choice of leading Doctors &amp; Hospitals</h3>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Mission Vision-->
<section class="about-lead-gen pt50 pb50 home-collection">
	<div class="container ">
		<div class="row justify-content-center">
			<div class="col-md-12 justify-content-center order-md-0 order-1  ">
				<div class="common-heading-2  mb40">
					<h4 class="mb-2 fs-3 text-202024 lh-sm">Get Home Blood Sample Collection in Nepal</h4>
					<h5>Convenient and Reliable Blood Test at Your Doorstep</h6>
						<p class="mb10 text-center">At Modern Diagnostic Center Nepal, we understand that visiting a lab for medical tests can be inconvenient, especially for the
							elderly, people with mobility issues, and those with busy schedules. That's why we offer a Home Blood Sample Collection service,
							allowing you to get tested from the comfort of your home while maintaining the highest standards of accuracy and reliability.</p>
				</div>
				<div class=" mb30">
					<h4 class="mb15 fs-3 text-202024 lh-sm">Why Choose Modern Diagnostic Center for Home Blood Sample Collection?</h4>
					<p class="mb10"><span class="fs-5 fw-bold text-blue-2">Certified Phlebotomist</span> - Our trained professionals ensure safe and hygienic sample collection. </p>
					<p class="mb10"><span class="fs-5 fw-bold text-blue-2">Wide Range of Tests</span> - From routine health checkups to specialized tests like PCR, Diabetes Screening, and Allergy Testing. </p>
					<p class="mb10"><span class="fs-5 fw-bold text-blue-2">Affordable Pricing</span> - Get top-notch diagnostic services at competitive rates.</p>
					<p class="mb10"><span class="fs-5 fw-bold text-blue-2">Fast and Accurate Results</span> - Reports are available online within 24 to 48 hours.</p>

				</div>
				<div class=" mb30">
					<h4 class="mb15 fs-3 text-202024">How It Works</h4>

					<div>
						<h5 class="fs-5 fw-bold"><span class="text-blue-2 ">Step 1: </span> Book Your Test Online or Via Call</h5>
						<p>Visit our website and choose from 79+ available tests, including blood tests, sugar tests, and urine tests. You can also book by calling our customer support.</p>
					</div>
					<div>
						<h5 class="fs-5 fw-bold"><span class="text-blue-2 ">Step 2: </span> Our Expert Team Arrives at Your Home</h5>
						<p>Our trained phlebotomists will visit your location at your preferred time, ensuring a smooth and professional experience.</p>
					</div>
					<div>
						<h5 class="fs-5 fw-bold"><span class="text-blue-2 ">Step 3: </span> Sample Collection with Utmost Care</h5>
						<p>We follow strict hygiene protocols, using sterilized equipment to collect samples safely and efficiently.</p>
					</div>
					<div>
						<h5 class="fs-5 fw-bold"><span class="text-blue-2 ">Step 4: </span> Get Your Reports Online</h5>
						<p>Your test results will be processed using state-of-the-art diagnostic technology and will be available online within 24 to 48 hours. You can access them via email, WhatsApp, or through our website.</p>
					</div>
				</div>
				<div class=" mb40">
					<h4 class="mb15 fs-3 text-202024">Why Trust Modern Diagnostic Center Nepal?</h4>

					<div class="d-flex gap-2 mb-2">
						<div class="icon-wrapper">
							<i class="fas fa-check"></i>
						</div>
						<p> A Trusted Brand with a Pan-Nepal Presence</p>
					</div>
					<div class="d-flex gap-2 mb-2">
						<div class="icon-wrapper">
							<i class="fas fa-check"></i>
						</div>
						<p>ISO Certified Labs</p>
					</div>
					<div class="d-flex gap-2 mb-2">
						<div class="icon-wrapper">
							<i class="fas fa-check"></i>
						</div>
						<p>State-of-the-Art Equipment for Accurate Testing</p>
					</div>
					<div class="d-flex gap-2 mb-2">
						<div class="icon-wrapper">
							<i class="fas fa-check"></i>
						</div>
						<p>Qualified and Experienced Lab Technicians</p>
					</div>
					<div class="d-flex gap-2 mb-2">
						<div class="icon-wrapper">
							<i class="fas fa-check"></i>
						</div>
						<p>Affordable and Transparent Pricing</p>
					</div>
				</div>

			</div>
			<div class="col-md-6 col-12 order-md-1 order-0 mb-md-0 mb40 d-none">
				<div class="p-4 home-collection-form">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center">
							<h1 class="fs-3">Not able to find your test?</h1>
							<p>Blood tests can be done through home blood sample collection services that do
								away with the need to travel to the laboratory. Please fill up the following details
								for appointment. You will receive an confirmation call from centre regarding
								appointment details.</p>
						</div>
					</div>
					<div class="row justify-content-center mt30 ">
						<div class="col-md-12">
							<div class="form-block fdgn2 mt10 mb10">
								<form method="post" id="collection_appointment" name="collection_appointment">
									<div class="fieldsets row">
										<div class="col-md-6"><input required="required" type="text" placeholder="Full Name*" name="name" id="name" value=""></div>
										<div class="col-md-6"><input required="required" type="phone" placeholder="Mobile Number*" class="numbersOnly" value="" name="phone" id="phone"></div>
									</div>
									<div class="fieldsets row">
										<div class="col-md-6"><input required="required" type="email" placeholder="Email*" name="email" id="email" value=""></div>
										<div class="col-md-6"><input type="text" placeholder="Age" class="numbersOnly" name="age" id="age"></div>
									</div>
									<div class="fieldsets row">
										<div class="col-md-6">
											<select required="required" name="city" id="city">
												<option value="">Select City</option>
												<option value="Gurugram">Gurugram</option>
												<option value="Delhi">Delhi</option>
												<option value="Guwahati">Guwahati</option>
												<option value="Srinagar">Srinagar</option>
												<option value="Amritsar">Amritsar</option>
												<option value="Bhiwadi">Bhiwadi</option>
												<option value="Jaipur">Jaipur</option>
												<option value="Bareilly">Bareilly</option>
												<option value="Gorakhpur">Gorakhpur</option>
												<option value="Kolkata">Kolkata</option>
												<option value="Yamunanagar">Yamunanagar</option>
												<option value="Karnal">Karnal</option>
												<option value="Panipat">Panipat</option>
												<option value="Noida">Noida</option>
												<option value="Kurukshetra">Kurukshetra</option>
												<option value="Indore">Indore</option>
											</select>
										</div>
										<div class="col-md-6"><textarea placeholder="Address" id="address" name="address" rows="1" style="height: initial;"></textarea></div>
										<!-- <div class="col-md-6 form-group">
										<div class="row align-items-center no-gutters">
											<div class="col-lg-6 col-md-7 mt-2 mt-lg-0 mt-md-0 mb-2 mb-lg-0 mb-md-0">
												<label class="text-dark ms-0 me-2"><input type="radio" value="Male"
														id="gender_male" name="gender"> Male</label>
												<label class="text-dark"><input type="radio" value="Female"
														id="gender_female" name="gender"> Female</label>
											</div>
										</div>
									</div> -->
									</div>
									<div class="fieldsets row">
										<div class="col-lg-6 col-md-5">
											<input type="date" placeholder="Date*" id="date" name="date">
										</div>
										<div class="col-lg-6 col-md-5">
											<!-- <select name="" id="">
													<option value="" selected>Gender</option>
													<option value="">Male</option>
													<option value="">Female</option>
												</select> -->
											<div class="input-group align-items-center hc-raodio-btns">
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" class="custom-control-input" id="customRadio" name="example" value="Male">
													<label class="custom-control-label text-202024" for="customRadio">Male</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" class="custom-control-input" id="customRadio2" name="example" value="Female">
													<label class="custom-control-label text-202024" for="customRadio2">Female</label>
												</div>
											</div>
										</div>
									</div>
									<div class="fieldsets row">
										<div class="col-md-12"><textarea placeholder="Brief details of your illness" id="brief_details" name="brief_details"></textarea></div>
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
											<button type="submit" class="lnk btn-main bg-btn collection_appointment_btn">REQUEST A CALL BACK <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
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
</section>
<section class="statistics-section  main-bg-2 tilt3d why-choose-us">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-6 order-md-0 order-1 d-flex align-items-center justify-content-center">
				<div class="row justify-content-center t-ctr">

					<div class="col-12 itm-media-object  tilt-3d">
						<div class="row mb-3">
							<div class="col-md-6 mt20">
								<div class="media">
									<div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
										<img src="images/h-s-1.png" alt="icon" class="layer">
									</div>
									<div class="media-body align-self-center">
										<h4 class="text-white">ISO Certified </h4>
										<span class="text-white">Accurate Testing Lab</span>
									</div>
								</div>
							</div>
							<div class="col-md-6 mt20">
								<div class="media">
									<div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
										<img src="images/h-s-2.png" alt="icon" class="layer">
									</div>
									<div class="media-body">
										<h4 class="text-white">8+ Years</h4>
										<span class="text-white">Of Experience</span>
									</div>
								</div>
							</div>
							<div class="col-md-6 mt20">
								<div class="media">
									<div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
										<img src="images/h-s-3.png" alt="icon" class="layer">
									</div>
									<div class="media-body">
										<h4 class="text-white">2500+ </h4>
										<span class="text-white">Tests In-House</span>
									</div>
								</div>
							</div>
							<div class="col-md-6 mt20">
								<div class="media">
									<div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
										<img src="images/h-s-4.png" alt="icon" class="layer">
									</div>
									<div class="media-body">
										<h4 class="text-white">Advanced</h4>
										<span class="text-white">Diagnostic Facilities</span>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 pt50 order-md-1 order-0 d-flex flex-column">
				<div class="mt-auto">
					<img src="images/home-semple-objects-bg.png" alt="" height="100vh">
				</div>
			</div>

		</div>
	</div>
</section>

<section class="pt40 pb50 faq-sec bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-12 section-title text-center mb20">
				<div class="common-heading-2 ">
					<h2 class="mb40 fw-normal">Frequently Asked Questions</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-1">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapseOne">
								How can I book a home blood sample collection for pathology tests?</button>
						</h2>
						<div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample" style="">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>You can book a home blood sample collection in 3 simple steps:<br>
										1- Register and choose a test/Package from our website<br>
										2- Add Patient details in your Family Members.<br>
										3- Choose a Date and Time and our Trained Phlebotomist will collect your blood sample<br>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-2">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapseOne">
								What are the benefits of using MDC's home blood sample collection service? </button>
						</h2>
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Our home blood sample collection service offers the convenience of getting your tests done in the comfort of your home, saving you time and effort. You get the same blood testing services in our Diagnostic Centre in the comfort of your home.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-3">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapseOne">
								Do I need to prepare for a home blood sample collection?</button>
						</h2>
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>
										There are many tests which requires prior fasting before collection of Blood Sample. These requirements are highlighted in the test menu. You can also chat with our health agent over Whatsapp for any special requirement.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-4">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapseOne">
								How can I access my test reports? </button>
						</h2>
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>You can download the test reports online or collect them from your nearest MDC Centre.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-5">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapseOne">
								Do I need to have a home blood collection service near me?</button>
						</h2>
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We have home blood collection service available in the following cities-
										Gurugram, Delhi, Noida, Guwahati, Srinagar, Amritsar, Bhiwadi, Jaipur, Bareilly, Gorakhpur Kolkata, Yamunanagar, Karnal, Panipat, Kurukshetra, Indore
										If you live in the following cities you can book a home blood sample collection.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-4 col-md-4 col-sm-4 col-12 ">
				<img alt="" class="img-fluid lazy" src="images/faq-home.png" style="">
			</div> -->
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