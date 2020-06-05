<?php require_once 'core/init.php'; ?>
<?php admin(); 
        if (!isAdmin()){
        redirectTo ('index.php');
        }
?>
<?php include_once 'inc/header.php';
?>
        <!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Generate Report</li>
								</ol>
							</div>
							<div class="row">
				                <div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Select a Range</h2>
										</div>
										<div class="card-body">
											<p class="mg-b-20 mg-sm-b-40">Select a range of date the report is to cover. Note that invalid date will return a null value.</p>
											<div class="input-daterange datepicker row align-items-center">
												<div class="col">
													<div class="form-group mb-0">
														<div class="input-group">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
															</div>
															<input class="form-control" placeholder="Start date" type="text" value="10/16/2018">
														</div>
													</div>
												</div>
												<div class="col">
													<div class="form-group mb-0">
														<div class="input-group">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
															</div>
															<input class="form-control" placeholder="End date" type="text" value="10/20/2018">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>

<?php include_once 'inc/footer.php';  ?>