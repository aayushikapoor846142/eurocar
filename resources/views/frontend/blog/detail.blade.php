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
        <div class="page-content">


           <!-- Blog Detail SECTION START -->
           <div class="section-full p-t80 p-b80 site-bg-white">

                <div class="twm-blog-detail-wrap">
                    <div class="twm-mid-bx-section">

                            <div class="twm-blog-detail-head">
                                <div class="twm-post-info-wrap">
                                    <div class="post-date-wrap">
                                        <div class="post-date">
                                            <span class="date">{{ $blog->publish_date->format('d') }}</span>
                                            <span class="month">{{ $blog->publish_date->format('M') }}</span>
                                        </div>
                                    </div>                                  
                                    <div class="twm-post-info">
                                        <div class="post-author">
                                            <span class="au-name">{{ __('messages.blog.by_author', ['author' => $blog->author_name ?? 'Admin']) }}</span>
                                        </div>
                                        <h1 class="post-title">{{ $blog->title }}</h1>
                                    </div>
                                </div>

                                @if($blog->featured_image)
                                <div class="wt-post-media">
                                    <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" class="img-fluid">
                                </div>
                                @endif
                            </div>

                            <div class="blog-content">
                                {!! $blog->content !!}
                            </div>

                        <div class="twm-available-rent-section d-none">
                            <h3 class="twm-title">Available On Rent</h3>
                            <ul>
                                <li><span>21 Seater Tempo Traveller</span></li>
                                <li><span>45 Seater Bus</span></li>
                                <li><span>19 Seater Mini Bus</span></li>
                                <li><span>44 Seater Ac Bus 2X2</span></li>
                                <li><span>17 Seater Tempo Traveller</span></li>
                                <li><span>25 Seater Tempo Traveller</span></li>

                                <li><span>22 Seater Tempo Traveller</span></li>
                                <li><span>24 Seater Mini Bus</span></li>
                                <li><span>13 Seater Tempo Traveller</span></li>
                                <li><span>45 Seater Ac Bus 2X2</span></li>
                                <li><span>5 Seater</span></li>
                                <li><span>19 Seater Tempo Traveller</span></li>

                                <li><span>16 Seater Tempo Traveller</span></li>
                                <li><span>11 Seater Tempo Traveller</span></li>
                                <li><span>26 Seater Tempo Traveller</span></li>
                                <li><span>23 Seater Tempo Traveller</span></li>
                                <li><span>18 Seater Tempo Traveller</span></li>
                                <li><span>9 Seater Tempo Traveller</span></li>
                            </ul>
                        </div>
                       

                    </div>
     
                    <div class="twm-mid-bx-section">

                        <div class="s-post-tag-share">
                            <div class="s-post-tags">
                                @if($blog->tags->count() > 0)
                                    <h3 class="twm-title">{{ __('messages.blog.tags') }}</h3>
                                    <div class="tagcloud">
                                        @foreach($blog->tags as $tag)
                                            <a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="s-post-share">
                                <h3 class="twm-title">{{ __('messages.common.share') }}</h3>
                                <div class="twm-social2">
                                    <ul>
                                        <li><a href="https://www.facebook.com/people/Europe-Car-Transfer/100068013432295/"><i class="feather feather-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="s-post-pagination-control previous-next">
                            <div class="paging-left paging-item">
                                <div class="paging-content"> 
                                    <div class="paging-content-inner">
                                        <a class="paging-link2" href="blog.html"><i class="feather feather-chevron-left"></i>Previous Post</a>
                                        <h4 class="paging-title">
                                            <a href="blog.html">Pellentesque vel dui nec libero auctor 
                                                pretium id sed arcu.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="paging-mid">
                                <div class="paging-post-grid-view">
                                    <a href="javascript:;"><i class="feather feather-grid"></i></a>
                                </div>
                            </div>
                            <div class="paging-right paging-item">
                                <div class="paging-content reverse"> 
                                    <div class="paging-content-inner">
                                        <a class="paging-link2 reverse" href="blog.html"><i class="feather feather-chevron-right"></i> Next Post</a>
                                        <h4 class="paging-title">
                                            <a href="blog.html">Pellentesque vel dui nec libero auctor
                                                pretium id sed arcu</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="twm-blog-comment-section" id="comment-list">
                            <div class="comments-area" id="comments">
                                <h3 class="comment-head-title">{{ __('messages.blog.related_posts') }}</h3>
                                <div class="row">
                                    @foreach($recentPosts as $recentPost)
                                        <div class="col-md-4 mb-4">
                                            <div class="recent-post">
                                                @if($recentPost->featured_image)
                                                    <a href="{{ route('blog.show', $recentPost->slug) }}">
                                                        <img src="{{ asset($recentPost->featured_image) }}" alt="{{ $recentPost->title }}" class="img-fluid mb-2">
                                                    </a>
                                                @endif
                                                <h5>
                                                    <a href="{{ route('blog.show', $recentPost->slug) }}">{{ $recentPost->title }}</a>
                                                </h5>
                                                <div class="post-meta">
                                                    <span><i class="far fa-calendar-alt"></i> {{ $recentPost->publish_date->format('M d, Y') }}</span>
                                                    <span><i class="far fa-eye"></i> {{ $recentPost->views_count }} views</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <h3 class="comment-head-title mt-5">Comments</h3>
                                <div>
                                    <!-- COMMENT LIST START -->
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <!-- COMMENT BLOCK -->
                                            <div class="comment-body">
                                                <div class="comment-author">
                                                    <img class="avatar photo" src="images/author.jpg" alt="">
                                                </div>
                                                <div class="comment-info">
                                                    <div class="au-info-section">
                                                        <div class="au-info">
                                                            <cite class="fn">Kevin martine</cite>
                                                            <span class="fn-date">17-10-2024</span>
                                                        </div>
                                                        <div class="au-rating">
                                                            <button><i class="fa fa-star"></i></button>
                                                            <button><i class="fa fa-star"></i></button>
                                                            <button><i class="fa fa-star"></i></button>
                                                            <button><i class="fa fa-star"></i></button>
                                                            <button><i class="fa fa-star"></i></button>
                                                        </div>  
                                                    </div>
                                         
                                                    <p>Morbi consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer quis sapien nec elit ultrices euismon sit amet id lacus. Sed a imperdiet erat. Duis eu est dignissim lacus dictum hendre quis vitae mi.
                                                    </p>
                                                    
                                                </div>

                                            </div>
                                        </li>
                                        <li class="comment">
                                            
                                            <!-- COMMENT BLOCK -->
                                            <div class="comment-body">

                                                <div class="comment-author">
                                                    <img class="avatar photo" src="images/pic1.jpg" alt="">
                                                </div>
                                                <div class="comment-info">
                                                    <div class="au-info-section">
                                                        <div class="au-info">
                                                            <cite class="fn">William martine</cite>
                                                            <span class="fn-date">17-10-2024</span>
                                                        </div>
                                                        <div class="au-rating">
                                                            <button><i class="fa fa-star"></i></button>
                                                            <button><i class="fa fa-star"></i></button>
                                                            <button><i class="fa fa-star"></i></button>
                                                            <button><i class="fa fa-star"></i></button>
                                                            <button><i class="fa fa-star"></i></button>
                                                        </div>  
                                                    </div>                                              
                                                    <p>Morbi consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer quis sapien nec elit ultrices euismon sit amet id lacus. Sed a imperdiet erat. Duis eu est dignissim lacus dictum hendre quis vitae mi.
                                                    </p>
                                                    
                                                </div>

                                            </div>
                                            <!-- SUB COMMENT BLOCK -->
                                                
                                            
                                        </li>
                                        
                                    </ol>
                                    <!-- COMMENT LIST END -->
                                    
                                    <!-- LEAVE A REPLY START -->
                                    <div class="comment-respond" id="respond">
        
                                        <h3 class="comment-reply-title section-head-small mb-4" id="reply-title">Leave a Reply
                                            <small>
                                                <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a>
                                            </small>
                                        </h3>
        
                                        <form class="comment-form cons-contact-form" id="commentform" method="post">
                                            <div class="row">
                                                <div class="comment-form-author col-md-6 mb-4">
                                                    <label><span>Your Name</span></label>
                                                    <input class="form-control" type="text" value="" name="user-comment" id="author" placeholder="Your Name">
                                                </div>
                                                
                                                <div class="comment-form-email col-md-6 mb-4">
                                                    <label><span>Your Email</span></label>
                                                    <input class="form-control" type="text" value="" name="email" placeholder="Email">
                                                </div>

                                                <div class="comment-form-author col-md-12 mb-4">
                                                    <label><span>Your Website</span></label>
                                                    <input class="form-control" type="text" value="" name="user-comment" id="y-web" placeholder="Title">
                                                </div>
                                                                                                    
                                                <div class="comment-form-comment col-md-12 mb-4">
                                                    <label><span>Write a Message</span></label>
                                                    <textarea class="form-control" rows="9" name="comment" id="comment" placeholder="Comment"></textarea>
                                                </div>
                                                
                                                
                                                <div class="form-submit">
                                                    <button type="submit" class="site-button"><em>Submit Now</em></button>
                                                </div>
                                            </div>
                                            
                                        </form>
        
                                    </div>
                                    <!-- LEAVE A REPLY END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>   
            <!-- Blog Detail SECTION END -->
            

        </div>
        <!-- CONTENT END -->

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
