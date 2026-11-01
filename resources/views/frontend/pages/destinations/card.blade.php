<a href="{{ route('destination.details', ['slug' => $destination['slug']]) }}" class="group block h-full">

    <article style="transition-delay: {{ ($destination['id'] % 3) * 90 }}ms"
        class="flex h-full flex-col overflow-hidden rounded-3xl border border-neutral-200/80 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-brand-200 hover:shadow-[0_24px_48px_-16px_rgba(15,23,42,0.18)]">

        {{-- Image section --}}
        <div class="relative h-52 shrink-0 overflow-hidden">

            <img src="{{ asset($destination['image']) }}" alt="{{ $destination['title'] }}, {{ $destination['country'] }}"
                loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />

            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

            {{-- Badges --}}
            <div class="absolute left-4 top-4 flex items-center gap-2">

                <span
                    class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/95 text-base shadow-sm backdrop-blur">
                    {{ $destination['flag'] }}
                </span>

                @if ($destination['featured'])
                    <span
                        class="inline-flex items-center gap-1 rounded-full bg-brand-500/95 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-white shadow-sm">
                        <i class="fa-solid fa-sparkles"></i>
                        Featured
                    </span>
                @elseif($destination['popular'])
                    <span
                        class="rounded-full bg-white/95 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-brand-800 shadow-sm">
                        Popular
                    </span>
                @endif

            </div>

            {{-- Rating --}}
            @if (!is_null($destination['rating']))
                <div
                    class="absolute right-4 top-4 inline-flex items-center gap-1 rounded-full bg-white/95 px-2.5 py-1 text-xs font-bold text-neutral-800 shadow-sm">
                    <i class="fa-solid fa-star text-amber-400"></i>
                    {{ number_format($destination['rating'], 2) }}
                </div>
            @endif

            {{-- Destination title --}}
            <div class="absolute bottom-4 left-5 right-5">

                <h3 class="text-xl font-extrabold tracking-tight text-white drop-shadow-md">
                    {{ $destination['title'] }}
                </h3>

                <div class="mt-1 flex items-center gap-1.5 text-sm text-white/85">
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $destination['country'] }}
                </div>

            </div>
        </div>

        {{-- Content section --}}
        <div class="flex flex-1 flex-col p-5">

            <p class="line-clamp-2 text-sm leading-6 text-neutral-600">
                {{ $destination['description'] }}
            </p>

            {{-- Top universities --}}
            {{-- @if (!empty($destination['topUniversities']))

                <div class="mt-4 flex flex-wrap gap-1.5">

                    @foreach (array_slice($destination['topUniversities'], 0, 3) as $university)

                        <span class="inline-flex items-center gap-1 rounded-lg bg-brand-50 px-2.5 py-1 text-[11px] font-medium text-brand-700">
                            <i class="fa-solid fa-graduation-cap"></i>
                            {{ $university }}
                        </span>

                    @endforeach

                </div>

            @endif --}}

            <div class="mt-5 grid grid-cols-1 gap-3 xsm:grid-cols-2">
                <div class="rounded-xl border border-neutral-100 bg-neutral-50 px-3.5 py-3">
                    <div class="flex items-center gap-2">
                        <div
                            class="flex h-9 w-9 items-center justify-center rounded-lg bg-white text-brand-500 shadow-sm">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14v7m0 0c-3 0-6-1-6-3v-3m6 6c3 0 6-1 6-3v-3" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-start text-[10px] font-medium uppercase tracking-wide text-neutral-400">
                                Universities
                            </p>

                            <p class="text-[13px] font-semibold text-neutral-800">
                                Top Ranked
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-neutral-100 bg-neutral-50 px-3.5 py-3">
                    <div class="flex items-center gap-2">
                        <div
                            class="flex  h-9 w-9 items-center justify-center rounded-lg bg-white text-emerald-500 shadow-sm">
                            <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>

                        </div>
                        <div>
                            <p class="text-start text-[10px] font-medium uppercase tracking-wide text-neutral-400">
                                Career
                            </p>

                            <p class="text-[13px] font-semibold text-neutral-800">
                                Work Options
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Cost and visa --}}
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
