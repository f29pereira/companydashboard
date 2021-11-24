<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyPostRequest extends FormRequest
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
            'company_name' => 'required',
            'company_description' => 'required',
            'sector' => 'required',
            'company_phone' => 'required',
            'headquarters' => 'required',
            'website' => 'required',
            'company_types_id' => 'required'
        ];
    }

    /**
     *  Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages(){
        return[
            'company_name.required' => 'O campo é obrigatório',
            'company_description.required' => 'O campo é obrigatório',
            'sector.required' => 'O campo é obrigatório',
            'company_phone.required' => 'O campo é obrigatório',
            'headquarters.required' => 'O campo é obrigatório',
            'website.required' => 'O campo é obrigatório',
            'company_types_id.required' => 'O campo é obrigatório'
        ];
    }
}
