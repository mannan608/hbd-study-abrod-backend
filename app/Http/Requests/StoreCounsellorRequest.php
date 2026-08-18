<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCounsellorRequest extends FormRequest
{
    public function authorize(): bool
    {
       return auth()->user()->can('counsellors.create');
    }



    public function rules(): array
    {
        return [
            // User account
            'name' => ['required_if:create_user,true', 'string', 'max:255'],

            'email' => ['required_if:create_user,true', 'email', 'max:255', Rule::unique('users', 'email')],

            'password' => ['required_if:create_user,true', 'string', 'min:8'],

            'create_user' => ['boolean'],

            // Counsellor
            'user_id' => ['nullable', 'exists:users,id'],

            'slug' => ['nullable', 'string', 'max:180', Rule::unique('counsellors', 'slug')],

            'photo' => ['nullable', 'image', 'max:2048'],

            'designation' => ['nullable', 'string', 'max:150'],

            'bio' => ['nullable', 'string'],

            'education' => ['nullable', 'string'],

            'institution' => ['nullable', 'string', 'max:255'],

            'city_id' => ['nullable', 'exists:cities,id'],

            'country_id' => ['nullable', 'exists:countries,id'],

            'languages' => ['required', 'array'],

            'languages.*' => ['string'],

            'expertise' => ['nullable', 'array'],

            'expertise.*' => ['string'],

            'experience_years' => ['nullable', 'integer', 'min:0'],

            'is_featured' => ['boolean'],

            'is_verified' => ['boolean'],

            'is_active' => ['boolean'],

            'sort_order' => ['nullable', 'integer'],
        ];
    }
        protected function prepareForValidation(): void
    {
        // Convert comma-separated strings to arrays
        if (is_string($this->languages)) {
            $this->merge([
                'languages' => array_values(array_filter(array_map('trim', explode(',', $this->languages)))),
            ]);
        }

        if (is_string($this->expertise)) {
            $this->merge([
                'expertise' => array_values(array_filter(array_map('trim', explode(',', $this->expertise)))),
            ]);
        }
    }
}