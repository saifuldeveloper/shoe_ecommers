@extends('master.front')
@section('content')

<div class="store_location">
    <div class="container-fluid py-4">
    <h4 class="mb-3 titleStorelocate">Find an Avijatry Store</h4>
    <div class="row">
        <!-- Left side -->
        <div class="col-md-4 mb-3">
        <!-- Search -->
        <div class="search-section">
            <input type="text" class="form-control" placeholder="Store Location">
            <button class="btn_storelocation">Find</button>
        </div>

        <!-- Dropdown filters -->
        <div class="filter-section d-flex items-right mb-3">
            <select class="form-select me-2">
            <option>Sylhet</option>
            <option>Dhaka</option>
            <option>Chattogram</option>
            </select>
            <select class="form-select">
              <option>All Districts</option>
              @foreach ($districts as $district)
                <option>{{ $district->name }}</option>
              @endforeach
            </select>
        </div>

        <!-- Store List -->
        <div class="store-list">
          @foreach ($stores as $store)
              <div class="store-item">
              <h6 class="fw-bold">{{ $store->name }}</h6>
              <p class="mb-1 small">{{ $store->address }}, {{ $store->area }}</p>
              <p class="mb-0 text-primary"><i class="bi bi-telephone"></i> {{ $store->mobile }}</p>
              </div>
             @endforeach
           
        </div>
        </div>

        <!-- Right side (Map) -->
        <div class="col-md-8">
        <div class="map-container">
            <!-- Google Maps Embed -->
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.204882108035!2d91.88072231498524!3d24.89492998404771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552c9cdb8a5f%3A0x9c769b9e5f64c0a0!2sSylhet!5e0!3m2!1sen!2sbd!4v1694824427155!5m2!1sen!2sbd" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
            </iframe>
        </div>
        </div>
    </div>
    </div>
</div>

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



@endsection
