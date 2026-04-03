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
      
    </style>
     @include('frontend.partials.header')
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <!-- <div class="wt-bnr-inr site-bg-dark  twm-primary-overlay-wrap" style="background-image: url(images/banner-12.jpg);">
                <div class="twm-primary-overlay"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="wt-title">Route</h2>
                            </div>
                        </div>
                    </div>
                </div>
             </div> -->
            <!-- INNER PAGE BANNER END -->

            <div class="section-content p-t80 p-b0">
                <div class="container">
                    <div class="twm-car-detail-wrap p-b120">
                        <div class="row">
                            <!--Left Section-->
                            <div class="col-xl-7 col-lg-12 col-md-12 ">
                                <div class="twm-car-detail-left-section">
                                    
                                    <div class="twm-car-full-detail">

                                        <div class="twm-car-f-detail-head">
                                            <h3 class="twm-car-full-name">Sights you can visit along the way</h3>
                                          
                                        </div>
                                        <div class="row">
                                    <div class="col-12 col-md-12 col-xl-12">
                                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <!-- Property Thumbnail -->
                                    <div class="property-thumb">
                                        <img src="{{asset('assets/images/generateImage.webp')}}" alt="">
                                        <div class="tag">
                                        <span><a href="#" target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i></a></span>
                                        <a id="add-more" href="#">
                                        </a>
                                        </div>
                                    </div>
                                    <!-- Property Content -->
                                    <div class="property-content">
                                        <h5><a href="#" target="_blank">Terezin</a> </h5>
                                        <p>Czech Republic </p>
                                        
                                    </div>
                                    </div>
                                </div>
                                    <div class="col-12 col-md-12 col-xl-12">
                                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <!-- Property Thumbnail -->
                                    <div class="property-thumb">
                                        <img src="{{asset('assets/images/dressden.webp')}}" alt="">
                                        <div class="tag">
                                        <span><a href="#" target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i></a></span>
                                        <a id="add-more" href="#">
                                         </a>
                                        </div>
                                    </div>
                                    <!-- Property Content -->
                                    <div class="property-content">
                                        <h5><a href="#" target="_blank">Dresden</a> </h5>
                                        <p>Germany </p>
                                        
                                    </div>
                                    </div>
                                </div>
                                    <div class="col-12 col-md-12 col-xl-12">
                                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <!-- Property Thumbnail -->
                                    <div class="property-thumb">
                                        <img src="{{asset('assets/images/moritzbag.webp')}}" alt="">
                                        <div class="tag">
                                        <span><a href="#" target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i></a></span>
                                                                                <div class="qty-picker" id="minutesPicker">
                                        <button class="btn" id="decrease" aria-label="Decrease minutes">−</button>

                                        <div class="value-box">
                                            <div class="value" id="minutesValue" role="spinbutton"
                                                aria-valuemin="0" aria-valuemax="1440" aria-valuenow="30" aria-label="Minutes"
                                                contenteditable="true" spellcheck="false">30</div>
                                            <span class="label">min</span>
                                        </div>

                                        <button class="btn" id="increase" aria-label="Increase minutes">+</button>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- Property Content -->
                                    <div class="property-content">
                                        <h5><a href="#" target="_blank">Moritzburg</a> </h5>
                                        <p>Germany </p>

                                    </div>
                                    </div>
                                </div>
                                </div>

                                </div>

                            </div>
                            </div>
                            <!--Right Section-->
                            <div class="col-xl-5 col-lg-12 col-md-12 ">
                           <div class="sidebar-cate_list sticky">
                                <!--Detail-->
                                   <div class="today-discount">
                                        <div class="row">
                                            <div class="col-md-9">
                                        <h4><i class="fa fa-tag" aria-hidden="true"></i> Today's discount ends in
                                        <div id="clock">00:00:00</div>
                                        </h4>
                                         <p>Enjoy your ride even more with this offer.</p>
                                            </div>
                                        
                                         <div class="col-md-3">
                                            <div class="dd-ss">
                                                <h6>-10%</h6>
                                            </div>
                                         </div>
                                       </div>
                                       
                                    </div>
                                    <!--Contact Us-->
                                <div class="twm-bx-st1 twm-car-d-form m-b30">
                                 
                                    <h3 class="twm-title">Send Enquiry</h3>
                                    
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    
                                    <form action="{{ route('cars.enquiry.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                                        
                                        <div class="row m-b20">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Full Name *</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Your name" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Email *</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Your email" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Phone Number *</label>
                                                    <input type="tel" name="phone" class="form-control" placeholder="Your phone number" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Pick up Location</label>
                                                    <input type="text" name="pickup_location" class="form-control" placeholder="Type...">
                                                </div>
                                            </div>
                                            
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Drop off Location</label>
                                                    <input type="text" name="dropoff_location" class="form-control" placeholder="Type...">
                                                </div>
                                            </div>
                                            
                                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                                <div class="form-group form-group-2column-wrap twm-input-with-icon">
                                                    <label>Pick up date and time</label>
                                                    <div class="form-group-2column">
                                                        <div class="input-group date datepicker">
                                                            <input type="text" name="pickup_date" class="form-control" placeholder="Date">
                                                            <span class="input-group-append input-group-addon">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-solid fa-calendar-days"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="input-group time timepicker">
                                                            <input type="text" name="pickup_time" class="form-control" placeholder="Time">
                                                            <span class="input-group-append input-group-addon">
                                                                <span class="input-group-text">
                                                                    <i class="fa-regular fa-clock"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label><b>Passengers</b></label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="adult">Adults</label>
                                                                <select name="adults" class="form-select form-control">
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
                                                                <select name="children" class="form-select form-control">
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
                                            
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Additional Message</label>
                                                    <textarea name="message" class="form-control" rows="4" placeholder="Tell us more about your requirements..."></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="twm-tabs-search-btn">
                                                    <button type="submit" class="site-button w-100">Send Enquiry</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="twm-car-d-info m-b30">
                                    <div class="twm-bx-st1" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                                        <h3 class="twm-title mb-3" style="display: block !important; visibility: visible !important; opacity: 1 !important;">Vehicle Details</h3>
                                        
                                        <!-- Car Image -->
                                        <div class="car-detail-image mb-4" style="display: block !important; visibility: visible !important;">
                                            <img src="{{ asset('' . $car->image) }}" 
                                                 alt="{{ $car->title }}" 
                                                 class="img-fluid rounded"
                                                 style="width: 100%; height: 250px; object-fit: cover; display: block;">
                                        </div>
                                        
                                        <!-- Car Title & Description -->
                                        <div class="car-detail-content mb-4" style="display: block !important; visibility: visible !important; opacity: 1 !important;">
                                            <h4 class="mb-2" style="color: #1a1a1a; font-weight: 600; display: block !important;">{{ $car->title }}</h4>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6; display: block !important; color: #666 !important;">
                                                {{ $car->description }}
                                            </p>
                                            
                                            <!-- Category Badge -->
                                            <div class="mb-3" style="display: block !important;">
                                                <span class="badge" style="background: #28a745; color: white; padding: 6px 12px; font-size: 12px; display: inline-block !important;">
                                                    <i class="fa fa-tag"></i> {{ ucfirst(str_replace('_', ' ', $car->category)) }}
                                                </span>
                                                @if($car->is_featured)
                                                <span class="badge" style="background: #ffc107; color: #000; padding: 6px 12px; font-size: 12px; display: inline-block !important;">
                                                    <i class="fa fa-star"></i> Featured
                                                </span>
                                                @endif
                                            </div>
                                            
                                            <!-- Car Specs -->
                                            <div class="car-specs mb-3" style="display: block !important; visibility: visible !important;">
                                                <div class="row g-2">
                                                    <div class="col-6">
                                                        <div class="spec-item p-2 rounded text-center" style="background: #f8f9fa; display: block !important;">
                                                            <i class="fa fa-car mb-1" style="font-size: 20px; color: #007bff; display: block;"></i>
                                                            <div style="font-size: 12px; color: #666; display: block;">Make</div>
                                                            <div style="font-size: 14px; font-weight: 600; color: #000; display: block;">{{ $car->make }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="spec-item p-2 rounded text-center" style="background: #f8f9fa; display: block !important;">
                                                            <i class="fa fa-cog mb-1" style="font-size: 20px; color: #007bff; display: block;"></i>
                                                            <div style="font-size: 12px; color: #666; display: block;">Model</div>
                                                            <div style="font-size: 14px; font-weight: 600; color: #000; display: block;">{{ $car->model }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="spec-item p-2 rounded text-center" style="background: #f8f9fa; display: block !important;">
                                                            <i class="fa fa-calendar mb-1" style="font-size: 20px; color: #007bff; display: block;"></i>
                                                            <div style="font-size: 12px; color: #666; display: block;">Year</div>
                                                            <div style="font-size: 14px; font-weight: 600; color: #000; display: block;">{{ $car->year }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="spec-item p-2 rounded text-center" style="background: #f8f9fa; display: block !important;">
                                                            <i class="fa fa-language mb-1" style="font-size: 20px; color: #007bff; display: block;"></i>
                                                            <div style="font-size: 12px; color: #666; display: block;">Driver</div>
                                                            <div style="font-size: 11px; font-weight: 600; color: #000; display: block;">{{ $car->driver_language }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Vehicle Category Info -->
                                        @if($car->vehicleCategory)
                                        <div class="vehicle-category-info p-3 rounded mb-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; display: block !important; visibility: visible !important;">
                                            <h5 class="mb-2" style="color: white !important; font-weight: 600; display: block !important;">
                                                <i class="fa fa-star"></i> {{ $car->vehicleCategory->name }}
                                            </h5>
                                            <p class="mb-3" style="font-size: 13px; opacity: 0.95; color: white !important; display: block !important;">
                                                <strong>{{ $car->vehicleCategory->vehicle_example }}</strong>
                                            </p>
                                            
                                            <!-- Capacity Badges -->
                                            <div class="capacity-badges mb-2" style="display: block !important;">
                                                <div class="d-flex flex-wrap gap-2" style="display: flex !important; flex-wrap: wrap; gap: 8px;">
                                                    <span class="badge" style="background: rgba(255,255,255,0.2); padding: 8px 12px; font-size: 13px; display: inline-block !important; color: white !important;">
                                                        <i class="fa fa-users"></i> {{ $car->vehicleCategory->max_passengers }} Passengers
                                                    </span>
                                                    <span class="badge" style="background: rgba(255,255,255,0.2); padding: 8px 12px; font-size: 13px; display: inline-block !important; color: white !important;">
                                                        <i class="fa fa-suitcase"></i> {{ $car->vehicleCategory->max_big_bags }} Big Bags
                                                    </span>
                                                    <span class="badge" style="background: rgba(255,255,255,0.2); padding: 8px 12px; font-size: 13px; display: inline-block !important; color: white !important;">
                                                        <i class="fa fa-briefcase"></i> {{ $car->vehicleCategory->max_small_bags }} Small Bags
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            @if($car->vehicleCategory->description)
                                            <p class="mb-0 mt-2" style="font-size: 12px; opacity: 0.9; line-height: 1.5; color: white !important; display: block !important;">
                                                {{ $car->vehicleCategory->description }}
                                            </p>
                                            @endif
                                        </div>
                                        @endif
                                        
                                        <!-- Features List -->
                                        <div class="vehicle-features mb-3" style="display: block !important; visibility: visible !important;">
                                            <h5 class="mb-3" style="font-size: 16px; font-weight: 600; color: #1a1a1a; display: block !important;">
                                                <i class="fa fa-check-circle" style="color: #28a745;"></i> Included Features
                                            </h5>
                                            <div class="row" style="display: flex !important;">
                                                <div class="col-6 mb-2" style="display: block !important;">
                                                    <div style="font-size: 13px; color: #333; display: block !important;">
                                                        <i class="fa fa-check" style="color: #28a745; margin-right: 5px;"></i> Air Conditioning
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2" style="display: block !important;">
                                                    <div style="font-size: 13px; color: #333; display: block !important;">
                                                        <i class="fa fa-check" style="color: #28a745; margin-right: 5px;"></i> Professional Driver
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2" style="display: block !important;">
                                                    <div style="font-size: 13px; color: #333; display: block !important;">
                                                        <i class="fa fa-check" style="color: #28a745; margin-right: 5px;"></i> Free WiFi
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2" style="display: block !important;">
                                                    <div style="font-size: 13px; color: #333; display: block !important;">
                                                        <i class="fa fa-check" style="color: #28a745; margin-right: 5px;"></i> Bottled Water
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2" style="display: block !important;">
                                                    <div style="font-size: 13px; color: #333; display: block !important;">
                                                        <i class="fa fa-check" style="color: #28a745; margin-right: 5px;"></i> Child Seats Available
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2" style="display: block !important;">
                                                    <div style="font-size: 13px; color: #333; display: block !important;">
                                                        <i class="fa fa-check" style="color: #28a745; margin-right: 5px;"></i> Flight Tracking
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Pricing Info -->
                                        <div class="pricing-info p-3 rounded" style="background: #f8f9fa; border-left: 4px solid #007bff; display: block !important; visibility: visible !important;">
                                            <div class="d-flex justify-content-between align-items-center" style="display: flex !important; justify-content: space-between; align-items: center;">
                                                <div style="display: block !important;">
                                                    <div style="font-size: 12px; color: #666; display: block !important;">Starting from</div>
                                                    <div style="font-size: 24px; font-weight: 700; color: #007bff; display: block !important;">
                                                        {{ currency($car->price) }}
                                                    </div>
                                                    @if($car->discount > 0)
                                                    <div style="font-size: 11px; color: #dc3545; display: block !important;">
                                                        <del>{{ currency($car->price + $car->discount) }}</del>
                                                        <span class="badge" style="background: #dc3545; color: white; margin-left: 5px; font-size: 10px;">Save {{ currency($car->discount) }}</span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div style="display: block !important;">
                                                    <i class="fa fa-euro" style="font-size: 40px; color: #007bff; opacity: 0.2;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                <div class="book-pp_car" style="display: none;">
                                        <div class="top-save">
                                            @if($car->discount > 0)
                                                <span class="discc"><i class="fa fa-tag" aria-hidden="true"></i> Save {{ currency($car->discount) }}</span>
                                                <span class="regular"> Regular price: {{ currency($car->price + $car->discount) }}</span>
                                            @endif
                                        </div>
                                        <div class="twm-car-d-info-head">
                                            <h3 class="twm-title">Rental Price <br><b>{{ currency($car->price) }}</b></h3>
                                            <div class="twm-price-section">
                                                <div class="bo-trip">
                                                    <a href="{{ url('bookings/create', $car->id) }}" >Book this trip <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                  </div>
                        

                                </div>

                            

                                <!--Location-->
                                <div class="twm-bx-st1 twm-car-d-location m-b30">
                                    <h3 class="twm-title">Location</h3>
                                    <div class="twm-s-map-iframe">
                                        <iframe height="270" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                                    </div>
                                    <div class="twm-need-help-bx">
                                        <div class="twm-need-help-content">
                                            <span>Need any help ?</span>
                                            <h3 class="twm-title">+421 908 535 368 </h3>
                                        </div>
                                        <div class="twm-need-help-icon">
                                            <img src="{{asset('assets/images/24-clock.png')}}" alt="icon">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
         <div class=" section-full p-t80 site-bg-white trip-advicer_review wow fadeInDown">
            <div class="container">
               <div class="section-head center ">
                  <div class="twm-sm-title left">Reviews</div>
                  <h2 class="twm-large-title site-text-dark">Tripadvisor Reviews</h2>
               </div>
               <!-- Review 1 -->
               <div class="review-card">
                  <div class="review-header">
                     <img src="images/default-avatar-2020-3.jpg" alt="user">
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
                     <img src="images/default-avatar-2020-22.jpg" alt="user">
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
                     <img src="images/default-avatar-2020-4.jpg" alt="user">
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
