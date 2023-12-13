<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'         => ['required', 'string'],
            'password'      => ['required', 'string']
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'email.required' => "Email is required",
            'email.string' => "Email is invalid",

            'password.unique' => "Password is required",
            'password.string' => "Password is invalid",
        ];
    }
}
