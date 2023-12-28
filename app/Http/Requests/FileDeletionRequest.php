<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileDeletionRequest extends FormRequest
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
            'fileIds'           => ['required', 'array'],
            'fileIds.*'         => ['required', 'string'],
            'folder'            => ['sometimes', 'string'],
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'fileIds.required'          => "File Ids is required",
            'fileIds.array'             => "File Ids is invalid",
            'fileIds.*.required'        => "File Ids cannot be empty.",
            'fileIds.*.string'          => "File Id is invalid"
        ];
    }
}
