<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'price' => 'required|numeric|min:100',
            'details' => 'required',
            'image' => 'image|max:10000'
        ];
    }

    public function messages()
    {
        return [
            'price.min' => 'The Price should not be less than 100 naira',
            'image.image' => 'The file must be an image',
            'image.max' => 'The image must not be more than 2mb'
        ];
    }
}
