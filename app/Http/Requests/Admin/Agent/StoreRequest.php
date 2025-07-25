<?php

namespace App\Http\Requests\Admin\Agent;

use App\Settings\MediaSettings;
use Illuminate\Foundation\Http\FormRequest;
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
            'first_name'        => ['required', 'string', 'max:255'],
            'last_name'         => ['required', 'string', 'max:255'],
            'blood_group_id'    => ['required', 'exists:blood_groups,id'],
            'nid'               => ['required', 'string', 'max:50'],
            'date_of_birth'     => ['required', 'date', 'before:today'],
            'gender_id'         => ['required', 'exists:genders,id'],
            'marital_status_id' => ['required', 'exists:maritals,id'],
            'biography'         => ['nullable', 'string'],
            'username'          => ['required', 'string', 'max:50', 'unique:agents,username'],
            'password'          => ['required', 'string', 'min:8'],
            'email'             => ['required', 'email', 'max:255', 'unique:agents,email'],
            'phone'             => ['required', 'phone:BD', 'unique:agents,phone'],
            'status_id'         => ['required', 'exists:statuses,id'],
            'type_id'           => ['required', 'exists:address_types,id'],

            'address_line1'     => ['required', 'string', 'max:255'],
            'address_line2'     => ['nullable', 'string', 'max:255'],
            'country_id'        => ['required', 'exists:countries,id'],
            'state_id'          => ['required', 'exists:states,id'],
            'city_id'           => ['required', 'exists:cities,id'],
            'zip_code'          => ['required', 'string', 'max:20'],

            'picture'           => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif,svg', "max:5120"],
            'nid_copy'          => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif,svg', "max:5120"],
        ];
    }

    public function messages(): array
    {
        return [
            "phone" => "The :attribute field must be a valid phone number.",
            'picture.mimes' => 'Only JPEG, PNG, or JPG images are allowed.',
            'picture.image' => 'Only images are allowed.',
            'picture.max' => 'The image must not be larger than 5MB.',
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
