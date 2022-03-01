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
								<a href="{{url('dashboard/export')}}" class="btn btn-primary">Excel Sheet <i class="fa fa-download"></i></a><br><br>
								<!-- <a href="{{route('sub_category.create')}}"  class="btn btn-success">Send Email To all <i class="fa fa-send"></i></a><br><br> -->
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Subscribers Name</th>
													<th>Email</th>
													<th>Phone Number</th>
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
      
		
@endsection

@section('js')
@include('layouts.sweetalert.sweetalert_js')
	<script type="text/javascript">
		
	</script>
@endsection