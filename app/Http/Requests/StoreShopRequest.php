<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopRequest extends FormRequest {
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
        $valideted = [
            'parent_id' => ['nullable', 'integer'],
            'name' => ['required', 'string', 'min:3'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'tag_ids.*' => ['nullable', 'integer', 'exists:tags,id'],
            'description' => ['required', 'string', 'min:5'],
            'shop_photo' => ['nullable', 'mimes:jpeg,png,jpg,webp,bmp'],
            'type_location' => ['required', 'boolean'],
            'lat_location' => ['nullable', 'required_unless:type_location,false', 'string', 'min:8'],
            'long_location' => ['nullable', 'required_unless:type_location,false', 'string', 'min:8'],
            'shop_country' => ['nullable', 'string', 'min:8'],
            'shop_province' => ['nullable', 'string', 'min:8'],
            'shop_city' => ['nullable', 'string', 'min:8'],
            'shop_local' => ['nullable', 'string', 'min:8'],
            'shop_Street' => ['nullable', 'string', 'min:8'],
            'shop_alley' => ['nullable', 'string', 'min:8'],
            'shop_number' => ['nullable', 'string', 'min:8'],
            'shop_postal_code' => ['required', 'digits:10'],
            'shop_main_phone_number' => ['required', 'string', 'min:10', 'max:11'], // 09876543210  9876543210 11 or 10
        ];

        return $valideted;
    }

//    public function all($keys = null)
//    {
//        $data = parent::all( $keys );
//        return array_merge( parent::all(), $this->route()->parameters());
//        $data[$QueryParams] = $this->route($QueryParams);
//        return $data;
//    }
}
