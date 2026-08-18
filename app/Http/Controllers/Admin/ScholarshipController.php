<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreScholarshipRequest;
use App\Http\Requests\UpdateScholarshipRequest;
use App\Models\Course;
use App\Models\Scholarship;
use App\Models\University;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display scholarships.
     */
    public function index(Request $request)
    {
        $request()->user()->can('scholarship.view') || abort(403);

        $scholarships = Scholarship::select('id', 'university_id', 'course_id', 'title', 'amount_description', 'coverage_type', 'eligibility_criteria', 'deadline', 'is_active')
        ->with(['university:id,name', 'course:id,title'])
            ->latest()
            ->paginate(15);

        // return    $scholarships;

        return view('backend.pages.scholarships.index', [
            'scholarships' => $scholarships,
        ]);
    }

    /**
     * Show create form.
     */
    public function create(Request $request)
    {
        $request()->user()->can('scholarship.create') || abort(403);

        return view('backend.pages.scholarships.create', [
            'scholarship' => null,
            'universities' => University::query()->orderBy('name')->get(),
            'courses' => Course::query()->orderBy('title')->get(),
        ]);
    }

    /**
     * Store scholarship.
     */
  public function store(StoreScholarshipRequest $request)
{
    $data = $request->validated();

    $data['is_active'] = $request->boolean('is_active');

    Scholarship::create($data);

    return redirect()
        ->route('backend.pages.scholarships.index')
        ->with('success', 'Scholarship created successfully.');
}

    /**
     * Show edit form.
     */
    public function edit(string $id, Request $request)
    {
        $request()->user()->can('scholarship.edit') || abort(403);

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
    public function update(UpdateScholarshipRequest $request, string $id)
{
    $scholarship = Scholarship::findOrFail($id);

    $scholarship->update($request->validated());

    return redirect()
        ->route('backend.pages.scholarships.index')
        ->with('success', 'Scholarship updated successfully.');
}

    /**
     * Delete scholarship.
     */
    public function destroy(string $id, Request $request)
    {
        $request()->user()->can('scholarship.delete') || abort(403);

        $scholarship = Scholarship::findOrFail($id);

        $scholarship->delete();

        return redirect()->route('backend.pages.scholarships.index')->with('success', 'Scholarship deleted successfully.');
    }
}
