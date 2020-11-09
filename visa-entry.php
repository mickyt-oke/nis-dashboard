<?php require_once 'core/init.php'; ?>

<?php
    if (isset($_POST['visasub'])) {
        $required = array('month', 'year');

        foreach ($_POST as $key => $value) {
            if (empty($value) && in_array($key, $required)) {

                $errors[] = "Complete all fields, please.";
                break;
            }
        }
        //if No errors
        if (empty($errors)) {
            $visacat->month = sanitize('month');
            $visacat->yearid = sanitize('year');
            $visacat->opn_bal = sanitize('opnbal');
            $visacat->diplomatic = sanitize('dip');
            $visacat->business = sanitize('bus');
            $visacat->tourist = sanitize('tou');
            $visacat->twp = sanitize('twp');
            $visacat->str = sanitize('str');
            $visacat->transit = sanitize('tra');
            $visacat->official = sanitize('off');
            $visacat->damage = sanitize('dam');
            $visacat->stockbal = sanitize('stkbal');
            $visacat->visa_rev = sanitize('rev');
            $visacat->comments = trim($_POST['message']);

            //validate and check errors
            if (is_integer($visacat->tourist)) {
                $errors[] = "Values must be numbers only";
            }

            if (empty($errors)) {
                if ($visacat->createVisa()) {
                    $session->message("Visa Submission Successful. <a href='dash.php'>View Summary</a>");
                    header('Location: visa-entry.php');
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
            <li class="breadcrumb-item active" aria-current="page">Visa Returns Entry</li>
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
                                <li class="nav-item"><a class="nav-link mr-0 border-top" href="entry.php">Passport</a></li>
                                <li class="nav-item active"><a class="nav-link mr-0" href="#">Visa</a></li>
                                <!--<li class="nav-item"><a class="nav-link mr-0" href="add-new.php?p=4">Revenue</a></li> -->
                            </ul>
                        </nav>
                        <!-- VISA entry start-->
                                   <div class="inbox card-body">
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
                                                        <select class="form-control year" name="year" value="<?php echo stickyForm('year'); ?>" required />
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
                                        <div class="input-group mb-2">
                                            <div class="col-md-4">Opening stock </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="opnbal" placeholder="" value="<?php echo stickyForm('opnbal'); ?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="col-md-12 mb-4 center">CLASSIFICATION (Issuance)</div>
                                        <div class="input-group mb-2">
                                            <div class="col-md-4">Diplomatic</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="dip" placeholder="" value="<?php echo stickyForm('dip'); ?>" >
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="col-md-4">Business</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="bus" placeholder="" value="<?php echo stickyForm('bus'); ?>" >
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="col-md-4">Tourist</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="tou" placeholder="" value="<?php echo stickyForm('tou'); ?>" >
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="col-md-4">TWP</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="twp" placeholder="" value="<?php echo stickyForm('twp'); ?>">
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="col-md-4">STR</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="str" placeholder="" value="<?php echo stickyForm('str'); ?>" >
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="col-md-4">Transit</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="tra" placeholder="" value="<?php echo stickyForm('tra'); ?>" >
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="col-md-4">Official</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="off" placeholder="" value="<?php echo stickyForm('off'); ?>" >
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="input-group mb-4">
                                            <div class="col-md-4">Damaged</div>
                                            <div class="col-md-4">
                                                <input type="text" name="dam" class="form-control" placeholder="" value="<?php echo stickyForm('dam'); ?>">
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="col-md-4">Balance in stock</div>
                                            <div class="col-md-4">
                                                <input type="text" name="stkbal" class="form-control" placeholder="" value="<?php echo stickyForm('stkbal'); ?>">
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="col-md-4">Revenue (in USD)</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="rev" placeholder="" value="<?php echo stickyForm('rev'); ?>">
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
                                        <input type="hidden" name="visasub" value="visareturn">
                                    </form>
                                    </div>
                            </div>
                        </div>
                    </div>
			    </div>
		</div>
<?php include_once 'inc/footer.php';  ?>

