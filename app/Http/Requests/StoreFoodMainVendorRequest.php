<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoodMainVendorRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return   [
            "vendor_name" => "required |unique:food_main_vendors,vendor_name",
            "vendor_image" => 'required | image',
            'vendor_image_bg' => "sometimes | image",
            "vendor_description" => "required",
            "vendor_email" => "required | email",
            "vendor_phone" => "required",
            "vendor_address" => 'required',
            'selected_category' => 'required || in:food,bakery',
        ];
    }
}
