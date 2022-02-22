
<?php $__env->startSection('content'); ?>		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Product</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
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
											<form>
					                            <div class="form-group">
					                                <label>Product Name</label>
					                                <input class="form-control" type="text">
					                            </div>
					                            <div class="form-group">
					                                <label>Product Images</label>
					                                <div>
					                                    <input class="form-control" type="file">
					                                    <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png. Maximum 10 images only.</small>
					                                </div>
					                            </div>

					                            <div class="uploadDiv" style="padding-left: 10px;">
					                                <div class="input-images"></div>
					                            </div>
					                            <!-- <div class="row">
					                                <div class="col-md-6">
					                                    <div class="form-group">
					                                        <label>Blog Category</label>
					                                        <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true">
					                                            <option>Web Design</option>
					                                            <option>Web Development</option>
					                                            <option>App Development</option>
					                                        </select>
					                                    </div>
					                                </div>
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
					                                <textarea cols="30" rows="6" class="form-control summernote"></textarea>
					                            </div>
					                            <div class="form-group">
					                                <label class="display-block w-100">Product Status</label>
													<div>
														<div class="custom-control custom-radio custom-control-inline">
															<input class="custom-control-input" id="active" name="active-blog" value="active" type="radio" checked="">
															<label class="custom-control-label" for="active">Active</label>
														</div>
														<div class="custom-control custom-radio custom-control-inline">
															<input class="custom-control-input" id="inactive" name="active-blog" value="inactive" type="radio">
															<label class="custom-control-label" for="inactive">Inactive</label>
														</div>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
$(document).ready(function() {

    $('.summernote').summernote({
     });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\dosiz\resources\views/admin/product/add_product.blade.php ENDPATH**/ ?>