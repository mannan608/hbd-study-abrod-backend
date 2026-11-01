
{{-- resources/views/components/achievers-voices.blade.php --}}

@props([
    'badge' => 'Student Experiences',
    'title' => "Achievers'",
    'titleHighlight' => 'Voices',
    'description' => 'Realize your dreams. Join the successful achievers worldwide!',
    'viewMoreUrl' => '#',
    'testimonials' => [],
])

@php
    $defaultTestimonials = [
        [
            'id' => '1',
            'name' => 'Sarah Jenkins',
            'course' => 'Master of IT, Australia',
            'videoId' => 'IAOHC6FcjZw',
            'thumbnail' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'id' => '2',
            'name' => 'Rahul Sharma',
            'course' => 'MBA, United Kingdom',
            'videoId' => 'sz_DA1TkGvk',
            'thumbnail' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'id' => '3',
            'name' => 'Ananya Patel',
            'course' => 'Data Science, Canada',
            'videoId' => 'KP2PoEkO3jE',
            'thumbnail' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'id' => '4',
            'name' => "Liam O'Connor",
            'course' => 'Engineering, USA',
            'videoId' => 'fwXF0hSY89Q',
            'thumbnail' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'id' => '5',
            'name' => 'Mei Lin',
            'course' => 'Nursing, New Zealand',
            'videoId' => 'a_Y7NumY2ic',
            'thumbnail' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'id' => '6',
            'name' => 'Carlos Mendez',
            'course' => 'Architecture, Germany',
            'videoId' => '-6RkLOHDbg8',
            'thumbnail' => 'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'id' => '7',
            'name' => 'Priya Singh',
            'course' => 'Finance, Ireland',
            'videoId' => 'XbFprBIdzyQ',
            'thumbnail' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'id' => '8',
            'name' => 'David Kim',
            'course' => 'Cyber Security, Australia',
            'videoId' => 'DIMgG8e0LKQ',
            'thumbnail' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=600&q=80',
        ],
    ];

    $testimonials = !empty($testimonials)
        ? array_values($testimonials)
        : $defaultTestimonials;
@endphp

<section
    id="achievers"
    class="relative overflow-hidden bg-brand-950 py-20 text-white sm:py-24"
    x-data="{
    activeIndex: 0,
    activeVideoId: null,
    total: {{ count($testimonials) }},
    perPage: 3,
    isTransitioning: true,

    init() {
        this.updatePerPage();

        window.addEventListener('resize', () => {
            this.updatePerPage();
        });
    },

    updatePerPage() {
        let newPerPage = window.innerWidth < 640
            ? 1
            : window.innerWidth < 1024
                ? 2
                : 3;

        if (this.perPage !== newPerPage) {
            this.perPage = newPerPage;
            this.activeIndex = 0;
        }
    },

    get items() {
        if (!this.total) return [];

        const result = [];
        const count = this.total + this.perPage;

        for (let i = 0; i < count; i++) {
            result.push(i % this.total);
        }

        return result;
    },

    next() {
        if (!this.total) return;
        this.activeIndex++;
    },

    prev() {
        if (!this.total) return;

        if (this.activeIndex === 0) {
            this.activeIndex = this.total;
            this.isTransitioning = false;

            this.$nextTick(() => {
                requestAnimationFrame(() => {
                    this.isTransitioning = true;
                    this.activeIndex--;
                });
            });
        } else {
            this.activeIndex--;
        }
    },

    handleTransitionEnd() {
        if (this.activeIndex >= this.total) {
            this.isTransitioning = false;
            this.activeIndex = 0;

            this.$nextTick(() => {
                requestAnimationFrame(() => {
                    this.isTransitioning = true;
                });
            });
        }
    },

    open(id) {
        this.activeVideoId = id;
        document.body.style.overflow = 'hidden';
    },

    close() {
        this.activeVideoId = null;
        document.body.style.overflow = '';
    }
}"
>
    {{-- Background Decoration --}}
    <div class="pointer-events-none absolute -left-40 top-20 h-80 w-80 rounded-full bg-brand-500/10 blur-[100px]"></div>
    <div class="pointer-events-none absolute -right-40 bottom-10 h-80 w-80 rounded-full bg-accent-red/10 blur-[100px]"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mx-auto max-w-2xl pb-12 text-center sm:pb-16">

            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 backdrop-blur-md">
                <iconify-icon
                    icon="lucide:sparkles"
                    class="text-base text-amber-400"
                ></iconify-icon>

                <span class="text-xs font-bold uppercase tracking-widest text-slate-200">
                    {{ $badge }}
                </span>
            </div>

            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl lg:text-5xl">
                {{ $title }}
                <span class="text-accent-red">
                    {{ $titleHighlight }}
                </span>
            </h2>

            <p class="mt-4 text-base leading-relaxed text-slate-400 sm:text-lg">
                {{ $description }}
            </p>

        </div>

       {{-- Infinite Slider --}}
<div class="relative">

    <div class="overflow-hidden">

        <div
            class="flex"
            :class="isTransitioning
                ? 'transition-transform duration-700 ease-in-out'
                : 'transition-none'"
            :style="`transform: translateX(-${activeIndex * (100 / perPage)}%)`"
            @transitionend="handleTransitionEnd()"
        >

            @foreach ($testimonials as $item)

                <div
                    class="shrink-0 px-2"
                    :style="`width: ${100 / perPage}%`"
                >

                    <button
                        type="button"
                        @click="open(@js($item['videoId']))"
                        class="group relative block aspect-video w-full overflow-hidden rounded-3xl border border-white/10 bg-neutral-900 text-left shadow-xl transition-all duration-500 hover:-translate-y-1.5 hover:border-brand-400/50 hover:shadow-2xl hover:shadow-brand-500/10"
                        aria-label="Play success story by {{ $item['name'] }}"
                    >

                        {{-- Thumbnail --}}
                        <img
                            src="{{ $item['thumbnail'] }}"
                            alt="{{ $item['name'] }}"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-110"
                            loading="lazy"
                        />

                        {{-- Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-950/20 to-transparent"></div>

                        {{-- Play Button --}}
                        <div class="absolute inset-0 flex items-center justify-center">

                            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-white/90 text-neutral-950 shadow-lg transition-all duration-300 group-hover:scale-110 group-hover:bg-brand-500 group-hover:text-white">

                                <iconify-icon
                                    icon="lucide:play"
                                    class="ml-1 text-2xl"
                                ></iconify-icon>

                            </div>

                        </div>

                        {{-- Student Info --}}
                        <div class="absolute bottom-0 left-0 right-0 p-5">

                            <p class="truncate text-base font-bold text-white">
                                {{ $item['name'] }}
                            </p>

                            <p class="mt-1 truncate text-sm text-slate-300">
                                {{ $item['course'] }}
                            </p>

                        </div>

                    </button>

                </div>

            @endforeach

            {{-- Clone first items for infinite loop --}}
            @for ($i = 0; $i < min(3, count($testimonials)); $i++)

                @php
                    $item = $testimonials[$i];
                @endphp

                <div
                    class="shrink-0 px-2"
                    :style="`width: ${100 / perPage}%`"
                >

                    <button
                        type="button"
                        @click="open(@js($item['videoId']))"
                        class="group relative block aspect-video w-full overflow-hidden rounded-3xl border border-white/10 bg-neutral-900 text-left shadow-xl transition-all duration-500 hover:-translate-y-1.5 hover:border-brand-400/50"
                    >

                        <img
                            src="{{ $item['thumbnail'] }}"
                            alt="{{ $item['name'] }}"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-110"
                            loading="lazy"
                        />

                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-950/20 to-transparent"></div>

                        <div class="absolute inset-0 flex items-center justify-center">

                            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-white/90 text-neutral-950 shadow-lg transition-all group-hover:scale-110 group-hover:bg-brand-500 group-hover:text-white">

                                <iconify-icon
                                    icon="lucide:play"
                                    class="ml-1 text-2xl"
                                ></iconify-icon>

                            </div>

                        </div>

                        <div class="absolute bottom-0 left-0 right-0 p-5">

                            <p class="truncate text-base font-bold text-white">
                                {{ $item['name'] }}
                            </p>

                            <p class="mt-1 truncate text-sm text-slate-300">
                                {{ $item['course'] }}
                            </p>

                        </div>

                    </button>

                </div>

            @endfor

        </div>

    </div>

    {{-- Navigation --}}
    @if (count($testimonials) > 1)

        <div class="mt-8 flex items-center justify-end gap-3">

            <button
                type="button"
                @click="prev()"
                aria-label="Previous slide"
                class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/15 bg-white/5 text-white transition-all hover:border-accent-red hover:bg-accent-red"
            >
                <iconify-icon
                    icon="lucide:chevron-left"
                    class="text-xl"
                ></iconify-icon>
            </button>

            <button
                type="button"
                @click="next()"
                aria-label="Next slide"
                class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/15 bg-white/5 text-white transition-all hover:border-accent-red hover:bg-accent-red"
            >
                <iconify-icon
                    icon="lucide:chevron-right"
                    class="text-xl"
                ></iconify-icon>
            </button>

        </div>

    @endif

</div>


    </div>

    {{-- Video Modal --}}
    <div
        x-show="activeVideoId"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center bg-neutral-950/90 p-4 backdrop-blur-md"
        role="dialog"
        aria-modal="true"
        aria-label="Student Video Modal"
        @click.self="close()"
    >

        <div
            class="relative w-full max-w-4xl overflow-hidden rounded-2xl border border-white/10 bg-black shadow-2xl sm:rounded-3xl"
            @click.stop
        >

            {{-- Close Button --}}
            <button
                type="button"
                @click="close()"
                aria-label="Close video player"
                class="absolute right-3 top-3 z-20 flex h-10 w-10 items-center justify-center rounded-full bg-black/60 text-white backdrop-blur transition-all hover:bg-accent-red sm:right-4 sm:top-4"
            >
                <iconify-icon
                    icon="lucide:x"
                    class="text-xl"
                ></iconify-icon>
            </button>

            {{-- YouTube Player --}}
            <div class="aspect-video w-full">

                <template x-if="activeVideoId">

                    <iframe
                        :src="`https://www.youtube.com/embed/${activeVideoId}?autoplay=1&rel=0`"
                        title="Student Success Story"
                        class="h-full w-full border-0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                    ></iframe>

                </template>

            </div>

        </div>

    </div>

</section>
