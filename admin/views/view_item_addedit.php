<link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="lib/typicons.font/typicons.css" rel="stylesheet">
<link href="lib/prismjs/themes/prism-vs.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/dashforge.auth.css">
<link href="lib/select2/css/select2.min.css" rel="stylesheet">
<!-- DashForge CSS -->
<link rel="stylesheet" href="assets/css/dashforge.css">
<link rel="stylesheet" href="assets/css/dashforge.demo.css">
<!-- Skin CSS -->
<link rel="stylesheet" href="assets/css/skin.cool.css">
<!--<link rel="stylesheet" href="assets/css/skin.charcoal.css">-->
<!--Sweet Alert CSS & JS -->
<link href="lib/alert/css/sweet-alert.css" rel="stylesheet" type="text/css" />
<!-- file upload  -->
<link href="lib/bootstrap-file/css/fileupload.css" rel="stylesheet" type="text/css" />
<!--image popup -->
<link href="lib/magnific-popup/css/magnific-popup.css" rel="stylesheet" type="text/css" />
<!-- new added by developer -->
<link rel="stylesheet" href="assets/css/custom.css">
<style>
  .sweet-alert {
    z-index: 999999 !important;
  }

  .scrollbox {
    overflow-y: scroll;
    max-height: 220px;
    border: 1px solid #dae0e8;
  }

  .even {
    margin-left: 20px;
  }

  .price_varient {
    padding: 0;
    margin: 0;
  }
</style>
<?php include('includes/menu.php'); ?>
<div class="content ht-100v pd-0">
  <?php include('includes/header.php'); ?>
  <!-- content-header -->
  <div class="content-body">
    <div class="container pd-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              <li class="breadcrumb-item"><a href="#">Page</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                <?= $this->to_do ?>
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
      <?= $this->utility->get_message() ?>
      <? $this->htmlBuilder->buildTag("form", array("action" => "", "data-parsley-validate" => "", "class" => "form-horizontal form-bordered form-validate"), "frm_item_addedit"); ?>
      <? $this->htmlBuilder->buildTag("input", array("type" => "hidden", "value" => $this->id), "id"); ?>
      <? $this->htmlBuilder->buildTag("input", array("type" => "hidden", "value" => $this->getGetVar('pg_no')), "pg_no"); ?>
      <? $this->htmlBuilder->buildTag("input", array("type" => "hidden", "value" => "update_data"), "act"); ?>
      <? $this->htmlBuilder->buildTag("input", array("type" => "hidden", "value" => $this->folder), "folder"); ?>
      <div class="row">
        <div class="col-lg-8">
          <div data-label="item Basic Information" class="df-example demo-forms">
            <div class="form-group">
              <label class="d-block">Name <span class="tx-danger">*</span></label>
              <? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "form-control ", "required" => "", "value" => $this->rsitem['name']), "name1") ?>
            </div>
            <div class="row d-none">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="d-block">Item ID</label>
                  <? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "form-control"), "itemid") ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="d-block">Item Code</label>
                  <? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "form-control"), "itemcode") ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="d-block">Item Type <span class="tx-danger">*</span></label>
                  <? $this->htmlBuilder->buildTag("select", array("selected" => $this->rsitem['item_other_data_item_type_id'], "class" => "form-control", "values" => $this->item_type, "required" => "", "onchange" => "changeTestPackageData(this.value)"), "item_type_id") ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="d-block">Test Count <span class="tx-danger">*</span></label>
                  <? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "form-control numbers numberOnly", "required" => ""), "test_count") ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Key Features</label>
                  <select class="form-control select2" multiple="multiple" name="work_item_key_fetures[]" required="">
                    <?
                    $rs_work = $this->item_key_fetures;
                    $ids_data = $this->rsitem['item_other_data_item_key_fetures_ids'];
                    for ($i = 0; $i < count($rs_work); $i++) {
                      $micro_items = explode(',', $ids_data);
                    ?>
                      <option value="<?= $rs_work[$i]['id']; ?>" <? for ($j = 0; $j < count($micro_items); $j++) {
                                                                  if ($rs_work[$i]['id'] == trim($micro_items[$j])) {
                                                                    echo 'selected';
                                                                  }
                                                                } ?>>
                        <?= $rs_work[$i]['name']; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Department <span class="tx-danger">*</span></label>
                  <select class="form-control select2" multiple="multiple" name="work_item1[]" required="">
                    <?
                    $rs_work = $this->item_department;
                    $ids_data = $this->rsitem['item_other_data_item_department_ids'];
                    for ($i = 0; $i < count($rs_work); $i++) {
                      $micro_items = explode(',', $ids_data);
                    ?>
                      <option value="<?= $rs_work[$i]['id']; ?>" <? for ($j = 0; $j < count($micro_items); $j++) {
                                                                  if ($rs_work[$i]['id'] == trim($micro_items[$j])) {
                                                                    echo 'selected';
                                                                  }
                                                                } ?>>
                        <?= $rs_work[$i]['name']; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Diseases <span class="tx-danger">*</span></label>
                  <select class="form-control select2" multiple="multiple" name="work_item2[]" required="">
                    <?
                    $rs_work = $this->item_diseases;
                    $ids_data = $this->rsitem['item_other_data_item_diseases_ids'];
                    for ($i = 0; $i < count($rs_work); $i++) {
                      $micro_items = explode(',', $ids_data);
                    ?>
                      <option value="<?= $rs_work[$i]['id']; ?>" <? for ($j = 0; $j < count($micro_items); $j++) {
                                                                  if ($rs_work[$i]['id'] == trim($micro_items[$j])) {
                                                                    echo 'selected';
                                                                  }
                                                                } ?>>
                        <?= $rs_work[$i]['name']; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Category <span class="tx-danger">*</span></label>
                  <select class="form-control select2" multiple="multiple" name="work_item3[]" required="">
                    <?
                    $rs_work = $this->item_category;
                    $ids_data = $this->rsitem['item_other_data_item_category_ids'];
                    for ($i = 0; $i < count($rs_work); $i++) {
                      $micro_items = explode(',', $ids_data);
                    ?>
                      <option value="<?= $rs_work[$i]['id']; ?>" <? for ($j = 0; $j < count($micro_items); $j++) {
                                                                  if ($rs_work[$i]['id'] == trim($micro_items[$j])) {
                                                                    echo 'selected';
                                                                  }
                                                                } ?>>
                        <?= $rs_work[$i]['name']; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-12 testFileds" <?= $display ?>>
                <div class="form-group">
                  <label class="d-block">Reporting Time</label>
                  <? $this->htmlBuilder->buildTag("textarea", array("rows" => "2", "class" => "form-control", "value" => $this->rsitem['item_other_data_reporting_time']), "reporting_time") ?>
                </div>
              </div>
              <div class="col-lg-12 testFileds" <?= $display ?>>
                <div class="form-group">
                  <label class="d-block">Specimen</label>
                  <? $this->htmlBuilder->buildTag("textarea", array("rows" => "2", "class" => "form-control", "value" => $this->rsitem['item_other_data_specimen']), "specimen") ?>
                </div>
              </div>
              <?php
              if ($this->rsitem['item_other_data_item_type_id'] == 1) {
                $display = 'style="display:none"';
              } else {
                $display = '';
              }
              ?>
              <div class="col-lg-12 testFileds" <?= $display ?>>
                <div class="form-group">
                  <label class="d-block">Sample Remark </label>
                  <? $this->htmlBuilder->buildTag("textarea", array("rows" => "2", "class" => "form-control", "value" => $this->rsitem['item_description_sample_remark']), "sample_remark") ?>
                </div>
              </div>
              <div class="col-lg-12 testFileds" <?= $display ?>>
                <div class="form-group">
                  <label class="d-block">Sample Type Name </label>
                  <? $this->htmlBuilder->buildTag("textarea", array("rows" => "2", "class" => "form-control", "value" => $this->rsitem['item_description_sample_type_name']), "sample_type_name") ?>
                </div>
              </div>
              <div class="col-lg-12 testFileds" <?= $display ?>>
                <div class="form-group">
                  <label class="d-block">Sample Remark 1</label>
                  <? $this->htmlBuilder->buildTag("textarea", array("rows" => "2", "class" => "form-control", "value" => $this->rsitem['item_description_sample_remark1']), "sample_remark1") ?>
                </div>
              </div>
            
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Test Parameters <span class="tx-danger">*</span></label>
                  <? $this->htmlBuilder->buildTag("textarea", array("rows" => "2", "class" => "form-control ckeditor", "value" => $this->rsitem['item_description_test_parameters']), "test_parameters") ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div data-label="item Image" class="df-example demo-forms">
            <label class="d-block">Image</label>
            <?php
            $file_class = "fileupload-new";
            if ($this->getGetVar('id')) {
              if ($this->rsitem['image'] != '' &&  file_exists(ABS_PATH . "/" . $this->get_user_config("item") . '/' . $this->folder . '/' . $this->rsitem['image'])) {
                $img = '../uploads/item/' . $this->folder . '/thumb' . $this->rsitem['image'];
                $file_class = "fileupload-exists";
              } else {
                $img = 'images/img_upl.gif';
              }
            } else {
              $img = 'images/img_upl.gif';
            }
            // $file_class="fileupload-new";
            ?>
            <div class="fileupload <?= $file_class; ?>" data-provides="fileupload">
              <div class="fileupload-new"> <img src="images/img_upl.gif" class="up_img"> </div>
              <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"> <img src="<?= $img; ?>" /> </div>
              <div>
                <span class="btn btn-file btn-default">
                  <span class="fileupload-new btn btn-white btn-xs">Select image</span>
                  <span class="fileupload-exists btn btn-white btn-xs">Change</span>
                  <? $this->htmlBuilder->buildTag("input", array("type" => "file", "class" => ""), "image") ?>
                </span>
                <a href="#" class="btn btn-xs fileupload-exists btn-white" data-dismiss="fileupload">Remove</a>
              </div>
            </div>
            <span class="tx-11-f tx-danger"><strong>Dimensions :</strong> 1000 x 1000 px</span>
          </div>
          <div data-label="Gender & Days" class="df-example demo-forms">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="d-block">From Age</label>
                  <? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "form-control numbers numberOnly", "required" => "", "value" => $this->rsitem['item_description_from_age_days']), "from_age_days") ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="d-block">To Age </label>
                  <? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "form-control numbers numberOnly", "required" => "", "value" => $this->rsitem['item_description_to_age_days']), "to_age_days") ?>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Gender</label>
                  <? $this->htmlBuilder->buildTag("select", array("class" => "form-control", "selected" => $this->rsitem['item_description_gender'], "values" => array("Both" => "Both", "Male" => "Male", "Female" => "Female")), "gender") ?>
                </div>
              </div>
            </div>
          </div>
          <div data-label="Show IN" class="df-example demo-forms" <?= $display2 ?>>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Show In.</label>
                  <? $this->htmlBuilder->buildTag("select", array("class" => "form-control select2", "multiple" => "", "selected" => explode(',', $this->rsitem['item_other_data_pagewise_test']), "values" => array("therapeutic-drug-monitoring" => "Therapeutic Drug Monitoring", "oncology" => "Oncology", "pregnancy-care" => "Pregnancy Care")), "show_in[]") ?>
                </div>
              </div>
            </div>
          </div>
          <?php
          if ($this->rsitem['item_other_data_item_type_id'] == 1) {
            $display2 = '';
          } else {
            $display2 = 'style="display:none"';
          }
          ?>
          <div data-label="Popular Package" class="df-example demo-forms popPackage" <?= $display2 ?>>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Show Popular Package?</label>
                  <? $this->htmlBuilder->buildTag("select", array("class" => "form-control", "selected" => $this->rsitem['set_at_popular_package'], "values" => array("No" => "No", "Yes" => "Yes")), "set_at_popular_package1") ?>
                </div>
              </div>
            </div>
          </div>

          <?php
          if ($this->rsitem['item_other_data_item_type_id'] == 2) {
            $display3 = '';
          } else {
            $display3 = 'style="display:none"';
          }
          ?>
          <div data-label="Popular Test" class="df-example demo-forms popTest" <?= $display3 ?>>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Show Popular Test?</label>
                  <? $this->htmlBuilder->buildTag("select", array("class" => "form-control", "selected" => $this->rsitem['set_at_popular_test'], "values" => array("No" => "No", "Yes" => "Yes")), "set_at_popular_test1") ?>
                </div>
              </div>
            </div>
          </div>
          <div data-label="item Other Data" class="df-example demo-forms">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="d-block">Prescription Required?</label>
                  <? $this->htmlBuilder->buildTag("select", array("class" => "form-control", "selected" => $this->rsitem['item_description_prescription_required'], "values" => array("No" => "No", "Yes" => "Yes"), "onchange" => "changeData(this.value)"), "prescription_required") ?>
                </div>
              </div>
              <?php
              if ($this->rsitem['item_description_prescription_required'] == 'Yes') {
                $display1 = '';
              } else {
                $display1 = 'style="display:none"';
              }
              ?>
              <div class="col-lg-12 otherFileds" <?= $display1 ?>>
                <div class="form-group">
                  <label class="d-block">Required Attachment </label>
                  <? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "form-control ", "value" => $this->rsitem['item_description_required_attachment']), "required_attachment") ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="d-block">Show Home?</label>
                  <? $this->htmlBuilder->buildTag("select", array("class" => "form-control", "values" => array("No" => "No", "Yes" => "Yes")), "set_at_home") ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="d-block">Status</label>
                  <? $this->htmlBuilder->buildTag("select", array("class" => "form-control", "values" => array("Active" => "Active", "Inactive" => "Inactive")), "status") ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="d-block">Sort Order</label>
                  <? $this->htmlBuilder->buildTag("select", array("class" => "form-control", "values" => $this->utility->sort_order('item')), "sort_order") ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label class="d-block">Description</label>
            <? $this->htmlBuilder->buildTag("textarea", array("type" => "text", "class" => "form-control ckeditor", "style" => "height:150px", "value" => $this->rsitem['item_other_data_description']), "description") ?>
          </div>
        </div>
      </div>
      <div class="row varientMasterRow">
        <div class="col-lg-12">
          <div data-label="Item Price" class="df-example demo-forms">
            <input type="hidden" name="masterRowID" id="masterRowID" value="<?= count($this->rs_tab_data) + 1 ?>">
            <div style="display:none">
              <? $this->htmlBuilder->buildTag("select", array("values" => $this->citys, "class" => "span12 form-control", "id" => "attrmaster", "name" => ""), "") ?>
              <? $this->htmlBuilder->buildTag("select", array("values" => $this->certies, "class" => "span12 form-control", "id" => "cert_attr_master", "name" => ""), "") ?>
              <? $this->htmlBuilder->buildTag("select", array("values" => $this->labsList, "class" => "span12 form-control", "id" => "lab_attr_master", "name" => ""), "") ?>
            </div>
            <div class="form-group" id="price_varient">
              <div class="col-md-12">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th width="15%" class="atr1_span">City <span class="tx-danger">*</span></th>
                      <th width="15%">Price <span class="tx-danger">*</span></th>
                      <th width="15%">MRP</th>
                      <th width="15%">Schedule Price</th>
                      <th width="15%">Start Date</th>
                      <th width="15%">End Date</th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody id="use_rows">
                    <?php
                    for ($i = 0; $i < count($this->rs_tab_data); $i++) {
                      $pa = $this->rs_tab_data[$i];
                      $attribute_1 = $pa["city_id"];
                      $price = $pa["price"];
                      $mrp = $pa["mrp"];
                      if ($mrp <= 0) {
                        $mrp = '';
                      }
                      $sch_prices = $pa["sch_price"];
                      if ($sch_prices <= 0) {
                        $sch_prices = '';
                      }
                      $starts = $pa["sch_start_date"];
                      $ends = $pa["sch_end_date"];
                      $item_certificate_ids = $pa["item_certificate_ids"];
                      $item_lab_ids = $pa["item_lab_ids"];
                      $table_id = $pa["id"];
                    ?>
                      <tr class="rowd_<?= $table_id ?>">
                        <td><? $this->htmlBuilder->buildTag("select", array("values" => $this->citys, "class" => "span12 form-control required", "selected" => $attribute_1, "id" => "attr1", "name" => "attr1[]"), "") ?>
                          <input type="hidden" name="meeting_task_id[]" value="<?= $table_id ?>">
                          <input type="hidden" name="master_data_id[]" value="<?= $i ?>">
                        </td>
                        <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control numbersOnly", "value" => $price, "id" => "price", "name" => "prices[]"), "") ?></td>
                        <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control numbersOnly", "value" => $mrp, "id" => "mrp", "name" => "mrps[]"), "") ?></td>
                        <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control numbersOnly", "value" => $sch_prices, "id" => "sch_prices", "name" => "sch_prices[]"), "") ?>
                        </td>
                        <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control input-datepicker", "autocomplete" => "off", "value" => $starts, "id" => "starts_e_" . $i . "", "name" => "starts[]"), "") ?>
                        </td>
                        <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control input-datepicker", "autocomplete" => "off", "value" => $ends, "id" => "ends_e_" . $i . "", "name" => "ends[]"), "") ?></td>
                        <td><a style="color:#fff" class="btn btn-xs btn-danger record_delete_attribute_onclick" data-id="<?= $pa['id']; ?>" data-tableid="<?= $pa['id']; ?>" data-tablename="item_price" rel="tooltip" title="Delete"> <i class="fa fa-trash"></i></a></td>
                      </tr>
                      <tr class="rowd_<?= $table_id ?>">
                        <td colspan="1" style="border:none"><label>Certificate :</label></td>
                        <td colspan="5" style="border:none">
                          <select class="form-control select2" multiple="multiple" name="work_certi_item_<?= $i ?>[]">
                            <?
                            $rs_work = $this->rs_item_certificate;
                            for ($m = 0; $m < count($rs_work); $m++) {
                              $micro_items = explode(',', $item_certificate_ids);
                            ?>
                              <option value="<?= $rs_work[$m]['id']; ?>" <? for ($j = 0; $j < count($micro_items); $j++) {
                                                                          if ($rs_work[$m]['id'] == trim($micro_items[$j])) {
                                                                            echo 'selected';
                                                                          }
                                                                        } ?>>
                                <?= $rs_work[$m]['name']; ?>
                              </option>
                            <?php } ?>
                          </select>
                        </td>
                      </tr>

                      <tr class="rowd_<?= $table_id ?>">
                        <td colspan="1" style="border:none"><label>Choose Lab :</label></td>
                        <td colspan="5" style="border:none">
                          <select class="form-control select2" multiple="multiple" name="work_lab_item_<?= $i ?>[]">
                            <? $rs_lab = $this->rs_item_lab;
                            for ($m = 0; $m < count($rs_lab); $m++) {
                              $micro_items = explode(',', $item_lab_ids);
                            ?>
                              <option value="<?= $rs_lab[$m]['id']; ?>" <? for ($j = 0; $j < count($micro_items); $j++) {
                                                                          if ($rs_lab[$m]['id'] == trim($micro_items[$j])) {
                                                                            echo 'selected';
                                                                          }
                                                                        } ?>>
                                <?= $rs_lab[$m]['name']; ?>
                              </option>
                            <?php } ?>
                          </select>
                        </td>
                      </tr>

                    <?php } ?>
                    <?php
                    $mi = $i + 1;
                    ?>
                    <tr>
                      <td><? $this->htmlBuilder->buildTag("select", array("values" => $this->citys, "class" => "span12 form-control", "id" => "attr1", "name" => "attr1[]"), "") ?>
                        <input type="hidden" name="meeting_task_id[]" value="">
                        <input type="hidden" name="master_data_id[]" value="<?= $mi ?>">
                      </td>
                      <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control numbersOnly", "id" => "price", "name" => "prices[]"), "") ?></td>
                      <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control numbersOnly", "id" => "mrp", "name" => "mrps[]"), "") ?></td>
                      <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control numbersOnly", "id" => "sch_prices", "name" => "sch_prices[]"), "") ?>
                      </td>
                      <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control input-datepicker", "id" => "starts_p_0", "data-date-format" => "dd-mm-yyyy", "autocomplete" => "off", "name" => "starts[]"), "") ?>
                      </td>
                      <td><? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "span12 form-control input-datepicker", "id" => "ends_p_0", "data-date-format" => "dd-mm-yyyy", "autocomplete" => "off", "name" => "ends[]"), "") ?></td>
                      <td></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="1" style="border:none"><label>Certificate :</label></td>
                      <td colspan="5" style="border:none">
                        <select class="form-control select2" multiple="multiple" name="work_certi_item_<?= $mi ?>[]">
                          <?
                          $rs_work = $this->rs_item_certificate;
                          $item_certificate_ids = '';
                          for ($m = 0; $m < count($rs_work); $m++) {
                            $micro_items = explode(',', $item_certificate_ids);
                          ?>
                            <option value="<?= $rs_work[$m]['id']; ?>" <? for ($j = 0; $j < count($micro_items); $j++) {
                                                                        if ($rs_work[$m]['id'] == trim($micro_items[$j])) {
                                                                          echo 'selected';
                                                                        }
                                                                      } ?>>
                              <?= $rs_work[$m]['name']; ?>
                            </option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="1" style="border:none"><label>Choose Lab :</label></td>
                      <td colspan="5" style="border:none">
                        <select class="form-control select2" multiple="multiple" name="work_lab_item_<?= $mi ?>[]">
                          <?
                          $rs_lab = $this->rs_item_lab;
                          for ($m = 0; $m < count($rs_lab); $m++) { ?>
                            <option value="<?= $rs_lab[$m]['id']; ?>"><?= $rs_lab[$m]['name']; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>

                  </tbody>
                </table>
                <div class="padding-7" style="text-align:right;"> <a class="btn btn-sm btn-success" href="javascript:add_attr_fields();"> <i class="icon-plus "></i> <strong>+ </strong></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div data-label="Meta Description" class="df-example demo-forms">
            <div class="form-group">
              <label class="d-block">Title <span class="tx-danger">*</span></label>
              <? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "form-control ", "value" => $this->rsitem['item_other_data_meta_title']), "meta_title") ?>
            </div>
            <div class="form-group">
              <label class="d-block">Keywords <span class="tx-danger">*</span></label>
              <? $this->htmlBuilder->buildTag("input", array("type" => "text", "class" => "form-control ", "value" => $this->rsitem['item_other_data_meta_keywords']), "meta_keywords") ?>
            </div>
            <div class="form-group">
              <label class="d-block">Description <span class="tx-danger">*</span></label>
              <? $this->htmlBuilder->buildTag("textarea", array("type" => "text", "class" => "form-control ", "value" => $this->rsitem['item_other_data_meta_desc']), "meta_desc") ?>
            </div>
            <div class="form-group">
              <label class="d-block">Meta Schema</label>
              <? $this->htmlBuilder->buildTag("textarea", array("type" => "text", "class" => "form-control ", "value" => $this->rsitem['item_other_data_meta_schema']), "meta_schema") ?>
            </div>
            <div class="form-group">
              <label class="d-block">Note : Write city name like {CITY} in meta details. It will change with current city. <span class="tx-danger">*</span></label>
            </div>
          </div>
        </div>
      </div>
      <div class="row mg-t-15">
        <div class="col-lg-12">
          <input type="hidden" name="save_btn" id="save_btn" value="Save">
          <button class="btn btn-primary" id="item_btn" onclick="update_type('Save')" type="submit">Save</button>
          <a class="btn btn-secondary" href="index.php?view=item_list">Cancel</a>
        </div>
      </div>
      </form>
      <?php include('includes/footer.php'); ?>
    </div>
    <!-- container -->
  </div>
</div>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/feather-icons/feather.min.js"></script>
<script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="lib/prismjs/prism.js"></script>
<script src="lib/parsleyjs/parsley.min.js"></script>
<script src="lib/select2/js/select2.min.js"></script>
<script>
  // Adding placeholder for search input
  (function($) {
    'use strict'
    var Defaults = $.fn.select2.amd.require('select2/defaults');
    $.extend(Defaults.defaults, {
      searchInputPlaceholder: ''
    });
    var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');
    var _renderSearchDropdown = SearchDropdown.prototype.render;
    SearchDropdown.prototype.render = function(decorated) {
      // invoke parent method
      var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));
      this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));
      return $rendered;
    };
  })(window.jQuery);
  $(function() {
    'use strict'
    // Basic with search
    $('.select2').select2({
      placeholder: 'Choose one',
      searchInputPlaceholder: 'Search options'
    });
  });
</script>
<script src="lib/typeahead.js/typeahead.bundle.min.js"></script>
<script src="lib/handlebars/handlebars.min.js"></script>
<script src="assets/js/dashforge.aside.js"></script>
<script src="assets/js/dashforge.js"></script>
<!-- other include -->
<script src="lib/alert/js/sweet-alert.min.js"></script>
<script src="lib/alert/js/jquery.sweet-alert.init.js"></script>
<script>
  $(document).on("click", ".record_delete_attribute_onclick", function() {
    var getid = $(this).data('id');
    var tableid = $(this).data('tableid');
    var tablename = $(this).data('tablename');
    if (tableid != '' && getid != '' && tablename != '') {
      swal({
        title: "Are you sure?",
        text: "You will not be able to undo after this action!",
        type: "warning",
        showCancelButton: true,
        cancelButtonClass: 'btn-primary',
        confirmButtonClass: 'btn-warning',
        confirmButtonText: "Yes, delete it!",
        confirmButtonClass: "confirm btn btn-lg btn-warning xyz",
        closeOnConfirm: true
      }, function(r) {
        if (r == true) {
          $.ajax({
            type: "POST",
            dataType: 'json',
            url: "scripts/ajax/index.php",
            data: "method=item&actionType=item_option_delete&tableid=" + tableid + "&getid=" + getid + "&tablename=" + tablename,
            success: function(data) {
              if (data.RESULT == 0) {
                $('.rowd_' + getid).html('');
              } else {
                swal({
                  title: "Try Again...",
                  text: data.msg,
                  type: "warning",
                  timer: 1000
                });
                return false;
              }
            }
          });
        } else {
          return false;
        }
      });
    } else {
      swal({
        title: "Try Again...",
        text: "Oops Something gone wrong...",
        type: "warning",
        timer: 1500
      });
      return false;
    }
  });

  function remove_user_row(del_id) {
    var row_id = "row_" + del_id;
    $("." + row_id).remove();
  }

  function add_attr_fields() {
    var attrmaster = $("#attrmaster").html();
    var cert_attr_master = $("#cert_attr_master").html();
    var lab_attr_master = $("#lab_attr_master").html();


    //var total_rows=$("#use_rows tr").length;
    var total_rows = $("#masterRowID").val();
    var row_id = parseInt(total_rows) + 1;
    var html_table_row = '<tr class="row_' + row_id + '">';
    html_table_row += '<td> <select class="span12 form-control" id="attr1" name="attr1[]">' + attrmaster + '</select> <input type="hidden" name="meeting_task_id[]" value=""><input type="hidden" name="master_data_id[]" value="' + row_id + '"></td>';
    html_table_row += '<td> <input type="text" id="price_' + row_id + '" name="prices[]" class="form-control numbersOnly span12"  /> </td>';
    html_table_row += '<td> <input type="text" id="mrp_' + row_id + '" name="mrps[]" class="form-control numbersOnly span12"  /></td>';
    html_table_row += '<td> <input type="text" id="sch_prices_' + row_id + '" name="sch_prices[]" class="form-control numbersOnly span12 "  /> </td>';
    html_table_row += '<td> <input type="text" id="starts_' + row_id + '" name="starts[]" class="form-control  span12  input-datepicker" autocomplete="off"  /> </td>';
    html_table_row += '<td> <input type="text" id="ends_' + row_id + '" name="ends[]" class="form-control  span12 input-datepicker" autocomplete="off"  /> </td>';
    html_table_row += '<td> <a class="btn btn-sm btn-danger" href="javascript:remove_user_row(' + row_id + ')"> <i class="icon-remove"></i>  <strong>X</strong> </a></td>';
    html_table_row += '</tr>';
    html_table_row += '<tr class="row_' + row_id + '"><td colspan="1" style="border:none"><label>Certificate  :</label></td><td colspan="5" style="border:none"><select class="form-control select2" multiple="multiple" name="work_certi_item_' + row_id + '[]" >' + cert_attr_master + '</select></td></tr>';
    html_table_row += '<tr class="row_' + row_id + '"><td colspan="1" style="border:none"><label>Choose Lab  :</label></td><td colspan="5" style="border:none"><select class="form-control select2" multiple="multiple" name="work_lab_item_' + row_id + '[]" >' + lab_attr_master + '</select></td></tr>';
    $('#use_rows tr:last').after(html_table_row);
    $("#masterRowID").val(row_id);
    $('.select2').select2({
      placeholder: 'Choose one',
    });
    jQuery(document).ready(function($) {});
    $('.input-datepicker').datepicker({
      dateFormat: 'dd-mm-yy',
    })
    $('.numbersOnly').keyup(function() {
      if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
        this.value = this.value.replace(/[^0-9\.]/g, '');
      }
    });
  }

  function update_type(a) {
    $("#save_btn").val(a);
  }

  function change_dtypes(a) {
    if (a == 'in_pkt') {
      $(".dtype").html('Pkt');
    } else if (a == 'in_pcs') {
      $(".dtype").html('Pcs');
    } else if (a == 'in_ltr') {
      $(".dtype").html('Ml');
    } else if (a == 'in_gm') {
      $(".dtype").html('Gram');
    } else {
      $(".dtype").html('Pkt');
    }
  }

  function show_suggestion(s) {
    var value = s.toLowerCase();
    $(".scrollbox .even").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  }
  $(document).on("click", "#item_btn", function() {
    $('#frm_item_addedit').validate({
      rules: {
        banner: {
          required: true,
          minlength: 5,
          maxlength: 5
        },
      },
      submitHandler: function(form) {
        $('#item_btn').html('<span class="spinner-border spinner-border-sm mg-r-5" role="status" aria-hidden="true"></span> Loading...');
        $("#item_btn").attr("disabled", true);
        var dataString = new FormData(form);
        dataString.append('method', 'item');
        dataString.append('actionType', 'itemAddEdit');
        $.ajax({
          dataType: 'json',
          type: "POST",
          url: "scripts/ajax/index.php",
          data: dataString,
          cache: false,
          contentType: false,
          processData: false,
          success: function(responseData) {
            if (responseData.RESULT == '0') {
              form.submit();
            } else {
              $('#item_btn').html('Submit');
              $("#item_btn").attr("disabled", false);
              $.bootstrapGrowl('<h4><strong>Notification</strong></h4> <p>' + responseData.msg + '</p>', {
                type: 'danger',
                delay: 3000,
                allow_dismiss: true,
                offset: {
                  from: 'top',
                  amount: 20
                }
              });
            }
          },
          error: function(responseData) {
            console.log('Ajax request not recieved!');
          }
        });
        return false;
      }
    });
  });
</script>
<!-- file upload  -->
<script src="lib/bootstrap-file/js/fileupload.js"></script>
<!-- image popup -->
<script src="lib/magnific-popup/js/jquery.magnific-popup.js"></script>
<script src="lib/validate/js/jquery.validate.min.js"></script>
<!-- Custom -->
<script src="scripts/js/grocery.js"></script>
<!-- ckeditor -->
<script src="lib/editor/ckeditor/ckeditor.js"></script>
<script src="lib/jqueryui/jquery-ui.min.js"></script>
<link rel="stylesheet" href="lib/selectdropdown/jquery-ui.min.css">
<script>
  function changeTestPackageData(a) {
    $(".popPackage").hide();
    $(".popTest").hide();
    if (a == 1) {
      $(".testFileds").hide();
      $(".popPackage").show();
    } else {
      $(".testFileds").show();
      $(".popTest").show();
    }
  }

  function changeData(id) {
    if (id == 'No') {
      $(".otherFileds").hide();
    } else {
      $(".otherFileds").show();
    }
  }
  $('.input-datepicker').datepicker({
    dateFormat: 'dd-mm-yy'
  })
</script>