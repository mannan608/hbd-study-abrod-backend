@extends('frontend.layouts.app')

@section('content')
    @php
        /*
    |--------------------------------------------------------------------------
    | University Dummy Data
    |--------------------------------------------------------------------------
    */

        $university = [
            'name' => 'University of Melbourne',
            'short_name' => 'UoM',
            'slug' => 'university-of-melbourne',
            'country' => 'Australia',
            'country_code' => 'au',
            'city' => 'Melbourne, Victoria',
            'type' => 'Public Research University',
            'ranking' => '#1 in Australia',
            'rating' => '4.9',
            'students' => '53,000+',
            'international_students' => '20,000+',
            'programs' => '300+',
            'established' => '1853',
            'website' => 'https://www.unimelb.edu.au/',
            'logo' => 'https://ui-avatars.com/api/?name=U+Melbourne&background=0B1D36&color=fff&size=200',
            'cover' => 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=2000&q=90',
            'tuition' => 'AUD 35,000 – 55,000',
            'duration' => '1 – 4 Years',
            'intakes' => 'February & July',
            'location' => 'Parkville, Melbourne, Australia',
        ];

        $facts = [
            ['icon' => 'trophy', 'label' => 'National Ranking', 'value' => '#1 in Australia'],
            ['icon' => 'users', 'label' => 'Total Students', 'value' => '53,000+'],
            ['icon' => 'globe-2', 'label' => 'International Students', 'value' => '20,000+'],
            ['icon' => 'book-open', 'label' => 'Study Programs', 'value' => '300+'],
            ['icon' => 'calendar-days', 'label' => 'Established', 'value' => '1853'],
            ['icon' => 'star', 'label' => 'Student Rating', 'value' => '4.9 / 5'],
        ];

        $programs = [
            [
                'name' => 'Bachelor of Business',
                'level' => 'Undergraduate',
                'duration' => '3 Years',
                'fee' => 'AUD 45,000/year',
                'icon' => 'briefcase-business',
            ],
            [
                'name' => 'Master of Information Technology',
                'level' => 'Postgraduate',
                'duration' => '2 Years',
                'fee' => 'AUD 52,000/year',
                'icon' => 'monitor',
            ],
            [
                'name' => 'Master of Engineering',
                'level' => 'Postgraduate',
                'duration' => '2 Years',
                'fee' => 'AUD 50,000/year',
                'icon' => 'settings',
            ],
            [
                'name' => 'Bachelor of Science',
                'level' => 'Undergraduate',
                'duration' => '3 Years',
                'fee' => 'AUD 48,000/year',
                'icon' => 'flask-conical',
            ],
        ];

        $requirements = [
            'Academic transcripts and certificates',
            'Valid passport',
            'English language proficiency certificate',
            'Statement of Purpose (SOP)',
            'Letters of recommendation (if required)',
            'Updated CV or Resume (if applicable)',
        ];

        $facilities = [
            ['icon' => 'library', 'name' => 'Modern Libraries'],
            ['icon' => 'wifi', 'name' => 'Campus Wi-Fi'],
            ['icon' => 'building-2', 'name' => 'Student Accommodation'],
            ['icon' => 'dumbbell', 'name' => 'Sports Facilities'],
            ['icon' => 'users', 'name' => 'Student Communities'],
            ['icon' => 'utensils', 'name' => 'Dining Facilities'],
        ];

        $admissionSteps = [
            [
                'number' => '01',
                'title' => 'Choose Your Program',
                'description' => 'Explore available courses and select a program that matches your academic goals.',
            ],
            [
                'number' => '02',
                'title' => 'Prepare Documents',
                'description' => 'Collect academic transcripts, English test results and supporting documents.',
            ],
            [
                'number' => '03',
                'title' => 'Submit Application',
                'description' => 'Complete the application process and submit the required documents.',
            ],
            [
                'number' => '04',
                'title' => 'Receive Your Offer',
                'description' => 'Review your admission offer and follow the university instructions.',
            ],
        ];

        $campuses = [
            [
                'name' => 'Parkville Campus',
                'state' => 'Victoria',
                'country' => 'Australia',
                'address' => 'Parkville, Melbourne VIC',
                'image' => 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=700&q=85',
            ],
            [
                'name' => 'Southbank Campus',
                'state' => 'Victoria',
                'country' => 'Australia',
                'address' => 'Southbank, Melbourne VIC',
                'image' =>
                    'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=700&q=85',
            ],
            [
                'name' => 'Burnley Campus',
                'state' => 'Victoria',
                'country' => 'Australia',
                'address' => 'Burnley, Melbourne VIC',
                'image' =>
                    'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=700&q=85',
            ],
        ];

        $navigation = [
            ['label' => 'Overview', 'id' => 'overview'],
            ['label' => 'Programs', 'id' => 'programs'],
            ['label' => 'Intakes', 'id' => 'intakes'],
            ['label' => 'Requirements', 'id' => 'requirements'],
            ['label' => 'Fees & Scholarships', 'id' => 'fees'],
            ['label' => 'Campus', 'id' => 'campus'],
            ['label' => 'Admission', 'id' => 'admission'],
        ];
    @endphp


    {{-- =========================================================
    HERO SECTION
========================================================= --}}

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



                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    SECTION NAVIGATION
========================================================= --}}

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



    {{-- =========================================================
    MAIN CONTENT
========================================================= --}}

    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8 lg:py-20">

        <div class="grid grid-cols-1 items-start gap-10 lg:grid-cols-12 lg:gap-12">


            {{-- LEFT CONTENT --}}
            <main class="space-y-16 lg:col-span-8">


                {{-- OVERVIEW --}}
                <section id="overview" class="scroll-mt-28">

                    <div class="mb-7">

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                            About The Institution
                        </span>

                        <h2 class="mt-2 text-2xl font-bold tracking-tight text-brand-950 sm:text-3xl">
                            Discover {{ $university['name'] }}
                        </h2>

                        <p class="mt-3 max-w-2xl text-sm leading-7 text-neutral-500">
                            Learn more about the institution, its academic environment and opportunities for international
                            students.
                        </p>
                        <p class="mt-4 text-sm leading-8 text-neutral-600">
                            The university offers a diverse academic environment, modern learning facilities
                            and opportunities to connect with students from different backgrounds.
                            Its programs cover a wide range of academic disciplines.
                        </p>

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


                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

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



                {{-- AVAILABLE INTAKES --}}
                <section id="intakes" class="scroll-mt-28">

                    <div class="mb-7">

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                            Application Calendar
                        </span>

                        <h2 class="mt-2 text-2xl font-bold text-brand-950 sm:text-3xl">
                            Available Intakes
                        </h2>

                        <p class="mt-2 text-sm text-neutral-500">
                            Explore the main admission periods for international students.
                        </p>

                    </div>


                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                        <div class="relative overflow-hidden rounded-2xl border border-neutral-200 bg-white p-6">

                            <div class="absolute right-0 top-0 h-28 w-28 rounded-full bg-brand-50 blur-2xl"></div>

                            <div class="relative">

                                <div class="flex items-center justify-between">

                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-500">
                                        <iconify-icon icon="lucide:calendar-days" class="text-2xl"></iconify-icon>
                                    </div>

                                    <span
                                        class="rounded-full bg-emerald-50 px-3 py-1.5 text-[10px] font-bold uppercase text-emerald-700">
                                        Main Intake
                                    </span>

                                </div>

                                <h3 class="mt-6 text-xl font-bold text-brand-950">
                                    February Intake
                                </h3>

                                <p class="mt-2 text-sm leading-6 text-neutral-500">
                                    Start your academic journey in the first major intake of the year.
                                </p>

                                <div class="mt-5 border-t border-neutral-100 pt-4">

                                    <p class="text-xs text-neutral-400">Application Period</p>

                                    <p class="mt-1 text-sm font-semibold text-brand-950">
                                        Check program availability
                                    </p>

                                </div>

                            </div>

                        </div>


                        <div class="relative overflow-hidden rounded-2xl border border-neutral-200 bg-white p-6">

                            <div class="absolute right-0 top-0 h-28 w-28 rounded-full bg-accent-cyan/10 blur-2xl"></div>

                            <div class="relative">

                                <div class="flex items-center justify-between">

                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-accent-cyan/10 text-brand-600">
                                        <iconify-icon icon="lucide:calendar-check" class="text-2xl"></iconify-icon>
                                    </div>

                                    <span
                                        class="rounded-full bg-blue-50 px-3 py-1.5 text-[10px] font-bold uppercase text-blue-700">
                                        Main Intake
                                    </span>

                                </div>

                                <h3 class="mt-6 text-xl font-bold text-brand-950">
                                    July Intake
                                </h3>

                                <p class="mt-2 text-sm leading-6 text-neutral-500">
                                    Explore available mid-year entry opportunities across selected programs.
                                </p>

                                <div class="mt-5 border-t border-neutral-100 pt-4">

                                    <p class="text-xs text-neutral-400">Application Period</p>

                                    <p class="mt-1 text-sm font-semibold text-brand-950">
                                        Check program availability
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>



                {{-- ENTRY REQUIREMENTS --}}
                <section id="requirements" class="scroll-mt-28">

                    <div class="mb-7">

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                            Before You Apply
                        </span>

                        <h2 class="mt-2 text-2xl font-bold text-brand-950 sm:text-3xl">
                            Entry Requirements
                        </h2>

                        <p class="mt-2 text-sm text-neutral-500">
                            Prepare the general documents needed for your application.
                        </p>

                    </div>


                    <div class="overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm">

                        <div class="flex items-center gap-4 border-b border-neutral-100 p-6">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-500">
                                <iconify-icon icon="lucide:file-check-2" class="text-2xl"></iconify-icon>
                            </div>

                            <div>
                                <h3 class="font-bold text-brand-950">Application Documents</h3>
                                <p class="mt-1 text-xs text-neutral-400">General admission checklist</p>
                            </div>

                        </div>


                        <div class="grid grid-cols-1 gap-x-8 gap-y-5 p-6 sm:grid-cols-2">

                            @foreach ($requirements as $requirement)
                                <div class="flex items-start gap-3 text-sm text-neutral-600">

                                    <iconify-icon icon="lucide:check-circle-2"
                                        class="mt-0.5 shrink-0 text-lg text-emerald-500"></iconify-icon>

                                    <span class="leading-6">{{ $requirement }}</span>

                                </div>
                            @endforeach

                        </div>


                        <div class="border-t border-amber-100 bg-amber-50/70 p-5">

                            <div class="flex items-start gap-3">

                                <iconify-icon icon="lucide:info"
                                    class="mt-0.5 shrink-0 text-lg text-amber-600"></iconify-icon>

                                <p class="text-xs leading-6 text-amber-800">
                                    Admission requirements vary by course and applicant background.
                                    Always verify the latest requirements with the official university.
                                </p>

                            </div>

                        </div>

                    </div>

                </section>



                {{-- TUITION & SCHOLARSHIPS --}}
                <section id="fees" class="scroll-mt-28">

                    <div class="mb-7">

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                            Plan Your Budget
                        </span>

                        <h2 class="mt-2 text-2xl font-bold text-brand-950 sm:text-3xl">
                            Tuition Fees & Scholarships
                        </h2>

                        <p class="mt-2 text-sm text-neutral-500">
                            Get an overview of estimated study costs and financial support options.
                        </p>

                    </div>


                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                        {{-- Tuition --}}
                        <div class="relative overflow-hidden rounded-2xl bg-brand-950 p-7 text-white">

                            <div class="absolute -right-8 -top-8 h-36 w-36 rounded-full bg-brand-500/20 blur-3xl"></div>

                            <div class="relative">

                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/10 text-accent-cyan">
                                    <iconify-icon icon="lucide:wallet" class="text-2xl"></iconify-icon>
                                </div>

                                <p class="mt-7 text-xs font-medium text-brand-100/60">
                                    Estimated Annual Tuition
                                </p>

                                <h3 class="mt-2 text-2xl font-bold">
                                    {{ $university['tuition'] }}
                                </h3>

                                <p class="mt-2 text-xs text-brand-100/50">
                                    AUD per academic year
                                </p>

                                <div class="mt-6 border-t border-white/10 pt-5">

                                    <p class="text-xs leading-6 text-brand-100/70">
                                        Tuition varies depending on the selected course and academic year.
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- Scholarship --}}
                        <div class="rounded-2xl border border-neutral-200 bg-white p-7">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                                <iconify-icon icon="lucide:award" class="text-2xl"></iconify-icon>
                            </div>

                            <h3 class="mt-6 text-lg font-bold text-brand-950">
                                Scholarship Opportunities
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-neutral-500">
                                Explore available scholarships, grants and financial support
                                options for eligible international students.
                            </p>

                            <a href="#enquiry"
                                class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-brand-600 transition hover:gap-3">

                                Explore Scholarships

                                <iconify-icon icon="lucide:arrow-right"></iconify-icon>

                            </a>

                        </div>

                    </div>

                </section>



                {{-- CAMPUS LIFE --}}
                <section id="campus" class="scroll-mt-28">

                    <div class="mb-7">

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                            Student Experience
                        </span>

                        <h2 class="mt-2 text-2xl font-bold text-brand-950 sm:text-3xl">
                            Campus Life & Facilities
                        </h2>

                        <p class="mt-2 text-sm text-neutral-500">
                            Explore the facilities that create a supportive student environment.
                        </p>

                    </div>


                    <div class="grid grid-cols-2 gap-3 sm:grid-cols-3">

                        @foreach ($facilities as $facility)
                            <div
                                class="rounded-2xl border border-neutral-200 bg-white p-5 transition hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg">

                                <div
                                    class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-50 text-brand-500">
                                    <iconify-icon icon="lucide:{{ $facility['icon'] }}" class="text-xl"></iconify-icon>
                                </div>

                                <h3 class="mt-4 text-sm font-semibold text-brand-950">
                                    {{ $facility['name'] }}
                                </h3>

                            </div>
                        @endforeach

                    </div>                                    

                </section>


            </main>



            {{-- RIGHT SIDEBAR --}}
            <aside class="lg:col-span-4">

                <div class="space-y-6 lg:sticky lg:top-29">


                    <div class="rounded-3xl border border-white/15 bg-white/[0.08] p-6 shadow-2xl backdrop-blur-xl sm:p-7">

                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-accent-cyan">
                            University Highlights
                        </p>

                        <div class="mt-6 space-y-5">

                            <div class="flex items-center justify-between gap-4">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-accent-cyan">
                                        <iconify-icon icon="lucide:trophy" class="text-xl"></iconify-icon>
                                    </div>

                                    <span class="text-sm text-brand-100/70">National Ranking</span>

                                </div>

                                <span class="text-sm font-bold text-white">{{ $university['ranking'] }}</span>

                            </div>


                            <div class="flex items-center justify-between gap-4">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-accent-cyan">
                                        <iconify-icon icon="lucide:users" class="text-xl"></iconify-icon>
                                    </div>

                                    <span class="text-sm text-brand-100/70">Total Students</span>

                                </div>

                                <span class="text-sm font-bold text-white">{{ $university['students'] }}</span>

                            </div>


                            <div class="flex items-center justify-between gap-4">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-accent-cyan">
                                        <iconify-icon icon="lucide:book-open" class="text-xl"></iconify-icon>
                                    </div>

                                    <span class="text-sm text-brand-100/70">Study Programs</span>

                                </div>

                                <span class="text-sm font-bold text-white">{{ $university['programs'] }}</span>

                            </div>

                        </div>


                        <div class="my-6 border-t border-white/10"></div>


                        <div>

                            <p class="text-xs text-brand-100/60">Estimated Annual Tuition</p>

                            <h3 class="mt-2 text-2xl font-bold text-white">
                                {{ $university['tuition'] }}
                            </h3>

                            <p class="mt-1 text-xs text-brand-100/50">
                                Australian Dollars (AUD)
                            </p>

                        </div>

                        <a href="#enquiry"
                            class="mt-6 flex w-full items-center justify-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-brand-950 transition hover:bg-accent-cyan">

                            Enquire About Admission

                            <iconify-icon icon="lucide:arrow-up-right"></iconify-icon>

                        </a>

                    </div>



                    {{-- CONSULTATION CARD --}}
                    <div
                        class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-brand-900 to-brand-700 p-6 text-white">

                        <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-accent-cyan/10 blur-3xl"></div>

                        <div class="relative">

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/10 text-accent-cyan">
                                <iconify-icon icon="lucide:headset" class="text-2xl"></iconify-icon>
                            </div>

                            <h3 class="mt-5 text-xl font-bold">
                                Need Help Choosing?
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-brand-100/75">
                                Speak with our education counsellors to explore your study options and plan your
                                application.
                            </p>

                            <a href="#enquiry"
                                class="mt-6 inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-brand-950 transition hover:bg-accent-cyan">

                                Talk to a Counsellor

                                <iconify-icon icon="lucide:arrow-right"></iconify-icon>

                            </a>

                        </div>

                    </div>


                </div>
            </aside>
        </div>
    </div>
    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8 lg:py-20">
  {{-- Campus Locations --}}
                    <div class="mb-6 mt-12">

                        <h3 class="text-xl font-bold text-brand-950">
                            Available Campus Locations
                        </h3>

                        <p class="mt-2 text-sm text-neutral-500">
                            Explore different university campus locations.
                        </p>

                    </div>


                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-4">

                        @foreach ($campuses as $campus)
                            <article
                                class="group overflow-hidden rounded-2xl border border-neutral-200 bg-white transition hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl">

                                <div class="relative h-40 overflow-hidden">

                                    <img src="{{ $campus['image'] }}" alt="{{ $campus['name'] }}"
                                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105">

                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                                    <span
                                        class="absolute bottom-4 left-5 rounded-full bg-white/95 px-3 py-1 text-[10px] font-bold text-brand-950">
                                        {{ $campus['country'] }}
                                    </span>

                                </div>


                                <div class="p-5">

                                    <h4 class="text-base font-bold text-brand-950">
                                        {{ $campus['name'] }}
                                    </h4>

                                    <div class="mt-3 flex items-center gap-2 text-xs text-neutral-500">

                                        <iconify-icon icon="lucide:map-pin" class="text-brand-500"></iconify-icon>

                                        {{ $campus['address'] }}

                                    </div>

                                    <div class="mt-4 flex items-center justify-between border-t border-neutral-100 pt-4">

                                        <span class="text-xs text-neutral-400">
                                            {{ $campus['state'] }}
                                        </span>

                                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($campus['address'] . ', ' . $campus['country']) }}"
                                            target="_blank" rel="noopener noreferrer"
                                            class="inline-flex items-center gap-2 text-xs font-semibold text-brand-600 hover:text-brand-800">
                                            View on Map
                                            <iconify-icon icon="lucide:external-link"></iconify-icon>
                                        </a>

                                    </div>

                                </div>

                            </article>
                        @endforeach

                    </div>
    </section>
@endsection
