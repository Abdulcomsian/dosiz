@extends('layout.mainlayout_admin')
@section('title')
Add Product 
@endsection
@section('content')		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Product</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Product</li>
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
											<form action="{{ route('product.store') }}" enctype="multipart/form-data" method="post">
                								@csrf
					                            <div class="form-group">
					                                <label>Product Name</label>
					                                <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name">
					                                <div style="color:red;">{{$errors->first('name')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Product Slug</label>
					                                <input class="form-control" type="text" name="product_slug" id="product_slug" placeholder="Enter Product Slug">
					                                <div style="color:red;">{{$errors->first('product_slug')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Product Feature Image</label>
					                                <div>
					                                    <input class="form-control" type="file" name="image" id="image">
					                                    <div style="color:red;">{{$errors->first('image')}}</div> <br>
					                                    
					                                </div>
					                            </div>

					                            <div class="row">
						                            <div class="col-6">
						                                <label>Product Orignal Price From</label>
						                                <div>
						                                    <input class="form-control" type="number" name="old_from_price" id="old_from_price" placeholder="Enter Orignal Price From">
						                                    <div style="color:red;">{{$errors->first('old_from_price')}}</div> <br>
						                                    
						                                </div>
						                            </div>
					                            
						                            <div class="col-6">
						                                <label>Product Orignal Price to</label>
						                                <div>
						                                    <input class="form-control" type="number" name="old_to_price" id="old_to_price" placeholder="Enter Orignal Price To">
						                                    <div style="color:red;">{{$errors->first('old_to_price')}}</div> <br>
						                                    
						                                </div>
						                            </div>
						                        </div>
						                        <div class="row">
						                            <div class="col-6">
						                                <label>Product Discount Price From</label>
						                                <div>
						                                    <input class="form-control" type="number" name="new_from_price" id="new_from_price" placeholder="Enter Discount Price From">
						                                    <div style="color:red;">{{$errors->first('new_from_price')}}</div> <br>
						                                    
						                                </div>
						                            </div>
						                        

						                            <div class="col-6">
						                                <label>Product Discount Price To</label>
						                                <div>
						                                    <input class="form-control" type="number" name="new_to_price" id="new_to_price" placeholder="Enter Discount Price To">
						                                    <div style="color:red;">{{$errors->first('new_to_price')}}</div> <br>
						                                    
						                                </div>
						                            </div>
					                            </div>

					                            <div class="uploadDiv" style="padding-left: 10px;">
					                            	<label>Product Images</label>
					                                <div class="input-images"></div>
					                                <div style="color:red;">{{$errors->first('images')}}</div> <br>
					                            </div>
					                            <!-- <div class="row">
					                                <div class="col-md-6"> -->
					                                    <div class="form-group">
					                                        <label>Category</label>
					                                        <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="category_id" id="category_id">
					                                            <option selected disabled>Select Category</option>
					                                            @if($categories)
					                                            @foreach($categories as $all)
					                                            	<option value="{{$all->id}}" {{ $category->id == $all->id ? 'selected' : 'disabled' }} >{{$all->name}}</option>
					                                            @endforeach
					                                            @endif
					                                        </select>
					                                        <div style="color:red;">{{$errors->first('category_id')}}</div> <br>
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
					                                <label>Product Description</label>
					                                <textarea cols="30" rows="6" class="form-control summernote" name="description" id="description" ></textarea>
					                                <div style="color:red;">{{$errors->first('description')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label class="display-block w-100">Product Status</label>
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
					                            </div>
					                            <div class="m-t-20 text-center">
					                                <button class="btn btn-primary btn-lg">Publish Product</button>
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