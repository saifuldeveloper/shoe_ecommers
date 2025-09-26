@foreach($datas as $data)
<tr>
    <td>
        <img src="{{ asset('storage/socialMediaPost/' . $data->photo) }}" alt="Post Image" style="max-height:60px;">
    </td>
    <td>
        <a href="{{ $data->url }}" target="_blank">{{ $data->url }}</a>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-{{ $data->status ? 'success' : 'danger' }} btn-sm dropdown-toggle" type="button"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ $data->status ? __('Enabled') : __('Disabled') }}
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                @if($data->status)
                {{-- Currently enabled → show option to disable --}}
                <a class="dropdown-item" href="{{ route('back.socialmediapost.status', [$data->id, 0]) }}">{{ __('Disable') }}</a>
                @else
                {{-- Currently disabled → show option to enable --}}
                <a class="dropdown-item" href="{{ route('back.socialmediapost.status', [$data->id, 1]) }}">{{ __('Enable') }}</a>
                @endif
            </div>
        </div>
    </td>

    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="{{ route('back.socialmediapost.edit', $data->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('back.socialmediapost.destroy', $data->id) }}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach