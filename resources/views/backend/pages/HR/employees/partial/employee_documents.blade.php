<section class="rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
    {{-- Header --}}
    <div class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
        <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
            Upload Employee Document
        </h2>
        <p class="text-xs text-neutral-500 dark:text-neutral-400">
            Manage employee document records, verification status, and validity periods.
        </p>
    </div>

    <div class="space-y-6 p-6">
        {{-- Document Key & Document Name --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            <div class="">
                <label class="block mb-1 text-sm font-medium text-slate-700">
                    CV/Professional Resume
                </label>
                <x-form.dropzone name="documents[cv]" label="CV / Professional Resume" />
            </div>
             <div class="">
                <label class="block mb-1 text-sm font-medium text-slate-700">
                   NID/Passport
                </label>
                <x-form.dropzone name="documents[nid]" label="NID/Passport" />
            </div>            
        </div>
    </div>
</section>
