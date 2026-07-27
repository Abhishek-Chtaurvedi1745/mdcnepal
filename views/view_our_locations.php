<!--plugin-css-->
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
<link href="css/custom.css" rel="stylesheet">
<!-- <link href="css/custom2.css" rel="stylesheet"> -->


<!--Start Header -->

<?php include 'includes/header.php'; ?>

<!--End Header -->

<!--Breadcrumb Area-->
<section class="breadcrumb-area contact-area">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-start">
                    <h1 class="f-bold fs-2 text-white">Contact Us</h1>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->



<!--Start Location-->
<section class="contact-info pad-tb">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 inside" style="display:none">
                <div class="">
                    <?php for ($i = 0; $i < count($this->rs_branch); $i++) { ?>
                        <div class="ouroffice mb30">
                            <div class="common-heading text-l">
                                <h4 class="mt0 mb0"><?= $this->rs_branch[$i]['name'] ?></h4>
                            </div>
                            <?php if ($this->rs_branch[$i]['email1'] != '') { ?>
                                <div class="media mt15">
                                    <div class=" new-icon"><img src="./images/contact/mail.svg" alt=""></div>
                                    <div class="media-body getintouchinfo">
                                        <a href="mailto:<?= $this->rs_branch[$i]['email1'] ?>">Email :
                                            <?= $this->rs_branch[$i]['email1'] ?></a>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($this->rs_branch[$i]['email2'] != '') { ?>
                                <div class="media mt15">
                                    <div class=" new-icon"><img src="./images/contact/mail.svg" alt=""></div>
                                    <div class="media-body getintouchinfo">
                                        <a href="mailto:<?= $this->rs_branch[$i]['email2'] ?>">Email :
                                            <?= $this->rs_branch[$i]['email2'] ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($this->rs_branch[$i]['phone1'] != '') { ?>
                                <div class="media mt15">
                                    <div class="new-icon"><img src="./images/contact/phone.svg" alt=""></div>
                                    <div class="media-body getintouchinfo">
                                        <a href="tel: <?= $this->rs_branch[$i]['phone1'] ?>">Phone :
                                            <?= $this->rs_branch[$i]['phone1'] ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($this->rs_branch[$i]['phone2'] != '') { ?>
                                <div class="media mt15">
                                    <div class="new-icon"><img src="./images/contact/phone.svg" alt=""></div>
                                    <div class="media-body getintouchinfo">
                                        <a href="tel: <?= $this->rs_branch[$i]['phone2'] ?>">Phone :
                                            <?= $this->rs_branch[$i]['phone2'] ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="media mt15">
                                <div class="new-icon"><img src="./images/contact/pin.svg" alt=""></div>
                                <div class="media-body getintouchinfo">
                                    <span>Address : <?= $this->rs_branch[$i]['address'] ?></span>
                                </div>
                            </div>
                            <!-- <a href="#" target="blank">View on map <i class="fas fa-location-arrow fa-icon"></i></a> -->
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-5 inside">
                <div>
                    <h3 class="mb20 main-heading-1">Our Labs :</h3>
                </div>
                <div class="ouroffice mb30">
                    <div class="common-heading text-l">
                        <h4 class="mt0 mb0 text-start">KATHMANDU - Modern Diagnostic Center Nepal Pvt. Ltd.</h4>
                    </div>
                    <div class="media mt15">
                        <div class=" new-icon"><img src="./images/contact/mail.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <a href="mailto:customercare@mdcnepal.com">customercare@mdcnepal.com</a>
                        </div>
                    </div>
                    <div class="media mt15">
                        <div class="new-icon"><img src="./images/contact/phone.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <a href="tel: 01-4377425"> 01-4377425 / 01-4377450 / 9801081735</a>
                        </div>
                    </div>
                    <div class="media mt15">
                        <div class="new-icon"><img src="./images/contact/pin.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <span>Opposite, Bhatbhateni Supermarket,
                                Maharajgunj Kathmandu</span>
                        </div>
                    </div>
                </div>
                <div class="ouroffice mb30">
                    <div class="common-heading text-l">
                        <h4 class="mt0 mb0 text-start">BUTWAL - Modern Diagnostic Center Nepal Pvt. Ltd.</h4>
                    </div>
                    <div class="media mt15">
                        <div class=" new-icon"><img src="./images/contact/mail.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <a href="mailto:customercare@mdcnepal.com">customercare@mdcnepal.com</a>
                        </div>
                    </div>
                    <div class="media mt15">
                        <div class="new-icon"><img src="./images/contact/phone.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <a href="tel: 01-4377425"> 01-4377425 / 01-4377450 / 9801081735 </a>
                        </div>
                    </div>
                    <div class="media mt15">
                        <div class="new-icon"><img src="./images/contact/pin.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <span>Opposite to Kalikanagar -09,Opposite to Club Denovo ,Rupendehi Butwal,Nepal</span>
                        </div>
                    </div>

                </div>
                <div class="ouroffice mb30">

                    <div>
                        <h3 class="mb20 main-heading-1 mt-4 text-start">Collection Center :</h3>
                    </div>

                    <div class="media mb30">
                        <div class="new-icon"><img src="./images/contact/pin.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <span> Modern Diagnostic Center, Galkophakha Thamel. <br>

                            </span>
                        </div>
                    </div>
                    <div class="media mb30">
                        <div class="new-icon"><img src="./images/contact/phone.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <a href="tel:+977-9801081734">+977-9801081734</a>
                        </div>
                    </div>
                    <div class="media mb30">
                        <div class="new-icon"><img src="./images/contact/pin.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <span> Modern Diagnostic Center, Sainbu Awas-26, Bhaisipati, Lalitpur. <br>
                            </span>
                        </div>
                    </div>
                    <div class="media mb30">
                        <div class="new-icon"><img src="./images/contact/phone.svg" alt=""></div>
                        <div class="media-body getintouchinfo">
                            <a href="+977-9802323282">+977-9802323282 </a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-7">
                <div class="contact-form shadow">
                    <div class="common-heading text-l mb20">
                        <h3 class="mt0 mb0">Fill the Form Below and Our Executives Will Contact You Soon!</h3>
                    </div>
                    <div class="contact-form-card-pr contact-block-sw m0 iconin">
                        <div class="form-block niwaxform">
                            <form id="GetCallBackForm1" name="GetCallBackForm1" class="shake">
                                <div class="fieldsets row">
                                    <div class="col-md-12 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-user"></i></div>
                                        <!-- <input type="text" id="name" name="name" placeholder="Name" data-error="Please fill Out"> -->
                                        <input type="text" placeholder=" " required="required" id="name"
                                            data-error="Please fill Out" class="floating-input" name="name">
                                        <label>Full Name*</label>
                                        <div class="help-block with-errors"></div>
                                        <!-- <div class="error-label"></div> -->
                                    </div>
                                    <div class="col-md-12 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-envelope"></i></div>
                                        <input type="email" placeholder=" " required="required" id="email"
                                            class="floating-input" name="email">
                                        <label>Email Address*</label>
                                        <div class="error-label"></div>
                                    </div>
                                    <div class="col-md-12 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-phone-alt"></i></div>
                                        <input type="text" id="phone" placeholder=" " required="required"
                                            class="floating-input numbers numbersOnly" name="phone">
                                        <label>Mobile Number*</label>
                                        <div class="error-label"></div>
                                    </div>
                                    <div class="col-md-12 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-map-marker-alt"></i></div>
                                        <select required="required" class="floating-select" name="city" id="city">
                                            <option value="">&nbsp;</option>
                                            <?php for ($i = 0; $i < count($this->rs_gs_city); $i++) { ?>
                                                <option value="<?= $this->rs_gs_city[$i]['name'] ?>">
                                                    <?= $this->rs_gs_city[$i]['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <label>City*</label>
                                        <div class="error-label"></div>
                                    </div>
                                    <div class="col-md-12 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-comment-dots"></i></div>
                                        <textarea placeholder=" " required="required" id="fmessage"
                                            class="floating-input" name="fmessage"></textarea>
                                        <label>*Write your query*</label>
                                        <div class="error-label"></div>
                                    </div>
                                    <div class="col-md-12 mt15 ">
                                        <div class="d-flex justify-content-center">
                                            <div class="col-4">
                                                <button id="form-submit" type="submit"
                                                    data-form="GetCallBackForm1"
                                                    class="btn-main bg-btn1 btn-blue lnk wow fadeInUp text-uppercase w-100 get-call-back-submit"><span>Submit</span>
                                                    <span class="loader"></span></button>
                                            </div>
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
</section>
<!--End Location-->


<div class="contact-location pad-tb pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card card-cust location-card">
                    <div class="map-div">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113041.98835321501!2d85.2586154573385!3d27.699925013004947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb194674bf9d47%3A0xae1fd490ef047e82!2sBhat-Bhateni%20Department%20Store!5e0!3m2!1sen!2sin!4v1727435184903!5m2!1sen!2sin"
                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16797.438839123013!2d85.33596301425574!3d27.74115823275414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb194674bf9d47%3A0xae1fd490ef047e82!2sBhat-Bhateni%20Department%20Store!5e0!3m2!1sen!2sin!4v1727441388188!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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