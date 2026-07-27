<?php

$json_class = $app->load_module("JSON");
$obj_json = new $json_class(JSON_LOOSE_TYPE);
	
$visitor_id=mysqli_real_escape_string($app->set_db_conn(),$app->getPostVar("visitor_id"));
$lab_password=mysqli_real_escape_string($app->set_db_conn(),$app->getPostVar("lab_password"));

if($visitor_id!='' && $lab_password!='')
{
    if($visitor_id=='')
    {
        $RESULT='NOT OK';
        $MSG='Please Enter Valid Mobile Number.';
        echo $obj_json->encode(array("RESULT"=>$RESULT,"MSG"=>$MSG));
        exit;
    }

    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => LIS_API_URL.'/BookingAPI/TestStatusAPI',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'WorkOrderID='.$visitor_id.'',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    
    $api_response=$response?json_decode($response,true):[];
    
    if($api_response[0]['Booking_Status']=='')
    {
        $RESULT='NOT OK';
        $MSG='Please enter valid details.';
        echo $obj_json->encode(array("RESULT"=>$RESULT,"MSG"=>$MSG));
        exit;
    }

    if($api_response[0]['Booking_Status']!='')
    {
        $report_ready=false;
        for($i=0;$i<count($api_response);$i++)
        {
            if($api_response[$i]['Booking_Status']=='Report Ready')
            {
                $report_ready=true;
            }
        }
        
        if($report_ready)
        {
            $mobile=$api_response[0]['PMob']; 

            $RESULT='OK';
            $MSG='Please check report.';
            echo $obj_json->encode(array("RESULT"=>$RESULT,"MSG"=>$MSG,"API"=>$api_response,"URL"=>"http://182.156.200.228/mdrcnew/Design/Lab/labreportnew.aspx?reportid=".$visitor_id."_".$lab_password));
            exit;
        }
        else
        {
            $RESULT='NOT OK';
            $MSG='Report is not ready.';
            echo $obj_json->encode(array("RESULT"=>$RESULT,"MSG"=>$MSG));
            exit;
        }
              
    } else {
        $RESULT='NOT OK';
        $MSG='Report is not ready.';
        echo $obj_json->encode(array("RESULT"=>$RESULT,"MSG"=>$MSG));
        exit;
    }

} else {
    $RESULT='NOT OK';
    $MSG='Error';
    echo $obj_json->encode(array("RESULT"=>$RESULT,"MSG"=>$MSG));
    exit;
}	
?>