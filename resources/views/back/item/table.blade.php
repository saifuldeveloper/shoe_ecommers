@foreach($datas as $data)
<tr id="product-bulk-delete">
  <td><input type="checkbox" class="bulk-item" value="{{$data->id}}"></td>
    <td>
        <img 
        src="{{ $data->thumbnail 
            ? (file_exists(public_path('storage/items/'.$data->thumbnail)) 
                ? url('storage/items/'.$data->thumbnail) 
                : url('assets/images/'.$data->thumbnail)) 
            : url('assets/images/default.jpg') }}" 
        alt="Image Not Found">
    </td>
    <td>
        {{ $data->name }}
    </td>
    <td>
        {{ PriceHelper::adminCurrencyPrice($data->discount_price) }}
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-{{  $data->status == 1 ? 'success' : 'danger'  }} btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{  $data->status == 1 ? __('Publish') : __('Unpublish')  }}
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ route('back.item.status',[$data->id,1]) }}">{{ __('Publish') }}</a>
              <a class="dropdown-item" href="{{ route('back.item.status',[$data->id,0]) }}">{{ __('Unpublish') }}</a>
            </div>
          </div>
    </td>
    <td>
      <p class="
        @if($data->is_type == 'undefine')
        @else
            bg-info badge text-white
        @endif
      ">
        @if($data->is_type == 'undefine')
            {{ __('Not Define') }}
        @else
            {{$data->is_type ? ucfirst(str_replace('_',' ',$data->is_type)) : __('undefine')}}
        @endif
        </p>
    </td>
    <td>
      {{ucfirst($data->item_type)}}
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-secondary btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{  __('Options') }}
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              @if ($data->item_type == 'normal')
              <a class="dropdown-item" href="{{ route('back.item.edit',$data->id) }}"><i class="fas fa-angle-double-right"></i> {{ __('Edit') }}</a>
              @elseif($data->item_type =='digital')
              <a class="dropdown-item" href="{{ route('back.digital.item.edit',$data->id) }}"><i class="fas fa-angle-double-right"></i> {{ __('Edit') }}</a>
              @elseif($data->item_type =='affiliate')
              <a class="dropdown-item" href="{{ route('back.affiliate.edit',$data->id) }}"><i class="fas fa-angle-double-right"></i> {{ __('Edit') }}</a>
              @else
              <a class="dropdown-item" href="{{ route('back.license.item.edit',$data->id) }}"><i class="fas fa-angle-double-right"></i> {{ __('Edit') }}</a>
              @endif
                @if($data->status == 1)
                <a class="dropdown-item" target="_blank" href="{{ route('front.product',$data->slug) }}"><i class="fas fa-angle-double-right"></i> {{ __('View') }}</a>
              @endif
              <a class="dropdown-item" data-toggle="modal"
              data-target="#confirm-delete" href="javascript:;"
              data-href="{{ route('back.item.destroy',$data->id) }}"><i class="fas fa-angle-double-right"></i> {{ __('Delete') }}</a>
            </div>
          </div>

        </div>
    </td>
</tr>
@endforeach
