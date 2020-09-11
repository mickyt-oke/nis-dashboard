<?php

class Connection {
	private $dbhost = 'localhost';
	private $dbname = 'nis_db';
	private $user = 'root';
	private $pswd = '';

	public function connect() {
		try {
			$conn = new PDO("mysql:host=$this->dbhost; dbname=$this->dbname", $this->user, $this->pswd);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		}
		catch(PDOException $e) {
			return false;
		}
	}
}

// Define paths
define("DS", DIRECTORY_SEPARATOR);
define("APP_ROOT", dirname(dirname(__FILE__)).DS);

// Require resource files  
require_once "core/common.php";
require_once "functions/functions.php";

// Objects/instances of classes
$profile = new Profile();
$user = new User();
$session = new Session();
$message = $session->message();

//Init
$errors = array();

// Obtain the filename of current page
$page = basename($_SERVER['PHP_SELF']);

