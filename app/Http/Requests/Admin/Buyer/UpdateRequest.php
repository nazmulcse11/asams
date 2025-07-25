<?php

namespace App\Http\Requests\Admin\Buyer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
        $buyerId = $this->route('buyer'); // assuming route param is named 'buyer'

        return [
            'first_name'           => ['required', 'string', 'max:255'],
            'last_name'            => ['required', 'string', 'max:255'],
            'email'                => ['required', 'email', 'max:255', Rule::unique('buyers', 'email')->ignore($buyerId)],
            'phone'                => ['required', 'string', 'max:20'],
            'buyer_contact_method' => ['required', 'string', 'max:255'], // Adjust as needed
            'buyer_type_id'        => ['required', 'exists:buyer_types,id'],
            'gender_id'            => ['required', 'exists:genders,id'],
            'status_id'            => ['required', 'exists:statuses,id'],
            'username'             => ['required', 'string', 'max:255', Rule::unique('buyers', 'username')->ignore($buyerId)],
            'password'             => ['nullable', 'string', 'min:6'], // Optional update
            'nid'                  => ['nullable', 'string', 'max:255'],
            'agent_id'             => ['nullable', 'exists:agents,id'],
            'type_id'              => ['required', 'exists:address_types,id'],
            'address_line1'        => ['required', 'string', 'max:255'],
            'address_line2'        => ['nullable', 'string', 'max:255'],
            'country_id'           => ['required', 'exists:countries,id'],
            'state_id'             => ['required', 'exists:states,id'],
            'city_id'              => ['required', 'exists:cities,id'],
            'zip_code'             => ['required', 'string', 'max:10'],
            'picture'              => ['nullable', 'image', 'max:5120'],
            'nid_copy'             => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:5120'],
        ];
    }
}
