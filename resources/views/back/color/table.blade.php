  @foreach ($datas as $data)
      <tr>
          <td>
              {{ $data->name }}
          </td>
          <td>
              <div class="d-flex align-items-center gap-2">
                  <div
                      style="width:20px; height:20px; border-radius:3px; border:1px solid #ccc; background-color: {{ $data->code }};">
                  </div>
                  <span>{{ $data->code }}</span>
              </div>
          </td>
          @if (!$isSoftDelete)
              <td>
                  <div class="dropdown">
                      <button class="btn btn-{{ $data->status == 1 ? 'success' : 'danger' }} btn-sm  dropdown-toggle"
                          type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          {{ $data->status == 1 ? __('Enabled') : __('Disabled') }}
                      </button>
                      <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item"
                              href="{{ route('back.color.status', [$data->id, 1, 'status']) }}">{{ __('Enable') }}</a>
                          <a class="dropdown-item"
                              href="{{ route('back.color.status', [$data->id, 0, 'status']) }}">{{ __('Disable') }}</a>
                      </div>
                  </div>
              </td>
          @endif
          <td>
              <div class="action-list">
                  @if ($isSoftDelete)
                      {{-- Soft delete actions --}}
                      <a class="btn btn-success btn-sm " href="{{ route('back.color.restore', $data->id) }}">
                          <i class="fas fa-undo"></i>
                      </a>
                      <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                          href="javascript:;" data-href="{{ route('back.color.forceDelete', $data->id) }}">
                          <i class="fas fa-trash-alt"></i>
                      </a>
                  @else
                      <a class="btn btn-secondary btn-sm " href="{{ route('back.color.edit', $data->id) }}">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete"
                          href="javascript:;" data-href="{{ route('back.color.destroy', $data->id) }}">
                          <i class="fas fa-trash-alt"></i>
                      </a>
                  @endif
              </div>
          </td>
      </tr>
  @endforeach
