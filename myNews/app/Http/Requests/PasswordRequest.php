<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'password' => 'required|confirmed|min:8',
        ];
    }

    public function messages() {
        return [
            'password.required' => 'Please enter the password!',
            'password.confirmed' => 'Please confirm the password!',
            'password.min' => 'Minimal size of password is 8 symbols',
        ];
    }
}
