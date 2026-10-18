@extends('backend.layouts.app')

@section('content')
    <div class="mx-auto max-w-6xl pb-12">

        <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-xl font-semibold text-neutral-800 dark:text-white">
                    Edit Employee
                </h1>
                <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">
                    Update employee information and account details.
                </p>
            </div>

            <a href="{{ role_route('role.employees.index') }}"
                class="rounded-lg border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200">
                Back to Employees
            </a>
        </div>

        @if (session('error'))
            <div class="mb-5 rounded-lg bg-red-50 p-4 text-sm text-red-700">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-5 rounded-lg bg-red-50 p-4 text-sm text-red-700">
                Please correct the highlighted errors and try again.
            </div>
        @endif

        <form action="{{ role_route('role.employees.update', ['employee' => $employee->id]) }}"
            method="POST">
            @csrf
            @method('PUT')

            @include('backend.pages.HR.employees._form')
        </form>

    </div>
@endsection