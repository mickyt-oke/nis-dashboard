<?php
session_start();
unset($_SESSION['profile']);
unset($_SESSION['us3rid']);

$url = "index.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}
header("Location:$url");