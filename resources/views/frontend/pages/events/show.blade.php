@extends('frontend.layouts.app')

@section('content')
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">
        <!-- Main Grid Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Side: Overview & Features -->
            <div class="lg:col-span-2 space-y-8">
                <div class="">
                    <div class="w-full aspect-video overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1400&q=80"
                            alt="Study Abroad Expo 2026" class="w-full h-full object-cover rounded-2xl">
                    </div>
                    <div class="relative overflow-hidden mb-8 mt-4">
                        <h1
                            class="text-base sm:text-lg md:text-xl lg:text-2xl font-extrabold tracking-tight mb-3 leading-tight line-clamp-1">
                            The University of Notre Dame Australia — Application Day
                        </h1>

                        <div class="flex flex-wrap items-center gap-3 text-xs text-neutral-700">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>Organized by <strong class="text-brand-500 font-medium">HBD Services</strong></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="truncate max-w-md">Waterplace, Unit B02, West Surabaya, Surabaya, Jawa Timur
                                    60216,
                                    Indonesia</span>
                                <a href="#"
                                    class="text-brand-500 hover:text-brand-900 font-semibold underline text-xs">View on
                                    map</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- About Event Section -->
                <div class="bg-white p-6 sm:p-8 rounded-2xl border border-neutral-200/80 ">
                    <h2 class="text-xs font-bold uppercase tracking-wider text-brand-500 mb-2">Event Details</h2>
                    <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-bold text-neutral-900 mb-4">Application Day –
                        Surabaya: Study in Australia</h3>
                    <p class="text-neutral-600 leading-relaxed text-sm">
                        Take the first step toward your global education! Join HBD Services to meet official representatives
                        from
                        <strong class="text-neutral-800">The University of Notre Dame Australia</strong> and
                        <strong class="text-neutral-800">Oxford International Education Group</strong>. Whether you are just
                        exploring your options or are ready to apply, our experts will guide you through securing your
                        university spot, finding scholarships, and navigating the Australian student visa process.
                    </p>
                </div>

                <!-- Dynamic Value Highlights Section -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

                    <div
                        class="bg-white p-6 rounded-2xl border border-neutral-200/80  flex flex-col justify-between hover:border-brand-500/50 transition">
                        <div>
                            <div
                                class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V9a2 2 0 012-2h2a2 2 0 012 2v12">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-neutral-900 text-base mb-1">Meet Institutions</h4>
                            <p class="text-neutral-500 text-sm leading-relaxed line-clamp-2">Interact directly with
                                Australia’s top
                                universities and colleges.</p>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl border border-neutral-200/80  flex flex-col justify-between hover:border-brand-500/50 transition">
                        <div>
                            <div
                                class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-neutral-900 text-base mb-1">Study Pathways</h4>
                            <p class="text-neutral-500 text-sm leading-relaxed line-clamp-2">Discover undergraduate,
                                postgraduate, &
                                vocational programs tailored to you.</p>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl border border-neutral-200/80  flex flex-col justify-between hover:border-brand-500/50 transition">
                        <div>
                            <div
                                class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-neutral-900 text-base mb-1">1-on-1 Guidance</h4>
                            <p class="text-neutral-500 text-sm leading-relaxed line-clamp-2">Speak with admission experts
                                and receive
                                personalized counselling.</p>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Right Side: Logistics Sidebar -->
            <div class="space-y-6">

                <!-- Physical & Virtual Session Info Card -->
                <div class="bg-white p-6 rounded-2xl border border-neutral-200/80  space-y-6">
                    <div>
                        <div class="flex items-center justify-between border-b border-neutral-100 pb-3 mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-neutral-400">Physical
                                Session</span>
                            <span
                                class="bg-neutral-100 text-neutral-600 text-xs px-2.5 py-1 rounded-md font-medium">Surabaya</span>
                        </div>

                        <div class="space-y-3 text-sm">
                            <div class="flex items-center justify-between text-neutral-600">
                                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-neutral-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg> Date</span>
                                <span class="font-semibold text-neutral-800">20 Aug 2026</span>
                            </div>
                            <div class="flex items-center justify-between text-neutral-600">
                                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-neutral-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg> Time</span>
                                <span class="font-semibold text-neutral-800">03:00 PM – 06:00 PM</span>
                            </div>
                        </div>

                        <button
                            class="mt-4 w-full text-center text-xs font-bold text-brand-600 hover:text-brand-700 bg-brand-50 hover:bg-brand-100/60 py-2 rounded-lg transition">
                            View All Locations
                        </button>
                    </div>

                    <hr class="border-neutral-100">

                    <!-- Virtual Room Section -->
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-neutral-400 block mb-3">Registration
                            Link</span>
                        <div class="bg-neutral-50 border border-neutral-200 rounded-lg p-3 mb-3">
                            <p class="text-xs text-neutral-500 truncate">https://events/{name}/register</p>
                        </div>

                        <div class="grid grid-cols-2 gap-2">
                            <button
                                class="flex items-center justify-center gap-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold py-2.5 rounded-lg transition">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Copy Link
                            </button>
                            <button
                                class="flex items-center justify-center gap-2 bg-brand-500 hover:bg-brand-600 text-white text-xs font-semibold py-2.5 rounded-lg  shadow-brand-500/20 transition">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                    </path>
                                </svg>
                                Share
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Contact Support Card -->
                <div class="bg-white p-6 rounded-2xl border border-neutral-200/80 ">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-neutral-400 mb-4">Contact Person Details
                    </h3>

                    <div class="space-y-4 text-sm">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center text-neutral-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-neutral-400">Name</p>
                                <p class="font-semibold text-neutral-800">HBD Services</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center text-neutral-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-neutral-400">Email</p>
                                <a href="mailto:enquiry@hbdervices.com.au"
                                    class="font-medium text-brand-600 hover:underline">enquiry@hbdervices.com.au</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center text-neutral-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-neutral-400">Phone</p>
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="inline-block w-4 h-3 rounded-sm bg-red-600 relative overflow-hidden border border-neutral-200">
                                        <span class="absolute bottom-0 w-full h-1/2 bg-white"></span>
                                    </span>
                                    <a href="tel:+623160007888"
                                        class="font-semibold text-neutral-800 hover:text-brand-600">+62 31 22222222</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-neutral-200/80">

                    <h3 class="text-xs font-bold uppercase tracking-wider text-neutral-400 mb-4">
                        Latest Events
                    </h3>

                    <div class="flex flex-col gap-3">

                        @for ($i = 0; $i < 3; $i++)
                            {{-- Event 1 --}}
                            <a href="#"
                                class="group flex w-full gap-3 rounded-xl p-2 -m-2 transition-all duration-200 hover:bg-neutral-50">
                                {{-- Image --}}
                                <div class="w-16 h-16 sm:w-24 sm:h-18 shrink-0 overflow-hidden rounded-lg bg-neutral-100">
                                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=300&q=80"
                                        alt="UK Study Opportunities Seminar"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                </div>

                                {{-- Content --}}
                                <div class="min-w-0 flex-1 flex flex-col justify-center">
                                    <h4
                                        class="text-sm font-semibold leading-5 text-neutral-800 line-clamp-2 transition-colors duration-200 group-hover:text-[#1068b2]">
                                        UK Study Opportunities Seminar
                                    </h4>

                                    <div class="flex items-center gap-1.5 mt-2 text-xs text-neutral-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.8" class="w-3.5 h-3.5 shrink-0">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3.75 9h16.5M5.25 5.25h13.5A1.5 1.5 0 0 1 20.25 6.75v12A1.5 1.5 0 0 1 18.75 20.25H5.25a1.5 1.5 0 0 1-1.5-1.5v-12a1.5 1.5 0 0 1 1.5-1.5Z" />
                                        </svg>

                                        <span>22 Aug, 2026</span>
                                    </div>
                                </div>

                                {{-- Arrow --}}
                                <div
                                    class="self-center shrink-0 text-neutral-300 transition-all duration-200 group-hover:translate-x-0.5 group-hover:text-[#1068b2]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </a>
                        @endfor
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">
        <!-- Tabs & Detailed Categories Content -->
        <div class="bg-white rounded-3xl p-8 border border-neutral-100  space-y-10 mt-12">
            <!-- Nav Tabs -->
            <div class="flex border-b border-neutral-100 space-x-8 text-base font-normal">
                <button class="pb-3 border-b-2 border-brand-600 text-brand-600">Facilities </button>
                <button class="pb-3 text-neutral-500 hover:text-neutral-600 transition">Providers</button>
                <button class="pb-3 text-neutral-500 hover:text-neutral-600 transition">Gallery</button>
                <button class="pb-3 text-neutral-500 hover:text-neutral-600 transition">Locations</button>
            </div>

            <!-- Facilities Item -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="bg-brand-900 text-white p-8 rounded-2xl space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-brand-300">
                        <i class="fa-solid fa-building-columns text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold">Facilities</h3>
                    <p class="text-brand-100 text-sm leading-relaxed">
                        Graduates of this program are prepared for a range of exciting career paths across local government
                        and private sectors. Key roles include creative directors, strategy managers, design & development
                        managers, advisors.
                    </p>
                </div>
                <div class="space-y-3">
                    <div
                        class="flex items-center justify-between p-4 rounded-xl bg-neutral-50 border border-neutral-100 text-sm font-medium hover:bg-brand-50/50 transition">
                        <span class="flex items-center text-neutral-700"><i
                                class="fa-solid fa-check text-brand-500 mr-3"></i>
                            Campus audio and visual requirements studio</span>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-xl bg-neutral-50 border border-neutral-100 text-sm font-medium hover:bg-brand-50/50 transition">
                        <span class="flex items-center text-neutral-700"><i
                                class="fa-solid fa-check text-brand-500 mr-3"></i>
                            Central cafeteria facilities</span>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-xl bg-neutral-50 border border-neutral-100 text-sm font-medium hover:bg-brand-50/50 transition">
                        <span class="flex items-center text-neutral-700"><i
                                class="fa-solid fa-check text-brand-500 mr-3"></i>
                            Advanced mechanics research laboratory units</span>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-xl bg-neutral-50 border border-neutral-100 text-sm font-medium hover:bg-brand-50/50 transition">
                        <span class="flex items-center text-neutral-700"><i
                                class="fa-solid fa-check text-brand-500 mr-3"></i>
                            International standard student study cubicles</span>
                    </div>
                </div>
            </div>

            <!-- Providers -->
            <div class="pt-6 border-t border-neutral-100">
                <h3 class="text-lg font-bold text-neutral-900 mb-2">Providers of Accommodation</h3>
                <p class="text-sm text-neutral-600 leading-relaxed">
                    Students can book airport pickup service from Australia borders or regional areas back to Adelaide's
                    buildings via booking made on the HBD Services account to join regular weekly arrival points at the
                    Accommodation Center.
                </p>
                <div class="flex flex-wrap items-center gap-4 mt-4">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="shrink-0 py-3 px-4 rounded-2xl border border-neutral-300">
                            <img src="{{ asset('frontend-img/patner/sponsor_5.png') }}" alt="Sponsor"
                                class="h-10 w-auto object-contain">
                        </div>
                    @endfor
                </div>

            </div>

            <!-- Gallery Item -->
            <div class="pt-6 border-t border-neutral-100 space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-neutral-900">Event Gallery Images</h3>
                        <p class="text-sm text-neutral-600 mt-1">Adelaide University provides scholarships for both
                            domestic
                            and international students via the Student Accommodation Center.</p>
                    </div>
                </div>


               @include('frontend.pages.components.masonary-grid')

            </div>

            <!-- Campus Locations Grid -->
            <div>
                <h2 class="text-xl font-bold mb-4">Event Locations</h2>
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

                                                <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">

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

                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5 12h14m-6-6 6 6-6 6" />
                                        </svg>

                                    </a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection
