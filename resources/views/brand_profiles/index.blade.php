@extends('layout.mainlayout_admin')
@include('layouts.sweetalert.sweetalert_css')
@section('content')		

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Brand Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Brand Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									@if(Auth::user()->hasRole('Brand Manager') && $brand_profile == null)
									<a href="{{route('brand_profile.create')}}" class="btn btn-primary">Add New <i class="fa fa-plus"></i></a><br><br>
									@endif
									@if(Auth::user()->hasRole('Brand Manager') && $brand_profile != null)
									<a href="{{url('brand_profile_id',$brand_profile->id)}}"  target="_blank"  class="btn btn-primary">View Website <i class="fa fa-plus"></i></a><br><br>
									@endif
									@if(session()->has('message'))
					                	<div class="alert alert-success">
					                  		{{session('message')}}
					                  	</div><br><br>
					              	@endif
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Brand Name</th>
													<th>Brand Feature Image</th>
													<th>Brand Category</th>
													<th>Brand City</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												@if($brand_profile != null)
												<tr>
													
													<td>{{ $brand_profile->brand_name ?? ''}}</td>
													
													<td> <img src="{{asset($brand_profile->brand_logo ?? '')}}" width="100px" height="100px"></td>
													<td>{{$brand_profile->category->name ?? ''}}</td>
													<td>{{$brand_profile->city->name ?? ''}}</td>

													<td class="text-right">
														<div class="actions" style="display:flex;">
															
															<a href="{{route('brand_profile.show',$brand_profile->id)}}" target="_blank" style="height: 33px; margin-left: 10px" class="btn btn-sm bg-primary-light edit-brand_profile"><i class="fe fe-eye"></i> Show</a>
															<a href="{{route('brand_profile.edit',$brand_profile->id)}}" style="height: 33px; margin-left: 10px" class="btn btn-sm bg-success-light edit-brand_profile"><i class="fe fe-pencil"></i> Edit</a>
															
															
														</div>
													</td>
												</tr>
												@else
												<tr>
						                        <td colspan="6" style="text-align: center;"><strong> No Brand Profile Created Yet </strong></td>
						                      </tr>
						                      @endif
						                    <tbody>
						                </table>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->

		
@endsection

@section('js')
@include('layouts.sweetalert.sweetalert_js')
	<script type="text/javascript">
		
	</script>
@endsection