	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		<!-- Header -->
		<div class="header">


		<nav class="navbar navbar-expand-lg navbar-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
			</button>
				<a href="index_admin" class="logo logo-small">
					<img src="../assets_admin/img/logo.png" alt="Logo">
				</a>

				<!-- Notifications -->
				<!-- <li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="../assets_admin/img/user/user.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Jonathan Doe</span> Schedule <span class="noti-title">his appointment</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="../assets_admin/img/user/user1.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Julie Pennington</span> has booked her appointment to <span class="noti-title">Ruby Perrin</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="../assets_admin/img/user/user2.jpg">
											</span>
											<div class="media-body">
											<p class="noti-details"><span class="noti-title">Tyrone Roberts</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
											<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="../assets_admin/img/user/user4.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Patricia Manzi</span> send a message <span class="noti-title"> to his Mentee</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="#">View all Notifications</a>
						</div>
					</div>
				</li> -->
				<!-- /Notifications -->
				
				<!-- User Menu -->
				<li class="nav-item dropdown has-arrow">
					<!-- <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img"><img class="rounded-circle" src="../assets_admin/img/profiles/avatar-12.jpg" width="31" alt="Ryan Taylor"></span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="../assets_admin/img/profiles/avatar-12.jpg" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<h6>Allen Davis</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div>
						<a class="dropdown-item" href="profile">My Profile</a>
						<a class="dropdown-item" href="settings">Settings</a>
						<a class="dropdown-item" href="login">Logout</a>
					</div> -->
					<img  src="../assets_admin/img/home.svg" alt=""><a href=""> תיבה ףד </a>
				</li>
				<li>
				<img  src="../assets_admin/img/lock.svg" alt=""><a href="">תונכרצ ןויכרא</a>
				</li>
				<li>
				<img  src="../assets_admin/img/glases.svg" alt=""><a href="">םירמאמ</a>
				</li>
				<li>
				<img  src="../assets_admin/img/mail.svg" alt=""><a href="">העידי תחילש</a>
						<a class="dropdown-item" href="{{route('logout')}}">Logout</a>
						<a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
					</div>
				</li>
				<!-- /User Menu -->
				
			</ul>
			<!-- /Header Right Menu -->
			
		</div>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<img  src="../assets_admin/img/home.svg" alt=""><a href=""> תיבה ףד </a>
					</li>
					<li class="nav-item">
						<img  src="../assets_admin/img/lock.svg" alt=""><a href="">תונכרצ ןויכרא</a>
					</li>
					<li class="nav-item">
						<img  src="../assets_admin/img/glases.svg" alt=""><a href="">םירמאמ</a>
					</li>
					<li class="nav-item">
						<img  src="../assets_admin/img/mail.svg" alt=""><a href="">העידי תחילש</a>
					</li>
				</ul>
			</div>
			</nav>
</div>
		<!-- </div> -->
		<!-- /Header -->