   @php

    // University basic info
$university = [
    'name'        => 'University of Melbourne',
    'logo'        => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/8a/University_of_Melbourne_logo.svg/200px-University_of_Melbourne_logo.svg.png',
    'cover'       => 'https://images.unsplash.com/photo-1562774053-701939374585?w=1600&q=80',
    'city'        => 'Melbourne, Victoria',
    'established' => '1853',
    'tuition'     => 'A$45,000 – A$52,000',
    'ranking'     => '#1 in Australia',
    'students'    => '52,000+',
    'programs'    => '400+',
];

// Sticky navigation
$navigation = [
    ['id' => 'overview',      'label' => 'Overview'],
    ['id' => 'programs',      'label' => 'Programs'],
    ['id' => 'requirements',  'label' => 'Requirements'],
    ['id' => 'fees',          'label' => 'Fees & Scholarships'],
    ['id' => 'campus',        'label' => 'Campus Life'],
    ['id' => 'campus-list',   'label' => 'Locations'],
];

// Popular study programs
$programs = [
    [
        'name'     => 'Bachelor of Science',
        'level'    => 'Undergraduate',
        'duration' => '3 Years',
        'fee'      => 'A$48,000 / year',
        'icon'     => 'flask-conical',
    ],
    [
        'name'     => 'Master of Business Administration',
        'level'    => 'Postgraduate',
        'duration' => '2 Years',
        'fee'      => 'A$62,000 / year',
        'icon'     => 'briefcase',
    ],
    [
        'name'     => 'Bachelor of Arts',
        'level'    => 'Undergraduate',
        'duration' => '3 Years',
        'fee'      => 'A$42,000 / year',
        'icon'     => 'palette',
    ],
    [
        'name'     => 'Master of Engineering',
        'level'    => 'Postgraduate',
        'duration' => '2 Years',
        'fee'      => 'A$55,000 / year',
        'icon'     => 'cpu',
    ],
    [
        'name'     => 'Doctor of Medicine',
        'level'    => 'Postgraduate',
        'duration' => '4 Years',
        'fee'      => 'A$85,000 / year',
        'icon'     => 'stethoscope',
    ],
    [
        'name'     => 'Bachelor of Commerce',
        'level'    => 'Undergraduate',
        'duration' => '3 Years',
        'fee'      => 'A$46,500 / year',
        'icon'     => 'trending-up',
    ],
    [
        'name'     => 'Master of Information Technology',
        'level'    => 'Postgraduate',
        'duration' => '2 Years',
        'fee'      => 'A$51,000 / year',
        'icon'     => 'code-2',
    ],
    [
        'name'     => 'Bachelor of Design',
        'level'    => 'Undergraduate',
        'duration' => '3 Years',
        'fee'      => 'A$44,000 / year',
        'icon'     => 'pen-tool',
    ],
];

// Entry requirements checklist
$requirements = [
    'Academic transcripts from previous education',
    'Proof of English language proficiency (IELTS / TOEFL / PTE)',
    'Passport copy (valid for at least 6 months)',
    'Statement of Purpose / Personal Statement',
    'Letters of Recommendation (2–3)',
    'Curriculum Vitae / Resume',
    'Portfolio (for design / creative courses)',
    'Evidence of financial capacity',
    'Overseas Student Health Cover (OSHC)',
    'Genuine Temporary Entrant (GTE) statement',
];

// Campus facilities
$facilities = [
    ['name' => 'Modern Libraries & Study Spaces',     'icon' => 'library'],
    ['name' => 'State-of-the-art Research Labs',      'icon' => 'microscope'],
    ['name' => 'Student Accommodation',               'icon' => 'home'],
    ['name' => 'Sports & Recreation Centres',         'icon' => 'dumbbell'],
    ['name' => 'Career Services & Counselling',       'icon' => 'briefcase'],
    ['name' => 'Health & Wellbeing Clinics',          'icon' => 'heart-pulse'],
    ['name' => 'Cafés & Dining Options',              'icon' => 'coffee'],
    ['name' => 'Student Clubs & Societies',           'icon' => 'users'],
    ['name' => 'Innovation & Entrepreneurship Hub',   'icon' => 'lightbulb'],
];

// Campus locations
$campuses = [
    [
        'name'    => 'Parkville Campus',
        'country' => 'Australia',
        'state'   => 'Victoria',
        'address' => 'Grattan Street, Parkville, VIC 3010',
        'image'   => 'https://images.unsplash.com/photo-1562774053-701939374585?w=800&q=80',
    ],
    [
        'name'    => 'Southbank Campus',
        'country' => 'Australia',
        'state'   => 'Victoria',
        'address' => '234 St Kilda Road, Southbank, VIC 3006',
        'image'   => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
    ],
    [
        'name'    => 'Burnley Campus',
        'country' => 'Australia',
        'state'   => 'Victoria',
        'address' => '500 Yarra Boulevard, Richmond, VIC 3121',
        'image'   => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=800&q=80',
    ],
    [
        'name'    => 'Werribee Campus',
        'country' => 'Australia',
        'state'   => 'Victoria',
        'address' => '250 Princes Highway, Werribee, VIC 3030',
        'image'   => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&q=80',
    ],
];
    @endphp
@extends('frontend.layouts.app')

@section('content')
    {{-- HERO SECTION --}}

    <section class="relative isolate overflow-hidden bg-brand-950 h-80">

        <div class="absolute inset-0 -z-20">
            <img src="{{ $university['cover'] }}" alt="{{ $university['name'] }}"
                class="h-full w-full object-cover opacity-30">
        </div>

        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-brand-950 via-brand-950/95 to-brand-900/75"></div>

        <div class="absolute -right-40 -top-40 -z-10 h-[500px] w-[500px] rounded-full bg-brand-500/20 blur-[120px]"></div>
        <div class="absolute -bottom-40 -left-40 -z-10 h-[400px] w-[400px] rounded-full bg-accent-cyan/10 blur-[100px]">
        </div>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-end h-full py-10">

            <div class="grid grid-cols-1 items-end gap-10 lg:grid-cols-12">

                {{-- University Information --}}
                <div class="lg:col-span-8">

                    <div class="flex gap-4 items-center">

                        {{-- Logo --}}
                        <div
                            class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl border border-white/20 bg-white p-1 shadow-2xl">

                            <img src="{{ $university['logo'] }}" alt="{{ $university['name'] }} logo"
                                class="h-full w-full object-contain rounded-xl">

                        </div>

                        <h1
                            class="max-w-4xl text-3xl font-bold leading-tight tracking-tight text-white sm:text-4xl lg:text-5xl">

                            {{ $university['name'] }}

                        </h1>

                    </div>
                    <div class="mt-5 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-brand-100/75">

                        <div class="flex items-center gap-2">
                            <iconify-icon icon="lucide:map-pin" class="text-accent-cyan"></iconify-icon>
                            {{ $university['city'] }}
                        </div>

                        <div class="flex items-center gap-2">
                            <iconify-icon icon="lucide:calendar-days" class="text-accent-cyan"></iconify-icon>
                            Established {{ $university['established'] }}
                        </div>
                        <div class="flex items-center gap-2">
                            <iconify-icon icon="lucide:book-open" class="text-accent-cyan"></iconify-icon>
                            Public Research University
                        </div>

                    </div>

                </div>


                {{-- Hero Highlight --}}
                <div class="lg:col-span-4">

                    <div
                        class="hidden lg:block rounded-2xl border border-white/10 bg-white/[0.04] p-5 shadow-2xl backdrop-blur-xl">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-semibold uppercase tracking-wider text-brand-100/60">Key Metric</span>
                            <span
                                class="rounded-full bg-success-50 px-2.5 py-0.5 text-xs font-bold text-success-600">Admission
                                Open</span>
                        </div>
                        <div class="my-6 border-t border-white/10"></div>

                        <div class="text-center">
                            <p class="text-xs text-brand-100/60">Estimated Annual Tuition</p>
                            <h3 class="mt-1 text-xl md:text-2xl font-black text-white">
                                {{ $university['tuition'] }} (AUD)
                            </h3>
                        </div>

                        <a href="#enquiry"
                            class="mt-6 flex w-full items-center justify-center gap-2 rounded-2xl bg-brand-500 px-5 py-3.5 text-sm font-bold text-white transition-all duration-200 hover:bg-brand-600 hover:shadow-lg">
                            Enquire About Admission
                            <iconify-icon icon="lucide:arrow-up-right"></iconify-icon>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- SECTION NAVIGATION --}}

    <div class="sticky top-29 z-40 border-y border-neutral-200 bg-white/95 shadow-sm backdrop-blur-xl">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <nav class="flex gap-7 overflow-x-auto py-4 text-sm font-semibold whitespace-nowrap">

                @foreach ($navigation as $item)
                    <a href="#{{ $item['id'] }}" class="shrink-0 text-neutral-500 transition hover:text-brand-600">

                        {{ $item['label'] }}

                    </a>
                @endforeach

            </nav>

        </div>

    </div>



    {{-- MAIN CONTENT --}}

    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8 lg:py-20">
        <main class="space-y-16">

            <section id="overview" class="scroll-mt-28">

                {{-- Section Heading --}}
                <div class="mb-12 max-w-3xl sm:mb-16">
                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-blue-100 bg-blue-50 px-4 py-2 text-xs font-bold tracking-[0.16em] text-[#1968b2]">
                        <span class="h-2 w-2 rounded-full bg-[#1968b2]"></span>
                        ABOUT THE INSTITUTION
                    </span>

                    <h2
                        class="mt-5 text-3xl font-extrabold leading-tight tracking-tight text-[#05275e] sm:text-4xl lg:text-5xl">
                        Discover University of Melbourne
                    </h2>

                    <div class="mt-5 h-1 w-20 rounded-full bg-[#1968b2]"></div>
                </div>

                {{-- Main Content --}}
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2 lg:gap-16">

                    {{-- Campus Image --}}
                    <div class="relative">
                        <div class="absolute -left-4 -top-4 h-28 w-28 rounded-tl-3xl border-l-2 border-t-2 border-blue-200">
                        </div>

                        <div
                            class="group relative aspect-[4/3] overflow-hidden rounded-3xl bg-slate-100 shadow-xl shadow-blue-950/10">
                            <img src="{{ asset('australia.webp') }}" alt="University of Melbourne campus"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                                loading="lazy">

                            <div class="absolute inset-0 bg-gradient-to-t from-[#05275e]/80 via-transparent to-transparent">
                            </div>

                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <span
                                    class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/15 px-3 py-1.5 text-xs font-semibold text-white backdrop-blur-md">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z" />
                                        <circle cx="12" cy="10" r="2.5" />
                                    </svg>
                                    Parkville, Melbourne, Australia
                                </span>
                            </div>
                        </div>

                        {{-- Established Badge --}}
                        <div
                            class="absolute -bottom-5 -right-4 hidden rounded-2xl border border-slate-100 bg-white p-5 shadow-xl sm:block">
                            <p
                                class="text-xs font-semibold uppercase tracking-wider text-slate-500 flex items-center gap-1">
                                <iconify-icon icon="lucide:globe" class="text-base"></iconify-icon> Ranking
                            </p>
                            <p class="mt-1 text-3xl font-extrabold text-[#05275e]">
                                90
                            </p>
                        </div>
                    </div>

                    {{-- Institution Details --}}
                    <div class="lg:py-4">

                        <div class="space-y-5 text-sm sm:text-base leading-6 text-slate-600">
                            <p>
                                Established in 1853, the University of Melbourne is one of Australia's leading
                                institutions for
                                education and research. Known for its academic excellence, innovative learning
                                environment and
                                global outlook, the university offers students opportunities to develop knowledge,
                                skills and
                                professional experience.
                            </p>

                            <p>
                                Located in Melbourne, Victoria, the university brings together a diverse academic
                                community,
                                internationally recognised research and a vibrant campus experience. Its main Parkville
                                campus
                                combines historic architecture with modern learning and research facilities.
                            </p>
                        </div>

                        {{-- Quick Facts --}}
                        <div class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 sm:gap-4">

                            {{-- National Ranking --}}
                            <div
                                class="group flex items-center gap-3.5 rounded-xl border border-slate-200/80 bg-white px-4 py-3.5 shadow-sm transition-all duration-300 hover:border-blue-200 hover:shadow-md">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-[#1968b2] transition-colors group-hover:bg-[#1968b2] group-hover:text-white">
                                    <iconify-icon icon="lucide:trophy" class="text-lg"></iconify-icon>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">National
                                        Ranking</span>
                                    <span class="text-sm font-bold text-[#05275e] sm:text-base">
                                        {{ $university['ranking'] }}
                                    </span>
                                </div>
                            </div>

                            {{-- Total Students --}}
                            <div
                                class="group flex items-center gap-3.5 rounded-xl border border-slate-200/80 bg-white px-4 py-3.5 shadow-sm transition-all duration-300 hover:border-blue-200 hover:shadow-md">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-[#1968b2] transition-colors group-hover:bg-[#1968b2] group-hover:text-white">
                                    <iconify-icon icon="lucide:users" class="text-lg"></iconify-icon>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Total
                                        Students</span>
                                    <span class="text-sm font-bold text-[#05275e] sm:text-base">
                                        {{ $university['students'] }}
                                    </span>
                                </div>
                            </div>
                            <div
                                class="group flex items-center gap-3.5 rounded-xl border border-slate-200/80 bg-white px-4 py-3.5 shadow-sm transition-all duration-300 hover:border-blue-200 hover:shadow-md">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-[#1968b2] transition-colors group-hover:bg-[#1968b2] group-hover:text-white">
                                    <iconify-icon icon="lucide:book-open" class="text-lg"></iconify-icon>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Study
                                        Programs</span>
                                    <span class="text-sm font-bold text-[#05275e] sm:text-base">
                                        {{ $university['programs'] }}
                                    </span>
                                </div>
                            </div>

                            <div
                                class="group flex items-center justify-between gap-3.5 rounded-xl border border-slate-200/80 bg-white px-4 py-3.5 shadow-sm transition-all duration-300 hover:border-blue-200 hover:shadow-md">

                                {{-- Left: Icon & Details --}}
                                <div class="flex items-center gap-3.5">
                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-[#1968b2] transition-colors duration-300 group-hover:bg-[#1968b2] group-hover:text-white">
                                        <iconify-icon icon="lucide:school" class="text-lg"></iconify-icon>
                                    </div>

                                    <div class="flex flex-col">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wider text-slate-400">Campus</span>
                                        <span class="text-sm font-bold text-[#05275e] sm:text-base">
                                            7 Campuses
                                        </span>
                                    </div>
                                </div>

                                {{-- Right: Interactive Arrow Action --}}
                                <a href="#"
                                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 transition-all duration-300 hover:bg-blue-50 hover:text-[#1968b2] focus:outline-none">
                                    <iconify-icon icon="lucide:arrow-right"
                                        class="text-lg transition-transform duration-300 group-hover:translate-x-1"></iconify-icon>
                                </a>

                            </div>


                        </div>

                    </div>
                </div>
            </section>



            {{-- STUDY PROGRAMS --}}
            <section id="programs" class="scroll-mt-28">

                <div class="mb-7 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">

                    <div>

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                            Find Your Course
                        </span>

                        <h2 class="mt-2 text-2xl font-bold text-brand-950 sm:text-3xl">
                            Popular Study Programs
                        </h2>

                        <p class="mt-2 text-sm text-neutral-500">
                            Explore some of the available academic opportunities.
                        </p>

                    </div>

                    <a href="#enquiry"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-brand-600 transition hover:text-brand-800">

                        View All Programs

                        <iconify-icon icon="lucide:arrow-up-right"></iconify-icon>

                    </a>

                </div>


                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-4">

                    @foreach ($programs as $program)
                        <article
                            class="group relative overflow-hidden rounded-2xl border border-neutral-200 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl">

                            <div
                                class="absolute right-0 top-0 h-24 w-24 rounded-full bg-brand-50 opacity-0 blur-2xl transition group-hover:opacity-100">
                            </div>

                            <div class="relative">

                                <div class="flex items-center justify-between">

                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-500 transition group-hover:bg-brand-500 group-hover:text-white">

                                        <iconify-icon icon="lucide:{{ $program['icon'] }}"
                                            class="text-xl"></iconify-icon>

                                    </div>

                                    <span
                                        class="rounded-full bg-slate-100 px-3 py-1.5 text-[10px] font-bold uppercase tracking-wide text-slate-600">

                                        {{ $program['level'] }}

                                    </span>

                                </div>


                                <h3 class="mt-6 min-h-12 text-base font-bold leading-6 text-brand-950">
                                    {{ $program['name'] }}
                                </h3>


                                <div class="mt-5 space-y-3 border-t border-neutral-100 pt-4">

                                    <div class="flex items-center justify-between text-xs">

                                        <span class="flex items-center gap-2 text-neutral-400">
                                            <iconify-icon icon="lucide:clock"></iconify-icon>
                                            Duration
                                        </span>

                                        <span class="font-semibold text-neutral-700">
                                            {{ $program['duration'] }}
                                        </span>

                                    </div>


                                    <div class="flex items-center justify-between gap-2 text-xs">

                                        <span class="flex items-center gap-2 text-neutral-400">
                                            <iconify-icon icon="lucide:wallet"></iconify-icon>
                                            Tuition Fee
                                        </span>

                                        <span class="text-right font-bold text-brand-600">
                                            {{ $program['fee'] }}
                                        </span>

                                    </div>

                                </div>


                                <a href="#enquiry"
                                    class="mt-6 flex items-center justify-between border-t border-neutral-100 pt-4 text-sm font-semibold text-brand-600">

                                    Enquire About Program

                                    <iconify-icon icon="lucide:arrow-right"
                                        class="transition group-hover:translate-x-1"></iconify-icon>

                                </a>

                            </div>

                        </article>
                    @endforeach

                </div>

            </section>



            {{-- ENTRY REQUIREMENTS --}}
            <section id="requirements" class="scroll-mt-28">

                {{-- Section Header --}}
                <div class="mb-8">
                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-blue-200/60 bg-blue-50 px-3.5 py-1 text-xs font-bold tracking-wider text-[#1968b2]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#1968b2]"></span>
                        BEFORE YOU APPLY
                    </span>

                    <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-[#05275e] sm:text-3xl">
                        Entry Requirements
                    </h2>

                    <p class="mt-1.5 text-sm text-slate-500 sm:text-base">
                        Prepare the general documents needed for your application process.
                    </p>
                </div>

                {{-- Main Container Card --}}
                <div
                    class="overflow-hidden rounded-3xl border border-slate-200/80 bg-white shadow-xl shadow-slate-900/5 ring-1 ring-slate-900/5">

                    {{-- Card Header --}}
                    <div class="flex items-center gap-4 border-b border-slate-100 bg-slate-50/50 p-6 sm:px-8">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-[#1968b2] shadow-sm">
                            <iconify-icon icon="lucide:file-check-2" class="text-2xl"></iconify-icon>
                        </div>

                        <div>
                            <h3 class="text-lg font-bold text-[#05275e]">Application Documents</h3>
                            <p class="text-xs font-medium text-slate-500">General admission checklist</p>
                        </div>
                    </div>

                    {{-- Grid Checklist --}}
                    <div class="grid grid-cols-1 gap-3 p-6 sm:grid-cols-2 sm:gap-4 sm:p-8">
                        @foreach ($requirements as $requirement)
                            <div
                                class="group flex items-center gap-3.5 rounded-xl border border-slate-100 bg-slate-50/50 p-3.5 transition-all duration-300 hover:border-blue-200 hover:bg-white hover:shadow-md">
                                <div
                                    class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600 transition-transform group-hover:scale-110">
                                    <iconify-icon icon="lucide:check-circle-2" class="text-base"></iconify-icon>
                                </div>

                                <span class="text-sm font-medium leading-normal text-slate-700">
                                    {{ $requirement }}
                                </span>
                            </div>
                        @endforeach
                    </div>

                    {{-- Informational Notice Banner --}}
                    <div class="border-t border-amber-200/60 bg-amber-50/60 px-6 py-4 sm:px-8">
                        <div class="flex items-start gap-3">
                            <div
                                class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-700">
                                <iconify-icon icon="lucide:info" class="text-sm"></iconify-icon>
                            </div>

                            <p class="text-xs leading-relaxed font-medium text-amber-900 sm:text-sm">
                                Admission requirements vary by course and applicant background. Always verify the latest
                                specific requirements directly on the official university portal before submitting.
                            </p>
                        </div>
                    </div>

                </div>

            </section>



            {{-- TUITION & SCHOLARSHIPS --}}
            <section id="fees" class="scroll-mt-28">

                {{-- Section Header --}}
                <div class="mb-8">
                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-blue-200/60 bg-blue-50 px-3.5 py-1 text-xs font-bold tracking-wider text-[#1968b2]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#1968b2]"></span>
                        PLAN YOUR BUDGET
                    </span>

                    <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-[#05275e] sm:text-3xl">
                        Tuition Fees & Scholarships
                    </h2>

                    <p class="mt-1.5 text-sm text-slate-500 sm:text-base">
                        Get an overview of estimated study costs and financial support options.
                    </p>
                </div>

                {{-- Cards Grid --}}
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

                    {{-- Tuition Card (Dark Theme Hero) --}}
                    <div
                        class="group relative overflow-hidden rounded-3xl bg-[#05275e] p-7 text-white shadow-xl shadow-blue-950/15 transition-all duration-300 hover:-translate-y-1 sm:p-8">
                        {{-- Glowing Background Orbs --}}
                        <div
                            class="pointer-events-none absolute -right-12 -top-12 h-48 w-48 rounded-full bg-[#1968b2]/40 blur-3xl transition-opacity group-hover:opacity-100">
                        </div>
                        <div
                            class="pointer-events-none absolute -bottom-12 -left-12 h-48 w-48 rounded-full bg-sky-400/20 blur-3xl">
                        </div>

                        <div class="relative flex h-full flex-col justify-between">
                            <div>
                                {{-- Header Row with Icon & Currency Badge --}}
                                <div class="flex items-center justify-between">
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-sky-300 shadow-inner backdrop-blur-md">
                                        <iconify-icon icon="lucide:wallet" class="text-2xl"></iconify-icon>
                                    </div>
                                    <span
                                        class="rounded-full border border-white/15 bg-white/10 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-sky-200 backdrop-blur-md">
                                        AUD / Year
                                    </span>
                                </div>

                                <p class="mt-6 text-xs font-semibold uppercase tracking-wider text-slate-300">
                                    Estimated Annual Tuition
                                </p>

                                <h3 class="mt-2 text-3xl font-black tracking-tight text-white sm:text-4xl">
                                    {{ $university['tuition'] }}
                                </h3>
                            </div>

                            {{-- Footer Note --}}
                            <div class="mt-6 border-t border-white/10 pt-4">
                                <p class="text-xs leading-relaxed text-slate-300/90">
                                    Tuition varies depending on your selected degree program, study load, and academic
                                    intake.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Scholarship Card (Light Theme Accent) --}}
                    <div
                        class="group relative flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-white p-7 shadow-xl shadow-slate-900/5 ring-1 ring-slate-900/5 transition-all duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-md sm:p-8">
                        <div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 text-amber-600 shadow-sm transition-colors group-hover:bg-amber-100">
                                <iconify-icon icon="lucide:award" class="text-2xl"></iconify-icon>
                            </div>

                            <h3 class="mt-6 text-xl font-bold text-[#05275e]">
                                Scholarship Opportunities
                            </h3>

                            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                                Explore available merit-based scholarships, financial grants, and partial fee waiver options
                                available for eligible international students.
                            </p>
                        </div>

                        <div class="mt-8 pt-4">
                            <a href="#counsellor"
                                class="group inline-flex items-center justify-center gap-2.5 rounded-xl bg-[#05275e] px-7 py-3.5 text-sm font-bold tracking-wide text-white shadow-lg shadow-blue-950/15 transition-all duration-300 hover:-translate-y-0.5 hover:bg-[#1968b2] hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#1968b2] focus:ring-offset-2">
                                <span>FIND A COUNSELLOR</span>
                                <iconify-icon icon="lucide:arrow-right"
                                    class="text-base transition-transform duration-300 group-hover:translate-x-1"></iconify-icon>
                            </a>
                        </div>
                    </div>

                </div>

            </section>






            {{-- CAMPUS LIFE --}}
            <section id="campus" class="scroll-mt-28">

                {{-- Section Header --}}
                <div class="mb-8">
                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-blue-200/60 bg-blue-50 px-3.5 py-1 text-xs font-bold tracking-wider text-[#1968b2]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#1968b2]"></span>
                        STUDENT EXPERIENCE
                    </span>

                    <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-[#05275e] sm:text-3xl">
                        Campus Life & Facilities
                    </h2>

                    <p class="mt-1.5 text-sm text-slate-500 sm:text-base">
                        Explore the key amenities and facilities that create a supportive student environment.
                    </p>
                </div>

                {{-- Facilities Grid --}}
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($facilities as $facility)
                        <div
                            class="group relative flex flex-col justify-between rounded-2xl border border-slate-200/80 bg-white p-5 shadow-sm ring-1 ring-slate-900/5 transition-all duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-md">

                            <div>
                                {{-- Icon Container --}}
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-[#1968b2] transition-colors duration-300 group-hover:bg-[#1968b2] group-hover:text-white">
                                    <iconify-icon icon="lucide:{{ $facility['icon'] }}" class="text-2xl"></iconify-icon>
                                </div>

                                {{-- Facility Name --}}
                                <h3 class="mt-4 text-sm font-bold leading-snug text-[#05275e] sm:text-base">
                                    {{ $facility['name'] }}
                                </h3>
                            </div>

                        </div>
                    @endforeach
                </div>

            </section>

            <section id="campus-list" class="scroll-mt-28">
                {{-- Campus Locations Header --}}
                <div class="mb-8 mt-16">
                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-blue-200/60 bg-blue-50 px-3.5 py-1 text-xs font-bold tracking-wider text-[#1968b2]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#1968b2]"></span>
                        GLOBAL PRESENCE
                    </span>

                    <h3 class="mt-3 text-2xl font-extrabold tracking-tight text-[#05275e] sm:text-3xl">
                        Available Campus Locations
                    </h3>

                    <p class="mt-1.5 text-sm text-slate-500 sm:text-base">
                        Explore our state-of-the-art university campus locations spread across vibrant regions.
                    </p>
                </div>

                {{-- Campus Cards Grid --}}
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($campuses as $campus)
                        <article
                            class="group flex flex-col justify-between overflow-hidden rounded-3xl border border-slate-200/80 bg-white shadow-lg shadow-slate-900/5 ring-1 ring-slate-900/5 transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-950/10">

                            {{-- Card Image Header --}}
                            <div class="relative h-48 overflow-hidden bg-slate-100">
                                <img src="{{ $campus['image'] }}" alt="{{ $campus['name'] }}"
                                    class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                    loading="lazy">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#05275e]/80 via-[#05275e]/20 to-transparent">
                                </div>

                                {{-- Country Badge Chip --}}
                                <span
                                    class="absolute bottom-4 left-4 rounded-full border border-white/20 bg-white/90 px-3.5 py-1 text-xs font-bold text-[#05275e] shadow-sm backdrop-blur-md">
                                    {{ $campus['country'] }}
                                </span>
                            </div>

                            {{-- Card Body Content --}}
                            <div class="flex flex-1 flex-col justify-between p-6">
                                <div>
                                    <h4 class="text-lg font-bold tracking-tight text-[#05275e]">
                                        {{ $campus['name'] }}
                                    </h4>

                                    <div
                                        class="mt-3 flex items-start gap-2.5 text-xs font-medium text-slate-500 leading-relaxed">
                                        <iconify-icon icon="lucide:map-pin"
                                            class="mt-0.5 shrink-0 text-base text-[#1968b2]"></iconify-icon>
                                        <span>{{ $campus['address'] }}</span>
                                    </div>
                                </div>

                                {{-- Card Footer --}}
                                <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-4">
                                    <span class="rounded-lg bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-600">
                                        {{ $campus['state'] }}
                                    </span>

                                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($campus['address'] . ', ' . $campus['country']) }}"
                                        target="_blank" rel="noopener noreferrer"
                                        class="group/link inline-flex items-center gap-1.5 text-xs font-bold text-[#1968b2] transition-colors hover:text-[#05275e]">
                                        <span>View on Map</span>
                                        <iconify-icon icon="lucide:external-link"
                                            class="transition-transform duration-300 group-hover/link:translate-x-0.5 group-hover/link:-translate-y-0.5"></iconify-icon>
                                    </a>
                                </div>
                            </div>

                        </article>
                    @endforeach
                </div>
            </section>


        </main>
    </div>
@endsection
