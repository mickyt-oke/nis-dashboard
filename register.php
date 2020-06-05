<?php require_once 'core/init.php'; ?>


<?php include_once 'inc/header.php'; ?>
                <div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">NEW STAFF ENTRY</li>
								</ol>
							</div>
        <div class="row">
          	<div class="col-md-12">
                <?php if(@$_GET['p']== 0){ 
                    // Process form request
	if (isset($_POST['register'])) {
	  $required = array('dob', 'email', 'password', 'firstname', 'lastname', 'rank', 'phone1', 'nisno', 'posted', 'countryid', 'missionid');

	  foreach($_POST as $key=>$value) {
	    if (empty($value) && in_array($key, $required)) {
	      $errors[] = "Fill out all required fields please";
	      break;
	    }
	  }

	  // If no error
	  if (empty($errors)) {
	    // Get form values
	    $user->username = sanitize('username');
	    $user->password = trim($_POST['password']);
	    $confirm = trim($_POST['confirm']);
	    $user->usergroup = 329; // Admin usergroup - 118; Member - 329

	    $profile->firstname = sanitize('firstname');
        $profile->email = sanitize('email');
	    $profile->middlename = sanitize('middlename');
	    $profile->lastname = sanitize('lastname');
	    $profile->gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
	    $profile->phone1 = sanitize('phone1');
        $profile->phone2 = sanitize('phone2');
	    $profile->address = sanitize('address');
	    $profile->city = sanitize('city');
        $profile->stateid = sanitize('stateid');
	    $profile->missionid = sanitize('missionid');
	    $profile->countryid = sanitize('countryid');
        $profile->dob = sanitize('dob');
        $profile->rank = sanitize('rank');
        $profile->nisno = sanitize('nisno');
        $profile->dofa = sanitize('dofa');
        $profile->dopa = sanitize('dopa');
        $profile->posted = sanitize('posted');
        $profile->image = sanitize('image');

	    // Check for more errors
	    if (!filter_var($profile->email, FILTER_VALIDATE_EMAIL)) {
	      $errors[] = "Email is invalid.";
	    }
	    if (strlen($user->password) < 6) {
	      $errors[] = "Password must be at least 6 characters.";
	    }
	    if ($user->password !== $confirm) {
	      $errors[] = "Passwords do not match.";
	    }
	    if (!is_numeric($profile->phone1)) {
	      $errors[] = "Phone must be numeric values only.";
	    }
	    if (strlen($profile->phone1) != 11) {
	      $errors[] = "Phone number must be more than 10 digits.";
	    }

	    // If there are no errors, attempt to create record in database
	    if (empty($errors)) {
	      // Create Profile record
	      if ($profile->createProfile()) {
	        // Get the profileid from Profile class
	        $user->profileid = $profile->id;

	        // Hash the password with MD5 hash algorithm
	        $user->password = md5($user->password);

	        if ($user->createUser()) {
	          $session->message("Officer Profile created successfully.");
	        }
	      }
	    }
	  }
	}
                
?>
                <h2>STAFF INFORMATION</h2>
                <form action="register.php?p=1" method="post">
						<div class="card shadow">
                            <?php error($errors); 
                            success($message); ?>
										<div class="card-body">
											<div class="row">
												<div class="col-md-6">
                                                    <div class="card-header">
											             <h2 class="mb-0"><i class="fas fa-user"></i> Bio Data</h2>
										              </div> 
													<div class="form-group">
														<label class="form-label">First Name</label>
														<input type="text" class="form-control" name="firstname" placeholder="firstname" value="<?php echo stickyForm('firstname'); ?>" autofocus required />
													</div>
													<div class="form-group">
														<label class="form-label">Middle Name</label>
														<input type="text" class="form-control" name="middlename" placeholder="middlename" value="<?php echo stickyForm('middlename'); ?>" />
													</div>
													<div class="form-group">
														<label class="form-label">Last Name</label>
														<input type="text" class="form-control" name="lastname" placeholder="lastname" value="<?php echo stickyForm('lastname'); ?>" required />
													</div>
                                                    <div class="form-group">
                                                        <label class="form-label">Date of birth</label>
                                                        <input type="date" name="dob" placeholder="Date of Birth" class="form-control" value="<?php echo stickyForm('dob'); ?>" required />
                                                    </div>
                                        <div class="form-group">
												<label for="gender">Gender: </label>
                                        <input type="radio" name="gender" value="male" <?php echo stickyRadio('gender', 'male') ?>> Male
                                        <input type="radio" name="gender" value="female" <?php echo stickyRadio('gender', 'female') ?>> Female
                                    </div>
                                <div class="form-group">
                                <label class="form-label">Phone 1</label>
                         <input type="number" name="phone1" placeholder="Whatsapp Line" class="form-control" value="<?php echo stickyForm('phone1'); ?>" required maxlength="14" /></div>
                                <div class="form-group">
                                <label class="form-label">Phone 2</label>
                         <input type="number" name="phone2" placeholder="Alternate Line" class="form-control" value="<?php echo stickyForm('phone2'); ?>" maxlength="14" /></div>
                                <div class="form-group">
							<label class="form-label">Email</label>
							<input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo stickyForm('email'); ?>" required />
				</div>
				                <div class="form-group mb-0">
									<label class="form-label">Address</label>
										<textarea class="form-control" name="address" rows="2" placeholder="Residential address" value="<?php echo stickyForm('address') ?>"></textarea>
													</div>
                                <div class="form-group">
                                <label class="form-label">City</label>
                         <input type="text" name="city" placeholder="City" class="form-control" value="<?php echo stickyForm('city'); ?>" />
                      </div>
                      <div class="form-group">
                          <label class="form-label">State of Origin</label>
	                       <select class="form-control state" name="stateid" value="<?php echo stickyForm('state'); ?>">
		                      <option value="">-- Choose State --</option>
		                      <?php
		                          $states = $state->getStates();
                                    foreach($states as $state) {
		                              echo "<option value='".$state['id']."'";
		                              echo stickySelect('stateid', $state['id']);
		                              echo ">".$state['statename']."</option>";
	                               }
		                      ?>
	                       </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-header"><h2 class="mb-0"><i class="fas fa-briefcase"></i> Work Information</h2></div>                            
                           <div class="form-group">
												<label class="form-label">Service Number</label>
												<div class="input-group">
                                                    <span class="input-group-append">
														<button class="btn btn-disabled">NIS</button>
													</span>
													<input type="number" name="nisno" class="form-control" placeholder=" Service Number" value="<?php echo stickyForm('nisno'); ?>" required />
												</div>
											</div>
                            <div class="form-group">
								<label class="form-label">Present Rank</label>
									<select class="form-control rank" name="rank" value="<?php echo stickyForm('rank'); ?>" required>
										<option value="">--Select rank--</option>
										<option>CGIS</option>
										<option>DCG</option>
										<option>ACG</option>
										<option>CIS</option>
										<option>DCI</option>
										<option>ACI</option>
                                        <option>CSI</option>
                                        <option>SI</option>
                                        <option>DSI</option>
                                        <option>ASI1</option>
										<option>ASI2</option>
                                        <option>CII(TECH)</option>
                                        <option>CII</option>
                                        <option>DCII</option>
                                        <option>ACII</option>
										<option>PII</option>
										<option>SII</option>
										<option>II</option>
										<option>AII</option>
										<option>CIA</option>
                                        <option>SIA</option>
                                        <option>IA1</option>
                                        <option>IA2</option>
                                        <option>IA3</option>
									</select>
				            </div>
                        <div class="form-group">
                           <label class="form-label">Date of First Appointment</label>
                            <input type="date" name="dofa" placeholder="" class="form-control" value="<?php echo stickyForm('dofa'); ?>" />
                        </div>
                        <div class="form-group">
                           <label class="form-label">Date of Present Appointment</label>
                            <input type="date" name="dopa" placeholder="" class="form-control" value="<?php echo stickyForm('dopa'); ?>" />
                        </div>
                        <div class="form-group">
                           <label class="form-label">Date Posted to Mission</label>
                            <input type="date" name="posted" placeholder="" class="form-control" value="<?php echo stickyForm('posted'); ?>" required />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Country of Posting</label>
	                           <select class="form-control country" name="countryid" value="<?php echo stickyForm('countryid'); ?>" required>
		                          <option value="">-- Choose Country --</option>
		                              <?php
		                                  $country = $country->getCountry();
                                          foreach($country as $country) {
		                                      echo "<option value='".$country['id']."'";
		                                      echo stickySelect('countryid', $country['id']);
		                                      echo ">".$country['country']."</option>";
	                                       }
		                              ?>
	                           </select>
                        </div>
                     						<div class="form-group">
                                                <label class="form-label">Mission</label>
												<select class="form-control mission" name="missionid" value="<?php echo stickyForm('missionid'); ?>" required>
													<option value="">-- Choose Mission --</option>
													<?php
														if (isset($_POST['missionid'])) {
															$mission->getMissionById($_POST['missionid']);
															echo "<option value='".$mission->id."' selected='selected'>".$mission->mission."</option>";
														}
													?>
												</select>
											</div>                                            
                                            <div class="form-group">
												<div class="form-label">Passport Photo (format jpg/jpeg/png) </div>
												<input type="file" name="photo" value="<?php echo stickyForm('photo')?>" />
											</div>
                                        </div>			
                    
                    <div class="col-md-12">
						<legend><i class="fa fa-lock"></i> User Account</legend>
						<div class="form-group">
                         <input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo stickyForm ('username'); ?>" />
                            </div>

						<div class="form-group">
                         <input type="password" name="password" placeholder="Password" class="form-control" />
                        </div>

						<div class="form-group">
                         <input type="password" name="confirm" placeholder="Confirm Password" class="form-control" />
                      </div>
				        <hr />
                        <div class="col-md-12" align="center">
                     <div class="form-group">
                         <button type="submit" class="btn btn-success">
                        	<i class="fas fa-user"></i> Submit
                        </button>
                     </div>
                        </div>
                     <input type="hidden" name="register" value="registeruser">
                	</form>
                </div>
                </div>
		      </div>
            </div>
            </div>
                <?php } ?>
    
<?php
    if(@$_GET['p']== 1){ 
	// Process form request
	if (isset($_POST['save'])) {
	  $required = array('first_name', 'last_name', 'mobile', 'address', 'city', 'designation', 'salary', 'appt_date', 'e_mail', 'sex');

	  foreach($_POST as $key=>$value) {
	    if (empty($value) && in_array($key, $required)) {
	      $errors[] = "Fill out all required fields please";
	      break;
	    }
	  }

	  // If no error
	  if (empty($errors)) {
	    // Get form values

	    $local_staff->first_name = sanitize('first_name');
        $local_staff->e_mail = sanitize('e_mail');
	    $local_staff->last_name = sanitize('last_name');
	    $local_staff->designation = sanitize('designation');
	    $local_staff->sex = isset($_POST['sex']) ? trim($_POST['sex']) : '';
	    $local_staff->mobile = sanitize('mobile');
        $local_staff->salary = sanitize('salary');
	    $local_staff->address = sanitize('address');
	    $local_staff->city = sanitize('city');
        $local_staff->appt_date = sanitize('appt_date');
        $local_staff->missionid = sanitize('missionid');
        $local_staff->countryid = sanitize('countryid');


	    // Check for more errors
	    if (!filter_var($local_staff->e_mail, FILTER_VALIDATE_EMAIL)) {
	      $errors[] = "Email is invalid.";
	    }

	    // If there are no errors, attempt to create record in database
   
	        if ($local_staff->createLocal_staff()) {
	          $session->message("Local Staff added successfully.");
	        }
	   }
    }
?>
            
           <h2>LOCAL STAFF INFORMATION</h2>
                <form action="register.php?p=0" method="post">
						<div class="card shadow">
                            <?php error($errors); 
                            success($message); ?>
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
                         <div class="form-group">
												<div class="form-label">Passport Photo (.jpg/png) max. 2mb</div>
												<div class="custom-file">
													<input type="file" class="dropify" data-default-file="../assets/img/default_avatar.png" data-height="" name="image" />
												</div>
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
        </div>
<?php } ?>
    </div>
                    </div>
            
        
<?php include_once 'inc/footer.php'; ?>
