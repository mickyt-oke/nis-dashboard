<?php require_once 'core/init.php'; ?>


<?php include_once 'inc/header.php'; ?>
        <!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Archive Passport Data</li>
								</ol>
							</div>
						<div class="row">
								<div class="col-md-12">
									<div class="card card-profile  overflow-hidden">
										<!--<div class="card-body text-center cover-image" data-image-src="assets/img/printer.jpg">
											
											<button class="btn btn-default btn-lg">
												<span class="fas fa-toolbox"></span> Connect Device
											</button>
											
										</div> -->
										<div class="card-body">
											<div class="nav-wrapper p-0">
											<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
													<li class="nav-item">
														<a class="nav-link mb-sm-4 mb-md-0 active show mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fas fa-home mr-2"></i>Upload</a>
													</li>
													<li class="nav-item">
														<a class="nav-link mb-sm-4 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-user mr-2"></i>Records</a>
													</li>
													<li class="nav-item">
														<a class="nav-link mb-sm-4 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="fas fa-newspaper mr-2"></i>Search</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
				<div class="card shadow">
					<div class="card-body pb-0">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
						<h2>Applicant's Details</h2>
						<form>
							<div class="row">
                                <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Full Name</label>
												<input type="text" class="form-control" name="firstname" placeholder="Surname">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" name="middlename" placeholder="FirstName ">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" name="othername" placeholder="Othername">
											</div>
								<div class="form-group">
                           			<label>Date of Birth</label>
								<div class="form-group ">
                            <input type="date" name="dob" placeholder="" class="form-control" value="<?php echo stickyForm('dob'); ?>" />
                        				</div>
									</div>
											<div class="form-group">
                                                <label class="form-label">Enrolment ID</label>
												<input type="number" class="form-control" name="enrol" placeholder="number">
											</div>
										<div class="form-group ">
                                            <label class="form-label">Passport Number</label>
												<input type="text" class="form-control" id="ppt_no" placeholder="passport number">
											</div>
										<div class="form-group">
								<label class="form-label">Application Type</label>
									<select class="form-control app" name="application" value="<?php echo stickyForm('app'); ?>" required>
										<option value="">-- select option --</option>
                                        <option>STANDARD PASSPORT</option>
                                        <option>OFFICIAL PASSPORT</option>
                                        <option>DIPLOMATIC PASSPORT</option>
                                        <option>OTHERS</option>
									</select>
									</div>
                                    <div class="form-group ">
                                        <label class="form-label">Category </label>
                                        <select class="form-control app" name="category" value="<?php echo stickyForm('app'); ?>" required>
                                            <option value="">-- select option --</option>
                                            <option>FRESH</option>
                                            <option>RE-ISSUE</option>
                                            <option>CHANGE OF DATA</option>
                                        </select>
                                    </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <h2 class="mb-0">Drop Passport PDF File here</h2>
                                        </div>
                                        <div class="card-body">
                                            <input type="file" name="attachment" class="dropify" value="<?php echo stickyForm('attachment'); ?>" data-height="300" required/>
                                        </div>
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
									</form>
                    </div>
                    <div aria-labelledby="tabs-icons-text-2-tab" class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel">
													<div class="row">
														<div class="col-md-12">
															<div class="content content-full-width" id="content">
																
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
													<div class="row profile ng-scope">
														<div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6 col-md-offset-3">

                                                                    <form action="" method="post" id="searchform">

                                                                        <fieldset>
                                                                            <legend><i class="fa fa-user"></i> Search Records</legend>
                                                                            <div class="form-group">
                                                                                <input type="text" name="search" placeholder="Search with firstname, surname, passport no." class="form-control" required>
                                                                            </div>
                                                                        </fieldset>
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-primary" name="submit">
                                                                                <i class="fa fa-user"></i> Search
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
														</div>
													</div>
												</div>
											</div>
										</div>
                                </div></div>


<?php include_once 'inc/footer.php';  ?>