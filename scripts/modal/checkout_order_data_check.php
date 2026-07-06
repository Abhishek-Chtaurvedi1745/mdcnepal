<?php
$json_class = $app->load_module("JSON");
$obj_json = new $json_class(JSON_LOOSE_TYPE);
$RESULT=0;
$error_msg='';
if($_SESSION['homeCollection']=='Yes')
{
	
	if($_SESSION['checkoutAddressID']<=0)
	{
		echo $obj_json->encode(array("RESULT"=>"1","error_msg"=>"Please Select Sample Collection Address"));	
		exit;
		
	}
	if($_SESSION['checkoutCollectionDate']=='')
	{
		echo $obj_json->encode(array("RESULT"=>"1","error_msg"=>"Please Select Collection Date"));	
		exit;
		
	}
	if($_SESSION['checkoutCollectionTime']=='')
	{
		echo $obj_json->encode(array("RESULT"=>"1","error_msg"=>"Please Select Collection Time"));	
		exit;
		
	}
	
	
}
if($_SESSION['labSelection']=='Yes')
{

	if($_SESSION['checkoutLabID']<=0)
	{
		echo $obj_json->encode(array("RESULT"=>"2","error_msg"=>"Please Select Lab Address"));	
		exit;
		
	}
	if($_SESSION['labDate']=='')
	{
		echo $obj_json->encode(array("RESULT"=>"2","error_msg"=>"Please Select Date"));	
		exit;
		
	}
	if($_SESSION['labTime']=='')
	{
		echo $obj_json->encode(array("RESULT"=>"2","error_msg"=>"Please Select Time"));	
		exit;
		
	}

}

if($_SESSION['payment_type']=='')
{
	
	
	$error_msg='Please Select Payment Method.';
	echo $obj_json->encode(array("RESULT"=>"3","error_msg"=>"Please Select Payment Method."));	
	exit;
		
}
echo $obj_json->encode(array("RESULT"=>$RESULT,"error_msg"=>$error_msg));
?>