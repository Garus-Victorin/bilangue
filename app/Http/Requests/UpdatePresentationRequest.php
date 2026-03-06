<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePresentationRequest extends FormRequest
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
            'presentation' => 'required|string|unique:presentations,presentation,' . $this->route('presentation')->id_presentation . ',id_presentation',
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
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'presentation.required' => 'The presentation field is required.',
            'presentation.unique' => 'This presentation already exists.',
            'francais.required' => 'The French translation is required.',
            'goun.required' => 'The Goun translation is required.',
            'fon.required' => 'The Fon translation is required.',
            'yoruba.required' => 'The Yoruba translation is required.',
            'dendi.required' => 'The Dendi translation is required.',
            'anglais.required' => 'The English translation is required.',
        ];
    }
}
