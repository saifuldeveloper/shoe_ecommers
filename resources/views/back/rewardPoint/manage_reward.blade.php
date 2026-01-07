@extends('master.back')

@section('content')
<div class="container-fluid">

    <div class="card mb-4">
        <div class="card-body">

            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title">
                    {{ __('Manage Reward Point Setting') }}
                </h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success mt-2">
                    {{ session('success') }}
                </div>
            @endif
            <hr>

            <form action="{{ route('admin.manage.reward.system.update') }}" method="POST">
                @csrf

               <div class="row">
            <div class="col-md-6 mb-3">
                <label>Initial Reward Point*</label>
                <input
                    type="number"
                   class="form-control @error('reward_point') is-invalid @enderror"
                    name="reward_point"
                    placeholder="100"
                    value="{{ old('reward_point', $settings->reward_point ?? '') }}"
                >
                @error('reward_point')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label>Reward Status*</label>
                <select name="status" class="form-control">
                    <option value="1" {{ ($settings->status ?? '') == 1 ? 'selected' : '' }}>
                        Enable
                    </option>
                    <option value="0" {{ ($settings->status ?? '') == 0 ? 'selected' : '' }}>
                        Disable
                    </option>
                </select>
            </div>
        </div>


                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </form>

        </div>
    </div>

</div>
@endsection
