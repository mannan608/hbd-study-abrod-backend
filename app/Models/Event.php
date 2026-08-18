<?php

namespace App\Models;

use App\SEO\Models\SeoMeta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Event extends Model
{
    protected $fillable = [
        // Basic information
        'title',
        'slug',
        'event_type',
        'short_description',
        'description',

        // Media
        'banner',
        'gallery_images',

        // Location
        'location_name',
        'address',

        // Schedule
        'start_datetime',
        'end_datetime',
        'schedules',

        // Online event
        'is_online',
        'meeting_link',

        // Registration
        'max_seats',
        'registration_deadline',
        'registration_link',

        // Organizer / contact
        'organizer',
        'contact_email',
        'contact_phone',

        // Event content
        'providers',
        'tags',
        'benefits',
        'services_offered',
        'faqs',

        // Google Maps
        'google_map_link',

        // Status
        'status',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        // JSON fields
        'schedules' => 'array',
        'providers' => 'array',
        'gallery_images' => 'array',
        'tags' => 'array',
        'benefits' => 'array',
        'services_offered' => 'array',
        'faqs' => 'array',

        // Boolean fields
        'is_online' => 'boolean',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',

        // Date/time fields
        'start_datetime' => 'datetime',
        'end_datetime' => 'datetime',
        'registration_deadline' => 'datetime',

        // Integer
        'max_seats' => 'integer',
    ];

    /**
     * Use slug for route model binding.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}