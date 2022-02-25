@extends('layout.mainlayout')
@section('content')     

        <!-- Main Wrapper -->
        <div class="main-wrapper login-body register">
            <div class="login-wrapper">
                <div class="container">
                    <div class="loginbox">
                        <!-- <div class="login-left">
                            <img class="img-fluid" src="../assets_admin/img/logo.png" alt="Logo">
                        </div> -->
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <h1>םשריהל</h1>
                                <!-- <p class="account-subtitle">Access to our dashboard</p> -->
                                
                                <!-- Form -->
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">םש<span>*</span></label>
                                        <div class="inputIcon">
                                            <img src="{{asset('assets_admin/img/user.svg')}}" alt="">
                                            <input class="form-control" type="text" placeholder="ךמש תא ןזה" id="name" name="name" value="{{ old('name') }}">
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">אימייל<span>*</span></label>
                                        <div class="inputIcon">
                                            <img src="{{asset('assets_admin/img/email.svg')}}" alt="">
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" value="{{ old('email') }}" name="email" placeholder="ךלש לאודה תבותכ">
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- <div class="form-group">
                                        <select name="role" id="role" class="form-control">
                                          <option disabled selected>Select Role</option>
                                          @foreach($roles as $all)
                                          <option value="{{ $all->name }}">{{ $all->name }}</option>
                                          @endforeach
                                        </select>
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control @error('phone') is-invalid @enderror" type="text" id="phone" value="{{ old('phone') }}" name="phone" placeholder="Enter Phone Number">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control @error('date_of_birth') is-invalid @enderror" type="date" id="date_of_birth" value="{{ old('date_of_birth') }}" name="date_of_birth">
                                        @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control @error('address') is-invalid @enderror" type="text" id="address" value="{{ old('address') }}" name="address" placeholder="Enter Address">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control @error('address') is-invalid @enderror" placeholder="Enter Description" id="description" name="description" rows="4" cols="50" ></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> -->
                                    <div class="form-group">
                                        <label for="">סיסמה<span>* </span></label>
                                        <div class="inputIcon">
                                        <img src="{{asset('assets_admin/img/password.svg')}}" alt="">
                                            <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password">
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- <div class="form-group">
                                        
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" id="confirm_password" name="confirm_password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> -->
                                    <div class="form-group">
                                        <label for="">המסיס שדחמ סינכת<span>*</span></label>
                                        <div class="inputIcon">
                                        <img src="{{asset('assets_admin/img/password.svg')}}" alt="">
                                            <input class="form-control" type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ןופלט רפסמ<span>*</span></label>
                                        <div class="inputIcon">
                                        <img src="{{asset('assets_admin/img/mobile.svg')}}" alt="">
                                            <input class="form-control" type="text" id="" name="" placeholder="םכלש ןופלטה רפסמ תא ודילקה">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                                    </div>
                                </form>
                                <!-- /Form -->
                                
                                <!-- <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div> -->
                                
                                <!-- Social Login -->
                                <!-- <div class="social-login">
                                    <span>Register with</span>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
                                </div> -->
                                <!-- /Social Login -->
                                
                                <div class="text-center dont-have"> ?ןובשח ךל שי רבכ <a href="login">סנכיהל ידכ ןאכ ץחל</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->
        
@endsection