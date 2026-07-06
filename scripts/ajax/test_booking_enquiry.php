<?php
	
	$name = $app->getPostVar("name");
	$email = $app->getPostVar("email");
	$phone = $app->getPostVar("phone");
	$age = $app->getPostVar("age");
	$city = $app->getPostVar("city");
	$date = $app->getPostVar("date");
	$gender = $app->getPostVar("gender");
	$address = $app->getPostVar("address");
	$brief_details = $app->getPostVar("brief_details");

	$enquiry_type = $app->getPostVar("enquiry_type");
	$test_type = $app->getPostVar("test_type");

	$token = $app->getPostVar("cf-turnstile-response");

	$result=$app->utility->getCloudFareCaptchaVerify($token);
	if($result['status']==0){
		//Captcha not verified.
		// echo "1"; exit;
	}
	

	if($name!='' && $phone!='')
	{
		$fields_map = array();

		if(!empty($_FILES['pre_file']['name']))
		{
			$upload_dir='test_booking_file';
			//Image Edit
			$file_image=$app->utility->resize_single_image_front($_FILES['pre_file']['name'],$_FILES['pre_file']['tmp_name'],'../../uploads/'.$upload_dir.'/','1000');	
			$fields_map['file']=$file_image;
		}			

		$fields_map['name'] = $name;
		$fields_map['email'] = $email;
		$fields_map['phone'] = $phone;
		$fields_map['age'] = $age;
		$fields_map['city'] = $city;
		$fields_map['date'] = $date;
		$fields_map['gender'] = $gender;
		$fields_map['address'] = $address;
		$fields_map['brief_details'] = $brief_details;
		$fields_map['user_id'] = $_SESSION['MDRCCustID'];

		if($enquiry_type!='' && $test_type!=''){
			$fields_map['enquiry_type'] = $enquiry_type;
			$fields_map['test_type'] = $test_type;
		}
		
		$fields_map['ip'] = $_SERVER['REMOTE_ADDR'];
		$fields_map['added_date'] =  date('Y-m-d');

		$obj_model_prescription_booking=$app->load_model('test_booking_enquiry');
		$obj_model_prescription_booking->map_fields($fields_map);
		$booking_id=$obj_model_prescription_booking->execute("INSERT");

		/*------------------Start for mail function------------------*/
		$template_name='test_booking_admin';
		$send_data_arary=['booking_id'=>"#".$booking_id,'name'=>$name,'phone'=>$phone,'email'=>$email,'age'=>$age,'city'=>$city,'date'=>$date,'gender'=>$gender,'brief_details'=>$brief_details];

		$subject='New Test Booking Enquiry from '.$name.' on Website';
		$mail_for='Admin';
		$data=['template_name'=>$template_name,'send_data_arary'=>$send_data_arary,'subject'=>$subject,'mail_for'=>$mail_for];
		$app->utility->sendMial($data);
		/*------------------End for mail function------------------*/

		echo "0";
		exit;	
	}
	else
	{
		echo "1";
	}
?>