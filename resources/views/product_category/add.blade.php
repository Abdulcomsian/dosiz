@extends('layout.mainlayout_admin')
@section('title')
Add Product Category 
@endsection
@section('content')		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Category</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Category</li>
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
											<form action="{{ route('p_category.store') }}" method="post">
                								@csrf
					                            <div class="form-group">
					                                <label>Category Name</label>
					                                <input class="form-control" id=" category_name" name=" category_name" placeholder="Enter Category Name" type="text">
			                                        <div style="color:red;">{{$errors->first(' category_name')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Category Slug</label>
					                                <input class="form-control" id="category_slug" name="category_slug" placeholder="Enter Category Slug" type="text">
					                                <div style="color:red;">{{$errors->first('category_slug')}}</div> <br>
					                            </div>
					                            <div class="m-t-20 text-center">
					                                <button class="btn btn-primary btn-lg">Publish Product Category</button>
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