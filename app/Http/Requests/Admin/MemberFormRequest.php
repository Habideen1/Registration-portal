<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MemberFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'branch' => [
                'required',
                'string',
            ],
            'full_name' => [
                'required',
                'string',
            ],
            'email' => [
                'required',
                'string',
            ],
            'phone' => [
                'required',
                'string',
            ],
            'age_bracket' => [
                'required',
                'string'
            ],
            'gender' => [
                'required',
                'string',
            ],
            'home_address' => [
                'required',
                'string',
            ],
            'next_of_kin' => [
                'required',
                'string',
            ],
            'qualification' => [
                'required',
                'string',
            ],
            'occupation' => [
                'required',
                'string',
            ],
            'employer' => [
                'required',
                'string',
            ],
            'ailment' => [
                'required',
                'string',
            ],
            'pin' => [
                'required',
                'string',
            ],
        ];

        return $rules;
    }
}
