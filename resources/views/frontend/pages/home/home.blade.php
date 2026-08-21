@extends('frontend.layouts.app')


@section('content')
    @include('frontend.pages.home.sections.hero')

    <section class="relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="surface-stats rounded-3xl -mt-20 relative overflow-hidden  shadow-2xl">
                <div class="grid grid-cols-1 md:grid-cols-[1fr_auto_1fr_auto_1fr] items-center">
                    <div class="flex flex-col items-center justify-center px-6 py-8 sm:py-10">
                        <span class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white">
                            10,000+
                        </span>
                        <span class="mt-2 text-sm sm:text-base lg:text-lg font-medium text-white/80">
                            Courses
                        </span>
                    </div>
                    <div class="hidden md:flex justify-center h-20">
                        <div class="w-px h-full bg-white/20"></div>
                    </div>
                    <div class="flex flex-col items-center justify-center px-6 py-8 sm:py-10">
                        <span class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white">
                            3,000+
                        </span>
                        <span class="mt-2 text-sm sm:text-base lg:text-lg font-medium text-white/80">
                            Institutions
                        </span>
                    </div>
                    <div class="hidden md:flex justify-center h-20">
                        <div class="w-px h-full bg-white/20"></div>
                    </div>
                    <div class="flex flex-col items-center justify-center px-6 py-8 sm:py-10">
                        <span class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white">
                            1,000+
                        </span>
                        <span class="mt-2 text-sm sm:text-base lg:text-lg font-medium text-white/80">
                            Verified Experts
                        </span>
                    </div>

                </div>

            </div>

        </div>
    </section>

    @include('frontend.pages.home.sections.course-section')
  
    @include('frontend.pages.home.sections.how-it-work')

    <section class=" bg-brand-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 relative overflow-hidden rounded-3xl bg-[#155b9d] shadow-xl">

            <!-- Background Image -->
            <img src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?q=80&w=1600&auto=format&fit=crop"
                alt="Australia Landmarks"
                class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-700 hover:scale-105" />

            <!-- Gradient Overlay (using #1968b2 and #155b9d with opacity so the image stays visible) -->
            <div
                class="absolute inset-0 bg-gradient-to-r from-[#155b9d]/90 via-[#1968b2]/80 to-[#155b9d]/70 backdrop-brightness-90">
            </div>

            <!-- Content Container -->
            <div
                class="relative z-10 flex flex-col items-center justify-center px-6 py-12 text-center sm:px-12 sm:py-16 md:py-20">

                <!-- Quote Icon -->
                <svg class="mb-4 h-10 w-10 text-white/40 sm:h-12 sm:w-12" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                </svg>

                <!-- Quote Text -->
                <h2
                    class="max-w-3xl text-2xl font-black uppercase leading-tight tracking-wide text-white drop-shadow-md sm:text-3xl md:text-4xl">
                    "Imagine arriving in Australia knowing you've made the right decision. That's the confidence we build
                    from day one."
                </h2>

                <!-- CTA Button -->
                <a href="#"
                    class="mt-8 inline-flex items-center gap-2 rounded-full bg-white px-7 py-3.5 text-xs font-bold uppercase tracking-wider text-[#155b9d] shadow-md transition duration-300 hover:bg-slate-100 hover:text-[#1968b2] hover:shadow-lg hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-[#155b9d]">
                    <span>See what you can achieve</span>
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>

            </div>
        </div>
    </section>
    @include('frontend.pages.home.sections.expo-event')
      @include('frontend.pages.home.sections.counseller-section')
    @include('frontend.pages.home.sections.university-partners')


@endsection

<style>
    .surface-hero {
        background: linear-gradient(120deg, oklch(24% .045 248 / .94) 0%, oklch(30% .07 225 / .82) 55%, oklch(40% .1 60 / .55) 100%);
    }

    .surface-stats {
        background: linear-gradient(120deg, oklch(24% .045 248 / .94) 0%, oklch(30% .07 225 / .82) 55%, oklch(40% .1 60 / .55) 100%);
    }

    .shadow-lift {
        box-shadow: 0 2px 6px oklch(24% .045 248 / .08), 0 24px 48px -20px oklch(24% .045 248 / .28);
    }

    @keyframes university-left-to-right {
        from {
            transform: translateX(-50%);
        }

        to {
            transform: translateX(0);
        }
    }

    @keyframes university-right-to-left {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

  @keyframes marquee {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}

/* Enable custom animation class */
@keyframes marquee {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}

/* Base Marquee Animation Class */
.animate-marquee {
  animation: marquee 50s linear infinite !important;
}

/* Pause when hovering the container OR any child element inside it */
.animate-marquee:hover,
.animate-marquee *:hover {
  animation-play-state: paused !important;
}
@media (min-width: 640px) {
  .animate-marquee {
    animation: marquee 50s linear infinite !important;
  }
}
</style>
