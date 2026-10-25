<section class="rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
    {{-- Header --}}
    <div class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
       <div class="">
         <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
            Salary History Information
        </h2>
        <p class="text-xs text-neutral-500 dark:text-neutral-400">
            Manage employee salary details, effective periods, and currency configurations.
        </p>
       </div>
       
    </div>

    <div class="space-y-6 p-6">
        {{-- Employee and Salary Amount --}}
        <x-form.input-text name="salary_amount" label="Salary Amount" type="number" step="0.01" value=""
            placeholder="e.g. 50000.00" />

        {{-- Currency and Salary Type --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            <x-form.select-input name="currency_code" label="Currency Code" :options="[
                'bdt' => 'BDT - Bangladeshi Taka',
                'usd' => 'USD - US Dollar',
                'eur' => 'EUR - Euro',
            ]" :value="old('currency_code', 'bdt')"  />

            <x-form.select-input name="salary_type" label="Salary Type" :options="[
                'monthly' => 'Monthly',
                'hourly' => 'Hourly',
                'weekly' => 'Weekly',
                'annual' => 'Annual',
            ]" :value="old('salary_type', 'monthly')" />
        </div>

        {{-- Effective Dates --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            <x-form.date-picker name="effective_from" label="Effective From" type="date" value=""
                placeholder="YYYY-MM-DD" :value="old('effective_from', now()->toDateString())" />

            <x-form.date-picker name="effective_to" label="Effective To (Optional)" type="date" value=""
                placeholder="YYYY-MM-DD" />
        </div>

        {{-- Remarks --}}
        <div>
            <x-form.textarea-input name="remarks" label="Remarks / Notes" value=""
                placeholder="e.g. Annual increment based on performance review" />
        </div>
    </div>
</section>
