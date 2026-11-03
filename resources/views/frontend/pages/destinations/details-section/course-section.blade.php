@props([
    'destination' => [],
])

@php
    $destName = $destination['name'] ?? 'the United Kingdom';

    $courses = [
        [
            'number' => '01',
            'icon' => 'lucide:briefcase-business',
            'title' => 'Business & Management',
            'description' => 'Develop strategic leadership, global market expertise, and modern organizational acumen.',
            'subjects' => ['MBA', 'International Business', 'Marketing', 'Human Resources'],
        ],
        [
            'number' => '02',
            'icon' => 'lucide:code-2',
            'title' => 'Computer Science & AI',
            'description' => 'Master emerging technologies, software architecture, machine learning, and data intelligence.',
            'subjects' => ['Artificial Intelligence', 'Data Science', 'Cyber Security', 'Software Engineering'],
        ],
        [
            'number' => '03',
            'icon' => 'lucide:cog',
            'title' => 'Engineering & Technology',
            'description' => 'Solve complex real-world engineering problems through rigorous research and technological innovation.',
            'subjects' => ['Mechanical', 'Civil Engineering', 'Electrical & Electronics', 'Robotics'],
        ],
        [
            'number' => '04',
            'icon' => 'lucide:chart-no-axes-combined',
            'title' => 'Accounting & Finance',
            'description' => 'Acquire financial analytical capabilities and prepare for global banking, investment, and fintech careers.',
            'subjects' => ['Corporate Finance', 'FinTech', 'Banking', 'Investment Management'],
        ],
        [
            'number' => '05',
            'icon' => 'lucide:heart-pulse',
            'title' => 'Health & Life Sciences',
            'description' => 'Advance clinical research, public healthcare systems, pharmacology, and biomedical technologies.',
            'subjects' => ['Public Health', 'Biomedical Science', 'Nursing', 'Pharmacology'],
        ],
        [
            'number' => '06',
            'icon' => 'lucide:scale',
            'title' => 'Law & Social Sciences',
            'description' => 'Understand judicial frameworks, human rights, diplomacy, international policy, and sociological dynamics.',
            'subjects' => ['Commercial Law', 'International Relations', 'Criminology', 'Public Policy'],
        ],
    ];
@endphp

<section id="courses" data-section class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24">
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="mb-12 flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
            <x-destination-section-heading
                eyebrow="POPULAR STUDY DISCIPLINES"
                :title="'High-Demand Courses in <span class=\'text-brand-500\'>' . $destName . '</span>'"
                description="Explore career-aligned disciplines with internationally recognized curricula and excellent employment outcomes."
            />

            <a href="#contact"
               class="inline-flex shrink-0 items-center gap-2 self-start rounded-xl border border-brand-200 bg-white px-5 py-3 text-sm font-semibold text-brand-700 shadow-sm transition-all duration-300 hover:border-brand-300 hover:bg-brand-50 lg:self-auto">
                <span>Explore All Subjects</span>
                <iconify-icon icon="lucide:arrow-up-right" class="text-base"></iconify-icon>
            </a>
        </div>

        {{-- Course Cards Grid --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($courses as $course)
                <article class="group relative flex h-full flex-col rounded-2xl border border-brand-100 bg-white p-6 shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:p-7"
                         data-reveal style="--reveal-delay: {{ ($loop->index % 3) * 80 }}ms">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">
                            <iconify-icon icon="{{ $course['icon'] }}" class="text-2xl"></iconify-icon>
                        </div>
                        <span class="text-sm font-bold tracking-widest text-brand-300">
                            {{ $course['number'] }}
                        </span>
                    </div>

                    <h3 class="mt-6 text-lg font-bold text-black transition-colors group-hover:text-brand-600">
                        {{ $course['title'] }}
                    </h3>

                    <p class="mt-2.5 min-h-[48px] text-sm leading-6 text-black/60">
                        {{ $course['description'] }}
                    </p>

                    {{-- Popular Subjects Tags --}}
                    <div class="mt-6 border-t border-brand-100 pt-5">
                        <p class="mb-3 text-[11px] font-semibold uppercase tracking-wider text-black/50">
                            Popular Subjects
                        </p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($course['subjects'] as $subject)
                                <span class="rounded-lg border border-brand-100 bg-brand-50 px-2.5 py-1 text-xs font-medium text-brand-700">
                                    {{ $subject }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    {{-- Action link --}}
                    <div class="mt-6 pt-2">
                        <a href="#contact"
                           class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand-600 transition group-hover:text-brand-700">
                            <span>Explore Course Details</span>
                            <iconify-icon icon="lucide:arrow-right" class="text-sm transition-transform duration-300 group-hover:translate-x-1"></iconify-icon>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
