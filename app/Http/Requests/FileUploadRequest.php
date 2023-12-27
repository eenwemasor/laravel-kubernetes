<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileUploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'files'         => ['required', 'array'],
            'files.*'       => ['required', 'file', 'max:10240'],
            'folder'        => ['sometimes', 'string'],
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'files.required'        => "Files is required",
            'files.array'           => "Files is invalid",
            'files.*.required'      => "Files cannot be empty.",
            'files.*.required'      => "File must be a valid file",
            'files.*.max'           => "File size cannot larger than 10MB",
        ];
    }
}
