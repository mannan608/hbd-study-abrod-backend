<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\UpdateAccountSettingsRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Student;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Traits\HandlesFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ProfileController extends Controller
{
    use HandlesFiles;
    public function __construct(
        private readonly UserRepositoryInterface $users,
    ) {}

    public function profile(Request $request)
    {
        // auth user profile 

        $user = $request->user();

        return view('student.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name' => ['nullable', 'string', 'max:191'],
            'phone' => ['nullable', 'string', 'max:191'],

            'avatar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],

            'current_password' => [
                'required_with:password'
            ],

            'password' => [
                'nullable',
                'min:8',
                'confirmed'
            ],
        ]);

        $data = [];

        // Name
        if ($request->filled('name')) {
            $data['name'] = $request->name;
        }

        // Phone
        if ($request->filled('phone')) {
            $data['phone'] = $request->phone;
        }

        // Avatar
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $this->replaceFile(
                $request->file('avatar'),
                $user->avatar,
                'users'
            );
        }

        // Password
        if ($request->filled('password')) {

            if (! Hash::check(
                $request->current_password,
                $user->password
            )) {
                return back()->withErrors([
                    'current_password' => 'Current password is incorrect.'
                ]);
            }

            $data['password'] = bcrypt($request->password);
        }

        if (! empty($data)) {
            $user->update($data);
        }

        return back()->with(
            'success',
            'Profile updated successfully.'
        );
    }

public function accountSettings(Request $request)
    {
        $user = $request->user();

        $student = $user->student;

        abort_if(!$student, 404, 'Student profile not found.');

        $countries = Country::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get(['id', 'name']);

        $cities = City::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get([
                'id',
                'name',
                'country_id',
            ]);

        $currentAddress = $student->addresses()
            ->where('type', 'current')
            ->first();

        $permanentAddress = $student->addresses()
            ->where('type', 'permanent')
            ->first();

        $sameAddress = $currentAddress
            && $permanentAddress
            && $currentAddress->address === $permanentAddress->address
            && $currentAddress->city_id === $permanentAddress->city_id
            && $currentAddress->country_id === $permanentAddress->country_id;

        return view('student.profile.settings', compact(
            'student',
            'countries',
            'cities',
            'currentAddress',
            'permanentAddress',
            'sameAddress'
        ));
    }


    public function updateAccountSettings(
        UpdateAccountSettingsRequest $request
    ): RedirectResponse {

        $user = $request->user();

        $student = $user->student;

        abort_if(!$student, 404, 'Student profile not found.');

        $validated = $request->validated();

        // Derive same_address from validated data so the closure
        // does not depend on the $request object directly.
        $sameAddress = (bool) ($validated['same_address'] ?? false);

        DB::transaction(function () use ($student, $validated, $sameAddress) {

            /*
            |--------------------------------------------------------------------------
            | Student Information
            |--------------------------------------------------------------------------
            */

            $student->update([
                'date_of_birth'       => $validated['date_of_birth']       ?? null,
                'gender'              => $validated['gender']              ?? null,
                'nationality'         => $validated['nationality']         ?? null,
                'place_of_birth'      => $validated['place_of_birth']      ?? null,
                'marital_status'      => $validated['marital_status']      ?? null,
                'passport_number'     => $validated['passport_number']     ?? null,
                'passport_issue_date' => $validated['passport_issue_date'] ?? null,
                'passport_expiry_date'=> $validated['passport_expiry_date']?? null,
            ]);

            /*
            |--------------------------------------------------------------------------
            | Current Address
            |--------------------------------------------------------------------------
            */

            $student->addresses()->updateOrCreate(
                ['type' => 'current'],
                [
                    'address'    => $validated['current_address']    ?? null,
                    'city_id'    => $validated['current_city_id']    ?? null,
                    'country_id' => $validated['current_country_id'] ?? null,
                ]
            );

            /*
            |--------------------------------------------------------------------------
            | Permanent Address
            | When "same as current" is checked, mirror the current address data.
            | Otherwise save the dedicated permanent address fields.
            |--------------------------------------------------------------------------
            */

            $permanentData = $sameAddress
                ? [
                    'address'    => $validated['current_address']    ?? null,
                    'city_id'    => $validated['current_city_id']    ?? null,
                    'country_id' => $validated['current_country_id'] ?? null,
                ]
                : [
                    'address'    => $validated['permanent_address']    ?? null,
                    'city_id'    => $validated['permanent_city_id']    ?? null,
                    'country_id' => $validated['permanent_country_id'] ?? null,
                ];

            $student->addresses()->updateOrCreate(
                ['type' => 'permanent'],
                $permanentData
            );
        });

        return back()->with('success', 'Account settings updated successfully.');
    }

}
