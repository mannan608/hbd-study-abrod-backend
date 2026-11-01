
{{-- resources/views/components/certifications.blade.php --}}

@props([
    'badge' => 'Accreditation & Excellence',
    'title' => 'Our Certifications',
    'titleHighlight' => 'And Awards',
    'description' => 'Recognized by leading global authorities for premium quality education and standards.',
    'certifications' => [],
])

@php
    // Default data
    $defaultCertifications = [
        [
            'id' => 1,
            'logoText' => 'ICEF',
            'subtitle' => 'ICEF Accredited Institution',
            'description' => 'Our institution meets internationally recognized quality standards, demonstrating our commitment to excellence in global education and student services.',
            'verifyUrl' => 'https://www.icef.com',
            'badgeNumber' => 'ICEF-123456',
            'badgeLabel' => 'ICEF Accredited',
            'status' => 'Verified Active Credential',
            'footerLabel' => 'Trusted Agency Status',
        ],
    ];

    $certifications = !empty($certifications)
        ? $certifications
        : $defaultCertifications;
@endphp

<section
    id="certifications"
    class="relative overflow-hidden bg-slate-50/50 py-20 dark:bg-slate-950 lg:py-28"
    x-data="{
        headerVisible: false,
        contentVisible: false,

        init() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (entry.target === this.$refs.header) {
                            this.headerVisible = true;
                        }

                        if (entry.target === this.$refs.content) {
                            this.contentVisible = true;
                        }

                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15
            });

            observer.observe(this.$refs.header);
            observer.observe(this.$refs.content);
        }
    }"
>
    {{-- Ambient Background Glows --}}
    <div class="pointer-events-none absolute left-10 top-1/3 h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl"></div>

    <div class="pointer-events-none absolute bottom-10 right-10 h-96 w-96 rounded-full bg-blue-600/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div
            x-ref="header"
            :class="headerVisible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-8 opacity-0'"
            class="mx-auto max-w-2xl pb-16 text-center transition-all duration-700"
        >

            {{-- Badge --}}
            <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-cyan-200/60 bg-cyan-500/10 px-4 py-1.5 shadow-sm backdrop-blur-md dark:border-cyan-800/60">

                <iconify-icon
                    icon="lucide:sparkles"
                    class="text-base text-cyan-600 dark:text-cyan-400"
                ></iconify-icon>

                <span class="text-xs font-bold uppercase tracking-widest text-cyan-600 dark:text-cyan-400">
                    {{ $badge }}
                </span>

            </div>

            {{-- Title --}}
            <h2 class="text-3xl font-extrabold uppercase tracking-tight text-slate-900 sm:text-4xl lg:text-5xl dark:text-white">

                {{ $title }}

                <span class="text-brand-600">
                    {{ $titleHighlight }}
                </span>

            </h2>

            {{-- Description --}}
            <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-neutral-400">
                {{ $description }}
            </p>

        </div>

        {{-- Certifications Content --}}
        <div
            x-ref="content"
            :class="contentVisible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-10 opacity-0'"
            class="mx-auto max-w-5xl transition-all delay-100 duration-700"
        >

            <div class="space-y-8">

                @forelse ($certifications as $cert)

                    <article
                        wire:key="certification-{{ $cert['id'] ?? $loop->index }}"
                        class="group relative overflow-hidden rounded-3xl border border-slate-200/80 bg-gradient-to-br from-slate-900 via-slate-900 to-cyan-950 p-6 shadow-2xl transition-all duration-500 hover:-translate-y-1 hover:shadow-cyan-950/20 sm:p-10 lg:p-12 dark:border-neutral-800"
                    >

                        {{-- Abstract Background Lighting --}}
                        <div class="pointer-events-none absolute -right-24 -top-24 h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl transition-all duration-700 group-hover:bg-cyan-500/20"></div>

                        <div class="relative grid grid-cols-1 items-center gap-10 lg:grid-cols-12">

                            {{-- Left Side: Accreditation Details --}}
                            <div class="flex flex-col justify-between lg:col-span-7">

                                <div>

                                    {{-- Brand Identifier --}}
                                    <div class="flex items-center gap-3">

                                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-cyan-500/30 bg-cyan-500/20 text-cyan-400">

                                            <iconify-icon
                                                icon="lucide:award"
                                                class="text-2xl"
                                            ></iconify-icon>

                                        </span>

                                        <span class="text-xl font-extrabold uppercase tracking-widest text-cyan-400 sm:text-2xl">
                                            {{ $cert['logoText'] ?? 'Certification' }}
                                        </span>

                                    </div>

                                    {{-- Main Title --}}
                                    <h3 class="mt-6 text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
                                        {{ $cert['subtitle'] ?? '' }}
                                    </h3>

                                    {{-- Description --}}
                                    <p class="mt-3 max-w-lg text-base leading-relaxed text-slate-300">
                                        {{ $cert['description'] ?? '' }}
                                    </p>

                                </div>

                                {{-- Footer Link & Verification --}}
                                <div class="mt-8 flex flex-col items-start gap-5 sm:flex-row sm:flex-wrap sm:items-center">

                                    {{-- Verification Link --}}
                                    @if (!empty($cert['verifyUrl']))

                                        <a
                                            href="{{ $cert['verifyUrl'] }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="group/link inline-flex max-w-full items-center gap-2 rounded-xl bg-cyan-500 px-5 py-3.5 text-sm font-semibold text-slate-950 shadow-lg shadow-cyan-500/25 transition-all duration-300 hover:-translate-y-0.5 hover:bg-cyan-400 hover:shadow-cyan-400/40 sm:px-6"
                                        >

                                            <span class="truncate">
                                                {{ $cert['verifyText'] ?? 'Verify at ' . preg_replace('/^https?:\/\//', '', $cert['verifyUrl']) }}
                                            </span>

                                            <iconify-icon
                                                icon="lucide:external-link"
                                                class="shrink-0 text-lg transition-transform duration-300 group-hover/link:translate-x-0.5"
                                            ></iconify-icon>

                                        </a>

                                    @endif

                                    {{-- Verified Status --}}
                                    <div class="flex items-center gap-2 text-xs font-semibold text-slate-400">

                                        <iconify-icon
                                            icon="lucide:check-circle"
                                            class="shrink-0 text-lg text-emerald-400"
                                        ></iconify-icon>

                                        <span>
                                            {{ $cert['status'] ?? 'Verified Credential' }}
                                        </span>

                                    </div>

                                </div>

                            </div>

                            {{-- Right Side: Accreditation Badge --}}
                            <div class="flex justify-center lg:col-span-5 lg:justify-end">

                                <div class="relative flex w-full max-w-xs flex-col items-center justify-center  text-center shadow-inner backdrop-blur-md transition-transform duration-500 group-hover:scale-105">

                                    {{-- Accreditation Seal --}}
                                
                                       <img src="{{ asset('frontend-img/icef-qr.png') }}" alt="">

                                </div>

                            </div>

                        </div>

                    </article>

                @empty

                    <div class="rounded-2xl border border-dashed border-slate-300 p-10 text-center dark:border-slate-700">

                        <iconify-icon
                            icon="lucide:award"
                            class="text-4xl text-slate-400"
                        ></iconify-icon>

                        <p class="mt-3 text-sm text-slate-500 dark:text-slate-400">
                            No certifications available at the moment.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

    </div>

</section>
