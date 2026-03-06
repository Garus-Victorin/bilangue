<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpressionBasiqueRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'francais' => 'required|string',
            'goun' => 'required|string',
            'fon' => 'required|string',
            'yoruba' => 'required|string',
            'dendi' => 'required|string',
            'anglais' => 'required|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'image.image' => 'Le fichier doit être une image.',
            'image.mimes' => 'L\'image doit être de type jpeg, png, jpg ou gif.',
            'image.max' => 'L\'image ne doit pas dépasser 2MB.',
            'francais.required' => 'Le champ français est obligatoire.',
            'goun.required' => 'Le champ goun est obligatoire.',
            'fon.required' => 'Le champ fon est obligatoire.',
            'yoruba.required' => 'Le champ yoruba est obligatoire.',
            'dendi.required' => 'Le champ dendi est obligatoire.',
            'anglais.required' => 'Le champ anglais est obligatoire.',
        ];
    }
}
