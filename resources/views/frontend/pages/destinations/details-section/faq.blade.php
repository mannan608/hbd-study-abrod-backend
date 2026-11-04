@props([
    'destination' => [],
])

@php
    $destName = $destination['name'] ?? 'the United Kingdom';

    $faqs = [
        [
            'question' => 'Can I study in ' . $destName . ' without IELTS?',
            'answer' => 'Yes, many reputable universities accept alternative English qualifications such as PTE Academic, Duolingo, or Oxford ELLT. Furthermore, graduates from recognized universities with an English Medium of Instruction (MOI) or high marks in HSC English (A/A+) may be eligible for direct English test waivers.',
        ],
        [
            'question' => 'How long can I work after completing my graduation?',
            'answer' => 'Under the Post-Study Graduate Route, international graduates of Bachelor’s and Master’s degrees can stay and work full-time in the UK for up to 2 years (3 years for PhD holders). There is no minimum salary restriction or employer sponsorship requirement to qualify for this post-study visa.',
        ],
        [
            'question' => 'Can international students work part-time while studying?',
            'answer' => 'Yes, international students holding a valid Student Visa are legally entitled to work up to 20 hours per week during academic term times and full-time (up to 40 hours per week) during official university vacation periods and bank holidays.',
        ],
        [
            'question' => 'What are the main university academic intakes?',
            'answer' => 'The largest academic intake is the Autumn (September/October) intake offering the broadest choice of courses and scholarships. The second major intake is the Spring (January/February) intake. Some institutions also provide Summer (May/June) pathway and pre-sessional intakes.',
        ],
        [
            'question' => 'What is a CAS letter and when do I receive it?',
            'answer' => 'A Confirmation of Acceptance for Studies (CAS) is an official 14-digit electronic reference number issued by the university sponsor. It is generated once you satisfy all academic conditions, pass any pre-CAS interview, and pay the mandatory tuition fee deposit.',
        ],
        [
            'question' => 'How much bank solvency funds do I need to show for the visa?',
            'answer' => 'You must show evidence of remaining first-year tuition fees plus living maintenance expenses (£1,334/month for London or £1,023/month outside London for up to 9 months). These funds must be held continuously in an acceptable bank account for a minimum of 28 consecutive days before applying.',
        ],
    ];
@endphp

<section id="faq" data-section class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24">
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
      <x-destination-section-heading
    eyebrow="FREQUENTLY ASKED QUESTIONS"
    :title="'Questions About Studying in <span class=\'text-brand-500\'>' . e($destName) . '</span>'"
    :description="'Find direct, verified answers to common questions regarding admissions, tests, visa rules, and living in ' . $destName . '.'"
/>


        <div class="mt-12 grid grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-10">
            {{-- Left column: Accordion List --}}
            <div class="lg:col-span-8 space-y-4">
                @foreach ($faqs as $index => $faq)
                    <article class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-200 hover:border-brand-200"
                             x-data="{ open: {{ $index === 0 ? 'true' : 'false' }} }"
                             data-reveal style="--reveal-delay: {{ $index * 60 }}ms">
                        <button type="button"
                                @click="open = !open"
                                class="flex w-full items-center justify-between gap-5 p-5 text-left sm:p-6 transition hover:bg-brand-25/50">
                            <span class="text-base font-bold text-black" :class="open ? 'text-brand-600' : 'text-black'">
                                {{ $faq['question'] }}
                            </span>
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl border border-brand-100 transition-colors"
                                  :class="open ? 'bg-brand-500 text-white border-brand-500' : 'bg-brand-50 text-brand-600'">
                                <iconify-icon :icon="open ? 'lucide:minus' : 'lucide:plus'" class="text-lg"></iconify-icon>
                            </span>
                        </button>
                        <div x-show="open" x-collapse x-cloak>
                            <div class="border-t border-brand-100/70 bg-brand-25/30 px-5 pb-6 pt-4 text-sm leading-7 text-black/70 sm:px-6">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Right column: Help desk sidebar --}}
            <div class="lg:col-span-4" id="contact">
                <div class="lg:sticky lg:top-36 space-y-5">
                    {{-- Questions Card --}}
                    <div class="rounded-2xl border border-brand-100 bg-white p-6 shadow-theme-md sm:p-7" data-reveal>
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600">
                            <iconify-icon icon="lucide:messages-square" class="text-2xl"></iconify-icon>
                        </div>

                        <h3 class="mt-5 text-xl font-bold text-black">
                            Have More Questions?
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-black/60">
                            Our admissions specialists are available to review your academic transcripts and provide free, personalized advice.
                        </p>

                        <a href="mailto:info@hbdservices.com"
                           class="group mt-6 flex items-center justify-between rounded-xl border border-brand-100 bg-brand-50 p-3.5 transition-all duration-300 hover:border-brand-200 hover:bg-brand-100">
                            <div class="flex items-center gap-3">
                                <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-white text-brand-600 shadow-sm border border-brand-100">
                                    <iconify-icon icon="lucide:mail" class="text-lg"></iconify-icon>
                                </span>
                                <div>
                                    <span class="block text-[10px] font-bold uppercase tracking-wider text-black/50">
                                        Email Admissions
                                    </span>
                                    <span class="block text-sm font-semibold text-black">
                                        info@hbdservices.com
                                    </span>
                                </div>
                            </div>
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-brand-600 shadow-sm transition group-hover:translate-x-0.5">
                                <iconify-icon icon="lucide:arrow-up-right" class="text-sm"></iconify-icon>
                            </span>
                        </a>
                    </div>

                    {{-- Urgent Consultation Card --}}
                    <div class="rounded-2xl bg-brand-900 p-6 text-white shadow-theme-md" data-reveal style="--reveal-delay: 100ms">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10 text-brand-300 border border-white/10">
                                <iconify-icon icon="lucide:headset" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-white">Need Personal Guidance?</h4>
                                <p class="text-xs text-brand-200">Talk to a senior counsellor today.</p>
                            </div>
                        </div>

                        <p class="mt-4 text-xs leading-5 text-brand-100/75">
                            Get complete end-to-end support for university selection, SOP writing, documentation, and visa filing.
                        </p>

                        <a href="#contact"
                           class="mt-5 flex w-full items-center justify-center gap-2 rounded-xl bg-brand-500 px-4 py-3 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:bg-brand-600">
                            <span>Book Consultation</span>
                            <iconify-icon icon="lucide:arrow-right" class="text-sm"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
