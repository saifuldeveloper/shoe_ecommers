@php
$setting = \App\Models\Setting::first();
$pages = \App\Models\Page::where('pos',1)->orWhere('pos', 2)->orderBy('id','DESC')->get();
$brands = \App\Models\Brand::where('status',1)->where('is_popular' , 1)->orderBy('id','DESC')->get();

@endphp


<div class="ps-footer bg--cover">
    <div class="ps-footer__content">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6">
                    <aside class="ps-widget--footer ps-widget--info">
                        <header>
                            <a class="ps-logo" href="index.html"><img alt=""
                                    src="{{ asset('assets/frontend/images/logo/logo.png') }}" /></a>

                            <h3 class="ps-widget__title">About</h3>
                        </header>

                        <footer>
                            <p>{{ $setting->footer_about??"" }}</p>
                        </footer>
                    </aside>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6">
                    <aside class="ps-widget--footer ps-widget--info second">
                        <header>
                            <h3 class="ps-widget__title">Address</h3>
                        </header>

                        <footer>
                            <p>
                                <strong>{{ $setting->footer_address??""}}</strong>
                            </p>

                            <p>Phone: {{ $setting->footer_phone??""}}</p>

                            <p>
                                Email:
                                <a href="mailto:{{ $setting->footer_email??""}}">{{ $setting->footer_email??""}}</a>
                            </p>
                        </footer>
                    </aside>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <aside class="ps-widget--footer ps-widget--link">
                        <header>
                            <h3 class="ps-widget__title">Find Our store</h3>
                        </header>

                        <footer>
                            <ul class="ps-list--link">
                                <li><a href="#">Coupon Code</a></li>
                                <li><a href="#">SignUp For Email</a></li>
                                <li><a href="#">Site Feedback</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </footer>
                    </aside>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <aside class="ps-widget--footer ps-widget--link">
                        <header>
                            <h3 class="ps-widget__title">Get Help</h3>
                        </header>

                        <footer>
                            <ul class="ps-list--line">
                                @foreach($pages ?? [] as $page)
                                <li><a href="{{ route('front.page',$page->slug) }}">{{ $page->title }}</a></li>
                                @endforeach
                            </ul>
                        </footer>
                    </aside>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <aside class="ps-widget--footer ps-widget--link">
                        <header>
                            <h3 class="ps-widget__title">Popular Brands</h3>
                        </header>

                        <footer>
                            <ul class="ps-list--line">
                                @foreach($brands ?? [] as $brand)
                                <li><a href="{{ route('front.brand',$brand->slug) }}">{{ $brand->name }}</a></li>
                                @endforeach
                            </ul>
                        </footer>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-footer__copyright">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p>
                        &copy; {{ date('Y') }} {{ $setting->copy_right ?? 'Avijatry' }}
                        Developed by <a href="#"> {{ $setting->title ?? ""}}</a>
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul class="ps-social">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
