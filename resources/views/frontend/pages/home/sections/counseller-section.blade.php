<section class="mt-12 pb-16 bg-brand-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header
            class="mx-auto max-w-2xl px-4 py-12 text-center font-sans reveal-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-[#1068b2]/10 rounded-full mb-6 transition-all duration-700 delay-100"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-zap w-4 h-4 text-[#1068b2] transition-transform duration-500 group-hover:scale-110">
                    <path
                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                    </path>
                </svg>
                <span class="text-sm font-semibold text-[#1068b2] uppercase">One-on-One Support</span>
            </div>

            <!-- Main Heading -->
            <h1
                class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase transition-all duration-700 delay-200">
                Meet Our Expert Counsellors
            </h1>

            <!-- Subheading Description -->
            <p class="mx-auto mt-4 max-w-2xl text-base text-slate-600 sm:text-lg transition-all duration-700 delay-300">
                Connect with certified, empathetic professionals dedicated to mapping your precise academic outcome.
            </p>
        </header>
        <div class="h-80">
             @include('frontend.pages.components.counsellers.counseller-card')
        </div>
    </div>
</section>
