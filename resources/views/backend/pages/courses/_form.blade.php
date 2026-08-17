@php
    $isEdit = isset($course) && $course;

    $entryRequirements = old(
        'entry_requirements',
        $course?->entry_requirements
            ? json_encode($course->entry_requirements, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
            : '',
    );
@endphp

<div x-data="{
    universityId: @js(old('university_id', $course?->university_id)),
    campusId: @js(old('campus_id', $course?->campus_id)),
    campuses: @js($campuses),

    get filteredCampuses() {
        if (!this.universityId) {
            return [];
        }

        return this.campuses.filter(
            campus => String(campus.university_id) === String(this.universityId)
        );
    },

    universityChanged() {
        const exists = this.filteredCampuses.some(
            campus => String(campus.id) === String(this.campusId)
        );

        if (!exists) {
            this.campusId = '';
        }
    }
}">
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

        {{-- LEFT --}}
        <div class="space-y-6 lg:col-span-8">

            {{-- Course Information --}}
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

                <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                        Course Information
                    </h2>
                </div>

                <div class="space-y-5 p-5">

                    {{-- University / Campus / Category --}}
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                        {{-- University --}}
                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                University
                            </label>

                            <select name="university_id" x-model="universityId" @change="universityChanged()"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 text-sm text-gray-800 focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                                <option value="">
                                    Select University
                                </option>

                                @foreach ($universities as $university)
                                    <option value="{{ $university->id }}">
                                        {{ $university->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('university_id')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Campus --}}
                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Campus
                            </label>

                            <select name="campus_id" x-model="campusId" :disabled="!universityId"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 text-sm text-gray-800 focus:border-brand-500 focus:ring-brand-500 disabled:cursor-not-allowed disabled:bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:disabled:bg-gray-800">
                                <option value="">
                                    Select Campus
                                </option>

                                <template x-for="campus in filteredCampuses" :key="campus.id">
                                    <option :value="campus.id" x-text="campus.name"></option>
                                </template>
                            </select>

                            @error('campus_id')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Category --}}
                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Course Category
                            </label>

                            <select name="category_id"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 text-sm text-gray-800 focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                                <option value="">
                                    Select Category
                                </option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @selected(old('category_id', $course?->category_id) == $category->id)>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>

                    {{-- Title --}}
                    <x-form.input-text name="title" label="Course Title" value="{{ old('title', $course?->title) }}"
                        placeholder="Enter Course Title..." />

                    {{-- Degree Level --}}
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Degree Level
                        </label>

                        <select name="degree_level"
                            class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 text-sm text-gray-800 focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                            <option value="">
                                Select Degree Level
                            </option>

                            @foreach (['Diploma', 'Certificate', 'Bachelor', 'Master', 'PhD', 'Doctorate'] as $level)
                                <option value="{{ $level }}" @selected(old('degree_level', $course?->degree_level) === $level)>
                                    {{ $level }}
                                </option>
                            @endforeach
                        </select>

                        @error('degree_level')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Duration / Tuition / Currency --}}
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-3">

                        <x-form.input-text name="duration_months" label="Duration (Months)"
                            value="{{ old('duration_months', $course?->duration_months) }}" placeholder="e.g. 36" />

                        <x-form.input-text name="tuition_fee" label="Tuition Fee"
                            value="{{ old('tuition_fee', $course?->tuition_fee) }}" placeholder="e.g. 25000" />

                        <x-form.input-text name="currency" label="Currency"
                            value="{{ old('currency', $course?->currency ?? 'USD') }}" placeholder="USD" />

                    </div>

                    {{-- English Requirements --}}
                    <div class="border-t border-gray-100 pt-5 dark:border-gray-800">
                        <h3 class="mb-4 text-base font-semibold text-gray-800 dark:text-white">
                            English Language Requirements
                        </h3>

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">

                            <x-form.input-text name="ielts_overall" label="IELTS Overall"
                                value="{{ old('ielts_overall', $course?->ielts_overall) }}" placeholder="e.g. 6.5" />

                            <x-form.input-text name="toefl_overall" label="TOEFL Overall"
                                value="{{ old('toefl_overall', $course?->toefl_overall) }}" placeholder="e.g. 80" />

                            <x-form.input-text name="pte_overall" label="PTE Overall"
                                value="{{ old('pte_overall', $course?->pte_overall) }}" placeholder="e.g. 58" />

                        </div>
                    </div>

                    {{-- Academic Requirement --}}
                    <x-form.input-text name="gpa_requirement" label="GPA Requirement"
                        value="{{ old('gpa_requirement', $course?->gpa_requirement) }}" placeholder="e.g. 3.00" />

                    {{-- Overview --}}
                    <x-form.textarea-input name="overview" label="Course Overview" rows="6"
                        placeholder="Enter course overview..." :value="old('overview', $course?->overview)" />

                    {{-- Entry Requirements --}}
                    <x-form.textarea-input name="entry_requirements" label="Entry Requirements" rows="8"
                        placeholder="Enter entry requirements..." :value="$entryRequirements" />

                </div>

            </div>

        </div>

        {{-- RIGHT --}}
        <div class="space-y-6 lg:col-span-4">

            {{-- Status --}}
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">
                <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                        Course Status
                    </h2>
                </div>

                <div class="space-y-5 p-5">

                    {{-- Featured --}}
                    <label class="flex cursor-pointer items-center gap-3">
                        <input type="hidden" name="is_featured" value="0">

                        <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $course?->is_featured ?? false))
                            class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500">

                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                            Featured Course
                        </span>
                    </label>

                    {{-- Active --}}
                    <label class="flex cursor-pointer items-center gap-3">
                        <input type="hidden" name="is_active" value="0">

                        <input type="checkbox" name="is_active" value="1" @checked(old('is_active', $course?->is_active ?? true))
                            class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500">

                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                            Active
                        </span>
                    </label>

                </div>
            </div>

            {{-- Submit --}}
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">
                <div class="flex justify-end p-5">

                    <button type="submit"
                        class="w-full rounded-lg bg-brand-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-brand-500">
                        {{ $isEdit ? 'Update Course' : 'Create Course' }}
                    </button>

                </div>
            </div>

        </div>

    </div>
</div>