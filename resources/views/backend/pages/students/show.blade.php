@extends('backend.layouts.app')

@section('content')
    <div class="relative w-full">
        <main class="flex-1 space-y-6">

            {{-- ===================== PROFILE HEADER ===================== --}}
            <section class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm">
                <div class="relative h-32 bg-gradient-to-r from-brand-700 via-brand-600 to-brand-500 sm:h-40">
                    <div
                        class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.16),transparent_45%)]">
                    </div>
                </div>

                <div class="px-5 pb-6 sm:px-8">
                    <div class="-mt-14 flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between relative">
                        {{-- Profile Photo + Basic Info --}}
                        <div class="flex flex-col items-start gap-4 sm:flex-row sm:items-end">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Aisha Rahman"
                                class="h-28 w-28 rounded-2xl border-4 border-white object-cover shadow-lg">
                            <div class="pb-1">
                                <div class="mb-3 flex flex-wrap items-center gap-2">
                                    <h1 class="text-2xl font-bold tracking-tight text-white">
                                        Aisha Rahman
                                    </h1>
                                    <span
                                        class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-200">
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
                            <span
                                class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                                Passport · Bangladesh
                            </span>
                            <span
                                class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                                Intake · September 2026
                            </span>
                            <span
                                class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                                Open to scholarships
                            </span>
                        </div>

                        <div class="flex flex-wrap gap-2">
                            <button
                                class="rounded-lg border border-brand-200 bg-white px-4 py-2 text-sm font-semibold text-brand-700 hover:bg-brand-50 transition">
                                Preview Application
                            </button>
                            <button
                                class="rounded-lg bg-brand-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-brand-700 transition">
                                Application for Visa
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

                    <section class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-xs space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                            <div class="flex items-center gap-2.5">
                                <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                    <iconify-icon icon="lucide:user" class="text-lg"></iconify-icon>
                                </div>
                                <h2 class="text-base font-bold text-slate-900">Personal Information</h2>
                            </div>
                            {{-- <button type="button"
                                class="inline-flex items-center gap-1.5 rounded-lg border border-brand-200 bg-brand-50 px-3 py-1.5 text-xs font-semibold text-brand-700 transition hover:border-brand-300 hover:bg-brand-100 focus:outline-none focus:ring-2 focus:ring-brand-200">
                                <iconify-icon icon="lucide:edit" class="text-sm"></iconify-icon>
                                <span>Edit</span>
                            </button> --}}
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
                            <div class="sm:col-span-2 md:col-span-3">

                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-2">

                                    <div>
                                        <label class="block text-xs font-medium text-slate-500">Full Legal Name (as per
                                            Passport)
                                        </label>
                                        <div
                                            class="mt-1 font-semibold text-slate-900 text-sm bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                            Aisha Mariam Rahman
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-medium text-slate-500">Email Address</label>
                                        <div
                                            class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                            aisha.rahman@example.com</div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-slate-500">Date of Birth</label>
                                <div
                                    class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                    14 August 2002</div>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-500">Gender</label>
                                <div
                                    class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                    Female</div>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-500">Nationality</label>
                                <div
                                    class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                    Bangladeshi</div>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-500">Passport Number</label>
                                <div
                                    class="mt-1 text-sm font-mono font-semibold text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                    A08923411</div>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-500">Issue Date</label>
                                <div
                                    class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                    10 Jan 2022</div>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-500">Expiry Date</label>
                                <div
                                    class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                    09 Jan 2032</div>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-500">Place of Birth</label>
                                <div
                                    class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                    Dhaka, Bangladesh</div>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-500">Marital Status</label>
                                <div
                                    class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                    Single</div>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-500">Phone Number</label>
                                <div
                                    class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                    +880 1712-345678</div>
                            </div>

                            <div class="sm:col-span-2 md:col-span-3">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <div>
                                        <label class="block text-xs font-medium text-slate-500">Current Residential
                                            Address</label>
                                        <div
                                            class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                            House 42, Road 11, Banani, Dhaka-1213, Bangladesh</div>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-medium text-slate-500">Permanent Address</label>
                                        <div
                                            class="mt-1 text-sm font-medium text-slate-900 bg-slate-50/50 p-2.5 rounded-xl border border-slate-200">
                                            Same as current address</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </section>

                    {{-- 2. Academic Background Card --}}
                    <section class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-xs space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                            <div class="flex items-center gap-2.5">
                                <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                    <iconify-icon icon="lucide:graduation-cap" class="text-lg"></iconify-icon>
                                </div>
                                <h2 class="text-base font-bold text-slate-900">Academic Background</h2>
                            </div>
                            {{-- <button type="button"
                                class="inline-flex items-center gap-1.5 rounded-lg border border-brand-200 bg-brand-50 px-3 py-1.5 text-xs font-semibold text-brand-700 transition hover:border-brand-300 hover:bg-brand-100 focus:outline-none focus:ring-2 focus:ring-brand-200">
                                <iconify-icon icon="lucide:edit" class="text-sm"></iconify-icon>
                                <span>Edit</span>
                            </button> --}}
                        </div>

                        {{-- Highest Qualification Summary Banner --}}
                        <div class="rounded-xl border border-brand-100 bg-brand-50/40 p-4">
                            <p class="text-xs font-bold uppercase tracking-wider text-brand-700">Highest Qualification</p>
                            <div class="mt-2 flex flex-col justify-between gap-2 sm:flex-row sm:items-center">
                                <div>
                                    <p class="text-sm font-bold text-slate-900">Bachelor of Science in Computer Science &
                                        Engineering</p>
                                    <p class="text-xs text-slate-600">North South University, Bangladesh • Graduated May
                                        2024</p>
                                </div>
                                <div class="rounded-lg bg-white px-3 py-1.5 border border-slate-200 text-center">
                                    <span class="text-xs text-slate-500 block">GPA / Result</span>
                                    <span class="text-sm font-bold text-brand-600">3.82 / 4.00</span>
                                </div>
                            </div>
                        </div>

                        {{-- Education History Table --}}
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-3">Education History
                            </h3>
                            <div class="overflow-x-auto rounded-xl border border-slate-200">
                                <table class="w-full text-left text-xs">
                                    <thead class="bg-slate-50 text-slate-600 border-b border-slate-200">
                                        <tr>
                                            <th class="p-3 font-semibold">Degree / Level</th>
                                            <th class="p-3 font-semibold">Institution</th>
                                            <th class="p-3 font-semibold">Country</th>
                                            <th class="p-3 font-semibold">Year Completed</th>
                                            <th class="p-3 font-semibold">Grade / Score</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100 text-slate-800">
                                        <tr>
                                            <td class="p-3 font-medium">B.Sc. CSE</td>
                                            <td class="p-3">North South University</td>
                                            <td class="p-3">Bangladesh</td>
                                            <td class="p-3">2024</td>
                                            <td class="p-3 font-semibold text-slate-900">3.82 GPA</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3 font-medium">Higher Secondary (HSC)</td>
                                            <td class="p-3">Viqarunnisa Noon College</td>
                                            <td class="p-3">Bangladesh</td>
                                            <td class="p-3">2020</td>
                                            <td class="p-3 font-semibold text-slate-900">5.00 GPA</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3 font-medium">Secondary School (SSC)</td>
                                            <td class="p-3">Viqarunnisa Noon School</td>
                                            <td class="p-3">Bangladesh</td>
                                            <td class="p-3">2018</td>
                                            <td class="p-3 font-semibold text-slate-900">5.00 GPA</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Standardized Test Scores --}}
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-3">Standardized Test
                                Scores</h3>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div class="rounded-xl border border-slate-200 p-4 space-y-2">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-slate-900">IELTS Academic</span>
                                        <span class="text-xs text-slate-500">Test Date: 12 Aug 2025</span>
                                    </div>
                                    <div class="flex items-baseline gap-2">
                                        <span class="text-2xl font-extrabold text-brand-600">7.5</span>
                                        <span class="text-xs text-slate-500">Overall Band (C1)</span>
                                    </div>
                                    <div class="grid grid-cols-4 gap-1 pt-2 text-center text-xs border-t border-slate-100">
                                        <div class="bg-slate-50 p-1 rounded">L: <span class="font-bold">8.0</span></div>
                                        <div class="bg-slate-50 p-1 rounded">R: <span class="font-bold">7.5</span></div>
                                        <div class="bg-slate-50 p-1 rounded">W: <span class="font-bold">7.0</span></div>
                                        <div class="bg-slate-50 p-1 rounded">S: <span class="font-bold">7.5</span></div>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 p-4 space-y-2">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-slate-900">GRE General</span>
                                        <span class="text-xs text-slate-500">Test Date: 05 Nov 2025</span>
                                    </div>
                                    <div class="flex items-baseline gap-2">
                                        <span class="text-2xl font-extrabold text-brand-600">322</span>
                                        <span class="text-xs text-slate-500">Combined Score</span>
                                    </div>
                                    <div class="grid grid-cols-3 gap-1 pt-2 text-center text-xs border-t border-slate-100">
                                        <div class="bg-slate-50 p-1 rounded">Quant: <span class="font-bold">165</span>
                                        </div>
                                        <div class="bg-slate-50 p-1 rounded">Verbal: <span class="font-bold">157</span>
                                        </div>
                                        <div class="bg-slate-50 p-1 rounded">AWA: <span class="font-bold">4.5</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- Study Plan & University Details Section --}}
                    <section class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-sm space-y-6">

                        <!-- Top Header & Shared Degree Level -->
                        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-100 pb-5">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                    <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                                </div>
                                <div>
                                    <h2 class="text-base font-bold text-slate-900">Study Plan & University Details</h2>
                                </div>
                            </div>

                            <!-- Global/Shared Field: Degree Level -->
                            <div
                                class="flex items-center gap-2 rounded-xl bg-slate-50 px-3 py-1.5 border border-slate-200">
                                <span class="text-xs font-medium text-slate-500">Target Degree:</span>
                                <span class="text-xs font-semibold text-slate-900">Master's Degree</span>
                            </div>
                        </div>

                        <!-- Multi-Choice / Priority Options (Alpine.js Tabs or Blade Loop) -->
                        <div x-data="{ activeTab: 1 }" class="space-y-4">

                            <!-- Tab Navigation for Multiple Institutions/Plans -->
                            <div class="flex items-center justify-between border-b border-slate-200">
                                <div class="flex gap-2 overflow-x-auto pb-px">
                                    <button @click="activeTab = 1"
                                        :class="activeTab === 1 ? 'border-brand-600 text-brand-600 font-semibold' :
                                            'border-transparent text-slate-500 hover:text-slate-700'"
                                        class="flex items-center gap-2 border-b-2 px-3 py-2 text-xs transition-all whitespace-nowrap">
                                        <span
                                            class="flex h-5 w-5 items-center justify-center rounded-full bg-brand-100 text-[10px] font-bold text-brand-700">1</span>
                                        Choice 1 (Primary)
                                    </button>

                                    <button @click="activeTab = 2"
                                        :class="activeTab === 2 ? 'border-brand-600 text-brand-600 font-semibold' :
                                            'border-transparent text-slate-500 hover:text-slate-700'"
                                        class="flex items-center gap-2 border-b-2 px-3 py-2 text-xs transition-all whitespace-nowrap">
                                        <span
                                            class="flex h-5 w-5 items-center justify-center rounded-full bg-slate-100 text-[10px] font-bold text-slate-600">2</span>
                                        Choice 2
                                    </button>
                                </div>

                                <!-- Optional Action: Add Choice -->
                                {{-- <button
                                    class="inline-flex items-center gap-1 text-xs font-medium text-brand-600 hover:text-brand-700 mb-2">
                                    <iconify-icon icon="lucide:plus" class="text-sm"></iconify-icon>
                                    <span>Add Choice</span>
                                </button> --}}
                            </div>

                            <!-- Tab 1: Primary Option -->
                            <div x-show="activeTab === 1" class="space-y-4">
                                <!-- Program Header Card -->
                                <div
                                    class="flex flex-wrap items-center justify-between gap-3 rounded-xl bg-slate-50/70 p-4 border border-slate-200/80">
                                    <div>
                                        <span
                                            class="text-[11px] font-semibold uppercase tracking-wider text-brand-600">Intended
                                            Program</span>
                                        <h3 class="text-sm font-bold text-slate-900">MSc in Human-Computer Interaction</h3>
                                    </div>
                                    {{-- <button type="button"
                                        class="inline-flex items-center gap-1.5 rounded-lg border border-brand-200 bg-brand-50 px-3 py-1.5 text-xs font-semibold text-brand-700 transition hover:border-brand-300 hover:bg-brand-100 focus:outline-none focus:ring-2 focus:ring-brand-200">
                                        <iconify-icon icon="lucide:edit" class="text-sm"></iconify-icon>
                                        <span>Edit</span>
                                    </button> --}}
                                </div>

                                <!-- Key Info Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">University</span>
                                        <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                                            <iconify-icon icon="lucide:building" class="text-slate-400"></iconify-icon>
                                            University of Manchester
                                        </span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Destination
                                            Country</span>
                                        <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                                            <iconify-icon icon="lucide:globe" class="text-slate-400"></iconify-icon>
                                            United Kingdom
                                        </span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Duration &
                                            Start</span>
                                        <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                                            <iconify-icon icon="lucide:calendar" class="text-slate-400"></iconify-icon>
                                            1 Year (Sept 2026 – Sept 2027)
                                        </span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Tuition
                                            Fee</span>
                                        <span class="text-xs font-semibold text-slate-800">£28,500 / year</span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs sm:col-span-2">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Scholarship /
                                            Funding</span>
                                        <span class="text-xs font-semibold text-emerald-600 flex items-center gap-1.5">
                                            <iconify-icon icon="lucide:award"></iconify-icon>
                                            £5,000 Merit Award Applied
                                        </span>
                                    </div>
                                </div>

                                <!-- Study Plan Summary -->
                                <div class="space-y-1">
                                    <label class="text-xs font-medium text-slate-500">Study Plan Summary</label>
                                    <div
                                        class="text-xs leading-relaxed text-slate-600 bg-slate-50/50 p-3.5 rounded-xl border border-slate-200">
                                        Seeking advanced specialization in accessible UX design and software ergonomics.
                                        Intend to complete the 1-year taught master's program and utilize university
                                        industry partnerships for field research before returning home to contribute to the
                                        digital technology sector.
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 2: Secondary Option -->
                            <div x-show="activeTab === 2" class="space-y-4" style="display: none;">
                                <div
                                    class="flex flex-wrap items-center justify-between gap-3 rounded-xl bg-slate-50/70 p-4 border border-slate-200/80">
                                    <div>
                                        <span
                                            class="text-[11px] font-semibold uppercase tracking-wider text-brand-600">Intended
                                            Program</span>
                                        <h3 class="text-sm font-bold text-slate-900">MSc in Interaction Design</h3>
                                    </div>
                                    {{-- <button type="button"
                                        class="inline-flex items-center gap-1.5 rounded-lg border border-brand-200 bg-brand-50 px-3 py-1.5 text-xs font-semibold text-brand-700 transition hover:border-brand-300 hover:bg-brand-100 focus:outline-none focus:ring-2 focus:ring-brand-200">
                                        <iconify-icon icon="lucide:edit" class="text-sm"></iconify-icon>
                                        <span>Edit</span>
                                    </button> --}}
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">University</span>
                                        <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                                            <iconify-icon icon="lucide:building" class="text-slate-400"></iconify-icon>
                                            TU Delft
                                        </span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Destination
                                            Country</span>
                                        <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                                            <iconify-icon icon="lucide:globe" class="text-slate-400"></iconify-icon>
                                            Netherlands
                                        </span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Duration &
                                            Start</span>
                                        <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                                            <iconify-icon icon="lucide:calendar" class="text-slate-400"></iconify-icon>
                                            2 Years (Sept 2026 – Sept 2028)
                                        </span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Tuition
                                            Fee</span>
                                        <span class="text-xs font-semibold text-slate-800">€20,500 / year</span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-white border border-slate-100 shadow-2xs sm:col-span-2">
                                        <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Scholarship /
                                            Funding</span>
                                        <span class="text-xs font-semibold text-slate-500 flex items-center gap-1.5">
                                            <iconify-icon icon="lucide:minus-circle"></iconify-icon>
                                            None / Self-funded
                                        </span>
                                    </div>
                                </div>

                                <div class="space-y-1">
                                    <label class="text-xs font-medium text-slate-500">Study Plan Summary</label>
                                    <div
                                        class="text-xs leading-relaxed text-slate-600 bg-slate-50/50 p-3.5 rounded-xl border border-slate-200">
                                        Alternative option focused on human-centered hardware and software systems design in
                                        Europe.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>



                    {{-- 4. Financial & Family Background Combined Section --}}
                    <section class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-sm space-y-6">

                        <!-- Section Header -->
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                    <iconify-icon icon="lucide:wallet-cards" class="text-xl"></iconify-icon>
                                </div>
                                <div>
                                    <h2 class="text-base font-bold text-slate-900">Financial & Family Background</h2>

                                </div>
                            </div>
                            {{-- <span
                                class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-medium text-emerald-700 border border-emerald-200">
                                <iconify-icon icon="lucide:shield-check" class="text-sm"></iconify-icon> Solvency Verified
                            </span> --}}
                        </div>

                        <!-- Group 1: Financial & Sponsorship Info -->
                        <div class="space-y-3">
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Financial & Sponsorship
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-500 block mb-1">Primary Source of
                                        Funds</span>
                                    <span class="text-xs font-semibold text-slate-900">Parents Support & Partial
                                        Scholarship</span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-500 block mb-1">Sponsor &
                                        Relationship</span>
                                    <span class="text-xs font-semibold text-slate-900">Tariq Rahman (Father)</span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-500 block mb-1">Bank Statement
                                        Status</span>
                                    <span class="text-xs font-semibold text-slate-900">Uploaded (28-day balance met)</span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-500 block mb-1">Affidavit of
                                        Support</span>
                                    <span class="text-xs font-semibold text-slate-900">Notarized & Attached</span>
                                </div>

                            </div>
                        </div>

                        <hr class="border-slate-100">

                        <!-- Group 2: Family & Background Info -->
                        <div class="space-y-3">
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Family & Background
                                Details</h3>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <!-- Father Info Card -->
                                <div
                                    class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200 shadow-2xs">
                                    <div
                                        class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-slate-100 text-slate-600">
                                        <iconify-icon icon="lucide:user" class="text-base"></iconify-icon>
                                    </div>
                                    <div>
                                        <span class="text-[11px] font-medium text-slate-400">Father</span>
                                        <h4 class="text-xs font-semibold text-slate-900">Mohammed Rahman</h4>
                                        <p class="text-xs text-slate-500 mt-0.5">Managing Director, Tech Solutions Inc. ·
                                            +880 17XXXXXXXX</p>
                                    </div>
                                </div>

                                <!-- Mother Info Card -->
                                <div
                                    class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200 shadow-2xs">
                                    <div
                                        class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-slate-100 text-slate-600">
                                        <iconify-icon icon="lucide:user" class="text-base"></iconify-icon>
                                    </div>
                                    <div>
                                        <span class="text-[11px] font-medium text-slate-400">Mother</span>
                                        <h4 class="text-xs font-semibold text-slate-900">Fatima Rahman</h4>
                                        <p class="text-xs text-slate-500 mt-0.5">Homemaker · +880 18XXXXXXXX</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Details Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                                <div class="p-3 rounded-xl bg-slate-50/50 border border-slate-200">
                                    <span class="text-[11px] font-medium text-slate-500 block mb-0.5">Siblings</span>
                                    <span class="text-xs text-slate-800">1 younger brother (currently studying in Class
                                        10)</span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50/50 border border-slate-200">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Previous Travel /
                                        Visa History</span>
                                    <span class="text-xs text-slate-800">No previous visa refusals. Short tourist visit to
                                        Malaysia (2023).</span>
                                </div>
                            </div>
                        </div>

                    </section>



                    {{-- 5. WORK EXPERIENCE & EXTRACURRICULARS --}}

                    <section class="rounded-2xl border border-brand-100 bg-white p-5 sm:p-6 shadow-sm">

                        <!-- Section Header -->
                        <div class="flex items-center justify-between border-b border-brand-50 pb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                    <iconify-icon icon="lucide:briefcase" class="text-xl"></iconify-icon>
                                </div>
                                <div>
                                    <h2 class="text-base font-bold text-brand-950">Experience & Achievements</h2>
                                </div>
                            </div>
                            <span
                                class="inline-flex items-center gap-1 rounded-full bg-brand-50 px-2.5 py-1 text-xs font-semibold text-brand-700">
                                <iconify-icon icon="lucide:award" class="text-sm"></iconify-icon> 2 Roles
                            </span>
                        </div>

                        <!-- Timeline List -->
                        <div
                            class="relative mt-6 space-y-6 pl-3 before:absolute before:left-[17px] before:top-3 before:h-[calc(100%-24px)] before:w-0.5 before:bg-brand-100">

                            <!-- Experience 1 -->
                            <article class="relative flex gap-4">
                                <!-- Timeline Dot -->
                                <div
                                    class="relative z-10 flex h-3 w-3 shrink-0 translate-y-1.5 items-center justify-center rounded-full bg-brand-600 ring-4 ring-white">
                                </div>

                                <!-- Content Card -->
                                <div
                                    class="flex-1 rounded-xl border border-brand-100/80 bg-slate-50/50 p-4 transition-all hover:bg-white hover:shadow-xs">
                                    <div class="flex flex-wrap items-start justify-between gap-2">
                                        <div>
                                            <h3 class="text-sm font-bold text-brand-950">Digital Experience Intern</h3>
                                            <p class="text-xs font-medium text-slate-500">Northfield University · Student
                                                Services</p>
                                        </div>
                                        <span
                                            class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-700 border border-emerald-200">
                                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span> Sep 2024 —
                                            Present
                                        </span>
                                    </div>
                                    <p class="mt-2 text-xs leading-relaxed text-slate-600">
                                        Mapped student journeys and built accessible prototypes for wellbeing services.
                                    </p>
                                </div>
                            </article>

                            <!-- Experience 2 -->
                            <article class="relative flex gap-4">
                                <!-- Timeline Dot -->
                                <div
                                    class="relative z-10 flex h-3 w-3 shrink-0 translate-y-1.5 items-center justify-center rounded-full bg-slate-300 ring-4 ring-white">
                                </div>

                                <!-- Content Card -->
                                <div
                                    class="flex-1 rounded-xl border border-slate-200/70 bg-slate-50/50 p-4 transition-all hover:bg-white hover:shadow-xs">
                                    <div class="flex flex-wrap items-start justify-between gap-2">
                                        <div>
                                            <h3 class="text-sm font-bold text-slate-900">Student Technology Mentor</h3>
                                            <p class="text-xs font-medium text-slate-500">Northfield University · Learning
                                                Hub</p>
                                        </div>
                                        <span
                                            class="rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-medium text-slate-600">
                                            Oct 2023 — May 2024
                                        </span>
                                    </div>
                                    <p class="mt-2 text-xs leading-relaxed text-slate-600">
                                        Supported first-year students with research workflows and portfolio preparation.
                                    </p>
                                </div>
                            </article>

                        </div>
                    </section>


                    {{-- Visa Refusal & Travel History Section --}}
                    <section class="rounded-2xl border border-brand-100 bg-white p-5 sm:p-6 shadow-sm space-y-5">

                        <!-- Section Header -->
                        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-brand-50 pb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                                    <iconify-icon icon="lucide:shield-alert" class="text-xl"></iconify-icon>
                                </div>
                                <div>
                                    <h2 class="text-base font-bold text-brand-950">Immigration
                                        History </h2>
                                    <p class="text-[9px] font-bold uppercase tracking-[0.18em] text-brand-600">Visa Refusal
                                        & Travel Records</p>
                                </div>
                            </div>

                            <!-- Status Pill -->
                            <span
                                class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700 border border-amber-200">
                                <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span> 1 Previous Refusal Recorded
                            </span>
                        </div>

                        @php
                            $refusals = [
                                [
                                    'country' => 'Canada',
                                    'visa_type' => 'Study Permit',
                                    'year' => '2023',
                                    'reason' =>
                                        'Section 216(1)(b) — Officer not satisfied applicant would leave Canada at the end of period authorized for stay.',
                                    'doc_name' => 'Refusal_Letter_Canada_2023.pdf',
                                    'doc_size' => '1.2 MB',
                                    'doc_url' => '#',
                                ],
                            ];
                        @endphp

                        <!-- Refusal History List -->
                        <div class="space-y-4">
                            @foreach ($refusals as $item)
                                <div
                                    class="rounded-xl border border-amber-100 bg-amber-50/30 p-4 transition-all hover:bg-amber-50/60 space-y-3">

                                    <!-- Refusal Header -->
                                    <div
                                        class="flex flex-wrap items-center justify-between gap-2 border-b border-amber-100/60 pb-3">
                                        <div class="flex items-center gap-2.5">
                                            <div
                                                class="flex h-7 w-7 items-center justify-center rounded-lg bg-amber-100 text-amber-700">
                                                <iconify-icon icon="lucide:file-warning" class="text-base"></iconify-icon>
                                            </div>
                                            <div>
                                                <h3 class="text-xs font-bold text-slate-900">{{ $item['country'] }} —
                                                    {{ $item['visa_type'] }}</h3>
                                                <p class="text-[11px] text-slate-500">Application Year: {{ $item['year'] }}
                                                </p>
                                            </div>
                                        </div>

                                        <span
                                            class="rounded-md bg-amber-100/80 px-2 py-0.5 text-[11px] font-semibold text-amber-800">
                                            Refused
                                        </span>
                                    </div>

                                    <!-- Refusal Reason Summary -->
                                    <div class="space-y-1">
                                        <span class="text-[11px] font-medium text-slate-500 block">Grounds for
                                            Refusal</span>
                                        <p
                                            class="text-xs leading-relaxed text-slate-700 bg-white/80 p-3 rounded-lg border border-amber-100">
                                            {{ $item['reason'] }}
                                        </p>
                                    </div>

                                    <!-- Attached Refusal Document -->
                                    <div
                                        class="flex items-center justify-between rounded-lg bg-white p-2.5 border border-slate-200">
                                        <div class="flex items-center gap-2.5 min-w-0">
                                            <iconify-icon icon="lucide:file-text"
                                                class="text-base text-slate-400 shrink-0"></iconify-icon>
                                            <div class="truncate">
                                                <p class="text-xs font-semibold text-slate-800 truncate">
                                                    {{ $item['doc_name'] }}</p>
                                                <span class="text-[10px] text-slate-400">{{ $item['doc_size'] }}</span>
                                            </div>
                                        </div>

                                        <a href="{{ $item['doc_url'] }}" target="_blank" title="View Document"
                                            class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-600 transition-all hover:border-brand-300 hover:bg-brand-50 hover:text-brand-600">
                                            <iconify-icon icon="lucide:eye" class="text-sm"></iconify-icon>
                                        </a>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                        <!-- Empty State Alternative (Uncomment if user has NO refusals) -->
                        {{--
                            <div class="flex items-center gap-3 rounded-xl border border-emerald-100 bg-emerald-50/40 p-4">
                                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-emerald-100 text-emerald-600">
                                    <iconify-icon icon="lucide:check-circle-2" class="text-lg"></iconify-icon>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900">No Prior Visa Refusals</h3>
                                    <p class="text-xs text-slate-500 mt-0.5">Applicant has a clean immigration history with zero prior visa rejections.</p>
                                </div>
                            </div>
                            --}}

                    </section>


                    {{-- 6. Documents Checklist Section --}}
                    <section class="rounded-2xl border border-brand-100 bg-white p-5 sm:p-6 shadow-sm">

                        <!-- Header with Overall Progress & Action -->
                        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-brand-50 pb-5">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                    <iconify-icon icon="lucide:folder-check" class="text-xl"></iconify-icon>
                                </div>
                                <div>
                                    <h2 class="text-base font-bold text-brand-950">Visa Documents Checklist</h2>
                                    <p class="text-[9px] font-bold uppercase tracking-[0.18em] text-brand-600">
                                        Verification & Compliance</p>
                                </div>
                            </div>

                            <!-- Progress Overview Badge -->
                            <div class="flex items-center gap-3">
                                <div class="hidden sm:block text-right">
                                    <span class="text-xs font-semibold text-slate-700">8 of 11 Completed</span>
                                    <div class="w-32 h-1.5 bg-slate-100 rounded-full mt-1 overflow-hidden">
                                        <div class="h-full bg-emerald-500 rounded-full" style="width: 72%;"></div>
                                    </div>
                                </div>
                                <span
                                    class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 border border-emerald-200">
                                    72% Ready
                                </span>
                            </div>
                        </div>

                        @php
                            $docs = [
                                [
                                    'name' => 'Passport Copy',
                                    'status' => 'Ready',
                                    'icon' => 'check-circle-2',
                                    'color' => 'emerald',
                                    'size' => '2.4 MB · PDF',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'Academic Transcripts',
                                    'status' => 'Ready',
                                    'icon' => 'check-circle-2',
                                    'color' => 'emerald',
                                    'size' => '4.1 MB · PDF',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'Degree Certificates',
                                    'status' => 'Ready',
                                    'icon' => 'check-circle-2',
                                    'color' => 'emerald',
                                    'size' => '1.8 MB · PDF',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'IELTS / English Test Result',
                                    'status' => 'Ready',
                                    'icon' => 'shield-check',
                                    'color' => 'emerald',
                                    'size' => '850 KB · PDF',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'Unconditional Offer Letter',
                                    'status' => 'Ready',
                                    'icon' => 'check-circle-2',
                                    'color' => 'emerald',
                                    'size' => '1.2 MB · PDF',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'Bank Statements (6 months)',
                                    'status' => 'Ready',
                                    'icon' => 'check-circle-2',
                                    'color' => 'emerald',
                                    'size' => '5.6 MB · PDF',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'Affidavit of Support',
                                    'status' => 'Ready',
                                    'icon' => 'check-circle-2',
                                    'color' => 'emerald',
                                    'size' => '920 KB · PDF',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'Statement of Purpose (SOP)',
                                    'status' => 'In Review',
                                    'icon' => 'clock-3',
                                    'color' => 'amber',
                                    'size' => 'Draft v2 · Docx',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'Recommendation Letters',
                                    'status' => '1 of 2 Received',
                                    'icon' => 'clock-3',
                                    'color' => 'amber',
                                    'size' => '1.1 MB · PDF',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'CV / Resume',
                                    'status' => 'Ready',
                                    'icon' => 'check-circle-2',
                                    'color' => 'emerald',
                                    'size' => '450 KB · PDF',
                                    'url' => '#',
                                ],
                                [
                                    'name' => 'Medical / Police Clearance',
                                    'status' => 'Pending Upload',
                                    'icon' => 'alert-circle',
                                    'color' => 'slate',
                                    'size' => 'Not uploaded',
                                    'url' => null,
                                ],
                            ];
                        @endphp

                        <!-- Document List Grid -->
                        <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-3">
                            @foreach ($docs as $doc)
                                <div
                                    class="group flex items-center justify-between gap-3 rounded-xl border p-3 transition-all duration-200 hover:shadow-xs
                                        {{ $doc['color'] === 'emerald' ? 'border-emerald-100 bg-emerald-50/30 hover:bg-emerald-50/60' : ($doc['color'] === 'amber' ? 'border-amber-100 bg-amber-50/30 hover:bg-amber-50/60' : 'border-slate-200 bg-slate-50/50 hover:bg-white') }}">

                                    <!-- Left Details -->
                                    <div class="flex items-center gap-3 min-w-0">
                                        <div
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg 
                                                {{ $doc['color'] === 'emerald' ? 'bg-emerald-100/70 text-emerald-600' : ($doc['color'] === 'amber' ? 'bg-amber-100/70 text-amber-600' : 'bg-slate-200/70 text-slate-500') }}">
                                            <iconify-icon icon="lucide:{{ $doc['icon'] }}"
                                                class="text-lg"></iconify-icon>
                                        </div>
                                        <div class="truncate">
                                            <h3 class="text-xs font-bold text-brand-950 truncate">{{ $doc['name'] }}</h3>
                                            <p class="text-[11px] text-slate-400 mt-0.5">{{ $doc['size'] }}</p>
                                        </div>
                                    </div>

                                    <!-- Right Status & Action -->
                                    <div class="flex items-center gap-2 shrink-0">
                                        <!-- Status Badge -->
                                        <span
                                            class="inline-flex items-center rounded-md px-2 py-0.5 text-[11px] font-semibold
                                             {{ $doc['color'] === 'emerald' ? 'bg-emerald-100/80 text-emerald-800' : ($doc['color'] === 'amber' ? 'bg-amber-100/80 text-amber-800' : 'bg-slate-200/60 text-slate-600') }}">
                                            {{ $doc['status'] }}
                                        </span>

                                        <!-- View Document Button -->
                                        @if ($doc['url'])
                                            <a href="{{ $doc['url'] }}" target="_blank" title="View Document"
                                                class="flex h-7 w-7 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-600 transition-all hover:border-brand-300 hover:bg-brand-50 hover:text-brand-600">
                                                <iconify-icon icon="lucide:eye" class="text-sm"></iconify-icon>
                                            </a>
                                        @else
                                            <button title="Upload Document"
                                                class="flex h-7 w-7 items-center justify-center rounded-lg border border-dashed border-slate-300 bg-white text-slate-400 hover:border-brand-400 hover:text-brand-600">
                                                <iconify-icon icon="lucide:upload" class="text-sm"></iconify-icon>
                                            </button>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                        </div>

                    </section>

                    {{-- 7. Applications History Section --}}
                    <section class="rounded-2xl border border-brand-100 bg-white p-5 sm:p-6 shadow-sm space-y-5">

                        <!-- Section Header with Aggregated Metrics -->
                        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-brand-50 pb-5">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                    <iconify-icon icon="lucide:history" class="text-xl"></iconify-icon>
                                </div>
                                <div>
                                    <h2 class="text-base font-bold text-brand-950">Applications History</h2>
                                    <p class="text-[9px] font-bold uppercase tracking-[0.18em] text-brand-600">University
                                        Portal</p>
                                </div>
                            </div>

                            <!-- Quick Summary Stats -->
                            <div class="flex items-center gap-2">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                                    <iconify-icon icon="lucide:layers" class="text-xs"></iconify-icon> 3 Total
                                </span>
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 border border-emerald-200">
                                    <iconify-icon icon="lucide:check-circle-2" class="text-xs"></iconify-icon> 1 Offer
                                </span>
                            </div>
                        </div>

                        @php
                            $applications = [
                                [
                                    'id' => 'APP-2026-8941',
                                    'university' => 'University of Manchester',
                                    'program' => 'MSc in Human-Computer Interaction',
                                    'country' => 'United Kingdom',
                                    'degree' => "Master's Degree",
                                    'submitted_date' => '15 Jan 2026',
                                    'status' => 'Unconditional Offer',
                                    'status_type' => 'success', // success, warning, danger, neutral
                                    'intake' => 'Fall 2026',
                                    'notes' => 'Merit Award £5,000 granted. CAS reference generation in progress.',
                                ],
                                [
                                    'id' => 'APP-2026-7210',
                                    'university' => 'TU Delft',
                                    'program' => 'MSc in Interaction Design',
                                    'country' => 'Netherlands',
                                    'degree' => "Master's Degree",
                                    'submitted_date' => '02 Feb 2026',
                                    'status' => 'Under Assessment',
                                    'status_type' => 'warning',
                                    'intake' => 'Fall 2026',
                                    'notes' => 'Faculty committee reviewing academic transcript equivalency.',
                                ],
                                [
                                    'id' => 'APP-2025-4109',
                                    'university' => 'University of Melbourne',
                                    'program' => 'Master of Information Technology (UX)',
                                    'country' => 'Australia',
                                    'degree' => "Master's Degree",
                                    'submitted_date' => '10 Nov 2025',
                                    'status' => 'Unsuccessful',
                                    'status_type' => 'danger',
                                    'intake' => 'Spring 2026',
                                    'notes' => 'Program quota filled for the intake round.',
                                ],
                            ];
                        @endphp

                        <!-- Multiple Applications Cards List -->
                        <div class="space-y-4">
                            @foreach ($applications as $app)
                                <div
                                    class="rounded-xl border border-slate-200/80 bg-slate-50/50 p-4 transition-all hover:bg-white hover:shadow-xs space-y-3">

                                    <!-- Card Header: Program & Status -->
                                    <div
                                        class="flex flex-wrap items-start justify-between gap-2 border-b border-slate-200/60 pb-3">
                                        <div class="space-y-0.5">
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="text-[11px] font-mono font-medium text-slate-400">{{ $app['id'] }}</span>
                                                <span class="text-[11px] text-slate-300">•</span>
                                                <span
                                                    class="text-[11px] font-medium text-brand-600">{{ $app['intake'] }}</span>
                                            </div>
                                            <h3 class="text-sm font-bold text-slate-900">{{ $app['program'] }}</h3>
                                            <p class="text-xs font-semibold text-slate-600 flex items-center gap-1.5">
                                                <iconify-icon icon="lucide:building-2"
                                                    class="text-slate-400"></iconify-icon>
                                                {{ $app['university'] }}
                                            </p>
                                        </div>

                                        <!-- Contextual Status Badges -->
                                        <span
                                            class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-semibold border
                                                {{ $app['status_type'] === 'success' ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : '' }}
                                                {{ $app['status_type'] === 'warning' ? 'bg-amber-50 text-amber-700 border-amber-200' : '' }}
                                                {{ $app['status_type'] === 'danger' ? 'bg-rose-50 text-rose-700 border-rose-200' : '' }}
                                                {{ $app['status_type'] === 'neutral' ? 'bg-slate-100 text-slate-700 border-slate-200' : '' }}">
                                            <span
                                                class="h-1.5 w-1.5 rounded-full 
                                                {{ $app['status_type'] === 'success' ? 'bg-emerald-500' : '' }}
                                                {{ $app['status_type'] === 'warning' ? 'bg-amber-500' : '' }}
                                                {{ $app['status_type'] === 'danger' ? 'bg-rose-500' : '' }}
                                                {{ $app['status_type'] === 'neutral' ? 'bg-slate-400' : '' }}"></span>
                                            {{ $app['status'] }}
                                        </span>
                                    </div>

                                    <!-- Attributes Grid -->
                                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-1">
                                        <div class="p-2.5 rounded-lg bg-white border border-slate-200/60">
                                            <span class="text-[10px] font-medium text-slate-400 block">Destination</span>
                                            <span
                                                class="text-xs font-semibold text-slate-800 flex items-center gap-1 mt-0.5">
                                                <iconify-icon icon="lucide:globe"
                                                    class="text-slate-400 text-xs"></iconify-icon>
                                                {{ $app['country'] }}
                                            </span>
                                        </div>

                                        <div class="p-2.5 rounded-lg bg-white border border-slate-200/60">
                                            <span class="text-[10px] font-medium text-slate-400 block">Submitted
                                                Date</span>
                                            <span
                                                class="text-xs font-semibold text-slate-800 flex items-center gap-1 mt-0.5">
                                                <iconify-icon icon="lucide:calendar"
                                                    class="text-slate-400 text-xs"></iconify-icon>
                                                {{ $app['submitted_date'] }}
                                            </span>
                                        </div>

                                        <div
                                            class="p-2.5 rounded-lg bg-white border border-slate-200/60 col-span-2 sm:col-span-1">
                                            <span class="text-[10px] font-medium text-slate-400 block">Degree Level</span>
                                            <span
                                                class="text-xs font-semibold text-slate-800 flex items-center gap-1 mt-0.5">
                                                <iconify-icon icon="lucide:graduation-cap"
                                                    class="text-slate-400 text-xs"></iconify-icon>
                                                {{ $app['degree'] }}
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Remarks / Notes Footer -->
                                    @if (!empty($app['notes']))
                                        <div
                                            class="flex items-start gap-2 rounded-lg bg-white/80 p-2.5 border border-slate-200/60 text-xs text-slate-600">
                                            <iconify-icon icon="lucide:info"
                                                class="text-slate-400 text-sm mt-0.5 shrink-0"></iconify-icon>
                                            <span class="leading-relaxed">{{ $app['notes'] }}</span>
                                        </div>
                                    @endif

                                </div>
                            @endforeach
                        </div>

                    </section>

                    {{-- Post-Visa & Arrival Details Section --}}
                    <section class="rounded-2xl border border-brand-100 bg-white p-5 sm:p-6 shadow-sm space-y-5">

                        <!-- Header -->
                        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-brand-50 pb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                    <iconify-icon icon="lucide:plane-landing" class="text-xl"></iconify-icon>
                                </div>
                                <div>

                                    <h2 class="text-base font-bold text-brand-950">After Visa Information</h2>
                                    <p class="text-[9px] font-bold uppercase tracking-[0.18em] text-emerald-600">Post-Visa
                                        & Arrival</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2.5">

                                {{-- Status --}}
                                <span
                                    class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                    Visa Granted
                                </span>

                                {{-- Update --}}
                                <button type="button"
                                    class="inline-flex items-center gap-1.5 rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-600 shadow-sm transition hover:border-indigo-200 hover:bg-indigo-50 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                                    <iconify-icon icon="lucide:refresh-cw" class="text-sm"></iconify-icon>
                                    <span>Update</span>
                                </button>

                            </div>
                        </div>

                        <!-- Group 1: Visa & Travel Schedule -->
                        <div class="space-y-3">
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Visa & Travel Timeline
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Visa Approval
                                        Date</span>
                                    <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                                        <iconify-icon icon="lucide:calendar-check"
                                            class="text-emerald-600 text-sm"></iconify-icon>
                                        15 Aug 2026
                                    </span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Visa Expiry
                                        Date</span>
                                    <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                                        <iconify-icon icon="lucide:calendar-off"
                                            class="text-rose-500 text-sm"></iconify-icon>
                                        30 Sep 2028
                                    </span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Flight Departure
                                        Date</span>
                                    <span class="text-xs font-semibold text-brand-600 flex items-center gap-1.5">
                                        <iconify-icon icon="lucide:plane" class="text-brand-500 text-sm"></iconify-icon>
                                        10 Sep 2026
                                    </span>
                                </div>

                            </div>
                        </div>

                        <hr class="border-slate-100">

                        <!-- Group 2: Contact, Guardian & Socials -->
                        <div class="space-y-3">
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Contact & Guardian Info
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">

                                <!-- Australian Phone -->
                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Australian
                                        Phone</span>
                                    <span class="text-xs font-semibold text-slate-900 flex items-center gap-1.5">
                                        <iconify-icon icon="lucide:phone" class="text-slate-400 text-xs"></iconify-icon>
                                        +61 4XX XXX XXX
                                    </span>
                                </div>

                                <!-- Guardian Details -->
                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Guardian Name &
                                        Contact</span>
                                    <span class="text-xs font-semibold text-slate-900 flex items-center gap-1.5">
                                        <iconify-icon icon="lucide:user-check"
                                            class="text-slate-400 text-xs"></iconify-icon>
                                        Tariq Rahman (+880 17XXXXXXXX)
                                    </span>
                                </div>

                                <!-- Facebook Profile URL -->
                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Facebook
                                        Profile</span>
                                    <a href="https://facebook.com/username" target="_blank"
                                        class="text-xs font-semibold text-blue-600 hover:underline flex items-center gap-1.5 truncate">
                                        <iconify-icon icon="lucide:facebook"
                                            class="text-blue-500 text-xs shrink-0"></iconify-icon>
                                        <span class="truncate">facebook.com/username</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <hr class="border-slate-100">

                        <!-- Group 3: Academic & Accommodation Details -->
                        <div class="space-y-3">
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Academic & Living Details
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Scholarship
                                        Details</span>
                                    <span class="text-xs font-semibold text-emerald-700 flex items-center gap-1.5">
                                        <iconify-icon icon="lucide:award" class="text-emerald-500 text-sm"></iconify-icon>
                                        $5,000 International Merit Scholarship
                                    </span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">English Proficiency
                                        Institute</span>
                                    <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                                        <iconify-icon icon="lucide:school" class="text-slate-400 text-xs"></iconify-icon>
                                        IDP Education / British Council
                                    </span>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/80 sm:col-span-2">
                                    <span class="text-[11px] font-medium text-slate-400 block mb-0.5">Present
                                        Address</span>
                                    <span class="text-xs font-semibold text-slate-800 flex items-start gap-1.5 mt-0.5">
                                        <iconify-icon icon="lucide:map-pin"
                                            class="text-slate-400 text-xs mt-0.5 shrink-0"></iconify-icon>
                                        <span>House 12, Road 5, Block B, Mirpur-1, Dhaka-1216, Bangladesh</span>
                                    </span>
                                </div>

                            </div>
                        </div>

                    </section>

                </div>

                {{-- RIGHT COLUMN --}}
                <aside class="space-y-6 lg:col-span-4">
                    {{-- Language Profile --}}
                    <section class="rounded-2xl border border-brand-100 bg-white p-5 sm:p-6 shadow-sm">

                        <!-- Section Header -->
                        <div class="flex items-center justify-between border-b border-brand-50 pb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                    <iconify-icon icon="lucide:languages" class="text-xl"></iconify-icon>
                                </div>
                                <div>

                                    <h2 class="text-base font-bold text-brand-950">Skills & Communication </h2>
                                    <p class="text-[9px] font-bold uppercase tracking-[0.18em] text-brand-600">Language
                                        Proficiency</p>
                                </div>
                            </div>
                            <span
                                class="inline-flex items-center gap-1 rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-600">
                                2 Languages
                            </span>
                        </div>

                        <!-- Language Cards Grid -->
                        <div class="mt-5 grid grid-cols-1 gap-4">

                            <!-- Native Language -->
                            <div
                                class="flex items-center justify-between rounded-xl border border-brand-100/80 bg-slate-50/50 p-3.5 transition-all hover:bg-white hover:shadow-xs">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-100">
                                        <iconify-icon icon="lucide:check-circle-2" class="text-base"></iconify-icon>
                                    </div>
                                    <div>
                                        <h3 class="text-xs font-bold text-brand-950">Bengali</h3>
                                        <p class="text-[11px] text-slate-500">First Language</p>
                                    </div>
                                </div>
                                <span
                                    class="inline-flex items-center rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700 border border-emerald-200">
                                    Native
                                </span>
                            </div>

                            <!-- Secondary Language -->
                            <div
                                class="flex items-center justify-between rounded-xl border border-slate-200/80 bg-slate-50/50 p-3.5 transition-all hover:bg-white hover:shadow-xs">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-50 text-blue-600 border border-blue-100">
                                        <iconify-icon icon="lucide:message-square" class="text-base"></iconify-icon>
                                    </div>
                                    <div>
                                        <h3 class="text-xs font-bold text-slate-900">English</h3>
                                        <p class="text-[11px] text-slate-500">Intermediate / B2</p>
                                    </div>
                                </div>
                                <span
                                    class="inline-flex items-center rounded-md bg-blue-50 px-2.5 py-1 text-xs font-semibold text-blue-700 border border-blue-200">
                                    Conversational
                                </span>
                            </div>

                        </div>
                    </section>

                </aside>
            </div>
        </main>
    </div>
@endsection
