
<?php $__env->startSection('content'); ?>		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Edit City</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
									<li class="breadcrumb-item active">Edit City</li>
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
											<form action="<?php echo e(route('city.update',$city->id)); ?>" method="post">
												<?php echo method_field('PUT'); ?>
                								<?php echo csrf_field(); ?>
                								<input id="id" name="id" value="<?php echo e($city->id); ?>" type="hidden">
					                            
					                            <div class="form-group">
					                                <label>Sub Category Name</label>
					                                <input class="form-control" id="name" name="name" value="<?php echo e($city->name); ?>" placeholder="Enter Sub City Name" type="text">
			                                        <div style="color:red;"><?php echo e($errors->first('name')); ?></div> <br>
					                            </div>
					                            <div class="m-t-20 text-center">
					                                <button class="btn btn-primary btn-lg">Update City</button>
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
<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\dosiz\resources\views/admin/city/edit_city.blade.php ENDPATH**/ ?>