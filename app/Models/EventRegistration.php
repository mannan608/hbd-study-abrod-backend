<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class EventRegistration extends Model
{
    protected $fillable = [
        'event_id',
        'full_name',
        'email',
        'phone',
        'whatsapp',
        'interested_course',
        'message',
        'status',
        'source',
    ];

    protected static function booted()
    {
        static::creating(function ($registration) {
            $registration->id ??= (string) Str::uuid();
        });
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}