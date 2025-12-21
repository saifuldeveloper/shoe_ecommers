@foreach($datas as $data)
<tr>
    <td>
        {{ $data->category->name ?? '-' }}
    </td>
    <td>
        {{ $data->name }}
    </td>
    @if(!$isSoftDelete)
    <td>
        <div class="dropdown">
            <button
                class="btn btn-{{ $data->status == 1 ? 'success' : 'danger' }} btn-sm dropdown-toggle"
                type="button"
                data-toggle="dropdown">
                {{ $data->status == 1 ? __('Enabled') : __('Disabled') }}
            </button>

            <div class="dropdown-menu animated--fade-in">
                <a class="dropdown-item"
                   href="{{ route('back.subcategory.status', [$data->id, 1]) }}">
                    {{ __('Enable') }}
                </a>
                <a class="dropdown-item"
                   href="{{ route('back.subcategory.status', [$data->id, 0]) }}">
                    {{ __('Disable') }}
                </a>
            </div>
        </div>
    </td>
    @endif
    <td>
        <div class="action-list">
            @if($isSoftDelete)
                {{-- Soft delete actions --}}
                <a class="btn btn-success btn-sm"
                   href="{{ route('back.subcategory.restore', $data->id) }}">
                    <i class="fas fa-undo"></i>
                </a>

                <a class="btn btn-danger btn-sm"
                   data-toggle="modal"
                   data-target="#confirm-delete"
                   href="javascript:;"
                   data-href="{{ route('back.subcategory.forceDelete', $data->id) }}">
                    <i class="fas fa-trash-alt"></i>
                </a>
            @else
                {{-- Regular actions --}}
                <a class="btn btn-secondary btn-sm"
                   href="{{ route('back.subcategory.edit', $data->id) }}">
                    <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-danger btn-sm"
                   data-toggle="modal"
                   data-target="#confirm-delete"
                   href="javascript:;"
                   data-href="{{ route('back.subcategory.destroy', $data->id) }}">
                    <i class="fas fa-trash-alt"></i>
                </a>
            @endif
        </div>
    </td>
</tr>
@endforeach
