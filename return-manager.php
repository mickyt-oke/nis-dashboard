<?php require_once 'core/init.php'; ?>

    <?php require_once 'inc/header.php'; ?>
<!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dash.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Manage Returns</li>
								</ol>
							</div>
    <div><?php error($errors);
                success($message); ?>
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
        </div>
    </div>

<?php include_once 'inc/footer.php';  ?>