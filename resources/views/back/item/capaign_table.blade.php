@foreach($datas as $data)
<tr>
    <td>
        {{ $data->campaign_title }}
    </td>
   <td>
    <span id="url-{{ $data->id }}">
        {{ url('/campaign/'.$data->campaign_slug) }}
    </span>

    <button type="button"
            class="btn btn-sm btn-outline-primary"
            onclick="copyUrl('{{ $data->id }}')">
        Copy
    </button>
</td>

    <td>

    <div class="dropdown">
        <button class="btn btn-{{ $data->campaign_status == 1 ? 'success' : 'danger' }} btn-sm dropdown-toggle"
            type="button" data-toggle="dropdown">
            {{ $data->campaign_status == 1 ? __('Enabled') : __('Disabled') }}
        </button>

        <div class="dropdown-menu">
            <a class="dropdown-item"
            href="{{ route('back.campaign.offer.status', [$data->id, 1]) }}">
                {{ __('Enable') }}
            </a>

            <a class="dropdown-item"
            href="{{ route('back.campaign.offer.status', [$data->id, 0]) }}">
                {{ __('Disable') }}
            </a>
        </div>
    </div>
        </div>
    </td>
   
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm "
                href="{{ route('back.campaign.offer.edit',$data->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('back.campaign.offer.destroy',$data->id) }}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach

<script>
function copyUrl(id) {
    const text = document.getElementById('url-' + id).innerText;

    navigator.clipboard.writeText(text).then(function () {
    
    }).catch(function () {
        alert('Failed to copy');
    });
}
</script>
