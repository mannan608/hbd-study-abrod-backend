
@php
    $academyData = [
        'sectionHeader' => [
            'badge' => 'HBD Language Academy',
            'title' => 'Pass your English and NAATI CCL exams with confidence',
            'description' => 'Structured classes, timed mock tests, and personal feedback from trainers who know exactly what examiners look for.',
        ],

        'courses' => [
            [
                'id' => 'ielts',
                'title' => 'IELTS Preparation',
                'description' => 'Academic and General Training. Build skills across all four modules with exam-style practice.',
                'icon' => 'fa-solid fa-headphones',
                'tags' => ['Listening', 'Reading', 'Writing', 'Speaking'],
                'features' => [
                    'Band score strategy for university and visa needs',
                    'Writing task 1 and 2 correction with feedback',
                    'Speaking practice with mock interviews',
                ],
            ],
            [
                'id' => 'pte',
                'title' => 'PTE Academic Preparation',
                'description' => 'Train on a computer-based format so test day feels familiar, with a focus on integrated skills.',
                'icon' => 'fa-solid fa-laptop',
                'tags' => ['Speaking & Writing', 'Reading', 'Listening'],
                'features' => [
                    'Templates and techniques for each question type',
                    'Computer-based mock tests with score reports',
                    'Pronunciation and fluency coaching',
                ],
            ],
            [
                'id' => 'naati',
                'title' => 'NAATI CCL Preparation',
                'description' => 'Earn credentialed community language points for your Australian migration pathway.',
                'icon' => 'fa-solid fa-comments',
                'tags' => ['Dialogues', 'Interpreting', 'Vocabulary'],
                'features' => [
                    'Practice with real exam-style dialogues',
                    'Note-taking and memory techniques',
                    'Domain vocabulary for health, legal, education & more',
                ],
            ],
        ],

        'formats' => [
            [
                'title' => 'Group Batches',
                'description' => 'Small classes with peers on the same goal',
            ],
            [
                'title' => 'One-to-One',
                'description' => 'Private sessions focused on your weak areas',
            ],
            [
                'title' => 'Mock Test Days',
                'description' => 'Full timed tests with detailed review',
            ],
        ],

        'studentBenefits' => [
            'Free level assessment before you enrol',
            'Official-style practice material',
            'Weekly progress reports',
            'Online and in-person class options',
        ],

        'cta' => [
            'text' => 'Book a free level check',
            'url' => 'https://hbdservices.com/contacts',
        ],
    ];
@endphp

<section class="relative overflow-hidden bg-slate-50/60 py-20 dark:bg-slate-950 lg:py-28">

    {{-- Ambient background glows --}}
    <div class="pointer-events-none absolute left-10 top-10 h-96 w-96 rounded-full bg-brand-500/5 blur-3xl"></div>
    <div class="pointer-events-none absolute bottom-10 right-10 h-96 w-96 rounded-full bg-brand-500/5 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mx-auto max-w-3xl pb-16 text-center">

            <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-brand-200/65 bg-brand-500/10 px-4 py-1.5 shadow-sm">

                <i class="fa-solid fa-sparkles text-sm text-brand-600 dark:text-brand-400"></i>

                <span class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-400">
                    {{ $academyData['sectionHeader']['badge'] }}
                </span>

            </div>

            <h2 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl dark:text-white">
                {{ $academyData['sectionHeader']['title'] }}
            </h2>

            <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-neutral-400">
                {{ $academyData['sectionHeader']['description'] }}
            </p>

        </div>

        {{-- Courses Grid --}}
        <div class="mb-10 grid grid-cols-1 gap-8 lg:grid-cols-3">

            @foreach($academyData['courses'] as $index => $course)

                <div
                    style="transition-delay: {{ $index * 100 }}ms"
                    class="group relative flex flex-col justify-between overflow-hidden rounded-3xl border border-slate-200/80 bg-white p-7 shadow-[0_1px_3px_rgba(15,23,42,0.06)] transition-all duration-500 hover:-translate-y-1.5 hover:border-brand-300 hover:shadow-[0_20px_40px_-15px_rgba(15,23,42,0.12)] sm:p-8 dark:border-neutral-800 dark:bg-neutral-900">

                    <div>

                        {{-- Icon --}}
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-brand-100 bg-brand-50 text-brand-600 shadow-sm transition-all duration-500 group-hover:scale-110 group-hover:bg-brand-600 group-hover:text-white dark:border-neutral-700 dark:bg-neutral-800">

                            <i class="{{ $course['icon'] }} text-xl"></i>

                        </div>

                        {{-- Title & Description --}}
                        <div class="mt-6">

                            <h3 class="text-xl font-bold tracking-tight text-slate-900 transition-colors group-hover:text-brand-600 dark:text-white">
                                {{ $course['title'] }}
                            </h3>

                            <p class="mt-2.5 text-sm leading-relaxed text-slate-500 dark:text-neutral-400">
                                {{ $course['description'] }}
                            </p>

                        </div>

                        {{-- Exam Tags --}}
                        <div class="mt-5 flex flex-wrap gap-1.5">

                            @foreach($course['tags'] as $tag)

                                <span class="rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-neutral-800 dark:text-neutral-300">
                                    {{ $tag }}
                                </span>

                            @endforeach

                        </div>

                        {{-- Feature Checklist --}}
                        <ul class="mt-6 space-y-2.5 border-t border-slate-100 pt-6 dark:border-neutral-800">

                            @foreach($course['features'] as $feature)

                                <li class="flex items-start gap-2.5 text-xs leading-normal text-slate-600 dark:text-neutral-400">

                                    <i class="fa-solid fa-circle-check mt-0.5 shrink-0 text-sm text-emerald-500"></i>

                                    <span>{{ $feature }}</span>

                                </li>

                            @endforeach

                        </ul>

                    </div>

                </div>

            @endforeach

        </div>

        {{-- Bottom Split Container --}}
        <div class="grid grid-cols-1 items-stretch gap-8 lg:grid-cols-12">

            {{-- Learning Formats --}}
            <div class="flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-white p-8 shadow-sm lg:col-span-7 dark:border-neutral-800 dark:bg-neutral-900">

                <div>

                    <div class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600 dark:bg-neutral-800 dark:text-brand-400">

                        <i class="fa-solid fa-calendar-days text-lg"></i>

                    </div>

                    <h3 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                        Learn the way that fits your schedule
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-slate-500 dark:text-neutral-400">
                        Pick a format, start with a free level check, and get a study plan built around your test date and target score.
                    </p>

                    {{-- Formats --}}
                    <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-3">

                        @foreach($academyData['formats'] as $format)

                            <div class="rounded-2xl border border-slate-100 bg-slate-50/70 p-4 transition-colors hover:border-brand-200 dark:border-neutral-800 dark:bg-neutral-800/50">

                                <p class="text-sm font-bold text-slate-900 dark:text-white">
                                    {{ $format['title'] }}
                                </p>

                                <p class="mt-1 text-xs leading-relaxed text-slate-500 dark:text-neutral-400">
                                    {{ $format['description'] }}
                                </p>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

            {{-- Student Benefits & CTA --}}
            <div class="flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-gradient-to-br from-slate-900 to-brand-950 p-8 text-white shadow-xl lg:col-span-5">

                <div>

                    <h3 class="text-xl font-bold tracking-tight">
                        What every student gets
                    </h3>

                    <ul class="mt-6 space-y-3.5">

                        @foreach($academyData['studentBenefits'] as $benefit)

                            <li class="flex items-center gap-3 text-sm text-slate-200">

                                <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-500/20 text-xs text-emerald-400">
                                    <i class="fa-solid fa-check"></i>
                                </span>

                                <span>{{ $benefit }}</span>

                            </li>

                        @endforeach

                    </ul>

                </div>

                {{-- CTA --}}
                <div class="mt-8 border-t border-white/10 pt-6">

                    <a
                        href="{{ $academyData['cta']['url'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex w-full items-center justify-center gap-2 rounded-2xl bg-red-600 px-6 py-4 text-sm font-semibold text-white shadow-lg shadow-red-600/30 transition-all duration-300 hover:bg-red-500 hover:shadow-red-500/50">

                        <span>{{ $academyData['cta']['text'] }}</span>

                        <i class="fa-solid fa-arrow-right text-sm transition-transform duration-300 group-hover:translate-x-1"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
