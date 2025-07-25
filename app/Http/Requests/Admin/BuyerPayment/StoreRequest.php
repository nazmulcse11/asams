<?php

namespace App\Http\Requests\Admin\BuyerPayment;

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
            "buyer_id" => "required|exists:buyers,id",
            "shop_id" => "required|exists:shops,id",
            "installment_id" => "required|array|min:1",
            'installment_id.*' => ['integer', 'exists:installments,id'],
            'payment_amount' => ['required', 'numeric', 'min:1'],
            'payment_mode_id' => "required|exists:payment_modes,id",
            'payment_ref' => ['nullable', 'string', 'max:255'],
        ];
    }
}
