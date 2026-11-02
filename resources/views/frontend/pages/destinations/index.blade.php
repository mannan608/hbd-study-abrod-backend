
@extends('frontend.layouts.app')

@section('content')

@php
    $regions = collect($destinations)
        ->pluck('region')
        ->filter()
        ->unique()
        ->sort()
        ->values();

    // @dd($destinations)
@endphp

<div class="mt-24 bg-white">

    {{-- ================= HERO ================= --}}
    <section class="relative isolate overflow-hidden bg-brand-950">

        {{-- Background --}}
        <div
            class="absolute inset-0 -z-20 bg-cover bg-center opacity-20"
            style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=2000&q=85')"
        ></div>

        <div class="absolute inset-0 -z-10 bg-gradient-to-br from-brand-950 via-brand-900/95 to-brand-700/90"></div>

        <div class="absolute -right-40 top-0 -z-10 h-[500px] w-[500px] rounded-full bg-brand-500/25 blur-[120px]"></div>

        <div class="absolute -bottom-40 -left-40 -z-10 h-[400px] w-[400px] rounded-full bg-accent-cyan/10 blur-[100px]"></div>

        <div class="mx-auto max-w-7xl px-4 pb-28 pt-16 sm:px-6 sm:pb-36 sm:pt-20 lg:px-8 lg:pb-40 lg:pt-24">

            <div class="mx-auto max-w-4xl text-center">

                {{-- Eyebrow --}}
                <div
                    
                    class="mb-7 inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 backdrop-blur-md"
                >
                    <iconify-icon icon="lucide:sparkles" class="text-base text-accent-cyan"></iconify-icon>

                    <span class="text-xs font-semibold tracking-[0.12em] text-brand-100">
                        EXPLORE YOUR FUTURE
                    </span>
                </div>

                {{-- Heading --}}
                <h1
                    
                    class="text-3xl font-bold leading-[1.15] tracking-tight text-white sm:text-4xl lg:text-5xl"
                >
                    Your Journey.
                    <span class="text-accent-cyan">Your Destination.</span>
                </h1>

                {{-- Description --}}
                <p
                    
                    class="mx-auto mt-6 max-w-2xl text-sm leading-7 text-brand-100/80 sm:text-lg sm:leading-8"
                >
                    Discover world-class study destinations, leading universities and
                    exciting opportunities. Find the right place to build your future.
                </p>

                {{-- Search UI --}}
                <div  class="mx-auto mb-10 mt-10 max-w-3xl sm:mb-6">

                    <div class="flex flex-col gap-2 rounded-2xl border border-white/20 bg-white p-2 shadow-2xl shadow-black/20 sm:flex-row sm:items-center sm:rounded-full sm:p-2.5">

                        <div class="flex min-w-0 flex-1 items-center gap-3 px-4">

                            <iconify-icon icon="lucide:search" class="shrink-0 text-xl text-brand-500"></iconify-icon>

                            <input
                                type="search"
                                placeholder="Search country, city or university..."
                                aria-label="Search destinations"
                                class="dark:bg-dark-900 border-0 w-full h-11 bg-transparent px-4 py-2.5 text-base text-neutral-800 placeholder:text-neutral-400 focus:ring-0 focus:outline-hidden   dark:text-white/90 dark:placeholder:text-white/30 dark:disabled:bg-neutral-800/50"
                            >

                        </div>

                        <button
                            type="button"
                            class="group flex h-12 shrink-0 items-center justify-center gap-2 rounded-xl bg-brand-500 px-7 text-sm font-semibold text-white transition duration-300 hover:bg-brand-700 sm:rounded-full"
                        >
                            Explore Destinations

                            <iconify-icon
                                icon="lucide:arrow-right"
                                class="text-base transition-transform duration-300 group-hover:translate-x-1"
                            ></iconify-icon>
                        </button>

                    </div>
                </div>

                {{-- Hero Details --}}
                <div
                    
                    class="hidden flex-wrap items-center justify-center gap-x-8 gap-y-4 text-xs font-medium text-brand-100/80 sm:flex sm:text-sm"
                >

                    <div class="flex items-center gap-2">
                        <iconify-icon icon="lucide:globe-2" class="text-base text-accent-cyan"></iconify-icon>
                        Global Study Options
                    </div>

                    <div class="hidden h-4 w-px bg-white/20 sm:block"></div>

                    <div class="flex items-center gap-2">
                        <iconify-icon icon="lucide:graduation-cap" class="text-base text-accent-cyan"></iconify-icon>
                        World-Class Universities
                    </div>

                    <div class="hidden h-4 w-px bg-white/20 sm:block"></div>

                    <div class="flex items-center gap-2">
                        <iconify-icon icon="lucide:compass" class="text-base text-accent-cyan"></iconify-icon>
                        Your Future Starts Here
                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- ================= DESTINATIONS ================= --}}
    <section
        id="destinations-list"
        class="relative mx-auto -mt-30 max-w-7xl scroll-mt-6 px-4 pb-20 sm:px-6 lg:px-8"
    >

        {{-- Filter Panel UI --}}
        <div
            
            class="rounded-2xl border border-neutral-200 bg-white p-4 shadow-[0_12px_40px_rgba(6,29,52,0.07)] sm:p-6"
        >

            <div class="flex flex-col gap-5">

                <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

                    <div>

                        <div class="flex items-center gap-2">

                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-brand-50 text-brand-500">
                                <iconify-icon icon="lucide:sliders-horizontal" class="text-base"></iconify-icon>
                            </div>

                            <h2 class="text-base font-bold text-brand-950">
                                Find Your Destination
                            </h2>

                        </div>

                        <p class="mt-1 text-xs text-neutral-500">
                            Explore and compare your study options.
                        </p>

                    </div>

                    {{-- Sorting UI --}}
                    <div class="flex flex-wrap items-center gap-2">

                        <label class="inline-flex cursor-pointer items-center gap-2 rounded-xl border border-brand-500 bg-brand-50 px-4 py-2 text-xs font-medium text-brand-600">
                            <input type="radio" name="destination-sort" checked class="h-3.5 w-3.5 accent-brand-600">
                            Top Rated
                        </label>

                        <label class="inline-flex cursor-pointer items-center gap-2 rounded-xl border border-neutral-200 bg-neutral-50 px-4 py-2 text-xs font-medium text-neutral-600">
                            <input type="radio" name="destination-sort" class="h-3.5 w-3.5 accent-brand-600">
                            Most Popular
                        </label>

                    </div>

                </div>

                {{-- Region UI --}}
                <div class="border-t border-neutral-100 pt-4">

                    <p class="mb-3 text-[11px] font-medium uppercase tracking-[0.12em] text-neutral-400">
                        Browse by Region
                    </p>

                    <div class="flex gap-2 overflow-x-auto pb-1">

                        <span class="shrink-0 rounded-xl bg-brand-500 px-4 py-2 text-xs font-medium text-white">
                            All Regions
                        </span>

                        @foreach ($regions as $region)

                            <span class="shrink-0 rounded-xl border border-neutral-200 bg-white px-4 py-2 text-xs font-medium text-neutral-600">
                                {{ $region }}
                            </span>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>


        {{-- Results Heading --}}
        <div
            
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

            <p class="text-xs font-medium text-neutral-500">
                Showing
                <span class="font-semibold text-brand-950">{{ count($destinations) }}</span>
                of
                <span class="font-semibold text-brand-950">{{ count($destinations) }}</span>
                destinations
            </p>

        </div>



       {{-- ================= DESTINATION CARDS ================= --}}
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

    @forelse ($destinations as $destination)

        @include('frontend.pages.destinations.card', [
            'destination' => $destination,
        ])

    @empty

        <div class="col-span-full rounded-2xl border border-neutral-200 bg-white px-5 py-16 text-center shadow-sm">

            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-brand-50 text-brand-500">
                <iconify-icon icon="lucide:compass" class="text-4xl"></iconify-icon>
            </div>

            <h3 class="mt-5 text-xl font-bold text-brand-950">
                No Destinations Available
            </h3>

            <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-neutral-500">
                Destinations will be available soon. Please check back later.
            </p>

        </div>

    @endforelse

</div>

    </section>

</div>

@endsection
