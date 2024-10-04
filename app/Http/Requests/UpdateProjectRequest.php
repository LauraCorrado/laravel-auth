<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
        return [
            'name' => 'required|max:50',
            'date_of_upload' => 'required',
            'stack' => 'required',
            'description' => 'nullable',
            'preview' => 'nullable'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Questo campo è obbligatorio',
            'name.max' => 'Può contenere al massimo :max caratteri',
            'date_of_upload.required' => 'Questo campo è obbligatorio',
            'stack.required' => 'Questo campo è obbligatorio'
        ];
    }
}
