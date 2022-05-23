<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'birthday' => 'required|date',
            'gender' => [
                'required',
                Rule::in(['male', 'female'])
            ],
            'address' => 'required',
            'post_code' => 'required',
            'city_name' => 'required',
            'country_name' => 'required',
        ];
    }
}
