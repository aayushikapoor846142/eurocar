@extends('layouts.app')

@push('styles')
    <!-- Add the same styles as index.blade.php -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lc_lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <style>
        .blog-content img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
            border-radius: 8px;
        }
        .blog-meta {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .blog-meta .author {
            margin-right: 20px;
        }
        .blog-meta .date {
            color: #6c757d;
        }
        .blog-tags {
            margin: 30px 0;
        }
        .blog-tags .badge {
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .recent-posts .card {
            margin-bottom: 20px;
            border: none;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
        .recent-posts .card-img-top {
            height: 150px;
            object-fit: cover;
        }
        .twm-lt-blog .wt-post-media>a img {
            height: 451px;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }
    </style>
@endpush

@section('content')
    @include('frontend.partials.header')
    
         <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
          <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr site-bg-dark  twm-primary-overlay-wrap" style="background-image: url({{asset('assets/images/banner-12.jpg')}});">
                <div class="twm-primary-overlay"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="wt-title">Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

<!-- Blog SECTION START -->
    <div class="section-full p-t150 p-b150 site-bg-white twm-blog-grid-section-wrap">
    <div class="container">
        <div class="section-content">
            <div class="section-head center">
                <div class="twm-sm-title left">{{ __('messages.blog.latest_posts') }}</div>
                <h2 class="twm-large-title site-text-dark">{{ __('messages.blog.title') }}</h2>
            </div>
            
            <div class="masonry-wrap row">
                @forelse($blogs as $blog)
                 <div class="masonry-item col-xl-4 col-lg-6 col-md-6 m-b30 wow fadeInDown" data-wow-delay="0.2">
                                <div class="twm-lt-blog">
                                    <div class="wt-post-media">
                                    <a href="{{ route('blog.show', $blog->slug) }}">
                                        <img src="{{ $blog->featured_image ? asset($blog->featured_image) : asset('assets/images/bg1.jpg') }}" alt="{{ $blog->title }}"></a>
                                    </div>
                                    <div class="twm-post-info-wrap">
                                        <div class="post-date-wrap">
                                            <div class="post-date">
                                                <span class="date">{{ $blog->publish_date->format('d') }}</span>
                                                <span class="month">{{ $blog->publish_date->format('M') }}</span>
                                            </div>
                                        </div>                                  
                                        <div class="twm-post-info">
                                            
                                            <div class="post-author">
                                               <a class="au-name" href="javascript:;">{{ __('messages.blog.by_author', ['author' => $blog->author_name]) }}</a>
                                            </div>
                                            
                                            <h3 class="post-title">
                                             <a href="{{ route('blog.show', $blog->slug) }}">{{ \Str::limit($blog->title, 40) }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                </div>    
                            </div>
                
                @empty
                <div class="col-12 text-center">
                    <p>{{ __('messages.blog.no_posts_found') }}</p>
                </div>
                @endforelse
            </div>

            @if($blogs->hasPages())
            <div class="pagination-outer d-flex justify-content-center">
                <div class="pagination-style1">
                    <ul class="clearfix">
                        {{-- Previous Page Link --}}
                        @if ($blogs->onFirstPage())
                            <li class="prev disabled"><span><i class="fa-solid fa-chevron-left"></i></span></li>
                        @else
                            <li class="prev"><a href="{{ $blogs->previousPageUrl() }}"><span><i class="fa-solid fa-chevron-left"></i></span></a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                            @if ($page == $blogs->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($blogs->hasMorePages())
                            <li class="next"><a href="{{ $blogs->nextPageUrl() }}"><span><i class="fa-solid fa-chevron-right"></i></span></a></li>
                        @else
                            <li class="next disabled"><span><i class="fa-solid fa-chevron-right"></i></span></li>
                        @endif
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </div>
</div> </div>
        <!-- CONTENT END -->

    
    @include('frontend.partials.footer')
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/lc_lightbox.lite.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            // Initialize lightbox for blog images
            if (typeof lc_lightbox === 'function') {
                lc_lightbox('.blog-content img', {
                    wrap_class: 'lcl_fade_oc',
                    gallery: true,
                    thumb_attr: 'data-src',
                    skin: 'dark',
                    fullscreen: true,
                    autoplay: true
                });
            }
            
            // Make all tables responsive
            $('.blog-content table').addClass('table table-bordered table-responsive');
            
            // Add Bootstrap classes to images
            $('.blog-content img').addClass('img-fluid rounded');
        });
    </script>
@endpush