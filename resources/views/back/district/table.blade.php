 @foreach ($datas as $data)
     <tr>
         <td>{{ $data->name }}</td>
         <td>{{ $data->slug }}</td>
         <td>
             <div class="action-list">
                 @if ($isSoftDelete)
                     <a class="btn btn-success btn-sm " href="{{ route('back.districts.restore', $data->id) }}">
                         <i class="fas fa-undo"></i>
                     </a>
                     <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;"
                         data-href="{{ route('back.districts.forceDelete', $data->id) }}">
                         <i class="fas fa-trash-alt"></i>
                     </a>
                 @else
                     <a class="btn btn-secondary btn-sm " href="{{ route('back.districts.edit', $data->id) }}">
                         <i class="fas fa-edit"></i>
                     </a>
                     <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                         href="javascript:;" data-href="{{ route('back.districts.destroy', $data->id) }}">
                         <i class="fas fa-trash-alt"></i>
                     </a>
                 @endif
             </div>
         </td>
     </tr>
 @endforeach
