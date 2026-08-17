<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'university_id' => ['nullable', 'uuid', 'exists:universities,id'],

            'campus_id' => ['nullable', 'uuid', 'exists:university_campuses,id'],

            'category_id' => ['nullable', 'uuid', 'exists:course_categories,id'],

            'title' => ['required', 'string', 'max:255'],

            'degree_level' => ['required', 'string', 'max:50'],

            'duration_months' => ['required', 'integer', 'min:1', 'max:1200'],

            'tuition_fee' => ['required', 'numeric', 'min:0', 'max:9999999999.99'],

            'currency' => ['required', 'string', 'size:3'],

            'ielts_overall' => ['nullable', 'numeric', 'min:0', 'max:9.0'],

            'toefl_overall' => ['nullable', 'integer', 'min:0', 'max:120'],

            'pte_overall' => ['nullable', 'integer', 'min:0', 'max:90'],

            'gpa_requirement' => ['nullable', 'numeric', 'min:0', 'max:10'],

            'entry_requirements' => ['nullable', 'string'],

            'overview' => ['nullable', 'string'],

            'is_featured' => ['nullable', 'boolean'],

            'is_active' => ['nullable', 'boolean'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'currency' => strtoupper($this->currency ?: 'USD'),

            'is_featured' => $this->boolean('is_featured'),

            'is_active' => $this->has('is_active') ? $this->boolean('is_active') : true,
        ]);
    }

    public function messages(): array
    {
        return new StoreCourseRequest()->messages();
    }

    public function attributes(): array
    {
        return new StoreCourseRequest()->attributes();
    }
}