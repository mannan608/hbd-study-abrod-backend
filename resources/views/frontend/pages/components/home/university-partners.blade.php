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
    ];
@endphp

<section class="py-20 bg-gradient-to-b from-white to-gray-50 border-y border-gray-100 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-[#1068b2]/10 rounded-full mb-4"> <span
                    class="text-2xl"> 🤝 </span> <span
                    class="text-sm font-semibold text-gray-600 uppercase tracking-wider"> Global Network </span> </div>
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
