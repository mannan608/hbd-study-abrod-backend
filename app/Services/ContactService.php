<?php

namespace App\Services;

use App\Models\ContactPoint;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class ContactService
{
    /**
     * Normalize a phone number.
     *
     * Examples:
     * 01712345678       => 8801712345678
     * +8801712345678   => 8801712345678
     * 8801712345678    => 8801712345678
     */
    public function normalizePhone(?string $phone): ?string
    {
        if (blank($phone)) {
            return null;
        }

        // Keep digits only
        $phone = preg_replace('/[^0-9]/', '', $phone);

        if (blank($phone)) {
            return null;
        }

        // 01712345678 -> 8801712345678
        if (str_starts_with($phone, '0')) {
            return '88' . $phone;
        }

        // Already 880...
        if (str_starts_with($phone, '880')) {
            return $phone;
        }

        return $phone;
    }

    /**
     * Normalize email.
     */
    public function normalizeEmail(?string $email): ?string
    {
        if (blank($email)) {
            return null;
        }

        return mb_strtolower(trim($email));
    }

    /**
     * Validate all contacts before registration.
     */
    public function validateRegistrationContacts(
        string $phone,
        string $email,
        array $altPhones = [],
        array $altEmails = []
    ): array {
        /*
        |--------------------------------------------------------------------------
        | Normalize primary contacts
        |--------------------------------------------------------------------------
        */

        $primaryPhone = $this->normalizePhone($phone);
        $primaryEmail = $this->normalizeEmail($email);

        /*
        |--------------------------------------------------------------------------
        | Prepare alternative phones
        |--------------------------------------------------------------------------
        */

        $normalizedAltPhones = [];

        foreach ($altPhones as $altPhone) {
            if (blank($altPhone['value'] ?? null)) {
                continue;
            }

            $normalizedAltPhones[] = [
                'value' => trim($altPhone['value']),
                'normalized_value' => $this->normalizePhone(
                    $altPhone['value']
                ),
                'is_whatsapp' => (bool) ($altPhone['is_whatsapp'] ?? false),
            ];
        }

        /*
        |--------------------------------------------------------------------------
        | Prepare alternative emails
        |--------------------------------------------------------------------------
        */

        $normalizedAltEmails = [];

        foreach ($altEmails as $altEmail) {
            if (blank($altEmail)) {
                continue;
            }

            $normalizedAltEmails[] = [
                'value' => trim($altEmail),
                'normalized_value' => $this->normalizeEmail($altEmail),
            ];
        }

        /*
        |--------------------------------------------------------------------------
        | All phones
        |--------------------------------------------------------------------------
        */

        $allPhones = collect([
            $primaryPhone,
            ...collect($normalizedAltPhones)
                ->pluck('normalized_value')
                ->all(),
        ])->filter()->values();

        /*
        |--------------------------------------------------------------------------
        | Duplicate phone inside this registration
        |--------------------------------------------------------------------------
        */

        if ($allPhones->duplicates()->isNotEmpty()) {
            throw ValidationException::withMessages([
                'phone' => 'The same phone number cannot be used more than once.',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Check phones against users table
        |--------------------------------------------------------------------------
        */

        if (
            User::query()
                ->whereIn('phone', $allPhones)
                ->exists()
        ) {
            throw ValidationException::withMessages([
                'phone' => 'One or more phone numbers are already registered.',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Check phones against contact_points
        |--------------------------------------------------------------------------
        */

        if (
            ContactPoint::query()
                ->where('type', 'phone')
                ->whereIn('normalized_value', $allPhones)
                ->exists()
        ) {
            throw ValidationException::withMessages([
                'phone' => 'One or more phone numbers are already registered.',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | All emails
        |--------------------------------------------------------------------------
        */

        $allEmails = collect([
            $primaryEmail,
            ...collect($normalizedAltEmails)
                ->pluck('normalized_value')
                ->all(),
        ])->filter()->values();

        /*
        |--------------------------------------------------------------------------
        | Duplicate email inside this registration
        |--------------------------------------------------------------------------
        */

        if ($allEmails->duplicates()->isNotEmpty()) {
            throw ValidationException::withMessages([
                'email' => 'The same email address cannot be used more than once.',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Check emails against users table
        |--------------------------------------------------------------------------
        */

        if (
            User::query()
                ->whereIn('email', $allEmails)
                ->exists()
        ) {
            throw ValidationException::withMessages([
                'email' => 'One or more email addresses are already registered.',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Check emails against contact_points
        |--------------------------------------------------------------------------
        */

        if (
            ContactPoint::query()
                ->where('type', 'email')
                ->whereIn('normalized_value', $allEmails)
                ->exists()
        ) {
            throw ValidationException::withMessages([
                'email' => 'One or more email addresses are already registered.',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Return normalized contacts
        |--------------------------------------------------------------------------
        */

        return [
            'primary_phone' => $primaryPhone,
            'primary_email' => $primaryEmail,

            'alt_phones' => $normalizedAltPhones,
            'alt_emails' => $normalizedAltEmails,
        ];
    }

    /**
     * Save alternative contacts.
     */
    public function saveAlternativeContacts(
        int $userId,
        array $altPhones = [],
        array $altEmails = []
    ): void {
        /*
        |--------------------------------------------------------------------------
        | Alternative Phones
        |--------------------------------------------------------------------------
        */

        foreach ($altPhones as $phone) {
            ContactPoint::create([
                'user_id' => $userId,
                'type' => 'phone',
                'value' => $phone['value'],
                'normalized_value' => $phone['normalized_value'],
                'is_whatsapp' => $phone['is_whatsapp'],
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Alternative Emails
        |--------------------------------------------------------------------------
        */

        foreach ($altEmails as $email) {
            ContactPoint::create([
                'user_id' => $userId,
                'type' => 'email',
                'value' => $email['value'],
                'normalized_value' => $email['normalized_value'],
                'is_whatsapp' => false,
            ]);
        }
    }
}