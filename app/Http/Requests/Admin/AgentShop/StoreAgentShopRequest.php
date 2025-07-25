<?php

namespace App\Http\Requests\Admin\AgentShop;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgentShopRequest extends FormRequest
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
            'agent' => ['required', 'integer', 'exists:agents,id'], // adjust 'agents' table name if needed

            'ids' => ['required', 'array', 'min:1'],
            'ids.*' => ['required', 'integer', 'exists:shops,id'],

            'percents' => ['required', 'array', 'min:1'],
            'percents.*' => ['required', 'numeric', 'between:0,100'],

            'amounts' => ['required', 'array', 'min:1'],
            'amounts.*' => ['required', 'numeric', 'min:0'],

            'offers' => ['required', 'array', 'min:1'],
            'offers.*' => ['required', 'numeric', 'min:0'],
        ];
    }
}
