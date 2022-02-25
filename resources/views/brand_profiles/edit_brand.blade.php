@extends('layout.mainlayout_admin')
@section('content')		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Edit Brand Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Edit Brand Profile</li>
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
											<form action="{{ route('brand_profile.update',$brand_profile->id) }}" enctype="multipart/form-data" method="post">
												@method('PUT')
                								@csrf
					                            <div class="form-group">
					                                <label>Brand Profile Name</label>
					                                <input class="form-control" type="text" name="brand_name" id="brand_name" value="{{ $brand_profile->brand_name}}" placeholder="Enter Brand Name">
					                                <div style="color:red;">{{$errors->first('brand_name')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Brand Profile Logo</label>
					                                <div>
					                                    <input class="form-control" type="file" name="brand_logo" id="brand_logo">
					                                    <div style="color:red;">{{$errors->first('brand_logo')}}</div> <br>
					                                    
					                                </div>
					                            </div>
														<div class="form-group">
				                                	<label>Brand Image</label>
				                                	<div>
				                                    <input class="form-control" type="file" name="brand_image" id="brand_image">
				                                    <div style="color:red;">{{$errors->first('brand_image')}}</div> <br>
				                                    
				                                	</div>
					                            </div>
					                            <!-- <div class="row">
					                                <div class="col-md-6"> -->
			                                    <div class="form-group">
			                                        <label>Brand Category</label>
			                                        <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="category_id" id="category_id">
			                                            <option selected disabled>Select Category</option>
			                                            @if($categories)
			                                            @foreach($categories as $category)
			                                            	<option value="{{$category->id}}" {{ $brand_profile->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
			                                            @endforeach
			                                            @endif
			                                        </select>
			                                        <div style="color:red;">{{$errors->first('category_id')}}</div> <br>
			                                    </div>

			                                    <div class="form-group">
																<label>Brand City</label>
																<select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="city_id" id="city_id">
																  <option selected disabled>Select City</option>
																  @if($cities)
																  @foreach($cities as $city)
																  	<option value="{{$city->id}}" {{ $brand_profile->city_id == $city->id ? 'selected' : '' }}>{{$city->name}}</option>
																  @endforeach
																  @endif
																</select>
		                                        	<div style="color:red;">{{$errors->first('city_id')}}</div> <br>
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
					                           <div class="row">
					                              <div class="col-md-6"> 
																<label>Brand Header Font</label>
															   <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="header_font" id="header_font">
			                                            <option selected disabled>Select Font Size</option>
			                                            	<option value="8px" {{ $brand_profile->font['header_font'] == '8px' ? 'selected' : '' }}>8px</option>
			                                            	<option value="9px" {{ $brand_profile->font['header_font'] == '9px' ? 'selected' : '' }}>9px</option>
			                                            	<option value="10px" {{ $brand_profile->font['header_font'] == '10px' ? 'selected' : '' }}>10px</option>
			                                            	<option value="11px" {{ $brand_profile->font['header_font'] == '11px' ? 'selected' : '' }}>11px</option>
			                                            	<option value="12px" {{ $brand_profile->font['header_font'] == '12px' ? 'selected' : '' }}>12px</option>
			                                            	<option value="13px" {{ $brand_profile->font['header_font'] == '13px' ? 'selected' : '' }}>13px</option>
			                                            	<option value="14px" {{ $brand_profile->font['header_font'] == '14px' ? 'selected' : '' }}>14px</option>
			                                            	<option value="15px" {{ $brand_profile->font['header_font'] == '15px' ? 'selected' : '' }}>15px</option>
			                                            	<option value="16px" {{ $brand_profile->font['header_font'] == '16px' ? 'selected' : '' }}>16px</option>
			                                            	<option value="17px" {{ $brand_profile->font['header_font'] == '17px' ? 'selected' : '' }}>17px</option>
			                                            	<option value="18px" {{ $brand_profile->font['header_font'] == '18px' ? 'selected' : '' }}>18px</option>
			                                            	<option value="19px" {{ $brand_profile->font['header_font'] == '19px' ? 'selected' : '' }}>19px</option>
			                                            	<option value="20px" {{ $brand_profile->font['header_font'] == '20px' ? 'selected' : '' }}>20px</option>
			                                            	<option value="21px" {{ $brand_profile->font['header_font'] == '21px' ? 'selected' : '' }}>21px</option>
			                                            	<option value="22px" {{ $brand_profile->font['header_font'] == '22px' ? 'selected' : '' }}>22px</option>
			                                            	<option value="23px" {{ $brand_profile->font['header_font'] == '23px' ? 'selected' : '' }}>23px</option>
			                                            	<option value="24px" {{ $brand_profile->font['header_font'] == '24px' ? 'selected' : '' }}>24px</option>
			                                            	<option value="25px" {{ $brand_profile->font['header_font'] == '25px' ? 'selected' : '' }}>25px</option>
			                                        </select>
															   <div style="color:red;">{{$errors->first('header_font')}}</div> <br>
															</div>
															<div class="col-md-6">
																<label>Brand Header Color</label>
															   <input class="form-control" type="color" name="header_color" value="{{ $brand_profile->color['header_color'] }}" id="header_color">
															   <div style="color:red;">{{$errors->first('footer_color')}}</div> <br>
															   
															</div>
														</div>
														<div class="row">
					                              <div class="col-md-6"> 
																<label>Brand Footer Font</label>
															   <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="footer_font" id="footer_font">
			                                            <option selected disabled>Select Font Size</option>
			                                            	<option value="8px" {{ $brand_profile->font['footer_font'] == '8px' ? 'selected' : '' }}>8px</option>
			                                            	<option value="9px" {{ $brand_profile->font['footer_font'] == '9px' ? 'selected' : '' }}>9px</option>
			                                            	<option value="10px" {{ $brand_profile->font['footer_font'] == '10px' ? 'selected' : '' }}>10px</option>
			                                            	<option value="11px" {{ $brand_profile->font['footer_font'] == '11px' ? 'selected' : '' }}>11px</option>
			                                            	<option value="12px" {{ $brand_profile->font['footer_font'] == '12px' ? 'selected' : '' }}>12px</option>
			                                            	<option value="13px" {{ $brand_profile->font['footer_font'] == '13px' ? 'selected' : '' }}>13px</option>
			                                            	<option value="14px" {{ $brand_profile->font['footer_font'] == '14px' ? 'selected' : '' }}>14px</option>
			                                            	<option value="15px" {{ $brand_profile->font['footer_font'] == '15px' ? 'selected' : '' }}>15px</option>
			                                            	<option value="16px" {{ $brand_profile->font['footer_font'] == '16px' ? 'selected' : '' }}>16px</option>
			                                            	<option value="17px" {{ $brand_profile->font['footer_font'] == '17px' ? 'selected' : '' }}>17px</option>
			                                            	<option value="18px" {{ $brand_profile->font['footer_font'] == '18px' ? 'selected' : '' }}>18px</option>
			                                            	<option value="19px" {{ $brand_profile->font['footer_font'] == '19px' ? 'selected' : '' }}>19px</option>
			                                            	<option value="20px" {{ $brand_profile->font['footer_font'] == '20px' ? 'selected' : '' }}>20px</option>
			                                            	<option value="21px" {{ $brand_profile->font['footer_font'] == '21px' ? 'selected' : '' }}>21px</option>
			                                            	<option value="22px" {{ $brand_profile->font['footer_font'] == '22px' ? 'selected' : '' }}>22px</option>
			                                            	<option value="23px" {{ $brand_profile->font['footer_font'] == '23px' ? 'selected' : '' }}>23px</option>
			                                            	<option value="24px" {{ $brand_profile->font['footer_font'] == '24px' ? 'selected' : '' }}>24px</option>
			                                            	<option value="25px" {{ $brand_profile->font['footer_font'] == '25px' ? 'selected' : '' }}>25px</option>
			                                        </select>
															   <div style="color:red;">{{$errors->first('footer_font')}}</div> <br>
															   
															</div>
															<div class="col-md-6">
																<label>Brand Footer Color</label>
															   <input class="form-control" type="color" name="footer_color" value="{{ $brand_profile->color['footer_color'] }}" id="footer_color">
															   <div style="color:red;">{{$errors->first('footer_color')}}</div> <br>
																   
															</div>
														</div>
														<div class="row">
					                              <div class="col-md-6"> 
																<label>Brand Buttons Font</label>
															   <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="button_font" id="button_font">
			                                            <option selected disabled>Select Font Size</option>
			                                            	<option value="8px" {{ $brand_profile->font['button_font'] == '8px' ? 'selected' : '' }}>8px</option>
			                                            	<option value="9px" {{ $brand_profile->font['button_font'] == '9px' ? 'selected' : '' }}>9px</option>
			                                            	<option value="10px" {{ $brand_profile->font['button_font'] == '10px' ? 'selected' : '' }}>10px</option>
			                                            	<option value="11px" {{ $brand_profile->font['button_font'] == '11px' ? 'selected' : '' }}>11px</option>
			                                            	<option value="12px" {{ $brand_profile->font['button_font'] == '12px' ? 'selected' : '' }}>12px</option>
			                                            	<option value="13px" {{ $brand_profile->font['button_font'] == '13px' ? 'selected' : '' }}>13px</option>
			                                            	<option value="14px" {{ $brand_profile->font['button_font'] == '14px' ? 'selected' : '' }}>14px</option>
			                                            	<option value="15px" {{ $brand_profile->font['button_font'] == '15px' ? 'selected' : '' }}>15px</option>
			                                            	<option value="16px" {{ $brand_profile->font['button_font'] == '16px' ? 'selected' : '' }}>16px</option>
			                                            	<option value="17px" {{ $brand_profile->font['button_font'] == '17px' ? 'selected' : '' }}>17px</option>
			                                            	<option value="18px" {{ $brand_profile->font['button_font'] == '18px' ? 'selected' : '' }}>18px</option>
			                                            	<option value="19px" {{ $brand_profile->font['button_font'] == '19px' ? 'selected' : '' }}>19px</option>
			                                            	<option value="20px" {{ $brand_profile->font['button_font'] == '20px' ? 'selected' : '' }}>20px</option>
			                                            	<option value="21px" {{ $brand_profile->font['button_font'] == '21px' ? 'selected' : '' }}>21px</option>
			                                            	<option value="22px" {{ $brand_profile->font['button_font'] == '22px' ? 'selected' : '' }}>22px</option>
			                                            	<option value="23px" {{ $brand_profile->font['button_font'] == '23px' ? 'selected' : '' }}>23px</option>
			                                            	<option value="24px" {{ $brand_profile->font['button_font'] == '24px' ? 'selected' : '' }}>24px</option>
			                                            	<option value="25px" {{ $brand_profile->font['button_font'] == '25px' ? 'selected' : '' }}>25px</option>
			                                        </select>
															   <div style="color:red;">{{$errors->first('button_font')}}</div> <br>
															   
															</div>
															<div class="col-md-6">
																<label>Brand Buttons Color</label>
															   <input class="form-control" type="color" name="button_color" value="{{ $brand_profile->color['button_color'] }}" id="button_color">
															   <div style="color:red;">{{$errors->first('button_color')}}</div> <br>
															   
															</div>
														</div>
														<div class="row">
					                              <div class="col-md-6"> 
																<label>Brand Title Font</label>
															   <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="title_font" id="title_font">
			                                            <option selected disabled>Select Font Size</option>
			                                            	<option value="8px" {{ $brand_profile->font['title_font'] == '8px' ? 'selected' : '' }}>8px</option>
			                                            	<option value="9px" {{ $brand_profile->font['title_font'] == '9px' ? 'selected' : '' }}>9px</option>
			                                            	<option value="10px" {{ $brand_profile->font['title_font'] == '10px' ? 'selected' : '' }}>10px</option>
			                                            	<option value="11px" {{ $brand_profile->font['title_font'] == '11px' ? 'selected' : '' }}>11px</option>
			                                            	<option value="12px" {{ $brand_profile->font['title_font'] == '12px' ? 'selected' : '' }}>12px</option>
			                                            	<option value="13px" {{ $brand_profile->font['title_font'] == '13px' ? 'selected' : '' }}>13px</option>
			                                            	<option value="14px" {{ $brand_profile->font['title_font'] == '14px' ? 'selected' : '' }}>14px</option>
			                                            	<option value="15px" {{ $brand_profile->font['title_font'] == '15px' ? 'selected' : '' }}>15px</option>
			                                            	<option value="16px" {{ $brand_profile->font['title_font'] == '16px' ? 'selected' : '' }}>16px</option>
			                                            	<option value="17px" {{ $brand_profile->font['title_font'] == '17px' ? 'selected' : '' }}>17px</option>
			                                            	<option value="18px" {{ $brand_profile->font['title_font'] == '18px' ? 'selected' : '' }}>18px</option>
			                                            	<option value="19px" {{ $brand_profile->font['title_font'] == '19px' ? 'selected' : '' }}>19px</option>
			                                            	<option value="20px" {{ $brand_profile->font['title_font'] == '20px' ? 'selected' : '' }}>20px</option>
			                                            	<option value="21px" {{ $brand_profile->font['title_font'] == '21px' ? 'selected' : '' }}>21px</option>
			                                            	<option value="22px" {{ $brand_profile->font['title_font'] == '22px' ? 'selected' : '' }}>22px</option>
			                                            	<option value="23px" {{ $brand_profile->font['title_font'] == '23px' ? 'selected' : '' }}>23px</option>
			                                            	<option value="24px" {{ $brand_profile->font['title_font'] == '24px' ? 'selected' : '' }}>24px</option>
			                                            	<option value="25px" {{ $brand_profile->font['title_font'] == '25px' ? 'selected' : '' }}>25px</option>
			                                        </select>
															   <div style="color:red;">{{$errors->first('title_font')}}</div> <br>
															</div>
															<div class="col-md-6">
																<label>Brand Title Color</label>
															   <input class="form-control" type="color" name="title_color" value="{{ $brand_profile->color['title_color'] }}" id="title_color">
															   <div style="color:red;">{{$errors->first('title_color')}}</div> <br>
															   
															</div>
														</div>
														<div class="row">
					                              <div class="col-md-6"> 
																<label>Brand Text Font</label>
															   <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="text_font" id="text_font">
			                                            <option selected disabled>Select Font Size</option>
			                                            	<option value="8px" {{ $brand_profile->font['text_font'] == '8px' ? 'selected' : '' }}>8px</option>
			                                            	<option value="9px" {{ $brand_profile->font['text_font'] == '9px' ? 'selected' : '' }}>9px</option>
			                                            	<option value="10px" {{ $brand_profile->font['text_font'] == '10px' ? 'selected' : '' }}>10px</option>
			                                            	<option value="11px" {{ $brand_profile->font['text_font'] == '11px' ? 'selected' : '' }}>11px</option>
			                                            	<option value="12px" {{ $brand_profile->font['text_font'] == '12px' ? 'selected' : '' }}>12px</option>
			                                            	<option value="13px" {{ $brand_profile->font['text_font'] == '13px' ? 'selected' : '' }}>13px</option>
			                                            	<option value="14px" {{ $brand_profile->font['text_font'] == '14px' ? 'selected' : '' }}>14px</option>
			                                            	<option value="15px" {{ $brand_profile->font['text_font'] == '15px' ? 'selected' : '' }}>15px</option>
			                                            	<option value="16px" {{ $brand_profile->font['text_font'] == '16px' ? 'selected' : '' }}>16px</option>
			                                            	<option value="17px" {{ $brand_profile->font['text_font'] == '17px' ? 'selected' : '' }}>17px</option>
			                                            	<option value="18px" {{ $brand_profile->font['text_font'] == '18px' ? 'selected' : '' }}>18px</option>
			                                            	<option value="19px" {{ $brand_profile->font['text_font'] == '19px' ? 'selected' : '' }}>19px</option>
			                                            	<option value="20px" {{ $brand_profile->font['text_font'] == '20px' ? 'selected' : '' }}>20px</option>
			                                            	<option value="21px" {{ $brand_profile->font['text_font'] == '21px' ? 'selected' : '' }}>21px</option>
			                                            	<option value="22px" {{ $brand_profile->font['text_font'] == '22px' ? 'selected' : '' }}>22px</option>
			                                            	<option value="23px" {{ $brand_profile->font['text_font'] == '23px' ? 'selected' : '' }}>23px</option>
			                                            	<option value="24px" {{ $brand_profile->font['text_font'] == '24px' ? 'selected' : '' }}>24px</option>
			                                            	<option value="25px" {{ $brand_profile->font['text_font'] == '25px' ? 'selected' : '' }}>25px</option>
			                                        </select>
															   <div style="color:red;">{{$errors->first('text_font')}}</div> <br>
															   
															</div>
															<div class="col-md-6">
																<label>Brand Text Color</label>
															   <input class="form-control" type="color" name="text_color" value="{{ $brand_profile->color['text_color'] }}" id="text_color">
															   <div style="color:red;">{{$errors->first('text_color')}}</div> <br>
															   
															</div>
														</div>
					                            
														<div class="form-group">
														  <label>Brand Profile Description</label>
														  <textarea cols="30" rows="6" class="form-control summernote" name="description" id="description" >{{ $brand_profile->description }}</textarea>
														  <div style="color:red;">{{$errors->first('description')}}</div> <br>
														</div>
														<div class="form-group">
															<label>Brand Profile Address</label>
															<textarea cols="20" rows="2" class="form-control" name="address" id="address" >{{ $brand_profile->address }}</textarea>
															<div style="color:red;">{{$errors->first('address')}}</div> <br>
					                           </div>

					                           <div class="form-group">
															<label>Brand Whatsapp Number (Optional)</label>
															<input class="form-control" type="number" name="whatsapp_no" value="{{ $brand_profile->whatsapp_no }}" id="whatsapp_no">
															<div style="color:red;">{{$errors->first('address')}}</div> <br>
					                           </div>
					                            
					                            <div class="m-t-20 text-center">
					                                <button class="btn btn-primary btn-lg">Publish Brand Profile</button>
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


    
  });
</script>
@endsection