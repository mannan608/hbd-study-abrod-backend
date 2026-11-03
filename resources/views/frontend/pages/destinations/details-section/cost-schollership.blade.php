@props([
    'destination' => [],
])

@php
    $destName = $destination['name'] ?? 'the United Kingdom';

    $scholarships = [
        [
            'icon' => 'lucide:award',
            'category' => 'UK GOVERNMENT',
            'name' => 'Chevening Scholarships',
            'description' => 'Prestigious UK government award for outstanding emerging leaders to pursue a 1-year master’s degree.',
            'benefits' => '100% Fully Funded (Tuition + Stipend)',
            'level' => 'Postgraduate',
            'url' => '#contact',
        ],
        [
            'icon' => 'lucide:globe',
            'category' => 'BRITISH COUNCIL',
            'name' => 'GREAT Scholarships',
            'description' => 'Jointly funded tuition support for high-achieving Bangladeshi students admitted into participating universities.',
            'benefits' => '£10,000 towards Tuition Fees',
            'level' => 'Postgraduate',
            'url' => '#contact',
        ],
        [
            'icon' => 'lucide:landmark',
            'category' => 'INSTITUTIONAL MERIT',
            'name' => 'University Vice-Chancellor Grants',
            'description' => 'Automated and application-based merit scholarships awarded directly by universities based on prior academic GPA.',
            'benefits' => '£2,000 – £8,000 Fee Reduction',
            'level' => 'Undergraduate & Masters',
            'url' => '#contact',
        ],
    ];
@endphp

<section id="costs" data-section class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24">
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <x-destination-section-heading
            eyebrow="FINANCIAL PLANNING & EXPENSES"
            :title="'Estimated Cost of Studying in <span class=\'text-brand-500\'>' . $destName . '</span>'"
            description="Understand key tuition fee ranges, realistic monthly living expenses, and budgeting factors before making your study decision."
        />

        {{-- Tuition Fee Range Cards (2 columns) --}}
        <div class="mt-12 grid gap-6 lg:grid-cols-2">
            {{-- Undergraduate Tuition --}}
            <article class="group rounded-2xl border border-brand-100 bg-white p-7 shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:p-8" data-reveal>
                <div class="flex items-center justify-between">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-500 group-hover:text-white">
                        <iconify-icon icon="lucide:graduation-cap" class="text-2xl"></iconify-icon>
                    </div>
                    <span class="rounded-full border border-brand-100 bg-brand-50 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-brand-700">
                        ANNUAL ESTIMATE
                    </span>
                </div>

                <h3 class="mt-6 text-xl font-bold text-black transition-colors group-hover:text-brand-600">
                    Undergraduate Tuition Fees
                </h3>

                <div class="mt-4">
                    <span class="text-xs font-semibold uppercase tracking-wider text-black/50">Typical International Range</span>
                    <div class="mt-1 text-3xl font-extrabold tracking-tight text-brand-600 sm:text-4xl">
                        £11,400 – £28,000
                    </div>
                    <span class="text-xs text-black/50">Per academic year (approx. depending on field)</span>
                </div>

                <p class="mt-4 text-sm leading-6 text-black/60">
                    Arts and humanities generally occupy the lower band, whereas engineering, computer science, and laboratory courses sit in the intermediate to higher bracket.
                </p>

                <div class="mt-6 border-t border-brand-100 pt-4">
                    <span class="text-xs font-semibold text-brand-600">
                        UNDERGRADUATE (3–4 YEARS)
                    </span>
                </div>
            </article>

            {{-- Postgraduate Tuition --}}
            <article class="group rounded-2xl border border-brand-100 bg-white p-7 shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:p-8" data-reveal style="--reveal-delay: 100ms">
                <div class="flex items-center justify-between">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-500 group-hover:text-white">
                        <iconify-icon icon="lucide:book-open" class="text-2xl"></iconify-icon>
                    </div>
                    <span class="rounded-full border border-brand-100 bg-brand-50 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-brand-700">
                        FULL PROGRAM ESTIMATE
                    </span>
                </div>

                <h3 class="mt-6 text-xl font-bold text-black transition-colors group-hover:text-brand-600">
                    Postgraduate Master’s Tuition
                </h3>

                <div class="mt-4">
                    <span class="text-xs font-semibold uppercase tracking-wider text-black/50">Typical 1-Year Master's Range</span>
                    <div class="mt-1 text-3xl font-extrabold tracking-tight text-brand-600 sm:text-4xl">
                        £12,500 – £32,000
                    </div>
                    <span class="text-xs text-black/50">Total program fee (most UK taught Master's are 1 year)</span>
                </div>

                <p class="mt-4 text-sm leading-6 text-black/60">
                    Since the UK offers 1-year Master’s courses, international students save an entire year of living expenses and enter the global workforce one year earlier.
                </p>

                <div class="mt-6 border-t border-brand-100 pt-4">
                    <span class="text-xs font-semibold text-brand-600">
                        POSTGRADUATE (1–2 YEARS)
                    </span>
                </div>
            </article>
        </div>

        {{-- Monthly Living Expenses --}}
        <div class="mt-16">
            <div class="mb-8">
                <h3 class="text-xl sm:text-2xl font-bold text-black">
                    Monthly Living Costs Breakdown
                </h3>
                <p class="mt-1.5 text-sm text-black/60">
                    Official UK Visas and Immigration (UKVI) monthly maintenance thresholds and realistic student budgets.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                {{-- London / Metro Area --}}
                <div class="rounded-2xl border border-brand-100 bg-brand-25 p-4 sm:p-5 md:p-7 shadow-sm" data-reveal>
                    <div class="flex items-center justify-between border-b border-brand-200/60 pb-4">
                        <div>
                            <span class="text-[10px] font-semibold uppercase tracking-wider text-brand-600">METROPOLITAN AREA</span>
                            <h4 class="mt-0.5 text-lg sm:text-xl font-bold text-black">Inside London</h4>
                        </div>
                        <div class="text-right">
                            <span class="text-lg sm:text-xl font-extrabold text-black">£1,334 – £1,500</span>
                            <span class="block text-xs text-black/50">Per month</span>
                        </div>
                    </div>

                    <ul class="mt-5 space-y-3 text-xs sm:text-sm text-black/70">
                        <li class="flex items-center justify-between">
                            <span class="text-[10px] sm:text-sm">Accommodation (Student Hall / Shared Flat)</span>
                            <span class="font-semibold text-black">£750 – £950 /mo</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-[10px] sm:text-sm">Food & Groceries</span>
                            <span class="font-semibold text-black">£200 – £280 /mo</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-[10px] sm:text-sm">Public Transport (Student Oyster Discount)</span>
                            <span class="font-semibold text-black">£100 – £150 /mo</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-[10px] sm:text-sm">Mobile, Utilities & Personal Leisure</span>
                            <span class="font-semibold text-black">£120 – £180 /mo</span>
                        </li>
                    </ul>
                </div>

                {{-- Outside London / Regional Cities --}}
                <div class="rounded-2xl border border-brand-100 bg-brand-25 p-4 sm:p-5 md:p-7 shadow-sm" data-reveal style="--reveal-delay: 100ms">
                    <div class="flex items-center justify-between border-b border-brand-200/60 pb-4">
                        <div>
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-accent-green">AFFORDABLE REGIONS</span>
                            <h4 class="mt-0.5 text-lg sm:text-xl font-bold text-black">Outside London</h4>
                        </div>
                        <div class="text-right">
                            <span class="text-lg sm:text-xl font-extrabold text-black">£1,023 – £1,200</span>
                            <span class="block text-xs text-black/50">Per month</span>
                        </div>
                    </div>

                    <ul class="mt-5 space-y-3 text-sm text-black/70">
                        <li class="flex items-center justify-between">
                            <span class="text-[10px] sm:text-sm">Accommodation (Student Hall / Private Rental)</span>
                            <span class="font-semibold text-black">£450 – £650 /mo</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-[10px] sm:text-sm">Food & Groceries</span>
                            <span class="font-semibold text-black">£160 – £220 /mo</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-[10px] sm:text-sm">Local Transport / Walking</span>
                            <span class="font-semibold text-black">£50 – £80 /mo</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-[10px] sm:text-sm">Mobile, Utilities & Personal Leisure</span>
                            <span class="font-semibold text-black">£100 – £150 /mo</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- =====================================================
             SCHOLARSHIPS SUBSECTION
        ====================================================== --}}
        <div id="scholarships" class="scroll-mt-24 mt-20 lg:mt-24">
            {{-- Featured Scholarship Hero Banner --}}
            <div class="relative overflow-hidden rounded-2xl bg-brand-900 p-8 sm:p-12 text-white" data-reveal>
                <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full bg-brand-800/40 blur-3xl"></div>

                <div class="relative grid items-center gap-6 sm:gap-8 lg:grid-cols-12 lg:gap-12">
    <!-- Left Content -->
    <div class="lg:col-span-8">
        <span class="inline-flex rounded-full bg-success-50 px-3 py-1.5 text-[10px] sm:text-[11px] text-center font-bold uppercase tracking-wider text-success-500">
            FEATURED FUNDING OPPORTUNITY
        </span>

        <div class="mt-4 sm:mt-5 flex items-start sm:items-center gap-3 sm:gap-4">
            <div class="flex h-10 w-10 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-xl bg-white/10 text-brand-300 border border-white/10">
                <iconify-icon icon="lucide:trophy" class="text-xl sm:text-2xl"></iconify-icon>
            </div>
            <div>
                <h3 class="text-xl sm:text-2xl font-bold text-white leading-snug">
                    GREAT Scholarships & Vice-Chancellor Awards
                </h3>
                <p class="mt-1 text-xs text-brand-200">
                    British Council & Partner Universities in {{ $destName }}
                </p>
            </div>
        </div>

        <p class="mt-4 sm:mt-5 text-sm leading-6 sm:leading-7 text-brand-100/80">
            Available for eligible international applicants across undergraduate and postgraduate master’s programs for the upcoming academic intake. Awards range from £10,000 partial fee waivers to full tuition sponsorships.
        </p>

        <div class="mt-6 sm:mt-8 flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-3 sm:gap-4">
            <a href="#contact"
               class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand-500 px-5 py-3.5 sm:px-6 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600">
                <span>Check Scholarship Eligibility</span>
                <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>
            </a>
            <a href="#contact"
               class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/10 px-5 py-3.5 sm:px-6 text-sm font-semibold text-white transition hover:bg-white/15">
                <span>Talk to Scholarship Advisor</span>
                <iconify-icon icon="lucide:headset" class="text-base"></iconify-icon>
            </a>
        </div>
    </div>

    <!-- Right Card -->
    <div class="lg:col-span-4 rounded-xl border border-white/10 bg-white/5 p-5 sm:p-6 backdrop-blur-sm text-center">
        <span class="text-[11px] sm:text-xs uppercase tracking-wider text-brand-200">
            Scholarship Value
        </span>
        <div class="mt-2 text-3xl sm:text-4xl font-extrabold text-white">
            Up to £10,000
        </div>
        <p class="mt-2 sm:mt-3 text-xs leading-5 text-brand-100/70">
            Direct tuition waiver applied to your CAS fee balance upon admission confirmation.
        </p>
    </div>
</div>
            </div>

            {{-- 3 Scholarship Cards Grid --}}
            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($scholarships as $scholarship)
                    <article class="group flex h-full flex-col rounded-2xl border border-brand-100 bg-white p-6 shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:p-7"
                             data-reveal style="--reveal-delay: {{ $loop->index * 80 }}ms">
                        <div class="flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-500 group-hover:text-white">
                                <iconify-icon icon="{{ $scholarship['icon'] }}" class="text-2xl"></iconify-icon>
                            </div>
                            <span class="rounded-lg border border-brand-100 bg-brand-50 px-2.5 py-1 text-[11px] font-semibold text-brand-700">
                                {{ $scholarship['category'] }}
                            </span>
                        </div>

                        <h4 class="mt-5 text-lg font-bold text-black transition-colors group-hover:text-brand-600">
                            {{ $scholarship['name'] }}
                        </h4>

                        <p class="mt-2 flex-1 text-sm leading-6 text-black/60">
                            {{ $scholarship['description'] }}
                        </p>

                        <div class="mt-6 border-t border-brand-100 pt-4">
                            <span class="text-[11px] uppercase tracking-wider text-black/50">Grant Coverage</span>
                            <p class="mt-0.5 text-base font-bold text-accent-green">
                                {{ $scholarship['benefits'] }}
                            </p>
                            <p class="mt-1 text-xs text-brand-600 font-medium">
                                Level: {{ $scholarship['level'] }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
