@foreach($datas as $data)
<tr>
        <td>{{$data->name}}</td>

        <td>
            {{$data->email}}
        </td>
    <td>
          {{$data->phone}}
    </td>
     <td style="max-width: 200px; overflow-y: auto; word-wrap: break-word; display: block; max-height: 80px;">
    {{$data->description}}
</td>
</tr>
@endforeach
