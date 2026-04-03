 <header class="site-header header-style-1 mobile-sider-drawer-menu light-hdr">
         <div class="header-middle-wraper sticky-header ">
            <div class="header-middle main-bar">
               <div class="logo-header">
                  <div class="logo-header-inner logo-header-one">
                     <a href="{{ url('/') }}">
                     <img src="{{ asset('assets/images/logo-light.png') }}" alt="Europe Car Transfer Logo">
                     </a>
                  </div>
               </div>
               <div class="header-info-wraper">
                  <div class="main-bar-wraper  navbar-expand-lg">
                     <div class="header-bottom">
                        <div class="container-block clearfix">
                           <div class="navigation-bar">
                              <!-- NAV Toggle Button -->
                              <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar icon-bar-first"></span>
                              <span class="icon-bar icon-bar-two"></span>
                              <span class="icon-bar icon-bar-three"></span>
                              </button> 
                              <!-- MAIN Vav -->
                              <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-between">
                                 <ul class="nav navbar-nav">
                                    <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">{{ __('messages.nav.home') }}</a></li>
                                    <li><a href="{{ url('about-us') }}" class="{{ request()->is('about*') ? 'active' : '' }}">{{ __('messages.nav.about') }}</a></li>
                                    <li><a href="{{ url('cars') }}" class="{{ request()->is('cars*') ? 'active' : '' }}">{{ __('messages.nav.cars') }}</a></li>
                                    <li><a href="{{ route('blog.index') }}" class="{{ request()->is('blog*') ? 'active' : '' }}">{{ __('messages.nav.blog') }}</a></li>
                                    <li><a href="{{ url('contact-us') }}" class="{{ request()->is('contact*') ? 'active' : '' }}">{{ __('messages.nav.contact') }}</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Header Right Section-->
               <div class="extra-nav header-1-nav">
                  <div class="extra-cell one">
                     <ul class="wt-topbar-left-info">
                        <li>
                           <a href="tel:+421908535368">
                           <span><i class="feather feather-phone-call" style="font-size: 14px;"></i></span>+421 908 535 368
                           </a>
                        </li>
                        <li>
                           <a href="mailto:info@europecactransfer.com">
                           <span><i class="feather feather-mail" style="font-size: 14px;"></i></span>info@europecactransfer.com
                           </a>
                        </li>
                   
                        <li>
                           @include('components.language-switcher')
                        </li>
                        <li>
                           @include('components.currency-switcher')
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      
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