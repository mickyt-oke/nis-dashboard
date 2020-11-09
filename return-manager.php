<?php require_once 'core/init.php';
        require_once 'core/init2.php';
admin();
if (!isAdmin()){
    redirectTo ('dash.php');
}
?>

    <?php require_once 'inc/header-2.php'; ?>
<!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dash.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Manage Returns</li>
								</ol>
							</div>
                            <?php if (isset($_REQUEST['preview'])) {
                                $sqlquery = mysqli_query($con, "SELECT * FROM tbl_ppt WHERE missionid='" . htmlspecialchars($_REQUEST['preview'], ENT_QUOTES) . "' ");

                                if(mysqli_num_rows($sqlquery) == 0) {
                                    echo "<h3 style=\"color:#0000cc;text-align:center;\">No Information to display..!</h3>";
                                }
                                else if ($p = mysqli_fetch_array($sqlquery)) {
                                    ?>
                                    <div class="modal-dialog modal-lg" role="document" tabindex="1">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" ><?php echo $p['missionid']; ?> PASSPORT RETURN SUMMARY</h2>
                                                <button type="button" class="close" aria-label="Close">
                                                    <a href="return-manager.php"><span aria-hidden="true">&times;</span></a>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered m-t-30 text-nowrap">
                                                        <thead >
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>32 pages</th>
                                                            <th>64 pages</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><strong>Opening Balance</strong></td>
                                                            <td><?php echo $p['opn_bal_32']; ?></td>
                                                            <td><?php echo $p['opn_bal_64']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Issuance</strong></td>
                                                            <td><?php echo $p['ppt_32']; ?></td>
                                                            <td><?php echo $p['ppt_64']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Damaged</strong></td>
                                                            <td><?php echo $p['dam_32']; ?></td>
                                                            <td><?php echo $p['dam_64']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Balance</strong></td>
                                                            <td><?php echo $p['stock_bal_32']; ?></td>
                                                            <td><?php echo $p['stock_bal_64']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Revenue ($USD)</strong></td>
                                                            <td><?php echo $p['ppt_rev_32']; ?></td>
                                                            <td><?php echo $p['ppt_rev_64']; ?></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            }
                            ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header bg-gradient-success">
                    <h2 class="mb-0 text-white">PASSPORT RETURNS</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                     <?php if (isset($_SESSION['mission'])) {
                        $sql = mysqli_query($con, "SELECT * FROM tbl_ppt ;");
                        $c=1;
                        ?>
                         <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <th class="wd-5p">mission</th>
                                <th class="wd-10p">DATE</th>
                                <th class="wd-25p">32p Opening</th>
                                <th class="wd-25p">64p Opening </th>
                                <th class="wd-25p">32p Issuance</th>
                                <th class="wd-25p">64p Issuance</th>
                                <th class="wd-10p">32p Balance</th>
                                <th class="wd-10p">64p Balance</th>
                                <th class="wd-5p">view</th>
                            </thead>
                             <tbody>
                <?php
                while ($result = mysqli_fetch_array($sql))
                {
               ?>
                            <tr>
                                <td><?php echo $result['missionid']; ?></td>
                                <td><?php echo $result['month']." ".$result['year']; ?></td>
                                <td><?php echo $result['opn_bal_32']; ?></td>
                                <td><?php echo $result['opn_bal_64']; ?></td>
                                <td><?php echo $result['ppt_32']; ?></td>
                                <td><?php echo $result['ppt_64']; ?></td>
                                <td><?php echo $result['stock_bal_32']; ?></td>
                                <td><?php echo $result['stock_bal_64']; ?></td>
                                <td class="text-success" align="center"><?php echo "<a title=\"preview " . htmlspecialchars_decode($result['missionid'], ENT_QUOTES) . "\" href=\"return-manager.php?preview=" . htmlspecialchars_decode($result['missionid'], ENT_QUOTES) . "\" ><i class=\"fa-2x fa fa-book-open\" /></a>"; ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header bg-gradient-red">
                    <h2 class="mb-0 text-white">VISA RETURNS</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php
                        $query = mysqli_query($con, "SELECT * FROM tbl_visa_class ;");
                        $x=1;
                        ?>
                        <table id="example1" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                            <tr>
                                <th class="wd-5p">Mission</th>
                                <th class="wd-5p">Date</th>
                                <th class="wd-10p">Diplomatic</th>
                                <th class="wd-10p">Business</th>
                                <th class="wd-10p">Tourist</th>
                                <th class="wd-10p">TWP</th>
                                <th class="wd-10p">STR</th>
                                <th class="wd-10p">Transit</th>
                                <th class="wd-10p">Official</th>
                                <th class="wd-10p">Total Issued</th>
                                <th>view</th>
                            </tr>
                            </thead>
                            <tbody>
                             <?php
                while ($r = mysqli_fetch_array($query))
                {
               ?>
                            <tr>
                                <td><?php echo $r['missionid']; ?></td>
                                <td><?php echo $r['month']." ".$r['yearid']; ?></td>
                                <td><?php echo $r['diplomatic']; ?></td>
                                <td><?php echo $r['business']; ?></td>
                                <td><?php echo $r['tourist']; ?></td>
                                <td><?php echo $r['twp']; ?></td>
                                <td><?php echo $r['str']; ?></td>
                                <td><?php echo $r['transit']; ?></td>
                                <td><?php echo $r['official']; ?></td>
                                <td style><?php echo $r['diplomatic'] + $r['tourist'] + $r['business'] + $r['transit'] + $r['str'] + $r['twp'] + $r['official']; ?></td>
                                <td class="text-red" align="center"><i class="fa-2x fa fa-book-open"></i></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="col-lg-12">
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
        </div> -->
        <!--
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
        </div> -->
    </div>

<?php include_once 'inc/footer.php';  ?>
