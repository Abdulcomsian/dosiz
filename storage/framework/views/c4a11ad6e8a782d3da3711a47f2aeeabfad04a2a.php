
<?php echo $__env->make('layouts.sweetalert.sweetalert_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>		

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">City</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">City</li>
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
									<a href="<?php echo e(route('city.create')); ?>" class="btn btn-primary">Add New <i class="fa fa-plus"></i></a><br><br>
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
													<th>City Name</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php if(count($cities) > 0): ?>
												<tr>
													<?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<td>
														<?php echo e($city->name); ?>

													</td>

													<td class="text-right">
														<div class="actions" style="display:flex;">
															<a href="<?php echo e(route('city.edit',$city->id)); ?>" style="height: 33px; margin-left: 10px" class="btn btn-sm bg-success-light edit-sub-category"><i class="fe fe-pencil"></i> Edit</a>
															<form method="POST" action="<?php echo e(route('city.destroy', $city->id)); ?>"  id="form_<?php echo e($city->id); ?>" >
							                                    <?php echo method_field('Delete'); ?>
							                                    <?php echo csrf_field(); ?>

							                                    <button type="submit" id="<?php echo e($city->id); ?>" class="confirm btn btn-sm bg-danger-light btn-active-color-primary btn-sm">
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
						                        <td colspan="3" style="text-align: center;"><strong> No City Added Yet </strong></td>
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
<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\dosiz\resources\views/admin/city/index.blade.php ENDPATH**/ ?>