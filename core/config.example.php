<?php
/**
 * Copy to config.php on each environment.
 * - Local (XAMPP): use your local paths and mdcneyew_web25 / root
 * - Live server: upload as core/config.php via cPanel (NOT via GitHub deploy)
 */
if (version_compare(PHP_VERSION, '5.0.0', '<')) {
	trigger_error("This system requires PHP 5.0.0 or above.", E_USER_ERROR);
}

define("__CONFIG__", "1");
date_default_timezone_set('Asia/Kathmandu');
ini_set("date.timezone", "UTC");
ini_set("display_errors", "off");
error_reporting(E_ALL);

// LIVE: /home3/mdcneyew/public_html
// LOCAL: C:/xampp/Desktop/mdcnpal/htdocs/public_html
define("ABS_PATH", "/home3/mdcneyew/public_html");

if (!defined("DEBUG")) {
	define("DEBUG", 3);
}
define("DISPLAY_XPM4_ERRORS", true);
if (!defined("ERROR_LOG")) {
	define("ERROR_LOG", ABS_PATH . DIRECTORY_SEPARATOR . "logs" . DIRECTORY_SEPARATOR . "error_log.txt");
}
if (!defined("CACHE_DIR")) {
	define("CACHE_DIR", ABS_PATH . "cache");
}
if (!defined("CACHE_TIME")) {
	define("CACHE_TIME", 60);
}

define("DB_HOST", "localhost");
define("DB_DATABASE", "mdcneyew_web25");
define("DB_USERNAME", "YOUR_DB_USER");
define("DB_PASSWORD", "YOUR_DB_PASSWORD");

define("PROJECT_TILLE", "MDC Nepal");
define("FOOTER_COPY_RIGHT_PROJECT", "www.mdcnepal.com");
define("PROJECT_CITY", "");
define("PROJECT_STATE", "");

define("RECORD_PER_PAGE", 15);
define("SEGMENT_LENGTH", 5);
define("p_name_limit", 50);

define("DEFAULT_TITLE", "MDC");
define("DEFAULT_KEYWORDS", "MDC");
define("DEFAULT_DESCRIPTION", "MDC");

if (!defined("VIR_DIR")) {
	define("VIR_DIR", "");
}

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$scriptPath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
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

if (!defined("USE_FTP")) {
	define("USE_FTP", false);
}
if (!defined("FTP_HOST")) {
	define("FTP_HOST", "ftp.mdcnepal.com");
}
if (!defined("FTP_USERNAME")) {
	define("FTP_USERNAME", "");
}
if (!defined("FTP_PASSWORD")) {
	define("FTP_PASSWORD", "");
}
if (!defined("FTP_WWWDIR")) {
	define("FTP_WWWDIR", "/public_html/");
}

define("MAIL_TEMPLATE_PATH", "mail_templates");
define("AUTO_TRIM", true);

if (!defined("SMTPDIRECT")) {
	define("SMTPDIRECT", "0");
}
if (!defined("SMTPHOST")) {
	define("SMTPHOST", "");
}
if (!defined("SMTPPORT")) {
	define("SMTPPORT", "465");
}
if (!defined("SMTPSECURITY")) {
	define("SMTPSECURITY", "ssl");
}
if (!defined("SMTPUSER")) {
	define("SMTPUSER", "");
}
if (!defined("SMTPPASS")) {
	define("SMTPPASS", "");
}
if (!defined("FROM_EMAIL")) {
	define("FROM_EMAIL", "customercare@mdcnepal.com");
}
if (!defined("FROM_NAME")) {
	define("FROM_NAME", "MDC Nepal");
}
if (!defined("ENC_KEY")) {
	define("ENC_KEY", "CHANGE_ME_16_CHARS");
}
define("GET_PAY_PAP_INFO_KEY", "YOUR_GETPAY_KEY");
define("GET_PAY_OPR_KEY", "YOUR_GETPAY_OPR_KEY");
define("GET_PAY_BASE_URL", "https://ecom-getpay.nchl.com.np/ecom-web-checkout/v1/secure-merchant/transactions");
?>
