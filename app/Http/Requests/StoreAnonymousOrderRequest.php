<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnonymousOrderRequest extends FormRequest
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
        return [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'detail' => 'required',
            'location' => 'required|exists:shipping_pricings,name',
            'vendor' => 'required | exists:food_main_vendors,vendor_id',
            'food_id' => "required | array",
            'additional_discount_amount' => 'sometimes|nullable|integer',
            'additional_discount_reason' => 'exclude_if:additional_discount_amount,null|required',
            'additional_charge_amount' => 'sometimes|nullable|integer',
            'additional_charge_reason' => 'exclude_if:additional_charge_amount,null|required',
        ];
    }
}
            //
