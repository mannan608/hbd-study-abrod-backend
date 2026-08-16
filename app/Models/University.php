<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class University extends Model
{
    use HasFactory;

    protected $table = 'universities';

    protected $fillable = [
        'country_id',
        'city_id',
        'name',
        'slug',
        'short_name',
        'logo',
        'banner',
        'email',
        'phone',
        'website',
        'state',
        'address',
        'global_ranking',
        'national_ranking',
        'accreditation',
        'description',
        'overview',
        'campus_facilities',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'campus_facilities' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'global_ranking' => 'integer',
        'national_ranking' => 'integer',
        'sort_order' => 'integer',
    ];

    /**
     * University belongs to a country.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * University belongs to a city.
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}