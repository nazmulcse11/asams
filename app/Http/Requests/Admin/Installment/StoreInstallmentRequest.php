<?php

namespace App\Http\Requests\Admin\Installment;

use App\Models\BuyerShop;
use App\Models\Shop;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreInstallmentRequest extends FormRequest
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
            'agent_id' => ['required', 'exists:agents,id'],
            'shop_id' => ['required', 'exists:shops,id'],
            'buyer_id' => ['required', 'exists:buyers,id'],
            'sell_amount' => ['required', 'numeric'],

            'installment_percent' => 'required|array',
            'installment_percent.*' => 'required|numeric|min:0|max:100',

            'installment_amount' => 'required|array',
            'installment_amount.*' => 'required|numeric|min:0',

            'installment_remarks' => 'nullable|array',
            'installment_remarks.*' => 'nullable|string|max:255',

            'installment_date' => 'required|array',
            'installment_date.*' => 'nullable|date|after_or_equal:today',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (BuyerShop::where('buyer_id', $this->buyer_id)
                ->where('shop_id', $this->shop_id)
                ->exists()) {
                $validator->errors()->add('buyer_id', 'This Buyer is already assigned to this Shop.');
            }
            if(Shop::where("id", $this->shop_id)
                ->where("min_sale_price", '>', $this->sell_amount)
                ->exists()) {
                    $validator->errors()->add('sell_amount', 'Sell amount is less than minimum sale price.');
                }
        });
    }
}
