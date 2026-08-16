<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UniversityCampus extends Model
{
    use HasUuids;

    protected $fillable = [
        'university_id',
        'city_id',
        'name',
        'slug',
        'email',
        'phone',
        'address',
        'description',
        'is_main_campus',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_main_campus' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}