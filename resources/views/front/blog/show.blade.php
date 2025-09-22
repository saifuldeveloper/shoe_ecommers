@extends('master.front')
@section('content')
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Shoe Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Shoe Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Shoe Store</p>
      </div>
    </div>

      <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                  <div class="ps-post--detail">
                    <div class="ps-post__thumbnail"><img src="images/blog/11.png" alt=""></div>
                    <div class="ps-post__header">
                      <h3 class="ps-post__title">{{ $post->title }}</h3>
                      <p class="ps-post__meta">Posted by <a href="#">Avijatry</a> {{ $post->created_at->format('M d, Y') }} <a href="#">   {{  $categories[0]['name']  }} </a> </p>
                    </div>
                    <div class="ps-post__content">
                       {{  $post->details  }}
                    </div>
                
                  </div>
               
                 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>All Categories</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-list--arrow">
                        @foreach ($categories ?? [] as  $category)
                          <li class="current">
                            <a href="{{ route('front.blog', ['category' => $category->slug]) }}">
                           {{ $category->name }} ({{ $category->posts_count }}) 
                        </a></li>
                        @endforeach
                      </ul>
                    </div>
                  </aside>
                 
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Recent Posts</h3>
                    </div>
                    <div class="ps-widget__content">
                     @foreach ($posts ?? [] as  $recent_post)
                      <div class="ps-post--sidebar">
                        <div class="ps-post__content"><a class="ps-post__title" href="{{ route('front.blog.details',$recent_post->slug) }}">{{ $recent_post->title }}</a><span>{{ $recent_post->created_at->format('M d, Y') }}</span></div>
                      </div>
                      @endforeach
                    </div>
                  </aside>
                
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Tags</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-tags">
                        @foreach ($tags ?? [] as $tag )
                        <li><a href="{{ route('front.blog',$tag) }}">{{ $tag }}</a></li>
                          @endforeach
                      </ul>
                    </div>
                  </aside>
                </div>
          </div>
        </div>
      </div>


@endsection