
<section
    x-data="{
        active: 0,
        slides: [
            {
                eyebrow: '01 — EXPLORE',
                title: 'A world of<br>possibilities.',
                subtitle: 'Discover destinations and universities that match the future you want to build.',
                image: 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1400&q=85'
            },
            {
                eyebrow: '02 — DISCOVER',
                title: 'Find where<br>you belong.',
                subtitle: 'Choose from thousands of programs and discover an education experience made for you.',
                image: 'https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=1400&q=85'
            },
            {
                eyebrow: '03 — BEGIN',
                title: 'Your journey<br>starts now.',
                subtitle: 'From application to arrival, get the guidance you need at every important step.',
                image: 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1400&q=85'
            }
        ]
    }"
    x-init="setInterval(() => active = (active + 1) % slides.length, 6500)"
    class="bg-[#f7f7f5]"
>
    <div class="mx-auto max-w-7xl px-5 py-12 sm:px-8 lg:px-10 lg:py-20">

        <div class="grid min-h-[600px] overflow-hidden rounded-[2rem] bg-slate-950 lg:grid-cols-2">

            <!-- Content -->
            <div class="flex items-center px-7 py-14 sm:px-12 lg:px-16">

                <div class="w-full">

                    <div class="relative min-h-[380px]">

                        <template x-for="(slide, index) in slides" :key="index">
                            <div
                                x-show="active === index"
                                x-transition:enter="transition duration-800 ease-out"
                                x-transition:enter-start="opacity-0 translate-x-6"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition duration-500 absolute inset-0"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-x-6"
                                class="absolute inset-0 flex flex-col justify-center"
                            >

                                <p
                                    x-text="slide.eyebrow"
                                    class="mb-6 text-xs font-medium tracking-[0.25em] text-white/40"
                                ></p>

                                <h1
                                    x-html="slide.title"
                                    class="text-5xl font-semibold leading-[1.02] tracking-tight text-white sm:text-6xl lg:text-7xl"
                                ></h1>

                                <p
                                    x-text="slide.subtitle"
                                    class="mt-7 max-w-md text-base leading-7 text-white/60 sm:text-lg"
                                ></p>

                                <a
                                    href="#"
                                    class="mt-9 inline-flex w-fit items-center gap-3 border-b border-white/30 pb-2 text-sm font-medium text-white transition hover:border-white"
                                >
                                    Discover more
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14m-5-5 5 5-5 5"/>
                                    </svg>
                                </a>

                            </div>
                        </template>

                    </div>

                    <!-- Navigation -->
                    <div class="flex items-center justify-between border-t border-white/10 pt-6">

                        <div class="flex gap-2">
                            <template x-for="(slide, index) in slides" :key="index">
                                <button
                                    @click="active = index"
                                    class="h-1 rounded-full transition-all duration-500"
                                    :class="active === index ? 'w-10 bg-white' : 'w-4 bg-white/20'"
                                ></button>
                            </template>
                        </div>

                        <div class="text-xs tracking-wider text-white/30">
                            <span x-text="'0' + (active + 1)"></span>
                            <span class="mx-1">/</span>
                            <span>03</span>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Image -->
            <div class="relative min-h-[400px] overflow-hidden">

                <template x-for="(slide, index) in slides" :key="index">
                    <img
                        x-show="active === index"
                        x-transition:enter="transition duration-1000 ease-out"
                        x-transition:enter-start="opacity-0 scale-105"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition duration-700 absolute inset-0"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0 scale-105"
                        :src="slide.image"
                        alt=""
                        class="absolute inset-0 h-full w-full object-cover"
                    >
                </template>

                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>

            </div>

        </div>
    </div>
</section>