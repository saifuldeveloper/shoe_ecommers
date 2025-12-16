@extends('master.front')
@section('title')
    {{ __('Payment') }}
@endsection
@section('content')
<div class="mt-4" style="margin-top: 40px"></div>
  
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-4  checkut-page">
        <div class="row">
            <!-- Payment Methode-->
                <div class="col-xl-8 col-lg-8 checkout-page-container">
    @if ($errors->any())
        {{-- Your existing error display logic --}}
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
        <input type="hidden" name="payment_method" id="selected-payment-method" value="SSLCOMMERZ"> 
        <input type="hidden" name="cat_total" value="{{ PriceHelper::setCurrencyPrice($cart_total) }}">

        {{-- =================================================== --}}
        {{-- DELIVERY SECTION (Shipping Details) --}}
        {{-- =================================================== --}}
        <div class="checkout-form-card">
            <h2 class="checkout-title">Delivery</h2>
            <div class="form-group-custom mb-3">
                <select class="form-select-custom" name="ship_country">
                    <option value="Bangladesh" selected>Country/Region: Bangladesh</option>
                </select>
            </div>

            <div class="row">
                {{-- First Name --}}
                <div class="col-sm-6">
                    <div class="form-group-custom">
                        <label for="ship_name">Name</label>
                        <input class="form-control-custom {{ $errors->has('ship_name') ? 'input-error' : '' }}" name="ship_name" type="text" id="ship_name"
                            placeholder="Enter a name"
                            value="{{ isset($user) ? $user->ship_name : '' }}">
                   
                        @if ($errors->has('ship_name'))
                            <span class="input-helper-text">Enter a name</span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group-custom">
                        <label for="ship_email">E-mail Address</label>
                        <input class="form-control-custom {{ $errors->has('ship_email') ? 'input-error' : '' }}" name="ship_email" type="text" id="ship_email"
                            placeholder="Enter a E-mail address"
                           value="{{ isset($user) ? $user->email : '' }}">
                     
                        @if ($errors->has('ship_email'))
                            <span class="input-helper-text">Enter a first name</span>
                        @endif
                    </div>
                </div>
            
            </div>
            <div class="row">
                {{-- City (ship_city) --}}
                <div class="col-sm-6">
                    <div class="form-group-custom">
                        <label for="ship_city">City</label>
                        <input class="form-control-custom {{ $errors->has('ship_city') ? 'input-error' : '' }}" name="ship_city" type="text"
                            placeholder="Enter a city" id="ship_city" value="{{ isset($user) ? $user->ship_city : '' }}">
                    
                        @if ($errors->has('ship_city'))
                            <span class="input-helper-text">Enter a city</span>
                        @endif
                    </div>
                </div>
                {{-- Postal Code (Optional) --}}
                <div class="col-sm-6">
                    <div class="form-group-custom">
                        <label for="ship_zip">Postal code (optional)</label>
                        <input class="form-control-custom" name="ship_zip" type="text" id="ship_zip" 
                            placeholder="Postal code (optional)" value="{{ isset($user) ? $user->ship_zip : '' }}">
                    </div>
                </div>
            </div>

            {{-- Phone --}}
            <div class="form-group-custom">
                <label for="ship_phone">Phone</label>
                <input class="form-control-custom {{ $errors->has('ship_phone') ? 'input-error' : '' }}" name="ship_phone" type="text" id="ship_phone"
                    placeholder="Enter a phone number to use this delivery method" value="{{ isset($user) ? $user->phone : '' }}">
             
                @if ($errors->has('ship_phone'))
                    <span class="input-helper-text">Enter a phone number to use this delivery method</span>
                @endif
            </div>

             {{-- Address 1 --}}
            <div class="form-group-custom">
                <label for="ship_address1">Address</label>
                <textarea class="form-control-custom {{ $errors->has('ship_address1') ? 'input-error' : '' }}" name="ship_address1" type="text"
                    placeholder="Enter an address" id="ship_address1"> 
                    {{ isset($user) ? $user->ship_address1 : '' }}
                </textarea>
            
                 @if ($errors->has('ship_address1'))
                     <span class="input-helper-text">Enter an address</span>
                 @endif
            </div>
            {{-- Checkboxes --}}
            {{-- <div class="mt-3">
                <label class="custom-checkbox-label">
                    <input type="checkbox" name="text_me">
                    <span></span>
                    Text me with news and offers
                </label>
                <label class="custom-checkbox-label">
                    <input type="checkbox" name="terms" required>
                    <span></span>
                    I have read and agreed to the website <a href="#" style="color: #007bff; margin-left: 5px;">terms and conditions</a>.
                </label>
            </div> --}}
        </div>

        {{-- =================================================== --}}
        {{-- SHIPPING METHOD SECTION (Dropdown converted to look like a row) --}}
        {{-- =================================================== --}}
        <div class="checkout-form-card">
            <h2 class="section-title">Shipping method</h2>
             @php
            $shippings = DB::table('shipping_services')->where('status', 1)->get();
        @endphp
            <div class="form-group-custom">
                <label for="shipping-charge">Shipping</label>
                <select name="shipping_charge" id="shipping-charge" class="form-select-custom">
                    @foreach ($shippings as $item)
                        <option value="{{ $item->price }}">{{ $item->title }}</option>
                    @endforeach
                </select>
               
            </div>
        </div>


        {{-- =================================================== --}}
        {{-- PAYMENT METHOD SECTION --}}
        {{-- =================================================== --}}
        <div class="checkout-form-card">
            <h2 class="section-title">Payment</h2>
            <p style="font-size: 14px; color: #555; margin-bottom: 20px;">All transactions are secure and encrypted.</p>

          @php
            $paymentMethods = DB::table('payment_settings')->where('status', 1)->get();
        @endphp
            
            {{-- Payment Options --}}
          <div class="payment-options">
            @foreach($paymentMethods as $method)
            <div class="payment-card-custom mb-3 {{ $loop->first ? 'selected' : '' }}" data-method="{{ $method->unique_keyword }}">
           <label class="payment-radio-input">
                <span style="font-weight: 500;">{{ $method->name }}</span>
                
            </label>
                
                @if($method->unique_keyword == 'sslcommerz') 
                    {{-- Move image and body outside the main label for SSLCOMMERZ --}}
                    <div class="sslcommerz-details mt-2"> {{-- Added a div for cleaner grouping --}}
                        <img src="{{ url('/storage/payments/' . $method->photo) }}" alt="{{ $method->name }}" title="{{ $method->name }}" style="width:360px; height:auto; border:2px solid #eee; border-radius:6px; margin-right:8px; vertical-align:middle;">
                        <div class="payment-card-body">
                            <p>After clicking "Pay now" - you will be redirected to SSLCOMMERZ to complete your purchase securely.</p>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

            {{-- PAY BUTTON --}}
            <button type="submit" class="pay-button-custom">Pay now</button>
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentCards = document.querySelectorAll('.payment-card-custom');
        // SSLCOMMERZ
        const paymentBodies = document.querySelectorAll('.payment-card-body'); 
     
        const hiddenPaymentInput = document.getElementById('selected-payment-method');

        // Body-
        const styleSheet = document.createElement('style');
        styleSheet.textContent = '.payment-card-body { display: none; }';
        document.head.appendChild(styleSheet);


        // 1. Selection ও Collapsible State 
        function updateSelection(cardElement) {
          
            paymentCards.forEach(card => card.classList.remove('selected'));
            paymentBodies.forEach(body => body.style.display = 'none');
            cardElement.classList.add('selected');
            
            const cardBody = cardElement.querySelector('.payment-card-body');
            if (cardBody) {
                cardBody.style.display = 'block'; 
            }
            
    
            const method = cardElement.getAttribute('data-method');
            if (hiddenPaymentInput) {
                hiddenPaymentInput.value = method;
            }
        }

        // 2. Click Event Listener 
        paymentCards.forEach(card => {
            card.addEventListener('click', function() {
                // radio btn
                const radio = this.querySelector('.payment-radio-input');
                if (radio) {
                    radio.checked = true;
                    updateSelection(this);
                }
            });
        });

        // 3. Initial Setup: 
        const initiallyCheckedRadio = document.querySelector('.payment-card-custom .payment-radio-input:checked');
        if (initiallyCheckedRadio) {
          
            const initiallyCheckedCard = initiallyCheckedRadio.closest('.payment-card-custom');
            updateSelection(initiallyCheckedCard);
        } else if (paymentCards.length > 0) {
            updateSelection(paymentCards[0]);
        }
    });
</script>
@endsection
