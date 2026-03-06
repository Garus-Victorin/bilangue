<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpressionEcoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Autoriser tous les utilisateurs pour cet exemple
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'francais.required' => 'Le champ français est obligatoire.',
            'goun.required' => 'Le champ goun est obligatoire.',
            'fon.required' => 'Le champ fon est obligatoire.',
            'yoruba.required' => 'Le champ yoruba est obligatoire.',
            'dendi.required' => 'Le champ dendi est obligatoire.',
            'anglais.required' => 'Le champ anglais est obligatoire.',
            'francais.max' => 'Le champ français ne doit pas dépasser 255 caractères.',
            'goun.max' => 'Le champ goun ne doit pas dépasser 255 caractères.',
            'fon.max' => 'Le champ fon ne doit pas dépasser 255 caractères.',
            'yoruba.max' => 'Le champ yoruba ne doit pas dépasser 255 caractères.',
            'dendi.max' => 'Le champ dendi ne doit pas dépasser 255 caractères.',
            'anglais.max' => 'Le champ anglais ne doit pas dépasser 255 caractères.',
        ];
    }
}
