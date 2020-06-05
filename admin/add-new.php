<?php require_once 'core/init.php'; ?>
<?php admin(); 
        if (!isAdmin()){
        redirectTo ('../dash.php');
        }
?>

<?php include_once 'inc/header.php'; 
?>
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
                        <div><?php error($errors);
                                    success($message); ?></div>
                    <div class="btn-group">
						<div class="form-row mb-4">
											<label for="to" class="col-6 col-sm-6 col-md-6 col-lg-6 col-form-label">Month</label>
											<div class="col-9 col-sm-10 col-md-9 col-lg-10">
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
		                                                      echo "<option value='".$year['id']."'";
		                                                      echo stickySelect('yearid', $year['id']);
		                                                      echo ">".$year['year']."</option>";
														}
													?>
												    </select>
											</div>
										</div>
                        </div>
							<div class="email-app card shadow">
								<nav class="p-0">
									<ul class="nav">
										<li <?php if(@$_GET['q']==1) echo'class="active"'; ?> class="nav-item"><a class="nav-link mr-0 border-top" href="add-new.php?p=1">Passport</a></li>
										<li <?php if(@$_GET['q']==2) echo'class="active"'; ?> class="nav-item"><a class="nav-link mr-0" href="add-new.php?p=2">Visa</a></li>
                                        <li <?php if(@$_GET['q']==3) echo'class="active"'; ?> class="nav-item"><a class="nav-link mr-0" href="add-new.php?p=3">ETC</a></li>
                                        <li <?php if(@$_GET['q']==4) echo'class="active"'; ?> class="nav-item"><a class="nav-link mr-0" href="add-new.php?p=4">Revenue</a></li>
									</ul>
								</nav>
                                <!-- PASSPORT entry start-->
								<div class="inbox card-body">
                                    <?php if(@$_GET['p']==  1){ ?>
									<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
										 <div class="form-row mb-4">
											<label class="col-md-4">PASSPORT RETURNS</label>
				                        </div>
                                        <div class="form-row mb-4">
                                            <label class="col-md-4">Type</label>
                                            <div class="col-md-8">
												<select class="form-control select2 w-100" >
                                                    <option selected="selected">--Select--</option>
										              <option>32 pages</option>
                                                    <option>64 pages</option>
                                                </select></div>
                                        </div>
                                        <div class="form-row mb-4">
											<label class="col-md-4">Opening Balance </label>
											<div class="col-md-8">
												<input type="number" class="form-control" name="balance" placeholder="">
											</div>
										</div>
										<div class="form-row mb-4">
											<label class="col-md-4">Issuance</label>
											<div class="col-md-8">
												<input type="number" class="form-control" placeholder="">
											</div>
										</div>
										<div class="form-row mb-4">
											<label class="col-md-4">Damaged</label>
											<div class="col-md-8">
												<input type="number" class="form-control" placeholder="">
											</div>
                                        </div>
										<div class="col-md-12">
											<div class="form-group mt-3">
												<textarea class="form-control" id="message" name="body" rows="10" placeholder="Comments (if any)"></textarea>
											</div>
											<div class="form-group mb-0">
												<button type="submit" class="btn btn-sm btn-success mt-1 mb-1">Save</button>
												<button type="submit" class="btn btn-sm btn-light mt-1 mb-1">Clear</button>
												<button type="submit" class="btn btn-sm btn-default mt-1 mb-1">Next</button>
											</div>
										</div>
                                    </form>
                                    <?php }?>
                        <?php if(@$_GET['p']== 2){ ?>   
                                   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                       <div class="form-row mb-4">
											<label class="col-md-4">VISA RETURNS</label>
				                        </div>
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
												<textarea class="form-control" id="message" name="body" rows="10" placeholder="Comments (if any)"></textarea>
											</div>
											<div class="form-group mb-0">
												<button type="submit" class="btn btn-sm btn-success mt-1 mb-1">Save</button>
												<button type="submit" class="btn btn-sm btn-light mt-1 mb-1">Clear</button>
												<button type="submit" class="btn btn-sm btn-default mt-1 mb-1">Next</button>
											</div>
										</div>
                                    </form>
                                    
                                    <?php }?>
                                    
                                    <?php if(@$_GET['p']== 3){ ?>
								     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                       <div class="form-row mb-4">
											<label class="col-md-4">ETC RETURNS</label>
				                        </div>
                                       <hr />
										<div class="form-row mb-4">
                                            <label class="col-md-8">Opening Balance</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="" placeholder="">
											</div>
                                         </div>
                                         <div class="form-row mb-4">
                                            <label class="col-md-8">Total Issued</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="" placeholder="">
											</div>
                                        </div>
                                         <div class="form-row mb-4">
                                            <label class="col-md-8">Damaged</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="" placeholder="">
											</div>
                                        </div>
                                       <hr />
										<div class="col-md-12">
											<div class="form-group">
												<button type="submit" class="btn btn-sm btn-success mt-1 mb-1">Save</button>
												<button type="submit" class="btn btn-sm btn-light mt-1 mb-1">Clear</button>
												<button type="submit" class="btn btn-sm btn-default mt-1 mb-1">Next</button>
											</div>
										</div>
                                    </form>
                                <?php }?>
                                    
                                    <?php if(@$_GET['p']== 4){ ?>
								     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                       <div class="form-row mb-4">
											<label class="col-md-4">REVENUE (in USD)</label>
				                        </div>
                                       <hr />
										<div class="form-row mb-4">
                                            <label class="col-md-8">Passport (32 pages)</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="ppt_rev32" placeholder="">
											</div>
                                         </div>
                                         <div class="form-row mb-4">
                                            <label class="col-md-8">Passport (64 pages)</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="ppt_rev64" placeholder="">
											</div>
                                        </div>
                                         <div class="form-row mb-4">
                                            <label class="col-md-8">Visa </label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="ppt_rev64" placeholder="">
											</div>
                                        </div>
                                         <div class="form-row mb-4">
                                            <label class="col-md-8">ETC </label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="etc" placeholder="">
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
                                <?php }?>
                                </div><!-- passport entry end-->
							</div>
                        </div>
					</div>
				</div>
		      </div>
            </div>




<?php include_once 'inc/footer.php';  ?>