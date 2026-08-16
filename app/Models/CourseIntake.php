<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseIntake extends Model
{
    use HasUuids;

    protected $fillable = [
        'course_id',
        'intake_month',
        'intake_year',
        'application_deadline',
        'start_date',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'intake_year' => 'integer',
            'application_deadline' => 'date',
            'start_date' => 'date',
        ];
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}