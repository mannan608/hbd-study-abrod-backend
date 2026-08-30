@extends('frontend.layouts.app')

@section('content')
    <!-- Main Container -->

    <!-- About Us Section -->
    @include('frontend.pages.common-section.about-section')

    <!-- 2. Statistics Highlight Bar -->
    <section class="">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-gradient-to-r from-brand-900 via-brand-600 to-brand-900 rounded-3xl text-white shadow-xl">
            <div
                class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center divide-y sm:divide-y-0 sm:divide-x divide-white/10">
                <div class="pt-4 sm:pt-0">
                    <h2 class="text-4xl sm:text-5xl font-black tracking-tight text-white mb-1">10+</h2>
                    <p class="text-sm uppercase tracking-widest font-semibold text-brand-100">Global Offices</p>
                </div>
                <div class="pt-6 sm:pt-0">
                    <h2 class="text-4xl sm:text-5xl font-black tracking-tight text-white mb-1">250+</h2>
                    <p class="text-sm uppercase tracking-widest font-semibold text-brand-100">Education Experts</p>
                </div>
                <div class="pt-6 sm:pt-0">
                    <h2 class="text-4xl sm:text-5xl font-black tracking-tight text-white mb-1">30,000+</h2>
                    <p class="text-sm uppercase tracking-widest font-semibold text-brand-100">Students Assisted</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Why Partner With HBD ServicesSection -->
    <section class="">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="mx-auto max-w-2xl px-4 py-12 text-center  translate-y-10 transition-all duration-1000 ease-out">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-brand-500/10 rounded-full mb-6 transition-all duration-700 delay-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-zap w-4 h-4 text-brand-500 transition-transform duration-500 group-hover:scale-110">
                        <path
                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                        </path>
                    </svg>
                    <span class="text-sm font-semibold text-brand-500 uppercase">Why Choose Us</span>
                </div>

                <!-- Main Heading -->
                <h1
                    class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase transition-all duration-700 delay-200">
                    WHY PARTNER WITH HBD Services?
                </h1>

                <!-- Subheading Description -->
                <p
                    class="mx-auto mt-4 max-w-2xl text-base text-neutral-600 sm:text-lg transition-all duration-700 delay-300">
                    We combine cutting-edge tech with deep educational expertise to deliver high-quality guidance for
                    international students.
                </p>
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch my-8">
                <!-- Feature Cards Column -->
                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white p-6 rounded-2xl border border-slate-100  hover:shadow-md transition">
                        <div
                            class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center font-bold mb-4">
                            01</div>
                        <h3 class="font-bold text-slate-900 text-lg mb-2">Focused on Quality</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">We deliver top-tier guidance ensuring every
                            application meets high institutional standards.</p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-100  hover:shadow-md transition">
                        <div
                            class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center font-bold mb-4">
                            02</div>
                        <h3 class="font-bold text-slate-900 text-lg mb-2">Boost Your Success</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Our streamlined process significantly
                            improves
                            student approval and acceptance rates.</p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-100  hover:shadow-md transition">
                        <div
                            class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center font-bold mb-4">
                            03</div>
                        <h3 class="font-bold text-slate-900 text-lg mb-2">Seamless Process</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Fast, digital-first support designed to take
                            the
                            complexity out of studying abroad.</p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-100  hover:shadow-md transition">
                        <div
                            class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center font-bold mb-4">
                            04</div>
                        <h3 class="font-bold text-slate-900 text-lg mb-2">Tailored Guidance</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Personalized counselling aligned with each
                            student’s career aspirations.</p>
                    </div>
                </div>

                <!-- Visual Image Column -->
                <div class="lg:col-span-6 rounded-2xl overflow-hidden shadow-md relative min-h-[300px]">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1000&q=80"
                        alt="Office Team" class="w-full h-full object-cover" />
                </div>
            </div>
    </section>

    <!-- 4. Vision, Purpose, & Mission Section -->
    <section class="my-16 md:my-20 lg:my-24">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-brand-900 text-white rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-xl">
            <div class="absolute right-0 top-0 w-96 h-96 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-3xl mb-12">
                <h2 class="text-xs font-bold uppercase tracking-widest text-brand-100 mb-2">Driven By Values</h2>
                <p class="text-2xl sm:text-3xl font-bold leading-snug">
                    HBD Servicesis an Australian technology-based education and migration consultancy guiding students with
                    complete confidence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border-t border-brand-700/50 pt-8">
                <div class="space-y-3">
                    <span class="text-4xl font-black text-brand-500/80">01</span>
                    <h3 class="text-xl font-bold tracking-tight text-white">VISION</h3>
                    <p class="text-sm text-brand-100/80 leading-relaxed">
                        To empower international students globally through innovative, technology-driven education and
                        migration services.
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="text-4xl font-black text-brand-500/80">02</span>
                    <h3 class="text-xl font-bold tracking-tight text-white">PURPOSE</h3>
                    <p class="text-sm text-brand-100/80 leading-relaxed">
                        To simplify the complex journey of studying abroad, connecting students with top institutions
                        worldwide seamlessly.
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="text-4xl font-black text-brand-500/80">03</span>
                    <h3 class="text-xl font-bold tracking-tight text-white">MISSION</h3>
                    <p class="text-sm text-brand-100/80 leading-relaxed">
                        To provide ethical, reliable, and end-to-end counselling that shapes successful global academic
                        careers.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="">
        <div class="max-w-7xl mx-auto text-center px-4 sm:px-6 lg:px-8">

            <header class="mx-auto max-w-2xl px-4 mb-12 text-center ">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-brand-500/10 rounded-full mb-6 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-zap w-4 h-4 text-brand-500 transition-transform duration-500 group-hover:scale-110">
                        <path
                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                        </path>
                    </svg>
                    <span class="text-sm font-semibold text-brand-500 uppercase"> Our commitment</span>
                </div>

                <!-- Main Heading -->
                <h1
                    class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase">
                    Our promises to you
                </h1>

                <!-- Subheading Description -->
                <p
                    class="mx-auto mt-4 max-w-2xl text-base text-neutral-600 sm:text-lg transition-all duration-700 delay-300">
                    We are committed to making your journey simpler, clearer, and more rewarding from the first
                    consultation to your future abroad.
                </p>
            </header>
            <div class="grid grid-cols-1 items-center gap-8 lg:grid-cols-12 lg:gap-12">

                {{-- Image --}}
                <div class="lg:col-span-6">
                    <div class="group relative overflow-hidden rounded-[1.5rem]">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1000&q=80"
                            alt="Consultation Meeting"
                            class="h-[320px] w-full object-cover transition duration-700 group-hover:scale-105 sm:h-[380px]" />

                        {{-- Image Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 via-transparent to-transparent">
                        </div>

                        {{-- Image Caption --}}
                        <div class="absolute bottom-5 left-5 right-5">
                            <div
                                class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-medium text-white backdrop-blur-md">
                                <span class="h-2 w-2 rounded-full bg-brand-400"></span>
                                Your journey, our commitment
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="lg:col-span-6">



                    {{-- Promises --}}
                    <ul class="space-y-6">

                        <li
                            class="group flex items-center gap-4 rounded-2xl  transition-all duration-300 hover:-translate-y-0.5 uppercase">
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-brand-500 text-xs font-bold text-white  transition-transform duration-300 group-hover:scale-105">
                                01
                            </span>
                            <span class="text-sm font-semibold text-slate-700 sm:text-base">
                                We put you first.
                            </span>
                        </li>

                        <li
                            class="group flex items-center gap-4 rounded-2xl  transition-all duration-300 hover:-translate-y-0.5 uppercase">
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-brand-500 text-xs font-bold text-white  transition-transform duration-300 group-hover:scale-105">
                                02
                            </span>
                            <span class="text-sm font-semibold text-slate-700 sm:text-base">
                                We believe in honesty every step of the way.
                            </span>
                        </li>

                        <li
                            class=" group flex items-center gap-4 rounded-2xl  transition-all duration-300 hover:-translate-y-0.5 uppercase">
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-brand-500 text-xs font-bold text-white  transition-transform duration-300 group-hover:scale-105">
                                03
                            </span>
                            <span class="text-sm font-semibold text-slate-700 sm:text-base">
                                We grow together.
                            </span>
                        </li>

                        <li
                            class="group flex items-center gap-4 rounded-2xl  transition-all duration-300 hover:-translate-y-0.5 uppercase">
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-brand-500 text-xs font-bold text-white  transition-transform duration-300 group-hover:scale-105">
                                04
                            </span>
                            <span class="text-sm font-semibold text-slate-700 sm:text-base">
                                You can always trust us.
                            </span>
                        </li>

                        <li
                            class="group flex items-center gap-4 rounded-2xl  transition-all duration-300 hover:-translate-y-0.5 uppercase">
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-brand-500 text-xs font-bold text-white  transition-transform duration-300 group-hover:scale-105">
                                05
                            </span>
                            <span class="text-sm font-semibold text-slate-700 sm:text-base">
                                We celebrate your future with you.
                            </span>
                        </li>

                        <li
                            class="group flex items-center gap-4 rounded-2xl  transition-all duration-300 hover:-translate-y-0.5 uppercase">
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-brand-500 text-xs font-bold text-white  transition-transform duration-300 group-hover:scale-105">
                                06
                            </span>
                            <span class="text-sm font-semibold text-slate-700 sm:text-base">
                                Dream bigger with us.
                            </span>
                        </li>

                    </ul>

                </div>
            </div>


        </div>
    </section>

    <!-- 6. Awards & Recognitions Timeline -->
    <section class="my-16 md:my-20 lg:my-24">
        <div
            class="max-w-7xl mx-auto text-center px-4 sm:px-6 lg:px-8 bg-white p-8 lg:p-12 rounded-3xl border border-slate-100  space-y-10">

            <header class="mx-auto max-w-2xl px-4 mb-12 text-center ">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-brand-500/10 rounded-full mb-6 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-zap w-4 h-4 text-brand-500 transition-transform duration-500 group-hover:scale-110">
                        <path
                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                        </path>
                    </svg>
                    <span class="text-sm font-semibold text-brand-500 uppercase">Excellence & Milestones</span>
                </div>

                <!-- Main Heading -->
                <h1
                    class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase">
                    AWARDS & RECOGNITIONS
                </h1>

                <!-- Subheading Description -->
                <p
                    class="mx-auto mt-4 max-w-2xl text-base text-neutral-600 sm:text-lg transition-all duration-700 delay-300">
                    We are committed to making your journey simpler, clearer, and more rewarding from the first
                    consultation to your future abroad.
                </p>
            </header>

            <div class="relative border-l-2 border-slate-200 ml-4 md:ml-32 space-y-12">

                <!-- 2023 -->
                <div class="relative pl-8 group">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-brand-500 ring-4 ring-white"></div>
                    <span class="md:absolute md:-left-28 md:top-0 font-black text-2xl text-brand-500">2023</span>
                    <div
                        class="bg-slate-50 p-5 rounded-2xl border border-slate-100 group-hover:border-brand-500/30 transition">
                        <ul class="space-y-2 text-slate-700 text-sm font-medium">
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2023 Finalist — Educational
                                Services</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2023 Business of the Year Award
                                (General Champion) — University of Canberra</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2023 Finalist — Australian
                                Business Awards</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2023 Finalist — Digital
                                Innovation Award</li>
                        </ul>
                    </div>
                </div>

                <!-- 2022 -->
                <div class="relative pl-8 group">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-brand-500 ring-4 ring-white"></div>
                    <span
                        class="md:absolute md:-left-28 md:top-0 font-black text-2xl text-slate-400 group-hover:text-brand-500 transition">2022</span>
                    <div
                        class="bg-slate-50 p-5 rounded-2xl border border-slate-100 group-hover:border-brand-500/30 transition">
                        <ul class="space-y-2 text-slate-700 text-sm font-medium">
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2022 Finalist — Educational
                                Services</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2022 Finalist — Local Business
                                Champion Education Services</li>
                        </ul>
                    </div>
                </div>

                <!-- 2020 -->
                <div class="relative pl-8 group">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-brand-500 ring-4 ring-white"></div>
                    <span
                        class="md:absolute md:-left-28 md:top-0 font-black text-2xl text-slate-400 group-hover:text-brand-500 transition">2020</span>
                    <div
                        class="bg-slate-50 p-5 rounded-2xl border border-slate-100 group-hover:border-brand-500/30 transition">
                        <ul class="space-y-2 text-slate-700 text-sm font-medium">
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2020 Finalist — Educational
                                Services</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2020 Outstanding Academic
                                Placement — Top Consultancy Award</li>
                        </ul>
                    </div>
                </div>

                <!-- 2019 -->
                <div class="relative pl-8 group">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-brand-500 ring-4 ring-white"></div>
                    <span
                        class="md:absolute md:-left-28 md:top-0 font-black text-2xl text-slate-400 group-hover:text-brand-500 transition">2019</span>
                    <div
                        class="bg-slate-50 p-5 rounded-2xl border border-slate-100 group-hover:border-brand-500/30 transition">
                        <ul class="space-y-2 text-slate-700 text-sm font-medium">
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2019 Winner — Excellence in
                                Education & Technology</li>
                        </ul>
                    </div>
                </div>

                <!-- 2018 -->
                <div class="relative pl-8 group">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-brand-500 ring-4 ring-white"></div>
                    <span
                        class="md:absolute md:-left-28 md:top-0 font-black text-2xl text-slate-400 group-hover:text-brand-500 transition">2018</span>
                    <div
                        class="bg-slate-50 p-5 rounded-2xl border border-slate-100 group-hover:border-brand-500/30 transition">
                        <ul class="space-y-2 text-slate-700 text-sm font-medium">
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2018 Finalist — Educational
                                Services</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2018 Top Migration Agent —
                                CQUniversity Sydney, Australia</li>
                        </ul>
                    </div>
                </div>

                <!-- 2017 -->
                <div class="relative pl-8 group">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-brand-500 ring-4 ring-white"></div>
                    <span
                        class="md:absolute md:-left-28 md:top-0 font-black text-2xl text-slate-400 group-hover:text-brand-500 transition">2017</span>
                    <div
                        class="bg-slate-50 p-5 rounded-2xl border border-slate-100 group-hover:border-brand-500/30 transition">
                        <ul class="space-y-2 text-slate-700 text-sm font-medium">
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2017 Finalist — Educational
                                Services</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> 2017 Rising Star Consultancy
                                Excellence — Awarded by Torrens University</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('frontend.pages.common-section.ceo')
    @include('frontend.pages.common-section.testimonial')
    @include('frontend.pages.common-section.university-partners')
    @include('frontend.pages.common-section.cta-section')
@endsection
