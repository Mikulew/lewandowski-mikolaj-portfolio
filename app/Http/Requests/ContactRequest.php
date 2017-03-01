<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:9',
            'description' => 'required|min:20',

        ];
    }
    public function messages() {
        return [
            'name.required' => 'Pole imię musi być wypełnione',
            'email.required' => 'Pole email musi być poprawnie wypełnione',
            'phone.required' => 'Pole telefon musi być wypełnione i posiadać tylko cyfry',
            'description.required' => 'Pole treść musi posiadać minimum 20 znaków',
            
        ];
    }
}
