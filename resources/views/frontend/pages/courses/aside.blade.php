<div class="w-80 rounded-2xl border border-slate-100 bg-white p-5 shadow-sm">
  
  <!-- Header -->
  <div class="flex items-center justify-between pb-4">
    <h2 class="text-base font-bold text-slate-900">Advanced filters</h2>
    <button class="flex items-center gap-1 text-xs font-medium text-slate-500 hover:text-slate-800">
      <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
      </svg>
      Reset
    </button>
  </div>

  <div class="space-y-5">
    <!-- Qualification Level -->
    <div>
      <label class="block text-[11px] font-bold tracking-wider text-slate-400 uppercase mb-2">Qualification Level</label>
      <div class="space-y-2 text-xs text-slate-700">
        <label class="flex items-center gap-2 cursor-pointer">
          <input type="radio" name="qualification" class="h-4 w-4 border-slate-300 text-[#005f6b] focus:ring-[#005f6b]" />
          <span>Doctorate</span>
        </label>
        <label class="flex items-center gap-2 cursor-pointer">
          <input type="radio" name="qualification" class="h-4 w-4 border-slate-300 text-[#005f6b] focus:ring-[#005f6b]" />
          <span>Postgraduate</span>
        </label>
        <label class="flex items-center gap-2 cursor-pointer">
          <input type="radio" name="qualification" class="h-4 w-4 border-slate-300 text-[#005f6b] focus:ring-[#005f6b]" />
          <span>Undergraduate</span>
        </label>
        <label class="flex items-center gap-2 cursor-pointer">
          <input type="radio" name="qualification" class="h-4 w-4 border-slate-300 text-[#005f6b] focus:ring-[#005f6b]" />
          <span>University Preparation</span>
        </label>
        <label class="flex items-center gap-2 cursor-pointer">
          <input type="radio" name="qualification" class="h-4 w-4 border-slate-300 text-[#005f6b] focus:ring-[#005f6b]" />
          <span>VET</span>
        </label>
      </div>
    </div>

    <!-- City Dropdown -->
    <div>
      <label class="block text-[11px] font-bold tracking-wider text-slate-400 uppercase mb-1">City</label>
      <div class="relative">
        <select class="w-full appearance-none rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-700 focus:border-[#005f6b] focus:outline-none">
          <option>Any</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-400">
          <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </div>
      </div>
    </div>

    <!-- State Dropdown -->
    <div>
      <label class="block text-[11px] font-bold tracking-wider text-slate-400 uppercase mb-1">State</label>
      <div class="relative">
        <select class="w-full appearance-none rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-700 focus:border-[#005f6b] focus:outline-none">
          <option>Any</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-400">
          <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </div>
      </div>
    </div>

    <!-- Provider / University Dropdown -->
    <div>
      <label class="block text-[11px] font-bold tracking-wider text-slate-400 uppercase mb-1">Provider / University</label>
      <div class="relative">
        <select class="w-full appearance-none rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-700 focus:border-[#005f6b] focus:outline-none">
          <option>Any</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-400">
          <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </div>
      </div>
    </div>

    <!-- Intake Dropdown -->
    <div>
      <label class="block text-[11px] font-bold tracking-wider text-slate-400 uppercase mb-1">Intake</label>
      <div class="relative">
        <select class="w-full appearance-none rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-700 focus:border-[#005f6b] focus:outline-none">
          <option>Any</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-400">
          <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </div>
      </div>
    </div>

    <!-- Max Annual Fee Slider -->
    <div>
      <label class="block text-[11px] font-bold tracking-wider text-slate-400 uppercase mb-1">Max Annual Fee — A$60,000</label>
      <input type="range" min="0" max="100000" value="60000" class="h-1.5 w-full cursor-pointer appearance-none rounded-lg bg-[#005f6b] accent-[#005f6b]" />
    </div>

    <!-- Max Duration Slider -->
    <div>
      <label class="block text-[11px] font-bold tracking-wider text-slate-400 uppercase mb-1">Max Duration — 48 Months</label>
      <input type="range" min="0" max="60" value="48" class="h-1.5 w-full cursor-pointer appearance-none rounded-lg bg-[#005f6b] accent-[#005f6b]" />
    </div>

    <!-- My IELTS Score Slider -->
    <div>
      <label class="block text-[11px] font-bold tracking-wider text-slate-400 uppercase mb-1">My IELTS Score — Up to 8</label>
      <input type="range" min="0" max="9" step="0.5" value="8" class="h-1.5 w-full cursor-pointer appearance-none rounded-lg bg-[#005f6b] accent-[#005f6b]" />
      <p class="mt-1 text-[11px] text-slate-500">PTE and TOEFL equivalents are shown on every course card.</p>
    </div>

    <!-- Scholarship Radio -->
    <div>
      <label class="flex items-center gap-2 cursor-pointer text-xs text-slate-700">
        <input type="radio" name="scholarship" class="h-4 w-4 border-slate-300 text-[#005f6b] focus:ring-[#005f6b]" />
        <span>Scholarship available only</span>
      </label>
    </div>

    <!-- CTA Box -->
    <div class="rounded-xl bg-[#f7efd8] p-3 text-center">
      <p class="text-xs text-slate-700 leading-relaxed mb-3">
        Guests can filter and compare freely. Saving a shortlist or getting profile-based matches needs a free account.
      </p>
      <button class="w-full rounded-xl bg-[#005f6b] py-2 text-xs font-semibold text-white transition hover:bg-[#004b54]">
        Sign up free
      </button>
    </div>

  </div>
</div>