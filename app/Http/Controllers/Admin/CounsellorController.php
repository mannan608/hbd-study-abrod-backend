<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCounsellorRequest;
use App\Http\Requests\UpdateCounsellorRequest;
use App\Models\Counsellor;
use App\Models\User;
use App\Models\Country;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CounsellorController extends Controller
{
    public function index(Request $request)
    {
        $request->user()->can('counsellors.list') || abort(403);
        
        $counsellors = Counsellor::with(['user', 'country', 'city'])
            ->when($request->search, fn($q) => $q->where('slug', 'like', "%{$request->search}%"))
            ->latest()
            ->paginate(10);

        return view('backend.pages.counsellors.index', compact('counsellors'));
    }

    public function create(Request $request)
    {
        $request->user()->can('counsellors.create') || abort(403);

        $users = User::whereDoesntHave('counsellor')->get(['id', 'name', 'email']);
        $countries = Country::all();
        $cities = City::all();

        return view('backend.pages.counsellors.create', compact('users', 'countries', 'cities'));
    }

    public function store(StoreCounsellorRequest $request)
    {
        $validated = $request->validated();

        DB::beginTransaction();
        try {
            // Handle User Creation/Linking
            $userId = $validated['user_id'] ?? null;
            
            if ($request->boolean('create_user')) {
                $user = User::create([
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'password' => Hash::make($validated['password']),
                    'status' => 'active',
                ]);
                $userId = $user->id;
            }

            // Handle Photo Upload
            $photoUrl = null;
            if ($request->hasFile('photo')) {
                $photoUrl = $request->file('photo')->store('counsellors', 'public');
            }

            // Generate Slug if not provided
            $slug = $validated['slug'] ?? Str::slug($validated['name'] ?? 'counsellor-' . Str::random(6));

            Counsellor::create([
                'user_id' => $userId,
                'slug' => $slug,
                'photo_url' => $photoUrl,
                'designation' => $validated['designation'] ?? null,
                'bio' => $validated['bio'] ?? null,
                'education' => $validated['education'] ?? null,
                'institution' => $validated['institution'] ?? null,
                'city_id' => $validated['city_id'] ?? null,
                'country_id' => $validated['country_id'] ?? null,
                'languages' => $validated['languages'],
                'expertise' => $validated['expertise'] ?? null,
                'experience_years' => $validated['experience_years'] ?? 0,
                'is_featured' => $request->boolean('is_featured'),
                'is_verified' => $request->boolean('is_verified'),
                'is_active' => $request->boolean('is_active'),
                'sort_order' => $validated['sort_order'] ?? 0,
            ]);

            DB::commit();

            return redirect()->route('backend.pages.counsellors.index')
                ->with('success', 'Counsellor created successfully.');
                
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error creating counsellor: ' . $e->getMessage());
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

        $users = User::whereDoesntHave('counsellor')
            ->orWhere('id', $counsellor->user_id)
            ->get(['id', 'name', 'email']);
            
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