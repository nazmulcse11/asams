<?php

namespace App\Http\Requests\Admin\Block;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlockRequest extends FormRequest
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
        $blockId = $this->route('block');

        return [
            'name' => [
                'required',
                'string',
                'max:100',
                Rule::unique('blocks')->ignore($blockId)->where(function ($query) {
                    return $query->where('floor_id', $this->input('floor_id'));
                }),
            ],
            'floor_id' => ['required', 'exists:floors,id'],
            'description' => ['nullable', 'string'],
        ];
    }
}
