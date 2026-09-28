<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Provider extends Model
{
    protected $table = 'providers';

    protected $fillable = [
        'user_id',
        'short_name',
        'phone',
        'country',
        'state',
        'city',
        'address',
    ];

    /**
     * Provider belongs to a user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}