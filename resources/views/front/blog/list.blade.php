@foreach ($posts ?? [] as $post)
<div class="ps-post--2">
  <div class="ps-post__thumbnail">
    <a class="ps-post__overlay" href="#"></a>
    <img src="{{ asset('assets/frontend/images/blog/4.jpg') }}" alt="">
  </div>
  <div class="ps-post__container">
    <header class="ps-post__header">
      <a class="ps-post__title" href="{{  route('front.blog.details',$post->slug)  }}">{{ $post->title }}</a>
      <p>
        Posted by <a href="#">Avijatry</a> on {{ $post->created_at->format('M d, Y') }}
        in <a href="">{{ $post->category->name ?? '' }}</a>
      </p>
    </header>
    <div class="ps-post__content">
      <p>{{ \Illuminate\Support\Str::words($post->details, 20, '...') }}</p>
    </div>
    <footer class="ps-post__footer">
      <a class="ps-post__morelink" href="{{ route('front.blog.details',$post->slug) }}">
        READ MORE<i class="ps-icon-arrow-left"></i>
      </a>
    </footer>
  </div>
</div>
@endforeach

<div class="mt-30">
  {{ $posts->links() }}
</div>
