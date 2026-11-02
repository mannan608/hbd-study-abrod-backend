
@extends('frontend.layouts.app')

@section('content')

<div
    x-data="destinationExplorer(
        @js(array_values($destinations)),
        @js($destinationUrl),
        @js(asset(''))
    )"
    class="min-h-screen bg-white"
>

    {{-- =========================================
         HERO SECTION
    ========================================== --}}
    <section class="relative isolate overflow-hidden bg-brand-950">

        <div
            class="absolute inset-0 -z-20 bg-cover bg-center opacity-20"
            style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=2000&q=85')"
        ></div>

        <div class="absolute inset-0 -z-10 bg-gradient-to-br from-brand-950 via-brand-900/95 to-brand-700/90"></div>

        <div class="absolute -right-40 top-0 -z-10 h-[500px] w-[500px] rounded-full bg-brand-500/25 blur-[120px]"></div>

        <div class="absolute -bottom-40 -left-40 -z-10 h-[400px] w-[400px] rounded-full bg-accent-cyan/10 blur-[100px]"></div>

        <div class="mx-auto max-w-7xl px-4 pb-28 pt-16 sm:px-6 sm:pb-36 lg:px-8 lg:pb-40 lg:pt-20">

            <div class="mx-auto max-w-4xl text-center">

                {{-- Eyebrow --}}
                <div
                    data-reveal
                    class="mb-7 inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 backdrop-blur-md"
                >
                    <i class="fa-solid fa-sparkles text-accent-cyan"></i>

                    <span class="text-xs font-semibold tracking-[0.12em] text-brand-100">
                        EXPLORE YOUR FUTURE
                    </span>
                </div>

                {{-- Heading --}}
                <h1
                    data-reveal
                    class="text-3xl font-bold leading-[1.15] tracking-tight text-white sm:text-4xl lg:text-5xl"
                >
                    Your Journey.
                    <span class="text-accent-cyan">
                        Your Destination.
                    </span>
                </h1>

                {{-- Description --}}
                <p
                    data-reveal
                    class="mx-auto mt-6 max-w-2xl text-sm leading-7 text-brand-100/80 sm:text-lg sm:leading-8"
                >
                    Discover world-class study destinations, leading universities
                    and exciting opportunities. Find the right place to build your future.
                </p>

                {{-- Search --}}
                <div
                    data-reveal
                    class="mx-auto mt-10 max-w-3xl"
                >
                    <div class="flex flex-col gap-2 rounded-2xl border border-white/20 bg-white p-2 shadow-2xl sm:flex-row sm:items-center sm:rounded-full sm:p-2.5">

                        <div class="flex min-w-0 flex-1 items-center gap-3 px-4">

                            <i class="fa-solid fa-magnifying-glass shrink-0 text-xl text-brand-500"></i>

                            <input
                                type="search"
                                x-model.debounce.200ms="searchTerm"
                                @keydown.enter.prevent="scrollToList()"
                                placeholder="Search country, region or university..."
                                aria-label="Search destinations"
                                class="h-12 w-full min-w-0 bg-transparent text-sm font-medium text-neutral-900 outline-none placeholder:text-neutral-400 sm:text-base"
                            >

                            <button
                                type="button"
                                x-cloak
                                x-show="searchTerm.length > 0"
                                @click="searchTerm = ''"
                                aria-label="Clear search"
                                class="rounded-full p-1 text-neutral-500 hover:bg-neutral-100"
                            >
                                <i class="fa-solid fa-xmark"></i>
                            </button>

                        </div>

                        <button
                            type="button"
                            @click="scrollToList()"
                            class="group flex h-12 shrink-0 items-center justify-center gap-2 rounded-xl bg-brand-500 px-7 text-sm font-semibold text-white transition hover:bg-brand-700 active:scale-95 sm:rounded-full"
                        >
                            Explore Destinations

                            <i class="fa-solid fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </button>

                    </div>
                </div>

                {{-- Hero Details --}}
                <div
                    data-reveal
                    class="mt-10 hidden flex-wrap items-center justify-center gap-x-8 gap-y-4 text-xs font-medium text-brand-100/80 sm:flex sm:text-sm"
                >

                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-earth-americas text-accent-cyan"></i>
                        Global Study Options
                    </div>

                    <div class="h-4 w-px bg-white/20"></div>

                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-graduation-cap text-accent-cyan"></i>
                        World-Class Universities
                    </div>

                    <div class="h-4 w-px bg-white/20"></div>

                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-compass text-accent-cyan"></i>
                        Your Future Starts Here
                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- =========================================
         FILTERS + RESULTS
    ========================================== --}}
    <section
        id="destinations-list"
        class="relative mx-auto -mt-24 max-w-7xl scroll-mt-8 px-4 pb-20 sm:px-6 lg:-mt-30 lg:px-8"
    >

        {{-- Filter Panel --}}
        <div
            data-reveal
            class="rounded-2xl border border-neutral-200 bg-white p-4 shadow-[0_12px_40px_rgba(6,29,52,0.07)] sm:p-6"
        >

            <div class="flex flex-col gap-5">

                {{-- Header --}}
                <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

                    <div>

                        <div class="flex items-center gap-2">

                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-brand-50 text-brand-500">
                                <i class="fa-solid fa-sliders"></i>
                            </div>

                            <h2 class="text-base font-bold text-brand-950">
                                Find Your Destination
                            </h2>

                        </div>

                        <p class="mt-1 text-xs text-neutral-500">
                            Explore and compare your study options.
                        </p>

                    </div>

                    {{-- Sorting --}}
                    <div class="flex flex-wrap items-center gap-2">

                        <span class="mr-1 text-xs font-medium text-neutral-500">
                            Sort by:
                        </span>

                        <template x-for="option in sortOptions" :key="option.value">

                            <label
                                class="inline-flex cursor-pointer items-center gap-2 rounded-xl border px-4 py-2 text-xs font-medium transition"
                                :class="sortBy === option.value
                                    ? 'border-brand-500 bg-brand-50 text-brand-600'
                                    : 'border-neutral-200 bg-neutral-50 text-neutral-600 hover:border-neutral-300'"
                            >

                                <input
                                    type="radio"
                                    name="destination-sort"
                                    :value="option.value"
                                    x-model="sortBy"
                                    class="h-3.5 w-3.5 accent-brand-600"
                                >

                                <span x-text="option.label"></span>

                            </label>

                        </template>

                    </div>

                </div>


                {{-- Country & Region Filters --}}
                <div class="grid grid-cols-1 gap-4 border-t border-neutral-100 pt-5 sm:grid-cols-2">

                    {{-- Country --}}
                    <div>

                        <label class="mb-2 block text-xs font-semibold uppercase tracking-wide text-neutral-500">
                            <i class="fa-solid fa-globe mr-1 text-brand-500"></i>
                            Select Country
                        </label>

                        <select
                            :value="selectedCountry"
                            @change="changeCountry($event.target.value)"
                            class="h-11 w-full rounded-xl border border-neutral-200 bg-white px-4 text-sm font-medium text-neutral-700 outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/10"
                        >

                            <template x-for="country in countryOptions" :key="country">

                                <option
                                    :value="country"
                                    x-text="country === 'All' ? 'All Countries' : country"
                                ></option>

                            </template>

                        </select>

                    </div>


                    {{-- Region --}}
                    <div>

                        <label class="mb-2 block text-xs font-semibold uppercase tracking-wide text-neutral-500">
                            <i class="fa-solid fa-map-location-dot mr-1 text-brand-500"></i>
                            Select Region
                        </label>

                        <select
                            x-model="selectedRegion"
                            class="h-11 w-full rounded-xl border border-neutral-200 bg-white px-4 text-sm font-medium text-neutral-700 outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/10"
                        >

                            <template x-for="region in regionOptions" :key="region">

                                <option
                                    :value="region"
                                    x-text="region === 'All' ? 'All Regions' : region"
                                ></option>

                            </template>

                        </select>

                    </div>

                </div>


                {{-- Active Filters / Reset --}}
                <div class="flex flex-wrap items-center justify-between gap-3 border-t border-neutral-100 pt-4">

                    <p class="text-xs text-neutral-500">

                        <span class="font-semibold text-brand-600" x-text="filteredDestinations.length"></span>

                        matching destinations found

                    </p>

                    <button
                        type="button"
                        x-cloak
                        x-show="hasActiveFilters"
                        @click="resetFilters()"
                        class="inline-flex items-center gap-2 rounded-lg px-3 py-2 text-xs font-semibold text-red-500 transition hover:bg-red-50"
                    >

                        <i class="fa-solid fa-rotate-left"></i>

                        Reset Filters

                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================
             RESULTS HEADING
        ========================================== --}}
        <div
            data-reveal
            class="mb-6 mt-10 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between"
        >

            <div>

                <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.15em] text-brand-600">

                    <span class="h-2 w-2 rounded-full bg-accent-cyan"></span>

                    EXPLORE THE WORLD

                </div>

                <h2 class="mt-2 text-2xl font-bold tracking-tight text-brand-950 sm:text-3xl">

                    Popular Destinations

                </h2>

                <p class="mt-2 text-sm text-neutral-500">

                    Find the perfect destination for your education.

                </p>

            </div>


            {{-- Results Count --}}
            <p
                class="text-xs font-medium text-neutral-500"
                aria-live="polite"
                aria-atomic="true"
            >

                Showing

                <span
                    class="font-semibold text-brand-950"
                    x-text="filteredDestinations.length"
                ></span>

                of

                <span
                    class="font-semibold text-brand-950"
                    x-text="destinations.length"
                ></span>

                destinations

            </p>

        </div>


        {{-- =========================================
             DESTINATION CARDS
        ========================================== --}}
        <div
            class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3"
        >

            <template
                x-for="destination in filteredDestinations"
                :key="destination.id"
            >

                @include('frontend.pages.destinations.card')

            </template>

        </div>


        {{-- =========================================
             EMPTY STATE
        ========================================== --}}
        <div
            x-cloak
            x-show="filteredDestinations.length === 0"
            x-transition.opacity.duration.300ms
            class="py-20 text-center"
        >

            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-3xl bg-brand-50 text-brand-400">

                <i class="fa-solid fa-earth-americas text-3xl"></i>

            </div>

            <h3 class="mt-6 text-xl font-bold text-brand-950">

                No destinations found

            </h3>

            <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-neutral-500">

                We couldn't find any destinations matching your search.
                Try changing your country, region or search keywords.

            </p>

            <button
                type="button"
                @click="resetFilters()"
                class="mt-6 inline-flex items-center gap-2 rounded-xl bg-brand-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-700"
            >

                <i class="fa-solid fa-rotate-left"></i>

                Clear All Filters

            </button>

        </div>

    </section>

</div>

@endsection


{{-- =========================================
     REVEAL ANIMATION STYLES
========================================== --}}
@push('styles')

<style>
    [x-cloak] {
        display: none !important;
    }

    [data-reveal] {
        opacity: 0;
        transform: translateY(22px);
        transition:
            opacity 650ms ease,
            transform 650ms cubic-bezier(0.2, 0.65, 0.3, 1);
        transition-delay: var(--reveal-delay, 0ms);
    }

    [data-reveal].is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    @media (prefers-reduced-motion: reduce) {
        [data-reveal] {
            opacity: 1;
            transform: none;
            transition: none;
        }

        html {
            scroll-behavior: auto;
        }
    }
</style>

@endpush
