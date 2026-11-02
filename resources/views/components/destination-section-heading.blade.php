@props(['eyebrow', 'title', 'description' => null])

<div class="max-w-3xl" data-reveal>
    @if ($eyebrow)
        <div class="mb-3.5 inline-flex items-center gap-2 rounded-full bg-brand-50 px-3.5 py-1.5 text-xs font-bold uppercase tracking-[0.18em] text-brand-700">
            <span class="h-1.5 w-1.5 rounded-full bg-brand-600"></span>
            {{ $eyebrow }}
        </div>
    @endif

    <h2 class="text-2xl font-extrabold tracking-tight text-[#0B1D36] sm:text-3xl lg:text-[38px] lg:leading-[1.15]">
        {{ $title }}
    </h2>

    @if ($description)
        <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base sm:leading-8">
            {{ $description }}
        </p>
    @endif
</div>