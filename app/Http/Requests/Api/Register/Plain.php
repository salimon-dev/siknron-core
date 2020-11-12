<?php

namespace App\Http\Requests\Api\Register;

use Illuminate\Foundation\Http\FormRequest;

class Plain extends FormRequest
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
            'username' => 'required|string|unique:users|max:64',
            'password' => 'required|string',
            'email' => 'required|email|max:64',
            'phone' => 'nullable|string|max:20',
            'avatar' => 'nullable|file|max:2500'
        ];
    }
}
