<?php

namespace App\Http\Requests\Nonconformities;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Occurrence Create/Update - Form Request
 */
class OccurrencePostRequest extends FormRequest{
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
    public function rules(){
        return [
            'occurrence_title'          => ['required','string','max:250'],
            'occurrence_description'    => ['required'],
            'user_id'                   => ['required'],
            'company_id'                => ['required'],
        ];
    }
}
