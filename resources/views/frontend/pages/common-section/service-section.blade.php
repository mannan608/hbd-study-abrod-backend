{{-- resources/views/components/study-abroad-services.blade.php --}}

@props([
    'badge' => 'Global Opportunities',
    'title' => 'Explore Our Study Abroad Services',
    'description' => 'Make your international education journey seamless and successful.',
    'services' => []
])

@php
    // Dummy data (used when no $services are passed)
    $defaultServices = [
        [
            'title' => 'Admission Counselling & Course Selection',
            'description' => 'Navigate the complex admissions process with expert guidance and select the perfect course to match your aspirations.',
            'icon' => 'compass',
        ],
        [
            'title' => 'English Language Preparation (IELTS/PTE) & NAATI CCL',
            'description' => 'Excel in English proficiency exams such as IELTS, PTE, and NAATI CCL with our tailored preparation programs.',
            'icon' => 'languages',
        ],
        [
            'title' => 'Scholarship & Financial Assistance',
            'description' => 'Unlock opportunities for scholarships and financial aid to support your academic ambitions without stress.',
            'icon' => 'award',
        ],
        [
            'title' => 'Arranging Health Cover OSHC/OVHC',
            'description' => 'Ensure your well-being with hassle-free arrangements for Overseas Student Health Cover (OSHC) or Visitor Cover (OVHC).',
            'icon' => 'shield-check',
        ],
        [
            'title' => 'Course Provider Changing',
            'description' => 'Explore options for changing course providers seamlessly to optimize your educational experience and growth.',
            'icon' => 'refresh-cw',
        ],
        [
            'title' => 'Professional Year Admission',
            'description' => 'Secure admission into professional year programs to kickstart your career journey in your chosen field.',
            'icon' => 'briefcase',
        ],
    ];

    $services = !empty($services) ? $services : $defaultServices;
@endphp

<section class="relative defer-render py-12 md:py-16 lg:py-20 bg-brand-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <header class="pb-10 mx-auto max-w-2xl px-4 text-center font-sans reveal-on-scroll">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-brand-500/10 text-brand-500 rounded-full mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                    <path d="M2 12h20" />
                </svg>
                <span class="text-sm font-semibold uppercase">{{ $badge }}</span>
            </div>

            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 uppercase">
                {{ $title }}
            </h1>

            <p class="mx-auto mt-4 max-w-2xl text-base sm:text-lg text-neutral-600">
                {{ $description }}
            </p>
        </header>

        {{-- Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-6">
            @foreach ($services as $service)
                <article
                    class="group relative flex flex-col justify-between overflow-hidden rounded-2xl bg-white border border-slate-200 shadow-sm reveal-on-scroll transition-transform duration-300 ease-out hover:-translate-y-1 hover:shadow-md">
                    
                    <div class="p-7 sm:p-8">
                        {{-- Icon --}}
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-brand-50 to-blue-50 text-brand-600 border border-brand-100/50 shadow-sm transition-transform duration-300 ease-out group-hover:scale-105">
                            <iconify-icon 
                                icon="lucide:{{ $service['icon'] }}"
                                class="text-[22px] text-brand-600 transition-colors duration-200 group-hover:text-brand-700">
                            </iconify-icon>
                        </div>

                        {{-- Text --}}
                        <div class="mt-5">
                            <h3
                                class="text-lg font-bold text-slate-800 transition-colors duration-200 group-hover:text-brand-600">
                                {{ $service['title'] }}
                            </h3>
                            <p class="mt-2.5 text-sm leading-relaxed text-slate-500">
                                {{ $service['description'] }}
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>