<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            'first_name'        => ['required', 'string', 'max:50'],
            'last_name'         => ['required', 'string', 'max:50'],
            'email'             => ['required', 'string', 'email', 'max:255'/*, 'unique:users'*/],
            'phone'             => ['required', 'string', 'min:9'],
            'profession'        => ['required', 'string', 'max:50'],
            'user_role_id'      => 'required',
            'user_image_id'     => 'required',
            'department_id'     => 'required',
            'company_id'        => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages(){
        return[];
    }
}
