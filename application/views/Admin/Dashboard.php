<!DOCTYPE html>
<html lang="en">

<body style="background: #f1f1f1;">
	<div class="wrapper"> 
		<!-- Navbar -->
    <div class="main-header" data-background-color="blue"> 
      <!-- Logo Header -->
      <div class="logo-header">
        
        <a href="index.html" class="logo">
          <img src="<?php echo base_url() ?>assets/Dashboard/img/logoazzara.svg" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
        <div class="navbar-minimize">
          <button class="btn btn-minimize btn-rounded">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg">
        
        <div class="container-fluid">
          <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
              </div>
            </form>
          </div>
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
              <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                <i class="fa fa-search"></i>
              </a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('HomeController/index') ?>">
                <i class="fa fa-power-off"></i>
              </a>
            </li>						
            <li class="nav-item dropdown hidden-caret">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope"></i>
              </a>
              <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                <li>
                  <div class="dropdown-title d-flex justify-content-between align-items-center">
                    Messages 									
                    <a href="#" class="small">Mark all as read</a>
                  </div>
                </li>
                <li>
                  <div class="message-notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="<?php echo base_url() ?>assets/Dashboard/img/jm_denis.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="subject">Jimmy Denis</span>
                          <span class="block">
                            How are you ?
                          </span>
                          <span class="time">5 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="<?php echo base_url() ?>assets/Dashboard/img/chadengle.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="subject">Chad</span>
                          <span class="block">
                            Ok, Thanks !
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="<?php echo base_url() ?>assets/Dashboard/img/mlane.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="subject">Jhon Doe</span>
                          <span class="block">
                            Ready for the meeting today...
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="<?php echo base_url() ?>assets/Dashboard/img/talha.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="subject">Talha</span>
                          <span class="block">
                            Hi, Apa Kabar ?
                          </span>
                          <span class="time">17 minutes ago</span> 
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="notification">4</span>
              </a>
              <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                <li>
                  <div class="dropdown-title">You have 4 new notification</div>
                </li>
                <li>
                  <div class="notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                        <div class="notif-content">
                          <span class="block">
                            New user registered
                          </span>
                          <span class="time">5 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                        <div class="notif-content">
                          <span class="block">
                            Rahmad commented on Admin
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="<?php echo base_url() ?>assets/Dashboard/img/profile2.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="block">
                            Reza send messages to you
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                        <div class="notif-content">
                          <span class="block">
                            Farrah liked Admin
                          </span>
                          <span class="time">17 minutes ago</span> 
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                  <img src="<?php echo base_url() ?>assets/Dashboard/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <li>
                  <div class="user-box">
                    <div class="avatar-lg"><img src="<?php echo base_url() ?>assets/Dashboard/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                    <div class="u-text">
                      <h4>Hizrian</h4>
                      <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item" href="#">My Balance</a>
                  <a class="dropdown-item" href="#">Inbox</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Account Setting</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Logout</a>
                </li>
              </ul>
            </li>
            
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->      
    </div>
		<!-- End Navbar -->

		<!-- Main Content -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Dashboard</h4>
						<div class="btn-group btn-group-page-header ml-auto">
							<button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-h"></i>
							</button>
							<div class="dropdown-menu">
								<div class="arrow"></div>
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="fas fa-users"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Visitors</p>
												<h4 class="card-title">1,294</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
												<i class="far fa-newspaper"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Subscribers</p>
												<h4 class="card-title">1303</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="far fa-chart-bar"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Sales</p>
												<h4 class="card-title">$ 1,345</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-secondary bubble-shadow-small">
												<i class="far fa-check-circle"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Order</p>
												<h4 class="card-title">576</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">User Statistics</div>
										<div class="card-tools">
											<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												Export
											</a>
											<a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Print
											</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="chart-container" style="min-height: 375px">
										<canvas id="statisticsChart"></canvas>
									</div>
									<div id="myChartLegend"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-secondary">
								<div class="card-header">
									<div class="card-title">Daily Sales</div>
									<div class="card-category">March 25 - April 02</div>
								</div>
								<div class="card-body pb-0">
									<div class="mb-4 mt-2">
										<h1>$4,578.58</h1>
									</div>
									<div class="pull-in">
										<canvas id="dailySalesChart"></canvas>
									</div>
								</div>
							</div>
							<div class="card card-info bg-info-gradient">
								<div class="card-body">
									<h4 class="mb-1 fw-bold">Tasks Progress</h4>
									<div id="task-complete" class="chart-circle mt-4 mb-3"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<h4 class="card-title">Users Geolocation</h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div>
									<p class="card-category">
									Map of the distribution of users around the world</p>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="table-responsive table-hover table-sales">
												<table class="table">
													<tbody>
														<tr>
															<td>
																<div class="flag">
																	<img src="<?php echo base_url() ?>assets/Dashboard/img/flags/id.png" alt="indonesia">
																</div>
															</td>
															<td>Indonesia</td>
															<td class="text-right">
																2.320
															</td>
															<td class="text-right">
																42.18%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="<?php echo base_url() ?>assets/Dashboard/img/flags/us.png" alt="united states">
																</div>
															</td>
															<td>USA</td>
															<td class="text-right">
																240
															</td>
															<td class="text-right">
																4.36%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="<?php echo base_url() ?>assets/Dashboard/img/flags/au.png" alt="australia">
																</div>
															</td>
															<td>Australia</td>
															<td class="text-right">
																119
															</td>
															<td class="text-right">
																2.16%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="<?php echo base_url() ?>assets/Dashboard/img/flags/ru.png" alt="russia">
																</div>
															</td>
															<td>Russia</td>
															<td class="text-right">
																1.081
															</td>
															<td class="text-right">
																19.65%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="<?php echo base_url() ?>assets/Dashboard/img/flags/cn.png" alt="china">
																</div>
															</td>
															<td>China</td>
															<td class="text-right">
																1.100
															</td>
															<td class="text-right">
																20%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="<?php echo base_url() ?>assets/Dashboard/img/flags/br.png" alt="brazil">
																</div>
															</td>
															<td>Brasil</td>
															<td class="text-right">
																640
															</td>
															<td class="text-right">
																11.63%
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mapcontainer">
												<div id="map-example" class="vmap"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Top Products</div>
								</div>
								<div class="card-body pb-0">
									<div class="d-flex">
										<div class="avatar">
											<img src="<?php echo base_url() ?>assets/Dashboard/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h5 class="fw-bold mb-1">CSS</h5>
											<small class="text-muted">Cascading Style Sheets</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">+$17</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="<?php echo base_url() ?>assets/Dashboard/img/logoproduct2.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h5 class="fw-bold mb-1">J.CO Donuts</h5>
											<small class="text-muted">The Best Donuts</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">+$300</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="<?php echo base_url() ?>assets/Dashboard/img/logoproduct3.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h5 class="fw-bold mb-1">Ready Pro</h5>
											<small class="text-muted">Bootstrap 4 Admin Dashboard</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">+$350</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="pull-in">
										<canvas id="topProductsChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Suggested People</div>
									<div class="card-list">
										<div class="item-list">
											<div class="avatar">
												<img src="<?php echo base_url() ?>assets/Dashboard/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-sm">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="<?php echo base_url() ?>assets/Dashboard/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Chad</div>
												<div class="status">CEO Zeleaf</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-sm">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="<?php echo base_url() ?>assets/Dashboard/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-sm">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="<?php echo base_url() ?>assets/Dashboard/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">John Doe</div>
												<div class="status">Back End Developer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-sm">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="<?php echo base_url() ?>assets/Dashboard/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-sm">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="<?php echo base_url() ?>assets/Dashboard/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-sm">
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-primary bg-primary-gradient bubble-shadow">
								<div class="card-body">
									<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h4>
									<h1 class="mb-4 fw-bold">17</h1>
									<h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
									<div id="activeUsersChart"></div>
									<h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
									<ul class="list-unstyled">
										<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
										<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/azzara/demo.html</small> <span>10</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Feed Activity</div>
								</div>
								<div class="card-body">
									<ol class="activity-feed">
										<li class="feed-item feed-item-secondary">
											<time class="date" datetime="9-25">Sep 25</time>
											<span class="text">Responded to need <a href="#">"Volunteer opportunity"</a></span>
										</li>
										<li class="feed-item feed-item-success">
											<time class="date" datetime="9-24">Sep 24</time>
											<span class="text">Added an interest <a href="#">"Volunteer Activities"</a></span>
										</li>
										<li class="feed-item feed-item-info">
											<time class="date" datetime="9-23">Sep 23</time>
											<span class="text">Joined the group <a href="single-group.php">"Boardsmanship Forum"</a></span>
										</li>
										<li class="feed-item feed-item-warning">
											<time class="date" datetime="9-21">Sep 21</time>
											<span class="text">Responded to need <a href="#">"In-Kind Opportunity"</a></span>
										</li>
										<li class="feed-item feed-item-danger">
											<time class="date" datetime="9-18">Sep 18</time>
											<span class="text">Created need <a href="#">"Volunteer Opportunity"</a></span>
										</li>
										<li class="feed-item">
											<time class="date" datetime="9-17">Sep 17</time>
											<span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
										</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Support Tickets</div>
										<div class="card-tools">
											<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
												<li class="nav-item">
													<a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Today</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">Week</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">Month</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-flex">
										<div class="avatar avatar-online">
											<span class="avatar-title rounded-circle border border-white bg-info">J</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h5 class="text-uppercase fw-bold mb-1">Joko Subianto <span class="text-warning pl-3">pending</span></h5>
											<span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">8:40 PM</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-offline">
											<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h5 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span class="text-success pl-3">open</span></h5>
											<span class="text-muted">I have some query regarding the license issue.</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">1 Day Ago</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-away">
											<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h5 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span class="text-muted pl-3">closed</span></h5>
											<span class="text-muted">Is there any update plan for RTL version near future?</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">2 Days Ago</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-offline">
											<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h5 class="text-uppercase fw-bold mb-1">Peter Parker <span class="text-success pl-3">open</span></h5>
											<span class="text-muted">I have some query regarding the license issue.</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">2 Day Ago</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-away">
											<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h5 class="text-uppercase fw-bold mb-1">Logan Paul <span class="text-muted pl-3">closed</span></h5>
											<span class="text-muted">Is there any update plan for RTL version near future?</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">2 Days Ago</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!-- End Main Content -->
	</div>
</body>

</html>