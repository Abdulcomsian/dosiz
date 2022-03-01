@extends('layout.mainlayout_admin')
@include('layouts.sweetalert.sweetalert_css')
@section('title')
Blogs 
@endsection
@section('content')		

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Blogs</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Blogs</li>
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
									<a href="{{route('blog.create')}}" class="btn btn-primary">Add New <i class="fa fa-plus"></i></a><br><br>
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
													<th>Blog Name</th>
													<th>Blog Feature Image</th>
													<th>Blog Category</th>
													<th>Blog Status</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												@if(count($blogs) > 0)
												<tr>

													@foreach($blogs as $blog)
													
													<td>{{ $blog->name}}</td>
													
													<td> <img src="{{asset($blog->image)}}" width="100px" height="100px"></td>
													<td>{{$blog->category->name}}</td>
													<td>{{$blog->sub_category->name}}</td>
													<td>{{$blog->price}}</td>
													<td>{{$blog->status}}</td>

													<td class="text-right">
														<div class="actions" style="display:flex;">
															
															<a href="{{route('blog.show',$blog->id)}}" target="_blank" style="height: 33px; margin-left: 10px" class="btn btn-sm bg-primary-light edit-blog"><i class="fe fe-eye"></i> Show</a>
															<a href="{{route('blog.edit',$blog->id)}}" style="height: 33px; margin-left: 10px" class="btn btn-sm bg-success-light edit-blog"><i class="fe fe-pencil"></i> Edit</a>
															<form method="POST" action="{{ route('blog.destroy', $blog->id) }}"  id="form_{{$blog->id}}" >
							                                    @method('Delete')
							                                    @csrf()

							                                    <button type="submit" id="{{$blog->id}}" class="confirm btn btn-sm bg-danger-light btn-active-color-primary btn-sm">
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
						                        <td colspan="6" style="text-align: center;"><strong> No Blogs Yet </strong></td>
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