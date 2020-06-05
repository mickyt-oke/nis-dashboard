<?php require_once 'core/init.php'; 
?>
<?php admin(); 
        if (!isAdmin()){
        redirectTo ('dash.php');
        }
?>
<?php include_once 'inc/header.php'; ?>
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</div>
							<!--<div class="card shadow overflow-hidden">
								<div class="">
									<div class="row">
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
													<i class="fas fa-chart-line mr-2"></i>
													Online Attache Admins
												</p>
												<h2 class="text-primary text-xxl">40</h2>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-users mr-2"></i>
												  Immigration Attaches 
												</p>
												<h2 class="text-yellow text-xxl">80</h2>
												
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-briefcase mr-2"></i>
												  NIS Missions
												</p>
												<h2 class="text-warning text-xxl">52</h2>
												
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-signal mr-2"></i>
												  Countries
												</p>
												<h2 class="text-danger text-xxl">45</h2>
												
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-file"></i>
												 Submitted Reports 
												</p>
												<h2 class="text-success text-xxl">1</h2>
												<a href="manage-returns.php" class="btn btn-outline-success btn-pill btn-sm">view submissions</a>
											</div>
										</div>
                                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-users mr-2"></i>
												  Local Staff
												</p>
												<h2 class="text-yellow text-xxl">200</h2>
												
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<div class="row">
								<div class="col-xl-4">
									<div class="">
										<div class="">
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-sm-12">
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Issued Passports</small>
																<h2 class="text-xxl mb-0 text-success">27,823</h2>
                                                                <p class="mb-0"><span class=""> last month</span></p>
															</div>
														</div>
													</div>
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Issued Visas</small>
																<h2 class="text-xxl mb-0 text-yellow">1, 683</h2>
                                                                <p class="mb-0"><span class=""> last month</span></p>
															</div>
														</div>
													</div>
                                                    <div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Issued ETC</small>
																<h2 class="text-xxl mb-0 text-default">5, 083</h2>
                                                                <p class="mb-0"><span class=""> last month</span></p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-8">
									<div class="">
										<div class="">
											<div class="row">
												<div class="col-xl-6 col-lg-6 col-sm-6">
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Total monthly revenue </small>
																<h2 class="text-xxl mb-1 text-success">$ 4,807,331 </h2>
                                                                <p class="mb-0"><span class=""> passports</span></p>
															</div>
														</div>
													</div>
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Total monthly revenue </small>
																<h2 class="text-xxl mb-1 text-yellow">$ 256,000</h2>
																<p class="mb-0"><span class="">visa</span> </p>
															</div>
														</div>
													</div>
                                                    <div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Total monthly revenue </small>
																<h2 class="text-xxl mb-1 text-default">$ 715,000</h2>
																<p class="mb-0"><span class="">ETC</span> </p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-sm-6">
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Total Passport Issued</small>
																<h2 class="text-xxl mb-1 text-success">807,331 </h2>
                                                                <p class="mb-0"><span class="">all missions </span></p>
															</div>
														</div>
													</div>
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Total Visa Issued</small>
																<h2 class="text-xxl text-yellow mb-1">187,000</h2>
																<p class="mb-0"><span class=""> all missions </span></p>
															</div>
														</div>
													</div>
                                                    <div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Total ETC Issued</small>
																<h2 class="text-xxl text-default mb-1">523,000</h2>
																<p class="mb-0"><span class=""> all missions </span></p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xl-12">
									<div class="card  shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
													<h2 class="mb-0">IMMIGRATION FACILITIES ISSUED JAN - DEC 2018</h2>
												</div>

											</div>
										</div>
										<div class="card-body">
											<!-- Chart -->
											<canvas id="lineChart" class="chart-dropshadow h-285"></canvas>
										</div>
									</div>
								</div>
							</div>
                            
                            <div class="row">
								<div class="col-md-6 col-lg-6 col-xl-2">
									<div class="card shadow overflow-hidden">
										<div class="card-body text-white bg-gradient-primary text-center">
											<h1>Africa</h1>
											<h2 class="mb-0">18</h2>
                                            <p class="mb-0">Attaches</p>
										</div>
										<div class="card-body">
											<h1 class="mb-0 text-center">46</h1>
                                            <p class="mb-0 text-center">Local staffs</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-2">
									<div class="card shadow overflow-hidden">
										<div class="card-body text-white bg-gradient-default text-center">
											<h2>America</h2>
											<h1 class="mb-0">12</h1>
                                            <p class="mb-0">Attaches</p>
										</div>
										<div class="card-body">
											<h1 class="mb-0 text-center">22</h1>
                                            <p class="mb-0 text-center">Local staffs</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-2">
									<div class="card shadow overflow-hidden">
										<div class="card-body text-white bg-gradient-yellow text-center">
											<h2>Asia</h2>
											<h1 class="mb-0">20</h1>
                                            <p class="mb-0">Attaches</p>
										</div>
										<div class="card-body">
											<h1 class="mb-0 text-center">34</h1>
                                            <p class="mb-0 text-center">Local staffs</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-2">
									<div class="card shadow overflow-hidden">
										<div class="card-body text-white bg-gradient-green text-center">
											<h2>Europe</h2>
											<h1 class="mb-0">28</h1>
                                            <p class="mb-0">Attaches</p>
										</div>
										<div class="card-body">
											<h1 class="mb-0 text-center">38</h1>
                                            <p class="mb-0 text-center">Local staffs</p>
								        </div>
									</div>
								</div>
                                <div class="col-md-6 col-lg-6 col-xl-2">
									<div class="card shadow overflow-hidden">
										<div class="card-body text-white bg-gradient-red text-center">
											<h2>Oceania</h2>
											<h1 class="mb-0">2</h1>
                                            <p class="mb-0">Attaches</p>
										</div>
										<div class="card-body">
										
											<h1 class="mb-0 text-center">1</h1>
                                            <p class="mb-0 text-center">Local staff</p>
										</div>
									</div>
								</div>
							</div>
                           <!--
                            <div class="row">
								<div class="col-xl-6">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-muted ls-1 mb-1">performance</h6>
													<h2 class="mb-0">Missions Performance by Continent</h2>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div id="Highchart3" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-muted ls-1 mb-1">Activities</h6>
													<h2 class="mb-0">Monthly Activity Chart</h2>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div id="Highchart4" class="chartsh"></div>
										</div>
									</div>
								</div>
                               
								<div class="col-xl-6">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-muted ls-1 mb-1">Chart</h6>
													<h2 class="mb-0">Radius Bar Chart</h2>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div id="Highchart7" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-muted ls-1 mb-1">Chart</h6>
													<h2 class="mb-0">Pie chart</h2>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div id="Highchart8" class="chartsh"></div>
										</div>
									</div>
								</div> -->
							</div>
                            
                            <!-- end -->
                            
                            <div class="row">
								<div class="col">
									<div class="card shadow">
										<div class="card-header bg-transparent border-0">
											<h2 class=" mb-0">Annual Performance Evaluation Chart by Missions vis a vis Facilities &amp; Staff</h2>
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
																	<td>45,396</td>
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
																	<td>1,427</td>
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
																	<td>14,561</td>
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
																	<td>14,006</td>
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
																	<td>12,891</td>
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
																	<td>11,674</td>
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