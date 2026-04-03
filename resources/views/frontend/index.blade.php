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
    <!-- LOADING AREA START -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <img class="loader-gif" src="{{ asset('assets/images/loader-car.gif') }}" alt="loader Image">
        </div>
    </div>
    <!-- LOADING AREA END -->

    <div class="page-wraper">
        
        @include('frontend.partials.header')
         <div class="page-content">
         <!--BANNER START-->
         <div class="twm-home-1-banner-wrap">
            <div class="twm-home-1-banner  bg-overlay-black"  style="background-image: url({{ asset('assets/images/slider1.jpg') }});">
               <div class="twm-banner-LR-wrap">
                  <div class="twm-banner-left">
                     <div class="twm-banner-left-info">
                        <div class="twm-banner-left-content">
                           <!-- <div class="twm-sm-title left">Premium</div> -->
                           <h2 class="twm-banner-title">
                              <em class="txt-type" data-wait="3000" data-words='["{{ __('messages.home.at_any_time') }}", "{{ __('messages.home.wide_range') }}"]'></em>
                              <span>{{ __('messages.home.cars') }}</span>
                           </h2>
                           <div class="twm-banner-search-tabs">
                              <h3 class="twm-tabs-title">
                                 {{ __('messages.home.where_to_go') }}
                              </h3>
                              <div class="twm-banner-tabs-filter">
                                 <nav>
                                    <div class="nav nav-tabs" id="nav-tab">
                                       <!-- Transfer Tab -->
                                       <div class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-Transfer">
                                          <div class="twm-tabs-bx">
                                             <div class="tabs-media">
                                                <img src="{{ asset('assets/images/tabs-icon/car.png') }}" alt="Transfer">
                                             </div>
                                             <div class="tabs-title">{{ __('messages.home.transfer') }}</div>
                                          </div>
                                       </div>
                                       <!-- Day Trip Tab -->
                                       <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-Daytrip">
                                          <div class="twm-tabs-bx">
                                             <div class="tabs-media">
                                                <img src="{{ asset('assets/images/tabs-icon/van.png') }}" alt="Day Trip">
                                             </div>
                                             <div class="tabs-title">{{ __('messages.home.day_trip') }}</div>
                                          </div>
                                       </div>
                                       <!-- Multiday Trip Tab -->
                                       <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-Multidaytrip">
                                          <div class="twm-tabs-bx">
                                             <div class="tabs-media">
                                                <img src="{{ asset('assets/images/tabs-icon/coupe.png') }}" alt="Multiday Trip">
                                             </div>
                                             <div class="tabs-title">{{ __('messages.home.multiday_trip') }}</div>
                                          </div>
                                       </div>
                                       <!-- Hourly Rental Tab -->
                                       <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-Hourly">
                                          <div class="twm-tabs-bx">
                                             <div class="tabs-media">
                                                <img src="{{ asset('assets/images/tabs-icon/minibus.png') }}" alt="Hourly Rental">
                                             </div>
                                             <div class="tabs-title">{{ __('messages.home.hourly_rental') }}</div>
                                          </div>
                                       </div>
                                    </div>
                                 </nav>
                                 <div class="tab-content" id="nav-tabContent">
                                    <!-- Transfer Detail -->
                                    <div class="tab-pane fade show active" id="nav-Transfer">
                                       <div class="twm-tabs-search-section">
                                          <form action="{{ route('cars.search') }}" method="GET">
                                             <input type="hidden" name="type" value="transfer">
                                             <div class="row">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="form-group">
                                                      <label>{{ __('messages.home.pickup_location') }}</label>
                                                      <input class="form-control" placeholder="{{ __('messages.home.type_placeholder') }}">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="form-group">
                                                      <label>{{ __('messages.home.dropoff_location') }}</label>
                                                      <input class="form-control" placeholder="{{ __('messages.home.type_placeholder') }}">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                   <div class="form-group form-group-2column-wrap twm-input-with-icon">
                                                      <label>{{ __('messages.home.pick_up_date_time') }}</label>
                                                      <div class="form-group-2column">
                                                         <div class="input-group date datepicker">
                                                            <input class="form-control" placeholder="{{ __('messages.home.date_placeholder') }}">
                                                            <span class="input-group-append input-group-addon">
                                                            <span class="input-group-text">
                                                            <i class="fa fa-solid fa-calendar-days"></i>
                                                            </span>
                                                            </span>
                                                         </div>
                                                         <div class="input-group time timepicker">
                                                            <input class="form-control" placeholder="{{ __('messages.home.time_placeholder') }}">
                                                            <span class="input-group-append input-group-addon">
                                                            <span class="input-group-text">
                                                            <i class="fa-regular fa-clock"></i>
                                                            </span>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-8">
                                                   <div class="form-group">
                                                      <label><b>{{ __('messages.home.passengers') }}</b></label>
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="adult">Adults</label>
                                                               <select class="form-select form-control" aria-label="Default select example">
                                                                  <option value="">13+ years</option>
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                  <option value="4">4</option>
                                                                  <option value="5">5</option>
                                                                  <option value="6">6</option>
                                                                  <option value="7">7</option>
                                                                  <option value="8">8</option>
                                                                  <option value="9">9</option>
                                                                  <option value="10">10</option>
                                                                  <option value="11">11</option>
                                                                  <option value="12">12</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="child">Children</label>
                                                               <select class="form-select form-control" aria-label="Default select example">
                                                                  <option value="">2-12 years</option>
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                  <option value="4">4</option>
                                                                  <option value="5">5</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="twm-tabs-search-btn">
                                                      <a href="cars-grid-4.html" class="site-button">
                                                      <em>Search</em>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <!-- Day Trip Detail -->
                                    <div class="tab-pane fade" id="nav-Daytrip">
                                       <div class="twm-tabs-search-section">
                                          <form action="{{ route('cars.search') }}" method="GET">
                                             <input type="hidden" name="type" value="daytrip">
                                             <div class="row ">
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-8">
                                                   <div class="form-group">
                                                   <label>Search the country</label>
                                                      <input class="form-control" type="text" placeholder="Enter the country">
                                                      <!-- <select class="form-select form-control" aria-label="Default select example">
                                                         <option value="">🌐 Select a country</option>
                                                         <option value="AF">🇦🇫 Afghanistan</option>
                                                         <option value="AL">🇦🇱 Albania</option>
                                                         <option value="DZ">🇩🇿 Algeria</option>
                                                         <option value="AR">🇦🇷 Argentina</option>
                                                         <option value="AU">🇦🇺 Australia</option>
                                                         <option value="AT">🇦🇹 Austria</option>
                                                         <option value="BD">🇧🇩 Bangladesh</option>
                                                         <option value="BE">🇧🇪 Belgium</option>
                                                         <option value="BR">🇧🇷 Brazil</option>
                                                         <option value="CA">🇨🇦 Canada</option>
                                                         <option value="CN">🇨🇳 China</option>
                                                         <option value="EG">🇪🇬 Egypt</option>
                                                         <option value="FR">🇫🇷 France</option>
                                                         <option value="DE">🇩🇪 Germany</option>
                                                         <option value="IN">🇮🇳 India</option>
                                                         <option value="ID">🇮🇩 Indonesia</option>
                                                         <option value="IT">🇮🇹 Italy</option>
                                                         <option value="JP">🇯🇵 Japan</option>
                                                         <option value="MX">🇲🇽 Mexico</option>
                                                         <option value="NG">🇳🇬 Nigeria</option>
                                                         <option value="PK">🇵🇰 Pakistan</option>
                                                         <option value="RU">🇷🇺 Russia</option>
                                                         <option value="SA">🇸🇦 Saudi Arabia</option>
                                                         <option value="ZA">🇿🇦 South Africa</option>
                                                         <option value="KR">🇰🇷 South Korea</option>
                                                         <option value="ES">🇪🇸 Spain</option>
                                                         <option value="SE">🇸🇪 Sweden</option>
                                                         <option value="CH">🇨🇭 Switzerland</option>
                                                         <option value="TR">🇹🇷 Turkey</option>
                                                         <option value="GB">🇬🇧 United Kingdom</option>
                                                         <option value="US">🇺🇸 United States</option>
                                                         <option value="VN">🇻🇳 Vietnam</option>
                                                      </select> -->
                                                   </div>
                                                </div>
                                                <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="form-group">
                                                      <label>Days</label>
                                                      <input class="form-control" placeholder="Type...">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="form-group">
                                                      <label>Price</label>
                                                      <input class="form-control" placeholder="Type...">
                                                   </div>
                                                </div> -->
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="twm-tabs-search-btn">
                                                      <a href="cars-grid-mulltidaytrip.html" class="site-button">
                                                      <em>Search</em>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <!-- Multiday Trip Detail -->
                                    <div class="tab-pane fade" id="nav-Multidaytrip">
                                       <div class="twm-tabs-search-section">
                                          <form action="{{ route('cars.search') }}" method="GET">
                                             <input type="hidden" name="type" value="multidaytrip">
                                             <div class="row">
                                                <div class="col-xxl-7 col-xl-7 col-lg-7 col-sm-7">
                                                    <div class="form-group">
                                                      <label>Select the city</label>
                                                      
                                                       <select class="form-select form-control" aria-label="Default select example">
                                                         @foreach($cities as $id => $name)
                                                            <option value="{{ $id }}" {{ request('city') == $id ? 'selected' : '' }}>
                                                               {{ $name }}
                                                            </option>
                                                         @endforeach

                                                      </select> 
                                                   </div>
                                                </div>
                                                <div class="col-xxl-5 col-xl-5 col-lg-5 col-sm-5">
                                                   <div class="form-group">
                                                      <label>No. of Hours</label>
                                                      <input class="form-control" name="no_of_hrs" placeholder="Type...">
                                                   </div>
                                                </div>
                                               
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-8">
                                                   <div class="form-group">
                                                      <label>Passengers</label>
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="adult">Adults</label>
                                                               <select class="form-select form-control" aria-label="Default select example">
                                                                  <option value="">13+ years</option>
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                  <option value="4">4</option>
                                                                  <option value="5">5</option>
                                                                  <option value="6">6</option>
                                                                  <option value="7">7</option>
                                                                  <option value="8">8</option>
                                                                  <option value="9">9</option>
                                                                  <option value="10">10</option>
                                                                  <option value="11">11</option>
                                                                  <option value="12">12</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="child">Children</label>
                                                               <select class="form-select form-control" aria-label="Default select example">
                                                                  <option value="">2-12 years</option>
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                  <option value="4">4</option>
                                                                  <option value="5">5</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="twm-tabs-search-btn">
                                                      <a href="#" class="site-button">
                                                      <em>Search</em>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <!-- Hourly Rental Detail -->
                                    <div class="tab-pane fade" id="nav-Hourly">
                                       <div class="twm-tabs-search-section">
                                          <form action="{{ route('cars.search') }}" method="GET">
                                             <input type="hidden" name="type" value="hourly">
                                             <div class="row">
                                                <div class="col-xxl-7 col-xl-7 col-lg-7 col-sm-7">
                                                    <div class="form-group">
                                                      <label>Select the city</label>
                                                       <select name="city" class="form-select form-control">
                                                         <option value="">🌍 All Cities</option>
                                                         @foreach($cities as $id => $name)
                                                            <option value="{{ $id }}">{{ $name }}</option>
                                                         @endforeach
                                                      </select> 
                                                   </div>
                                                </div>
                                                <div class="col-xxl-5 col-xl-5 col-lg-5 col-sm-5">
                                                   <div class="form-group">
                                                      <label>No. of Hours</label>
                                                      <input name="hours" class="form-control" placeholder="Enter hours" type="number" min="1">
                                                   </div>
                                                </div>
                                               
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12">
                                                   <div class="form-group">
                                                      <label>Vehicle Category (Optional)</label>
                                                      <select name="vehicle_category_id" class="form-select form-control">
                                                         <option value="">All Vehicle Types</option>
                                                         @foreach(\App\Models\VehicleCategory::where('is_active', true)->orderBy('sort_order')->get() as $category)
                                                            <option value="{{ $category->id }}">
                                                               {{ $category->name }} - {{ $category->vehicle_example }} ({{ $category->max_passengers }}pax, {{ $category->max_big_bags }}+{{ $category->max_small_bags }} bags)
                                                            </option>
                                                         @endforeach
                                                      </select>
                                                   </div>
                                                </div>
                                               
                                               
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="twm-tabs-search-btn">
                                                      <button type="submit" class="site-button">
                                                         <em>Search</em>
                                                      </button>
                                                   </div>
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
                  <!-- <div class="twm-banner-right">
                     <div class="twm-banner-right-section">
                         <div class="twm-banner-r-content">
                             <div class="twm-banner-r-bx">
                                 <h1 class="twm-bnr-title">Mercedes</h1>
                                 <div class="twm-banner-product-price">
                                     <div class="twm-product-name">Mercedes</div>
                                     <div class="twm-price-section">
                                         <div class="v-price" id="number_notification">$800</div>
                                         <div class="v-duration">/ Day</div>
                                     </div>
                                  </div>
                             </div>
                         </div>
                         <div class="twm-banner-media">
                             <img src="{{ asset('assets/images/main-slider/slider1/car.png') }}" alt="Car Pic">
                         </div>
                     </div>
                     </div> -->
               </div>
            </div>
         </div>
         <!--BANNER END-->
         <!--ABOUT US SECTION START-->
         <div class="section-full site-bg-white p-t60 p-b40 twm-abus-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
            <div class="container">
               <div class="row twm-abus-section">
                  <div class="col-lg-6 col-md-12">
                     <div class="twm-abus-left">
                        <div class="twm-media">
                           <img src="{{ asset('assets/images/abus-pic.jpg')}}" alt="Image">
                           <!-- <div class="twm-abus-video">
                              <a href="https://vimeo.com/337649532" class="mfp-video ">
                                  <i class="icon fa fa-play"></i>
                              </a>
                              </div> -->
                           <!-- <div class="twm-abus-year-section">
                              <div class="tem-abus-year-content">
                                  <span>Since</span>
                                  <h2 class="year-title">2016</h2>
                              </div>
                              </div> -->
                        </div>
                        <div class="twm-media2">
                           <img src="{{ asset('assets/images/car-pic1.png') }}" alt="Car Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <!-- TITLE START-->
                     <div class="section-head left aside-section">
                        <div class="twm-sm-title left">{{ __('messages.home.about_us') }}</div>
                        <h2 class="twm-large-title site-text-dark">
                           {{ __('messages.home.europe_car_transfer') }}
                        </h2>
                        <div class="section-head-detail">
                           {{ __('messages.home.about_description_1') }} <br>
                           <br>
                           {{ __('messages.home.about_description_2') }}
                        </div>
                     </div>
                     <!-- TITLE END-->
                     <!-- <div class="twm-inline-list2">
                        <ul>
                            <li><i class="fa fa-car" aria-hidden="true"></i> Renting a car with a driver</li>
                            <li><i class="fa fa-plane"></i> Airport transfer - taxi airport</li>
                            <li><i class="fa fa-city"></i> Urban transport</li>
                            <li><i class="fa fa-sun"></i> Holiday Transports &amp; Service Shuttles</li>
                            <li><i class="fa fa-city"></i> Travel packages across Europe</li>
                            <li><i class="fa fa-taxi"></i> Multi-day tours - Roundtrip - Daytrip</li>
                            <li><i class="fa fa-skiing"></i> Ski transfers (between ski resorts or from/to the airport)</li>
                            <li><i class="fa fa-taxi"></i> Personal chauffeur services (hours)</li> 
                        </ul>
                        </div> -->
                     <div class="section-head-detail">
                        <h4>{{ __('messages.home.long_distance_driver') }}</h4>
                        <br>
                     </div>
                     <div class="twm-btn-left">
                        <a href="about-us.html" class="site-button">
                        <em>{{ __('messages.home.read_more') }}</em>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--ABOUS US SECTION END-->
         <!--WIDE RANGE SECTION START-->
         <div class="section-full p-t60 p-b60 site-bg-white twm-w-range-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
            <div class="container">
               <!-- TITLE START-->
               <div class="section-head center ">
                  <div class="twm-sm-title left">{{ __('messages.home.find_by_brand') }}</div>
                  <h2 class="twm-large-title site-text-dark">{{ __('messages.home.wide_range_title') }}
                  </h2>
               </div>
               <!-- TITLE END-->
               <div class="section-content">
                  <div class="row twm-w-range-section">
                     <!--One block-->
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="twm-cntr-with-icon">
                           <div class="icon-media">
                              <img src="{{ asset('assets/images/icons/rental.png') }}" alt="Client Service">
                           </div>
                           <span class="counter">4500</span> <em class="symble">+</em>
                           <h3 class="icon-content-info">{{ __('messages.home.client_served') }}</h3>
                        </div>
                     </div>
                     <!--Two block-->
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="twm-cntr-with-icon">
                           <div class="icon-media">
                              <img src="{{ asset('assets/images/icons/man.png') }}" alt="Happy Customer">
                           </div>
                           <span class="counter">2750</span> <em class="symble">+</em>
                           <h3 class="icon-content-info">{{ __('messages.home.happy_customers') }}</h3>
                        </div>
                     </div>
                     <!--Three block-->
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="twm-cntr-with-icon">
                           <div class="icon-media">
                              <img src="{{ asset('assets/images/icons/car-insurance.png') }}" alt="Vehicle Stock">
                           </div>
                           <span class="counter">600</span> <em class="symble">+</em>
                           <h3 class="icon-content-info">{{ __('messages.home.vehicle_stock') }}</h3>
                        </div>
                     </div>
                     <!--Four block-->
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="twm-cntr-with-icon">
                           <div class="icon-media">
                              <img src="{{ asset('assets/images/icons/work-time.png') }}" alt="Experience">
                           </div>
                           <span class="counter">12</span> <em class="symble">+</em>
                           <h3 class="icon-content-info">{{ __('messages.home.years_experience') }}</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--WIDE RANGE SECTION END-->
         <!----what people looking for-->
         <div class="section-full p-t20 p-b60 site-bg-white looking-box wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
            <div class="container">
               <div class="section-head center ">
                  <div class="twm-sm-title left">{{ __('messages.home.find_by_brand') }}</div>
                  <h2 class="twm-large-title site-text-dark">{{ __('messages.home.what_people_looking') }}
                  </h2>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <div class="service-box">
                        <div class="sr-img">
                           <img src="{{ asset('assets/images/location-1.jpg') }}" alt="Location">
                        </div>
                        <div class="sr-info">
                           <h3>{{ __('messages.home.top_routes_from') }} <span>Prague</span></h3>
                           <ul>
                              <li>
                                 <a href="#">
                                    <p>Karlovy Vary</p>
                                    <p>127 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Cesky Krumlov</p>
                                    <p>172 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Brno</p>
                                    <p>207 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Vienna</p>
                                    <p>330 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Berlin</p>
                                    <p>350 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Salzburg</p>
                                    <p>376 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Munich</p>
                                    <p>380 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Budapest</p>
                                    <p>525 km</p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="service-box">
                        <div class="sr-img">
                           <img src="{{ asset('assets/images/brno-location.jpg') }}" alt="Brno Location">
                        </div>
                        <div class="sr-info">
                           <h3>{{ __('messages.home.top_routes_from') }} <span>Brno</span></h3>
                           <ul>
                              <li>
                                 <a href="#">
                                    <p>Bratislava</p>
                                    <p>130 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Vienna</p>
                                    <p>137 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Prague</p>
                                    <p>207 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Graz</p>
                                    <p>325 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Budapest</p>
                                    <p>326 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Krakow</p>
                                    <p>330 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Munich</p>
                                    <p>538 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Berlin</p>
                                    <p>550 km</p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="service-box">
                        <div class="sr-img">
                           <img src="{{ asset('assets/images/vienna-location.jpg') }}" alt="Vienna Location">
                        </div>
                        <div class="sr-info">
                           <h3>{{ __('messages.home.top_routes_from') }} <span>Vienna</span></h3>
                           <ul>
                              <li>
                                 <a href="#">
                                    <p>Brno</p>
                                    <p>137 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Cesky Krumlov</p>
                                    <p>206 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Budapest</p>
                                    <p>244 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Salzburg</p>
                                    <p>299 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Prague</p>
                                    <p>330 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Munich</p>
                                    <p>402 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Karlovy Vary</p>
                                    <p>465 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Berlin</p>
                                    <p>684 km</p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="service-box">
                        <div class="sr-img">
                           <img src="{{ asset('assets/images/munich-location.jpg') }}" alt="Munich Location">
                        </div>
                        <div class="sr-info">
                           <h3>Top routes from <span>Munich</span></h3>
                           <ul>
                              <li>
                                 <a href="#">
                                    <p>Salzburg</p>
                                    <p>159 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Nuremberg</p>
                                    <p>170 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Zurich</p>
                                    <p>312 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Prague</p>
                                    <p>381 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Vienna</p>
                                    <p>402 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Dresden</p>
                                    <p>460 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Berlin</p>
                                    <p>590 km</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <p>Budapest</p>
                                    <p>652 km</p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!----end what people looking for-->
         <!--LET'S YOUR ADVENTURE SECTION START-->
         <div class="section-full p-t150 p-b120 site-bg-dark twm-step-towards-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
            <div class="twm-half-bg-pic" style="background-image: url({{ asset('assets/images/post23-copyright.jpg') }});"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <!-- TITLE START-->
                     <div class="section-head left">
                        <div class="twm-sm-title left">{{ __('messages.home.one_step_adventure') }}</div>
                        <h2 class="twm-large-title site-text-white">{{ __('messages.home.why_choose_us') }}</h2>
                     </div>
                     <!-- TITLE END-->
                  </div>
               </div>
               <div class="section-content">
                  <div class="row twm-step-towards-section">
                     <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                        <div class="twm-icon-style-left large-set in-dark-area">
                           <div class="twm-media">
                              <img src="{{ asset('assets/images/icons/customer-support.png') }}" alt="Customer Support">
                           </div>
                           <div class="twm-content">
                              <h3 class="twm-title">Door-to-door service</h3>
                              <!-- <p>Incredible prices on every car, van, bike 
                                 and package worldwide Book vehicles at 
                                 incredible prices worldwide
                                 </p> -->
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                        <div class="twm-icon-style-left large-set in-dark-area">
                           <div class="twm-media">
                              <img src="{{ asset('assets/images/icons/maps.png') }}" alt="Maps">
                           </div>
                           <div class="twm-content">
                              <h3 class="twm-title">Optional stops by road</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                        <div class="twm-icon-style-left large-set in-dark-area">
                           <div class="twm-media">
                              <img src="{{ asset('assets/images/icons/time.png') }}" alt="24/7 Service">
                           </div>
                           <div class="twm-content">
                              <h3 class="twm-title">We are at your disposal 24 hours a day, 365 days of the year</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                        <div class="twm-icon-style-left large-set in-dark-area">
                           <div class="twm-media">
                              <img src="{{ asset('assets/images/icons/parking-area.png') }}" alt="On Time Service">
                           </div>
                           <div class="twm-content">
                              <h3 class="twm-title">Always on time</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                        <div class="twm-icon-style-left large-set in-dark-area">
                           <div class="twm-media">
                              <img src="{{ asset('assets/images/icons/rental.png') }}" alt="Car Rental">
                           </div>
                           <div class="twm-content">
                              <h3 class="twm-title">Always a clean car</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                        <div class="twm-icon-style-left large-set in-dark-area">
                           <div class="twm-media">
                              <img src="{{ asset('assets/images/icons/luggae.png') }}" alt="Luggage Assistance">
                           </div>
                           <div class="twm-content">
                              <h3 class="twm-title">Help with luggage</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                        <div class="twm-icon-style-left large-set in-dark-area">
                           <div class="twm-media">
                              <img src="{{ asset('assets/images/icons/non-smoking.png') }}" alt="Non-Smoking Vehicle">
                           </div>
                           <div class="twm-content">
                              <h3 class="twm-title">Non-smoking car</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-3 m-b30">
                        <div class="twm-icon-style-left large-set in-dark-area">
                           <div class="twm-media">
                              <img src="{{ asset('assets/images/icons/Snacks.png') }}" alt="Snacks">
                           </div>
                           <div class="twm-content">
                              <h3 class="twm-title">Snacks</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--LET'S YOUR ADVENTURE SECTION END--> 
         <!--WORKING STEPS SECTION START-->
         <div class="section-full p-t60 p-b40 site-bg-white twm-w-steps-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
            <div class="container">
               <!-- TITLE START-->
               <div class="section-head center ">
                  <div class="twm-sm-title left">How it Work</div>
                  <h2 class="twm-large-title site-text-dark">Booking Made Easy: Your 5-Step Journey Guide</h2>
               </div>
               <!-- TITLE END-->
               <div class="section-content">
                  <div class="timeline">
                     <div class="item">
                        <div class="image"><img src="{{ asset('assets/images/step-icon-1.png') }}" alt="Step 1"></div>
                        <span class="nadpis">1. Choose Your Trip</span>
                        <p>Pick your preferred departure and destination cities from our vast selection of routes.</p>
                     </div>
                     <div class="item">
                        <div class="image"><img src="{{ asset('assets/images/step-icon-3.png') }}" alt="Step 3"></div>
                        <span class="nadpis">2. Set up an order</span>
                        <p>Tailor your experience by adding sightseeing stops, selecting a suitable vehicle, and providing the necessary details.</p>
                     </div>
                     <div class="item">
                        <div class="image"><img src="{{ asset('assets/images/step-icon-2.png') }}" alt="Step 2"></div>
                        <span class="nadpis">3. We will confirm the trip</span>
                        <p>Our team will promptly confirm your booking and send you all the important information.</p>
                     </div>
                     <div class="item">
                        <div class="image"><img src="{{ asset('assets/images/step-icon-4.png') }}" alt="Step 4"></div>
                        <span class="nadpis">4. The driver will pick you up</span>
                        <p>A professional, friendly driver will be at the pickup location, helping with luggage and ensuring a smooth start to your trip.</p>
                     </div>
                     <div class="item">
                        <div class="image"><img src="{{ asset('assets/images/step-icon-5.png') }}" alt="Step 5"></div>
                        <span class="nadpis">5. Your journey begins!</span>
                        <p>Sit back, relax, and enjoy a comfortable and memorable trip through beautiful European cities.</p>
                     </div>
                  </div>
                  <!-- <div class="row twm-w-steps-section">
                     <div class="col-lg-3 col-md-6 m-b30">
                         <div class="twm-w-steps">
                             <div class="twm-w-step-count">
                                 <span>01</span>
                             </div>
                             <div class="twm-w-step-detail">
                                 <h3 class="twm-title">Choose A Car</h3>
                                 <p>Check out our range of cars and choose the car of your choice </p>
                             </div>
                         </div>
                     </div>
                     
                     <div class="col-lg-3 col-md-6 m-b30">
                         <div class="twm-w-steps">
                             <div class="twm-w-step-count">
                                 <span>02</span>
                             </div>
                             <div class="twm-w-step-detail">
                                 <h3 class="twm-title">Pick Up Date</h3>
                                 <p>Check out our range of cars and choose the car of your choice </p>
                             </div>
                         </div>
                     </div>
                     
                     <div class="col-lg-3 col-md-6 m-b30">
                         <div class="twm-w-steps">
                             <div class="twm-w-step-count">
                                 <span>03</span>
                             </div>
                             <div class="twm-w-step-detail">
                                 <h3 class="twm-title">Confirm Your Booking</h3>
                                 <p>Check out our range of cars and choose the car of your choice </p>
                             </div>
                         </div>
                     </div>
                     
                     <div class="col-lg-3 col-md-6 m-b30">
                         <div class="twm-w-steps">
                             <div class="twm-w-step-count">
                                 <span>04</span>
                             </div>
                             <div class="twm-w-step-detail">
                                 <h3 class="twm-title">Enjoy Driving</h3>
                                 <p>Check out our range of cars and choose the car of your choice </p>
                             </div>
                         </div>
                     </div>
                     
                     
                     </div> -->
                  <!-- <div class="twm-adv-show">
                     <img src="{{ asset('assets/images/adv-car.png') }}" alt="Advertisement Car">
                     </div> -->
               </div>
            </div>
         </div>
         <!--WORKING STEPS SECTION END-->
         <div class=" section-full p-t60 site-bg-white trip-advicer_review wow fadeInDown">
            <div class="container">
               <div class="section-head center ">
                  <div class="twm-sm-title left">Reviews</div>
                  <h2 class="twm-large-title site-text-dark">Tripadvisor Reviews</h2>
               </div>
               <!-- Review 1 -->
               <div class="review-card">
                  <div class="review-header">
                     <img src="{{ asset('assets/images/default-avatar-2020-3.jpg') }}" alt="User Avatar">
                     <div>
                        <div class="review-user">citiesin72</div>
                        <div class="review-date"> June 16, 2025</div>
                     </div>
                  </div>
                  <div class="circles">
                     <div class="circle"></div>
                     <div class="circle"></div>
                     <div class="circle"></div>
                     <div class="circle"></div>
                     <div class="circle"></div>
                  </div>
                  <div class="review-title">Great service</div>
                  <div class="review-text">
                     We used Robert’s services for a family trip, with several transfers from Belgrade all the way around roll to Bologna. The communication and flexibility prior to the trip was excellent. The price was fair and well worth it. Robert’s driving was always safe and reliable. Flexibility along the way was also appreciated, changing times or stops was no hassle. I couldn’t recommend more highly, and will certainly use again when in Europe!
                  </div>
               </div>
               <!-- Review 2 -->
               <div class="review-card">
                  <div class="review-header">
                     <img src="{{ asset('assets/images/default-avatar-2020-22.jpg') }}" alt="User Avatar">
                     <div>
                        <div class="review-user">Magdaléna Č</div>
                        <div class="review-date">June 22, 2025</div>
                     </div>
                  </div>
                  <div class="circles">
                     <div class="circle"></div>
                     <div class="circle"></div>
                     <div class="circle"></div>
                     <div class="circle"></div>
                     <div class="circle"></div>
                  </div>
                  <div class="review-title">Favourite Car Transfer</div>
                  <div class="review-text">
                     My favourite Car Transfer. It wasn’t the first time we chosed them for our Trip. For this time we went to see Budapest, which I haven’t seen before. Mr. Robert made my trip so special by seeing all the famous tourist location in the city.
                  </div>
               </div>
               <!-- Review 3 -->
               <div class="review-card">
                  <div class="review-header">
                     <img src="{{ asset('assets/images/default-avatar-2020-4.jpg') }}" alt="User Avatar">
                     <div>
                        <div class="review-user">Devanshi S</div>
                        <div class="review-date">June 17, 2025</div>
                     </div>
                  </div>
                  <div class="circles">
                     <div class="circle"></div>
                     <div class="circle"></div>
                     <div class="circle"></div>
                     <div class="circle"></div>
                     <div class="circle"></div>
                  </div>
                  <div class="review-title">
                     Perfect drive to Vienna
                  </div>
                  <div class="review-text">
                     We took a car transfer from Budapest to Vienna in June, 2025. The booking process was very efficient and seamless. Robert helped us out with the perfect car for our group of 6 people. The car arrived on time, was very clean, we were provided with water for our journey. Our driver Lucas was great as well!
                  </div>
               </div>
               <div class="view-all">
                  <a href="https://www.tripadvisor.com/Attraction_Review-g190454-d28158713-Reviews-Europe_Car_Transfer-Vienna.html" target="_blank">View all reviews on Tripadvisor →</a>
               </div>
            </div>
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






