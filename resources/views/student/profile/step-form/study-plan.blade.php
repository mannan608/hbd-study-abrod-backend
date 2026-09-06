<div x-data="{
    targetDegree: 'Master\'s Degree',
    choices: [
        {
            id: 1,
            program: 'MSc in Human-Computer Interaction',
            university: 'University of Manchester',
            country: 'United Kingdom',
            duration: '1 Year',
            startDate: 'Sept 2026',
            endDate: 'Sept 2027',
            tuition: '£28,500 / year',
            scholarship: '£5,000 Merit Award Applied',
            summary: 'Seeking advanced specialization in accessible UX design and software ergonomics. Intend to complete the 1-year taught master\'s program and utilize university industry partnerships for field research before returning home to contribute to the digital technology sector.'
        },
        {
            id: 2,
            program: 'MSc in Interaction Design',
            university: 'TU Delft',
            country: 'Netherlands',
            duration: '2 Years',
            startDate: 'Sept 2026',
            endDate: 'Sept 2028',
            tuition: '€20,500 / year',
            scholarship: 'None / Self-funded',
            summary: 'Alternative option focused on human-centered hardware and software systems design in Europe.'
        }
    ],
    
    addChoice() {
        this.choices.push({
            id: Date.now(),
            program: '',
            university: '',
            country: '',
            duration: '',
            startDate: '',
            endDate: '',
            tuition: '',
            scholarship: '',
            summary: ''
        });
    },

    removeChoice(index) {
        if (this.choices.length > 1) {
            this.choices.splice(index, 1);
        }
    }
}" class="max-w-5xl mx-auto p-4 sm:p-6">

    <form @submit.prevent="" class="space-y-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-sm space-y-6">

            <!-- Top Header & Shared Target Degree -->
            <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-100 pb-5">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                        <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900">Study Plan & University Details Setup</h2>
                        <p class="text-xs text-slate-500">Fill in target degree and university choices</p>
                    </div>
                </div>

                <!-- Shared Degree Level Selection -->
                <div class="flex items-center gap-2 rounded-xl bg-slate-50 px-3 py-1.5 border border-slate-200">
                    <label for="target_degree" class="text-xs font-medium text-slate-500 whitespace-nowrap">Target Degree:</label>
                    <select id="target_degree" x-model="targetDegree" class="w-full pr-4 py-2.5 rounded-lg border border-neutral-200 bg-neutral-50/30 dark:bg-neutral-800/40 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:bg-white dark:focus:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all appearance-none">
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                        <option value="PhD / Doctorate">PhD / Doctorate</option>
                        <option value="Postgraduate Diploma">Postgraduate Diploma</option>
                    </select>
                </div>
            </div>

            <!-- Dynamic Study Choices -->
            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">University / Program Choices</h3>
                    <button type="button" @click="addChoice()" class="inline-flex items-center gap-1.5 rounded-lg bg-brand-50 px-3 py-1.5 text-xs font-semibold text-brand-600 hover:bg-brand-100 transition-colors">
                        <iconify-icon icon="lucide:plus" class="text-sm"></iconify-icon>
                        <span>Add Preference Choice</span>
                    </button>
                </div>

                <template x-for="(choice, index) in choices" :key="choice.id || index">
                    <div class="p-4 sm:p-5 rounded-xl border border-slate-200 bg-slate-50/50 space-y-4 relative">
                        
                        <!-- Choice Badge Header -->
                        <div class="flex items-center justify-between border-b border-slate-200/80 pb-3">
                            <div class="flex items-center gap-2">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-brand-100 text-brand-700 text-xs font-bold" x-text="index + 1"></span>
                                <span class="text-xs font-bold text-slate-800" x-text="index === 0 ? 'Choice 1 (Primary)' : 'Choice ' + (index + 1)"></span>
                            </div>

                            <button type="button" x-show="choices.length > 1" @click="removeChoice(index)" class="text-xs font-medium text-rose-500 hover:text-rose-700 flex items-center gap-1">
                                <iconify-icon icon="lucide:trash-2" class="text-sm"></iconify-icon>
                                <span>Remove Choice</span>
                            </button>
                        </div>

                        <!-- Form Input Fields Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            
                            <!-- Intended Program -->
                            <div class="sm:col-span-2 lg:col-span-3">
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Intended Program <span class="text-rose-500">*</span></label>
                                <input type="text" x-model="choice.program" placeholder="e.g. MSc in Human-Computer Interaction" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                            </div>

                            <!-- University -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">University Name <span class="text-rose-500">*</span></label>
                                <input type="text" x-model="choice.university" placeholder="e.g. University of Manchester" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                            </div>

                            <!-- Destination Country -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Destination Country <span class="text-rose-500">*</span></label>
                                <input type="text" x-model="choice.country" placeholder="e.g. United Kingdom" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                            </div>

                            <!-- Duration & Timeline -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Duration & Intake Period</label>
                                <input type="text" x-model="choice.duration" placeholder="e.g. 1 Year (Sept 2026 – Sept 2027)" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">
                            </div>

                            <!-- Tuition Fee -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Tuition Fee</label>
                                <input type="text" x-model="choice.tuition" placeholder="e.g. £28,500 / year" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">
                            </div>

                            <!-- Scholarship / Funding -->
                            <div class="sm:col-span-2">
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Scholarship / Funding</label>
                                <input type="text" x-model="choice.scholarship" placeholder="e.g. £5,000 Merit Award Applied or Self-funded" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">
                            </div>

                            <!-- Study Plan Summary -->
                            <div class="sm:col-span-2 lg:col-span-3">
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Study Plan Summary</label>
                                <textarea x-model="choice.summary" rows="3" placeholder="Explain your objective, academic alignment, and post-graduation goals..." class="w-full rounded-xl border border-slate-200 bg-white p-3 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500"></textarea>
                            </div>

                        </div>
                    </div>
                </template>
            </div>

            <!-- Submit Action -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                <button type="button" class="px-4 py-2 text-xs font-medium text-slate-600 rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors">
                    Cancel
                </button>
                <button type="submit" class="px-5 py-2 text-xs font-semibold text-white rounded-xl bg-brand-600 hover:bg-brand-700 transition-colors shadow-xs flex items-center gap-1.5">
                    <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>
                    <span>Save Study Plan</span>
                </button>
            </div>

        </div>
    </form>
</div>