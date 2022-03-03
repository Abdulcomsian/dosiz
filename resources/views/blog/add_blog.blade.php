@extends('layout.mainlayout_admin')
@section('title')
Add Blog 
@endsection
@section('content')		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Blog</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Blog</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">

									<!-- Add details -->
									<div class="row">
										<div class="col-12 blog-details">
											<form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="post">
                								@csrf
					                            <div class="form-group">
					                                <label>Blog Name</label>
					                                <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name">
					                                <div style="color:red;">{{$errors->first('name')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Blog Title</label>
					                                <input class="form-control" type="text" name="title" id="title" placeholder="Enter Title">
					                                <div style="color:red;">{{$errors->first('title')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Blog Sub Title</label>
					                                <input class="form-control" type="text" name="sub_title" id="sub_title" placeholder="Enter Sub Title">
					                                <div style="color:red;">{{$errors->first('sub_title')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Blog Feature Image</label>
					                                <div>
					                                    <input class="form-control" type="file" name="image" id="image">
					                                    <div style="color:red;">{{$errors->first('image')}}</div> <br>
					                                    
					                                </div>
					                            </div>

					                            <div class="uploadDiv" style="padding-left: 10px;">
					                            	<label>Blog Images</label>
					                                <div class="input-images"></div>
					                                <div style="color:red;">{{$errors->first('images')}}</div> <br>
					                            </div>
					                            <!-- <div class="row">
					                                <div class="col-md-6"> -->
					                                    <div class="form-group">
					                                        <label>Blog Category</label>
					                                        <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="category_id" id="category_id">
					                                            <option disabled>Select Category</option>
					                                            @if($categories)
					                                            @foreach($categories as $all)
					                                            	<option value="{{$all->id}}" {{ $category->id == $all->id ? 'selected' : 'disabled' }}>{{$all->name}}</option>
					                                            @endforeach
					                                            @endif
					                                        </select>
					                                        <div style="color:red;">{{$errors->first('category_id')}}</div> <br>
					                                    </div>

					                                    <div class="form-group">
											                <label for="sub_category">Select Sub Category:</label>
											                <select name="sub_category" class="form-control" >
											                <option disabled>Sub Category</option>
															@if($sub_categories)
															@foreach($sub_categories as $all)
																<option value="{{$all->id}}">{{$all->name}}</option>
															@endforeach
															@endif
											                </select>
											            </div>

					                                <!-- </div>
					                                <div class="col-md-6">
					                                    <div class="form-group">
					                                        <label>Blog Sub Category</label>
					                                        <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true">
					                                            <option>Html</option>
					                                            <option>Css</option>
					                                            <option>Javascript</option>
					                                            <option>PHP</option>
					                                            <option>Codeignitor</option>
					                                            <option>iOS</option>
					                                            <option>Android</option>
					                                        </select>
					                                    </div>
					                                </div>
					                            </div> -->
					                            <div class="form-group">
					                                <label>Blog Description</label>
					                                <textarea cols="30" rows="6" class="form-control summernote" name="description" id="description" ></textarea>
					                                <div style="color:red;">{{$errors->first('description')}}</div> <br>
					                            </div>
					                           <!--  <div class="form-group">
					                                <label class="display-block w-100">Blog Status</label>
													<div>
														<div class="custom-control custom-radio custom-control-inline">
															<input class="custom-control-input" name="status" id="status" value="1" type="radio" checked="">
															<label class="custom-control-label" for="active">Active</label>
														</div>
														<div class="custom-control custom-radio custom-control-inline">
															<input class="custom-control-input" name="status" id="status" value="0" type="radio">
															<label class="custom-control-label" for="inactive">Inactive</label>
														</div>
														<div style="color:red;">{{$errors->first('status')}}</div> <br>
													</div>
					                            </div> -->
					                            <div class="m-t-20 text-center">
					                                <button class="btn btn-primary btn-lg">Publish Blog</button>
					                            </div>
					                        </form>
										</div>
									</div>
									<!-- /Add details -->

								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
@endsection
@section('js')
<script>
$(document).ready(function() {

	

    $('.summernote').summernote({
     });


    
  });
</script>
@endsection