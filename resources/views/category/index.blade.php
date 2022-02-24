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
								<h3 class="page-title">Categories</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Categories</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									@if(Auth::user()->hasRole('Brand Manager'))
									<a href="{{route('category.create')}}" class="btn btn-primary">Add New <i class="fa fa-plus"></i></a><br><br>
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
													<th>Category Name</th>
													<th>Category Slug</th>
													@if(Auth::user()->hasRole('Admin'))
													<th>Brand Manager</th>
													@endif
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												@if(count($categories) > 0)
												<tr>

													@foreach($categories as $category)
													
													<td>
														{{ $category->name}}
													</td>
													
													<td>{{$category->category_slug}}</td>
													@if(Auth::user()->hasRole('Admin'))
													<td>{{ $category->User->name}}</td>
													@endif

													<td class="text-right">
														<div class="actions" style="display:flex;">
															<a class="btn btn-sm bg-success-light edit-category" style="height: 33px; margin-left: 10px" onclick="edit_cat({{$category}})">
																<i class="fe fe-pencil"></i>
																Edit
															</a>
															<form method="POST" action="{{ route('category.destroy', $category->id) }}"  id="form_{{$category->id}}" >
							                                    @method('Delete')
							                                    @csrf()

							                                    <button type="submit" id="{{$category->id}}" class="confirm btn btn-sm bg-danger-light btn-active-color-primary btn-sm">
							                                        <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
							                                     <i class="fe fe-trash"></i> Delete
							                                        <!--end::Svg Icon-->
							                                    </button>
							                                </form>
															
														</div>
													</td>
												</tr>
												 @endforeach
												@else
												<tr>
						                        <td colspan="3" style="text-align: center;"><strong> No Category </strong></td>
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
            	
		<!-- Edit Modal -->
		<div class="modal fade" id="edit_modal" aria-hidden="true" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document" >
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-content p-2">
							<div class="modal-header border-0">
								<h4 class="modal-title">Edit Category</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="card">
								<div class="card-body">
					                <form id="update_category" method="post" autocomplete="off" action="{{ route('category.update',1) }}" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
					                @method('PUT')
					                @csrf
					                    <div class="form-group">
					                        <label>Category Name</label>
					                        <input class="form-control" type="text" value="" name="name" id="name" data-bv-field="name">
											<input class="form-control" type="hidden" value="8" name="category_id" id="category_id">
					                    </div>
					                    <div class="form-group">
					                        <label>Category Slug</label>
					                        <input class="form-control" type="text" name="category_slug" id="category_slug">
					                    </div>
					                    <div class="mt-4">
					                        <button class="btn btn-primary" name="form_submit" value="submit" type="submit">Save Changes</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					                    </div>
					                </form>
					            </div>
					        </div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Modal -->

		
@endsection

@section('js')
@include('layouts.sweetalert.sweetalert_js')
	<script type="text/javascript">
		function edit_cat(data)
		{
			$("#name").val(data['name']); 
			$("#category_slug").val(data['category_slug']); 
			$("#category_id").val(data['id']); 
			$("#edit_modal").modal();
		}
	</script>
@endsection