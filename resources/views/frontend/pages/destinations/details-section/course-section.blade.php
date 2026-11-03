
@props([
    'eyebrow' => 'POPULAR STUDY OPTIONS',
    'title' => 'Popular Courses in the UK',
    'description' => 'Explore a wide range of career-focused courses offered by UK universities and colleges.',
    'courses' => [
        [
            'number' => '01',
            'icon' => 'briefcase-business',
            'title' => 'Business & Management',
            'description' => 'Develop leadership, strategic thinking and business management skills.',
            'subjects' => ['Business Management', 'MBA', 'Marketing', 'Human Resource Management'],
            'color' => 'blue',
        ],
        [
            'number' => '02',
            'icon' => 'code',
            'title' => 'Computer Science & IT',
            'description' => 'Explore modern technologies and build skills for the digital world.',
            'subjects' => ['Computer Science', 'Data Science', 'Cyber Security', 'Artificial Intelligence'],
            'color' => 'indigo',
        ],
        [
            'number' => '03',
            'icon' => 'settings',
            'title' => 'Engineering & Technology',
            'description' => 'Learn to solve real-world challenges through innovation and technology.',
            'subjects' => ['Civil Engineering', 'Mechanical Engineering', 'Electrical Engineering', 'Software Engineering'],
            'color' => 'sky',
        ],
        [
            'number' => '04',
            'icon' => 'chart-no-axes-combined',
            'title' => 'Accounting & Finance',
            'description' => 'Build financial expertise for careers in global business and finance.',
            'subjects' => ['Accounting', 'Finance', 'Banking', 'Financial Management'],
            'color' => 'emerald',
        ],
        [
            'number' => '05',
            'icon' => 'heart-pulse',
            'title' => 'Health & Life Sciences',
            'description' => 'Explore healthcare, medical sciences and research-focused disciplines.',
            'subjects' => ['Public Health', 'Biomedical Science', 'Nursing', 'Pharmaceutical Science'],
            'color' => 'rose',
        ],
        [
            'number' => '06',
            'icon' => 'scale',
            'title' => 'Law & Social Sciences',
            'description' => 'Understand legal systems, society and international relations.',
            'subjects' => ['Law', 'International Relations', 'Criminology', 'Social Sciences'],
            'color' => 'amber',
        ],
    ],
    'exploreUrl' => '#course-search',
    'viewAllUrl' => '#course-search',
])

<section class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24">

    <div class="pointer-events-none absolute -right-40 top-20 h-96 w-96 rounded-full bg-blue-50 blur-3xl"></div>
    <div class="pointer-events-none absolute -left-40 bottom-0 h-96 w-96 rounded-full bg-sky-50 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- SECTION HEADER --}}
        <div class="mb-12 flex flex-col justify-between gap-6 lg:flex-row lg:items-end">

            <div class="max-w-3xl">

                <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-brand-50 px-3.5 py-1.5 text-xs font-bold uppercase tracking-[0.18em] text-brand-700 ring-1 ring-brand-700/10">
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

            </div>

            <a href="{{ $viewAllUrl }}"
               class="inline-flex shrink-0 items-center gap-3 self-start rounded-xl border border-slate-200 bg-white px-5 py-3.5 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-blue-200 hover:text-blue-700 lg:self-auto">

                Explore All Courses

                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
                </svg>
            </a>

        </div>

        {{-- COURSE CARDS --}}
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ($courses as $course)

                @php
                    $colorClasses = [
                        'blue' => [
                            'icon' => 'bg-blue-50 text-blue-600 group-hover:bg-blue-600',
                            'line' => 'bg-blue-500',
                            'tag' => 'bg-blue-50 text-blue-700',
                        ],
                        'indigo' => [
                            'icon' => 'bg-indigo-50 text-indigo-600 group-hover:bg-indigo-600',
                            'line' => 'bg-indigo-500',
                            'tag' => 'bg-indigo-50 text-indigo-700',
                        ],
                        'sky' => [
                            'icon' => 'bg-sky-50 text-sky-600 group-hover:bg-sky-600',
                            'line' => 'bg-sky-500',
                            'tag' => 'bg-sky-50 text-sky-700',
                        ],
                        'emerald' => [
                            'icon' => 'bg-emerald-50 text-emerald-600 group-hover:bg-emerald-600',
                            'line' => 'bg-emerald-500',
                            'tag' => 'bg-emerald-50 text-emerald-700',
                        ],
                        'rose' => [
                            'icon' => 'bg-rose-50 text-rose-600 group-hover:bg-rose-600',
                            'line' => 'bg-rose-500',
                            'tag' => 'bg-rose-50 text-rose-700',
                        ],
                        'amber' => [
                            'icon' => 'bg-amber-50 text-amber-600 group-hover:bg-amber-600',
                            'line' => 'bg-amber-500',
                            'tag' => 'bg-amber-50 text-amber-700',
                        ],
                    ];

                    $style = $colorClasses[$course['color'] ?? 'blue'] ?? $colorClasses['blue'];
                @endphp

                <article class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-200 hover:shadow-xl hover:shadow-slate-900/5 sm:p-7">

                    {{-- Top accent --}}
                    <div class="absolute inset-x-0 top-0 h-1 {{ $style['line'] }} opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>

                    {{-- Card header --}}
                    <div class="flex items-start justify-between">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl {{ $style['icon'] }} transition-colors duration-300 group-hover:text-white">

                            @switch($course['icon'])

                                @case('briefcase-business')
                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                        <rect x="3" y="7" width="18" height="14" rx="2"/>
                                        <path stroke-linecap="round" d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12h18m-11 0v2h4v-2"/>
                                    </svg>
                                    @break

                                @case('code')
                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8 8-4 4 4 4m8-8 4 4-4 4m-3-11-2 14"/>
                                    </svg>
                                    @break

                                @case('settings')
                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                        <circle cx="12" cy="12" r="3"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.4 15 .1.1 1.4 1.1-1.5 2.6-1.7-.6a8 8 0 0 1-1.8 1L15.6 21h-3.2l-.3-1.8a8 8 0 0 1-1.8-1l-1.7.6-1.5-2.6 1.4-1.1a8 8 0 0 1 0-2.1l-1.4-1.1 1.5-2.6 1.7.6a8 8 0 0 1 1.8-1L12.4 3h3.2l.3 1.8a8 8 0 0 1 1.8 1l1.7-.6 1.5 2.6-1.4 1.1a8 8 0 0 1 0 2.1Z"/>
                                    </svg>
                                    @break

                                @case('chart-no-axes-combined')
                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18M7 14l4-4 4 3 6-7"/>
                                    </svg>
                                    @break

                                @case('heart-pulse')
                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.8 8.8c0 5.2-8.8 11-8.8 11S3.2 14 3.2 8.8A4.8 4.8 0 0 1 12 6.1a4.8 4.8 0 0 1 8.8 2.7Z M3 12h5l2-4 3 8 2-4h6"/>
                                    </svg>
                                    @break

                                @case('scale')
                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m-7 0h14M5 7h14M5 7l-3 7h6L5 7Zm14 0-3 7h6l-3-7Z"/>
                                    </svg>
                                    @break

                            @endswitch

                        </div>

                        <span class="text-sm font-bold tracking-widest text-slate-300">
                            {{ $course['number'] }}
                        </span>

                    </div>

                    {{-- Card content --}}
                    <h3 class="mt-6 text-xl font-bold text-slate-900 transition-colors group-hover:text-blue-700">
                        {{ $course['title'] }}
                    </h3>

                    <p class="mt-3 min-h-14 text-sm leading-7 text-slate-500">
                        {{ $course['description'] }}
                    </p>

                    {{-- Subjects --}}
                    <div class="mt-6 border-t border-slate-100 pt-5">

                        <p class="mb-3 text-xs font-bold tracking-wider text-slate-400">
                            POPULAR SUBJECTS
                        </p>

                        <div class="flex flex-wrap gap-2">

                            @foreach ($course['subjects'] as $subject)

                                <span class="rounded-lg px-3 py-2 text-xs font-medium {{ $style['tag'] }}">
                                    {{ $subject }}
                                </span>

                            @endforeach

                        </div>

                    </div>

                    {{-- Explore link --}}
                    <a href="{{ $exploreUrl }}"
                       class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-slate-700 transition-colors group-hover:text-blue-600">

                        Explore Courses

                        <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>

                    </a>

                </article>

            @endforeach

        </div>

    </div>
</section>
