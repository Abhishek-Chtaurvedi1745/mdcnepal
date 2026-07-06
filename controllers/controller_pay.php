<?
class _pay extends controller
{
	function init()
	{
	}
	function onload()
	{
		
		$this->app->setTitle('Pay - '.$this->app->meta['title']);
		$this->app->setKeywords($this->app->meta['keyword']);
		$this->app->setDescription($this->app->meta['description']);
		if($_SESSION['orderPayID']>0)
		{
			$obj_order_payment= $this->app->load_model("customer_order_payment_data");
			$rs_payment=$obj_order_payment->execute("SELECT",false,"","id='".$_SESSION['orderPayID']."'");
			$this->app->assign("rs_payment",$rs_payment[0]);

			$obj_model_customer =$this->app->load_model("customer");
			$rs_customer= $obj_model_customer->execute("SELECT",false,"","id='".$rs_payment[0]['customer_id']."'","id DESC");
			$this->app->assign("rs_customer",$rs_customer[0]);

			$obj_model_packages = $this->app->load_model("customer_order_detail");
			$rs_package_data = $obj_model_packages->execute("SELECT",false,"","order_master_id='".$_SESSION['OrderID']."'","");
			
			$this->app->assign("rs_package_data",$rs_package_data);

			$_SESSION['MarwadiCust_wallet']=$rs_customer[0]['wallet'];
			$_SESSION['MarwadiCust_promoWallet']=$rs_customer[0]['promoWallet'];
			
			
		}
		else
		{
			$this->app->redirect(SERVER_ROOT);
			exit;
		}
	}
}
?>