<?php namespace App\Http\Requests\HR;

use App\Models\hrm\Employee;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('employee.edit') ?? false;
    }

    public function rules(): array
    {
        $employee = $this->route('employee');

        // Supports route model binding and employee ID.
        $employeeId = $employee instanceof Employee ? $employee->id : $employee;

        $employeeModel = Employee::findOrFail($employeeId);

        $userId = $employeeModel->user_id;

        return [
            // User account
            'first_name' => ['required', 'string', 'max:100'],

            'last_name' => ['required', 'string', 'max:100'],

            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($userId)],

            'phone' => ['nullable', 'string', 'max:32'],

            'password' => ['nullable', 'string', 'min:8'],

            // Personal information
            'date_of_birth' => ['nullable', 'date'],

            'gender' => ['nullable', 'string', 'max:24'],

            'religion' => ['nullable', 'string', 'max:64'],

            'blood_group' => ['nullable', 'string', 'max:8'],

            'national_id' => ['nullable', 'string', 'max:255'],

            'address' => ['nullable', 'string'],

            // Professional information
            'bio' => ['nullable', 'string'],

            'education' => ['nullable', 'string'],

            'institution' => ['nullable', 'string', 'max:200'],

            'experience_years' => ['nullable', 'integer', 'min:0', 'max:65535'],

            // Languages
            'languages' => ['nullable', 'array'],

            'languages.*' => ['nullable', 'string', 'max:100'],

            // Expertise
            'expertise' => ['nullable', 'array'],

            'expertise.*' => ['nullable', 'string', 'max:150'],

            // Location
            'country_id' => ['nullable', 'uuid', 'exists:countries,id'],

            'city_id' => ['nullable', 'uuid', Rule::exists('cities', 'id')->where('country_id', $this->input('country_id'))],

            // Emergency contact
            'emergency_contact_name' => ['nullable', 'string', 'max:150'],

            'emergency_contact_phone' => ['nullable', 'string', 'max:32'],

            // Status
            'is_verified' => ['sometimes', 'boolean'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'languages' => $this->normalizeArrayField($this->input('languages')),

            'expertise' => $this->normalizeArrayField($this->input('expertise')),
        ]);
    }

    /**
     * Normalize string or array input into a trimmed array.
     */
    protected function normalizeArrayField(mixed $value): array
    {
        if (is_string($value)) {
            $value = explode(',', $value);
        }

        if (!is_array($value)) {
            return [];
        }

        return array_values(array_filter(array_map(static fn($item) => is_string($item) ? trim($item) : $item, $value), static fn($item) => filled($item)));
    }
}