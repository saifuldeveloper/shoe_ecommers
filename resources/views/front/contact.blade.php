@extends('master.front')
@section('content')
<div class="ps-contact ps-section pb-80">

  <div class="ps-container">
    <!-- Filter -->
    <div class="mb-4" style="margin-bottom: 10px;">
      <label for="districtSelect" class="form-label">Select District</label>
      <select id="districtSelect" class="form-control" style="max-width: 361px; border-radius: 10px;">
        <option value="all">All Districts</option>
        @foreach($districts as $district)
        <option value="{{ $district->id }}">{{ $district->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="row">
      <!-- ✅ Store List -->
      <div class="col-md-4 mb-4">
        <div id="storeListWrapper"
          style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">

          <div id="storeList"
            class="list-group"
            style="max-height: 500px; overflow-y: auto; scroll-behavior: smooth;">
            @foreach($stores as $store)
            <div class="list-group-item">
              <h6 class="mb-1">{{ $store->name }}</h6>
              <p class="mb-0"><strong>📍</strong> {{ $store->area }}, {{ $store->address }}</p>
              <p class="mb-0"><strong>📞</strong> {{ $store->mobile }}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>


      <!-- ✅ Map -->
      <div class="col-md-8">
        <div id="contact-map" style="height: 500px; border-radius: 10px;"></div>
      </div>
    </div>
  </div>

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
            @php
               $services = \App\Models\Service::orderBy('created_at', 'desc')->take(3)->get();
            @endphp

      @foreach ($services as $service) 
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6">
        <div class="flex h-full items-center justify-center">
          <div class="h-full">
            <div class="flex flex-col items-center justify-start h-full">
              <h3 style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">
                <img src="{{ $service->photo ? url('/storage/service/'.$service->photo) : url('/assets/images/placeholder.png') }}" style="height:50px" loading="lazy"><br>

              </h3>
              <h3 class="comon_serviceTitle" style="box-sizing: border-box; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">{{ $service->title }}<br></h3>
              <div class="text-base" style="box-sizing: border-box; margin: 0.5rem auto 1.5rem; padding: 0px; max-width: 16.3rem; line-height: 1.31; color: rgb(117, 117, 117); text-align: center;">
               {{ $service->details }}
              </div>

            </div>
          </div>
        </div>
      </div>
      @endforeach
      
      <!-- Stay Connected -->
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6 stayConnet">
        <div class="flex h-full items-center justify-center">
          <div class="serviceIcon">

            @php
          
                $socials = json_decode($setting->social_link, true);
            @endphp
  
            @if(!empty($socials) && isset($socials['icons']) && isset($socials['links']))

            @foreach($socials['icons'] as $index => $icon)
                            @if(!empty($socials['links'][$index]))

                            <a href="{{ $socials['links'][$index] }}" target="_blank">
                                        <i class="{{ $icon }}" style="width: 4px; height:40px" loading="lazy"></i>
                                    </a>

           
            {{-- <a href="https://www.facebook.com/apex4u/" target="_blank">
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
            </a> --}}

            @endif
                        @endforeach

              @endif
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
  $(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
      e.preventDefault(); // form normal submit 

      let form = $(this);
      let url = form.attr('action');
      let formData = form.serialize();

      $.ajax({
        url: url,
        type: "POST",
        data: formData,
        success: function(response) {
          $('#formMessage').html(
            '<div class="alert alert-success">Thank you for contacting with us, we will get back to you shortly.</div>'
          );
          $('#contactForm')[0].reset(); // form clear
        },
        error: function(xhr) {
          if (xhr.status === 422) {
            let errors = xhr.responseJSON.errors;
            let errorHtml = '<div class="alert alert-danger"><ul>';
            $.each(errors, function(key, value) {
              errorHtml += '<li>' + value[0] + '</li>';
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



<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


<script>
  $(document).ready(function() {
    var map = L.map('contact-map').setView([25.5, 88.5], 7);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var markers = {};

    // ✅ Render stores on map
    function renderStoresOnMap(stores) {
      Object.values(markers).forEach(marker => map.removeLayer(marker));
      markers = {};

      if (!stores.length) return;

      var bounds = L.latLngBounds();

      stores.forEach(store => {
        if (!store.latitude || !store.longitude) return;

        // ✅ Create marker
        var marker = L.marker([store.latitude, store.longitude])
          .addTo(map)
          .bindPopup(`<b>${store.name}</b><br>${store.area}, ${store.address}<br>📞 ${store.mobile}`);

        // ✅ When clicking on marker → highlight corresponding store in list
        marker.on('click', function() {
          // Remove highlight from all
          $('.store-item').removeClass('active');

          // Highlight the matching store
          var storeItem = $(`.store-item[data-id='${store.id}']`);
          storeItem.addClass('active');

          // Smoothly scroll into view
          $('#storeList').animate({
            scrollTop: storeItem.position().top + $('#storeList').scrollTop() - 20
          }, 500);

          // Smooth map fly
          map.flyTo(marker.getLatLng(), 15, {
            animate: true,
            duration: 2
          });
        });

        markers[store.id] = marker;
        bounds.extend([store.latitude, store.longitude]);
      });

      map.fitBounds(bounds);
      map.invalidateSize();
    }


    // ✅ Render store list (clickable)
    function renderStoreList(stores) {
      var listHtml = '';

      if (!stores.length) {
        listHtml = `<div class="list-group-item text-muted text-center">No stores found.</div>`;
      } else {
        stores.forEach(store => {
          listHtml += `
                    <div class="list-group-item store-item" data-id="${store.id}" style="cursor: pointer;">
                        <h6 class="mb-1">${store.name}</h6>
                        <p class="mb-0"><strong>📍</strong> ${store.area}, ${store.address}</p>
                        <p class="mb-0"><strong>📞</strong> ${store.mobile}</p>
                    </div>
                `;
        });
      }

      $('#storeList').html(listHtml);

      // ✅ Handle click on store item
      $('.store-item').on('click', function() {
        // 🔹 Remove active border from others
        $('.store-item').removeClass('active');

        // 🔹 Highlight the clicked one
        $(this).addClass('active');

        var id = $(this).data('id');
        var marker = markers[id];
        if (marker) {
          map.flyTo(marker.getLatLng(), 15, {
            animate: true,
            duration: 2
          });
          setTimeout(() => marker.openPopup(), 2000);
        }
      });
    }

    // ✅ Initial render with all stores
    var allStores = @json($stores);
    renderStoresOnMap(allStores);
    renderStoreList(allStores);

    // ✅ Filter stores by district
    $('#districtSelect').on('change', function() {
      var districtId = $(this).val();

      fetch(`/contact/stores/${districtId}`)
        .then(res => res.json())
        .then(data => {
          renderStoresOnMap(data);
          renderStoreList(data);

          // ✅ Smooth behavior for single district
          if (districtId !== 'all' && data.length > 0) {
            var firstStore = data[0];
            map.flyTo([firstStore.latitude, firstStore.longitude], 11, {
              animate: true,
              duration: 2
            });
          }
          // ✅ When 'All Districts' selected — show all stores smoothly
          else if (districtId === 'all' && data.length > 0) {
            var bounds = L.latLngBounds();
            data.forEach(store => {
              if (store.latitude && store.longitude) {
                bounds.extend([store.latitude, store.longitude]);
              }
            });
            map.flyToBounds(bounds, {
              animate: true,
              duration: 2 // smooth zoom for "All Districts"
            });
          }
        });
    });


  });
</script>

@endpush