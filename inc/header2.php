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
    
    <!-- form Uploads -->
    <link href="assets/plugins/fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />

	<!-- Tabs CSS -->
	<link href="assets/plugins/tabs/style.css" rel="stylesheet" type="text/css">

	<!-- jvectormap CSS -->
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

	<!-- Custom scroll bar css-->
	<link href="assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
</head>
<body class="app sidebar-mini rtl" oncontextmenu="return false;">
	<div id="global-loader" ></div>
	<div class="page">
		<div class="page-main">
			<!-- Sidebar menu-->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar ">
				<div class="sidebar-img">
					<a class="navbar-brand" href="dashboard.php"><img alt="..." class="navbar-brand-img main-logo" src="assets/img/brand/diplomat.png"> <img alt="..." class="navbar-brand-img logo" src="assets/img/brand/logo3.jpg"></a>
					<ul class="side-menu">
						<li>
							<a class="side-menu__item active" href="dashboard.php"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Monthly Returns</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
                                <li>
									<a href="add-new.php" class="slide-item">New Entry</a>
								</li>
								<li>
									<a href="manage-returns.php" class="slide-item">Manage Returns</a>
								</li>
								<li>
									<a href="statistics.php" class="slide-item">Statistics</a>
								</li>
							</ul>
						</li>
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-edit"></i><span class="side-menu__label">Reports</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
                                <li>
									<a href="report.php" class="slide-item">Monthly Reports</a>
								</li>
								<li>
									<a href="generate.php" class="slide-item">Quarterly Reports</a>
								</li>
                                <li>
									<a href="#" class="slide-item">Archives</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Staff Management</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="register.php" class="slide-item">Add New Staff</a>
								</li>
								<li>
									<a href="manage.php" class="slide-item">Manage/Update Records</a>
								</li>
								<li>
									<a href="register.php?p=1" class="slide-item">Add Local Staff</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-map"></i><span class="side-menu__label"> Applications/Requests</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="change-of-data.php" class="slide-item">Change of Data</a>
								</li>
								<li>
									<a href="application-request.php" class="slide-item">Requests</a>
								</li>
                                <li>
									<a href="approvals.php" class="slide-item">Approvals</a>
								</li>
                                <li>
									<a href="requirements.php" class="slide-item">Requirements</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Stock Management</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="#" class="slide-item">Passport Inventory </a>
								</li>
								<li>
									<a href="#" class="slide-item">Visa Inventory </a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</aside>
			<!-- Sidebar menu-->

			<!-- app-content-->
			<div class="app-content ">
				<div class="side-app">
					<div class="main-content">
						<div class="p-2 d-block d-sm-none navbar-sm-search">
							<!-- Form -->
							<form class="navbar-search navbar-search-dark form-inline ml-lg-auto">
								<div class="form-group mb-0">
									<div class="input-group input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-search"></i></span>
										</div><input class="form-control" placeholder="Search" type="text">
									</div>
								</div>
							</form>
						</div>
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
								

								<!-- Brand -->
								<a class="navbar-brand pt-0 d-md-none" href="#">
									<img src="assets/img/brand/logo-light.png" class="navbar-brand-img" alt="...">
								</a>
								<!-- Form -->
								<form class="navbar-search navbar-search-dark form-inline mr-3 ml-lg-auto">
									<div class="form-group mb-0">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-search"></i></span>
											</div><input class="form-control" placeholder="Search" type="text">
										</div>
									</div>
								</form>
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
                                            <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="assets/img/babandede.png"></span>
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
											<a class="dropdown-item" href="#"><i class="ni ni-lock-circle-open"></i> <span>Login</span></a>
                                            <?php endif; ?>
										</div>
									</li>
								</ul>
							</div>
						</nav>
						<!-- Top navbar-->