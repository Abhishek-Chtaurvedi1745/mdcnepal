<?php
class _order_list extends controller
{	
	function init()
	{
		if($this->app->getCurrentAction()=="")
		{
			$this->load_data();
		}
	}


	function onload()
	{
		$obj_model_city= $this->app->load_model("city");
		$rs_city = $obj_model_city->execute("SELECT",false,"","");
		$records_city = array();
		$records_city[''] = 'All';
		for($i=0;$i<count($rs_city);$i++)
		{
			$records_city[$rs_city[$i]['id']] = $rs_city[$i]['name'];
		}
		$this->assign("records_city",$records_city);

		$records_status = array();
		$records_status[''] = 'All';
		$records_status['Pending'] = 'Pending';
		$records_status['Confirmed'] = 'Confirmed';
		$records_status['Canceled'] = 'Canceled';
		$this->assign("records_status",$records_status);

		$master_cond=" and customer_order_master.id!=0";
		$obj_model_order_counter = $this->app->load_model("customer_order_master");
		$rs_counter1 = $obj_model_order_counter->execute("SELECT", false, "SELECT count(*) as TotalCount, sum(case when ((order_status!='Trash') ".$master_cond.") then 1 else 0 end) AllCount,
		sum(case when (order_status = 'Pending' ".$master_cond.") then 1 else 0 end) PendingCount,
		sum(case when (order_status = 'Confirmed'  ".$master_cond.") then 1 else 0 end) ConfirmedCount,
		sum(case when (order_status = 'Canceled'  ".$master_cond.") then 1 else 0 end) CanceledCount FROM customer_order_master");
		$AllCount=$rs_counter1[0]['AllCount'];
		$PendingCount=$rs_counter1[0]['PendingCount'];
		$ConfirmedCount=$rs_counter1[0]['ConfirmedCount'];
		$CanceledCount=$rs_counter1[0]['CanceledCount'];
		if($AllCount==NULL || $AllCount=='')
		{
			$AllCount=0;
		}
		if($PendingCount==NULL || $PendingCount=='')
		{
			$PendingCount=0;
		}
		if($ConfirmedCount==NULL || $ConfirmedCount=='')
		{
			$ConfirmedCount=0;
		}
		if($CanceledCount==NULL || $CanceledCount=='')
		{
			$CanceledCount=0;
		}
		$this->app->assign("AllCount",$AllCount);
		$this->app->assign("PendingCount",$PendingCount);
		$this->app->assign("ConfirmedCount",$ConfirmedCount);
		$this->app->assign("CanceledCount",$CanceledCount);
	}


	function load_data()
	{
	}


	function export_data()
	{

	}

	function create_shipment()
	{

	}
}
?>