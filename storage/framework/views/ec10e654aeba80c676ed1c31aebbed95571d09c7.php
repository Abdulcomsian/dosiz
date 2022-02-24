
<?php echo $__env->make('layouts.sweetalert.sweetalert_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>		

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Blogs</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Blogs</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<?php if(Auth::user()->hasRole('Brand Manager')): ?>
									<a href="<?php echo e(route('blog.create')); ?>" class="btn btn-primary">Add New <i class="fa fa-plus"></i></a><br><br>
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
													<th>Blog Name</th>
													<th>Blog Feature Image</th>
													<th>Blog Category</th>
													<th>Blog Status</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php if(count($blogs) > 0): ?>
												<tr>

													<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													
													<td><?php echo e($blog->name); ?></td>
													
													<td> <img src="<?php echo e(asset($blog->image)); ?>" width="100px" height="100px"></td>
													<td><?php echo e($blog->category_id); ?></td>
													<td><?php echo e($blog->price); ?></td>
													<td><?php echo e($blog->status); ?></td>

													<td class="text-right">
														<div class="actions" style="display:flex;">
															
															<a href="<?php echo e(route('blog.show',$blog->id)); ?>" target="_blank" style="height: 33px; margin-left: 10px" class="btn btn-sm bg-primary-light edit-blog"><i class="fe fe-eye"></i> Show</a>
															<a href="<?php echo e(route('blog.edit',$blog->id)); ?>" style="height: 33px; margin-left: 10px" class="btn btn-sm bg-success-light edit-blog"><i class="fe fe-pencil"></i> Edit</a>
															<form method="POST" action="<?php echo e(route('blog.destroy', $blog->id)); ?>"  id="form_<?php echo e($blog->id); ?>" >
							                                    <?php echo method_field('Delete'); ?>
							                                    <?php echo csrf_field(); ?>

							                                    <button type="submit" id="<?php echo e($blog->id); ?>" class="confirm btn btn-sm bg-danger-light btn-active-color-primary btn-sm">
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
						                        <td colspan="6" style="text-align: center;"><strong> No Blogs Yet </strong></td>
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
<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\dosiz\resources\views/blog/index.blade.php ENDPATH**/ ?>