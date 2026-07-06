<?php
include("../../../core/app.php");
$app = &app::get_instance();
$app->initialize();

$date=date('d-m-Y');

$obj_registration_wallet= $app->load_model("registration_wallet");
$rs=$obj_registration_wallet->execute("SELECT",false,"","id=1");

if($rs[0]['date_of_birth_wallet']>0)
{
	$obj_model_user = $app->load_model("user");
	$rs_user = $obj_model_user->execute("SELECT", false, "","blocked='No' and STR_TO_DATE(`date_of_birth`, '%d-%m') BETWEEN STR_TO_DATE('".$date."', '%d-%m') AND STR_TO_DATE('".$date."', '%d-%m')");
	
	for($i=0;$i<count($rs_user);$i++)
	{
		$user_id=$rs_user[$i]['id'];
		$remark="Birthday Reward From ".PROJECT_TILLE;
		$amount=$rs[0]['date_of_birth_wallet'];
		
		
		$obj_model_wallet=$app->load_model("wallet_transaction");
		$count1=$obj_model_wallet->execute("SELECT",false,"","user_id='".$user_id."' and remark='".$remark."' and date='".$date."'","id DESC LIMIT 0,1");
		if(count($count1)<=0)
		{
			$wallet=$rs_user[$i]['wallet'];
			$new_wallet=$rs_user[$i]['wallet']+$amount;
			$type='Plus';
			
			$update_field = array();
			$update_field['wallet']=$new_wallet;
			$obj_model_user = $app->load_model("user",$user_id);
			$obj_model_user->map_fields($update_field);
			$obj_model_user->execute("UPDATE");
			
			$data_t=array();
			$data_t['user_id']=$user_id;
			$data_t['name']=$rs_user[$i]['name'].' '.$rs_user[$i]['last_name'];
			$data_t['email']=$rs_user[$i]['email'];
			$data_t['phone']=$rs_user[$i]['phone'];
			$data_t['amount']=$amount;
			$data_t['transaction_id']=$user_id;
			$data_t['type']=$type;
			$data_t['referral_from']='';
			$data_t['payment_with']='Website';
			$data_t['payment_status']='Success';
			$data_t['last_bal']=$rs_user[$i]['wallet'];
			$data_t['transaction_date']=date('d-m-Y H:i:s A');
			$data_t['remark']=$remark;
			$data_t['ip_address']=$_SERVER['REMOTE_ADDR'];
			$data_t['date']=date('d-m-Y');
			$data_t['added_by']='Admin';
			$obj_model_wallet_transaction=$app->load_model("wallet_transaction");
			$obj_model_wallet_transaction->map_fields($data_t);
			$ins=$obj_model_wallet_transaction->execute("INSERT");	
			
			$phone=$rs_user[$i]['mobilephone'];
			$name=$rs_user[$i]['name'].' '.$rs_user[$i]['last_name'];
			$sms_type='Birthday_Reward';
			$default_string = array("{amount}","{name}");
			$new_string   = array($amount,$name);
			$app->utility->send_sms_new($phone,$sms_type,$default_string,$new_string);	
		}
	}
}

if($rs[0]['mrg_anniversary_wallet']>0)
{
	$obj_model_user = $app->load_model("user");
	$rs_user = $obj_model_user->execute("SELECT", false, "","blocked='No' and STR_TO_DATE(`mrg_anniversary`, '%d-%m') BETWEEN STR_TO_DATE('".$date."', '%d-%m') AND STR_TO_DATE('".$date."', '%d-%m')");
	

	
	for($i=0;$i<count($rs_user);$i++)
	{
		$user_id=$rs_user[$i]['id'];
		$remark="Marriage Anniversary Reward From ".PROJECT_TILLE;
		$amount=$rs[0]['mrg_anniversary_wallet'];
		
		$obj_model_wallet=$app->load_model("wallet_transaction");
		$count=$obj_model_wallet->execute("SELECT",false,"","user_id='".$user_id."' and remark='".$remark."' and date='".$date."'","id DESC LIMIT 0,1");
		

		
		if(count($count)<=0)
		{
			$wallet=$rs_user[$i]['wallet'];
			$new_wallet=$rs_user[$i]['wallet']+$amount;
			$type='Plus';
			
			$update_field = array();
			$update_field['wallet']=$new_wallet;
			$obj_model_user = $app->load_model("user",$user_id);
			$obj_model_user->map_fields($update_field);
			$obj_model_user->execute("UPDATE");
		
			$data_t=array();
			$data_t['user_id']=$user_id;
			$data_t['name']=$rs_user[$i]['name'].' '.$rs_user[$i]['last_name'];
			$data_t['email']=$rs_user[$i]['email'];
			$data_t['phone']=$rs_user[$i]['phone'];
			$data_t['amount']=$amount;
			$data_t['transaction_id']=$user_id;
			$data_t['type']=$type;
			$data_t['referral_from']='';
			$data_t['payment_with']='Website';
			$data_t['payment_status']='Success';
			$data_t['last_bal']=$rs_user[$i]['wallet'];
			$data_t['transaction_date']=date('d-m-Y H:i:s A');
			$data_t['remark']=$remark;
			$data_t['ip_address']=$_SERVER['REMOTE_ADDR'];
			$data_t['date']=date('d-m-Y');
			$data_t['added_by']='Admin';
			$obj_model_wallet_transaction=$app->load_model("wallet_transaction");
			$obj_model_wallet_transaction->map_fields($data_t);
			$ins=$obj_model_wallet_transaction->execute("INSERT");	
			
			$phone=$rs_user[$i]['mobilephone'];
			$name=$rs_user[$i]['name'].' '.$rs_user[$i]['last_name'];
			$sms_type='Marriage_Anniversary_Reward';
			$default_string = array("{amount}","{name}");
			$new_string   = array($amount,$name);
			$app->utility->send_sms_new($phone,$sms_type,$default_string,$new_string);	
		}
	}

}

$app->unload();


?>