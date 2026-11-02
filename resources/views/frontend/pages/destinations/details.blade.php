@extends('frontend.layouts.app')

@section('content')
@php
    $sections = [
        ['id' => 'overview', 'label' => 'Overview'],
        ['id' => 'facts', 'label' => 'Quick Facts'],
        ['id' => 'why', 'label' => 'Why Choose'],
        ['id' => 'highlights', 'label' => 'Highlights'],
        ['id' => 'universities', 'label' => 'Universities'],
        ['id' => 'visa', 'label' => 'Visa Guide'],
        ['id' => 'costs', 'label' => 'Living Costs'],
        ['id' => 'work', 'label' => 'Work Rights'],
        ['id' => 'scholarships', 'label' => 'Scholarships'],
        ['id' => 'faq', 'label' => 'FAQs'],
    ];
@endphp

<main class=""
      x-data="destinationPage()"
      x-init="init()">

    {{-- HERO: destination image and key information --}}
    <header class="relative isolate overflow-hidden bg-[#0B1D36] text-white">
        <div class="absolute inset-0 -z-10">
            <img src="{{ asset($destination['image'] ?? 'frontend-img/destinations/default.webp') }}"
                 alt="{{ $destination['name'] }}"
                 class="h-full w-full object-cover opacity-20"
                 onerror="this.style.display='none'">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0B1D36] via-[#0B1D36]/95 to-[#0B1D36]/65"></div>
            <div class="absolute -right-24 -top-24 h-96 w-96 rounded-full border border-white/10"></div>
            <div class="absolute -right-8 -top-8 h-64 w-64 rounded-full border border-white/10"></div>
        </div>

        <div class="mx-auto grid max-w-7xl items-center gap-10 px-4 py-12 sm:px-6 lg:grid-cols-12 lg:gap-8 lg:px-8 lg:py-16">
            <div class="lg:col-span-7">
               

                <div class="mb-5">
                    <span class="inline-flex items-center gap-2 rounded-full border border-brand-400/20 bg-brand-400/10 px-4 py-2 text-xs font-bold uppercase tracking-wider text-brand-200">
                        <iconify-icon icon="lucide:graduation-cap" class="text-base"></iconify-icon>
                        {{ $destination['hero']['badge'] ?? ('Study in ' . $destination['name']) }}
                    </span>
                </div>

                <h1 class="max-w-3xl text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-[56px]">
                    {{ $destination['hero']['title'] }}
                    <span class="text-brand-300">{{ $destination['name'] }}</span>
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-300 sm:text-lg">
                    {{ $destination['hero']['description'] }}
                </p>

                @if (!empty($destination['hero']['features']))
                    <div class="mt-8 grid gap-3 sm:grid-cols-2">
                        @foreach ($destination['hero']['features'] as $feature)
                            <div class="flex items-center gap-2 text-sm font-medium text-slate-200">
                                <iconify-icon icon="lucide:check-circle-2" class="text-lg text-brand-300"></iconify-icon>
                                {{ $feature }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="mt-9 flex flex-wrap gap-3">
                    <a href="#contact" class="inline-flex items-center gap-2 rounded-xl bg-brand-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-brand-600/20 transition hover:-translate-y-0.5 hover:bg-brand-700">
                        Get Free Consultation
                        <iconify-icon icon="lucide:arrow-up-right" class="text-base"></iconify-icon>
                    </a>
                    <a href="#universities" class="inline-flex items-center gap-2 rounded-xl border border-white/20 bg-white/10 px-6 py-3.5 text-sm font-bold text-white transition hover:bg-white/15">
                        Explore Universities
                        <iconify-icon icon="lucide:graduation-cap" class="text-base"></iconify-icon>
                    </a>
                </div>
            </div>

            {{-- Hero summary panel --}}
            <div class="lg:col-span-5">
                <div class="rounded-3xl border border-white/15 bg-white/10 p-6 shadow-2xl backdrop-blur-xl sm:p-8">
                    <div class="flex items-center justify-between border-b border-white/10 pb-5">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-200">Destination snapshot</p>
                            <h2 class="mt-2 text-2xl font-bold text-white">{{ $destination['name'] }}</h2>
                        </div>
                        <span class="rounded-2xl bg-white/10 px-3 py-2 text-3xl">
                            {{ $destination['flag'] ?? '🌍' }}
                        </span>
                    </div>
                    <div class="grid grid-cols-2 gap-5 py-6">
                        <div>
                            <p class="text-xs text-slate-400">Average tuition</p>
                            <p class="mt-2 text-lg font-bold text-white">{{ $destination['avgCost'] ?? 'Check by course' }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Visa processing</p>
                            <p class="mt-2 text-lg font-bold text-white">{{ $destination['visaProcessing'] ?? 'Varies' }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Student rating</p>
                            <p class="mt-2 flex items-center gap-1 text-lg font-bold text-white">
                                <iconify-icon icon="lucide:star" class="text-amber-400"></iconify-icon>
                                {{ $destination['rating'] ?? '—' }}
                                <span class="text-xs font-normal text-slate-400">({{ number_format($destination['reviewsCount'] ?? 0) }} reviews)</span>
                            </p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Region</p>
                            <p class="mt-2 text-lg font-bold text-white">{{ $destination['region'] ?? 'International' }}</p>
                        </div>
                    </div>
                    <div class="rounded-2xl bg-white p-5 text-[#0B1D36]">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                <iconify-icon icon="lucide:headset" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <p class="font-bold">Need expert guidance?</p>
                                <p class="mt-0.5 text-xs text-slate-500">Talk to our study counsellors.</p>
                            </div>
                        </div>
                        <a href="#contact" class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-[#0B1D36] px-4 py-3 text-sm font-bold text-white transition hover:bg-brand-700">
                            Talk to an Advisor
                            <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- STICKY SECTION NAVIGATION --}}
    <nav class="sticky top-29 z-40 border-b border-slate-200 bg-white/95 shadow-sm backdrop-blur"
         aria-label="Destination sections">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="-mb-px flex gap-1 overflow-x-auto py-2 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                @foreach ($sections as $section)
                    <a href="#{{ $section['id'] }}"
                       @click="activeSection = '{{ $section['id'] }}'"
                       :class="activeSection === '{{ $section['id'] }}' ? 'bg-brand-50 text-brand-700' : 'text-slate-500 hover:bg-slate-50 hover:text-[#0B1D36]'"
                       class="shrink-0 rounded-lg px-4 py-2.5 text-xs font-bold transition sm:text-sm">
                        {{ $section['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    <div class="">
        @include('frontend.pages.destinations.details-section.overview')
        @include('frontend.pages.destinations.details-section.glance')
        @include('frontend.pages.destinations.details-section.course-section')
        @include('frontend.pages.destinations.details-section.study-label')
        @include('frontend.pages.destinations.details-section.universities')
        @include('frontend.pages.destinations.details-section.requirements')
        @include('frontend.pages.destinations.details-section.cost-schollership')
        @include('frontend.pages.destinations.details-section.how-we-work')
        {{-- @include('frontend.pages.destinations.details-section.common') --}}
    </div>
</main>

{{-- Alpine.js, Alpine Collapse, Alpine Intersect and Iconify --}}
@push('scripts')

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
                        rootMargin: '-25% 0px -65% 0px',
                        threshold: 0
                    });

                    sections.forEach((section) => this.observer.observe(section));

                    const revealObserver = new IntersectionObserver((entries, observer) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('is-visible');
                                observer.unobserve(entry.target);
                            }
                        });
                    }, { threshold: 0.12, rootMargin: '0px 0px -35px 0px' });

                    document.querySelectorAll('[data-reveal]').forEach((element) => {
                        revealObserver.observe(element);
                    });
                }
            }
        }
    </script>
        <noscript>
        <style>
            [data-reveal] {
                opacity: 1 !important;
                transform: none !important;
            }
        </style>
    </noscript>

    <script>
        (function () {
            var nodes = document.querySelectorAll('[data-reveal]');

            if (!nodes.length) {
                return;
            }

            if (!('IntersectionObserver' in window)) {
                nodes.forEach(function (node) {
                    node.classList.add('is-revealed');
                });
                return;
            }

            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -60px 0px'
            });

            nodes.forEach(function (node) {
                observer.observe(node);
            });
        })();
    </script>
@endpush
@endsection
