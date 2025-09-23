<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $id = $this->category ? ',' . $this->category->id : '';
        $required = $this->category ? '' : 'required';

        return [
            'slug'             => [$required, 'unique:categories,slug' . $id, 'regex:/^[a-zA-Z0-9-]+$/'],
            'photo'            => [$required, 'mimes:jpeg,jpg,png,svg,webp'],
            'name'             => 'required|max:255',
            'meta_keywords'    => 'max:255',
            'is_in_menu'       => 'nullable|boolean',
            'menu_serial'      => 'nullable|numeric|max:150',
            'is_featured'      => 'nullable|boolean',
            'featured_serial'  => 'nullable|numeric|max:150',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'slug.required'  => __('Slug field is required.'),
            'slug.unique'    => __('This slug has already been taken.'),
            'slug.regex'     => __('Slug must not have any special characters.'),
            'photo.required' => __('Image field is required.'),
            'photo.mimes'    => __('Image type must be jpg,jpeg,png,svg.'),
            'menu_serial.numeric'     => __('Menu serial must be a number.'),
            'featured_serial.numeric' => __('Featured serial must be a number.'),
        ];
    }
}
