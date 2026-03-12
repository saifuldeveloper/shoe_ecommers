@extends('master.front')
@section('title')
    {{ __('Payment') }}
@endsection
<style>
    .autocomplete-items {
        position: absolute;
        border: 1px solid #ddd;
        border-top: none;
        z-index: 99;
        background: #fff;
        max-height: 150px;
        overflow-y: auto;
        width: 100%;
    }

    .autocomplete-item {
        padding: 8px;
        cursor: pointer;
    }

    .autocomplete-item:hover {
        background-color: #f1f1f1;
    }
</style>
@php
    $rewardPoint = 0;
    $usedRewardPoint = 0;
    $rewardSetting = DB::table('reward_point_systems')->first();
    if ($rewardSetting) {
        $minAmount = $rewardSetting->min_sold_amount_to_get_point ?? 0;
        $perPointAmount = $rewardSetting->sold_amount_per_point ?? 0;

        if ($cart_total >= $minAmount && $perPointAmount > 0) {
            $rewardPoint = floor($cart_total / $perPointAmount);
        }
        if (!empty($rewardSetting->redeem_amount_per_unit_point) && $rewardSetting->redeem_amount_per_unit_point > 0) {
            $usedRewardPoint = floor($cart_total / $rewardSetting->redeem_amount_per_unit_point);
        }
    }
@endphp


@section('content')
    <div class="mt-4" style="margin-top: 40px"></div>
    <div class="container padding-bottom-3x mb-4  checkut-page">
        <div class="row">
            <div class="col-xl-8 col-lg-8 checkout-page-container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('front.checkout.submit') }}" method="post">
                    @csrf
                    <input type="hidden" name="size" value="{{ Session::get('cart')['size'] ?? '' }}">
                    <input type="hidden" name="payment_method" id="selected-payment-method" value="SSLCOMMERZ">
                    <input type="hidden" name="cat_total" value="{{ PriceHelper::setCurrencyPrice($cart_total) }}">
                    <input type="hidden" name="order_id" value="{{ PriceHelper::setCurrencyPrice($cart_total) }}">
                    @if ($usedRewardPoint > 0)
                        <input type="hidden" name="user_reward_point" value="{{ $usedRewardPoint }}">
                    @endif
                    @if ($rewardPoint > 0)
                        <input type="hidden" name="reward_point" value="{{ $rewardPoint }}">
                    @endif
                    {{-- =================================================== --}}
                    {{-- DELIVERY SECTION (Shipping Details) --}}
                    {{-- =================================================== --}}
                    <div class="checkout-form-card">
                        <h2 class="checkout-title">Delivery</h2>
                        <div class="form-group-custom mb-3">
                            <select class="form-select-custom" name="ship_country" style="display: none">
                                <option value="Bangladesh" selected>Country/Region: Bangladesh</option>
                            </select>
                        </div>

                        <div class="row">
                            {{-- First Name --}}
                            <div class="col-sm-6">
                                <div class="form-group-custom">
                                    <label for="ship_name">Name</label>
                                    <input class="form-control-custom {{ $errors->has('ship_name') ? 'input-error' : '' }}"
                                        name="ship_name" type="text" id="ship_name" placeholder="Enter a name"
                                        value="{{ isset($user) ? $user->first_name . ' ' . $user->last_name : '' }}">

                                    @if ($errors->has('ship_name'))
                                        <span class="input-helper-text">Enter a name</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group-custom">
                                    <label for="ship_email">E-mail Address</label>
                                    <input
                                        class="form-control-custom {{ $errors->has('ship_email') ? 'input-error' : '' }}"
                                        name="ship_email" type="text" id="ship_email"
                                        placeholder="Enter a E-mail address"
                                        value="{{ isset($user) ? $user->email : '' }}">

                                    @if ($errors->has('ship_email'))
                                        <span class="input-helper-text">Enter a first name</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group-custom position-relative">
                                    <label for="ship_city">City</label>
                                    <input class="form-control-custom {{ $errors->has('ship_city') ? 'input-error' : '' }}"
                                        name="ship_city" type="text" placeholder="Enter a city" id="ship_city"
                                        autocomplete="off"
                                        value="{{ old('ship_city', isset($user) ? $user->ship_city : '') }}">
                                    <div id="city-list" class="autocomplete-items"></div>

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
                                        placeholder="Postal code (optional)"
                                        value="{{ isset($user) ? $user->ship_zip : '' }}">
                                </div>
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="form-group-custom">
                            <label for="ship_phone">Phone</label>
                            <input class="form-control-custom {{ $errors->has('ship_phone') ? 'input-error' : '' }}"
                                name="ship_phone" type="text" id="ship_phone"
                                placeholder="Enter a phone number to use this delivery method"
                                value="{{ isset($user) ? $user->phone : '' }}">

                            @if ($errors->has('ship_phone'))
                                <span class="input-helper-text">Enter a phone number to use this delivery method</span>
                            @endif
                        </div>

                        {{-- Address 1 --}}
                        <div class="form-group-custom">
                            <label for="ship_address1">Address</label>

                            <textarea class="form-control-custom {{ $errors->has('ship_address1') ? 'input-error' : '' }}" name="ship_address1"
                                placeholder="Enter an address" id="ship_address1">{{ isset($user) ? $user->ship_address1 : '' }}</textarea>
                            @if ($errors->has('ship_address1'))
                                <span class="input-helper-text">Enter an address</span>
                            @endif
                        </div>
                    </div>

                    {{-- =================================================== --}}
                    {{-- SHIPPING METHOD SECTION (Dropdown converted to look like a row) --}}
                    {{-- =================================================== --}}
                    <div class="checkout-form-card">
                        <h2 class="section-title">Shipping method</h2>
                        @php
                            $shippings = DB::table('shipping_services')->where('status', 1)->get();
                            $freeShipping = false;
                            foreach ($cart as $cartItem) {
                                $exists = DB::table('top_campaign_items')
                                    ->where('item_id', $cartItem->item_id)
                                    ->exists();
                                if ($exists) {
                                    $freeShipping = true;
                                    break;
                                }
                            }
                        @endphp
                        <div class="form-group-custom">
                            <label for="shipping-charge">Shipping</label>
                            <select name="shipping_charge" id="shipping-charge" class="form-select-custom">
                                @if ($freeShipping)
                                    <option value="0">Free Delivery</option>
                                @else
                                    @foreach ($shippings as $item)
                                        <option value="{{ $item->price }}">{{ $item->title }}</option>
                                    @endforeach
                                @endif
                            </select>

                        </div>
                    </div>
                    {{-- =================================================== --}}
                    {{-- PAYMENT METHOD SECTION --}}
                    {{-- =================================================== --}}
                    <div class="checkout-form-card">
                        <h2 class="section-title">Payment</h2>
                        <p style="font-size: 14px; color: #555; margin-bottom: 20px;">All transactions are secure and
                            encrypted.</p>
                        @php
                            $paymentMethods = DB::table('payment_settings')->where('status', 1)->get();
                            $rewardSetting = DB::table('reward_point_systems')->first();
                            $authUser = Auth::user();
                            $rewordPament = false;
                            if ($authUser) {
                                $usePoint = PriceHelper::rewardPointUse($cart_total);
                                $usedRewardPoint = $authUser->reward_point;

                                if ($usePoint > 0 && $usedRewardPoint >= $usePoint) {
                                    $rewordPament = true;
                                }
                            }
                        @endphp
                        {{-- Payment Options --}}
                        <div class="payment-options">
                            @foreach ($paymentMethods as $method)
                                @if ($method->unique_keyword == 'reward_point' && !$rewordPament)
                                    @continue
                                @endif
                                <div class="payment-card-custom mb-3 {{ $loop->first ? 'selected' : '' }}"
                                    data-method="{{ $method->unique_keyword }}">
                                    <label class="payment-radio-input">
                                        <span style="font-weight: 500;">{{ $method->name }}</span>
                                    </label>
                                    @if ($method->unique_keyword == 'sslcommerz')
                                        <div class="sslcommerz-details mt-2">
                                            <img src="{{ url('/storage/payments/' . $method->photo) }}"
                                                alt="{{ $method->name }}" title="{{ $method->name }}"
                                                style="width:360px; height:auto; border:2px solid #eee; border-radius:6px; margin-right:8px; vertical-align:middle;">
                                            <div class="payment-card-body">
                                                <p>{{ $method->text }}</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
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

        document.addEventListener('DOMContentLoaded', function() {
            const shippingSelect = document.getElementById('shipping-charge');
            const shippingPriceEl = document.querySelector('.shipping_price_set');
            const grandTotalEl = document.querySelector('.grand_total_set');
            const couponDiscountEl = document.querySelector('.coupon-discount-value');

            // Base total (shipping 
            const baseTotal = parseFloat(grandTotalEl.dataset.baseTotal);
            shippingSelect.addEventListener('change', function() {
                let shippingCharge = parseFloat(this.value);
                // Free shipping 
                if (isNaN(shippingCharge)) {
                    shippingCharge = 0;
                }
                // Shipping show
                shippingPriceEl.innerText = shippingCharge.toFixed(2);

                // ✅ Get coupon discount number
                let couponDiscount = 0;

                if (couponDiscountEl) {
                    couponDiscount = parseFloat(
                        couponDiscountEl.innerText.replace(/[^\d.]/g, '')
                    ) || 0;
                }

                // FINAL calculation  base + shipping
                let finalTotal = baseTotal + shippingCharge - couponDiscount;
                grandTotalEl.innerText = finalTotal.toFixed(2);
            });
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
            const initiallyCheckedRadio = document.querySelector(
                '.payment-card-custom .payment-radio-input:checked');
            if (initiallyCheckedRadio) {

                const initiallyCheckedCard = initiallyCheckedRadio.closest('.payment-card-custom');
                updateSelection(initiallyCheckedCard);
            } else if (paymentCards.length > 0) {
                updateSelection(paymentCards[0]);
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const input = document.getElementById("ship_city");
            const list = document.getElementById("city-list");
            input.addEventListener("input", function() {
                const term = this.value;

                if (term.length < 1) {
                    list.innerHTML = '';
                    return;
                }
                fetch("{{ route('front.checkout.serach.city') }}?term=" + term)
                    .then(response => response.json())
                    .then(data => {
                        list.innerHTML = '';
                        data.forEach(city => {
                            const div = document.createElement("div");
                            div.classList.add("autocomplete-item");
                            div.textContent = city;
                            div.addEventListener("click", function() {
                                input.value = city;
                                list.innerHTML = '';
                            });
                            list.appendChild(div);
                        });
                    });
            });

            // Close the dropdown if clicked outside
            document.addEventListener("click", function(e) {
                if (e.target !== input) list.innerHTML = '';
            });
        });
    </script>




    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('click', function(e) {
                let applyBtn = e.target.closest('#apply_coupon');
                if (!applyBtn) return;

                e.preventDefault();

                let codeInput = document.getElementById('coupon_code');
                let code = codeInput ? codeInput.value.trim() : '';

                if (code === "") {
                    alert("Please enter a coupon code.");
                    return;
                }

                // বাটনটি ডিসেবল করুন যাতে ডাবল ক্লিক না হয়
                applyBtn.disabled = true;

                fetch("{{ route('front.promo.submit') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({
                            code: code
                        })
                    })
                    .then(res => res.json()) 
                    .then(data => {
                        let responseData = data.original ? data.original : data;

                        if (responseData.status === true) {
                            // alert(responseData.message || "Promo code applied!");
                            // location.reload();
                        } else {
                            alert(responseData.message || "Invalid coupon");
                            applyBtn.disabled = false;
                        }
                    })
                    .catch(err => {
                        console.error("Fetch Error:", err);
                        alert("Something went wrong!");
                        applyBtn.disabled = false;
                    });
            });
        });
    </script> --}}


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('click', function(e) {
                let applyBtn = e.target.closest('#apply_coupon');
                if (!applyBtn) return;

                e.preventDefault();

                let codeInput = document.getElementById('coupon_code');
                let code = codeInput ? codeInput.value.trim() : '';

                if (code === "") {
                    alert("Please enter a coupon code.");
                    return;
                }
                // বাটন অ্যানিমেশন (Loading State)
                let originalBtnText = applyBtn.innerHTML;
                applyBtn.disabled = true;
                applyBtn.innerHTML =
                    '<span class="spinner-border spinner-border-sm" role="status"></span>...';

                fetch("{{ route('front.promo.submit') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({
                            code: code
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        let responseData = data.original ? data.original : data;

                        if (responseData.status === true) {
                            // ১. কুপন রো আপডেট বা তৈরি করা (Animation)
                            updateCouponRow(responseData.discount);

                            // ২. গ্র্যান্ড টোটাল আপডেট করা
                            updateGrandTotal(responseData.discount);

                            // ৩. বাটনের লুক পরিবর্তন
                            applyBtn.innerHTML = "{{ __('Coupon Applied') }}";
                            applyBtn.style.background = "#F8B611";
                            applyBtn.style.borderColor = "#F8B611";
                        } else {
                            alert(responseData.message || "Invalid coupon");
                            applyBtn.disabled = false;
                            applyBtn.innerHTML = originalBtnText;
                        }
                    })
                    .catch(err => {
                        console.error("Fetch Error:", err);
                        applyBtn.disabled = false;
                        applyBtn.innerHTML = originalBtnText;
                    });
            });

            // ডিসকাউন্ট রো আপডেট করার ফাংশন
            function updateCouponRow(discountAmount) {
                let couponValueCell = document.querySelector('.coupon-discount-value');

                if (couponValueCell) {
                    // যদি রো আগে থেকেই থাকে
                    flashElement(couponValueCell, discountAmount);
                } else {
                    // যদি রো না থাকে, তবে কুপন সেকশনের ঠিক নিচে নতুন রো ইনসার্ট করা
                    let couponSectionRow = document.querySelector('#apply_coupon').closest('tr');
                    let newRow = document.createElement('tr');
                    newRow.style.opacity = '0';
                    newRow.style.transition = 'all 0.5s ease';
                    newRow.innerHTML = `
                <td>Coupon Discount</td>
                <td class="coupon-discount-value" style="color:#F9B711; font-weight:bold;">${discountAmount}</td>
            `;
                    couponSectionRow.parentNode.insertBefore(newRow, couponSectionRow.nextSibling);

                    setTimeout(() => {
                        newRow.style.opacity = '1';
                    }, 10);
                }
            }

            // গ্র্যান্ড টোটাল আপডেট করার ফাংশন
            function updateGrandTotal(discount) {
                let grandTotalElement = document.querySelector('.grand_total_set');
                let baseTotal = parseFloat(grandTotalElement.getAttribute('data-base-total'));

                // ডিসকাউন্ট স্ট্রিং থেকে শুধু নাম্বার বের করা (যদি কারেন্সি সিম্বল থাকে)
                let discountValue = parseFloat(discount.toString().replace(/[^\d.-]/g, '')) || 0;
                let newGrandTotal = baseTotal - discountValue;

                // এখানে আমরা শুধু নাম্বার আপডেট করছি, সিম্বল হ্যান্ডেল করার জন্য 
                // আপনার PriceHelper এর মত ফরম্যাট জাভাস্ক্রিপ্টে করা ভালো।
                // আপাতত সরাসরি ভ্যালু বসানো হচ্ছে:
                flashElement(grandTotalElement, newGrandTotal.toFixed(2));
            }

            // ভ্যালু পরিবর্তনের সময় কালার ফ্ল্যাশ অ্যানিমেশন
            function flashElement(el, newValue) {
                el.style.transition = 'color 0.3s ease';
                el.style.color = '#F9B711'; // হাইলাইট কালার
                el.innerText = newValue;

                setTimeout(() => {
                    el.style.color = ''; // আগের কালারে ফিরে যাওয়া
                }, 500);
            }
        });
    </script>
@endsection
