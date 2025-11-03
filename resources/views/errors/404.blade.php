@extends('master.front')

@section('title')
    {{ __('404 | Not Found') }}
@endsection

@section('content')
 
    <section class="fourzerofour py-5 my-5">
        <div class="container py-5 mt-5 mb-3">
          <div class="row">
            <div class="col-lg-12">
            <div class="fof-wrapper">

              <div class="content">
                <h1>404</h1>
                <p>
              <span>
                Oops... the page you looking for clocked out!
              </span>
              </p>
                
                <a href="/" class="btn"> <span>Return to Store</span></a>
                <a href="{{ route('front.product.collection.all') }}" class="btn"><span> Shop the Collections</span> </a>
                
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
@endsection



