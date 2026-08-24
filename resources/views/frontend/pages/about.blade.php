@extends('frontend.layouts.app')

@section('content')
    {{-- Hero Section --}}
    {{-- <section class="relative py-8 md:py-0 min-h-80 md:min-h-90 lg:min-h-110 flex items-center overflow-hidden -mt-4">

        <div class="absolute inset-0 z-0">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQoY05k-jNBUO0YmxAqoLM5DGm_5330TYZTmlU5wZAkAbZJzZTBJuR8jez1K2SkYI1nH1IH9BSzC87aMBdA1eWSnwXJ8jyvpwgQ2-iyucX3phY7sQMmLA98O57-3JaWaqb0wvkYAv5sy0pwY7ssk-alxoxK7qBlP9VZuDKcxGmeTuAuVOQTUXJOmiqEJoS7bk5GATbF7uAg7y3hvRgSiRkbcK6ll9T1VpwNMrVaEpkgfMbvRb5YDMuc2K52GzVeFS3YJ8VKfagpA"
                alt="Training" class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-linear-to-r  bg-secondary-500/75 to-transparent"></div>
        </div>


        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">

            <div class="max-w-2xl">

                <h1 class="text-white font-bold text-2xl sm:text-3xl lg:text-4xl leading-tight mb-4 sm:mb-6">
                    Empowering the Next Generation of Professionals
                </h1>

                <p class="text-slate-200 text-base sm:text-lg leading-relaxed mb-6 sm:mb-8">
                    At HBD Services, we bridge the gap between academic knowledge
                    and industry demands. Our mission is to provide world-class
                    vocational education that transforms careers and fuels
                    professional growth.
                </p>


                <div class="flex flex-col sm:flex-row gap-4">

                    <a href="{{ route('courses') }}"
                        class="inline-flex items-center justify-center
                        bg-brand-600 text-white
                        px-5 py-3 lg:px-6 lg:py-3
                        rounded-lg
                        hover:bg-brand-500
                        transition duration-300">
                        Our Courses
                    </a>

                </div>

            </div>

        </div>

    </section> --}}

    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-16">

        <!-- About Us Section -->
        <section class="relative overflow-hidden py-16 sm:py-20 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
                    <!-- ===================================================== IMAGE ====================================================== -->
                    <div class="lg:col-span-6">
                        <div class="relative group"> <!-- Main Image -->
                            <div
                                class=" relative overflow-hidden rounded-[2rem] aspect-[4/3] bg-slate-100 shadow-2xl shadow-slate-200/60 ">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1400&q=85"
                                    alt="HBD Services Team Collaboration"
                                    class=" w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 " />
                                <!-- Image Overlay -->
                                <div
                                    class=" absolute inset-0 bg-gradient-to-t from-slate-950/45 via-transparent to-transparent ">
                                </div> <!-- Bottom Label -->
                                <div
                                    class=" absolute left-5 bottom-5 sm:left-7 sm:bottom-7 flex items-center gap-3 bg-white/95 backdrop-blur-md rounded-2xl px-4 py-3 shadow-xl ">
                                    <div
                                        class=" w-10 h-10 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center ">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900"> Your Future Starts Here </p>
                                        <p class="text-[11px] text-slate-500 mt-0.5"> Education & Migration Guidance </p>
                                    </div>
                                </div>
                            </div> <!-- Decorative Element -->
                            <div class=" absolute -z-10 -bottom-5 -right-5 w-32 h-32 rounded-3xl bg-brand-50 "></div>
                            <!-- Floating Stats Card -->
                            <div
                                class=" absolute -top-5 -right-3 sm:-right-6 bg-white rounded-2xl px-4 py-3.5 shadow-xl shadow-slate-200/70 border border-slate-100 ">
                                <div class="flex items-center gap-3">
                                    <div
                                        class=" w-10 h-10 rounded-xl bg-brand-500 text-white flex items-center justify-center ">
                                        <i class="fa-solid fa-user-group text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-lg font-black text-slate-900 leading-none"> 1:1 </p>
                                        <p class="text-[11px] text-slate-500 mt-1"> Personal Guidance </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ===================================================== CONTENT ====================================================== -->
                    <div class="lg:col-span-6">
                        <div class="max-w-xl"> <!-- Small Label -->
                            <div class="flex items-center gap-3 mb-5"> <span
                                    class=" inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.18em] text-brand-600 ">
                                    <span class="w-8 h-px bg-brand-500"></span> Who We Are </span> </div> <!-- Heading -->
                            <h2
                                class=" text-4xl sm:text-5xl lg:text-[3.5rem] font-black tracking-tight leading-[1.05] text-slate-950 ">
                                Guiding You <span class="text-brand-500"> Towards </span> <br class="hidden sm:block"> A
                                Brighter Future </h2> <!-- Description -->
                            <div class="mt-6 space-y-4">
                                <p class=" text-base sm:text-lg text-slate-600 leading-8 "> HBD Services is an Australian
                                    technology-based education and migration consultancy. We help international students
                                    explore
                                    Australian programs, get expert guidance, and apply with complete confidence. </p>
                                <p class=" text-sm sm:text-base text-slate-500 leading-7 "> Our team provides personalized
                                    support at every step of your educational journey, ensuring smooth admissions, visa
                                    processing, and transparent advice tailored to your goals. </p>
                            </div>
                            <!-- ================================================= FEATURES ================================================== -->
                            <div class=" grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8 pt-7 border-t border-slate-100 ">
                                <!-- Feature 1 -->
                                <div class="flex items-start gap-3">
                                    <div
                                        class=" shrink-0 w-9 h-9 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center ">
                                        <i class="fa-solid fa-check text-xs"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-bold text-slate-900"> Personalized Guidance </h3>
                                        <p class="text-xs text-slate-500 mt-1 leading-5"> Advice tailored to your goals.
                                        </p>
                                    </div>
                                </div> <!-- Feature 2 -->
                                <div class="flex items-start gap-3">
                                    <div
                                        class=" shrink-0 w-9 h-9 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center ">
                                        <i class="fa-solid fa-shield-halved text-xs"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-bold text-slate-900"> Transparent Support </h3>
                                        <p class="text-xs text-slate-500 mt-1 leading-5"> Clear advice at every step. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- ================================================= CTA ================================================== -->
                            <div class="mt-8 flex flex-col sm:flex-row sm:items-center gap-5"> <a href="#partner"
                                    class=" inline-flex items-center justify-center bg-brand-500 hover:bg-brand-600 text-white font-bold px-6 py-3.5 rounded-xl shadow-lg shadow-brand-500/20 transition-all duration-200 hover:-translate-y-0.5 ">
                                    Connect With Us <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg> </a> <!-- Trust text -->
                                <div class="flex items-center gap-2">
                                    <div class="flex -space-x-2">

                                        <img src="https://i.pravatar.cc/100?img=12" alt="Student"
                                            class="w-7 h-7 rounded-full object-cover border-2 border-white">

                                        <img src="https://i.pravatar.cc/100?img=32" alt="Student"
                                            class="w-7 h-7 rounded-full object-cover border-2 border-white">

                                        <img src="https://i.pravatar.cc/100?img=47" alt="Student"
                                            class="w-7 h-7 rounded-full object-cover border-2 border-white">

                                    </div>
                                    <span class="text-xs text-slate-500"> Personal support from start to finish </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Statistics Highlight Bar -->
        <section
            class="bg-gradient-to-r from-brand-900 via-brand-600 to-brand-900 rounded-3xl p-8 sm:p-10 text-white shadow-xl">
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
        </section>

        <!-- 3. Why Partner With HBD ServicesSection -->
        <section id="partner" class="space-y-8">
            <div class="text-center max-w-2xl mx-auto space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-500 bg-brand-50 px-3 py-1 rounded-full">
                    Why Choose Us
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    WHY PARTNER WITH HBD Services?
                </h2>
                <p class="text-slate-600">
                    We combine cutting-edge tech with deep educational expertise to deliver high-quality guidance for
                    international students.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                <!-- Feature Cards Column -->
                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div
                            class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center font-bold mb-4">
                            01</div>
                        <h3 class="font-bold text-slate-900 text-lg mb-2">Focused on Quality</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">We deliver top-tier guidance ensuring every
                            application meets high institutional standards.</p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div
                            class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center font-bold mb-4">
                            02</div>
                        <h3 class="font-bold text-slate-900 text-lg mb-2">Boost Your Success</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Our streamlined process significantly improves
                            student approval and acceptance rates.</p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div
                            class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center font-bold mb-4">
                            03</div>
                        <h3 class="font-bold text-slate-900 text-lg mb-2">Seamless Process</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Fast, digital-first support designed to take the
                            complexity out of studying abroad.</p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
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
        <section class="bg-brand-900 text-white rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-xl">
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
        </section>

        <!-- 5. Our Promises Section -->
        <section
            class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white p-8 lg:p-12 rounded-3xl border border-slate-100 shadow-sm">
            <div class="lg:col-span-6 rounded-2xl overflow-hidden shadow-md">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1000&q=80"
                    alt="Consultation Meeting" class="w-full h-[360px] object-cover" />
            </div>

            <div class="lg:col-span-6 space-y-6">
                <div>
                    <span
                        class="text-xs font-bold uppercase tracking-widest text-brand-500 bg-brand-50 px-3 py-1 rounded-full">
                        Our Commitment
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2">
                        OUR PROMISES
                    </h2>
                </div>

                <ul class="space-y-3">
                    <li class="flex items-center space-x-3 p-3 rounded-xl bg-slate-50 hover:bg-brand-50/50 transition">
                        <span
                            class="w-6 h-6 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold">✓</span>
                        <span class="font-semibold text-slate-800"># WE PUT YOU FIRST</span>
                    </li>
                    <li class="flex items-center space-x-3 p-3 rounded-xl bg-slate-50 hover:bg-brand-50/50 transition">
                        <span
                            class="w-6 h-6 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold">✓</span>
                        <span class="font-semibold text-slate-800"># HONESTY EVERY STEP</span>
                    </li>
                    <li class="flex items-center space-x-3 p-3 rounded-xl bg-slate-50 hover:bg-brand-50/50 transition">
                        <span
                            class="w-6 h-6 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold">✓</span>
                        <span class="font-semibold text-slate-800"># WE GROW TOGETHER</span>
                    </li>
                    <li class="flex items-center space-x-3 p-3 rounded-xl bg-slate-50 hover:bg-brand-50/50 transition">
                        <span
                            class="w-6 h-6 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold">✓</span>
                        <span class="font-semibold text-slate-800"># YOU CAN TRUST US</span>
                    </li>
                    <li class="flex items-center space-x-3 p-3 rounded-xl bg-slate-50 hover:bg-brand-50/50 transition">
                        <span
                            class="w-6 h-6 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold">✓</span>
                        <span class="font-semibold text-slate-800"># WE CELEBRATE YOUR FUTURE</span>
                    </li>
                    <li class="flex items-center space-x-3 p-3 rounded-xl bg-slate-50 hover:bg-brand-50/50 transition">
                        <span
                            class="w-6 h-6 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold">✓</span>
                        <span class="font-semibold text-slate-800"># DREAM BIGGER WITH US</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- 6. Awards & Recognitions Timeline -->
        <section class="bg-white p-8 lg:p-12 rounded-3xl border border-slate-100 shadow-sm space-y-10">
            <div class="text-center max-w-xl mx-auto space-y-2">
                <span
                    class="text-xs font-bold uppercase tracking-widest text-brand-500 bg-brand-50 px-3 py-1 rounded-full">
                    Excellence & Milestones
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900">
                    AWARDS & RECOGNITIONS
                </h2>
            </div>

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
        </section>

    </div>
@endsection
