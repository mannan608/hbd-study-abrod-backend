
{{-- resources/views/components/google-reviews.blade.php --}}

@props([
    'badge' => 'From Dreamers to Achievers',
    'title' => 'Stories That Inspire',
    'titleHighlight' => 'Success',
    'description' => 'Real experiences from students who trusted us with their global education journey. Your next success story starts here.',
    'reviewUrl' => 'https://admin.trustindex.io/api/googleWriteReview?place-id=ChIJqyQYyZC4VTcR-7vrnhjyMIw',
    'averageRating' => '4.9',
    'totalReviews' => '443',
    'reviews' => [],
])

@php
    $defaultReviews = [
        [
            'id' => 1,
            'name' => 'Sajia Oshin',
            'date' => '3 weeks ago',
            'rating' => 5,
            'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80',
            'text' => 'I started my journey with HBD services for my Australia visa process on August and with their wonderful assistance and By the grace of Almighty...',
        ],
        [
            'id' => 2,
            'name' => 'Aditto Saha',
            'date' => 'A month ago',
            'rating' => 5,
            'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80',
            'text' => 'Thanks to HBD services for their support and service. I recommend everyone to do your abroad journey with them. My counsellor was Pinku vai. He was...',
        ],
        [
            'id' => 3,
            'name' => 'Kamrul Islam',
            'date' => 'A month ago',
            'rating' => 5,
            'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=200&q=80',
            'text' => 'I want to thank whole HBD service team. Everyone was too friendly and made my journey smoother and stress free. I will owe for this. Thanks for everything...',
        ],
        [
            'id' => 4,
            'name' => 'Tasfia Rahman',
            'date' => '2 months ago',
            'rating' => 5,
            'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=200&q=80',
            'text' => 'Amazing experience! The guidance I received for university selection and visa documentation was top-notch. Highly professional team.',
        ],
    ];

    $reviews = !empty($reviews)
        ? array_values($reviews)
        : $defaultReviews;
@endphp

<section
    id="success-stories"
    class="relative overflow-hidden bg-white py-20 sm:py-24 lg:py-28"
    x-data="{
        reviews: @js($reviews),
        currentIndex: 0,
        perPage: 3,

        init() {
            this.updatePerPage();

            window.addEventListener('resize', () => {
                this.updatePerPage();
            });

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-5');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            observer.observe(this.$refs.header);
            observer.observe(this.$refs.content);
        },

        updatePerPage() {
            if (window.innerWidth < 768) {
                this.perPage = 1;
            } else if (window.innerWidth < 1024) {
                this.perPage = 2;
            } else {
                this.perPage = 3;
            }

            this.currentIndex = this.currentIndex % Math.max(1, this.reviews.length);
        },

        get visibleReviews() {
            if (!this.reviews.length) return [];

            return Array.from(
                { length: Math.min(this.perPage, this.reviews.length) },
                (_, index) => this.reviews[
                    (this.currentIndex + index) % this.reviews.length
                ]
            );
        },

        prev() {
            if (!this.reviews.length) return;

            this.currentIndex =
                (this.currentIndex - 1 + this.reviews.length)
                % this.reviews.length;
        },

        next() {
            if (!this.reviews.length) return;

            this.currentIndex =
                (this.currentIndex + 1) % this.reviews.length;
        },

        goTo(index) {
            this.currentIndex = index;
        }
    }"
>
    {{-- Background Decoration --}}
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_rgba(25,104,178,0.07),_transparent_48%)]"></div>

    <div class="pointer-events-none absolute -right-40 top-40 h-96 w-96 rounded-full bg-brand-50/80 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div
            x-ref="header"
            class="mx-auto max-w-3xl translate-y-5 pb-0 text-center opacity-0 transition-all duration-700"
        >

            {{-- Badge --}}
            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-brand-100 bg-brand-50 px-4 py-2">

                <iconify-icon
                    icon="lucide:sparkles"
                    class="text-base text-brand-600"
                ></iconify-icon>

                <span class="text-xs font-bold uppercase tracking-[0.16em] text-brand-700">
                    {{ $badge }}
                </span>

            </div>

            {{-- Title --}}
            <h2 class="text-3xl font-bold leading-tight tracking-tight text-secondary-500 sm:text-4xl lg:text-5xl">

                {{ $title }}

                <span class="mt-1 block text-brand-600 sm:inline sm:pl-2">
                    {{ $titleHighlight }}
                </span>

            </h2>

            {{-- Description --}}
            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-slate-600 sm:text-lg sm:leading-8">
                {{ $description }}
            </p>

            <div class="mx-auto mt-7 h-1 w-16 rounded-full bg-brand-500"></div>

        </div>

        {{-- Google Rating & Trust Panel --}}
        <div
            x-ref="content"
            class="mt-12 translate-y-5 overflow-hidden rounded-2xl border border-slate-200 bg-white opacity-0 shadow-[0_12px_40px_-24px_rgba(24,47,90,0.22)] transition-all duration-700 delay-100 sm:mt-16"
        >

            <div class="grid grid-cols-1 lg:grid-cols-[1fr_auto] lg:items-center">

                {{-- Rating Information --}}
                <div class="flex flex-col gap-5 p-6 sm:flex-row sm:items-center sm:gap-7 sm:p-8">

                    {{-- Google Rating --}}
                    <div class="flex items-center gap-3">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl border border-slate-100 bg-slate-50 text-2xl font-bold">

                            <span class="bg-gradient-to-br from-blue-500 via-red-500 to-yellow-500 bg-clip-text text-transparent">
                                G
                            </span>

                        </div>

                        <div>

                            <p class="text-sm font-semibold text-slate-500">
                                Google Reviews
                            </p>

                            <div class="mt-1 flex flex-wrap items-center gap-2">

                                <span class="text-3xl font-bold tracking-tight text-secondary-500">
                                    {{ $averageRating }}
                                </span>

                                <div
                                    class="flex items-center gap-0.5 text-amber-500"
                                    aria-label="Rated {{ $averageRating }} out of 5"
                                >

                                    @for ($i = 0; $i < 5; $i++)
                                        <iconify-icon
                                            icon="lucide:star"
                                            class="text-base"
                                        ></iconify-icon>
                                    @endfor

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="hidden h-12 w-px bg-slate-200 sm:block"></div>

                    {{-- Trust Information --}}
                    <div>

                        <p class="text-sm font-semibold text-secondary-500">
                            Trusted by students and families
                        </p>

                        <p class="mt-1 text-sm text-slate-500">
                            {{ $totalReviews }} Reviews · Global education consultancy
                        </p>

                        <div class="mt-2 flex items-center gap-2 text-xs font-medium text-emerald-700">

                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                            <span>
                                Building brighter futures together
                            </span>

                        </div>

                    </div>

                </div>

                {{-- Action Buttons --}}
                <div class="flex flex-wrap items-center gap-3 border-t border-slate-100 bg-slate-50/70 p-5 sm:p-6 lg:border-l lg:border-t-0">

                    <a
                        href="{{ $reviewUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex min-h-11 items-center justify-center gap-2 rounded-xl bg-brand-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-brand-700 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-100"
                    >

                        Write a Review

                        <iconify-icon
                            icon="lucide:external-link"
                            class="text-base"
                        ></iconify-icon>

                    </a>

                    <div class="inline-flex min-h-11 items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600">

                        <iconify-icon
                            icon="lucide:shield-check"
                            class="text-base text-brand-600"
                        ></iconify-icon>

                        <span>Trustindex</span>

                    </div>

                </div>

            </div>

        </div>

        {{-- Review Carousel --}}
        <div class="mt-10 sm:mt-12">

            {{-- Review Cards --}}
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                <template
                    x-for="review in visibleReviews"
                    :key="review.id"
                >

                    <article
                        class="group relative flex min-h-[290px] flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 shadow-[0_8px_30px_-20px_rgba(24,47,90,0.25)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-[0_20px_45px_-25px_rgba(25,104,178,0.28)] sm:p-7"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="translate-y-3 opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                    >

                        {{-- Brand Accent --}}
                        <div class="absolute left-0 top-0 h-1 w-16 rounded-br-full bg-brand-500 transition-all duration-300 group-hover:w-28"></div>

                        {{-- Student Information --}}
                        <div class="flex items-start justify-between gap-3">

                            <div class="flex min-w-0 items-center gap-3">

                                {{-- Avatar --}}
                                <div class="relative h-12 w-12 shrink-0 overflow-hidden rounded-full border-2 border-brand-100 bg-brand-50">

                                    <img
                                        :src="review.avatar"
                                        :alt="review.name"
                                        class="h-full w-full object-cover"
                                        loading="lazy"
                                    >

                                </div>

                                <div class="min-w-0">

                                    <h3
                                        class="truncate text-sm font-bold text-secondary-500 sm:text-base"
                                        x-text="review.name"
                                    ></h3>

                                    <p
                                        class="mt-1 text-xs text-slate-500"
                                        x-text="review.date"
                                    ></p>

                                </div>

                            </div>

                            {{-- Quote Icon --}}
                            <iconify-icon
                                icon="lucide:quote"
                                class="shrink-0 text-3xl text-brand-200"
                            ></iconify-icon>

                        </div>

                        {{-- Rating & Verified --}}
                        <div class="mt-5 flex items-center justify-between gap-3">

                            <div
                                class="flex items-center gap-0.5 text-amber-500"
                                aria-label="Review rating"
                            >

                                <template
                                    x-for="star in Math.min(5, Math.max(0, Number(review.rating) || 0))"
                                    :key="star"
                                >

                                    <iconify-icon
                                        icon="lucide:star"
                                        class="text-base"
                                    ></iconify-icon>

                                </template>

                            </div>

                            <span class="inline-flex items-center gap-1 rounded-full bg-brand-50 px-2.5 py-1 text-[10px] font-semibold text-brand-700 sm:text-xs">

                                <iconify-icon
                                    icon="lucide:shield-check"
                                    class="text-sm"
                                ></iconify-icon>

                                Google Review

                            </span>

                        </div>

                        {{-- Review Text --}}
                        <p
                            class="mt-5 line-clamp-3 flex-1 text-sm leading-7 text-slate-600"
                            x-text="'“' + review.text + '”'"
                        ></p>

                    </article>

                </template>

            </div>

            {{-- Empty Reviews --}}
            <div
                x-show="reviews.length === 0"
                class="rounded-2xl border border-dashed border-slate-200 p-10 text-center"
            >

                <iconify-icon
                    icon="lucide:message-square"
                    class="text-4xl text-slate-400"
                ></iconify-icon>

                <p class="mt-3 text-sm text-slate-500">
                    No reviews available at the moment.
                </p>

            </div>

        </div>

        {{-- Carousel Controls --}}
        <div
            x-show="reviews.length > 1"
            class="mt-6 flex items-center justify-center gap-5 sm:mt-8"
        >

            {{-- Previous --}}
            <button
                type="button"
                @click="prev()"
                aria-label="Previous review"
                class="group flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white text-secondary-500 shadow-sm transition-all duration-200 hover:border-brand-600 hover:bg-brand-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-brand-100"
            >

                <iconify-icon
                    icon="lucide:chevron-left"
                    class="text-xl transition-transform group-hover:-translate-x-0.5"
                ></iconify-icon>

            </button>

            {{-- Pagination Dots --}}
            <div class="flex items-center gap-2.5">

                <template
                    x-for="(review, index) in reviews"
                    :key="review.id"
                >

                    <button
                        type="button"
                        @click="goTo(index)"
                        :aria-label="`Show review ${index + 1}`"
                        :aria-current="index === currentIndex ? 'true' : 'false'"
                        class="h-2 rounded-full transition-all duration-300"
                        :class="index === currentIndex
                            ? 'w-8 bg-brand-600'
                            : 'w-2 bg-slate-300 hover:bg-brand-300'"
                    ></button>

                </template>

            </div>

            {{-- Next --}}
            <button
                type="button"
                @click="next()"
                aria-label="Next review"
                class="group flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white text-secondary-500 shadow-sm transition-all duration-200 hover:border-brand-600 hover:bg-brand-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-brand-100"
            >

                <iconify-icon
                    icon="lucide:chevron-right"
                    class="text-xl transition-transform group-hover:translate-x-0.5"
                ></iconify-icon>

            </button>

        </div>

    </div>

</section>
