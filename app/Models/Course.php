<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasUuids;

    protected $fillable = [
        'university_id',
        'campus_id',
        'category_id',
        'title',
        'slug',
        'degree_level',
        'duration_months',
        'tuition_fee',
        'currency',
        'ielts_overall',
        'toefl_overall',
        'pte_overall',
        'gpa_requirement',
        'entry_requirements',
        'overview',
        'is_featured',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'duration_months' => 'integer',
            'tuition_fee' => 'decimal:2',
            'ielts_overall' => 'decimal:1',
            'gpa_requirement' => 'decimal:2',
            'entry_requirements' => 'array',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(
            CourseCategory::class,
            'category_id'
        );
    }
    public function campus(): BelongsTo
{
    return $this->belongsTo(
        UniversityCampus::class,
        'campus_id'
    );
}
}