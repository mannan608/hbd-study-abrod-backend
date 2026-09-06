<div x-data="{
    roles: [
        {
            id: 1,
            title: 'Digital Experience Intern',
            organization: 'Northfield University',
            department: 'Student Services',
            startDate: '2024-09',
            endDate: '',
            isCurrent: true,
            description: 'Mapped student journeys and built accessible prototypes for wellbeing services.'
        },
        {
            id: 2,
            title: 'Student Technology Mentor',
            organization: 'Northfield University',
            department: 'Learning Hub',
            startDate: '2023-10',
            endDate: '2024-05',
            isCurrent: false,
            description: 'Supported first-year students with research workflows and portfolio preparation.'
        }
    ],

    addRole() {
        this.roles.push({
            id: Date.now(),
            title: '',
            organization: '',
            department: '',
            startDate: '',
            endDate: '',
            isCurrent: false,
            description: ''
        });
    },

    removeRole(index) {
        this.roles.splice(index, 1);
    }
}" class="max-w-5xl mx-auto p-4 sm:p-6">

    <form @submit.prevent="" class="space-y-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-sm space-y-6">

            <!-- Section Header -->
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                        <iconify-icon icon="lucide:briefcase" class="text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900">Experience & Achievements Setup</h2>
                        <p class="text-xs text-slate-500">Add or update your work experience, internships, and roles</p>
                    </div>
                </div>

                <!-- Roles Counter Badge -->
                <div class="flex items-center gap-1.5 rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                    <iconify-icon icon="lucide:award" class="text-slate-400 text-sm"></iconify-icon>
                    <span x-text="roles.length + ' Role' + (roles.length !== 1 ? 's' : '')"></span>
                </div>
            </div>

            <!-- Dynamic Roles Container -->
            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Work & Experience Entries</h3>
                    <button type="button" @click="addRole()" class="inline-flex items-center gap-1.5 rounded-lg bg-brand-50 px-3 py-1.5 text-xs font-semibold text-brand-600 hover:bg-brand-100 transition-colors">
                        <iconify-icon icon="lucide:plus" class="text-sm"></iconify-icon>
                        <span>Add New Experience</span>
                    </button>
                </div>

                <div class="space-y-4">
                    <template x-for="(role, index) in roles" :key="role.id || index">
                        <div class="p-4 sm:p-5 rounded-xl border border-slate-200 bg-slate-50/50 space-y-4 relative">
                            
                            <!-- Role Header -->
                            <div class="flex items-center justify-between border-b border-slate-200/80 pb-3">
                                <div class="flex items-center gap-2">
                                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-brand-100 text-brand-700 text-xs font-bold" x-text="index + 1"></span>
                                    <span class="text-xs font-bold text-slate-800" x-text="role.title ? role.title : 'New Position #' + (index + 1)"></span>
                                </div>

                                <button type="button" @click="removeRole(index)" class="text-xs font-medium text-rose-500 hover:text-rose-700 flex items-center gap-1">
                                    <iconify-icon icon="lucide:trash-2" class="text-sm"></iconify-icon>
                                    <span>Remove</span>
                                </button>
                            </div>

                            <!-- Input Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                
                                <!-- Role Title -->
                                <div class="sm:col-span-2 lg:col-span-1">
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Role / Position Title <span class="text-rose-500">*</span></label>
                                    <input type="text" x-model="role.title" placeholder="e.g. Digital Experience Intern" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                                </div>

                                <!-- Organization Name -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Organization / Company <span class="text-rose-500">*</span></label>
                                    <input type="text" x-model="role.organization" placeholder="e.g. Northfield University" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                                </div>

                                <!-- Department / Team -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Department / Team</label>
                                    <input type="text" x-model="role.department" placeholder="e.g. Student Services" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">
                                </div>

                                <!-- Start Date -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Start Date <span class="text-rose-500">*</span></label>
                                    <input type="month" x-model="role.startDate" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500" required>
                                </div>

                                <!-- End Date / Current Role Option -->
                                <div>
                                    <div class="flex items-center justify-between mb-1">
                                        <label class="block text-xs font-semibold text-slate-700">End Date</label>
                                        <label class="inline-flex items-center gap-1.5 cursor-pointer">
                                            <input type="checkbox" x-model="role.isCurrent" @change="if(role.isCurrent) role.endDate = ''" class="rounded border-slate-300 text-brand-600 focus:ring-brand-500 h-3.5 w-3.5">
                                            <span class="text-[11px] font-medium text-slate-600">Present</span>
                                        </label>
                                    </div>
                                    <input type="month" x-model="role.endDate" :disabled="role.isCurrent" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500 disabled:bg-slate-100 disabled:text-slate-400">
                                </div>

                                <!-- Description / Summary -->
                                <div class="sm:col-span-2 lg:col-span-3">
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Key Responsibilities & Accomplishments</label>
                                    <textarea x-model="role.description" rows="2" placeholder="Describe main tasks, tools used, and key accomplishments..." class="w-full rounded-xl border border-slate-200 bg-white p-3 text-xs text-slate-800 focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500"></textarea>
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
                <button type="submit" class="px-5 py-2 text-xs font-semibold text-white rounded-xl bg-brand-600 hover:bg-brand-700 transition-colors shadow-xs flex items-center gap-1.5">
                    <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>
                    <span>Save Experience</span>
                </button>
            </div>

        </div>
    </form>
</div>