@extends('frontend.layouts.app')

@section('content')
@php
    $destination = array_merge([
        'name' => 'United Kingdom',
        'code' => 'UK',
        'flag' => '🇬🇧',
        'image' => 'frontend-img/destinations/uk.webp',
        'avgCost' => '£12,000 – £26,000 /yr',
        'visaProcessing' => '3–4 Weeks',
        'rating' => '4.9',
        'reviewsCount' => 1280,
        'region' => 'Europe',
        'hero' => [
            'badge' => 'Study in the United Kingdom',
            'title' => 'World-Class Education & Global Career in',
            'description' => 'Experience academic excellence at prestigious world-ranking universities, high-value one-year Master’s programs, generous scholarship schemes, and unmatched post-study work opportunities.',
            'features' => [
                'World-Renowned Russell Group Institutions',
                'Fast-Track 1-Year Master’s Programs',
                'Post-Study Graduate Work Route (2 Years)',
                'Merit & Need-Based Scholarships Available',
            ],
        ],
    ], $destination ?? []);

    $sections = [
        ['id' => 'overview', 'label' => 'Overview'],
        ['id' => 'why-choose', 'label' => 'Why Choose'],
        ['id' => 'courses', 'label' => 'Popular Courses'],
        ['id' => 'study-levels', 'label' => 'Study Levels'],
        ['id' => 'universities', 'label' => 'Universities'],
        ['id' => 'requirements', 'label' => 'Entry Requirements'],
        ['id' => 'costs', 'label' => 'Living Costs & Aid'],
        ['id' => 'process', 'label' => 'How We Work'],
        ['id' => 'faq', 'label' => 'FAQs'],
    ];
@endphp

<main class="min-h-screen bg-white"
      x-data="destinationPage()"
      x-init="init()">

    {{-- =========================================================
         HERO SECTION: Destination Key Metrics & Snapshot
    ========================================================== --}}
    <header class="relative isolate overflow-hidden bg-brand-950 text-white">
        {{-- Background layers --}}
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <img src="{{ asset($destination['image'] ?? 'frontend-img/destinations/default.webp') }}"
                 alt="{{ $destination['name'] }}"
                 class="h-full w-full object-cover opacity-15"
                 onerror="this.style.display='none'">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-950 via-brand-950/95 to-brand-900/80"></div>
            <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-brand-500/10 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-sky/10 blur-3xl"></div>
        </div>

        <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-12 lg:gap-12 lg:px-8 lg:py-20">
            {{-- Left column: Headline, summary, features, and CTAs --}}
            <div class="lg:col-span-7" data-reveal>
                <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-brand-400/30 bg-brand-500/15 px-4 py-1.5 text-[12px] font-semibold uppercase tracking-[0.16em] text-brand-200 backdrop-blur-sm">
                    <iconify-icon icon="lucide:graduation-cap" class="text-base text-brand-300"></iconify-icon>
                    <span>{{ $destination['hero']['badge'] ?? ('Study in ' . $destination['name']) }}</span>
                </div>

                <h1 class="max-w-3xl text-[36px] font-bold leading-[1.15] tracking-tight text-white sm:text-[42px] lg:text-[48px]">
                    {{ $destination['hero']['title'] }}
                    <span class="text-brand-300">{{ $destination['name'] }}</span>
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-7 text-brand-100/80 sm:text-lg sm:leading-8">
                    {{ $destination['hero']['description'] }}
                </p>

                @if (!empty($destination['hero']['features']))
                    <div class="mt-8 grid gap-3 sm:grid-cols-2">
                        @foreach ($destination['hero']['features'] as $feature)
                            <div class="flex items-center gap-2.5 text-sm font-medium text-white/90">
                                <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-accent-green/20 text-accent-green">
                                    <iconify-icon icon="lucide:check" class="text-xs"></iconify-icon>
                                </span>
                                <span>{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="mt-10 flex flex-wrap items-center gap-4">
                    <a href="#contact"
                       class="inline-flex items-center gap-2 rounded-xl bg-brand-500 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600">
                        <span>Get Free Consultation</span>
                        <iconify-icon icon="lucide:arrow-up-right" class="text-base"></iconify-icon>
                    </a>
                    <a href="#universities"
                       class="inline-flex items-center gap-2 rounded-xl border border-white/20 bg-white/10 px-6 py-3.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-300 hover:bg-white/15">
                        <span>Explore Universities</span>
                        <iconify-icon icon="lucide:graduation-cap" class="text-base"></iconify-icon>
                    </a>
                </div>
            </div>

            {{-- Right column: Hero summary snapshot card --}}
            <div class="lg:col-span-5" data-reveal style="--reveal-delay: 150ms">
                <div class="rounded-2xl border border-white/15 bg-white/10 p-6 shadow-2xl backdrop-blur-xl sm:p-8">
                    <div class="flex items-center justify-between border-b border-white/10 pb-5">
                        <div>
                            <p class="text-[12px] font-semibold uppercase tracking-[0.16em] text-brand-200">Destination snapshot</p>
                            <h2 class="mt-1.5 text-2xl font-bold text-white">{{ $destination['name'] }}</h2>
                        </div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/10 text-3xl">
                            {{ $destination['flag'] ?? '🌍' }}
                        </span>
                    </div>

                    <div class="grid grid-cols-2 gap-4 py-6">
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <p class="text-xs font-medium text-brand-200">Average tuition</p>
                            <p class="mt-1.5 text-base font-bold text-white">{{ $destination['avgCost'] }}</p>
                        </div>
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <p class="text-xs font-medium text-brand-200">Visa processing</p>
                            <p class="mt-1.5 text-base font-bold text-white">{{ $destination['visaProcessing'] }}</p>
                        </div>
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <p class="text-xs font-medium text-brand-200">Student rating</p>
                            <p class="mt-1.5 flex items-center gap-1.5 text-base font-bold text-white">
                                <iconify-icon icon="lucide:star" class="text-amber-400"></iconify-icon>
                                <span>{{ $destination['rating'] }}</span>
                                <span class="text-xs font-normal text-white/60">({{ number_format($destination['reviewsCount']) }})</span>
                            </p>
                        </div>
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <p class="text-xs font-medium text-brand-200">Region</p>
                            <p class="mt-1.5 text-base font-bold text-white">{{ $destination['region'] }}</p>
                        </div>
                    </div>

                    <div class="rounded-xl border border-brand-100 bg-white p-5 text-black">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600">
                                <iconify-icon icon="lucide:headset" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-black">Need expert guidance?</p>
                                <p class="mt-0.5 text-xs text-black/60">Talk directly to our study counsellors.</p>
                            </div>
                        </div>
                        <a href="#contact"
                           class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-brand-500 px-4 py-3 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:bg-brand-600">
                            <span>Talk to an Advisor</span>
                            <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- =========================================================
         STICKY SECTION NAVIGATION
    ========================================================== --}}
    <nav class="sticky top-30 z-40 border-b border-brand-100 bg-white/95 shadow-sm backdrop-blur-md"
         aria-label="Destination sections">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="-mb-px flex gap-1.5 overflow-x-auto py-2.5 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                @foreach ($sections as $section)
                    <a href="#{{ $section['id'] }}"
                       @click="activeSection = '{{ $section['id'] }}'"
                       :class="activeSection === '{{ $section['id'] }}'
                                ? 'bg-brand-500 text-white shadow-sm'
                                : 'text-black/70 hover:bg-brand-50 hover:text-brand-600'"
                       class="shrink-0 rounded-xl px-4 py-2 text-xs font-semibold transition-all duration-200 sm:text-sm">
                        {{ $section['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    {{-- =========================================================
         ALL DESTINATION SECTIONS (Alternating Rhythm)
    ========================================================== --}}
    <div class="relative">
        {{-- Section 1: Overview & Cities (bg-white) --}}
        @include('frontend.pages.destinations.details-section.overview', ['destination' => $destination])

        {{-- Section 2: Why Choose & Benefits (bg-brand-25) --}}
        @include('frontend.pages.destinations.details-section.why-uk', ['destination' => $destination])

        {{-- Section 3: Popular Courses (bg-white) --}}
        @include('frontend.pages.destinations.details-section.course-section', ['destination' => $destination])

        {{-- Section 4: Academic Study Levels (bg-brand-25) --}}
        @include('frontend.pages.destinations.details-section.study-label', ['destination' => $destination])

        {{-- Section 5: Universities (bg-white) --}}
        @include('frontend.pages.destinations.details-section.universities', ['destination' => $destination])

        {{-- Section 6: Entry Requirements & Roadmap (bg-brand-25) --}}
        @include('frontend.pages.destinations.details-section.requirements', ['destination' => $destination])

        {{-- Section 7: Living Costs & Scholarships (bg-white) --}}
        @include('frontend.pages.destinations.details-section.cost-schollership', ['destination' => $destination])

        {{-- Section 8: How We Work / Process (bg-brand-25) --}}
        @include('frontend.pages.destinations.details-section.how-we-work', ['destination' => $destination])

        {{-- Section 9: FAQ & Help Desk (bg-white) --}}
        @include('frontend.pages.destinations.details-section.faq', ['destination' => $destination])
    </div>
</main>

@push('scripts')
    <noscript>
        <style>
            [data-reveal] {
                opacity: 1 !important;
                transform: none !important;
            }
        </style>
    </noscript>
    <script>
        function destinationPage() {
            return {
                activeSection: 'overview',
                observer: null,
                init() {
                    const sections = document.querySelectorAll('[data-section]');
                    if (!('IntersectionObserver' in window)) return;

                    this.observer = new IntersectionObserver((entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                this.activeSection = entry.target.id;
                            }
                        });
                    }, {
                        rootMargin: '-20% 0px -60% 0px',
                        threshold: 0
                    });

                    sections.forEach((section) => this.observer.observe(section));
                }
            }
        }
    </script>
@endpush
@endsection
