<?php

namespace App\Http\Requests\Admin\Property;

use App\Settings\MediaSettings;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelSettings\Settings;

class StorePropertyRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:properties,name',
            'property_type_id' => 'required|exists:property_types,id',
            'number_of_floors' => 'required|numeric',
            'address' => 'required|string',
            'length' => 'nullable|numeric',
            'wide' => 'nullable|numeric',
            'contact_person' => 'required|string',
            'contact_number' => 'required|string',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'picture' => ['image', 'mimes:' . $this->settings->allow_file_types, 'max:' . $this->settings->max_file_size], // Validate each image
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The property number field is required.',
            'name.string' => 'The property number must be a valid text string.',
            'name.max' => 'The property number may not be greater than 255 characters.',
            'name.unique' => 'This property number has already been taken.',
        ];
    }
}
