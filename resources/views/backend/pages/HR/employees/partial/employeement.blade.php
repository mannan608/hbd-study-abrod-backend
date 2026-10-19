<section 
    class="rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900"
    x-data="employmentForm({
        branchId: '{{ old('branch_id', $employee?->branch_id) }}',
        departmentId: '{{ old('department_id', $employee?->department_id) }}',
        teamId: '{{ old('team_id', $employee?->team_id) }}',
        designationId: '{{ old('designation_id', $employee?->designation_id) }}',
        allDepartments: @js($departments ?? []),
        allTeams: @js($teams ?? [])
    })"
>
    <div class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
        <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
            Employment Information
        </h2>
        <p class="text-xs text-neutral-500 dark:text-neutral-400">
            Assign the employee's branch, department, team, and designation.
        </p>
    </div>

    <div class="space-y-6 p-6">

        {{-- Employee Code (Required by Migration) --}}
        <div>
            <label for="employee_code" class="mb-1.5 block text-sm font-medium text-neutral-700 dark:text-neutral-400">
                Employee Code <span class="text-red-500">*</span>
            </label>
            <input 
                type="text" 
                id="employee_code" 
                name="employee_code" 
                value="{{ old('employee_code', $employee?->employee_code) }}"
                required
                placeholder="e.g. EMP-001"
                class="h-11 w-full rounded-lg border border-neutral-300 bg-white px-4 text-sm text-neutral-800 focus:border-brand-300 focus:ring-3 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"
            >
            @error('employee_code')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Branch and Department --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

            {{-- Branch --}}
            <div>
                <label for="branch_id" class="mb-1.5 block text-sm font-medium text-neutral-700 dark:text-neutral-400">
                    Branch
                </label>
                <select
                    id="branch_id"
                    name="branch_id"
                    x-model="branchId"
                    @change="branchChanged()"
                    class="h-11 w-full rounded-lg border border-neutral-300 bg-white px-4 text-sm text-neutral-800 focus:border-brand-300 focus:ring-3 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"
                >
                    <option value="">Select Branch</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" @selected(old('branch_id', $employee?->branch_id) == $branch->id)>
                            {{ $branch->name }}
                            @if ($branch->code === 'DHK-HO')
                                (Main Branch)
                            @endif
                        </option>
                    @endforeach
                </select>
                @error('branch_id')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Department --}}
            <div>
                <label for="department_id" class="mb-1.5 block text-sm font-medium text-neutral-700 dark:text-neutral-400">
                    Department
                </label>
                <select
                    id="department_id"
                    name="department_id"
                    x-model="departmentId"
                    @change="departmentChanged()"
                    class="h-11 w-full rounded-lg border border-neutral-300 bg-white px-4 text-sm text-neutral-800 focus:border-brand-300 focus:ring-3 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"
                >
                    <option value="">No Department</option>
                    <template x-for="department in filteredDepartments" :key="department.id">
                        <option 
                            :value="department.id" 
                            x-text="department.name"
                            :selected="department.id == departmentId"
                        ></option>
                    </template>
                </select>
                @error('department_id')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- Team and Designation --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

            {{-- Team --}}
            <div>
                <label for="team_id" class="mb-1.5 block text-sm font-medium text-neutral-700 dark:text-neutral-400">
                    Team
                </label>
                <select
                    id="team_id"
                    name="team_id"
                    x-model="teamId"
                    class="h-11 w-full rounded-lg border border-neutral-300 bg-white px-4 text-sm text-neutral-800 focus:border-brand-300 focus:ring-3 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"
                >
                    <option value="">No Team</option>
                    <template x-for="team in filteredTeams" :key="team.id">
                        <option 
                            :value="team.id" 
                            x-text="team.name"
                            :selected="team.id == teamId"
                        ></option>
                    </template>
                </select>
                @error('team_id')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Designation --}}
            <div>
                <label for="designation_id" class="mb-1.5 block text-sm font-medium text-neutral-700 dark:text-neutral-400">
                    Designation <span class="text-red-500">*</span>
                </label>
                <select
                    id="designation_id"
                    name="designation_id"
                    x-model="designationId"
                    required
                    class="h-11 w-full rounded-lg border border-neutral-300 bg-white px-4 text-sm text-neutral-800 focus:border-brand-300 focus:ring-3 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"
                >
                    <option value="">Select Designation</option>
                    @foreach ($designations as $designation)
                        <option value="{{ $designation->id }}" @selected(old('designation_id', $employee?->designation_id) == $designation->id)>
                            {{ $designation->name }}
                        </option>
                    @endforeach
                </select>
                @error('designation_id')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- Work Type, Status, and Joining Date --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
            <x-form.select-input 
                name="work_type" 
                label="Work Type" 
                :options="['onsite' => 'Onsite', 'remote' => 'Remote', 'hybrid' => 'Hybrid']"
                value="{{ old('work_type', $employee?->work_type ?? 'onsite') }}" 
            />
            
            <x-form.select-input 
                name="employment_status" 
                label="Employment Status" 
                :options="[
                    'probation' => 'Probation',
                    'permanent' => 'Permanent',
                    'resigned' => 'Resigned',
                    'terminated' => 'Terminated',
                ]"
                value="{{ old('employment_status', $employment?->employment_status ?? 'probation') }}" 
            />

            <x-form.date-picker 
                name="joining_date" 
                label="Joining Date" 
                type="date"
                value="{{ old('joining_date', $employment?->joining_date?->format('Y-m-d')) }}" 
                placeholder="YYYY-MM-DD" 
            />
        </div>

        {{-- Resignation & Last Working Day --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            <x-form.date-picker 
                name="resignation_date" 
                label="Resignation Date" 
                type="date"
                value="{{ old('resignation_date', $employee?->resignation_date?->format('Y-m-d')) }}" 
                placeholder="YYYY-MM-DD" 
            />
            <x-form.date-picker 
                name="last_working_day" 
                label="Last Working Day" 
                type="date"
                value="{{ old('last_working_day', $employee?->last_working_day?->format('Y-m-d')) }}" 
                placeholder="YYYY-MM-DD" 
            />
        </div>

    </div>
</section>
document.addEventListener('alpine:init', () => {
    Alpine.data('employmentForm', (config) => ({
        branchId: config.branchId,
        departmentId: config.departmentId,
        teamId: config.teamId,
        designationId: config.designationId,
        
        allDepartments: config.allDepartments,
        allTeams: config.allTeams,

        get filteredDepartments() {
            if (!this.branchId) return this.allDepartments;
            // Assuming your department model has a branch_id column
            return this.allDepartments.filter(dept => dept.branch_id == this.branchId);
        },

        get filteredTeams() {
            if (!this.departmentId) return [];
            // Assuming your team model has a department_id column
            return this.allTeams.filter(team => team.department_id == this.departmentId);
        },

        branchChanged() {
            // Reset department and team if branch changes
            this.departmentId = '';
            this.teamId = '';
        },

        departmentChanged() {
            // Reset team if department changes
            this.teamId = '';
        }
    }));
});