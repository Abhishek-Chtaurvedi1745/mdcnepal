<?php
if (VIR_DIR == 'm/') {
	include('includes/m/header.php');
} else {
	if ($_SESSION['tempCityID'] == '') {
		$_SESSION['tempCityID'] = $_SESSION['cityID'];
	} else {
		if ($_SESSION['tempCityID'] != $_SESSION['cityID']) {
			$_SESSION['tempCityID'] = $_SESSION['cityID'];
			$_SESSION['items'] = '';
			$_SESSION['item_category'] = '';
			$_SESSION['item_diseases'] = '';
		}
	}
	//query for php
	if ($_SESSION['items'] == '') {
		$obj_model = $this->load_model('item');
		$obj_model->join_table("item_other_data", "left", array('item_id', 'item_category_ids', 'item_key_fetures_ids', 'item_department_ids', 'item_diseases_ids', 'item_type_id'), array("id" => "item_id"));
		$obj_model->join_table("item_price", "left", array(), array("id" => "item_id"));
		$city_cond = " and FIND_IN_SET ('" . $_SESSION['cityID'] . "',item.city_ids) and item_price.city_id='" . $_SESSION['tempCityID'] . "'";
		$items = $obj_model->execute("SELECT", false, "", "item.status='Active'" . $city_cond, "item.id desc");
		$_SESSION['items'] = $items;
	} else {
		$items = $_SESSION['items'];
	}
	if ($_SESSION['item_category'] == '') {
		$obj_model = $this->load_model('item_category');
		$item_category = $obj_model->execute("SELECT", false, "", "item_category.status='Active'", "sort_order asc");
		$_SESSION['item_category'] = $item_category;
	} else {
		$item_category = $_SESSION['item_category'];
	}
	if ($_SESSION['item_diseases'] == '') {
		$obj_model = $this->load_model('item_diseases');
		$item_diseases = $obj_model->execute("SELECT", false, "", "item_diseases.status='Active'", "sort_order asc");
		$_SESSION['item_diseases'] = $item_diseases;
	} else {
		$item_diseases = $_SESSION['item_diseases'];
	}
?>
	<input type="hidden" name="cityUrl" id="cityUrl" value="<?= $_SESSION['citySlug'] ?>">
	<style>
		@media (min-width: 768px) {
			.menu-header.cusnav .navbar-nav {
				align-items: center;
			}
			.menu-header.cusnav .navbar-nav > .nav-item,
			.menu-header.cusnav .navbar-nav > .nav-item.dropdown,
			.menu-header.cusnav .navbar-nav > .nav-item:hover,
			.menu-header.cusnav .navbar-nav > .nav-item.dropdown:hover,
			.menu-header.cusnav .navbar-nav > .nav-item.show {
				background: #38A7BB !important;
			}
			.menu-header.cusnav .navbar-nav > .nav-item > .nav-link,
			.menu-header.cusnav .navbar-nav > .nav-item:hover > .nav-link,
			.menu-header.cusnav .navbar-nav > .nav-item > .nav-link:hover,
			.menu-header.cusnav .navbar-nav > .nav-item.show > .nav-link {
				background: transparent !important;
				color: #fff !important;
				line-height: 40px !important;
				min-height: 40px;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				white-space: nowrap;
				display: flex;
				align-items: center;
				transition: filter 0.18s ease, opacity 0.18s ease;
			}
			.menu-header.cusnav .navbar-nav > .nav-item:hover > .nav-link {
				filter: blur(0.45px);
				opacity: 0.9;
			}
			.menu-header.cusnav .des-viewmega > .dropdown-menu {
				top: 100% !important;
			}
			.menu-header.cusnav .dropdown-menu.main-menu .nav-item.dropdown:hover,
			.menu-header.cusnav .dropdown-menu.main-menu .nav-item:hover {
				background: transparent !important;
			}
			.menu-header.cusnav .dropdown-menu.main-menu .nav-link:hover {
				background: transparent !important;
				color: #227087 !important;
			}
			.menu-header.cusnav .dropdown-menu.main-menu .child-menu {
				position: relative;
			}
			.menu-header.cusnav .dropdown-menu.main-menu .child-menu > .sub-menu {
				top: 0 !important;
				left: 100% !important;
				right: auto !important;
				min-width: 230px;
				margin-left: 0;
			}
			.menu-header.cusnav .dropdown-menu.main-menu .child-menu:hover > .sub-menu {
				display: block;
			}
		}
	</style>
	<header class="nav-bg-b main-header navfix menu-dark"> <!-- fixed-top class removed -->
		<div class="container-fluid">
			<div class="row">
				<div class="menu-header menu-header2">
					<div class="dsk-logo">
						<a class="nav-brand me-2" href="<?= SERVER_ROOT; ?>">
							<img src="images/new-logo.png" alt="MDC" class="mega-white-logo" />
							<img src="images/new-logo.png" alt="MDC" class="mega-darks-logo" />
						</a>


					</div>
					<div class="d-flex">
						<a class="cities-anchor samall-mt" data-bs-toggle="modal" data-bs-target="#modal-cities">
							<div class="shadow">
								<!-- <img src="images/icons/location.svg" alt="location"> -->
								<span><?= $_SESSION['cityName'] ?></span>
								<i class="fas fa-angle-down px-2"></i>
								<!-- <img src="images/icons/location-arrow-2.png" alt="select location"> -->
							</div>
						</a>
						<form class="d-inline-block position-relative serchFormi m-auto" name="searchForm" id="searchForm" method="post" action="">
							<input class="searchInput required searchKeyword m-auto" type="text" id="searchInput" autocomplete="off" placeholder="Search for your Test & Health Checkups" />
							<button class="searSubmit m-auto" type="submit"><img src="images/icons/serch.png" alt="search location" style="margin:0;    vertical-align: middle;" /></button>
						</form>
					</div>
					<div class="custom-nav " role="navigation">
						<div>
							<img src="images/iso-logo.png" alt="Certificates" style="max-width: 55px;">
						</div>
						<ul class="nav-list onepge ">
							<li class="contact-show second d-none"><a href="cart" class=""><img src="images/icons/cart.png" alt="cart" /> Cart <span class="cartCount" style="background: #E8603E;">
										<?= count(is_array($this->rs_cartmini) ? $this->rs_cartmini : array()) ?>
									</span></a>
							</li>
							<?php if ($_SESSION['MDRCCustID'] <= 0) { ?>
								<li class="contact-show d-none">
									<a data-bs-toggle="offcanvas" href="#offcanvasExample-login" class=""><img src="images/icons/login.png" alt="profile" /> Login / Register</a>
								</li>
							<?php } else { ?>
								<li>
									<div class="dropdown prof-drop d-none">
										<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
											<img src="images/header/user.svg" alt="profile" /> <span class="PFName">Hi,
												<?= $_SESSION['MDRCCustFirstName'] ?>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="my-profile">Personal Information <i class="fas fa-chevron-right"></i></a></li>
											<li><a class="dropdown-item" href="my-bookings">My Orders <i class="fas fa-chevron-right"></i></a></li>
											<li><a class="dropdown-item" href="my-family">My Family & Friends <i class="fas fa-chevron-right"></i></a></li>
											<li style="display:none"><a class="dropdown-item" href="my-addresses">My Addresses
													<i class="fas fa-chevron-right"></i></a></li>
											<li><a class="dropdown-item" href="schedule-your-test">Upload Prescription <i class="fas fa-chevron-right"></i></a></li>
											<!-- <li><a class="dropdown-item d-none" href="my-wallet">My Wallet <i class="fas fa-chevron-right"></i></a></li> -->
											<li><a class="dropdown-item" href="need-help">Help & Support <i class="fas fa-chevron-right"></i></a></li>
											<li><a class="dropdown-item" href="logout">Logout <i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</div>
								</li>
							<?php } ?>
							<li class="hidemobile d-none"><a href="tel:<?php echo !empty($_SESSION['cityPhone']) ? $_SESSION['cityPhone'] : ''; ?>">
									<div class="call-new-icon"><i class="fas fa-phone-alt"></i></div>
									<!-- <img src="images/call-mobile-header.png" alt="Call" style="width:33px" /> -->
								</a></li>
							<li class="call-text " style="margin-left:10px">
								<a href="tel:+9779801081735" class="call-btn btn-main bg-btn1 btn-blue text-uppercase text-white"><img src="images/call-icon.png" alt="" width="20px" class="me-1">CALL Us</a>
							</li>
							<a href="https://wa.me/9779801081735" class="" target="_blank">

								<li class="m-0 wp-icon-header">

									<div class="d-flex gap-2 ">
										<i class="fab fa-whatsapp" style="font-size: 26px;"></i>
										<p>Chat Support</p>
									</div>
								</li>
							</a>

						</ul>
					</div>
				</div>





				<div class="menu-header cusnav ">
					<nav class="navbar navbar-expand-md ">
						<div class="container p-0">
							<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a class="navbar-brand d-block d-lg-none d-md-none me-auto" href="<?= SERVER_ROOT; ?>"><img src="images/new-logo.png" alt="MDC" class=""></a>

							<ul class="nav-list d-block d-lg-none d-md-none onepge">
								<li class="contact-show second"><a class="cities-anchor samall-mt" data-bs-toggle="modal" data-bs-target="#modal-cities"><i class="fas fa-map-marker-alt text-blue-2 fs-4"></i></a>
								</li>
								<li class="contact-show second"><a href="cart" class=""><img src="images/header/cart.svg" alt="cart" /> <span class="cartCount">
											<?= count(is_array($this->rs_cartmini) ? $this->rs_cartmini : array()) ?>
										</span></a>
								</li>
								<?php if ($_SESSION['MDRCCustID'] <= 0) { ?>
									<li class="contact-show">
										<a data-bs-toggle="offcanvas" href="#offcanvasExample-login" class="mt-1"><img src="images/header/user.svg" alt="profile" /></a>
									</li>
								<?php } else { ?>
									<li>
										<div class="dropdown prof-drop">
											<button type="button" class="btn btn-primary dropdown-toggle mt-1" data-bs-toggle="dropdown">
												<img src="images/header/user.svg" alt="profile" /> <i class="fas fa-chevron-down ms-1"></i>
											</button>
											<ul class="dropdown-menu">
												<li><span class="uname text-blue">Hi,
														<?= $_SESSION['MDRCCustFirstName'] ?>
													</span>
												</li>
												<li><a class="dropdown-item" href="my-profile"> My Profile<i class="fas fa-chevron-right"></i></a></li>
												<li><a class="dropdown-item" href="my-bookings">My Bookings <i class="fas fa-chevron-right"></i></a></li>
												<li><a class="dropdown-item" href="my-family">My Family <i class="fas fa-chevron-right"></i></a></li>
												<li style="display:none"><a class="dropdown-item" href="my-addresses">My
														Addresses <i class="fas fa-chevron-right"></i></a>
												</li>
												<li><a class="dropdown-item d-none" href="my-prescription">My Priscription <i class="fas fa-chevron-right"></i></a></li>
												<li><a class="dropdown-item" href="my-wallet">My Wallet <i class="fas fa-chevron-right"></i></a></li>
												<li><a class="dropdown-item" href="need-help">Need Help? <i class="fas fa-chevron-right"></i></a></li>
												<li><a class="dropdown-item" href="logout">Logout <i class="fas fa-chevron-right"></i></a></li>
											</ul>
										</div>
									</li>
								<?php } ?>
								<li class="contact-show second ">
									<a href="tel:+977 4377425/4377450" class=""><img src="images/call-mobile-header.png" alt="Call" width="20px" /></a>
								</li>
							</ul>
							<div class="d-flex mobsearchbar d-lg-none d-md-none">
								<form class="d-inline-block position-relative serchFormi " name="searchMobileForm" id="searchMobileForm" method="post" action="">
									<input class="searchInput required searchMobileKeyword" id="searchMobileInput1" autocomplete="off" type="text" placeholder="Search for a Test, Nearest Centres" />
									<button class="searSubmit" type="submit"><img src="images/icon-red-search.png" alt="Select Location" /></button>
								</form>
								<!-- <form class="d-inline-block position-relative serchFormi" name="searchForm" id="searchForm" method="post" action="">
               <input class="searchInput required searchKeyword" type="text" id="searchInput" autocomplete="off" placeholder="Search for a Test, Nearest Centres" />
               <button class="searSubmit" type="submit"><img src="images/icon-red-search.png" alt="" /></button>
                      </form> -->
							</div>
							<div class="d-flex justify-content-between w-100">

								<div class="collapse navbar-collapse" id="mynavbar">
									<ul class="navbar-nav ml-auto">
										<li class="nav-item">
											<a href="<?= SERVER_ROOT; ?>" class="nav-link custom-link">
												<img src="/images/icons/home-white.png" alt="" width="25px">
												<!-- <i class="fas fa-home"></i> -->
											</a>
										</li>
										<!-- new link -->
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Modern Nepal</a>
											<ul class="dropdown-menu main-menu">
												<li class="nav-item dropdown">
													<div class="d-flex">
														<a href="know-us" class="nav-link">Know Us</a>
													</div>
												</li>
												<li class="nav-item dropdown ">
													<div class="d-flex">
														<a href="our-team" class="nav-link">Our Team</a>
													</div>
												</li>
												<!-- Visible only on mobile devices -->
												<div class="d-block d-lg-none">
													<li class="nav-item">
														<a class="nav-link text-dark" href="super-specialised-services ">For HealthCare Specialist - Our Lab Services</a>
													</li>

													<li class="nav-item">
														<a class="nav-link text-dark" href="home-sample-collection/<?= $_SESSION['citySlug']; ?>">For Patients - Home Sample Collection</a>
													</li>
												</div>

												<!-- Visible only on larger screens (tablets and desktops) -->
												<div class="d-none d-lg-block">
													<li class="nav-item dropdown child-menu">
														<a class="nav-link dropdown-toggle text-dark" href="#" id="specialistDropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside">
															For HealthCare Specialist
														</a>
														<ul class="dropdown-menu sub-menu">
															<li><a class="dropdown-item" href="super-specialised-services">Our Lab Services</a></li>
														</ul>
													</li>

													<li class="nav-item dropdown child-menu">
														<a class="nav-link dropdown-toggle text-dark" href="#" id="patientDropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside">
															For Patients
														</a>
														<ul class="dropdown-menu sub-menu">
															<li><a class="dropdown-item" href="home-sample-collection/<?= $_SESSION['citySlug']; ?>">Home Sample Collection</a></li>
														</ul>
													</li>
												</div>


											</ul>
										</li>

										<!-- new link -->
										<li class="nav-item dropdown mob-viewmega">
											<a class="nav-link dropdown-toggle" href="radiology/imaging-lab-tests-near/<?= $_SESSION['citySlug']; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												Book Your Blood Test
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li><a class="dropdown-item" href="lab/blood-test/<?= $_SESSION['citySlug']; ?>">Popular Health Packages</a> </li>
												<li><a class="dropdown-item" href="lab/blood-test/<?= $_SESSION['citySlug']; ?>">Popular Health Tests</a></li>
												<li><a class="dropdown-item" href="lab/blood-test/<?= $_SESSION['citySlug']; ?>">Test By Risks </a></li>
												<li><a class="dropdown-item" href="lab/blood-test/<?= $_SESSION['citySlug']; ?>">Tests by Categories</a></li>
												<li><a class="dropdown-item" href="full-body-health-checkup/<?= $_SESSION['citySlug']; ?>">Whole Body Health Checkups</a></li>

											</ul>
										</li>
										<li class="nav-item dropdown  position-static des-viewmega">
											<a class="nav-link dropdown-toggle-cust" href="lab/blood-test/<?= $_SESSION['citySlug']; ?>" aria-expanded="false">Book Your Blood Test </a>
											<div class="dropdown-menu w-100 mt-0 p-0" aria-labelledby="navbarDropdown">
												<div style="height: 350px;" class="">
													<ul class="menu main-megadrop" aria-labelledby="navbarDropdownMenuLink" style="background: rgb(238, 238, 238);height: 350px;">
														<li class="menu-li">
															<!-- href="popular-packages/<?= $_SESSION['citySlug']; ?>" -->
															<a class="dropdown-itemnew w-100 d-flex justify-content-between align-items-center" href="javascript:void(0);">Popular Health Packages <i class="fas fa-chevron-right"></i></a>
															<div class="megadrop" style="background-color: #fff;">
																<div class="main-mega-menu">
																	<ul>
																		<?php
																		$j = 0;
																		foreach ($items as $test) {
																			$testCats = explode(',', $test['item_other_data_item_department_ids']);
																			if (count($testCats) > 0 && in_array('1', $testCats) && $test['set_at_popular_package'] == 'Yes') {
																				if ($j > 30) {
																					break;
																				}
																		?>
																				<li class="ht-inner-sub">
																					<a href="lab-test/<?= $test['slug']; ?>/<?= $_SESSION['citySlug']; ?>"><?= $test['name']; ?></a>
																				</li>
																		<?php $j++;
																			}
																		} ?>
																	</ul>
																</div>
															</div>
														</li>
														<li class="menu-li">
															<!-- href="popular-tests/<?= $_SESSION['citySlug']; ?>" -->
															<a class="dropdown-itemnew w-100 d-flex justify-content-between align-items-center" href="javascript:void(0);">Popular Health Tests <i class="fas fa-chevron-right"></i></a>
															<div class="megadrop">
																<div class="main-mega-menu">
																	<ul>
																		<?php
																		$j = 0;
																		foreach ($items as $test) {
																			$testCats = explode(',', $test['item_other_data_item_department_ids']);
																			if (count($testCats) > 0 && in_array('1', $testCats) && $test['set_at_popular_test'] == 'Yes') {
																				if ($j > 30) {
																					break;
																				}
																		?>
																				<li class="ht-inner-sub">
																					<a href="lab-test/<?= $test['slug']; ?>/<?= $_SESSION['citySlug']; ?>"><?= $test['name']; ?></a>
																				</li>
																		<?php $j++;
																			}
																		} ?>
																	</ul>
																</div>
															</div>
														</li>
														<li class="menu-li">
															<a class="dropdown-itemnew w-100 d-flex justify-content-between align-items-center" href="javascript:void(0);">Tests by Risk <i class="fas fa-chevron-right"></i></a>
															<div class="megadrop">
																<div class="main-mega-menu">
																	<ul>
																		<?php
																		$j = 0;
																		foreach ($item_diseases as $item) {
																			$Cats = explode(',', $item['item_department_ids']);
																			if (count($Cats) > 0 && in_array('1', $Cats)) {
																				if ($j > 30) {
																					break;
																				}
																		?>
																				<li class="ht-inner-sub">
																					<a href="diseases/<?= $_SESSION['citySlug']; ?>/<?= $item['slug']; ?>"><?= $item['name']; ?></a>
																				</li>
																		<?php $j++;
																			}
																		} ?>
																	</ul>
																</div>
															</div>
														</li>
														<li class="menu-li">
															<a class="dropdown-itemnew w-100 d-flex justify-content-between align-items-center" href="javascript:void(0);">Tests by Categories <i class="fas fa-chevron-right"></i></a>
															<div class="megadrop">
																<div class="main-mega-menu">
																	<ul>
																		<?php
																		$j = 0;
																		foreach ($item_category as $item) {
																			$Cats = explode(',', $item['item_department_ids']);
																			if (count($Cats) > 0 && in_array('1', $Cats)) {
																				if ($j > 30) {
																					break;
																				}
																		?>
																				<li class="ht-inner-sub">
																					<a href="category/<?= $_SESSION['citySlug']; ?>/<?= $item['slug']; ?>"><?= $item['name']; ?></a>
																				</li>
																		<?php $j++;
																			}
																		} ?>
																	</ul>
																</div>
															</div>
														</li>
														<li class="menu-li">
															<a class="dropdown-itemnew w-100 d-flex justify-content-between align-items-center" href="full-body-health-checkup/<?= $_SESSION['citySlug']; ?>">Whole Body Health Checkups<i class="fas fa-chevron-right"></i></a>
															<div class="megadrop">
																<div class="main-mega-menu">
																	<ul>
																		<?php
																		$j = 0;
																		foreach ($items as $test) {
																			$Cats = explode(',', $item['item_department_ids']);
																			if ($test['set_at_popular_package'] == 'Yes' && in_array('1', $Cats)) {
																				if ($j > 30) {
																					break;
																				}
																		?>
																				<li class="ht-inner-sub">
																					<a href="lab-test/<?= $test['slug']; ?>/<?= $_SESSION['citySlug']; ?>"><?= $test['name']; ?></a>
																				</li>
																		<?php $j++;
																			}
																		} ?>
																	</ul>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="nav-item "><a href="full-body-health-checkup/<?= $_SESSION['citySlug']; ?>" class="nav-link">Whole Body Health Checkup</a></li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="our-locations" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												Find Us
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li> <a class="dropdown-item" href="our-locations">Our Locations</a> </li>
												<li> <a class="dropdown-item" href="schedule-your-test">Schedule Your Test</a> </li>
												<li> <a class="dropdown-item" href="lab-insights">Lab Insights</a> </li>
												<li> <a class="dropdown-item" href="blog">Blogs</a> </li>
											</ul>
										</li>

									</ul>
								</div>
								<div class="custom-nav d-none" role="navigation">
									<div>
										<img src="images/iso-logo.png" alt="Certificates" style="max-width: 55px;display:none">
									</div>
									<ul class="nav-list onepge">
										<li class="contact-show second"><a href="cart" class=""><img src="images/icons/cart.png" alt="cart" width="70%" /> Cart <span class="cartCount" style="background: #E8603E;">
													<?= count(is_array($this->rs_cartmini) ? $this->rs_cartmini : array()) ?>
												</span></a>
										</li>
										<?php if ($_SESSION['MDRCCustID'] <= 0) { ?>
											<li class="contact-show">
												<a data-bs-toggle="offcanvas" href="#offcanvasExample-login" class=""><img src="images/icons/login.png" alt="profile" /> Login / Register</a>
											</li>
										<?php } else { ?>
											<li>
												<div class="dropdown prof-drop">
													<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
														<img src="images/header/user.svg" class="img-white" alt="profile" /> <span class="PFName">Hi,
															<?= $_SESSION['MDRCCustFirstName'] ?>
													</button>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="my-profile"> My Profile<i class="fas fa-chevron-right"></i></a></li>
														<li><a class="dropdown-item" href="my-bookings">My Bookings <i class="fas fa-chevron-right"></i></a></li>
														<li><a class="dropdown-item" href="my-family">My Family <i class="fas fa-chevron-right"></i></a></li>
														<li style="display:none"><a class="dropdown-item" href="my-addresses">My
																Addresses <i class="fas fa-chevron-right"></i></a>
														</li>
														<li><a class="dropdown-item d-none" href="my-prescription">My Priscription <i class="fas fa-chevron-right"></i></a></li>
														<li><a class="dropdown-item" href="my-wallet">My Wallet <i class="fas fa-chevron-right"></i></a></li>
														<li><a class="dropdown-item" href="need-help">Need Help? <i class="fas fa-chevron-right"></i></a></li>
														<li><a class="dropdown-item" href="logout">Logout <i class="fas fa-chevron-right"></i></a></li>
													</ul>
												</div>
											</li>
										<?php } ?>
										<li class="hidemobile d-none">
											<a href="tel:<?php echo !empty($_SESSION['cityPhone']) ? $_SESSION['cityPhone'] : ''; ?>">
												<div class="call-new-icon"><i class="fas fa-phone-alt"></i></div>
												<!-- <img src="images/call-mobile-header.png" alt="Call" style="width:33px" /> -->
											</a>
										</li>
										<li class="call-text bg-none d-none" style="margin-left:10px">
											<a href="tel:977 4377425" class="call-btn btn-main bg-btn1 btn-blue  text-uppercase text-white"><img src="images/call-icon.png" alt="" width="20px" class="me-1">+977 4377425</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</nav>
					<nav class="navbar navbar-expand-md ">
						<div class="container p-0">



							<div class="custom-nav" role="navigation">
								<div>
									<img src="images/iso-logo.png" alt="Certificates" style="max-width: 55px;display:none">
								</div>

								<ul class="nav-list onepge">
									<li class="contact-show second"><a href="cart" class=""><img src="images/icons/cart.png" alt="cart" width="90%" /> <span class="cartCount" style="background: #E8603E;">
												<?= count(is_array($this->rs_cartmini) ? $this->rs_cartmini : array()) ?>
											</span></a>
									</li>
									<?php if ($_SESSION['MDRCCustID'] <= 0) { ?>
										<li class="contact-show">
											<a data-bs-toggle="offcanvas" href="#offcanvasExample-login" class=""><img src="images/icons/login.png" class="img-white" alt="profile" /> Login / Register</a>
										</li>
									<?php } else { ?>
										<li>
											<div class="dropdown prof-drop">
												<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
													<img src="images/header/user.svg" alt="profile" class="img-white" /> <span class="PFName">Hi,
														<?= $_SESSION['MDRCCustFirstName'] ?>
												</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="my-profile"> My Profile<i class="fas fa-chevron-right"></i></a></li>
													<li><a class="dropdown-item" href="my-bookings">My Bookings <i class="fas fa-chevron-right"></i></a></li>
													<li><a class="dropdown-item" href="my-family">My Family <i class="fas fa-chevron-right"></i></a></li>
													<li style="display:none"><a class="dropdown-item" href="my-addresses">My
															Addresses <i class="fas fa-chevron-right"></i></a>
													</li>
													<li class=" d-none"><a class="dropdown-item" href="my-prescription">My Priscription <i class="fas fa-chevron-right"></i></a></li>
													<li><a class="dropdown-item" href="my-wallet">My Wallet <i class="fas fa-chevron-right"></i></a></li>
													<li><a class="dropdown-item" href="need-help">Need Help? <i class="fas fa-chevron-right"></i></a></li>
													<li><a class="dropdown-item" href="logout">Logout <i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</div>
										</li>
									<?php } ?>
									<li class="hidemobile d-none">
										<a href="tel:<?php echo !empty($_SESSION['cityPhone']) ? $_SESSION['cityPhone'] : ''; ?>">
											<div class="call-new-icon"><i class="fas fa-phone-alt"></i></div>
											<!-- <img src="images/call-mobile-header.png" alt="Call" style="width:33px" /> -->
										</a>
									</li>
									<li class="call-text bg-none d-none" style="margin-left:10px">
										<a href="tel:977 4377425" class="call-btn btn-main bg-btn1 btn-blue  text-uppercase text-white"><img src="images/call-icon.png" alt="" width="20px" class="me-1">+977 4377425</a>
									</li>
								</ul>
							</div>

						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="d-lg-none d-md-none d-block px-3 py-2 bg-white">
		<div class="d-flex flex-column gap-2">

			<!-- City Selector -->
			<a class="cities-anchor d-none" data-bs-toggle="modal" data-bs-target="#modal-cities">
				<div class="d-flex align-items-center shadow-sm p-2 rounded border">
					<i class="fas fa-map-marker-alt me-2 text-danger"></i>
					<span class="me-auto"><?= $_SESSION['cityName'] ?></span>
					<i class="fas fa-angle-down text-muted"></i>
				</div>
			</a>

			<!-- Search Form -->
			<form class="position-relative w-100" name="searchForm" id="searchForm" method="post" action="">
				<input
					class="form-control pe-5"
					type="text"
					id="searchMobileInput"
					autocomplete="off"
					placeholder="Search for your Test & Health Checkups" />
				<button
					class="btn position-absolute top-50 end-0 translate-middle-y me-0 p-0 border-0 bg-transparent"
					type="submit"
					style="z-index: 10;">
					<img src="images/icons/serch.png" alt="search" style="width: 40px; height: 36px;" />
				</button>
			</form>

		</div>
	</div>

	<!--Start sidebar -->
	<div class="niwaxofcanvas offcanvas offcanvas-end otverify" tabindex="-1" id="offcanvasExample-otpverify">
		<div class="offcanvas-body">
			<div class="cbtn animation">
				<div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
			</div>
			<div class="form-block sidebarform ">
				<h5 class="pt-3 pb-0">Verify OTP</h5>
				<p class="subhead">Please enter 4-digit OTP Sent to <br /><strong class="text-dark signup_login_phone"></strong></p>
				<form id="otp_popup_form" name="otp_popup_form" method="post" data-bs-toggle="validator" class="sidebarForm shake mt40">
					<input type="hidden" class="" id="action_type" name="action_type" value="otp">
					<div class="row">
						<div class="form-group col-sm-12 mb-2">
							<label>Enter OTP</label>
							<input type="text" id="otpch1" name="otpch1" maxlength="4" minlength="4" class="required number numbers" placeholder="" data-error="">
							<div class="help-block with-errors"></div>
							<!-- <div class="col-12 p-0  mb-2 pb-1 text-end">
				  <a class="text-blue cotp " href="#">Clear OTP</a>
					</div> -->
							<div class="col-12 p-0 text-end mb-2 pb-1">
								<span class="drecive d-inline-block">
									<button type="button" class="" id="resend_otp_p" style="border:none;background:none">Resend OTP</button></span>
								<a class="text-blue timi" id="claim_counter"></a>
							</div>
						</div>
					</div>
					<button type="submit" id="otppopup_submit" class="btn lnk btn-main bg-btn">Verify OTP</button>
					<div id="invalid_otp" class="mt-3"></div>
					<div class="clearfix"></div>
					<!-- <div class="col-12 p-0 mt-4">
			<span class="drecive float-start">Did not receive the code?</span>
			 <a class="text-blue float-start timi">00:25</a>
			<a class="text-blue float-end reotop" href="#">Re-Send OTP</a>
			   </div> -->
				</form>
			</div>
		</div>
	</div>
	<div class="niwaxofcanvas offcanvas offcanvas-end login-offcanvas" tabindex="-1" id="offcanvasExample-login">
		<div class="offcanvas-body">
			<div class="cbtn animation">
				<div class="btnclose"> <button type="button" class="btn-close text-reset text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
			</div>
			<div class="form-block sidebarform bg-none">
				<h4 class="pt-3 pb-0 text-white text-center">Login/Sign Up</h4>
				<p class="subhead text-white text-center">Please Enter Your Phone Number to Proceed</p>
				<form id="signin_popup_form" name="signin_popup_form" method="post" data-bs-toggle="validator" class="sidebarForm shake mt40" autocomplete="off">
					<input type="hidden" class="" id="action_type" name="action_type" value="login">
					<div class="row">
						<div class="form-group col-sm-12">
							<!-- <label>Phone Number</label> -->
							<div class="input-group">
								<span class="phone-text-fix">+977</span>
								<input type="text" id="phone" name="phone" placeholder="Enter Phone Number" class="form-control login_f_data required number numbers bg-none" maxlength="10" minlength="10" required data-error="Please fill out" autocomplete="off">
							</div>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<!-- <a class="btn lnk btn-main bg-btn w-100" data-bs-toggle="offcanvas" href="#offcanvasExample-otpverify">Login <span class="circle"></span></a>-->
					<button type="submit" id="loginpopup_submit" class="btn lnk btn-main bg-btn1 btn-white text-center login-btn mt-2">Login</button>
					<div id="invalid_login" class="mt-3"></div>
					<div class="clearfix"></div>
					<div class="col-12 p-0 mt-3 text-center" style="display:none">
						<span class="almember text-white">Don't have an account? <a class="text-blue" data-bs-toggle="offcanvas" href="#offcanvasExample-signup">Sign Up</a></span>
					</div>
					<div class="col-12 p-0 mt-5 text-center slidi">
						<div class="owl-carousel testimonial-card-a pl25">
							<div class="testimonial-card">
								<div class="t-text">
									<img src="images/login-slide.png" alt="Banner" height="90px" />
									<h4 class="text-white">Free Home Sample Pick-up</h4>
									<p class="text-white">Care at your Convenience. Get tested from the comfort of your home.</p>
								</div>
							</div>
							<!-- <div class="testimonial-card">
								<div class="t-text">
									<img src="images/slide-3.png" alt="Banner" />
									<h4 class="text-white">Digital Report Bank</h4>
									<p class="text-white">Access speedy reports from everywhere and anywhere.</p>
								</div>
							</div> -->
							<!--<div class="testimonial-card">
				  <div class="t-text">
					<img src="images/slide-2.png" />
					<h4>Free Call Consultationg</h4>
					<p>Have a doubt? Clear it out.</p>
				  </div>
				</div>-->
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample-signup">
		<div class="offcanvas-body">
			<div class="cbtn animation">
				<div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
			</div>
			<div class="form-block sidebarform ">
				<h5 class="pt-3 pb-0">Profile</h5>
				<p class="subhead">Please Enter Your details</p>
				<form id="profile_popup_form" name="profile_popup_form" method="post" data-bs-toggle="validator" class="shake mt40" autocomplete="off">
					<div class=" step-info p-3">
						<div class="row">
							<div class="form-group col-sm-12">
								<label>First Name*</label>
							</div>
							<div class="form-group col-sm-12">
								<input type="text" name="name" id="name" value="<?= $this->rs_customer['name'] ?>" placeholder="" required data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-12">
								<label>Last Name*</label>
							</div>
							<div class="form-group col-sm-12">
								<input type="text" name="last_name" value="<?= $this->rs_customer['last_name'] ?>" id="last_name" placeholder="" required data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-12">
								<label>Email</label>
							</div>
							<div class="form-group col-sm-12">
								<input type="text" name="email" id="email" value="<?= $this->rs_customer['email'] ?>" placeholder="" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-12">
								<label>Mobile No.*</label>
							</div>
							<div class="form-group col-sm-12">
								<input type="text" disabled value="<?= $this->rs_customer['phone'] ?>" placeholder="" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<button type="submit" id="profile_popup_btn" class="btn lnk btn-main bg-btn mt-2">Save Details</button>
						<div id="msgSubmit" class="h3 text-center hidden"></div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--end sidebar -->
	<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample-download">
		<div class="offcanvas-body">
			<div class="cbtn animation">
				<div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
			</div>
			<div class="form-block sidebarform ">
				<h5 class="pt-3 pb-0">Download Reports</h5>
				<p class="subhead">View your test reports</p>
				<form id="download_test_report" name="download_test_report" method="post" data-bs-toggle="validator" class="sidebarForm shake mt40" autocomplete="off">
					<div class="row">
						<div class="form-group col-sm-12">
							<label>Lab/Visit ID</label>
							<input type="text" placeholder="" class="required" name="visitor_id" id="visitor_id" required data-error="Please fill Out" autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group col-sm-12">
							<label>Password</label>
							<input type="text" placeholder="" class="required" name="lab_password" id="lab_password" required data-error="Please fill Out" autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<button type="submit" id="download_report_submit" class="btn lnk btn-main bg-btn w-100 login-btn">Check
						Report </button>
				</form>
				<div id="no_report_found" class="mt-3"></div>
				<div class="clearfix"></div>
				<div class="col-12 p-0 mt-4 text-center slidi">
					<div class="col-12 ">
						<div class="t-text">
							<img src="images/slide-3.png" alt="Banner" />
							<h4>Digital Report Bank</h4>
							<p>Access speedy reports from everywhere and anywhere.</p>
						</div>
					</div>
				</div>
				<div class="col-12 p-0 mt-5 pt-3 text-center">
					<a class="text-blue text-bold" href="http://182.72.101.236/mdrcnew/design/onlinelab/" target="_blank">Download Report Client</a>
				</div>
			</div>
		</div>
	</div>
	<!--End Header -->
<?php } ?>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		var dropdowns = document.querySelectorAll(".dropdown-menu");
		dropdowns.forEach(function(dropdown) {
			var menuItems = dropdown.querySelectorAll(".menu > li");
			if (menuItems.length > 0) {
				menuItems[0].classList.add("active");
			}
			menuItems.forEach(function(item, index) {
				// Handle mouseenter event
				item.addEventListener("mouseenter", function() {
					menuItems.forEach(function(menuItem) {
						menuItem.classList.remove("active");
					});
					item.classList.add("active");
				});
				// Handle click event on other menu items
				item.addEventListener("click", function() {
					menuItems.forEach(function(menuItem) {
						menuItem.classList.remove("active");
					});
					item.classList.add("active");
				});
			});
		});
	});
</script>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		document.querySelectorAll(".child-menu > .nav-link").forEach(function(element) {
			element.addEventListener("click", function(e) {
				if (window.innerWidth <= 991) {
					e.preventDefault(); // Prevent default action
					let parentLi = this.parentElement;
					let subMenu = parentLi.querySelector(".dropdown-menu");

					if (subMenu.style.display === "block") {
						subMenu.style.display = "none";
					} else {
						// Hide other open dropdowns
						document.querySelectorAll(".child-menu .dropdown-menu").forEach(function(menu) {
							menu.style.display = "none";
						});
						subMenu.style.display = "block";
					}
				}
			});
		});
	});
</script>
