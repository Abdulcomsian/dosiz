@extends('layout.mainlayout_admin')
@section('title')
Add Sub Category 
@endsection
@section('content')		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Sub Category</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Sub Category</li>
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
											<form action="{{ route('sub_category.store') }}" method="post">
                								@csrf
					                            <div class="form-group">
			                                        <label>Category</label>
			                                        <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="category_id" id="category_id">
			                                            <option selected disabled>Select Category</option>
			                                            @if($categories)
			                                            @foreach($categories as $category)
			                                            	<option value="{{$category->id}}">{{$category->name}}</option>
			                                            @endforeach
			                                            @endif
			                                        </select>
			                                        <div style="color:red;">{{$errors->first('category_id')}}</div> <br>
			                                    </div>
					                            <div class="form-group">
					                                <label>Sub Category Name</label>
					                                <input class="form-control" id="name" name="name" placeholder="Enter Sub Category Name" type="text">
			                                        <div style="color:red;">{{$errors->first('name')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Sub Category Slug</label>
					                                <input class="form-control" id="sub_category_slug" name="sub_category_slug" placeholder="Enter Sub Category Slug" type="text">
					                                <div style="color:red;">{{$errors->first('sub_category_slug')}}</div> <br>
					                            </div>
					                            <div class="m-t-20 text-center">
					                                <button class="btn btn-primary btn-lg">Add Sub Category</button>
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