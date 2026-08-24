@extends('frontend.layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative py-8 md:py-0 min-h-60 md:min-h-70 lg:min-h-80 flex items-center overflow-hidden -mt-4">

        <div class="absolute inset-0 z-0">
            <img src="{{ asset('frontend-img/course-page-header.jpg') }}" alt="Training" class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-linear-to-r  bg-black/70 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">

            <div class="max-w-2xl mx-auto">

                <h1 class="text-2xl font-bold tracking-tight text-white sm:text-3xl lg:text-4xl uppercase text-center">
                    explore the best events
                </h1>

            </div>
            <div class="max-w-2xl mx-auto">
                <!-- Search Box -->
                <form action="" method="GET"
                    class="mt-5 flex flex-col gap-2 rounded-2xl border border-slate-200 bg-white p-2 shadow-lg sm:mt-6 sm:flex-row">

                    <!-- Input -->
                    <div class="relative min-w-0 flex-1">

                        <!-- Search Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400 sm:h-5 sm:w-5"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true">

                            <path d="m21 21-4.34-4.34"></path>
                            <circle cx="11" cy="11" r="8"></circle>
                        </svg>

                        <input type="search" name="search" value="{{ request('search') }}"
                            placeholder="Keyword : Event Name, Location or University"
                            class="h-11 w-full rounded-xl border-0 placeholder:text-[15px] bg-transparent px-3 pl-10 text-sm text-slate-900 outline-none placeholder:text-slate-400 focus:ring-0 sm:text-base">
                    </div>

                    <!-- Actions -->
                    <div class="flex gap-2">

                        <!-- Search -->
                        <button type="submit"
                            class="inline-flex h-11 flex-1 items-center justify-center gap-2 rounded-xl bg-[#1068b2] px-5 text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-[#0d5796] active:scale-[0.98] sm:flex-none">

                            Search
                        </button>

                    </div>
                </form>
            </div>
        </div>

    </section>
    <section class="py-8 md:py-12">
        <div class="max-w-7xl mx-auto px-5 md:px-8">

            <!-- Top Navigation & Utility Controls -->
            <div
                class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 rounded-2xl bg-white p-3 shadow-xs mb-10">
                <div class="flex items-center gap-4">
                    <x-form.radio id="ongoing-events" name="event" label="Ongoing Events" value="ongoing" />

                    <x-form.radio id="upcoming-events" name="event" label="Upcoming Events" value="upcoming" />
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-2 ">
                        <span class="text-sm font-medium text-neutral-400">Sort:</span>
                        <select name="category"
                            class="rounded-lg border-none bg-neutral-50 py-1.5 pl-2 pr-7 text-sm font-semibold text-neutral-800 focus:ring-0 cursor-pointer">
                            <option value="">Category</option>

                            <option value="education">Education</option>
                            <option value="visa">Visa</option>
                            <option value="insurance">Insurance</option>
                            <option value="professional-year">Professional Year</option>
                        </select>
                    </div>
                    <!-- Sort By Select -->
                    <div class="flex items-center gap-2 ">
                        <span class="text-sm font-medium text-neutral-400">Sort:</span>
                        <select
                            class="rounded-lg border-none bg-neutral-50 py-1.5 pl-2 pr-7 text-sm font-semibold text-neutral-800 focus:ring-0 cursor-pointer">
                            <option value="relevance">HBD Services</option>
                            <option value="duration">Providers</option>
                        </select>
                    </div>
                </div>

            </div>

            {{-- event Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                @for ($i = 0; $i < 2; $i++)
                    <a href="{{ route('event-details') }}"
                        class="flex shrink-0 items-start gap-4 rounded-2xl border border-slate-200/80 bg-white p-5 shadow-sm transition-all duration-300 hover:border-slate-300 hover:shadow-md">

                        @include('frontend.pages.events.event-card')
                    </a>
                @endfor

            </div>
        </div>
    </section>
@endsection
