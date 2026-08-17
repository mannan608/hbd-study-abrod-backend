<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseIntake;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CourseIntakeController extends Controller
{
    /**
     * Display a listing of course intakes.
     */
    public function index(): View
    {
        $intakes = CourseIntake::with('course')->latest()->paginate(15);

        return view('backend.pages.course-intakes.index', [
            'intakes' => $intakes,
        ]);
    }

    /**
     * Show the form for creating a new intake.
     */
    public function create(): View
    {
        $courses = Course::query()->orderBy('title')->get();

        // dd($courses);

        return view('backend.pages.course-intakes.create', [
            'intake' => null,
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created intake.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'course_id' => ['required', 'integer', 'exists:courses,id'],

            'intake_month' => ['required', 'string', 'max:20'],

            'intake_year' => ['required', 'integer', 'min:2000', 'max:2100'],

            'application_deadline' => ['required', 'date'],

            'start_date' => ['nullable', 'date', 'after_or_equal:application_deadline'],

            'status' => ['required', Rule::in(['open', 'closed', 'upcoming'])],
        ]);

        // Prevent duplicate intake
        $exists = CourseIntake::query()->where('course_id', $validated['course_id'])->where('intake_month', $validated['intake_month'])->where('intake_year', $validated['intake_year'])->exists();

        if ($exists) {
            return back()
                ->withInput()
                ->withErrors([
                    'intake_month' => 'This intake already exists for the selected course.',
                ]);
        }

        CourseIntake::create($validated);

        return redirect()->route('backend.pages.course-intakes.index')->with('success', 'Course intake created successfully.');
    }

    /**
     * Show the form for editing the specified intake.
     */
    public function edit(CourseIntake $courseIntake): View
    {
        $courses = Course::query()->orderBy('name')->get();

        return view('backend.pages.course-intakes.edit', [
            'intake' => $courseIntake,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified intake.
     */
    public function update(Request $request, CourseIntake $courseIntake): RedirectResponse
    {
        $validated = $request->validate([
            'course_id' => ['required', 'integer', 'exists:courses,id'],

            'intake_month' => ['required', 'string', 'max:20'],

            'intake_year' => ['required', 'integer', 'min:2000', 'max:2100'],

            'application_deadline' => ['required', 'date'],

            'start_date' => ['nullable', 'date', 'after_or_equal:application_deadline'],

            'status' => ['required', Rule::in(['open', 'closed', 'upcoming'])],
        ]);

        // Prevent duplicate intake except current record
        $exists = CourseIntake::query()->where('course_id', $validated['course_id'])->where('intake_month', $validated['intake_month'])->where('intake_year', $validated['intake_year'])->where('id', '!=', $courseIntake->id)->exists();

        if ($exists) {
            return back()
                ->withInput()
                ->withErrors([
                    'intake_month' => 'This intake already exists for the selected course.',
                ]);
        }

        $courseIntake->update($validated);

        return redirect()->route('backend.pages.course-intakes.index')->with('success', 'Course intake updated successfully.');
    }

    /**
     * Remove the specified intake.
     */
    public function destroy(CourseIntake $courseIntake): RedirectResponse
    {
        $courseIntake->delete();

        return redirect()->route('backend.pages.course-intakes.index')->with('success', 'Course intake deleted successfully.');
    }
}