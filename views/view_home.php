<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/plugin.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<!-- template-style-->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!-- Bootstrap Select -->
<link rel='stylesheet'
    href='https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css'>
<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css'> -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css'>
<link href="css/custom.css?v=1.9" rel="stylesheet">
<style>
    .common-slider .owl-prev {
        background: #E8603E !important;
    }

    .common-slider .owl-next {
        background: #E8603E !important;
    }

    .normal .owl-theme .owl-nav .owl-prev,
    .normal .owl-theme .owl-nav .owl-next {
        background: #E8603E !important;
    }

    .normal .owl-theme .owl-nav .owl-prev,
    .normal .owl-theme .owl-nav .owl-next {
        background: #E8603E !important;
    }

    .pricing-table h4 span {
        color: #E8603E !important;
    }
</style>

<!--Start Header -->
<?php include 'includes/header.php'; ?>
<!--End Header -->

<?php if (count($this->rs_banner) > 0) { ?>
    <section class=" ">
        <div id="carouselExampleInterval" class="carousel slide carousel-btn" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php for ($i = 0; $i < count($this->rs_banner); $i++) {
                    $folder = 'main_banner_images';
                    $image = $this->utility->get_image_path($this->rs_banner[$i]['banner_image'], $folder, "large");
                    $url = 'javascript:void(0)';
                    if ($this->rs_banner[$i]['banner_link'] != '') {
                        $url = $this->rs_banner[$i]['banner_link'];
                    }
                ?>
                    <div class="carousel-item <?php if ($i == 0) { ?> active <?php } ?>" data-bs-interval="2000">
                        <a href="<?= $url ?>"><img src="<?= $image ?>" class="d-block w-100" alt=""></a>
                    </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
<?php } ?>
<?php if ($_SESSION['cityID'] == 11) { ?>
    <section class=" ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <marquee direction="left" style="color : #1160a5;font-style: italic;padding:5px;"> Home collection will
                        be done for disabled and aged patients. </marquee>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!--End Hero-->

<!-- Start Service Box  -->
<section class="service-card-area pt50 pb50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-3 mb-md-0">
            <a href="https://www.mdcnepal.com/lab/blood-test/kathmandu">

                <div class="service-card-box service-darkbg">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img data-src="images/icons/ser-3.svg" alt="" class="lazy img-fluid">
                        </div>
                    </div>
                    <div class="d-flex mt-2 aligm-items-center home-box">
                        <div class="flex-grow-1">
                            <h6>Book A Test Lab</h6>
                            <p>Home Sample Collection</p>
                        </div>
                        <div class="box-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                </a>

            </div>
            
            <div class="col-md-3 mb-3 mb-md-0">
            <a href="https://www.mdcnepal.com/schedule-your-test">
                <div class="service-card-box service-darkbg">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img data-src="images/icons/ser-4.svg" alt="" class="lazy img-fluid">
                        </div>
                    </div>
                    <div class="d-flex mt-2 aligm-items-center home-box">
                        <div class="flex-grow-1">
                            <h6>Book With Prescription</h6>
                            <p>Upload your Prescription to
                                book test </p>
                        </div>
                        <div class="box-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
           
            
            <div class="col-md-3 mb-3 mb-md-0">
            <a href="http://139.5.71.145/Online_MDC/Forms/fm_Login.aspx" target="_blank">
                <div class="service-card-box service-darkbg">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img data-src="images/icons/ser-1.svg" alt="" class="lazy img-fluid">
                        </div>
                    </div>
                    <div class="d-flex mt-2 aligm-items-center home-box">
                        <div class="flex-grow-1">
                            <h6>Download Report</h6>
                            <p>Check Your Test Reports </p>
                        </div>
                        <div class="box-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
         
        </div>
    </div>
</section>
<!-- End Service Box  -->
<?php if (count($this->rs_item_diseases) > 0) { ?>
    <section class="pb60 pt40  testsbyCondition-new">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading-2">
                        <h3 class="mb30 main-heading-1 text-202024 text-white">Health Tests by Condition</h3>
                    </div>
                </div>
            </div>
            <div class="row position-relative">
                <div class="col-lg-12 text-center">
                    <div class="logo-weworkfor1 owl-carousel common-slider">
                        <?php for ($i = 0; $i < count($this->rs_item_diseases); $i++) {
                            $name = $this->rs_item_diseases[$i]['name'];
                            $image = $this->rs_item_diseases[$i]['image'];
                            $slug = $this->rs_item_diseases[$i]['slug'];
                            $folder = 'item_diseases';
                            $item_diseases_img = $this->utility->get_disease_icon_path($image, 'large', $slug, $name);
                            $url = SERVER_ROOT . '/diseases/' . $_SESSION['citySlug'] . '/' . $slug . '';
                        ?>
                            <div class="items"><a href="<?= $url ?>">
                                    <div class="imgDiv"><img src="<?= $item_diseases_img ?>" alt="<?= $name ?>"></div>
                                    <br /><span>
                                        <?= $name ?>
                                    </span>
                                </a></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="owl-theme">
                    <div class="owl-controls">
                        <div class="custom-nav owl-nav"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


<!-- -------------------- START : ALL TEST VIEW -------------------- -->
<?php if (count($this->rs_item_home_category) > 0) {
    $g_search_query = '';
    $department_cond = '';
    $type_cond = '';
    $dieses_cond = '';
    $popular_pack_cond = '';
    $m = 1;
    $first = 'mt60';
    for ($i = 0; $i < count($this->rs_item_home_category); $i++) {
        if ($i == 0) {
            $active = 'active';
        } else {
            $active = '';
        }
        $caturl = SERVER_ROOT . '/category/' . $_SESSION['citySlug'] . '/' . $this->rs_item_home_category[$i]['slug'] . '';
        $sort_cond = "item.sort_order ASC";
        $city_cond = " and FIND_IN_SET ('" . $_SESSION['cityID'] . "',item.city_ids) and item_price.city_id='" . $_SESSION['cityID'] . "'";
        $cat_cond = " and (FIND_IN_SET ('" . $this->rs_item_home_category[$i]['id'] . "',item_other_data.item_category_ids))";
        $master_con = $g_search_query . $city_cond . $department_cond . $type_cond . $dieses_cond . $cat_cond . $popular_pack_cond;

        $obj_model_all = $this->load_model("item");
        $obj_model_all->join_table("item_description", "left", array('test_parameters'), array("id" => "item_id"));
        $obj_model_all->join_table("item_other_data", "left", array(), array("id" => "item_id"));
        $obj_model_all->join_table("item_price", "left", array(), array("id" => "item_id"));
        $records = $obj_model_all->execute("SELECT", false, "", "item.id!=0 and item.status='Active' and  item.set_at_home='Yes'   " . $master_con . "", "" . $sort_cond . " limit 0,8", "");

        if ($i % 2 == 0) {
            $classEven = 'bg-secondry-2';
        } else {
            $classEven = '';
        } ?>
        <section class="pb40 pt40 healthSection-2 <?php echo $classEven; ?> <?php echo $first; ?>">
            <div class="container">
                <div class="row section-title align-items-center mb-3">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="common-heading-2">
                            <h3 class="main-heading-1 text-md-start tx-main mb-1"><!-- Top Health Packages --> <?= $this->rs_item_home_category[$i]['name'] ?></h3>
                        </div>
                    </div>
                </div>
                <div class="row position-relative mt30">
                    <div class="col-12 ">
                        <div class="package-slidernew owl-carousel common-slider">
                            <?php for ($c = 0; $c < count($records); $c++) {
                                $item = $records[$c];
                                $id = $item['id'];
                                $item_price_id = $item['item_price_id'];
                                $slug = $item['slug'];
                                $name = $item['name'];
                                $test_count = $item['test_count'];
                                $image = $item['image'];
                                $folder = $item['folder'];
                                $price = $item['item_price_price'];
                                $mrp = $item['item_price_mrp'];
                                $url = 'lab-test/' . $item['slug'] . '/' . $_SESSION['citySlug'];
                                $sch_price = $item['item_price_sch_price'];
                                $sch_start_date = $item['item_price_sch_start_date'];
                                $sch_end_date = $item['item_price_sch_end_date'];
                                if ($sch_price > 0 && $sch_start_date != '' && $sch_end_date != '') {
                                    $today_date = date('d-m-Y');
                                    $todaySlot = strtotime($today_date);
                                    $startSlot = strtotime($sch_start_date);
                                    $endSlot = strtotime($sch_end_date);
                                    if ($todaySlot >= $startSlot && $todaySlot <= $endSlot) {
                                        $price = $sch_price;
                                    }
                                }
                                $price_html = $this->utility->packagePrice($id, $price, $mrp);
                                $description1 = strip_tags($item['item_other_data_description']);
                                $description_li = '';
                                if ($description1 != '') {
                                    $description = $this->utility->string_truncate($description1, 100);
                                    $description_li = '<li><span>' . $description . '</span></li>';
                                }
                                $test_parameters_html = strip_tags($item['item_description_test_parameters']);
                                if ($test_parameters_html != '') {
                                    $test_parameters_html = '<li><span>' . $this->utility->string_truncate($test_parameters_html, 100) . '</span></li>';
                                }
                                if (in_array($id, $_SESSION['cartitemIds'])) {
                                    $Book_Now = '<a href="' . $url . '" class="btn-main bg-btn1 btn-green lnk wow fadeInUp text-uppercase book-now">Added <span class="circle"></span></a>';
                                    $cartbtn = '<a href="cart" class="add_to_cart btncart btncart-green float-end"><img src="images/icon-cart.png" alt="" /> <span class="circle"></span></a>';
                                } else {
                                    $Book_Now = '<a href="' . $url . '" class="btn-main bg-btn1 btn-blue lnk wow fadeInUp text-uppercase book-now">Book Now <span class="circle"></span></a>';
                                    $cartbtn = '<a href="javascript:void(0)" data-item_price_id="' . $item_price_id . '" data-item_id="' . $id . '" class="add_to_cart btncart float-end"><img src="images/icon-cart.png" alt="" /> <span class="circle"></span></a>';
                                } ?>
                                <div class="items">
                                    <div class="package-card">
                                        <h5 class="tx-main"><?= $name ?></h5>
                                        <div class="package-test-detail">
                                            <ul class="dot-ul sty-thm">
                                                <?= $description_li ?>
                                                <?= $test_parameters_html; ?>
                                            </ul>
                                            <div class="d-flex mt-2">
                                                <span class="text-dark mb-0">Includes <?= $test_count ?> tests</span>
                                            </div>
                                            <div class="d-flex mt-2">
                                                <h6 class="text-dark"><?= $price_html ?></h6>
                                            </div>
                                        </div>
                                        <div class="package-btns d-flex justify-content-between align-items-center">
                                            <a href="<?= $url ?>">Know More</a>
                                            <a href="<?= $url ?>" class="btn-link">Book</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="owl-theme">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-12  text-center">
                        <a href="<?= $caturl ?>" class="vallbtn-2 btn-main bg-btn1 btn-blue lnk wow fadeInUp text-uppercase">View All Test
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php $m++;
        $first = '';
    } ?>
<?php } ?>
<!-- -------------------- END : ALL TEST VIEW -------------------- -->


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
                <img data-src="images/why-choose/1.png" alt="" class="lazy">
            </div>
            <div class="col-md-3 mb-3 mb-md-0 text-center">
                <img data-src="images/why-choose/3.png" alt="" class="lazy">
            </div>
            <div class="col-md-3 mb-3 mb-md-0 text-center">
                <img data-src="images/why-choose/2.png" alt="" class="lazy">
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
                <img data-src="images/why-choose/mobile.jpg" alt="" class="lazy">
            </div>
        </div>


    </div>
</section>
<!-- Why Choose End  -->
<!-- About us Start  -->
<section class="about-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <div class="common-heading-2">
                    <h3 class="mb20 main-heading-1 text-white">Modern Diagnostic Center Nepal Pvt. Ltd.</h3>
                    <p class="text-white">Modern Diagnostic Centre Nepal is a pioneer in the field of pathology in Kathmandu. Established in 2017, during a
                        pivotal time for healthcare in Nepal, MDC has since risen to prominence, offering a comprehensive range of high-quality
                        diagnostic services. Today, we proudly conduct over 2,500
                        tests in-house, positioning ourselves among the top diagnostic facilities in the region.</p>
                </div>
                <a href="/know-us" class="vallbtn-2 btn-main bg-btn1 btn-white lnk wow fadeInUp text-uppercase">Know More
                </a>
            </div>
        </div>
    </div>
</section>
<!-- About us End  -->
<section id="how-work" class="pt40 middi schedule pb50 ste4 d-none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row section-title text-center">
                    <div class="col-sm-12 col-12">
                        <div class="common-heading-2 ">
                            <h3 class="fs-3 text-202024">Schedule your Health Test with MDC</h3>
                            <h5 class="mb20">Take control of your health journey
                                book your comprehensive health test with MDC now</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row section-title mt10 justify-content-center align-items-center">
            <div class="col-sm-3 col-lg-3 col-md-4 col-8 text-start text-lg-center text-md-center position-relative">
                <div class="how-works-block text-start">
                    <div class="d-flex align-items-center">
                        <img data-src="images/search-res.png" alt="" class="lazy">
                        <div class=" ms-3">
                            <h5>
                                Search & Add<br>
                                Your Test
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3 col-md-4 col-8 text-start text-lg-center text-md-center position-relative">
                <div class="how-works-block text-start">
                    <div class="d-flex align-items-center">
                        <img data-src="images/book-ser.png" alt="" class="lazy">
                        <div class=" ms-3">
                            <h5>
                                Book Appointment<br>For Your Tests
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3 col-md-4 col-8 text-start text-lg-center text-md-center position-relative">
                <div class="how-works-block text-start">
                    <div class="d-flex align-items-center">
                        <img data-src="images/report-ser.png" alt="" class="lazy">
                        <div class=" ms-3">
                            <h5>
                                Get Reports<br>
                                Online
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-12 mt30 text-center">
                <a href="https://www.mdcnepal.com/pathology/lab-blood-test-near/<?= $_SESSION['citySlug']; ?>"
                    class="btn-main bg-btn1 btn-blue lnk wow fadeInUp text-uppercase">Book Now <span
                        class="circle"></span></a>
            </div>
        </div>
    </div>
</section>
<!-- Special Health Start -->
<section class="pt40 pb50 special-health d-none">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-12 col-sm-12 col-12 section-title text-center mb20">
                <div class="common-heading-2 ">
                    <h3 class="fs-3 text-202024">Other Special Health Tests</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <a href="therapeutic-drug-monitoring">
                    <div class="health-test">
                        <img data-src="images/lab-technician.png" alt="" class="img-fluid lazy">
                        <div class="health-testtitle text-center">
                            <p>Therapeutic drug monitoring</p>
                            <a href="#" class="mt-1">Know More</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <a href="oncology">
                    <div class="health-test">
                        <img data-src="images/oncology.png" alt="" class="img-fluid lazy">
                        <div class="health-testtitle text-center">
                            <p>Oncology</p>
                            <a href="#" class="mt-1">Know More</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <a href="pregnancy-care">
                    <div class="health-test">
                        <img data-src="images/pragenancy.png" alt="" class="img-fluid lazy">
                        <div class="health-testtitle text-center">
                            <p>Pregnancy Care</p>
                            <a href="#" class="mt-1">Know More</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Special Health End -->
<!-- end Radiology Scans & Imaging Tests -->
<section class="pt40  pb-0 schedule d-none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row section-title text-center">
                    <div class="col-sm-12 col-12">
                        <div class="common-heading-5">
                            <?php
                            $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                            if (strpos($actual_link, 'labs') !== false) {
                                $sectionTitle = $_SESSION['cityName'];
                            } else {
                                $sectionTitle = 'Nepal';
                            }
                            ?>
                            <h1 class="fs-3 text-202024 fw-bold">Trusted Diagnostic Lab Centre in <?= $sectionTitle; ?>
                            </h1>
                            <h2 class="mb20 head-2">Top-Rated Lab Testing Facilities Near You</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <img data-src="images/home/modren.png" class="lazy w-100 img-fluid h-100" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Special Health Start -->
<!-- Streamline Section Start -->
<section class="pt30 pb30 streamline d-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="common-heading-2 text-start">
                    <h3 class="text-202024">Streamline Your Test Booking: Download
                        Our App Today!</h3>
                    <p class="mt10">Download our app, made just for you! It's Easy, <br>
                        Convenient to do Test Booking !</h5>
                </div>
                <div class="email-subs-form mt20 mb20 d-none">
                    <form class="row align-items-start justify-content-start" name="subscribe_form" id="subscribe_form"
                        method="post">
                        <div class="col-lg-6 col-8 text-start">
                            <input type="text" placeholder="Enter Mobile Number" name="phone" id="phone">
                        </div>
                        <div class="col-lg-3 ps-0 col-4">
                            <button type="submit" id="sendlink_submit" class="lnk btn-main bg-btn">Send App Link <span
                                    class="circle"></span></button>
                        </div>
                    </form>
                    <div id="error_msg" class="text-center">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <div class="d-flex align-items-center">
                            <a href="https://play.google.com/store/apps/details?id=com.mdcnepal.booking"
                                target="_blank">
                                <img data-src="images/android.png" alt="" class="lazy">
                            </a>
                            <a href="https://apps.apple.com/us/app/modern-diagnostic-health-app/id6504657715"
                                target="_blank">
                                <img data-src="images/apple.png" alt="" class="ms-2 lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-12 offset-md-1">
                <img data-src="images/call.png" alt="" class="lazy">
            </div>
        </div>
    </div>
</section>
<!-- Streamline Section End -->
<!-- Testimonial Start  -->
<section class=" pt60 testimonials  testimonial-bg pb20">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class=" col-md-12">
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
<!-- Testimonial end  -->
<!-- start gallery -->
<section class="pb40 pt30 photoGallery photoGallery2 gallery-section">
    <div class="container">
        <div class="row m-auto justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading-2">
                    <h2 class="mb40 main-heading-1">Lab Insights</h2>
                </div>
            </div>
        </div>
        <div class="row g-3 normal position-relative">
            <div class="col-12">
                <div class="img-gallery-slider owl-carousel center-dots">
                    <?php for ($i = 0; $i < count($this->rs_gallery_data); $i++) {
                        $image = $this->rs_gallery_data[$i]['image'];
                        $folder = 'gallery';
                        $item_img = $this->utility->get_image_path($image, $folder, "large");
                    ?>
                        <div class="img-gallery">
                            <a data-fancybox="gallery" data-src="<?= $item_img ?>"><img src="<?= $item_img ?>" alt=""
                                    class="lazy"></a>
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
    </div>
</section>
<!-- end gallery -->
<!-- FAQ Section Start -->
<section class="pt40 pb50 faq-sec bg-white">
    <div class="container">
        <div class="row">
            <?php if (count($this->rs_faq_data) > 0) { ?>
                <div class="col-md-12 col-sm-12 col-12 section-title text-center mb20">
                    <div class="common-heading-2 ">
                        <h3 class="mb40 main-heading-1">Frequently Asked Questions?</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                        <div class="accordion" id="accordionExample">
                            <?php for ($i = 0; $i < count($this->rs_faq_data); $i++) { ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-<?= $i ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-<?= $i ?>" aria-expanded="false" aria-controls="collapseOne">
                                            <?= $this->rs_faq_data[$i]['question'] ?></button>
                                    </h2>
                                    <div id="collapse-<?= $i ?>" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $i ?>" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <div class="data-reqs">
                                                <p><?= $this->rs_faq_data[$i]['answer'] ?>
                                                </p>
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
<?php if ($this->description != '') { ?>
    <div class="col-lg-12 mt50 col-sm-12 pb50 text-center">
        <p><?= $this->description ?></p>
    </div>
<?php } ?>
<!--Start blog-->
<section class="pt40 pb40 faqSection mdrc-blog-section position-relative">
    <div class="container">
        <?php if (count($this->rs_blog) > 0) { ?>
            <div class="row position-relative">
                <div class="col-lg-12 mb40">
                    <div class="common-heading-2">
                        <h2 class="mb10 main-heading-1">From the Blogs</h2>
                        <p class="text-center">Find informative health blogs offering tips, advice, and medical knowledge.</p>
                    </div>
                </div>
                <div class="blog-section-slider owl-carousel col-lg-12">
                    <?php
                    //for blog
                    $array_bg = array('dg-bg2', 'bg-gradient12');
                    $array_bg_rand = array_rand($array_bg, 2);
                    for ($i = 0; $i < count($this->rs_blog); $i++) {
                        $blog = $this->rs_blog[$i];
                        $id = $blog['id'];
                        $blog_category_name = $blog['blog_category_name'];
                        $name = $blog['name'];
                        $short_info = $blog['short_info'];
                        $folder = $blog['folder'];
                        $image = $blog['image'];
                        $blogImage = $this->utility->get_image_path($image, 'blog/' . $folder . '/', 'large');
                        $date = $blog['entry_date_time'];
                        $old_date = date_create($date);
                        $new_date = date_format($old_date, "M d, Y");
                        $blog_category_slug = $blog['blog_category_slug'];
                        $slug = $blog['slug'];
                        $category_slug = 'blog/category/' . $blog_category_slug . '';
                        $detail_slug = 'blog/detail/' . $slug . '.html';
                    ?>
                        <div class="items">
                            <div class="single-blog-post- ">
                                <div class="single-blog-img-">
                                    <a href="<?= $detail_slug; ?>"><img data-src="<?= $blogImage; ?>" alt=""
                                            class="img-fluid owl-lazy"></a>
                                </div>
                                <div class="blog-content-tt">
                                    <div class="single-blog-info-">
                                        <h4><a href="<?= $detail_slug; ?>">
                                                <?= $name; ?>
                                            </a></h4>
                                        <p>
                                            <?= $short_info; ?>
                                        </p>
                                    </div>
                                    <div class="blog-morebtn mt-2">
                                        <a href="<?= $detail_slug; ?>" class="btn-blog">Read More</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } ?>

                </div>
                <div class="owl-theme">
                    <div class="owl-controls">
                        <div class="custom-nav owl-nav blog-buttons"></div>
                    </div>
                </div>



            </div>

            <div class="col-sm-12 col-12  text-center mt-4">
                <a href="/blog" class=" btn-main bg-btn1 btn-blue lnk wow fadeInUp text-uppercase">All Blogs</a>
            </div>
    </div>
<?php } ?>
</div>
</section>
<!--End blog-->
<!-- Start Links -->
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
<script>
</script>
<script id="rendered-js">
    /* const myCarousel = new Carousel(document.querySelector("#myCarousel"), {
		preload: 1
	});
	Fancybox.assign('[data-fancybox="carousel-gallery"]', {
		closeButton: "top",
		Thumbs: false,
		Carousel: {
			Dots: true,
			on: {
				change: that => {
					myCarousel.slideTo(myCarousel.getPageforSlide(that.page), {
						friction: 0
					});
				}
			}
		}
	});
 */
    //Owl-Carousel - Home new radio-scan
    /*  */
    //Owl-Carousel - Home testimonial
    //Lazyload For image 
    $(function() {
        var owl = $(".img-gallery-slider");
        owl.owlCarousel({
            items: 4,
            loop: true,
            autoplay: true,
            dots: false,
            margin: 15,
            center: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 3000,
            nav: true,
            //lazyLoad: true,
            navText: [
                '<img src="images/black-arrow-left.png" />',
                '<img src="images/black-arrow-right.png" />',
            ],
            navContainer: ".gallery-section .custom-nav",
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1400: {
                    items: 3,
                },
            },
        });
        $('.lazy').lazy({
            effect: 'fadeIn',
            effectTime: 1000,
        });
    });
    //Lazyload For image 
</script>
<?php include 'includes/general_data.php'; ?>


