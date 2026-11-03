
<section class="relative overflow-hidden bg-[#F8FAFC] py-16 sm:py-20 lg:py-24">

    {{-- Background Decorations --}}
    <div class="pointer-events-none absolute -top-40 right-0 h-96 w-96 rounded-full bg-[#C9A84C]/10 blur-3xl"></div>
    <div class="pointer-events-none absolute bottom-0 -left-40 h-96 w-96 rounded-full bg-blue-100/60 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- ======================================
             HERO SECTION
        ======================================= --}}

        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

            <div>

                <span class="inline-flex items-center gap-2 rounded-full border border-[#C9A84C]/30 bg-[#C9A84C]/10 px-4 py-2 text-[11px] font-bold tracking-[0.18em] text-[#92732F]">

                    <iconify-icon icon="lucide:globe-2" class="text-base"></iconify-icon>

                    YOUR FUTURE, YOUR DESTINATION

                </span>

                <h1 class="mt-6 text-4xl font-extrabold leading-tight tracking-tight text-[#0B1D36] sm:text-5xl lg:text-[58px]">

                    Why Study in
                    <span class="text-[#C9A84C]">the UK?</span>

                    A World of Opportunities.

                </h1>

                <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">

                    Discover a world-class education system, globally recognised qualifications and exciting career opportunities. The United Kingdom offers an inspiring environment for international students to learn, grow and build a successful future.

                </p>

                <div class="mt-8 flex flex-wrap items-center gap-4">

                    <a href="#uk-benefits"
                       class="inline-flex items-center gap-3 rounded-xl bg-[#0B1D36] px-6 py-4 text-sm font-bold text-white shadow-lg shadow-[#0B1D36]/15 transition hover:-translate-y-1 hover:bg-[#17375D]">

                        Discover the Benefits

                        <iconify-icon icon="lucide:arrow-down" class="text-lg"></iconify-icon>

                    </a>

                    <a href="#contact"
                       class="inline-flex items-center gap-2 text-sm font-bold text-[#0B1D36] transition hover:text-[#C9A84C]">

                        Get Expert Guidance

                        <iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon>

                    </a>

                </div>

                <div class="mt-10 flex flex-wrap gap-x-7 gap-y-4 border-t border-slate-200 pt-7">

                    <div class="flex items-center gap-2">
                        <iconify-icon icon="lucide:graduation-cap" class="text-xl text-[#C9A84C]"></iconify-icon>
                        <span class="text-xs font-semibold text-slate-600">World-Class Universities</span>
                    </div>

                    <div class="flex items-center gap-2">
                        <iconify-icon icon="lucide:globe" class="text-xl text-[#C9A84C]"></iconify-icon>
                        <span class="text-xs font-semibold text-slate-600">International Experience</span>
                    </div>

                </div>

            </div>


            {{-- Hero Image --}}
            <div class="relative">

                <div class="absolute -right-5 -top-5 h-32 w-32 rounded-3xl border border-[#C9A84C]/40"></div>

                <div class="relative overflow-hidden rounded-3xl bg-[#0B1D36] p-2 shadow-2xl shadow-[#0B1D36]/15">

                    <img
                        src="https://images.unsplash.com/photo-1562774053-701939374585?w=1000&q=85"
                        alt="Historic UK university campus"
                        class="h-[350px] w-full rounded-2xl object-cover sm:h-[430px]"
                    >

                    <div class="absolute bottom-7 left-7 right-7 rounded-2xl border border-white/20 bg-[#0B1D36]/90 p-5 backdrop-blur-xl">

                        <div class="flex items-center gap-4">

                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#C9A84C]">

                                <iconify-icon icon="lucide:graduation-cap" class="text-2xl text-[#0B1D36]"></iconify-icon>

                            </div>

                            <div>
                                <h3 class="font-bold text-white">
                                    Learn Without Limits
                                </h3>

                                <p class="mt-1 text-xs text-blue-100">
                                    Discover your potential in the UK.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="absolute -bottom-5 -left-5 -z-10 h-32 w-32 rounded-full bg-[#C9A84C]/20 blur-2xl"></div>

            </div>

        </div>


        {{-- ======================================
             BENEFITS INTRODUCTION
        ======================================= --}}

        <div id="uk-benefits" class="scroll-mt-24 mt-28 text-center">

            <span class="text-xs font-bold tracking-[0.2em] text-[#A3843A]">
                THE UK ADVANTAGE
            </span>

            <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-[#0B1D36] sm:text-4xl lg:text-5xl">
                Why Students Choose the UK
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
                From academic excellence to international exposure, discover the advantages that make the UK a popular destination for higher education.
            </p>

        </div>


        {{-- ======================================
             BENEFIT CARDS
        ======================================= --}}

        @php
            $benefits = [
                [
                    'number' => '01',
                    'icon' => 'lucide:graduation-cap',
                    'title' => 'World-Class Education',
                    'description' => 'Study at respected universities known for academic excellence, research and high-quality teaching.',
                    'details' => 'Globally recognised qualifications',
                ],
                [
                    'number' => '02',
                    'icon' => 'lucide:clock',
                    'title' => 'Shorter Study Duration',
                    'description' => 'Many full-time postgraduate taught programmes can be completed in just one year.',
                    'details' => 'Save time on your studies',
                ],
                [
                    'number' => '03',
                    'icon' => 'lucide:globe',
                    'title' => 'Global Career Opportunities',
                    'description' => 'Develop transferable skills, international exposure and professional networks for your future career.',
                    'details' => 'Build a global perspective',
                ],
                [
                    'number' => '04',
                    'icon' => 'lucide:briefcase-business',
                    'title' => 'Work Opportunities',
                    'description' => 'Eligible international students can work part-time during term time, subject to visa conditions.',
                    'details' => 'Gain valuable work experience',
                ],
                [
                    'number' => '05',
                    'icon' => 'lucide:book-open',
                    'title' => 'Wide Range of Courses',
                    'description' => 'Choose from diverse academic disciplines, specialist programmes and flexible study pathways.',
                    'details' => 'Find your ideal course',
                ],
                [
                    'number' => '06',
                    'icon' => 'lucide:users',
                    'title' => 'Multicultural Experience',
                    'description' => 'Connect with people from different cultures and backgrounds in a welcoming international student environment.',
                    'details' => 'Experience global diversity',
                ],
            ];
        @endphp


        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @foreach($benefits as $benefit)

                <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-[#C9A84C]/50 hover:shadow-xl hover:shadow-[#0B1D36]/5 sm:p-8">

                    <span class="absolute right-6 top-5 text-5xl font-extrabold text-slate-100 transition-colors group-hover:text-[#C9A84C]/15">
                        {{ $benefit['number'] }}
                    </span>

                    <div class="relative flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0B1D36] text-[#C9A84C] transition-all duration-300 group-hover:bg-[#C9A84C] group-hover:text-[#0B1D36]">

                        <iconify-icon icon="{{ $benefit['icon'] }}" class="text-2xl"></iconify-icon>

                    </div>

                    <h3 class="mt-7 text-xl font-extrabold text-[#0B1D36]">
                        {{ $benefit['title'] }}
                    </h3>

                    <p class="mt-3 flex-1 text-sm leading-7 text-slate-500">
                        {{ $benefit['description'] }}
                    </p>

                    <div class="mt-6 flex items-center gap-2 border-t border-slate-100 pt-5">

                        <iconify-icon icon="lucide:check-circle-2" class="text-base text-[#C9A84C]"></iconify-icon>

                        <span class="text-xs font-bold text-[#0B1D36]">
                            {{ $benefit['details'] }}
                        </span>

                    </div>

                </article>

            @endforeach

        </div>


        {{-- ======================================
             CAREER OPPORTUNITIES
        ======================================= --}}

        <div class="relative mt-28 overflow-hidden rounded-3xl bg-[#0B1D36] p-8 sm:p-12 lg:p-14">

            <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full border-[40px] border-white/5"></div>

            <div class="relative grid items-center gap-10 lg:grid-cols-2">

                <div>

                    <span class="text-xs font-bold tracking-[0.2em] text-[#C9A84C]">
                        BUILD YOUR FUTURE
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold leading-tight text-white sm:text-4xl">
                        Turn Your UK Education into Global Opportunities.
                    </h2>

                    <p class="mt-5 text-sm leading-7 text-blue-100/70">
                        Gain valuable knowledge, develop professional skills and explore career opportunities in an international environment.
                    </p>

                    <a href="#contact"
                       class="mt-7 inline-flex items-center gap-3 rounded-xl bg-[#C9A84C] px-6 py-4 text-sm font-extrabold text-[#0B1D36] transition hover:-translate-y-1 hover:bg-[#D8B95F]">

                        Start Your Journey

                        <iconify-icon icon="lucide:arrow-right" class="text-lg"></iconify-icon>

                    </a>

                </div>


                <div class="grid grid-cols-2 gap-4">

                    @php
                        $careerPoints = [
                            ['icon' => 'lucide:briefcase-business', 'title' => 'Career Development'],
                            ['icon' => 'lucide:network', 'title' => 'Global Connections'],
                            ['icon' => 'lucide:lightbulb', 'title' => 'Innovative Thinking'],
                            ['icon' => 'lucide:trending-up', 'title' => 'Professional Growth'],
                        ];
                    @endphp

                    @foreach($careerPoints as $point)

                        <div class="rounded-2xl border border-white/10 bg-white/5 p-5 transition hover:bg-white/10">

                            <iconify-icon icon="{{ $point['icon'] }}" class="text-3xl text-[#C9A84C]"></iconify-icon>

                            <h3 class="mt-5 text-sm font-bold leading-6 text-white">
                                {{ $point['title'] }}
                            </h3>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>
