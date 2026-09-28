@extends('backend.layouts.app')

@section('content')
    <form action="{{ role_route('role.providers.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

            <div class="space-y-6 lg:col-span-8">

                {{-- Provider Information --}}
                <div class="rounded-2xl border border-neutral-200 bg-white dark:border-neutral-800 dark:bg-neutral-900">

                    <div class="border-b border-neutral-100 p-5 dark:border-neutral-800">
                        <h2 class="text-lg font-semibold text-neutral-800 dark:text-white">
                            Provider Information
                        </h2>
                    </div>

                    <div class="space-y-5 p-5">

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                            {{-- Provider Name --}}
                            <x-form.input-text name="name" label="Provider Name" value="{{ old('name') }}"
                                placeholder="Enter provider name..." required />

                            {{-- Short Name --}}
                            <x-form.input-text name="short_name" label="Short Name" value="{{ old('short_name') }}"
                                placeholder="e.g. ABC Education" />

                        </div>

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                            {{-- Email --}}
                            <x-form.input-text name="email" label="Email Address" type="email"
                                value="{{ old('email') }}" placeholder="Enter contact email..." required />

                            {{-- Phone --}}
                            <x-form.input-text name="phone" label="Phone Number" value="{{ old('phone') }}"
                                placeholder="Enter contact phone..." />

                        </div>

                    </div>
                </div>


                {{-- Location --}}
                <div class="rounded-2xl border border-neutral-200 bg-white dark:border-neutral-800 dark:bg-neutral-900">

                    <div class="border-b border-neutral-100 p-5 dark:border-neutral-800">
                        <h2 class="text-lg font-semibold text-neutral-800 dark:text-white">
                            Location
                        </h2>
                    </div>

                    <div class="space-y-5 p-5">

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">

                            {{-- Country --}}
                            <x-form.input-text name="country" label="Country" value="{{ old('country') }}"
                                placeholder="Enter country..." />

                            {{-- State --}}
                            <x-form.input-text name="state" label="State/Province" value="{{ old('state') }}"
                                placeholder="Enter state..." />

                            {{-- City --}}
                            <x-form.input-text name="city" label="City" value="{{ old('city') }}"
                                placeholder="Enter city..." />

                        </div>

                        {{-- Address --}}
                        <x-form.textarea-input name="address" label="Full Address" rows="2"
                            placeholder="Enter full address..." />

                    </div>
                </div>


                {{-- Password & Security --}}
                <div class="rounded-2xl border border-neutral-200 bg-white dark:border-neutral-800 dark:bg-neutral-900">

                    <div class="border-b border-neutral-100 p-5 dark:border-neutral-800">
                        <h2 class="text-lg font-semibold text-neutral-800 dark:text-white">
                            Password & Security
                        </h2>
                    </div>

                    <div class="space-y-5 p-5">

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                            {{-- Password --}}
                            <x-form.input-text name="password" label="Password" type="password"
                                placeholder="Enter password..." required />

                            {{-- Confirm Password --}}
                            <x-form.input-text name="password_confirmation" label="Confirm Password" type="password"
                                placeholder="Confirm password..." required />

                        </div>

                    </div>
                </div>


                {{-- Submit --}}
                <div>
                    <button type="submit"
                        class="w-full rounded-lg bg-brand-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-brand-500">
                        Create Provider
                    </button>
                </div>

            </div>

        </div>
    </form>
@endsection