@extends('master.back')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="mb-0 bc-title"><b>{{ __('Update Product') }}</b> </h3>
                    <a class="btn btn-primary   btn-sm" href="{{ route('back.item.index') }}"><i
                            class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                @include('alerts.alerts')
            </div>
        </div>
        <!-- Nested Row within Card Body -->

        <form class="admin-form" action="{{ route('back.item.update', ['item' => $item->id]) }}" method="POST"
            enctype="multipart/form-data">

            @csrf

            @method('PUT')
            <div class="row">

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }} *</label>
                                <input type="text" name="name" class="form-control item-name" id="name"
                                    placeholder="{{ __('Enter Name') }}" value="{{ $item->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group pb-0  mb-0">
                                <label class="d-block">{{ __('Featured Image') }} *</label>
                            </div>
                            <div class="form-group pb-0 pt-0 mt-0 mb-0">
                                <img class="admin-img lg"
                                    src="{{ $item->photo ? url('/storage/items/' . $item->photo) : url('/assets/images/placeholder.png') }}">
                            </div>
                            <div class="form-group position-relative ">
                                <label class="file">
                                    <input type="file" accept="image/*" class="upload-photo" name="photo"
                                        id="file" aria-label="File browser example">
                                    <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                </label>
                                <br>
                                <span
                                    class="mt-1 text-info">{{ __('Image Size Should Be 800 x 800. or square size') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group pb-0 mb-0">
                                <label>{{ __('Gallery Images') }}</label>
                            </div>

                            <div class="form-group pb-0 pt-0 mt-0 mb-0">
                                <div id="gallery-images">
                                    <div class="d-block gallery_image_view">

                                        {{-- Existing images (edit page) --}}
                                        @if (isset($item) && $item->galleries)
                                            @forelse($item->galleries as $gallery)
                                                <div class="single-g-item d-inline-block m-2">
                                                    <span data-toggle="modal" data-target="#confirm-delete"
                                                        href="javascript:;"
                                                        data-href="{{ route('back.item.gallery.delete', $gallery->id) }}"
                                                        class="remove-gallery-img existing-gallery">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <a class="popup-link"
                                                        href="{{ $gallery->photo ? url('/storage/items/' . $gallery->photo) : url('/assets/images/placeholder.png') }}">
                                                        <img class="admin-gallery-img"
                                                            src="{{ $gallery->photo ? url('/storage/items/' . $gallery->photo) : url('/assets/images/placeholder.png') }}"
                                                            alt="No Image Found">
                                                    </a>
                                                </div>
                                            @empty
                                                <h6><b>{{ __('No Images Added') }}</b></h6>
                                            @endforelse
                                        @endif

                                    </div>
                                </div>
                            </div>

                            <div class="form-group position-relative">
                                <label class="file">
                                    <!-- File input for new images -->
                                    <input type="file" accept="image/*" id="gallery_file"
                                        aria-label="File browser example" multiple>
                                    <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                </label>

                                <!-- Hidden input for new images only -->
                                <input type="file" name="galleries[]" id="gallery_files_hidden" multiple
                                    style="display:none">

                                <br>
                                <span
                                    class="mt-1 text-info">{{ __('Image Size Should Be 800 x 800. or square size') }}</span>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="form-group pb-0  mb-0">
                                <label>{{ __('Product Variants') }} </label>
                            </div>

                            <div class="form-group">
                                <label for="colors">{{ __('Select Colors') }}</label>
                                <select id="colors" name="colors[]" class="form-control select2" multiple="multiple"
                                    data-placeholder="Select colors">
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->name }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sizes">{{ __('Select Sizes') }}</label>
                                <select id="sizes" name="sizes[]" class="form-control select2" multiple="multiple"
                                    data-placeholder="Select sizes">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->name }}">{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div id="variant-section" class="mt-4" style="display:none;">
                                <h6><b>{{ __('Variants Items') }}</b></h6>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('SKU') }}*</th>
                                            <th>{{ __('Additional Cost') }}</th>
                                            <th>{{ __('Additional Price') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="variant-table-body"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="sort_details">{{ __('Short Description') }} *</label>
                                <textarea name="sort_details" id="sort_details" class="form-control" placeholder="{{ __('Short Description') }}">{{ $item->sort_details }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="details">{{ __('Description') }} *</label>
                                <textarea name="details" id="details" class="form-control text-editor" rows="6"
                                    placeholder="{{ __('Enter Description') }}">{{ $item->details }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tags">{{ __('Product Tags') }}
                                </label>
                                <input type="text" name="tags" class="tags" id="tags"
                                    placeholder="{{ __('Tags') }}" value="{{ $item->tags }}">
                            </div>
                            <div class="form-group">
                                <label class="switch-primary">
                                    <input type="checkbox" class="switch switch-bootstrap status radio-check"
                                        name="is_specification" value="1"
                                        {{ $item->is_specification == 1 ? 'checked' : '' }}>
                                    <span class="switch-body"></span>
                                    <span class="switch-text">{{ __('Specifications') }}</span>
                                </label>
                            </div>

                            <div id="specifications-section" class="{{ $item->is_specification == 0 ? 'd-none' : '' }}">
                                @if (!empty($specification_name))
                                    @foreach (array_combine($specification_name, $specification_description) as $name => $description)
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        name="specification_name[]"
                                                        placeholder="{{ __('Specification Name') }}"
                                                        value="{{ $name }}">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        name="specification_description[]"
                                                        placeholder="{{ __('Specification description') }}"
                                                        value="{{ $description }}">
                                                </div>
                                            </div>
                                            <div class="flex-btn">
                                                @if ($loop->first)
                                                    <button type="button" class="btn btn-success add-specification"
                                                        data-text="{{ __('Specification Name') }}"
                                                        data-text1="{{ __('Specification Description') }}"> <i
                                                            class="fa fa-plus"></i> </button>
                                                @else
                                                    <button type="button" class="btn btn-danger remove-spcification"
                                                        data-text="{{ __('Specification Name') }}"
                                                        data-text1="{{ __('Specification Description') }}"> <i
                                                            class="fa fa-minus"></i> </button>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="specification_name[]"
                                                    placeholder="{{ __('Specification Name') }}" value="">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    name="specification_description[]"
                                                    placeholder="{{ __('Specification description') }}" value="">
                                            </div>
                                        </div>
                                        <div class="flex-btn">
                                            <button type="button" class="btn btn-success add-specification"
                                                data-text="{{ __('Specification Name') }}"
                                                data-text1="{{ __('Specification Description') }}"> <i
                                                    class="fa fa-plus"></i> </button>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="meta_keywords">{{ __('Meta Keywords') }}
                                </label>
                                <input type="text" name="meta_keywords" class="tags" id="meta_keywords"
                                    placeholder="{{ __('Enter Meta Keywords') }}" value="{{ $item->meta_keywords }}">
                            </div>
                            <div class="form-group">
                                <label for="meta_description">{{ __('Meta Description') }}
                                </label>
                                <textarea name="meta_description" id="meta_description" class="form-control" rows="5"
                                    placeholder="{{ __('Enter Meta Description') }}">{{ $item->meta_description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card  sticky-card">
                        <div class="card-body">
                            <input type="hidden" class="check_button" name="is_button" value="0">
                            <button type="submit" class="btn btn-secondary mr-2">{{ __('Update') }}</button>
                        </div>
                    </div>
                    <div class="card create_products_Card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="discount_price">{{ __('Current Price') }}
                                    *</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">{{ $curr->sign }}</span>
                                    </div>
                                    <input type="text" id="discount_price" name="discount_price" class="form-control"
                                        placeholder="{{ __('Enter Current Price') }}" min="1" step="0.1"
                                        value="{{ round($item->discount_price * $curr->value, 2) }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="previous_price">{{ __('Previous Price') }}
                                </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">{{ $curr->sign }}</span>
                                    </div>
                                    <input type="text" id="previous_price" name="previous_price" class="form-control"
                                        placeholder="{{ __('Enter Previous Price') }}" min="1" step="0.1"
                                        value="{{ round($item->previous_price * $curr->value, 2) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category_id">{{ __('Select Category') }} *</label>
                                <select name="category_id" id="category_id"
                                    data-href="{{ route('back.get.subcategory') }}" class="form-control">
                                    @foreach (DB::table('categories')->whereStatus(1)->get() as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ $cat->id == $item->category_id ? 'selected' : '' }}>{{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subcategory_id">{{ __('Select Sub Category') }} </label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control"
                                    data-href="{{ route('back.get.childcategory') }}">
                                    <option value="">{{ __('Select one') }}</option>
                                    @foreach (DB::table('subcategories')->where('category_id', $item->category_id)->whereStatus(1)->get() as $subcat)
                                        <option value="{{ $subcat->id }}"
                                            {{ $subcat->id == $item->subcategory_id ? 'selected' : '' }}>
                                            {{ $subcat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group d-none">
                                <label for="childcategory_id">{{ __('Select Child Category') }} </label>
                                <select name="childcategory_id" id="childcategory_id" class="form-control">
                                    <option value="">{{ __('Select one') }}</option>
                                    @foreach (DB::table('chield_categories')->where('category_id', $item->category_id)->whereStatus(1)->get() as $chieldcategory)
                                        <option value="{{ $chieldcategory->id }}"
                                            {{ $chieldcategory->id == $item->childcategory_id ? 'selected' : '' }}>
                                            {{ $chieldcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand_id">{{ __('Select Brand') }} </label>
                                <select name="brand_id" id="brand_id" class="form-control">
                                    <option value="" selected>{{ __('Select Brand') }}</option>
                                    @foreach (DB::table('brands')->whereStatus(1)->get() as $brand)
                                        <option value="{{ $brand->id }}"
                                            {{ $brand->id == $item->brand_id ? 'selected' : '' }}>{{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="is_type">{{ __('Select Item Type') }}</label>
                                <select name="is_type" id="is_type" class="form-control">
                                    <option value="undefined"
                                        {{ old('is_type', $item->is_type) == 'undefined' ? 'selected' : '' }}>
                                        Undefine Product
                                    </option>
                                    <option value="new"
                                        {{ old('is_type', $item->is_type) == 'new' ? 'selected' : '' }}>
                                        New Arrival
                                    </option>
                                    <option value="flash_deal"
                                        {{ old('is_type', $item->is_type) == 'flash_deal' ? 'selected' : '' }}>
                                        Flash Deal Product
                                    </option>
                                    <option value="feature"
                                        {{ old('is_type', $item->is_type) == 'feature' ? 'selected' : '' }}>
                                        Featured Product
                                    </option>
                                    <option value="best"
                                        {{ old('is_type', $item->is_type) == 'best' ? 'selected' : '' }}>
                                        Best Product
                                    </option>
                                    <option value="top"
                                        {{ old('is_type', $item->is_type) == 'top' ? 'selected' : '' }}>
                                        Top Product
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tax_id">{{ __('Select Tax') }} *</label>
                                <select name="tax_id" id="tax_id" class="form-control">
                                    <option value="">{{ __('Select One') }}</option>
                                    @foreach (DB::table('taxes')->whereStatus(1)->get() as $tax)
                                        <option value="{{ $tax->id }}"
                                            {{ $item->tax_id == $tax->id ? 'selected' : '' }}>{{ $tax->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sku">{{ __('SKU') }} *</label>
                                <input type="text" name="sku" class="form-control" id="sku"
                                    placeholder="{{ __('Enter SKU') }}" value="{{ $item->sku }}">
                            </div>
                            <div class="form-group">
                                <label for="video">{{ __('Video Link') }} </label>
                                <input type="text" name="video" class="form-control" id="video"
                                    placeholder="{{ __('Enter Video Link') }}" value="{{ $item->video }}">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    {{-- DELETE MODAL --}}

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"
        aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Confirm Delete?') }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    {{ __('You are going to delete this image from gallery.') }} {{ __('Do you want to delete it?') }}
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <form action="" class="d-inline btn-ok" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- DELETE MODAL ENDS --}}

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(function() {
            // Init Select2
            $('#colors, #sizes').select2({
                width: '100%',
                allowClear: true,
            });

            // Preselect existing colors/sizes from server (edit page)
            const preSelectedColors = @json($selectedColors ?? []);
            const preSelectedSizes = @json($selectedSizes ?? []);

            if (preSelectedColors.length) {
                $('#colors').val(preSelectedColors).trigger('change');
            }
            if (preSelectedSizes.length) {
                $('#sizes').val(preSelectedSizes).trigger('change');
            }

            // Existing variants passed from controller
            const existingVariants = @json($variants ?? []);

            // Function to render the variant rows from an array of variant objects
            function populateExistingVariants(list) {
                const tbody = $('#variant-table-body');
                tbody.empty();

                if (!list || !list.length) {
                    $('#variant-section').hide();
                    return;
                }

                list.forEach((v, idx) => {
                    const row = `
          <tr>
            <td>
              <input type="text" name="variants[${idx}][name]" class="form-control" value="${escapeHtml(v.name)}" readonly>
              <input type="hidden" name="variants[${idx}][color]" value="${escapeHtml(v.color)}">
              <input type="hidden" name="variants[${idx}][size]" value="${escapeHtml(v.size)}">
              <input type="hidden" name="variants[${idx}][item_variant_id]" value="${v.id ?? ''}">
              <input type="hidden" name="variants[${idx}][variant_id]" value="${v.variant_id ?? ''}">
            </td>
            <td><input type="text" name="variants[${idx}][variant_sku]" class="form-control" value="${escapeHtml(v.variant_sku ?? '')}" placeholder="Enter SKU"></td>
            <td><input type="number" step="0.01" name="variants[${idx}][additional_cost]" class="form-control" value="${v.additional_cost ?? 0}" placeholder="0.00"></td>
            <td><input type="number" step="0.01" name="variants[${idx}][additional_price]" class="form-control" value="${v.additional_price ?? 0}" placeholder="0.00"></td>
            <td><button type="button" class="btn btn-danger btn-sm remove-variant">X</button></td>
          </tr>
        `;
                    tbody.append(row);
                });

                $('#variant-section').show();
            }

            // small helper to escape strings for interpolation
            function escapeHtml(str) {
                if (str === undefined || str === null) return '';
                return String(str).replace(/[&<>"'`=\/]/g, function(s) {
                return ({
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#39;',
                    '/': '&#x2F;',
                    '`': '&#x60;',
                        '=': '&#x3D;'
                    })[s];
                });
            }

            // Build variants on change (keeps the original behavior)
            $('#colors, #sizes').on('change', generateVariants);

            function generateVariants() {
                const colors = $('#colors').val() || [];
                const sizes = $('#sizes').val() || [];
                const tbody = $('#variant-table-body');
                tbody.empty();

                if (colors.length === 0 && sizes.length === 0) {
                    $('#variant-section').hide();
                    return;
                }

                let variants = [];

                if (colors.length && sizes.length) {
                    colors.forEach(c => sizes.forEach(s => variants.push({
                        name: c + '/' + s,
                        color: c,
                        size: s
                    })));
                } else if (colors.length) {
                    colors.forEach(c => variants.push({
                        name: c,
                        color: c,
                        size: ''
                    }));
                } else if (sizes.length) {
                    sizes.forEach(s => variants.push({
                        name: s,
                        color: '',
                        size: s
                    }));
                }

                // Collect already-entered data so we don’t lose it
                let currentData = {};
                $('#variant-table-body tr').each(function() {
                    const color = $(this).find('input[name*="[color]"]').val();
                    const size = $(this).find('input[name*="[size]"]').val();
                    const key = color + '|' + size;
                    currentData[key] = {
                        variant_sku: $(this).find('input[name*="[variant_sku]"]').val(),
                        additional_cost: $(this).find('input[name*="[additional_cost]"]').val(),
                        additional_price: $(this).find('input[name*="[additional_price]"]').val()
                    };
                });

                // Also merge server-side loaded variants (edit mode)
                if (existingVariants && existingVariants.length) {
                    existingVariants.forEach(v => {
                        const key = (v.color || '') + '|' + (v.size || '');
                        if (!currentData[key]) {
                            currentData[key] = {
                                variant_sku: v.variant_sku || '',
                                additional_cost: v.additional_cost || 0,
                                additional_price: v.additional_price || 0
                            };
                        }
                    });
                }

                variants.forEach((v, idx) => {
                    const key = (v.color || '') + '|' + (v.size || '');
                    const prev = currentData[key] || {};

                    const row = `
            <tr>
                <td>
                <input type="text" name="variants[${idx}][name]" class="form-control" value="${escapeHtml(v.name)}" readonly>
                <input type="hidden" name="variants[${idx}][color]" value="${escapeHtml(v.color)}">
                <input type="hidden" name="variants[${idx}][size]" value="${escapeHtml(v.size)}">
                </td>
                <td><input type="text" name="variants[${idx}][variant_sku]" class="form-control" value="${escapeHtml(prev.variant_sku || '')}" placeholder="Enter SKU"></td>
                <td><input type="number" step="0.01" name="variants[${idx}][additional_cost]" class="form-control" value="${prev.additional_cost || 0}" placeholder="0.00"></td>
                <td><input type="number" step="0.01" name="variants[${idx}][additional_price]" class="form-control" value="${prev.additional_price || 0}" placeholder="0.00"></td>
                <td><button type="button" class="btn btn-danger btn-sm remove-variant">X</button></td>
            </tr>
            `;
                    tbody.append(row);
                });

                $('#variant-section').show();
            }

            // If editing and we have existing variants, populate them
            if (existingVariants && existingVariants.length) {
                populateExistingVariants(existingVariants);
            }

            // Remove and reindex
            $(document).on('click', '.remove-variant', function() {
                const tr = $(this).closest('tr');

                // get hidden color/size values from the row
                const color = tr.find('input[name*="[color]"]').val();
                const size = tr.find('input[name*="[size]"]').val();

                // remove row first
                tr.remove();

                // also unselect from select2 if that color/size is no longer present in any row
                if (color) {
                    const stillExists = $('#variant-table-body input[name*="[color]"][value="' + color +
                        '"]').length > 0;
                    if (!stillExists) {
                        let colors = $('#colors').val() || [];
                        colors = colors.filter(c => c !== color);
                        $('#colors').val(colors).trigger('change');
                    }
                }
                if (size) {
                    const stillExists = $('#variant-table-body input[name*="[size]"][value="' + size + '"]')
                        .length > 0;
                    if (!stillExists) {
                        let sizes = $('#sizes').val() || [];
                        sizes = sizes.filter(s => s !== size);
                        $('#sizes').val(sizes).trigger('change');
                    }
                }

                rebuildIndices();
                if ($('#variant-table-body tr').length === 0) {
                    $('#variant-section').hide();
                }
            });

            function rebuildIndices() {
                $('#variant-table-body tr').each(function(i, tr) {
                    $(tr).find('input, select, textarea').each(function() {
                        const name = $(this).attr('name');
                        if (!name) return;
                        // replace the first occurrence of variants[\d+]
                        const newName = name.replace(/variants\[\d+\]/, 'variants[' + i + ']');
                        $(this).attr('name', newName);
                    });
                });
            }

            // Client-side validation before form submit
            $('form.admin-form').on('submit', function(e) {
                let isValid = true;
                let firstInvalid = null;
                let seenSkus = {};

                // Validate Name
                const nameInput = $('input[name="name"]');
                if (!nameInput.val().trim()) {
                    isValid = false;
                    nameInput.addClass('is-invalid');
                    if (!firstInvalid) firstInvalid = nameInput;
                } else {
                    nameInput.removeClass('is-invalid');
                }

                // Validate Short Description
                const sortDetails = $('textarea[name="sort_details"]');
                if (!sortDetails.val().trim()) {
                    isValid = false;
                    sortDetails.addClass('is-invalid');
                    if (!firstInvalid) firstInvalid = sortDetails;
                } else {
                    sortDetails.removeClass('is-invalid');
                }

                // Validate Description
                const details = $('textarea[name="details"]');
                if (!details.val().trim()) {
                    isValid = false;
                    details.addClass('is-invalid');
                    if (!firstInvalid) firstInvalid = details;
                } else {
                    details.removeClass('is-invalid');
                }

                // Validate Current Price
                const discountPrice = $('input[name="discount_price"]');
                if (!discountPrice.val().trim()) {
                    isValid = false;
                    discountPrice.addClass('is-invalid');
                    if (!firstInvalid) firstInvalid = discountPrice;
                } else {
                    discountPrice.removeClass('is-invalid');
                }

                // Validate Category
                const category = $('select[name="category_id"]');
                if (!category.val()) {
                    isValid = false;
                    category.addClass('is-invalid');
                    if (!firstInvalid) firstInvalid = category;
                } else {
                    category.removeClass('is-invalid');
                }

                // Validate Tax
                const tax = $('select[name="tax_id"]');
                if (!tax.val()) {
                    isValid = false;
                    tax.addClass('is-invalid');
                    if (!firstInvalid) firstInvalid = tax;
                } else {
                    tax.removeClass('is-invalid');
                }

                // Validate SKU
                const sku = $('input[name="sku"]');
                if (!sku.val().trim()) {
                    isValid = false;
                    sku.addClass('is-invalid');
                    if (!firstInvalid) firstInvalid = sku;
                } else {
                    sku.removeClass('is-invalid');
                }

                // Validate Variant SKUs only if variants exist
                $('#variant-table-body tr').each(function() {
                    const variantSku = $(this).find('input[name*="[variant_sku]"]');
                    if (variantSku.length) {
                        const val = variantSku.val().trim();

                        // Check required
                        if (!val) {
                            isValid = false;
                            variantSku.addClass('is-invalid');
                            if (!firstInvalid) firstInvalid = variantSku;
                            return; // skip further checks
                        }

                        // Check uniqueness
                        if (seenSkus[val]) {
                            isValid = false;
                            variantSku.addClass('is-invalid');
                            if (!firstInvalid) firstInvalid = variantSku;
                        } else {
                            seenSkus[val] = true;
                            variantSku.removeClass('is-invalid');
                        }
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert(
                        'Please fill in all required fields and check unique sku when you have variants before submitting.');
                    if (firstInvalid) firstInvalid.focus();
                }
            });

        });
    </script>

    <script>
        $(document).ready(function() {

            function initSelect2HideSelected(selector, placeholder) {
                const $el = $(selector).select2({
                    placeholder: placeholder,
                    closeOnSelect: false
                });

                function hideSelected() {
                    const selected = $el.val() || [];

                    $('.select2-results__option').each(function() {
                        const text = $(this).text().trim();

                        if (selected.includes(text)) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                }

                $el.on('select2:open select2:select select2:unselect', function() {
                    setTimeout(hideSelected, 0);
                });

                $(document).on('keyup', '.select2-search__field', function() {
                    hideSelected();
                });
            }

            // init both
            initSelect2HideSelected('#colors', 'Select colors');
            initSelect2HideSelected('#sizes', 'Select sizes');

        });
    </script>
@endsection
