@props([
    'destination' => [],
])

@php
    $destName = $destination['name'] ?? 'the United Kingdom';

    $universities = [
        [
            'id' => 1,
            'name' => 'University of Manchester',
            'short_name' => 'UoM',
            'city' => 'Manchester, England',
            'type' => 'Russell Group Research University',
            'ranking' => 'Top 30 QS World',
            'badge' => 'POPULAR CHOICE',
            'description' => 'A global research powerhouse with 25 Nobel laureates, offering comprehensive business, computer science, and engineering faculties.',
            'url' => '#contact',
        ],
        [
            'id' => 2,
            'name' => 'University of Birmingham',
            'short_name' => 'UoB',
            'city' => 'Birmingham, England',
            'type' => 'Russell Group University',
            'ranking' => 'Top 80 QS World',
            'badge' => 'HIGH EMPLOYABILITY',
            'description' => 'Renowned for industrial research partnerships, cutting-edge medical programs, and extensive international graduate placement schemes.',
            'url' => '#contact',
        ],
        [
            'id' => 3,
            'name' => 'University of Leeds',
            'short_name' => 'UoL',
            'city' => 'Leeds, England',
            'type' => 'Research-Intensive University',
            'ranking' => 'Top 75 QS World',
            'badge' => 'TOP 10 UK RESEARCH',
            'description' => 'Celebrated for student satisfaction, innovative curricula, thriving arts culture, and generous international scholarship options.',
            'url' => '#contact',
        ],
        [
            'id' => 4,
            'name' => 'University of Bristol',
            'short_name' => 'UoB',
            'city' => 'Bristol, England',
            'type' => 'Russell Group Elite',
            'ranking' => 'Top 55 QS World',
            'badge' => 'HIGH DEMAND',
            'description' => 'A leader in technology, aerospace engineering, life sciences, and entrepreneurship located in one of the UK’s most creative cities.',
            'url' => '#contact',
        ],
        [
            'id' => 5,
            'name' => 'University of Glasgow',
            'short_name' => 'UofG',
            'city' => 'Glasgow, Scotland',
            'type' => 'Ancient Scottish Institution',
            'ranking' => 'Top 80 QS World',
            'badge' => null,
            'description' => 'Founded in 1451, offering world-class instruction in medicine, law, social sciences, and informatics within a scenic heritage campus.',
            'url' => '#contact',
        ],
        [
            'id' => 6,
            'name' => 'Queen Mary University of London',
            'short_name' => 'QMUL',
            'city' => 'London, England',
            'type' => 'Russell Group Campus',
            'ranking' => 'Top 120 QS World',
            'badge' => 'CAPITAL LOCATION',
            'description' => 'A fully integrated residential campus in central London, excelling in law, artificial intelligence, economics, and dentistry.',
            'url' => '#contact',
        ],
    ];
@endphp

<section id="universities" data-section class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24">
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="mb-12 flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
            <x-destination-section-heading
                eyebrow="PARTNER INSTITUTIONS"
                :title="'Leading Universities in <span class=\'text-brand-500\'>' . $destName . '</span>'"
                description="Explore premier institutions renowned for academic standards, cutting-edge facilities, and excellent international student support."
            />

            <a href="{{ route('universities') }}"
               class="inline-flex shrink-0 items-center gap-2 self-start rounded-xl border border-brand-200 bg-white px-5 py-3 text-sm font-semibold text-brand-700 shadow-sm transition-all duration-300 hover:border-brand-300 hover:bg-brand-50 lg:self-auto">
                <span>View All Universities</span>
                <iconify-icon icon="lucide:arrow-up-right" class="text-base"></iconify-icon>
            </a>
        </div>

        {{-- Universities Grid --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($universities as $university)
                <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md"
                         data-reveal style="--reveal-delay: {{ ($loop->index % 3) * 80 }}ms">
                    {{-- Card Top Area --}}
                    <div class="relative flex items-center justify-between border-b border-brand-100 bg-brand-25 p-6">
                        <div class="flex items-center gap-3">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500 text-base font-bold text-white shadow-sm">
                                {{ $university['short_name'] }}
                            </div>
                            <div>
                                <span class="rounded-lg border border-brand-100 bg-white px-2.5 py-1 text-[11px] font-semibold text-brand-700">
                                    {{ $university['ranking'] }}
                                </span>
                            </div>
                        </div>

                        @if (!empty($university['badge']))
                            <span class="rounded-full bg-accent-green-light px-2.5 py-1 text-[10px] font-bold tracking-wider text-accent-green">
                                {{ $university['badge'] }}
                            </span>
                        @endif
                    </div>

                    {{-- Card Information --}}
                    <div class="flex flex-1 flex-col p-6">
                        <div class="flex items-center gap-2 text-xs font-medium text-black/50">
                            <iconify-icon icon="lucide:map-pin" class="text-sm text-brand-500"></iconify-icon>
                            <span>{{ $university['city'] }}</span>
                        </div>

                        <h3 class="mt-2.5 text-lg font-bold text-black transition-colors group-hover:text-brand-600">
                            {{ $university['name'] }}
                        </h3>

                        <p class="mt-1 text-xs font-medium text-brand-600">
                            {{ $university['type'] }}
                        </p>

                        <p class="mt-3 flex-1 text-sm leading-6 text-black/60">
                            {{ $university['description'] }}
                        </p>

                        {{-- Footer link --}}
                        <div class="mt-6 border-t border-brand-100 pt-4">
                            <a href="{{ $university['url'] }}"
                               class="inline-flex w-full items-center justify-between text-xs font-semibold text-brand-600 transition group-hover:text-brand-700">
                                <span>Check Course Eligibility</span>
                                <span class="flex h-8 w-8 items-center justify-center rounded-lg border border-brand-200 bg-brand-50 text-brand-600 transition group-hover:bg-brand-500 group-hover:border-brand-500 group-hover:text-white">
                                    <iconify-icon icon="lucide:arrow-right" class="text-sm"></iconify-icon>
                                </span>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
