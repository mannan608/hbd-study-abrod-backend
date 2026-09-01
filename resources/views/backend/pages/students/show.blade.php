@extends('backend.layouts.app')

@section('content') <div class="relative w-full"> 
    <main class="flex-1">
        {{-- Profile Header --}}
        <section class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm">

            {{-- Cover --}}
            <div class="relative h-32 bg-gradient-to-r from-brand-700 via-brand-600 to-brand-500 sm:h-40">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.16),transparent_45%)]"></div>
            </div>

            <div class="px-5 pb-6 sm:px-8">
                <div class="-mt-14 flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between relative">

                    {{-- Profile Information --}}
                    <div class="flex flex-col items-start gap-4 sm:flex-row sm:items-end">
                        <img
                            src="https://randomuser.me/api/portraits/women/44.jpg"
                            alt="Aisha Rahman"
                            class="h-28 w-28 rounded-2xl border-4 border-white object-cover shadow-lg"
                        >

                        <div class="pb-1">
                            <div class="mb-4 flex flex-wrap items-center gap-2">
                                <h1 class="text-2xl font-bold tracking-tight text-white">
                                    Aisha Rahman
                                </h1>

                                <span class="inline-flex items-center gap-1.5 rounded-full bg-brand-50 px-3 py-1 text-xs font-semibold text-brand-700 ring-1 ring-inset ring-brand-100">
                                    <iconify-icon icon="lucide:circle-check" class="text-sm"></iconify-icon>
                                    Profile verified
                                </span>
                            </div>

                            <p class="text-base font-medium text-brand-700 flex items-center gap-4">
                                <span class="flex items-center gap-1">
                               <iconify-icon icon="lucide:phone" class="text-[15px] text-brand-500"></iconify-icon>
                                013155xxxxxx
                                </span>
                                <span class="flex items-center gap-1">
                                    <iconify-icon icon="lucide:mail" class="text-[15px] text-brand-500"></iconify-icon>
                                mail@gmail.com
                            </span>
                            </p>
                            

                            <p class="mt-1 flex items-center gap-1.5 text-sm text-slate-500">
                                <iconify-icon icon="lucide:map-pin" class="text-base text-brand-500"></iconify-icon>
                                Manchester, United Kingdom · Seeking study abroad
                            </p>
                        </div>
                    </div>

                    {{-- Profile Statistics --}}
                    <div class="flex gap-6 border-t border-brand-100 pt-4 sm:border-0 sm:pt-0">
                        <div>
                            <p class="text-xl font-bold text-brand-950">3.82</p>
                            <p class="mt-0.5 text-xs text-slate-500">GPA equivalent</p>
                        </div>

                        <div>
                            <p class="text-xl font-bold text-brand-950">C1</p>
                            <p class="mt-0.5 text-xs text-slate-500">English level</p>
                        </div>

                        <div>
                            <p class="text-xl font-bold text-brand-600">92%</p>
                            <p class="mt-0.5 text-xs text-slate-500">Application ready</p>
                        </div>
                    </div>
                </div>

                {{-- Profile Tags --}}
                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                        Passport country · Jordan
                    </span>

                    <span class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                        Intake · September 2026
                    </span>

                    <span class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                        Open to scholarships
                    </span>
                </div>
            </div>
        </section>


        {{-- Main Content --}}
        <div class="mt-6 grid grid-cols-1 gap-6 lg:grid-cols-12">

            {{-- Left Column --}}
            <div class="space-y-6 lg:col-span-8">

                {{-- Study Abroad Plan --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                                Study abroad plan
                            </p>

                            <h2 class="mt-1 text-lg font-bold text-brand-950">
                                Academic destination
                            </h2>
                        </div>
                    </div>

                    <div class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-3">

                        <div class="rounded-xl border border-brand-100 bg-brand-50 p-4 transition hover:border-brand-200 hover:shadow-sm">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-white text-brand-600 shadow-sm">
                                <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                            </div>

                            <p class="mt-4 text-xs font-medium text-brand-600">
                                Degree goal
                            </p>

                            <p class="mt-1 text-sm font-semibold text-brand-950">
                                MSc HCI &amp; Design
                            </p>
                        </div>

                        <div class="rounded-xl border border-brand-100 bg-brand-25 p-4 transition hover:border-brand-200 hover:shadow-sm">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-white text-brand-500 shadow-sm">
                                <iconify-icon icon="lucide:map-pin" class="text-xl"></iconify-icon>
                            </div>

                            <p class="mt-4 text-xs font-medium text-slate-500">
                                Preferred countries
                            </p>

                            <p class="mt-1 text-sm font-semibold text-brand-950">
                                UK · Netherlands · Canada
                            </p>
                        </div>

                        <div class="rounded-xl border border-brand-100 bg-white p-4 transition hover:border-brand-200 hover:shadow-sm">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand-50 text-brand-600">
                                <iconify-icon icon="lucide:wallet" class="text-xl"></iconify-icon>
                            </div>

                            <p class="mt-4 text-xs font-medium text-slate-500">
                                Funding plan
                            </p>

                            <p class="mt-1 text-sm font-semibold text-brand-950">
                                Scholarship + family support
                            </p>
                        </div>
                    </div>

                    <p class="mt-5 text-sm leading-6 text-slate-500">
                        Aisha is looking for a globally recognised, research-led programme with a strong focus on accessible digital products, industry collaboration and post-study career pathways.
                    </p>
                </section>


                {{-- Academic Background --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                                Academic background
                            </p>

                            <h2 class="text-lg font-bold text-brand-950">
                                Education
                            </h2>
                        </div>
                    </div>

                    <div class="relative mt-6 border-l-2 border-brand-100 pl-5">
                        <span class="absolute -left-[0.58rem] top-1.5 h-4 w-4 rounded-full border-4 border-white bg-brand-500 shadow-sm"></span>

                        <div class="flex flex-col justify-between gap-3 sm:flex-row">
                            <div>
                                <h3 class="text-sm font-bold text-brand-950">
                                    BSc (Hons) Computer Science
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Northfield University · Manchester, United Kingdom
                                </p>
                            </div>

                            <span class="w-fit text-xs font-semibold text-brand-700 flex items-center">
                                2022 — 2026
                            </span>
                        </div>

                        <div class="mt-5 grid grid-cols-2 gap-4 sm:grid-cols-4">
                            <div class="rounded-lg bg-brand-25 p-3">
                                <p class="text-xs text-slate-500">GPA</p>
                                <p class="mt-1 font-bold text-brand-950">3.82 / 4.0</p>
                            </div>

                            <div class="rounded-lg bg-brand-25 p-3">
                                <p class="text-xs text-slate-500">Expected award</p>
                                <p class="mt-1 font-bold text-brand-950">First Class</p>
                            </div>

                            <div class="rounded-lg bg-brand-25 p-3">
                                <p class="text-xs text-slate-500">Credits</p>
                                <p class="mt-1 font-bold text-brand-950">240 / 360</p>
                            </div>

                            <div class="rounded-lg bg-brand-25 p-3">
                                <p class="text-xs text-slate-500">Graduation</p>
                                <p class="mt-1 font-bold text-brand-950">Jun 2026</p>
                            </div>
                        </div>

                        <p class="mt-4 text-sm leading-6 text-slate-500">
                            Relevant modules: Human-Computer Interaction, Machine Learning, Data Visualisation, Software Engineering and Digital Ethics.
                        </p>
                    </div>
                    
                </section>


                {{-- Professional Experience --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:briefcase" class="text-xl"></iconify-icon>
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                                Professional experience
                            </p>

                            <h2 class="text-lg font-bold text-brand-950">
                                Experience &amp; leadership
                            </h2>
                        </div>
                    </div>

                    <div class="mt-6 space-y-4">

                        <article class="rounded-xl border border-brand-100 p-4 transition hover:border-brand-200 hover:shadow-sm">
                            <div class="flex flex-col justify-between gap-3 sm:flex-row">
                                <div>
                                    <div class="flex flex-wrap items-center gap-2">
                                        <h3 class="text-sm font-bold text-brand-950">
                                            Digital Experience Intern
                                        </h3>

                                        <span class="rounded-full bg-brand-50 px-2.5 py-1 text-xs font-semibold text-brand-700">
                                            Current
                                        </span>
                                    </div>

                                    <p class="mt-1 text-sm text-slate-500">
                                        Northfield University · Student Services
                                    </p>
                                </div>

                                <p class="text-xs font-medium text-slate-400">
                                    Sep 2024 — Present
                                </p>
                            </div>

                            <p class="mt-4 text-sm leading-6 text-slate-500">
                                Mapped student journeys with 30 participants and built accessible prototypes for a redesigned wellbeing referral service.
                            </p>
                        </article>

                        <article class="rounded-xl border border-brand-100 p-4 transition hover:border-brand-200 hover:shadow-sm">
                            <div class="flex flex-col justify-between gap-3 sm:flex-row">
                                <div>
                                    <h3 class="text-sm font-bold text-brand-950">
                                        Student Technology Mentor
                                    </h3>

                                    <p class="mt-1 text-sm text-slate-500">
                                        Northfield University · Learning Hub
                                    </p>
                                </div>

                                <p class="text-xs font-medium text-slate-400">
                                    Oct 2023 — May 2024
                                </p>
                            </div>

                            <p class="mt-4 text-sm leading-6 text-slate-500">
                                Supported first-year students with research workflows, digital collaboration and portfolio preparation through weekly clinics.
                            </p>
                        </article>

                    </div>
                </section>


                {{-- Portfolio --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                <iconify-icon icon="lucide:folder" class="text-xl"></iconify-icon>
                            </div>

                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                                    Portfolio evidence
                                </p>

                                <h2 class="text-lg font-bold text-brand-950">
                                    Projects &amp; achievements
                                </h2>
                            </div>
                        </div>

                        <button
                            type="button"
                            class="text-sm font-semibold text-brand-600 transition hover:text-brand-800"
                        >
                            View all
                        </button>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2">

                        <article class="rounded-xl border border-brand-100 bg-brand-25 p-5 transition hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-sm">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-brand-600 shadow-sm">
                                <iconify-icon icon="lucide:smartphone" class="text-2xl"></iconify-icon>
                            </div>

                            <h3 class="mt-5 text-sm font-bold text-brand-950">
                                Campus Connect
                            </h3>

                            <p class="mt-2 text-sm leading-5 text-slate-500">
                                A discovery app connecting students to academic and wellbeing support services.
                            </p>

                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="rounded-full bg-white px-2.5 py-1 text-xs font-medium text-brand-700 ring-1 ring-inset ring-brand-100">
                                    Figma
                                </span>

                                <span class="rounded-full bg-white px-2.5 py-1 text-xs font-medium text-brand-700 ring-1 ring-inset ring-brand-100">
                                    React
                                </span>
                            </div>
                        </article>

                        <article class="rounded-xl border border-brand-100 p-5 transition hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-sm">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                <iconify-icon icon="lucide:award" class="text-2xl"></iconify-icon>
                            </div>

                            <h3 class="mt-5 text-sm font-bold text-brand-950">
                                Faculty Innovation Prize
                            </h3>

                            <p class="mt-2 text-sm leading-5 text-slate-500">
                                Awarded for a data visualisation project improving the use of student study spaces.
                            </p>

                            <p class="mt-4 text-xs font-semibold text-brand-600">
                                May 2024
                            </p>
                        </article>

                    </div>
                </section>

            </div>


            {{-- Right Column --}}
            <aside class="space-y-6 lg:col-span-4">

                {{-- Application Progress --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                            Application progress
                        </p>

                        <h2 class="mt-1 text-lg font-bold text-brand-950">
                            Readiness checklist
                        </h2>
                    </div>

                    <div class="mt-5 space-y-3">

                        <div class="flex items-center justify-between gap-3 rounded-xl border border-brand-100 bg-brand-50 p-3">
                            <div class="flex items-center gap-3">
                                <iconify-icon icon="lucide:circle-check" class="text-xl text-brand-600"></iconify-icon>
                                <span class="text-sm font-medium text-brand-900">Academic transcript</span>
                            </div>

                            <span class="text-xs font-bold text-brand-600">Ready</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 rounded-xl border border-brand-100 bg-brand-50 p-3">
                            <div class="flex items-center gap-3">
                                <iconify-icon icon="lucide:circle-check" class="text-xl text-brand-600"></iconify-icon>
                                <span class="text-sm font-medium text-brand-900">English certificate</span>
                            </div>

                            <span class="text-xs font-bold text-brand-600">Verified</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-200 bg-slate-50 p-3">
                            <div class="flex items-center gap-3">
                                <iconify-icon icon="lucide:clock" class="text-xl text-slate-400"></iconify-icon>
                                <span class="text-sm font-medium text-slate-700">Statement of purpose</span>
                            </div>

                            <span class="text-xs font-semibold text-slate-500">In review</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-200 bg-slate-50 p-3">
                            <div class="flex items-center gap-3">
                                <iconify-icon icon="lucide:clock" class="text-xl text-slate-400"></iconify-icon>
                                <span class="text-sm font-medium text-slate-700">Reference letters</span>
                            </div>

                            <span class="text-xs font-semibold text-slate-500">1 of 2</span>
                        </div>

                    </div>
                </section>


                {{-- Language Profile --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:languages" class="text-xl"></iconify-icon>
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                                Language profile
                            </p>

                            <h2 class="text-lg font-bold text-brand-950">
                                English proficiency
                            </h2>
                        </div>
                    </div>

                    <div class="mt-5 rounded-xl border border-brand-100 bg-brand-25 p-4">
                        <div class="flex items-center justify-between gap-3">
                            <div>
                                <p class="text-sm font-bold text-brand-950">
                                    C1 · Advanced
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    IELTS Academic
                                </p>
                            </div>

                            <span class="rounded-full bg-white px-3 py-1 text-xs font-bold text-brand-600 ring-1 ring-inset ring-brand-100">
                                Verified
                            </span>
                        </div>

                        <div class="mt-4 grid grid-cols-2 gap-3 text-center">
                            <div class="rounded-xl bg-white p-3 shadow-sm">
                                <p class="text-lg font-bold text-brand-950">7.5</p>
                                <p class="text-xs text-slate-500">Overall band</p>
                            </div>

                            <div class="rounded-xl bg-white p-3 shadow-sm">
                                <p class="text-lg font-bold text-brand-950">Aug ’24</p>
                                <p class="text-xs text-slate-500">Test date</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 flex items-center justify-between text-sm">
                        <span class="text-slate-500">Arabic</span>
                        <span class="font-semibold text-brand-950">Native</span>
                    </div>
                </section>


                {{-- Skills --}}
                <section class="rounded-2xl border border-brand-100 bg-white p-5 shadow-sm">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                        Skills inventory
                    </p>

                    <h2 class="mt-1 text-lg font-bold text-brand-950">
                        Strengths for study
                    </h2>

                    <div class="mt-5 space-y-5">

                        <div>
                            <div class="mb-2 flex items-center justify-between text-sm">
                                <span class="font-medium text-brand-900">UX research</span>
                                <span class="text-xs font-medium text-slate-500">Advanced</span>
                            </div>

                            <div class="h-2 overflow-hidden rounded-full bg-brand-100">
                                <div class="h-full w-5/6 rounded-full bg-brand-600"></div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between text-sm">
                                <span class="font-medium text-brand-900">Academic writing</span>
                                <span class="text-xs font-medium text-slate-500">Advanced</span>
                            </div>

                            <div class="h-2 overflow-hidden rounded-full bg-brand-100">
                                <div class="h-full w-4/5 rounded-full bg-brand-600"></div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between text-sm">
                                <span class="font-medium text-brand-900">Python &amp; SQL</span>
                                <span class="text-xs font-medium text-slate-500">Intermediate</span>
                            </div>

                            <div class="h-2 overflow-hidden rounded-full bg-brand-100">
                                <div class="h-full w-3/5 rounded-full bg-brand-400"></div>
                            </div>
                        </div>

                    </div>
                </section>


                {{-- CTA --}}
                <section class="relative overflow-hidden rounded-2xl bg-brand-700 p-5 text-white shadow-sm">
                    <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-white/10"></div>

                    <div class="relative flex items-start gap-3">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/10">
                            <iconify-icon icon="lucide:send" class="text-xl"></iconify-icon>
                        </div>

                        <div>
                            <h2 class="text-lg font-bold">
                                Ready to shortlist
                            </h2>

                            <p class="mt-2 text-sm leading-5 text-brand-100">
                                Your profile is ready to match with programmes and scholarships.
                            </p>

                            <button
                                type="button"
                                class="mt-4 rounded-lg bg-white px-4 py-2.5 text-sm font-bold text-brand-700 shadow-sm transition hover:bg-brand-25"
                            >
                                Explore matching courses
                            </button>
                        </div>
                    </div>
                </section>

            </aside>
        </div>
    </main>


    {{-- Mobile Navigation --}}
    <nav class="fixed inset-x-0 bottom-0 z-40 border-t border-brand-100 bg-white/95 px-5 py-2.5 shadow-[0_-4px_20px_rgba(13,60,104,0.08)] backdrop-blur lg:hidden">
        <div class="flex items-center justify-around">

            <button
                type="button"
                class="flex min-h-11 flex-col items-center justify-center gap-1 text-brand-600"
            >
                <iconify-icon icon="lucide:user" class="text-xl"></iconify-icon>
                <span class="text-[10px] font-bold">Profile</span>
            </button>

            <button
                type="button"
                class="flex min-h-11 flex-col items-center justify-center gap-1 text-slate-400 transition hover:text-brand-600"
            >
                <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                <span class="text-[10px] font-medium">Courses</span>
            </button>

            <button
                type="button"
                class="flex min-h-11 flex-col items-center justify-center gap-1 text-slate-400 transition hover:text-brand-600"
            >
                <iconify-icon icon="lucide:bell" class="text-xl"></iconify-icon>
                <span class="text-[10px] font-medium">Updates</span>
            </button>

        </div>
    </nav>
</div>

@endsection

