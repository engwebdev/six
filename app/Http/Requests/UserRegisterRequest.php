<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        dd($this->mobile_phone_number);
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'country_name' => [ 'required' ],
            'country_code' => [ 'required' ],
            'mobile_phone_number' => [ 'required', 'integer', 'digits:10' ],
        ];

//        $mobile = $this->request->get('country_code') . $this->request->get('mobile_phone_number');
//
//        $user = User::where( 'mobile', '!=', $mobile)->get();
//        if ($user){
//            $rules['mobile'] = 'unique:Users,mobile';
//        }
//        else{
//            $rules['mobile'] = $mobile;
//        }

        return $rules;
    }

//    public function messages()
//    {
//        return [
//            'mobile_phone_number.unique:users,mobile' => 'phone number must be unique',
//        ];
//    }

//    protected $verificationCode;
//    protected $mobile_phone_number;
//    public function createVerificationCode()
//    {
//        base_convert(intval(strval(substr($this->mobile_phone_number, 1))) . time(), 10, 36);
//        return $this;
//    }

}
