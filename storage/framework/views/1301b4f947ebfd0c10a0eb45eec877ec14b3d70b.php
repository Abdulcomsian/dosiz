
<?php echo $__env->make('layouts.sweetalert.sweetalert_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>		

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Sub Categories</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Sub Categories</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<?php if(Auth::user()->hasRole('Admin')): ?>
									<a href="<?php echo e(route('sub_category.create')); ?>" class="btn btn-primary">Add New <i class="fa fa-plus"></i></a><br><br>
									<?php endif; ?>
									<?php if(session()->has('message')): ?>
					                	<div class="alert alert-success">
					                  		<?php echo e(session('message')); ?>

					                  	</div><br><br>
					              	<?php endif; ?>
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Category Name</th>
													<th>Sub Category Name</th>
													<th>Sub Category Slug</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php if(count($sub_categories) > 0): ?>
												<tr>
													<?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<td>
														<?php echo e($sub_category->name); ?>

													</td>
													<td>
														<?php echo e($sub_category->category->name); ?>

													</td>
													<td><?php echo e($sub_category->sub_category_slug); ?></td>

													<td class="text-right">
														<div class="actions" style="display:flex;">
															<a href="<?php echo e(route('sub_category.edit',$sub_category->id)); ?>" style="height: 33px; margin-left: 10px" class="btn btn-sm bg-success-light edit-sub-category"><i class="fe fe-pencil"></i> Edit</a>
															<form method="POST" action="<?php echo e(route('sub_category.destroy', $sub_category->id)); ?>"  id="form_<?php echo e($sub_category->id); ?>" >
							                                    <?php echo method_field('Delete'); ?>
							                                    <?php echo csrf_field(); ?>

							                                    <button type="submit" id="<?php echo e($sub_category->id); ?>" class="confirm btn btn-sm bg-danger-light btn-active-color-primary btn-sm">
							                                        <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
							                                     <i class="fe fe-trash"></i> Delete
							                                        <!--end::Svg Icon-->
							                                    </button>
							                                </form>
															
														</div>
													</td>
												</tr>
												 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php else: ?>
												<tr>
						                        <td colspan="3" style="text-align: center;"><strong> No Sub Category </strong></td>
						                      </tr>
						                      <?php endif; ?>
						                    <tbody>
						                      
						                     
										</table>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
      
		
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php echo $__env->make('layouts.sweetalert.sweetalert_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<script type="text/javascript">
		
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\dosiz\resources\views/admin/sub_category/index.blade.php ENDPATH**/ ?>