<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFoodRequest extends FormRequest
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
            'name'=> 'required',
            // 'slug' =>'required|unique:foods,slug',
            'short_description'=> 'required',
            'long_description' =>'required',
            'price'=> 'required|integer|min:0',
            'discount'=>'required|numeric',
            'vendor'=> 'required|exists:food_main_vendors,vendor_id',
            'selected_category'=>'required|array',
            // 'food_image' =>'required|image|dimensions:min_width=760,min_height=765,max_width=760,max_height=765',
            // 'food_image_small' => 'required|image|dimensions:min_width=130,min_height=145,max_width=130,max_height=145',
            // 'large_image_bg' =>'sometimes|image|dimensions:min_width=760,min_height=765,max_width=760,max_height=765',
            // 'small_image_bg' => 'sometimes|image|dimensions:min_width=130,min_height=145,max_width=130,max_height=145',

        ];
    }
}
