<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Department Create/Update - Form Request
 */
class DepartmentPostRequest extends FormRequest{
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
            'department_name' => ['required','string','max:50', 'unique:departments']
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
