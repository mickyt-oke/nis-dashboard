<?php require_once 'core/init.php';

admin();
if (!isAdmin()){
    redirectTo ('dash.php');
}
 include_once 'inc/header-2.php'; ?>
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</div>
                            <div class="row">
                            <h2>Welcome, <?php echo $profile->getName($_SESSION['profile']); ?></h2>
                            </div>
							<div class="card shadow overflow-hidden">
								<div class="">
									<div class="row">
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
													<i class="fas fa-chart-line mr-2"></i>
													Authorized Admins
												</p>
												<h2 class="text-danger text-xxl">40</h2>
                                                <p class="text-muted"> registered</p>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-users mr-2"></i>
												  NIS Attaches 
												</p>
												<h2 class="text-danger text-xxl">95</h2>
												<p class="text-muted"> officers</p>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-briefcase mr-2"></i>
												  NIS Missions
												</p>
												<h2 class="text-danger text-xxl">52</h2>
												<p class="text-muted"> missions</p>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-signal mr-2"></i>
												  Mission Locations
												</p>
												<h2 class="text-danger text-xxl">45</h2>
												<p class="text-muted"> countries</p>
											</div>
										</div>
                                         <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-users mr-2"></i>
												  Local Staff
												</p>
												<h2 class="text-danger text-xxl"></h2>
												<p class="text-muted"> </p>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-file"></i>
												 Month in View
												</p>
												<h5 class="text-danger text-xxl"><?php $timestamp = time(); echo(date("F Y", $timestamp)) ?></h5>
											</div>
										</div>
                                       
									</div>
								</div>
							</div>
                            
                            	<div class="row row-deck">
								 <div class="col-xl-6">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-muted ls-1 mb-1">Overview</h6>
													<h2 class="mb-0">2019 Monthly Submission Data</h2>
												</div>
											</div>
										</div>
										<div class="">

                                            <div class="col-xl-12">
                                            <table class="table card-table ta<div id="Highchart8" class="chartsh" table-vcenter text-nowrap align-items-center">
												<thead class="thead-light">
												<tr>
                                                    <td>Continent</td>
                                                    <td>Missions</td>
                                                    <td>Passport</td>
                                                    <td>Visa</td>
                                                    <td>Total</td>
                                                </tr>  
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Europe</td>
                                                        <td>17</td>
                                                        <td>90808</td>
                                                        <td>50630</td>
                                                        <td>141438</td>
                                                    </tr>
                                                    <tr>
                                                        <td>America</td>
                                                        <td>6</td>
                                                        <td>51157</td>
                                                        <td>9682</td>
                                                        <td>60839</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Asia</td>
                                                        <td>14</td>
                                                        <td>20612</td>
                                                        <td>33801</td>
                                                        <td>54413</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Africa</td>
                                                        <td>14</td>
                                                        <td>21266</td>
                                                        <td>21436</td>
                                                        <td>42702</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Oceania</td>
                                                        <td>1</td>
                                                        <td>1941</td>
                                                        <td>651</td>
                                                        <td>2592</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-light ls-1 mb-1">oVERVIEW</h6>
													<h2 class="mb-0">2020 RETURNS STATISTICS</h2>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="row">

												<div class="col-sm-6 col-lg-6 col-xl-6">
													<div class="card socailicons bg-success">
														<div class="card-body  mb-0">
															<small class="social-title">Issued Passports</small>
															<h3 class="text-xl text-white  mb-0"></h3>
															<i class="fab fa-book-open"></i>
														</div>
													</div>
												</div>
                                                <div class="col-sm-6 col-lg-6 col-xl-6">
                                                    <div class="card socailicons facebook-like1 mb-sm-0">
                                                        <div class="card-body  mb-0">
                                                            <small class="social-title">Issued Visas</small>
                                                            <h3 class="text-xl text-white  mb-0"></h3>
                                                            <i class="fab fa-book"></i>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="col-sm-12 col-lg-12 col-xl-12">
													<div class="card socailicons bg-danger">
														<div class="card-body  mb-0">
															<small class="social-title">Revenue (Passports & Visas) </small>
															<h3 class="text-xl text-white  mb-0">$ </h3>
															<i class="fab fa-book"></i>
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>
							</div>
                            </div>
                          
                          
                           <!-- <div class="card  shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
													<h2 class="mb-0">IMMIGRATION FACILITIES ISSUED JAN - DEC 2018</h2>
												</div>
											</div>
										</div>
								<div class="card-body">
								    Chart
								    <canvas id="sales-chart" class="chart-dropshadow h-335"></canvas>
								</div>
				            </div>-->
                            
                            <div class="row">
								<div class="col">
									<div class="card shadow">
										<div class="card-header bg-transparent border-0">
											<h2 class=" mb-0">2019 Annual Performance Evaluation Chart by Missions vis a vis Facilities &amp; Staff</h2>
										</div>
										<div class="">
											<div class="grid-margin">
												<div class="">
													<div class="table-responsive">
														<table class="table card-table table-vcenter text-nowrap align-items-center">
															<thead class="thead-light">
																<tr>
																	<th>Rating</th>
																	<th>Mission</th>
																	<th>Country</th>
																	<th>Attaches</th>
                                                                    <th>Local staff</th>
																	<th>PPT Issued</th>
																	<th>Visa Issued</th>
																	<th>Total</th>
																	<th>Drivers</th>
																	<th>Annual Local Staff Sal</th>
                                                                    
																</tr>
															</thead>
															<tbody>
																<tr>
                                                                    <td>1</td>
                                                                    <td class="text-sm font-weight-600">London</td>
																	<td>U.K</td>
																	<td>4</td>
                                                                    <td>5</td>
																	<td>44,861</td>
																	<td>19,196</td>
                                                                    <td>64,592</td>
																	<td>2</td>
																	<td>280,000</td>
																</tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td class="text-sm font-weight-600">New Delhi</td>
																	<td>India</td>
																	<td>2</td>
																	<td>3</td>
																	<td>1,418</td>
																	<td>16,391</td>
																	<td>17,818</td>
																	<td>0</td>
																	<td>80,000</td>
																</tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td class="text-sm font-weight-600">Atlanta</td>
																	<td>USA</td>
																	<td>2</td>
																	<td>2</td>
																	<td>12,508</td>
																	<td>2,194</td>
																	<td>16,755</td>
																	<td>1</td>
																	<td>80,000</td>
																</tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td class="text-sm font-weight-600">New York</td>
																	<td>USA</td>
																	<td>2</td>
																	<td>4</td>
																	<td>16,137</td>
																	<td>2,443</td>
																	<td>16,449</td>
																	<td>2</td>
																	<td>140,000</td>
																</tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td class="text-sm font-weight-600">Rome</td>
																	<td>Italy</td>
																	<td>2</td>
																	<td>1</td>
																	<td>10,374</td>
																	<td>861</td>
																	<td>13,752</td>
																	<td>1</td>
																	<td>80,000</td>
																</tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td class="text-sm font-weight-600">Washington</td>
																	<td>USA</td>
																	<td>2</td>
																	<td>1</td>
																	<td>10,391</td>
																	<td>1,955</td>
																	<td>13,629</td>
																	<td>1</td>
																	<td>80,000</td>
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
                            
							<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-light ls-1 mb-1">Rating</h6>
													<h2 class="mb-0">Rating Progress Bar By Country</h2>
												</div>
											</div>
										</div>
										<div class="">
											<div class="row">
												<div class="col-xl-4">
													<div class="card-body">
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>UK</span>
																</div>
																<div class="progress-percentage">
																	<span>1</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>India</span>
																</div>
																<div class="progress-percentage">
																	<span>2</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>USA</span>
																</div>
																<div class="progress-percentage">
																	<span>3</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>Italy</span>
																</div>
																<div class="progress-percentage">
																	<span>4</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>South Africa</span>
																</div>
																<div class="progress-percentage">
																	<span>5</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>Germany</span>
																</div>
																<div class="progress-percentage">
																	<span>6</span>
																</div>
															</div>
															<div class="progress mb-0">
																<div class="progress-bar bg-default" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
															</div>
														</div>
                                                        <div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>Canada</span>
																</div>
																<div class="progress-percentage">
																	<span>7</span>
																</div>
															</div>
															<div class="progress mb-0">
																<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
															</div>
														</div>
                                                        <div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>France</span>
																</div>
																<div class="progress-percentage">
																	<span>8</span>
																</div>
															</div>
															<div class="progress mb-0">
																<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
															</div>
														</div>
                                                        <div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>Saudi Arabia</span>
																</div>
																<div class="progress-percentage">
																	<span>9</span>
																</div>
															</div>
															<div class="progress mb-0">
																<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;"></div>
															</div>
														</div>
                                                        <div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>China</span>
																</div>
																<div class="progress-percentage">
																	<span>10</span>
																</div>
															</div>
															<div class="progress mb-0">
																<div class="progress-bar bg-success" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%;"></div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-8 worldmap">
													<div class="card-body">
														<div id="world-map-markers" class="worldh h-400" ></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
<?php include_once 'inc/dash-foot.php'; ?>