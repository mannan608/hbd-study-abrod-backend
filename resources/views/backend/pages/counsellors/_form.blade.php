@php
    $isEdit = isset($counsellor) && $counsellor;

    $selectedCountryId = old('country_id', $counsellor?->country_id);
    $selectedCityId = old('city_id', $counsellor?->city_id);

    // Counsellor JSON fields
    $languages = old(
        'languages',
        is_array($counsellor?->languages) ? implode(', ', $counsellor->languages) : $counsellor?->languages,
    );

    $expertise = old(
        'expertise',
        is_array($counsellor?->expertise) ? implode(', ', $counsellor->expertise) : $counsellor?->expertise,
    );
@endphp

<div class="grid grid-cols-1 gap-6 lg:grid-cols-12" x-data="{
    countryId: @js($selectedCountryId),
    cityId: @js($selectedCityId),

    cities: @js(
    $cities
        ->map(function ($city) {
            return [
                'id' => $city->id,
                'name' => $city->name,
                'country_id' => $city->country_id,
            ];
        })
        ->values(),
),

    get filteredCities() {
        if (!this.countryId) {
            return [];
        }

        return this.cities.filter(
            city => String(city.country_id) === String(this.countryId)
        );
    },

    countryChanged() {
        const cityExists = this.filteredCities.some(
            city => String(city.id) === String(this.cityId)
        );

        if (!cityExists) {
            this.cityId = '';
        }
    }
}" x-init="countryChanged()">

    <div class="space-y-6 lg:col-span-8">

        {{-- Counsellor Information --}}
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

            <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                    Counsellor Information
                </h2>
            </div>

            <div class="space-y-5 p-5">

                {{-- Name / Email --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                    <x-form.input-text name="name" label="Full Name" value="{{ old('name', $counsellor?->name) }}"
                        placeholder="Enter Your Name..." />

                    <x-form.input-text name="email" label="Email Address"
                        value="{{ old('email', $counsellor?->email) }}" placeholder="Enter Your Email..." />

                    <x-form.input-text name="phone" label="Phone" value="{{ old('phone', $counsellor?->phone) }}"
                        placeholder="Enter Your Phone..." />

                    <x-form.input-text name="password" label="Password" type="password"
                        placeholder="{{ $isEdit ? 'Leave blank to keep current password' : 'Enter Your Password...' }}" />

                </div>


                {{-- Designation / Experience --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                    <x-form.input-text name="designation" label="Designation"
                        value="{{ old('designation', $counsellor?->designation) }}"
                        placeholder="e.g. Senior Counsellor" />

                    <x-form.input-text name="experience_years" label="Experience (Years)" type="number" min="0"
                        value="{{ old('experience_years', $counsellor?->experience_years ?? 0) }}" placeholder="0" />

                </div>


                {{-- Bio --}}
                <x-form.textarea-input name="bio" label="Bio" rows="5"
                    placeholder="Write counsellor bio..." value="{{ old('bio', $counsellor?->bio) }}" />


                {{-- Languages / Expertise --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                    <x-form.input-text name="languages" label="Languages" value="{{ $languages }}"
                        placeholder="English, Bengali, Hindi" />

                    <x-form.input-text name="expertise" label="Expertise" value="{{ $expertise }}"
                        placeholder="SOP Writing, GTE, Visa Guidance" />

                </div>


                {{-- Country / City --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                    {{-- Country --}}
                    <div>
                        <label for="country_id" class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Country
                        </label>

                        <select id="country_id" name="country_id" x-model="countryId" @change="countryChanged()"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm
                                   focus:border-brand-500 focus:ring-brand-500
                                   dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                            <option value="">
                                Select Country
                            </option>

                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">
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


                    {{-- City --}}
                    <div>
                        <label for="city_id" class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
                            City
                        </label>

                        <select id="city_id" name="city_id" x-model="cityId" :disabled="!countryId"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm
                                   focus:border-brand-500 focus:ring-brand-500
                                   disabled:cursor-not-allowed disabled:bg-gray-100
                                   focus:border-brand-500 focus:ring-brand-500
                                   dark:border-gray-700 dark:bg-gray-800 dark:text-white
                                   dark:disabled:bg-gray-800">
                            <option value="">
                                Select City
                            </option>

                            <template x-for="city in filteredCities" :key="city.id">
                                <option :value="city.id" x-text="city.name"></option>
                            </template>
                        </select>

                        @error('city_id')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>


                {{-- Photo --}}
                <div class="p-5">

                    <x-form.dropzone name="photo" label="{{ $isEdit ? 'Upload New Photo' : 'Upload Photo' }}" />

                    @if ($isEdit && $counsellor->photo)
                        <div class="mt-4">

                            <p class="mb-2 text-xs font-medium text-gray-500 dark:text-gray-400">
                                Current Photo
                            </p>

                            <img src="{{ asset($counsellor->photo) }}" alt="{{ $counsellor->name ?? 'Counsellor' }}"
                                class="h-24 w-24 rounded-xl border border-gray-200 object-cover dark:border-gray-700">

                        </div>
                    @endif

                    @error('photo')
                        <p class="mt-2 text-xs text-red-500">
                            {{ $message }}
                        </p>
                    @enderror

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

                    <input type="hidden" name="is_active" value="0">

                    <input type="checkbox" id="is_active" name="is_active" value="1" @checked(old('is_active', $counsellor?->is_active ?? true))
                        class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500">

                    <label for="is_active" class="text-sm font-medium text-gray-700 dark:text-gray-300">
                        Active
                    </label>

                </div>


                {{-- Verified --}}
                <div class="flex items-center gap-3">

                    <input type="hidden" name="is_verified" value="0">

                    <input type="checkbox" id="is_verified" name="is_verified" value="1"
                        @checked(old('is_verified', $counsellor?->is_verified ?? false))
                        class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500">

                    <label for="is_verified" class="text-sm font-medium text-gray-700 dark:text-gray-300">
                        Verified
                    </label>

                </div>


                {{-- Featured --}}
                <div class="flex items-center gap-3">

                    <input type="hidden" name="is_featured" value="0">

                    <input type="checkbox" id="is_featured" name="is_featured" value="1"
                        @checked(old('is_featured', $counsellor?->is_featured ?? false))
                        class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500">

                    <label for="is_featured" class="text-sm font-medium text-gray-700 dark:text-gray-300">
                        Featured
                    </label>

                </div>

            </div>
        </div>

    </div>

</div>