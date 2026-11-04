@extends('frontend.layouts.app')

@section('title', 'Events')

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
               

            </div>
            <!-- EVENTS GRID CONTAINER -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                @forelse ($events as $event)
                    @include('frontend.pages.events.event-card', ['event' => $event])
                @empty
                    <div class="col-span-full py-16 px-4">
                        <div
                            class="mx-auto max-w-md text-center flex flex-col items-center justify-center p-8 sm:p-10 rounded-3xl bg-slate-50/70 border border-dashed border-slate-200/80 shadow-sm">

                            {{-- Icon Container with Layered Ring Effect --}}
                            <div
                                class="relative mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-50 text-[#1968b2] ring-8 ring-blue-50/50 shadow-inner">
                                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                            </div>

                            {{-- Text Content --}}
                            <h3 class="text-lg font-bold text-[#05275e]">No Events Found</h3>
                            <p class="mt-1.5 text-sm leading-relaxed text-slate-500 max-w-xs">
                                There are currently no upcoming events available. Please check back later or try clearing
                                your filters.
                            </p>

                            {{-- Action Button (Optional) --}}
                            <div class="mt-6">
                                <button type="button"
                                    class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2 text-xs font-bold text-[#1968b2] shadow-sm transition-all duration-300 hover:border-blue-200 hover:bg-blue-50 hover:shadow-md focus:outline-none">
                                    <iconify-icon icon="lucide:rotate-ccw" class="text-sm"></iconify-icon>
                                    <span>Reset Filters</span>
                                </button>
                            </div>

                        </div>
                    </div>
                @endforelse

            </div>

            <!-- PAGINATION CONTAINER -->
            @if ($events->hasPages())
                <div class="mt-12 pt-6 border-t border-slate-100 flex items-center justify-center">
                    <div class="w-full max-w-lg">
                        {{ $events->links() }}
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
