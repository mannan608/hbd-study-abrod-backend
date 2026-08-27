@extends('frontend.layouts.app')

@section('content')
  <!-- ================= HERO SECTION ================= -->
  <header class="relative overflow-hidden bg-gradient-to-br from-brand-900 via-brand-900 to-slate-900 text-white pt-12 pb-24 lg:pt-20 lg:pb-32">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(124,58,237,0.15),transparent_50%)]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="grid lg:grid-cols-12 gap-12 items-center">
        <!-- Content Left -->
        <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
          <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-brand-500/10 text-brand-300 border border-brand-500/20 backdrop-blur-md">
            <svg class="w-4 h-4 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
            Premier UK Education Consultancy
          </span>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
            Study at <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-brand-300">World-Class</span> UK Universities
          </h1>
          <p class="text-slate-300 text-lg sm:text-xl leading-relaxed max-w-2xl mx-auto lg:mx-0">
            Build your global future with expert guidance, guaranteed scholarship application support, and 99.2% visa approval success rate.
          </p>
          <div class="flex flex-wrap gap-4 justify-center lg:justify-start pt-2">
            <a href="#consultation" class="px-8 py-4 bg-gradient-to-r from-brand-600 to-brand-600 hover:from-brand-500 hover:to-brand-500 text-white font-semibold rounded-xl shadow-lg shadow-brand-600/30 transition-all hover:-translate-y-0.5">
              Book Free Consultation
            </a>
            <a href="#universities" class="px-8 py-4 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl backdrop-blur-md border border-white/10 transition-all">
              Explore Universities
            </a>
          </div>
          <!-- Features Badges -->
          <div class="pt-6 border-t border-slate-800 grid grid-cols-2 sm:grid-cols-3 gap-4 text-sm text-slate-300">
            <div class="flex items-center gap-2 justify-center lg:justify-start">
              <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span>130+ Partner Universities</span>
            </div>
            <div class="flex items-center gap-2 justify-center lg:justify-start">
              <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span>Up to £5,000 Scholarships</span>
            </div>
            <div class="flex items-center gap-2 justify-center lg:justify-start">
              <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span>Fast Track Admission</span>
            </div>
          </div>
        </div>
        <!-- Lead Form Floating Right -->
        <div id="consultation" class="lg:col-span-5">
          <div class="bg-white/95 backdrop-blur-xl p-8 rounded-2xl shadow-2xl border border-slate-100 text-slate-900">
            <h3 class="text-2xl font-bold text-slate-900 mb-2">Refine Your Future</h3>
            <p class="text-sm text-slate-600 mb-6">Fill in details for immediate application assistance.</p>
            <form class="space-y-4">
              <div>
                <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Full Name</label>
                <input type="text" placeholder="John Doe" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand-600 focus:border-transparent transition-all outline-none text-sm">
              </div>
              <div>
                <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Email Address</label>
                <input type="email" placeholder="john@example.com" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand-600 focus:border-transparent transition-all outline-none text-sm">
              </div>
              <div class="grid grid-cols-2 gap-3">
                <div>
                  <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Phone Number</label>
                  <input type="tel" placeholder="+44..." class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand-600 focus:border-transparent transition-all outline-none text-sm">
                </div>
                <div>
                  <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Target Intake</label>
                  <select class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand-600 focus:border-transparent transition-all outline-none text-sm text-slate-600">
                    <option>Sept 2026</option>
                    <option>Jan 2027</option>
                  </select>
                </div>
              </div>
              <button class="w-full py-4 bg-gradient-to-r from-brand-600 to-brand-600 hover:from-brand-700 hover:to-brand-700 text-white font-bold rounded-lg shadow-lg shadow-brand-500/20 transition-all text-sm uppercase tracking-wide">
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
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 mb-2">Key Advantages</h2>
        <p class="text-3xl font-bold text-slate-900 sm:text-4xl">Why Choose the UK for Higher Education?</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-200 hover:shadow-xl hover:-translate-y-1 transition-all group">
          <div class="w-14 h-14 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">Academic Excellence</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Home to world-leading universities recognized globally for rigorous academic standards and cutting-edge research.</p>
        </div>
        <!-- Card 2 -->
        <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-200 hover:shadow-xl hover:-translate-y-1 transition-all group">
          <div class="w-14 h-14 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">Shorter Degrees</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Save time and tuition fees with 3-year Undergraduate programs and intensive 1-year Master’s degrees.</p>
        </div>
        <!-- Card 3 -->
        <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-200 hover:shadow-xl hover:-translate-y-1 transition-all group">
          <div class="w-14 h-14 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">Post-Study Work Permit</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Stay and work in the UK for 2 years (3 years for PhD graduates) post-graduation via Graduate Route Visa.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= POPULAR UNIVERSITIES & COURSES ================= -->
  <section id="universities" class="py-20 bg-slate-50 border-t border-b border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 mb-2">Partner Institutions</h2>
        <p class="text-3xl font-bold text-slate-900 sm:text-4xl">Popular Universities in the UK</p>
      </div>

      <!-- University Cards Grid -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Uni Item -->
        <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
          <div>
            <div class="h-10 w-10 bg-brand-50 text-brand-600 rounded-lg flex items-center justify-center font-bold text-lg mb-4">U</div>
            <h4 class="font-bold text-slate-900 text-lg">University of Greenwich</h4>
            <p class="text-xs text-slate-500 mt-1">London • Ranking #801-1000</p>
          </div>
          <a href="#" class="mt-4 inline-flex items-center text-xs font-semibold text-brand-600 hover:text-brand-800">Learn More &rarr;</a>
        </div>
        <!-- Uni Item -->
        <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
          <div>
            <div class="h-10 w-10 bg-brand-50 text-brand-600 rounded-lg flex items-center justify-center font-bold text-lg mb-4">U</div>
            <h4 class="font-bold text-slate-900 text-lg">Ulster University</h4>
            <p class="text-xs text-slate-500 mt-1">Belfast & London • High Employability</p>
          </div>
          <a href="#" class="mt-4 inline-flex items-center text-xs font-semibold text-brand-600 hover:text-brand-800">Learn More &rarr;</a>
        </div>
        <!-- Uni Item -->
        <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
          <div>
            <div class="h-10 w-10 bg-brand-50 text-brand-600 rounded-lg flex items-center justify-center font-bold text-lg mb-4">C</div>
            <h4 class="font-bold text-slate-900 text-lg">Coventry University</h4>
            <p class="text-xs text-slate-500 mt-1">Coventry • 5 Star QS Rated</p>
          </div>
          <a href="#" class="mt-4 inline-flex items-center text-xs font-semibold text-brand-600 hover:text-brand-800">Learn More &rarr;</a>
        </div>
        <!-- Uni Item -->
        <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
          <div>
            <div class="h-10 w-10 bg-brand-50 text-brand-600 rounded-lg flex items-center justify-center font-bold text-lg mb-4">B</div>
            <h4 class="font-bold text-slate-900 text-lg">BPP University</h4>
            <p class="text-xs text-slate-500 mt-1">London • Specialised Law & Business</p>
          </div>
          <a href="#" class="mt-4 inline-flex items-center text-xs font-semibold text-brand-600 hover:text-brand-800">Learn More &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= REQUIREMENTS & COSTS COMPARISON ================= -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12">
        <!-- Entry Requirements -->
        <div>
          <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Entry Requirements
          </h2>
          <div class="space-y-4">
            <div class="p-6 rounded-xl bg-slate-50 border border-slate-200/80">
              <h3 class="font-bold text-slate-900 text-base mb-2">Undergraduate Programs</h3>
              <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-brand-600 rounded-full"></span> High School Certificate / A-Levels</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-brand-600 rounded-full"></span> IELTS Overall 6.0 (Min 5.5 in each module)</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-brand-600 rounded-full"></span> Medium of Instruction (MOI) accepted in selected unis</li>
              </ul>
            </div>
            <div class="p-6 rounded-xl bg-slate-50 border border-slate-200/80">
              <h3 class="font-bold text-slate-900 text-base mb-2">Postgraduate Programs</h3>
              <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-brand-600 rounded-full"></span> Bachelor Degree with 55%+ minimum score</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-brand-600 rounded-full"></span> IELTS Overall 6.5 (or OIETC / ELLT accepted)</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-brand-600 rounded-full"></span> Work Experience (for selected MBAs)</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Cost of Studying Table -->
        <div>
          <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
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
                <tr>
                  <td class="p-4 font-medium text-slate-900">Undergraduate Tuition</td>
                  <td class="p-4 text-slate-600">£11,000 – £15,000</td>
                </tr>
                <tr>
                  <td class="p-4 font-medium text-slate-900">Postgraduate Tuition</td>
                  <td class="p-4 text-slate-600">£12,000 – £17,000</td>
                </tr>
                <tr>
                  <td class="p-4 font-medium text-slate-900">Living Costs (Outer London)</td>
                  <td class="p-4 text-slate-600">£9,207 / year</td>
                </tr>
                <tr>
                  <td class="p-4 font-medium text-slate-900">Living Costs (Inner London)</td>
                  <td class="p-4 text-slate-600">£12,006 / year</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="p-4 bg-amber-50 border border-amber-200 text-amber-900 rounded-xl text-xs flex items-start gap-3">
            <svg class="w-5 h-5 text-amber-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span><strong>Note:</strong> Most universities offer partial scholarships ranging from <strong>£1,000 to £5,000</strong> to eligible international applicants.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= PROCESS STEPS ================= -->
  <section class="py-20  text-neutral-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-xs font-bold uppercase tracking-widest text-brand-400 mb-2">Simple Process</h2>
        <p class="text-3xl font-bold sm:text-4xl">6 Steps to Study in the UK</p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-6 gap-6 relative">
        <!-- Step 1 -->
        <div class="bg-white p-6 rounded-xl border border-neutral-300 relative text-center">
          <span class="w-10 h-10 rounded-full bg-brand-600 text-white font-bold flex items-center justify-center mx-auto mb-4 text-sm">01</span>
          <h4 class="font-bold text-sm mb-2">Free Counselling</h4>
          <p class="text-xs text-neutral-400">Course & university selection assistance.</p>
        </div>
        <!-- Step 2 -->
        <div class="bg-white p-6 rounded-xl border border-neutral-300 relative text-center">
          <span class="w-10 h-10 rounded-full bg-brand-600 text-white font-bold flex items-center justify-center mx-auto mb-4 text-sm">02</span>
          <h4 class="font-bold text-sm mb-2">Application</h4>
          <p class="text-xs text-neutral-400">Submitting documents & application fees.</p>
        </div>
        <!-- Step 3 -->
        <div class="bg-white p-6 rounded-xl border border-neutral-300 relative text-center">
          <span class="w-10 h-10 rounded-full bg-brand-600 text-white font-bold flex items-center justify-center mx-auto mb-4 text-sm">03</span>
          <h4 class="font-bold text-sm mb-2">Offer Letter</h4>
          <p class="text-xs text-neutral-400">Receive conditional or unconditional offer.</p>
        </div>
        <!-- Step 4 -->
        <div class="bg-white p-6 rounded-xl border border-neutral-300 relative text-center">
          <span class="w-10 h-10 rounded-full bg-brand-600 text-white font-bold flex items-center justify-center mx-auto mb-4 text-sm">04</span>
          <h4 class="font-bold text-sm mb-2">Deposit & CAS</h4>
          <p class="text-xs text-neutral-400">Pay deposit and secure your CAS statement.</p>
        </div>
        <!-- Step 5 -->
        <div class="bg-white p-6 rounded-xl border border-neutral-300 relative text-center">
          <span class="w-10 h-10 rounded-full bg-brand-600 text-white font-bold flex items-center justify-center mx-auto mb-4 text-sm">05</span>
          <h4 class="font-bold text-sm mb-2">Visa Guidance</h4>
          <p class="text-xs text-neutral-400">Complete Student Visa application support.</p>
        </div>
        <!-- Step 6 -->
        <div class="bg-white p-6 rounded-xl border border-neutral-300 relative text-center">
          <span class="w-10 h-10 rounded-full bg-brand-600 text-white font-bold flex items-center justify-center mx-auto mb-4 text-sm">06</span>
          <h4 class="font-bold text-sm mb-2">Fly to UK</h4>
          <p class="text-xs text-neutral-400">Pre-departure briefing & accommodation setup.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
