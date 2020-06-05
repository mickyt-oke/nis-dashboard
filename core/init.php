<?php
    
// Create and initialize variables
$errors = array();
// Define paths
define("DS", DIRECTORY_SEPARATOR);
define("APP_ROOT", dirname(dirname(__FILE__)).DS);


// Require resource files  
require_once APP_ROOT . "db/dbConnection.php";
require_once APP_ROOT . "core/common.php";
require_once APP_ROOT . "functions/functions.php";

session_start();
	restricted();   
if(isset($_SESSION["profile"])) {
	if(isLoginSessionExpired()) {
		$errors[] = "Session Timeout. Please reauthenticate to continue"; 
		header("Location:logout.php?session_expired=1");
	}		
}


//Class instances
$profile = new Profile();
$user = new User();
$state = new States();
$mission = new Mission();
$country = new Country();
$cat = new Category();
$app = new Apptype();
$local_staff = new Local_staff();
$month = new Month();
$year = new Year();
$continent = new Continent();
$con = new Connection();
$entry = new Entry();
$photo = new Photograph();


$session = new Session();
$message = $session->message();

// Obtain the filename of current page
$page = basename($_SERVER['PHP_SELF']);
