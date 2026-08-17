@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="mb-1">Edit Scholarship</h4>
            <p class="text-muted mb-0">
                Update the scholarship information.
            </p>
        </div>

        <a href="{{ role_route('role.scholarships.index') }}"
           class="btn btn-secondary">
            Back
        </a>
    </div>

    <form action="{{ role_route('role.scholarships.update', ['scholarship' => $scholarship]) }}"
          method="POST">

        @csrf
        @method('PUT')

        @include('backend.pages.scholarships._form')

    </form>

</div>

@endsection
