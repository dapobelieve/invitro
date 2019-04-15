<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingRequest extends FormRequest
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
            'title' => 'required|string',
            'details' => 'required',
//            'cost' => 'required',
            'materials.*' => 'mimetypes:video/mp4,application/pdf|max:10000'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'a title is required',
            'details.required' => 'Content is required',
            'materials.*.max' => 'Files should not be more than 10MB each'
        ];
    }
}
