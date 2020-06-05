<?php
include_once 'core/init.php';

$ref=@$_GET['q'];

if( $_POST["password"] == "n1s245") {
	header("location:archiving.php");
}
else {
	header("location:$ref?w=Wrong Passcode");
}

/*
$ref=@$_GET['z'];

if( $_POST["pass"] == "@dm1n") {
	header("location:dashboard.php?r=2");
}
else { 
	header("location:$ref?w=Wrong Passcode");
}

$ref=@$_GET['t'];

if( $_POST["password"] == "1mm145") {
	header("location:dashboard.php?r=1");
}
else {
	header("location:$ref?w=Wrong Passcode");
}


$ref=@$_GET['k'];

if( $_POST["password"] == "n1g3r1@") {
	header("location:dashboard.php?r=3");
}
else { 
	header("location:$ref?w=Wrong Passcode");
}
*/
?>