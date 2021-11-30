<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyTypePostRequest extends FormRequest
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
            'type_name' => 'required',
            'type_description' => 'required'
        ];
    }

    /**
     *  Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages(){
        return[
            //'type_name.required' => 'O campo é obrigatório',
            //'type_description.required' => 'O campo é obrigatório'
        ];
    }
}
