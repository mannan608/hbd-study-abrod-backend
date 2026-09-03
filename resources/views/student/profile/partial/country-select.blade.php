 <div x-data="{
     selectedCountry: '',
     selectedCity: '',
     cities: @js($cities),
 
     get filteredCities() {
         return this.cities.filter(
             city => city.country_id == this.selectedCountry
         );
     }
 }" class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
     {{-- Country --}}
     <div>
         <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
             Country <span class="text-rose-500">*</span>
         </label>

         <div class="relative">
             <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-neutral-400">
                 <iconify-icon icon="lucide:globe" class="text-sm"></iconify-icon>
             </div>

             <select name="country_id" x-model="selectedCountry" @change="selectedCity = ''"
                 class="w-full appearance-none rounded-lg border border-neutral-200 bg-neutral-50/30 py-2.5 pl-10 pr-4 text-xs font-medium text-neutral-800 transition-all focus:border-brand-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500/20 dark:border-neutral-700 dark:bg-neutral-800/40 dark:text-neutral-200 dark:focus:bg-neutral-900">
                 <option value="">Select Country</option>

                 @foreach ($countries as $country)
                     <option value="{{ $country->id }}">
                         {{ $country->name }}
                     </option>
                 @endforeach
             </select>
         </div>
     </div>


     {{-- City --}}
     <div>
         <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
             City <span class="text-rose-500">*</span>
         </label>

         <div class="relative">
             <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-neutral-400">
                 <iconify-icon icon="lucide:map-pin" class="text-sm"></iconify-icon>
             </div>

             <select name="city_id" x-model="selectedCity" :disabled="!selectedCountry"
                 class="w-full appearance-none rounded-lg border border-neutral-200 bg-neutral-50/30 py-2.5 pl-10 pr-4 text-xs font-medium text-neutral-800 transition-all focus:border-brand-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500/20 disabled:cursor-not-allowed disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800/40 dark:text-neutral-200 dark:focus:bg-neutral-900">
                 <option value="">
                     <span x-text="selectedCountry ? 'Select City' : 'Select Country First'"></span>
                 </option>

                 <template x-for="city in filteredCities" :key="city.id">
                     <option :value="city.id" x-text="city.name"></option>
                 </template>
             </select>
         </div>
     </div>


     {{-- Post Code --}}
     <div>
         <label class="block mb-1.5 text-xs font-semibold text-neutral-700 dark:text-neutral-300">
             Post Code <span class="text-rose-500">*</span>
         </label>

         <div class="relative">
             <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-neutral-400">
                 <iconify-icon icon="lucide:mail" class="text-sm"></iconify-icon>
             </div>

             <input type="text" name="post_code" value="{{ old('post_code', '1213') }}"
                 class="w-full rounded-lg border border-neutral-200 bg-neutral-50/30 py-2.5 pl-10 pr-4 text-xs font-medium text-neutral-800 transition-all focus:border-brand-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500/20 dark:border-neutral-700 dark:bg-neutral-800/40 dark:text-neutral-200 dark:focus:bg-neutral-900"
                 placeholder="1213">
         </div>
     </div>
 </div>
