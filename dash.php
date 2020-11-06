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
												<h2 class="text-yellow text-xl"><?php echo $user->countAttache($_SESSION['mission']); ?></h2>
												
											</div>
										</div>
                                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-users mr-2"></i>
												  Local Staff
												</p>
												<h2 class="text-yellow text-xl"> </h2>
												
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
                            <?php success($message); ?>
                            <div class="row">
                            <div class="col-lg-6">
                                <div class="card shadow">
                                    <div class="card-header bg-gradient-success">
                                        <h2 class="mb-0 text-white">PASSPORT RETURNS SUMMARY</h2>
                                    </div>
                                    <div class="card-body">
                                        <?php $return = $entry->getReturnbyMonth($_SESSION['mission']);
                                        if (isset($profile)):
                                        ?>
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-striped table-bordered w-100 text-nowrap">
                                                <tr><th></th><th>MONTH</th><th>STATUS</th></tr>
                                                <tbody>
                                                <?php $c=1; foreach($return as $r): ?>
                                                <tr>
                                                    <td><?php echo $c; ?></td>
                                                    <td><h2><?php echo $r['month']."  ". $r['year']; ?></h2></td>
                                                <td><?php echo "<a class=\"btn btn-success btn-md\" href=\"#\">Completed</a>"; ?></td>
                                                </tr>
                                                <?php $c++; endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                                <div class="col-lg-6">
                                    <div class="card shadow">
                                        <div class="card-header bg-gradient-danger">
                                            <h2 class="mb-0 text-white">VISA RETURNS SUMMARY</h2>
                                        </div>
                                        <div class="card-body">
                                            <?php $visareturn = $visacat->getVisaReturn($_SESSION['mission']);
                                            if (isset($profile)):
                                                ?>
                                                <div class="table-responsive">
                                                    <table id="example1" class="table table-striped table-bordered w-100 text-nowrap">
                                                        <tr><th></th><th>MONTH</th><th>STATUS</th></tr>
                                                        <tbody>
                                                        <?php $x=1; foreach($visareturn as $v): ?>
                                                            <tr>
                                                                <td><?php echo $x; ?></td>
                                                                <td><h2><?php echo $v['month']."  ". $v['yearid']; ?></h2></td>
                                                                <td><?php echo "<a class=\"btn btn-success btn-md\" href=\"#\">Completed</a>"; ?></td>
                                                            </tr>
                                                            <?php $x++; endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php include_once 'inc/footer.php'; ?>    
