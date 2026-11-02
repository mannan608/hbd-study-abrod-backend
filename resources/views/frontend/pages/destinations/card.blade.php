<a href="{{ route('destination.details', ['slug' => $destination['slug']]) }}" class="group block h-full"  data-reveal  style="--reveal-delay: {{ ($destination['id'] % 3) * 90 }}ms">
    <article
        class="flex h-full flex-col overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-[0_1px_2px_rgba(16,24,40,0.04)] transition-all duration-300 hover:-translate-y-1.5 hover:border-brand-200 hover:shadow-[0_24px_48px_-24px_rgba(16,24,40,0.28)]"
       
       
    >
        {{-- Image --}}
        <div class="relative aspect-[16/10] shrink-0 overflow-hidden">
            <img src="{{ asset($destination['image']) }}"
                alt="{{ $destination['title'] }}, {{ $destination['country'] }}" loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/15 to-transparent"></div>

            {{-- Badges --}}
            <div class="absolute left-4 top-4 flex items-center gap-2">
                <span class="inline-flex h-8 w-8 items-center justify-center overflow-hidden rounded-full bg-white shadow-sm">
                    <img src="https://flagcdn.com/w40/{{ strtolower($destination['flagCode'] ?? $destination['flag'] ?? 'un') }}.png"
                        alt="{{ $destination['country'] }} flag" class="h-4 w-6 object-cover" loading="lazy">
                </span>
                @if (!empty($destination['featured']))
                    <span class="inline-flex items-center gap-1 rounded-full bg-brand-500 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-white shadow-sm">
                        <i class="fa-solid fa-star"></i> Featured
                    </span>
                @elseif(!empty($destination['popular']))
                    <span class="rounded-full bg-white/95 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-brand-700 shadow-sm">
                        Popular
                    </span>
                @endif
            </div>

            {{-- Rating --}}
            @if (!is_null($destination['rating'] ?? null))
                <div class="absolute right-4 top-4 inline-flex items-center gap-1 rounded-full bg-white/95 px-2.5 py-1 text-xs font-bold text-black shadow-sm">
                    <i class="fa-solid fa-star text-brand-500"></i>
                    {{ number_format($destination['rating'], 1) }}
                </div>
            @endif

            {{-- Title overlay --}}
            <div class="absolute bottom-4 left-5 right-5">
                <h3 class="text-xl font-bold tracking-tight text-white drop-shadow">{{ $destination['title'] }}</h3>
                <div class="mt-1 flex items-center gap-1.5 text-sm text-white/85">
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $destination['country'] }}
                </div>
            </div>
        </div>

        {{-- Body --}}
        <div class="flex flex-1 flex-col p-6">
            <p class="line-clamp-2 text-sm leading-6 text-black/60">
                {{ $destination['description'] }}
            </p>

            {{-- Quick facts --}}
            {{-- <div class="mt-5 grid grid-cols-1 gap-3 xsm:grid-cols-2">
                <div class="rounded-xl border border-brand-100 bg-brand-25 px-3.5 py-3">
                    <div class="flex items-center gap-2">
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-white text-brand-500 shadow-sm">
                            <i class="fa-solid fa-building-columns text-sm"></i>
                        </span>
                        <div class="text-start">
                            <p class="text-[10px] font-semibold uppercase tracking-wide text-black/45">Universities</p>
                            <p class="text-[13px] font-semibold text-black">Top ranked</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-brand-100 bg-brand-25 px-3.5 py-3">
                    <div class="flex items-center gap-2">
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-white text-accent-green shadow-sm">
                            <i class="fa-solid fa-briefcase text-sm"></i>
                        </span>
                        <div class="text-start">
                            <p class="text-[10px] font-semibold uppercase tracking-wide text-black/45">Career</p>
                            <p class="text-[13px] font-semibold text-black">Work options</p>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- Cost & visa --}}
           <div class="mt-4 space-y-2">

                <div
                    class="flex items-center justify-between gap-3 rounded-xl border border-neutral-100 bg-neutral-50 px-3 py-2 text-xs">
                    <span class="font-medium text-neutral-500">Avg. Cost</span>
                    <span class="text-right font-semibold text-neutral-800">
                        {{ $destination['avgCost'] }}
                    </span>
                </div>

                <div
                    class="flex items-center justify-between gap-3 rounded-xl border border-neutral-100 bg-neutral-50 px-3 py-2 text-xs">
                    <span class="font-medium text-neutral-500">Visa Processing</span>
                    <span class="text-right font-semibold text-neutral-800">
                        {{ $destination['visaProcessing'] }}
                    </span>
                </div>

            </div>

            {{-- Footer --}}
            <div class="mt-auto mt-4 flex items-center justify-between border-t border-neutral-100 pt-4">

                <span class="text-xs text-neutral-400">
                    @if ($destination['reviewsCount'] > 0)
                        {{ number_format($destination['reviewsCount']) }} reviews
                    @else
                        Reviews coming soon
                    @endif
                </span>

                <span class="inline-flex items-center gap-1 text-sm font-semibold text-brand-600">
                    Learn more
                    <i
                        class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-0.5"></i>
                </span>

            </div>
        </div>
    </article>
</a>
