<?
class _logout extends controller
{
	function init()
	{
	}

	function onload()
	{
		
		$_SESSION['MDRCCustID']='';
		$_SESSION['MDRCCustFirstName']='';
		$_SESSION['MDRCCustLastName']='';
		$_SESSION['MDRCCustEmail']='';
		$_SESSION['MDRCCustPhone']='';
		$_SESSION['MDRCCustImage']='';
		$_SESSION['MDRCCustWallet']='';
		setcookie('MDRCToken', '', -1, "/");
		setcookie('MDCUuid', '', time() - (86400 * 90), "/");
		$this->app->redirect(SERVER_ROOT);	
		exit;
		
	}
}
?>