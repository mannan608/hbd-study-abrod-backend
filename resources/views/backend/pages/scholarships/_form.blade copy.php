@php
$isEdit = isset($scholarship) && $scholarship;
@endphp

<div class="row">

    {{-- LEFT --}}
    <div class="col-lg-8">

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    Scholarship Information
                </h5>
            </div>

            <div class="card-body">

                {{-- University --}}
                <div class="mb-3">
                    <label for="university_id" class="form-label">
                        University
                        <span class="text-danger">*</span>
                    </label>

                    <select name="university_id" id="university_id"
                        class="form-select @error('university_id') is-invalid @enderror">
                        <option value="">Select University</option>

                        @foreach ($universities as $university)
                        <option value="{{ $university->id }}" @selected(old('university_id', $scholarship->university_id ?? '') == $university->id)>
                            {{ $university->name }}
                        </option>
                        @endforeach
                    </select>

                    @error('university_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                {{-- Course --}}
                <div class="mb-3">
                    <label for="course_id" class="form-label">
                        Course
                        <span class="text-muted">
                            (Optional)
                        </span>
                    </label>

                    <select name="course_id" id="course_id"
                        class="form-select @error('course_id') is-invalid @enderror">
                        <option value="">
                            University-wide Scholarship
                        </option>

                        @foreach ($courses as $course)
                        <option value="{{ $course->id }}" @selected(old('course_id', $scholarship->course_id ?? '') == $course->id)>
                            {{ $course->name }}
                        </option>
                        @endforeach
                    </select>

                    <small class="text-muted">
                        Leave empty if this scholarship applies
                        to the whole university.
                    </small>

                    @error('course_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                {{-- Title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">
                        Scholarship Title
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text" name="title" id="title"
                        value="{{ old('title', $scholarship->title ?? '') }}"
                        class="form-control @error('title') is-invalid @enderror"
                        placeholder="e.g. Merit Scholarship">

                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                {{-- Amount --}}
                <div class="mb-3">
                    <label for="amount_description" class="form-label">
                        Amount / Benefit
                    </label>

                    <input type="text" name="amount_description" id="amount_description"
                        value="{{ old('amount_description', $scholarship->amount_description ?? '') }}"
                        class="form-control @error('amount_description') is-invalid @enderror"
                        placeholder="e.g. 50% tuition fee waiver">

                    @error('amount_description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                {{-- Coverage Type --}}
                <div class="mb-3">
                    <label for="coverage_type" class="form-label">
                        Coverage Type
                    </label>

                    <select name="coverage_type" id="coverage_type"
                        class="form-select @error('coverage_type') is-invalid @enderror">
                        <option value="">
                            Select Coverage Type
                        </option>

                        @foreach (['Partial', 'Full', 'One-time'] as $type)
                        <option value="{{ $type }}" @selected(old('coverage_type', $scholarship->coverage_type ?? '') === $type)>
                            {{ $type }}
                        </option>
                        @endforeach
                    </select>

                    @error('coverage_type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                {{-- Eligibility --}}
                <div class="mb-3">
                    <label for="eligibility_criteria" class="form-label">
                        Eligibility Criteria
                    </label>

                    <textarea name="eligibility_criteria" id="eligibility_criteria" rows="5"
                        class="form-control @error('eligibility_criteria') is-invalid @enderror"
                        placeholder="Enter eligibility requirements...">{{ old('eligibility_criteria', $scholarship->eligibility_criteria ?? '') }}</textarea>

                    @error('eligibility_criteria')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

            </div>
        </div>

    </div>


    {{-- RIGHT --}}
    <div class="col-lg-4">

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    Scholarship Settings
                </h5>
            </div>

            <div class="card-body">

                {{-- Deadline --}}
                <div class="mb-3">
                    <label for="deadline" class="form-label">
                        Application Deadline
                    </label>

                    <input type="date" name="deadline" id="deadline"
                        value="{{ old('deadline', isset($scholarship->deadline) ? $scholarship->deadline->format('Y-m-d') : '') }}"
                        class="form-control @error('deadline') is-invalid @enderror">

                    @error('deadline')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                {{-- Status --}}
                <div class="mb-3">

                    <label class="form-label d-block">
                        Status
                    </label>

                    <div class="form-check form-switch">

                        <input type="hidden" name="is_active" value="0">

                        <input type="checkbox" name="is_active" id="is_active" value="1"
                            class="form-check-input" @checked(old('is_active', $scholarship->is_active ?? true))>

                        <label class="form-check-label" for="is_active">
                            Active
                        </label>

                    </div>

                </div>

            </div>
        </div>


        {{-- Submit --}}
        <div class="card mt-4">
            <div class="card-body">

                <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-save me-1"></i>

                    {{ $isEdit ? 'Update Scholarship' : 'Create Scholarship' }}
                </button>

            </div>
        </div>

    </div>

</div>