@extends('master.front')
@section('content')
<div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                  @foreach ($posts ?? [] as $post )
                    
                  <div class="ps-post--2">
                    <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="#"></a><img src="{{ asset('assets/frontend/images/blog/4.jpg')}}" alt=""></div>
                    <div class="ps-post__container">
                      <header class="ps-post__header"><a class="ps-post__title" href="">{{ $post->title }}</a>
                        <p>Posted by <a href="#">Avijatry</a> on {{ $post->created_at->format('M d, Y') }}  in <a href="">{{ $categories[0]['name'] }}</a></p>
                      </header>
                      <div class="ps-post__content">
                           <p>
                              {{  Illuminate\Support\Str::words($post->details, 20, '...')  }}
                             </p>
                      </div>
                      <footer class="ps-post__footer">
                        <a class="ps-post__morelink" href="{{ route('front.blog.details',$post->slug) }}">READ MORE<i class="ps-icon-arrow-left"></i></a>
                       
                      </footer>
                    </div>
                  </div>
                
                  @endforeach

                  <div class="mt-30">
                    <div class="ps-pagination">
                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                  <aside class="ps-widget--sidebar ps-widget--search">
                    <form class="ps-search--widget" action="do_action" method="post">
                      <input class="form-control" type="text" placeholder="Search posts...">
                      <button><i class="ps-icon-search"></i></button>
                    </form>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Archive</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-list--arrow">
                        <li class="current"><a href="product-listing.html">Shoe(321)</a></li>
                        <li><a href="product-listing.html">Amazin’ Glazin’</a></li>
                        <li><a href="product-listing.html">The Crusty Croissant</a></li>
                        <li><a href="product-listing.html">The Rolling Pin</a></li>
                        <li><a href="product-listing.html">Skippity Scones</a></li>
                        <li><a href="product-listing.html">Mad Batter</a></li>
                        <li><a href="product-listing.html">Confection Connection</a></li>
                      </ul>
                    </div>
                  </aside>
                
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Recent Posts</h3>
                    </div>
                    <div class="ps-widget__content">
                      @foreach ($recent_posts ?? [] as  $recent_post)
                      <div class="ps-post--sidebar">
                        <div class="ps-post__content"><a class="ps-post__title" href="{{ route('front.blog.details',$recent_post->slug) }}">{{ $recent_post->title }}</a><span>{{ $post->created_at->format('M d, Y') }}</span></div>
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
                        <li><a href="#">{{ $tag }}</a></li>
                          @endforeach
                      </ul>
                    </div>
                  </aside>
                </div>
          </div>
        </div>
      </div>
@endsection