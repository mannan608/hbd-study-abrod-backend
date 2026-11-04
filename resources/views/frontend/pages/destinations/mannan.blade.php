@extends('frontend.layouts.app')

@section('title', $destination['name'])

@section('content')
    <!-- ================= HERO SECTION ================= -->
    <header
        class="relative overflow-hidden bg-gradient-to-br from-brand-900 via-brand-900 to-slate-900 text-white pt-12 pb-24 lg:pt-20 lg:pb-32">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(124,58,237,0.15),transparent_50%)]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">

                <!-- Content Left -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">

                    <span
                        class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-brand-500/10 text-brand-300 border border-brand-500/20 backdrop-blur-md
                       opacity-0 translate-x-[-40px] transition-all duration-700 ease-[cubic-bezier(0.22,1,0.36,1)]
                       data-[animate=true]:opacity-100 data-[animate=true]:translate-x-0"
                        data-animate>
                        <svg class="w-4 h-4 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                        Premier {{ $destination['code'] }} Education Consultancy
                    </span>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight
                     opacity-0 translate-x-[-50px] transition-all duration-800 delay-100 ease-[cubic-bezier(0.22,1,0.36,1)]
                     data-[animate=true]:opacity-100 data-[animate=true]:translate-x-0"
                        data-animate>
                        Study at <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-brand-300">World-Class</span>
                        {{ $destination['name'] }} Universities
                    </h1>

                    <p class="text-slate-300 text-lg sm:text-xl leading-relaxed max-w-2xl mx-auto lg:mx-0
                    opacity-0 translate-x-[-40px] transition-all duration-800 delay-200 ease-[cubic-bezier(0.22,1,0.36,1)]
                    data-[animate=true]:opacity-100 data-[animate=true]:translate-x-0"
                        data-animate>
                        {{ $destination['hero']['description'] }}
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start pt-2
                      opacity-0 translate-y-8 transition-all duration-700 delay-300 ease-[cubic-bezier(0.22,1,0.36,1)]
                      data-[animate=true]:opacity-100 data-[animate=true]:translate-y-0"
                        data-animate>
                        <a href="#consultation"
                            class="px-8 py-4 bg-gradient-to-r from-brand-600 to-brand-600 hover:from-brand-500 hover:to-brand-500 text-white font-semibold rounded-xl shadow-lg shadow-brand-600/30 transition-all hover:-translate-y-0.5">
                            Book Free Consultation
                        </a>
                        <a href="#universities"
                            class="px-8 py-4 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl backdrop-blur-md border border-white/10 transition-all">
                            Explore Universities
                        </a>
                    </div>

                    <!-- Features Badges -->
                    <div class="pt-6 border-t border-slate-800 grid grid-cols-2 sm:grid-cols-3 gap-4 text-sm text-slate-300
                      opacity-0 translate-y-6 transition-all duration-700 delay-400 ease-[cubic-bezier(0.22,1,0.36,1)]
                      data-[animate=true]:opacity-100 data-[animate=true]:translate-y-0"
                        data-animate>
                        <div class="flex items-center gap-2 justify-center lg:justify-start">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>130+ Partner Universities</span>
                        </div>
                        <div class="flex items-center gap-2 justify-center lg:justify-start">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Up to £5,000 Scholarships</span>
                        </div>
                        <div class="flex items-center gap-2 justify-center lg:justify-start">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Fast Track Admission</span>
                        </div>
                    </div>
                </div>

                <!-- Lead Form Floating Right -->
                <div id="consultation"
                    class="lg:col-span-5
                    opacity-0 translate-x-[60px] scale-95 transition-all duration-900 delay-200 ease-[cubic-bezier(0.22,1,0.36,1)]
                    data-[animate=true]:opacity-100 data-[animate=true]:translate-x-0 data-[animate=true]:scale-100"
                    data-animate>
                    <div
                        class="bg-white/95 backdrop-blur-xl p-8 rounded-2xl shadow-2xl border border-slate-100 text-slate-900">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Refine Your Future</h3>
                        <p class="text-sm text-slate-600 mb-6">Fill in details for immediate application assistance.</p>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Full Name</label>
                                <input type="text" placeholder="John Doe"
                                    class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand-600 focus:border-transparent transition-all outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Email
                                    Address</label>
                                <input type="email" placeholder="john@example.com"
                                    class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand-600 focus:border-transparent transition-all outline-none text-sm">
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Phone
                                        Number</label>
                                    <input type="tel" placeholder="+44..."
                                        class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand-600 focus:border-transparent transition-all outline-none text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Target
                                        Intake</label>
                                    <select
                                        class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand-600 focus:border-transparent transition-all outline-none text-sm text-slate-600">
                                        <option>Sept 2026</option>
                                        <option>Jan 2027</option>
                                    </select>
                                </div>
                            </div>
                            <button
                                class="w-full py-4 bg-gradient-to-r from-brand-600 to-brand-600 hover:from-brand-700 hover:to-brand-700 text-white font-bold rounded-lg shadow-lg shadow-brand-500/20 transition-all text-sm uppercase tracking-wide">
                                Get Free Assessment
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ================= WHY STUDY IN THE UK ================= -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16
                  opacity-0 translate-y-10 transition-all duration-700 ease-[cubic-bezier(0.22,1,0.36,1)]
                  data-[animate=true]:opacity-100 data-[animate=true]:translate-y-0"
                data-animate>
                <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 mb-2">Key Advantages</h2>
                <p class="text-3xl font-bold text-slate-900 sm:text-4xl">Why Choose the {{ $destination['code'] }} for
                    Higher Education?</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-200 hover:shadow-xl hover:-translate-y-1 transition-all group
                    opacity-0 translate-x-[-40px] scale-95 transition-all duration-700 ease-[cubic-bezier(0.22,1,0.36,1)]
                    data-[animate=true]:opacity-100 data-[animate=true]:translate-x-0 data-[animate=true]:scale-100"
                    data-animate data-delay="0">
                    <div
                        class="w-14 h-14 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $destination['advantages']['academic']['title'] }}
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm">
                        {{ $destination['advantages']['academic']['description'] }}</p>
                </div>

                <!-- Card 2 -->
                <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-200 hover:shadow-xl hover:-translate-y-1 transition-all group
                    opacity-0 translate-y-10 scale-95 transition-all duration-700 delay-100 ease-[cubic-bezier(0.22,1,0.36,1)]
                    data-[animate=true]:opacity-100 data-[animate=true]:translate-y-0 data-[animate=true]:scale-100"
                    data-animate>
                    <div
                        class="w-14 h-14 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $destination['advantages']['career']['title'] }}
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm">
                        {{ $destination['advantages']['career']['description'] }}</p>
                </div>

                <!-- Card 3 -->
                <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-200 hover:shadow-xl hover:-translate-y-1 transition-all group
                    opacity-0 translate-x-[40px] scale-95 transition-all duration-700 delay-200 ease-[cubic-bezier(0.22,1,0.36,1)]
                    data-[animate=true]:opacity-100 data-[animate=true]:translate-x-0 data-[animate=true]:scale-100"
                    data-animate>
                    <div
                        class="w-14 h-14 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">
                        {{ $destination['advantages']['environment']['title'] }}</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">
                        {{ $destination['advantages']['environment']['description'] }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= POPULAR UNIVERSITIES ================= -->
    <section id="universities" class="py-20 bg-slate-50 border-t border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-8
                  opacity-0 translate-y-10 transition-all duration-700 ease-[cubic-bezier(0.22,1,0.36,1)]
                  data-[animate=true]:opacity-100 data-[animate=true]:translate-y-0"
                data-animate>
                <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 mb-2">Partner Institutions</h2>
                <p class="text-3xl font-bold text-slate-900 sm:text-4xl">Popular Universities in the
                    {{ $destination['code'] }}</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Uni Item -->
                @foreach ($destination['universities'] as $university)
                    <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all flex flex-col justify-between
                    opacity-0 translate-y-12 scale-95 transition-all duration-600 ease-[cubic-bezier(0.22,1,0.36,1)]
                    data-[animate=true]:opacity-100 data-[animate=true]:translate-y-0 data-[animate=true]:scale-100"
                        data-animate>
                        <div>
                            <div
                                class="h-10 w-10 bg-brand-50 text-brand-600 rounded-lg flex items-center justify-center font-bold text-lg mb-4">
                                {{ $university['logo'] }}
                            </div>
                            <h4 class="font-bold text-slate-900 text-lg">{{ $university['name'] }}</h4>
                            <p class="text-xs text-slate-500 mt-1">{{ $university['location'] }} • Ranking {{ $university['ranking'] }}</p>
                        </div>
                        <a href="{{ $university['url'] }}"
                            class="mt-4 inline-flex items-center text-xs font-semibold text-brand-600 hover:text-brand-800">Learn
                            More &rarr;</a>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!-- ================= REQUIREMENTS & COSTS ================= -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">

                <!-- Entry Requirements -->
                <div class="opacity-0 translate-x-[-50px] transition-all duration-800 ease-[cubic-bezier(0.22,1,0.36,1)]
                    data-[animate=true]:opacity-100 data-[animate=true]:translate-x-0"
                    data-animate>
                    <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Entry Requirements
                    </h2>
                    <div class="space-y-4">

                        <!-- Undergraduate -->
                        <div class="rounded-xl border border-slate-200/80 bg-slate-50 p-6">

                            <h3 class="mb-2 text-base font-bold text-slate-900">
                                Undergraduate Programs
                            </h3>

                            <ul class="space-y-2 text-sm text-slate-600">

                                @foreach ($destination['requirements']['undergraduate'] as $requirement)
                                    <li class="flex items-start gap-2">

                                        <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-brand-600">
                                        </span>

                                        <span>
                                            {{ $requirement }}
                                        </span>

                                    </li>
                                @endforeach

                            </ul>

                        </div>


                        <!-- Postgraduate -->
                        <div class="rounded-xl border border-slate-200/80 bg-slate-50 p-6">

                            <h3 class="mb-2 text-base font-bold text-slate-900">
                                Postgraduate Programs
                            </h3>

                            <ul class="space-y-2 text-sm text-slate-600">

                                @foreach ($destination['requirements']['postgraduate'] as $requirement)
                                    <li class="flex items-start gap-2">

                                        <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-brand-600">
                                        </span>

                                        <span>
                                            {{ $requirement }}
                                        </span>

                                    </li>
                                @endforeach

                            </ul>

                        </div>

                    </div>
                </div>

                <!-- Cost of Studying -->
                <div class="opacity-0 translate-x-[50px] transition-all duration-800 delay-100 ease-[cubic-bezier(0.22,1,0.36,1)]
                    data-[animate=true]:opacity-100 data-[animate=true]:translate-x-0"
                    data-animate>
                    <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Estimated Cost of Studying
                    </h2>
                    <div class="overflow-hidden rounded-xl border border-slate-200 shadow-sm mb-6">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-slate-900 text-white font-semibold">
                                <tr>
                                    <th class="p-4">Expense Type</th>
                                    <th class="p-4">Average Cost (GBP / Year)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 bg-white">
                                @foreach ($destination['costs']['items'] as $item)
                                    <tr>
                                        <td class="p-4 font-medium text-slate-900">{{ $item['type'] }}</td>
                                        <td class="p-4 text-slate-600">{{ $item['cost'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="p-4 bg-amber-50 border border-amber-200 text-amber-900 rounded-xl text-xs flex items-start gap-3">
                        <svg class="w-5 h-5 text-amber-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span><strong>Note:</strong> {{ $destination['costs']['note'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PROCESS STEPS ================= -->
    <section class="py-20 text-neutral-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16
                  opacity-0 translate-y-10 transition-all duration-700 ease-[cubic-bezier(0.22,1,0.36,1)]
                  data-[animate=true]:opacity-100 data-[animate=true]:translate-y-0"
                data-animate>
                <h2 class="text-xs font-bold uppercase tracking-widest text-brand-400 mb-2">Simple Process</h2>
                <p class="text-3xl font-bold sm:text-4xl">6 Steps to Study in the {{ $destination['code'] }}</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-6 gap-6 relative">
                <!-- Step 1 -->
                @foreach ($destination['process'] as $item)
                    <div class="bg-white p-6 rounded-xl border border-neutral-300 relative text-center
                    opacity-0 translate-y-10 scale-90 transition-all duration-600 ease-[cubic-bezier(0.22,1,0.36,1)]
                    data-[animate=true]:opacity-100 data-[animate=true]:translate-y-0 data-[animate=true]:scale-100"
                        data-animate>
                        <span
                            class="w-10 h-10 rounded-full bg-brand-600 text-white font-bold flex items-center justify-center mx-auto mb-4 text-sm">{{ $item['step'] }}</span>
                        <h4 class="font-bold text-sm mb-2">{{ $item['title'] }}</h4>
                        <p class="text-xs text-neutral-400 line-clamp-3">{{ $item['description'] }}</p>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    {{-- ================= SCROLL ANIMATION SCRIPT ================= --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Respect reduced motion preference
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                document.querySelectorAll('[data-animate]').forEach(el => {
                    el.setAttribute('data-animate', 'true');
                });
                return;
            }

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.setAttribute('data-animate', 'true');
                        // Optional: unobserve after animation (for performance)
                        // observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -40px 0px'
            });

            document.querySelectorAll('[data-animate]').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
@endsection
