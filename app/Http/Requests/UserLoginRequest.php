<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest {
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
        $rules = [
            'verify_code' => ['required'],
            'country_code' => ['required'],
            'mobile_phone_number' => ['required', 'integer', 'digits:10'],
        ];

//        $mobile = $this->request->get( 'country_code' ) . $this->request->get( 'mobile_phone_number' );
//
//        $user = User::where( 'mobile', '!=', $mobile )
//            ->where( 'verify_code', '!=', $this->request->get( 'verify_code' ) )
//            ->get();
//        if ($user)
//        {
//            $rules['mobile'] = 'unique:Users,mobile';
//        }
//        else{
//            $rules['mobile'] = $mobile;
//        }

        return $rules;
    }
}
