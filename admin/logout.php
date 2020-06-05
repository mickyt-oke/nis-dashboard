<?php
require_once 'core/init.php';

if (loggedIn()) {
	if($user->logout()){
		redirectTo("../");
	}
}
redirectTo("../");

$url = "../index.php";

if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}
header("Location: ../index.php");
