<?php

namespace App\Http\Requests\Admin\Console\User;

use App\Settings\MediaSettings;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeUpdateRequest extends FormRequest
{
    public function __construct(
        protected MediaSettings $settings
    )
    {
        parent::__construct();
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
        $userId = $this->route('employee');
        return [
            'first_name'         => ['required', 'string', 'max:255'],
            'last_name'          => ['required', 'string', 'max:255'],
            'phone'              => ['required', 'string', 'max:20'],
            'email'              => ['required', 'email', 'max:255', Rule::unique('employees', 'email')->ignore($userId)],
            'nid'                => ['required', 'string', 'max:100'],
            'date_of_birth'      => ['required', 'date', 'before:today'],
            'gender_id'          => ['required', 'exists:genders,id'],
            'marital_status_id'  => ['required', 'exists:maritals,id'],
            'status_id'          => ['required', 'exists:statuses,id'],

            'type_id'            => ['required', 'exists:address_types,id'],
            'address_line1'      => ['required', 'string', 'max:255'],
            'address_line2'      => ['nullable', 'string', 'max:255'],
            'country_id'         => ['required', 'exists:countries,id'],
            'state_id'           => ['required', 'exists:states,id'],
            'city_id'            => ['required', 'exists:cities,id'],
            'zip_code'           => ['required', 'string', 'max:20'],

            'properties'         => ['required', 'array'],
            'properties.*'       => ['integer', 'exists:properties,id'],

            'picture'            => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif,svg', "max:5120"],
            'cover'              => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif,svg', "max:5120"]
        ];
    }
}
