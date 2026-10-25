  
  
  <div
        class="overflow-hidden rounded-2xl border border-neutral-200/80 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
        <div
            class="border-b border-neutral-100 bg-neutral-50/50 px-6 py-4 dark:border-neutral-800 dark:bg-neutral-800/50">
            <h2 class="text-base font-semibold text-neutral-900 dark:text-white">
                Location & Residential Address
            </h2>
            <p class="text-xs text-neutral-500 dark:text-neutral-400">Specify country, corresponding city, and physical
                address.</p>
        </div>

        <div class="p-6 space-y-6">
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <div>
                    <label for="country_id"
                        class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300">
                        Country
                    </label>
                    <select id="country_id" name="country_id" x-model="countryId" @change="countryChanged()"
                        class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm transition focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">
                        <option value="">Select Country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                        <p class="mt-1.5 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="city_id"
                        class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300">
                        City
                    </label>
                    <select id="city_id" name="city_id" x-model="cityId" :disabled="!countryId"
                        class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm transition focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/10 disabled:cursor-not-allowed disabled:bg-neutral-100 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:disabled:bg-neutral-800/50">
                        <option value="">Select City</option>
                        <template x-for="city in filteredCities" :key="city.id">
                            <option :value="city.id" x-text="city.name"></option>
                        </template>
                    </select>
                    @error('city_id')
                        <p class="mt-1.5 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <x-form.textarea-input name="address" label="Street Address" rows="2"
                placeholder="Enter complete building or street address..."
                value="{{ old('address', $employee?->address) }}" />
        </div>
    </div>