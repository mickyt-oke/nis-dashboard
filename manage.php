<?php require_once 'core/init.php'; ?>
<?php require_once 'core/init2.php'; ?>

<?php include_once 'inc/header.php'; ?>
        <!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Manage Records</li>
								</ol>
							</div>
                <!-- STAFF -->
                            <!-- Default values for page -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <h2 class="mb-0">Staff Record</h2>
                                        </div>
                                        <div class="card-body">
                                            <?php $users = $profile->getProfile($_SESSION['profile']);
                                              if (isset($profile)):
                                             ?>
                                            <div class="table-responsive">
<table id="example1" class="table table-striped table-bordered w-100 text-nowrap">
<tr><th class="wd-15p">Full name</th><th class="wd-10p">Service No</th><th class="wd-15p">Rank</th><th class="wd-15p">Phone</th><th class="wd-20p">E-mail</th><th class="wd-20p">Mission</th><th class="wd-5p"></th></tr>
                      <tbody>
                      <?php $c=1; ?>
                        <tr>
                         <td><?php echo $users['firstname']." ".$users['lastname']; ?></td>
                         <td><?php echo $users['nisno']; ?></td>
                         <td><?php echo $users['rank']; ?></td>
                         <td><?php echo $users['phone1']; ?></td>
                         <td><?php echo $users['email']; ?></td>
                         <td><?php echo $users['mission']; ?></td>
                         <td><?php echo "<a class=\"btn btn-primary btn-sm\" title=\"preview " . htmlspecialchars_decode($users['firstname'], ENT_QUOTES) . "\"href=\"manage.php?preview=" . htmlspecialchars_decode($users['firstname'], ENT_QUOTES) . "\"><i class=\"side-menu__icon fe fe-eye\"></i> Manage</a>"; ?>
                         </td>
                           <!-- <a class="btn btn-success btn-sm" href="#"><i class="side-menu__icon fe fe-edit"></i> &nbsp;Edit </a> -->
                       </tr>
                      </tbody>
                    </table><?php endif;?>
                  </div>
                </div>
               </div>
              </div>
            </div>



        <!-- end of default -->

    <?php
        if (isset($_REQUEST['preview'])) {
		//query the database
		$sql = mysqli_query($con, "SELECT * FROM profile WHERE firstname='" . htmlspecialchars($_REQUEST['preview'], ENT_QUOTES) . "' ");

		if(mysqli_num_rows($sql) == 0) {
				echo "<h3 style=\"color:#0000cc;text-align:center;\">No Information to display..!</h3>";
		}
			else if ($p = mysqli_fetch_array($sql)) {
	?>

                <!-- modal dialog-->
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h2 class="modal-title" id="largeModalLabel">PROFILE OF <?php echo $p['firstname']; ?></h2>
											<a href="manage.php"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
                                                </button></a>
										</div>
										<div class="modal-body">
                                            <h2 class="mb-0">BIO-DATA</h2>
											<div class="table-responsive border ">
														<table class="table row table-borderless w-100 m-0 ">
															<tbody class="col-lg-6 p-0">
																<tr>
																	<td><strong>First Name: </strong> <?php echo $p['firstname']; ?></td>
																</tr>
                                                                <tr>
																	<td><strong>Middle Name: </strong> <?php echo $p['middlename']; ?></td>
																</tr>
																<tr>
																	<td><strong>Last Name: </strong> <?php echo $p['lastname']; ?></td>
																</tr>
																<tr>
																	<td><strong>DOB: </strong> <?php echo $p['dob']; ?></td>
																</tr>
                                                                <tr>
																	<td><strong>Gender: </strong> <?php echo $p['gender']; ?></td>
																</tr>
															</tbody>
															<tbody class="col-lg-6 p-0">
                                                                <tr>
																	<td><strong>Phone: </strong> <?php echo $p['phone1']; ?></td>
																</tr>
																 <tr>
																	<td><strong>Alternate Phone: </strong> <?php echo $p['phone2']; ?></td>
																</tr>
                                                                <tr>
																	<td><strong>Address: </strong> <?php echo $p['address']; ?></td>
																</tr>
                                                                <tr>
																	<td><strong>E-mail: </strong> <?php echo $p['email']; ?></td>
																</tr>
                                                                <tr>
																	<td><strong>State of Origin: </strong> <?php echo $p['state']; ?></td>
																</tr>
															</tbody>
														</table>
													</div>
                                        <h2 class="mb-0">WORK INFORMATION</h2>
											<div class="table-responsive border ">
														<table class="table row table-borderless w-100 m-0 ">
															<tbody class="col-lg-6 p-0">
																<tr>
																	<td><strong>Rank: </strong> <?php echo $p['rank']; ?></td>
																</tr>
                                                                <tr>
																	<td><strong>Date of First appt: </strong> <?php echo $p['dofa']; ?></td>
																</tr>
                                                                <tr>
																	<td><strong>Date of Present appt: </strong> <?php echo $p['dopa']; ?></td>
																</tr>
																<tr>
																	<td><strong>Date Posted: </strong> <?php echo $p['posted']; ?></td>
																</tr>

                                                                <tr>
																	<td><strong>Country: </strong> <?php echo $p['country']; ?></td>
																</tr>
                                                                <tr>
																	<td><strong>Mission: </strong> <?php echo $p['mission']; ?></td>
																</tr>
															</tbody>
															<tbody class="col-lg-6 p-0">
                                                                <tr>
                                                                    <td>&nbsp;</td>
                                                                </tr>
																 <tr >
                                                                     <td style="background-image: url(assets/img/default_avatar.png); height: 128px; width: 128px; border: 1px solid; ">
                                                                         <img src="<?php echo $p['image']; ?>" alt="image" /></td>
																</tr>
															</tbody>
														</table>
													</div>
										</div>
										<div class="modal-footer">
                                            <a href="manage.php"><button type="button" class="btn btn-secondary">Close</button></a>
										</div>
									</div>
								</div>
                    <?php }
                    }
                ?>

                <?php
                    if (isset($_REQUEST['edit'])) {
		//query the database
		$sql = mysqli_query($con, "SELECT * FROM local_staff WHERE first_name='" . htmlspecialchars($_REQUEST['edit'], ENT_QUOTES) . "' ");

		if(mysqli_num_rows($sql) == 0) {
				echo "<h3 style=\"color:#0000cc;text-align:center;\">No data to edit..!</h3>";
		}
			else if ($x = mysqli_fetch_array($sql)) {
	?>

                     <div class="card-body">
											<div class="row">
												<div class="col-md-6">
                                                    <div class="card-header">
                                                        <h2 class="mb-0"><i class="fas fa-user"></i> BIO DATA</h2>
										              </div>
													<div class="form-group">
														<label class="form-label">First Name</label>
														<input type="text" class="form-control" name="first_name" placeholder="Firstname" value="<?php echo stickyForm('first_name'); ?>" autofocus required />
													</div>
													<div class="form-group">
														<label class="form-label">Last Name</label>
														<input type="text" class="form-control" name="last_name" placeholder="lastname" value="<?php echo stickyForm('last_name'); ?>" required />
													</div>
                                        <div class="form-group">
												<label for="gender">Gender: </label>
                                        <input type="radio" name="sex" value="male" <?php echo stickyRadio('sex', 'male') ?>> Male
                                        <input type="radio" name="sex" value="female" <?php echo stickyRadio('sex', 'female') ?>> Female
                                    </div>
                                <div class="form-group">
                                <label class="form-label">Phone Number</label>
                         <input type="number" name="mobile" placeholder="Mobile" class="form-control" value="<?php echo stickyForm('mobile'); ?>" required /></div>
                                <div class="form-group">
							<label class="form-label">Email</label>
							<input type="email" class="form-control" name="e_mail" placeholder="E-mail" value="<?php echo stickyForm('e_mail'); ?>" required />
				</div>
				                <div class="form-group mb-0">
									<label class="form-label">Address</label>
										<textarea class="form-control" name="address" rows="2" placeholder="Residential address" value="<?php echo stickyForm('address'); ?>"></textarea>
													</div>
                                <div class="form-group">
                                <label class="form-label">City</label>
                         <input type="text" name="city" placeholder="City" class="form-control" value="<?php echo stickyForm('city'); ?>" required />
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-header">
							 <h2 class="mb-0"><i class="fas fa-briefcase"></i> WORK INFORMATION</h2>
							</div>
                            <div class="form-group">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" placeholder="Designation" class="form-control" value="<?php echo stickyForm('designation'); ?>" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Remuneration ($USD)</label>
                         <input type="text" name="salary" placeholder="Salary" class="form-control" value="<?php echo stickyForm('salary'); ?>" required />
                            </div>
                        <div class="form-group">
                           <label class="form-label">Date of First Appointment</label>
                            <input type="date" name="appt_date" placeholder="" class="form-control" value="<?php echo stickyForm('appt_date'); ?>" required />
                        </div>
                        <div class="form-group" style="display: none">
				            <label class="form-label">Country</label>
				            <input type="text" class="form-control" name="countryid" value="<?php echo $profile->getCountry($_SESSION['profile']); ?> " readonly>
						</div>
                        <div class="form-group" style="display: none">
				            <label class="form-label">Mission</label>
				            <input type="text" class="form-control" name="missionid" value="<?php echo $profile->getMission($_SESSION['profile']); ?> " readonly>
						</div>
                    </div>
                <div class="col-md-12" align="center">
                     <div>
                     	<button type="submit" class="btn btn-default">
                        	<i class="fa fa-user"></i>Save
                        </button>
                     </div>
                     <input type="hidden" name="save" value="saveuser">
                </form>
                </div>
                </div>
            </div>

                <?php
            }
                    }

    ?>

            
<?php include_once 'inc/footer.php';  ?>