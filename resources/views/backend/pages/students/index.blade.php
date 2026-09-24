@extends('backend.layouts.app')

@section('content')
    <main x-data="leadDashboard" class="space-y-4">

        <!-- =========================
                         SEARCH & FILTER BAR
                    ========================== -->
        <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm space-y-4">

            <div class="flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">

                <!-- Search -->
                <div class="relative w-full lg:flex-1 lg:min-w-0">

                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <iconify-icon icon="lucide:search" class="text-base"></iconify-icon>
                    </div>

                    <input type="text" x-model="searchQuery" @input="currentPage = 1"
                        placeholder="Search by lead name, email address, or phone number..."
                        class="w-full min-w-0 pl-10 pr-10 py-2.5
                   bg-slate-50
                   border border-slate-200
                   rounded-xl
                   text-sm
                   placeholder-slate-400
                   focus:outline-none
                   focus:ring-2 focus:ring-brand-500/20
                   focus:border-brand-500
                   focus:bg-white
                   transition">

                    <button x-show="searchQuery.length > 0" @click="searchQuery = ''; currentPage = 1" type="button"
                        class="absolute inset-y-0 right-0 pr-3.5
                   flex items-center
                   text-slate-400
                   hover:text-slate-600">
                        <iconify-icon icon="lucide:x" class="text-base text-brand-600"></iconify-icon>
                    </button>

                </div>


                <!-- Controls -->
                <div
                    class="flex w-full lg:w-auto
               items-center
               gap-2
               sm:gap-2.5
               lg:shrink-0">

                    <!-- Advanced Filter -->
                    <button type="button" @click="filterOpen = !filterOpen"
                        :class="filterOpen
                            ?
                            'bg-brand-50 border-brand-200 text-brand-700' :
                            'bg-slate-100 hover:bg-slate-200 text-slate-700 border-slate-200'"
                        class="flex-1 sm:flex-none
                   min-w-[80px]
                   shrink-0
                   whitespace-nowrap
                   px-3 sm:px-4
                   py-2.5
                   text-sm
                   font-semibold
                   rounded-xl
                   transition
                   flex items-center
                   justify-center
                   gap-2
                   border">

                        <iconify-icon icon="lucide:sliders-horizontal"
                            class="text-base text-brand-600 shrink-0"></iconify-icon>

                        <span class="truncate">
                            Advanced Filters
                        </span>

                        <span x-show="activeFilterCount > 0" x-text="activeFilterCount"
                            class="bg-brand-600 text-white
                       text-xs font-bold
                       px-2 py-0.5
                       rounded-full
                       shrink-0"></span>

                    </button>


                    <!-- Rows -->
                    <div
                        class="flex items-center
                   gap-2
                   text-xs
                   text-slate-500
                   border-l
                   border-slate-200
                   pl-2 sm:pl-3
                   shrink-0
                   whitespace-nowrap">

                        <span class="hidden sm:inline">
                            Rows:
                        </span>

                        <select x-model.number="perPage" @change="currentPage = 1"
                            class="min-w-[80px]
                       w-[80px]
                       bg-slate-50
                       border border-slate-200
                       rounded-lg
                       text-xs
                       font-semibold
                       text-slate-700
                       py-1.5
                       px-2
                       focus:outline-none
                       focus:ring-2
                       focus:ring-brand-500/20">
                            <option :value="5">5</option>
                            <option :value="10">10</option>
                            <option :value="25">25</option>
                        </select>

                    </div>

                </div>

            </div>


            <!-- Quick Presets -->
            <div class="flex items-center border-t border-slate-100 pt-3 overflow-x-auto">

                <div class="flex items-center gap-2 min-w-max">

                    <template x-for="preset in presets" :key="preset.id">

                        <button type="button" @click="applyPreset(preset.id)"
                            :class="activePreset === preset.id ?
                                'bg-brand-600 text-white border-brand-600 shadow-sm' :
                                'text-slate-600 hover:bg-slate-100 border-transparent'"
                            class="px-3.5 py-1.5 rounded-lg text-xs font-medium transition border">
                            <span x-text="preset.label"></span>
                        </button>

                    </template>

                </div>

            </div>

        </div>
        <!--  FILTER DRAWER -->
        <div x-show="filterOpen" x-cloak x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="bg-white rounded-2xl border border-slate-200 shadow-lg overflow-hidden">

            <!-- Header -->
            <div class="px-5 py-3.5 bg-slate-50 border-b border-slate-200 flex items-center justify-between">

                <div class="flex items-center gap-2">

                    <i class="fa-solid fa-filter text-brand-600 text-xs"></i>
                    <iconify-icon icon="lucide:filter" class="text-brand-600 text-sm"></iconify-icon>

                    <h2 class="text-xs font-bold text-slate-900 uppercase tracking-wider">
                        Advanced Filters
                    </h2>

                </div>

                <button type="button" @click="filterOpen = false"
                    class="text-slate-400 hover:text-slate-600 p-1.5 rounded-lg hover:bg-slate-200 transition">
                    <iconify-icon icon="lucide:x" class="text-base"></iconify-icon>

                </button>

            </div>


            <!-- Filter Grid -->
            <div class="p-5 grid grid-cols-1 md:grid-cols-3 gap-5">

                <!-- Date -->
                <div class="space-y-4">

                    <div class="flex items-center gap-2 border-b border-slate-100 pb-2">

                        <i class="fa-regular fa-calendar text-brand-500 text-xs"></i>

                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider">
                            Date Filters
                        </h3>

                    </div>


                    <div>

                        <label class="block text-xs font-semibold text-slate-700 mb-1">
                            Created Date Range
                        </label>

                        <select x-model="filters.dateRange" @change="currentPage = 1" class="filter-select">
                            <option value="">All Time</option>
                            <option value="today">Created Today</option>
                            <option value="this-week">This Week</option>
                            <option value="this-month">This Month</option>
                        </select>

                    </div>


                    <div>

                        <label class="block text-xs font-semibold text-slate-700 mb-1">
                            Task Due Status
                        </label>

                        <select x-model="filters.dueStatus" @change="currentPage = 1" class="filter-select">
                            <option value="">Any Due Status</option>
                            <option value="overdue">Overdue</option>
                            <option value="due-today">Due Today</option>
                            <option value="upcoming">Upcoming</option>
                        </select>

                    </div>

                </div>


                <!-- Assignment -->
                <div class="space-y-4">

                    <div class="flex items-center gap-2 border-b border-slate-100 pb-2">

                        <i class="fa-solid fa-user-check text-brand-500 text-xs"></i>

                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider">
                            Assignment & Status
                        </h3>

                    </div>


                    <div>

                        <label class="block text-xs font-semibold text-slate-700 mb-1">
                            Assigned Counselor
                        </label>

                        <select x-model="filters.counsellor" @change="currentPage = 1" class="filter-select">
                            <option value="">All Counselors</option>
                            <option value="Sarah Jenkins">Sarah Jenkins</option>
                            <option value="Michael Chen">Michael Chen</option>
                            <option value="Alex Rivera">Alex Rivera</option>
                        </select>

                    </div>


                    <div class="grid grid-cols-2 gap-2">

                        <div>

                            <label class="block text-xs font-semibold text-slate-700 mb-1">
                                Pipeline Status
                            </label>

                            <select x-model="filters.status" @change="currentPage = 1" class="filter-select">
                                <option value="">All Statuses</option>
                                <option value="New Lead">New Lead</option>
                                <option value="Contacted">Contacted</option>
                                <option value="Counselled">Counselled</option>
                                <option value="Qualified">Qualified</option>
                            </select>

                        </div>


                        <div>

                            <label class="block text-xs font-semibold text-slate-700 mb-1">
                                Priority
                            </label>

                            <select x-model="filters.priority" @change="currentPage = 1" class="filter-select">
                                <option value="">All Priorities</option>
                                <option value="High">High Priority</option>
                                <option value="Medium">Medium Priority</option>
                                <option value="Low">Low Priority</option>
                            </select>

                        </div>

                    </div>

                </div>


                <!-- Academic -->
                <div class="space-y-4">

                    <div class="flex items-center gap-2 border-b border-slate-100 pb-2">

                        <i class="fa-solid fa-graduation-cap text-brand-500 text-xs"></i>

                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider">
                            Academic & Country
                        </h3>

                    </div>


                    <div class="grid grid-cols-2 gap-2">

                        <div>

                            <label class="block text-xs font-semibold text-slate-700 mb-1">
                                Target Intake
                            </label>

                            <select x-model="filters.intake" @change="currentPage = 1" class="filter-select">
                                <option value="">All Intakes</option>
                                <option value="Fall 2026">Fall 2026</option>
                                <option value="Spring 2027">Spring 2027</option>
                                <option value="Fall 2027">Fall 2027</option>
                            </select>

                        </div>


                        <div>

                            <label class="block text-xs font-semibold text-slate-700 mb-1">
                                Destination
                            </label>

                            <select x-model="filters.destination" @change="currentPage = 1" class="filter-select">
                                <option value="">All Destinations</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Canada">Canada</option>
                                <option value="Australia">Australia</option>
                            </select>

                        </div>

                    </div>


                    <div>

                        <label class="block text-xs font-semibold text-slate-700 mb-1">
                            English Proficiency Exam
                        </label>

                        <select x-model="filters.exam" @change="currentPage = 1" class="filter-select">
                            <option value="">Any Exam Status</option>
                            <option value="IELTS">IELTS Passed</option>
                            <option value="TOEFL">TOEFL Passed</option>
                            <option value="PTE">PTE Passed</option>
                        </select>

                    </div>

                </div>

            </div>


            <!-- Footer -->
            <div class="px-5 py-3.5 bg-slate-50 border-t border-slate-200 flex items-center justify-between">

                <button type="button" @click="resetAllFilters()"
                    class="text-xs font-semibold text-slate-600 hover:text-slate-900">
                    Reset All Filters
                </button>


                <div class="flex items-center gap-2">

                    <button type="button" @click="filterOpen = false"
                        class="px-4 py-2 text-xs font-semibold text-slate-700 bg-white border border-slate-300 rounded-xl hover:bg-slate-50">
                        Close
                    </button>


                    <button type="button" @click="filterOpen = false; currentPage = 1"
                        class="px-5 py-2 text-xs font-semibold text-white bg-brand-600 rounded-xl hover:bg-brand-700">
                        Apply & Show
                        (<span x-text="filteredLeads.length"></span>)
                    </button>

                </div>

            </div>

        </div>


        <!-- =========================
                         TABLE
                    ========================== -->
        <div class="bg-white rounded-2xl border border-slate-200  overflow-hidden">

            <div class="overflow-x-auto">

                <table class="w-full text-left border-collapse">

                    <thead>

                        <tr
                            class="bg-slate-50 border-b border-slate-200 text-[11px] font-bold text-slate-500 uppercase tracking-wider">

                            <th class="py-3.5 px-4 w-10">

                                <input type="checkbox" @change="toggleSelectAll($event)"
                                    :checked="paginatedLeads.length > 0 && paginatedLeads.every(lead => selectedLeads.includes(
                                        lead.id))"
                                    class="rounded border-slate-300 text-brand-600 focus:ring-brand-500/20">

                            </th>

                            <th class="py-3.5 px-4">Lead Profile</th>
                            <th class="py-3.5 px-4">Contact Info</th>
                            <th class="py-3.5 px-4">Counselor</th>
                            <th class="py-3.5 px-4">Status & Priority</th>
                            <th class="py-3.5 px-4">Intake & Country</th>
                            <th class="py-3.5 px-4">Created</th>
                            <th class="py-3.5 px-4 text-right">Actions</th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-slate-100 text-xs">

                        <template x-for="lead in paginatedLeads" :key="lead.id">

                            <tr class="hover:bg-slate-50 transition-colors">

                                <!-- Checkbox -->
                                <td class="py-3.5 px-4">

                                    <input type="checkbox" :value="lead.id" x-model="selectedLeads"
                                        class="rounded border-slate-300 text-brand-600 focus:ring-brand-500/20">

                                </td>


                                <!-- Lead -->
                                <td class="py-3.5 px-4">

                                    <div class="flex items-center gap-3">

                                        <div class="w-9 h-9 rounded-full bg-brand-50 text-brand-700 font-bold flex items-center justify-center text-xs border border-brand-100"
                                            x-text="getInitials(lead.name)"></div>


                                        <div>

                                            <a href="#" @click.prevent
                                                class="font-bold text-slate-900 hover:text-brand-600"
                                                x-text="lead.name"></a>

                                            <p class="text-[11px] text-slate-400" x-text="'ID: #' + lead.id"></p>

                                        </div>

                                    </div>

                                </td>


                                <!-- Contact -->
                                <td class="py-3.5 px-4">

                                    <div class="text-slate-700 font-medium" x-text="lead.phone"></div>

                                    <div class="text-slate-400 text-[11px]" x-text="lead.email"></div>

                                </td>


                                <!-- Counselor -->
                                <td class="py-3.5 px-4">

                                    <div class="flex items-center gap-2">

                                        <div class="w-6 h-6 rounded-full bg-slate-100 flex items-center justify-center text-[10px] font-semibold text-slate-600"
                                            x-text="getInitials(lead.counsellor)"></div>

                                        <span class="font-medium text-slate-700" x-text="lead.counsellor"></span>

                                    </div>

                                </td>


                                <!-- Status -->
                                <td class="py-3.5 px-4">

                                    <div class="flex items-center gap-2 flex-wrap">

                                        <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold border"
                                            :class="{
                                                'bg-emerald-50 text-emerald-700 border-emerald-200': lead
                                                    .status === 'Contacted',
                                                'bg-amber-50 text-amber-700 border-amber-200': lead
                                                    .status === 'New Lead',
                                                'bg-blue-50 text-blue-700 border-blue-200': lead
                                                    .status === 'Counselled',
                                                'bg-purple-50 text-purple-700 border-purple-200': lead
                                                    .status === 'Qualified'
                                            }"
                                            x-text="lead.status"></span>


                                        <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold border"
                                            :class="{
                                                'bg-red-50 text-red-700 border-red-200': lead.priority === 'High',
                                                'bg-amber-50 text-amber-700 border-amber-200': lead
                                                    .priority === 'Medium',
                                                'bg-slate-100 text-slate-600 border-slate-200': lead
                                                    .priority === 'Low'
                                            }"
                                            x-text="lead.priority"></span>

                                    </div>

                                </td>


                                <!-- Intake -->
                                <td class="py-3.5 px-4">

                                    <div class="font-semibold text-slate-800" x-text="lead.intake"></div>

                                    <span
                                        class="inline-block mt-0.5 px-1.5 py-0.5 text-[10px] bg-slate-100 text-slate-600 rounded border border-slate-200"
                                        x-text="lead.destination"></span>

                                </td>


                                <!-- Created -->
                                <td class="py-3.5 px-4 text-slate-500 font-medium whitespace-nowrap"
                                    x-text="lead.createdDate"></td>


                                <!-- Actions -->
                                <td class="py-3.5 px-4 text-right relative" x-data="{ openMenu: false }">

                                   <div class="flex justify-end gap-2">
                                    <a href="#"
                                        class="p-2 text-neutral-500 hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-500/10 rounded-lg transition-all">
                                        <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />

                                            <circle cx="12" cy="12" r="3" stroke-width="2" />

                                        </svg>
                                    </a>
                                </div>

                                </td>

                            </tr>

                        </template>


                        <!-- Empty -->
                        <template x-if="filteredLeads.length === 0">

                            <tr>

                                <td colspan="8" class="py-12 text-center">

                                    <div
                                        class="w-12 h-12 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3">

                                        <i class="fa-solid fa-folder-open text-xl"></i>

                                    </div>

                                    <h3 class="text-sm font-semibold text-slate-800">
                                        No matching leads found
                                    </h3>

                                    <p class="text-xs text-slate-400 mt-1">
                                        Try adjusting your active search or filter constraints
                                    </p>

                                    <button type="button" @click="resetAllFilters()"
                                        class="mt-3 px-3 py-1.5 text-xs font-semibold text-brand-600 bg-brand-50 border border-brand-200 rounded-lg hover:bg-brand-100">
                                        Clear Filters
                                    </button>

                                </td>

                            </tr>

                        </template>

                    </tbody>

                </table>

            </div>


            <!-- =========================
                             PAGINATION
                        ========================== -->
            <div
                class="px-4 py-3 bg-slate-50 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-500">

                <div>

                    Showing
                    <span class="font-semibold text-slate-700" x-text="startItem"></span>

                    to

                    <span class="font-semibold text-slate-700" x-text="endItem"></span>

                    of

                    <span class="font-semibold text-slate-700" x-text="filteredLeads.length"></span>

                    entries

                </div>


                <div class="flex items-center gap-1">

                    <button type="button" @click="currentPage--" :disabled="currentPage <= 1"
                        class="px-3 py-1.5 rounded-lg border border-slate-200 bg-white font-medium text-slate-600 hover:bg-slate-50 disabled:opacity-40 disabled:cursor-not-allowed">
                        Previous
                    </button>


                    <template x-for="page in totalPages" :key="page">

                        <button type="button" @click="currentPage = page"
                            :class="currentPage === page ?
                                'border-brand-600 bg-brand-600 text-white font-semibold' :
                                'border-slate-200 bg-white text-slate-600 hover:bg-slate-50'"
                            class="px-3 py-1.5 rounded-lg border text-xs transition" x-text="page"></button>

                    </template>


                    <button type="button" @click="currentPage++" :disabled="currentPage >= totalPages"
                        class="px-3 py-1.5 rounded-lg border border-slate-200 bg-white font-medium text-slate-600 hover:bg-slate-50 disabled:opacity-40 disabled:cursor-not-allowed">
                        Next
                    </button>

                </div>

            </div>

        </div>

    </main>


    <!-- =========================
                     SMALL UI HELPERS
                ========================== -->
    <style>
        [x-cloak] {
            display: none !important;
        }

        .filter-pill {
            display: inline-flex;
            align-items: center;
            gap: .375rem;
            padding: .25rem .625rem;
            border-radius: .5rem;
            font-size: .75rem;
            font-weight: 500;
            background: #eef2ff;
            color: #3730a3;
            border: 1px solid #c7d2fe;
        }

        .filter-select {
            width: 100%;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: .75rem;
            padding: .5rem .75rem;
            font-size: .75rem;
            color: #1e293b;
            outline: none;
        }

        .filter-select:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, .10);
        }
    </style>


    <!-- =========================
                     ALPINE LOGIC
                ========================== -->
    <script>
        /*
         * Important:
         * Your previous code only registered Alpine.data()
         * inside alpine:init.
         *
         * If Alpine had already initialized before this script,
         * the alpine:init event was missed.
         *
         * This version supports BOTH cases.
         */

        const registerLeadDashboard = () => {

            if (!window.Alpine) {
                return;
            }

            Alpine.data('leadDashboard', () => ({

                filterOpen: false,
                openAddModal: false,

                searchQuery: '',

                activePreset: 'all',

                currentPage: 1,

                perPage: 10,

                selectedLeads: [],


                /* =========================
                   PRESETS
                ========================== */

                presets: [{
                        id: 'all',
                        label: 'All Leads'
                    },
                    {
                        id: 'assigned-me',
                        label: 'Assigned to Me'
                    },
                    {
                        id: 'new-today',
                        label: 'New Today'
                    },
                    {
                        id: 'high-priority',
                        label: 'High Priority'
                    },
                    {
                        id: 'uncontacted',
                        label: 'Uncontacted'
                    }
                ],


                /* =========================
                   FILTERS
                ========================== */

                filters: {
                    counsellor: '',
                    status: '',
                    priority: '',
                    intake: '',
                    destination: '',
                    exam: '',
                    dateRange: '',
                    dueStatus: ''
                },


                /* =========================
                   LEADS
                ========================== */

                leads: [{
                        id: 1001,
                        name: 'John Doe',
                        phone: '+1 (555) 234-5678',
                        email: 'john.doe@example.com',
                        counsellor: 'Sarah Jenkins',
                        status: 'Contacted',
                        priority: 'High',
                        intake: 'Fall 2026',
                        destination: 'United Kingdom',
                        createdDate: '2026-09-24'
                    },

                    {
                        id: 1002,
                        name: 'Alice Smith',
                        phone: '+1 (555) 987-6543',
                        email: 'alice.smith@gmail.com',
                        counsellor: 'Michael Chen',
                        status: 'New Lead',
                        priority: 'Medium',
                        intake: 'Spring 2027',
                        destination: 'Canada',
                        createdDate: '2026-09-23'
                    },

                    {
                        id: 1003,
                        name: 'Robert Khan',
                        phone: '+1 (555) 456-7890',
                        email: 'robert.khan@yahoo.com',
                        counsellor: 'Alex Rivera',
                        status: 'Counselled',
                        priority: 'Low',
                        intake: 'Fall 2026',
                        destination: 'United States',
                        createdDate: '2026-09-21'
                    },

                    {
                        id: 1004,
                        name: 'Elena Rostova',
                        phone: '+1 (555) 111-2233',
                        email: 'elena.r@hotmail.com',
                        counsellor: 'Sarah Jenkins',
                        status: 'Qualified',
                        priority: 'High',
                        intake: 'Fall 2026',
                        destination: 'Australia',
                        createdDate: '2026-09-24'
                    },

                    {
                        id: 1005,
                        name: 'David Lee',
                        phone: '+1 (555) 333-4455',
                        email: 'david.lee@outlook.com',
                        counsellor: 'Michael Chen',
                        status: 'New Lead',
                        priority: 'High',
                        intake: 'Spring 2027',
                        destination: 'United Kingdom',
                        createdDate: '2026-09-22'
                    },

                    {
                        id: 1006,
                        name: 'Sophia Martinez',
                        phone: '+1 (555) 666-7788',
                        email: 'sophia.m@gmail.com',
                        counsellor: 'Alex Rivera',
                        status: 'Contacted',
                        priority: 'Medium',
                        intake: 'Fall 2027',
                        destination: 'Canada',
                        createdDate: '2026-09-20'
                    }
                ],


                /* =========================
                   ACTIVE FILTER COUNT
                ========================== */

                get activeFilterCount() {

                    return Object.values(this.filters)
                        .filter(value => value !== '')
                        .length;

                },


                /* =========================
                   FILTERED LEADS
                ========================== */

                get filteredLeads() {

                    const query = this.searchQuery
                        .trim()
                        .toLowerCase();

                    return this.leads.filter(lead => {

                        /*
                         * Search
                         */
                        const matchesSearch =
                            query === '' ||
                            String(lead.name || '').toLowerCase().includes(query) ||
                            String(lead.email || '').toLowerCase().includes(query) ||
                            String(lead.phone || '').toLowerCase().includes(query);


                        /*
                         * Counselor
                         */
                        const matchesCounsellor =
                            this.filters.counsellor === '' ||
                            lead.counsellor === this.filters.counsellor;


                        /*
                         * Status
                         */
                        const matchesStatus =
                            this.filters.status === '' ||
                            lead.status === this.filters.status;


                        /*
                         * Priority
                         */
                        const matchesPriority =
                            this.filters.priority === '' ||
                            lead.priority === this.filters.priority;


                        /*
                         * Intake
                         */
                        const matchesIntake =
                            this.filters.intake === '' ||
                            lead.intake === this.filters.intake;


                        /*
                         * Destination
                         */
                        const matchesDestination =
                            this.filters.destination === '' ||
                            lead.destination === this.filters.destination;


                        /*
                         * Date
                         *
                         * Only apply if createdDate exists.
                         */
                        let matchesDate = true;

                        if (
                            this.filters.dateRange !== '' &&
                            lead.createdDate
                        ) {

                            const created = new Date(
                                lead.createdDate + 'T00:00:00'
                            );

                            const today = new Date();

                            today.setHours(0, 0, 0, 0);

                            if (this.filters.dateRange === 'today') {

                                matchesDate =
                                    created.getTime() === today.getTime();

                            } else if (
                                this.filters.dateRange === 'this-week'
                            ) {

                                const day = today.getDay();

                                const diff =
                                    day === 0 ? 6 : day - 1;

                                const startOfWeek =
                                    new Date(today);

                                startOfWeek.setDate(
                                    today.getDate() - diff
                                );

                                matchesDate =
                                    created >= startOfWeek &&
                                    created <= today;

                            } else if (
                                this.filters.dateRange === 'this-month'
                            ) {

                                matchesDate =
                                    created.getMonth() === today.getMonth() &&
                                    created.getFullYear() === today.getFullYear();

                            }

                        }


                        /*
                         * Exam
                         *
                         * Your current sample leads do not contain
                         * an exam field. Therefore this filter only
                         * applies when the lead actually has exam data.
                         */
                        const matchesExam =
                            this.filters.exam === '' ||
                            !Object.prototype.hasOwnProperty.call(lead, 'exam') ||
                            lead.exam === this.filters.exam;


                        /*
                         * Due status
                         *
                         * Current sample data does not contain
                         * dueStatus, so don't incorrectly hide
                         * existing leads.
                         */
                        const matchesDueStatus =
                            this.filters.dueStatus === '' ||
                            !Object.prototype.hasOwnProperty.call(lead, 'dueStatus') ||
                            lead.dueStatus === this.filters.dueStatus;


                        return (
                            matchesSearch &&
                            matchesCounsellor &&
                            matchesStatus &&
                            matchesPriority &&
                            matchesIntake &&
                            matchesDestination &&
                            matchesDate &&
                            matchesExam &&
                            matchesDueStatus
                        );

                    });

                },


                /* =========================
                   PAGINATION
                ========================== */

                get totalPages() {

                    return Math.max(
                        1,
                        Math.ceil(
                            this.filteredLeads.length /
                            Number(this.perPage)
                        )
                    );

                },


                get paginatedLeads() {

                    /*
                     * Prevent invalid page after filtering.
                     */
                    if (this.currentPage > this.totalPages) {
                        this.currentPage = this.totalPages;
                    }

                    const start =
                        (this.currentPage - 1) *
                        Number(this.perPage);

                    return this.filteredLeads.slice(
                        start,
                        start + Number(this.perPage)
                    );

                },


                get startItem() {

                    if (this.filteredLeads.length === 0) {
                        return 0;
                    }

                    return (
                        (this.currentPage - 1) *
                        Number(this.perPage)
                    ) + 1;

                },


                get endItem() {

                    if (this.filteredLeads.length === 0) {
                        return 0;
                    }

                    return Math.min(
                        this.currentPage * Number(this.perPage),
                        this.filteredLeads.length
                    );

                },


                /* =========================
                   PRESET
                ========================== */

                applyPreset(id) {

                    this.activePreset = id;

                    this.filters = {
                        counsellor: '',
                        status: '',
                        priority: '',
                        intake: '',
                        destination: '',
                        exam: '',
                        dateRange: '',
                        dueStatus: ''
                    };

                    this.searchQuery = '';

                    this.currentPage = 1;


                    if (id === 'assigned-me') {

                        this.filters.counsellor =
                            'Sarah Jenkins';

                    } else if (id === 'new-today') {

                        this.filters.status =
                            'New Lead';

                        this.filters.dateRange =
                            'today';

                    } else if (id === 'high-priority') {

                        this.filters.priority =
                            'High';

                    } else if (id === 'uncontacted') {

                        this.filters.status =
                            'New Lead';

                    }

                },


                /* =========================
                   RESET
                ========================== */

                resetAllFilters() {

                    this.filters = {
                        counsellor: '',
                        status: '',
                        priority: '',
                        intake: '',
                        destination: '',
                        exam: '',
                        dateRange: '',
                        dueStatus: ''
                    };

                    this.searchQuery = '';

                    this.activePreset = 'all';

                    this.currentPage = 1;

                },


                /* =========================
                   DELETE
                ========================== */

                deleteLead(id) {

                    this.leads =
                        this.leads.filter(
                            lead => lead.id !== id
                        );

                    this.selectedLeads =
                        this.selectedLeads.filter(
                            selectedId => selectedId !== id
                        );

                },


                /* =========================
                   SELECT ALL
                ========================== */

                toggleSelectAll(e) {

                    const pageIds =
                        this.paginatedLeads.map(
                            lead => lead.id
                        );

                    if (e.target.checked) {

                        this.selectedLeads = [
                            ...new Set([
                                ...this.selectedLeads,
                                ...pageIds
                            ])
                        ];

                    } else {

                        this.selectedLeads =
                            this.selectedLeads.filter(
                                id => !pageIds.includes(id)
                            );

                    }

                },


                /* =========================
                   INITIALS
                ========================== */

                getInitials(name) {

                    if (!name) {
                        return 'LD';
                    }

                    return name
                        .trim()
                        .split(/\s+/)
                        .map(n => n[0])
                        .join('')
                        .substring(0, 2)
                        .toUpperCase();

                },


                /* =========================
                   EXPORT CSV
                ========================== */

                exportCSV() {

                    const csvContent =
                        "data:text/csv;charset=utf-8," +
                        "ID,Name,Phone,Email,Status,Priority\n" +
                        this.filteredLeads
                        .map(e =>
                            `${e.id},"${e.name}",${e.phone},${e.email},${e.status},${e.priority}`
                        )
                        .join("\n");

                    const encodedUri =
                        encodeURI(csvContent);

                    const link =
                        document.createElement("a");

                    link.setAttribute(
                        "href",
                        encodedUri
                    );

                    link.setAttribute(
                        "download",
                        "lead_export.csv"
                    );

                    document.body.appendChild(link);

                    link.click();

                    document.body.removeChild(link);

                }

            }));

        };


        /*
         * Handles both cases:
         *
         * 1. Alpine loads before this script
         * 2. Alpine loads after this script
         */
        if (window.Alpine) {

            registerLeadDashboard();

        } else {

            document.addEventListener(
                'alpine:init',
                registerLeadDashboard, {
                    once: true
                }
            );

        }
    </script>
@endsection
