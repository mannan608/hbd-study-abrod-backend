
@props([
    'eyebrow' => 'OUR PARTNER INSTITUTIONS',
    'title' => 'Popular UK Universities',
    'description' => 'Explore leading universities across the United Kingdom and discover institutions offering internationally recognised qualifications',
    'universities' => [],
    'viewAllUrl' => '#universities',
])

@php
    // Dummy data - used when no universities are passed
    $universities = !empty($universities) ? $universities : [
        [
            'id' => 1,
            'name' => 'University of Manchester',
            'short_name' => 'UM',
            'city' => 'Manchester, England',
            'type' => 'Research University',
            'badge' => 'POPULAR CHOICE',
            'logo' => 'frontend-img/destinations/australia.webp',
            'description' => 'Explore a wide range of undergraduate and postgraduate study opportunities.',
            'url' => '#',
        ],
        [
            'id' => 2,
            'name' => 'University of Birmingham',
            'short_name' => 'UB',
            'city' => 'Birmingham, England',
            'type' => 'Research University',
            'badge' => null,
            'logo' => 'frontend-img/destinations/canada.webp',
            'description' => 'Discover diverse academic programmes and a vibrant university environment.',
            'url' => '#',
        ],
        [
            'id' => 3,
            'name' => 'University of Leeds',
            'short_name' => 'UL',
            'city' => 'Leeds, England',
            'type' => 'Research University',
            'badge' => null,
            'logo' => 'frontend-img/destinations/malaysia.webp',
            'description' => 'Explore academic opportunities across a broad range of disciplines.',
            'url' => '#',
        ],
    ];
@endphp

<section class="relative overflow-hidden bg-slate-50/60 py-16 sm:py-20 lg:py-24">

    {{-- Background Decorations --}}
    <div class="pointer-events-none absolute -right-40 -top-40 h-96 w-96 rounded-full bg-brand-100/50 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-sky-100/50 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mb-12 flex flex-col justify-between gap-6 lg:flex-row lg:items-end">

            <div class="max-w-3xl">

                <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-brand-100 bg-white px-4 py-2 shadow-sm">

                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-brand-400 opacity-50"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-brand-600"></span>
                    </span>

                    <span class="text-[11px] font-bold tracking-[0.16em] text-brand-700">
                        {{ $eyebrow }}
                    </span>

                </div>

                <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                    {{ $title }}<span class="text-brand-600">.</span>
                </h2>

                <p class="mt-5 max-w-2xl text-sm leading-7 text-slate-600 sm:text-base sm:leading-8">
                    {{ $description }}
                </p>

            </div>

            <a href="{{ $viewAllUrl }}"
               class="inline-flex w-fit shrink-0 items-center gap-3 rounded-xl border border-slate-200 bg-white px-5 py-3.5 text-sm font-bold text-slate-700 shadow-sm transition-all duration-300 hover:border-brand-600 hover:bg-brand-600 hover:text-white">

                View All Universities

                <iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon>

            </a>

        </div>


        {{-- University Cards --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @forelse ($universities as $university)

                <article
                    class="group flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200/80 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl hover:shadow-brand-900/5">

                    {{-- Logo Area --}}
                    <div class="relative flex h-48 items-center justify-center overflow-hidden bg-gradient-to-br from-slate-50 to-brand-50/70 p-8">

                        {{-- Decorative Circle --}}
                        <div class="absolute -right-12 -top-16 h-48 w-48 rounded-full bg-brand-100/50 transition-transform duration-500 group-hover:scale-125"></div>

                        <div class="absolute -bottom-16 -left-12 h-36 w-36 rounded-full bg-sky-100/50"></div>

                        {{-- University Logo --}}
                        @if (!empty($university['logo']))

                            <img
                                src="{{ \Illuminate\Support\Str::startsWith($university['logo'], ['http://', 'https://']) ? $university['logo'] : asset($university['logo']) }}"
                                alt="{{ $university['name'] }} logo"
                                loading="lazy"
                                class="relative z-10 h-24 max-w-[210px] object-contain transition-transform duration-500 group-hover:scale-110"
                            >

                        @else

                            <div class="relative z-10 flex h-20 w-20 items-center justify-center rounded-2xl bg-[#05275e] text-2xl font-extrabold text-white shadow-lg">
                                {{ $university['short_name'] ?? 'UK' }}
                            </div>

                        @endif

                        {{-- Popular Badge --}}
                        @if (!empty($university['badge']))

                            <span class="absolute right-4 top-4 z-20 inline-flex items-center gap-1.5 rounded-full border border-brand-100 bg-white px-3 py-1.5 text-[10px] font-extrabold tracking-wider text-brand-700 shadow-sm">

                                <iconify-icon icon="lucide:star" class="text-xs"></iconify-icon>

                                {{ $university['badge'] }}

                            </span>

                        @endif

                    </div>


                    {{-- University Information --}}
                    <div class="flex flex-1 flex-col p-6">

                        {{-- Location --}}
                        <div class="flex items-center gap-2 text-xs font-semibold text-slate-500">

                            <iconify-icon icon="lucide:map-pin" class="text-base text-brand-600"></iconify-icon>

                            {{ $university['city'] ?? 'United Kingdom' }}

                        </div>


                        {{-- University Name --}}
                        <h3 class="mt-3 text-xl font-extrabold leading-snug text-slate-900 transition-colors duration-300 group-hover:text-brand-700">

                            {{ $university['name'] }}

                        </h3>


                        {{-- Description --}}
                        <p class="mt-3 min-h-[72px] text-sm leading-6 text-slate-500">

                            {{ $university['description'] ?? 'Discover academic programmes and educational opportunities at this UK institution.' }}

                        </p>


                        {{-- University Type --}}
                        @if (!empty($university['type']))

                            <div class="mt-5">

                                <span class="inline-flex items-center gap-2 rounded-lg bg-brand-50 px-3 py-2 text-xs font-bold text-brand-700">

                                    <iconify-icon icon="lucide:graduation-cap" class="text-sm"></iconify-icon>

                                    {{ $university['type'] }}

                                </span>

                            </div>

                        @endif


                        {{-- Explore University --}}
                        <div class="mt-auto border-t border-slate-100 pt-5 mt-6">

                            <a
                                href="{{ $university['url'] ?? '#' }}"
                                class="inline-flex w-full items-center justify-between text-sm font-bold text-slate-700 transition-colors duration-300 hover:text-brand-600">

                                Explore University

                                <span class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 text-slate-600 transition-all duration-300 group-hover:border-brand-600 group-hover:bg-brand-600 group-hover:text-white">

                                    <iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon>

                                </span>

                            </a>

                        </div>

                    </div>

                </article>

            @empty

                {{-- Empty State --}}
                <div class="col-span-full rounded-2xl border border-dashed border-slate-300 bg-white px-6 py-16 text-center">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-brand-50 text-brand-600">

                        <iconify-icon icon="lucide:graduation-cap" class="text-3xl"></iconify-icon>

                    </div>

                    <h3 class="mt-5 text-lg font-extrabold text-slate-900">
                        Universities Coming Soon
                    </h3>

                    <p class="mt-2 text-sm text-slate-500">
                        University information will be available shortly.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>
