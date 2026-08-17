@php
    $isEdit = isset($scholarship) && $scholarship;

    $universityId = old('university_id', $scholarship?->university_id);
    $courseId = old('course_id', $scholarship?->course_id);
@endphp

<div x-data="{}">
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

        {{-- LEFT --}}
        <div class="space-y-6 lg:col-span-8">

            {{-- Course Intake --}}
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">
                <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                        Scholarship
                    </h2>
                </div>

                <div class="space-y-5 p-5">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                University
                            </label>

                            <select name="university_id"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 text-sm text-gray-800 focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                                <option value="">
                                    Select University
                                </option>

                                @foreach ($universities as $university)
                                    <option value="{{ $university->id }}" @selected(old('university_id', $scholarship?->university_id) == $university->id)>
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
                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Course
                            </label>

                            <select name="course_id"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 text-sm text-gray-800 focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                                <option value="">
                                    Select Course
                                </option>

                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" @selected(old('course_id', $scholarship?->course_id) == $course->id)>
                                        {{ $course->title }}
                                    </option>
                                @endforeach
                            </select>

                            @error('course_id')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <x-form.input-text name="title" label="Scholarship Title"
                            value="{{ old('title', $scholarship?->title) }}" placeholder="Enter Scholarship Title..." />
                        <x-form.textarea-input name="amount_description" label="Amount Description"
                            value="{{ old('amount_description', $scholarship?->amount_description) }}"
                            placeholder="Enter Amount Description..." />
                        <x-form.select-input name="coverage_type" label="Coverage Type" :options="['full_free' => 'Full Free', 'half_free' => 'Half Free', 'one_time' => 'One Time']"
                            value="old('coverage_type', $scholarship?->coverage_type)" />
                        <x-form.textarea-input name="eligibility_criteria" label="Eligibility Criteria"
                            value="{{ old('eligibility_criteria', $scholarship?->eligibility_criteria) }}"
                            placeholder="Enter Eligibility Criteria..." />

                    </div>
                </div>
            </div>
        </div>

        {{-- RIGHT --}}
        <div class="space-y-6 lg:col-span-4">
            <x-form.input-text name="deadline" label="Expiry Date" type="datetime-local"
                value="{{ old('deadline', $scholarship?->deadline) }}" />
            <div class="">
                <label class="flex cursor-pointer items-center gap-3">
                    <input type="hidden" name="is_active" value="0">

                    <input type="checkbox" name="is_active" value="1" @checked(old('is_active', $course?->is_active ?? true))
                        class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500">

                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                        Active
                    </span>
                </label>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">
                <div class="flex justify-end p-5">
                    <button type="submit"
                        class="w-full rounded-lg bg-brand-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-brand-500">
                        {{ $isEdit ? 'Update' : 'Create' }}
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
