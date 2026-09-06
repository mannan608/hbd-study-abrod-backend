@extends('student.layouts.app')

@section('content')
<div class="pt-5 space-y-6"
    x-data="stepWizard({{ $activeStep }})"
    x-init="init()"
    @go-to-step.window="goTo($event.detail)">

    {{-- ── Flash success ───────────────────────────────────────────────────── --}}
    @if (session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="flex items-start gap-3 rounded-2xl border border-green-200 bg-green-50 p-4">
            <svg class="mt-0.5 h-5 w-5 flex-shrink-0 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            <p class="text-sm text-green-800">{{ session('success') }}</p>
        </div>
    @endif

    {{-- ── Validation errors (shown at top) ───────────────────────────────── --}}
    @if ($errors->any())
        <div class="flex items-start gap-3 rounded-2xl border border-rose-200 bg-rose-50 p-4">
            <iconify-icon icon="lucide:alert-circle" class="mt-0.5 text-rose-500 text-lg flex-shrink-0"></iconify-icon>
            <div>
                <p class="text-xs font-semibold text-rose-800 mb-1">Please fix the following errors:</p>
                <ul class="list-disc list-inside space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li class="text-xs text-rose-700">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    {{-- ── Progress Stepper ─────────────────────────────────────────────────── --}}
    <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow-xs border border-neutral-200/80 dark:border-neutral-800 px-4 sm:px-6 py-4">
        <div class="flex items-center justify-between gap-2 overflow-x-auto pb-1">
            @php
                $steps = [
                    1 => ['icon' => 'lucide:id-card',          'label' => 'Personal'],
                    2 => ['icon' => 'lucide:graduation-cap',   'label' => 'Academic'],
                    3 => ['icon' => 'lucide:compass',          'label' => 'Study Plan'],
                    4 => ['icon' => 'lucide:briefcase',        'label' => 'Experience'],
                    5 => ['icon' => 'lucide:shield-alert',     'label' => 'Immigration'],
                    6 => ['icon' => 'lucide:folder-check',     'label' => 'Documents'],
                ];
                $maxStep = $student->profile_step ?? 1;
            @endphp

            @foreach ($steps as $num => $info)
                @php
                    $isDone      = $num < $maxStep;
                    $isCurrent   = $num === $activeStep;
                    $isAccessible = $num <= $maxStep;
                @endphp

                {{-- Connector line (not before first step) --}}
                @if ($num > 1)
                    <div class="flex-1 h-px min-w-[16px] transition-colors duration-300
                        {{ $num <= $maxStep ? 'bg-brand-400' : 'bg-neutral-200 dark:bg-neutral-700' }}">
                    </div>
                @endif

                {{-- Step bubble --}}
                <button type="button"
                    @if ($isAccessible)
                        @click="goTo({{ $num }})"
                    @endif
                    class="flex flex-col items-center gap-1 group flex-shrink-0
                        {{ $isAccessible ? 'cursor-pointer' : 'cursor-not-allowed opacity-50' }}"
                    {{ ! $isAccessible ? 'disabled' : '' }}>

                    <div class="flex h-9 w-9 items-center justify-center rounded-xl transition-all duration-200
                        {{ $isCurrent
                            ? 'bg-brand-600 text-white shadow-md shadow-brand-200 dark:shadow-brand-900/40'
                            : ($isDone
                                ? 'bg-brand-100 text-brand-600 dark:bg-brand-900/40 dark:text-brand-400'
                                : 'bg-neutral-100 text-neutral-400 dark:bg-neutral-800 dark:text-neutral-500') }}">
                        @if ($isDone)
                            <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>
                        @else
                            <iconify-icon icon="{{ $info['icon'] }}" class="text-sm"></iconify-icon>
                        @endif
                    </div>

                    <span class="text-[10px] font-semibold whitespace-nowrap
                        {{ $isCurrent
                            ? 'text-brand-600 dark:text-brand-400'
                            : ($isDone
                                ? 'text-brand-500 dark:text-brand-500'
                                : 'text-neutral-400 dark:text-neutral-500') }}">
                        {{ $info['label'] }}
                    </span>
                </button>
            @endforeach
        </div>

        {{-- Step counter --}}
        <p class="mt-3 text-center text-xs text-neutral-500 dark:text-neutral-400">
            Step <span class="font-bold text-neutral-700 dark:text-neutral-200">{{ $activeStep }}</span> of
            <span class="font-bold text-neutral-700 dark:text-neutral-200">6</span>
            — <span class="text-brand-600 dark:text-brand-400 font-semibold">{{ $steps[$activeStep]['label'] ?? '' }}</span>
        </p>
    </div>

    {{-- ── Step Panels ──────────────────────────────────────────────────────── --}}

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
function stepWizard(initialStep) {
    return {
        currentStep: initialStep,

        init() {
            // Scroll to top of wizard when step changes
            this.$watch('currentStep', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        },

        goTo(step) {
            this.currentStep = step;
            // Update the URL so refresh keeps the same step
            const url = new URL(window.location.href);
            url.searchParams.set('step', step);
            history.replaceState(null, '', url.toString());
        },
    };
}
</script>
@endpush
