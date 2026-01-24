@extends('master.front')
@section('content')
    <div class="ps-contact ps-section pb-80">
        <div class="ps-container">
            <h4 style="padding-top: 30px; padding-bottom: 26px;font-weight: 500">Find An Avijatry Store</h4>
            <div class="row">
                <!-- ✅ Store List -->
                <div class="col-md-4 mb-4">
                    <!-- Filter -->
                    <div class="mb-4" style="margin-bottom: 10px;">
                        <!-- Seraching Div -->
                        <div class="store-searching">
                            <div class="input-group  d-flex mb-2" style="display: flex">
                                <input type="text" id="storeSearch" class="form-control"
                                    placeholder="Search by district, store name or address" style="float:left">
                                <button class="btn btn-warning" id="findBtn" style="float:right">Find</button>
                            </div>
                            <div id="searchSuggestions" class="list-group" style="position: relative; z-index: 1000;">
                            </div>
                        </div>
                        <!-- Seraching Div -->
                        <label for="districtSelect" class="form-label">Select District</label>
                        <select id="districtSelect" class="form-control" style="width: 100%; border-radius: 10px;">
                            <option value="all">All Districts</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="storeListWrapper"
                        style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                        <div id="storeList" class="list-group"
                            style="max-height: 500px; overflow-y: auto; scroll-behavior: smooth;">
                            @foreach ($stores as $store)
                                <div class="list-group-item">
                                    <h6 class="mb-1">{{ $store->name }}</h6>
                                    <p class="mb-0"><strong>
                                            <i class="fas fa-map-marker-alt me-1"></i>
                                        </strong> {{ $store->area }}, {{ $store->address }}</p>
                                    <p class="mb-0"><strong>
                                            <i class="fas fa-phone-alt me-1"></i>
                                        </strong> {{ $store->mobile }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- ✅ Map -->
                <div class="col-md-8">
                    <div id="contact-map" style="height: 680px; border-radius: 10px;"></div>
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
                        <form id="contactForm" class="ps-contact__form" action="{{ route('front.contact-message.submit') }}"
                            method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="form-group">
                                        <label>Name <sub>*</sub></label>
                                        <input class="form-control" name="name" type="text"
                                            placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="form-group">
                                        <label>Email <sub>*</sub></label>
                                        <input class="form-control" name="email" type="email"
                                            placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="form-group">
                                        <label>Phone <sub>*</sub></label>
                                        <input class="form-control" name="phone" type="text"
                                            placeholder="Enter your phone number">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="form-group mb-25">
                                        <label>Your Message <sub>*</sub></label>
                                        <textarea class="form-control" rows="6" name="description" placeholder="Enter your description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="ps-btn">Send Message<i
                                                class="ps-icon-next"></i></button>
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
                                        <strong>{{ $setting->footer_address ?? '' }}</strong>
                                </header>
                                <footer>
                                    <p><i class="fa fa-envelope-o"></i><a
                                            href="{{ $setting->footer_email ?? '' }}">{{ $setting->footer_email ?? '' }}</a>
                                    </p>
                                    <p><i class="fa fa-phone"></i> {{ $setting->footer_phone ?? '' }}</p>
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
                    $services = \App\Models\Service::orderBy('created_at', 'desc')->get();
                @endphp

                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6">
                        <div class="flex h-full items-center justify-center">
                            <div class="h-full">
                                <div class="flex flex-col items-center justify-start h-full">
                                    <h3
                                        style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">
                                        <img src="{{ $service->photo ? url('/storage/service/' . $service->photo) : url('/assets/images/placeholder.png') }}"
                                            style="height:50px" loading="lazy"><br>

                                    </h3>
                                    <h3 class="comon_serviceTitle"
                                        style="box-sizing: border-box; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400">
                                        {{ $service->title }}<br></h3>
                                    <div class="text-base"
                                        style="box-sizing: border-box; margin: 0.5rem auto 1.5rem; padding: 0px; max-width: 16.3rem; line-height: 1.31; color: rgb(117, 117, 117); text-align: center;">
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

                            @if (!empty($socials) && isset($socials['icons']) && isset($socials['links']))
                                @foreach ($socials['icons'] as $index => $icon)
                                    @if (!empty($socials['links'][$index]))
                                        <a href="{{ $socials['links'][$index] }}" target="_blank">
                                            <i class="{{ $icon }}"
                                                style="width: 4px; height:40px;padding:20px;color:#f0b515"
                                                loading="lazy"></i>
                                        </a>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <h3 class="comon_serviceTitle"
                            style="box-sizing: border-box; padding: 0px; font-size: 1.25rem; color: rgb(0, 0, 0); text-align: center; font-weight: 400; margin-top: 28px">
                            Stay Connected<br></h3>
                        <p class="text-base"
                            style="box-sizing: border-box; margin: 0.5rem auto 0px; padding: 0px; max-width: 16.3rem; line-height: 1.31; color: rgb(117, 117, 117); text-align: center;">
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
        function initMap() {
            const loc = {
                lat: 23.8103,
                lng: 90.4125
            };
            new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: loc
            });
        }
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC9UyRrFn8cIqD5cAtLYg3aVSNREWuaQQ&callback=initMap"></script>
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
                            $('#formMessage').html(
                                '<div class="alert alert-danger">Something went wrong. Please try again later.</div>'
                            );
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

            /* ================= MAP INIT ================= */
            var map = L.map('contact-map').setView([25.5, 88.5], 7);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            /* ================= MARKERS & ICON ================= */
            var markers = {};

            var redIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
                shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            /* ================= RENDER STORES ON MAP ================= */
            function renderStoresOnMap(stores) {
                Object.values(markers).forEach(marker => map.removeLayer(marker));
                markers = {};

                if (!stores.length) return;

                var bounds = L.latLngBounds();

                stores.forEach(store => {
                    if (!store.latitude || !store.longitude) return;

                    var marker = L.marker(
                            [store.latitude, store.longitude], {
                                icon: redIcon
                            } // ✅ RED ICON
                        )
                        .addTo(map)
                        .bindPopup(
                            `<b>${store.name}</b><br>
                 ${store.area}, ${store.address}<br>
                 <i class="fas fa-phone-alt me-1"></i> ${store.mobile}`
                        );

                    marker.on('click', function() {
                        $('.store-item').removeClass('active');

                        var storeItem = $(`.store-item[data-id='${store.id}']`);
                        storeItem.addClass('active');

                        $('#storeList').animate({
                            scrollTop: storeItem.position().top + $('#storeList')
                                .scrollTop() - 20
                        }, 500);

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

            /* ================= RENDER STORE LIST ================= */
            function renderStoreList(stores) {
                var listHtml = '';

                if (!stores.length) {
                    listHtml = `
                <div class="list-group-item text-muted text-center">
                    No stores found.
                </div>`;
                } else {
                    stores.forEach(store => {
                        listHtml += `
                <div class="list-group-item store-item"
                     data-id="${store.id}"
                     style="cursor:pointer">
                    <h6 class="mb-1" style="font-size:17px;">${store.name}</h6>
                    <p class="mb-0">
                        <i class="fas fa-map-marker-alt me-1"style="display:none"></i>
                        ${store.area}, ${store.address}
                    </p>
                    <p class="mb-0">
                        <i class="fas fa-phone-alt me-1"></i>
                        ${store.mobile}
                    </p>
                </div>`;
                    });
                }

                $('#storeList').html(listHtml);

                $('.store-item').on('click', function() {
                    $('.store-item').removeClass('active');
                    $(this).addClass('active');

                    var id = $(this).data('id');
                    var marker = markers[id];

                    if (marker) {
                        map.flyTo(marker.getLatLng(), 15, {
                            animate: true,
                            duration: 2
                        });

                        setTimeout(() => marker.openPopup(), 1500);
                    }
                });
            }

            /* ================= INITIAL LOAD ================= */
            var allStores = @json($stores);
            renderStoresOnMap(allStores);
            renderStoreList(allStores);

            /* ================= DISTRICT FILTER ================= */
            $('#districtSelect').on('change', function() {
                var districtId = $(this).val();

                fetch(`/contact/stores/${districtId}`)
                    .then(res => res.json())
                    .then(data => {
                        renderStoresOnMap(data);
                        renderStoreList(data);

                        if (districtId !== 'all' && data.length > 0) {
                            map.flyTo(
                                [data[0].latitude, data[0].longitude],
                                11, {
                                    animate: true,
                                    duration: 2
                                }
                            );
                        } else if (districtId === 'all' && data.length > 0) {
                            var bounds = L.latLngBounds();
                            data.forEach(store => {
                                if (store.latitude && store.longitude) {
                                    bounds.extend([store.latitude, store.longitude]);
                                }
                            });

                            map.flyToBounds(bounds, {
                                animate: true,
                                duration: 2
                            });
                        }
                    });
            });

            /* ================= SEARCH (TYPE + FIND BUTTON) ================= */
            let searchTimer = null;

            function performSearch() {
                let keyword = $('#storeSearch').val().toLowerCase();
                $('#searchSuggestions').empty();

                if (keyword.length < 2) return;

                let matches = allStores.filter(store =>
                    store.name.toLowerCase().includes(keyword) ||
                    store.address.toLowerCase().includes(keyword) ||
                    store.area.toLowerCase().includes(keyword) ||
                    (store.district_name && store.district_name.toLowerCase().includes(keyword))
                );

                if (!matches.length) {
                    $('#searchSuggestions').html(
                        `<div class="list-group-item text-muted">No result found</div>`
                    );
                    return;
                }

                matches.forEach(store => {
                    $('#searchSuggestions').append(`
                <a href="javascript:void(0)"
                   class="list-group-item list-group-item-action search-item"
                   data-id="${store.id}">
                   <strong>${store.name}</strong><br>
                   <small>${store.area}, ${store.address}</small>
                </a>
            `);
                });
            }

            $('#storeSearch').on('keyup', function() {
                clearTimeout(searchTimer);
                searchTimer = setTimeout(performSearch, 400);
            });

            $('#findBtn').on('click', function() {
                performSearch();
            });

            /* ================= SEARCH RESULT CLICK ================= */
            $(document).on('click', '.search-item', function() {
                let storeId = $(this).data('id');
                let marker = markers[storeId];

                $('#searchSuggestions').empty();
                $('#storeSearch').val($(this).text());

                $('.store-item').removeClass('active');
                let storeItem = $(`.store-item[data-id='${storeId}']`);
                storeItem.addClass('active');

                $('#storeList').animate({
                    scrollTop: storeItem.position().top + $('#storeList').scrollTop() - 20
                }, 500);

                if (marker) {
                    map.flyTo(marker.getLatLng(), 15, {
                        animate: true,
                        duration: 2
                    });

                    setTimeout(() => marker.openPopup(), 1500);
                }
            });

        });
    </script>
@endpush
