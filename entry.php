<?php require_once 'core/init.php'; ?>

<?php
        if (isset($_POST['returns'])) {
            $required = array('month', 'year');

            foreach($_POST as $key=>$value) {
                if (empty($value) && in_array($key, $required)) {

                $errors[] = "Complete all fields, please.";
                break;
            }
                                    //if ($value->rowCount() > 0) {
                                    // $errors[] = "Record already exists in database. Check again.";
                                  //}
            //

        }
                                //if No errors
                                if (empty($errors)) {
                                    $entry->month = sanitize('month');
                                    $entry->year = sanitize('year');
                                    $entry->opn_bal_32 = sanitize('bal32');
                                    $entry->opn_bal_64 = sanitize('bal64');
                                    $entry->ppt_32 = sanitize('issue32');
                                    $entry->ppt_64 = sanitize('issue64');
                                    $entry->dam_32 = sanitize('dam32');
                                    $entry->dam_64 = sanitize('dam64');
                                    $entry->ppt_rev_32 = sanitize('ppt_revenue32');
                                    $entry->ppt_rev_64 = sanitize('ppt_revenue64');
                                    $entry->comments = trim($_POST['message']);
                                    $entry->stock_bal_32 = sanitize('stockbal32');
                                    $entry->stock_bal_64 = sanitize('stockbal64');

                                    // Check for more errors
                                    /*
                                    if (strlen($entry->ppt_32) > ($entry->opn_bal_32)) {
                                        $errors[] = "Values of issuance + damaged must be lesser than stock balance (32 pages).";
                                    }
                                    if (strlen($entry->ppt_64) > ($entry->opn_bal_64)) {
                                        $errors[] = "Values of issuance + damaged must be lesser than stock balance (64 pages)";
                                    }
                                    if (strlen($entry->stock_bal_32) > ($entry->opn_bal_32)) {
                                        $errors[] = "Value of stock balance = issuance + damaged - opening stock (32 pages)";
                                    }
                                    if (strlen($entry->stock_bal_64) > ($entry->opn_bal_64)) {
                                        $errors[] = "Value of stock balance = issuance + damaged - opening stock (64 pages)";
                                    }
                                    */
                                    if (is_integer($entry->ppt_rev_32)) {
                                        $errors[] = "Input figures only. Special chars not allowed (32 pages)";
                                    }
                                    if (is_integer($entry->ppt_rev_64)) {
                                        $errors[] = "Input figures only. Special chars not allowed (32 pages)";
                                    }

                                    if (empty($errors)) {
                                        if ($entry->createEntry()) {
                                            $session->message("Passport Submission Successful. Continue");
                                            header('Location: entry.php');
                                        }
                                    }
                                }
                            }
                ?>
<?php require_once 'inc/header.php'; ?>
    <!-- Page content -->
    <div class="container-fluid pt-8">
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Passport Returns Entry</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>MONTHLY RETURNS ENTRY</h2>
            <?php success($message); ?>
            <div class="card shadow">
                <div class="card-body">
                    <div class="email-app card shadow">
                        <nav class="p-0">
                            <ul class="nav">
                                <li class="nav-item active"><a class="nav-link mr-0 border-top" href="#">Passport</a></li>
                                <li class="nav-item"><a class="nav-link mr-0" href="visa-entry.php">Visa</a></li>
                                <!--<li class="nav-item"><a class="nav-link mr-0" href="add-new.php?p=4">Revenue</a></li> -->
                            </ul>
                        </nav>
                        <!-- PASSPORT entry start-->

                        <div class="inbox card-body">
					    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-row mb-2">
                                <h2 class="col-md-4">PASSPORT RETURNS</h2>
                                <hr />
								<div class="btn-group" style="float: right;">
						          <div class="form-row mb-4">
                                            <div class="col-lg-10">
												<select class="form-control month" name="month" value="<?php echo stickyForm('month'); ?>" required>
													<option value="">-- Choose Month --</option>
													<?php
														$month = $month->getMonth();
                                                            foreach($month as $month) {
		                                                      echo "<option value='".$month['month']."'";
		                                                      echo stickySelect('month', $month['month']);
		                                                      echo ">".$month['month']."</option>";
														}
													?>
												    </select>
											</div>
								    </div>
                                </div>
                                <div class="btn-group" style="right: 0%; float: right;">
						              <div class="form-row mb-4">
                                          <div class="col-lg-10">
												<select class="form-control" name="year" value="<?php echo stickyForm('year'); ?>" required />
													<option value="">-- Choose Year --</option>
													<?php
														$year = $year->getYear();
                                                            foreach($year as $year) {
		                                                      echo "<option value='".$year['year']."'";
		                                                      echo stickySelect('year', $year['year']);
		                                                      echo ">".$year['year']."</option>";
														}
													?>
												    </select>
											</div>
										</div>
                                    </div>
                                </div>
                        <hr />
					<div class="col-md-6 btn-group-vertical">
                               <div class="input-group mb-4">
                                            <div class="col-md-6"><h2> Category</h2></div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"  placeholder="32 pages" disabled>
								        </div>
                                        </div>
                                        <div class="input-group mb-2">
											<div class="col-md-6">Opening Stock </div>
											<div class="col-md-6">
												<input type="number" class="form-control" name="bal32" placeholder="in stock" value="<?php echo stickyForm('bal32'); ?>" />
											</div>
										</div>
										<div class="input-group mb-2">
											<div class="col-md-6">Issuance</div>
											<div class="col-md-6">
												<input type="number" class="form-control" name="issue32" placeholder="total issued" value="<?php echo stickyForm('issue32'); ?>" />
											</div>
										</div>
										<div class="input-group mb-2">
                                            <div class="col-md-6">Damaged</div>
											<div class="col-md-6">
												<input type="number" name="dam32" class="form-control" placeholder="damaged" value="<?php echo stickyForm('dam32'); ?>" />
											</div>
                                        </div>
                                        <div class="input-group mb-2">
											<div class="col-md-6">Balance</div>
											<div class="col-md-6">
												<input type="number" name="stockbal32" class="form-control" placeholder="after issue" value="<?php echo stickyForm('stockbal32'); ?>" />
											</div>
                                        </div>
                                        <div class="input-group mb-2">
											<div class="col-md-6">Revenue (in USD)</div>
											<div class="col-md-6">
												<input type="number" name="ppt_revenue32" class="form-control" placeholder="digits only" value="<?php echo stickyForm('ppt_revenue32'); ?>" />
											</div>
                                        </div>
					</div>
					<div class="col-md-6 btn-group-vertical" style="float:right;">
                        <div class="input-group mb-4">
                            <div class="col-md-6"><h2> Category</h2></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="64 pages" disabled>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Opening Stock </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="bal64" placeholder="in stock" value="<?php echo stickyForm('bal64'); ?>" />
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Issuance</div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="issue64" placeholder="total issued" value="<?php echo stickyForm('issue64'); ?>" />
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Damaged</div>
                            <div class="col-md-6">
                                <input type="number" name="dam64" class="form-control" placeholder="damaged" value="<?php echo stickyForm('dam64'); ?>" />
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Balance</div>
                            <div class="col-md-6">
                                <input type="number" name="stockbal64" class="form-control" placeholder="after issue" value="<?php echo stickyForm('stockbal64'); ?>" />
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Revenue (in USD)</div>
                            <div class="col-md-6">
                                <input type="number" name="ppt_revenue64" class="form-control" placeholder="digits only" value="<?php echo stickyForm('ppt_revenue64'); ?>" />
                            </div>
                        </div>
					</div>
										<div class="col-md-12">
											<div class="form-group mt-3">
												<textarea class="form-control" id="message" name="message" rows="5" value="<?php echo stickyForm('message'); ?>"placeholder="Comments (if any)"></textarea>
											</div>
											<div class="form-group mb-0">
												<button type="submit" class="btn btn-sm btn-success mt-1 mb-1">Save</button>
												<button type="reset" value="reset" class="btn btn-sm btn-light mt-1 mb-1">Clear</button>
											</div>
										</div>
                                        <input type="hidden" name="returns" value="returnsentry">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
			    </div>
		</div>
<?php include_once 'inc/footer.php';  ?>