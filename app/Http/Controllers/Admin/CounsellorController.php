<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCounsellorRequest;
use App\Http\Requests\UpdateCounsellorRequest;
use App\Models\Counsellor;
use App\Models\User;
use App\Models\Country;
use App\Models\City;
use App\Traits\HandlesFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CounsellorController extends Controller
{
    use HandlesFiles;
    public function index(Request $request)
    {
        $request->user()->can('counsellors.list') || abort(403);

        $counsellors = Counsellor::with(['user', 'country', 'city'])
            ->when($request->search, fn($q) => $q->where('slug', 'like', "%{$request->search}%"))
            ->latest()
            ->paginate(10);

        return view('backend.pages.counsellors.index', compact('counsellors'));
    }

    public function create(Request $request): View
    {
        $request->user()->can('counsellors.create') || abort(403);

        $countries = Country::all();
        $cities = City::all();

        return view('backend.pages.counsellors.create', [
            'counsellor' => null,
            'countries' => $countries,
            'cities' => $cities,
            'title' => 'Create Counsellor',
        ]);
    }


    public function store(StoreCounsellorRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        DB::beginTransaction();

        try {
            /*
            |--------------------------------------------------------------------------
            | Create User
            |--------------------------------------------------------------------------
            */
            $user = User::create([
                'name'     => $validated['name'],
                'email'    => $validated['email'],
                'phone'    => $validated['phone'] ?? null,
                'password' => Hash::make($validated['password']),
                'status'   => 'active',
            ]);

            /*
            |--------------------------------------------------------------------------
            | Upload Counsellor Photo
            |--------------------------------------------------------------------------
            */
            $photoUrl = null;

            if ($request->hasFile('photo')) {
                $photoUrl = $this->uploadFile(
                    $request->file('photo'),
                    'counsellors'
                );
            }

            /*
            |--------------------------------------------------------------------------
            | Generate Slug
            |--------------------------------------------------------------------------
            */
            $slug = $validated['slug'] ?? Str::slug($validated['name']);

            /*
            |--------------------------------------------------------------------------
            | Create Counsellor
            |--------------------------------------------------------------------------
            */
            Counsellor::create([
                'user_id'          => $user->id,
                'slug'             => $slug,
                'photo_url'        => $photoUrl,

                'designation'      => $validated['designation'] ?? null,
                'bio'              => $validated['bio'] ?? null,
                'education'        => $validated['education'] ?? null,
                'institution'      => $validated['institution'] ?? null,

                'city_id'          => $validated['city_id'] ?? null,
                'country_id'       => $validated['country_id'] ?? null,

                'languages'        => $validated['languages'] ?? null,
                'expertise'        => $validated['expertise'] ?? null,

                'experience_years' => $validated['experience_years'] ?? 0,

                'is_featured'      => $request->boolean('is_featured'),
                'is_verified'      => $request->boolean('is_verified'),
                'is_active'       => $request->boolean('is_active'),

                'sort_order'       => $validated['sort_order'] ?? 0,
            ]);

            DB::commit();

            return redirect()
                ->route('backend.pages.counsellors.index')
                ->with('success', 'Counsellor created successfully.');
        } catch (\Throwable $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', 'Error creating counsellor: ' . $e->getMessage());
        }
    }

    public function show(Counsellor $counsellor)
    {
        $counsellor->load(['user', 'country', 'city']);
        return view('backend.pages.counsellors.show', compact('counsellor'));
    }

    public function edit(Counsellor $counsellor, Request $request)
    {
        $request->user()->can('counsellors.edit') || abort(403);

        $countries = Country::all();
        $cities = City::all();

        return view('backend.pages.counsellors.edit', compact('counsellor', 'users', 'countries', 'cities'));
    }

    public function update(UpdateCounsellorRequest $request, Counsellor $counsellor)
    {
        $validated = $request->validated();

        DB::beginTransaction();
        try {
            // Handle Photo Upload
            if ($request->hasFile('photo')) {
                // Delete old photo
                if ($counsellor->photo_url) {
                    Storage::disk('public')->delete($counsellor->photo_url);
                }
                $validated['photo_url'] = $request->file('photo')->store('counsellors', 'public');
            }

            // Convert booleans properly
            $validated['is_featured'] = $request->boolean('is_featured');
            $validated['is_verified'] = $request->boolean('is_verified');
            $validated['is_active'] = $request->boolean('is_active');

            $counsellor->update($validated);

            DB::commit();

            return redirect()->route('backend.pages.counsellors.index')
                ->with('success', 'Counsellor updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error updating counsellor: ' . $e->getMessage());
        }
    }

    public function destroy(Counsellor $counsellor, Request $request)
    {
        $request->user()->can('counsellors.delete') || abort(403);
        // Delete photo
        if ($counsellor->photo_url) {
            Storage::disk('public')->delete($counsellor->photo_url);
        }

        $counsellor->delete();

        return redirect()->route('backend.pages.counsellors.index')
            ->with('success', 'Counsellor deleted successfully.');
    }
}
