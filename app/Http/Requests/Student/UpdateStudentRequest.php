<?php

namespace App\Http\Requests\Student;

use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $student = $this->route('student');

        $studentId = $student instanceof Student ? $student->id : $student;

        return [
            // Student Information
            'user_id' => ['required', 'integer', 'exists:users,id'],

            'student_number' => ['required', 'string', 'max:255', Rule::unique('students', 'student_number')->ignore($studentId)],

            'date_of_birth' => ['nullable', 'date', 'before:today'],

            'gender' => ['nullable', 'string', 'max:50'],

            'nationality' => ['nullable', 'string', 'max:100'],

            'place_of_birth' => ['nullable', 'string', 'max:255'],

            'marital_status' => ['nullable', 'string', 'max:50'],

            'phone_number' => ['nullable', 'string', 'max:30'],

            // Passport Information
            'passport_number' => ['nullable', 'string', 'max:100', Rule::unique('students', 'passport_number')->ignore($studentId)],

            'passport_issue_date' => ['nullable', 'date'],

            'passport_expiry_date' => ['nullable', 'date', 'after:passport_issue_date'],
        ];
    }
}