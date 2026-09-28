<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'email', 'max:255', 'unique:users,email'],

            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'short_name' => ['nullable', 'string', 'max:255'],

            'phone' => ['nullable', 'string', 'max:50'],

            'country' => ['nullable', 'string', 'max:100'],

            'state' => ['nullable', 'string', 'max:100'],

            'city' => ['nullable', 'string', 'max:100'],

            'address' => ['nullable', 'string'],
        ];
    }
}
