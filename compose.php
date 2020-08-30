<?php require_once 'core/init.php'; ?>

    <?php require_once 'inc/header.php'; ?>
<!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dash.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Report Entry</li>
								</ol>
							</div>

          <div class="row">
            <div class="col-md-12">
                <?php if (@$_GET['p']== "new") { ?>
                <h2>NEW REPORT ENTRY</h2>
                <div class="email-app card shadow">
                    <div class="inbox card-body">
                    <form>
                        <div class="form-row mb-4">
                            <label for="to" class="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">Addressee:</label>
                            <div class="col-9 col-sm-10 col-md-9 col-lg-10">
                                <select type="text" name="addressee" class="form-control" value="<?php echo stickyForm('addressee') ?>" required>
                                    <option>-- select --</option>
                                    <option>CGIS</option>
                                    <option>DCG (Finance)</option>
                                    <option>DCG (Passport/OTD)</option>
                                    <option>DCG (Visa &amp; Residency)</option>
                                    <option>DCG (Human Resource Management)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <label for="cc" class="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">Through:</label>
                            <div class="col-9 col-sm-10 col-md-9 col-lg-10">
                                <select type="text" name="addressee" class="form-control" value="<?php echo stickyForm('addressee') ?>">
                                    <option>-- select --</option>
                                    <option>DCG (Finance)</option>
                                    <option>DCG (Passport/OTD)</option>
                                    <option>DCG (Visa &amp; Residency)</option>
                                    <option>SA-Foreign Desk</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <label for="cc" class="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">ATTENTION:</label>
                            <div class="col-9 col-sm-10 col-md-9 col-lg-10">
                                <input type="text" name="attention" class="form-control" placeholder="if any" value="<?php echo stickyForm('attention') ?>" />
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <label for="Subject" class="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">Subject</label>
                            <div class="col-9 col-sm-10 col-md-9 col-lg-10">
                                <input type="text" name="subject" class="form-control" placeholder="Type Subject" />
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-10 ml-auto col-md-12 col-lg-10">
                            <div class="form-group mt-3 ">
                                <textarea class="form-control" id="message" name="body" rows="20" placeholder="Message Body"></textarea>
                            </div>
                        </div>
                    </div>
                            <div class="form-row mb-4">
                                <label class="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">Has Attachments</label>
                                <div class="col-9 col-sm-10 col-md-9 col-lg-10">
                                    <input type="file" class="form-control-file" name="" />
                                </div>
                            </div>
                        <div class="col-md-12 offset-md-5">
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-lg btn-success mt-1 mb-1"><i class="fas fa-fighter-jet"></i> Send</button>
                                <button type="submit" class="btn btn-lg btn-danger mt-1 mb-1"><i class="fa fa-window-close"></i> Discard</button>
                            </div>
                        </div>
                </div>
            </div>
    <?php } ?>
                            <?php if (@$_GET['p'] == "manage") { ?>
                <h2>MANAGE REPORTS </h2>
    <div class="card shadow">
        <div class="card-header bg-transparent border-0">
            <h2 class=" mb-0">VIEW Reports</h2>
        </div>
        <div class="">
            <div class="grid-margin">
                <div class="">
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap align-items-center">
                            <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>REPORT SUBJECT</th>
                                <th>Attachments</th>
                                <th>SENT</th>
                                <th>VIEW</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr >
                                <td>1</td>
                                <td>APPLICATION FOR LEAVE</td>
                                <td><i class="fas fa-link"></i></td>
                                <td>01-10-2020</td>
                                <td><i class="fas fa-file-pdf"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
          </div>
<?php } ?>
<?php include_once 'inc/footer.php';  ?>