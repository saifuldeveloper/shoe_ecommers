@foreach($datas as $data)
<tr>
    <td>
        {{ $data->name }}
    </td>
    <td>
        <img src="{{ $data->photo ? url('/storage/brands/'.$data->photo) : url('/assets/images/placeholder.png') }}" alt="Image Not Found">
    </td>
    <td>
        {{ $data->slug }}
    </td>
   <td>
       <div class="dropdown">
            <button class="btn btn-{{ $data->status === 'active' ? 'success' : 'danger' }} btn-sm dropdown-toggle"
                    type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ $data->status === 'active' ? __('Enabled') : __('Disabled') }}
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                @if($data->status === 'active')
                    <a class="dropdown-item" href="{{ route('back.brand.status',[$data->id,0,'status']) }}">{{ __('Disable') }}</a>
                @else
                    <a class="dropdown-item" href="{{ route('back.brand.status',[$data->id,1,'status']) }}">{{ __('Enable') }}</a>
                @endif
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-{{ $data->is_popular ? 'success' : 'danger' }} btn-sm dropdown-toggle"
                    type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ $data->is_popular ? __('Enabled') : __('Disabled') }}
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                @if($data->is_popular)
                    <a class="dropdown-item" href="{{ route('back.brand.status',[$data->id,0,'is_popular']) }}">{{ __('Disable') }}</a>
                @else
                    <a class="dropdown-item" href="{{ route('back.brand.status',[$data->id,1,'is_popular']) }}">{{ __('Enable') }}</a>
                @endif
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm "
                href="{{ route('back.brand.edit',$data->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('back.brand.destroy',$data->id) }}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach
