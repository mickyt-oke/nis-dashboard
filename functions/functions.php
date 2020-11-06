<?php
// Helper functions
// Redirect to specified page
function redirectTo($page) {
  header("Location: " . $page);
  exit;
}

function sanitize($value) {
	if (!empty($value)) {
		return htmlentities(strip_tags(trim($_POST[$value])));
	}
	return false;
}

// function to keep values on form after page reload
function stickyForm($value) {
	return isset($_POST[$value]) ? $_POST[$value] : '';
}
function stickyUpdate($formfield='', $dbfield='') {
  if (!empty($formfield) || !empty($dbfield)) {
    return isset($_POST[$formfield]) ? $_POST[$formfield] : $dbfield;
  }
  return false;
}


// Radio button handler
function stickyRadio($field='', $label=''){
	if (!empty($field) && !empty($label))
		return (isset($_POST[$field]) && $_POST[$field] == $label) ? "checked='checked'" : '';
}
function stickyRadioUpdate($formfield='', $dbfield='', $formvalue=''){
  if (isset($_POST[$formfield])){
    if ($_POST[$formfield] == $formvalue){
      return " checked='checked'";
    }
  }
  else {
    if ($dbfield == $formvalue){
      return " checked='checked'";
    }
  }
}

// Select/menu handler
function stickySelect($value='', $query=''){
	if (!(strcmp(stickyForm($value), $query))){
      return " selected='selected'";
    }
}
function stickySelectUpdate($formfield='', $dbfield='', $choice=''){
  if (isset($_POST[$formfield])) {
    if (!(strcmp(stickyForm($formfield), $choice))){
        echo " selected='selected'";
      }
  }
  else {
    if (!(strcmp($dbfield, $choice))){
        echo " selected='selected'";
      }
  }
}

// Server messages
function error($errors){
    if (!empty($errors)){
      echo "<div class='alert alert-danger' role='alert'>";
      foreach ($errors as $error){
        echo " - ".$error."<br>";
      }
      echo "</div>";
    }
}

function success($message){
    if (!empty($message)){
    	$output = "<div class='alert alert-success' role='alert'>";
    	$output .= $message;
    	$output .= "</div>";

    	echo $output;
    }
}

function success1($reply){
    if (!empty($reply)){
        $output = "<div class='alert alert-success' role='alert'>";
        $output .= $reply;
        $output .= "</div>";

        echo $output;
    }
}

// User Authentication
function loggedIn(){
	return isset($_SESSION['us3rid']) ? true : false;
}

function restricted(){
	if (!loggedIn()){
		redirectTo('index.php');
	}
}

function admin(){
	if (!isAdmin()){
		redirectTo('index.php');
	}
}

function isAdmin(){
	return $_SESSION['1s@dmin'] ? true : false;
}

function isLoginSessionExpired(){
    $login_session_duration = 5000;
    $current_time = time();
    if(isset($_SESSION['loggedin_time']) and isset($_SESSION["profile"])){
        if(((time() - $_SESSION['loggedin_time']) >$login_session_duration)){
            return true;
    }
}
return false;
}
/* Working with Dates */
function datetime_to_text($date="") {
  if (!empty($date)) {
    $unixtimestamp = strtotime($date);
    // Format date
    return strftime("%B %d, %Y %I:%M %p", $unixtimestamp);
  }
}
function date_to_text($date=""){
  $unixdatetime = strtotime($date);
  return strftime("%B %d, %Y", $unixdatetime);
}

// Return excerpt of an article
function excerpt($body) {
  if (!empty($body)) {
    $body = strip_tags($body);
    $sentences = explode(' ', $body);
    $words = "";
    $counter = 1;
    foreach ($sentences as $word) {
      if ($counter == 30) {
        break;
      }
      $words .= $word." ";
      $counter++;
    }
    return $words." ...";
  }
  return false;
}
