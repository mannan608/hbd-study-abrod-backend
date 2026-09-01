@extends('backend.layouts.app')

@section('content')
<div class="relative w-full">
    <main class="flex-1 space-y-6">

        {{-- ===================== PROFILE HEADER ===================== --}}
        <section class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm">
            <div class="relative h-32 bg-gradient-to-r from-brand-700 via-brand-600 to-brand-500 sm:h-40">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.16),transparent_45%)]"></div>
            </div>

            <div class="px-5 pb-6 sm:px-8">
                <div class="-mt-14 flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between relative">
                    {{-- Profile Photo + Basic Info --}}
                    <div class="flex flex-col items-start gap-4 sm:flex-row sm:items-end">
                        <img
                            src="https://randomuser.me/api/portraits/women/44.jpg"
                            alt="Aisha Rahman"
                            class="h-28 w-28 rounded-2xl border-4 border-white object-cover shadow-lg"
                        >
                        <div class="pb-1">
                            <div class="mb-3 flex flex-wrap items-center gap-2">
                                <h1 class="text-2xl font-bold tracking-tight text-white">
                                    Aisha Rahman
                                </h1>
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-200">
                                    <iconify-icon icon="lucide:circle-check" class="text-sm"></iconify-icon>
                                    Ready for Visa Submission
                                </span>
                            </div>

                            <p class="flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-slate-600">
                                <span class="flex items-center gap-1.5">
                                    <iconify-icon icon="lucide:phone" class="text-brand-500"></iconify-icon>
                                    +880 1315 55xxxxxx
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <iconify-icon icon="lucide:mail" class="text-brand-500"></iconify-icon>
                                    aisha.rahman@email.com
                                </span>
                            </p>

                            <p class="mt-1.5 flex items-center gap-1.5 text-sm text-slate-500">
                                <iconify-icon icon="lucide:map-pin" class="text-brand-500"></iconify-icon>
                                Dhaka, Bangladesh · Seeking study abroad
                            </p>
                        </div>
                    </div>

                    {{-- Key Stats --}}
                    <div class="flex gap-6 border-t border-brand-100 pt-4 sm:border-0 sm:pt-0">
                        <div class="text-center">
                            <p class="text-xl font-bold text-brand-950">3.82</p>
                            <p class="mt-0.5 text-xs text-slate-500">GPA</p>
                        </div>
                        <div class="text-center">
                            <p class="text-xl font-bold text-brand-950">7.5</p>
                            <p class="mt-0.5 text-xs text-slate-500">IELTS</p>
                        </div>
                        <div class="text-center">
                            <p class="text-xl font-bold text-brand-600">92%</p>
                            <p class="mt-0.5 text-xs text-slate-500">Application Ready</p>
                        </div>
                    </div>
                </div>

                {{-- Tags + Action Buttons --}}
                <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex flex-wrap gap-2">
                        <span class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                            Passport · Bangladesh
                        </span>
                        <span class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                            Intake · September 2026
                        </span>
                        <span class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                            Open to scholarships
                        </span>
                    </div>

                    <div class="flex flex-wrap gap-2">
                        <button class="rounded-lg border border-brand-200 bg-white px-4 py-2 text-sm font-semibold text-brand-700 hover:bg-brand-50 transition">
                            Save Draft
                        </button>
                        <button class="rounded-lg border border-brand-200 bg-white px-4 py-2 text-sm font-semibold text-brand-700 hover:bg-brand-50 transition">
                            Preview Application
                        </button>
                        <button class="rounded-lg bg-brand-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-brand-700 transition">
                            Submit for Visa
                        </button>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================== MAIN GRID ===================== --}}
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

            {{-- LEFT COLUMN --}}
            <div class="space-y-6 lg:col-span-8">

                {{-- 1. PERSONAL INFORMATION --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                <iconify-icon icon="lucide:user" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">Personal Information</p>
                                <h2 class="text-lg font-bold text-brand-950">Identity & Contact</h2>
                            </div>
                        </div>
                        <span class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                            <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon> Complete
                        </span>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                        <div>
                            <p class="text-xs text-slate-500">Full Legal Name (as per passport)</p>
                            <p class="mt-1 font-semibold text-brand-950">Aisha Rahman</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Date of Birth</p>
                            <p class="mt-1 font-semibold text-brand-950">15 March 2003</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Gender</p>
                            <p class="mt-1 font-semibold text-brand-950">Female</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Nationality</p>
                            <p class="mt-1 font-semibold text-brand-950">Bangladeshi</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Place of Birth</p>
                            <p class="mt-1 font-semibold text-brand-950">Dhaka, Bangladesh</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Marital Status</p>
                            <p class="mt-1 font-semibold text-brand-950">Single</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Passport Number</p>
                            <p class="mt-1 font-semibold text-brand-950">BX 0123456</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Passport Issue Date</p>
                            <p class="mt-1 font-semibold text-brand-950">12 Jan 2022</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Passport Expiry Date</p>
                            <p class="mt-1 font-semibold text-brand-950">11 Jan 2032</p>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div>
                            <p class="text-xs text-slate-500">Current Residential Address</p>
                            <p class="mt-1 text-sm font-medium text-brand-950">House 42, Road 11, Banani, Dhaka 1213, Bangladesh</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Permanent Address</p>
                            <p class="mt-1 text-sm font-medium text-brand-950">Same as current</p>
                        </div>
                    </div>
                </section>

                {{-- 2. ACADEMIC BACKGROUND --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">Academic Background</p>
                            <h2 class="text-lg font-bold text-brand-950">Education History</h2>
                        </div>
                    </div>

                    {{-- Highest Qualification --}}
                    <div class="mt-6 rounded-xl border border-brand-100 bg-brand-25/50 p-5">
                        <div class="flex flex-col justify-between gap-3 sm:flex-row">
                            <div>
                                <h3 class="font-bold text-brand-950">BSc (Hons) Computer Science</h3>
                                <p class="mt-1 text-sm text-slate-500">Northfield University · Manchester, United Kingdom</p>
                            </div>
                            <span class="text-xs font-semibold text-brand-700">2022 — 2026</span>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-3 sm:grid-cols-4">
                            <div class="rounded-lg bg-white p-3 text-center shadow-sm">
                                <p class="text-xs text-slate-500">GPA</p>
                                <p class="mt-1 font-bold text-brand-950">3.82 / 4.0</p>
                            </div>
                            <div class="rounded-lg bg-white p-3 text-center shadow-sm">
                                <p class="text-xs text-slate-500">Expected Award</p>
                                <p class="mt-1 font-bold text-brand-950">First Class</p>
                            </div>
                            <div class="rounded-lg bg-white p-3 text-center shadow-sm">
                                <p class="text-xs text-slate-500">Credits</p>
                                <p class="mt-1 font-bold text-brand-950">240 / 360</p>
                            </div>
                            <div class="rounded-lg bg-white p-3 text-center shadow-sm">
                                <p class="text-xs text-slate-500">Graduation</p>
                                <p class="mt-1 font-bold text-brand-950">Jun 2026</p>
                            </div>
                        </div>
                    </div>

                    {{-- Previous Education Table --}}
                    <div class="mt-6">
                        <h4 class="text-sm font-semibold text-brand-900 mb-3">Previous Education</h4>
                        <div class="overflow-x-auto rounded-xl border border-brand-100">
                            <table class="min-w-full text-sm">
                                <thead class="bg-brand-50 text-left text-xs font-semibold text-brand-700">
                                    <tr>
                                        <th class="px-4 py-3">Qualification</th>
                                        <th class="px-4 py-3">Institution</th>
                                        <th class="px-4 py-3">Year</th>
                                        <th class="px-4 py-3">Result</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-brand-100">
                                    <tr>
                                        <td class="px-4 py-3 font-medium">Higher Secondary Certificate</td>
                                        <td class="px-4 py-3 text-slate-600">Ideal College, Dhaka</td>
                                        <td class="px-4 py-3">2021</td>
                                        <td class="px-4 py-3 font-semibold">GPA 5.00</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-medium">Secondary School Certificate</td>
                                        <td class="px-4 py-3 text-slate-600">Viqarunnisa Noon School</td>
                                        <td class="px-4 py-3">2019</td>
                                        <td class="px-4 py-3 font-semibold">GPA 5.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Test Scores --}}
                    <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="rounded-xl border border-brand-100 p-4">
                            <p class="text-xs font-medium text-slate-500">English Proficiency</p>
                            <p class="mt-1 font-bold text-brand-950">IELTS Academic — Overall 7.5</p>
                            <p class="text-xs text-slate-500 mt-1">Listening 8.0 · Reading 7.5 · Writing 7.0 · Speaking 7.5 · Aug 2024</p>
                        </div>
                        <div class="rounded-xl border border-brand-100 p-4">
                            <p class="text-xs font-medium text-slate-500">Other Tests</p>
                            <p class="mt-1 font-bold text-brand-950">Not required / Not taken</p>
                        </div>
                    </div>
                </section>

                {{-- 3. STUDY PLAN & UNIVERSITY --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:map" class="text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">Study Plan</p>
                            <h2 class="text-lg font-bold text-brand-950">Intended Programme</h2>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <p class="text-xs text-slate-500">Programme Name</p>
                            <p class="mt-1 font-semibold text-brand-950">MSc Human-Computer Interaction & Design</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Degree Level</p>
                            <p class="mt-1 font-semibold text-brand-950">Master’s (Taught)</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">University</p>
                            <p class="mt-1 font-semibold text-brand-950">University of Manchester</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Country</p>
                            <p class="mt-1 font-semibold text-brand-950">United Kingdom</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Course Duration</p>
                            <p class="mt-1 font-semibold text-brand-950">1 year (full-time)</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Intended Start Date</p>
                            <p class="mt-1 font-semibold text-brand-950">September 2026</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Offer Letter Status</p>
                            <p class="mt-1">
                                <span class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                    Unconditional Offer Received
                                </span>
                            </p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Tuition Fee</p>
                            <p class="mt-1 font-semibold text-brand-950">£28,500 / year</p>
                        </div>
                    </div>

                    <div class="mt-5 rounded-xl bg-brand-25 p-4">
                        <p class="text-xs font-medium text-brand-700 mb-1">Study Plan Summary</p>
                        <p class="text-sm leading-relaxed text-slate-600">
                            I aim to specialise in accessible digital product design and human-centred research. The programme’s strong industry links and research focus will prepare me for a career in UX research and inclusive design in the UK or Europe.
                        </p>
                    </div>
                </section>

                {{-- 4. FINANCIAL INFORMATION --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:wallet" class="text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">Financial Information</p>
                            <h2 class="text-lg font-bold text-brand-950">Funding & Sponsorship</h2>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div>
                            <p class="text-xs text-slate-500">Primary Source of Funds</p>
                            <p class="mt-1 font-semibold text-brand-950">Family support + Scholarship</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Estimated Total Funds Available</p>
                            <p class="mt-1 font-semibold text-brand-950">£42,000</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Bank Statements Status</p>
                            <p class="mt-1">
                                <span class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                    Uploaded & Verified
                                </span>
                            </p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Affidavit of Support</p>
                            <p class="mt-1">
                                <span class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                    Signed & Notarised
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 rounded-xl border border-brand-100 p-4">
                        <p class="text-sm font-semibold text-brand-950 mb-2">Sponsor Details</p>
                        <div class="grid grid-cols-1 gap-3 sm:grid-cols-3 text-sm">
                            <div>
                                <p class="text-xs text-slate-500">Sponsor Name</p>
                                <p class="font-medium">Mohammed Rahman</p>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500">Relationship</p>
                                <p class="font-medium">Father</p>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500">Occupation</p>
                                <p class="font-medium">Business Owner</p>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- 5. FAMILY & BACKGROUND --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:users" class="text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">Family & Background</p>
                            <h2 class="text-lg font-bold text-brand-950">Family Information</h2>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div class="rounded-xl border border-brand-100 p-4">
                            <p class="text-xs font-medium text-slate-500 mb-2">Father</p>
                            <p class="font-semibold text-brand-950">Mohammed Rahman</p>
                            <p class="text-sm text-slate-600 mt-1">Business Owner · +880 17xxxxxxxx</p>
                        </div>
                        <div class="rounded-xl border border-brand-100 p-4">
                            <p class="text-xs font-medium text-slate-500 mb-2">Mother</p>
                            <p class="font-semibold text-brand-950">Fatima Rahman</p>
                            <p class="text-sm text-slate-600 mt-1">Homemaker · +880 18xxxxxxxx</p>
                        </div>
                    </div>

                    <div class="mt-5">
                        <p class="text-xs text-slate-500">Siblings</p>
                        <p class="mt-1 text-sm font-medium text-brand-950">1 younger brother (currently studying in Class 10)</p>
                    </div>

                    <div class="mt-5">
                        <p class="text-xs text-slate-500">Previous Travel / Visa History</p>
                        <p class="mt-1 text-sm text-slate-600">No previous visa refusals. Short tourist visit to Malaysia (2023).</p>
                    </div>
                </section>

                {{-- 6. WORK EXPERIENCE & EXTRACURRICULARS --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:briefcase" class="text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">Experience & Achievements</p>
                            <h2 class="text-lg font-bold text-brand-950">Work & Leadership</h2>
                        </div>
                    </div>

                    <div class="mt-6 space-y-4">
                        <article class="rounded-xl border border-brand-100 p-4">
                            <div class="flex justify-between gap-3">
                                <div>
                                    <h3 class="font-bold text-brand-950">Digital Experience Intern</h3>
                                    <p class="text-sm text-slate-500">Northfield University · Student Services</p>
                                </div>
                                <span class="text-xs text-slate-400">Sep 2024 — Present</span>
                            </div>
                            <p class="mt-3 text-sm text-slate-600">Mapped student journeys and built accessible prototypes for wellbeing services.</p>
                        </article>
                        <article class="rounded-xl border border-brand-100 p-4">
                            <div class="flex justify-between gap-3">
                                <div>
                                    <h3 class="font-bold text-brand-950">Student Technology Mentor</h3>
                                    <p class="text-sm text-slate-500">Northfield University · Learning Hub</p>
                                </div>
                                <span class="text-xs text-slate-400">Oct 2023 — May 2024</span>
                            </div>
                            <p class="mt-3 text-sm text-slate-600">Supported first-year students with research workflows and portfolio preparation.</p>
                        </article>
                    </div>
                </section>

            </div>

            {{-- RIGHT COLUMN --}}
            <aside class="space-y-6 lg:col-span-4">

                {{-- Documents Checklist --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">Documents</p>
                        <h2 class="mt-1 text-lg font-bold text-brand-950">Visa Checklist</h2>
                    </div>

                    <div class="mt-5 space-y-3">
                        @php
                            $docs = [
                                ['name' => 'Passport Copy', 'status' => 'Ready', 'icon' => 'circle-check', 'color' => 'emerald'],
                                ['name' => 'Academic Transcripts', 'status' => 'Ready', 'icon' => 'circle-check', 'color' => 'emerald'],
                                ['name' => 'Degree Certificates', 'status' => 'Ready', 'icon' => 'circle-check', 'color' => 'emerald'],
                                ['name' => 'IELTS / English Test', 'status' => 'Verified', 'icon' => 'circle-check', 'color' => 'emerald'],
                                ['name' => 'Unconditional Offer Letter', 'status' => 'Ready', 'icon' => 'circle-check', 'color' => 'emerald'],
                                ['name' => 'Bank Statements (6 months)', 'status' => 'Ready', 'icon' => 'circle-check', 'color' => 'emerald'],
                                ['name' => 'Affidavit of Support', 'status' => 'Ready', 'icon' => 'circle-check', 'color' => 'emerald'],
                                ['name' => 'Statement of Purpose', 'status' => 'In Review', 'icon' => 'clock', 'color' => 'amber'],
                                ['name' => 'Recommendation Letters', 'status' => '1 of 2', 'icon' => 'clock', 'color' => 'amber'],
                                ['name' => 'CV / Resume', 'status' => 'Ready', 'icon' => 'circle-check', 'color' => 'emerald'],
                                ['name' => 'Medical / Police Clearance', 'status' => 'Pending', 'icon' => 'circle', 'color' => 'slate'],
                            ];
                        @endphp

                        @foreach($docs as $doc)
                            <div class="flex items-center justify-between gap-3 rounded-xl border border-brand-100 p-3
                                {{ $doc['color'] === 'emerald' ? 'bg-emerald-50/50' : ($doc['color'] === 'amber' ? 'bg-amber-50/40' : 'bg-slate-50') }}">
                                <div class="flex items-center gap-3">
                                    <iconify-icon icon="lucide:{{ $doc['icon'] }}" 
                                        class="text-xl 
                                        {{ $doc['color'] === 'emerald' ? 'text-emerald-600' : ($doc['color'] === 'amber' ? 'text-amber-500' : 'text-slate-400') }}">
                                    </iconify-icon>
                                    <span class="text-sm font-medium text-brand-900">{{ $doc['name'] }}</span>
                                </div>
                                <span class="text-xs font-semibold 
                                    {{ $doc['color'] === 'emerald' ? 'text-emerald-700' : ($doc['color'] === 'amber' ? 'text-amber-600' : 'text-slate-500') }}">
                                    {{ $doc['status'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </section>

                {{-- Language Profile --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:languages" class="text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">Language</p>
                            <h2 class="text-lg font-bold text-brand-950">Proficiency</h2>
                        </div>
                    </div>

                    <div class="mt-5 rounded-xl border border-brand-100 bg-brand-25 p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-bold text-brand-950">IELTS Academic — 7.5</p>
                                <p class="text-xs text-slate-500 mt-0.5">C1 Advanced · Aug 2024</p>
                            </div>
                            <span class="rounded-full bg-white px-2.5 py-1 text-xs font-bold text-brand-600 ring-1 ring-brand-100">Verified</span>
                        </div>
                    </div>

                    <div class="mt-4 flex items-center justify-between text-sm">
                        <span class="text-slate-500">Bengali</span>
                        <span class="font-semibold text-brand-950">Native</span>
                    </div>
                    <div class="mt-2 flex items-center justify-between text-sm">
                        <span class="text-slate-500">Arabic</span>
                        <span class="font-semibold text-brand-950">Conversational</span>
                    </div>
                </section>

                {{-- Declaration & Signature --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">Declaration</p>
                    <h2 class="mt-1 text-lg font-bold text-brand-950">Consent & Signature</h2>

                    <div class="mt-5 space-y-3 text-sm text-slate-600">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" checked class="mt-1 rounded border-brand-300 text-brand-600 focus:ring-brand-500">
                            <span>I confirm that all information provided is true and complete to the best of my knowledge.</span>
                        </label>
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" checked class="mt-1 rounded border-brand-300 text-brand-600 focus:ring-brand-500">
                            <span>I consent to the processing of my personal data for the purpose of student visa application and university admission.</span>
                        </label>
                    </div>

                    <div class="mt-6 rounded-xl border-2 border-dashed border-brand-200 bg-brand-25/50 p-6 text-center">
                        <iconify-icon icon="lucide:pen-line" class="text-3xl text-brand-400 mx-auto"></iconify-icon>
                        <p class="mt-2 text-sm font-medium text-brand-700">Digital Signature</p>
                        <p class="text-xs text-slate-500 mt-1">Aisha Rahman · 01 Sep 2026</p>
                    </div>
                </section>

                {{-- Final CTA --}}
                <section class="relative overflow-hidden rounded-2xl bg-brand-700 p-5 text-white shadow-sm">
                    <div class="absolute -right-8 -top-8 h-28 w-28 rounded-full bg-white/10"></div>
                    <div class="relative">
                        <h2 class="text-lg font-bold">Profile almost complete</h2>
                        <p class="mt-2 text-sm text-brand-100 leading-relaxed">
                            92% ready. Complete the remaining documents and submit your application for visa processing.
                        </p>
                        <button class="mt-4 w-full rounded-lg bg-white px-4 py-2.5 text-sm font-bold text-brand-700 shadow-sm hover:bg-brand-50 transition">
                            Submit for Visa Assessment
                        </button>
                    </div>
                </section>

            </aside>
        </div>
    </main>
</div>
@endsection