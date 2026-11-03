@props([
    'eyebrow' => 'DESTINATION OVERVIEW',
    'title' => 'Study in Australia',
    'description' =>
        'Australia is a leading destination for international education, known for its world-class universities, globally recognised qualifications, and career-focused learning opportunities. From innovative academic programs to practical vocational training, Australian institutions offer diverse pathways to help students achieve their educational and professional goals.',
    'secondaryDescription' =>
        'Beyond the classroom, students can experience a multicultural society, modern cities, beautiful natural landscapes, and a welcoming lifestyle. Whether pursuing higher education, vocational training, or English language studies, Australia offers an enriching environment to learn, grow, and build a brighter global future.',
])

<section class="relative overflow-hidden bg-gradient-to-b from-slate-50/50 via-white to-white py-16 sm:py-24">

    {{-- Background Decorative Glows --}}
    <div class="pointer-events-none absolute -right-32 -top-32 h-[500px] w-[500px] rounded-full bg-brand-100/40 blur-[120px]"></div>
    <div class="pointer-events-none absolute -bottom-32 -left-32 h-[500px] w-[500px] rounded-full bg-sky-100/40 blur-[120px]"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid items-center gap-12 lg:grid-cols-12 lg:gap-16">

            {{-- LEFT: OVERVIEW CONTENT --}}
            <div class="lg:col-span-7">

                {{-- Eyebrow --}}
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

                {{-- @if ($secondaryDescription)
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg sm:leading-8">
                        {{ $secondaryDescription }}
                    </p>
                @endif --}}

                {{-- CTA Actions --}}
                <div class="mt-10 flex flex-wrap items-center gap-4">
                    <a href="#study-options"
                        class="inline-flex items-center gap-3 rounded-xl bg-brand-600 px-6.5 py-4 text-sm font-semibold text-white shadow-xl shadow-brand-600/20 transition-all duration-200 hover:-translate-y-0.5 hover:bg-brand-700 hover:shadow-brand-600/30">
                        Explore Study Options
                        <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>

                    <a href="#contact"
                        class="inline-flex items-center gap-2 rounded-xl border border-slate-200/80 bg-white px-6.5 py-4 text-sm font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-brand-200 hover:bg-slate-50 hover:text-brand-700">
                        Talk to a Counsellor
                    </a>
                </div>

            </div>

            {{-- RIGHT: KEY HIGHLIGHTS GRID --}}
            <div class="relative lg:col-span-5">

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                    {{-- Card 1: World-Class Education --}}
                    <div class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm shadow-slate-200/50 transition-all duration-300 hover:-translate-y-1 hover:border-brand-100 hover:shadow-xl hover:shadow-brand-900/5">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-600 group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-slate-900">World-Class Education</h3>
                        <p class="mt-1.5 text-xs leading-relaxed text-slate-500">Globally recognized degrees and top-tier institutions.</p>
                    </div>

                    {{-- Card 2: Diverse Study Options --}}
                    <div class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm shadow-slate-200/50 transition-all duration-300 hover:-translate-y-1 hover:border-sky-100 hover:shadow-xl hover:shadow-brand-900/5 sm:translate-y-6">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-sky-50 text-sky-600 transition-colors group-hover:bg-sky-600 group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-slate-900">Diverse Study Options</h3>
                        <p class="mt-1.5 text-xs leading-relaxed text-slate-500">Pathways ranging from vocational training to PhDs.</p>
                    </div>

                    {{-- Card 3: Practical Learning --}}
                    <div class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm shadow-slate-200/50 transition-all duration-300 hover:-translate-y-1 hover:border-indigo-100 hover:shadow-xl hover:shadow-brand-900/5">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600 transition-colors group-hover:bg-indigo-600 group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.222-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-slate-900">Practical Learning</h3>
                        <p class="mt-1.5 text-xs leading-relaxed text-slate-500">Career-focused curriculums with real-world exposure.</p>
                    </div>

                    {{-- Card 4: Multicultural Lifestyle --}}
                    <div class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm shadow-slate-200/50 transition-all duration-300 hover:-translate-y-1 hover:border-emerald-100 hover:shadow-xl hover:shadow-brand-900/5 sm:translate-y-6">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 transition-colors group-hover:bg-emerald-600 group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-slate-900">Multicultural Lifestyle</h3>
                        <p class="mt-1.5 text-xs leading-relaxed text-slate-500">Safe, welcoming communities in vibrant modern cities.</p>
                    </div>

                </div>

                {{-- Decorative Info Banner --}}
                <div class="mt-8 flex items-center gap-4 rounded-2xl border border-brand-100 bg-gradient-to-r from-brand-50/80 to-sky-50/50 p-4 sm:mt-12">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-brand-600 shadow-sm ring-1 ring-brand-900/5">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-slate-900">Learn. Grow. Explore.</p>
                        <p class="mt-0.5 text-xs text-slate-600">Discover new opportunities and shape your global future.</p>
                    </div>
                </div>

            </div>

        </div>
        <div class="mt-28">

            <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

                <div>

                    <span class="text-xs font-bold tracking-[0.2em] text-[#A3843A]">
                        EXPLORE THE DESTINATION
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold text-[#0B1D36] sm:text-4xl">
                        Popular Student Cities in Australia
                    </h2>

                    <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-500">
                        Discover vibrant cities offering different academic, lifestyle and cultural experiences.
                    </p>

                </div>

                <a href="#contact"
                   class="inline-flex w-fit items-center gap-2 text-sm font-bold text-[#0B1D36] hover:text-[#A3843A]">

                    Find Your City

                    <iconify-icon icon="lucide:arrow-right"></iconify-icon>

                </a>

            </div>


            @php
                $cities = [
                    [
                        'name' => 'Sydney',
                        'location' => 'New South Wales',
                        'image' => 'https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?w=700&q=85',
                        'description' => 'A vibrant harbour city with leading universities, diverse communities and an international lifestyle.',
                    ],
                    [
                        'name' => 'Melbourne',
                        'location' => 'Victoria',
                        'image' => 'https://images.unsplash.com/photo-1514395462725-fb4566210144?w=700&q=85',
                        'description' => 'Known for its cultural atmosphere, arts, sporting events and diverse education opportunities.',
                    ],
                    [
                        'name' => 'Brisbane',
                        'location' => 'Queensland',
                        'image' => 'https://images.unsplash.com/photo-1566552881560-0be862a7c445?w=700&q=85',
                        'description' => 'A sunny riverside city with a relaxed lifestyle and growing education sector.',
                    ],
                    [
                        'name' => 'Perth',
                        'location' => 'Western Australia',
                        'image' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=700&q=85',
                        'description' => 'A coastal city offering beautiful surroundings and a distinctive student experience.',
                    ],
                ];
            @endphp


            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                @foreach($cities as $city)

                    <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                        <div class="relative h-56 overflow-hidden">

                            <img
                                src="{{ $city['image'] }}"
                                alt="{{ $city['name'] }}, Australia"
                                loading="lazy"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110"
                            >

                            <div class="absolute inset-0 bg-gradient-to-t from-[#0B1D36]/80 via-transparent to-transparent"></div>

                            <div class="absolute bottom-5 left-5">

                                <span class="text-xs font-semibold text-white/80">
                                    {{ $city['location'] }}
                                </span>

                                <h3 class="mt-1 text-2xl font-extrabold text-white">
                                    {{ $city['name'] }}
                                </h3>

                            </div>

                        </div>

                        <div class="p-5">

                            <p class="text-xs leading-6 text-slate-500">
                                {{ $city['description'] }}
                            </p>

                            <a href="#contact"
                               class="mt-5 inline-flex items-center gap-2 text-xs font-bold text-[#0B1D36] transition group-hover:text-[#A3843A]">

                                Explore City

                                <iconify-icon icon="lucide:arrow-up-right" class="text-base"></iconify-icon>

                            </a>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </div>
</section>



