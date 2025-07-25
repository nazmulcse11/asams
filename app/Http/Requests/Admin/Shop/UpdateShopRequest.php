<?php

namespace App\Http\Requests\Admin\Shop;

use App\Models\Block;
use App\Models\Shop;
use App\Settings\MediaSettings;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use Spatie\LaravelSettings\Settings;

class UpdateShopRequest extends FormRequest
{

    protected Settings $settings;

    public function __construct(MediaSettings $settings)
    {
        parent::__construct();

        $this->settings = $settings;
    }

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
            'number' => ['required', 'string', 'max:255'],
            'area' => 'required|numeric|min:1',
            'length' => 'required|numeric|min:0',
            'width' => 'required|numeric|min:0',
            'total_area' => 'required|numeric|min:0',
            'length_half_corridor' => 'required|numeric|min:0',
            'width_full_shop' => 'required|numeric|min:0',
            'min_sale_price' => 'nullable|numeric|min:0',
            'booking_percent' => 'nullable|numeric|min:0|max:100',

            'block_id' => 'required|exists:blocks,id',

            'feature_name' => 'array',
            'feature_name.*' => 'string|max:255',
            'feature_value' => 'array',
            'feature_value.*' => 'string|max:255',
            'picture' => 'nullable|array', // Ensure 'picture' is an array
            'picture.*' => ['image', 'mimes:' . $this->settings->allow_file_types, 'max:' . $this->settings->max_file_size],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function (Validator $validator) {
            $block = Block::with('floor.property')->find($this->block_id);

            if (!$block || !$block->floor || !$block->floor->property) {
                $validator->errors()->add('block_id', 'Invalid block selection — property not found.');
                return;
            }

            $property = $block->floor->property;
            $propertyId = $property->id;
            $currentShopId = $this->route('shop')->id;

            // Check if another shop with the same number exists in the same property
            $exists = Shop::where('id', '!=', $currentShopId)
                ->where('number', $this->number)
                ->whereHas('block.floor.property', function ($q) use ($propertyId) {
                    $q->where('id', $propertyId);
                })->exists();

            if ($exists) {
                $validator->errors()->add('number', 'This shop number already exists for the "' . $property->name . '" property.');
            }
        });
    }
}
