@extends('student.layouts.app')

@section('content')

{{-- ── Fixed top-right toast (success) ────────────────────────────────────── --}}
@if (session('success'))
    <div x-data="{ show: true }"
         x-show="show"
         x-init="setTimeout(() => show = false, 4000)"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-x-8 scale-95"
         x-transition:enter-end="opacity-100 translate-x-0 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-x-0 scale-100"
         x-transition:leave-end="opacity-0 translate-x-8 scale-95"
         class="fixed top-5 right-5 z-[9999] max-w-sm w-full pointer-events-auto">
        <div class="flex items-start gap-3 rounded-2xl border border-green-200 bg-white shadow-lg shadow-green-100/60 dark:bg-neutral-900 dark:border-green-800/60 px-4 py-3.5">
            <div class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-green-100 dark:bg-green-900/40">
                <iconify-icon icon="lucide:check-circle-2" class="text-green-600 dark:text-green-400 text-base"></iconify-icon>
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-xs font-semibold text-neutral-800 dark:text-neutral-100">Saved successfully</p>
                <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-0.5 truncate">{{ session('success') }}</p>
            </div>
            <button @click="show = false" class="text-neutral-400 hover:text-neutral-600 dark:hover:text-neutral-200 transition-colors flex-shrink-0">
                <iconify-icon icon="lucide:x" class="text-sm"></iconify-icon>
            </button>
        </div>
    </div>
@endif

{{-- ── Main wizard ──────────────────────────────────────────────────────────── --}}
<div class="pt-5 space-y-6"
     x-data="stepWizard({{ $activeStep }}, {{ $student->profile_step ?? 1 }})"
     x-init="init()"
     @go-to-step.window="goTo($event.detail)">

    {{-- ── Progress Stepper ────────────────────────────────────────────────── --}}
    @php
        $stepsMeta = [
            1 => ['icon' => 'lucide:id-card',        'label' => 'Personal'],
            2 => ['icon' => 'lucide:graduation-cap', 'label' => 'Academic'],
            3 => ['icon' => 'lucide:compass',        'label' => 'Study Plan'],
            4 => ['icon' => 'lucide:briefcase',      'label' => 'Experience'],
            5 => ['icon' => 'lucide:shield-alert',   'label' => 'Immigration'],
            6 => ['icon' => 'lucide:folder-check',   'label' => 'Documents'],
        ];
    @endphp

    <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow-xs border border-neutral-200/80 dark:border-neutral-800 px-4 sm:px-6 py-4">
        <div class="flex items-center justify-between gap-2 overflow-x-auto pb-1">
            @foreach ($stepsMeta as $num => $info)

                {{-- Connector --}}
                @if ($num > 1)
                    <div class="flex-1 h-px min-w-[16px]"
                         :class="maxStep >= {{ $num }} ? 'bg-brand-400' : 'bg-neutral-200 dark:bg-neutral-700'">
                    </div>
                @endif

                {{-- Bubble --}}
                <button type="button"
                        @click="maxStep >= {{ $num }} && goTo({{ $num }})"
                        :class="maxStep >= {{ $num }} ? 'cursor-pointer' : 'cursor-not-allowed opacity-50'"
                        class="flex flex-col items-center gap-1 flex-shrink-0 focus:outline-none">

                    <div class="flex h-9 w-9 items-center justify-center rounded-xl transition-all duration-200"
                         :class="currentStep === {{ $num }}
                            ? 'bg-brand-600 text-white shadow-md shadow-brand-200 dark:shadow-brand-900/40'
                            : (maxStep > {{ $num }}
                                ? 'bg-brand-100 text-brand-600 dark:bg-brand-900/40 dark:text-brand-400'
                                : 'bg-neutral-100 text-neutral-400 dark:bg-neutral-800 dark:text-neutral-500')">
                        {{-- Show check when done, icon otherwise --}}
                        <template x-if="maxStep > {{ $num }} && currentStep !== {{ $num }}">
                            <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>
                        </template>
                        <template x-if="!(maxStep > {{ $num }} && currentStep !== {{ $num }})">
                            <iconify-icon icon="{{ $info['icon'] }}" class="text-sm"></iconify-icon>
                        </template>
                    </div>

                    <span class="text-[10px] font-semibold whitespace-nowrap"
                          :class="currentStep === {{ $num }}
                            ? 'text-brand-600 dark:text-brand-400'
                            : (maxStep > {{ $num }}
                                ? 'text-brand-500 dark:text-brand-500'
                                : 'text-neutral-400 dark:text-neutral-500')">
                        {{ $info['label'] }}
                    </span>
                </button>

            @endforeach
        </div>

        {{-- Step counter — fully Alpine-driven --}}
        <p class="mt-3 text-center text-xs text-neutral-500 dark:text-neutral-400">
            Step
            <span class="font-bold text-neutral-700 dark:text-neutral-200" x-text="currentStep"></span>
            of <span class="font-bold text-neutral-700 dark:text-neutral-200">6</span>
            —
            <span class="text-brand-600 dark:text-brand-400 font-semibold" x-text="stepLabel()"></span>
        </p>
    </div>

    {{-- ── Step panels (all rendered, shown/hidden via x-show) ─────────────── --}}

    <div x-show="currentStep === 1" x-cloak>
        @include('student.profile.step-form.personal-information')
    </div>

    <div x-show="currentStep === 2" x-cloak>
        @include('student.profile.step-form.academic-information')
    </div>

    <div x-show="currentStep === 3" x-cloak>
        @include('student.profile.step-form.study-plan')
    </div>

    <div x-show="currentStep === 4" x-cloak>
        @include('student.profile.step-form.work-experience')
    </div>

    <div x-show="currentStep === 5" x-cloak>
        @include('student.profile.step-form.immigration-history')
    </div>

    <div x-show="currentStep === 6" x-cloak>
        @include('student.profile.step-form.visa-documents-checklist')
    </div>

</div>
@endsection

@push('scripts')
<script>
function stepWizard(initialStep, maxStepFromServer) {
    const labels = {
        1: 'Personal',
        2: 'Academic',
        3: 'Study Plan',
        4: 'Experience',
        5: 'Immigration',
        6: 'Documents',
    };

    return {
        currentStep: initialStep,
        maxStep: maxStepFromServer,

        init() {
            this.$watch('currentStep', (step) => {
                // Keep URL in sync
                const url = new URL(window.location.href);
                url.searchParams.set('step', step);
                history.replaceState(null, '', url.toString());

                // Scroll to top smoothly
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        },

        goTo(step) {
            if (step < 1 || step > 6) return;
            if (step > this.maxStep) return; // can't skip ahead
            this.currentStep = step;
        },

        stepLabel() {
            return labels[this.currentStep] ?? '';
        },
    };
}
</script>
@endpush
