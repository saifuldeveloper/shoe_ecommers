@foreach ($datas as $data)
    <tr>
        <td>
            {{ $data->title }}
        </td>
        <td>
            {{ $data->code_name }}
        </td>
        <td>
            {{ $data->no_of_times }}
        </td>

        <td>
            @if ($data->type == 'amount')
                {{ PriceHelper::adminCurrencyPrice($data->discount) }}
            @else
                {{ $data->discount }} %
            @endif

        </td>
        <td>
            <div class="dropdown">
                <button class="btn btn-{{ $data->status == 'active' ? 'success' : 'danger' }} btn-sm dropdown-toggle"
                    type="button" data-toggle="dropdown">
                    {{ $data->status == 'active' ? __('Active') : __('Inactive') }}
                </button>

                <div class="dropdown-menu animated--fade-in">

                    {{-- Activate --}}
                    <form action="{{ route('back.code.status', $data->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="status" value="active">
                        <button type="submit" class="dropdown-item">
                            {{ __('Activate') }}
                        </button>
                    </form>

                    {{-- Inactivate --}}
                    <form action="{{ route('back.code.status', $data->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="status" value="inactive">
                        <button type="submit" class="dropdown-item">
                            {{ __('Inactivate') }}
                        </button>
                    </form>

                </div>
            </div>
        </td>
        <td>
            <div class="action-list">
                @if ($isSoftDelete)
                    <a class="btn btn-success btn-sm " href="{{ route('back.code.restore', [$data->id]) }}">
                        <i class="fas fa-undo"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                        href="javascript:;" data-href="{{ route('back.code.forceDelete', [$data->id]) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @else
                    <a class="btn btn-secondary btn-sm " href="{{ route('back.code.edit', [$data->id]) }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                        href="javascript:;" data-href="{{ route('back.code.destroy', [$data->id]) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @endif
            </div>
        </td>
    </tr>
@endforeach
