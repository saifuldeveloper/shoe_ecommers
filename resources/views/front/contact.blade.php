@extends('master.front')
@section('content')
  <div class="ps-contact ps-section pb-80">
        <div id="contact-map" data-address="New York, NY" data-title="Shoe Store!" data-zoom="17"></div>
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header mb-50">
                    <h2 class="ps-section__title" data-mask="Contact">- Get in touch</h2>
                      @include('alerts.alerts')
                      
                      <!-- Ajax message show  -->
                      <div id="formMessage"></div>
                      <form id="contactForm" class="ps-contact__form" action="{{ route('front.contact-message.submit') }}" method="post">
                          @csrf
                          <div class="row">   
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                  <div class="form-group">
                                      <label>Name <sub>*</sub></label>
                                      <input class="form-control" name="name" type="text" placeholder="Enter your name">
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                  <div class="form-group">
                                      <label>Email <sub>*</sub></label>
                                      <input class="form-control" name="email" type="email" placeholder="Enter your email">
                                  </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                  <div class="form-group">
                                      <label>Phone <sub>*</sub></label>
                                      <input class="form-control" name="phone" type="text" placeholder="Enter your phone number">
                                  </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                  <div class="form-group mb-25">
                                      <label>Your Message <sub>*</sub></label>
                                      <textarea class="form-control" rows="6" name="description" placeholder="Enter your description"></textarea>
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="ps-btn">Send Message<i class="ps-icon-next"></i></button>
                                  </div>
                              </div>
                          </div>
                      </form>


                  
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="">
                    <div class="row">
                            <div class="ps-contact__block" data-mh="contact-block">
                              <header>
                                <h3> 
                                <strong>{{ $setting->footer_address??""}}</strong>
                              </header>
                              <footer>
                                <p><i class="fa fa-envelope-o"></i><a href="{{ $setting->footer_email??""}}">{{ $setting->footer_email??""}}</a></p>
                                <p><i class="fa fa-phone"></i> {{ $setting->footer_phone??""}}</p>
                              </footer>
                            </div>
                    </div>
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

@push('js')
<script>
$(document).ready(function(){
    $('#contactForm').on('submit', function(e){
        e.preventDefault(); // form normal submit 

        let form = $(this);
        let url = form.attr('action');
        let formData = form.serialize();

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            success: function(response){
                $('#formMessage').html(
                    '<div class="alert alert-success">Thank you for contacting with us, we will get back to you shortly.</div>'
                );
                $('#contactForm')[0].reset(); // form clear
            },
            error: function(xhr){
                if(xhr.status === 422){ 
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function(key, value){
                        errorHtml += '<li>'+ value[0] +'</li>';
                    });
                    errorHtml += '</ul></div>';
                    $('#formMessage').html(errorHtml);
                } else {
                    $('#formMessage').html('<div class="alert alert-danger">Something went wrong. Please try again later.</div>');
                }
            }
        });
    });
});
</script>
@endpush