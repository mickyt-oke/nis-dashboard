<?php require_once 'core/init.php';
    admin();
    if (!isAdmin()){
    redirectTo ('dash.php');
    }
    include_once 'inc/header-2.php';
?>
<!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Manage Returns</li>
								</ol>
							</div>
                        <div class="row">
								<div class="col-lg-12">
									<div class="card shadow">
										<div class="card-header ">
											<h2 class="mb-0">PASSPORT RETURNS</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive ">
												<table class="table table-bordered align-items-center">
													<thead>
														<tr>
															<th>Month/Year</th>
															<th>Date Submitted</th>
															<th>Status</th>
															<th>Submitted by</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td></td>
															<td></td>
                                                            <td class="w-8 h-8 "><a class="btn btn-success btn-md" href="#">Completed</a></td>
															<td></td>
															<td><a class="btn btn-primary btn-sm text-white" href="#" data-original-title="edit"><i class="fas fa-file"></i></a>
                                                            <a class="btn btn-success btn-sm text-white" data-original-title="view" href="#"><i class="fas fa-eye"></i></a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
                                <div class="col-lg-12">
									<div class="card shadow">
										<div class="card-header ">
											<h2 class="mb-0">VISA RETURNS</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive ">
												<table class="table table-bordered align-items-center">
													<thead>
														<tr>
															<th>Month/Year</th>
															<th>Date Submitted</th>
															<th>Status</th>
															<th>Submitted by</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td></td>
															<td></td>
                                                            <td class="w-8 h-8 "><a class="btn btn-success btn-md" href="">Completed</a></td>
															<td></td>
															<td><a class="btn btn-primary btn-sm text-white" href="#" data-original-title="edit"><i class="fas fa-file"></i></a>
                                                            <a class="btn btn-success btn-sm text-white" data-original-title="view" href="#"><i class="fas fa-eye"></i></a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
                                <div class="col-lg-12">
									<div class="card shadow">
										<div class="card-header ">
											<h2 class="mb-0">ETC RETURNS</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive ">
												<table class="table table-bordered align-items-center">
													<thead>
														<tr>
															<th>Month/Year</th>
															<th>Date Submitted</th>
															<th>Status</th>
															<th>Submitted by</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td></td>
															<td></td>
                                                            <td class="w-8 h-8 "><a class="btn btn-success btn-md" href="">Completed</a></td>
															<td></td>
															<td><a class="btn btn-primary btn-sm text-white" href="#" data-original-title="edit"><i class="fas fa-file"></i></a>
                                                            <a class="btn btn-success btn-sm text-white" data-original-title="view" href="#"><i class="fas fa-eye"></i></a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
                            
								<div class="col-lg-12">
									<div class="card shadow ">
										<div class="card-header ">
											<h2 class="mb-0">REVENUE SUMMARY</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered align-items-center">
                                                    <thead>
														<tr>
															<th>Month/Year</th>
															<th>Totals</th>
															<th>Date</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

                        
<?php include_once 'inc/footer.php'; ?>