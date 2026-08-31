<section class="py-16 md:py-20 lg:py-24 defer-render">
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
                Explore top-tier universities, world-class education systems, and vibrant culture across leading global destinations.
            </p>
        </header>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      
     @include('frontend.pages.destinations.card')     

    </div>
   
  </div>
</section>
