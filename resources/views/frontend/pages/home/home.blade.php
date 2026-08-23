@extends('frontend.layouts.app')


@section('content')
    @include('frontend.pages.home.sections.hero')

    @include('frontend.pages.home.sections.stats')

    @include('frontend.pages.home.sections.course-section')

    @include('frontend.pages.home.sections.how-it-work')

    <section class="bg-brand-50 py-12">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 relative overflow-hidden rounded-3xl bg-[#155b9d] shadow-xl reveal-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out">

            <!-- Background Image -->
            <img src="{{ asset('frontend-img/home-aus-cta.avif') }}" alt="Australia Landmarks"
                class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-700 hover:scale-105" />

            <!-- Gradient Overlay (using #1968b2 and #155b9d with opacity so the image stays visible) -->
            <div
                class="absolute inset-0 bg-gradient-to-r from-[#155b9d]/90 via-[#1968b2]/80 to-[#155b9d]/70 backdrop-brightness-90">
            </div>

            <!-- Content Container -->
            <div
                class="relative z-10 flex flex-col items-center justify-center px-6 py-12 text-center sm:px-12 sm:py-16 md:py-20">

                <!-- Quote Icon -->
                <svg class="mb-4 h-10 w-10 text-white/40 sm:h-12 sm:w-12 transition-all duration-700 ease-out delay-150"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                </svg>

                <!-- Quote Text -->
                <h2
                    class="max-w-3xl text-2xl font-black uppercase leading-tight tracking-wide text-white drop-shadow-md sm:text-3xl md:text-4xl transition-all duration-700 ease-out delay-200">
                    "Imagine arriving in Australia knowing you've made the right decision. That's the confidence we build
                    from day one."
                </h2>

                <!-- CTA Button -->
                <a href="#"
                    class="mt-8 inline-flex items-center gap-2 rounded-full bg-white px-7 py-3.5 text-xs font-bold uppercase tracking-wider text-[#155b9d] shadow-md transition-all duration-500 ease-out hover:bg-slate-100 hover:text-[#1968b2] hover:shadow-lg hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-[#155b9d] delay-300">
                    <span>See what you can achieve</span>
                    <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>

            </div>
        </div>
    </section>
    @include('frontend.pages.home.sections.expo-event')
    @include('frontend.pages.home.sections.counseller-section')
    @include('frontend.pages.home.sections.university-partners')

    {{-- <section class="bg-white py-16 sm:py-20 lg:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <header
                class="mx-auto max-w-2xl px-4 py-12 text-center font-sans reveal-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#1068b2]/10 rounded-full mb-6 transition-all duration-700 delay-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-zap w-4 h-4 text-[#1068b2] transition-transform duration-500 group-hover:scale-110">
                        <path
                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                        </path>
                    </svg>
                    <span class="text-sm font-semibold text-[#1068b2] uppercase">Your journey, simplified</span>
                </div>

                <!-- Main Heading -->
                <h1
                    class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase transition-all duration-700 delay-200">
                   How We Make Your Journey Easier
                </h1>

                <!-- Subheading Description -->
                <p class="mx-auto mt-4 max-w-2xl text-base text-slate-600 sm:text-lg transition-all duration-700 delay-300">
                    Everything you need to discover the right course, university and
                    career path — all in one place.
                </p>
            </header>


            <!-- Feature Cards -->
            <div class="mt-12 overflow-hidden">
                <div class="flex gap-4 overflow-x-auto pb-4 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    <!-- Card -->
                    <div
                        class="group flex min-w-[280px] flex-1 items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#9B2064]/20 hover:shadow-lg sm:min-w-[300px]">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#9B2064]/10">
                            <svg class="h-6 w-6 text-[#9B2064]" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                            </svg>
                        </div>

                        <p class="text-sm font-semibold leading-6 text-slate-800">
                            Find courses that match your dreams & goals
                        </p>
                    </div>

                    <!-- Card -->
                    <div
                        class="group flex min-w-[280px] flex-1 items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#9B2064]/20 hover:shadow-lg sm:min-w-[300px]">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#9B2064]/10">
                            <svg class="h-6 w-6 text-[#9B2064]" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                            </svg>
                        </div>

                        <p class="text-sm font-semibold leading-6 text-slate-800">
                            Compare top universities worldwide
                        </p>
                    </div>

                    <!-- Card -->
                    <div
                        class="group flex min-w-[280px] flex-1 items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#9B2064]/20 hover:shadow-lg sm:min-w-[300px]">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#9B2064]/10">
                            <svg class="h-6 w-6 text-[#9B2064]" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                            </svg>
                        </div>

                        <p class="text-sm font-semibold leading-6 text-slate-800">
                            Get expert counselling for every decision
                        </p>
                    </div>

                    <!-- Card -->
                    <div
                        class="group flex min-w-[280px] flex-1 items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#9B2064]/20 hover:shadow-lg sm:min-w-[300px]">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#9B2064]/10">
                            <svg class="h-6 w-6 text-[#9B2064]" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                            </svg>
                        </div>

                        <p class="text-sm font-semibold leading-6 text-slate-800">
                            Stay on track with deadlines & applications
                        </p>
                    </div>
                </div>
            </div>


            <!-- Video Section -->
            <div class="mt-10 sm:mt-12 lg:mt-14">
                <div class="group relative overflow-hidden rounded-3xl bg-slate-900 shadow-2xl ring-1 ring-black/5">

                    <!-- Video -->
                    <video class="aspect-video w-full object-cover" controls playsinline preload="metadata"
                        poster="/images/focus-img/focus-img-7.png">
                        <source src="/assets/videos/home-video.mp4" type="video/mp4">
                    </video>

                </div>
            </div>

        </div>
    </section> --}}

    <section class="bg-brand-100 text-white  py-16 px-4 sm:px-6 lg:px-8">
        {{-- bg-brand-100 text-white py-6 px-8 md:px-12 lg:py-10 lg:px-16 rounded-4xl --}}
        <div class="max-w-7xl mx-auto ">
            <!-- Header -->
            <header
                class="mx-auto max-w-2xl px-4 py-12 text-center font-sans reveal-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#1068b2]/10 rounded-full mb-6 transition-all duration-700 delay-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-zap w-4 h-4 text-[#1068b2] transition-transform duration-500 group-hover:scale-110">
                        <path
                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                        </path>
                    </svg>
                    <span class="text-sm font-semibold text-[#1068b2] uppercase">Your journey, simplified</span>
                </div>

                <!-- Main Heading -->
                <h1
                    class="text-2xl sm:text-3xl font-extrabold tracking-tight text-brand-600 md:text-4xl lg:text-5xl uppercase transition-all duration-700 delay-200">
                    How We Make Your Journey Easier
                </h1>

                <!-- Subheading Description -->
                <p class="mx-auto mt-4 max-w-2xl text-base text-brand-600 sm:text-lg transition-all duration-700 delay-300">
                    Everything you need to discover the right course, university and
                    career path — all in one place.
                </p>
            </header>

            <!-- Connected Timeline Line (Desktop) -->
            <div class="relative mb-10 hidden md:block">
                <!-- Horizontal Connecting Line -->
                <div class="absolute top-1/2 left-12 right-12 h-px -translate-y-1/2 bg-brand-500"></div>

                <!-- Nodes Container -->
                <div class="grid grid-cols-4 relative z-10">

                    <!-- Node 1 -->
                    <div class="flex justify-center">
                        <div
                            class="w-10 h-10 rounded-lg bg-brand-700 border border-brand-700 flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Node 2 -->
                    <div class="flex justify-center">
                        <div
                            class="w-10 h-10 rounded-lg bg-brand-700 border border-brand-700 flex items-center justify-center text-white">
                            <svg class="h-5 w-5 transition-transform duration-500 group-hover:scale-110" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Node 3 -->
                    <div class="flex justify-center">
                        <div
                            class="w-10 h-10 rounded-lg bg-brand-700 border border-brand-700 flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Node 4 -->
                    <div class="flex justify-center">
                        <div
                            class="w-10 h-10 rounded-lg bg-brand-700 border border-brand-700 flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Step Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div class="bg-brand-700 border border-[#114b82] p-6 rounded-xl hover:border-brand-700 transition-colors">
                    <span class="text-xs font-semibold text-[#8cb7e3] uppercase tracking-wider block mb-2">Step 1</span>
                    <h3 class="text-base font-bold text-white mb-2">
                        Find Matching Courses
                    </h3>
                    <p class="text-xs text-[#b8d3ef] leading-relaxed">
                        Discover programs tailored specifically to your academic preferences and goals.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-brand-700 border border-[#114b82] p-6 rounded-xl hover:border-brand-700 transition-colors">
                    <span class="text-xs font-semibold text-[#8cb7e3] uppercase tracking-wider block mb-2">Step 2</span>
                    <h3 class="text-base font-bold text-white mb-2">
                        Compare Universities
                    </h3>
                    <p class="text-xs text-[#b8d3ef] leading-relaxed">
                        Evaluate top global institutions side-by-side on rankings, tuition, and requirements.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-brand-700 border border-[#114b82] p-6 rounded-xl hover:border-brand-700 transition-colors">
                    <span class="text-xs font-semibold text-[#8cb7e3] uppercase tracking-wider block mb-2">Step 3</span>
                    <h3 class="text-base font-bold text-white mb-2">
                        Get Expert Counselling
                    </h3>
                    <p class="text-xs text-[#b8d3ef] leading-relaxed">
                        Receive direct guidance from certified advisors to help make every decision.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-brand-700 border border-[#114b82] p-6 rounded-xl hover:border-brand-700 transition-colors">
                    <span class="text-xs font-semibold text-[#8cb7e3] uppercase tracking-wider block mb-2">Step 4</span>
                    <h3 class="text-base font-bold text-white mb-2">
                        Track Deadlines
                    </h3>
                    <p class="text-xs text-[#b8d3ef] leading-relaxed">
                        Stay organized with updates and clear timelines for all your applications.
                    </p>
                </div>

            </div>

              <!-- Video Section -->
            <div class="mt-10 sm:mt-12 lg:mt-14">
                <div class="group relative overflow-hidden rounded-3xl bg-slate-900 shadow-2xl ring-1 ring-black/5">

                    <!-- Video -->
                    <video class="aspect-video w-full object-cover" controls playsinline preload="metadata"
                        poster="/images/focus-img/focus-img-7.png">
                        <source src="/assets/videos/home-video.mp4" type="video/mp4">
                    </video>

                </div>
            </div>

        </div>
    </section>

    <script>
        (function() {
            const html = document.documentElement;
            html.classList.add('scroll-smooth');

            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (prefersReducedMotion) return;

            document.addEventListener('DOMContentLoaded', function() {
                const revealEls = document.querySelectorAll('.reveal-on-scroll');
                if (!revealEls.length) return;

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0', 'translate-y-10',
                                'translate-x-10', '-translate-x-10', 'scale-95');
                            entry.target.classList.add('opacity-100', 'translate-y-0',
                                'translate-x-0', 'scale-100');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.12,
                    rootMargin: '0px 0px -60px 0px'
                });

                revealEls.forEach((el) => observer.observe(el));
            });

            window.addEventListener('pageshow', function(event) {
                if (event.persisted) {
                    document.querySelectorAll('.reveal-on-scroll').forEach((el) => {
                        const rect = el.getBoundingClientRect();
                        if (rect.top < window.innerHeight * 0.9) {
                            el.classList.remove('opacity-0', 'translate-y-10', 'translate-x-10',
                                '-translate-x-10', 'scale-95');
                            el.classList.add('opacity-100', 'translate-y-0', 'translate-x-0',
                                'scale-100');
                        }
                    });
                }
            });
        })();
    </script>
@endsection

<style>
    .surface-hero {
        background: linear-gradient(120deg, oklch(24% .045 248 / .94) 0%, oklch(30% .07 225 / .82) 55%, oklch(40% .1 60 / .55) 100%);
    }

    .surface-stats {
        background: linear-gradient(120deg, oklch(24% .045 248 / .94) 0%, oklch(30% .07 225 / .82) 55%, oklch(40% .1 60 / .55) 100%);
    }

    .shadow-lift {
        box-shadow: 0 2px 6px oklch(24% .045 248 / .08), 0 24px 48px -20px oklch(24% .045 248 / .28);
    }

    @keyframes university-left-to-right {
        from {
            transform: translateX(-50%);
        }

        to {
            transform: translateX(0);
        }
    }

    @keyframes university-right-to-left {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    @keyframes marquee {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Enable custom animation class */
    @keyframes marquee {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Base Marquee Animation Class */
    .animate-marquee {
        animation: marquee 50s linear infinite !important;
    }

    /* Pause when hovering the container OR any child element inside it */
    .animate-marquee:hover,
    .animate-marquee *:hover {
        animation-play-state: paused !important;
    }

    @media (min-width: 640px) {
        .animate-marquee {
            animation: marquee 50s linear infinite !important;
        }
    }




    @keyframes hero-zoom {
        from {
            transform: scale(1.05);
        }

        to {
            transform: scale(1);
        }
    }

    @keyframes fade-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-down {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes hero-glow {

        0%,
        100% {
            opacity: .35;
            transform: scale(1);
        }

        50% {
            opacity: .8;
            transform: scale(1.25);
        }
    }

    .hero-bg-animate {
        animation: hero-zoom 2s ease-out forwards;
    }

    .fade-up {
        opacity: 0;
        animation: fade-up .8s ease-out forwards;
    }

    .fade-down {
        opacity: 0;
        animation: fade-down .7s ease-out forwards;
    }

    .hero-glow {
        animation: hero-glow 2.5s ease-in-out infinite;
    }

    .delay-100 {
        animation-delay: 100ms;
    }

    .delay-200 {
        animation-delay: 200ms;
    }

    .delay-300 {
        animation-delay: 300ms;
    }

    .delay-400 {
        animation-delay: 400ms;
    }

    .delay-500 {
        animation-delay: 500ms;
    }

    @media (prefers-reduced-motion: reduce) {

        .hero-bg-animate,
        .fade-up,
        .fade-down,
        .hero-glow {
            animation: none !important;
            opacity: 1;
            transform: none;
        }
    }
</style>
