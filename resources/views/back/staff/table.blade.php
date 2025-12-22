@foreach ($datas as $data)
    <tr>
        <td>
            <img class="admin-img"
                src="{{ $data->photo ? url('storage/staff/' . $data->photo) : url('/assets/images/placeholder.png') }}"
                alt="No Image Found">
        </td>
        <td>
            {{ $data->name }}
        </td>
        <td>
            {{ $data->role->name }}
        </td>
        <td>
            {{ $data->email }}
        </td>
        <td>
            {{ $data->phone }}
        </td>

        <td>
            <div class="action-list">

                @if ($isSoftDelete)
                    <a class="btn btn-success btn-sm " href="{{ route('back.staff.restore', $data->id) }}">
                        <i class="fas fa-undo"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;"
                        data-href="{{ route('back.staff.forceDelete', $data->id) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @else
                    <a class="btn btn-secondary btn-sm " href="{{ route('back.staff.edit', $data->id) }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                        href="javascript:;" data-href="{{ route('back.staff.destroy', $data->id) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @endif
            </div>
        </td>
    </tr>
@endforeach
