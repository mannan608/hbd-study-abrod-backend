@extends('backend.layouts.app')

@section('content')
    @php
        $selectedCountryId = old('country_id', $counsellor?->country_id);
        $selectedCityId = old('city_id', $counsellor?->city_id);

        $normalizeArrayInput = function ($value) {
            if (is_string($value)) {
                $value = explode(',', $value);
            }

            if (!is_array($value)) {
                return [''];
            }

            $value = array_values(
                array_filter(
                    array_map(static fn($item) => is_string($item) ? trim($item) : $item, $value),
                    static fn($item) => filled($item),
                ),
            );

            return $value ?: [''];
        };

        $languages = $normalizeArrayInput(old('languages', $counsellor?->languages ?? []));

        $expertise = $normalizeArrayInput(old('expertise', $counsellor?->expertise ?? []));
    @endphp

    <div class="grid grid-cols-1 gap-6" x-data="{
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


      <form action="{{ role_route('role.account.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="flex flex-col gap-6">
    {{-- Page Header --}}
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-xl font-semibold text-gray-800 dark:text-white">
                    Account Settings
                </h1>

                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Manage your counsellor profile and account information.
                </p>
            </div>

                <button type="submit"
                    class="rounded-lg bg-brand-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2">
                    Save Changes
                </button>
        </div>


            {{-- ========================================================= --}}
            {{-- Personal Information --}}
            {{-- ========================================================= --}}
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

                <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                        Personal Information
                    </h2>

                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        Update your basic account information.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-5 p-5 md:grid-cols-2">

                    {{-- Name --}}
                    <x-form.input-text name="name" label="Full Name" value="{{ old('name', $counsellor?->user?->name) }}"
                        placeholder="Enter your name..." />

                    {{-- Email --}}
                    <x-form.input-text name="email" label="Email Address" type="email"
                        value="{{ old('email', $counsellor?->user?->email) }}" placeholder="Enter your email..." />

                    {{-- Phone --}}
                    <x-form.input-text name="phone" label="Phone" value="{{ old('phone', $counsellor?->user?->phone) }}"
                        placeholder="Enter your phone..." />

                </div>
            </div>


            {{-- ========================================================= --}}
            {{-- Change Password --}}
            {{-- ========================================================= --}}
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

                <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                        Change Password
                    </h2>

                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        Leave these fields empty if you don't want to change your password.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-5 p-5 md:grid-cols-2">

                    <x-form.input-text name="password" label="New Password" type="password"
                        placeholder="Enter new password..." />

                    <x-form.input-text name="password_confirmation" label="Confirm New Password" type="password"
                        placeholder="Repeat new password..." />

                </div>
            </div>


            {{-- ========================================================= --}}
            {{-- Counsellor Information --}}
            {{-- ========================================================= --}}
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

                <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                        Counsellor Information
                    </h2>

                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        Update your professional profile information.
                    </p>
                </div>

                <div class="space-y-5 p-5">

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
                        placeholder="Write something about yourself..." value="{{ old('bio', $counsellor?->bio) }}" />


                    {{-- ================================================= --}}
                    {{-- Languages / Expertise --}}
                    {{-- ================================================= --}}
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                        {{-- Languages --}}
                        <div x-data="{
                            items: @js($languages),
                        
                            add() {
                                this.items.push('');
                            },
                        
                            remove(index) {
                                if (this.items.length === 1) {
                                    this.items = [''];
                                    return;
                                }
                        
                                this.items.splice(index, 1);
                            }
                        }">

                            <div class="mb-2 flex items-center justify-between gap-3">

                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Languages
                                </label>

                                <button type="button" @click="add()"
                                    class="text-xs font-medium text-brand-600 hover:text-brand-700">
                                    + Add Language
                                </button>

                            </div>

                            <div class="space-y-3">

                                <template x-for="(item, index) in items" :key="index">

                                    <div class="flex items-center gap-3">

                                        <input type="text" name="languages[]" x-model="items[index]"
                                            placeholder="English"
                                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">

                                        <button type="button" @click="remove(index)"
                                            class="inline-flex h-11 items-center justify-center rounded-lg border border-gray-300 px-3 text-sm text-gray-600 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-800">
                                            Remove
                                        </button>

                                    </div>

                                </template>

                            </div>

                            @error('languages')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                            @error('languages.*')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Expertise --}}
                        <div x-data="{
                            items: @js($expertise),
                        
                            add() {
                                this.items.push('');
                            },
                        
                            remove(index) {
                                if (this.items.length === 1) {
                                    this.items = [''];
                                    return;
                                }
                        
                                this.items.splice(index, 1);
                            }
                        }">

                            <div class="mb-2 flex items-center justify-between gap-3">

                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Expertise
                                </label>

                                <button type="button" @click="add()"
                                    class="text-xs font-medium text-brand-600 hover:text-brand-700">
                                    + Add Expertise
                                </button>

                            </div>

                            <div class="space-y-3">

                                <template x-for="(item, index) in items" :key="index">

                                    <div class="flex items-center gap-3">

                                        <input type="text" name="expertise[]" x-model="items[index]"
                                            placeholder="SOP Writing"
                                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">

                                        <button type="button" @click="remove(index)"
                                            class="inline-flex h-11 items-center justify-center rounded-lg border border-gray-300 px-3 text-sm text-gray-600 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-800">
                                            Remove
                                        </button>

                                    </div>

                                </template>

                            </div>

                            @error('expertise')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                            @error('expertise.*')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Country / City --}}
                    {{-- ================================================= --}}
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                        {{-- Country --}}
                        <div>

                            <label for="country_id"
                                class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Country
                            </label>

                            <select id="country_id" name="country_id" x-model="countryId" @change="countryChanged()"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-white px-4 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white">

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
                                class="h-11 w-full rounded-lg border border-gray-300 bg-white px-4 text-sm text-gray-800 disabled:cursor-not-allowed disabled:bg-gray-100 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white">

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
                </div>

            </div>

            </div>

        </form>

    </div>
@endsection