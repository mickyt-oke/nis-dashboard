<?php require_once 'core/init.php'; ?>

<?php include_once 'inc/header.php'; 
?>
<!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Change of Data</li>
								</ol>
							</div>
                            
                           <div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Select a Category to continue</h2>
										</div>
										<div class="card-body">
											<div class="nav-wrapper">
												<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
													<li class="nav-item">
														<a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"> Change of Data</a>
													</li>
													<li class="nav-item">
														<a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"> Damage/Validity</a>
													</li>
													<li class="nav-item">
														<a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"> Rearrangement</a>
													</li>
                                                    <li class="nav-item">
														<a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"> Lost Case</a>
													</li>
                                                    <li class="nav-item">
														<a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false"> FP Bypass</a>
													</li>
                                                    <li class="nav-item">
														<a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-6-tab" data-toggle="tab" href="#tabs-icons-text-6" role="tab" aria-controls="tabs-icons-text-6" aria-selected="false"> Photo Swap</a>
													</li>
												</ul>
											</div>
											
                                            
                                            
                            <div class="card shadow mb-0">
				                <div class="card-body">
								<div class="tab-content" id="myTabContent">
				            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
										<div class="card-header">
											<h2 class="mb-0">Change of Data</h2>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12">
													<form action="change-of-data.php?p=0" method="post">
                            						<?php error($errors); 
                            						success($message); ?>
													<div class="form-group">
                                                        <label class="form-label">Full Name</label>
														<input type="text" class="form-control" name="full_name" placeholder="Surname Firstname Othername" required />
													</div>
													<div class="form-group">
                                                        <label class="form-label">Passport Number</label>
														<input type="text" class="form-control" name="ppt_no" placeholder="passport no." required />
													</div>
													<div class="form-group">
                                                    <label class="form-label">Type of change</label>
                                                    <select class="form-control type" name="type" value="<?php echo stickyForm('type'); ?>" required>
													<option value="">-- Select --</option>
													   <option>correction of name spelling</option>
												        <option>change of date of birth</option>
                                                        <option>change year of birth</option>
                                                        <option>change due to marriage/divorce</option>
                                                        <option>change due to family resolution/faith</option>
												    </select>
                                                    </div>
                                                      <div class="form-group">
                                                        <label class="form-label"> Reason:</label>
                                                        <textarea rows="3" name="message" class="form-control type" value="<?php echo stickyForm('message'); ?>"> </textarea>
                                                        </div>  
													
													<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Old Data</label>
														<input type="text" class="form-control" name="old-data" />
														</div>
													</div>
													<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">New Data</label>
														<input type="text" class="form-control" name="new-data" />
														</div>
													</div>
													</div>
													<div class="col-md-12" align="center"><h2><strong>Relevant Supporting Documents </strong></h2></div>
												</div>
												
												<div class="row">
												<div class="col-md-6">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck2" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck2">Data page of Applicant</label>
                                                        <input type="file" name="datapage" />
													</div>
													<div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck3" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck3">Valid Identification</label>
                                                        <input type="file" name="datapage" />
													</div>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck4" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck4">Certificate of birth/Declaration</label>
                                                        <input type="file" name="datapage"/>
													</div>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck5" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck5">Signed Letter of Application</label>
                                                        <input type="file" name="datapage"/>
													</div>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck6" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck6">Sworn Court Affidavit</label>
                                                        <input type="file" name="datapage" />
													</div>
												</div>
												<div class="col-md-6">
													<div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck11" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck11">Evidence of Payment</label>
                                                        <input type="file" name="datapage" />
													</div>
													<div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck7" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck7">Newspaper publication</label>
                                                        <input type="file" name="datapage" />
													</div>
													<div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck8" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck8">Deed poll (family resolution)</label>
                                                        <input type="file" name="datapage" />
													</div>
													<div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck9" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck9">Data page of spouse</label>
                                                        <input type="file" name="datapage" />
													</div>
													<div class="custom-control custom-checkbox mb-3">
                                                        <input class="custom-control-input" id="customCheck10" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck10">Marriage dissolution</label>
                                                        <input type="file" name="datapage" />
													</div>
												</div>
											</div>
													<div class="col-md-12" align="center">
                     									<div class="form-group">
                         								<button type="submit" class="btn btn-success">
                        									<i class="fas fa-file-code"></i> Submit
                        								</button>
                     									</div>
                        							</div>
                     							<input type="hidden" name="submit" value="submit" />
												</form>
										</div>
									</div>
				<div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
								<div class="card-header">
								    <h2 class="mb-0"> Damage/Validity</h2>
								</div>
						
				</div>
				<div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
								<div class="card-header">
								    <h2 class="mb-0"> Rearrangement</h2>
								</div>
								</div>
                <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
								<div class="card-header">
								    <h2 class="mb-0"> Lost Case</h2>
				</div>
				</div>
                <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
								<div class="card-header">
								    <h2 class="mb-0"> FP Bypass</h2>
								</div>
														</div>
                <div class="tab-pane fade" id="tabs-icons-text-6" role="tabpanel" aria-labelledby="tabs-icons-text-6-tab">
								<div class="card-header">
								    <h2 class="mb-0"> Photo Swap</h2>
								</div>
				</div>
                      
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								 <!--   
                                <div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Default forms</h2>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control" name="input" placeholder="Enter Your Name" value="Enter Your Name">
													</div>
													<div class="form-group">
														<input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area." value="Read Only Text area. " readonly>
													</div>
													<div class="form-group">
														<input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group has-success">
														<input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
													</div>
													<div class="form-group  has-danger">
														<input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid"
														placeholder="Invalid feedback">
													</div>
													<div class="form-group">
														<input type="password" class="form-control" name="example-password-input" placeholder="Password..">
													</div>
												</div>
												<div class="col-md-12">
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write a large text here ..."></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Default forms with labels</h2>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Enter Name</label>
														<input type="text" class="form-control" name="example-text-input" placeholder="Name">
													</div>
													<div class="form-group">
														<label class="form-label">Disabled</label>
														<input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled>
													</div>
													<div class="form-group">
														<label class="form-label">Readonly</label>
														<input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area." value="Read Only Text area. " readonly>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Valid Email</label>
														<input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
													</div>
													<div class="form-group m-0">
														<label class="form-label">Invalid Number</label>
														<input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid"
														placeholder="Invalid Number..">
														<div class="invalid-feedback">Invalid feedback</div>
													</div>
													<div class="form-group">
														<label class="form-label">Password</label>
														<input type="password" class="form-control" name="example-password-input" placeholder="Password..">
													</div>
												</div>
												<div class="col-md-12 ">
													<div class="form-group mb-0">
														<label class="form-label">Message</label>
														<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="text here.."></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> 
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div> -->
                            
                            
                            

<?php include_once 'inc/footer.php';  ?>