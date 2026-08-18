<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCounsellorRequest extends FormRequest
{
    public function authorize(): bool
    {
               return auth()->user()->can('counsellors.edit');

    }

    public function rules(): array
    {
        $counsellorId = $this->route('counsellor')->id;

        return [
            'user_id' => ['nullable', 'exists:users,id'],
            'slug' => ['nullable', 'string', 'max:180', Rule::unique('counsellors', 'slug')->ignore($counsellorId)],
            'photo' => ['nullable', 'image', 'max:2048'],
            'designation' => ['nullable', 'string', 'max:150'],
            'bio' => ['nullable', 'string'],
            'education' => ['nullable', 'string'],
            'institution' => ['nullable', 'string'],
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

    protected function prepareForValidation()
    {
        if (is_string($this->languages)) {
            $this->merge(['languages' => explode(',', $this->languages)]);
        }
        if (is_string($this->expertise)) {
            $this->merge(['expertise' => explode(',', $this->expertise)]);
        }
    }
}