@extends('frontend.layouts.app')

@section('content')
    <section class="py-6 md:py-10 bg-neutral-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                {{-- Main Event Content --}}
                <div class="lg:col-span-8">

                    <article class="bg-white rounded-2xl shadow-sm border overflow-hidden">

                        {{-- Featured Image --}}
                        <img
                            src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1400&q=80"
                            alt="Study Abroad Expo 2026"
                            class="w-full h-62.5 md:h-105 object-cover"
                        >

                        <div class="p-4 md:p-6 lg:p-8">

                            {{-- Meta Info --}}
                            <div class="flex flex-wrap items-center gap-2 md:gap-4 text-xs sm:text-sm text-neutral-500 mb-5">
                                <span>
                                    By HBD Services
                                </span>

                                <span>
                                    24 Aug, 2026
                                </span>

                                <span>
                                    1,248 Views
                                </span>
                            </div>

                            {{-- Title --}}
                            <h1 class="text-2xl md:text-4xl font-bold text-neutral-900 leading-tight mb-4">
                                Study Abroad Expo 2026
                            </h1>

                            {{-- Short Description --}}
                            <p class="text-lg text-neutral-600 mb-8 leading-relaxed">
                                Explore global study opportunities, meet university representatives,
                                and get expert guidance on admissions, scholarships, and student visas.
                            </p>

                            {{-- Content --}}
                            <div class="prose prose-lg max-w-none text-neutral-700">

                                <p>
                                    Planning to study abroad? Join us at the
                                    <strong>Study Abroad Expo 2026</strong> and take the next step
                                    toward your international education journey.
                                </p>

                                <h2>
                                    Discover Your Study Opportunities
                                </h2>

                                <p>
                                    Our education expo brings together students, parents, education
                                    counselors, and representatives from leading universities around
                                    the world. You will have the opportunity to explore different
                                    destinations, courses, universities, and scholarship opportunities.
                                </p>

                                <h3>
                                    What You Can Expect
                                </h3>

                                <ul>
                                    <li>One-to-one counseling with experienced education consultants</li>
                                    <li>University and course selection guidance</li>
                                    <li>Information about scholarships and tuition fees</li>
                                    <li>Application and admission guidance</li>
                                    <li>Student visa consultation</li>
                                    <li>IELTS and English language requirement guidance</li>
                                </ul>

                                <h2>
                                    Meet University Representatives
                                </h2>

                                <p>
                                    Meet representatives from international universities and get
                                    answers to your questions directly. Learn about admission
                                    requirements, available programs, application deadlines,
                                    scholarships, and career opportunities.
                                </p>

                                <blockquote>
                                    Start your international education journey with the right
                                    guidance and make your dream of studying abroad a reality.
                                </blockquote>

                                <h3>
                                    Event Details
                                </h3>

                                <ul>
                                    <li><strong>Date:</strong> 30 August 2026</li>
                                    <li><strong>Time:</strong> 10:00 AM – 6:00 PM</li>
                                    <li><strong>Location:</strong> Dhaka, Bangladesh</li>
                                    <li><strong>Entry:</strong> Free Registration</li>
                                </ul>

                                <p>
                                    Seats are limited, so register early to secure your place at
                                    this exciting study abroad event.
                                </p>

                            </div>

                        </div>

                    </article>

                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-4">

                    <div class="sticky top-24">

                        {{-- Latest Events --}}
                        <div class="bg-white border rounded-2xl shadow-sm p-5">

                            <h3 class="text-xl font-bold text-neutral-900 mb-5 border-b pb-3">
                                Latest Events
                            </h3>

                            <div class="space-y-5">

                                {{-- Event 1 --}}
                                <a href="#" class="flex gap-4 group">

                                    <img
                                        src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=300&q=80"
                                        alt="UK Study Opportunities"
                                        class="w-24 h-20 object-cover rounded-lg shrink-0"
                                    >

                                    <div>
                                        <h4 class="font-semibold text-neutral-800 group-hover:text-blue-600 transition line-clamp-2">
                                            UK Study Opportunities Seminar
                                        </h4>

                                        <p class="text-sm text-neutral-500 mt-2">
                                            22 Aug, 2026
                                        </p>
                                    </div>

                                </a>

                                {{-- Event 2 --}}
                                <a href="#" class="flex gap-4 group">

                                    <img
                                        src="https://images.unsplash.com/photo-1517935706615-2717063c2225?auto=format&fit=crop&w=300&q=80"
                                        alt="Canada Education Fair"
                                        class="w-24 h-20 object-cover rounded-lg shrink-0"
                                    >

                                    <div>
                                        <h4 class="font-semibold text-neutral-800 group-hover:text-blue-600 transition line-clamp-2">
                                            Canada Education Fair 2026
                                        </h4>

                                        <p class="text-sm text-neutral-500 mt-2">
                                            18 Aug, 2026
                                        </p>
                                    </div>

                                </a>

                                {{-- Event 3 --}}
                                <a href="#" class="flex gap-4 group">

                                    <img
                                        src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?auto=format&fit=crop&w=300&q=80"
                                        alt="Australia Study Seminar"
                                        class="w-24 h-20 object-cover rounded-lg shrink-0"
                                    >

                                    <div>
                                        <h4 class="font-semibold text-neutral-800 group-hover:text-blue-600 transition line-clamp-2">
                                            Australia Study Seminar
                                        </h4>

                                        <p class="text-sm text-neutral-500 mt-2">
                                            15 Aug, 2026
                                        </p>
                                    </div>

                                </a>

                                {{-- Event 4 --}}
                                <a href="#" class="flex gap-4 group">

                                    <img
                                        src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=300&q=80"
                                        alt="Student Visa Workshop"
                                        class="w-24 h-20 object-cover rounded-lg shrink-0"
                                    >

                                    <div>
                                        <h4 class="font-semibold text-neutral-800 group-hover:text-blue-600 transition line-clamp-2">
                                            Student Visa Application Workshop
                                        </h4>

                                        <p class="text-sm text-neutral-500 mt-2">
                                            10 Aug, 2026
                                        </p>
                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
 
@endsection
