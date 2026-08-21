<section class="mt-8 mb-12  pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mx-auto max-w-2xl px-4 py-12 text-center font-sans">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-[#1068b2]/10 rounded-full mb-6"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-zap w-4 h-4 text-[#1068b2]">
                    <path
                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                    </path>
                </svg>
                <span class="text-sm font-semibold text-[#1068b2] uppercase">Expos & Live Learning</span>
            </div>

            <!-- Main Heading -->
            <h1
                class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase">
                Upcoming Digital Events
            </h1>

            <!-- Subheading Description -->
            <p class="mx-auto mt-4 max-w-2xl text-base text-slate-600 sm:text-lg">
                Reserve your spot in high-value webinars and virtual expos to fast-track your university planning.
            </p>
        </header>

        <div class="relative w-full overflow-hidden bg-slate-50">           
            <div
                class="pointer-events-none absolute bottom-0 left-0 top-0 z-10 w-8 md:w-28 bg-gradient-to-r from-slate-50 via-slate-50/80 to-transparent">
            </div>
            <div
                class="pointer-events-none absolute bottom-0 right-0 top-0 z-10 w-8 md:w-28 bg-gradient-to-l from-slate-50 via-slate-50/80 to-transparent">
            </div>

            
            <div class="animate-marquee flex w-max gap-6">
                @include('frontend.pages.components.event.event-card')
                @include('frontend.pages.components.event.event-card')
                @include('frontend.pages.components.event.event-card')
                @include('frontend.pages.components.event.event-card')

                
                @include('frontend.pages.components.event.event-card')
                @include('frontend.pages.components.event.event-card')
                @include('frontend.pages.components.event.event-card')
                @include('frontend.pages.components.event.event-card')
            </div>

        </div>
    </div>
</section>
