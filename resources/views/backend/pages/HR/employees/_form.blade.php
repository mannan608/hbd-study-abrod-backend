@php
    $isEdit = isset($employee) && $employee;

    $selectedCountryId = old('country_id', $employee?->country_id);
    $selectedCityId = old('city_id', $employee?->city_id);

    // OrganizationSeeder identifies the main branch by its stable code.
    $mainBranchId = $branches->firstWhere('code', 'DHK-HO')?->id
        ?? $branches->first()?->id;

    // Priority: validation input > saved employee branch > main branch.
    $branchId = old(
        'branch_id',
        ($isEdit ? $employee->branch_id : null) ?: $mainBranchId
    );

    $departmentId = old('department_id', $employee?->department_id);
    $teamId = old('team_id', $employee?->team_id);
    $designationId = old('designation_id', $employee?->designation_id);

    $normalizeArrayInput = function ($value) {
        if (is_string($value)) {
            $value = explode(',', $value);
        }

        if (!is_array($value)) {
            return [''];
        }

        $value = array_values(
            array_filter(
                array_map(
                    static fn ($item) => is_string($item)
                        ? trim($item)
                        : $item,
                    $value
                ),
                static fn ($item) => filled($item),
            ),
        );

        return $value ?: [''];
    };

    $languages = $normalizeArrayInput(
        old('languages', $employee?->languages ?? [])
    );

    $expertise = $normalizeArrayInput(
        old('expertise', $employee?->expertise ?? [])
    );
@endphp

<div
    class="space-y-8"
    x-data="{
        countryId: @js((string) ($selectedCountryId ?? '')),
        cityId: @js((string) ($selectedCityId ?? '')),

        branchId: @js((string) ($branchId ?? '')),
        departmentId: @js((string) ($departmentId ?? '')),
        teamId: @js((string) ($teamId ?? '')),
        designationId: @js((string) ($designationId ?? '')),

        cities: @js(
            $cities->map(fn ($city) => [
                'id' => (string) $city->id,
                'name' => $city->name,
                'country_id' => (string) $city->country_id,
            ])->values()
        ),

        departments: @js(
            $departments->map(fn ($department) => [
                'id' => (string) $department->id,
                'name' => $department->name,
                'branch_id' => (string) $department->branch_id,
            ])->values()
        ),

        teams: @js(
            $teams->map(fn ($team) => [
                'id' => (string) $team->id,
                'name' => $team->name,
                'department_id' => (string) $team->department_id,
            ])->values()
        ),

        // Country / City
        get filteredCities() {
            return this.countryId
                ? this.cities.filter(
                    city => city.country_id === this.countryId
                )
                : [];
        },

        countryChanged() {
            if (!this.filteredCities.some(
                city => city.id === this.cityId
            )) {
                this.cityId = '';
            }
        },

        // Branch / Department
        get filteredDepartments() {
            return this.branchId
                ? this.departments.filter(
                    department =>
                        department.branch_id === this.branchId
                )
                : this.departments;
        },

        // Department / Team
        get filteredTeams() {
            return this.departmentId
                ? this.teams.filter(
                    team =>
                        team.department_id === this.departmentId
                )
                : this.teams;
        },

        branchChanged() {
            const validDepartment = this.filteredDepartments.some(
                department => department.id === this.departmentId
            );

            if (this.departmentId && !validDepartment) {
                this.departmentId = '';
            }

            this.departmentChanged();
        },

        departmentChanged() {
            const validTeam = this.filteredTeams.some(
                team => team.id === this.teamId
            );

            if (this.teamId && !validTeam) {
                this.teamId = '';
            }
        },

        init() {
            this.countryChanged();
            this.branchChanged();
        }
    }"
>
    

    {{-- Personal Information --}}
    <div
        class="overflow-hidden rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
        <div
            class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
            <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
                Personal Information
            </h2>
            <p class="text-xs text-neutral-500 dark:text-neutral-400">Basic identification and personal contact details.
            </p>
        </div>

        <div class="p-6 space-y-6">
            {{-- Names --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <x-form.input-text name="first_name" label="First Name"
                    value="{{ old('first_name', $employee?->first_name) }}" placeholder="e.g. John" />

                <x-form.input-text name="last_name" label="Last Name"
                    value="{{ old('last_name', $employee?->last_name) }}" placeholder="e.g. Doe" />
            </div>

            {{-- Credentials & Contact --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                <x-form.input-text name="email" label="Email Address"
                    value="{{ old('email', $employee?->user?->email) }}" placeholder="john@example.com" />

                <x-form.input-text name="phone" label="Phone Number"
                    value="{{ old('phone', $employee?->user?->phone) }}" placeholder="+1 (555) 000-0000" />

                <x-form.input-text name="password" label="Password" type="password"
                    placeholder="{{ $isEdit ? 'Keep blank to retain current' : 'Enter secure password' }}" />
            </div>

            {{-- Demographics & Details --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                <x-form.input-text name="date_of_birth" label="Date of Birth" type="date"
                    value="{{ old('date_of_birth', $employee?->date_of_birth?->format('Y-m-d')) }}" />

                <div>
                    <label for="gender" class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300">
                        Gender
                    </label>
                    <select id="gender" name="gender"
                        class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm transition focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">
                        <option value="">Select Gender</option>
                        @foreach (['Male', 'Female', 'Other'] as $gender)
                            <option value="{{ $gender }}" @selected(old('gender', $employee?->gender) === $gender)>
                                {{ $gender }}
                            </option>
                        @endforeach
                    </select>
                    @error('gender')
                        <p class="mt-1.5 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="blood_group"
                        class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300">
                        Blood Group
                    </label>
                    <select id="blood_group" name="blood_group"
                        class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm transition focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">
                        <option value="">Select Blood Group</option>
                        @foreach (['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $blood)
                            <option value="{{ $blood }}" @selected(old('blood_group', $employee?->blood_group) === $blood)>
                                {{ $blood }}
                            </option>
                        @endforeach
                    </select>
                    @error('blood_group')
                        <p class="mt-1.5 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <x-form.input-text name="religion" label="Religion"
                    value="{{ old('religion', $employee?->religion) }}"
                    placeholder="e.g. Christianity, Islam, etc." />

                <x-form.input-text name="national_id" label="National ID / Passport"
                    value="{{ old('national_id', $employee?->national_id) }}" placeholder="Enter NID Number" />
            </div>

            {{-- Emmergency & Contact --}}
            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-800 bg-neutral-50/30 dark:bg-neutral-900/50">
                <div class=" bg-neutral-50/50 dark:border-neutral-800 dark:bg-neutral-800/50 mb-3">
                    <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
                        Emergency Contact
                    </h2>
                    <p class="text-xs text-neutral-500 dark:text-neutral-400">Enter your emmergency contact details</p>
                </div>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <x-form.input-text name="emergency_contact_name" label="Contact Name" type="text"
                    value="{{ old('emergency_contact_name', $employee?->emergency_contact_name) }}" placeholder="Emmergency contact name" />

                <x-form.input-text name="emergency_contact_phone" label="Phone Number"
                    value="{{ old('emergency_contact_phone', $employee?->emergency_contact_phone) }}" placeholder="+1 (555) 000-0000" />
            </div>
            </div>
            
        </div>
    </div>

    {{-- Employeement Information --}}
    <section
        class=" rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900"
    >
        <div class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50" >
            <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
                Employeement Information
            </h2>

            <p class="text-xs text-neutral-500 dark:text-neutral-400">
                Assign the employee's branch, department, team, and designation.
            </p>
        </div>

        <div class="space-y-6 p-6">

            {{-- Branch and Department --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                {{-- Branch --}}
                <div>
                    <label for="branch_id" class="mb-1.5 block text-sm font-medium text-neutral-700 dark:text-neutral-400"  >
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
                            <option value="{{ $branch->id }}">
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
                    <label
                        for="department_id"
                        class="mb-1.5 block text-sm font-medium text-neutral-700 dark:text-neutral-400"
                    >
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

                        <template
                            x-for="department in filteredDepartments"
                            :key="department.id"
                        >
                            <option
                                :value="department.id"
                                x-text="department.name"
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
                    <label
                        for="team_id"
                        class="mb-1.5 block text-sm font-medium text-neutral-700 dark:text-neutral-400"
                    >
                        Team
                    </label>

                    <select
                        id="team_id"
                        name="team_id"
                        x-model="teamId"
                        @change="departmentChanged()"
                        class="h-11 w-full rounded-lg border border-neutral-300 bg-white px-4 text-sm text-neutral-800 focus:border-brand-300 focus:ring-3 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"
                    >
                        <option value="">No Team</option>

                        <template
                            x-for="team in filteredTeams"
                            :key="team.id"
                        >
                            <option
                                :value="team.id"
                                x-text="team.name"
                            ></option>
                        </template>
                    </select>

                    @error('team_id')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Designation --}}
                <div>
                    <label
                        for="designation_id"
                        class="mb-1.5 block text-sm font-medium text-neutral-700 dark:text-neutral-400"
                    >
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
                            <option value="{{ $designation->id }}">
                                {{ $designation->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('designation_id')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                <x-form.select-input name="work_type" label="Work Type" :options="['onsite' => 'Onsite', 'remote' => 'Remote']"
                    value="{{ old('work_type', $employee?->work_type) }}" />
                <x-form.select-input name="employment_status" label="Employment Status" :options="[
                    'probation' => 'Probation',
                    'permanent' => 'Permanent',
                    'resigned' => 'Resigned',
                    'terminated' => 'Terminated',
                ]"
                    value="{{ old('employment_status', $employee?->employment_status) }}" />

                <x-form.date-picker name="joining_date" label="Joining Date" type="date"
                    value="{{ old('joining_date', $employee?->joining_date?->format('Y-m-d')) }}" placeholder="YYYY-MM-DD" />

            </div>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <x-form.date-picker name="resignation_date" label="Resignation Date" type="date"
                    value="{{ old('resignation_date', $employee?->resignation_date?->format('Y-m-d')) }}" placeholder="YYYY-MM-DD" />
                <x-form.date-picker name="last_working_day" label="Last Working Day" type="date"
                    value="{{ old('last_working_day', $employee?->last_working_day?->format('Y-m-d')) }}" placeholder="YYYY-MM-DD" />
            </div>
        </div>
    </section>

    {{-- Professional Background --}}
    <div
        class="overflow-hidden rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
        <div
            class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
            <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
                Professional Background
            </h2>
            <p class="text-xs text-neutral-500 dark:text-neutral-400">Experience levels, education, languages, and core
                competencies.</p>
        </div>

        <div class="p-6 space-y-6">
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <x-form.input-text name="experience_years" label="Experience (Years)" type="number" min="0"
                    value="{{ old('experience_years', $employee?->experience_years ?? 0) }}" placeholder="0" />

                <x-form.input-text name="institution" label="Institution / University"
                    value="{{ old('institution', $employee?->institution) }}"
                    placeholder="Last attended institution" />
            </div>

            <x-form.textarea-input name="education" label="Education Details" rows="2"
                placeholder="Degrees and certifications summary..."
                value="{{ old('education', $employee?->education) }}" />

            <x-form.textarea-input name="bio" label="Professional Bio" rows="3"
                placeholder="Brief summary about the employee..." value="{{ old('bio', $employee?->bio) }}" />

            {{-- Languages & Expertise dynamic lists --}}
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 pt-2">

                {{-- Languages --}}
                <div x-data="{
                    items: @js($languages),
                    add() { this.items.push(''); },
                    remove(index) {
                        if (this.items.length === 1) { this.items = ['']; return; }
                        this.items.splice(index, 1);
                    }
                }"
                    class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-800 bg-neutral-50/30 dark:bg-neutral-900/50">
                    <div class="mb-3 flex items-center justify-between">
                        <label
                            class="block text-sm font-medium text-neutral-700 dark:text-neutral-300">Languages</label>
                        <button type="button" @click="add()"
                            class="inline-flex items-center gap-1 rounded-lg bg-brand-50 px-2.5 py-1.5 text-xs font-semibold text-brand-700 transition hover:bg-brand-100 dark:bg-brand-500/10 dark:text-brand-300">
                            <span>+ Add Language</span>
                        </button>
                    </div>

                    <div class="space-y-2.5">
                        <template x-for="(item, index) in items" :key="index">
                            <div class="flex items-center gap-2">
                                <input type="text" name="languages[]" x-model="items[index]"
                                    placeholder="e.g. English, Spanish"
                                    class="h-10 w-full rounded-lg border border-neutral-300 bg-white px-3 text-sm text-neutral-800 shadow-sm focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">
                                <button type="button" @click="remove(index)" title="Remove"
                                    class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-red-200 text-red-500 transition hover:bg-red-50 dark:border-red-900/50 dark:hover:bg-red-500/10">
                                    <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </template>
                    </div>
                    @error('languages')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    @error('languages.*')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Expertise --}}
                <div x-data="{
                    items: @js($expertise),
                    add() { this.items.push(''); },
                    remove(index) {
                        if (this.items.length === 1) { this.items = ['']; return; }
                        this.items.splice(index, 1);
                    }
                }"
                    class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-800 bg-neutral-50/30 dark:bg-neutral-900/50">
                    <div class="mb-3 flex items-center justify-between">
                        <label
                            class="block text-sm font-medium text-neutral-700 dark:text-neutral-300">Expertise</label>
                        <button type="button" @click="add()"
                            class="inline-flex items-center gap-1 rounded-lg bg-brand-50 px-2.5 py-1.5 text-xs font-semibold text-brand-700 transition hover:bg-brand-100 dark:bg-brand-500/10 dark:text-brand-300">
                            <span>+ Add Expertise</span>
                        </button>
                    </div>

                    <div class="space-y-2.5">
                        <template x-for="(item, index) in items" :key="index">
                            <div class="flex items-center gap-2">
                                <input type="text" name="expertise[]" x-model="items[index]"
                                    placeholder="e.g. Project Management"
                                    class="h-10 w-full rounded-lg border border-neutral-300 bg-white px-3 text-sm text-neutral-800 shadow-sm focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">
                                <button type="button" @click="remove(index)" title="Remove"
                                    class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-red-200 text-red-500 transition hover:bg-red-50 dark:border-red-900/50 dark:hover:bg-red-500/10">
                                    <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </template>
                    </div>
                    @error('expertise')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    @error('expertise.*')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>
    </div>

    {{-- Location & Address --}}
    <div
        class="overflow-hidden rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
        <div
            class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
            <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
                Location & Residential Address
            </h2>
            <p class="text-xs text-neutral-500 dark:text-neutral-400">Specify country, corresponding city, and physical
                address.</p>
        </div>

        <div class="p-6 space-y-6">
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <div>
                    <label for="country_id"
                        class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300">
                        Country
                    </label>
                    <select id="country_id" name="country_id" x-model="countryId" @change="countryChanged()"
                        class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm transition focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">
                        <option value="">Select Country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                        <p class="mt-1.5 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="city_id"
                        class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300">
                        City
                    </label>
                    <select id="city_id" name="city_id" x-model="cityId" :disabled="!countryId"
                        class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm transition focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/10 disabled:cursor-not-allowed disabled:bg-neutral-100 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:disabled:bg-neutral-800/50">
                        <option value="">Select City</option>
                        <template x-for="city in filteredCities" :key="city.id">
                            <option :value="city.id" x-text="city.name"></option>
                        </template>
                    </select>
                    @error('city_id')
                        <p class="mt-1.5 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <x-form.textarea-input name="address" label="Street Address" rows="2"
                placeholder="Enter complete building or street address..."
                value="{{ old('address', $employee?->address) }}" />
        </div>
    </div>

    {{-- Employee Settings --}}
    <div
        class="overflow-hidden rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
        <div
            class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
            <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
                Account Settings
            </h2>
            <p class="text-xs text-neutral-500 dark:text-neutral-400">Manage account privileges and status flags.</p>
        </div>

        <div class="p-6">
            <label class="relative flex items-start gap-3 cursor-pointer">
                <input type="hidden" name="is_verified" value="0">
                <input type="checkbox" id="is_verified" name="is_verified" value="1"
                    @checked(old('is_verified', $employee?->is_verified ?? false))
                    class="mt-0.5 h-4 w-4 rounded border-neutral-300 text-brand-600 focus:ring-brand-500">
                <div>
                    <span class="text-sm font-medium text-neutral-900 dark:text-white">Verified Employee</span>
                    <p class="text-xs text-neutral-500 dark:text-neutral-400">Verified status gives the profile
                        standard clearance across platform modules.</p>
                </div>
            </label>
        </div>
    </div>

    {{-- Form Actions --}}
    <div class="flex items-center justify-end gap-3 pt-2">
        <a href="{{ role_route('role.employees.index') }}"
            class="inline-flex items-center justify-center rounded-xl border border-neutral-300 px-5 py-2.5 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800">
            Cancel
        </a>

        <button type="submit"
            class="inline-flex items-center justify-center rounded-xl bg-brand-600 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500/20">
            {{ $isEdit ? 'Update Employee' : 'Create Employee' }}
        </button>
    </div>

</div>
