@extends('layout.mainlayout_admin')
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
											<form action="{{ route('product.update',$product) }}" enctype="multipart/form-data" method="post">
												@method('PUT')
                								@csrf
					                            <div class="form-group">
					                                <label>Product Name</label>
					                                <input class="form-control" type="text" name="name" id="name" value="{{ $product->name }}" placeholder="Enter Name">
					                                <div style="color:red;">{{$errors->first('name')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Product Slug</label>
					                                <input class="form-control" type="text" name="product_slug" id="product_slug" value="{{ $product->product_slug }}" placeholder="Enter Product Slug">
					                                <div style="color:red;">{{$errors->first('product_slug')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Product Feature Image</label>
					                                <div>
					                                    <input class="form-control" type="file" name="image" id="image">
					                                    <div style="color:red;">{{$errors->first('image')}}</div> <br>
					                                    
					                                </div>
					                            </div>

					                            <div class="form-group">
					                                <label>Product Price</label>
					                                <div>
					                                    <input class="form-control" type="number" name="price" id="price" value="{{ $product->price }}" placeholder="Enter Price">
					                                    <div style="color:red;">{{$errors->first('price')}}</div> <br>
					                                    
					                                </div>
					                            </div>

					                            <div class="uploadDiv" style="padding-left: 10px;">
					                            	<label class="active">Product Images</label>
					                                <div class="input-images-2"></div>
					                                <div style="color:red;">{{$errors->first('images')}}</div> <br>
					                            </div>
			                                    <div class="form-group">
			                                        <label>Product Category</label>
			                                        <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="category_id" id="category_id">
			                                            <option disabled>Select Category</option>
			                                            @if($categories)
			                                            @foreach($categories as $category)
			                                            	<option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' : '' }} >{{$category->name}}</option>
			                                            @endforeach
			                                            @endif
			                                        </select>
			                                        <div style="color:red;">{{$errors->first('category_id')}}</div> <br>
			                                    </div>
			                                    <div class="form-group">
									                <label for="sub_category">Select Sub Category:</label>
									                <select name="sub_category" class="form-control" >
									                <option>--Sub Category--</option>
									                @if($sub_categories)
		                                            @foreach($sub_categories as $sub_category)
		                                            	<option value="{{$sub_category->id}}" {{ $product->sub_category_id == $sub_category->id ? 'selected' : '' }} >{{$sub_category->name}}</option>
		                                            @endforeach
		                                            @endif
									                </select>
									            </div>
					                            <div class="form-group">
					                                <label>Product Description</label>
					                                <textarea cols="30" rows="6" class="form-control summernote" name="description"  value="" id="description" >{!! $product->description !!}</textarea>
					                                <div style="color:red;">{{$errors->first('description')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label class="display-block w-100">Product Status</label>
													<div>
														<div class="custom-control custom-radio custom-control-inline">
															<input class="custom-control-input" name="status" id="status" value="1" type="radio" {{ $product->status == '1' ? 'checked' : ''}}>
															<label class="custom-control-label" for="active">Active</label>
														</div>
														<div class="custom-control custom-radio custom-control-inline">
															<input class="custom-control-input" name="status" id="status" value="0" type="radio" {{ $product->status == '0' ? 'checked' : ''}}>
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

	jQuery(document).ready(function ()
    {
            jQuery('select[name="category_id"]').on('change',function(){
               var categoryID = jQuery(this).val();
               console.log(categoryID);
               if(categoryID)
               {
                  jQuery.ajax({
                     url : '{{url("/dashboard/get_sub_category/")}}' +'/' +categoryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="sub_category"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="sub_category"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="sub_category"]').empty();
               }
            });
    });

    $('.summernote').summernote({
     });
    let data=<?php echo json_encode($product->images);?>;
    console.log(data.length);
    var nietos = [];
    var obj = {};
    for(var i=0;i<data.length;i++){
    	  nietos.push({
	        id: data[i],
	        src: 'http://127.0.0.1:8000/'+data[i]+'',
	    });
    	 
    }
	console.log(nietos);
	$('.input-images-2').imageUploader({
	    preloaded:nietos,
	    
	});
  });
</script>
@endsection