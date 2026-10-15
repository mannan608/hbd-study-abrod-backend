<div class="w-full min-w-0 text-slate-800" x-data="{
    activeTab: 'lead-quality',
    sectionIds: ['lead-quality', 'status-assignment', 'file-enroll', 'marketing-notes', 'commission-section'],
    _scrollHandler: null,

    init() {
        // Track page and nested-container scrolling so the active tab stays in sync.
        this._scrollHandler = () => this.updateActiveTab();
        window.addEventListener('scroll', this._scrollHandler, { passive: true, capture: true });
        window.addEventListener('resize', this._scrollHandler, { passive: true });
        this.$nextTick(() => this.updateActiveTab());
    },

    destroy() {
        if (this._scrollHandler) {
            window.removeEventListener('scroll', this._scrollHandler, true);
            window.removeEventListener('resize', this._scrollHandler);
        }
    },

    scrollToSection(id) {
        const section = document.getElementById(id);
        if (!section) return;

        this.activeTab = id;
        section.scrollIntoView({ behavior: 'smooth', block: 'start' });

        // Keep the clicked tab active while smooth scrolling begins.
        requestAnimationFrame(() => this.updateActiveTab());
    },

    updateActiveTab() {
        const nav = this.$el.querySelector('[data-section-nav]');
        const offset = (nav ? nav.getBoundingClientRect().bottom : 0) + 24;
        let current = this.sectionIds[0];

        for (const id of this.sectionIds) {
            const section = document.getElementById(id);
            if (!section) continue;
            if (section.getBoundingClientRect().top <= offset) current = id;
            else break;
        }

        // At the very bottom, activate the final section even if it cannot reach the top offset.
        const scrollingElement = document.scrollingElement || document.documentElement;
        if (scrollingElement.scrollTop + window.innerHeight >= scrollingElement.scrollHeight - 4) {
            current = this.sectionIds[this.sectionIds.length - 1];
        }

        this.activeTab = current;
    }
}">

    <div class="space-y-6">

        {{-- <!-- 1. LEAD OWNERSHIP & TRANSFER CARD -->
        <div class="rounded-2xl border border-slate-200/80 bg-white p-5 md:p-6 shadow-sm transition-all hover:shadow-md">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 border-b border-slate-100 gap-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                        <iconify-icon icon="lucide:user-cog" class="text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-900">Lead Ownership & Assignment</h3>
                        <p class="text-xs text-slate-500">Manage current handler and reassignment history</p>
                    </div>
                </div>

                <button type="button"
                    class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-600/20 hover:bg-emerald-100 transition-colors">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                    Transfer History Log
                </button>
            </div>

            <!-- Current Owner Details & Trigger -->
            <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div class="flex items-center gap-3.5">
                    <div class="relative">
                        <img class="h-12 w-12 rounded-full object-cover ring-2 ring-slate-100"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80"
                            alt="Alex Morgan">
                        <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full bg-emerald-500 ring-2 ring-white"></span>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900">Alex Morgan</h4>
                        <p class="text-xs text-slate-500">Senior Consultant • <span
                                class="text-slate-400 font-medium">Assigned 3 days ago</span></p>
                    </div>
                </div>

                <button @click="openTransferModal = true" type="button"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-slate-900 px-4 py-2.5 text-xs font-semibold text-white transition-all duration-200 hover:bg-brand-600 hover:shadow-md active:scale-95">
                    <iconify-icon icon="lucide:arrow-left-right" class="text-sm"></iconify-icon>
                    Transfer Lead Ownership
                </button>
            </div>
        </div> --}}


        <!-- 2. STICKY QUICK NAVIGATION TABS -->
        <nav
            class="sticky top-19 z-5 bg-white/80 backdrop-blur-md p-1.5 rounded-2xl border border-slate-200/80 shadow-sm overflow-x-auto">
            <div class="flex min-w-max items-center gap-2">

                <button type="button" @click="scrollToSection('lead-quality')"
                    :class="activeTab === 'lead-quality' ? 'bg-brand-600 text-white shadow-sm' :
                        'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                    class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 text-xs font-semibold transition-all">
                    <iconify-icon icon="lucide:sparkles" class="text-base"></iconify-icon>
                    <span>Lead Quality</span>
                </button>

                <button type="button" @click="scrollToSection('status-assignment')"
                    :class="activeTab === 'status-assignment' ? 'bg-brand-600 text-white shadow-sm' :
                        'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                    class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 text-xs font-semibold transition-all">
                    <iconify-icon icon="lucide:sliders-horizontal" class="text-base"></iconify-icon>
                    Status & Assignment
                </button>

                <button type="button" @click="scrollToSection('file-enroll')"
                    :class="activeTab === 'file-enroll' ? 'bg-brand-600 text-white shadow-sm' :
                        'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                    class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 text-xs font-semibold transition-all">
                    <iconify-icon icon="lucide:folder-kanban" class="text-base"></iconify-icon>
                    File Open & References
                </button>

                <button type="button" @click="scrollToSection('marketing-notes')"
                    :class="activeTab === 'marketing-notes' ? 'bg-brand-600 text-white shadow-sm' :
                        'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                    class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 text-xs font-semibold transition-all">
                    <iconify-icon icon="lucide:megaphone" class="text-base"></iconify-icon>
                    Marketing & Notes
                </button>

                <button type="button" @click="scrollToSection('commission-section')"
                    :class="activeTab === 'commission-section' ? 'bg-brand-600 text-white shadow-sm' :
                        'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                    class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 text-xs font-semibold transition-all">
                    <iconify-icon icon="lucide:receipt" class="text-base"></iconify-icon>
                    Commission Breakdown
                </button>
            </div>
        </nav>


        <!-- MAIN FORM SECTIONS -->
        <div class="space-y-6">
            <!-- SECTION 1: STATUS & ASSIGNMENT (Priority, Lead Status, Counselor Stages) -->
            <section id="lead-quality" x-data="{
                academic: { fit: true, reason: '' },
                english: { fit: true, reason: '' },
                financial: { fit: true, reason: '' },
            
                get totalFitCount() {
                    return [this.academic.fit, this.english.fit, this.financial.fit].filter(Boolean).length;
                }
            }"
                class="bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6 md:p-8 scroll-mt-24">
                <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                    <div class="flex items-center gap-2.5">
                        <div
                            class="flex h-7 w-7 items-center justify-center rounded-lg bg-brand-50 text-brand-600 border border-brand-200/60 shadow-xs">
                            <iconify-icon icon="lucide:target" class="text-base"></iconify-icon>
                        </div>
                        <h2 class="text-xs font-bold uppercase tracking-wider text-slate-500">
                            Lead Quality Assessment
                        </h2>
                    </div>
                    {{-- <span class="text-xs text-rose-500 font-medium">* Required fields</span> --}}
                </div>

                <!-- Assessment Criteria List -->
                <div class="space-y-3">

                    <!-- 1. Academically Fit -->
                    <div class="rounded-lg border p-3.5 transition-all duration-200"
                        :class="academic.fit ? 'border-slate-200 bg-white' : 'border-rose-200 bg-rose-50/20'">
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg flex items-center justify-center font-semibold text-sm"
                                    :class="academic.fit ? 'bg-blue-50 text-[#1968b2]' : 'bg-rose-100 text-rose-600'">
                                    🎓
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#182F5A]">Academically Fit</h4>
                                    <p class="text-xs text-slate-500">GPA & degree accreditation</p>
                                </div>
                            </div>

                            <!-- Toggle Switch -->
                            <div class="flex items-center p-0.5 bg-slate-100 rounded-lg border border-slate-200">
                                <button type="button" @click="academic.fit = true; academic.reason = ''"
                                    :class="academic.fit ? 'bg-emerald-600 text-white shadow-sm' :
                                        'text-slate-600 hover:text-slate-900'"
                                    class="px-3 py-1 text-xs font-semibold rounded-md transition-all">
                                    Fit
                                </button>
                                <button type="button" @click="academic.fit = false"
                                    :class="!academic.fit ? 'bg-rose-600 text-white shadow-sm' :
                                        'text-slate-600 hover:text-slate-900'"
                                    class="px-3 py-1 text-xs font-semibold rounded-md transition-all">
                                    Unfit
                                </button>
                            </div>
                        </div>

                        <!-- Note / Reason Input: Shows ONLY when Unfit -->
                        <div x-show="!academic.fit" x-collapse class="mt-3 pt-3 border-t border-rose-100">
                            <label class="block text-[11px] font-semibold text-rose-700 uppercase tracking-wider mb-1">
                                Reason for Academic Unfitness <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" x-model="academic.reason"
                                placeholder="e.g. GPA below minimum requirement (2.5) or non-accredited board"
                                class="w-full text-xs px-3 py-2 rounded-md border border-rose-300 focus:border-rose-500 focus:ring-1 focus:ring-rose-500 bg-white text-slate-700 shadow-sm focus:outline-none">
                        </div>
                    </div>

                    <!-- 2. English Proficiency Fit -->
                    <div class="rounded-lg border p-3.5 transition-all duration-200"
                        :class="english.fit ? 'border-slate-200 bg-white' : 'border-rose-200 bg-rose-50/20'">
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg flex items-center justify-center font-semibold text-sm"
                                    :class="english.fit ? 'bg-blue-50 text-[#1968b2]' : 'bg-rose-100 text-rose-600'">
                                    🗣️
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#182F5A]">English Proficiency Fit</h4>
                                    <p class="text-xs text-slate-500">IELTS, PTE, TOEFL scores</p>
                                </div>
                            </div>

                            <!-- Toggle Switch -->
                            <div class="flex items-center p-0.5 bg-slate-100 rounded-lg border border-slate-200">
                                <button type="button" @click="english.fit = true; english.reason = ''"
                                    :class="english.fit ? 'bg-emerald-600 text-white shadow-sm' :
                                        'text-slate-600 hover:text-slate-900'"
                                    class="px-3 py-1 text-xs font-semibold rounded-md transition-all">
                                    Fit
                                </button>
                                <button type="button" @click="english.fit = false"
                                    :class="!english.fit ? 'bg-rose-600 text-white shadow-sm' :
                                        'text-slate-600 hover:text-slate-900'"
                                    class="px-3 py-1 text-xs font-semibold rounded-md transition-all">
                                    Unfit
                                </button>
                            </div>
                        </div>

                        <!-- Note / Reason Input: Shows ONLY when Unfit -->
                        <div x-show="!english.fit" x-collapse class="mt-3 pt-3 border-t border-rose-100">
                            <label class="block text-[11px] font-semibold text-rose-700 uppercase tracking-wider mb-1">
                                Reason for English Unfitness <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" x-model="english.reason"
                                placeholder="e.g. IELTS overall 5.5 (Required 6.5) or score expired"
                                class="w-full text-xs px-3 py-2 rounded-md border border-rose-300 focus:border-rose-500 focus:ring-1 focus:ring-rose-500 bg-white text-slate-700 shadow-sm focus:outline-none">
                        </div>
                    </div>

                    <!-- 3. Financially Fit -->
                    <div class="rounded-lg border p-3.5 transition-all duration-200"
                        :class="financial.fit ? 'border-slate-200 bg-white' : 'border-rose-200 bg-rose-50/20'">
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg flex items-center justify-center font-semibold text-sm"
                                    :class="financial.fit ? 'bg-blue-50 text-[#1968b2]' : 'bg-rose-100 text-rose-600'">
                                    💰
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#182F5A]">Financially Fit</h4>
                                    <p class="text-xs text-slate-500">Tuition & living expense proof</p>
                                </div>
                            </div>

                            <!-- Toggle Switch -->
                            <div class="flex items-center p-0.5 bg-slate-100 rounded-lg border border-slate-200">
                                <button type="button" @click="financial.fit = true; financial.reason = ''"
                                    :class="financial.fit ? 'bg-emerald-600 text-white shadow-sm' :
                                        'text-slate-600 hover:text-slate-900'"
                                    class="px-3 py-1 text-xs font-semibold rounded-md transition-all">
                                    Fit
                                </button>
                                <button type="button" @click="financial.fit = false"
                                    :class="!financial.fit ? 'bg-rose-600 text-white shadow-sm' :
                                        'text-slate-600 hover:text-slate-900'"
                                    class="px-3 py-1 text-xs font-semibold rounded-md transition-all">
                                    Unfit
                                </button>
                            </div>
                            
                        </div>

                        <!-- Note / Reason Input: Shows ONLY when Unfit -->
                        <div x-show="!financial.fit" x-collapse class="mt-3 pt-3 border-t border-rose-100">
                            <label class="block text-[11px] font-semibold text-rose-700 uppercase tracking-wider mb-1">
                                Reason for Financial Unfitness <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" x-model="financial.reason"
                                placeholder="e.g. Bank statement shows insufficient balance for 1st year tuition"
                                class="w-full text-xs px-3 py-2 rounded-md border border-rose-300 focus:border-rose-500 focus:ring-1 focus:ring-rose-500 bg-white text-slate-700 shadow-sm focus:outline-none">
                        </div>
                    </div>

                </div>
            </section>

            <!-- SECTION 1: STATUS & ASSIGNMENT (Priority, Lead Status, Counselor Stages) -->
            <section id="status-assignment"
                class="bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6 md:p-8 scroll-mt-24">
                <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                    <div class="flex items-center gap-2.5">
                        <div
                            class="flex h-7 w-7 items-center justify-center rounded-lg bg-brand-50 text-brand-600 border border-brand-200/60 shadow-xs">
                            <!-- User Assignment & Status SVG -->
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                        </div>
                        <h2 class="text-xs font-bold uppercase tracking-wider text-slate-500">
                            Status &amp; Assignment
                        </h2>
                    </div>
                    {{-- <span class="text-xs text-rose-500 font-medium">* Required fields</span> --}}
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Priority -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Priority <span
                                class="text-rose-500">*</span></label>
                        <select
                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-700 shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20">
                            <option value="">Select Priority</option>
                            <option value="high">🔥 High Priority</option>
                            <option value="medium">⚡ Medium Priority</option>
                            <option value="low">☕ Low Priority</option>
                        </select>
                    </div>

                    <!-- Lead Status -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Lead Status <span
                                class="text-rose-500">*</span></label>
                        <select
                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-700 shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20">
                            <option value="inactive">Inactive</option>
                            <option value="active">Active</option>
                            <option value="hot">Hot Lead</option>
                        </select>
                    </div>

                    <!--- Student Stage -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Student Stage <span
                                class="text-rose-500">*</span></label>
                        <select
                            class="w-full rounded-xl border border-brand-300 bg-brand-50/30 px-3.5 py-2.5 text-xs font-medium text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20">
                            <option value="">Select Stage...</option>
                            <option value="initial_contact">1. Initial Contact Made</option>
                            <option value="documents_review">2. Documents Review</option>
                            <option value="university_shortlist">3. University Shortlisted</option>
                            <option value="application_ready">4. Application Ready</option>
                        </select>
                    </div>

                    <!-- Destination -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Destination <span
                                class="text-rose-500">*</span></label>
                        <input type="text" placeholder="e.g. United Kingdom, Canada"
                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-700 shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                    </div>

                    <!-- Preference -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Preference</label>
                        <input type="text" placeholder="Course or University preference"
                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-700 shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                    </div>

                    <!-- Intake -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Intake <span
                                class="text-rose-500">*</span></label>
                        <select
                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-700 shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20">
                            <option value="">Select Intake</option>
                            <option value="jan_2027">January 2027</option>
                            <option value="sep_2027">September 2027</option>
                        </select>
                    </div>
                </div>
            </section>


            <!-- FILE OPEN & ENROLLMENT MANAGEMENT SECTION -->
            <section id="file-enroll" x-data="{
                entryType: 'file_open', // 'file_open' or 'enrollment'
                refCategory: 'old_student', // 'old_student', 'team_agent', 'sub_agent', 'marketing_agent'
                paymentStatus: 'paid'
            }"
                class="bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6 md:p-8 scroll-mt-24 transition-all">

                <!-- Section Header with Mode Toggle Switch -->
                <div
                    class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-slate-100 pb-5 mb-6 gap-4">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <iconify-icon icon="lucide:file-badge" class="text-xl"></iconify-icon>
                        </div>
                        <div>
                            <h2 class="text-xs font-bold uppercase tracking-wider text-slate-500">
                                File Opening & Enrollment Operations
                            </h2>
                            <p class="text-xs text-slate-500">Record financial fee logs, enrollment stages, and
                                attribution references</p>
                        </div>
                    </div>

                    <!-- Toggle Selector between File Open & Enrollment -->
                    <div
                        class="inline-flex rounded-xl bg-slate-100 p-1 border border-slate-200/80 self-start sm:self-auto">
                        <button type="button" @click="entryType = 'file_open'"
                            :class="entryType === 'file_open' ? 'bg-white text-slate-900 shadow-sm' :
                                'text-slate-600 hover:text-slate-900'"
                            class="inline-flex items-center gap-1.5 rounded-lg px-3.5 py-1.5 text-xs font-semibold transition-all">
                            <iconify-icon icon="lucide:folder-plus" class="text-sm"></iconify-icon>
                            File Opening
                        </button>

                        <button type="button" @click="entryType = 'enrollment'"
                            :class="entryType === 'enrollment' ? 'bg-brand-600 text-white shadow-sm' :
                                'text-slate-600 hover:text-slate-900'"
                            class="inline-flex items-center gap-1.5 rounded-lg px-3.5 py-1.5 text-xs font-semibold transition-all">
                            <iconify-icon icon="lucide:graduation-cap" class="text-sm"></iconify-icon>
                            Enrollment
                        </button>
                    </div>
                </div>

                <div class="space-y-6">

                    <!-- SUB-SECTION 1: TRANSACTION & FINANCIAL DETAILS -->
                    <div>
                        <h3
                            class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-4 flex items-center gap-2">
                            <iconify-icon icon="lucide:receipt" class="text-sm text-slate-500"></iconify-icon>
                            1. Fee & Payment Record
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

                            <!-- Payment / Fee Status -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    <span
                                        x-text="entryType === 'file_open' ? 'File Opening Fee' : 'Enrollment Fee Status'"></span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <select x-model="paymentStatus"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs font-medium text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20">
                                    <option value="paid">Paid</option>
                                    <option value="partial">Partial Paid</option>
                                    <option value="pending">Pending Payment</option>
                                    <option value="waived">Fee Waived / Free</option>
                                </select>
                            </div>

                            <!-- Paid Amount -->
                            <div x-show="paymentStatus !== 'waived'">
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">Amount Paid
                                    (BDT)</label>
                                <div class="relative">
                                    <span class="absolute left-3.5 top-2.5 text-xs font-bold text-slate-400">৳</span>
                                    <input type="number" placeholder="5000"
                                        class="w-full rounded-xl border border-slate-300 bg-white pl-8 pr-3.5 py-2.5 text-xs text-slate-800 font-medium shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                                </div>
                            </div>

                            <!-- Money Receipt / Memo No -->
                            <div x-show="paymentStatus !== 'waived'">
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">Money Receipt / Memo
                                    No. <span class="text-rose-500">*</span></label>
                                <input type="text" placeholder="MR-2026-8941"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-800 font-medium shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                            </div>

                            <!-- Date Picker -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    <span
                                        x-text="entryType === 'file_open' ? 'File Open Date' : 'Enrollment Date'"></span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="date" value="2026-10-14"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                            </div>

                        </div>
                    </div>

                    <!-- SUB-SECTION 2: RESPONSIBLE TEAM MEMBERS -->
                    <div class="pt-2 border-t border-slate-100">
                        <h3
                            class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-4 flex items-center gap-2">
                            <iconify-icon icon="lucide:users" class="text-sm text-slate-500"></iconify-icon>
                            2. Internal Operations Handlers
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            <!-- Open By / Enrolled By -->
                            <div class="rounded-xl border border-slate-200 bg-slate-50/50 p-4">
                                <label class="block text-xs font-bold text-slate-800 mb-1">
                                    <span x-text="entryType === 'file_open' ? 'File Opened By' : 'Enrolled By'"></span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <p class="text-[11px] text-slate-500 mb-2">Team member handling desk processing &
                                    registration</p>
                                <select
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none">
                                    <option value="">Select Officer...</option>
                                    <option value="1">Alex Morgan (Senior Consultant)</option>
                                    <option value="2" selected>David Chen (Lead Advisor)</option>
                                    <option value="3">Sarah Jenkins (Desk Admin)</option>
                                </select>
                            </div>

                            <!-- Marketing Staff Handler -->
                            <div class="rounded-xl border border-slate-200 bg-slate-50/50 p-4">
                                <label class="block text-xs font-bold text-slate-800 mb-1">
                                    Marketing / Campaign Officer
                                </label>
                                <p class="text-[11px] text-slate-500 mb-2">Marketing executive attributed for lead
                                    acquisition</p>
                                <select
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none">
                                    <option value="">Select Officer...</option>
                                    <option value="m1">Rahim Ahmed (Digital Marketing Lead)</option>
                                    <option value="m2">Tania Sultana (Campaign Officer)</option>
                                    <option value="m3">Outreach Field Team</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <!-- SUB-SECTION 3: REFERENCE & PARTNER ATTRIBUTION -->
                    <div class="pt-2 border-t border-slate-100">
                        <h3
                            class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-4 flex items-center gap-2">
                            <iconify-icon icon="lucide:share-2" class="text-sm text-slate-500"></iconify-icon>
                            3. Attribution & Referrer Source
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            <!-- Primary Category -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">Reference Source
                                    Category <span class="text-rose-500">*</span></label>
                                <select x-model="refCategory"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs font-medium text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none">
                                    <option value="old_student">Old Student Reference</option>
                                    <option value="team_agent">Our Internal Team Referral</option>
                                    <option value="sub_agent">Sub-Agent Agency Partner</option>
                                    <option value="marketing_agent">Social Media / Direct Marketing</option>
                                </select>
                            </div>

                            <!-- Dynamic Secondary Input based on Reference Category -->
                            <div>
                                <!-- Old Student Dropdown / Input -->
                                <template x-if="refCategory === 'old_student'">
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Select Alumni
                                            / Old Student</label>
                                        <select
                                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none">
                                            <option value="">Search Student ID / Name...</option>
                                            <option value="s101">STD-2024-012 | Tanvir Hossain (Coventry Univ)
                                            </option>
                                            <option value="s102">STD-2025-089 | Anika Rahman (York Univ)</option>
                                        </select>
                                    </div>
                                </template>

                                <!-- Sub-Agent Dropdown -->
                                <template x-if="refCategory === 'sub_agent'">
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Select
                                            Sub-Agent Partner</label>
                                        <select
                                            class="w-full rounded-xl border border-amber-300 bg-amber-50/20 px-3.5 py-2.5 text-xs font-medium text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none">
                                            <option value="">Select Registered Sub-Agent...</option>
                                            <option value="ag1">Global Edu Consultancy (Sylhet)</option>
                                            <option value="ag2">Career Care Agency (Chittagong)</option>
                                        </select>
                                    </div>
                                </template>

                                <!-- Internal Staff Dropdown -->
                                <template x-if="refCategory === 'team_agent'">
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Referring
                                            Staff Member</label>
                                        <select
                                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none">
                                            <option value="">Select Employee...</option>
                                            <option value="e1">Nusrat Jahan (Accounts)</option>
                                            <option value="e2">Kamrul Hasan (IT)</option>
                                        </select>
                                    </div>
                                </template>

                                <!-- Marketing Campaign -->
                                <template x-if="refCategory === 'marketing_agent'">
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Marketing
                                            Campaign Channel</label>
                                        <input type="text" placeholder="e.g. FB Ad Campaign / Expo Oct 2026"
                                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-800 shadow-sm focus:border-brand-600 focus:outline-none" />
                                    </div>
                                </template>
                            </div>

                        </div>
                    </div>

                    <!-- SUB-SECTION 4: RECEIPT / PROOF ATTACHMENT -->
                    <div x-show="paymentStatus !== 'waived'" class="pt-2 border-t border-slate-100">
                        <label class="block text-xs font-semibold text-slate-700 mb-2">Attach Money Receipt /
                            Transaction Voucher</label>
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col items-center justify-center w-full h-24 border-2 border-dashed border-slate-200 rounded-xl cursor-pointer bg-slate-50/50 hover:bg-slate-100/80 transition-all">
                                <div class="flex items-center gap-3 text-slate-500">
                                    <iconify-icon icon="lucide:upload-cloud"
                                        class="text-2xl text-brand-600"></iconify-icon>
                                    <div class="text-left">
                                        <p class="text-xs font-medium text-slate-700"><span
                                                class="font-bold text-brand-600">Click to upload</span> receipt image
                                            or PDF</p>
                                        <p class="text-[10px] text-slate-400">PNG, JPG, PDF up to 5MB</p>
                                    </div>
                                </div>
                                <input type="file" class="hidden" />
                            </label>
                        </div>
                    </div>

                </div>
            </section>

            <!-- SECTION 3: MARKETING DEPARTMENT, SOURCES & RELATED NOTES -->
            <section id="marketing-notes"
                class="bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6 md:p-8 scroll-mt-24">
                <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                    <div class="flex items-center gap-2.5">
                        <div
                            class="flex h-7 w-7 items-center justify-center rounded-lg bg-purple-50 text-purple-600 border border-purple-200/60 shadow-xs">
                            <!-- Megaphone / Marketing Icon -->
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A2.5 2.5 0 013 11.2V9.8a2.5 2.5 0 012.436-2.483l6.568-.73A2.5 2.5 0 0114.5 9.07v5.86a2.5 2.5 0 01-2.496 2.483l-6.568-.73z" />
                            </svg>
                        </div>
                        <h2 class="text-xs font-bold uppercase tracking-wider text-slate-500">
                            Lead Source &amp; Notes <span class="text-slate-400 font-normal">(Marketing)</span>
                        </h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Sources -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Lead Sources <span
                                class="text-rose-500">*</span></label>
                        <div
                            class="w-full flex items-center flex-wrap gap-1.5 rounded-xl border border-slate-300 bg-white px-3 py-2 text-xs shadow-sm focus-within:border-brand-600">
                            <span
                                class="inline-flex items-center gap-1 rounded-lg bg-slate-100 px-2.5 py-1 font-medium text-slate-700">
                                Facebook Form (Campaign #4)
                                <button type="button"
                                    class="text-slate-400 hover:text-slate-600 font-bold ml-1">×</button>
                            </span>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Tags & Campaign Labels</label>
                        <div
                            class="w-full flex items-center flex-wrap gap-1.5 rounded-xl border border-slate-300 bg-white px-3 py-2 text-xs shadow-sm focus-within:border-brand-600">
                            <span
                                class="inline-flex items-center gap-1 rounded-lg bg-indigo-50 px-2.5 py-1 font-medium text-indigo-700">
                                HBD Language Academy
                                <button type="button"
                                    class="text-indigo-400 hover:text-indigo-600 font-bold ml-1">×</button>
                            </span>
                            <input type="text" placeholder="+ Add tag..."
                                class="flex-1 min-w-[100px] border-0 bg-transparent p-1 text-xs text-slate-700 focus:outline-none" />
                        </div>
                    </div>

                    <!-- Marketing & General Notes -->
                    <div class="md:col-span-2">
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Marketing & Operational
                            Notes</label>
                        <textarea rows="3"
                            placeholder="Enter remarks regarding ad campaign interaction, telemarketing feedback, or special instructions..."
                            class="w-full rounded-xl border border-slate-300 p-3.5 text-xs text-slate-700 shadow-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20"></textarea>
                    </div>
                </div>
            </section>


            <!-- SECTION 4: COMMISSION SECTION (New Addition) -->
            <section id="commission-section"
                class="bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6 md:p-8 scroll-mt-24">
                <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                    <div class="flex items-center gap-2.5">
                        <div
                            class="flex h-7 w-7 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-200/60 shadow-xs">
                            <!-- Banknotes / Payout SVG -->
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="text-xs font-bold uppercase tracking-wider text-slate-500">
                            Commission &amp; Payout Management
                        </h2>
                    </div>
                    <span
                        class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2.5 py-1 text-[11px] font-semibold text-emerald-700">
                        Calculated Payout Ready
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Commission Recipient Type -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Commission Beneficiary</label>
                        <select
                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-700 shadow-sm focus:border-brand-600 focus:outline-none">
                            <option value="">Select Beneficiary Type...</option>
                            <option value="sub_agent">Sub-Agent Partner</option>
                            <option value="team_agent">In-House Staff Referral</option>
                            <option value="old_student">Student Referrer</option>
                        </select>
                    </div>

                    <!-- Commission Percentage / Amount -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Commission Rate /
                            Amount</label>
                        <div class="relative">
                            <input type="text" placeholder="0.00"
                                class="w-full rounded-xl border border-slate-300 bg-white pl-4 pr-12 py-2.5 text-xs text-slate-700 shadow-sm focus:border-brand-600 focus:outline-none" />
                            <span class="absolute right-3.5 top-2.5 text-xs text-slate-400 font-semibold">BDT /
                                %</span>
                        </div>
                    </div>

                    <!-- Payout Status -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Payout Status</label>
                        <select
                            class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-xs text-slate-700 shadow-sm focus:border-brand-600 focus:outline-none">
                            <option value="unpaid">Unpaid / Due</option>
                            <option value="processing">Processing Approval</option>
                            <option value="paid">Paid & Settled</option>
                        </select>
                    </div>
                </div>
            </section>

        </div>

    </div>
</div>
