<?php
	/*===== Do PHP Version check. We need at least PHP 5.0.0 ========= */
	if (version_compare(PHP_VERSION, '5.0.0', '<'))
	{
		trigger_error("This system requires PHP 5.0.0 or above to work. <br/>You have PHP ".PHP_VERSION." in this system", E_USER_ERROR);
	}
	/*=================================================================*/

	define("__CONFIG__","1");
	/*================= Dont touch here ====================*/
	date_default_timezone_set('Asia/Kathmandu');
	
	ini_set("date.timezone", "UTC");
	ini_set("display_errors", "off");
	error_reporting(E_ALL);
	/*=======================================================*/

	/*==================== Absolute path ====================*/
	define("ABS_PATH", "/home3/mdcneyew/public_html");	/*=======================================================*/

	/*=============== Debug leve (1 to 4) ===================*/
	if(!defined("DEBUG"))
	{
		define("DEBUG",3);
	}
	define("DISPLAY_XPM4_ERRORS", true);
	if(!defined("ERROR_LOG"))
	{
		define("ERROR_LOG", ABS_PATH.DIRECTORY_SEPARATOR."logs".DIRECTORY_SEPARATOR."error_log.txt");
	}
	/*=======================================================*/

	/*======= Cache directory (to store cached files) =======*/
	if(!defined("CACHE_DIR"))
	{
		define("CACHE_DIR", ABS_PATH."cache");
	}
	/*=======================================================*/

	/*============= Cache time in seconds  ==================*/
	if(!defined("CACHE_TIME"))
	{
		define("CACHE_TIME", 60);
	}
	/*=======================================================*/

	/*================= DB Connection Info ==================*/
	define("DB_HOST", "localhost");
	define("DB_DATABASE", "mdcneyew_web25");
	define("DB_USERNAME", "root");           // XAMPP ka default
	define("DB_PASSWORD", "");               // XAMPP mein blank hota hai
	/*=======================================================*/

	define("PROJECT_TILLE","MDC Nepal");
	define("FOOTER_COPY_RIGHT_PROJECT","www.mdcnepal.com");
	define("PROJECT_CITY","");
	define("PROJECT_STATE","");

	/*==========Default paramters for paging ================*/
	define("RECORD_PER_PAGE",15);
	define("SEGMENT_LENGTH",5);
	define("p_name_limit",50);
	/*=======================================================*/

	/*============== Default Meta Tags ======================*/
	define("DEFAULT_TITLE","MDC");
	define("DEFAULT_KEYWORDS","MDC");
	define("DEFAULT_DESCRIPTION","MDC");
	/*=======================================================*/

	/*=============== Relative to ABS_PATH path ============*/
	if(!defined("VIR_DIR"))
	{
		define("VIR_DIR","");	
	}
	/*=======================================================*/

	/*==== Access URL or Server Root of the application =====*/
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
	$scriptPath = str_replace('\\','/', dirname($_SERVER['SCRIPT_NAME']));
	if ($scriptPath === '/' || $scriptPath === '\\') {
		$scriptPath = '';
	}
	if (defined("VIR_DIR") && VIR_DIR !== "") {
		$virtualPath = '/' . trim(VIR_DIR, '/');
		if ($virtualPath !== '/' && substr($scriptPath, -strlen($virtualPath)) === $virtualPath) {
			$scriptPath = substr($scriptPath, 0, -strlen($virtualPath));
		}
	}
	define("SERVER_ROOT", $protocol . "://" . $_SERVER['SERVER_NAME'] . $scriptPath);
	/*=======================================================*/

	/*=== FTP Information - Needed for fileupload process ===*/
	if(!defined("USE_FTP"))
	{
		define("USE_FTP", false);
	}
	if(!defined("FTP_HOST"))
	{
		define("FTP_HOST", "localhost");
	}
	if(!defined("FTP_USERNAME"))
	{
		define("FTP_USERNAME", "");
	}
	if(!defined("FTP_PASSWORD"))
	{
		define("FTP_PASSWORD", "");
	}
	if(!defined("FTP_WWWDIR"))
	{
		define("FTP_WWWDIR", "");
	}
	/*=======================================================*/

	/*============== mail template storage path =============*/
	define("MAIL_TEMPLATE_PATH", "mail_templates");
	/*=======================================================*/

	/*== Automatically TRIP Post Variables in MySQL Query ===*/
	define("AUTO_TRIM", true);
	/*=======================================================*/

	/*=======================================================*/
    /*================= Mail server settings ================*/

    if(!defined("SMTPDIRECT")){
            define("SMTPDIRECT", "0");
    }
    if(!defined("SMTPHOST")){
			define("SMTPHOST", "");
    }
    if(!defined("SMTPPORT")){
			define("SMTPPORT", "465");
    }
    //SMTP Connection encryption type. Possible values are: tls, ssl, sslv2 or sslv3
    if(!defined("SMTPSECURITY")){
            define("SMTPSECURITY", "ssl");
    }
    if(!defined("SMTPUSER")){
            define("SMTPUSER", "");
    }
    if(!defined("SMTPPASS")){
            define("SMTPPASS", "");
    }
    if(!defined("FROM_EMAIL")){
            define("FROM_EMAIL", "customercare@mdcnepal.com");
    }
    if(!defined("FROM_NAME")){
            define("FROM_NAME", "MDC Nepal");
    }
    if(!defined("ENC_KEY")){
			define("ENC_KEY", "1234567890123456");
    }
	define("GET_PAY_PAP_INFO_KEY", "eyJpbnN0aXR1dGlvbklkIjoic2lkenEzZngiLCJtaWQiOiIxMDA1NTAxNDc5MjEyMjQiLCJ0aWQiOiIxNDc5MjAwMSJ9");
	define("GET_PAY_OPR_KEY", "4fa4c6b9-3f91-43e5-9b4f-319f68187ba5");
	define("GET_PAY_BASE_URL", "https://ecom-getpay.nchl.com.np/ecom-web-checkout/v1/secure-merchant/transactions");
    /*=======================================================*/
?>