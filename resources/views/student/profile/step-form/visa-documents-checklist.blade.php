<div x-data="{
    documents: [
        { id: 1, name: 'Passport Copy', file: 'Passport_2026.pdf', size: '2.4 MB', type: 'PDF', status: 'Ready' },
        { id: 2, name: 'Academic Transcripts', file: 'Transcripts_Official.pdf', size: '4.1 MB', type: 'PDF', status: 'Ready' },
        { id: 3, name: 'Degree Certificates', file: 'Degree_Certificate.pdf', size: '1.8 MB', type: 'PDF', status: 'Ready' },
        { id: 4, name: 'IELTS / English Test Result', file: 'IELTS_TRF.pdf', size: '850 KB', type: 'PDF', status: 'Ready' },
        { id: 5, name: 'Unconditional Offer Letter', file: 'Offer_Letter.pdf', size: '1.2 MB', type: 'PDF', status: 'Ready' },
        { id: 6, name: 'Bank Statements (6 months)', file: 'Bank_Statement_6M.pdf', size: '5.6 MB', type: 'PDF', status: 'Ready' },
        { id: 7, name: 'Affidavit of Support', file: 'Affidavit_Support.pdf', size: '920 KB', type: 'PDF', status: 'Ready' },
        { id: 8, name: 'Statement of Purpose (SOP)', file: 'Draft_v2.docx', size: '220 KB', type: 'DOCX', status: 'In Review' },
        { id: 9, name: 'Recommendation Letters', file: 'Lora_1.pdf', size: '1.1 MB', type: 'PDF', status: '1 of 2 Received' },
        { id: 10, name: 'CV / Resume', file: 'Resume_Updated.pdf', size: '450 KB', type: 'PDF', status: 'Ready' },
        { id: 11, name: 'Medical / Police Clearance', file: '', size: '', type: '', status: 'Pending Upload' }
    ],

    removeFile(doc) {
        doc.file = '';
        doc.size = '';
        doc.type = '';
        doc.status = 'Pending Upload';
    },

    handleFileUpload(event, doc) {
        const file = event.target.files[0];
        if (file) {
            doc.file = file.name;
            doc.size = (file.size / (1024 * 1024)).toFixed(1) + ' MB';
            doc.type = file.name.split('.').pop().toUpperCase();
            doc.status = 'Ready';
        }
    },

    get completedCount() {
        return this.documents.filter(d => d.status === 'Ready').length;
    },

    get totalCount() {
        return this.documents.length;
    },

    get percentage() {
        return Math.round((this.completedCount / this.totalCount) * 100);
    }
}" class="max-w-5xl mx-auto p-4 sm:p-6">

    <form @submit.prevent="" class="space-y-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-sm space-y-6">

            <!-- Section Header & Progress Summary -->
            <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-100 pb-5">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                        <iconify-icon icon="lucide:folder-check" class="text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900">Visa Documents Upload</h2>
                        <p class="text-xs text-slate-500">Upload and manage required verification & compliance files</p>
                    </div>
                </div>

                <!-- Progress Pill & Bar -->
                <div class="flex flex-col items-end gap-1.5 min-w-[180px]">
                    <div class="flex items-center gap-3 text-xs font-semibold">
                        <span class="text-slate-500" x-text="completedCount + ' of ' + totalCount + ' Completed'"></span>
                        <span class="rounded-full bg-emerald-50 px-2.5 py-0.5 text-emerald-700 border border-emerald-200/60" x-text="percentage + '% Ready'"></span>
                    </div>
                    <div class="h-2 w-full overflow-hidden rounded-full bg-slate-100">
                        <div class="h-full bg-emerald-500 transition-all duration-300" :style="'width: ' + percentage + '%'"></div>
                    </div>
                </div>
            </div>

            <!-- Documents Form Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <template x-for="(doc, index) in documents" :key="doc.id">
                    <div 
                        class="p-4 rounded-xl border transition-all duration-200 flex flex-col justify-between space-y-3"
                        :class="{
                            'border-emerald-200/80 bg-emerald-50/20': doc.status === 'Ready',
                            'border-amber-200/80 bg-amber-50/20': doc.status === 'In Review' || doc.status === '1 of 2 Received',
                            'border-slate-200 bg-slate-50/50': doc.status === 'Pending Upload'
                        }"
                    >
                        <!-- Header Label & Status Tag -->
                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <label class="block text-xs font-bold text-slate-800" x-text="doc.name"></label>
                                <p class="text-[11px] text-slate-400 mt-0.5" x-text="doc.file ? doc.file + ' (' + doc.size + ')' : 'No file chosen'"></p>
                            </div>

                            <!-- Status Badge -->
                            <span 
                                class="inline-flex items-center gap-1 rounded-md px-2 py-1 text-[11px] font-semibold whitespace-nowrap"
                                :class="{
                                    'bg-emerald-100 text-emerald-800': doc.status === 'Ready',
                                    'bg-amber-100 text-amber-800': doc.status === 'In Review' || doc.status === '1 of 2 Received',
                                    'bg-slate-200 text-slate-700': doc.status === 'Pending Upload'
                                }"
                            >
                                <iconify-icon 
                                    :icon="doc.status === 'Ready' ? 'lucide:check-circle' : (doc.status === 'Pending Upload' ? 'lucide:alert-circle' : 'lucide:clock')" 
                                    class="text-xs"
                                ></iconify-icon>
                                <span x-text="doc.status"></span>
                            </span>
                        </div>

                        <!-- Upload Controls -->
                        <div class="flex items-center justify-between pt-2 border-t border-slate-200/60">
                            <!-- File Select Input -->
                            <label class="cursor-pointer inline-flex items-center gap-1.5 text-xs font-medium text-slate-600 hover:text-emerald-700 transition">
                                <iconify-icon icon="lucide:upload-cloud" class="text-sm text-slate-400"></iconify-icon>
                                <span x-text="doc.file ? 'Replace File' : 'Upload Document'"></span>
                                <input type="file" accept=".pdf,.doc,.docx,.jpg,.png" class="hidden" @change="handleFileUpload($event, doc)">
                            </label>

                            <!-- Remove / View Actions -->
                            <template x-if="doc.file">
                                <div class="flex items-center gap-2">
                                    <button type="button" @click="removeFile(doc)" class="text-xs text-rose-500 hover:text-rose-700 flex items-center gap-1 font-medium">
                                        <iconify-icon icon="lucide:trash-2" class="text-xs"></iconify-icon>
                                        <span>Remove</span>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Submit Action -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                <button type="button" class="px-4 py-2 text-xs font-medium text-slate-600 rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors">
                    Cancel
                </button>
                <button type="submit" class="px-5 py-2 text-xs font-semibold text-white rounded-xl bg-emerald-600 hover:bg-emerald-700 transition-colors shadow-xs flex items-center gap-1.5">
                    <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>
                    <span>Save Checklist Progress</span>
                </button>
            </div>

        </div>
    </form>
</div>