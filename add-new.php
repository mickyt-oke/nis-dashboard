<?php require_once 'core/init.php'; ?>

<?php include_once 'inc/header.php'; ?>
<!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">New Entry</li>
								</ol>
							</div>
							
        <div class="row">
          	<div class="col-md-12">
				<h2>MONTHLY RETURNS ENTRY</h2>
                
				<div class="card shadow">
					<div class="card-body">
							<div class="email-app card shadow">
								<nav class="p-0">
									<ul class="nav">
										<li class="nav-item <?php if(@$_GET['q']==0) echo'class="active"'; ?>"><a class="nav-link mr-0 border-top" href="add-new.php">Passport</a></li>
                                        <li class="nav-item" <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a class="nav-link mr-0" href="add-new.php?q=1">Visa</a></li>
                                        <li class="nav-item" <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a class="nav-link mr-0" href="add-new.php?q=2">ETC</a></li>
                                        <!--<li class="nav-item"><a class="nav-link mr-0" href="add-new.php?p=4">Revenue</a></li> -->
									</ul>
								</nav>
                                <!-- PASSPORT entry start-->
				
                            
                    <?php if (@$_GET['q'] == 0) {
                            if (isset($_POST['returns'])) {
                                    $required = array('month', 'year', 'iss_32', 'iss_64', 'dmg_32', 'dmg_64', 'opn_32', 'opn_64', 'stock_32', 'stock_64', 'rev_32', 'rev_64');
            
                                    foreach($_POST as $key=>$value) {
                                    if (empty($value) && in_array($key, $required)) {
                                     $errors[] = "Complete all fields, please.";
                                        break;
                                    }
                                }
                                                 
                                //if No errors
                                if (empty($errors)) {
                                 ;$entry->month = sanitize('month');
                                 $entry->year = sanitize('year');
                                 $entry->open_bal = sanitize('balance');
                                 $entry->issued = sanitize('issue');
                                 $entry->damaged = sanitize('damage');
                                 $entry->revenue = sanitize('ppt_revenue');
                                 $entry->comments = trim($_POST['message']);
                                 $entry->stock_bal = sanitize('stockbal');
							}
                            
                        if (empty($errors)) {
				            if ($entry->createEntry()) {
					           $session->message("Submission Successful. Continue");
                                
					           // return success message
					           header("Location:add-new.php?q=1"); 
				            }
			         }
                }
                ?> 
                <div class="inbox card-body">
                    <div><?php error($errors);
                      success($message); ?></div>
					<form action="add-new.php?q=1" method="post">
                        <div class="form-row mb-4">
                         <label class="col-md-4"><h2>PASSPORT RETURNS</h2></label>
								<div class="btn-group" style="float: right;">
						          <div class="form-row mb-4">
											<label for="to" class="col-6 col-sm-6 col-md-6 col-lg-6 col-form-label">Month</label>
											<div class="col-9 col-sm-10 col-md-9 col-lg-10">
												<select class="form-control month" name="month" value="<?php echo stickyForm('month'); ?>" required>
													<option value="">-- Choose Month --</option>
													<?php
														$month = $month->getMonth();
                                                            foreach($month as $month) {
		                                                      echo "<option value='".$month['month']."'";
		                                                      echo stickySelect('monthid', $month['month']);
		                                                      echo ">".$month['month']."</option>";
														}
													?>
												    </select>
											</div>
								    </div>
                                </div>
                                <div class="btn-group" style="right: 0%; float: right;">
						              <div class="form-row mb-4">
											<label for="to" class="col-6 col-sm-6 col-md-6 col-lg-6 col-form-label">Year</label>
											<div class="col-9 col-sm-10 col-md-9 col-lg-10">
												<select class="form-control year" name="year" value="<?php echo stickyForm('year'); ?>" required />
													<option value="">-- Choose Year --</option>
													<?php
														$year = $year->getYear();
                                                            foreach($year as $year) {
		                                                      echo "<option value='".$year['year']."'";
		                                                      echo stickySelect('yearid', $year['year']);
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
                               <div class="form-row mb-4">
                                            <label class="col-md-6">Type</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="32 pages" disabled>
								        </div>
                                        </div>
                                        <div class="form-row mb-4">
											<label class="col-md-6">Opening Balance </label>
											<div class="col-md-6">
												<input type="number" class="form-control" name="balance" placeholder="number in stock" value="<?php echo stickyForm('balance'); ?>" required />
											</div>
										</div>
										<div class="form-row mb-4">
											<label class="col-md-6">Issuance</label>
											<div class="col-md-6">
												<input type="number" class="form-control" name="issue" placeholder="total issued" value="<?php echo stickyForm('issue'); ?>" required />
											</div>
										</div>
										<div class="form-row mb-4">
											<label class="col-md-6">Damaged</label>
											<div class="col-md-6">
												<input type="number" name="damage" class="form-control" placeholder="damaged" value="<?php echo stickyForm('damaged'); ?>" required />
											</div>
                                        </div>
                                        <div class="form-row mb-4">
											<label class="col-md-6">Balance in stock</label>
											<div class="col-md-6">
												<input type="number" name="stockbal" class="form-control" placeholder="balance after issue" value="<?php echo stickyForm('stockbal'); ?>" required />
											</div>
                                        </div>
                                        <div class="form-row mb-4">
											<label class="col-md-6">Revenue (in USD)</label>
											<div class="col-md-6">
												<input type="number" name="ppt_revenue" class="form-control" placeholder="" value="<?php echo stickyForm('ppt_revenue'); ?>" required />
											</div>
                                        </div>
					</div>
					<div class="col-md-6 btn-group-vertical" style="float:right;">
										<div class="form-row mb-4">
                                            <label class="col-md-6">Type</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="64 pages" disabled>
								        </div>
                                        </div>
                                        <div class="form-row mb-4">
											<label class="col-md-6">Opening Balance </label>
											<div class="col-md-6">
												<input type="number" class="form-control" name="balance" placeholder="number in stock" value="<?php echo stickyForm('balance'); ?>" required />
											</div>
										</div>
										<div class="form-row mb-4">
											<label class="col-md-6">Issuance</label>
											<div class="col-md-6">
												<input type="number" class="form-control" name="issue" placeholder="total issued" value="<?php echo stickyForm('issue'); ?>" required />
											</div>
										</div>
										<div class="form-row mb-4">
											<label class="col-md-4">Damaged</label>
											<div class="col-md-6">
												<input type="number" name="damage" class="form-control" placeholder="damaged" value="<?php echo stickyForm('damaged'); ?>" required />
											</div>
                                        </div>
                                        <div class="form-row mb-4">
											<label class="col-md-6">Balance in stock</label>
											<div class="col-md-6">
												<input type="number" name="stockbal" class="form-control" placeholder="balance after issue" value="<?php echo stickyForm('stockbal'); ?>" required />
											</div>
                                        </div>
                                        <div class="form-row mb-4">
											<label class="col-md-6">Revenue (in USD)</label>
											<div class="col-md-6">
												<input type="number" name="ppt_revenue" class="form-control" placeholder="" value="<?php echo stickyForm('ppt_revenue'); ?>" required />
											</div>
                                        </div>
					</div>
										<div class="col-md-12">
											<div class="form-group mt-3">
												<textarea class="form-control" id="message" name="message" rows="5" placeholder="Comments (if any)"></textarea>
											</div>
											<div class="form-group mb-0">
												<button type="submit" class="btn btn-sm btn-success mt-1 mb-1">Save</button>
												<button type="reset" value="reset" class="btn btn-sm btn-light mt-1 mb-1">Clear</button>
											</div>
										</div>
                                        <input type="hidden" name="returns" value="returnsentry">
                                        <input type="hidden" name="mission" value="">
                                    </form>
								<?php } ?>
                                
                        <?php if(@$_GET['q']== 1){ ?>   
								<div class="inbox card-body">
                                   <form action="add-new.php?q=2" method="post">
                                       <div class="form-row mb-4">
											<label class="col-md-4"><h2>VISA RETURNS</h2></label>
								<div class="btn-group" style="float: right;">
						          <div class="form-row mb-4">
											<label for="to" class="col-6 col-sm-6 col-md-6 col-lg-6 col-form-label">Month</label>
											<div class="col-9 col-sm-10 col-md-9 col-lg-10">
												<select class="form-control month" name="month" value="<?php echo stickyForm('month'); ?>" required>
													<option value="">-- Choose Month --</option>
													<?php
														$month = $month->getMonth();
                                                            foreach($month as $month) {
		                                                      echo "<option value='".$month['month']."'";
		                                                      echo stickySelect('monthid', $month['month']);
		                                                      echo ">".$month['month']."</option>";
														}
													?>
												    </select>
											</div>
								    </div>
                                </div>
                                <div class="btn-group" style="right: 0%; float: right;">
						              <div class="form-row mb-4">
											<label for="to" class="col-6 col-sm-6 col-md-6 col-lg-6 col-form-label">Year</label>
											<div class="col-9 col-sm-10 col-md-9 col-lg-10">
												<select class="form-control year" name="year" value="<?php echo stickyForm('year'); ?>" required />
													<option value="">-- Choose Year --</option>
													<?php
														$year = $year->getYear();
                                                            foreach($year as $year) {
		                                                      echo "<option value='".$year['year']."'";
		                                                      echo stickySelect('yearid', $year['year']);
		                                                      echo ">".$year['year']."</option>";
														}
													?>
												    </select>
											</div>
										</div>
                                </div>
						</div>
									   <hr />
                                       <div class="form-row mb-4">
											<label class="col-md-4">Opening Balance </label>
											<div class="col-md-8">
												<input type="number" class="form-control" name="balance" placeholder="">
											</div>
										</div>
                                       <hr />
                                       <label>CLASSIFICATION (Issuance)</label>
										<div class="form-row mb-4">
                                            <label class="col-md-4">Diplomatic</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="diplomatic" placeholder="">
											</div>
                                            <label class="col-md-4" style="padding-left: 45px">Business</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="business" placeholder="">
											</div>
                                        </div>
                                       <div class="form-row mb-4">
                                            <label class="col-md-4">Tourist</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="diplomatic" placeholder="">
											</div>
                                            <label class="col-md-4" style="padding-left: 45px">TWP</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="business" placeholder="">
											</div>
                                        </div>
                                       <div class="form-row mb-4">
                                            <label class="col-md-4">STR</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="diplomatic" placeholder="">
											</div>
                                            <label class="col-md-4" style="padding-left: 45px">Transit</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="business" placeholder="">
											</div>
                                        </div>
                                       <div class="form-row mb-4">
                                            <label class="col-md-4">Official</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="diplomatic" placeholder="">
											</div>
                                        </div>
                                       <hr />
										<div class="form-row mb-4">
											<label class="col-md-4">Damaged</label>
											<div class="col-md-8">
												<input type="number" class="form-control" placeholder="">
											</div>
                                        </div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" id="message" name="body" rows="5" placeholder="Comments (if any)"></textarea>
											</div>
											<div class="form-group mb-0">
												<button type="submit" class="btn btn-sm btn-success mt-1 mb-1">Save</button>
												<button type="submit" class="btn btn-sm btn-light mt-1 mb-1">Clear</button>
											</div>
										</div>
                                    </form>
								</div>
                                    
                                    <?php }?>
                                    
                                    <?php if(@$_GET['q']== 2){ ?>
								<div class="inbox card-body">
								     <form action="add-new.php?q=3" method="post">
                                       <div class="form-row mb-4">
											<label class="col-md-4">ETC RETURNS</label>
									<div class="btn-group" style="float: right;">
						          <div class="form-row mb-4">
											<label for="to" class="col-6 col-sm-6 col-md-6 col-lg-6 col-form-label">Month</label>
											<div class="col-9 col-sm-10 col-md-9 col-lg-10">
												<select class="form-control month" name="month" value="<?php echo stickyForm('month'); ?>" required>
													<option value="">-- Choose Month --</option>
													<?php
														$month = $month->getMonth();
                                                            foreach($month as $month) {
		                                                      echo "<option value='".$month['month']."'";
		                                                      echo stickySelect('monthid', $month['month']);
		                                                      echo ">".$month['month']."</option>";
														}
													?>
												    </select>
											</div>
								    </div>
                                </div>
                                <div class="btn-group" style="right: 0%; float: right;">
						              <div class="form-row mb-4">
											<label for="to" class="col-6 col-sm-6 col-md-6 col-lg-6 col-form-label">Year</label>
											<div class="col-9 col-sm-10 col-md-9 col-lg-10">
												<select class="form-control year" name="year" value="<?php echo stickyForm('year'); ?>" required />
													<option value="">-- Choose Year --</option>
													<?php
														$year = $year->getYear();
                                                            foreach($year as $year) {
		                                                      echo "<option value='".$year['year']."'";
		                                                      echo stickySelect('yearid', $year['year']);
		                                                      echo ">".$year['year']."</option>";
														}
													?>
												    </select>
											</div>
										</div>
                                </div>
				                        </div>
                                       <hr />
										<div class="form-row mb-4">
                                            <label class="col-md-4">Opening Balance</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="" placeholder="">
											</div>
                                         </div>
                                         <div class="form-row mb-4">
                                            <label class="col-md-4">Total Issued</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="" placeholder="">
											</div>
                                        </div>
                                         <div class="form-row mb-4">
                                            <label class="col-md-4">Damaged</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="" placeholder="">
											</div>
                                        </div>
                                       <hr />
										<div class="col-md-12">
											<div class="form-group">
												<button type="submit" class="btn btn-sm btn-success mt-1 mb-1">Save</button>
												<button type="submit" class="btn btn-sm btn-light mt-1 mb-1">Clear</button>
											</div>
										</div>
                                    </form>
								</div>
                                <?php }?>
                                    
                                </div><!-- passport entry end-->
							</div>
                        </div>
					</div>
				</div>
		      </div>
            </div>
<?php include_once 'admin/inc/footer.php';  ?>