<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Http\Requests\HR\StoreEmployeeRequest;
use App\Http\Requests\HR\UpdateEmployeeRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\hrm\Branch;
use App\Models\hrm\Department;
use App\Models\hrm\Designation;
use App\Models\hrm\Employee;
use App\Models\hrm\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $request->user()->can('employee.list') || abort(403);

        $employees = Employee::with(['user', 'country', 'city'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->input('search');

                $query->where(function ($q) use ($search) {
                    $q->where('first_name', 'like', "%{$search}%")
                        ->orWhere('last_name', 'like', "%{$search}%")
                        ->orWhereHas('user', function ($userQuery) use ($search) {
                            $userQuery->where('email', 'like', "%{$search}%");
                        });
                });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('backend.pages.HR.employees.index', compact('employees'));
    }

    // public function create(Request $request)
    // {
    //     $request->user()->can('employee.create') || abort(403);

    //     $branches = Branch::query()->orderBy('name')->get(['id', 'name']);

    //     $departments = Department::query()->orderBy('name')->get(['id', 'name']);

    //     $designations = Designation::query()->orderBy('name')->get(['id', 'name']);

    //     $teams = Team::query()->orderBy('name')->get(['id', 'name']);
    //     $countries = Country::orderBy('name')->get();
    //     $cities = City::orderBy('name')->get();

    //     return view('backend.pages.HR.employees.create', [
    //         'employee' => null,
    //         'branches' => $branches,
    //         'departments' => $departments,
    //         'designations' => $designations,
    //         'teams' => $teams,
    //         'countries' => $countries,
    //         'cities' => $cities,
    //         'title' => 'Create Employee',
    //     ]);
    // }


    public function create(Request $request)
    {
        $request->user()->can('employee.create') || abort(403);

        // Branches: Main branch first
        $branches = Branch::query() ->orderByDesc('is_head_office') ->orderBy('name') ->get([ 'id', 'name','code','is_active',]);

        // IMPORTANT: branch_id is required for Alpine filtering
        $departments = Department::query() ->orderBy('name')->get(['id','name','branch_id', ]);

        // IMPORTANT: department_id is required for Alpine filtering
        $teams = Team::query() ->orderBy('name')->get([ 'id', 'name','department_id',]);

        $designations = Designation::query()->orderBy('name')->get(['id', 'name',]);

        $countries = Country::query()->orderBy('name')->get();

        $cities = City::query()->orderBy('name')->get();

        return view('backend.pages.HR.employees.create', [
            'employee' => null,
            'branches' => $branches,
            'departments' => $departments,
            'teams' => $teams,
            'designations' => $designations,
            'countries' => $countries,
            'cities' => $cities,
            'title' => 'Create Employee',
        ]);
    }


    /**
     * Store a new employee.
     */
    public function store(StoreEmployeeRequest $request)
    {
        // Authorization and validation are handled by StoreEmployeeRequest.
        $validated = $request->validated();

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => trim($validated['first_name'] . ' ' . $validated['last_name']),
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'password' => Hash::make($validated['password']),
                'status' => 'active',
                'primary_role_id' => 3,
            ]);

            $employeeData = $this->prepareEmployeeData($validated, $request);

            $employeeData['user_id'] = $user->id;

            Employee::create($employeeData);

            DB::commit();

            return redirect()
                ->route('role.employees.index', [
                    'role' => $request->route('role'),
                ])
                ->with('success', 'Employee created successfully.');
        } catch (\Throwable $e) {
            DB::rollBack();

            report($e);

            return back()->withInput()->with('error', 'Unable to create employee. Please try again.');
        }
    }

    public function edit(string $role, string $employee, Request $request)
    {
        $request->user()->can('employee.edit') || abort(403);

        $employee = Employee::with('user')->findOrFail($employee);
        $branches = Branch::query()->orderBy('name')->get(['id', 'name']);

        $departments = Department::query()->orderBy('name')->get(['id', 'name']);

        $designations = Designation::query()->orderBy('name')->get(['id', 'name']);

        $teams = Team::query()->orderBy('name')->get(['id', 'name']);
        $countries = Country::orderBy('name')->get();
        $cities = City::orderBy('name')->get();

        return view('backend.pages.HR.employees.edit', [
            'employee' => $employee,
            'branches' => $branches,
            'departments' => $departments,
            'designations' => $designations,
            'teams' => $teams,
            'countries' => $countries,
            'cities' => $cities,
            'title' => 'Edit Employee',
        ]);
    }

    public function show(string $role, string $employee, Request $request)
    {
        $request->user()->can('employee.list') || abort(403);

        $employee = Employee::with(['user', 'country', 'city', 'designation'])
            ->findOrFail($employee);

        return view('backend.pages.HR.employees.show', compact('employee'));
    }

    /**
     * Update an existing employee.
     */
    public function update(UpdateEmployeeRequest $request, string $role, string $employee)
    {
        // Authorization and validation are handled by UpdateEmployeeRequest.
        $validated = $request->validated();

        $employee = Employee::with('user')->findOrFail($employee);

        DB::beginTransaction();

        try {
            $userData = [
                'name' => trim($validated['first_name'] . ' ' . $validated['last_name']),
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
            ];

            // Only change the password when a new one is supplied.
            if (!empty($validated['password'])) {
                $userData['password'] = Hash::make($validated['password']);
            }

            if ($employee->user) {
                $employee->user->update($userData);
            } else {
                // A new login account needs a password.
                if (empty($validated['password'])) {
                    throw ValidationException::withMessages([
                        'password' => 'A password is required to create the login account.',
                    ]);
                }

                $userData['password'] = Hash::make($validated['password']);

                $userData['status'] = 'active';

                $user = User::create($userData);

                $employee->user_id = $user->id;
            }

            $employeeData = $this->prepareEmployeeData($validated, $request);

            $employee->fill($employeeData);
            $employee->save();

            DB::commit();

            return redirect()
                ->route('role.employees.index', ['role' => $role])
                ->with('success', 'Employee updated successfully.');
        } catch (ValidationException $e) {
            DB::rollBack();

            throw $e;
        } catch (\Throwable $e) {
            DB::rollBack();

            report($e);

            return back()->withInput()->with('error', 'Unable to update employee. Please try again.');
        }
    }

    /**
     * Prepare employee fields before saving.
     */
    private function prepareEmployeeData(array $validated, Request $request): array
    {
        // Names belong to both the login account and the employee profile.
        $employeeNames = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
        ];

        unset($validated['first_name'], $validated['last_name'], $validated['email'], $validated['phone'], $validated['password']);

        $validated = array_merge($employeeNames, $validated);

        $validated['experience_years'] = $validated['experience_years'] ?? 0;

        $validated['languages'] = $this->cleanArray($validated['languages'] ?? []);

        $validated['expertise'] = $this->cleanArray($validated['expertise'] ?? []);

        $validated['is_verified'] = $request->boolean('is_verified');

        return $validated;
    }

    public function destroy(Request $request, string $role, string $employee)
    {
        $request->user()->can('employee.delete') || abort(403);

        $employee = Employee::findOrFail($employee);

        // Keep the associated user account.
        $employee->delete();

        return redirect()
            ->route('role.employees.index', ['role' => $role])
            ->with('success', 'Employee deleted successfully.');
    }

    private function cleanArray(array $items): array
    {
        return array_values(array_filter(array_map(fn($item) => is_string($item) ? trim($item) : $item, $items), fn($item) => filled($item)));
    }
}
