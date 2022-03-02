@extends('layout.mainlayout_admin')
@section('content')		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Subscriber</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Subscriber</li>
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
											<form action="{{ route('subscriber.store') }}" method="post">
                								@csrf
					                            <div class="form-group">
			                                        <label>Name</label>
			                                        <input class="form-control" id="name" name="name" placeholder="Enter Subscriber Name" type="text">
			                                        <input class="form-control" id="type" name="type" value="2" type="hidden">
			                                        <div style="color:red;">{{$errors->first('name')}}</div> <br>
			                                    </div>
					                            <div class="form-group">
					                                <label>Email</label>
					                                <input class="form-control" id="email" name="email" placeholder="Enter Subscriber Email" type="email" autofocus>
			                                        <div style="color:red;">{{$errors->first('email')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Phone</label>
					                                <input class="form-control" id="phone" name="phone" placeholder="Enter Subscriber Phone" type="text">
					                                <div style="color:red;">{{$errors->first('phone')}}</div> <br>
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
@endsection