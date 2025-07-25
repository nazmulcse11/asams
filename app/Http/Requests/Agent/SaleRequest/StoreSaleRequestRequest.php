<?php

namespace App\Http\Requests\Agent\SaleRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequestRequest extends FormRequest
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
            'property_id'          => ['required', 'exists:properties,id'],
            'employee_id'          => ['nullable', 'exists:employees,id'],
            'agent_id'             => ['required', 'exists:agents,id'],
            'buyer_name'           => ['required', 'string', 'max:255'],
            'address'              => ['required', 'string'],
            'mobile'               => ['required', 'string', 'regex:/^01[3-9]\d{8}$/'], // Validates Bangladeshi mobile numbers
            'nid_number'           => ['required', 'string', 'regex:/^\d{10}|\d{13}|\d{17}$/'], // Adjust size as per NID format
            'proposed_price'       => ['required', 'numeric', 'min:1'],
            'payment_type_id'      => ['required', 'exists:payment_types,id'],
            'number_of_installment'=> ['nullable', 'integer', 'min:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'property_id.required' => 'The property is required.',
            'property_id.exists'   => 'The selected property does not exist.',
            'agent_id.required'    => 'An agent must be assigned.',
            'agent_id.exists'      => 'The selected agent is invalid.',
            'employee_id.required' => 'An employee must be assigned.',
            'employee_id.exists'   => 'The selected employee is invalid.',
            'buyer_name.required'  => 'Buyer name is required.',
            'buyer_name.max'       => 'Buyer name should not exceed 255 characters.',
            'address.required'     => 'Address is required.',
            'mobile.required'      => 'Mobile number is required.',
            'mobile.regex'         => 'Enter a valid Bangladeshi mobile number.',
            'nid_number.required'  => 'NID number is required.',
            'nid_number.size'      => 'NID number must be exactly 10 digits.', // Adjust based on actual format
            'proposed_price.required' => 'Proposed price is required.',
            'proposed_price.numeric'  => 'Proposed price must be a number.',
            'proposed_price.min'      => 'Proposed price must be at least 1.',
            'payment_type_id.required'=> 'Payment type is required.',
            'payment_type_id.exists'  => 'Selected payment type is invalid.',
            'number_of_installment.integer' => 'Number of installments must be a valid integer.',
            'number_of_installment.min'     => 'Number of installments cannot be negative.',
        ];
    }
}
