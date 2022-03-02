@extends('layout.mainlayout_admin')
@include('layouts.sweetalert.sweetalert_css')
@section('content')		

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Subscribers</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Subscribers</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<a href="{{route('subscribe.create')}}" class="btn btn-success">Add New <i class="fa fa-plus"></i></a>
									<a href="#" data-toggle="modal" data-target="#import_modal" class="btn btn-info">Import Excel Sheet <i class="fa fa-download"></i></a>
									<a href="{{url('dashboard/export')}}" class="btn btn-primary">Export Excel Sheet <i class="fa fa-upload"></i></a><br><br>
								<!-- <a href="{{route('sub_category.create')}}"  class="btn btn-success">Send Email To all <i class="fa fa-send"></i></a><br><br> -->
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Subscribers Name</th>
													<th>Email</th>
													<th>Phone Number</th>
													<th>User Type</th>
													<!-- <th class="text-right">Action</th> -->
												</tr>
											</thead>
											<tbody>
												@if(count($subscribers) > 0)
												<tr>
													@foreach($subscribers as $subscriber)
													<td>
														{{ $subscriber->name}}
													</td>
													<td>
														{{ $subscriber->email}}
													</td>
													<td>{{$subscriber->phone}}</td>
													<td>
														@if($subscriber->type == 1)
															Add From Landing Page
														@elseif($subscriber->type == 2)
															Manually Enter
														@elseif($subscriber->type == 3)
															Import From Excel
														@endif
													</td>

													<!-- <td class="text-right">
														<div class="actions" style="display:flex;">
															<a href="{{route('sub_category.edit',$subscriber->id)}}" style="height: 33px; margin-left: 10px" class="btn btn-sm bg-success-light edit-sub-category"><i class="fa fa-send"></i> Send Email</a>
															
															
														</div>
													</td> -->
												</tr>
												 @endforeach
												@else
												<tr>
						                        <td colspan="3" style="text-align: center;"><strong> No Sub Category </strong></td>
						                      </tr>
						                      @endif
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

			<!-- Edit Modal -->
			<div class="modal fade" id="import_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-content p-2">
								<div class="modal-header border-0">
									<h4 class="modal-title">Edit Category</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="card">
									<div class="card-body">
						                <form id="update_category" method="post" autocomplete="off" action="{{ route('import') }}" enctype="multipart/form-data" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
						                @method('POST')
						                @csrf
						                    <div class="form-group">
						                        <label>Category Name</label>
						                        <input class="form-control" type="file" value="" name="file" id="file" data-bv-field="name">
												<input class="form-control" type="hidden" value="3" name="type" id="type">
						                    </div>
						                    <div class="mt-4">
						                        <button class="btn btn-primary" name="form_submit" value="submit" type="submit">Import</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						                    </div>
						                </form>
						            </div>
						        </div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Edit Modal -->
      
		
@endsection

@section('js')
@include('layouts.sweetalert.sweetalert_js')
	<script type="text/javascript">
		
	</script>
@endsection