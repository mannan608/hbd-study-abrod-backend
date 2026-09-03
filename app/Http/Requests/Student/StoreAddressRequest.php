<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAddressRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],

            'type' => ['required', 'string', Rule::in(['current', 'permanent'])],

            'address' => ['required', 'string', 'max:1000'],

            'city_id' => ['nullable', 'uuid', 'exists:cities,id'],

            'country_id' => ['nullable', 'uuid', 'exists:countries,id'],
        ];
    }
}