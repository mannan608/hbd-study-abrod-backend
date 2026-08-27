<section class="relative isolate w-full min-h-[84vh] overflow-hidden bg-brand-950">

    {{-- =========================================================
        Background
    ========================================================== --}}
    <div class="absolute inset-0 -z-20">

        <img
            src="{{ asset('frontend-img/hero/hero-campus.jpg') }}"
            alt="International students studying in Australia"
            width="1920"
            height="1080"
            class="absolute inset-0 h-full w-full object-cover scale-105 transition-transform duration-[8000ms] ease-out"
        >

        {{-- Your existing surface overlay --}}
        <div class="absolute inset-0 surface-hero"></div>

        {{-- Extra subtle dark layer for readability --}}
        <div class="absolute inset-0 bg-brand-950/20"></div>

    </div>


    {{-- =========================================================
        Main Content
    ========================================================== --}}
    <div class="relative z-10 mx-auto w-full max-w-7xl px-5 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24">

        <div class="grid items-center gap-14 lg:grid-cols-[1.15fr_0.85fr] lg:gap-16">


            {{-- =================================================
                LEFT CONTENT
            ================================================== --}}
            <div class="max-w-3xl text-center lg:text-left">


                {{-- Eyebrow --}}
                <div
                    class="fade-down mb-7 inline-flex items-center gap-3 rounded-full border border-white/20 bg-white/10 px-4 py-2.5 backdrop-blur-md sm:mb-9"
                >
                    <span class="relative flex h-2 w-2">
                        <span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-brand-400 opacity-75">
                        </span>

                        <span
                            class="relative inline-flex h-2 w-2 rounded-full bg-brand-400">
                        </span>
                    </span>

                    <span class="text-[11px] font-medium uppercase tracking-[0.16em] text-white/75 sm:text-xs">
                        Study in Australia
                    </span>

                    <span class="hidden h-3 w-px bg-white/20 sm:block"></span>

                    <span class="hidden text-xs text-white/55 sm:block">
                        Guest browsing open
                    </span>
                </div>


                {{-- Heading --}}
                <h1
                    class="fade-up delay-100 text-4xl font-semibold leading-[1.05] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-[4.25rem] xl:text-[4.6rem]"
                >
                    Every course.
                    <br>

                    Every campus.
                    <br>

                    <span class="font-normal italic text-brand-300">
                        One counsellor
                    </span>

                    <span class="font-semibold">
                        who knows the way.
                    </span>
                </h1>


                {{-- Description --}}
                <p
                    class="fade-up delay-200 mx-auto mt-6 max-w-2xl text-sm leading-7 text-white/70 sm:text-base md:text-lg lg:mx-0 lg:leading-8"
                >
                    Compare tuition, English scores, intakes and scholarships
                    across 620+ Australian institutions — then talk it through
                    with a verified expert, free.
                </p>


                {{-- =================================================
                    SEARCH BOX
                ================================================== --}}
                <div
                    class="fade-up delay-300 mx-auto mt-8 max-w-2xl lg:mx-0"
                >

                    <div
                        class="group flex flex-col gap-2 rounded-xl border border-white/20 bg-white/[0.08] p-1.5 shadow-2xl backdrop-blur-xl transition-all duration-300 focus-within:border-brand-300/50 focus-within:bg-white/[0.12] focus-within:shadow-brand-500/10 sm:flex-row sm:items-center"
                    >

                        {{-- Search icon --}}
                        <div class="relative flex min-w-0 flex-1 items-center">

                            <svg
                                class="ml-3 h-5 w-5 shrink-0 text-white/45 transition-colors duration-300 group-focus-within:text-brand-300"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                                />
                            </svg>


                            <input
                                type="text"
                                placeholder="Course, subject or city — e.g. Master of IT, Melbourne"
                                class="h-12 w-full min-w-0 border-0 bg-transparent px-3 text-sm text-white outline-none placeholder:text-white/40 focus:ring-0 sm:h-12"
                            >

                        </div>


                        {{-- Search button --}}
                        <button
                            type="button"
                            class="inline-flex h-12 shrink-0 items-center justify-center gap-2 rounded-lg bg-brand-400 px-6 text-sm font-bold text-brand-950 shadow-lg transition-all duration-300 hover:bg-brand-300 hover:shadow-brand-400/30 active:scale-[0.98]"
                        >

                            <svg
                                class="h-4 w-4 transition-transform duration-300 group-hover:rotate-12"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M12 3v2m0 14v2M3 12h2m14 0h2M5.64 5.64l1.42 1.42m9.9 9.9 1.42 1.42m0-12.74-1.42 1.42m-9.9 9.9-1.42 1.42M12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
                                />
                            </svg>

                            <span>
                                Search
                            </span>

                        </button>

                    </div>


                    {{-- Popular searches --}}
                    <div
                        class="mt-4 flex flex-wrap items-center justify-center gap-2 lg:justify-start"
                    >

                        <span class="mr-1 text-xs text-white/40">
                            Popular:
                        </span>

                        @foreach(['Nursing', 'Master of IT', 'MBA', 'Cyber Security', 'Foundation'] as $search)
                            <button
                                type="button"
                                class="rounded-full border border-white/15 bg-white/[0.04] px-3 py-1.5 text-xs font-medium text-white/65 backdrop-blur-sm transition-all duration-300 hover:border-brand-300/40 hover:bg-brand-400/10 hover:text-brand-200"
                            >
                                {{ $search }}
                            </button>
                        @endforeach

                    </div>

                </div>


                {{-- =================================================
                    TRUST / INFO
                ================================================== --}}
                <div
                    class="fade-up delay-400 mt-8 flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-xs text-white/50 lg:justify-start"
                >

                    <div class="flex items-center gap-2">

                        <svg
                            class="h-4 w-4 text-brand-300"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                            />
                        </svg>

                        <span>
                            Verified counsellors
                        </span>

                    </div>


                    <div class="hidden h-3 w-px bg-white/15 sm:block"></div>


                    <div class="flex items-center gap-2">

                        <svg
                            class="h-4 w-4 text-brand-300"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 6v6l4 2m5-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                            />
                        </svg>

                        <span>
                            Free guidance
                        </span>

                    </div>


                    <div class="hidden h-3 w-px bg-white/15 sm:block"></div>


                    <div class="flex items-center gap-2">

                        <span class="font-semibold text-white/70">
                            620+
                        </span>

                        <span>
                            institutions
                        </span>

                    </div>

                </div>

            </div>



            {{-- =================================================
                RIGHT VISUAL
            ================================================== --}}
            <div
                class="relative mx-auto hidden w-full max-w-md lg:block"
            >

                {{-- Decorative glow --}}
                <div
                    class="absolute -right-10 -top-10 h-64 w-64 rounded-full bg-brand-400/20 blur-3xl"
                ></div>


                {{-- Decorative circle --}}
                <div
                    class="absolute -right-6 top-8 h-64 w-64 rounded-full border border-white/10"
                ></div>

                <div
                    class="absolute -right-2 top-12 h-52 w-52 rounded-full border border-brand-300/10"
                ></div>


                {{-- Student image --}}
                <div class="relative z-10">

                    <img
                        src="{{ asset('frontend-img/hero/student.png') }}"
                        alt="International student studying"
                        class="relative mx-auto w-full max-w-[430px] drop-shadow-[0_35px_55px_rgba(0,0,0,0.55)]"
                    >

                </div>


                {{-- Floating information card --}}
                <div
                    class="absolute -bottom-3 -left-8 z-20 w-52 rounded-xl border border-white/20 bg-brand-400 p-5 text-brand-950 shadow-2xl shadow-black/30 backdrop-blur-md"
                >

                    <p
                        class="text-[10px] font-semibold uppercase tracking-[0.16em] text-brand-950/60"
                    >
                        Avg. reply time
                    </p>

                    <p
                        class="mt-1 font-serif text-4xl leading-none"
                    >
                        4 hrs
                    </p>

                    <p
                        class="mt-2 text-xs leading-5 text-brand-950/70"
                    >
                        From a verified counsellor, with no consultation fee.
                    </p>

                </div>


                {{-- Small floating badge --}}
                <div
                    class="absolute -right-4 top-24 z-20 rounded-lg border border-white/15 bg-brand-950/70 px-4 py-3 shadow-xl backdrop-blur-xl"
                >

                    <div class="flex items-center gap-2">

                        <span class="flex h-7 w-7 items-center justify-center rounded-full bg-brand-400/15">

                            <svg
                                class="h-4 w-4 text-brand-300"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M12 3 4 7v5c0 5 3.5 8.5 8 9 4.5-.5 8-4 8-9V7l-8-4Z"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="m9 12 2 2 4-4"
                                />
                            </svg>

                        </span>

                        <div>

                            <p class="text-[10px] uppercase tracking-wider text-white/40">
                                Guidance
                            </p>

                            <p class="text-xs font-semibold text-white">
                                Verified experts
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Bottom fade --}}
    <div
        class="absolute inset-x-0 bottom-0 z-10 h-24 bg-gradient-to-t from-brand-950/40 to-transparent pointer-events-none"
    ></div>

</section>