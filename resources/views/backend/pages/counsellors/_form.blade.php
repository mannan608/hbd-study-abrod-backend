@php
    $isEdit = isset($counsellor) && $counsellor;

    $linkedUser = $counsellor?->user;

    $createUser = old('create_user', false);
@endphp

<div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

    <div class="space-y-6 lg:col-span-8">

        {{-- Account Details --}}
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

            <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                    Account Details
                </h2>
            </div>

            <div class="space-y-5 p-5">

                {{-- Create User --}}
                <div class="flex items-start gap-3">

                    <input type="hidden" name="create_user" value="0">

                    <input
                        type="checkbox"
                        id="create_user"
                        name="create_user"
                        value="1"
                        @checked(old('create_user', false))
                        @change="toggleUserCreation($event.target.checked)"
                        class="mt-1 h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500"
                    >

                    <div>
                        <label
                            for="create_user"
                            class="text-sm font-medium text-gray-700 dark:text-gray-300"
                        >
                            Create a new user account for this counsellor
                        </label>

                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                            Enable this only when you want to create a new login account.
                        </p>
                    </div>

                </div>

                {{-- Existing User --}}
                <div
                    id="existing-user-section"
                    class="{{ $createUser ? 'hidden' : '' }}"
                >

                    <label
                        for="user_id"
                        class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300"
                    >
                        Link Existing User
                    </label>

                    <select
                        id="user_id"
                        name="user_id"
                        class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm
                               focus:border-brand-500 focus:ring-brand-500
                               dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                    >
                        <option value="">
                            Select User
                        </option>

                        @foreach ($users as $user)
                            <option
                                value="{{ $user->id }}"
                                @selected(old('user_id', $counsellor?->user_id) == $user->id)
                            >
                                {{ $user->name }} ({{ $user->email }})
                            </option>
                        @endforeach
                    </select>

                    @error('user_id')
                        <p class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                {{-- New User --}}
                <div
                    id="new-user-section"
                    class="{{ $createUser ? '' : 'hidden' }} space-y-5 rounded-xl border border-gray-200 p-4 dark:border-gray-700"
                >

                    <div>
                        <x-form.input-text
                            name="name"
                            label="Name"
                            value="{{ old('name', $linkedUser?->name) }}"
                            placeholder="Enter user name..."
                        />
                    </div>

                    <div>
                        <x-form.input-text
                            name="email"
                            label="Email"
                            type="email"
                            value="{{ old('email', $linkedUser?->email) }}"
                            placeholder="user@example.com"
                        />
                    </div>

                    <div>
                        <x-form.input-text
                            name="password"
                            label="Password"
                            type="password"
                            placeholder="{{ $isEdit ? 'Leave blank to keep current password' : 'Enter password...' }}"
                        />

                        @if ($isEdit)
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                                Leave blank if you don't want to change the password.
                            </p>
                        @endif
                    </div>

                </div>

            </div>
        </div>


        {{-- Counsellor Information --}}
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

            <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                    Counsellor Information
                </h2>
            </div>

            <div class="space-y-5 p-5">

                {{-- Designation / Experience --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                    <x-form.input-text
                        name="designation"
                        label="Designation"
                        value="{{ old('designation', $counsellor?->designation) }}"
                        placeholder="e.g. Senior Counsellor"
                    />

                    <x-form.input-text
                        name="experience_years"
                        label="Experience (Years)"
                        type="number"
                        min="0"
                        value="{{ old('experience_years', $counsellor?->experience_years ?? 0) }}"
                        placeholder="0"
                    />

                </div>


                {{-- Bio --}}
                <x-form.textarea-input
                    name="bio"
                    label="Bio"
                    rows="5"
                    placeholder="Write counsellor bio..."
                    value="{{ old('bio', $counsellor?->bio) }}"
                />


                {{-- Languages / Expertise --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                    <x-form.input-text
                        name="languages"
                        label="Languages"
                        value="{{ old('languages', $counsellor?->languages) }}"
                        placeholder="English, Spanish"
                    />

                    <x-form.input-text
                        name="expertise"
                        label="Expertise"
                        value="{{ old('expertise', $counsellor?->expertise) }}"
                        placeholder="Anxiety, Depression"
                    />

                </div>


                {{-- Country / City --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                    <div>
                        <label
                            for="country_id"
                            class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300"
                        >
                            Country
                        </label>

                        <select
                            id="country_id"
                            name="country_id"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm
                                   focus:border-brand-500 focus:ring-brand-500
                                   dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        >
                            <option value="">
                                Select Country
                            </option>

                            @foreach ($countries as $country)
                                <option
                                    value="{{ $country->id }}"
                                    @selected(old('country_id', $counsellor?->country_id) == $country->id)
                                >
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('country_id')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    <div>
                        <label
                            for="city_id"
                            class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300"
                        >
                            City
                        </label>

                        <select
                            id="city_id"
                            name="city_id"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm
                                   focus:border-brand-500 focus:ring-brand-500
                                   dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        >
                            <option value="">
                                Select City
                            </option>

                            @foreach ($cities as $city)
                                <option
                                    value="{{ $city->id }}"
                                    @selected(old('city_id', $counsellor?->city_id) == $city->id)
                                >
                                    {{ $city->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('city_id')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>


                {{-- Photo --}}
                <div>
                    <label
                        for="photo"
                        class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300"
                    >
                        Photo
                    </label>

                    <input
                        type="file"
                        id="photo"
                        name="photo"
                        accept="image/*"
                        class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm
                               file:mr-4 file:rounded-md file:border-0 file:bg-gray-100
                               file:px-4 file:py-2 file:text-sm
                               dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                    >

                    @error('photo')
                        <p class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </p>
                    @enderror

                    @if ($isEdit && $counsellor->photo)
                        <div class="mt-3">

                            <p class="mb-2 text-xs font-medium text-gray-500 dark:text-gray-400">
                                Current Photo
                            </p>

                            <img
                                src="{{ asset('storage/' . $counsellor->photo) }}"
                                alt="{{ $linkedUser?->name ?? 'Counsellor' }}"
                                class="h-20 w-20 rounded-xl object-cover"
                            >

                        </div>
                    @endif

                </div>

            </div>
        </div>


        {{-- Counsellor Settings --}}
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

            <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                    Counsellor Settings
                </h2>
            </div>

            <div class="space-y-5 p-5">

                {{-- Active --}}
                <div class="flex items-center gap-3">

                    <input
                        type="hidden"
                        name="is_active"
                        value="0"
                    >

                    <input
                        type="checkbox"
                        id="is_active"
                        name="is_active"
                        value="1"
                        @checked(old('is_active', $counsellor?->is_active ?? true))
                        class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500"
                    >

                    <label
                        for="is_active"
                        class="text-sm font-medium text-gray-700 dark:text-gray-300"
                    >
                        Active
                    </label>

                </div>


                {{-- Verified --}}
                <div class="flex items-center gap-3">

                    <input
                        type="hidden"
                        name="is_verified"
                        value="0"
                    >

                    <input
                        type="checkbox"
                        id="is_verified"
                        name="is_verified"
                        value="1"
                        @checked(old('is_verified', $counsellor?->is_verified ?? false))
                        class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500"
                    >

                    <label
                        for="is_verified"
                        class="text-sm font-medium text-gray-700 dark:text-gray-300"
                    >
                        Verified
                    </label>

                </div>


                {{-- Featured --}}
                <div class="flex items-center gap-3">

                    <input
                        type="hidden"
                        name="is_featured"
                        value="0"
                    >

                    <input
                        type="checkbox"
                        id="is_featured"
                        name="is_featured"
                        value="1"
                        @checked(old('is_featured', $counsellor?->is_featured ?? false))
                        class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500"
                    >

                    <label
                        for="is_featured"
                        class="text-sm font-medium text-gray-700 dark:text-gray-300"
                    >
                        Featured
                    </label>

                </div>

            </div>
        </div>

    </div>

</div>


<script>
    function toggleUserCreation(checked) {
        const existingSection = document.getElementById('existing-user-section');
        const newSection = document.getElementById('new-user-section');
        const userSelect = document.getElementById('user_id');

        if (checked) {
            existingSection.classList.add('hidden');
            newSection.classList.remove('hidden');

            if (userSelect) {
                userSelect.value = '';
            }
        } else {
            existingSection.classList.remove('hidden');
            newSection.classList.add('hidden');

            const nameInput = newSection.querySelector('[name="name"]');
            const emailInput = newSection.querySelector('[name="email"]');
            const passwordInput = newSection.querySelector('[name="password"]');

            if (nameInput) nameInput.value = '';
            if (emailInput) emailInput.value = '';
            if (passwordInput) passwordInput.value = '';
        }
    }
</script>