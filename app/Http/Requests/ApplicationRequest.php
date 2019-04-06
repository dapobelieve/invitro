<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|digits:11',
            'occupation' => 'required',
            'address' => 'required'
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required' => 'Please enter your full name',
            'email.required' => 'Please enter your email address',
            'phone.required' => 'Please enter your phone number',
            'occupation.required' => 'Please enter your discipline',
            'address.required' => 'Please enter your address',
            'phone.digits' => 'Phone number must be a valid 11 digit number',
        ];

        return $messages;
    }
}
