<?php

namespace App\Http\Requests\Nonconformities;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Nonconformity Create/Update - Form Request
 */
class NonconformityPostRequest extends FormRequest
{
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
        return [
            //
        ];
    }
}
