<?php require_once 'core/init.php'; 
			admin(); 
        if (!isAdmin()){
        redirectTo ('dash.php');
        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="Nigeria Immigration Foreign Diplomatic Missions Dashboard" name="description">
	<meta content="MIckyT" name="author">

	<!-- Title -->
	<title>NIS DIPLOMATIC MISSIONS E-DESK DASHBOARD</title>

	<!-- Favicon -->
	<link href="assets/img/brand/favicon.ico" rel="icon" type="image/icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

	<!-- Icons -->
	<link href="assets/css/icons.css" rel="stylesheet">

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Ansta CSS -->
	<link href="assets/css/dashboard.css" rel="stylesheet" type="text/css">

	<!-- Tabs CSS -->
	<link href="assets/plugins/tabs/style.css" rel="stylesheet" type="text/css">

	<!-- Custom scroll bar css-->
	<link href="assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">
	
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>

</head>
<body class="app sidebar-mini rtl" >
	<div id="global-loader" ></div>
	<div class="page">
		<div class="page-main">
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar">
				<div class="sidebar-img">
					<a class="navbar-brand" href="#"><img alt="..." class="navbar-brand-img main-logo" src="assets/img/brand/diplomat.png"> <img alt="..." class="navbar-brand-img logo" src="assets/img/brand/logo3.jpg"></a></div>
			</aside>
			<div class="app-content">
				<div class="side-app">
					<div class="main-content">
						<!-- Top navbar -->
						<nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
							<div class="container-fluid">
								<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                                
                                <!-- Horizontal Navbar -->
								<ul class="navbar-nav align-items-center d-none d-xl-block">
									<li class="nav-item dropdown">
										<a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0 d-none d-lg-block" data-toggle="dropdown" href="#" role="button">
											<img src="" />
										</a>
									</li>
								</ul>
							</div>
						
								<!-- User -->
								<ul class="navbar-nav align-items-center ">
									<li class="nav-item d-none d-md-flex">
										<div class="dropdown d-none d-md-flex mt-2 ">
											<a class="nav-link full-screen-link pl-0 pr-0"><i class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
										</div>
                                    </li>
									<?php if(loggedIn()): ?>
									<li class="nav-item dropdown">
										<a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="#" role="button">
										<div class="media align-items-center">
                                            <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src=""></span>
											<div class="">
												<span class="mb-0 "><?php echo $profile->getName($_SESSION['profile']); ?></span>
											</div>
										</div></a>
										<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
											<div class=" dropdown-header noti-title">
												<h6 class="text-overflow m-0">Logged in!</h6>
											</div>
                                            <?php if ($_SESSION['us3rgr0up'] == 118): ?>
											<a class="dropdown-item" href="manage.php"><i class="ni ni-single-02"></i> <span>Profile</span></a>
											<?php endif; ?>
											<a class="dropdown-item" href="logout.php"><i class="ni ni-user-run"></i> <span>Logout</span></a>
                                            <?php else: ?>
											<a class="dropdown-item" href="index.php"><i class="ni ni-lock-circle-open"></i> <span>Login</span></a>
                                            <?php endif; ?>
										</div>
									</li>
								</ul>
							</div>
						</nav>
					
			
			
		<div class="container-fluid pt-8">
			<div class="page-header mt-0 shadow p-3">
				<ol class="breadcrumb mb-sm-0">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Welcome</li>
				</ol>
			</div>
            <div class=" row">
                <div class="col-md-12">
                    <div class="card-profile overflow-hidden">
                        <div class="row justify-content-center">
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <div class="card shadow">
                                    <div class="card-body text-center">
                                        <i class="fas fa-envelope-open-text fa-3x text-default"></i>
                                        <h4 class="mt-3">Returns &amp; Reports</h4>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#form"> Enter</button>
                                    </div>
                                        </div>
                                    </div>

								<div class="col-md-6 col-lg-6 col-xl-6">
									<div class="card shadow">
										<div class="card-body text-center">
											<i class="fas fa-book fa-3x text-warning"></i>
											<h4 class="mt-3" >I &amp; R Application</h4>
											
											<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#form2"> Enter</button>
										</div>
									</div>
								</div>
                                <!--
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card shadow">
										<div class="card-body text-center">
											<i class="fas fa-box-open fa-3x text-success"></i>
											<h4 class="mt-3">Stock Management</h4>

                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form3"> Enter</button>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card shadow">
										<div class="card-body text-center">
											<i class="fas fa-database fa-3x text-danger"></i>
											<h4 class="mt-3" >Archive</h4>
											<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form4" >Enter</button>
										</div>
									</div>
								</div> -->
							</div>
						</div>
                     </div></div></div>
	<?php include_once 'inc/dash-foot.php'; ?>
			
	<!-- modal form -->
	<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="form" aria-hidden="true">
		<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-body p-0">
					<div class="card bg-default shadow border-0 mb-0">
				<div class="card-body px-lg-5 py-lg-5">
						<div class="text-center text-white mb-4 h2">User Token </div>
							<form role="form" action="token.php?q=welcome.php" method="post">
					<div class="form-group">
					<div class="input-group input-group-alternative">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
						</div>
							<input class="form-control" name="pass" placeholder="passcode" type="password">
						</div>
					</div>
						<div class="text-center"><input type="submit" class="btn btn-white my-4" name="login" value="Login" /></div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
					
		<!-- form2 -->			
		<div class="modal fade" id="form2" tabindex="-1" role="dialog" aria-labelledby="form2" aria-hidden="true">
		<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-body p-0">
					<div class="card bg-warning shadow border-0 mb-0">
				<div class="card-body px-lg-5 py-lg-5">
						<div class="text-center text-white mb-4 h2">User Token </div>
							<form role="form" action="token.php?q=welcome.php" method="post">
					<div class="form-group">
					<div class="input-group input-group-alternative">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
						</div>
							<input class="form-control" name="pwd" placeholder="passcode" type="password">
						</div>
					</div>
						<div class="text-center"><input type="submit" class="btn btn-white my-4" name="log-in" value="Login" /></div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

                    <!-- form3 -->
                    <div class="modal fade" id="form3" tabindex="-1" role="dialog" aria-labelledby="form3" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card bg-success shadow border-0 mb-0">
                                        <div class="card-body px-lg-5 py-lg-5">
                                            <div class="text-center text-white mb-4 h2">User Token </div>
                                            <form role="form" action="token.php?q=welcome.php" method="post">
                                                <div class="form-group">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                        </div>
                                                        <input class="form-control" name="pasw" placeholder="passcode" type="password">
                                                    </div>
                                                </div>
                                                <div class="text-center"><input type="submit" class="btn btn-white my-4" name="log-in" value="Login" /></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- form4 -->
                    <div class="modal fade" id="form4" tabindex="-1" role="dialog" aria-labelledby="form4" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card bg-warning shadow border-0 mb-0">
                                        <div class="card-body px-lg-5 py-lg-5">
                                            <div class="text-center text-white mb-4 h2">User Token </div>
                                            <form role="form" action="token.php?q=welcome.php" method="post">
                                                <div class="form-group">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                        </div>
                                                        <input class="form-control" name="pswd" placeholder="passcode" type="password">
                                                    </div>
                                                </div>
                                                <div class="text-center"><input type="submit" class="btn btn-white my-4" name="log-in" value="Login" /></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>