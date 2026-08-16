<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProviderContact extends Model
{
    use HasUuids;

    protected $fillable = [
        'university_id',
        'campus_id',
        'first_name',
        'last_name',
        'designation',
        'email',
        'phone',
        'whatsapp_number',
        'contact_type',
        'assigned_regions',
        'is_primary',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'assigned_regions' => 'array',
            'is_primary' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }

    public function campus(): BelongsTo
    {
        return $this->belongsTo(UniversityCampus::class);
    }

    public function getFullNameAttribute(): string
    {
        return trim(
            $this->first_name . ' ' . $this->last_name
        );
    }
}