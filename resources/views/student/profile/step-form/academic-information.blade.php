<div x-data="{
    // Highest Qualification
    highestQual: {
        degree: 'Bachelor of Science in Computer Science & Engineering',
        institution: 'North South University, Bangladesh',
        gradDate: '2024-05',
        gpa: '3.82',
        maxGpa: '4.00'
    },

    // Education History
    educationHistory: [
        { degree: 'B.Sc. CSE', institution: 'North South University', country: 'Bangladesh', year: '2024', grade: '3.82 GPA' },
        { degree: 'Higher Secondary (HSC)', institution: 'Viqarunnisa Noon College', country: 'Bangladesh', year: '2020', grade: '5.00 GPA' },
        { degree: 'Secondary School (SSC)', institution: 'Viqarunnisa Noon School', country: 'Bangladesh', year: '2018', grade: '5.00 GPA' }
    ],

    // Standardized Tests
    ielts: {
        overall: '7.5',
        testDate: '2025-08-12',
        listening: '8.0',
        reading: '7.5',
        writing: '7.0',
        speaking: '7.5'
    },
    gre: {
        combined: '322',
        testDate: '2025-11-05',
        quant: '165',
        verbal: '157',
        awa: '4.5'
    },

    // Handlers to dynamic education entries
    addEducation() {
        this.educationHistory.push({ degree: '', institution: '', country: '', year: '', grade: '' });
    },
    removeEducation(index) {
        this.educationHistory.splice(index, 1);
    }
}" class="space-y-6">

    <form @submit.prevent="" class="space-y-6">

        <!-- Header Card -->
        <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-sm space-y-6">
            
            <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                    <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                </div>
                <div>
                    <h2 class="text-base font-bold text-slate-900">Academic Background Setup</h2>
                    <p class="text-xs text-slate-500">Manage highest qualification, education history, and test scores</p>
                </div>
            </div>

            <!-- SECTION 1: Highest Qualification -->
            <div class="space-y-4">
                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">1. Highest Qualification</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="sm:col-span-2">
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Degree Name <span class="text-rose-500">*</span></label>
                        <input type="text" x-model="highestQual.degree" placeholder="e.g. Bachelor of Science in Computer Science & Engineering" class="w-full rounded-xl border border-slate-200 px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Graduation Date / Month <span class="text-rose-500">*</span></label>
                        <input type="month" x-model="highestQual.gradDate" class="w-full rounded-xl border border-slate-200 px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Institution & Country <span class="text-rose-500">*</span></label>
                        <input type="text" x-model="highestQual.institution" placeholder="e.g. North South University, Bangladesh" class="w-full rounded-xl border border-slate-200 px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">GPA Score <span class="text-rose-500">*</span></label>
                            <input type="text" x-model="highestQual.gpa" placeholder="3.82" class="w-full rounded-xl border border-slate-200 px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Scale / Max GPA</label>
                            <input type="text" x-model="highestQual.maxGpa" placeholder="4.00" class="w-full rounded-xl border border-slate-200 px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-slate-100">

            <!-- SECTION 2: Education History -->
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">2. Education History</h3>
                    <button type="button" @click="addEducation()" class="inline-flex items-center gap-1.5 rounded-lg bg-brand-50 px-3 py-1.5 text-xs font-semibold text-brand-600 hover:bg-brand-100 transition-colors">
                        <iconify-icon icon="lucide:plus" class="text-sm"></iconify-icon>
                        <span>Add Education</span>
                    </button>
                </div>

                <div class="space-y-3">
                    <template x-for="(edu, index) in educationHistory" :key="index">
                        <div class="p-3.5 rounded-xl border border-slate-200 bg-slate-50/50 space-y-3 relative group">
                            
                            <div class="flex items-center justify-between border-b border-slate-200/60 pb-2">
                                <span class="text-xs font-bold text-slate-600" x-text="'Entry #' + (index + 1)"></span>
                                <button type="button" @click="removeEducation(index)" class="text-rose-500 hover:text-rose-700 text-xs flex items-center gap-1">
                                    <iconify-icon icon="lucide:trash-2" class="text-sm"></iconify-icon>
                                    <span>Remove</span>
                                </button>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3">
                                <div class="lg:col-span-1">
                                    <label class="block text-[11px] font-medium text-slate-500 mb-1">Degree / Level</label>
                                    <input type="text" x-model="edu.degree" placeholder="e.g. B.Sc. CSE" class="w-full rounded-lg border border-slate-200 bg-white px-2.5 py-1.5 text-xs text-slate-800 focus:border-brand-500 focus:outline-none">
                                </div>
                                <div class="lg:col-span-1">
                                    <label class="block text-[11px] font-medium text-slate-500 mb-1">Institution</label>
                                    <input type="text" x-model="edu.institution" placeholder="e.g. North South University" class="w-full rounded-lg border border-slate-200 bg-white px-2.5 py-1.5 text-xs text-slate-800 focus:border-brand-500 focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-500 mb-1">Country</label>
                                    <input type="text" x-model="edu.country" placeholder="e.g. Bangladesh" class="w-full rounded-lg border border-slate-200 bg-white px-2.5 py-1.5 text-xs text-slate-800 focus:border-brand-500 focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-500 mb-1">Year Completed</label>
                                    <input type="text" x-model="edu.year" placeholder="2024" class="w-full rounded-lg border border-slate-200 bg-white px-2.5 py-1.5 text-xs text-slate-800 focus:border-brand-500 focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-500 mb-1">Grade / Score</label>
                                    <input type="text" x-model="edu.grade" placeholder="3.82 GPA" class="w-full rounded-lg border border-slate-200 bg-white px-2.5 py-1.5 text-xs text-slate-800 focus:border-brand-500 focus:outline-none">
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <hr class="border-slate-100">

            <!-- SECTION 3: Standardized Test Scores -->
            <div class="space-y-4">
                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">3. Standardized Test Scores</h3>

                <div class="grid grid-cols-1 gap-4">
                    
                    <!-- IELTS Card -->
                    <div class="p-4 rounded-xl border border-slate-200 bg-slate-50/30 space-y-3">
                        <div class="flex items-center justify-between border-b border-slate-200 pb-2">
                            <span class="text-xs font-bold text-slate-800">IELTS Academic</span>
                            <div class="flex items-center gap-1">
                                <label class="text-[11px] font-medium text-slate-500">Test Date:</label>
                                <input type="date" x-model="ielts.testDate" class="rounded-lg border border-slate-200 bg-white px-2 py-1 text-xs text-slate-800 focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 sm:grid-cols-5 gap-2">
                            <div class="sm:col-span-1 col-span-2">
                                <label class="block text-[11px] font-semibold text-brand-600 mb-1">Overall</label>
                                <input type="text" x-model="ielts.overall" placeholder="7.5" class="w-full rounded-lg border border-brand-200 bg-white px-2 py-1.5 text-xs font-bold text-slate-900 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-[11px] font-medium text-slate-500 mb-1">Listening</label>
                                <input type="text" x-model="ielts.listening" placeholder="8.0" class="w-full rounded-lg border border-slate-200 bg-white px-2 py-1.5 text-xs text-slate-800 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-[11px] font-medium text-slate-500 mb-1">Reading</label>
                                <input type="text" x-model="ielts.reading" placeholder="7.5" class="w-full rounded-lg border border-slate-200 bg-white px-2 py-1.5 text-xs text-slate-800 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-[11px] font-medium text-slate-500 mb-1">Writing</label>
                                <input type="text" x-model="ielts.writing" placeholder="7.0" class="w-full rounded-lg border border-slate-200 bg-white px-2 py-1.5 text-xs text-slate-800 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-[11px] font-medium text-slate-500 mb-1">Speaking</label>
                                <input type="text" x-model="ielts.speaking" placeholder="7.5" class="w-full rounded-lg border border-slate-200 bg-white px-2 py-1.5 text-xs text-slate-800 focus:outline-none">
                            </div>
                        </div>
                    </div>

                    <!-- GRE Card -->
                    <div class="p-4 rounded-xl border border-slate-200 bg-slate-50/30 space-y-3">
                        <div class="flex items-center justify-between border-b border-slate-200 pb-2">
                            <span class="text-xs font-bold text-slate-800">GRE General</span>
                            <div class="flex items-center gap-1">
                                <label class="text-[11px] font-medium text-slate-500">Test Date:</label>
                                <input type="date" x-model="gre.testDate" class="rounded-lg border border-slate-200 bg-white px-2 py-1 text-xs text-slate-800 focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                            <div class="sm:col-span-1 col-span-2">
                                <label class="block text-[11px] font-semibold text-brand-600 mb-1">Combined Score</label>
                                <input type="text" x-model="gre.combined" placeholder="322" class="w-full rounded-lg border border-brand-200 bg-white px-2 py-1.5 text-xs font-bold text-slate-900 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-[11px] font-medium text-slate-500 mb-1">Quant Score</label>
                                <input type="text" x-model="gre.quant" placeholder="165" class="w-full rounded-lg border border-slate-200 bg-white px-2 py-1.5 text-xs text-slate-800 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-[11px] font-medium text-slate-500 mb-1">Verbal Score</label>
                                <input type="text" x-model="gre.verbal" placeholder="157" class="w-full rounded-lg border border-slate-200 bg-white px-2 py-1.5 text-xs text-slate-800 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-[11px] font-medium text-slate-500 mb-1">AWA Score</label>
                                <input type="text" x-model="gre.awa" placeholder="4.5" class="w-full rounded-lg border border-slate-200 bg-white px-2 py-1.5 text-xs text-slate-800 focus:outline-none">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Action Bar -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                <button type="button" class="px-4 py-2 text-xs font-medium text-slate-600 rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors">
                    Cancel
                </button>
                <button type="submit" class="px-5 py-2 text-xs font-semibold text-white rounded-xl bg-brand-600 hover:bg-brand-700 transition-colors shadow-xs flex items-center gap-1.5">
                    <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>
                    <span>Save Academic Details</span>
                </button>
            </div>

        </div>
    </form>

</div>