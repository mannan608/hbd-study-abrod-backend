@props([
    'destination' => [],
])

@php
    $destName = $destination['name'] ?? 'the United Kingdom';

    $cities = [
        [
            'name' => 'London',
            'location' => 'Greater London, England',
            'image' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?w=700&q=85',
            'description' => 'A global metropolis with 40+ world-class higher education institutions, leading research clusters, and unmatched financial networking.',
        ],
        [
            'name' => 'Manchester',
            'location' => 'North West, England',
            'image' => 'https://images.unsplash.com/photo-1514395462725-fb4566210144?w=700&q=85',
            'description' => 'A thriving industrial and digital hub known for its pioneering student culture, Russell Group universities, and vibrant lifestyle.',
        ],
        [
            'name' => 'Edinburgh',
            'location' => 'Scotland',
            'image' => 'https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?w=700&q=85',
            'description' => 'Scotland’s historic capital offering top-tier research universities, breathtaking architecture, and a globally celebrated arts scene.',
        ],
        [
            'name' => 'Birmingham',
            'location' => 'West Midlands, England',
            'image' => 'https://images.unsplash.com/photo-1566552881560-0be862a7c445?w=700&q=85',
            'description' => 'The UK’s second largest city, home to diverse international student communities, renowned medical schools, and high job growth.',
        ],
    ];
@endphp

<section id="overview" data-section class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24">
    {{-- Soft background ambient glow --}}
    <div class="pointer-events-none absolute -right-32 -top-32 h-80 w-80 rounded-full bg-brand-50/80 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-32 -left-32 h-80 w-80 rounded-full bg-sky-light/60 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Top grid: Overview Left & Highlights Right --}}
        <div class="grid items-center gap-12 lg:grid-cols-12 lg:gap-16">
            {{-- Left column --}}
            <div class="lg:col-span-7" >
                <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-brand-100 bg-brand-50 px-4 py-1.5 text-[12px] font-semibold uppercase tracking-[0.16em] text-brand-600">
                    <span class="h-1.5 w-1.5 rounded-full bg-brand-500"></span>
                    Destination Overview
                </div>

                <h2 class="text-[28px] font-semibold leading-[1.2] tracking-[-0.02em] text-black sm:text-[30px] lg:text-[32px]">
                    Academic Excellence in <span class="text-brand-500">{{ $destName }}</span>
                </h2>

                <p class="mt-5 text-base leading-7 text-black/70 sm:text-lg sm:leading-8">
                    {{ $destName }} represents one of the world's most distinguished higher education systems, celebrated for centuries of academic prestige, high-impact research output, and globally portable credentials. International students enjoy access to modern laboratories, industry placements, and dedicated international career ecosystems.
                </p>

                <p class="mt-4 text-base leading-7 text-black/60">
                    Beyond world-tier classrooms, students discover safe multicultural campuses, diverse communities, rich history, and post-study graduate employment pathways designed to launch competitive global careers.
                </p>

                {{-- Action buttons --}}
                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="#courses"
                       class="inline-flex items-center gap-2 rounded-xl bg-brand-500 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600">
                        <span>Explore Study Options</span>
                        <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>
                    </a>
                    <a href="#contact"
                       class="inline-flex items-center gap-2 rounded-xl border border-brand-200 bg-brand-50 px-6 py-3.5 text-sm font-semibold text-brand-700 transition-all duration-300 hover:bg-brand-100 hover:border-brand-300">
                        <span>Talk to a Counsellor</span>
                        <iconify-icon icon="lucide:headset" class="text-base"></iconify-icon>
                    </a>
                </div>
            </div>

            {{-- Right column: 4 Equal-height Highlight cards --}}
            <div class="lg:col-span-5"  style="--reveal-delay: 150ms">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    {{-- Card 1 --}}
                    <div class="group rounded-2xl border border-brand-100 bg-white p-6 shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">
                            <iconify-icon icon="lucide:award" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-base font-bold text-black group-hover:text-brand-600 transition-colors">World-Class Degrees</h3>
                        <p class="mt-1.5 text-sm leading-6 text-black/60">Internationally accredited qualifications recognized by employers worldwide.</p>
                    </div>

                    {{-- Card 2 --}}
                    <div class="group rounded-2xl border border-brand-100 bg-white p-6 shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:translate-y-5">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">
                            <iconify-icon icon="lucide:layers" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-base font-bold text-black group-hover:text-brand-600 transition-colors">Flexible Pathways</h3>
                        <p class="mt-1.5 text-sm leading-6 text-black/60">From foundation years to Master's degrees and research doctorates.</p>
                    </div>

                    {{-- Card 3 --}}
                    <div class="group rounded-2xl border border-brand-100 bg-white p-6 shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">
                            <iconify-icon icon="lucide:briefcase" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-base font-bold text-black group-hover:text-brand-600 transition-colors">Practical Training</h3>
                        <p class="mt-1.5 text-sm leading-6 text-black/60">Career-aligned coursework with industrial internships and placements.</p>
                    </div>

                    {{-- Card 4 --}}
                    <div class="group rounded-2xl border border-brand-100 bg-white p-6 shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:translate-y-5">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl border border-brand-100 bg-accent-green-light text-accent-green transition-all duration-300 group-hover:bg-accent-green group-hover:text-white">
                            <iconify-icon icon="lucide:globe" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-base font-bold text-black group-hover:text-accent-green transition-colors">Global Community</h3>
                        <p class="mt-1.5 text-sm leading-6 text-black/60">Welcoming, multicultural campuses with strong international support.</p>
                    </div>
                </div>

                {{-- Trust Banner --}}
                <div class="mt-8 flex items-center gap-4 rounded-2xl border border-brand-100 bg-brand-50/70 p-4 sm:mt-10">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-brand-600 shadow-sm border border-brand-100">
                        <iconify-icon icon="lucide:sparkles" class="text-xl"></iconify-icon>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-black">Learn. Grow. Succeed.</p>
                        <p class="text-xs text-black/60">Comprehensive support from visa counseling to post-landing arrival.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Popular Student Cities --}}
        <div class="mt-20 lg:mt-24">
            <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
                <x-destination-section-heading
                    eyebrow="STUDENT CITIES"
                    :title="'Popular Student Cities in <span class=\'text-brand-500\'>' . $destName . '</span>'"
                    description="Explore thriving urban centers offering exceptional academic institutions, rich cultural heritage, and varied living lifestyles."
                />

                <a href="#contact"
                   class="inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-brand-600 hover:text-brand-700 transition">
                    <span>Find Your Ideal City</span>
                    <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>
                </a>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($cities as $city)
                    <article class="group overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md"  style="--reveal-delay: {{ $loop->index * 80 }}ms">
                        <div class="relative h-52 overflow-hidden bg-brand-100">
                            <img src="{{ $city['image'] }}"
                                 alt="{{ $city['name'] }}, {{ $destName }}"
                                 loading="lazy"
                                 class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-950/85 via-brand-950/20 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="text-xs font-semibold uppercase tracking-wider text-brand-200">
                                    {{ $city['location'] }}
                                </span>
                                <h3 class="mt-0.5 text-xl font-bold text-white">
                                    {{ $city['name'] }}
                                </h3>
                            </div>
                        </div>

                        <div class="p-5">
                            <p class="text-sm leading-6 text-black/60 line-clamp-3">
                                {{ $city['description'] }}
                            </p>

                            <a href="#contact"
                               class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-brand-600 hover:text-brand-700 transition">
                                <span>Learn More</span>
                                <iconify-icon icon="lucide:arrow-up-right" class="text-sm"></iconify-icon>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
