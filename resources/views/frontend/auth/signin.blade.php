@extends('layouts.app')

@push('styles')
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

<div class="signin-page p-t80 p-b80 site-bg-white">
    <div class="container">

        <div class="signup-form">
            <div class="row">
                <div class="col-md-6 offset-md-3">

                    <div class="request-form contact-form">

                        <div class="top-text">
                            <p>Don't have an account? 
                                <a class="signup" href="{{ url('signup') }}">Sign up Now.</a>
                            </p>
                            <h5>Login to your Europe Car Transfer Account!</h5>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label>Email <span class="red-texts">*</span></label>
                                <input id="email" type="email" class="form-control sdr-frs @error('email') is-invalid @enderror" 
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                                       placeholder="Enter Email Address">
                                @error('email')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Password <span class="red-texts">*</span></label>
                                <input id="password" type="password" class="form-control sdr-frs @error('password') is-invalid @enderror" 
                                       name="password" required autocomplete="current-password" 
                                       placeholder="Enter Password">
                                @error('password')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" id="submit-btn" class="btn btn-green ftr-btn1 w-100">
                                    {{ __('Sign In') }}
                                </button>
                            </div>

                            <div class="text-center">
                                <p>or <a class="forgot" href="{{ url('password/request') }}">Forgot Password?</a></p>
                            </div>

                            <div class="form-group">
                                <a href="/login/google" class="btn btn-green ftr-btn1 account-btn">
                                    <div class="d-flex items-center gap-2">
                                        <svg width="16" height="16" viewBox="-3 0 262 262">
                                            <path fill="#4285F4" d="M255.878 133.451 ..."></path>
                                        </svg>
                                        <span>Login with Google</span>
                                    </div>
                                </a>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>@include('frontend.partials.footer')
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