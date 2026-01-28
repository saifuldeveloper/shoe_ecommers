@extends('master.back')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class=" mb-0 bc-title"> <b>{{ __('SMS Setting') }}</b> </h3>
                </div>
            </div>
        </div>
        <!-- Form -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <form action="{{ route('back.sms.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div id="tabs">
                                            <ul class="nav nav-pills nav-secondary nav-justified mb-3" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="pill"
                                                        href="#conf">{{ __('Configuration') }}</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill"
                                                        href="#template">{{ __('SMS Section') }}</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <!-- Configuration Tab -->

                                                <div id="conf" class="tab-pane active">
                                                    <div class="col-md-8 mx-auto">
                                                        <div class="form-group">
                                                            @php
                                                                $sms = App\Models\Setting::select(
                                                                    'sms_active',
                                                                )->first();
                                                            @endphp
                                                            <label class="switch-primary">
                                                                <input type="checkbox" class="switch switch-bootstrap"
                                                                    name="sms_active" value="1"
                                                                    {{ $sms->sms_active == 1 ? 'checked' : '' }}>
                                                                <span class="switch-body"></span>
                                                                <span class="switch-text">{{ __('SMS Service') }}</span>
                                                            </label>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="provider">Provider Url</label>
                                                            <input type="text" name="sms_provider" id="provider"
                                                                value="{{ env('SMS_PROVIDER_URL') }}" class="form-control"
                                                                required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="key">API Key</label>
                                                            <input type="text" name="sms_key" id="key"
                                                                value="{{ env('SMS_API_KEY') }}" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- SMS Template Tab -->
                                                <div id="template" class="tab-pane">
                                                    <div class="col-md-8 mx-auto">
                                                        <p>
                                                            Cutomer name @N || Oder Number @I || Total Amount $T || Paid Amount $P
                                                            || Due Amount $D || Quantity @Q || Oder Status @OS  
                                                        </p>
                                                        @php
                                                            $sms_data = App\Models\Setting::select(
                                                                'sms_section',
                                                            )->first();
                                                            $sms_section = json_decode(
                                                                $sms_data->sms_section ?? '{}',
                                                                true,
                                                            );
                                                        @endphp

                                                        <div class="form-group">
                                                            <label for="order_purchase">{{ __('Order Purchase') }}</label>
                                                            <textarea name="sms_section[purchase]" class="form-control" id="order_purchase" placeholder="{{ __('Enter Message') }}">{{ $sms_section['purchase'] ?? '' }}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="order_status">{{ __('Order Status') }}</label>
                                                            <textarea name="sms_section[order_status]" class="form-control" id="order_status"
                                                                placeholder="{{ __('Enter Message') }}">{{ $sms_section['order_status'] ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="form-group d-flex justify-content-center mt-3">
                                                <div class="col-8 mx-auto">
                                                    <button type="submit"
                                                        class="btn btn-secondary btn-block w-100">{{ __('Submit') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
