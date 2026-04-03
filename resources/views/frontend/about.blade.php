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
    <button class="btn btn-primary" onclick="autoLoginUser('ayu846142@yopmail.com')">
        Login to Portal
    </button>
    <iframe id="iframe"
        src="https://login.mulyankangurukul.ai/home"
        width="100%"
        height="700"
    ></iframe>
    <div style="position:relative">
    <div style="position:absolute;top:0;left:0;width:100%;height:100%;background:transparent;"></div>
    </div>
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr site-bg-dark twm-primary-overlay-wrap"
        style="background-image: url('{{ asset('assets/images/banner-12.jpg') }}');">
        <div class="twm-primary-overlay"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">{{ __('messages.about.title') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <div class="section-full site-bg-light twm-abus-section-wrap wow fadeInDown" data-wow-offset="100"
        data-wow-delay="0.2" style="visibility: visible;">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12">
                    <div class="twm-abus-st2-section">
                        <div class="section-head left">
                            <div class="twm-sm-title left">{{ __('messages.about.title') }}</div>
                            <h2 class="twm-large-title site-text-dark">
                                {{ __('messages.about.company_name') }}
                            </h2>
                            <div class="section-head-detail">
                                <p> {{ __('messages.about.description') }}</p>
                                <p>{{ __('messages.about.check_offer') }}</p>
                            </div>
                            <div class="twm-inline-list2">
                                <h4>{{ __('messages.about.subtitle') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 twm-abus2-right-pic">
                    <div class="abus2-right-pic">
                        <img src="{{ asset('assets/images/car-pic1.png') }}">
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- WIDE RANGE SECTION -->
<div class="section-full p-t80 p-b80 site-bg-white twm-w-range-section-wrap wow fadeInDown" data-wow-offset="100"
    data-wow-delay="0.2">
    <div class="container">

        <div class="section-head center">
            <div class="twm-sm-title left">{{ __('messages.about.find_by_brand') }}</div>
            <h2 class="twm-large-title site-text-dark">{{ __('messages.about.wide_range') }}</h2>
        </div>

        <div class="section-content">
            <div class="row twm-w-range-section">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="twm-cntr-with-icon">
                        <div class="icon-media">
                            <img src="{{ asset('assets/images/icons/rental.png') }}" alt="">
                        </div>
                        <span class="counter">4500</span>+
                        <h3>{{ __('messages.about.client_served') }}</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="twm-cntr-with-icon">
                        <div class="icon-media">
                            <img src="{{ asset('assets/images/icons/man.png') }}" alt="">
                        </div>
                        <span class="counter">2750</span>+
                        <h3>{{ __('messages.about.happy_customers') }}</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="twm-cntr-with-icon">
                        <div class="icon-media">
                            <img src="{{ asset('assets/images/icons/car-insurance.png') }}" alt="">
                        </div>
                        <span class="counter">600</span>+
                        <h3>{{ __('messages.about.vehicle_stock') }}</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="twm-cntr-with-icon">
                        <div class="icon-media">
                            <img src="{{ asset('assets/images/icons/work-time.png') }}" alt="">
                        </div>
                        <span class="counter">12</span>+
                        <h3>{{ __('messages.about.years_experience') }}</h3>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- ADVENTURE SECTION -->
<div class="section-full p-t150 p-b120 site-bg-dark twm-step-towards-section-wrap wow fadeInDown"
    data-wow-offset="100" data-wow-delay="0.2">
    <div class="twm-half-bg-pic"
        style="background-image: url('{{ asset('assets/images/post23-copyright.jpg') }}');">
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="section-head left">
                    <div class="twm-sm-title left">{{ __('messages.about.adventure_begin') }}</div>
                    <h2 class="twm-large-title site-text-white">{{ __('messages.about.why_choose_us') }}</h2>
                </div>
            </div>
        </div>

        <div class="section-content">
            <div class="row twm-step-towards-section">

                <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                    <div class="twm-icon-style-left large-set in-dark-area">
                        <div class="twm-media">
                            <img src="{{ asset('assets/images/icons/customer-support.png') }}" alt="">
                        </div>
                        <h3>{{ __('messages.about.door_to_door') }}</h3>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                    <div class="twm-icon-style-left large-set in-dark-area">
                        <div class="twm-media">
                            <img src="{{ asset('assets/images/icons/maps.png') }}" alt="">
                        </div>
                        <h3>{{ __('messages.about.optional_stops') }}</h3>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                    <div class="twm-icon-style-left large-set in-dark-area">
                        <div class="twm-media">
                            <img src="{{ asset('assets/images/icons/time.png') }}" alt="">
                        </div>
                        <h3>{{ __('messages.about.available_24_7') }}</h3>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                    <div class="twm-icon-style-left large-set in-dark-area">
                        <div class="twm-media">
                            <img src="{{ asset('assets/images/icons/parking-area.png') }}" alt="">
                        </div>
                        <h3>{{ __('messages.about.always_on_time') }}</h3>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                    <div class="twm-icon-style-left large-set in-dark-area">
                        <div class="twm-media">
                            <img src="{{ asset('assets/images/icons/rental.png') }}" alt="">
                        </div>
                        <h3>{{ __('messages.about.clean_car') }}</h3>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                    <div class="twm-icon-style-left large-set in-dark-area">
                        <div class="twm-media">
                            <img src="{{ asset('assets/images/icons/luggae.png') }}" alt="">
                        </div>
                        <h3>{{ __('messages.about.help_luggage') }}</h3>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                    <div class="twm-icon-style-left large-set in-dark-area">
                        <div class="twm-media">
                            <img src="{{ asset('assets/images/icons/non-smoking.png') }}" alt="">
                        </div>
                        <h3>{{ __('messages.about.non_smoking') }}</h3>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                    <div class="twm-icon-style-left large-set in-dark-area">
                        <div class="twm-media">
                            <img src="{{ asset('assets/images/icons/Snacks.png') }}" alt="">
                        </div>
                        <h3>{{ __('messages.about.snacks') }}</h3>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- REVIEWS SECTION -->
<div class="section-full p-t80 site-bg-white trip-advicer_review wow fadeInDown">
    <div class="container">

        <div class="section-head center">
            <div class="twm-sm-title left">{{ __('messages.about.reviews') }}</div>
            <h2 class="twm-large-title site-text-dark">{{ __('messages.about.tripadvisor_reviews') }}</h2>
        </div>

        <div class="review-card">
            <div class="review-header">
                <img src="{{ asset('assets/images/default-avatar-2020-3.jpg') }}" alt="user">
                <div>
                    <div class="review-user">citiesin72</div>
                    <div class="review-date">June 16, 2025</div>
                </div>
            </div>
            <div class="circles">
                <div class="circle"></div><div class="circle"></div><div class="circle"></div>
                <div class="circle"></div><div class="circle"></div>
            </div>
            <div class="review-title">Great service</div>
            <div class="review-text">We used Robert’s services…</div>
        </div>

        <div class="review-card">
            <div class="review-header">
                <img src="{{ asset('assets/images/default-avatar-2020-22.jpg') }}" alt="user">
                <div>
                    <div class="review-user">Magdaléna Č</div>
                    <div class="review-date">June 22, 2025</div>
                </div>
            </div>
            <div class="circles">
                <div class="circle"></div><div class="circle"></div><div class="circle"></div>
                <div class="circle"></div><div class="circle"></div>
            </div>
            <div class="review-title">Favourite Car Transfer</div>
            <div class="review-text">My favourite Car Transfer…</div>
        </div>

        <div class="review-card">
            <div class="review-header">
                <img src="{{ asset('assets/images/default-avatar-2020-4.jpg') }}" alt="user">
                <div>
                    <div class="review-user">Devanshi S</div>
                    <div class="review-date">June 17, 2025</div>
                </div>
            </div>
            <div class="circles">
                <div class="circle"></div><div class="circle"></div><div class="circle"></div>
                <div class="circle"></div><div class="circle"></div>
            </div>
            <div class="review-title">Perfect drive to Vienna</div>
            <div class="review-text">We took a car transfer…</div>
        </div>

                <div class="view-all">
                    <a href="#" target="_blank">{{ __('messages.about.view_all_reviews') }} →</a>
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
    <script>
    

    function autoLoginUser(email) {
        alert(email);
        fetch('https://login.mulyankangurukul.ai/api/generate-login-link', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email: email,
                api_key: 'SECRET_KEY'
            })
        })
        .then(res => res.json())
        .then(data => {
            console.log(data);
            // Load inside iframe
            document.getElementById('iframe').src = data.login_url;
        });
    }
    </script>
    @stack('scripts')
@endsection