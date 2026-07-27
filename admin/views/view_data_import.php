<link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="lib/typicons.font/typicons.css" rel="stylesheet">
<link href="lib/prismjs/themes/prism-vs.css" rel="stylesheet">
<link href="lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="lib/select2/css/select2.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/dashforge.css">
<link rel="stylesheet" href="assets/css/dashforge.demo.css">
<link rel="stylesheet" href="assets/css/skin.cool.css">
<link rel="stylesheet" href="assets/css/custom.css">
<link href="lib/alert/css/sweet-alert.css" rel="stylesheet" type="text/css" />
<link href="lib/bootstrap-file/css/fileupload.css" rel="stylesheet" type="text/css" />
<link href="lib/magnific-popup/css/magnific-popup.css" rel="stylesheet" type="text/css" />

<?php include('includes/menu.php'); ?>
<div class="content ht-100v pd-0">
  <?php include('includes/header.php'); ?>
  <!-- sidebar -->
  <div class="section-nav" style="display:none;">
    <label class="nav-label">On This Page</label>
    <nav id="navSection" class="nav flex-column"> <a href="#section1" class="nav-link">Basic DataTable</a> <a href="#section2" class="nav-link">Responsive DataTable</a> <a href="#section3" class="nav-link">Data Source (Array)</a> <a href="#section4" class="nav-link">Data Source (Object)</a> </nav>
  </div>
  <!-- df-section-nav -->


  <?php if ($this->file_name == "") { ?>

    <div class="content-body">
      <div class="container pd-x-0">

        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
          <div>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="#">System Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?= $this->manage_for ?>
                </li>
              </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">
              <?= $this->to_do ?>
              <?= $this->manage_for ?>
            </h4>
          </div>
          <div class="d-none d-md-block"> </div>
        </div>

        <?= $this->utility->get_message(); ?>
        <? $this->htmlBuilder->buildTag("form", array("action" => "", "class" => "form-horizontal form-bordered form-validate"), "frm_gallery_addedit"); ?>
        <? $this->htmlBuilder->buildTag("input", array("type" => "hidden", "value" => "import_product"), "act"); ?>

        <div class="row">
          <div class="col-lg-12">
            <div data-label="Data Import" class="df-example demo-forms">
              <div class="form-group">
                <label class="col-md-3 control-label" for="example-select">Select Excel</label>
                <div class="col-md-6">
                  <? $this->htmlBuilder->buildTag("input", array("type" => "file", "class" => "form-control required"), "imp_file") ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label" for="example-select">Note :</label>
                <div class="col-md-9">
                  <p>1) Don't enter any special char (<strong> for ex. ' , "" , * , % , $ etc</strong> ) in any column. <br />
                  </p>
                </div>
              </div>
              <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                  <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                  <a href="index.php?view=item_list" class="btn btn-effect-ripple btn-danger">Cancel</a>
                </div>
              </div>

            </div>
          </div>
        </div>
        <?= $this->htmlBuilder->closeForm() ?>
      </div>
    </div>
  <?php } else { ?>
    <div class="content-body">
      <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
          <div>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="#">System Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?= $this->manage_for ?>
                </li>
              </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">
              <?= $this->to_do ?>
              <?= $this->manage_for ?>
            </h4>
          </div>
          <div class="d-none d-md-block"> </div>
        </div>
        <link href="../css/stylesheet.css" rel="stylesheet">
        <input name="imf" id="imf" type="hidden" value="<?= $this->file_name; ?>" />
        <input name="price_group" id="price_group" type="hidden" value="<?= $this->price_group; ?>" />
        <input name="company" id="company" type="hidden" value="<?= $this->company; ?>" />
        <div id="preloader">
          <div id="status_loader"> please wait while we are processing.. </div>
        </div>
        <div id="upresponse_msg"></div>
        <div id="errordata" style="color:red; font-size:18px"></div>
        <!-- <div data-label="Data Import" class="df-example demo-forms"> -->
          <div class="panel panel-default">
            <div class="panel-heading"> </div>
            <div class="panel-body" style="height:600px; overflow:auto "> <?php echo $this->excel_preview; ?> </div>
            <div class="panel-footer" style="margin-top:20px; clear:both">
              <button type="button" <?= $this->btn_hide ?> id="putthemin" class="btn btn-info"><i class="fa  fa-check-square-o"></i> Import Data</button>
              <a href="index.php?view=data_import" id="putthemin" class="btn btn-warning" style="margin-left:15px"><i class="fa  fa-times"></i> Cancel</a>
            </div>
          </div>
        <!-- </div> -->
      </div>
    </div>
  <?php } ?>
  <?php include('includes/footer.php'); ?>
</div>
</div>
</div>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/feather-icons/feather.min.js"></script>
<script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="lib/prismjs/prism.js"></script>
<script src="lib/parsleyjs/parsley.min.js"></script>
<script src="lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<script src="lib/select2/js/select2.min.js"></script>
<script src="assets/js/dashforge.aside.js"></script>
<script src="assets/js/dashforge.js"></script>
<script src="lib/alert/js/sweet-alert.min.js"></script>
<script src="lib/alert/js/jquery.sweet-alert.init.js"></script>
<script src="lib/bootstrap-file/js/fileupload.js"></script>
<script src="lib/magnific-popup/js/jquery.magnific-popup.js"></script>
<script src="lib/validate/js/jquery.validate.min.js"></script>
<script src="lib/jqueryui/jquery-ui.min.js"></script>
<link rel="stylesheet" href="lib/selectdropdown/jquery-ui.min.css">
<script src="scripts/js/grocery.js"></script>
<link href='lib/selectdropdown/jquery-ui.min.css' rel='stylesheet' type='text/css'>
<script src='lib/selectdropdown/jquery-ui.min.js' type='text/javascript'></script>

<script>
  $(function() {
    FormsComponents.init();
  });
</script>
<script src="js/pages/admin.js"></script>
<script>
  $(document).ready(function() {
    $("#putthemin").click(function() {

      $('#status_loader').fadeIn();
      $('#preloader').delay(350).fadeIn(function() {});

      var dsf = $("#imf").val();
      var price_group = $("#price_group").val();
      var company = $("#company").val();


      $.ajax({
        type: "POST",
        dataType: 'json',
        url: "scripts/ajax/index.php",
        data: "method=import&file=" + dsf,
        success: function(data) {
          alert('success');
          $('#status_loader').fadeOut();
          window.location.href = "index.php?view=item_list";

          $('#preloader').delay(350).fadeOut(function() {});
        },
        error: function(xhr, status, error) {
          alert('error');
        }
      });
    });
  });
</script>