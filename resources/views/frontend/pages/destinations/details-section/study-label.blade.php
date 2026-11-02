@props([
    'eyebrow' => 'YOUR ACADEMIC JOURNEY',
    'title' => 'UK Study Levels',
    'description' => 'Discover the different levels of education available in the United Kingdom. Whether you are starting your academic journey, advancing your qualifications, or pursuing research, find a study pathway that matches your goals.',
    'levels' => [
        [
            'number' => '01',
            'title' => 'Foundation Courses',
            'subtitle' => 'Build Your Academic Foundation',
            'duration' => 'Typically 1 year',
            'description' => 'Prepare for university-level education by developing essential academic knowledge, English language skills and subject-specific foundations.',
            'qualifications' => ['Foundation Year', 'International Foundation Programme', 'Access to Higher Education'],
            'icon' => 'book',
        ],
        [
            'number' => '02',
            'title' => 'Undergraduate Degrees',
            'subtitle' => 'Start Your Higher Education',
            'duration' => 'Typically 3–4 years',
            'description' => 'Develop specialist knowledge and practical skills through a bachelor\'s degree programme at a recognised UK university.',
            'qualifications' => ['Bachelor of Arts (BA)', 'Bachelor of Science (BSc)', 'Bachelor of Engineering (BEng)'],
            'icon' => 'graduation',
        ],
        [
            'number' => '03',
            'title' => 'Postgraduate Degrees',
            'subtitle' => 'Advance Your Expertise',
            'duration' => 'Typically 1–2 years',
            'description' => 'Build advanced subject knowledge, professional expertise and specialist skills through postgraduate study.',
            'qualifications' => ['Master of Arts (MA)', 'Master of Science (MSc)', 'Master of Business Administration (MBA)'],
            'icon' => 'award',
        ],
        [
            'number' => '04',
            'title' => 'Doctoral Degrees',
            'subtitle' => 'Lead Through Research',
            'duration' => 'Typically 3–4 years',
            'description' => 'Pursue independent research, contribute original knowledge and develop advanced academic expertise in your chosen field.',
            'qualifications' => ['Doctor of Philosophy (PhD)', 'Professional Doctorates', 'Research Degrees'],
            'icon' => 'microscope',
        ],
    ],
])

<section class="relative overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">

    {{-- Background --}}
    <div class="pointer-events-none absolute -right-40 top-0 h-96 w-96 rounded-full bg-brand-100/60 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-sky-100/50 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div
            class="mb-4 inline-flex items-center gap-2 rounded-full bg-brand-50 px-3.5 py-1.5 text-xs font-bold uppercase tracking-[0.18em] text-brand-700 ring-1 ring-brand-700/10">
            <span class="h-1.5 w-1.5 rounded-full bg-brand-600"></span>
            {{ $eyebrow }}
        </div>

        <h2 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-[42px] lg:leading-[1.15]">
            {{ $title }}
        </h2>

        @if ($description)
            <p class="mt-5 text-base leading-relaxed text-slate-600 sm:text-lg sm:leading-8">
                {{ $description }}
            </p>
        @endif

        {{-- Academic Pathway --}}
        <div class="relative mt-10">

            {{-- Connecting line --}}
            <div class="absolute bottom-10 left-7 top-10 hidden w-px bg-brand-200 md:block"></div>

            <div class="space-y-6">

                @foreach ($levels as $level)
                    <article class="group relative grid gap-5 md:grid-cols-[72px_1fr] md:gap-7">

                        {{-- Number / Timeline --}}
                        <div class="relative z-10 hidden md:flex md:justify-center">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl border-4 border-slate-50 bg-[#05275e] text-sm font-extrabold text-white shadow-lg transition duration-300 group-hover:scale-110 group-hover:bg-brand-600">
                                {{ $level['number'] }}
                            </div>

                        </div>

                        {{-- Card --}}
                        <div
                            class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl hover:shadow-brand-900/5">

                            <div class="grid md:grid-cols-[1fr_280px]">

                                {{-- Main content --}}
                                <div class="p-6 sm:p-8">

                                    <div class="flex items-start gap-4">

                                        {{-- Icon --}}
                                        <div
                                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600">

                                            @switch($level['icon'])
                                                @case('book')
                                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor" stroke-width="1.7">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v16H6.5A2.5 2.5 0 0 0 4 21V5.5Zm0 0V21m4-14h8m-8 4h8" />
                                                    </svg>
                                                @break

                                                @case('graduation')
                                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor" stroke-width="1.7">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m3 9 9-5 9 5-9 5-9-5Zm4 2.2v5.3c3.3 2.3 6.7 2.3 10 0v-5.3M21 9v6" />
                                                    </svg>
                                                @break

                                                @case('award')
                                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor" stroke-width="1.7">
                                                        <circle cx="12" cy="8" r="6" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m8.5 13-1 8 4.5-2.5 4.5 2.5-1-8" />
                                                    </svg>
                                                @break

                                                @case('microscope')
                                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor" stroke-width="1.7">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m8 3 5 5-3 3-5-5 3-3Zm3 8 3 3m-7 7h12m-9-4h6m-3-3a6 6 0 0 0 6-6" />
                                                    </svg>
                                                @break
                                            @endswitch

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="text-xs font-bold tracking-widest text-brand-600 md:hidden">
                                                LEVEL {{ $level['number'] }}
                                            </span>

                                            <h3 class="mt-1 text-xl font-bold text-slate-900 sm:text-2xl">
                                                {{ $level['title'] }}
                                            </h3>

                                            <p class="mt-1 text-sm font-medium text-brand-600">
                                                {{ $level['subtitle'] }}
                                            </p>

                                        </div>

                                    </div>

                                    <p class="mt-6 text-sm leading-7 text-slate-600 sm:text-base">
                                        {{ $level['description'] }}
                                    </p>

                                    {{-- Qualifications --}}
                                    <div class="mt-6">

                                        <p class="mb-3 text-xs font-bold tracking-wider text-slate-400">
                                            AVAILABLE QUALIFICATIONS
                                        </p>

                                        <div class="flex flex-wrap gap-2">

                                            @foreach ($level['qualifications'] as $qualification)
                                                <span
                                                    class="rounded-lg border border-slate-200 bg-slate-50 px-3 py-2 text-xs font-medium text-slate-600">
                                                    {{ $qualification }}
                                                </span>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>

                                {{-- Duration panel --}}
                                <div
                                    class="flex flex-col justify-center border-t border-slate-100 bg-brand-50/60 p-6 md:border-t-0 md:border-l md:p-7">

                                    <span class="text-xs font-bold tracking-widest text-brand-600">
                                        TYPICAL DURATION
                                    </span>

                                    <p class="mt-3 text-2xl font-extrabold tracking-tight text-[#05275e]">
                                        {{ $level['duration'] }}
                                    </p>

                                    <div class="mt-5 h-1 w-12 rounded-full bg-brand-500"></div>

                                    <p class="mt-4 text-xs leading-6 text-slate-500">
                                        Duration varies depending on the qualification, institution and study programme.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </article>
                @endforeach

            </div>

        </div>       

    </div>
</section>
