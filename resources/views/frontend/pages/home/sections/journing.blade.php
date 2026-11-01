@php
    $features = [
        [
            'title' => 'Compare',
            'description' => 'Courses & fees',
            'icon' => 'fa-solid fa-scale-balanced',
            'step' => 'Step 1',
            'accentColor' => 'from-blue-500 to-cyan-400',
        ],
        [
            'title' => 'Connect',
            'description' => 'With verified experts',
            'icon' => 'fa-solid fa-users',
            'step' => 'Step 2',
            'accentColor' => 'from-emerald-500 to-teal-400',
        ],
        [
            'title' => 'Apply',
            'description' => 'With confidence',
            'icon' => 'fa-solid fa-file-circle-check',
            'step' => 'Step 3',
            'accentColor' => 'from-amber-500 to-orange-400',
        ],
        [
            'title' => 'Succeed',
            'description' => 'Your dream awaits',
            'icon' => 'fa-solid fa-graduation-cap',
            'step' => 'Step 4',
            'accentColor' => 'from-brand-500 to-violet-400',
        ],
    ];

@endphp

<section class="relative overflow-hidden bg-slate-50 dark:bg-slate-950">

    {{-- Ambient glows --}}
    <div class="pointer-events-none absolute -top-32 left-1/4 h-72 w-72 rounded-full bg-blue-400/10 blur-3xl"></div>

    <div class="pointer-events-none absolute -bottom-32 right-1/4 h-72 w-72 rounded-full bg-brand-400/10 blur-3xl"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mx-auto mb-16 max-w-2xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full border border-brand-200/60 bg-white px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-brand-600 shadow-sm dark:border-brand-500/20 dark:bg-slate-900 dark:text-brand-400">

                <i class="fa-solid fa-wand-magic-sparkles"></i>

                Your journey starts here

            </span>

            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl">

                Four steps to

                <span class="text-brand-600">
                    your future
                </span>

            </h2>

        </div>

        {{-- Steps grid --}}
        <div class="relative grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 lg:gap-5">

            {{-- Connector line (desktop only) --}}
            <div class="pointer-events-none absolute left-0 right-0 top-10 hidden h-px lg:block">

                <div
                    class="mx-16 h-full bg-gradient-to-r from-blue-300/60 via-emerald-300/60 via-amber-300/60 to-brand-300/60 dark:from-blue-500/30 dark:via-emerald-500/30 dark:via-amber-500/30 dark:to-brand-500/30">
                </div>

            </div>

            @foreach ($features as $feature)
                <div
                    class="group relative flex flex-col items-center rounded-3xl border border-slate-200/70 bg-white/80 p-6 text-center shadow-[0_1px_3px_rgba(15,23,42,0.06)] backdrop-blur-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_-12px_rgba(99,102,241,0.2)] dark:border-slate-800 dark:bg-slate-900/70 dark:hover:border-slate-700">

                    {{-- Step label --}}
                    <span
                        class="mb-4 rounded-full bg-slate-100 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:bg-slate-800 dark:text-slate-400">

                        {{ $feature['step'] }}

                    </span>

                    {{-- Icon --}}
                    <div
                        class="group/icon relative mb-5 inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br {{ $feature['accentColor'] }} text-white shadow-lg transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-3">

                        <i class="{{ $feature['icon'] }} text-2xl"></i>

                        {{-- Soft glow --}}
                        <div
                            class="absolute inset-0 -z-10 rounded-2xl bg-gradient-to-br {{ $feature['accentColor'] }} opacity-0 blur-xl transition-opacity duration-300 group-hover:opacity-60">
                        </div>

                    </div>

                    {{-- Content --}}
                    <h3 class="text-lg font-bold tracking-tight text-slate-900 dark:text-white">

                        {{ $feature['title'] }}

                    </h3>

                    <p class="mt-1.5 text-sm text-slate-500 dark:text-slate-400">

                        {{ $feature['description'] }}

                    </p>

                </div>
            @endforeach

        </div>

    </div>

</section>
