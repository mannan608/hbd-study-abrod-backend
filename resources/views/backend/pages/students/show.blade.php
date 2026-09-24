@extends('backend.layouts.app')

@section('content')
    <div x-data="profileNavigation()" x-init="init()" class="relative w-full">

        <main class="flex-1 space-y-6">
            <div class="grid grid-cols-1 items-start gap-6 lg:grid-cols-12">

                {{-- LEFT COLUMN --}}
                <div class="min-w-0 space-y-6 lg:col-span-8">

                    {{-- PROFILE HEADER --}}
                    <section class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm">

                        {{-- Header Background --}}
                        <div class="relative h-20 bg-gradient-to-r from-brand-700 via-brand-600 to-brand-500 sm:h-24">
                            <div
                                class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.16),transparent_45%)]">
                            </div>
                        </div>


                        <div class="px-5 pb-6 sm:px-8">

                            <div class="-mt-14 relative flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">

                                {{-- Profile Photo + Basic Info --}}
                                <div class="flex flex-col items-start gap-4 sm:flex-row sm:items-end">

                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Aisha Rahman"
                                        class="h-28 w-28 rounded-2xl border-4 border-white object-cover shadow-lg">


                                    <div class="pb-1">

                                        <div class="mb-3 flex flex-wrap items-center gap-2">

                                            <h1 class="text-2xl font-bold tracking-tight text-white">
                                                Aisha Rahman
                                            </h1>

                                            <span
                                                class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-200">
                                                <iconify-icon icon="lucide:circle-check" class="text-sm"></iconify-icon>

                                                Ready for Visa Submission
                                            </span>

                                        </div>


                                        <p class="flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-slate-600">

                                            <span class="flex items-center gap-1.5">
                                                <iconify-icon icon="lucide:phone" class="text-brand-500"></iconify-icon>

                                                +880 1315 565037
                                            </span>


                                            <span class="flex items-center gap-1.5">
                                                <iconify-icon icon="lucide:mail" class="text-brand-500"></iconify-icon>

                                                aisha.rahman@email.com
                                            </span>

                                        </p>


                                        <p class="mt-1.5 flex items-center gap-1.5 text-sm text-slate-500">

                                            <iconify-icon icon="lucide:map-pin" class="text-brand-500"></iconify-icon>

                                            Dhaka, Bangladesh · Seeking study abroad

                                        </p>

                                    </div>

                                </div>


                                {{-- Key Stats --}}
                                <div class="flex gap-6 border-t border-brand-100 pt-4 sm:border-0 sm:pt-0">

                                    <div class="text-center">
                                        <p class="text-xl font-bold text-brand-950">
                                            3.82
                                        </p>

                                        <p class="mt-0.5 text-xs text-slate-500">
                                            GPA
                                        </p>
                                    </div>


                                    <div class="text-center">
                                        <p class="text-xl font-bold text-brand-950">
                                            7.5
                                        </p>

                                        <p class="mt-0.5 text-xs text-slate-500">
                                            IELTS
                                        </p>
                                    </div>


                                    {{-- <div class="text-center">
                                        <p class="text-xl font-bold text-brand-950">
                                           322
                                        </p>

                                        <p class="mt-0.5 text-xs text-slate-500">
                                            GRE General
                                        </p>
                                    </div> --}}

                                </div>

                            </div>


                            {{-- Tags + Action Buttons --}}
                            <div class="mt-4 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                                <div class="flex flex-wrap gap-2">

                                    <span
                                        class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                                        VIP
                                    </span>


                                    <span
                                        class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                                        Intake · September 2026
                                    </span>


                                    <span
                                        class="rounded-full border border-brand-100 bg-brand-25 px-3 py-1.5 text-xs font-medium text-brand-700">
                                        Scholarships
                                    </span>

                                </div>


                                <div class="flex flex-wrap gap-2">

                                    <button type="button"
                                        class="rounded-lg border border-brand-200 bg-white px-4 py-2 text-sm font-semibold text-brand-700 transition hover:bg-brand-50">
                                         HBD Services
                                    </button>


                                    <button type="button"
                                        class="rounded-lg bg-brand-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-brand-700">
                                        Quick Preview
                                    </button>

                                </div>

                            </div>

                        </div>

                    </section>

                    {{-- STICKY TAB NAVIGATION --}}
                    <section
                        class="sticky top-19 z-40 overflow-hidden rounded-2xl border border-slate-200 bg-white/95 shadow-sm backdrop-blur-md">
                        {{--  HORIZONTAL SCROLLABLE TABS --}}
                        <div x-ref="tabContainer" class="profile-tabs-scroll overflow-x-auto">

                            <div class="flex min-w-max items-center gap-1.5 px-3 py-3 sm:px-4">


                                {{-- PERSONAL INFORMATION --}}
                                <button type="button" data-tab="personal-information"
                                    @click="scrollToSection('personal-information')"
                                    :class="activeTab === 'personal-information'
                                        ?
                                        'border-brand-600 bg-brand-600 text-white shadow-sm' :
                                        'border-transparent bg-slate-50 text-slate-600 hover:border-slate-200 hover:bg-white hover:text-slate-900'"
                                    class="inline-flex shrink-0 items-center gap-2 rounded-xl border px-3.5 py-2.5 text-xs font-semibold transition-all duration-200">
                                    <iconify-icon icon="lucide:user-round" class="text-base"></iconify-icon>

                                    <span>
                                        Personal Info
                                    </span>
                                </button>


                                {{-- ACADEMIC --}}
                                <button type="button" data-tab="academic-background"
                                    @click="scrollToSection('academic-background')"
                                    :class="activeTab === 'academic-background'
                                        ?
                                        'border-blue-600 bg-blue-600 text-white shadow-sm' :
                                        'border-transparent bg-blue-50 text-blue-700 hover:border-blue-200 hover:bg-blue-100'"
                                    class="inline-flex shrink-0 items-center gap-2 rounded-xl border px-3.5 py-2.5 text-xs font-semibold transition-all duration-200">
                                    <iconify-icon icon="lucide:graduation-cap" class="text-base"></iconify-icon>

                                    <span>
                                        Academic
                                    </span>
                                </button>


                                {{-- STUDY PLAN --}}
                                <button type="button" data-tab="study-plan" @click="scrollToSection('study-plan')"
                                    :class="activeTab === 'study-plan'
                                        ?
                                        'border-violet-600 bg-violet-600 text-white shadow-sm' :
                                        'border-transparent bg-violet-50 text-violet-700 hover:border-violet-200 hover:bg-violet-100'"
                                    class="inline-flex shrink-0 items-center gap-2 rounded-xl border px-3.5 py-2.5 text-xs font-semibold transition-all duration-200">
                                    <iconify-icon icon="lucide:book-open-check" class="text-base"></iconify-icon>

                                    <span>
                                        Study Plan
                                    </span>
                                </button>


                                {{-- FINANCIAL --}}
                                <button type="button" data-tab="financial-family"
                                    @click="scrollToSection('financial-family')"
                                    :class="activeTab === 'financial-family'
                                        ?
                                        'border-emerald-600 bg-emerald-600 text-white shadow-sm' :
                                        'border-transparent bg-emerald-50 text-emerald-700 hover:border-emerald-200 hover:bg-emerald-100'"
                                    class="inline-flex shrink-0 items-center gap-2 rounded-xl border px-3.5 py-2.5 text-xs font-semibold transition-all duration-200">
                                    <iconify-icon icon="lucide:wallet-cards" class="text-base"></iconify-icon>

                                    <span>
                                        Financial
                                    </span>
                                </button>


                                {{-- EXPERIENCE --}}
                                <button type="button" data-tab="experience" @click="scrollToSection('experience')"
                                    :class="activeTab === 'experience'
                                        ?
                                        'border-brand-600 bg-brand-600 text-white shadow-sm' :
                                        'border-transparent bg-slate-50 text-slate-600 hover:border-slate-200 hover:bg-white hover:text-slate-900'"
                                    class="inline-flex shrink-0 items-center gap-2 rounded-xl border px-3.5 py-2.5 text-xs font-semibold transition-all duration-200">
                                    <iconify-icon icon="lucide:briefcase-business" class="text-base"></iconify-icon>

                                    <span>
                                        Experience
                                    </span>
                                </button>


                                {{-- IMMIGRATION --}}
                                <button type="button" data-tab="immigration-history"
                                    @click="scrollToSection('immigration-history')"
                                    :class="activeTab === 'immigration-history'
                                        ?
                                        'border-amber-500 bg-amber-500 text-white shadow-sm' :
                                        'border-transparent bg-amber-50 text-amber-700 hover:border-amber-200 hover:bg-amber-100'"
                                    class="inline-flex shrink-0 items-center gap-2 rounded-xl border px-3.5 py-2.5 text-xs font-semibold transition-all duration-200">
                                    <iconify-icon icon="lucide:shield-alert" class="text-base"></iconify-icon>

                                    <span>
                                        Immigration
                                    </span>
                                </button>

                            </div>

                        </div>
                    </section>

                    {{-- 1. PERSONAL INFORMATION --}}
                    <section id="personal-information"
                        class="scroll-mt-28 rounded-2xl border border-slate-200 bg-white p-5 shadow-xs sm:p-6 space-y-6">
                        @include('backend.pages.students.partial.basic')
                    </section>

                    {{--  2. ACADEMIC BACKGROUND --}}
                    <section id="academic-background"
                        class="scroll-mt-28 rounded-2xl border border-slate-200 bg-white p-5 shadow-xs sm:p-6 space-y-6">
                        @include('backend.pages.students.partial.academic')
                    </section>

                    {{--  3. STUDY PLAN --}}
                    <section id="study-plan"
                        class="scroll-mt-28 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6 space-y-6">
                        @include('backend.pages.students.partial.study-plan')

                    </section>
                    {{--  4. FINANCIAL & FAMILY --}}
                    <section id="financial-family"
                        class="scroll-mt-28 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6 space-y-6">
                        @include('backend.pages.students.partial.financial')
                    </section>

                    {{--  5. EXPERIENCE --}}
                    <section id="experience"
                        class="scroll-mt-28 rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                        @include('backend.pages.students.partial.experience')
                    </section>

                    {{--  6. IMMIGRATION HISTORY --}}
                    <section id="immigration-history"
                        class="scroll-mt-28 rounded-2xl border border-amber-100 bg-white p-5 shadow-sm sm:p-6 space-y-5">
                        @include('backend.pages.students.partial.immigration')
                    </section>

                    {{--  7. VISA DOCUMENTS --}}
                    <section id="visa-documents"
                        class="scroll-mt-28 rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6">
                        @include('backend.pages.students.partial.documents')
                    </section>

                    {{-- 8. APPLICATIONS HISTORY --}}
                    <section id="applications-history"
                        class="scroll-mt-28 rounded-2xl border border-brand-100 bg-white p-5 shadow-sm sm:p-6 space-y-5">
                        @include('backend.pages.students.partial.applications-history')
                    </section>

                    {{--  9. AFTER VISA --}}
                    <section id="after-visa"
                        class="scroll-mt-28 rounded-2xl border border-emerald-100 bg-white p-5 shadow-sm sm:p-6 space-y-5">
                        @include('backend.pages.students.partial.after-visa')
                    </section>

                </div>

                {{--  RIGHT COLUMN STICKY --}}
                <aside class="min-w-0 self-start lg:sticky lg:top-22 lg:col-span-4">
                    @include('backend.pages.students.partial.lead-activity')
                </aside>
            </div>
        </main>
    </div>


    {{-- Activity History --}}
    <section id="activity-history" class="mt-12">
        @include('backend.pages.students.partial.activity-history')
    </section>

    {{--  ALPINE + STICKY TAB CSS --}}
    <style>
        [x-cloak] {
            display: none !important;
        }

        /*
                     * Horizontal tab scrollbar
                     * Scroll remains available, scrollbar is hidden.
                     */
        .profile-tabs-scroll {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .profile-tabs-scroll::-webkit-scrollbar {
            display: none;
        }

        /*
                     * Smooth page scrolling
                     */
        html {
            scroll-behavior: smooth;
        }
    </style>

    {{-- ALPINE COMPONENT --}}
    <script>
        function profileNavigation() {

            return {

                /*
                 * Current active section
                 */
                activeTab: 'personal-information',


                /*
                 * All sections
                 */
                sections: [
                    'personal-information',
                    'academic-background',
                    'study-plan',
                    'financial-family',
                    'experience',
                    'immigration-history',
                    'visa-documents',
                    'applications-history',
                    'after-visa'
                ],


                /*
                 * Initialize
                 */
                init() {

                    this.$nextTick(() => {

                        this.setupScrollSpy();

                        /*
                         * Initial active section
                         */
                        this.updateActiveSection();

                    });

                },


                /*
                 * Get all actual section elements
                 */
                getSectionElements() {

                    return this.sections
                        .map(id => document.getElementById(id))
                        .filter(section => section !== null);

                },


                /*
                 * CLICK TAB
                 *
                 * Does NOT hide anything.
                 * Simply scrolls to the selected section.
                 */
                scrollToSection(id) {

                    const section = document.getElementById(id);

                    if (!section) {
                        return;
                    }


                    /*
                     * Set active immediately
                     */
                    this.setActive(id);


                    /*
                     * Sticky tab position.
                     *
                     * We leave enough space so the section
                     * heading doesn't go underneath the tab.
                     */
                    const offset = 125;


                    const sectionTop =
                        section.getBoundingClientRect().top +
                        window.pageYOffset -
                        offset;


                    window.scrollTo({
                        top: sectionTop,
                        behavior: 'smooth'
                    });

                },


                /*
                 * Set active tab
                 */
                setActive(id) {

                    if (!this.sections.includes(id)) {
                        return;
                    }


                    this.activeTab = id;


                    /*
                     * Automatically move active tab
                     * into horizontal view.
                     */
                    this.$nextTick(() => {

                        const tab = document.querySelector(
                            `[data-tab="${id}"]`
                        );


                        if (!tab) {
                            return;
                        }


                        const container = this.$refs.tabContainer;


                        if (!container) {
                            return;
                        }


                        /*
                         * Calculate position manually.
                         *
                         * scrollIntoView() can sometimes scroll
                         * the whole page as well, so we avoid that.
                         */
                        const tabLeft = tab.offsetLeft;

                        const tabRight =
                            tabLeft + tab.offsetWidth;

                        const visibleLeft =
                            container.scrollLeft;

                        const visibleRight =
                            visibleLeft + container.clientWidth;


                        if (tabLeft < visibleLeft) {

                            container.scrollTo({
                                left: tabLeft - 20,
                                behavior: 'smooth'
                            });

                        } else if (tabRight > visibleRight) {

                            container.scrollTo({
                                left: tabRight -
                                    container.clientWidth +
                                    20,
                                behavior: 'smooth'
                            });

                        }

                    });

                },


                /*
                 * UPDATE ACTIVE TAB WHILE SCROLLING
                 */
                updateActiveSection() {

                    const sections =
                        this.getSectionElements();


                    if (!sections.length) {
                        return;
                    }


                    /*
                     * Position where we consider
                     * a section to be active.
                     */
                    const activationPoint = 180;


                    let currentSection = sections[0];


                    sections.forEach(section => {

                        const rect =
                            section.getBoundingClientRect();


                        /*
                         * If section top has crossed
                         * the activation point, it becomes
                         * the current section.
                         */
                        if (rect.top <= activationPoint) {

                            currentSection = section;

                        }

                    });


                    if (currentSection) {

                        this.setActive(
                            currentSection.id
                        );

                    }

                },


                /*
                 * SCROLL SPY
                 */
                setupScrollSpy() {

                    let ticking = false;


                    window.addEventListener(
                        'scroll',
                        () => {

                            if (ticking) {
                                return;
                            }


                            window.requestAnimationFrame(() => {

                                this.updateActiveSection();

                                ticking = false;

                            });


                            ticking = true;

                        }, {
                            passive: true
                        }
                    );

                }

            };

        }
    </script>
@endsection
