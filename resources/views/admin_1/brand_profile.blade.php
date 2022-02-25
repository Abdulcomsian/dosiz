@extends('layout.mainlayout_admin')
@section('content')	

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<!-- <div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Profile Details</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile Details</li>
								</ul>
							</div>
						</div>
					</div> -->
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">

									<!-- Blog details -->
									<div class="row">
										<div class="col-5 blog-details">
											<span class="course-title">Abacus Study for beginner - Part II</span>
											<div class="d-flex flex-wrap date-col">
												<span class="date"><i class="fas fa-calendar-check"></i> April 09 2020</span>
												<span class="author"><i class="fe fe-user"></i> By Andrew Dawis</span>
											</div>
                                            <div class="blog-content">
												<p>Lorem ipsum dolor incididunt uin culpa qui officia deserunt mollit anim id est laborum.</p>
												<p>Sed ut perspiciatis unde illo inventore veritatis et et dolore magnam  Quis autem vel eum iurhil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
												
												<p>At verogendi optio cumque nihil impedit qusumenda saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
											</div>
										</div>
                                        <div class="col-2 blog-details">
                                        </div>
                                        <div class="col-5 blog-details">
											<div class="blog-details-img">
												<img class="img-fluid" src="../assets_admin/img/blog/blog-01.jpg" alt="Post Image">
											</div>
											
										</div>
									</div>
									<!-- /Blog details -->

								</div>
							</div>

							<!-- Share post -->
							<!-- <div class="card">
								<div class="card-body">
									<h4>Share the post</h4>
									<ul class="share-post">
										<li>
											<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
										</li>
									</ul>
								</div>
							</div> -->
							<!-- /Share post -->

							<!-- About Author -->
                            <div class="row">
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="about-author pt-4 d-flex align-items-center">
                                                <div class="left">
                                                    <img class="rounded-circle" src="../assets_admin/img/profiles/avatar-12.jpg" width="50" alt="Ryan Taylor">
                                                </div>
                                                <div class="right">
                                                    <h5>Linda Barrett</h5>
                                                    <p>Loremad minim veniam, quisa commodo</p>
                                                    <p style="color:#7B7B7B; padding-top:20px;">ןאכ תבותכ</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="about-author pt-4 d-flex align-items-center">
                                                <div class="left">
                                                    <img class="rounded-circle" src="../assets_admin/img/profiles/avatar-12.jpg" width="50" alt="Ryan Taylor">
                                                </div>
                                                <div class="right">
                                                    <h5>Linda Barrett</h5>
                                                    <p>Lorem ipsumm ad minim veniam</p>
                                                    <p style="color:#7B7B7B; padding-top:20px;">+1234567890</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="about-author pt-4 d-flex align-items-center">
                                                <div class="left">
                                                    <img class="rounded-circle" src="../assets_admin/img/profiles/avatar-12.jpg" width="50" alt="Ryan Taylor">
                                                </div>
                                                <div class="right">
                                                    <h5>Linda Barrett</h5>
                                                    <p>Lorem ipsum dolor sit amet Utconsequat.</p>
                                                    <p style="color:#7B7B7B; padding-top:20px;">info@gmail.com</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
							<!-- /About Author -->

                            <!-- About Author -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="about-author pt-4 d-flex align-items-center">
                                            <form>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Mobile No.</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Subject</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
					                            
					                            <div class="form-group">
					                                <label>Send Message</label>
					                                <textarea cols="30" rows="6" class="form-control"></textarea>
					                            </div>
					                            
					                            <div class="m-t-20 text-center">
					                                <button class="btn btn-primary btn-lg">Send Message</button>
					                            </div>
					                        </form>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
							<!-- /About Author -->

						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->	
@endsection