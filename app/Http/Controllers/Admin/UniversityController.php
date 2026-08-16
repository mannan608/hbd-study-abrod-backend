<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\University;
use App\Repositories\Interfaces\UniversityRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UniversityController extends Controller
{
    public function __construct(private readonly UniversityRepositoryInterface $universities) {}

    public function index(Request $request): View
    {
        abort_unless($request->user()->can('university.list'), 403);

        $universities = $this->universities->paginate($request->all());
        // return $universities;

        return view('backend.pages.universities.index', [
            'universities' => $universities,

            'countries' => Country::query()
                ->orderBy('name')
                ->get(['id', 'name']),

            'cities' => City::query()
                ->orderBy('name')
                ->get(['id', 'name', 'country_id']),

            'title' => 'Universities',
        ]);
    }

    public function create(Request $request): View
    {
        abort_unless($request->user()->can('university.create'), 403);

        return view('backend.pages.universities.create', [
            'university' => null,

            'countries' => Country::query()
                ->orderBy('name')
                ->get(['id', 'name']),

            'cities' => City::query()
                ->orderBy('name')
                ->get(['id', 'name', 'country_id']),

            'title' => 'Create University',
        ]);
    }

    public function store(StoreUniversityRequest $request): RedirectResponse
    {
        $this->universities->create($request->validated(), $request);

        return redirect()
            ->route('role.universities.index', [
                'role' => $request->route('role'),
            ])
            ->with('success', 'University created successfully.');
    }

    public function show(Request $request, string $role, University $university): View
    {
        abort_unless($request->user()->can('university.view'), 403);

        $university->load(['country', 'city']);

        return view('backend.pages.universities.show', [
            'university' => $university,
            'title' => 'University Details',
        ]);
    }

    public function edit(Request $request, string $role, University $university): View
    {
        abort_unless($request->user()->can('university.edit'), 403);

        return view('backend.pages.universities.edit', [
            'university' => $university,

            'countries' => Country::query()
                ->orderBy('name')
                ->get(['id', 'name']),

            'cities' => City::query()
                ->orderBy('name')
                ->get(['id', 'name', 'country_id']),

            'title' => 'Edit University',
        ]);
    }

    public function update(UpdateUniversityRequest $request, string $role, University $university): RedirectResponse
    {
        /*
         * Only fields present in the request and passing
         * validation are returned.
         */
        $this->universities->update($university, $request->validated(), $request);

        return redirect()
            ->route('role.universities.index', [
                'role' => $role,
            ])
            ->with('success', 'University updated successfully.');
    }

    public function destroy(Request $request, string $role, University $university): RedirectResponse
    {
        abort_unless($request->user()->can('university.delete'), 403);

        $this->universities->delete($university);

        return redirect()
            ->route('role.universities.index', [
                'role' => $role,
            ])
            ->with('success', 'University deleted successfully.');
    }
}
