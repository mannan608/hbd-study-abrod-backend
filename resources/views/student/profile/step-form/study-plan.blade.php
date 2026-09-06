<div x-data="{
    targetDegree: '',
    choices: [],

    init() {
        if (window.initialStudyPlanData) {
            this.targetDegree = window.initialStudyPlanData.targetDegree || '';
            this.choices = window.initialStudyPlanData.choices || [];
        }

        // Ensure at least one empty choice is available if none exists
        if (this.choices.length === 0) {
            this.addChoice();
        }
    },
    
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
    },

    saveStudyPlan() {
        console.log('Saving Study Plan Payload:', {
            targetDegree: this.targetDegree,
            choices: this.choices
        });
    }
}" class="bg-white dark:bg-neutral-900 rounded-2xl shadow-xs border border-neutral-200/80 dark:border-neutral-800 overflow-hidden">

    <!-- Header Card -->
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between border-b border-neutral-100 dark:border-neutral-800 py-5 mb-5 px-4 sm:px-6">
        <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600 dark:bg-brand-950/50 dark:text-brand-400">
                <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
            </div>
            <div>
                <h3 class="text-lg font-bold text-neutral-900 dark:text-white">Study Plan & University Details Setup</h3>
                <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-0.5">Fill in target degree level and university preference choices.</p>
            </div>
        </div>

        <!-- Target Degree Level Dropdown -->
        <div class="flex items-center gap-2 rounded-xl bg-neutral-50/80 dark:bg-neutral-800/50 px-3 py-1.5 border border-neutral-200/80 dark:border-neutral-700">
            <label for="target_degree" class="text-xs font-semibold text-neutral-600 dark:text-neutral-300 whitespace-nowrap">Target Degree:</label>
            <select id="target_degree" 
                    x-model="targetDegree" 
                    class="bg-transparent text-xs font-bold text-brand-600 dark:text-brand-400 focus:outline-none border-none cursor-pointer pr-2">
                <option value="" disabled class="bg-white dark:bg-neutral-900 text-neutral-800 dark:text-neutral-200">Select Degree</option>
                <option value="Master's Degree" class="bg-white dark:bg-neutral-900 text-neutral-800 dark:text-neutral-200">Master's Degree</option>
                <option value="Bachelor's Degree" class="bg-white dark:bg-neutral-900 text-neutral-800 dark:text-neutral-200">Bachelor's Degree</option>
                <option value="PhD / Doctorate" class="bg-white dark:bg-neutral-900 text-neutral-800 dark:text-neutral-200">PhD / Doctorate</option>
                <option value="Postgraduate Diploma" class="bg-white dark:bg-neutral-900 text-neutral-800 dark:text-neutral-200">Postgraduate Diploma</option>
            </select>
        </div>
    </div>

    <form @submit.prevent="saveStudyPlan()" class="space-y-6">

        <!-- Form Body Container -->
        <div class="px-5 sm:px-8 space-y-6 mb-6">

            <!-- Section Header & Add Button -->
            <div class="flex items-center justify-between border-b border-neutral-100 pb-3 dark:border-neutral-800">
                <div class="flex items-center gap-2">
                    <iconify-icon icon="lucide:compass" class="text-brand-500 text-base"></iconify-icon>
                    <h4 class="text-xs font-bold text-neutral-900 uppercase tracking-wider dark:text-white">University / Program Choices</h4>
                </div>
                <button type="button" 
                        @click="addChoice()" 
                        class="inline-flex items-center gap-1.5 rounded-lg bg-brand-50 dark:bg-brand-950/50 px-3 py-1.5 text-xs font-semibold text-brand-600 dark:text-brand-400 hover:bg-brand-100 dark:hover:bg-brand-900/50 transition-colors">
                    <iconify-icon icon="lucide:plus" class="text-sm"></iconify-icon>
                    <span>Add Preference Choice</span>
                </button>
            </div>

            <!-- Dynamic Preference Cards -->
            <div class="space-y-4">
                <template x-for="(choice, index) in choices" :key="choice.id || index">
                    <div class="p-4 sm:p-5 rounded-xl border border-neutral-200/80 dark:border-neutral-800 bg-neutral-50/40 dark:bg-neutral-800/30 space-y-4 relative">
                        
                        <!-- Choice Header Bar -->
                        <div class="flex items-center justify-between border-b border-neutral-200/60 dark:border-neutral-700/60 pb-3">
                            <div class="flex items-center gap-2">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand-100 dark:bg-brand-900/60 text-brand-700 dark:text-brand-300 text-[11px] font-bold" x-text="index + 1"></span>
                                <span class="text-xs font-bold text-neutral-800 dark:text-neutral-200" x-text="index === 0 ? 'Choice 1 (Primary Destination)' : 'Choice ' + (index + 1)"></span>
                            </div>

                            <button type="button" 
                                    x-show="choices.length > 1" 
                                    @click="removeChoice(index)" 
                                    class="text-xs font-medium text-rose-500 hover:text-rose-700 dark:hover:text-rose-400 flex items-center gap-1 transition-colors">
                                <iconify-icon icon="lucide:trash-2" class="text-sm"></iconify-icon>
                                <span>Remove Choice</span>
                            </button>
                        </div>

                        <!-- Form Input Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            
                            <!-- Program Name -->
                            <div class="sm:col-span-2 lg:col-span-3">
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Intended Program <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" 
                                       x-model="choice.program" 
                                       placeholder="e.g. MSc in Human-Computer Interaction" 
                                       class="w-full px-4 py-2.5 rounded-lg border placeholder:text-neutral-400 border-neutral-200 bg-white dark:bg-neutral-900 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all" 
                                       required>
                            </div>

                            <!-- University Name -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    University Name <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" 
                                       x-model="choice.university" 
                                       placeholder="e.g. University of Manchester" 
                                       class="w-full px-4 py-2.5 rounded-lg border placeholder:text-neutral-400 border-neutral-200 bg-white dark:bg-neutral-900 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all" 
                                       required>
                            </div>

                            <!-- Destination Country -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Destination Country <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" 
                                       x-model="choice.country" 
                                       placeholder="e.g. United Kingdom" 
                                       class="w-full px-4 py-2.5 rounded-lg border placeholder:text-neutral-400 border-neutral-200 bg-white dark:bg-neutral-900 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all" 
                                       required>
                            </div>

                            <!-- Duration -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Program Duration
                                </label>
                                <input type="text" 
                                       x-model="choice.duration" 
                                       placeholder="e.g. 1 Year / 24 Months" 
                                       class="w-full px-4 py-2.5 rounded-lg border placeholder:text-neutral-400 border-neutral-200 bg-white dark:bg-neutral-900 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all">
                            </div>

                            <!-- Start Date Blade Component -->
                            <x-form.form-date id="start_date" 
                                              name="startDate" 
                                              label="Intended Start Date" 
                                              placeholder="YYYY-MM" 
                                              x-model="choice.startDate" />

                            <!-- End Date Blade Component -->
                            <x-form.form-date id="end_date" 
                                              name="endDate" 
                                              label="Expected End Date" 
                                              placeholder="YYYY-MM" 
                                              x-model="choice.endDate" />

                            <!-- Tuition Fee -->
                            <div>
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Tuition Fee
                                </label>
                                <input type="text" 
                                       x-model="choice.tuition" 
                                       placeholder="e.g. £28,500 / year" 
                                       class="w-full px-4 py-2.5 rounded-lg border placeholder:text-neutral-400 border-neutral-200 bg-white dark:bg-neutral-900 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all">
                            </div>

                            <!-- Scholarship / Funding -->
                            <div class="sm:col-span-2 lg:col-span-3">
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Scholarship / Funding Status
                                </label>
                                <input type="text" 
                                       x-model="choice.scholarship" 
                                       placeholder="e.g. Self-funded, Merit Award Applied, etc." 
                                       class="w-full px-4 py-2.5 rounded-lg border placeholder:text-neutral-400 border-neutral-200 bg-white dark:bg-neutral-900 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all">
                            </div>

                            <!-- Study Plan Summary Textarea -->
                            <div class="sm:col-span-2 lg:col-span-3">
                                <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
                                    Study Plan Summary & Academic Motivation
                                </label>
                                <textarea x-model="choice.summary" 
                                          rows="3" 
                                          placeholder="Explain your academic objective, alignment with career goals, and reasons for selecting this university..." 
                                          class="w-full px-4 py-2.5 rounded-lg border placeholder:text-neutral-400 border-neutral-200 bg-white dark:bg-neutral-900 dark:border-neutral-700 text-xs font-medium text-neutral-800 dark:text-neutral-200 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all resize-y"></textarea>
                            </div>

                        </div>
                    </div>
                </template>
            </div>

        </div>

        <!-- Action Footer Bar -->
        <div class="flex items-center justify-end gap-3 px-5 sm:px-8 py-4 bg-neutral-50/50 dark:bg-neutral-800/30 border-t border-neutral-100 dark:border-neutral-800">
            <button type="button" 
                    onclick="window.location.reload()" 
                    class="px-4 py-2.5 rounded-lg text-xs font-semibold text-neutral-600 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-800 transition-colors">
                Discard
            </button>
            <button type="submit" 
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-brand-600 text-white text-xs font-bold shadow-xs hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 active:scale-[0.98] transition-all">
                <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>
                <span>Save Study Plan</span>
            </button>
        </div>

    </form>
</div>