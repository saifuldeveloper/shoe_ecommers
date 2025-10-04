@foreach ($posts ?? [] as $post)
 @php
    $photos = json_decode($post->photo, true);
@endphp   
<div class="ps-post--2">
     <div class="ps-post__thumbnail">
      <a class="ps-post__overlay" href="#"></a>
      @if(!empty($photos) && count($photos) > 0)
        @foreach($photos as $img)
            <img  alt="" src="{{ Storage::url('blog/' . $img) }}" />
        @endforeach
    @else
        <img alt="default" src="{{ asset('assets/images/default.jpg') }}" />
    @endif
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
