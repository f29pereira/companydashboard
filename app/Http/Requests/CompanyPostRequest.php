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
            'company_name' => 'required|string',
            'company_description' => 'required|string',
            'sector' => 'required|string',
            'company_phone' => 'required|string',
            'headquarters' => 'required|string',
            'website' => 'required|url',
            'company_types_id' => 'required'
        ];
    }

    /**
     *  Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages(){
        return[];
    }
}
