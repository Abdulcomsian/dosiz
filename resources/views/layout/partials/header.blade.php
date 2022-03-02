	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		<!-- Header -->
		<div class="header">


		<nav class="navbar navbar-expand-lg navbar-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
			</button>
			@if(isset($brand_profile))
				<a href="{{ url('brand_profile_id',$brand_profile->id)}}" class="logo logo-small">
					<img src="{{asset($brand_profile->brand_logo) ?? '../assets_admin/img/logo.png'}} " style="width:50px; height:50px;" alt="Logo">
					
				</a>
			@else
				<a href="{{ url('/')}}" class="logo logo-small">
					<img src="../assets_admin/img/logo.png" alt="Logo">
					
				</a>
			@endif
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					@if(isset($brand_profile))
					<li class="nav-item active">
						<a href=""> תםירצומ</a>
					</li>
					<li class="nav-item">
						<a href="">םירצומה גולטק</a>
					</li>
					@else
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
						<img  src="../assets_admin/img/mail.svg" alt=""><a href="{{route('register')}}">העידי תחילש</a>
					</li>
					@endif
				</ul>
			</div>
			</nav>
</div>
		<!-- </div> -->
		<!-- /Header -->