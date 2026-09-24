<div x-data="{
    activityType: 'Phone Call',
    connected: true,
    outcome: 'Follow-up',
    notes: '',

    connectedOutcomes: [
        { value: 'Follow-up', label: 'Follow-up', icon: 'lucide:phone-forwarded' },
        { value: 'File Open', label: 'File Open', icon: 'lucide:folder-open' },
        { value: 'Visit Office', label: 'Visit Office', icon: 'lucide:building-2' },
        { value: 'Attend Session', label: 'Attend Session', icon: 'lucide:presentation' },
        { value: 'Attend Expo', label: 'Attend Expo', icon: 'lucide:ticket' },
        { value: 'Master Class', label: 'Master Class', icon: 'lucide:graduation-cap' }
    ],

    notConnectedOutcomes: [
        { value: 'Call Back', label: 'Call Back', icon: 'lucide:phone-call' },
        { value: 'No Answer', label: 'No Answer', icon: 'lucide:phone-missed' },
        { value: 'Busy', label: 'Busy', icon: 'lucide:phone-off' },
        { value: 'Switched Off', label: 'Switched Off', icon: 'lucide:power' },
        { value: 'Wrong Number', label: 'Wrong Number', icon: 'lucide:circle-alert' },
        { value: 'Follow-up', label: 'Follow-up', icon: 'lucide:calendar-clock' }
    ],

    otherOutcomes: [
        { value: 'Follow-up', label: 'Follow-up', icon: 'lucide:calendar-clock' },
        { value: 'File Open', label: 'File Open', icon: 'lucide:folder-open' },
        { value: 'Visit Office', label: 'Visit Office', icon: 'lucide:building-2' },
        { value: 'Attend Session', label: 'Attend Session', icon: 'lucide:presentation' },
        { value: 'Attend Expo', label: 'Attend Expo', icon: 'lucide:ticket' },
        { value: 'Master Class', label: 'Master Class', icon: 'lucide:graduation-cap' }
    ],

    get currentOutcomes() {
        if (this.activityType !== 'Phone Call') {
            return this.otherOutcomes;
        }

        return this.connected ?
            this.connectedOutcomes :
            this.notConnectedOutcomes;
    },

    setActivityType(type) {
        this.activityType = type;

        if (type !== 'Phone Call') {
            this.outcome = 'Follow-up';
        } else {
            this.outcome = this.connected ?
                'Follow-up' :
                'Call Back';
        }
    },

    setConnection(value) {
        this.connected = value;
        this.outcome = value ? 'Follow-up' : 'Call Back';
    },

    submitForm() {
        // Keep your existing submitForm() logic here.
    }
}" class="mx-auto w-full">

    <!-- =========================================================
         MAIN CARD
    ========================================================== -->
    <div
        class="overflow-hidden rounded-2xl border border-slate-200
               bg-white shadow-sm
               dark:border-slate-800 dark:bg-slate-900">

        <!-- =====================================================
             HEADER
        ====================================================== -->
        <div class="border-b border-slate-100 px-4 py-3.5
                   dark:border-slate-800">

            <div class="flex items-center gap-3">

                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center
                           rounded-xl bg-brand-50 text-brand-600
                           dark:bg-brand-500/10 dark:text-brand-400">
                    <iconify-icon icon="lucide:clipboard-pen-line" class="text-lg"></iconify-icon>
                </div>

                <div class="min-w-0">

                    <h1
                        class="text-sm font-bold tracking-tight
                               text-slate-900 dark:text-white">
                        Log Lead Activity
                    </h1>

                    <p class="mt-0.5 truncate text-[11px]
                               text-slate-400">
                        Record interaction and next action.
                    </p>

                </div>

            </div>

        </div>


        <!-- =====================================================
             FORM
        ====================================================== -->
        <form @submit.prevent="submitForm()" class="space-y-4 px-4 py-4">

            <!-- =================================================
                 SERVICE STREAM
            ================================================== -->
            <div>

                <div class="mb-1.5 flex items-center justify-between">

                    <label
                        class="text-[11px] font-bold uppercase
                               tracking-wider text-slate-500
                               dark:text-slate-400">
                        Service Stream
                        <span class="text-rose-500">*</span>
                    </label>

                </div>


                <div
                    class="grid grid-cols-2 gap-1 rounded-xl
                           border border-slate-200 bg-slate-100 p-1
                           dark:border-slate-700 dark:bg-slate-800">

                    <label
                        class="flex cursor-pointer items-center
                               justify-center gap-1.5 rounded-lg px-2 py-2
                               text-xs font-semibold text-slate-500
                               transition-all
                               has-checked:bg-white
                               has-checked:text-brand-600
                               has-[:checked]:shadow-sm
                               dark:text-slate-400
                               dark:has-[:checked]:bg-slate-700
                               dark:has-[:checked]:text-brand-400">

                        <input type="radio" name="service_stream" value="HBD Service" class="sr-only" checked>

                        <iconify-icon icon="lucide:graduation-cap" class="text-sm"></iconify-icon>

                        HBD Service

                    </label>


                    <label
                        class="flex cursor-pointer items-center
                               justify-center gap-1.5 rounded-lg px-2 py-2
                               text-xs font-semibold text-slate-500
                               transition-all
                               has-checked:bg-white
                               has-checked:text-brand-600
                               has-[:checked]:shadow-sm
                               dark:text-slate-400
                               dark:has-[:checked]:bg-slate-700
                               dark:has-[:checked]:text-brand-400">

                        <input type="radio" name="service_stream" value="Language Academic" class="sr-only">

                        <iconify-icon icon="lucide:languages" class="text-sm"></iconify-icon>

                        Language Academic

                    </label>

                </div>

            </div>


            <!-- =================================================
                 ACTIVITY TYPE
            ================================================== -->
            <div>

                <div class="mb-1.5 flex items-center justify-between">

                    <label
                        class="text-[11px] font-bold uppercase
                               tracking-wider text-slate-500
                               dark:text-slate-400">
                        Activity Type
                        <span class="text-rose-500">*</span>
                    </label>

                    <span class="text-[9px] text-slate-400">
                        Communication method
                    </span>

                </div>


                <div class="grid grid-cols-2 gap-1.5 sm:grid-cols-4">

                    <!-- Physical -->
                    <label
                        class="flex cursor-pointer items-center gap-2
                               rounded-xl border border-slate-200
                               bg-white px-2.5 py-2.5
                               transition-all
                               hover:border-slate-300
                               has-checked:border-brand-500
                               has-checked:bg-brand-50/60
                               dark:border-slate-700
                               dark:bg-slate-900
                               dark:has-checked:border-brand-500
                               dark:has-checked:bg-brand-500/10">

                        <input type="radio" name="activity_type" value="Physical" class="sr-only"
                            @change="setActivityType('Physical')">

                        <iconify-icon icon="lucide:users-round"
                            class="text-sm text-slate-400
                                   group-has-checked:text-brand-600"></iconify-icon>

                        <span
                            class="text-xs font-semibold
                                   text-slate-600 dark:text-slate-300">
                            Physical
                        </span>

                    </label>


                    <!-- Phone -->
                    <label
                        class="flex cursor-pointer items-center gap-2
                               rounded-xl border border-slate-200
                               bg-white px-2.5 py-2.5
                               transition-all
                               hover:border-slate-300
                               has-checked:border-brand-500
                               has-checked:bg-brand-50/60
                               dark:border-slate-700
                               dark:bg-slate-900
                               dark:has-checked:border-brand-500
                               dark:has-checked:bg-brand-500/10">

                        <input type="radio" name="activity_type" value="Phone Call" class="sr-only" checked
                            @change="setActivityType('Phone Call')">

                        <iconify-icon icon="lucide:phone" class="text-sm text-slate-400"></iconify-icon>

                        <span
                            class="text-xs font-semibold
                                   text-slate-600 dark:text-slate-300">
                            Phone Call
                        </span>

                    </label>


                    <!-- WhatsApp -->
                    <label
                        class="flex cursor-pointer items-center gap-2
                               rounded-xl border border-slate-200
                               bg-white px-2.5 py-2.5
                               transition-all
                               hover:border-slate-300
                               has-checked:border-brand-500
                               has-checked:bg-brand-50/60
                               dark:border-slate-700
                               dark:bg-slate-900
                               dark:has-checked:border-brand-500
                               dark:has-checked:bg-brand-500/10">

                        <input type="radio" name="activity_type" value="WhatsApp" class="sr-only"
                            @change="setActivityType('WhatsApp')">

                        <iconify-icon icon="lucide:message-circle" class="text-sm text-slate-400"></iconify-icon>

                        <span
                            class="text-xs font-semibold
                                   text-slate-600 dark:text-slate-300">
                            WhatsApp
                        </span>

                    </label>


                    <!-- SMS -->
                    <label
                        class="flex cursor-pointer items-center gap-2
                               rounded-xl border border-slate-200
                               bg-white px-2.5 py-2.5
                               transition-all
                               hover:border-slate-300
                               has-checked:border-brand-500
                               has-checked:bg-brand-50/60
                               dark:border-slate-700
                               dark:bg-slate-900
                               dark:has-checked:border-brand-500
                               dark:has-checked:bg-brand-500/10">

                        <input type="radio" name="activity_type" value="SMS" class="sr-only"
                            @change="setActivityType('SMS')">

                        <iconify-icon icon="lucide:message-square" class="text-sm text-slate-400"></iconify-icon>

                        <span
                            class="text-xs font-semibold
                                   text-slate-600 dark:text-slate-300">
                            SMS
                        </span>

                    </label>


                    <!-- Mail -->
                    <label
                        class="flex cursor-pointer items-center gap-2
                               rounded-xl border border-slate-200
                               bg-white px-2.5 py-2.5
                               transition-all
                               hover:border-slate-300
                               has-checked:border-brand-500
                               has-checked:bg-brand-50/60
                               dark:border-slate-700
                               dark:bg-slate-900
                               dark:has-checked:border-brand-500
                               dark:has-checked:bg-brand-500/10">

                        <input type="radio" name="activity_type" value="Mail" class="sr-only"
                            @change="setActivityType('Mail')">

                        <iconify-icon icon="lucide:mail" class="text-sm text-slate-400"></iconify-icon>

                        <span
                            class="text-xs font-semibold
                                   text-slate-600 dark:text-slate-300">
                            Mail
                        </span>

                    </label>

                </div>

            </div>


            <!-- =================================================
                 CALL RESULT
            ================================================== -->
            <div x-show="activityType === 'Phone Call'" x-transition.opacity.duration.150ms
                class="rounded-xl border border-slate-200
                       bg-slate-50 p-2.5
                       dark:border-slate-700
                       dark:bg-slate-800/50">

                <div class="mb-2 flex items-center justify-between">

                    <span
                        class="text-[11px] font-bold uppercase
                               tracking-wider text-slate-500
                               dark:text-slate-400">
                        Call Result
                    </span>

                    <span
                        class="text-[11px] font-semibold text-brand-600
                               dark:text-brand-400"
                        x-text="connected ? 'Connected' : 'Not Connected'"></span>

                </div>


                <div class="grid grid-cols-2 gap-1.5">

                    <button type="button" @click="setConnection(true)"
                        :class="connected
                            ?
                            'border-brand-500 bg-brand-50 text-brand-700 dark:bg-brand-500/10 dark:text-brand-400' :
                            'border-slate-200 bg-white text-slate-500 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-400'"
                        class="flex items-center justify-center gap-1.5
                               rounded-lg border px-3 py-2
                               text-xs font-semibold transition-all">

                        <iconify-icon icon="lucide:phone-call" class="text-sm"></iconify-icon>

                        Connected

                    </button>


                    <button type="button" @click="setConnection(false)"
                        :class="!connected
                            ?
                            'border-brand-500 bg-brand-50 text-brand-700 dark:bg-brand-500/10 dark:text-brand-400' :
                            'border-slate-200 bg-white text-slate-500 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-400'"
                        class="flex items-center justify-center gap-1.5
                               rounded-lg border px-3 py-2
                               text-xs font-semibold transition-all">

                        <iconify-icon icon="lucide:phone-missed" class="text-sm"></iconify-icon>

                        Not Connected

                    </button>

                </div>


                <input type="hidden" name="communication_result" :value="connected ? 'Connected' : 'Not Connected'">

            </div>


            <!-- =================================================
                 OUTCOME & STATUS
            ================================================== -->
            <div>

                <div class="mb-1.5 flex items-center justify-between">

                    <label
                        class="text-[11px] font-bold uppercase
                               tracking-wider text-slate-500
                               dark:text-slate-400">
                        Outcome & Status
                        <span class="text-rose-500">*</span>
                    </label>

                    <span x-show="activityType === 'Phone Call'" class="text-[9px] font-medium text-slate-400"
                        x-text="connected ? 'After connection' : 'After missed call'"></span>

                </div>


                <div class="grid grid-cols-2 md:grid-cols-3 gap-1.5">

                    <template x-for="item in currentOutcomes" :key="item.value">

                        <label
                            class="flex cursor-pointer items-center gap-2
                                   rounded-xl border border-slate-200
                                   bg-white px-2.5 py-2.5
                                   transition-all
                                   hover:border-slate-300
                                   dark:border-slate-700
                                   dark:bg-slate-900"
                            :class="outcome === item.value ?
                                'border-brand-500 bg-brand-50/60 dark:border-brand-500 dark:bg-brand-500/10' :
                                ''">

                            <input type="radio" name="outcome" :value="item.value" x-model="outcome"
                                class="sr-only">

                            <span
                                class="flex h-5 w-5 shrink-0 items-center
                                       justify-center rounded-lg
                                       bg-slate-100 text-slate-500
                                       dark:bg-slate-800 dark:text-slate-400"
                                :class="outcome === item.value ?
                                    'bg-brand-100 text-brand-600 dark:bg-brand-500/20 dark:text-brand-400' :
                                    ''">
                                <iconify-icon :icon="item.icon" class="text-xs"></iconify-icon>
                            </span>

                            <span
                                class="min-w-0 flex-1 truncate text-[11px]
                                       font-semibold text-slate-600
                                       dark:text-slate-300"
                                x-text="item.label"></span>

                            <span
                                class="flex h-4 w-4 shrink-0 items-center
                                       justify-center rounded-full border"
                                :class="outcome === item.value ?
                                    'border-brand-500 bg-brand-500 text-white' :
                                    'border-slate-300 text-transparent dark:border-slate-600'">
                                <iconify-icon icon="lucide:check" class="text-[9px]"></iconify-icon>
                            </span>

                        </label>

                    </template>

                </div>

            </div>


            <!-- =================================================
                 REMINDER
            ================================================== -->
            <div
                class="rounded-xl border border-slate-200 bg-slate-50
                       p-3 dark:border-slate-700 dark:bg-slate-800/50">

                <div class="mb-2 flex items-center gap-2">

                    <iconify-icon icon="lucide:calendar-clock" class="text-sm text-brand-500"></iconify-icon>

                    <span
                        class="text-[11px] font-bold uppercase
                               tracking-wider text-slate-600
                               dark:text-slate-300">
                        Schedule Reminder
                    </span>

                </div>


                <div class="grid grid-cols-2 gap-2">

                    <!-- Date -->
                    <div>

                        <label for="reminderDate"
                            class="mb-1 block text-[11px] font-medium
                                   text-slate-500 dark:text-slate-400">
                            Reminder Date
                            <span class="text-rose-500">*</span>
                        </label>

                        <input type="date" id="reminderDate" name="reminder_date" value="2026-09-28"
                            class="w-full rounded-lg border border-slate-200
                                   bg-white px-2.5 py-2 text-xs
                                   font-medium text-slate-700 outline-none
                                   focus:border-brand-500
                                   focus:ring-2 focus:ring-brand-500/10
                                   dark:border-slate-700
                                   dark:bg-slate-900
                                   dark:text-slate-300">

                    </div>


                    <!-- Counsellor -->
                    <div>

                        <label for="assignedCounsellor"
                            class="mb-1 block text-[11px] font-medium
                                   text-slate-500 dark:text-slate-400">
                            Assigned Counsellor
                        </label>

                        <div class="relative">

                            <select id="assignedCounsellor" name="assigned_counsellor"
                                class="w-full appearance-none rounded-lg
                                       border border-slate-200 bg-white
                                       px-2.5 py-2 pr-7 text-xs
                                       font-medium text-slate-700 outline-none
                                       focus:border-brand-500
                                       focus:ring-2 focus:ring-brand-500/10
                                       dark:border-slate-700
                                       dark:bg-slate-900
                                       dark:text-slate-300">

                                <option value="Self (Sarah Jenkins)">
                                    Self (Sarah Jenkins)
                                </option>

                                <option value="Rohan Thapa (HBD Head)">
                                    Rohan Thapa (HBD Head)
                                </option>

                                <option value="Pooja Shrestha (Language Academic)">
                                    Pooja Shrestha (Language Academic)
                                </option>

                                <option value="Front Desk Team">
                                    Front Desk Team
                                </option>

                            </select>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 NOTES
            ================================================== -->
            <div>

                <div class="mb-1 flex items-center justify-between">

                    <label for="notes"
                        class="text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                        Notes
                    </label>

                    <span class="text-[9px] text-slate-400" x-text="notes.length + '/500'"></span>

                </div>

                <textarea id="notes" x-model="notes" name="notes" rows="2" maxlength="500"
                    placeholder="Write a short note..."
                    class="w-full resize-none rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-xs leading-5 text-slate-700  placeholder-slate-400 outline-none
                           focus:border-brand-500  focus:ring-2 focus:ring-brand-500/10 dark:border-slate-700
                           dark:bg-slate-900  dark:text-slate-300">
                          </textarea>

            </div>


            <!-- =================================================
                 ACTIONS
            ================================================== -->
            <div
                class="flex items-center justify-end gap-2
                       border-t border-slate-100 pt-3
                       dark:border-slate-800">

                <button type="button"
                    class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-xs  transition hover:bg-slate-50
                           dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300">
                    Cancel
                </button>


                <button type="submit"
                    class="inline-flex items-center gap-1.5 rounded-lg bg-brand-600 px-4 py-2 text-xs font-semibold text-white
                           shadow-sm transition  hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500/20">

                    <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>

                    Save Activity

                </button>

            </div>

        </form>

    </div>

</div>