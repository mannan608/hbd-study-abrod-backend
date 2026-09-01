  {{-- Mobile Navigation --}}
    <nav class="fixed inset-x-0 bottom-0 z-40 border-t border-brand-100 bg-white/95 px-5 py-2.5 shadow-[0_-4px_20px_rgba(13,60,104,0.08)] backdrop-blur lg:hidden">
        <div class="flex items-center justify-around">

            <button
                type="button"
                class="flex min-h-11 flex-col items-center justify-center gap-1 text-brand-600"
            >
                <iconify-icon icon="lucide:user" class="text-xl"></iconify-icon>
                <span class="text-[10px] font-bold">Profile</span>
            </button>

            <button
                type="button"
                class="flex min-h-11 flex-col items-center justify-center gap-1 text-slate-400 transition hover:text-brand-600"
            >
                <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                <span class="text-[10px] font-medium">Courses</span>
            </button>

            <button
                type="button"
                class="flex min-h-11 flex-col items-center justify-center gap-1 text-slate-400 transition hover:text-brand-600"
            >
                <iconify-icon icon="lucide:bell" class="text-xl"></iconify-icon>
                <span class="text-[10px] font-medium">Updates</span>
            </button>

        </div>
    </nav>