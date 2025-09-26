@extends('master.front')
@section('title')
    {{ __('Payment') }}
@endsection
@section('content')
    <!-- Page Title-->
    <div class="page-title">
        <div class="container">
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('front.index') }}">{{ __('Home') }}</a> </li>
                    <li class="separator"></li>
                    <li>{{ __('Review your order and pay') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-4  checkut-page">
        <div class="row">
            <!-- Payment Methode-->
            <div class="col-xl-8 col-lg-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('front.checkout.submit')}}" method="post">
                    @csrf
                    {{-- hidden inputs --}} 
                    <input type="hidden" name="size" value="{{ Session::get('cart')['size'] ?? '' }}">
                <div class="card">
                    <div class="card-body">
                        <h6 class="pb-2">{{ __('Review Your Order') }} :</h6>
                        <hr>
                        {{-- <form id="checkout-form" action="{{ route('front.checkout.shipping.store') }}" method="POST">
                            @csrf --}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('Name *') }}</label>
                                        <input required class="form-control" name="ship_name" type="text" id="name"
                                            placeholder="
                                        Your Name *"
                                            value="{{ isset($user) ? $user->first_name : '' }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="checkout-phone">{{ __('Phone *') }}</label>
                                        <input class="form-control" name="ship_phone" type="text" id="checkout-phone"
                                            value="{{ isset($user) ? $user->phone : '' }}" placeholder="Phone *">
                                    </div>
                                </div>

                            </div>
                            {{-- <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="checkout-email">{{ __('E-mail Address') }}</label>
                                        <input class="form-control" name="ship_email" type="email" id="checkout-email"
                                            placeholder="Email" value="{{ isset($user) ? $user->email : '' }}">
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="checkout-city">{{ __('City') }}</label>
                                        <input class="form-control" name="ship_city" required type="text"
                                            id="checkout-city" value="{{ isset($user) ? $user->ship_city : '' }}">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="checkout-address1">{{ __('Address') }} </label>
                                        <input class="form-control" name="ship_address1" required type="text"
                                            placeholder="Address" id="checkout-address1"
                                            value="{{ isset($user) ? $user->ship_address1 : '' }}">
                                    </div>
                                </div>
                            </div>

                            @php
                                $shippings = DB::table('shipping_services')->where('status', 1)->get();
                            @endphp

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="checkout-address1">{{ __('Shipping  ') }} </label>
                                        <select name="shipping_charge" id="shipping-charge" class="form-control">
                                            @foreach ($shippings as $item)
                                                <option value="{{ $item->price }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        {{-- </form> --}}

                        <h6>{{ __('Pay with') }} :</h6>
                        @php
                            $gateways = DB::table('payment_settings')->whereStatus(1)->first();
                        @endphp
                        <div class="row mt-4">
                            <div class="col-3">
                                <div class="card payment-card mb-3">
                                    <div class="card-body text-center">
                                        @php
                                            $paymentMethods = DB::table('payment_settings')->where('status', 1)->get();
                                        @endphp
                                        <div class="d-flex flex-column align-items-center">
                                            @foreach($paymentMethods as $method)
                                                <label class="d-block mb-2" style="cursor:pointer;">
                                                    <input type="radio" name="payment_method" value="{{ $method->unique_keyword }}" class="d-none payment-radio" {{ $loop->first ? 'checked' : '' }}>
                                                    <img src="{{ url('/storage/payments/' . $method->photo) }}" alt="{{ $method->name }}" title="{{ $method->name }}" style="width:120px; height:auto; border:2px solid #eee; border-radius:6px; margin-right:8px; vertical-align:middle;">
                                                    <span>{{ $method->name }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const radios = document.querySelectorAll('.payment-radio');
                                                radios.forEach(radio => {
                                                    radio.addEventListener('change', function() {
                                                        radios.forEach(r => r.parentElement.style.border = '');
                                                        if(this.checked) {
                                                            // this.parentElement.style.border = '1px solid #007bff';
                                                        }
                                                    });
                                                    if(radio.checked) {
                                                        // radio.parentElement.style.border = '1px solid #007bff';
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">Payment Submit</button>
                    </div>
                </div>
                </form>
            </div>
            @include('includes.checkout_sitebar', $cart)
        </div>
    </div>
    <div class="mt-4" style="margin-top: 120px"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var form = document.getElementById('checkout-form');
            var paymentMethodLinks = document.querySelectorAll('.single-payment-method');
            paymentMethodLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    if (validateForm()) {
                        // AJAX form submission using jQuery
                        var csrfToken = form.querySelector('input[name="_token"]').value;
                        var url = form.action;

                        $.ajax({
                            url: form.action,
                            method: form.method,
                            data: $(form).serialize(), // Serialize the form using jQuery
                            headers: {
                                'X-CSRF-TOKEN': csrfToken
                            },
                            success: function(response) {
                                var targetModalId = link.firstElementChild.getAttribute(
                                    'data-bs-target');
                                if (targetModalId) {
                                    var targetModal = document.getElementById(
                                        targetModalId.substring(
                                            1));
                                    if (targetModal) {
                                        var modal = new bootstrap.Modal(targetModal);
                                        modal.show();
                                    }
                                }


                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.error('Error:', errorThrown);
                            }
                        });
                    } else {
                        console.log('Form validation failed. Modal not opened.');
                    }

                });

                function validateForm() {
                    var nameInput = document.getElementById('name');
                    var phoneInput = document.getElementById('checkout-phone');
                    var addressInput = document.getElementById('checkout-address1');

                    var isValid = true;

                    if (nameInput.value.trim() === '') {
                        markAsError(nameInput, 'Please enter your name ');
                        isValid = false;
                    }
                    // if (emailInput.value.trim() === '' || !isValidEmail(emailInput.value)) {
                    //     markAsError(emailInput, 'Please enter a valid email address.');
                    //     isValid = false;
                    // }
                    if (phoneInput.value.trim() === '') {
                        markAsError(phoneInput, 'Please enter your phone');
                        isValid = false;
                    }
                    // if (cityInput.value.trim() === '') {
                    //     markAsError(cityInput, 'City is required.');
                    //     isValid = false;
                    // }
                    if (addressInput.value.trim() === '') {
                        markAsError(addressInput, 'Address .');
                        isValid = false;
                    }

                    return isValid;
                }

                function isValidEmail(email) {
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return emailRegex.test(email);
                }
                // Function to mark input fields as error
                function markAsError(inputElement, errorMessage) {
                    removeErrorStyles(inputElement);
                    inputElement.style.border = '2px solid red';
                    var errorElement = document.createElement('span');
                    errorElement.textContent = errorMessage;
                    errorElement.classList.add('error-message');
                    errorElement.style.color = 'red';
                    errorElement.style.fontSize = '14px';
                    errorElement.style.display = 'block';
                    inputElement.parentNode.appendChild(errorElement);
                }

                function removeErrorStyles(inputElement) {
                    inputElement.style.border = '';
                    var errorElement = inputElement.parentNode.querySelector('.error-message');
                    if (errorElement) {
                        errorElement.remove();
                    }
                }

                var formInputs = form.querySelectorAll('input');
                formInputs.forEach(function(input) {
                    input.addEventListener('input', function() {
                        removeErrorStyles(input);
                    });
                });


            });
        });

        //    shipping calucation
        var selectElement = document.getElementById('shipping-charge');

            selectElement.addEventListener('change', function() {
        
            var selectedValue = parseFloat(this.value);

            var shippingPriceElements = document.querySelector('.shipping_price_set').innerText=selectedValue;
            var grandTotalElement = document.querySelector('.grand_total_get');
            var grandTotalText = grandTotalElement.innerText;
            var grandTotalNumber = parseFloat(grandTotalText.replace(/[^\d.]/g, ''));
            var total =grandTotalNumber + selectedValue;
            var grandTotalElement = document.querySelector('.grand_total_set').innerText=total;

        });
    </script>
@endsection
