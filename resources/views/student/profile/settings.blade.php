@extends('student.layouts.app')

@section('content')
    <div class="pt-5">
        @if (session('success'))
            <div
                class="mb-6 flex items-center justify-between gap-3 p-4 rounded-xl bg-emerald-50 border border-emerald-200/80 text-emerald-800 dark:bg-emerald-950/30 dark:border-emerald-800/50 dark:text-emerald-300 shadow-2xs">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <span class="text-sm font-semibold">{{ session('success') }}</span>
                </div>
                <button type="button" onclick="this.parentElement.remove()"
                    class="text-emerald-500 hover:text-emerald-700 dark:hover:text-emerald-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif

        <div
            class="bg-white dark:bg-neutral-900 rounded-2xl shadow-xs border border-neutral-200/80 dark:border-neutral-800 overflow-hidden">
            <div
                class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between border-b border-neutral-100  dark:border-neutral-800 py-5 mb-5 px-4 sm:px-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600 dark:bg-brand-950/50 dark:text-brand-400">
                        <iconify-icon icon="lucide:id-card" class="text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-neutral-900 dark:text-white">Personal & Passport Details</h3>
                        <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-0.5">Update identity parameters, contact
                            details, and document validation info.</p>
                    </div>
                </div>
            </div>

            <form action="#" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Main Form Card -->
                <div class="px-5 sm:px-8   dark:bg-neutral-900 space-y-8 mb-6">

                    <!-- Basic Information Section -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 border-b border-neutral-100 pb-3 dark:border-neutral-800">
                            <iconify-icon icon="lucide:user" class="text-brand-500 text-base"></iconify-icon>
                            <h4 class="text-xs font-bold text-neutral-900 uppercase tracking-wider dark:text-white">Personal
                                Information</h4>
                        </div>

                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                            <x-form.form-date id="date_of_birth" name="date_of_birth" label="Date of Birth"
                                :value="old('date_of_birth', '2002-08-14')" required />

                            <!-- Gender -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Gender <span class="text-rose-500">*</span>
                                </label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-neutral-400">
                                        <iconify-icon icon="lucide:users" class="text-sm"></iconify-icon>
                                    </div>
                                    <select name="gender"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-neutral-200 bg-neutral-50/30 dark:bg-neutral-800/40 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:bg-white dark:focus:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all appearance-none">
                                        <option value="Female" selected>Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Nationality -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Nationality <span class="text-rose-500">*</span>
                                </label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-neutral-400">
                                        <iconify-icon icon="lucide:globe" class="text-sm"></iconify-icon>
                                    </div>
                                    <input type="text" name="nationality" value="{{ old('nationality', 'Bangladeshi') }}"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-neutral-200 bg-neutral-50/30 dark:bg-neutral-800/40 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:bg-white dark:focus:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all"
                                        placeholder="Enter nationality">
                                </div>
                            </div>

                            <!-- Place of Birth -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Place of Birth <span class="text-rose-500">*</span>
                                </label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-neutral-400">
                                        <iconify-icon icon="lucide:map-pin" class="text-sm"></iconify-icon>
                                    </div>
                                    <input type="text" name="place_of_birth"
                                        value="{{ old('place_of_birth', 'Dhaka, Bangladesh') }}"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-neutral-200 bg-neutral-50/30 dark:bg-neutral-800/40 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:bg-white dark:focus:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all"
                                        placeholder="City, Country">
                                </div>
                            </div>

                            <!-- Marital Status -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Marital Status <span class="text-rose-500">*</span>
                                </label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-neutral-400">
                                        <iconify-icon icon="lucide:heart" class="text-sm"></iconify-icon>
                                    </div>
                                    <select name="marital_status"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-neutral-200 bg-neutral-50/30 dark:bg-neutral-800/40 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:bg-white dark:focus:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all appearance-none">
                                        <option value="Single" selected>Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Phone Number <span class="text-rose-500">*</span>
                                </label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-neutral-400">
                                        <iconify-icon icon="lucide:phone" class="text-sm"></iconify-icon>
                                    </div>
                                    <input type="text" name="phone" value="{{ old('phone', '+880 1712-345678') }}"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-neutral-200 bg-neutral-50/30 dark:bg-neutral-800/40 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:bg-white dark:focus:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all"
                                        placeholder="+880 0000-000000">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Passport Document Information -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 border-b border-neutral-100 pb-3 dark:border-neutral-800">
                            <iconify-icon icon="lucide:file-text" class="text-brand-500 text-base"></iconify-icon>
                            <h4 class="text-xs font-bold text-neutral-900 uppercase tracking-wider dark:text-white">
                                Passport Document Details</h4>
                        </div>

                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">

                            <!-- Passport Number -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Passport Number <span class="text-rose-500">*</span>
                                </label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-neutral-400">
                                        <iconify-icon icon="lucide:hash" class="text-sm"></iconify-icon>
                                    </div>
                                    <input type="text" name="passport_number"
                                        value="{{ old('passport_number', 'A08923411') }}"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-neutral-200 bg-neutral-50/30 dark:bg-neutral-800/40 dark:border-neutral-700 text-xs font-medium uppercase text-neutral-800 dark:text-neutral-200 focus:bg-white dark:focus:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all"
                                        placeholder="e.g. A08923411">
                                </div>
                            </div>

                            <!-- Issue Date -->

                            <x-form.form-date id="issue_date" name="issue_date" label="Issue Date" :value="old('issue_date', '2022-01-10')"
                                required />

                            <!-- Expiry Date -->
                            <x-form.form-date id="expiry_date" name="expiry_date" label="Expiry Date" :value="old('expiry_date', '2032-01-09')"
                                required />

                        </div>
                    </div>

                    <!-- Address Details Section -->
                    <div class="space-y-4" x-data="{ sameAddress: true }">
                        <div
                            class="flex items-center justify-between border-b border-neutral-100 pb-3 dark:border-neutral-800">
                            <div class="flex items-center gap-2">
                                <iconify-icon icon="lucide:home" class="text-brand-500 text-base"></iconify-icon>
                                <h4 class="text-xs font-bold text-neutral-900 uppercase tracking-wider dark:text-white">
                                    Address Information</h4>
                            </div>
                        </div>

                        @include('student.profile.partial.country-select')


                        <div class="grid grid-cols-1 gap-5">

                            <!-- Current Residential Address -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Current Residential Address <span class="text-rose-500">*</span>
                                </label>
                                <div class="relative">
                                    <div
                                        class="absolute top-3 left-0 pl-3.5 flex items-start pointer-events-none text-neutral-400">
                                        <iconify-icon icon="lucide:map-pin" class="text-sm"></iconify-icon>
                                    </div>
                                    <textarea name="current_address" rows="2"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-neutral-200 bg-neutral-50/30 dark:bg-neutral-800/40 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:bg-white dark:focus:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all"
                                        placeholder="Street, City, Postal Code">{{ old('current_address', 'House 42, Road 11, Banani, Dhaka-1213, Bangladesh') }}</textarea>
                                </div>
                            </div>

                            <!-- Checkbox for Same Address -->
                            <div class="flex items-center gap-2.5">
                                <input type="checkbox" id="same_address" name="same_address" x-model="sameAddress"
                                    class="h-4 w-4 rounded-md border-neutral-300 text-brand-600 focus:ring-brand-500 dark:border-neutral-700 dark:bg-neutral-800">
                                <label for="same_address"
                                    class="text-xs font-medium text-neutral-700 dark:text-neutral-300 cursor-pointer select-none">
                                    Permanent address is the same as current residential address
                                </label>
                            </div>

                            <!-- Permanent Address (Collapsible if different) -->
                            <div x-show="!sameAddress" x-transition class="space-y-1.5">
                                @include('student.profile.partial.country-select')

                                <div class="relative mt-6">
                                    <div
                                        class="absolute top-3 left-0 pl-3.5 flex items-start pointer-events-none text-neutral-400">
                                        <iconify-icon icon="lucide:building-2" class="text-sm"></iconify-icon>
                                    </div>
                                    <textarea name="permanent_address" rows="2"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-neutral-200 bg-neutral-50/30 dark:bg-neutral-800/40 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:bg-white dark:focus:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all"
                                        placeholder="Street, City, Postal Code">{{ old('permanent_address', 'House 42, Road 11, Banani, Dhaka-1213, Bangladesh') }}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Form Action Buttons -->
                    <div
                        class="flex items-center justify-end gap-3 pt-4 border-t border-neutral-100 dark:border-neutral-800">
                        <button type="button" onclick="window.location.reload()"
                            class="px-4 py-2.5 rounded-xl text-xs font-semibold text-neutral-600 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-800 transition-colors">
                            Discard
                        </button>

                        <button type="submit"
                            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-brand-600 text-white text-xs font-bold shadow-xs hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 active:scale-[0.98] transition-all">
                            <iconify-icon icon="lucide:check" class="text-base"></iconify-icon>
                            Save Information
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
