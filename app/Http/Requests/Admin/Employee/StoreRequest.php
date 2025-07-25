<?php

namespace App\Http\Requests\Admin\Employee;

use App\Settings\MediaSettings;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Spatie\LaravelSettings\Settings;

class StoreRequest extends FormRequest
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
            'username' => 'required|string|max:100|unique:employees,username',
            'email' => 'required|email|max:255|unique:employees,email',
            'phone' => 'nullable|string|max:20|unique:employees,phone|phone:INTERNATIONAL,BD',
            'password' => 'required|string|min:6',
            'position' => 'nullable|string|max:100',
            'status' => 'nullable|exists:statuses,id',

            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'picture' => ['image', 'nullable', 'mimes:' . $this->settings->allow_file_types, 'max:' . $this->settings->max_file_size],
            'blood_group' => 'nullable|exists:blood_groups,id',
            'nid' => 'nullable|string|max:25',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|exists:genders,id',
            'marital_status' => 'nullable|exists:maritals,id',

            'addresses' => 'nullable|array',
            'addresses.*.type' => 'required|exists:address_types,id',
            'addresses.*.address_line1' => 'required|string|max:255',
            'addresses.*.address_line2' => 'nullable|string|max:255',
            'addresses.*.city' => 'required|string|max:100',
            'addresses.*.state' => 'required|string|max:100',
            'addresses.*.zip_code' => 'required|string|max:20',
            'addresses.*.country' => 'required|string|max:100',
            'addresses.*.is_primary' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return [
            "phone" => "The :attribute field must be a valid phone number.",
            'picture.mimes' => 'Only JPEG, PNG, or JPG images are allowed.',
            'picture.image' => 'Only images are allowed.',
            'picture.max' => 'The image must not be larger than 2MB.',
        ];
    }

    public function attributes(): array
    {
        $attributes = [];

        // Loop for dynamic addresses attributes
        foreach ($this->input('addresses', []) as $index => $address) {
            $attributes["addresses.{$index}.type"] = "address type";
            $attributes["addresses.{$index}.address_line1"] = "address line 1";
            $attributes["addresses.{$index}.address_line2"] = "address line 2";
            $attributes["addresses.{$index}.city"] = "city";
            $attributes["addresses.{$index}.state"] = "state";
            $attributes["addresses.{$index}.zip_code"] = "zip code";
            $attributes["addresses.{$index}.country"] = "country";
            $attributes["addresses.{$index}.is_primary"] = "primary address flag";
        }

        return $attributes;
    }

}
