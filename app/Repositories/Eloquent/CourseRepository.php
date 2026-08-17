<?php

namespace App\Repositories\Eloquent;

use App\Models\Course;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseRepository implements CourseRepositoryInterface
{
    public function getAll()
    {
        return Course::query()->select('id', 'title')->where('is_active', true)->orderBy('title')->get();
    }

    public function paginate(int $perPage = 15)
    {
        return Course::select('id', 'title', 'slug', 'university_id', 'campus_id', 'category_id','degree_level', 'duration_months', 'tuition_fee', 'is_active')
            ->with(['university:id,name', 'campus:id,name', 'category:id,name'])
            ->latest()
            ->paginate($perPage);
    }

    public function findById(string $id): Course
    {
        return Course::with(['university', 'campus', 'category'])->findOrFail($id);
    }

    public function create(array $data, Request $request): Course
    {
        return DB::transaction(function () use ($data) {
            $data['slug'] = $this->generateUniqueSlug($data['title']);

            return Course::create($data);
        });
    }

    public function update(Course $course, array $data, Request $request): Course
    {
        return DB::transaction(function () use ($course, $data) {
            if (isset($data['title']) && $course->title !== $data['title']) {
                $data['slug'] = $this->generateUniqueSlug($data['title'], $course->id);
            }

            $course->update($data);

            return $course->fresh(['university', 'campus', 'category']);
        });
    }

    public function delete(Course $course): bool
    {
        return $course->delete();
    }

    private function generateUniqueSlug(string $title, ?string $ignoreId = null): string
    {
        $baseSlug = Str::slug($title);

        if ($baseSlug === '') {
            $baseSlug = 'course';
        }

        $slug = $baseSlug;
        $counter = 2;

        while (Course::where('slug', $slug)->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))->exists()) {
            $slug = "{$baseSlug}-{$counter}";
            $counter++;
        }

        return $slug;
    }
}