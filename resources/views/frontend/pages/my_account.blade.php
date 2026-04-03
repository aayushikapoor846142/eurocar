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
   <!-- CONTENT START -->
       

            <!-- Contact Form SECTION START -->
    <div class="my-account account-page ">
        <div class="container">
            <div class="row">
           <div class="col-md-4 ">
              <nav class="nav-sidebar">
               <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#tab1" role="tab">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab2" role="tab">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#tab3" role="tab">Address</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="password-tab" data-bs-toggle="tab" href="#tab4" role="tab">Change Password</a>
          </li>
          
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
              @csrf
              <button type="submit" class="nav-link" style="background: none; border: none; cursor: pointer; width: 100%; text-align: left; padding: 0.5rem 1rem;">
                Log out
              </button>
            </form>
          </li>
        </ul>
              </nav>
  
           </div>
           <div class="col-md-8 ">
           <!-- tab content -->
           <div class="tab-content">
             @if(session('password_success'))
                        <div class="alert alert-success">
                            {{ session('password_success') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="welcome-text">
                <h4>Hello {{ $user->first_name }} (not <span>{{ $user->first_name }}?</span> 
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>)
                </h4>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <p>From your account dashboard you can view your recent orders, manage your Delivery and billing addresses, and edit your password and account details.</p>
            </div>
            </div>

            
              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
                 <div class="cart-table">
                    <div class="col-lg-12 col-sm-12 hero-feature">
                        <div class="ltn-author-introducing">
                            <div class="author-img">
                                <img src="{{ asset('assets/images/author.jpg') }}" alt="Author Image">
                            </div>
                            <div class="author-info">
                                <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="fa fa-envelope sdr-ics" aria-hidden="true"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>
                                            </div>
                                        </li>
                                        @if($user->phone)
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="fa fa-phone sdr-ics" aria-hidden="true"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="tel:{{ $user->phone }}">{{ $user->phone }}</a></p>
                                            </div>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                   
                        
                        <div class="row mt-4">
                            <div class="col-12">
                                <form method="POST" action="{{ route('account.update') }}" class="contact-form">
                                    @csrf
                                    <h3>Update Profile Information</h3>
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label>First Name</label>
                                             <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                                                    name="first_name" value="{{ old('first_name', $user->first_name) }}" required>
                                             @error('first_name')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label>Last Name</label>
                                             <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                                                    name="last_name" value="{{ old('last_name', $user->last_name) }}" required>
                                             @error('last_name')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label>Email Address</label>
                                             <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                                    name="email" value="{{ old('email', $user->email) }}" required>
                                             @error('email')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label>Phone Number</label>
                                             <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                                    name="phone" value="{{ old('phone', $user->phone) }}">
                                             @error('phone')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="form-group">
                                             <label>Address</label>
                                             <textarea class="form-control @error('address') is-invalid @enderror" 
                                                       name="address" rows="3">{{ old('address', $user->address) }}</textarea>
                                             @error('address')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <button type="submit" class="contact-btn">Update Profile</button>
                                       </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
</div> <!-- CLOSE TAB 2 -->

              <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="address-tab">
               
                 
                 <div class="cart-table">
                    <!-- Cart -->
        
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3 mb-lg-0">
                                <div class="card-header">
                                    <h5 class="mb-0">Address</h5>
                                </div>
                                <div class="card-body">
                                    <address>{{ old('address', $user->address) }}<br>
                                        <br>
                                    </address>
                                </div>
                            </div>
                        </div>
  
                    </div>
                        
  
        
                       </div>
          
              </div>
</div> <!-- CLOSE TAB 2 -->


                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="password-tab">
                    <h4>Change Password</h4>
                   
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('password.update') }}" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Current Password *</label>
                                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
                                                   name="current_password" required autocomplete="current-password">
                                            @error('current_password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>New Password *</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                                   name="password" required autocomplete="new-password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirm New Password *</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                                   name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="contact-btn">Update Password</button>
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
