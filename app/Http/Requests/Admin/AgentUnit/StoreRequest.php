<?php

namespace App\Http\Requests\Admin\AgentUnit;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'agent' => 'required|exists:agents,id',
            'id' => 'required|array',
            'id.*' => 'required|integer|exists:shops,id',
            'sale' => 'required|array',
            'sale.*' => 'required|numeric|min:0',
            'percent' => 'required|array',
            'percent.*' => 'required|numeric|min:0',
        ];
    }


    public function messages(): array
    {
        return [
            'id.*.required' => 'Each shop ID is required.',
            'id.*.integer' => 'Each shop ID must be an integer.',
            'id.*.exists' => 'Some shops do not exist.',

            'sale.*.required' => 'Each sale value is required.',
            'sale.*.numeric' => 'Each sale value must be a number.',
            'sale.*.min' => 'Sale price cannot be negative.',

            'percent.*.required' => 'Each percent value is required.',
            'percent.*.numeric' => 'Each percent must be a number.',
            'percent.*.min' => 'Percent cannot be negative.',
        ];
    }
}
