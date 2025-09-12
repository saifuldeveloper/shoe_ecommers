<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ItemRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $type_required = $this->item_type == 'digital' || $this->item_type == 'license' ? '' : 'required';

        $check_link = $this->file_type == 'link' ? 'required' : '';

        if ($this->item_type == 'digital') {
            if ($this->item) {
                $check_file = '';
            } else {
                $check_file = $this->file_type == 'file' ? 'required' : '';
            }
        } elseif ($this->item_type == 'license') {
            if ($this->item) {
                $check_file = '';
            } else {
                $check_file = $this->file_type == 'file' ? 'required' : '';
            }
        } else {
            $check_file = '';
        }

        // Editing item? exclude current row
        $id = $this->item ? $this->item->id : null;
        $required = $this->item ? '' : 'required|';

        $rules = [
            'name'            => 'required|max:255',
            'sku'             => [
                'required',
                Rule::unique('items', 'sku')->ignore($id),
            ],
            'category_id'     => 'required',
            'details'         => 'required',
            'link'            => $check_link,
            'file'            => $check_file . '|file|mimes:zip',
            'sort_details'    => 'required',
            'discount_price'  => 'required|max:50',
            'previous_price'  => 'max:50',
            'tax_id'          => 'required',
            'photo'           => $required . 'mimes:jpeg,jpg,png,svg',
        ];

        // If product has variants → validate variant_sku
        if ($this->has('variants')) {
            $rules['variants'] = 'array|min:1';

            $rules['variants.*.variant_sku'] = [
                'required',
                'distinct', // no duplicate in same request
                Rule::unique('item_variants', 'variant_sku'),
            ];

            $rules['variants.*.name'] = 'required|string|max:255';
            $rules['variants.*.item_code'] = 'nullable|string|max:255';
            $rules['variants.*.additional_cost'] = 'nullable|numeric|min:0';
            $rules['variants.*.additional_price'] = 'nullable|numeric|min:0';
            $rules['variants.*.qty'] = 'nullable|integer|min:0';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required'            => __('Name field is required.'),
            'tax_id.required'          => __('Tax field is required.'),
            'category_id.required'     => __('Category field is required.'),
            'brand_id.required'        => __('Brand field is required.'),
            'details.required'         => __('Description field is required.'),
            'sort_details.required'    => __('Sort Description field is required.'),
            'discount_price.required'  => __('Current Price field is required.'),
            'photo.required'           => __('Image field is required.'),
            'photo.mimes'              => __('Image type must be jpg,jpeg,png,svg.'),
            'sku.required'             => __('SKU field is required.'),
            'sku.unique'               => __('This SKU has already been taken.'),
            'variants.*.variant_sku.required' => __('Variant SKU is required.'),
            'variants.*.variant_sku.unique'   => __('This Variant SKU has already been taken.'),
            'variants.*.variant_sku.distinct' => __('Duplicate Variant SKU in request.'),
        ];
    }
}
