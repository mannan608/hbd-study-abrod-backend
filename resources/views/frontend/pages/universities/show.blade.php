@php
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
        'reviews' => '1,250',
        'students' => '53,000+',
        'international_students' => '20,000+',
        'programs' => '300+',
        'established' => '1853',
        'website' => 'https://www.unimelb.edu.au/',
        'logo' => 'https://ui-avatars.com/api/?name=U+Melbourne&background=0B1D36&color=fff&size=200',
        'cover' => 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=2000&q=90',
        'description' =>
            'The University of Melbourne is a leading Australian university known for its academic excellence, research innovation and diverse international student community. Students can explore a wide range of undergraduate and postgraduate study opportunities in a vibrant learning environment.',
        'tuition' => 'AUD 35,000 – 55,000',
        'duration' => '1 – 4 Years',
        'intakes' => 'February & July',
        'location' => 'Parkville, Melbourne, Australia',
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

    $facilities = [
        ['icon' => 'library', 'name' => 'Modern Libraries'],
        ['icon' => 'wifi', 'name' => 'Campus Wi-Fi'],
        ['icon' => 'building-2', 'name' => 'Student Accommodation'],
        ['icon' => 'dumbbell', 'name' => 'Sports Facilities'],
        ['icon' => 'users', 'name' => 'Student Communities'],
        ['icon' => 'utensils', 'name' => 'Dining Facilities'],
    ];

    $requirements = [
        'Academic transcripts and certificates',
        'Valid passport',
        'English language proficiency certificate',
        'Statement of Purpose (SOP)',
        'Letters of recommendation (if required)',
        'Updated CV or Resume (if applicable)',
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
@endphp
@extends('frontend.layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-brand-950">

        <div class="absolute inset-0 -z-20">
            <img src="{{ $university['cover'] }}" alt="{{ $university['name'] }}"
                class="h-full w-full object-cover opacity-30">
        </div>

        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-brand-950 via-brand-950/95 to-brand-900/70"></div>

        <div class="absolute -right-40 -top-40 -z-10 h-[500px] w-[500px] rounded-full bg-brand-500/20 blur-[120px]"></div>

        <div class="mx-auto max-w-7xl px-4 pb-20 pt-12 sm:px-6 sm:pb-24 lg:px-8 lg:pt-16">

            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">

                <div class="max-w-3xl">

                    {{-- University Logo --}}
                    <div class="mb-7 flex items-center gap-4">

                        <div
                            class="flex h-20 w-20 shrink-0 items-center justify-center overflow-hidden rounded-2xl border border-white/20 bg-white p-2 shadow-xl">
                            <img src="{{ $university['logo'] }}" alt="{{ $university['name'] }} logo"
                                class="h-full w-full object-contain">
                        </div>

                        <div>
                            <div class="mb-2 flex flex-wrap items-center gap-2">

                                <span
                                    class="inline-flex items-center gap-1.5 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-brand-100">
                                    <img src="https://flagcdn.com/w40/{{ $university['country_code'] }}.png"
                                        class="h-3 w-4 object-cover" alt="">
                                    {{ $university['country'] }}
                                </span>

                                <span
                                    class="rounded-full bg-brand-500 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-white">
                                    Featured University
                                </span>

                            </div>

                            <p class="text-sm text-brand-100/70">
                                {{ $university['type'] }}
                            </p>
                        </div>
                    </div>

                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-white sm:text-4xl lg:text-5xl">
                        {{ $university['name'] }}
                    </h1>

                    <div class="mt-5 flex flex-wrap items-center gap-x-5 gap-y-3 text-sm text-brand-100/80">

                        <div class="flex items-center gap-2">
                            <iconify-icon icon="lucide:map-pin" class="text-accent-cyan"></iconify-icon>
                            {{ $university['city'] }}
                        </div>

                        <div class="flex items-center gap-2">
                            <iconify-icon icon="lucide:calendar-days" class="text-accent-cyan"></iconify-icon>
                            Established {{ $university['established'] }}
                        </div>

                        <div class="flex items-center gap-1.5">
                            <iconify-icon icon="lucide:star" class="text-amber-400"></iconify-icon>
                            <span class="font-bold text-white">{{ $university['rating'] }}</span>
                            ({{ $university['reviews'] }} reviews)
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- Quick Facts --}}
    <section class="relative z-10 mx-auto -mt-8 max-w-7xl px-4 sm:px-6 lg:px-8">

        <div
            class="grid grid-cols-2 gap-3 rounded-2xl border border-neutral-200 bg-white p-4 shadow-xl shadow-brand-950/5 sm:grid-cols-3 lg:grid-cols-6 lg:p-6">

            @php
                $facts = [
                    ['icon' => 'trophy', 'label' => 'Ranking', 'value' => $university['ranking']],
                    ['icon' => 'users', 'label' => 'Total Students', 'value' => $university['students']],
                    ['icon' => 'globe', 'label' => 'International', 'value' => $university['international_students']],
                    ['icon' => 'book-open', 'label' => 'Study Programs', 'value' => $university['programs']],
                    ['icon' => 'wallet', 'label' => 'Annual Tuition', 'value' => $university['tuition']],
                    ['icon' => 'star', 'label' => 'Student Rating', 'value' => $university['rating'] . ' / 5'],
                ];
            @endphp

            @foreach ($facts as $fact)
                <div
                    class="border-b border-neutral-100 px-2 py-4 text-center last:border-0 sm:border-b-0 sm:border-r sm:last:border-r-0">
                    <iconify-icon icon="lucide:{{ $fact['icon'] }}" class="text-2xl text-brand-500"></iconify-icon>
                    <p class="mt-3 text-xs text-neutral-400">{{ $fact['label'] }}</p>
                    <p class="mt-1 text-sm font-bold text-brand-950">{{ $fact['value'] }}</p>
                </div>
            @endforeach

        </div>
    </section>


    {{-- Main Content --}}
    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8 lg:py-20">

        <div class="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-12">

            {{-- Left Content --}}
            <div class="space-y-16 lg:col-span-7">

                {{-- Overview --}}
                <section id="overview" class="scroll-mt-28">

                    <div class="mb-6">
                        <span class="text-xs font-bold uppercase tracking-[0.15em] text-brand-600">
                            About The Institution
                        </span>

                        <h2 class="mt-2 text-2xl font-bold tracking-tight text-brand-950 sm:text-3xl">
                            University Overview
                        </h2>
                    </div>

                    <div class="space-y-4 text-sm leading-7 text-neutral-600">
                        <p>
                            {{ $university['description'] }}
                        </p>

                        <p>
                            The university offers a diverse academic environment, modern learning
                            facilities and opportunities to connect with students from different
                            backgrounds. Its programs cover a wide range of academic disciplines.
                        </p>
                    </div>

                    <div class="mt-7">
<h1>Available Intake</h1>
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">

                       <div class="flex items-center gap-3 rounded-xl bg-white p-4 ring-1 ring-neutral-200">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-500">
                                <iconify-icon icon="lucide:calendar-days" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-xs text-neutral-400">Main Intakes</p>
                                <p class="text-sm font-semibold text-brand-950">{{ $university['intakes'] }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 rounded-xl bg-white p-4 ring-1 ring-neutral-200">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-500">
                                <iconify-icon icon="lucide:calendar-days" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-xs text-neutral-400">Intakes</p>
                                <p class="text-sm font-semibold text-brand-950">{{ $university['intakes'] }}</p>
                            </div>
                        </div>

                    </div>
                    </div>
                </section>


                {{-- Study Programs --}}
                <section id="programs" class="scroll-mt-28">

                    <div class="mb-7 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-[0.15em] text-brand-600">
                                Find Your Course
                            </span>
                            <h2 class="mt-2 text-2xl font-bold text-brand-950 sm:text-3xl">
                                Popular Study Programs
                            </h2>
                            <p class="mt-2 text-sm text-neutral-500">
                                Explore some of the available study options.
                            </p>
                        </div>

                        <a href="#enquiry"
                            class="inline-flex items-center gap-2 text-sm font-semibold text-brand-600 hover:text-brand-800">
                            Ask About Courses
                            <iconify-icon icon="lucide:arrow-up-right"></iconify-icon>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                        @foreach ($programs as $program)
                            <div
                                class="group rounded-2xl border border-neutral-200 bg-white p-5 transition hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg">

                                <div class="flex items-center justify-between">
                                    <div
                                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-50 text-brand-500">
                                        <iconify-icon icon="lucide:{{ $program['icon'] }}" class="text-xl"></iconify-icon>
                                    </div>

                                    <span
                                        class="rounded-full bg-neutral-100 px-3 py-1 text-[10px] font-semibold text-neutral-600">
                                        {{ $program['level'] }}
                                    </span>
                                </div>

                                <h3 class="mt-5 text-base font-bold text-brand-950">
                                    {{ $program['name'] }}
                                </h3>

                                <div class="mt-4 space-y-2 border-t border-neutral-100 pt-4">

                                    <div class="flex items-center justify-between text-xs">
                                        <span class="text-neutral-400">Duration</span>
                                        <span class="font-semibold text-neutral-700">{{ $program['duration'] }}</span>
                                    </div>

                                    <div class="flex items-center justify-between text-xs">
                                        <span class="text-neutral-400">Estimated Tuition</span>
                                        <span class="font-semibold text-brand-600">{{ $program['fee'] }}</span>
                                    </div>

                                </div>

                                <a href="#enquiry"
                                    class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-brand-600 transition group-hover:gap-3">
                                    Enquire Now
                                    <iconify-icon icon="lucide:arrow-right"></iconify-icon>
                                </a>

                            </div>
                        @endforeach

                    </div>
                </section>


                {{-- Entry Requirements --}}
                <section id="requirements" class="scroll-mt-28">

                    <div class="mb-7">
                        <span class="text-xs font-bold uppercase tracking-[0.15em] text-brand-600">
                            Before You Apply
                        </span>

                        <h2 class="mt-2 text-2xl font-bold text-brand-950 sm:text-3xl">
                            Entry Requirements
                        </h2>

                        <p class="mt-2 text-sm text-neutral-500">
                            General documents that may be required during the admission process.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-neutral-200 bg-white p-6 sm:p-8">

                        <div class="mb-6 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-50 text-brand-500">
                                <iconify-icon icon="lucide:file-check" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <h3 class="font-bold text-brand-950">Required Documents</h3>
                                <p class="text-xs text-neutral-400">General application checklist</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                            @foreach ($requirements as $requirement)
                                <div class="flex items-start gap-3 text-sm text-neutral-600">
                                    <iconify-icon icon="lucide:check-circle-2"
                                        class="mt-0.5 shrink-0 text-emerald-500 text-lg"></iconify-icon>
                                    {{ $requirement }}
                                </div>
                            @endforeach

                        </div>

                        <div class="mt-7 rounded-xl border border-amber-200 bg-amber-50 p-4">
                            <div class="flex items-start gap-3">
                                <iconify-icon icon="lucide:info" class="mt-0.5 text-lg text-amber-600"></iconify-icon>
                                <p class="text-xs leading-6 text-amber-800">
                                    Admission requirements vary by course and university.                                    
                                </p>
                            </div>
                        </div>

                    </div>
                </section>


                {{-- Tuition and Scholarships --}}
                <section id="fees" class="scroll-mt-28">

                    <div class="mb-7">
                        <span class="text-xs font-bold uppercase tracking-[0.15em] text-brand-600">
                            Plan Your Budget
                        </span>

                        <h2 class="mt-2 text-2xl font-bold text-brand-950 sm:text-3xl">
                            Tuition Fees & Scholarships
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                        <div class="rounded-2xl bg-brand-950 p-6 text-white">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/10 text-accent-cyan">
                                <iconify-icon icon="lucide:wallet" class="text-2xl"></iconify-icon>
                            </div>

                            <p class="mt-6 text-sm text-brand-100/70">Estimated Annual Tuition</p>

                            <h3 class="mt-2 text-2xl font-bold">{{ $university['tuition'] }}</h3>

                            <p class="mt-3 text-xs text-brand-100/60">
                                Actual fees depend on the selected program and academic year.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-neutral-200 bg-white p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                                <iconify-icon icon="lucide:award" class="text-2xl"></iconify-icon>
                            </div>

                            <h3 class="mt-6 text-lg font-bold text-brand-950">Scholarship Opportunities</h3>

                            <p class="mt-2 text-sm leading-6 text-neutral-500">
                                Explore available scholarships, grants and financial support
                                options for eligible international students.
                            </p>

                            <a href="#enquiry"
                                class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-brand-600">
                                Ask About Scholarships
                                <iconify-icon icon="lucide:arrow-right"></iconify-icon>
                            </a>
                        </div>

                    </div>
                </section>


                {{-- Campus Life --}}
                <section id="campus" class="scroll-mt-28">

                    <div class="mb-7">
                        <span class="text-xs font-bold uppercase tracking-[0.15em] text-brand-600">
                            Student Experience
                        </span>

                        <h2 class="mt-2 text-2xl font-bold text-brand-950 sm:text-3xl">
                            Campus Life & Facilities
                        </h2>

                        <p class="mt-2 text-sm text-neutral-500">
                            Discover the facilities and experiences that support student life.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-3 sm:grid-cols-3">

                        @foreach ($facilities as $facility)
                            <div
                                class="rounded-2xl border border-neutral-200 bg-white p-5 transition hover:border-brand-200 hover:shadow-md">
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

                    <div class="mt-5 grid grid-cols-2 gap-3">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=800&q=85"
                            alt="University campus" class="h-44 w-full rounded-2xl object-cover sm:h-64">

                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=85"
                            alt="Students on campus" class="h-44 w-full rounded-2xl object-cover sm:h-64">
                    </div>

                </section>

            </div>


            {{-- Right Sidebar --}}
            <aside class="lg:col-span-5">

                <div class="space-y-6 lg:sticky lg:top-34">

                    {{-- Enquiry Form --}}
                    <div id="enquiry"
                        class="scroll-mt-28 overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm">

                        <div class="bg-brand-950 p-6 text-white">
                            <span class="text-xs font-bold uppercase tracking-[0.15em] text-accent-cyan">
                                Get Expert Guidance
                            </span>

                            <h3 class="mt-2 text-xl font-bold">
                                Start Your Application Journey
                            </h3>

                            <p class="mt-2 text-xs leading-6 text-brand-100/70">
                                Share your details and our education counsellor will contact you.
                            </p>
                        </div>

                        <form action="#" method="POST" class="space-y-4 p-6">

                            {{-- Connect Laravel CSRF and backend endpoint when ready --}}
                            @csrf

                            <div>
                                <label class="mb-2 block text-xs font-semibold text-neutral-700">
                                    Full Name
                                </label>
                                <input type="text" name="name" placeholder="Enter your full name"
                                    class="w-full rounded-xl border border-neutral-200 px-4 py-3 text-sm outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/10">
                            </div>

                            <div>
                                <label class="mb-2 block text-xs font-semibold text-neutral-700">
                                    Email Address
                                </label>
                                <input type="email" name="email" placeholder="example@email.com"
                                    class="w-full rounded-xl border border-neutral-200 px-4 py-3 text-sm outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/10">
                            </div>

                            <div>
                                <label class="mb-2 block text-xs font-semibold text-neutral-700">
                                    Phone Number
                                </label>
                                <input type="tel" name="phone" placeholder="+880 1XXXXXXXXX"
                                    class="w-full rounded-xl border border-neutral-200 px-4 py-3 text-sm outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/10">
                            </div>

                            <div>
                                <label class="mb-2 block text-xs font-semibold text-neutral-700">
                                    Preferred Study Level
                                </label>

                                <select name="study_level"
                                    class="w-full rounded-xl border border-neutral-200 bg-white px-4 py-3 text-sm text-neutral-600 outline-none focus:border-brand-500">
                                    <option value="">Select study level</option>
                                    <option>Undergraduate</option>
                                    <option>Postgraduate</option>
                                    <option>PhD / Research</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <input type="hidden" name="university" value="{{ $university['name'] }}">

                            <button type="submit"
                                class="flex w-full items-center justify-center gap-2 rounded-xl bg-brand-500 px-5 py-3.5 text-sm font-semibold text-white transition hover:bg-brand-700">
                                Submit Enquiry
                                <iconify-icon icon="lucide:arrow-right"></iconify-icon>
                            </button>

                            <p class="text-center text-[11px] leading-5 text-neutral-400">
                                Your information will be used to respond to your enquiry.
                            </p>

                        </form>
                    </div>

                </div>

            </aside>

        </div>
    </div>


    <div class="max-w-7xl mx-auto ">
        <h2 class="text-xl font-bold mb-4">Available Campus Locations</h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach (['Albury-Wodonga', 'Bathurst', 'Canberra'] as $location)
                <div class="w-full max-w-sm">
                    <div
                        class="group relative overflow-hidden rounded-2xl
                                    border border-slate-200 bg-white
                                     transition-all duration-300
                                    hover:-translate-y-1 hover:border-blue-200
                                    hover:shadow-xl">

                        <div class="p-5">

                            <!-- Header -->
                            <div class="flex items-start justify-between gap-4">

                                <div class="flex items-center gap-3">

                                    <!-- Location Icon -->
                                    <div
                                        class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-50 text-[#1068b2]">

                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                            viewBox="0 0 24 24">

                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21s7-5.2 7-11a7 7 0 10-14 0c0 5.8 7 11 7 11z" />

                                            <circle cx="12" cy="10" r="2.5" />
                                        </svg>
                                    </div>

                                    <div>
                                        <h3 class="text-base font-bold text-slate-900">
                                            Albury-Wodonga
                                        </h3>

                                        <p class="mt-0.5 text-xs font-medium text-slate-500">
                                            New South Wales
                                        </p>
                                    </div>

                                </div>

                                <!-- Country -->
                                <span
                                    class="rounded-full bg-emerald-50 px-2.5 py-1 text-[10px] font-semibold text-emerald-700">
                                    Australia
                                </span>

                            </div>

                            <!-- Divider -->
                            <div class="my-5 border-t border-slate-100"></div>

                            <!-- Location Info -->
                            <div class="flex items-center gap-2 text-xs text-slate-500">

                                <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor"
                                    stroke-width="1.8" viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v20M2 12h20" />
                                </svg>

                                <span>
                                    Explore this location on map
                                </span>

                            </div>

                            <!-- Button -->
                            <a href="#"
                                class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-[#1068b2]  px-4 py-3 text-sm font-semibold text-white
                                             shadow-blue-200
                                            transition-all duration-200
                                            hover:bg-[#0d5795] hover:shadow-md">

                                View on map

                                <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6" />
                                </svg>

                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
