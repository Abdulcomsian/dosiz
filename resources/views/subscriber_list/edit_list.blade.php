@extends('layout.mainlayout_admin')
@section('title')
Edit Subscriber Category 
@endsection
@section('content')		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Edit Subscriber Category</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Edit Subscriber Category</li>
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
											<form action="{{ route('subscribe_list.update',$subscriber_list->id) }}" method="post">
												@method('PUT')
                								@csrf
					                            <div class="form-group">
					                                <label>Name</label>
					                                <input class="form-control" type="text" name="name" id="name" value="{{ $subscriber_list->name }}" placeholder="Enter Name">
					                                <input type="hidden" name="id" id="id" value="{{ $subscriber_list->id }}">
					                                <div style="color:red;">{{$errors->first('name')}}</div> <br>
					                            </div>
					                            
					                            <div class="m-t-20 text-center">
					                                <button class="btn btn-primary btn-lg">Publish Subscriber Category</button>
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