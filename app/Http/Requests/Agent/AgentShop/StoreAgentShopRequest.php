<?php

namespace App\Http\Requests\Agent\AgentShop;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'duration'          => ['required', 'integer', 'min:1'],
            'sale_price'        => ['required', 'numeric', 'min:0'],
            'security_deposit'  => ['required', 'numeric', 'min:0'],
            'commission_type'   => ['required', Rule::in(['percentage', 'amount'])],
            'commission'        => ['required', 'numeric', 'min:0'],
            'note'              => ['nullable', 'string', 'max:1000'],
            'shop_id'           => ['required', 'exists:shops,id'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            // Check commission condition
            if (
                $this->input('commission_type') === 'percentage' &&
                $this->input('commission') > 100
            ) {
                $validator->errors()->add(
                    'commission',
                    'Commission cannot exceed 100% when commission type is percentage.'
                );
            }

            // Validate sale_price against shop's min_sale_price
            $shopId = $this->input('shop_id');
            $salePrice = $this->input('sale_price');

            if ($shopId && is_numeric($salePrice)) {
                $shop = \App\Models\Shop::find($shopId);

                if ($shop && $salePrice < $shop->min_sale_price) {
                    $validator->errors()->add(
                        'sale_price',
                        'Sale price cannot be less than the shop\'s minimum sale price (' . $shop->min_sale_price . ').'
                    );
                }
            }
        });
    }
}
