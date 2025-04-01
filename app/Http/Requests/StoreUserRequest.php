<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name' => ['required', 'alpha', 'min:3', 'max:30'],
            'last_name' => ['required', 'alpha', 'min:3', 'max:40'],
            'age' => ['required', 'numeric', 'min:16', 'max:100'],
            'username' => ['required', 'alpha_num', 'min:3', 'max:30', Rule::unique('users', 'username')],
            'email'=> ['required', 'email', Rule::unique('users','email')],
            'password' => ['required', 'min:8', 'confirmed']
        ];
    }
}
