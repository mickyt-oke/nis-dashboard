<?php
function __autoload($classname) {
	$classname = strtolower($classname);
	require_once 'class/'.$classname.'.class.php';
}