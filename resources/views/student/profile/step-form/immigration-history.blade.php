<div x-data="{
    refusals: [
        {
            id: 1,
            country: 'Canada',
            visaType: 'Study Permit',
            year: '2023',
            status: 'Refused',
            grounds: 'Section 216(1)(b) — Officer not satisfied applicant would leave Canada at the end of period authorized for stay.',
            fileName: 'Refusal_Letter_Canada_2023.pdf',
            fileSize: '1.2 MB'
        }
    ],

    addRefusal() {
        this.refusals.push({
            id: Date.now(),
            country: '',
            visaType: '',
            year: new Date().getFullYear().toString(),
            status: 'Refused',
            grounds: '',
            fileName: '',
            fileSize: ''
        });
    },

    removeRefusal(index) {
        this.refusals.splice(index, 1);
    },

    handleFileUpload(event, index) {
        const file = event.target.files[0];
        if (file) {
            this.refusals[index].fileName = file.name;
            this.refusals[index].fileSize = (file.size / (1024 * 1024)).toFixed(1) + ' MB';
        }
    }
}" class="max-w-5xl mx-auto p-4 sm:p-6">

    <form @submit.prevent="" class="space-y-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-sm space-y-6">

            <!-- Section Header -->
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                        <iconify-icon icon="lucide:shield-alert" class="text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900">Immigration History Setup</h2>
                        <p class="text-xs text-slate-500">Record prior visa refusals and travel record details</p>
                    </div>
                </div>
               
            </div>

            <!-- Dynamic Refusal Records -->
            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Refusal & Travel Records</h3>
                    <button type="button" @click="addRefusal()" class="inline-flex items-center gap-1.5 rounded-lg bg-amber-50 px-3 py-1.5 text-xs font-semibold text-amber-700 hover:bg-amber-100 transition-colors">
                        <iconify-icon icon="lucide:plus" class="text-sm"></iconify-icon>
                        <span>Add Refusal Record</span>
                    </button>
                </div>

                <div class="space-y-4">
                    <template x-for="(record, index) in refusals" :key="record.id || index">
                        <div class="p-4 sm:p-5 rounded-xl border border-amber-200/80 bg-amber-50/20 space-y-4 relative">
                            
                            <!-- Card Header -->
                            <div class="flex items-center justify-between border-b border-amber-200/60 pb-3">
                                <div class="flex items-center gap-2">
                                    <div class="flex h-6 w-6 items-center justify-center rounded-lg bg-amber-100 text-amber-700 text-xs font-bold">
                                        <iconify-icon icon="lucide:file-warning" class="text-sm"></iconify-icon>
                                    </div>
                                    <span class="text-xs font-bold text-slate-800" x-text="record.country ? record.country + ' — ' + (record.visaType || 'Visa Entry') : 'Refusal Record #' + (index + 1)"></span>
                                </div>

                                <button type="button" @click="removeRefusal(index)" class="text-xs font-medium text-rose-500 hover:text-rose-700 flex items-center gap-1">
                                    <iconify-icon icon="lucide:trash-2" class="text-sm"></iconify-icon>
                                    <span>Remove Record</span>
                                </button>
                            </div>

                            <!-- Input Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                
                                <!-- Country -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Country <span class="text-rose-500">*</span></label>
                                    <input type="text" x-model="record.country" placeholder="e.g. Canada" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500" required>
                                </div>

                                <!-- Visa / Application Type -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Visa Category / Type <span class="text-rose-500">*</span></label>
                                    <input type="text" x-model="record.visaType" placeholder="e.g. Study Permit" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500" required>
                                </div>

                                <!-- Application Year -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Application Year <span class="text-rose-500">*</span></label>
                                    <input type="number" min="1990" max="2030" x-model="record.year" placeholder="e.g. 2023" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500" required>
                                </div>

                                <!-- Grounds for Refusal -->
                                <div class="sm:col-span-2 lg:col-span-3">
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Grounds for Refusal <span class="text-rose-500">*</span></label>
                                    <textarea x-model="record.grounds" rows="2" placeholder="e.g. Section 216(1)(b) — Officer not satisfied applicant would leave Canada at the end of period authorized for stay." class="w-full rounded-xl border border-slate-200 bg-white p-3 text-xs text-slate-800 focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500" required></textarea>
                                </div>

                                <!-- Upload Document -->
                                <div class="sm:col-span-2 lg:col-span-3">
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Upload Refusal Letter / Document</label>
                                    
                                    <div class="flex items-center gap-3">
                                        <label class="cursor-pointer inline-flex items-center gap-2 px-3 py-2 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-xs font-medium text-slate-700 transition">
                                            <iconify-icon icon="lucide:upload-cloud" class="text-base text-slate-500"></iconify-icon>
                                            <span>Choose File</span>
                                            <input type="file" accept=".pdf,.png,.jpg,.jpeg" class="hidden" @change="handleFileUpload($event, index)">
                                        </label>

                                        <!-- Attached File Preview Pill -->
                                        <template x-if="record.fileName">
                                            <div class="flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-1.5 text-xs text-slate-700 shadow-2xs">
                                                <iconify-icon icon="lucide:file-text" class="text-slate-400 text-sm"></iconify-icon>
                                                <span class="font-medium text-slate-800" x-text="record.fileName"></span>
                                                <span class="text-slate-400 text-[11px]" x-text="'(' + record.fileSize + ')'"></span>
                                                <button type="button" @click="record.fileName = ''; record.fileSize = ''" class="text-slate-400 hover:text-rose-500 ml-1">
                                                    <iconify-icon icon="lucide:x" class="text-xs"></iconify-icon>
                                                </button>
                                            </div>
                                        </template>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Submit Action -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                <button type="button" class="px-4 py-2 text-xs font-medium text-slate-600 rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors">
                    Cancel
                </button>
                <button type="submit" class="px-5 py-2 text-xs font-semibold text-white rounded-xl bg-amber-600 hover:bg-amber-700 transition-colors shadow-xs flex items-center gap-1.5">
                    <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>
                    <span>Save Immigration Details</span>
                </button>
            </div>

        </div>
    </form>
</div>