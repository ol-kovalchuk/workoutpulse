<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVitalSignsRequest extends FormRequest
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
            'temperature' => ['numeric', 'min:35', 'max:42'],
            'pulse' => ['numeric', 'min:20', 'max:300'],
            'breathing' => ['numeric', 'min:5', 'max: 60'],
            'systolic' => ['numeric', 'min:40', 'max:300'],
            'diastolic' => ['numeric', 'min:20', 'max:200']
        ];
    }
}
