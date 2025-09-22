@extends('master.front')
@section('content')
<div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                  {{-- @foreach ($posts ?? [] as $post ) --}}
                    <div id="post-list">
                  @include('front.blog.list', ['posts' => $posts])
                  </div>
                  {{-- <div class="ps-post--2">
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
                  </div> --}}
                
                  {{-- @endforeach --}}

                  <div class="mt-30">
                    <div class="#">
                      {{-- {{  $posts->links() }} --}}
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
                      @foreach ($recent_posts ?? [] as  $recent_post)
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

@push('js')
<script>
$(document).on('click', '.ps-list--arrow a, .ps-tags a, .pagination a', function(e) {
    e.preventDefault();
    let url = $(this).attr('href');

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            $('#post-list').html(data);
        }
    });
});

</script>
  
@endpush