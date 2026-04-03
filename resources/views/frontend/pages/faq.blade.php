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
                        <h2 class="wt-title">FAQs</h2>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- INNER PAGE BANNER END -->   

    <!-- Team SECTION START -->
    <div class="section-full p-t60 p-b60 site-bg-white twm-faq-section-wrap">
        <div class="container">
              
            <div class="section-content">
                <!-- TITLE START-->
                <div class="section-head left">
                    <center><h2 class="twm-large-title site-text-dark">Frequently Asked Questions</h2></center>
                </div>
                <!-- TITLE END-->

                <div class="row twm-faq-section-1 m-b30">
                    
                    <div class="col-lg-12 col-md-12  wow fadeInDown" data-wow-delay="0.2">
                        <div class="twm-faq-info-wrap">
                            
                            <div class="twm-faq-info">
                                <div class="accordion twm-acdn" id="sf-faq-accordion">

                                    <!--One-->
                                    <div class="accordion-item">

                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ1" aria-expanded="true">
                                            How old do I need to be to rent a car?
                                        </button>

                                        <div id="FAQ1" class="accordion-collapse collapse show" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                From personalized solutions to expert execution, we prioritize quality, reliability, and customer satisfaction in everything we do. Let us be your trusted partner in achieving success.
                                            </div>
                                        </div>
                                    </div>

                                    <!--Two-->
                                    <div class="accordion-item">

                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ2">
                                            What types of vehicles are available for rent?
                                        </button>

                                        <div id="FAQ2" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                From personalized solutions to expert execution, we prioritize quality, reliability, and customer satisfaction in everything we do. Let us be your trusted partner in achieving success.
                                            </div>
                                        </div>
                                    </div>

                                    <!--Three-->
                                    <div class="accordion-item">

                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ3">
                                            What types of vehicles are available for rent?
                                        </button>

                                        <div id="FAQ3" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                From personalized solutions to expert execution, we prioritize quality, reliability, and customer satisfaction in everything we do. Let us be your trusted partner in achieving success.
                                            </div>
                                        </div>
                                    </div>

                                    <!--Four-->
                                    <div class="accordion-item">

                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ4">
                                            Will you let me know when my favorite cars are added to your inventory?
                                        </button>

                                        <div id="FAQ4" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                From personalized solutions to expert execution, we prioritize quality, reliability, and customer satisfaction in everything we do. Let us be your trusted partner in achieving success.
                                            </div>
                                        </div>
                                    </div>

                                    <!--Five-->
                                    <div class="accordion-item">

                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ5">
                                            How do I find the right car for my budget?
                                        </button>

                                        <div id="FAQ5" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                From personalized solutions to expert execution, we prioritize quality, reliability, and customer satisfaction in everything we do. Let us be your trusted partner in achieving success.
                                            </div>
                                        </div>
                                    </div>

                                    <!--Six-->
                                    <div class="accordion-item">

                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ6">
                                            How do I know when I need a tune up?
                                        </button>

                                        <div id="FAQ6" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                From personalized solutions to expert execution, we prioritize quality, reliability, and customer satisfaction in everything we do. Let us be your trusted partner in achieving success.
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- accordion end -->
                            </div><!-- info end -->

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Team SECTION END -->

</div>
<!-- CONTENT END -->

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
