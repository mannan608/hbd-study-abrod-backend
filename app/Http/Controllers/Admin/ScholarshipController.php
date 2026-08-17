<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Scholarship;
use App\Models\University;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display scholarships.
     */
    public function index()
    {
        // request()->user()->can('scholarship.view') || abort(403);

        $scholarships = Scholarship::with(['university', 'course'])
            ->latest()
            ->paginate(15);

        return view('backend.pages.scholarships.index', [
            'scholarships' => $scholarships,
        ]);
    }

    /**
     * Show create form.
     */
    public function create()
    {
        // request()->user()->can('scholarship.create') || abort(403);

        return view('backend.pages.scholarships.create', [
            'scholarship' => null,
            'universities' => University::query()->orderBy('name')->get(),
            'courses' => Course::query()->orderBy('title')->get(),
        ]);
    }

    /**
     * Store scholarship.
     */
    public function store(Request $request)
    {
        // $request->user()->can('scholarship.create') || abort(403);

        $validated = $request->validate([
            'university_id' => ['required', 'uuid', 'exists:universities,id'],

            'course_id' => ['nullable', 'uuid', 'exists:courses,id'],

            'title' => ['required', 'string', 'max:255'],

            'amount_description' => ['nullable', 'string', 'max:255'],

            'coverage_type' => ['nullable', 'string', 'max:50'],

            'eligibility_criteria' => ['nullable', 'string'],

            'deadline' => ['nullable', 'date'],

            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        Scholarship::create($validated);

        return redirect()->route('backend.pages.scholarships.index')->with('success', 'Scholarship created successfully.');
    }

    /**
     * Show edit form.
     */
    public function edit(string $id)
    {
        // request()->user()->can('scholarship.edit') || abort(403);

        $scholarship = Scholarship::with(['university', 'course'])->findOrFail($id);

        return view('backend.pages.scholarships.edit', [
            'scholarship' => $scholarship,
            'universities' => University::query()->orderBy('name')->get(),
            'courses' => Course::query()->orderBy('name')->get(),
        ]);
    }

    /**
     * Update scholarship.
     */
    public function update(Request $request, string $id)
    {
        // $request->user()->can('scholarship.edit') || abort(403);

        $validated = $request->validate([
            'university_id' => ['required', 'uuid', 'exists:universities,id'],

            'course_id' => ['nullable', 'uuid', 'exists:courses,id'],

            'title' => ['required', 'string', 'max:255'],

            'amount_description' => ['nullable', 'string', 'max:255'],

            'coverage_type' => ['nullable', 'string', 'max:50'],

            'eligibility_criteria' => ['nullable', 'string'],

            'deadline' => ['nullable', 'date'],

            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        $scholarship = Scholarship::findOrFail($id);

        $scholarship->update($validated);

        return redirect()->route('backend.pages.scholarships.index')->with('success', 'Scholarship updated successfully.');
    }

    /**
     * Delete scholarship.
     */
    public function destroy(string $id)
    {
        request()->user()->can('scholarship.delete') || abort(403);

        $scholarship = Scholarship::findOrFail($id);

        $scholarship->delete();

        return redirect()->route('backend.pages.scholarships.index')->with('success', 'Scholarship deleted successfully.');
    }
}