<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'description' => 'required',
            'image' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Please enter the name!',
            'description.required' => 'Please write description!',
            'image.required' => 'Please select an image!',
        ];
    }
}