<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // Student Information
            'user_id' => ['required', 'integer', 'exists:users,id'],

            'student_number' => ['required', 'string', 'max:255', 'unique:students,student_number'],

            'date_of_birth' => ['nullable', 'date', 'before:today'],

            'gender' => ['nullable', 'string', 'max:50'],

            'nationality' => ['nullable', 'string', 'max:100'],

            'place_of_birth' => ['nullable', 'string', 'max:255'],

            'marital_status' => ['nullable', 'string', 'max:50'],

            'phone_number' => ['nullable', 'string', 'max:30'],

            // Passport Information
            'passport_number' => ['nullable', 'string', 'max:100', 'unique:students,passport_number'],

            'passport_issue_date' => ['nullable', 'date'],

            'passport_expiry_date' => ['nullable', 'date', 'after:passport_issue_date'],
        ];
    }
}