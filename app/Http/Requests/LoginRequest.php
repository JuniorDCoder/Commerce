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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'alpha', 'min:4', 'max:9'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }

    public function messages(){
        return [
            'name.required' => 'The user name field is required!',
            'email.email' => 'Enter a valid Email!'
        ];
    }
}
