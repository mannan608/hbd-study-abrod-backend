
@props(['destination'])

    <article class="flex h-full flex-col overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1.5 hover:border-brand-200 hover:shadow-[0_24px_48px_-24px_rgba(16,24,40,0.28)]">

        {{-- Image --}}
        <div class="relative aspect-[16/10] shrink-0 overflow-hidden">

            @php
                $image = $destination['image'] ?? '';

                $imageUrl = \Illuminate\Support\Str::startsWith(
                    $image,
                    ['http://', 'https://']
                ) ? $image : asset($image);
            @endphp

            <img
                src="{{ $imageUrl }}"
                alt="{{ $destination['title'] ?? $destination['country'] ?? 'Destination' }}"
                loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
            />

            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/15 to-transparent"></div>

            {{-- Badges --}}
            <div class="absolute left-4 top-4 flex items-center gap-2">

                <span class="inline-flex h-8 w-8 items-center justify-center overflow-hidden rounded-full bg-white shadow-sm">

                    <img
                        src="https://flagcdn.com/w40/{{ strtolower($destination['flagCode'] ?? $destination['flag'] ?? 'un') }}.png"
                        alt="{{ $destination['country'] ?? 'Country' }} flag"
                        class="h-6 w-6 rounded-full object-cover"
                        loading="lazy"
                    >

                </span>

                @if (!empty($destination['featured']))

                    <span class="inline-flex items-center gap-1 rounded-full bg-brand-500 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-white shadow-sm">
                        <i class="fa-solid fa-star"></i>
                        Featured
                    </span>

                @elseif (!empty($destination['popular']))

                    <span class="rounded-full bg-white/95 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-brand-700 shadow-sm">
                        Popular
                    </span>

                @endif

            </div>

            {{-- Rating --}}
            @if (isset($destination['rating']) && is_numeric($destination['rating']))

                <div class="absolute right-4 top-4 inline-flex items-center gap-1 rounded-full bg-white/95 px-2.5 py-1 text-xs font-bold text-black shadow-sm">

                    <i class="fa-solid fa-star text-brand-500"></i>

                    {{ number_format((float) $destination['rating'], 1) }}

                </div>

            @endif

            {{-- Title --}}
            <div class="absolute bottom-4 left-5 right-5">

                <h3 class="text-xl font-bold tracking-tight text-white drop-shadow">
                    {{ $destination['title'] ?? $destination['name'] ?? 'Destination' }}
                </h3>

                <div class="mt-1 flex items-center gap-1.5 text-sm text-white/85">

                    <i class="fa-solid fa-location-dot"></i>

                    {{ $destination['country'] ?? '' }}

                </div>

            </div>

        </div>


        {{-- Body --}}
        <div class="flex flex-1 flex-col p-6">

            <p class="line-clamp-2 text-sm leading-6 text-black/60">
                {{ $destination['description'] ?? 'Explore study opportunities in this destination.' }}
            </p>


            {{-- Cost and Visa --}}
            <div class="mt-4 space-y-2">

                <div class="flex items-center justify-between gap-3 rounded-xl border border-neutral-100 bg-neutral-50 px-3 py-2 text-xs">

                    <span class="font-medium text-neutral-500">
                        Avg. Cost
                    </span>

                    <span class="text-right font-semibold text-neutral-800">
                        {{ $destination['avgCost'] ?? 'Contact for details' }}
                    </span>

                </div>

                <div class="flex items-center justify-between gap-3 rounded-xl border border-neutral-100 bg-neutral-50 px-3 py-2 text-xs">

                    <span class="font-medium text-neutral-500">
                        Visa Processing
                    </span>

                    <span class="text-right font-semibold text-neutral-800">
                        {{ $destination['visaProcessing'] ?? 'Varies by country' }}
                    </span>

                </div>

            </div>


            {{-- Footer --}}
            <div class="mt-auto mt-4 flex items-center justify-between border-t border-neutral-100 pt-4">

                <span class="text-xs text-neutral-400">

                    @if (($destination['reviewsCount'] ?? 0) > 0)

                        {{ number_format($destination['reviewsCount']) }} reviews

                    @else

                        Reviews coming soon

                    @endif

                </span>

                <span class="inline-flex items-center gap-1 text-sm font-semibold text-brand-600">

                    Learn more

                    <i class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-0.5"></i>

                </span>

            </div>

        </div>

    </article>
