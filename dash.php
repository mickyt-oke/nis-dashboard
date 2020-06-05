<?php require_once 'core/init.php';  ?>


<?php include 'inc/header.php'; ?>
        <!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
								</ol>
                            </div>
                            
                            
							<div class="card shadow overflow-hidden">
								<div class="">
									<div class="row">
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
													<i class="fas fa-chart-line mr-2"></i>
													Logged in:
												</p>
												<h2 class="text-primary text-xl"><?php echo $profile->getName($_SESSION['profile']); ?></h2>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-users mr-2"></i>
												  Attaches 
												</p>
												<h2 class="text-yellow text-xl"><?php echo $user->countAll(); ?></h2>
												
											</div>
										</div>
                                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-users mr-2"></i>
												  Local Staff
												</p>
												<h2 class="text-yellow text-xl"><?php echo $user->countAll(); ?></h2>
												
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-briefcase mr-2"></i>
												  Mission
												</p>
												<h2 class="text-warning text-xl"><?php echo $profile->getMission($_SESSION['profile']); ?></h2>
												
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-signal mr-2"></i>
												  Country
												</p>
												<h2 class="text-success text-xl"><?php echo $profile->getCountry($_SESSION['profile']); ?> </h2>
												
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-time"></i>
												 Month in View
												</p>
												<h2 class="text-success text-xl"><?php $timestamp = time(); echo(date("F Y", $timestamp)) ?> </h2>
											</div>
										</div>
									</div>
								</div>
							</div>
							
<?php include_once 'inc/footer.php'; ?>    
