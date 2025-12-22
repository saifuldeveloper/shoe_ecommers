@foreach ($datas as $data)
    <tr>
        <td>{{ $data->district->name }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->area }}</td>
        <td>{{ $data->address }}</td>
        <td>{{ $data->mobile }}</td>
        <td>
            <div class="action-list">
                @if ($isSoftDelete)
                    <a class="btn btn-success btn-sm " href="{{ route('back.stores.restore', $data->id) }}">
                        <i class="fas fa-undo"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;"
                        data-href="{{ route('back.stores.forceDelete', $data->id) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @else
                    <a class="btn btn-secondary btn-sm " href="{{ route('back.stores.edit', $data->id) }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                        href="javascript:;" data-href="{{ route('back.stores.destroy', $data->id) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @endif
            </div>
        </td>
    </tr>
@endforeach
