
<?php $__env->startSection('content'); ?>		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Edit Sub Category</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
									<li class="breadcrumb-item active">Edit Sub Category</li>
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
											<form action="<?php echo e(route('sub_category.update',$sub_category->id)); ?>" method="post">
												<?php echo method_field('PUT'); ?>
                								<?php echo csrf_field(); ?>
                								<input id="id" name="id" value="<?php echo e($sub_category->id); ?>" type="hidden">
					                            <div class="form-group">
			                                        <label>Category</label>
			                                        <select class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true" name="category_id" id="category_id">
			                                            <option selected disabled>Select Category</option>
			                                            <?php if($categories): ?>
			                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                                            	<option value="<?php echo e($category->id); ?>" <?php echo e($sub_category->category_id == $category->id ? 'selected' : ''); ?> ><?php echo e($category->name); ?></option>
			                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                                            <?php endif; ?>
			                                        </select>
			                                        <div style="color:red;"><?php echo e($errors->first('category_id')); ?></div> <br>
			                                    </div>
					                            <div class="form-group">
					                                <label>Sub Category Name</label>
					                                <input class="form-control" id="name" name="name" value="<?php echo e($sub_category->name); ?>" placeholder="Enter Sub Category Name" type="text">
			                                        <div style="color:red;"><?php echo e($errors->first('name')); ?></div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Sub Category Slug</label>
					                                <input class="form-control" id="sub_category_slug" value="<?php echo e($sub_category->sub_category_slug); ?>" name="sub_category_slug" placeholder="Enter Sub Category Slug" type="text">
					                                <div style="color:red;"><?php echo e($errors->first('sub_category_slug')); ?></div> <br>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\dosiz\resources\views/admin/sub_category/edit_sub_category.blade.php ENDPATH**/ ?>