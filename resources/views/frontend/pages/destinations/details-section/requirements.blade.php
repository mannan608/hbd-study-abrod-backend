
<section class="relative overflow-hidden bg-[#F8FAFC] py-16 sm:py-20 lg:py-24">

    {{-- Background Decorations --}}
    <div class="pointer-events-none absolute -top-40 right-0 h-96 w-96 rounded-full bg-[#C9A84C]/10 blur-3xl"></div>
    <div class="pointer-events-none absolute bottom-0 -left-40 h-96 w-96 rounded-full bg-blue-100/60 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Hero Header --}}
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

            <div>

                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-[#C9A84C]/30 bg-[#C9A84C]/10 px-4 py-2">

                    <span class="h-2 w-2 rounded-full bg-[#C9A84C]"></span>

                    <span class="text-[11px] font-bold tracking-[0.18em] text-[#8C702F]">
                        ADMISSIONS GUIDE
                    </span>

                </div>

                <h1 class="max-w-2xl text-4xl font-extrabold leading-tight tracking-tight text-[#0B1D36] sm:text-5xl lg:text-[58px]">

                    Entry
                    <span class="text-[#C9A84C]">Requirements</span>

                </h1>

                <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">

                    What you need to apply for UK universities as a Bangladeshi student. Understand the academic qualifications, English language requirements and essential documents before starting your application.

                </p>

                <div class="mt-8 flex flex-wrap items-center gap-4">

                    <a href="#requirements"
                       class="inline-flex items-center gap-3 rounded-xl bg-[#0B1D36] px-6 py-4 text-sm font-bold text-white shadow-lg shadow-[#0B1D36]/15 transition hover:-translate-y-1 hover:bg-[#17375D]">

                        Explore Requirements

                        <iconify-icon icon="lucide:arrow-down" class="text-lg"></iconify-icon>

                    </a>

                    <a href="#contact"
                       class="inline-flex items-center gap-2 text-sm font-bold text-[#0B1D36] transition hover:text-[#C9A84C]">

                        Get Expert Guidance

                        <iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon>

                    </a>

                </div>

                {{-- Trust Information --}}
                <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4 border-t border-slate-200 pt-7">

                    <div class="flex items-center gap-2">
                        <iconify-icon icon="lucide:graduation-cap" class="text-xl text-[#C9A84C]"></iconify-icon>
                        <span class="text-xs font-semibold text-slate-600">University Admissions</span>
                    </div>

                    <div class="flex items-center gap-2">
                        <iconify-icon icon="lucide:globe" class="text-xl text-[#C9A84C]"></iconify-icon>
                        <span class="text-xs font-semibold text-slate-600">UK Study Guidance</span>
                    </div>

                </div>

            </div>


            {{-- Hero Image --}}
            <div class="relative">

                <div class="absolute -right-5 -top-5 h-32 w-32 rounded-3xl border border-[#C9A84C]/30"></div>

                <div class="relative overflow-hidden rounded-3xl bg-[#0B1D36] p-2 shadow-2xl shadow-[#0B1D36]/15">

                    <img
                        src="https://images.unsplash.com/photo-1562774053-701939374585?w=1000&q=85"
                        alt="UK university campus"
                        class="h-[350px] w-full rounded-2xl object-cover sm:h-[430px]"
                    >

                    <div class="absolute bottom-7 left-7 right-7 rounded-2xl border border-white/20 bg-[#0B1D36]/90 p-5 backdrop-blur-xl">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#C9A84C]">

                                <iconify-icon icon="lucide:graduation-cap" class="text-2xl text-[#0B1D36]"></iconify-icon>

                            </div>

                            <div>
                                <p class="text-sm font-bold text-white">
                                    Your UK Education Journey
                                </p>
                                <p class="mt-1 text-xs text-blue-100">
                                    Start with the right admission requirements.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="absolute -bottom-5 -left-5 -z-10 h-32 w-32 rounded-full bg-[#C9A84C]/20 blur-2xl"></div>

            </div>

        </div>


        {{-- Section Introduction --}}
        <div id="requirements" class="scroll-mt-24 mt-24 text-center">

            <span class="text-xs font-bold tracking-[0.2em] text-[#A3843A]">
                YOUR ADMISSION ROADMAP
            </span>

            <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-[#0B1D36] sm:text-4xl">
                What Do You Need to Apply?
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
                UK universities assess applications based on your academic qualifications, English proficiency and supporting documents.
            </p>

        </div>


        {{-- Requirements Cards --}}
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

            @php
                $requirements = [
                    [
                        'icon' => 'lucide:graduation-cap',
                        'number' => '01',
                        'title' => 'Academic Qualifications',
                        'description' => 'Your previous academic results and qualifications must meet the university entry criteria.',
                        'items' => ['HSC / A-Levels', 'Bachelor’s degree', 'Academic transcripts'],
                    ],
                    [
                        'icon' => 'lucide:languages',
                        'number' => '02',
                        'title' => 'English Language',
                        'description' => 'Demonstrate your English proficiency through an accepted test or qualification.',
                        'items' => ['IELTS Academic', 'PTE Academic', 'Other accepted tests'],
                    ],
                    [
                        'icon' => 'lucide:files',
                        'number' => '03',
                        'title' => 'Supporting Documents',
                        'description' => 'Prepare the documents required to support your university application.',
                        'items' => ['Valid passport', 'Personal statement', 'Academic references'],
                    ],
                    [
                        'icon' => 'lucide:wallet',
                        'number' => '04',
                        'title' => 'Financial Preparation',
                        'description' => 'Plan your tuition fees, living expenses and financial evidence for the visa stage.',
                        'items' => ['Tuition fee planning', 'Living expenses', 'Visa financial evidence'],
                    ],
                ];
            @endphp

            @foreach($requirements as $requirement)

                <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-[#C9A84C]/50 hover:shadow-xl hover:shadow-[#0B1D36]/5">

                    <div class="flex items-center justify-between">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0B1D36] text-[#C9A84C] transition-colors group-hover:bg-[#C9A84C] group-hover:text-[#0B1D36]">

                            <iconify-icon icon="{{ $requirement['icon'] }}" class="text-2xl"></iconify-icon>

                        </div>

                        <span class="text-3xl font-extrabold text-slate-100">
                            {{ $requirement['number'] }}
                        </span>

                    </div>

                    <h3 class="mt-7 text-lg font-extrabold text-[#0B1D36]">
                        {{ $requirement['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-slate-500">
                        {{ $requirement['description'] }}
                    </p>

                    <ul class="mt-6 space-y-3 border-t border-slate-100 pt-5">

                        @foreach($requirement['items'] as $item)

                            <li class="flex items-start gap-2 text-xs font-medium text-slate-600">

                                <iconify-icon icon="lucide:check-circle-2" class="mt-0.5 shrink-0 text-base text-[#C9A84C]"></iconify-icon>

                                {{ $item }}

                            </li>

                        @endforeach

                    </ul>

                </article>

            @endforeach

        </div>


        {{-- Qualification Pathway --}}
        <div class="mt-24 grid gap-12 lg:grid-cols-2 lg:items-center">

            <div>

                <span class="text-xs font-bold tracking-[0.2em] text-[#A3843A]">
                    CHOOSE YOUR PATHWAY
                </span>

                <h2 class="mt-4 text-3xl font-extrabold leading-tight text-[#0B1D36] sm:text-4xl">
                    Find the Right Entry Route for Your Education.
                </h2>

                <p class="mt-5 text-sm leading-7 text-slate-500">
                    Whether you have completed HSC or already hold a bachelor's degree, your UK study pathway depends on the university and programme you choose.
                </p>

                <div class="mt-8 space-y-4">

                    <div class="flex gap-4 rounded-2xl border border-slate-200 bg-white p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#C9A84C]/15 text-[#A3843A]">
                            <iconify-icon icon="lucide:book-open" class="text-xl"></iconify-icon>
                        </div>

                        <div>
                            <h3 class="font-bold text-[#0B1D36]">
                                Undergraduate Study
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                HSC, A-Levels, foundation or other accepted qualifications depending on the university.
                            </p>
                        </div>

                    </div>

                    <div class="flex gap-4 rounded-2xl border border-slate-200 bg-white p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#C9A84C]/15 text-[#A3843A]">
                            <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                        </div>

                        <div>
                            <h3 class="font-bold text-[#0B1D36]">
                                Postgraduate Study
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                A recognised bachelor's degree and programme-specific academic requirements.
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Interactive Qualification Selector --}}
            <div
                x-data="{ level: 'undergraduate' }"
                class="rounded-3xl bg-[#0B1D36] p-7 shadow-xl shadow-[#0B1D36]/10 sm:p-9">

                <span class="text-xs font-bold tracking-[0.18em] text-[#C9A84C]">
                    EXPLORE YOUR OPTIONS
                </span>

                <h3 class="mt-4 text-2xl font-extrabold text-white">
                    Select Your Education Level
                </h3>

                <p class="mt-3 text-sm leading-7 text-blue-100/70">
                    Choose your current qualification to explore a general UK study pathway.
                </p>

                <div class="mt-7 grid grid-cols-2 gap-3">

                    <button
                        type="button"
                        @click="level = 'undergraduate'"
                        :class="level === 'undergraduate' ? 'border-[#C9A84C] bg-[#C9A84C] text-[#0B1D36]' : 'border-white/15 bg-white/5 text-white hover:bg-white/10'"
                        class="rounded-xl border p-4 text-sm font-bold transition">

                        Undergraduate

                    </button>

                    <button
                        type="button"
                        @click="level = 'postgraduate'"
                        :class="level === 'postgraduate' ? 'border-[#C9A84C] bg-[#C9A84C] text-[#0B1D36]' : 'border-white/15 bg-white/5 text-white hover:bg-white/10'"
                        class="rounded-xl border p-4 text-sm font-bold transition">

                        Postgraduate

                    </button>

                </div>


                <div class="mt-7 rounded-2xl border border-white/10 bg-white/5 p-6">

                    <div x-show="level === 'undergraduate'" x-cloak>

                        <h4 class="font-bold text-[#C9A84C]">
                            Undergraduate Pathway
                        </h4>

                        <ul class="mt-5 space-y-4 text-sm text-blue-100">

                            <li class="flex gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-[#C9A84C]"></iconify-icon>
                                HSC or equivalent academic qualification.
                            </li>

                            <li class="flex gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-[#C9A84C]"></iconify-icon>
                                Required subject-specific academic grades.
                            </li>

                            <li class="flex gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-[#C9A84C]"></iconify-icon>
                                Accepted English language qualification.
                            </li>

                            <li class="flex gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-[#C9A84C]"></iconify-icon>
                                Additional foundation pathway if required.
                            </li>

                        </ul>

                    </div>


                    <div x-show="level === 'postgraduate'" x-cloak>

                        <h4 class="font-bold text-[#C9A84C]">
                            Postgraduate Pathway
                        </h4>

                        <ul class="mt-5 space-y-4 text-sm text-blue-100">

                            <li class="flex gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-[#C9A84C]"></iconify-icon>
                                Recognised bachelor's degree.
                            </li>

                            <li class="flex gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-[#C9A84C]"></iconify-icon>
                                Required academic grades or CGPA.
                            </li>

                            <li class="flex gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-[#C9A84C]"></iconify-icon>
                                Accepted English language qualification.
                            </li>

                            <li class="flex gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-[#C9A84C]"></iconify-icon>
                                Work experience or additional documents where required.
                            </li>

                        </ul>

                    </div>

                </div>

                <p class="mt-5 text-xs leading-6 text-blue-100/60">
                    Requirements vary by university and programme. Always check the official course entry criteria.
                </p>

            </div>

        </div>

        {{-- Important Notice --}}
        <div class="mt-10 flex items-start gap-4 rounded-2xl border border-[#C9A84C]/30 bg-[#C9A84C]/10 p-6">

            <iconify-icon icon="lucide:info" class="mt-0.5 shrink-0 text-2xl text-[#A3843A]"></iconify-icon>

            <div>

                <h3 class="font-extrabold text-[#0B1D36]">
                    Important Admission Information
                </h3>

                <p class="mt-2 text-sm leading-7 text-slate-600">
                    Entry requirements, English language scores and document requirements vary between universities and courses. Meeting the minimum requirements does not guarantee admission. Financial evidence for a UK Student visa is a separate requirement from university admission.
                </p>

            </div>

        </div>

    </div>

</section>
