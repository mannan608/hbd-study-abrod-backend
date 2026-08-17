@php
    $isEdit = isset($intake) && $intake;

    $applicationDeadline = old('application_deadline', $intake?->application_deadline?->format('Y-m-d'));

    $startDate = old('start_date', $intake?->start_date?->format('Y-m-d'));
@endphp

<div x-data="{}">
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

        {{-- LEFT --}}
        <div class="space-y-6 lg:col-span-8">

            {{-- Course Intake --}}
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">
                <div class="border-b border-gray-100 p-5 dark:border-gray-800">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                        Course Intake
                    </h2>
                </div>

                <div class="space-y-5 p-5">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
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
                                    <option value="{{ $course->id }}" @selected(old('course_id', $intake?->course_id) == $course->id)>
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

                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Intake Month
                            </label>

                            <select name="intake_month"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 text-sm text-gray-800 focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                                <option value="">
                                    Select Month
                                </option>

                                @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                    <option value="{{ $month }}" @selected(old('intake_month', $intake?->intake_month) === $month)>
                                        {{ $month }}
                                    </option>
                                @endforeach
                            </select>

                            @error('intake_month')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Intake Year
                            </label>

                            <select name="intake_year"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 text-sm text-gray-800 focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                                <option value="">
                                    Select Year
                                </option>

                                @foreach (['2026', '2027', '2028', '2029'] as $year)
                                    <option value="{{ $year }}" @selected(old('intake_year', $intake?->intake_year) == $year)>
                                        {{ $year }}
                                    </option>
                                @endforeach
                            </select>

                            @error('intake_year')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <x-form.input-text name="application_deadline" label="Application Deadline"
                            type="datetime-local" value="{{ $applicationDeadline }}" />

                        <x-form.input-text name="start_date" label="Start Date" type="datetime-local"
                            value="{{ $startDate }}" />

                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Status
                            </label>

                            <select name="status"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 text-sm text-gray-800 focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                                <option value="">
                                    Select Status
                                </option>

                                @foreach (['open', 'closed', 'upcoming'] as $status)
                                    <option value="{{ $status }}" @selected(old('status', $intake?->status) === $status)>
                                        {{ ucfirst($status) }}
                                    </option>
                                @endforeach
                            </select>

                            @error('status')
                                <p class="mt-1 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- RIGHT --}}
        <div class="space-y-6 lg:col-span-4">
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