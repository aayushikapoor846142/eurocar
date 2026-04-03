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
<style>
        twm-vehicle-fleet-bx2 .twm-media-pic img {
    height: 189px;
    width: 280px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
}
    </style>
     @include('frontend.partials.header')
   <!-- CONTENT START -->
        <!-- CONTENT START -->
        <div class="page-content">

          <!--BANNER START-->
         <div class="twm-home-1-banner-wrap">
            <div class="twm-home-1-banner  bg-overlay-black"  style="background-image: url({{asset('assets/images/slider1.jpg')}});">
               <div class="twm-banner-LR-wrap">
                  <div class="twm-banner-left">
                     <div class="twm-banner-left-info">
                        <div class="twm-banner-left-content">
                           <!-- <div class="twm-sm-title left">Premium</div> -->
                           <h2 class="twm-banner-title">
                              <em class="txt-type" data-wait="3000" data-words='["At Any Time To Anywhere", "Wide Range of"]'></em>
                              <span>Cars</span>
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
                                                <img src="{{asset('assets/images/tabs-icon/car.png')}}" alt="#">
                                             </div>
                                             <div class="tabs-title">{{ __('messages.home.transfer') }}</div>
                                          </div>
                                       </div>
                                       <!-- Day Trip Tab -->
                                       <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-Daytrip">
                                          <div class="twm-tabs-bx">
                                             <div class="tabs-media">
                                                <img src="{{asset('assets/images/tabs-icon/van.png')}}" alt="#">
                                             </div>
                                             <div class="tabs-title">{{ __('messages.home.day_trip') }}</div>
                                          </div>
                                       </div>
                                       <!-- Multiday Trip Tab -->
                                       <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-Multidaytrip">
                                          <div class="twm-tabs-bx">
                                             <div class="tabs-media">
                                                <img src="{{asset('assets/images/tabs-icon/coupe.png')}}" alt="#">
                                             </div>
                                             <div class="tabs-title">{{ __('messages.home.multiday_trip') }}</div>
                                          </div>
                                       </div>
                                       <!-- Hourly Rental Tab -->
                                       <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-Hourly">
                                          <div class="twm-tabs-bx">
                                             <div class="tabs-media">
                                                <img src="{{asset('assets/images/tabs-icon/car.png')}}" alt="#">
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
                                                      <label>Pick up Location</label>
                                                      <input class="form-control" name="pickup_location" placeholder="Type..." value="{{ request('pickup_location') }}">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="form-group">
                                                      <label>Drop off Location</label>
                                                      <input class="form-control" name="dropoff_location" placeholder="Type..." value="{{ request('dropoff_location') }}">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                   <div class="form-group form-group-2column-wrap twm-input-with-icon">
                                                      <label>Pick up date and time</label>
                                                      <div class="form-group-2column">
                                                         <div class="input-group date datepicker">
                                                            <input class="form-control" name="pickup_date" placeholder="Date" value="{{ request('pickup_date') }}">
                                                            <span class="input-group-append input-group-addon">
                                                            <span class="input-group-text">
                                                            <i class="fa fa-solid fa-calendar-days"></i>
                                                            </span>
                                                            </span>
                                                         </div>
                                                         <div class="input-group time timepicker">
                                                            <input class="form-control" name="pickup_time" placeholder="Time" value="{{ request('pickup_time') }}">
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
                                                      <label><b>Passengers</b></label>
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="adult">Adults</label>
                                                               <select class="form-select form-control" name="adults">
                                                                  <option value="">13+ years</option>
                                                                  @for($i = 1; $i <= 12; $i++)
                                                                     <option value="{{ $i }}" {{ request('adults') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                                  @endfor
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="child">Children</label>
                                                               <select class="form-select form-control" name="children">
                                                                  <option value="">2-12 years</option>
                                                                  @for($i = 1; $i <= 5; $i++)
                                                                     <option value="{{ $i }}" {{ request('children') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                                  @endfor
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                    
                                    <!-- Day Trip Detail -->
                                    <div class="tab-pane fade" id="nav-Daytrip">
                                       <div class="twm-tabs-search-section">
                                          <form action="{{ route('cars.search') }}" method="GET">
                                             <input type="hidden" name="type" value="daytrip">
                                             <div class="row">
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-8">
                                                   <div class="form-group">
                                                      <label>Select Destination</label>
                                                      <input class="form-control" name="destination" type="text" placeholder="Enter destination" value="{{ request('destination') }}">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="form-group">
                                                      <label>Date</label>
                                                      <div class="input-group date datepicker">
                                                         <input class="form-control" name="trip_date" placeholder="Select date" value="{{ request('trip_date') }}">
                                                         <span class="input-group-append input-group-addon">
                                                            <span class="input-group-text">
                                                               <i class="fa fa-solid fa-calendar-days"></i>
                                                            </span>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-8">
                                                   <div class="form-group">
                                                      <label><b>Passengers</b></label>
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="adult">Adults</label>
                                                               <select class="form-select form-control" name="adults">
                                                                  <option value="">13+ years</option>
                                                                  @for($i = 1; $i <= 12; $i++)
                                                                     <option value="{{ $i }}">{{ $i }}</option>
                                                                  @endfor
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="child">Children</label>
                                                               <select class="form-select form-control" name="children">
                                                                  <option value="">2-12 years</option>
                                                                  @for($i = 1; $i <= 5; $i++)
                                                                     <option value="{{ $i }}">{{ $i }}</option>
                                                                  @endfor
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                    
                                    <!-- Multiday Trip Detail -->
                                    <div class="tab-pane fade" id="nav-Multidaytrip">
                                       <div class="twm-tabs-search-section">
                                        <form action="{{ route('cars.search') }}" method="GET" class="search-form">
                                             <input type="hidden" name="type" value="multidaytrip">
                                             <div class="row ">
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-8">
                                                   <div class="form-group">
                                                   <label>Search the country</label>
                                                      <input class="form-control" name="country" type="text" placeholder="Enter the country" value="{{ request('country') }}">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4">
                                                   <div class="form-group">
                                                      <label>Number of Days</label>
                                                      <input class="form-control" name="days" type="number" placeholder="Days" value="{{ request('days') }}">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-8">
                                                   <div class="form-group">
                                                      <label><b>Passengers</b></label>
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="adult">Adults</label>
                                                               <select class="form-select form-control" name="adults">
                                                                  <option value="">13+ years</option>
                                                                  @for($i = 1; $i <= 12; $i++)
                                                                     <option value="{{ $i }}">{{ $i }}</option>
                                                                  @endfor
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="child">Children</label>
                                                               <select class="form-select form-control" name="children">
                                                                  <option value="">2-12 years</option>
                                                                  @for($i = 1; $i <= 5; $i++)
                                                                     <option value="{{ $i }}">{{ $i }}</option>
                                                                  @endfor
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                    
                                    <!-- Hourly Rental Detail -->
                                    <div class="tab-pane fade" id="nav-Hourly">
                                       <div class="twm-tabs-search-section">
                                          <form action="{{ route('cars.search') }}" method="GET">
                                             <input type="hidden" name="type" value="hourly">
                                             <div class="row">
                                                <div class="col-xxl-7 col-xl-7 col-lg-7 col-sm-7">
                                                    <div class="form-group">
                                                      <label>Select the city</label>
                                                       <select class="form-select form-control" name="city">
                                                         <option value="">🌍 All Cities</option>
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
                                                      <input class="form-control" name="hours" type="number" placeholder="Type..." value="{{ request('hours') }}" min="1">
                                                   </div>
                                                </div>
                                               
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12">
                                                   <div class="form-group">
                                                      <label>Vehicle Category (Optional)</label>
                                                      <select name="vehicle_category_id" class="form-select form-control">
                                                         <option value="">All Vehicle Types</option>
                                                         @foreach(\App\Models\VehicleCategory::where('is_active', true)->orderBy('sort_order')->get() as $category)
                                                            <option value="{{ $category->id }}" {{ request('vehicle_category_id') == $category->id ? 'selected' : '' }}>
                                                               {{ $category->name }} - {{ $category->vehicle_example }} ({{ $category->max_passengers }}pax, {{ $category->max_big_bags }}+{{ $category->max_small_bags }} bags)
                                                            </option>
                                                         @endforeach
                                                      </select>
                                                   </div>
                                                </div>
                                               
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-8 d-none">
                                                   <div class="form-group">
                                                      <label><b>Passengers</b></label>
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="adult">Adults</label>
                                                               <select class="form-select form-control" name="adults">
                                                                  <option value="">13+ years</option>
                                                                  @for($i = 1; $i <= 12; $i++)
                                                                     <option value="{{ $i }}" {{ request('adults') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                                  @endfor
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="child">Children</label>
                                                               <select class="form-select form-control" name="children">
                                                                  <option value="">2-12 years</option>
                                                                  @for($i = 1; $i <= 5; $i++)
                                                                     <option value="{{ $i }}" {{ request('children') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                                  @endfor
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
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
                             <img src="images/main-slider/slider1/car.png" alt="Car Pic">
                         </div>
                     </div>
                     </div> -->
               </div>
            </div>
         </div>
         <!--BANNER END-->
            <!-- INNER PAGE BANNER END -->   


            <!-- Team SECTION START -->
            <div class="section-full p-t60 site-bg-white twm-cars4-section-wrap">
                <div class="container">

                    <div class="twm-search-list-filter-wrap">
                        <!--Filter Short By-->
                        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                            <span class="woocommerce-result-count-left">Distance:<b> 172 km</b></span>
                             <span class="woocommerce-result-count-left">Travel Time: <b>2 hours 5 minutes</b></span>
                           
                            <!-- <form class="woocommerce-ordering twm-filter-select" method="get">
                                <span class="woocommerce-result-count">Short By</span>
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>All Vehicle</option>
                                    <option value="1">Yamaha</option>
                                    <option value="2">Honda</option>
                                    <option value="3">Suzuki</option>
                                </select>
                            </form> -->

                        </div>
                    </div>

                </div>

                <div class="container-fluid">      
                    <div class="section-content">

                        @if(isset($searchParams) && isset($searchParams['type']))
                        <div class="alert alert-info mb-4">
                            <h5 class="mb-2">
                                <i class="fa fa-search"></i> Search Results for: 
                                <strong>{{ ucfirst(str_replace('_', ' ', $searchParams['type'])) }}</strong>
                            </h5>
                            <div class="row">
                                @if(isset($searchParams['vehicle_category_id']) && $searchParams['vehicle_category_id'])
                                    @php
                                        $selectedCategory = \App\Models\VehicleCategory::find($searchParams['vehicle_category_id']);
                                    @endphp
                                    @if($selectedCategory)
                                    <div class="col-auto">
                                        <span class="badge bg-warning text-dark">
                                            Vehicle: {{ $selectedCategory->name }} ({{ $selectedCategory->vehicle_example }})
                                        </span>
                                    </div>
                                    @endif
                                @endif
                                @if(isset($searchParams['city']) && $searchParams['city'])
                                    <div class="col-auto">
                                        <span class="badge bg-primary">City: {{ \App\Models\City::find($searchParams['city'])->name ?? 'All' }}</span>
                                    </div>
                                @endif
                                @if(isset($searchParams['hours']) && $searchParams['hours'])
                                    <div class="col-auto">
                                        <span class="badge bg-primary">Hours: {{ $searchParams['hours'] }}</span>
                                    </div>
                                @endif
                                @if(isset($searchParams['adults']) && $searchParams['adults'])
                                    <div class="col-auto">
                                        <span class="badge bg-success">Adults: {{ $searchParams['adults'] }}</span>
                                    </div>
                                @endif
                                @if(isset($searchParams['children']) && $searchParams['children'])
                                    <div class="col-auto">
                                        <span class="badge bg-success">Children: {{ $searchParams['children'] }}</span>
                                    </div>
                                @endif
                            </div>
                            <p class="mb-0 mt-2">Found {{ $cars->total() }} vehicle(s) matching your criteria</p>
                        </div>
                        @endif

                        <div class=" twm-cars-section m-b0 p-b60">
                           <!-- Dynamic Cars Section -->
                        <div class="row">
                            @foreach($cars as $car)
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 m-b30 wow fadeInDown" data-wow-delay="0.2">
                                <div class="twm-vehicle-fleet-bx2 twm-custom-grid-3" >
                                    @if($loop->first)
                                        <div class="best-value">
                                            <span>Best value</span>
                                        </div>
                                    @endif
                                    
                                    <div class="twm-media">
                                        <div class="twm-media-pic" style="height:200px">
                                            <img  src="{{ $car->image ? asset('storage/' . $car->image) : 'images/default-car.png' }}" 
                                                alt="{{ $car->title }}" 
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    
                                    <div class="twm-vehicle-fleet-content">
                                        <h3 class="twm-v-title">
                                            <a href="#">{{ $car->title }}</a>
                                        </h3>
                                        <p class="twm-v-title_text">{{ $car->make }} {{ $car->model }}, {{ $car->year }}</p>
                                        
                                        @if($car->vehicleCategory)
                                        <div class="alert alert-light py-2 px-3 mb-2" style="font-size: 12px;">
                                            <strong>{{ $car->vehicleCategory->name }}</strong>
                                            <div class="text-muted">
                                                {{ $car->vehicleCategory->vehicle_example }}
                                            </div>
                                            <div class="mt-1">
                                                <span class="badge bg-info me-1">{{ $car->vehicleCategory->max_passengers }} pax</span>
                                                <span class="badge bg-secondary me-1">{{ $car->vehicleCategory->max_big_bags }} big bags</span>
                                                <span class="badge bg-secondary">{{ $car->vehicleCategory->max_small_bags }} small bags</span>
                                            </div>
                                        </div>
                                        @endif
                                        <p class="text-xs">Driver with {{ $car->driver_language }}</p>
                                        <div class="flex h-full flex-col justify-end">
                                          <button type="button" class="btn btn-light happy">Ready to book?</button>
                                            <a class="btn btn-secondary book" href="{{url('cars/detail/'.$car->id)}}">Book Now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <!-- How to Book Section -->
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 m-b30 wow fadeInDown" data-wow-delay="0.2">
                                <div class="twm-vehicle-fleet-bx2 twm-custom-grid-3">
                                    <div class="twm-vehicle-fleet-content">
                                        <h3>How to book a car</h3>
                                        <ul class="text-sm">
                                            <li class="mb-3">
                                                <span class="font-bold text-2xl pr-2">1.</span>Choose the type of vehicle that best
                                                suits your needs—from standard cars to spacious minivans and minibuses for larger
                                                groups.
                                            </li>
                                            <li class="mb-3">
                                                <span class="font-bold text-2xl pr-2">2.</span>Secure your booking by filling out
                                                the required details and confirming your trip.
                                            </li>
                                            <li class="mb-3">
                                                <span class="font-bold text-2xl pr-2">3.</span>We will check the availability of the
                                                car and send you a confirmation email.
                                            </li>
                                            <li class="mb-3">
                                                <span class="font-bold text-2xl pr-2">4.</span>Few hours before your ride we will
                                                send you an SMS or email with the driver's name, and phone number.
                                            </li>
                                            <li class="mb-3 highlight">
                                                <span class="font-bold text-2xl pr-2">5.</span>Your driver will be waiting for you
                                                at the pickup location, ready to take you to your destination.
                                            </li>
                                            <li class="mb-3">
                                                <span class="font-bold text-2xl pr-2">6.</span>Enjoy your ride and safe travels!
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-12">
                                {{ $cars->links() }}
                            </div>
                        </div>

                           
                        </div>

                    </div> 
                </div>

            </div>   
            <!-- Team SECTION END -->

            


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
        // Activate the correct tab based on search type
        document.addEventListener('DOMContentLoaded', function() {
            const searchType = '{{ request("type") }}';
            
            if (searchType) {
                // Map search types to tab IDs
                const tabMap = {
                    'transfer': 'nav-Transfer',
                    'daytrip': 'nav-Daytrip',
                    'multidaytrip': 'nav-Multidaytrip',
                    'hourly': 'nav-Hourly'
                };
                
                const tabId = tabMap[searchType];
                
                if (tabId) {
                    // Remove active class from all tabs and panes
                    document.querySelectorAll('.nav-link').forEach(tab => {
                        tab.classList.remove('active');
                    });
                    document.querySelectorAll('.tab-pane').forEach(pane => {
                        pane.classList.remove('show', 'active');
                    });
                    
                    // Activate the correct tab
                    const tabButton = document.querySelector(`[data-bs-target="#${tabId}"]`);
                    const tabPane = document.getElementById(tabId);
                    
                    if (tabButton && tabPane) {
                        tabButton.classList.add('active');
                        tabPane.classList.add('show', 'active');
                    }
                }
            }
        });
    </script>
    
    @stack('scripts')
@endsection
