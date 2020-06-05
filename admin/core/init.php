<?php
// Set SESSION
session_start();
if (!(isset($_SESSION['profile']))) {
	header("Location: index.php");
}
else {
	
}

// Create and initialize variables
$errors = array();
// Define paths
define("DS", DIRECTORY_SEPARATOR);
define("APP_ROOT", dirname(dirname(__FILE__)).DS);


// Require resource files  
require_once APP_ROOT . "../db/dbConnection.php";
require_once APP_ROOT . "../core/common.php";
require_once APP_ROOT . "../functions/functions.php";


$profile = new Profile();
$user = new User();
$state = new States();
$mission = new Mission();
$country = new Country();
$local_staff = new Local_staff();
$month = new Month();
$year = new Year();
$continent = new Continent();
$con = new Connection();


$session = new Session();
$message = $session->message();

// Obtain the filename of current page
$page = basename($_SERVER['PHP_SELF']);
