@extends('backend.layouts.app')

@section('content')
    <form
        action="{{ role_route('role.events.update', ['event' => $event>id]) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

                @include('backend.pages.events._form')


        <div class="mt-6 lg:w-8/12">
            <button
                type="submit"
                class="w-full rounded-lg bg-brand-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-brand-500"
            >
                Update Event
            </button>
        </div>
    </form>
@endsection
