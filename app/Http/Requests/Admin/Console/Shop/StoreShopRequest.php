<?php

namespace App\Http\Requests\Admin\Console\Shop;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopRequest extends FormRequest
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
            'number'                => ['required', 'string', 'max:255'],
            'block_id'             => ['required', 'integer', 'exists:blocks,id'],
            'description'          => ['nullable', 'string', 'max:1000'],
            'status_id'            => ['required', 'integer', 'exists:statuses,id'],

            'length'               => ['required', 'numeric', 'min:0'],
            'width'                => ['required', 'numeric', 'min:0'],
            'area'                 => ['required', 'numeric', 'min:0'],
            'length_half_corridor' => ['nullable', 'numeric', 'min:0'],
            'width_full_shop'      => ['nullable', 'numeric', 'min:0'],
            'total_area'           => ['required', 'numeric', 'min:0'],

            'min_sale_price'       => ['required', 'numeric', 'min:0'],
            'booking_percent'      => ['required', 'numeric', 'between:0,100'],
            'commission_percent'   => ['required', 'numeric', 'between:0,100'],

            'key'                  => ['nullable', 'string', 'max:255'],
            'value'                => ['nullable', 'string', 'max:1000'],

            'picture'              => ['nullable', 'image', 'max:5120'], // max:4096 = 4MB
        ];
    }
}
