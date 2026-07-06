<?php

ini_set('precision', '20');
ini_set("max_execution_time", 12000);
ini_set("upload_max_filesize", 64);
ini_set("memory_limit",-1);
ini_set("display_errors", "off");

$abc='';

$jsonclass = $app->load_module("Services_JSON");
$obj_JSON = new $jsonclass(SERVICES_JSON_LOOSE_TYPE);
$filename=$app->getPostVar("file");
$company=$app->getPostVar("company");
$price_group=$app->getPostVar("price_group");
$inputFileName = ABS_PATH.$app->get_user_config("imports").$filename;

if(file_exists($inputFileName))
{
	//import data
	$obj_excel = $app->load_module("PHPExcel");
	$path = $inputFileName;
	$objPHPExcel = PHPExcel_IOFactory::load($path);

	foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
	{
	    $worksheetTitle     = $worksheet->getTitle();
	    $highestRow         = $worksheet->getHighestRow(); // e.g. 10
	    $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
	    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

    	$nrColumns = ord($highestColumn) - 64;

		$a='';
		$b='';
		$c='';

		$data_rowid=array();

		for ($row =2; $row <= $highestRow; ++ $row)
		{
			## GET EXCEL VALUE SINGLE ROW WISE COLUMN
			$test_code=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('A'.$row)->getValue());
			$name=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('B'.$row)->getValue());
			$test_parameter=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('C'.$row)->getValue());
			$item_type=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('D'.$row)->getValue());
			$test_count=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('E'.$row)->getValue());
			$key_features=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('F'.$row)->getValue());
			$department=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('G'.$row)->getValue());
			$diseases=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('H'.$row)->getValue());
			$category=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('I'.$row)->getValue());
			$gender=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('J'.$row)->getValue());
			$from_age=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('K'.$row)->getValue());
			$to_age=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('L'.$row)->getValue());
			$prescription_required=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('M'.$row)->getValue());
			$status=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('N'.$row)->getValue());
			$description=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('O'.$row)->getValue());
			$city=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('P'.$row)->getValue());
			$get_price=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('Q'.$row)->getCalculatedValue());
			$mrp=mysqli_real_escape_string($app->set_db_conn(),trim($objPHPExcel->getActiveSheet()->getCell('R'.$row)->getValue()));
			$schedule_price=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('S'.$row)->getCalculatedValue());
			$start_date=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('T'.$row)->getValue());
			$end_date=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('U'.$row)->getValue());
			$certificate=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('V'.$row)->getValue());
			$labs=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('W'.$row)->getValue());
			$specimen_value=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('X'.$row)->getValue());
			$reporting_time_value=mysqli_real_escape_string($app->set_db_conn(),$objPHPExcel->getActiveSheet()->getCell('Y'.$row)->getValue());

			$item_department_ids = 1;

			if(trim($item_type) == 'Test'){
				$item_type_id = 2;
			} else {
				$item_type_id = 1;
			}
			
			## GET CATEGORY ID
			$category = trim($category);
			$obj_model_item_category = $app->load_model("item_category");
			$rs_item_category = $obj_model_item_category->execute("SELECT", false, "", "name = '".$category."'");
			if(count($rs_item_category) > 0){
				$item_category_ids = $rs_item_category[0]['id'];
			} else {
				$slugc=$app->utility->unique_slug('item_category','add','slug',$category);
				$dataC=array();
				$dataC['name']=$category;
				$dataC['slug']=$slugc;
				$obj_model_tablef=$app->load_model('item_category');
				$obj_model_tablef->map_fields($dataC);
				$item_category_ids=$obj_model_tablef->execute("INSERT");
			}

			## GET DISEASES ID
			$diseases = trim($diseases);
			$obj_model_item_diseases = $app->load_model("item_diseases");
			$rs_item_diseases = $obj_model_item_diseases->execute("SELECT", false, "", "name = '".$diseases."'");
			if(count($rs_item_diseases) > 0){
				$item_diseases_ids = $rs_item_diseases[0]['id'];
			} else {
				$slug=$app->utility->unique_slug('item_diseases','add','slug',$diseases);
				$dataD=array();
				$dataD['name']=$diseases;
				$dataD['slug']=$slug;
				$obj_model_tablef=$app->load_model('item_diseases');
				$obj_model_tablef->map_fields($dataD);
				$item_diseases_ids=$obj_model_tablef->execute("INSERT");
			}

			## GET KEY FETURES ID
			$key_features_s = explode('/',$key_features);
			$key_features_ids=[];
			foreach($key_features_s as $key){
				$obj_model_item_key_fetures= $app->load_model("item_key_fetures");
				$item_key_fetures = $obj_model_item_key_fetures->execute("SELECT", false, "", "name = '".trim($key)."'");
				if(count($item_key_fetures) > 0){
					array_push($key_features_ids,$item_key_fetures[0]['id']);
				} else {
					$slug=$app->utility->unique_slug('item_key_fetures','add','slug',$key);
					$dataC=array();
					$dataC['name']=$key;
					$dataC['slug']=$slug;
					$obj_model_tablef=$app->load_model('item_key_fetures');
					$obj_model_tablef->map_fields($dataC);
					$vv=$obj_model_tablef->execute("INSERT");
					array_push($key_features_ids,$vv);
				}
			}
			$key_features_id_update=!empty($key_features_ids)?implode(',',$key_features_ids):'';
			
			$slug=$app->utility->unique_slug('item','add','slug',$name);
		
			### CHECK UNIQ ITEM NAME
			$obj_item= $app->load_model("item");
			$chceckItem = $obj_item->execute("SELECT", false, "", "status != 'Trash' and name = '".trim($name)."'");

			if(count($chceckItem) == 0)
			{
				## INSERT ITEM TABLE
				$dataf=array();
				$dataf['city_ids']='1,2,3';
				$dataf['state_ids']='1';
				$dataf['itemcode']=$test_code;
				$dataf['slug']=$slug;
				$dataf['name']=$name;
				$dataf['price']=$get_price;
				$dataf['mrp']=$mrp;
				$dataf['test_count']=$test_count;
				$dataf['status']='Active';
				$obj_model_tablef=$app->load_model('item');
				$obj_model_tablef->map_fields($dataf);
				$item_id=$obj_model_tablef->execute("INSERT");

				if($item_id>0)
				{
					## INSERT ITEM DESCRIPTION TABLE
					$data=array();
					$data['item_id'] = $item_id;
					$data['test_parameters']=$test_parameter;
					$data['gender']=$gender;
					$obj_model_tablef=$app->load_model('item_description');
					$obj_model_tablef->map_fields($data);
					$rsf=$obj_model_tablef->execute("INSERT");

					## INSERT ITEM OTHER DATA TABLE
					$data2=array();
					$data2['item_id'] = $item_id;
					$data2['item_type_id'] = $item_type_id;
					$data2['item_category_ids'] = $item_category_ids;
					$data2['item_department_ids'] = 1;
					$data2['item_key_fetures_ids'] = $key_features_id_update;
					$data2['item_diseases_ids'] = $item_diseases_ids;
					$data2['description'] = $description;
					$data2['specimen'] = $specimen_value;
					$data2['reporting_time'] = $reporting_time_value;
					$obj_model_tablef=$app->load_model('item_other_data');
					$obj_model_tablef->map_fields($data2);
					$rsf=$obj_model_tablef->execute("INSERT");

					## INSERT ITEM PRICE TABLE
					$data3 = array();
					$data3['item_id'] = $item_id;
					$data3['price'] = $get_price;
					$data3['mrp'] = $mrp;
					$data3['city_id'] = 1;
					$data3['item_lab_ids'] = 1;
					$data3['item_certificate_ids'] = 1;
					$data3['state_id'] =1;
					$data3['entry_date_time'] = date('d-m-Y H:i:s');
					$obj_model_item = $app->load_model("item_price");
					$obj_model_item->map_fields($data3);
					$obj_model_item->execute("INSERT");

					## INSERT ITEM PRICE TABLE
					$data4 = array();
					$data4['item_id'] = $item_id;
					$data4['price'] = $get_price;
					$data4['mrp'] = $mrp;
					$data4['city_id'] = 2;
					$data4['item_lab_ids'] = 1;
					$data4['item_certificate_ids'] = 1;
					$data4['state_id'] = 1;
					$data4['entry_date_time'] = date('d-m-Y H:i:s');
					$obj_model_item = $app->load_model("item_price");
					$obj_model_item->map_fields($data4);
					$obj_model_item->execute("INSERT");

					## INSERT ITEM PRICE TABLE
					$data5 = array();
					$data5['item_id'] = $item_id;
					$data5['price'] = $get_price;
					$data5['mrp'] = $mrp;
					$data5['city_id'] = 3;
					$data5['item_lab_ids'] = 1;
					$data5['item_certificate_ids'] = 1;
					$data5['state_id'] = 1;
					$data5['entry_date_time'] = date('d-m-Y H:i:s');
					$obj_model_item = $app->load_model("item_price");
					$obj_model_item->map_fields($data5);
					$obj_model_item->execute("INSERT");
				}
			}
			$b.=$row.',';
	
			$msg='';
			if($a!='')
			{
				$msg.=' <br/><span class="error_row">Error Rows : '.$a.'</span> <br/>';
			}
			if($b!='')
			{
				if($a=='')
				{
					$msg.=' <br/>';
				}
				$msg.='<span class="row_insert">Inserted Rows : '.$b.'</span> <br/>';
			}
			if($c!='')
			{
				$msg.=' <br/><span class="error_row">Invalid Product : '.$c.'</span>';
			}				
		}
		$app->utility->set_message($msg,'MESSAGE');
		$dataswhileins[]=array("row"=>$data_rowid);				
 	}
	echo $obj_JSON->encode(array("RESULT"=>"OK", "MSG"=>$msg,"NOTINSDATA"=>$eror));
}
else
{
	$msg_block='<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>File Does Not Exists.</div>';
	echo $obj_JSON->encode(array("RESULT"=>"FAILED", "MSG"=>$msg_block));
}
?>