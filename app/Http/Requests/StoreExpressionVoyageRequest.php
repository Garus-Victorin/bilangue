<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpressionVoyageRequest extends FormRequest
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
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
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
        ];
    }
}
