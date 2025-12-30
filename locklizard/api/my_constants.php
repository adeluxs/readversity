<?php

/**
 * @author James Robshaw   ProExe Ltd   www.proexe.net
 * @copyright 2012-2015-2018-2019-2021
 * 
 * LockLizard API
 * Configuration settings
 * 
 */
// Opencart Configuration
// lookbook.org


$full_dir = dirname(__FILE__);
$install_directory = explode('/locklizard', $full_dir);

if (is_file($install_directory[0] . '/config.php')) {
	require_once($install_directory[0] . '/config.php');
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

// Registry
$registry = new Registry();

// Loader
$loader = new Loader($registry);
$registry->set('load', $loader);

// Config
$config = new Config();
$registry->set('config', $config);

// Database
$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$registry->set('db', $db);

// Settings
$query = $db->query("SELECT * FROM `" . DB_PREFIX . "setting` WHERE store_id = '0' OR store_id = '" . (int)$config->get('config_store_id') . "' ORDER BY store_id ASC");

foreach ($query->rows as $result) {
	if (!$result['serialized']) {
		$config->set($result['key'], $result['value']);
	} else {
		$config->set($result['key'], json_decode($result['value'], true));
	}
}

## API USER DETAILS #################################
define('API_Name_of_User', $config->get('config_ll_notification_user')); // Name of person / company. Will be used in any error emails / notifications
define('API_User_Email', $config->get('config_ll_notification_email')); // Name of person / company. Will be used in any error emails / notifications - must be a valid and working address.
## API USER DETAILS #################################


## LOCKLIZARD SETTINGS ############################
define('LL_eComm_URL', $config->get('config_ll_ecomm_url')); // Must NOT begin with either http of https
define('LL_Username', $config->get('config_ll_ecomm_username')); //
define('LL_Password', $config->get('config_ll_ecomm_password')); //
## LOCKLIZARD SETTINGS ############################


## API SETTINGS #####################################
define('Curl_log', false); // default is false - verbose log once connected - Log output to 'curl_log.txt' - if activated this log will grow very large over time
define('Curl_SSL', true); // default is true - SSL (secure https) connection to LockLizard eCommerce module - will use insecure http if false


define('API_error_log', true); // default is true - Log errors to 'api_err_log.txt' - recommend this is left activated
define('API_error_display', false); // default is false - Display error/s to screen - only recommend this is activated for testing before going live.
## API SETTINGS #####################################


## Customer Expiry Date ##############################
// Allowed values: unlimited or 5_DAY, 2_WEEK, 1_MONTH, 6_MONTH, 1_YEAR, 4_YEAR etc
define('CUST_EXPIRY_DATE', 'unlimited'); // Default customer expiry
## Customer Expiry Date ##############################


## Number of Viewer Licenses ########################
define('NUM_LICENSES', (int)1); // integers only (whole numbers only)
## Number of Viewer Licenses ########################


## LL Registration Email ############################
define('REG_EMAIL', false); // true or false  Allow or prevent LL sending it's registration email to the customer
## LL Registration Email ############################


## Customer Web Viewer Access #######################
// Will only work if Web Viewer facility is licensed from LockLizard
define('WEB_VIEWER_ACCESS', false); // true or false  Enables / Disables Web Viewer access.
## Customer Web Viewer Access #######################


## Document Expiry ##################################
// Sample values: unlimited or 5_DAY, 2_WEEK, 1_MONTH, 6_MONTH, 1_YEAR, 4_YEAR etc
define('DOC_EXPIRY_DATE_DEFAULT', 'unlimited'); // Default document expiry when not otherwise specified within the SKU
## Document Expiry ##################################


/*
## WEB VIEWER #######################################
// note output is no longer sanitized
// must escape any single quotes
define('WEB_VIEWER_DOMAIN', 'https://viewer.XXXXXXXXX.com'); // Web Viewer location (no trailing /)
define('WV_OPEN', true); // default is true - open Web Viewer in new browser tab. false will open in same browser tab
define('WV_DESCRIPTION_TXT', 'Web Viewer:'); // Text before the submit button
define('WV_BUTTON_TXT', 'Document Login'); // Submit button text
define('WV_ERROR_NA_TXT', 'Web Viewer access is not enabled for your account.'); // Error text when customer does not have Web Viewer access
define('WV_FATAL_ERROR_TXT', 'Web Viewer access:: Error occurred.'); // FATAL Error text - customer not found, Customer ID was invalid, etc
## WEB VIEWER #######################################
*/

## DATABASE ################################
define('myHOST', DB_HOSTNAME);

define('myDbName', DB_DATABASE); // mySQL Db name
define('myDb_DisplayName', 'LockLizard API Db'); // For error display in any Error Messages

define('myDbUsername', DB_USERNAME);
define('myDbPassword', DB_PASSWORD);

define('myDbTablePrefix', 'api_'); // Table prefix - can be left blank if required (Do not edit 9th April 2013)
//define('myWPDBTablePrefix', 'wp_'); // Define WordPress DB Prefix
## DATABASE ################################



## DB REPORTS #####################################
// LockLizard eCommerce API Db Reports
define('API_Db_Reports_UserName', $config->get('config_ll_reports_username'));
define('API_Db_Reports_Password', $config->get('config_ll_reports_password'));
## DB REPORTS #####################################



## NO EDIT BELOW HERE -- NO EDIT BELOW HERE -- NO EDIT BELOW HERE -- NO EDIT BELOW HERE -- NO EDIT BELOW HERE --##
## NO EDIT BELOW HERE -- NO EDIT BELOW HERE -- NO EDIT BELOW HERE -- NO EDIT BELOW HERE -- NO EDIT BELOW HERE --##


## SERVER PATHS #####################################
define('myPATH', dirname(__FILE__) . '/'); // Path to this location

define('myPATH_lib_crt', myPATH . 'crt/');

define('myPATH_lib', myPATH . 'lib/'); // Library

define('myPATH_lib_email', myPATH_lib . 'email/');
define('myPATH_lib_db', myPATH_lib . 'db/');
define('myPATH_lib_checks', myPATH_lib . 'checks/');
define('myPATH_lib_function', myPATH_lib . 'funct/');

define('myPATH_m2', myPATH . 'm2/');
define('myPATH_m2_function', myPATH_m2 . 'function/');
define('myPATH_lib_routines', myPATH_m2 . 'routines/');
define('myPATH_lib_common', myPATH_m2 . 'function/');

define('PHP_MAILER', myPATH . 'class/class.phpmailer.php');

define('INI_file', 'config.ini'); // file name
## SERVER PATHS #####################################

## HTTP PATHS #####################################
define('myPATH_gfx', 'locklizard/api/images/'); 
## HTTP PATHS #####################################


## ############ SOURCEGUARDIAN ERROR HANDLER ########
define('sg_handler_chksum', $config->get('config_ll_sg_handler_chksum')); // not to be changed unless instructed 
## ############ SOURCEGUARDIAN ERROR ################


## Hidden Switches #################################
// Will Not Normally be in 'my_constants.php'
// ProExe use only - or given to customer on an 'as and if' required basis.
define('ProExe_Debug', false); // default is false - also false if constant is not defined
define('Email_Notifications', true); // default is true, also true if constant is not defined - declare and set to false to stop email notifications
#define('Bcc_allow', true); // default is true, also true if constant is not defined - Bcc of user notifications to ProExe, presuming notifications are TRUE
##
define('Db_save_Errors', true); // default is true, also true if constant is not defined - Log errors to Db
define('Db_save_new_Customers', true); // default is true, also true if constant is not defined - Log new Customer account details to Db

define('API_response_log', false);
define('CURL_TIMEOUT', (int)10); // integers only (whole numbers only)
## Hidden Switches #################################

