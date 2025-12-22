@foreach ($datas as $data)
    <tr>
        <td>
            <img src="{{ $data->photo ? url('/storage/slider/' . $data->photo) : url('/assets/images/placeholder.png') }}"
                alt="Image Not Found">
        </td>

        {{-- <td>
            @if ($data->home_page != 'theme4')
                {{ $data->title }}
            @else
                --
            @endif
        </td>
        <td>
            {{ strtoupper($data->home_page) }}
        </td>

        <td>
            @if ($data->home_page != 'theme4')
                {{ Str::limit($data->details, 250, '...') }}
            @else
                --
            @endif
        </td> --}}

        <td>
            <div class="action-list">
                @if ($isSoftDelete)
                    <a class="btn btn-success btn-sm " href="{{ route('back.slider.restore', $data->id) }}">
                        <i class="fas fa-undo"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;"
                        data-href="{{ route('back.slider.forceDelete', $data->id) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @else
                    <a class="btn btn-secondary btn-sm " href="{{ route('back.slider.edit', $data->id) }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                        href="javascript:;" data-href="{{ route('back.slider.destroy', $data->id) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @endif
            </div>
        </td>
    </tr>
@endforeach
