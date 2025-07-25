<?php

namespace App\Http\Requests\Admin\Employee;

use App\Settings\MediaSettings;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Spatie\LaravelSettings\Settings;

class UpdateRequest extends FormRequest
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
        $employeeId = $this->route('employee')->id;

        return [
            'username' => ['required', 'string', 'max:100', Rule::unique('employees', 'username')->ignore($employeeId)],
            'email' => ['required', 'email', 'max:255', Rule::unique('employees', 'email')->ignore($employeeId)],
            'phone' => ['nullable', 'string', 'max:20', Rule::unique('employees', 'phone')->ignore($employeeId), 'phone:INTERNATIONAL,BD'],
            'password' => 'nullable|string|min:6',  // Password may not be required in update

            'position' => 'nullable|string|max:100',
            'status' => 'nullable|exists:statuses,id',  // Check status exists in status table

            // Profile Fields
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'picture' => ['image', 'nullable', 'mimes:' . $this->settings->allow_file_types, 'max:' . $this->settings->max_file_size],

            'blood_group' => 'nullable|exists:blood_groups,id',  // Validate blood_group exists
            'nid' => 'nullable|string|max:25',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|exists:genders,id',  // Validate gender exists
            'marital_status' => 'nullable|exists:maritals,id',  // Validate marital status exists

            // Address Fields (Optional Array of Addresses)
            'addresses' => 'nullable|array',
            'addresses.*.type' => ['required_with:addresses', 'exists:address_types,id'],  // Validate address type exists
            'addresses.*.address_line1' => 'required_with:addresses|string|max:255',
            'addresses.*.address_line2' => 'nullable|string|max:255',
            'addresses.*.city' => 'required_with:addresses|string|max:100',
            'addresses.*.state' => 'required_with:addresses|string|max:100',
            'addresses.*.zip_code' => 'required_with:addresses|string|max:20',
            'addresses.*.country' => 'required_with:addresses|string|max:100',
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
