<?php require_once 'core/init.php'; ?>
<?php admin(); 
        if (!isAdmin()){
        redirectTo ('dash.php');
        }
?>

<?php include_once 'inc/header.php'; 
?>
<!-- Page content -->
                        
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Monthly Reports</li>
								</ol>
							</div> 
                            <div class="col-md-12">
				                <h2>MONTHLY REPORT GENERATION</h2>	
	                           <a href="report.php?p=1"><button class="btn btn-default"><i class="fa fa-book"></i> MISSION</button></a>
	                           <a href="report.php?p=2"><button class="btn btn-success"><i class="fa fa-globe"></i> CONTINENT</button></a>
                                <div class="clearfix" style="margin-bottom: 20px;"></div>
				            <div class="card shadow">
                        <?php if(@$_GET['p']== 1){ ?>
					   <div class="card-body">
                        <div><?php error($errors); success($message); ?></div>
                           <form action="report.php?p=1" method="post">
                           <div class="nav-wrapper p-0">
												<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
													<li class="nav-item">
														<div class="form-group">
												    <select class="form-control mission" name="mission" value="<?php echo stickyForm('mission'); ?>" required>
													<option value="">-- Choose Mission --</option>
													<?php
														$mission = $mission->getMissions();
                                                            foreach($mission as $mission) {
		                                                      echo "<option value='".$mission['id']."'";
		                                                      echo stickySelect('missionid', $mission['id']);
		                                                      echo ">".$mission['mission']."</option>";
														}
													?>
												    </select>
											         </div>	
                                                    </li>
												    <li class="nav-item">
														<div class="form-group">
												    <select class="form-control month" name="month" value="<?php echo stickyForm('month'); ?>" required>
													<option value="">-- Choose Month --</option>
													<?php
														$month = $month->getMonth();
                                                            foreach($month as $month) {
		                                                      echo "<option value='".$month['id']."'";
		                                                      echo stickySelect('monthid', $month['id']);
		                                                      echo ">".$month['month']."</option>";
														}
													?>
												    </select>
											         </div>
													</li>
                                                    <li class="nav-item">
														<div class="form-group">
												    <select class="form-control year" name="year" value="<?php echo stickyForm('year'); ?>" required>
													<option value="">-- Choose Year --</option>
													<?php
														$year = $year->getYear();
                                                            foreach($year as $year) {
		                                                      echo "<option value='".$year['id']."'";
		                                                      echo stickySelect('yearid', $year['id']);
		                                                      echo ">".$year['year']."</option>";
														}
													?>
												    </select>
											         </div>
													</li>
													<li class="nav-item">
                                                        <button type="submit" name="submit" class="btn btn-success"><i class="far fa-images mr-2"></i>Submit</button>
													</li>
												</ul>
											</div>
                                        </form> 
                               </div>
                                
                            
    
                            
       
                            <div class="row" id="print">
								<div class="col-md-12">
									<div class="card-box card shadow">
										<div class="card-body">
											<div class="clearfix">
								                <h3 style="text-align: center"><strong>NIGERIA IMMIGRATION SERVICE</strong><br />
                                                FOREIGN MISSIONS MONTHLY E-REPORT
                                                </h3>
												</div>
										</div>
										<div class="card-body" >
											<div class="mb-0">
												<div class="row border-bottom">
													<div class="col-md-12">
                                                        <div class="float-right"><h3 class="mb-0"><strong>For:</strong></h3></div>
														<div class="float-left">
															<h4><strong>Mission:</strong></h4>
														</div>
														
													</div><!-- end col -->

												</div>
												<!-- end row -->

												<div class="row mt-4">
													<div class="col-md-12">
                                                        <h3 style="text-align: center"><strong>PASSPORT MONTHLY RETURNS</strong></h3>
														<div class="table-responsive">
															<table class="table table-bordered m-t-30 text-nowrap">
																<thead >
																	<tr>
                                                                        <th>Type</th>
																		<th>Opening Balance</th>
																		<th>Issuance</th>
																		<th>Damaged</th>
																		<th>Balance in stock</th>
																		<th class="text-right">Revenue(USD)</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td class="text-right"></td>
																	</tr>
																</tbody>
															</table>
														</div>
                                                        <hr />
                                                        <h3 style="text-align: center"><strong>ETC MONTHLY RETURNS</strong></h3>
														<div class="table-responsive">
															<table class="table table-bordered m-t-30 text-nowrap">
																<thead >
																	<tr>
                                                                        
																		<th>Opening Balance</th>
																		<th>Issuance</th>
																		<th>Damaged</th>
																		<th>Balance in stock</th>
																		<th class="text-right">Revenue(USD)</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td class="text-right"></td>
																	</tr>
																</tbody>
															</table>
														</div>
                                                        <hr />
                                                <h3 style="text-align: center"><strong>VISA RETURNS</strong></h3>
														<div class="table-responsive">
															<table class="table table-bordered m-t-30 text-nowrap">
																<thead >
																	<tr>
                                                                        <th>Opening Balance</th>
																		<th>Issuance</th>
																		<th>Damaged</th>
																		<th>Balance in stock</th>
																		<th class="text-right">Revenue(USD)</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td class="text-right"></td>
																	</tr>
																</tbody>
															</table>
														</div>
                                                        <div class="table-responsive" style="padding-top: 25px">
                                                            <h3 style="text-align: center">VISA CLASSIFICATION</h3>
															<table class="table table-bordered align-items-center">
													<tbody>
														<tr>
															<td>Type</td>
															<td class="text-right">Number Issued</td>
														</tr>
														<tr>
															<td><span></span></td>
															<td class="text-right text-muted"><span></span></td>
														</tr>
														<tr>
															<td><span>Total</span></td>
															<td><h2 class="price text-right mb-0"></h2></td>
														</tr>
													</tbody>
												</table>
												</div>
                                                    <hr />
                                                <h3 style="text-align: center"><strong>STAFF MANAGEMENT NOMINAL ROLL</strong></h3>
														<div class="">
															<table class="table table-bordered w-100 text-nowrap">
																<thead >
																	<tr>
                                                                        <th class="wd-5p">S/N</th>
																		<th class="wd-10p">NIS No.</th>
																		<th class="wd-15p">Full Name</th>
																		<th class="wd-5p">Rank</th>
																		<th class="wd-5p">Date Posted</th>
                                                                        <th class="wd-5p">State of Origin</th>
																		<th class="wd-15p">E-mail</th>
                                                                        <th class="wd-10p">Phone No</th>
																	</tr>
																</thead>
                                                                
																<tbody>
																	<tr>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
                                                                        <td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
                                                <div class="table-responsive" style="padding-top: 25px">
                                                            <h3 style="text-align: center">LOCAL STAFF</h3>
															<div class="table-responsive">
															<table class="table table-bordered m-t-30 text-nowrap">
																<thead >
																	<tr>
                                                                        <th>S/N</th>
																		<th>Name</th>
																		<th>Designation</th>
																		<th>Salary (per month)</th>
																		
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
												<hr>
												<div class="d-print-none">
													<div class="float-right">
														<a href="javascript:window.print('print')" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
														<a href="#" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i> Export</a>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                    <?php 
                        } 
        ?>            
                <?php if(@$_GET['p']== 2){ ?>
                    <div class="card-body">
                    <div><?php error($errors); success($message); ?></div>
                           <form action="report.php?p=2" method="post">
                           <div class="nav-wrapper p-0">
												<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
													<li class="nav-item">
														<div class="form-group">
												    <select class="form-control continent" name="continent" value="<?php echo stickyForm('continent'); ?>" required>
													<option value="">-- Choose Continent --</option>
													<?php
														$continent = $continent->getContinent();
                                                            foreach($continent as $continent) {
		                                                      echo "<option value='".$continent['id']."'";
		                                                      echo stickySelect('continentid', $continent['id']);
		                                                      echo ">".$continent['continent']."</option>";
														}
													?>
												    </select>
											         </div>	
                                                    </li>
												    <li class="nav-item">
														<div class="form-group">
												    <select class="form-control month" name="month" value="<?php echo stickyForm('month'); ?>" required>
													<option value="">-- Choose Month --</option>
													<?php
														$month = $month->getMonth();
                                                            foreach($month as $month) {
		                                                      echo "<option value='".$month['id']."'";
		                                                      echo stickySelect('monthid', $month['id']);
		                                                      echo ">".$month['month']."</option>";
														}
													?>
												    </select>
											         </div>
													</li>
                                                    <li class="nav-item">
														<div class="form-group">
												    <select class="form-control year" name="year" value="<?php echo stickyForm('year'); ?>" required>
													<option value="">-- Choose Year --</option>
													<?php
														$year = $year->getYear();
                                                            foreach($year as $year) {
		                                                      echo "<option value='".$year['id']."'";
		                                                      echo stickySelect('yearid', $year['id']);
		                                                      echo ">".$year['year']."</option>";
														}
													?>
												    </select>
											         </div>
													</li>
													<li class="nav-item">
                                                        <button type="submit" name="submit" class="btn btn-success"><i class="far fa-images mr-2"></i>Submit</button>
													</li>
												</ul>
											</div>
                                        </form> 
                               </div>
                          </div>
                    <?php } ?>
                    </div>    
                            
<?php include_once 'inc/footer.php';  ?>