<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkoutRequest extends FormRequest
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
            'pushups' => ['required', 'numeric', 'min:1', 'max:1000'],
            'situps' => ['required', 'numeric', 'min:1', 'max:1000'],
            'squats' => ['required', 'numeric', 'min:1', 'max:1000'],
            'dips' => ['required', 'numeric', 'min:1', 'max:1000'],
            'pullups' => ['required', 'numeric', 'min:1', 'max:1000']
        ];
    }
}
