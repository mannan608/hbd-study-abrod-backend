@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="mb-1">Edit Course Intake</h4>
            <p class="text-muted mb-0">
                Update the course intake information.
            </p>
        </div>

        <a href="{{ role_route('role.course-intakes.index') }}"
           class="btn btn-secondary">
            Back
        </a>
    </div>

    <form action="{{ route('admin.course-intakes.update', $intake) }}"
          method="POST">

        @csrf
        @method('PUT')

        @include('backend.pages.course-intakes._form')

    </form>

</div>

@endsection