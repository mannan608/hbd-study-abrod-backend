@php
    $universities = [
        ['name' => 'Stanford University', 'logo' => asset('frontend-img/patner/sponsor_1.png')],
        ['name' => 'Harvard University', 'logo' => asset('frontend-img/patner/sponsor_2.png')],
        ['name' => 'University of Oxford', 'logo' => asset('frontend-img/patner/sponsor_3.png')],
        ['name' => 'MIT', 'logo' => asset('frontend-img/patner/sponsor_4.png')],
        ['name' => 'University of Cambridge', 'logo' => asset('frontend-img/patner/sponsor_5.png')],
        ['name' => 'Yale University', 'logo' => asset('frontend-img/patner/sponsor_6.png')],
        ['name' => 'Princeton University', 'logo' => asset('frontend-img/patner/sponsor_7.png')],
        ['name' => 'Columbia University', 'logo' => asset('frontend-img/patner/sponsor_8.png')],
        ['name' => 'ETH Zurich', 'logo' => asset('frontend-img/patner/sponsor_9.png')],
        ['name' => 'UC Berkeley', 'logo' => asset('frontend-img/patner/sponsor_10.png')],
        ['name' => 'UC Berkeley', 'logo' => asset('frontend-img/patner/sponsor_11.png')],
        ['name' => 'UC Berkeley', 'logo' => asset('frontend-img/patner/sponsor_12.png')],
    ];
@endphp

<section class="py-20  overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="text-center">
            {{-- <div class="inline-flex items-center gap-2 px-4 py-2 bg-brand-100 rounded-full mb-4">
                <span class="text-2xl text-brand-600"> 🤝 </span>
                <span class="text-sm font-semibold text-brand-600 uppercase tracking-wider"> Global Network </span>
            </div> --}}
             <div
                class="inline-flex items-center gap-2 px-5 py-2.5 bg-brand-100 backdrop-blur-sm rounded-full border border-purple-200/50 mb-8 animate-in fade-in slide-in-from-bottom-3 duration-700">
                <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4 text-brand-600 animate-pulse">
                        <path
                            d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                        </path>
                        <path d="M20 3v4"></path>
                        <path d="M22 5h-4"></path>
                        <path d="M4 17v2"></path>
                        <path d="M5 18H3"></path>
                    </svg>
                    <div class="absolute inset-0 w-4 h-4 bg-[#1068b2] blur-md animate-pulse"></div>
                </div><span class="text-sm font-semibold  bg-clip-text text-brand-600">Global Network</span>

            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2"> Trusted By <span class="text-[#1068b2]"> 2,000+
                    Universities </span> </h2>
            <p class="text-gray-600"> Partnering with the world's leading educational institutions </p>
        </div>
    </div>
    <div class="relative space-y-5">
        <div
            class="absolute left-0 top-0 bottom-0 w-20 sm:w-32 lg:w-40 bg-gradient-to-r from-gray-50 to-transparent z-20 pointer-events-none">
        </div>
        <div
            class="absolute right-0 top-0 bottom-0 w-20 sm:w-32 lg:w-40 bg-gradient-to-l from-gray-50 to-transparent z-20 pointer-events-none">
        </div>
        <div class="w-full overflow-hidden">
            <div
                class="flex w-max animate-[university-left-to-right_50s_linear_infinite] hover:[animation-play-state:paused]">
                <div class="flex shrink-0 gap-5 pr-5">
                    @foreach ($universities as $university)
                        <div
                            class="flex shrink-0 items-center gap-4 px-7 py-6 bg-white rounded-2xl border border-gray-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:border-[#1068b2]/30 group">
                            <div class=" shrink-0 flex items-center justify-center">
                                <img src="{{ $university['logo'] }}" alt="{{ $university['name'] }}"
                                    class="max-w-full max-h-9.5 w-auto h-auto object-contain transition-transform duration-300 group-hover:scale-110">
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="flex shrink-0 gap-5 pr-5" aria-hidden="true">
                    @foreach ($universities as $university)
                        <div
                            class="flex shrink-0 items-center gap-4 px-7 py-6 bg-white rounded-2xl border border-gray-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:border-[#1068b2]/30 group">
                            <div class=" shrink-0 flex items-center justify-center"> <img
                                    src="{{ $university['logo'] }}" alt="{{ $university['name'] }}"
                                    class="max-w-full max-h-9.5 w-auto h-auto object-contain transition-transform duration-300 group-hover:scale-110">
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-full overflow-hidden">
            <div
                class="flex w-max animate-[university-right-to-left_50s_linear_infinite] hover:[animation-play-state:paused]">
                <div class="flex shrink-0 gap-5 pr-5">
                    @foreach ($universities as $university)
                        <div
                            class="flex shrink-0 items-center gap-4 px-7 py-6 bg-white rounded-2xl border border-gray-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:border-[#1068b2]/30 group">
                            <div class=" shrink-0 flex items-center justify-center">
                                <img src="{{ $university['logo'] }}" alt="{{ $university['name'] }}"
                                    class="max-w-full max-h-9.5 w-auto h-auto object-contain transition-transform duration-300 group-hover:scale-110">
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="flex shrink-0 gap-5 pr-5" aria-hidden="true">
                    @foreach ($universities as $university)
                        <div
                            class="flex shrink-0 items-center gap-4 px-7 py-6 bg-white rounded-2xl border border-gray-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:border-[#1068b2]/30 group">
                            <div class=" shrink-0 flex items-center justify-center"> <img
                                    src="{{ $university['logo'] }}" alt="{{ $university['name'] }}"
                                    class="max-w-full max-h-9.5 w-auto h-auto object-contain transition-transform duration-300 group-hover:scale-110">
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
