<?php

namespace App\Http\Requests\Companies;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Company Type Create/Update - Form Request
 */
class CompanyTypePostRequest extends FormRequest{
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
            'type_name'         => ['required','string','max:50','unique:company_types'],
            'type_description'  => ['required','max:250']
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
