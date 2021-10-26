<!-- Sidebar -->
<div class="sidebar">
	<div class="sidebar-background"></div>
	
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="<?php echo base_url() ?>assets/Dashboard/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<span class="text-primary font-weight-bold"> Hizrian </span>
							<span class="user-level">Administrator</span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>
					<!-- Profile Menu -->
					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#profile">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="#edit">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="#settings">
									<span class="link-collapse">Settings</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- End Profile Menu -->
				</div>
			</div>

			<ul class="nav">
				<li class="nav-item <?php if($this->uri->segment(1)=="DashboardController"){echo 'active';}?>">
					<a href="<?php echo site_url('DashboardController/index') ?>">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
						<span class="badge badge-count badge-warning">5</span>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section text-primary">Menu</h4>
				</li>

				<li class="nav-item <?php if($this->uri->segment(1)=="MahasiswaController"){echo 'active';}?>">
					<a href="<?php echo site_url('MahasiswaController/index') ?>">
						<i class="fas fa-table"></i>
						<p>CRUD</p>
					</a>
				</li>
				
				<li class="nav-item <?php if($this->uri->segment(1)=="Tugas"){echo 'active';}?>">
					<a data-toggle="collapse" href="#submenu">
						<i class="fas fa-clipboard"></i>
						<p>Tugas</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="submenu">
						<ul class="nav nav-collapse">
							<li class="<?php if($this->uri->segment(2)=="PertemuanTigaController"){echo 'active';}?>">
								<a href="<?php echo site_url('Tugas/PertemuanTigaController/index') ?>">
									<span class="sub-item">Pertemuan 3</span>
								</a>
							</li>
							<li class="<?php if($this->uri->segment(2)=="PertemuanTujuhController"){echo 'active';}?>">
								<a href="<?php echo site_url('Tugas/PertemuanTujuhController/index') ?>">
									<span class="sub-item">Pertemuan 7</span>
								</a>
							</li>
							<!-- <li>
								<a data-toggle="collapse" href="#subnav2">
									<span class="sub-item">Pertemuan 4</span>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="subnav2">
									<ul class="nav nav-collapse subnav">
										<li>
											<a href="#">
												<span class="sub-item">Level 2</span>
											</a>
										</li>
									</ul>
								</div>
							</li> -->
						</ul>
					</div>
				</li>

				<!-- <li class="nav-item">
					<a data-toggle="collapse" href="#submenu">
						<i class="fas fa-bars"></i>
						<p>Menu Levels</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="submenu">
						<ul class="nav nav-collapse">
							<li>
								<a data-toggle="collapse" href="#subnav1">
									<span class="sub-item">Level 1</span>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="subnav1">
									<ul class="nav nav-collapse subnav">
										<li>
											<a href="#">
												<span class="sub-item">Level 2</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="sub-item">Level 2</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a data-toggle="collapse" href="#subnav2">
									<span class="sub-item">Level 1</span>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="subnav2">
									<ul class="nav nav-collapse subnav">
										<li>
											<a href="#">
												<span class="sub-item">Level 2</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#">
									<span class="sub-item">Level 1</span>
								</a>
							</li>
						</ul>
					</div>
				</li> -->

			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->