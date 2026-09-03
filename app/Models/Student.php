<?php

namespace App\Models;

use App\Models\Profile\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'student_number',

        // Student Information
        'date_of_birth',
        'gender',
        'nationality',
        'place_of_birth',
        'marital_status',
        'phone_number',

        // Passport Information
        'passport_number',
        'passport_issue_date',
        'passport_expiry_date',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
            'passport_issue_date' => 'date',
            'passport_expiry_date' => 'date',
        ];
    }

    /**
     * Student belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Student belongs to many Courses.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function addresses()
{
    return $this->hasMany(Address::class);
}
}