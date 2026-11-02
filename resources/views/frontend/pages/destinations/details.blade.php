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

<main class="min-h-screen bg-white text-slate-800"
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
                <a href="{{ url('/destinations') }}" class="mb-8 inline-flex items-center gap-2 text-sm font-medium text-slate-300 transition hover:text-white">
                    <iconify-icon icon="lucide:arrow-left" class="text-sm"></iconify-icon>
                    All destinations
                </a>

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
    <nav class="sticky top-0 z-40 border-b border-slate-200 bg-white/95 shadow-sm backdrop-blur"
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

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- OVERVIEW --}}
        <section id="overview" data-section class="scroll-mt-28 py-10 lg:py-14">
            <div class="grid gap-6 lg:grid-cols-12">
                <div class="rounded-2xl border border-slate-200/80 bg-white p-7 shadow-[0_4px_24px_rgba(11,29,54,0.04)] sm:p-10 lg:col-span-8 lg:p-12" x-intersect.once="$el.classList.add('is-visible')" data-reveal>
                    <p class="mb-3 text-xs font-bold uppercase tracking-[0.2em] text-brand-600">Destination Overview</p>
                    <h2 class="text-3xl font-bold tracking-tight text-[#0B1D36] sm:text-4xl">{{ $destination['overview']['title'] }}</h2>
                    <p class="mt-6 text-sm leading-8 text-slate-500 sm:text-base">{{ $destination['overview']['description'] }}</p>
                </div>

                <div class="grid grid-cols-2 gap-4 lg:col-span-4">
                    @foreach ($destination['overview']['stats'] as $stat)
                        <div class="flex flex-col justify-between rounded-2xl border border-slate-200/80 bg-white p-5 shadow-[0_4px_24px_rgba(11,29,54,0.04)] sm:p-6" data-reveal>
                            <iconify-icon icon="lucide:info" class="mb-5 text-2xl text-brand-600"></iconify-icon>
                            <div>
                                <p class="text-xl font-bold text-[#0B1D36] sm:text-2xl">{{ $stat['value'] }}</p>
                                <p class="mt-1 text-xs text-slate-500">{{ $stat['label'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- QUICK FACTS --}}
        <section id="facts" data-section class="scroll-mt-28 py-10 lg:py-14">
            {{-- <x-destination-section-heading eyebrow="Quick Facts" :title="$destination['name'] . ' at a Glance'" /> --}}
            <div class="mt-9 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($destination['quickFacts'] as $fact)
                    <article class="rounded-2xl border border-slate-200/80 bg-white p-6 shadow-[0_4px_24px_rgba(11,29,54,0.04)] sm:p-7" data-reveal>
                        <iconify-icon icon="lucide:info" class="text-2xl text-brand-600"></iconify-icon>
                        <p class="mt-5 text-xs font-bold uppercase tracking-wider text-brand-600">{{ $fact['title'] }}</p>
                        <p class="mt-3 text-sm leading-7 text-[#0B1D36]">{{ $fact['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- WHY CHOOSE --}}
        <section id="why" data-section class="scroll-mt-28 py-10 lg:py-14">
            <div class="relative overflow-hidden rounded-[28px] bg-[#0B1D36] p-8 sm:p-12 lg:p-16" data-reveal>
                <div class="absolute -right-20 -top-20 h-80 w-80 rounded-full border border-white/10"></div>
                <div class="relative max-w-3xl">
                    <p class="mb-6 inline-flex rounded-full bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-widest text-brand-300">Why this destination</p>
                    <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl">{{ $destination['whyChoose']['title'] }}</h2>
                    <p class="mt-6 text-sm leading-8 text-slate-300 sm:text-base">{{ $destination['whyChoose']['description'] }}</p>
                    <div class="mt-8 grid gap-3 sm:grid-cols-2">
                        @foreach ($destination['whyChoose']['highlights'] as $item)
                            <div class="flex items-center gap-2 text-sm font-medium text-white">
                                <iconify-icon icon="lucide:check-circle-2" class="shrink-0 text-lg text-brand-300"></iconify-icon>
                                {{ $item }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- HIGHLIGHTS --}}
        <section id="highlights" data-section class="scroll-mt-28 py-10 lg:py-14">
            {{-- <x-destination-section-heading eyebrow="Key Highlights" :title="'What Makes ' . $destination['name'] . ' Stand Out'" /> --}}
            <div class="mt-9 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($destination['highlights'] as $item)
                    <article class="rounded-2xl border border-slate-200/80 bg-white p-6 shadow-[0_4px_24px_rgba(11,29,54,0.04)]" data-reveal>
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                <iconify-icon icon="lucide:check" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#0B1D36]">{{ $item['title'] }}</h3>
                                <p class="mt-2 text-sm leading-6 text-slate-500">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- UNIVERSITIES --}}
        <section id="universities" data-section class="scroll-mt-28 py-10 lg:py-14">
            {{-- <x-destination-section-heading eyebrow="Courses & Universities" :title="'Universities in ' . $destination['name']" description="Explore institutions and verify course availability, entry requirements and current fees directly with each university." /> --}}
            @if (!empty($destination['universities']))
                <div class="mt-9 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($destination['universities'] as $university)
                        <a href="{{ $university['href'] }}" target="_blank" rel="noopener noreferrer"
                           class="group flex flex-col rounded-2xl border border-slate-200 bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-brand-500/60 hover:shadow-lg" data-reveal>
                            <iconify-icon icon="lucide:graduation-cap" class="text-[26px] text-brand-600"></iconify-icon>
                            <h3 class="mt-6 text-lg font-bold text-[#0B1D36] transition group-hover:text-brand-600">{{ $university['name'] }}</h3>
                            <p class="mt-2 flex items-center gap-2 text-sm text-slate-500">
                                <iconify-icon icon="lucide:map-pin" class="text-base"></iconify-icon>
                                {{ $university['city'] }}
                            </p>
                            <div class="mt-7 flex items-center gap-2 border-t border-slate-100 pt-5">
                                <span class="rounded-lg bg-brand-50 px-3 py-1.5 text-xs font-bold text-brand-700">{{ $university['ranking'] }}</span>
                                <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-semibold text-slate-600">{{ $university['courses'] }}</span>
                                <iconify-icon icon="lucide:arrow-up-right" class="ml-auto text-xl text-slate-400 group-hover:text-brand-600"></iconify-icon>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="mt-8 rounded-2xl border border-dashed border-slate-300 bg-white p-8 text-center">
                    <iconify-icon icon="lucide:graduation-cap" class="mx-auto text-3xl text-brand-500"></iconify-icon>
                    <p class="mt-3 font-semibold text-[#0B1D36]">University information is being updated.</p>
                    <p class="mt-1 text-sm text-slate-500">Contact our counsellors for institution recommendations.</p>
                </div>
            @endif
        </section>

        {{-- VISA --}}
        <section id="visa" data-section class="scroll-mt-28 py-10 lg:py-14">
            {{-- <x-destination-section-heading eyebrow="Visa Guidance" :title="$destination['visa']['title']" :description="$destination['visa']['description']" /> --}}
            <div class="mt-8 rounded-2xl border border-brand-500/20 bg-brand-50/60 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                    <iconify-icon icon="lucide:info" class="mt-1 shrink-0 text-2xl text-brand-600"></iconify-icon>
                    <p class="text-sm leading-7 text-slate-600">Visa rules, fees, financial thresholds and work conditions can change. Confirm the latest requirements through the relevant official immigration authority before applying.</p>
                </div>
            </div>

            <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="border-b border-slate-100 bg-[#0B1D36] p-6 sm:p-8">
                    <div class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-brand-300">
                            <iconify-icon icon="lucide:file-check" class="text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest text-brand-300">{{ $destination['code'] }} Student Visa</p>
                            <h3 class="mt-1 text-xl font-bold text-white sm:text-2xl">Application Guide</h3>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2">
                    <div class="p-6 sm:p-8 lg:border-r lg:border-slate-100">
                        <h4 class="flex items-center gap-2 text-lg font-bold text-[#0B1D36]">
                            <iconify-icon icon="lucide:list-checks" class="text-xl text-brand-600"></iconify-icon>
                            Application Steps
                        </h4>
                        <div class="mt-8">
                            @foreach ($destination['visa']['steps'] as $index => $step)
                                <div class="relative flex gap-4 pb-8 last:pb-0">
                                    @if (!$loop->last)
                                        <div class="absolute bottom-0 left-[17px] top-9 w-px bg-slate-200"></div>
                                    @endif
                                    <div class="relative z-10 flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-[#0B1D36] text-sm font-bold text-white">{{ $index + 1 }}</div>
                                    <div class="pt-1">
                                        <h5 class="text-sm font-bold text-[#0B1D36]">{{ $step['title'] }}</h5>
                                        <p class="mt-2 text-sm leading-6 text-slate-500">{{ $step['description'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="bg-slate-50/70 p-6 sm:p-8">
                        <h4 class="flex items-center gap-2 text-lg font-bold text-[#0B1D36]">
                            <iconify-icon icon="lucide:files" class="text-xl text-brand-600"></iconify-icon>
                            Document Requirements
                        </h4>
                        <p class="mt-2 text-sm text-slate-500">Requirements vary by applicant and visa category.</p>
                        <div class="mt-6 space-y-3">
                            @foreach ($destination['visa']['documents'] as $document)
                                <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-200/80 bg-white p-4">
                                    <div class="flex min-w-0 items-center gap-3">
                                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg {{ $document['required'] ? 'bg-emerald-50 text-emerald-600' : 'bg-slate-100 text-slate-400' }}">
                                            <iconify-icon icon="lucide:check" class="text-base"></iconify-icon>
                                        </div>
                                        <span class="text-sm font-semibold text-[#0B1D36]">{{ $document['name'] }}</span>
                                    </div>
                                    <span class="shrink-0 rounded-full px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide {{ $document['required'] ? 'bg-emerald-50 text-emerald-700' : 'bg-slate-100 text-slate-500' }}">
                                        {{ $document['required'] ? 'Required' : 'If applicable' }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- LIVING COSTS --}}
        <section id="costs" data-section class="scroll-mt-28 py-10 lg:py-14">
            {{-- <x-destination-section-heading eyebrow="Cost of Living" :title="$destination['livingCosts']['title']" :description="$destination['livingCosts']['description']" /> --}}
            <div class="mt-9 grid grid-cols-2 gap-4 lg:grid-cols-4">
                @foreach ($destination['livingCosts']['expenses'] as $expense)
                    <article class="rounded-2xl border border-slate-200/80 bg-white p-5 text-center shadow-[0_4px_24px_rgba(11,29,54,0.04)] sm:p-7" data-reveal>
                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:wallet" class="text-2xl"></iconify-icon>
                        </div>
                        <p class="mt-5 text-xs font-bold uppercase tracking-wider text-slate-500">{{ $expense['title'] }}</p>
                        <p class="mt-3 text-xl font-bold tracking-tight text-[#0B1D36] sm:text-2xl">{{ $expense['amount'] }}</p>
                        <p class="mt-2 text-xs text-slate-400">{{ $destination['livingCosts']['currency'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- WORK RIGHTS --}}
        <section id="work" data-section class="scroll-mt-28 py-10 lg:py-14">
            {{-- <x-destination-section-heading eyebrow="Work Opportunities" :title="$destination['workRights']['title']" :description="$destination['workRights']['description']" /> --}}
            <div class="mt-9 grid gap-5 md:grid-cols-2">
                @foreach ($destination['workRights']['items'] as $item)
                    <article class="rounded-2xl border border-slate-200/80 bg-white p-7 shadow-[0_4px_24px_rgba(11,29,54,0.04)]" data-reveal>
                        <iconify-icon icon="lucide:briefcase-business" class="text-2xl text-brand-600"></iconify-icon>
                        <p class="mt-6 text-xs font-bold uppercase tracking-widest text-brand-600">{{ $item['title'] }}</p>
                        <h3 class="mt-3 text-2xl font-bold text-[#0B1D36]">{{ $item['value'] }}</h3>
                        <p class="mt-2 text-sm text-slate-500">{{ $item['subtitle'] }}</p>
                        <p class="mt-5 border-t border-slate-100 pt-4 text-sm leading-6 text-slate-500">{{ $item['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- SCHOLARSHIPS --}}
        <section id="scholarships" data-section class="scroll-mt-28 py-10 lg:py-14">
            {{-- <x-destination-section-heading eyebrow="Funding Opportunities" :title="'Scholarships in ' . $destination['name']" description="Scholarship availability, value and eligibility depend on the provider and course." /> --}}
            @if (!empty($destination['scholarships']))
                <div class="mt-9 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($destination['scholarships'] as $scholarship)
                        <a href="{{ $scholarship['href'] }}" target="_blank" rel="noopener noreferrer"
                           class="group rounded-2xl border border-slate-200 bg-white p-7 transition hover:-translate-y-1 hover:border-brand-500/60 hover:shadow-xl" data-reveal>
                            <iconify-icon icon="lucide:sparkles" class="text-2xl text-brand-600"></iconify-icon>
                            <h3 class="mt-6 text-lg font-bold text-[#0B1D36] group-hover:text-brand-600">{{ $scholarship['name'] }}</h3>
                            <p class="mt-2 text-sm text-slate-500">{{ $scholarship['university'] }}</p>
                            <div class="mt-7 border-t border-slate-100 pt-5">
                                <p class="text-xs text-slate-400">Scholarship amount</p>
                                <p class="mt-1 text-2xl font-bold text-brand-600">{{ $scholarship['amount'] }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="mt-8 rounded-2xl border border-dashed border-slate-300 bg-white p-8 text-center">
                    <iconify-icon icon="lucide:sparkles" class="mx-auto text-3xl text-brand-500"></iconify-icon>
                    <p class="mt-3 font-semibold text-[#0B1D36]">Scholarship information is being updated.</p>
                    <p class="mt-1 text-sm text-slate-500">Contact our counsellors to discuss available funding options.</p>
                </div>
            @endif
        </section>

        {{-- FAQ: Alpine accordion --}}
        <section id="faq" data-section class="scroll-mt-28 py-10 lg:py-14">
            {{-- <x-destination-section-heading eyebrow="Frequently Asked Questions" :title="'Questions About Studying in ' . $destination['name']" :description="'Answers to common questions about studying in ' . $destination['name'] . '.'" /> --}}
            <div class="mt-9 max-w-4xl space-y-3">
                @foreach ($destination['faqs'] as $index => $faq)
                    <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:border-brand-300"
                             x-data="{ open: {{ $index === 0 ? 'true' : 'false' }} }" data-reveal>
                        <button type="button" @click="open = !open"
                                class="flex w-full items-center justify-between gap-5 px-5 py-5 text-left sm:px-6">
                            <span class="font-bold text-[#0B1D36]">{{ $faq['question'] }}</span>
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-50 text-brand-700">
                                <iconify-icon :icon="open ? 'lucide:minus' : 'lucide:plus'" class="text-lg"></iconify-icon>
                            </span>
                        </button>
                        <div x-show="open" x-collapse x-cloak>
                            <div class="border-t border-slate-100 px-5 pb-5 pt-4 text-sm leading-7 text-slate-500 sm:px-6">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- CTA --}}
        <section id="contact" class="scroll-mt-28 py-10 pb-16 lg:py-14 lg:pb-20">
            <div class="relative overflow-hidden rounded-[28px] bg-[#0B1D36] px-6 py-12 text-center sm:px-12 lg:py-16" data-reveal>
                <div class="absolute -right-16 -top-24 h-72 w-72 rounded-full border border-white/10"></div>
                <div class="absolute -bottom-36 -left-16 h-80 w-80 rounded-full border border-white/10"></div>
                <div class="relative mx-auto max-w-3xl">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-widest text-brand-200">
                        <iconify-icon icon="lucide:sparkles"></iconify-icon>
                        Your future starts here
                    </span>
                    <h2 class="mt-5 text-3xl font-extrabold text-white sm:text-4xl">Ready to Study in {{ $destination['name'] }}?</h2>
                    <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-slate-300 sm:text-base">Get personalised guidance on universities, courses, admission requirements and your next steps.</p>
                    <a href="mailto:info@example.com" class="mt-8 inline-flex items-center gap-2 rounded-xl bg-white px-7 py-3.5 text-sm font-bold text-[#0B1D36] transition hover:-translate-y-0.5 hover:bg-brand-50">
                        Book a Free Consultation
                        <iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon>
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>

{{-- Alpine.js, Alpine Collapse, Alpine Intersect and Iconify --}}
@push('scripts')
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
@endpush
@endsection
