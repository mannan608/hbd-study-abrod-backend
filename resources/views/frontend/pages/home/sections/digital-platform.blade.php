{{-- resources/views/components/digital-platform-section.blade.php --}}

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
    // Dummy data (used when no props are passed)
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

<section class="relative overflow-hidden bg-brand-950 py-24 lg:py-32 text-slate-100" id="digital-platform">
    {{-- Background grid + brand glows --}}
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] pointer-events-none"></div>
    <div class="pointer-events-none absolute -top-40 left-1/4 h-[500px] w-[500px] rounded-full bg-brand-500/15 blur-[120px]"></div>
    <div class="pointer-events-none absolute top-1/3 -right-20 h-[500px] w-[500px] rounded-full bg-accent-cyan/10 blur-[120px]"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Hero Header --}}
        <div class="mx-auto max-w-3xl text-center pb-16">
            <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-brand-400/30 bg-brand-500/10 px-4 py-1.5 shadow-lg shadow-brand-500/5 backdrop-blur-md">
                <iconify-icon icon="lucide:sparkles" class="text-[16px] text-brand-300"></iconify-icon>
                <span class="text-xs font-bold uppercase tracking-widest text-brand-200">
                    {{ $badge }}
                </span>
            </div>

            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl lg:text-5xl text-white leading-[1.15]">
                {{ $title }}
                <span class="bg-gradient-to-r from-brand-300 via-accent-cyan to-blue-light-400 bg-clip-text text-transparent">
                    {{ $titleHighlight }}
                </span>
            </h2>

            <p class="mt-5 text-base text-slate-300 sm:text-lg leading-relaxed max-w-2xl mx-auto">
                {{ $description }}
            </p>
        </div>

        {{-- Premium Dashboard Showcase --}}
        <div class="relative mx-auto max-w-7xl mb-24">
            <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-brand-500/30 via-accent-cyan/20 to-blue-light-500/20 blur-xl opacity-50"></div>

            <div class="relative rounded-3xl border border-white/10 bg-brand-900/90 p-4 sm:p-6 shadow-2xl backdrop-blur-xl">
                {{-- Window bar --}}
                <div class="flex items-center justify-between border-b border-white/10 pb-4 mb-6">
                    <div class="flex items-center gap-2">
                        <div class="h-3 w-3 rounded-full bg-accent-red/80"></div>
                        <div class="h-3 w-3 rounded-full bg-amber-500/80"></div>
                        <div class="h-3 w-3 rounded-full bg-accent-green/80"></div>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/5 bg-white/5 px-4 py-1 text-xs font-medium text-slate-400">
                        <iconify-icon icon="lucide:shield-check" class="text-[14px] text-brand-300"></iconify-icon>
                        <span>secure.hbdservices.cloud / dashboard</span>
                    </div>
                    <div class="hidden sm:flex items-center gap-2 text-xs text-brand-300 font-semibold bg-brand-500/10 px-3 py-1 rounded-full">
                        <span class="h-2 w-2 rounded-full bg-brand-400 animate-pulse"></span>
                        Live System Active
                    </div>
                </div>

                {{-- Dashboard Content --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    {{-- Left: Checklist + CTAs --}}
                    <div class="lg:col-span-5 space-y-4">
                        <h3 class="text-xl font-bold text-white tracking-tight flex items-center gap-2">
                            <iconify-icon icon="lucide:layers" class="text-[20px] text-brand-300"></iconify-icon>
                            <span>Built for Scale & Precision</span>
                        </h3>

                        <ul class="space-y-3.5 pt-2">
                            @foreach ($bulletPoints as $point)
                                <li class="flex items-start gap-3 text-sm text-slate-300 leading-normal">
                                    <div class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-brand-500/20 text-brand-300">
                                        <iconify-icon icon="lucide:check-circle-2" class="text-[16px]"></iconify-icon>
                                    </div>
                                    <span>{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <div class="pt-4 flex flex-wrap items-center gap-3">
                            <a href="{{ $primaryCta['url'] }}"
                               class="group inline-flex items-center gap-2 rounded-xl bg-brand-500 px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-brand-500/25 transition-all duration-300 hover:bg-brand-400 hover:shadow-brand-400/40">
                                <span>{{ $primaryCta['label'] }}</span>
                                <iconify-icon icon="lucide:arrow-right" class="text-[16px] transition-transform duration-300 group-hover:translate-x-1"></iconify-icon>
                            </a>

                            <a href="#{{ $secondaryCta['targetId'] }}"
                               class="rounded-xl border border-white/10 bg-white/5 px-6 py-3.5 text-sm font-semibold text-white transition-all duration-300 hover:bg-white/10 hover:border-white/20">
                                {{ $secondaryCta['label'] }}
                            </a>
                        </div>
                    </div>

                    {{-- Right: Metrics + Activity --}}
                    <div class="lg:col-span-7 rounded-2xl border border-white/10 bg-brand-950/80 p-5 shadow-inner">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-wider text-slate-400">Operations Overview</p>
                                <p class="text-lg font-bold text-white">Active Student Pipeline</p>
                            </div>
                            <div class="rounded-lg bg-brand-500/10 px-3 py-1 text-xs font-bold text-brand-300 border border-brand-500/20">
                                Real-Time Sync
                            </div>
                        </div>

                        {{-- Mini Metrics --}}
                        <div class="grid grid-cols-3 gap-3 mb-5">
                            <div class="rounded-xl border border-white/5 bg-white/[0.02] p-3">
                                <p class="text-[10px] text-slate-400 uppercase font-semibold">Total Inquiries</p>
                                <p class="text-xl font-extrabold text-white mt-0.5">1,428</p>
                                <span class="text-[10px] text-accent-green font-medium">+18% this week</span>
                            </div>
                            <div class="rounded-xl border border-white/5 bg-white/[0.02] p-3">
                                <p class="text-[10px] text-slate-400 uppercase font-semibold">Offers Issued</p>
                                <p class="text-xl font-extrabold text-white mt-0.5">384</p>
                                <span class="text-[10px] text-accent-green font-medium">94% Visa rate</span>
                            </div>
                            <div class="rounded-xl border border-white/5 bg-white/[0.02] p-3">
                                <p class="text-[10px] text-slate-400 uppercase font-semibold">Enrolments</p>
                                <p class="text-xl font-extrabold text-white mt-0.5">215</p>
                                <span class="text-[10px] text-accent-cyan font-medium">Target Met</span>
                            </div>
                        </div>

                        {{-- Recent Activity --}}
                        <div class="space-y-2.5">
                            <div class="flex items-center justify-between text-xs text-slate-400 px-1">
                                <span>Recent Student Activity</span>
                                <span class="text-brand-300 font-medium">View All Boards →</span>
                            </div>

                            <div class="rounded-xl border border-white/5 bg-white/[0.02] p-3 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="h-8 w-8 rounded-lg bg-brand-500/20 text-brand-300 flex items-center justify-center font-bold text-xs">
                                        JS
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-white">Jessica Smith • Master of IT</p>
                                        <p class="text-[11px] text-slate-400">University of Melbourne • Offer Letter Issued</p>
                                    </div>
                                </div>
                                <span class="rounded-full bg-accent-green/10 text-accent-green text-[10px] px-2.5 py-1 font-semibold border border-accent-green/20">
                                    Offer Accepted
                                </span>
                            </div>

                            <div class="rounded-xl border border-white/5 bg-white/[0.02] p-3 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="h-8 w-8 rounded-lg bg-accent-cyan/20 text-accent-cyan flex items-center justify-center font-bold text-xs">
                                        AK
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-white">Alex Kumar • MBA Global</p>
                                        <p class="text-[11px] text-slate-400">University of Sydney • Visa Lodgement</p>
                                    </div>
                                </div>
                                <span class="rounded-full bg-brand-500/10 text-brand-300 text-[10px] px-2.5 py-1 font-semibold border border-brand-500/20">
                                    In Review
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Features Header --}}
        <div class="text-center mb-12" id="digital-features">
            <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1 mb-3">
                <iconify-icon icon="lucide:zap" class="text-[14px] text-amber-400"></iconify-icon>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-300">Modular Capabilities</span>
            </div>
            <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                Engineered for Modern Educational Excellence
            </h3>
            <p class="mt-2 text-sm text-slate-400 max-w-xl mx-auto">
                Every module is carefully structured to maximize counselor productivity and student satisfaction.
            </p>
        </div>

        {{-- Feature Cards --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as $feature)
                <div class="group relative flex flex-col justify-between overflow-hidden rounded-3xl border border-white/10 bg-brand-900/60 p-8 shadow-xl backdrop-blur-md transition-all duration-500 hover:-translate-y-1.5 hover:border-brand-400/50 hover:bg-brand-900/90 hover:shadow-2xl hover:shadow-brand-500/10">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            {{-- Icon --}}
                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-brand-500/20 to-accent-cyan/20 text-brand-300 border border-brand-500/30 transition-all duration-500 group-hover:scale-110 group-hover:bg-brand-500 group-hover:text-white">
                                <iconify-icon icon="lucide:{{ $feature['icon'] }}" class="text-[24px]"></iconify-icon>
                            </div>

                            {{-- Tag --}}
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[11px] font-semibold text-slate-300">
                                {{ $feature['tag'] }}
                            </span>
                        </div>

                        <div>
                            <h4 class="text-xl font-bold tracking-tight text-white transition-colors group-hover:text-brand-300">
                                {{ $feature['title'] }}
                            </h4>
                            <p class="mt-3 text-sm leading-relaxed text-slate-400">
                                {{ $feature['description'] }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 flex items-center gap-2 text-xs font-semibold text-brand-300 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <span>Learn workflow</span>
                        <iconify-icon icon="lucide:arrow-right" class="text-[14px] transition-transform duration-300 group-hover:translate-x-1"></iconify-icon>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>