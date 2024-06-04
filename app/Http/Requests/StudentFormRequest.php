<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'stu_name'=> [
                'required'
            ],
            'stu_age'=> [
                'required'
            ],
            'stu_depart'=> [
                'required'
            ],
            'stu_add'=> [
                'required'
            ],
        ];

        return $rules;
    }
}
