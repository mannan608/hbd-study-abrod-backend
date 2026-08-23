@extends('frontend.layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative py-8 md:py-0 min-h-60 md:min-h-70 lg:min-h-80 flex items-center overflow-hidden -mt-4">

        <div class="absolute inset-0 z-0">
            <img src="{{ asset('frontend-img/course-page-header.jpg') }}" alt="Training" class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-linear-to-r  bg-black/70 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">

            <div class="max-w-2xl mx-auto">

                <h1 class="text-2xl font-bold tracking-tight text-white sm:text-3xl lg:text-4xl uppercase text-center">
                    Explore Thousands of Courses Across Australia
                </h1>

            </div>
            <div class="max-w-2xl mx-auto">
                <!-- Search Box -->
                <form action="" method="GET"
                    class="mt-5 flex flex-col gap-2 rounded-2xl border border-slate-200 bg-white p-2 shadow-lg sm:mt-6 sm:flex-row">

                    <!-- Input -->
                    <div class="relative min-w-0 flex-1">

                        <!-- Search Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400 sm:h-5 sm:w-5"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true">

                            <path d="m21 21-4.34-4.34"></path>
                            <circle cx="11" cy="11" r="8"></circle>
                        </svg>

                        <input type="search" name="search" value="{{ request('search') }}"
                            placeholder="Keyword: course, code, city or university"
                            class="h-11 w-full rounded-xl border-0 placeholder:text-[15px] bg-transparent px-3 pl-10 text-sm text-slate-900 outline-none placeholder:text-slate-400 focus:ring-0 sm:text-base">
                    </div>

                    <!-- Actions -->
                    <div class="flex gap-2">

                        <!-- AI Assist -->
                        <button type="button"
                            class="inline-flex h-11 flex-1 items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 text-sm font-medium text-slate-700 shadow-sm transition-all duration-200 hover:border-[#1068b2]/30 hover:bg-slate-50 hover:text-[#1068b2] active:scale-[0.98] sm:flex-none">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">

                                <path
                                    d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z" />

                                <path d="M20 2v4"></path>
                                <path d="M22 4h-4"></path>
                                <circle cx="4" cy="20" r="2"></circle>
                            </svg>

                            <span>AI assist</span>
                        </button>

                        <!-- Search -->
                        <button type="submit"
                            class="inline-flex h-11 flex-1 items-center justify-center gap-2 rounded-xl bg-[#1068b2] px-5 text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-[#0d5796] active:scale-[0.98] sm:flex-none">

                            Search
                        </button>

                    </div>
                </form>
            </div>
        </div>

    </section>

    <div class="min-h-screen bg-slate-50/50 py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

    <!-- Top Grid: Course Header + Sticky Sidebar Card -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
      
      <!-- Left Column: Course Header & Overview -->
      <div class="lg:col-span-8 space-y-8">
        <div>
          <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-[#005f6b]">
            <span>Charles Sturt University</span>
          </div>
          <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
            Doctor of Philosophy (Arts and Education)
          </h1>
          
          <!-- Meta Tags -->
          <div class="mt-4 flex flex-wrap items-center gap-3 text-xs font-medium text-slate-600">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-3 py-1 text-slate-700">
              <svg class="h-3.5 w-3.5 text-[#005f6b]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
              Doctorate
            </span>
            <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-slate-500 font-mono">
              CRICOS: 102019R
            </span>
            <span class="inline-flex items-center gap-1.5 text-slate-500">
              <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              Thurgoona, Australia
            </span>
          </div>
        </div>

        <!-- Course Description -->
        <div class="prose prose-slate max-w-none">
          <h3 class="text-lg font-bold text-slate-900">Course Overview</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            The Doctor of Philosophy (Arts and Education) at Charles Sturt University is the platform to do just that. You'll join a renowned academic community—with connections across the country and the globe—that will support and inspire you to push boundaries in your discipline area.
          </p>
          <div class="mt-4">
            <button class="inline-flex items-center gap-2 rounded-xl bg-[#005f6b] px-5 py-2.5 text-xs font-bold text-white shadow-sm transition hover:bg-[#004b54] active:scale-95">
              <span>Find a Counselor</span>
              <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>
          </div>
        </div>

        <!-- Value Highlights Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 rounded-2xl border border-slate-200/80 bg-white p-5 shadow-sm">
          <div class="flex items-start gap-3">
            <div class="rounded-lg bg-teal-50 p-2 text-[#005f6b] shrink-0">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div>
              <h4 class="text-xs font-bold text-slate-900">Real Career Pathways</h4>
              <p class="text-[11px] text-slate-500 mt-0.5">Urban Planner, Policy Officer, or Community Consultant.</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="rounded-lg bg-teal-50 p-2 text-[#005f6b] shrink-0">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
            </div>
            <div>
              <h4 class="text-xs font-bold text-slate-900">Hands-on Training</h4>
              <p class="text-[11px] text-slate-500 mt-0.5">Practical skills with real urban design scenarios.</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="rounded-lg bg-teal-50 p-2 text-[#005f6b] shrink-0">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
            </div>
            <div>
              <h4 class="text-xs font-bold text-slate-900">Industry Aligned</h4>
              <p class="text-[11px] text-slate-500 mt-0.5">Accredited & taught by experts in sustainable development.</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Right Column: Sticky Summary Sidebar Card -->
      <div class="lg:col-span-4 lg:sticky lg:top-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-lg space-y-5">
          <!-- Logo Header -->
          <div class="flex items-center justify-center p-4 bg-slate-50 rounded-xl border border-slate-100">
            <span class="font-extrabold text-slate-800 tracking-tight text-sm">Charles Sturt University</span>
          </div>

          <div class="space-y-3.5 text-xs">
            <div class="flex justify-between pb-2 border-b border-slate-100">
              <span class="text-slate-500">Annual Fee</span>
              <span class="font-bold text-slate-900">AUD $33,120.00 / year</span>
            </div>
            <div class="flex justify-between pb-2 border-b border-slate-100">
              <span class="text-slate-500">Estimated Total Fee</span>
              <span class="font-bold text-slate-900">AUD $132,480.00</span>
            </div>
            <div class="flex justify-between pb-2 border-b border-slate-100">
              <span class="text-slate-500">Duration</span>
              <span class="font-bold text-slate-900">4 Years Full-time</span>
            </div>
            <div class="flex justify-between pb-2 border-b border-slate-100">
              <span class="text-slate-500">Next Intake</span>
              <span class="font-bold text-[#005f6b]">01 Mar 2027</span>
            </div>
            <div class="flex justify-between">
              <span class="text-slate-500">Application Fee</span>
              <span class="font-bold text-emerald-600">Online: Free</span>
            </div>
          </div>

          <button class="w-full rounded-xl bg-[#005f6b] py-3 text-xs font-bold text-white shadow-md hover:bg-[#004b54] transition">
            Apply Now
          </button>
        </div>
      </div>

    </div>

    <!-- Section: Academic Requirements & Outcomes -->
    <div class="rounded-3xl bg-slate-900 p-6 sm:p-10 text-white space-y-10">
      
      <!-- Entry Requirements -->
      <div>
        <div class="flex items-center gap-2 mb-4">
          <span class="rounded-lg bg-[#005f6b] p-2 text-white">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </span>
          <h2 class="text-xl font-bold">Entry Requirements</h2>
        </div>
        <div class="rounded-2xl bg-slate-800/80 p-5 border border-slate-700/60 text-xs text-slate-300 leading-relaxed space-y-3">
          <p>
            Bachelor degree with Honours Class 1 or Class 2, Division 1, or a Master's degree with a significant research component, or equivalent.
          </p>
          <p class="text-slate-400">
            <strong>English Proficiency:</strong> IELTS 6.5 overall (no band below 6.0) or equivalent. Supervisor required prior to enrolment.
          </p>
        </div>
      </div>

      <!-- Career Outcomes -->
      <div>
        <div class="flex items-center gap-2 mb-4">
          <span class="rounded-lg bg-[#005f6b] p-2 text-white">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </span>
          <h2 class="text-xl font-bold">Career Outcomes</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div class="flex items-center gap-2 rounded-xl bg-slate-800/80 px-4 py-3 border border-slate-700/60 text-xs font-semibold text-slate-200">
            <span class="h-2 w-2 rounded-full bg-[#005f6b]"></span>
            Research Manager
          </div>
          <div class="flex items-center gap-2 rounded-xl bg-slate-800/80 px-4 py-3 border border-slate-700/60 text-xs font-semibold text-slate-200">
            <span class="h-2 w-2 rounded-full bg-[#005f6b]"></span>
            Research Scientist
          </div>
        </div>
      </div>

      <!-- Campus Locations Grid -->
      <div>
        <h2 class="text-xl font-bold mb-4">Available Campus Locations</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
          @foreach(['Albury-Wodonga', 'Bathurst', 'Canberra', 'Dubbo', 'Orange', 'Parramatta', 'Wagga Wagga', 'Sydney'] as $location)
            <div class="rounded-xl bg-slate-800/60 p-3.5 border border-slate-700/50">
              <p class="text-xs font-bold text-white">{{ $location }}</p>
              <p class="text-[11px] text-slate-400 mt-1">New South Wales, Australia</p>
              <a href="#" class="mt-2 inline-block text-[11px] font-medium text-[#00a8ff] hover:underline">View on map →</a>
            </div>
          @endforeach
        </div>
      </div>

    </div>

    <!-- Section: Similar Courses -->
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-slate-900">Similar Courses</h2>
        <button class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-xs font-semibold text-slate-700 hover:bg-slate-50 transition">
          View All Courses
        </button>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach([
          ['uni' => 'Curtin University', 'title' => 'Doctor of Philosophy - Humanities', 'location' => 'Bentley, Australia'],
          ['uni' => 'Curtin University', 'title' => 'Doctor of Philosophy - Social Sciences', 'location' => 'Bentley, Australia'],
          ['uni' => 'University of Newcastle', 'title' => 'Doctor of Philosophy (Aboriginal Studies)', 'location' => 'Callaghan, Australia']
        ] as $course)
          <div class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-xs hover:shadow-md transition flex flex-col justify-between">
            <div>
              <div class="h-12 w-full rounded-lg bg-slate-100 flex items-center justify-center font-bold text-slate-400 text-xs mb-4">
                {{ $course['uni'] }}
              </div>
              <span class="text-[10px] font-bold text-[#005f6b] uppercase">{{ $course['uni'] }}</span>
              <h3 class="text-sm font-bold text-slate-900 mt-1 group-hover:text-[#005f6b] transition-colors">
                {{ $course['title'] }}
              </h3>
              <p class="text-xs text-slate-500 mt-2">Doctorate • CRICOS 041959M</p>
            </div>
            
            <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
              <span class="text-[11px] text-slate-400">{{ $course['location'] }}</span>
              <button class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-700 group-hover:bg-[#005f6b] group-hover:text-white transition">
                View →
              </button>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </div>
</div>
@endsection
