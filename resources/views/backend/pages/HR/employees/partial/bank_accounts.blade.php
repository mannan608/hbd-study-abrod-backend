<section class="rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
    {{-- Header --}}
    <div class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
        <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
            Bank Account Information
        </h2>
        <p class="text-xs text-neutral-500 dark:text-neutral-400">
            Manage employee bank account details, routing numbers, and primary disbursement preferences.
        </p>
    </div>

    <div class="space-y-6 p-6">

        {{-- Bank Name & Bank Branch --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            <x-form.input-text name="bank_name" label="Bank Name"
                value="{{ old('bank_name', $bankAccount?->bank_name ?? '') }}" placeholder="e.g. Dutch-Bangla Bank Ltd" />

            <x-form.input-text name="bank_branch" label="Bank Branch"
                value="{{ old('bank_branch', $bankAccount?->bank_branch ?? '') }}" placeholder="e.g. Gulshan Branch" />
        </div>

        {{-- Account Name & Account Number --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            <x-form.input-text name="account_name" label="Account Name"
                value="{{ old('account_name', $bankAccount?->account_name ?? '') }}" placeholder="e.g. John Doe" />

            <x-form.input-text name="account_number" label="Account Number" type="text"
                value="{{ old('account_number', $bankAccount?->account_number ?? '') }}"
                placeholder="e.g. 1234567890123" />
        </div>

        {{-- Routing Number & Primary Toggle --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 items-center">
            <x-form.input-text name="routing_number" label="Routing Number"
                value="{{ old('routing_number', $bankAccount?->routing_number ?? '') }}" placeholder="e.g. 125261234" />

            <div>
                <h2 class="block mb-1 text-sm font-medium text-slate-700">
                    Account Settings
                </h2>
                <label class="relative flex items-start gap-3 cursor-pointer">
                    <input type="hidden" name="is_primary" value="0">
                    <input type="checkbox" id="is_primary" name="is_primary" value="1" @checked(old('is_primary', $employee?->is_primary ?? false))
                        class="mt-0.5 h-4 w-4 rounded border-neutral-300 text-brand-600 focus:ring-brand-500">
                    <div>
                        <span class="text-sm font-medium text-neutral-900 dark:text-white">is Primary</span>
                        <p class="text-xs text-neutral-500 dark:text-neutral-400"> </p>
                    </div>
                </label>
            </div>
        </div>

    </div>

    <div class="space-y-6 p-6">
        {{-- Bank Accounts Table / List --}}
        @if (isset($employee->bankAccounts) && $employee->bankAccounts->isNotEmpty())
            <div class="overflow-hidden border border-neutral-200 rounded-xl dark:border-neutral-800">
                <table class="min-w-full divide-y divide-neutral-200 dark:divide-neutral-800">
                    <thead class="bg-neutral-50 dark:bg-neutral-800/50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-400 uppercase tracking-wider">
                                Bank Details</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-400 uppercase tracking-wider">
                                Account Info</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-400 uppercase tracking-wider">
                                Status</th>
                            <th scope="col"
                                class="px-6 py-3 text-right text-xs font-medium text-neutral-500 dark:text-neutral-400 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-neutral-200 dark:bg-neutral-900 dark:divide-neutral-800">
                        @foreach ($employee->bankAccounts as $account)
                            <tr class="hover:bg-neutral-50/50 dark:hover:bg-neutral-800/30 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-neutral-900 dark:text-white">
                                        {{ $account->bank_name }}</div>
                                    <div class="text-xs text-neutral-500 dark:text-neutral-400">
                                        {{ $account->bank_branch ?? 'Main Branch' }}
                                        @if ($account->routing_number)
                                            • Routing: {{ $account->routing_number }}
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-neutral-900 dark:text-white">
                                        {{ $account->account_name }}</div>
                                    <div class="text-xs font-mono text-neutral-500 dark:text-neutral-400">
                                        •••• {{ substr(decrypt($account->account_number), -4) }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($account->is_primary)
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400">
                                            Primary Account
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-neutral-100 text-neutral-800 dark:bg-neutral-800 dark:text-neutral-400">
                                            Secondary
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-3">
                                    <a href="{{ route('bank-accounts.edit', $account->id) }}"
                                        class="text-brand-600 hover:text-brand-900 dark:text-brand-400 dark:hover:text-brand-300">Edit</a>
                                    <form action="{{ route('bank-accounts.destroy', $account->id) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this bank account?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            {{-- Empty State --}}
            <div class="text-center py-12 border-2 border-dashed border-neutral-200 dark:border-neutral-800 rounded-xl">
                <svg class="mx-auto h-12 w-12 text-neutral-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-neutral-900 dark:text-white">No bank accounts added</h3>
                <p class="mt-1 text-xs text-neutral-500 dark:text-neutral-400">Get started by adding a payout bank
                    account for this employee.</p>
                <div class="mt-6">
                    <a href=""
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-brand-600 rounded-lg shadow-sm hover:bg-brand-700">
                        Add Bank Account
                    </a>
                </div>
            </div>
        @endif

    </div>
</section>
