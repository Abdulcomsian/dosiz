
<?php $__env->startSection('content'); ?>		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Brand Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Brand Profile</li>
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
											<form action="<?php echo e(route('brand_profile.store')); ?>" enctype="multipart/form-data" method="post">
                								<?php echo csrf_field(); ?>
					                            <div class="form-group">
					                                <label>Brand Profile Name</label>
					                                <input class="form-control" type="text" name="brand_name" id="brand_name" placeholder="Enter Brand Name">
					                                <div style="color:red;"><?php echo e($errors->first('brand_name')); ?></div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Brand Profile Logo</label>
					                                <div>
					                                    <input class="form-control" type="file" name="brand_logo" id="brand_logo">
					                                    <div style="color:red;"><?php echo e($errors->first('brand_logo')); ?></div> <br>
					                                    
					                                </div>
					                            </div>
														<div class="form-group">
				                                	<label>Brand Image</label>
				                                	<div>
				                                    <input class="form-control" type="file" name="brand_image" id="brand_image">
				                                    <div style="color:red;"><?php echo e($errors->first('brand_image')); ?></div> <br>
				                                    
				                                	</div>
					                            </div>
					                            <!-- <div class="row">
					                                <div class="col-md-6"> -->
			                                    <div class="form-group">
			                                        <label>Brand Category</label>
			                                        <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="category_id" id="category_id">
			                                            <option selected disabled>Select Category</option>
			                                            <?php if($categories): ?>
			                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                                            	<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
			                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                                            <?php endif; ?>
			                                        </select>
			                                        <div style="color:red;"><?php echo e($errors->first('category_id')); ?></div> <br>
			                                    </div>

			                                    <div class="form-group">
																<label>Brand City</label>
																<select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="city_id" id="city_id">
																  <option selected disabled>Select City</option>
																  <?php if($cities): ?>
																  <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																  	<option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
																  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																  <?php endif; ?>
																</select>
		                                        	<div style="color:red;"><?php echo e($errors->first('city_id')); ?></div> <br>
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
			                                            	<option value="8px">8px</option>
			                                            	<option value="9px">9px</option>
			                                            	<option value="10px">10px</option>
			                                            	<option value="11px">11px</option>
			                                            	<option value="12px">12px</option>
			                                            	<option value="13px">13px</option>
			                                            	<option value="14px">14px</option>
			                                            	<option value="15px">15px</option>
			                                            	<option value="16px">16px</option>
			                                            	<option value="17px">17px</option>
			                                            	<option value="18px">18px</option>
			                                            	<option value="19px">19px</option>
			                                            	<option value="20px">20px</option>
			                                            	<option value="21px">21px</option>
			                                            	<option value="22px">22px</option>
			                                            	<option value="23px">23px</option>
			                                            	<option value="24px">24px</option>
			                                            	<option value="25px">25px</option>
			                                        </select>
															   <div style="color:red;"><?php echo e($errors->first('header_font')); ?></div> <br>
															</div>
															<div class="col-md-6">
																<label>Brand Header Color</label>
															   <input class="form-control" type="color" name="header_color" id="header_color">
															   <div style="color:red;"><?php echo e($errors->first('footer_color')); ?></div> <br>
															   
															</div>
														</div>
														<div class="row">
					                              <div class="col-md-6"> 
																<label>Brand Footer Font</label>
															   <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="footer_font" id="footer_font">
			                                            <option selected disabled>Select Font Size</option>
			                                            	<option value="8px">8px</option>
			                                            	<option value="9px">9px</option>
			                                            	<option value="10px">10px</option>
			                                            	<option value="11px">11px</option>
			                                            	<option value="12px">12px</option>
			                                            	<option value="13px">13px</option>
			                                            	<option value="14px">14px</option>
			                                            	<option value="15px">15px</option>
			                                            	<option value="16px">16px</option>
			                                            	<option value="17px">17px</option>
			                                            	<option value="18px">18px</option>
			                                            	<option value="19px">19px</option>
			                                            	<option value="20px">20px</option>
			                                            	<option value="21px">21px</option>
			                                            	<option value="22px">22px</option>
			                                            	<option value="23px">23px</option>
			                                            	<option value="24px">24px</option>
			                                            	<option value="25px">25px</option>
			                                        </select>
															   <div style="color:red;"><?php echo e($errors->first('footer_font')); ?></div> <br>
															   
															</div>
															<div class="col-md-6">
																<label>Brand Footer Color</label>
															   <input class="form-control" type="color" name="footer_color" id="footer_color">
															   <div style="color:red;"><?php echo e($errors->first('footer_color')); ?></div> <br>
																   
															</div>
														</div>
														<div class="row">
					                              <div class="col-md-6"> 
																<label>Brand Buttons Font</label>
															   <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="button_font" id="button_font">
			                                            <option selected disabled>Select Font Size</option>
			                                            	<option value="8px">8px</option>
			                                            	<option value="9px">9px</option>
			                                            	<option value="10px">10px</option>
			                                            	<option value="11px">11px</option>
			                                            	<option value="12px">12px</option>
			                                            	<option value="13px">13px</option>
			                                            	<option value="14px">14px</option>
			                                            	<option value="15px">15px</option>
			                                            	<option value="16px">16px</option>
			                                            	<option value="17px">17px</option>
			                                            	<option value="18px">18px</option>
			                                            	<option value="19px">19px</option>
			                                            	<option value="20px">20px</option>
			                                            	<option value="21px">21px</option>
			                                            	<option value="22px">22px</option>
			                                            	<option value="23px">23px</option>
			                                            	<option value="24px">24px</option>
			                                            	<option value="25px">25px</option>
			                                        </select>
															   <div style="color:red;"><?php echo e($errors->first('button_font')); ?></div> <br>
															   
															</div>
															<div class="col-md-6">
																<label>Brand Buttons Color</label>
															   <input class="form-control" type="color" name="button_color" id="button_color">
															   <div style="color:red;"><?php echo e($errors->first('button_color')); ?></div> <br>
															   
															</div>
														</div>
														<div class="row">
					                              <div class="col-md-6"> 
																<label>Brand Title Font</label>
															   <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="title_font" id="title_font">
			                                            <option selected disabled>Select Font Size</option>
			                                            	<option value="8px">8px</option>
			                                            	<option value="9px">9px</option>
			                                            	<option value="10px">10px</option>
			                                            	<option value="11px">11px</option>
			                                            	<option value="12px">12px</option>
			                                            	<option value="13px">13px</option>
			                                            	<option value="14px">14px</option>
			                                            	<option value="15px">15px</option>
			                                            	<option value="16px">16px</option>
			                                            	<option value="17px">17px</option>
			                                            	<option value="18px">18px</option>
			                                            	<option value="19px">19px</option>
			                                            	<option value="20px">20px</option>
			                                            	<option value="21px">21px</option>
			                                            	<option value="22px">22px</option>
			                                            	<option value="23px">23px</option>
			                                            	<option value="24px">24px</option>
			                                            	<option value="25px">25px</option>
			                                        </select>
															   <div style="color:red;"><?php echo e($errors->first('title_font')); ?></div> <br>
															</div>
															<div class="col-md-6">
																<label>Brand Title Color</label>
															   <input class="form-control" type="color" name="title_color" id="title_color">
															   <div style="color:red;"><?php echo e($errors->first('title_color')); ?></div> <br>
															   
															</div>
														</div>
														<div class="row">
					                              <div class="col-md-6"> 
																<label>Brand Text Font</label>
															   <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="text_font" id="text_font">
			                                            <option selected disabled>Select Font Size</option>
			                                            	<option value="8px">8px</option>
			                                            	<option value="9px">9px</option>
			                                            	<option value="10px">10px</option>
			                                            	<option value="11px">11px</option>
			                                            	<option value="12px">12px</option>
			                                            	<option value="13px">13px</option>
			                                            	<option value="14px">14px</option>
			                                            	<option value="15px">15px</option>
			                                            	<option value="16px">16px</option>
			                                            	<option value="17px">17px</option>
			                                            	<option value="18px">18px</option>
			                                            	<option value="19px">19px</option>
			                                            	<option value="20px">20px</option>
			                                            	<option value="21px">21px</option>
			                                            	<option value="22px">22px</option>
			                                            	<option value="23px">23px</option>
			                                            	<option value="24px">24px</option>
			                                            	<option value="25px">25px</option>
			                                        </select>
															   <div style="color:red;"><?php echo e($errors->first('text_font')); ?></div> <br>
															   
															</div>
															<div class="col-md-6">
																<label>Brand Text Color</label>
															   <input class="form-control" type="color" name="text_color" id="text_color">
															   <div style="color:red;"><?php echo e($errors->first('text_color')); ?></div> <br>
															   
															</div>
														</div>
					                            
														<div class="form-group">
														  <label>Brand Profile Description</label>
														  <textarea cols="30" rows="6" class="form-control summernote" name="description" id="description" ></textarea>
														  <div style="color:red;"><?php echo e($errors->first('description')); ?></div> <br>
														</div>
														<div class="form-group">
															<label>Brand Profile Address</label>
															<textarea cols="20" rows="2" class="form-control" name="address" id="address" ></textarea>
															<div style="color:red;"><?php echo e($errors->first('address')); ?></div> <br>
					                           </div>

					                           <div class="form-group">
															<label>Brand Whatsapp Number (Optional)</label>
															<input class="form-control" type="number" name="whatsapp_no" id="whatsapp_no">
															<div style="color:red;"><?php echo e($errors->first('address')); ?></div> <br>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
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
                     url : '<?php echo e(url("/dashboard/get_sub_category/")); ?>' +'/' +categoryID,
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\dosiz\resources\views/brand_profiles/add_brand.blade.php ENDPATH**/ ?>