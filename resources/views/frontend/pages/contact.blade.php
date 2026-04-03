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
  <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr site-bg-dark  twm-primary-overlay-wrap"
                style="background-image: url('{{ asset('assets/images/banner-12.jpg') }}');">
                <div class="twm-primary-overlay"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="wt-title">{{ __('messages.contact.title') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <!-- INNER PAGE BANNER END -->   


            <!-- Contact Form SECTION START -->
           <div class="section-full p-t80 p-b80 site-bg-white twm-contact-section-wrap">

                <div class="container">

                    <div class="section-content">
                        <div class="twm-contact-section">
                            <div class="row">
                                
                                <div class="col-xl-7 col-lg-6 col-md-12">
                                    <div class="twm-maskingtext m-b50">
                                        <h1>{{ __('messages.contact.get_in_touch') }}</h1>
                                        <img src="{{ asset('assets/images/text-masking-pic.jpg') }}" alt="Image">
                                    </div>
                                    <div class="twm-get-info-wrap">

                                        <ul>

                                            <li>
                                                <div class="twm-get-info">
                                                    <div class="twm-media">
                                                        <i class="feather feather-phone-call"></i>
                                                    </div>
                                                    <div class="twm-content">
                                                        <p>Phone</p>
                                                        <h3 class="twm-title"><a href="tel:+421 908 535 368 ">+421 908 535 368 </a></h3>
                                                    </div>
                                                </div>
                                            </li>
            
                                            <li>
                                                <div class="twm-get-info">
                                                    <div class="twm-media">
                                                        <i class="feather feather-mail"></i>
                                                    </div>
                                                    <div class="twm-content">
                                                        <p>Email</p>
                                                        <h3 class="twm-title">
                                                            <a href="mailto:info@europecactransfer.com">
                                        info@europecactransfer.com
                                    </a></h3>
                                                    </div>
                                                </div>
                                            </li>
            
                                            <li>
                                                <div class="twm-get-info">
                                                    <div class="twm-media">
                                                        <i class="feather feather-home"></i>
                                                    </div>
                                                    <div class="twm-content">
                                                        <p>Address</p>
                                                        <h3 class="twm-title">Near Pálenica 1, 900 28 Ivanka pri Dunaji</h3>
                                                    </div>
                                                </div>
                                            </li>
            
                                        </ul>

                                        <div class="twm-social">
                                            <h3 class="twm-title">Follow us on Facebook & See our Google reviews</h3>
                                            <ul>
                                          <li><a href="https://www.facebook.com/people/Europe-Car-Transfer/100068013432295/"><i class="feather feather-facebook"></i></a></li>
                                          <li><a href="https://www.google.com/search?client=ms-android-samsung-ss&amp;sca_esv=c0b955b0d7f1ad2c&amp;sca_upv=1&amp;cs=1&amp;hl=sk&amp;tbm=lcl&amp;sxsrf=ADLYWIIjSBf1tQBV3Tcs5ohw7OrJzqDVcQ:1722853425213&amp;q=EuropeCarTransfer+Recenzie&amp;rflfq=1&amp;num=20&amp;stick=H4sIAAAAAAAAAONgkxIxNDUzMTE0tTQwsjA2sDAzMAZyNjAyvmKUci0tyi9IdU4sCilKzCtOSy1SCEpNTs2rykxdxIpHEgBgTkFLVQAAAA&amp;rldimm=15644159028308603415&amp;sa=X&amp;ved=2ahUKEwiOs6OT0d2HAxX4B9sEHYvmGAQQ9fQKegQINhAF&amp;biw=1680&amp;bih=889&amp;dpr=1#lkt=LocalPoiReviews">
                                              <img src="{{ asset('assets/images/google.png') }}" alt="Google" width="55px" height="55px">
                                              Google reviews
                                          </a></li>
                                       </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-5 col-lg-6 col-md-12">
                                    <div class="twm-contact-page-detail">
                                        <!-- TITLE START-->
                                        <div class="section-head left ">
                                            <h2 class="twm-large-title">{{ __('messages.contact.form_title') }}</h2>
                                            <p class="p-text">{{ __('messages.contact.form_subtitle') }}
                                            </p>
                                        </div>
                                        <!-- TITLE END-->

                                        <div class="twm-contact-page-form">
                                        
        
                                            <div class="contact-form-outer">
                                                @if(session('success'))
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        {{ session('success') }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif

                                                        

                                                            @if($errors->any())
                                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                    <ul class="mb-0">
                                                                        @foreach($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                </div>
                                                            @endif

                                                            <form method="POST" action="{{ route('contact.store') }}" class="cons-contact-form">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group mb-4">
                                                                            <input name="first_name" 
                                                                                type="text" 
                                                                                class="form-control @error('first_name') is-invalid @enderror" 
                                                                                value="{{ old('first_name') }}" 
                                                                                required 
                                                                                placeholder="First Name">
                                                                            @error('first_name')
                                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group mb-4">
                                                                            <input name="last_name" 
                                                                                type="text" 
                                                                                class="form-control @error('last_name') is-invalid @enderror" 
                                                                                value="{{ old('last_name') }}" 
                                                                                required 
                                                                                placeholder="Last Name">
                                                                            @error('last_name')
                                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="form-group mb-4">
                                                                            <input name="email" 
                                                                                type="email" 
                                                                                class="form-control @error('email') is-invalid @enderror" 
                                                                                value="{{ old('email') }}" 
                                                                                required 
                                                                                placeholder="Email">
                                                                            @error('email')
                                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="form-group mb-4">
                                                                            <input name="phone" 
                                                                                type="tel" 
                                                                                class="form-control @error('phone') is-invalid @enderror" 
                                                                                value="{{ old('phone') }}" 
                                                                                required 
                                                                                placeholder="Phone">
                                                                            @error('phone')
                                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group mb-5">
                                                                            <textarea name="message" 
                                                                                    class="form-control @error('message') is-invalid @enderror" 
                                                                                    rows="3" 
                                                                                    required 
                                                                                    placeholder="Message">{{ old('message') }}</textarea>
                                                                            @error('message')
                                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12">
                                                                        <button type="submit" class="site-button dark-bg">
                                                                            <em>{{ __('messages.contact.send') }}</em>
                                                                        </button>
                                                                    </div>
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
        <!-- CONTENT END -->
                     <!--WIDE RANGE SECTION START-->
         <div class="section-full p-t20 p-b80 site-bg-white twm-w-range-section contact wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
            <div class="container">
               <!-- TITLE START-->
               <div class="section-head center ">
             
                  <h2 class="twm-large-title site-text-dark">Some useful information
                  </h2>
               </div>
               <!-- TITLE END-->
               <div class="section-content">
                  <div class="row twm-w-range-section">
                     <!--One block-->
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="twm-cntr-with-icon">
                           <div class="icon-media">
                              <i class="fa fa-ban" aria-hidden="true"></i>
                           </div>
                           <h3 class="icon-content-info"> Storno</h3>
                           <p>We understand that travel plans are subject to change and therefore we do not charge a cancellation fee within 48 hours before departure.</p>
                        </div>
                     </div>
                     <!--Two block-->
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="twm-cntr-with-icon">
                           <div class="icon-media">
                             <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                           </div>
                           <h3 class="icon-content-info"> Payment</h3>
                           <p>We charge a 10-5% advance payment (depending on the destination) in case of non-appearance by the customer - most often via IBAN or PayPal, the rest of the amount is paid after transporting the driver.</p>
                        </div>
                     </div>
                     <!--Three block-->
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="twm-cntr-with-icon">
                           <div class="icon-media">
                             <i class="fa fa-child" aria-hidden="true"></i>
                           </div>
                           <h3 class="icon-content-info">Children</h3>
                           <p>If you are traveling with children, do not forget to inform us when booking so that we can prepare child seats.</p>
                        </div>
                     </div>
                     <!--Four block-->
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="twm-cntr-with-icon">
                           <div class="icon-media">
                              <i class="fa fa-suitcase" aria-hidden="true"></i>
                           </div>
                           <h3 class="icon-content-info">Baggage</h3>
                           <p>Each passenger can have one suitcase and one hand luggage. If you are travelling with multiple luggage or excessive baggage, please let us know when booking.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
