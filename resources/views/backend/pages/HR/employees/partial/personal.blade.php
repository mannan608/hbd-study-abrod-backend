<div
    class="overflow-hidden rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
    <div class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
        <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
            Personal Information
        </h2>
        <p class="text-xs text-neutral-500 dark:text-neutral-400">Basic identification and personal contact details.
        </p>
    </div>

    <div class="p-6 space-y-6">
        {{-- Names --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            <x-form.input-text name="first_name" label="First Name" value="{{ old('first_name', $employee?->first_name) }}"
                placeholder="e.g. John" />

            <x-form.input-text name="last_name" label="Last Name" value="{{ old('last_name', $employee?->last_name) }}"
                placeholder="e.g. Doe" />
        </div>

        {{-- Credentials & Contact --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
            <x-form.input-text name="email" label="Email Address" value="{{ old('email', $employee?->user?->email) }}"
                placeholder="john@example.com" />

            <x-form.input-text name="phone" label="Phone Number" value="{{ old('phone', $employee?->user?->phone) }}"
                placeholder="+1 (555) 000-0000" />

            <x-form.input-text name="password" label="Password" type="password"
                value="{{ old('password'), $employee?->user?->password }}"
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
                <label for="blood_group" class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300">
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
            <x-form.input-text name="religion" label="Religion" value="{{ old('religion', $employee?->religion) }}"
                placeholder="e.g. Islam, Hinduism, Christianity, etc." />

            <x-form.input-text name="national_id" label="National ID / Passport"
                value="{{ old('national_id', $employee?->national_id) }}" placeholder="Enter NID Number" />
        </div>

        {{-- Emmergency & Contact --}}
        <div
            class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-800 bg-neutral-50/30 dark:bg-neutral-900/50">
            <div class=" bg-neutral-50/50 dark:border-neutral-800 dark:bg-neutral-800/50 mb-3">
                <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
                    Emergency Contact
                </h2>
                <p class="text-xs text-neutral-500 dark:text-neutral-400">Enter your emmergency contact details</p>
            </div>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <x-form.input-text name="emergency_contact_name" label="Contact Name" type="text"
                    value="{{ old('emergency_contact_name', $employee?->emergency_contact_name) }}"
                    placeholder="Emmergency contact name" />

                <x-form.input-text name="emergency_contact_phone" label="Phone Number"
                    value="{{ old('emergency_contact_phone', $employee?->emergency_contact_phone) }}"
                    placeholder="+1 (555) 000-0000" />
            </div>
        </div>

    </div>
</div>
