<?php require_once 'core/init.php'; ?>

    <?php require_once 'inc/header.php'; ?>
<!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dash.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Returns Entry</li>
								</ol>
							</div>
							<?php if (@$_GET['v'] == "new") { ?>
        <div class="row">
          	<div class="col-md-12">
				<h2>MONTHLY RETURNS ENTRY</h2>
                
				<div class="card shadow">
					<div class="card-body">
							<div class="email-app card shadow">
								<nav class="p-0">
									<ul class="nav">
										<li class="nav-item <?php if(@$_GET['q']==0) echo'class="active"'; ?>"><a class="nav-link mr-0 border-top" href="entry.php?v=new">Passport</a></li>
                                        <li class="nav-item" <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a class="nav-link mr-0" href="entry.php?v=new&q=1">Visa</a></li>
                                        <li class="nav-item" <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a class="nav-link mr-0" href="entry.php?v=new&q=2">ETC</a></li>
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
                                 $entry->month = sanitize('month');
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
					           $message[] = "Submission Successful. Continue";
                                
					           // return success message
					           header("Location:add-new.php?q=1"); 
				            }
			         }
                }
                ?>
                                <div class="inbox card-body">
                    <div><?php error($errors);
                      success($message); ?></div>
					    <form action="entry.php?q=1" method="post">
                            <div class="form-row mb-2">
                                <h2 class="col-md-4">PASSPORT RETURNS</h2>
								<div class="btn-group" style="float: right;">
						          <div class="form-row mb-4">
                                            <div class="col-lg-10">
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

                                          <div class="col-lg-10">
												<select class="form-control" name="year" value="<?php echo stickyForm('year'); ?>" required />
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
                               <div class="input-group mb-4">
                                            <div class="col-md-8"><h2> Category</h2></div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="32 pages" disabled>
								        </div>
                                        </div>
                                        <div class="input-group mb-2">
											<div class="col-md-6">Opening Stock </div>
											<div class="col-md-6">
												<input type="number" class="form-control" name="balance" placeholder="in stock" value="<?php echo stickyForm('balance'); ?>" required />
											</div>
										</div>
										<div class="input-group mb-2">
											<div class="col-md-6">Issuance</div>
											<div class="col-md-6">
												<input type="number" class="form-control" name="issue" placeholder="total issued" value="<?php echo stickyForm('issue'); ?>" required />
											</div>
										</div>
										<div class="input-group mb-2">
											<div class="col-md-6">Damaged</div>
											<div class="col-md-6">
												<input type="number" name="damage" class="form-control" placeholder="damaged" value="<?php echo stickyForm('damaged'); ?>" required />
											</div>
                                        </div>
                                        <div class="input-group mb-2">
											<div class="col-md-6">Balance</div>
											<div class="col-md-6">
												<input type="number" name="stockbal" class="form-control" placeholder="after issue" value="<?php echo stickyForm('stockbal'); ?>" required />
											</div>
                                        </div>
                                        <div class="input-group mb-2">
											<div class="col-md-6">Revenue (in USD)</div>
											<div class="col-md-6">
												<input type="number" name="ppt_revenue" class="form-control" placeholder="" value="<?php echo stickyForm('ppt_revenue'); ?>" required />
											</div>
                                        </div>
					</div>
					<div class="col-md-6 btn-group-vertical" style="float:right;">
                        <div class="input-group mb-4">
                            <div class="col-md-8"><h2> Category</h2></div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="64 pages" disabled>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Opening Stock </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="balance" placeholder="in stock" value="<?php echo stickyForm('balance'); ?>" required />
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Issuance</div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="issue" placeholder="total issued" value="<?php echo stickyForm('issue'); ?>" required />
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Damaged</div>
                            <div class="col-md-6">
                                <input type="number" name="damage" class="form-control" placeholder="damaged" value="<?php echo stickyForm('damaged'); ?>" required />
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Balance</div>
                            <div class="col-md-6">
                                <input type="number" name="stockbal" class="form-control" placeholder="after issue" value="<?php echo stickyForm('stockbal'); ?>" required />
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">Revenue (in USD)</div>
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
                            </div>
								<?php } ?>
                                
                        <?php if(@$_GET['q']== 1){ ?>   
								<div class="inbox card-body">
                                   <form action="entry.php?q=2" method="post">
                                       <div class="form-row mb-2">
											<h2 class="col-md-4">VISA RETURNS</h2>
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
                                          <div class="col-lg-10">
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
                                       <div class="input-group mb-2">
											<div class="col-md-4">Opening stock </div>
											<div class="col-md-4">
												<input type="number" class="form-control" name="balance" placeholder="">
											</div>
										</div>
                                       <hr />
                                       <div class="col-md-12 mb-4" style="align: center">CLASSIFICATION (Issuance)</div>
										<div class="input-group mb-2">
                                            <div class="col-md-4">Diplomatic</div>
											<div class="col-md-4">
												<input type="number" class="form-control" name="diplomatic" placeholder="">
											</div>
                                        </div>
                                       <div class="input-group mb-2">
                                            <div class="col-md-4">Business</div>
											<div class="col-md-4">
												<input type="number" class="form-control" name="business" placeholder="">
											</div>
                                        </div>
                                       <div class="input-group mb-2">
                                            <div class="col-md-4">Tourist</div>
											<div class="col-md-4">
												<input type="number" class="form-control" name="tourist" placeholder="">
											</div>
                                       </div>
                                       <div class="input-group mb-2">
                                            <div class="col-md-4">TWP</div>
											<div class="col-md-4">
												<input type="number" class="form-control" name="twp" placeholder="">
											</div>
                                        </div>
                                       <div class="input-group mb-2">
                                            <div class="col-md-4">STR</div>
											<div class="col-md-4">
												<input type="number" class="form-control" name="str" placeholder="">
											</div>
                                       </div>
                                       <div class="input-group mb-2">
                                            <div class="col-md-4">Transit</div>
											<div class="col-md-4">
												<input type="number" class="form-control" name="transit" placeholder="">
											</div>
                                        </div>
                                       <div class="input-group mb-2">
                                            <div class="col-md-4">Official</div>
											<div class="col-md-4">
												<input type="number" class="form-control" name="official" placeholder="">
											</div>
                                       </div>
                                       <hr />
										<div class="input-group mb-4">
											<div class="col-md-4">Damaged</div>
											<div class="col-md-4">
												<input type="number" name="damaged" class="form-control" placeholder="">
											</div>
                                        </div>
                                       <div class="input-group mb-4">
											<div class="col-md-4">Balance in stock</div>
											<div class="col-md-4">
												<input type="number" name="bal" class="form-control" placeholder="">
											</div>
                                        </div>
                                       <div class="input-group mb-4">
											<div class="col-md-4">Revenue (in USD)</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="">
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
								     <form action="entry.php?q=3" method="post">
                                       <div class="form-row mb-2">
											<h2 class="col-md-4">ETC RETURNS</h2>
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
                                          <div class="col-lg-10">
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
                                         <div class="form-row mb-4">
                                            <label class="col-md-4">Revenue</label>
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
                                <?php } ?>
                                    
                                </div><!-- passport entry end-->
							</div>
                        </div>
					</div>
				</div>
                <?php } ?>



<?php if(@$_GET['v'] == "manage"){ ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header bg-gradient-success">
                    <h2 class="mb-0 text-white">PASSPORT RETURNS</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                            <tr>
                                <th class="wd-10p">YEAR</th>
                                <th class="wd-10p">Month</th>
                                <th class="wd-25p">32 pages Issuance</th>
                                <th class="wd-25p">64 pages Issuance</th>
                                <th class="wd-10p">Stock Balance (32)</th>
                                <th class="wd-10p">Stock Balance (64)</th>
                                <th class="wd-10p">Submitted</th>
                                <th class="wd-5p">view</th>
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
                                <td class="text-success" align="center"><i class="fa-2x fa fa-book-open"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header bg-gradient-red">
                    <h2 class="mb-0 text-white">VISA RETURNS</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                            <tr>
                                <th class="wd-5p">MONTH</th>
                                <th class="wd-5p">Year</th>
                                <th class="wd-10p">Total Issued</th>
                                <th class="wd-10p">Diplomatic</th>
                                <th class="wd-10p">Business</th>
                                <th class="wd-10p">Tourist</th>
                                <th class="wd-10p">TWP</th>
                                <th class="wd-10p">STR</th>
                                <th class="wd-10p">Transit</th>
                                <th class="wd-10p">Official</th>
                                <th class="wd-10p">Submitted</th>
                                <th>view</th>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-red" align="center"><i class="fa-2x fa fa-book-open"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header bg-gradient-dark">
                    <h2 class="mb-0 text-white">ETC RETURNS</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                            <tr>
                                <th class="wd-10p">YEAR</th>
                                <th class="wd-15p">Month</th>
                                <th class="wd-20p">Opening balance</th>
                                <th class="wd-20p">Total Issuance</th>
                                <th class="wd-20p">Submitted</th>
                                <th class="wd-15p">view</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-default" align="center"><i class="fa-2x fa fa-book-open"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card shadow ">
                <div class="card-header bg-gradient-orange">
                    <h2 class="mb-0 text-white">REVENUE SUMMARY</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                            <tr>
                                <th class="wd-10p">YEAR</th>
                                <th class="wd-10p">Month</th>
                                <th class="wd-10p">Ppt(32 pages)</th>
                                <th class="wd-10p">Ppt(64 pages)</th>
                                <th class="wd-10p">Visa </th>
                                <th class="wd-10p">ETC</th>
                                <th class="wd-10p">Submitted</th>
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
                                <td></td>
                                <td class="text-orange" align="center"><i class="fa-2x fa fa-book-open"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

<?php include_once 'inc/footer.php';  ?>