@extends('layout.mainlayout_admin')
@section('content')	
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Product</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
									<li class="breadcrumb-item active">Product</li>
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
														<th>Product Name</th>
														<th>Product Slug</th>
														<th>Product Category</th>
														<th>Product Sub Category</th>
														<th>Product Price</th>
														<th>Product Description</th>
														<th>Product Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>{{$product->name}}</td>
														<td>{{$product->product_slug}}</td>
														<td>{{$product->category->name}}</td>
														<td>{{$product->sub_category->name}}</td>
														<td>{{$product->price}}</td>
														<td>{!! $product->description !!}</td>
														<td>{{$product->status}}</td>
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
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Feature Image</span> 
													</h5>
													<div class="row">
														<img src="{{asset($product->image)}}" width="100px" height="100px"><br>
													</div>
													<div class="table-responsive">
														<table class="table table-hover table-center">
															<thead>
																<tr>
																	<th>Product Images</th>
																</tr>
															</thead>
															<tbody>
																
																<tr>
																	@foreach($product->images as $all)
																	
																	<td><img src="{{asset($all)}}" width="200px" height="200px"></td>
																</tr>
																@endforeach
										                    <tbody>
										                </table>
													</div>
												</div>
											</div>
										</div>
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