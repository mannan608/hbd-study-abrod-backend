{{-- @php
    @dd($courses)
@endphp --}}

<div
    x-data="courseScopeForm()"
    x-init="init()"
    class="space-y-6"
>

    {{-- UNIVERSITY + COURSE / PROGRAM --}}

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">

        {{-- University --}}
        <div>
            <label class="mb-2 block text-sm font-medium text-neutral-800 dark:text-neutral-200">
                University
                <span class="text-red-500">*</span>
            </label>

            <select
                name="university_id"
                x-model="universityId"
                @change="changeUniversity()"
                class="w-full rounded-lg border border-neutral-300 bg-white px-3 py-2.5 text-sm
                       text-neutral-900 outline-none transition
                       focus:border-neutral-500 focus:ring-1 focus:ring-neutral-500
                       dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"
                required
            >
                <option value="">
                    Select University
                </option>

                <template
                    x-for="university in universities"
                    :key="university.id"
                >
                    <option
                        :value="university.id"
                        x-text="university.name"
                    ></option>
                </template>
            </select>

            @error('university_id')
                <p class="mt-1 text-xs text-red-600">
                    {{ $message }}
                </p>
            @enderror
        </div>


        {{-- Course / Program --}}
        <div>
            <label class="mb-2 block text-sm font-medium text-neutral-800 dark:text-neutral-200">
                Course / Program
                <span class="text-red-500">*</span>
            </label>

            <select
                name="course_id"
                x-model="courseId"
                @change="changeCourse()"
                :disabled="!universityId"
                class="w-full rounded-lg border border-neutral-300 bg-white px-3 py-2.5 text-sm
                       text-neutral-900 outline-none transition
                       focus:border-neutral-500 focus:ring-1 focus:ring-neutral-500
                       disabled:cursor-not-allowed disabled:bg-neutral-100
                       dark:border-neutral-700 dark:bg-neutral-900 dark:text-white
                       dark:disabled:bg-neutral-800"
                required
            >
                <option value="">
                    Select Course / Program
                </option>

                <template
                    x-for="course in filteredCourses"
                    :key="course.id"
                >
                    <option
                        :value="course.id"
                        x-text="course.title"
                    ></option>
                </template>
            </select>

            <p
                x-show="universityId && filteredCourses.length === 0"
                class="mt-2 text-xs text-neutral-500 dark:text-neutral-400"
            >
                No course available for this university.
            </p>

            @error('course_id')
                <p class="mt-1 text-xs text-red-600">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>


    {{-- ================================================================
        CAMPUS
    ================================================================= --}}

    <div>

        <label class="mb-2 block text-sm font-medium text-neutral-800 dark:text-neutral-200">
            Campus
            <span class="text-red-500">*</span>
        </label>


        {{-- Multi Select --}}
        <div
            x-show="courseId"
            x-transition
        >

            <x-form.multi-select
                id="course-scope-campus"
                name="campus_ids[]"
                label=""
                placeholder="Select Campus..."
                :options="[]"
                :selected="old('campus_ids', [])"
                required
            />

        </div>


        {{-- Course Not Selected --}}
        <div
            x-show="!courseId"
            class="flex items-center gap-2 rounded-lg border border-dashed
                   border-neutral-300 px-4 py-4 text-sm text-neutral-500
                   dark:border-neutral-700 dark:text-neutral-400"
        >
            <iconify-icon
                icon="lucide:info"
                class="text-base"
            ></iconify-icon>

            Select a course first to see available campuses.
        </div>

    </div>


    {{--  EDIT MODE --}}

    <div
        x-show="editing"
        x-transition
        class="flex items-start gap-3 rounded-lg border border-amber-200
               bg-amber-50 px-4 py-3
               dark:border-amber-500/20 dark:bg-amber-500/10"
    >

        <iconify-icon
            icon="lucide:pencil"
            class="mt-0.5 shrink-0 text-sm text-amber-600 dark:text-amber-400"
        ></iconify-icon>

        <div>
            <p class="text-xs font-medium text-amber-800 dark:text-amber-300">
                Editing Course Scope
            </p>

            <p class="mt-0.5 text-xs text-amber-700/80 dark:text-amber-400/80">
                Update the course and campus access for this scope.
            </p>
        </div>

    </div>

</div>


@push('scripts')

<script>
    function courseScopeForm() {
        return {

            /*
            |--------------------------------------------------------------------------
            | State
            |--------------------------------------------------------------------------
            */

            universityId: @js(old('university_id', '')),
            courseId: @js(old('course_id', '')),

            editing: false,


            /*
            |--------------------------------------------------------------------------
            | Real Laravel Data
            |--------------------------------------------------------------------------
            */

            universities: @js(
                $universities->map(fn ($university) => [
                    'id' => $university->id,
                    'name' => $university->name,
                ])->values()
            ),

            courses: @js(
                $courses->map(fn ($course) => [
                    'id' => $course->id,
                    'university_id' => $course->university_id,
                    'name' => $course->title,
                ])->values()
            ),

            campuses: @js(
                $campuses->map(fn ($campus) => [
                    'id' => $campus->id,
                    'university_id' => $campus->university_id,
                    'course_id' => $campus->course_id,
                    'name' => $campus->name,
                ])->values()
            ),


            /*
            |--------------------------------------------------------------------------
            | Filter Courses By University
            |--------------------------------------------------------------------------
            */

            get filteredCourses() {

                if (!this.universityId) {
                    return [];
                }

                return this.courses.filter(
                    course =>
                        String(course.university_id) ===
                        String(this.universityId)
                );
            },


            /*
            |--------------------------------------------------------------------------
            | Init
            |--------------------------------------------------------------------------
            */

            init() {

                /*
                |--------------------------------------------------------------------------
                | Edit Scope
                |--------------------------------------------------------------------------
                */

                window.addEventListener(
                    'course-scope:edit',
                    event => {

                        const scope = event.detail || {};

                        this.editing = true;

                        this.universityId =
                            scope.university_id ?? '';

                        this.courseId =
                            scope.course_id ?? '';

                        this.loadCampusesForCourse(
                            scope.campus_ids ?? []
                        );
                    }
                );


                /*
                |--------------------------------------------------------------------------
                | Create New Scope
                |--------------------------------------------------------------------------
                */

                window.addEventListener(
                    'course-scope:create',
                    () => {

                        this.resetForm();

                    }
                );


                /*
                |--------------------------------------------------------------------------
                | Validation Error / Old Input
                |--------------------------------------------------------------------------
                */

                if (this.universityId && this.courseId) {

                    this.loadCampusesForCourse(
                        @js(old('campus_ids', []))
                    );

                }

            },


            /*
            |--------------------------------------------------------------------------
            | University Changed
            |--------------------------------------------------------------------------
            */

            changeUniversity() {

                this.courseId = '';

                this.updateCampusOptions([]);

            },


            /*
            |--------------------------------------------------------------------------
            | Course Changed
            |--------------------------------------------------------------------------
            */

            changeCourse() {

                if (!this.courseId) {

                    this.updateCampusOptions([]);

                    return;
                }

                this.loadCampusesForCourse([]);

            },


            /*
            |--------------------------------------------------------------------------
            | Load Campuses For Course
            |--------------------------------------------------------------------------
            */

            loadCampusesForCourse(selectedIds = []) {

                if (!this.courseId) {

                    this.updateCampusOptions([]);

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | Get Campuses
                |--------------------------------------------------------------------------
                */

                const availableCampuses = this.campuses
                    .filter(campus => {

                        return String(campus.course_id) ===
                            String(this.courseId);

                    })
                    .map(campus => ({
                        id: campus.id,
                        name: campus.name
                    }));


                /*
                |--------------------------------------------------------------------------
                | Keep Selected Campus IDs
                |--------------------------------------------------------------------------
                */

                const normalizedSelectedIds =
                    (selectedIds || []).map(id => String(id));


                const availableIds =
                    availableCampuses.map(
                        campus => String(campus.id)
                    );


                const validSelectedIds =
                    normalizedSelectedIds.filter(
                        id => availableIds.includes(id)
                    );


                /*
                |--------------------------------------------------------------------------
                | Update Existing Multi Select
                |--------------------------------------------------------------------------
                */

                this.updateCampusOptions(
                    availableCampuses,
                    validSelectedIds
                );

            },


            /*
            |--------------------------------------------------------------------------
            | Update Multi Select Component
            |--------------------------------------------------------------------------
            */

            updateCampusOptions(
                options = [],
                selected = []
            ) {

                window.dispatchEvent(
                    new CustomEvent(
                        'multi-select:update',
                        {
                            detail: {

                                id: 'course-scope-campus',

                                options: options,

                                selected: selected

                            }
                        }
                    )
                );

            },


            /*
            |--------------------------------------------------------------------------
            | Reset
            |--------------------------------------------------------------------------
            */

            resetForm() {

                this.editing = false;

                this.universityId = '';

                this.courseId = '';

                this.updateCampusOptions([]);

            }

        };
    }
</script>

@endpush