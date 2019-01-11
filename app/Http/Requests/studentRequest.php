<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentRequest extends FormRequest
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
            'name' => 'required',
            'roll_no' => 'required|unique:students',
            'section' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Oops! Kindly provide us a name',
            'roll_no.required'  => 'Oops! Kindly provide us a roll number',
            'roll_no.unique' => 'Oops! roll number should be unique',
        ];
    }


}
