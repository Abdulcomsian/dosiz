@extends('layout.mainlayout')
@section('content')		
	<!-- Page Content -->
    <div class="bg-pattern-style">
				<div class="content">
							
					<!-- Account Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
								<div class="login-header">
									<h3>Forgot Password?</h3>
									<p class="text-muted">Enter your email to get a password reset link</p>
								</div>
								
								<!-- Forgot Password Form -->
								<form action="login">
									<div class="form-group">
										<label class="form-control-label">Email Address</label>
										<input type="email" class="form-control">
									</div>
									<div class="text-right">
										<a class="forgot-link" href="login">Remember your password?</a>
									</div>
									<button class="btn btn-primary login-btn" type="submit">Reset Password</button>
								</form>
								<!-- /Forgot Password Form -->
								
							</div>
						</div>
					</div>
					<!-- /Account Content -->
				</div>
			</div>		
			<!-- /Page Content -->
@endsection