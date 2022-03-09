	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		<!-- Header -->
		<div class="header cityHeader">


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
				<p class="cityName">Rawalpindi</p>
			@endif
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<form action="{{ route('cities',$brand_id) }}" method="get">
						
						<li>
							<button class="btn btn-success">עובשמ רתויב</button>
						</li>
						<li>
							<div class="searchBar">
								<select name="city" id="city">
									<option disabled>Select City</option>
									@foreach($cities as $city)
									<option value="{{$city->id}}">{{$city->name}}</option>
									@endforeach
								</select>
							</div>
						</li>
						<li>
							<select name="category" id="category">
								<option disabled>Select Category</option>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</li>
						<li>
							<p>
								<a href="">Login /</a>
								<a href="">Sign Up</a>
							</p>
						</li>
					</form>
					
				</ul>
			</div>
			</nav>
</div>
		<!-- </div> -->
		<!-- /Header -->