<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
            'population' => 'required|gt:0',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Please enter country\'s name',
            'population.required' => 'Please enter country\'s population',
            'population.gt' => 'Country\'s population must be bigger than 0',
        ];
    }
}
