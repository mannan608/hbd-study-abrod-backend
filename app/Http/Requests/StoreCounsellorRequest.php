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
            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],

            'phone' => ['nullable', 'string', 'max:20'],

            'password' => ['required', 'string', 'min:8'],

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

            'languages' => ['required', 'array', 'min:1'],

            'languages.*' => ['required', 'string', 'max:255'],

            'expertise' => ['nullable', 'array'],

            'expertise.*' => ['nullable', 'string', 'max:255'],

            'experience_years' => ['nullable', 'integer', 'min:0'],

            'is_featured' => ['boolean'],

            'is_verified' => ['boolean'],

            'is_active' => ['boolean'],

            'sort_order' => ['nullable', 'integer'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'languages' => $this->normalizeArrayField($this->input('languages')),
            'expertise' => $this->normalizeArrayField($this->input('expertise'), true),
        ]);
    }

    /**
     * Normalize string/array input into a trimmed array.
     */
    protected function normalizeArrayField(mixed $value, bool $nullable = false): ?array
    {
        if (is_string($value)) {
            $value = explode(',', $value);
        }

        if (! is_array($value)) {
            return $nullable ? null : [];
        }

        $value = array_values(array_filter(array_map(
            static fn ($item) => is_string($item) ? trim($item) : $item,
            $value
        ), static fn ($item) => filled($item)));

        return $nullable && empty($value) ? null : $value;
    }
}
