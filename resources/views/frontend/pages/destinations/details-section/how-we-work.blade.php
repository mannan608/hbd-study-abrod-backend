@props([
    'destination' => [],
])

@php
    $destName = $destination['name'] ?? 'the United Kingdom';

    $steps = [
        [
            'step' => '01',
            'icon' => 'lucide:user-check',
            'title' => 'Profile Assessment & Course Matching',
            'description' => 'Our British Council accredited counsellors review your academic transcripts, budget, and career goals to select optimal universities and programs.',
            'checklist' => ['Academic evaluation', 'Budget & location preference', 'Course compatibility check'],
        ],
        [
            'step' => '02',
            'icon' => 'lucide:languages',
            'title' => 'Language Preparation & Testing',
            'description' => 'Get targeted training for IELTS, PTE, or explore universities with MOI (Medium of Instruction) English test waiver eligibility.',
            'checklist' => ['Diagnostic mock tests', 'Score enhancement guidance', 'Test center booking support'],
        ],
        [
            'step' => '03',
            'icon' => 'lucide:file-text',
            'title' => 'Application Submission & SOP Review',
            'description' => 'We polish your Statement of Purpose (SOP), verify all academic documents, and submit direct applications through our official university portal.',
            'checklist' => ['Professional SOP editing', 'Recommendation verification', 'Fast-track direct submission'],
        ],
        [
            'step' => '04',
            'icon' => 'lucide:mail-check',
            'title' => 'Offer Letters & Scholarship Search',
            'description' => 'Receive your conditional and unconditional offer letters, compare scholarship offers, and confirm your seat with initial deposit guidance.',
            'checklist' => ['Offer comparison review', 'Scholarship applications', 'CAS / Confirmation issuance'],
        ],
        [
            'step' => '05',
            'icon' => 'lucide:shield-check',
            'title' => 'Financial Evidence & Visa Filing',
            'description' => 'Our visa experts prepare your 28-day holding bank statements, schedule biometric appointments, and conduct mock visa interview sessions.',
            'checklist' => ['Bank solvency auditing', 'VFS appointment scheduling', 'Mock visa interview practice'],
        ],
        [
            'step' => '06',
            'icon' => 'lucide:plane-takeoff',
            'title' => 'Pre-Departure & Airport Welcome',
            'description' => 'Attend our detailed pre-departure orientation, receive guidance on student accommodation booking, foreign exchange, and airport arrival.',
            'checklist' => ['Accommodation assistance', 'SIM card & forex setup', 'Alumni community network'],
        ],
    ];
@endphp

<section id="process" data-section class="relative overflow-hidden bg-brand-25 py-16 sm:py-20 lg:py-24">
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <x-destination-section-heading
            align="center"
            eyebrow="STEP-BY-STEP ADMISSION PROCESS"
            :title="'How We Guide You to <span class=\'text-brand-500\'>Success</span>'"
            description="Our structured 6-step application methodology guarantees transparent, stress-free admissions and exceptional visa approval rates."
        />

        {{-- 6 Step Cards Grid --}}
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($steps as $step)
                <article class="group relative flex h-full flex-col rounded-2xl border border-brand-100 bg-white p-6 shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:p-7"
                         data-reveal style="--reveal-delay: {{ ($loop->index % 3) * 80 }}ms">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-500 group-hover:text-white">
                            <iconify-icon icon="{{ $step['icon'] }}" class="text-2xl"></iconify-icon>
                        </div>
                        <span class="text-3xl font-extrabold text-brand-100 transition-colors group-hover:text-brand-200">
                            {{ $step['step'] }}
                        </span>
                    </div>

                    <h3 class="mt-6 text-lg font-bold text-black transition-colors group-hover:text-brand-600">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-2.5 flex-1 text-sm leading-6 text-black/60">
                        {{ $step['description'] }}
                    </p>

                    <ul class="mt-6 space-y-2 border-t border-brand-100 pt-4">
                        @foreach ($step['checklist'] as $item)
                            <li class="flex items-center gap-2 text-xs font-medium text-black/70">
                                <span class="flex h-3.5 w-3.5 shrink-0 items-center justify-center rounded-full bg-accent-green-light text-accent-green">
                                    <iconify-icon icon="lucide:check" class="text-[9px]"></iconify-icon>
                                </span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>

        {{-- Process Consultation CTA --}}
        <div class="mt-14 rounded-2xl border border-brand-100 bg-white p-8 text-center shadow-sm" data-reveal>
            <div class="mx-auto max-w-2xl">
                <h4 class="text-xl font-bold text-black sm:text-2xl">
                    Ready to Begin Your Admission Application?
                </h4>
                <p class="mt-2 text-sm leading-6 text-black/60">
                    Schedule a free, confidential one-on-one consultation with our senior counsellors today.
                </p>
                <div class="mt-6 flex flex-wrap justify-center gap-4">
                    <a href="#contact"
                       class="inline-flex items-center gap-2 rounded-xl bg-brand-500 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600">
                        <span>Book Free Consultation</span>
                        <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>
                    </a>
                    <a href="tel:+8801700000000"
                       class="inline-flex items-center gap-2 rounded-xl border border-brand-200 bg-brand-50 px-6 py-3.5 text-sm font-semibold text-brand-700 transition-all duration-300 hover:bg-brand-100">
                        <iconify-icon icon="lucide:phone" class="text-base"></iconify-icon>
                        <span>Call +880 1700-000000</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
