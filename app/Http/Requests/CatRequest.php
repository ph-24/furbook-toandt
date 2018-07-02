<?php

namespace Furbook\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
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
            'name' => 'required|max:255',
//            'date_of_birth' => 'required|date_format:"Y-m-d"',
//            'breed_id' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Cot :attribute la  bat .',
//                'size' => 'Cot :attribute do dai fai nho  hon :size.',
//                'date_format' => 'Cot :attribute format fai la "YY/mm/dd".',
//                'numeric' => 'Cot :attribute la la kieu so.',
        ];
    }
}
