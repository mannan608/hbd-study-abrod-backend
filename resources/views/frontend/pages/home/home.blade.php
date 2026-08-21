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
  
@include('frontend.pages.home.sections.university-partners')
@include('frontend.pages.home.sections.course-section')
@include('frontend.pages.home.sections.counseller-section')



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

</style>
