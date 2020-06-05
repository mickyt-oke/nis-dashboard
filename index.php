<?php 
error_reporting(0);
session_start();
ob_start();

include_once 'config_2.php';

    
  if (count($_POST)>0){

	// Process form request
  if (isset($_POST['loginuser'])) {
      $user->username = trim($_POST['username']);
      $user->password = trim($_POST['password']);

    // Ensure no field is empty
    if (!empty($user->username) && !empty($user->password)) {
      // Hash password
      $user->password = md5($user->password);
      if ($user->login($user->username, $user->password)) {
		  $_SESSION['loggedin_time'] = time();
        ($_SESSION['us3rgr0up'] == 118) ? redirectTo('welcome.php') : redirectTo('dash.php');
      }
      else {
        $errors[] = "Authentication failed. Wrong credentials";
		  header ("Location:$ref?q=Wrong Username or Password.");
      }
    }
    else {
      $errors[] = "All fields are required.";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="Nigeria Immigration Foreign Missions Dashboard" name="description">
	<meta content="MIckyT" name="author">

	<!-- Title -->
	<title>NIS DIPLOMATIC MISSIONS | Welcome</title>
    <link rel="stylesheet" href="assets/css/bootstrap_2.css" />
    <link rel="stylesheet" href="assets/css/form-elements.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
	<link href="assets/img/brand/favicon.ico" rel="icon" type="image/icon">
    <link rel="stylesheet" type="text/css" href="assets/css/demo-2.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style4.css" />

<?php if(@$_GET['q'])
{echo'<script>alert("'.@$_GET['q'].'");</script>';}
?>
<script>
	function validateForm() {
		var y = document.forms["form"]["username"].value;	
		var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}
		var x = document.forms["form"]["email"].value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}
		var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}

		var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
</head>

    <body id="page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>nigeria immigration service </h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3>automating missions</h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
            <li><span>Image 05</span><div><h3>ease of doing business</h3></div></li>
            <li><span>Image 06</span><div><h3></h3></div></li>
        </ul>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="#" class="launch-modal" data-modal-id="modal-search">
                    <strong>DIPLOMATIC DESK DIRECTORY LISTING</strong></a>
				<strong><?php error($errors);
                      success($message); ?></strong>
                <span class="right">
                    <a class="launch-modal" href="#" data-modal-id="modal-login">
                        <strong>&laquo;staff login</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            
            <header>
                <h1>NIS<span> DIPLOMATIC MISSIONS </span>PORTAL</h1>
                <h2>Integrating &amp; harmonizing Foreign Missions</h2>
            </header>
        </div>
        
         <!-- MODAL -->
        <div class="modal fade" id="modal-login" tabindex="2" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 align="center" id="modal-login-label">Sign in with Credentials</h3>
        			</div>
        			<p></p>
        			<div class="modal-body">
        				<form action="index.php" method="post">
						<div class="form-group">
                         <input type="text" name="username" placeholder="User ID" class="form-control" value="<?php echo stickyForm('username') ?>" autofocus required />
                        </div>

				        <div class="form-group">
                         <input type="password" name="password" placeholder="Password" class="form-control" required />
                        </div>
                            
                     	<button type="submit" class="btn btn-default">
                        	<i class="fa fa-lock"></i> Login
                        </button>
                        <input type="hidden" name="loginuser" value="loginuser" />
                    </form>
        			</div>
        			
        		</div>
        	</div>
        </div>

        <div class="modal fade" id="modal-search" tabindex="1" role="document" aria-labelledby="modal-search-label" aria-hidden="true">
        	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 id="modal-search-label">Search</h3>
        			</div>
                    <div class="modal-body" align="center">
                    <form action="index.php?go" method="post" id="searchform">
        			
                        <div class="form-group">
						  <input type="text" class="form-control" name="search" placeholder="search with country, city or mission" autofocus required/>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Search</button>
                        <input type="hidden" name="search" value="search" />
                        </div>
        			</form>
                </div>
        		</div>
        	</div>
        </div> 
        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>