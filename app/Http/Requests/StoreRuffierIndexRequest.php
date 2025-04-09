<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRuffierIndexRequest extends FormRequest
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
            'pulse_1' => ['required', 'numeric', 'min:5', 'max:100'],
            'pulse_2' => ['required', 'numeric', 'min:5', 'max:100'],
            'pulse_3' => ['required', 'numeric', 'min:5', 'max:100']
        ];
    }
}
