{{-- resources/views/frontend/pages/home/sections/digital-platform.blade.php --}}

@props([
    'badge' => 'Next-Gen Education Infrastructure',
    'title' => 'Run your entire education ecosystem on a',
    'titleHighlight' => 'unified platform',
    'description' => 'Empower consultancies, colleges, and training providers with an intelligent, end-to-end digital core. Replace fragmented spreadsheets and scattered chat threads with a high-performance command center built for conversion and scale.',
    'bulletPoints' => [],
    'primaryCta' => ['label' => 'Schedule a live demo', 'url' => 'https://hbdservices.com/contacts'],
    'secondaryCta' => ['label' => 'Explore core features', 'targetId' => 'digital-features'],
    'features' => [],
])

@php
    $defaultBulletPoints = [
        'Role-tailored custom portals for students, recruitment partners, and expert counsellors',
        'Real-time visual pipeline tracking from initial inquiry to final enrolment',
        'Enterprise-grade encrypted document vault with automated verification workflow',
        'Unified communications hub syncing phone calls, emails, and SMS per student profile',
    ];

    $defaultFeatures = [
        [
            'id' => 'student-portal',
            'title' => 'Interactive Student Portals',
            'description' => 'Enable applicants to track live statuses, upload compliance docs, and chat directly with counsellors from any device.',
            'icon' => 'graduation-cap',
            'tag' => 'Client Experience',
        ],
        [
            'id' => 'crm',
            'title' => 'Advanced CRM & Lead Routing',
            'description' => 'Capture multi-channel leads instantly from expos, landing pages, and campaigns with automated counsellor distribution.',
            'icon' => 'users',
            'tag' => 'Growth Engine',
        ],
        [
            'id' => 'app-tracking',
            'title' => 'Visual Application Pipelines',
            'description' => 'Manage university submissions, offer letters, and visa milestones seamlessly across customized visual stages.',
            'icon' => 'file-check',
            'tag' => 'Operations',
        ],
        [
            'id' => 'doc-management',
            'title' => 'Secure Document Vault',
            'description' => 'Centralize academic transcripts, passports, and test scores in a secure, searchable cloud repository.',
            'icon' => 'folder-lock',
            'tag' => 'Compliance',
        ],
        [
            'id' => 'comm-logs',
            'title' => 'Omnichannel Communications',
            'description' => 'Sync telephony records, email threads, and text logs automatically to individual student profiles.',
            'icon' => 'phone-call',
            'tag' => 'Engagement',
        ],
        [
            'id' => 'analytics',
            'title' => 'Intelligence & Analytics',
            'description' => 'Gain deep insight into source conversions, counsellor performance, and global destination trends with instant exports.',
            'icon' => 'bar-chart-3',
            'tag' => 'Business Intelligence',
        ],
    ];

    $bulletPoints = !empty($bulletPoints) ? $bulletPoints : $defaultBulletPoints;
    $features = !empty($features) ? $features : $defaultFeatures;
@endphp

<section id="digital-platform" class="relative overflow-hidden bg-brand-950 py-16 text-white sm:py-20 lg:py-24">
    {{-- Grid + glow --}}
    <div class="pointer-events-none absolute inset-0 bg-[linear-gradient(to_right,#ffffff0a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff0a_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div>
    <div class="pointer-events-none absolute -top-40 left-1/4 h-[500px] w-[500px] rounded-full bg-brand-500/15 blur-[120px]"></div>
    <div class="pointer-events-none absolute -right-20 top-1/3 h-[500px] w-[500px] rounded-full bg-accent-cyan/10 blur-[120px]"></div>

    <div class="relative mx-auto w-full max-w-[1280px] px-6 lg:px-8">

        {{-- Header --}}
        <div class="mx-auto max-w-3xl text-center" data-reveal>
            <span class="inline-flex items-center gap-2 rounded-full border border-brand-400/30 bg-brand-500/10 px-4 py-1.5 text-[12px] font-semibold uppercase tracking-[0.16em] text-brand-200 backdrop-blur">
                <iconify-icon icon="lucide:sparkles" class="text-[15px]"></iconify-icon>
                {{ $badge }}
            </span>
            <h2 class="mt-5 text-[28px] font-semibold leading-[1.2] tracking-[-0.02em] text-white sm:text-[30px] lg:text-[32px]">
                {{ $title }}
                <span class="bg-gradient-to-r from-brand-300 via-sky to-blue-light-400 bg-clip-text text-transparent">
                    {{ $titleHighlight }}
                </span>
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-brand-100/80">
                {{ $description }}
            </p>
        </div>

        {{-- Dashboard showcase --}}
        <div class="relative mx-auto mb-16 mt-12 max-w-6xl" data-reveal style="--reveal-delay: 120ms">
            <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-brand-500/30 via-accent-cyan/20 to-blue-light-500/20 opacity-50 blur-xl"></div>

            <div class="relative rounded-3xl border border-white/10 bg-brand-900/90 p-4 shadow-2xl backdrop-blur-xl sm:p-6">
                {{-- Window bar --}}
                <div class="mb-6 flex items-center justify-between border-b border-white/10 pb-4">
                    <div class="flex items-center gap-2">
                        <span class="h-3 w-3 rounded-full bg-accent-red/80"></span>
                        <span class="h-3 w-3 rounded-full bg-brand-300/70"></span>
                        <span class="h-3 w-3 rounded-full bg-accent-green/80"></span>
                    </div>
                    <div class="hidden items-center gap-2 rounded-full border border-white/5 bg-white/5 px-4 py-1 text-xs font-medium text-brand-200 sm:flex">
                        <iconify-icon icon="lucide:shield-check" class="text-[14px] text-brand-300"></iconify-icon>
                        <span>secure.hbdservices.cloud / dashboard</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full bg-brand-500/10 px-3 py-1 text-xs font-semibold text-brand-300">
                        <span class="h-2 w-2 animate-pulse rounded-full bg-accent-green"></span>
                        Live
                    </div>
                </div>

                <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-12">
                    {{-- Left: checklist + CTA --}}
                    <div class="space-y-5 lg:col-span-5">
                        <h3 class="flex items-center gap-2 text-lg font-bold tracking-tight text-white">
                            <iconify-icon icon="lucide:layers" class="text-[20px] text-brand-300"></iconify-icon>
                            Built for scale & precision
                        </h3>

                        <ul class="space-y-3.5">
                            @foreach ($bulletPoints as $point)
                                <li class="flex items-start gap-3 text-sm leading-6 text-brand-100/90">
                                    <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-brand-500/20 text-brand-300">
                                        <iconify-icon icon="lucide:check-circle-2" class="text-[15px]"></iconify-icon>
                                    </span>
                                    <span>{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <div class="flex flex-wrap items-center gap-3 pt-2">
                            <a href="{{ $primaryCta['url'] }}"
                                class="group inline-flex items-center gap-2 rounded-xl bg-brand-500 px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-brand-500/25 transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600">
                                <span>{{ $primaryCta['label'] }}</span>
                                <iconify-icon icon="lucide:arrow-right" class="text-[16px] transition-transform duration-300 group-hover:translate-x-1"></iconify-icon>
                            </a>
                            <a href="#{{ $secondaryCta['targetId'] }}"
                                class="rounded-xl border border-white/10 bg-white/5 px-6 py-3.5 text-sm font-semibold text-white transition-all duration-300 hover:bg-white/10">
                                {{ $secondaryCta['label'] }}
                            </a>
                        </div>
                    </div>

                    {{-- Right: metrics + activity --}}
                    <div class="rounded-2xl border border-white/10 bg-brand-950/80 p-5 lg:col-span-7">
                        <div class="mb-4 flex items-center justify-between">
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-brand-300/70">Operations overview</p>
                                <p class="text-lg font-bold text-white">Active student pipeline</p>
                            </div>
                            <span class="rounded-lg border border-brand-500/20 bg-brand-500/10 px-3 py-1 text-xs font-semibold text-brand-300">Real-time sync</span>
                        </div>

                        <div class="mb-5 grid grid-cols-3 gap-3">
                            <div class="rounded-xl border border-white/5 bg-white/[0.03] p-3">
                                <p class="text-[10px] font-semibold uppercase text-brand-300/70">Total inquiries</p>
                                <p class="mt-1 text-xl font-extrabold text-white">1,428</p>
                                <span class="text-[10px] font-medium text-accent-green">+18% this week</span>
                            </div>
                            <div class="rounded-xl border border-white/5 bg-white/[0.03] p-3">
                                <p class="text-[10px] font-semibold uppercase text-brand-300/70">Offers issued</p>
                                <p class="mt-1 text-xl font-extrabold text-white">384</p>
                                <span class="text-[10px] font-medium text-accent-green">94% visa rate</span>
                            </div>
                            <div class="rounded-xl border border-white/5 bg-white/[0.03] p-3">
                                <p class="text-[10px] font-semibold uppercase text-brand-300/70">Enrolments</p>
                                <p class="mt-1 text-xl font-extrabold text-white">215</p>
                                <span class="text-[10px] font-medium text-accent-cyan">Target met</span>
                            </div>
                        </div>

                        <div class="space-y-2.5">
                            <div class="flex items-center justify-between px-1 text-xs text-brand-200/80">
                                <span>Recent student activity</span>
                                <span class="font-medium text-brand-300">View all boards →</span>
                            </div>

                            <div class="flex items-center justify-between rounded-xl border border-white/5 bg-white/[0.03] p-3">
                                <div class="flex items-center gap-3">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-500/20 text-xs font-bold text-brand-300">JS</span>
                                    <div>
                                        <p class="text-xs font-bold text-white">Jessica Smith • Master of IT</p>
                                        <p class="text-[11px] text-brand-200/70">University of Melbourne • Offer letter issued</p>
                                    </div>
                                </div>
                                <span class="rounded-full border border-accent-green/20 bg-accent-green/10 px-2.5 py-1 text-[10px] font-semibold text-accent-green">Offer accepted</span>
                            </div>

                            <div class="flex items-center justify-between rounded-xl border border-white/5 bg-white/[0.03] p-3">
                                <div class="flex items-center gap-3">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-accent-cyan/20 text-xs font-bold text-accent-cyan">AK</span>
                                    <div>
                                        <p class="text-xs font-bold text-white">Alex Kumar • MBA Global</p>
                                        <p class="text-[11px] text-brand-200/70">University of Sydney • Visa lodgement</p>
                                    </div>
                                </div>
                                <span class="rounded-full border border-brand-500/20 bg-brand-500/10 px-2.5 py-1 text-[10px] font-semibold text-brand-300">In review</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Features --}}
        <div id="digital-features" class="mb-10 text-center" data-reveal>
            <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1 text-[12px] font-semibold uppercase tracking-[0.16em] text-brand-200">
                <iconify-icon icon="lucide:zap" class="text-[14px]"></iconify-icon>
                Modular capabilities
            </span>
            <h3 class="mt-4 text-xl font-bold tracking-tight text-white sm:text-2xl">
                Engineered for modern educational excellence
            </h3>
            <p class="mx-auto mt-2 max-w-xl text-sm leading-6 text-brand-100/70">
                Every module is carefully structured to maximise counsellor productivity and student satisfaction.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as $feature)
            <div data-reveal style="--reveal-delay: {{ ($loop->index % 3) * 90 }}ms">
                <div class="group flex flex-col rounded-2xl border border-white/10 bg-brand-900/60 p-7 backdrop-blur transition-all duration-300 hover:-translate-y-1.5 hover:border-brand-400/50 hover:bg-brand-900/90"
                    >
                    <div class="mb-6 flex items-center justify-between">
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl border border-brand-500/30 bg-brand-500/15 text-brand-300 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">
                            <iconify-icon icon="lucide:{{ $feature['icon'] }}" class="text-[22px]"></iconify-icon>
                        </span>
                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[11px] font-semibold text-brand-200">
                            {{ $feature['tag'] }}
                        </span>
                    </div>

                    <h4 class="text-lg font-bold tracking-tight text-white transition-colors group-hover:text-brand-300">
                        {{ $feature['title'] }}
                    </h4>
                    <p class="mt-3 text-sm leading-6 text-brand-100/70">
                        {{ $feature['description'] }}
                    </p>
                </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
