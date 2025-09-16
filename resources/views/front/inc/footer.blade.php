@php
$setting = \App\Models\Setting::first();
$pages = \App\Models\Page::where('pos',1)->orWhere('pos', 2)->orderBy('id','DESC')->get();
$brands = \App\Models\Brand::where('status',1)->where('is_popular' , 1)->orderBy('id','DESC')->get();

@endphp
<div class="service_main_content">
  <div class="service_section">
     <div class="row">
        <!-- Fast Delivery -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6">
          <div class="flex h-full items-center justify-center">
            <div class="h-full">
              <div class="flex flex-col items-center justify-start h-full">
                <h3 style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">
                  <img src="https://storage.apex4u.com/c37cea14-1210-4ca5-b62e-a7fee2458e13.png" style="height:50px" loading="lazy"><br>
                </h3>
                <h3 class="comon_serviceTitle"  style="box-sizing: border-box; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">Fast Delivery<br></h3>
                <div class="text-base" style="box-sizing: border-box; margin: 0.5rem auto 1.5rem; padding: 0px; max-width: 16.3rem; line-height: 1.31; color: rgb(117, 117, 117); text-align: center;">
                  Get fast and hassle-free delivery of your orders to your doorstep. Ensuring a seamless and hassle-free experience.
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <!-- Super Deals -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6 ">
          <div class="flex h-full items-center justify-center">
            <div class="h-full">
              <div class="flex h-full flex-col items-center justify-start">
                <h3 style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">
                  <img style="width: 50px;" src="https://storage.apex4u.com/caa1b470-6545-4ff9-bafa-f1d2db452f0d.svg" loading="lazy"><br>
                </h3>
                <h3 class="comon_serviceTitle"  style="box-sizing: border-box;  padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">Super Deals<br></h3>
                <div class="text-base" style="box-sizing: border-box; margin: 0.5rem auto 1.5rem; padding: 0px; max-width: 16.3rem; line-height: 1.31; color: rgb(117, 117, 117); text-align: center;">
                  Stay updated on all our latest news, offers, and campaigns.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Apex Rewards -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6">
          <div class="flex h-full items-center justify-center">
            <div class="h-full">
              <div class="flex h-full flex-col items-center justify-start">
                <h3 style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">
                  <img style="width: 35px;" src="https://storage.apex4u.com/eaa1ca5b-3448-48b9-9ae3-05a0e2782762.svg" loading="lazy"><br>
                </h3>
                <h3 class="comon_serviceTitle" style="box-sizing: border-box;  padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">Apex Rewards<br></h3>
                <div class="text-base" style="box-sizing: border-box; margin: 0.5rem auto 1.5rem; padding: 0px; max-width: 16.3rem; line-height: 1.31; color: rgb(117, 117, 117); text-align: center;">
                  Unlock a world of exciting benefits with Apex Rewards loyalty program.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Stay Connected -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6 stayConnet">
          <div class="flex h-full items-center justify-center">
                <div class="serviceIcon">
                    <a href="https://www.facebook.com/apex4u/" target="_blank">
                      <img src="https://storage.apex4u.com/304ea012-a1d6-4e0e-a7c8-497c16d0838c.jpg" style="width: 30px; height:30px" loading="lazy">
                    </a>
                    <a href="https://www.instagram.com/apex_footwear/" target="_blank">
                      <img src="https://storage.apex4u.com/21c4fcd8-40a4-4299-9384-417029ca6456.png" style="width: 30px;height:30px" loading="lazy">
                    </a>
                    <a href="https://www.youtube.com/channel/UCM8xOkkmedmTdT6yuN-Ughg" target="_blank">
                      <img src="https://storage.apex4u.com/45e37e99-4209-42aa-89ec-f571d77e850e.jpg" style="width: 30px;height:30px" loading="lazy">
                    </a>
                    <a href="https://www.linkedin.com/company/apexfootwearlimited/" target="_blank">
                      <img src="https://storage.apex4u.com/20d2a998-6052-4e02-b198-5ad0c3fe26bb.jpg" style="width: 30px; height: 30px;" loading="lazy">
                    </a>
                  </div>
                <h3 class="comon_serviceTitle" style="box-sizing: border-box; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400; margin-top: 28px">Stay Connected<br></h3>
                <p class="text-base" style="box-sizing: border-box; margin: 0.5rem auto 0px; padding: 0px; max-width: 16.3rem; line-height: 1.31; color: rgb(117, 117, 117); text-align: center;">
                  Keep up with the latest styles, news and offers on our social channels.
                </p>
          </div>
        </div>
  </div>
  </div>
</div>



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
