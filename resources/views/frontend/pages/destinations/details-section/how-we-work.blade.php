
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

                    <iconify-icon icon="lucide:route" class="text-base"></iconify-icon>

                    YOUR APPLICATION JOURNEY

                </span>

                <h1 class="mt-6 text-4xl font-extrabold leading-tight tracking-tight text-[#0B1D36] sm:text-5xl lg:text-[58px]">

                    Our Step-by-Step
                    <span class="text-[#C9A84C]">Application Process.</span>

                </h1>

                <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">

                    Your dream of studying in the UK is closer than you think. From choosing the right university to receiving your student visa, we're here to guide you through every step of your journey.

                </p>

                <div class="mt-8 flex flex-wrap items-center gap-4">

                    <a href="#application-steps"
                       class="inline-flex items-center gap-3 rounded-xl bg-[#0B1D36] px-6 py-4 text-sm font-bold text-white shadow-lg shadow-[#0B1D36]/15 transition hover:-translate-y-1 hover:bg-[#17375D]">

                        Explore Our Process

                        <iconify-icon icon="lucide:arrow-down" class="text-lg"></iconify-icon>

                    </a>

                    <a href="#contact"
                       class="inline-flex items-center gap-2 text-sm font-bold text-[#0B1D36] transition hover:text-[#C9A84C]">

                        Talk to an Expert

                        <iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon>

                    </a>

                </div>

                {{-- Trust Information --}}
                <div class="mt-10 flex flex-wrap gap-x-7 gap-y-4 border-t border-slate-200 pt-7">

                    <div class="flex items-center gap-2">
                        <iconify-icon icon="lucide:clipboard-check" class="text-xl text-[#C9A84C]"></iconify-icon>
                        <span class="text-xs font-semibold text-slate-600">Guided Application</span>
                    </div>

                    <div class="flex items-center gap-2">
                        <iconify-icon icon="lucide:graduation-cap" class="text-xl text-[#C9A84C]"></iconify-icon>
                        <span class="text-xs font-semibold text-slate-600">University Guidance</span>
                    </div>

                </div>

            </div>


            {{-- Hero Image --}}
            <div class="relative">

                <div class="absolute -right-5 -top-5 h-32 w-32 rounded-3xl border border-[#C9A84C]/40"></div>

                <div class="relative overflow-hidden rounded-3xl bg-[#0B1D36] p-2 shadow-2xl shadow-[#0B1D36]/15">

                    <img
                        src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1000&q=85"
                        alt="International students at a university"
                        class="h-[350px] w-full rounded-2xl object-cover sm:h-[430px]"
                    >

                    <div class="absolute bottom-7 left-7 right-7 rounded-2xl border border-white/20 bg-[#0B1D36]/90 p-5 backdrop-blur-xl">

                        <div class="flex items-center gap-4">

                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#C9A84C]">

                                <iconify-icon icon="lucide:plane-takeoff" class="text-2xl text-[#0B1D36]"></iconify-icon>

                            </div>

                            <div>
                                <h3 class="font-bold text-white">
                                    Your Journey to the UK
                                </h3>

                                <p class="mt-1 text-xs text-blue-100">
                                    One step closer to your future.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="absolute -bottom-5 -left-5 -z-10 h-32 w-32 rounded-full bg-[#C9A84C]/20 blur-2xl"></div>

            </div>

        </div>


        {{-- ======================================
             PROCESS INTRODUCTION
        ======================================= --}}

        <div id="application-steps" class="scroll-mt-24 mt-28 text-center">

            <span class="text-xs font-bold tracking-[0.2em] text-[#A3843A]">
                YOUR PATHWAY TO SUCCESS
            </span>

            <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-[#0B1D36] sm:text-4xl lg:text-5xl">
                8 Simple Steps to Your UK Education
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
                We make the university application process easier with structured guidance and support from your first consultation to your departure.
            </p>

        </div>


        {{-- ======================================
             APPLICATION TIMELINE
        ======================================= --}}

        @php
            $steps = [
                [
                    'number' => '01',
                    'icon' => 'lucide:messages-square',
                    'title' => 'Free Initial Consultation',
                    'description' => 'Start with a conversation about your academic background, career ambitions, preferred courses and study destination.',
                    'details' => [
                        'Discuss your study goals',
                        'Review your academic background',
                        'Understand your study options',
                    ],
                    'label' => 'GET STARTED',
                ],
                [
                    'number' => '02',
                    'icon' => 'lucide:graduation-cap',
                    'title' => 'University & Course Selection',
                    'description' => 'Explore suitable UK universities and courses based on your academic profile, career goals and budget.',
                    'details' => [
                        'Shortlist suitable universities',
                        'Compare courses and tuition fees',
                        'Review entry requirements',
                    ],
                    'label' => 'FIND YOUR UNIVERSITY',
                ],
                [
                    'number' => '03',
                    'icon' => 'lucide:files',
                    'title' => 'Document Preparation',
                    'description' => 'Prepare the necessary academic and supporting documents to build a complete university application.',
                    'details' => [
                        'Academic certificates and transcripts',
                        'Valid passport',
                        'Personal statement and references',
                    ],
                    'label' => 'PREPARE YOUR DOCUMENTS',
                ],
                [
                    'number' => '04',
                    'icon' => 'lucide:send',
                    'title' => 'University Application',
                    'description' => 'Submit your application to your selected institutions with the required documents and supporting information.',
                    'details' => [
                        'Complete application forms',
                        'Submit supporting documents',
                        'Monitor application progress',
                    ],
                    'label' => 'SUBMIT APPLICATION',
                ],
                [
                    'number' => '05',
                    'icon' => 'lucide:mail-check',
                    'title' => 'Offer Letter & Acceptance',
                    'description' => 'Receive and review your university decision, meet any outstanding conditions and accept your offer.',
                    'details' => [
                        'Review conditional or unconditional offers',
                        'Meet outstanding conditions',
                        'Complete university acceptance steps',
                    ],
                    'label' => 'SECURE YOUR OFFER',
                ],
                [
                    'number' => '06',
                    'icon' => 'lucide:wallet',
                    'title' => 'Financial & CAS Preparation',
                    'description' => 'Prepare the required financial evidence, complete outstanding university requirements and obtain your CAS when eligible.',
                    'details' => [
                        'Plan tuition fee payments',
                        'Prepare visa financial evidence',
                        'Receive CAS from your university',
                    ],
                    'label' => 'GET CAS READY',
                ],
                [
                    'number' => '07',
                    'icon' => 'lucide:stamp',
                    'title' => 'Student Visa Application',
                    'description' => 'Prepare your UK Student visa application, arrange the required supporting evidence and complete the necessary application steps.',
                    'details' => [
                        'Complete online visa application',
                        'Pay visa fee and IHS where applicable',
                        'Complete biometrics as instructed',
                    ],
                    'label' => 'APPLY FOR YOUR VISA',
                ],
                [
                    'number' => '08',
                    'icon' => 'lucide:plane-takeoff',
                    'title' => 'Pre-Departure & Arrival',
                    'description' => 'Get ready for your new academic journey with practical travel preparation and guidance for settling into the UK.',
                    'details' => [
                        'Arrange accommodation',
                        'Plan travel and packing',
                        'Prepare for university arrival',
                    ],
                    'label' => 'START YOUR UK JOURNEY',
                ],
            ];
        @endphp


        <div class="relative mx-auto mt-16 max-w-5xl">

            {{-- Center Timeline Line --}}
            <div class="absolute bottom-10 left-6 top-10 w-px bg-gradient-to-b from-[#C9A84C] via-slate-200 to-[#C9A84C] sm:left-1/2 sm:-translate-x-1/2"></div>

            <div class="space-y-10 sm:space-y-14">

                @foreach($steps as $index => $step)

                    @php
                        $isLeft = $index % 2 === 0;
                    @endphp

                    <div class="relative grid grid-cols-1 items-center gap-6 sm:grid-cols-2 sm:gap-12">

                        {{-- Timeline Marker --}}
                        <div class="absolute left-6 top-8 z-20 flex h-11 w-11 -translate-x-1/2 items-center justify-center rounded-full border-4 border-[#F8FAFC] bg-[#0B1D36] text-xs font-extrabold text-[#C9A84C] shadow-lg sm:left-1/2">

                            {{ $step['number'] }}

                        </div>


                        {{-- Card --}}
                        <div class="{{ $isLeft ? 'sm:col-start-1 sm:row-start-1' : 'sm:col-start-2 sm:row-start-1' }} ml-14 sm:ml-0">

                            <article class="group relative h-full rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#C9A84C]/50 hover:shadow-xl hover:shadow-[#0B1D36]/5 sm:p-7">

                                {{-- Decorative Number --}}
                                <span class="absolute right-5 top-5 text-5xl font-extrabold text-slate-100 transition-colors group-hover:text-[#C9A84C]/15">
                                    {{ $step['number'] }}
                                </span>

                                <div class="relative">

                                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0B1D36] text-[#C9A84C] transition-colors duration-300 group-hover:bg-[#C9A84C] group-hover:text-[#0B1D36]">

                                        <iconify-icon icon="{{ $step['icon'] }}" class="text-2xl"></iconify-icon>

                                    </div>

                                    <span class="mt-6 inline-block text-[10px] font-extrabold tracking-[0.18em] text-[#A3843A]">
                                        {{ $step['label'] }}
                                    </span>

                                    <h3 class="mt-2 text-xl font-extrabold leading-snug text-[#0B1D36]">
                                        {{ $step['title'] }}
                                    </h3>

                                    <p class="mt-3 text-sm leading-7 text-slate-500">
                                        {{ $step['description'] }}
                                    </p>

                                    <ul class="mt-5 space-y-3 border-t border-slate-100 pt-5">

                                        @foreach($step['details'] as $detail)

                                            <li class="flex items-start gap-2 text-xs font-medium text-slate-600">

                                                <iconify-icon icon="lucide:check-circle-2" class="mt-0.5 shrink-0 text-base text-[#C9A84C]"></iconify-icon>

                                                {{ $detail }}

                                            </li>

                                        @endforeach

                                    </ul>

                                </div>

                            </article>

                        </div>


                        {{-- Desktop Opposite Side --}}
                        <div class="hidden sm:block {{ $isLeft ? 'sm:col-start-2 sm:row-start-1' : 'sm:col-start-1 sm:row-start-1' }}">

                            <div class="flex h-full items-center {{ $isLeft ? 'justify-start pl-10' : 'justify-end pr-10' }}">

                                <div class="max-w-[230px]">

                                    <span class="text-5xl font-extrabold text-slate-200">
                                        {{ $step['number'] }}
                                    </span>

                                    <p class="mt-3 text-sm font-bold leading-6 text-[#0B1D36]">
                                        {{ $step['title'] }}
                                    </p>

                                    <div class="mt-4 h-1 w-12 rounded-full bg-[#C9A84C]"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>


        {{-- ======================================
             FINAL CTA
        ======================================= --}}

        <div id="contact" class="relative mt-28 overflow-hidden rounded-3xl bg-[#0B1D36] px-7 py-12 sm:px-12 lg:px-16">

            <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full border-[40px] border-white/5"></div>

            <div class="relative flex flex-col justify-between gap-8 lg:flex-row lg:items-center">

                <div class="max-w-2xl">

                    <span class="text-xs font-bold tracking-[0.2em] text-[#C9A84C]">
                        YOUR FUTURE STARTS HERE
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold leading-tight text-white sm:text-4xl">
                        Ready to Take the First Step?
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-blue-100/70">
                        Let our experienced team guide you through your UK university application journey. Start with a consultation and take the next step towards your future.
                    </p>

                </div>

                <a href="#contact-form"
                   class="inline-flex shrink-0 items-center justify-center gap-3 rounded-xl bg-[#C9A84C] px-7 py-4 text-sm font-extrabold text-[#0B1D36] transition hover:-translate-y-1 hover:bg-[#D8B95F]">

                    Book a Free Consultation

                    <iconify-icon icon="lucide:arrow-right" class="text-lg"></iconify-icon>

                </a>

            </div>

        </div>

    </div>

</section>
