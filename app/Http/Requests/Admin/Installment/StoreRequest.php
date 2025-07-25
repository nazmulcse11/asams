<?php

namespace App\Http\Requests\Admin\Installment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'payment_type_id' => [
                'required',
                Rule::exists('payment_types', 'id'), // Ensures payment_type_id exists in the payment_types table
            ],
            'buyer_id' => 'required|exists:buyers,id',
            'installment_no' => 'required_if:payment_type_id,2|array|min:1',
            'installment_amount' => 'required_if:payment_type_id,2|array|min:1',
            'installment_no.*' => 'numeric|min:1',
            'installment_amount.*' => 'numeric|min:1',
        ];
    }

    /**
     * Custom error messages.
     */
    public function messages(): array
    {
        return [
            'payment_type_id.required' => 'The payment type is required.',
            'payment_type_id.exists' => 'The selected payment type is invalid.',
            'installment_no.required_if' => 'At least one installment is required for partial payments.',
            'installment_amount.required_if' => 'Installment amount is required for each installment.',
            'installment_no.*.numeric' => 'Installment number must be a number.',
            'installment_no.*.min' => 'Installment number must be at least 1.',
            'installment_amount.*.numeric' => 'Installment amount must be a valid number.',
            'installment_amount.*.min' => 'Installment amount must be at least 1.',
        ];
    }
}
