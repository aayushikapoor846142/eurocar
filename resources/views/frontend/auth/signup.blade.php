@extends('layouts.app')

@push('styles')
    <style>
        .user-welcome-bar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            font-size: 14px;
        }
        .user-welcome-bar .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .welcome-message {
            font-weight: 500;
            color: #333;
        }
        .btn-outline-danger {
            color: #dc3545;
            border-color: #dc3545;
            padding: 0.25rem 0.75rem;
            font-size: 0.875rem;
        }
        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }
        .feather-log-out {
            width: 16px;
            height: 16px;
            margin-right: 5px;
            vertical-align: text-top;
        }
    </style>
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- WOW ANIMATION STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- LC LIGHT BOX POPUP -->
    <link rel="stylesheet" href="{{ asset('assets/css/lc_lightbox.css') }}">
    <!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- SWIPER Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- DATETIMEPICKER STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@section('content')
     @include('frontend.partials.header')
     
     @auth
     <div class="user-welcome-bar">
         <div class="container">
             <div class="d-flex justify-content-between align-items-center py-2">
                 <div class="welcome-message">
                     Welcome, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!
                 </div>
                 <form method="POST" action="{{ route('logout') }}" class="d-inline">
                     @csrf
                     <button type="submit" class="btn btn-sm btn-outline-danger">
                         <i class="feather-log-out"></i> Logout
                     </button>
                 </form>
             </div>
         </div>
     </div>
     @endauth

<div class="signin-page p-t80 p-b80 site-bg-white">
		<div class="container">

			<div class="signup-form">
				<div class="row">
					<div class="col-md-6  offset-md-3">
						<div class="request-form contact-form">
   <div class="top-text">
				<p>Don't have an account? <a class="#" href="#">Sign In Now.</a></p>
				<h5>Login to your  Europe car transfer Account!</h5>
			</div>
<div class="ftr-1a1">
								<form method="POST" action="{{ route('register') }}">
                                @csrf
							<div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">

										<label>First Name <b class="red-texts"><b class="red-texts">*</b></b></label>

										<input placeholder="Enter First Name" name="first_name" value="{{ old('first_name') }}" required autocomplete="given-name" autofocus type="text" class="form-control sdr-frs @error('first_name') is-invalid @enderror">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

									</div>
                                    </div>
                                   <div class="col-md-6">
                                    <div class="form-group">

										<label>Last Name <b class="red-texts"><b class="red-texts">*</b></b></label>

										<input placeholder="Enter Last Name" name="last_name" value="{{ old('last_name') }}" required autocomplete="family-name" type="text" class="form-control sdr-frs @error('last_name') is-invalid @enderror">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

									</div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">

										<label>Phone <b class="red-texts"><b class="red-texts">*</b></b></label>

										<input placeholder="Enter Phone Number" name="phone" value="{{ old('phone') }}" required autocomplete="tel" type="tel" class="form-control sdr-frs @error('phone') is-invalid @enderror">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

									</div>
                                    </div>
									<div class="col-md-6">
                                    <div class="form-group">
										<label>Email <b class="red-texts"><b class="red-texts">*</b></b></label>
										<input id="email" type="email" class="form-control sdr-frs @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email Address">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									</div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password<b class="red-texts">*</b></label>
                                            <input id="password" type="password" class="form-control sdr-frs @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Confirm Password<b class="red-texts">*</b></label>
                                            <input id="password-confirm" type="password" class="form-control sdr-frs" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" id="submit-btn" class="btn btn-green ftr-btn1 w-100 mb-3" value="Sign up">
                                        <p class="text-center">Already have an account? <a class="forgot" href="{{ route('login') }}">Sign In</a></p>
                                    </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>




                    </div>
                </div>
                </div>
                
            </div>   
            <!-- Contact Form SECTION END -->


 
        </div>
        @include('frontend.partials.footer')
    </div>
    
    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/lc_lightbox.lite.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    @stack('scripts')
@endsection