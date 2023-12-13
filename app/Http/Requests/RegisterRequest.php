<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => "Name is required",
            'name.string' => "Name is invalid",
            'name.max' => "Name cannot be longer than 255 characters",

            'email.required' => "Email is required",
            'email.string' => "Email is invalid",
            'email.email' => "Email is invalid",
            'email.max' => "Email cannot be longer than 255 characters",
            'email.unique' => "Email has already been taken",


            'password.unique' => "Password is required",
            'password.string' => "Password is invalid",
            'password.min' => "Password must be longer than 8 characters",
        ];
    }
}
