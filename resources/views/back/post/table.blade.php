@foreach ($datas as $data)
    <tr id="blog-bulk-delete">
        @if (!$isSoftDelete)
            <td><input type="checkbox" class="bulk-item" value="{{ $data->id }}"></td>
        @endif

        <td>
            <img src="{{ isset(json_decode($data->photo, true)[0]) ? url('/storage/blog/' . json_decode($data->photo, true)[0]) : url('/assets/images/placeholder.png') }}"
                alt="">

        </td>
        <td>
            {{ $data->title }}
        </td>
        <td>
            {{ $data->category->name }}
        </td>

        <td>
            <div class="action-list">
                @if ($isSoftDelete)
                    <a class="btn btn-success btn-sm " href="{{ route('back.post.restore', $data->id) }}">
                        <i class="fas fa-undo"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                        href="javascript:;" data-href="{{ route('back.post.forceDelete', $data->id) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @else
                    <a class="btn btn-secondary btn-sm " href="{{ route('back.post.edit', $data->id) }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                        href="javascript:;" data-href="{{ route('back.post.destroy', $data->id) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                @endif
            </div>
        </td>
    </tr>
@endforeach
