<?
	class _data_import extends controller
	{		
		function init()
		{
			###
		}

		function onload()
		{
			ini_set("max_execution_time", 6000);
			ini_set("upload_max_filesize", 64);
			ini_set("memory_limit",-1);
			
			$file_name=$this->app->getGetVar("filename");
			$price_group=$this->app->getGetVar("price_group");
			$company=$this->app->getGetVar("company");
			if($price_group=='')
			{
				$price_group='A';
			}
			if($file_name=='')
			{
				$this->assign("manage_for", "Import");
				$this->assign("to_do", "Data");
			}
			else
			{			
				$this->assign("manage_for", "Excel");
				$this->assign("to_do", "Preview");
			}

			$this->assign("category_action_name", "Add");
			$this->app->assign("file_name",$file_name);
			$this->app->assign("price_group",$price_group);
			$this->app->assign("company",$company);
			
			if($file_name!="")
			{
			 	$obj_excel = $this->app->load_module("PHPExcel");
				$inputFileName = ABS_PATH.'/'.$this->app->get_user_config("imports").$file_name;
			 	$table_class='table table-striped table-bordered table-hover ';
				$excel_preview=$this->app->utility->preview_excel($inputFileName,$table_class);
				
				if($excel_preview[1]>200000)
				{
					$this->app->utility->set_message("You can import max 200000 data at one time.", "ERROR");
					$this->app->redirect("index.php?view=data_import");				
				}
				else
				{
					$this->app->assign("excel_preview",$excel_preview);
				}
			}
		}

		function import_product()
		{
			if(!empty($_FILES['imp_file']['name']))
			{
				$update_file=array();
				$key=$this->app->utility->image_string();			
				$fileData = pathinfo(basename($_FILES["imp_file"]["name"]));
				$temp = explode(".", $_FILES["imp_file"]["name"]);
				$filename = current($temp);
				$optimized_fname=$this->app->utility->seo_url($filename);		
				$extension = end($temp);
				$new_file_name=$optimized_fname.'_'.$key."-".date("d-m-Y").'.'.$extension;
				$target_path='../'.$this->app->get_user_config("imports").$new_file_name;
				move_uploaded_file($_FILES["imp_file"]["tmp_name"], $target_path);
				$this->app->redirect(SERVER_ROOT."/".VIR_DIR."index.php?view=data_import&filename=".$new_file_name);	
			}
			else
			{
				$this->app->utility->set_message("Please select File", "ERROR");
				$this->app->redirect("index.php?view=data_import");						
			}
		}
	}
?>