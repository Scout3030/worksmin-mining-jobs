<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreePostRequest extends FormRequest
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
            'title' => 'required|min:5',
            'company' => 'required|min:5',
            'ruc' => 'required|min:11|max:11',
            'subcategory_id' => 'required',
            'province_id' => 'required',
            'job_type_id' => 'required',
            'subcategory_id' => 'required',
            'max_salary' => 'gte:min_salary',
            'description' => 'required|min:55',
            'email' => 'required',
        ];
    }
}
