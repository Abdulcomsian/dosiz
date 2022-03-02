@extends('layout.mainlayout_admin')
@section('title')
Add Product 
@endsection
@section('content')		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Profile Setting</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile Setting</li>
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
											<form action="{{ route('profile.store') }}" enctype="multipart/form-data" method="post">
                								@csrf
					                            <div class="form-group">
					                                <label>Name</label>
					                                <input class="form-control" type="text" value="{{$user->name}}" name="name" id="name" placeholder="Enter Name">
					                                <input class="form-control" type="hidden" value="{{$user->id}}" name="id" id="id" >
					                                <div style="color:red;">{{$errors->first('name')}}</div> <br>
					                            </div>
					                            <div class="form-group">
					                                <label>Email</label>
					                                <input class="form-control" readonly type="email" value="{{$user->email}}" name="email" id="email" placeholder="Enter Email">
					                                <div style="color:red;">{{$errors->first('email')}}</div> <br>
					                            </div>

					                            <div class="form-group">
					                                <label>phone</label>
					                                <div>
					                                    <input class="form-control" type="text" name="phone" id="phone" value="{{$user->phone}}" placeholder="Enter Mobile Number">
					                                    <div style="color:red;">{{$errors->first('phone')}}</div> <br>
					                                    
					                                </div>
						                        </div>
						                        
						                        <div class="form-group">
					                                <label>Address</label>
					                                <div>
					                                    <input class="form-control" type="text" value="{{$user->address}}" name="address" id="address" placeholder="Enter Address">
					                                    <div style="color:red;">{{$errors->first('address')}}</div> <br>
					                                    
					                                </div>
					                            </div>
					                         
			                                    <div class="form-group">
			                                        <label>Date Of Birth</label>
			                                        <input class="form-control" type="date" name="date_of_birth" value="{{$user->date_of_birth}}" id="date_of_birth" placeholder="Enter Date Of Birth">
					                                <div style="color:red;">{{$errors->first('date_of_birth')}}</div> <br>
			                                    </div>

					                             
					                            <div class="form-group">
					                                <label>Description</label>
					                                <textarea cols="30" rows="6" class="form-control summernote" name="description" id="description" >{{$user->description}}</textarea>
					                                <div style="color:red;">{{$errors->first('description')}}</div> <br>
					                            </div>
					                            <div class="m-t-20 text-center">
					                                <button class="btn btn-primary btn-lg">Update Profile</button>
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
@section('js')
<script>
$(document).ready(function() {


    $('.summernote').summernote({
     });


    
  });
</script>
@endsection