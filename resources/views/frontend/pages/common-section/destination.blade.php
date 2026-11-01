<section class="pb-10 md:pb-16 lg:pb-20 defer-render pt-8">
    <div class="max-w-7xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <header
            class="mx-auto max-w-2xl px-4 py-12 text-center transition-all duration-700 reveal-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 bg-brand-500/10 rounded-full mb-6 transition-all duration-700 delay-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-zap w-4 h-4 text-brand-500 transition-transform duration-500 group-hover:scale-110">
                    <path
                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                    </path>
                </svg>
                <span class="text-sm font-semibold text-brand-500 uppercase"> Global Education</span>
            </div>

            <!-- Main Heading -->
            <h1
                class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase transition-all duration-700 delay-200">
                Choose Your Study Destination
            </h1>

            <!-- Subheading Description -->
            <p
                class="mx-auto mt-4 max-w-2xl text-base text-neutral-600 sm:text-lg transition-all duration-700 delay-300">
                Explore top-tier universities, world-class education systems, and vibrant culture across leading global
                destinations.
            </p>
        </header>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

            @foreach ($destinations as $destination)
                @include('frontend.pages.destinations.card', [
                    'destination' => $destination,
                ])
            @endforeach

        </div>

        <div class="flex justify-end mt-6">
    <a href=""
       class="group inline-flex items-center gap-2 text-sm font-medium text-brand-500 transition-all duration-300 hover:gap-3 hover:text-brand-600">
        
        <span class="transition-transform duration-300 group-hover:-translate-x-0.5">
            View All Destinations
        </span>

        {{-- ArrowRight icon (using Heroicons / SVG) --}}
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-4 w-4 transition-transform duration-300 ease-out group-hover:translate-x-1 group-hover:scale-110" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
        </svg>
    </a>
</div>

    </div>
</section>
