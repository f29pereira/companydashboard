<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Company Create/Update - Form Request
 */
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
            'company_name'          => ['required','string','max:50'],
            'company_description'   => ['required'],
            'sector'                => ['required','string','max:50'],
            'company_phone'         => 'required',
            'headquarters'          => ['required','string','max:50'],
            'website'               => ['required','url'],
            'company_types_id'      => 'required',
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
