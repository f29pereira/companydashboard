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
            //'image'             => ['file', 'mimes:png,jpg,jpeg'],
            'name'              => ['required', 'string', 'max:255'],
            'email'             => ['required', 'string', 'email', 'max:255'/*, 'unique:users'*/],
            'phone'             => ['required', 'string', 'min:9'],
            'user_role_id'      => 'required',
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
        return[
            //'name.required' => 'O campo é obrigatório',
            //'email.required' => 'O campo é obrigatório',
            //'phone.required' => 'O campo é obrigatório',
            //'user_role_id.required' => 'O campo é obrigatório',
            //'department_id.required' => 'O campo é obrigatório',
            //'company_id.required' => 'O campo é obrigatório'
        ];
    }
}
