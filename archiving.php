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
                        <?php if (isset($_POST['submit'])) {
                            $required = array('sname', 'fname', 'mdname', 'dob', 'sex', 'enrol', 'ppt_no', 'application', 'category', 'attachment');

                            foreach($_POST as $key=>$value) {
                                if (empty($value) && in_array($key, $required)) {
                                    $errors[] = "Complete all fields, please.";
                                    break;
                                }
                            }

                            //if No errors
                            if (empty($errors)) {
                                $arhive->surname = sanitize('sname');
                                $arhive->firstname = sanitize('fname');
                                $arhive->middlename = sanitize('mdname');
                                $arhive->dob = sanitize('dob');
                                $arhive->sex = sanitize('sex');
                                $arhive->enrolid = sanitize('enrol');
                                $arhive->pptNo = sanitize('ppt_no');
                                $arhive->appType = sanitize('application');
                                $arhive->catType = sanitize('category');
                            }

                            if (empty($errors)) {
                                if ($archive->createArchive()) {
                                    $message[] = "Submission Successful.";

                                    // return success message
                                    header("Location:archiving.php");
                                }
                            }
                        }
                        ?>
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="card shadow overflow-hidden">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="mb-0">Archived Today</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <h3 class="text-success mb-0">10 <i class="fas fa-arrow-circle-down"></i></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="card shadow overflow-hidden">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="mb-0">Total Archived</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <h3 class="text-warning mb-0">1339 <i class="fas fa-arrow-circle-up"></i></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

						<div class="row">
								<div class="col-md-12">
									<div class="card card-profile  overflow-hidden">
										<div class="card-body">
											<div class="nav-wrapper p-0">
											<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
													<li class="nav-item">
														<a class="nav-link mb-sm-4 mb-md-0 active show mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fas fa-home mr-2"></i> Upload</a>
													</li>
													<li class="nav-item">
														<a class="nav-link mb-sm-4 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-user mr-2"></i> Records</a>
													</li>
													<li class="nav-item">
														<a class="nav-link mb-sm-4 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="fas fa-newspaper mr-2"></i> Reports</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
				<div class="card shadow">
					<div class="card-body">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        <div class="card-header"><h2>Applicant's Details</h2></div>
						<form action="" method="post">
                                <div class="col-md-12">
                                    <label class="form-control-label">Full Name</label>
                                    <div class="card-body-re row">
                                        <div class="col">
                                        <div class="form-group mb-0">
                                            <div class="input-group">
                                                <input class="form-control" name="sname" placeholder="Surname" type="text"">
                                            </div>
                                        </div></div>
                                        <div class="col">
                                        <div class="form-group mb-0">
                                            <div class="input-group">
                                                <input class="form-control" name="fname" placeholder="firstname" type="text"">
                                            </div>
                                        </div></div>
                                        <div class="col">
                                        <div class="form-group mb-0">
                                            <div class="input-group">
                                                <input class="form-control" name="mdname" placeholder="middlename" type="text"">
                                            </div>
                                        </div></div></div>
                                    <div class="card-body-re row">
                                        <div class="col">
								            <div class="form-group">
                           			            <label>Date of Birth</label>
								            <div class="form-group ">
                                                <input type="date" name="dob" placeholder="" class="form-control" value="<?php echo stickyForm('dob'); ?>" />
                        				    </div>
                                            </div></div>
                                        <div class="col">
								         <div class="form-group">
                           			            <label>Gender</label>
                                                <select type="text" name="sex" class="form-control" value="<?php echo stickyForm('sex') ?>">
                                                    <option>--select--</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                        				    </div>
                                        </div>
                                    </div>
                                    <div class="card-body-re row">
                                        <div class="col">
											<div class="form-group">
                                                <label class="form-label">Enrolment ID</label>
												<input type="number" class="form-control" name="enrol" placeholder="number">
                                            </div></div>
                                        <div class="col">
										<div class="form-group">
                                            <label class="form-label">Passport Number</label>
												<input type="text" class="form-control" id="ppt_no" placeholder="passport number">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card-body-re row">
										<div class="col">
                                            <div class="form-group">
								<label class="form-label">Application Type</label>
									<select class="form-control app" name="application" value="<?php echo stickyForm('application'); ?>" required>
										<option value="">-- select option --</option>
                                        <option>STANDARD PASSPORT</option>
                                        <option>OFFICIAL PASSPORT</option>
                                        <option>DIPLOMATIC PASSPORT</option>
									</select>
                                            </div></div>
                                    <div class="col">
                                        <div class="form-group">
                                        <label class="form-label">Category </label>
                                        <select class="form-control app" name="category" value="<?php echo stickyForm('category'); ?>" required>
                                            <option value="">-- select option --</option>
                                            <option>FRESH</option>
                                            <option>RE-ISSUE</option>
                                            <option>CHANGE OF DATA</option>
                                        </select>
                                        </div></div></div>
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
                                </div></div>
                                    <!--
                                    <iframe  name="pdfdoc" height="500px" width="100px" style="border:1px;">
                                        <img src="assets/images/1.jpg" />
                                    </iframe> -->
									<div class="col-md-12" align="center">
                     									<div class="form-group">
                         								<button type="submit" class="btn btn-success">
                        									<i class="fas fa-file-code"></i> Submit
                        								</button>
                                                        </div>
                                        <input type="hidden" name="submit" id="submit" />
                                    </div>
                            </div>
                        </form>
                    </div>
                        <div aria-labelledby="tabs-icons-text-2-tab" class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <h2 class="mb-0">Archived Records</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                                                <thead>
                                                <tr>

                                                    <th class="wd-15p">Firstname</th>
                                                    <th class="wd-20p">Surname</th>
                                                    <th class="wd-15p">Passport No</th>
                                                    <th class="wd-10p">Enrolment No</th>
                                                    <th class="wd-15p">Date of birth</th>
                                                    <th class="wd-15p">Date Submitted</th>
                                                    <th class="wd-10p">view</th>
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
                                                    <td><i class="fas fa-file"></i> </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                                                    <div class="card shadow">
                                                        <div class="card-header">
                                                            <h2>Generate Report </h2></div>
                                                            <form action="" method="post" id="searchform">
                                                                <div class="card-body row align-items-center">
                                                                    <div class="col">
                                                                    <div class="form-group mb-0">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                                            </div>
                                                                            <input class="form-control" placeholder="Start date" type="date"">
                                                                        </div>
                                                                    </div></div>
                                                                    <div class="col">
                                                                    <div class="form-group mb-0">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                                            </div>
                                                                            <input class="form-control" placeholder="End date" type="date"">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                        <div class="form-group mb-0">
                                                                            <button type="submit" class="btn btn-success" name="submit">
                                                                                <i class="fas fa-newspaper"></i> Generate
                                                                            </button>
                                                                        </div>
                                                                </div>
                                                            </form>
														</div>
												</div>
											</div>
										</div>
                                </div>
                            </div>
                        </div>
<?php include_once 'inc/footer.php';  ?>
