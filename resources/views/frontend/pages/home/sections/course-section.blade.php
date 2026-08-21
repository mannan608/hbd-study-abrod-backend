<section class="mt-22 mb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mx-auto max-w-2xl px-4 py-12 text-center  transition-all duration-700">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-[#1068b2]/10 rounded-full mb-6 fade-down"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-zap w-4 h-4 text-[#1068b2]">
                    <path
                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                    </path>
                </svg>
                <span class="text-sm font-semibold text-[#1068b2]">Trusted Program</span>
            </div>

            <!-- Main Heading -->
            <h1
                class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase fade-up delay-100">
                Find your ideal study path below
            </h1>

            <!-- Subheading Description -->
            <p class="mx-auto mt-4 max-w-2xl text-base text-slate-600 sm:text-lg fade-up delay-200">
                All programs are government-approved and trusted by top Australian institutions.
            </p>
        </header>
        <div class="">
            <div class="grid grid-cols-1  lg:grid-cols-2 gap-6">
                @include('frontend.pages.components.course.course-card')
                @include('frontend.pages.components.course.course-card')
                @include('frontend.pages.components.course.course-card')
                @include('frontend.pages.components.course.course-card')

            </div>
            <div class="flex items-center justify-center mt-12">
                <button
                    class="rounded-full bg-brand-500 px-5 py-4 text-base font-semibold text-white transition-colors hover:bg-brand-600">Explore
                    all Courses</button>
            </div>
        </div>
    </div>
</section>
