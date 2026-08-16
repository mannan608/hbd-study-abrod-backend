@extends('backend.layouts.app')

@section('content')
    <div x-data="universityForm()" class="w-full">

         <form
        action="{{ role_route('role.universities.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        @include('backend.pages.universities._form', [
            'university' => null,
            'formMode' => 'create',
        ])

    </form>

    </div>
@endsection