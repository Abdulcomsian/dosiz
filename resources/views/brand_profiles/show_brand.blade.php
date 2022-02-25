@extends('layout.mainlayout_admin')
@section('content')	
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Brand Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
									<li class="breadcrumb-item active">Brand Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="card">
									<div class="card-body">
										
										<div class="table-responsive">
											<table class="table table-hover table-center mb-0">
												<thead>
													<tr>
														<th>Brand Profile Name</th>
														<th>Category</th>
														<th>City</th>
														<th>Owner Name</th>
														<th>Whatsapp Number</th>
														<th>Description</th>
														<th>Address</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>{{$brand_profile->brand_name}}</td>
														<td>{{$brand_profile->category->name}}</td>
														<td>{{$brand_profile->city->name}}</td>
														<td>{{$brand_profile->user->name}}</td>
														<td>{{$brand_profile->whatsapp_no}}</td>
														<td>{!! $brand_profile->description !!}</td>
														<td>{{$brand_profile->address}}</td>
														<td>{{$brand_profile->status}}</td>
													</tr>
							                    <tbody>
											</table>
										</div>
									</div>
								</div>
							</div>	

							<div class="profile-header">
								<div class="card">
									<div class="card-body">
										<h3>Brand Font</h3>
										<div class="table-responsive">
											<table class="table table-hover table-center mb-0">
												<thead>
													<tr>
														<th>Header Font</th>
														<th>Footer Font</th>
														<th>Button Font</th>
														<th>Title Font</th>
														<th>Text Font</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														@foreach($brand_profile->font as $all)
														<td>{{$all}}</td>
														@endforeach
													</tr>

													
							                    <tbody>
											</table>
										</div>
									</div>
								</div>
							</div>	

							<div class="profile-header">
								<div class="card">
									<div class="card-body">
										<h3>Brand Color</h3>
										<div class="table-responsive">
											<table class="table table-hover table-center mb-0">
												<thead>
													<tr>
														<th>Header Color</th>
														<th>Footer Color</th>
														<th>Button Color</th>
														<th>Title Color</th>
														<th>Text Color</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														@foreach($brand_profile->color as $all)
														<td>
															<input class="form-control" type="color" readonly value="{{$all}}" >
														</td>
														@endforeach
													</tr>
													
													
							                    <tbody>
											</table>
										</div>
									</div>
								</div>
							</div>	


							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
									<!-- Personal Details -->
									<div class="row">
										<!-- <div class="col-lg-12"> -->
											<!-- <div class="card"> -->
												<!-- <div class="card-body"> -->
													<div class="col-lg-6">
														<h5 class="card-title d-flex justify-content-between">
															<span>Brand Logo</span> 
														</h5>
														<img src="{{asset($brand_profile->brand_logo)}}" width="300px" height="300px"><br>
													</div>
													<div class="col-lg-6">
														<h5 class="card-title d-flex justify-content-between">
															<span>Brand Image</span> 
														</h5>
														<img src="{{asset($brand_profile->brand_image)}}" width="300px" height="300px"><br>
													</div>
												<!-- </div> -->
											<!-- </div> -->
										<!-- </div> -->
									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->
								
								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">
								
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form>
														<div class="form-group">
															<label>Old Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control">
														</div>
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->
								
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
            <!-- Edit Details Modal -->
		</div>
		<!-- /Edit Details Modal -->	
@endsection