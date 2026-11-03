@props([
    'destination' => [],
])

@php
    $destName = $destination['name'] ?? 'the United Kingdom';

    $levels = [
        [
            'number' => '01',
            'title' => 'Foundation & Pathway Courses',
            'subtitle' => 'Build Academic & Language Readiness',
            'duration' => 'Typically 1 Year',
            'description' => 'Bridge the gap between your local curriculum (such as HSC) and university degree entry, with intensive English training and subject-specific foundations.',
            'qualifications' => ['International Foundation Year', 'Diploma Pathway (Year 1 Entry)', 'Pre-Master’s Program'],
            'icon' => 'lucide:book-open',
        ],
        [
            'number' => '02',
            'title' => 'Undergraduate Bachelor\'s Degrees',
            'subtitle' => 'Comprehensive Higher Education',
            'duration' => 'Typically 3–4 Years',
            'description' => 'Develop deep conceptual knowledge, critical analysis, and practical experience with recognized honours degrees and optional industrial placement years.',
            'qualifications' => ['Bachelor of Arts (BA)', 'Bachelor of Science (BSc)', 'Bachelor of Engineering (BEng)', 'Bachelor of Laws (LLB)'],
            'icon' => 'lucide:graduation-cap',
        ],
        [
            'number' => '03',
            'title' => 'Postgraduate Master\'s Degrees',
            'subtitle' => 'Accelerated Professional Specialization',
            'duration' => 'Typically 1–2 Years',
            'description' => 'Enhance your career competitiveness with focused taught or research-led Master’s programs. In the UK, many programs are completed in just 12 months.',
            'qualifications' => ['Master of Science (MSc)', 'Master of Arts (MA)', 'Master of Business Administration (MBA)', 'Master of Research (MRes)'],
            'icon' => 'lucide:award',
        ],
        [
            'number' => '04',
            'title' => 'Doctoral Degrees (PhD / Research)',
            'subtitle' => 'Pioneering Academic Research',
            'duration' => 'Typically 3–4 Years',
            'description' => 'Undertake independent research under world-renowned academic supervisors, producing original thesis contributions in your specialized field.',
            'qualifications' => ['Doctor of Philosophy (PhD)', 'Professional Doctorate (DBA/EdD)', 'Research Fellowships'],
            'icon' => 'lucide:microscope',
        ],
    ];
@endphp

<section id="study-levels" data-section class="relative overflow-hidden bg-brand-25 py-16 sm:py-20 lg:py-24">
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <x-destination-section-heading
            eyebrow="ACADEMIC LEVELS & PATHWAYS"
            :title="'Study Levels in <span class=\'text-brand-500\'>' . $destName . '</span>'"
            description="Explore flexible degree structures, standard course durations, and recognized academic qualifications matching your stage of education."
        />

        {{-- Academic Pathway Timeline --}}
        <div class="relative mt-12">
            {{-- Connecting line for md+ screens --}}
            <div class="absolute bottom-10 left-6 top-10 hidden w-px bg-brand-200 md:block"></div>

            <div class="space-y-6">
                @foreach ($levels as $level)
                    <article class="group relative grid gap-5 md:grid-cols-[48px_1fr] md:gap-7"
                             data-reveal style="--reveal-delay: {{ $loop->index * 80 }}ms">
                        {{-- Timeline indicator --}}
                        <div class="relative z-10 hidden md:flex md:justify-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500 text-sm font-bold text-white shadow-sm transition-transform duration-300 group-hover:scale-105">
                                {{ $level['number'] }}
                            </div>
                        </div>

                        {{-- Card container --}}
                        <div class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md">
                            <div class="grid md:grid-cols-[1fr_260px]">
                                {{-- Left: details --}}
                                <div class="p-6 sm:p-8">
                                    <div class="flex items-start gap-4">
                                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600">
                                            <iconify-icon icon="{{ $level['icon'] }}" class="text-2xl"></iconify-icon>
                                        </div>

                                        <div class="min-w-0 flex-1">
                                            <span class="text-xs font-bold tracking-widest text-brand-600 md:hidden">
                                                LEVEL {{ $level['number'] }}
                                            </span>
                                            <h3 class="mt-1 text-xl font-bold text-black sm:text-2xl">
                                                {{ $level['title'] }}
                                            </h3>
                                            <p class="mt-0.5 text-sm font-semibold text-brand-600">
                                                {{ $level['subtitle'] }}
                                            </p>
                                        </div>
                                    </div>

                                    <p class="mt-5 text-sm sm:text-base leading-7 text-black/60">
                                        {{ $level['description'] }}
                                    </p>

                                    {{-- Qualifications badges --}}
                                    <div class="mt-6 border-t border-brand-100 pt-5">
                                        <p class="mb-3 text-[11px] font-semibold uppercase tracking-wider text-black/50">
                                            Available Qualifications
                                        </p>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach ($level['qualifications'] as $qualification)
                                                <span class="rounded-lg border border-brand-100 bg-brand-50 px-3 py-1.5 text-xs font-medium text-brand-700">
                                                    {{ $qualification }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                {{-- Right: duration panel --}}
                                <div class="flex flex-col justify-center border-t border-brand-100 bg-brand-50/70 p-6 md:border-l md:border-t-0 md:p-8">
                                    <span class="text-[11px] font-semibold uppercase tracking-wider text-black/50">
                                        TYPICAL DURATION
                                    </span>
                                    <p class="mt-2 text-2xl font-bold text-black">
                                        {{ $level['duration'] }}
                                    </p>
                                    <div class="mt-4 h-1 w-10 rounded-full bg-brand-500"></div>
                                    <p class="mt-3 text-xs leading-5 text-black/60">
                                        Durations vary by university, academic stream, and optional placement year.
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
