<?php

namespace App\Http\Requests\Auth\Agent;

use App\Settings\MediaSettings;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Spatie\LaravelSettings\Settings;

class RegistrationRequest extends FormRequest
{

    protected Settings $settings;

    public function __construct(MediaSettings $settings)
    {
        parent::__construct();

        if (!is_numeric($settings->max_file_size)) {
            throw new \InvalidArgumentException("Invalid max_file_size in MediaSettings.");
        }

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
            'first_name'         => ['required', 'string', 'max:50', 'regex:/^[\pL\s\-]+$/u'],
            'last_name'          => ['required', 'string', 'max:50', 'regex:/^[\pL\s\-]+$/u'],

            'picture'            => [
                'nullable',
                'image',
                'mimes:' . $this->settings->allow_file_types,
                'max:' . ($this->settings->max_file_size ?? (2048 * 2.5))
            ],

            'nid'                => ['required', 'digits_between:5,20', 'unique:profiles,nid'],
            'date_of_birth'      => ['required', 'date', 'before:today'],

            'gender_id'          => ['required', 'exists:genders,id'],
            'marital_status_id'  => ['required', 'exists:maritals,id'],

            'username'           => ['required', 'string', 'max:30', 'alpha_dash', 'unique:agents,username'],
            'email'              => ['required', 'string', 'email:rfc,dns', 'max:100', 'lowercase', 'unique:agents,email'],

            'password'           => [
                'required',
                'confirmed',
//                Password::min(6)
//                    ->mixedCase()
//                    ->letters()
//                    ->numbers()
//                    ->symbols()
            ],

            'type_id'            => ['required', 'exists:address_types,id'],
            'address_line1'      => ['required', 'string', 'max:100'],
            'address_line2'      => ['nullable', 'string', 'max:100'],

            'city'               => ['required', 'string', 'max:50'],
            'state'              => ['required', 'string', 'max:50'],
            'zip_code'           => ['required', 'regex:/^\d{4,10}$/'],
            'country'            => ['required', 'string', 'max:50'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.lowercase' => 'The email must be in lowercase format.',
            'username.alpha_dash' => 'The username may only contain letters, numbers, dashes and underscores.',
            'nid.digits_between' => 'NID must be between 5 to 20 digits.',
            'zip_code.regex' => 'ZIP code must be numeric and between 4 to 10 digits.',
            'password.*' => 'Password must be at least 6 characters, including upper/lowercase letters, numbers, and symbols.',
        ];
    }
}
