@extends('layouts.app')

@section('title', 'Edit Department')

@section('content')
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Form Card --}}
            <div class="max-w-2xl">
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <div class="px-8 py-6 border-b border-gray-200 dark:border-gray-700">
                        <h2 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white">
                            Edit: {{ $department->name }}
                        </h2>
                    </div>

                    <form action="{{ route('departments.update', $department) }}" method="POST" class="p-8 space-y-8">
                        @csrf
                        @method('PATCH')

                        @include('admin.departments._form', ['department' => $department])

                        <div class="flex justify-end gap-4 pt-6">
                            <a href="{{ route('departments.index') }}"
                                class="px-4 md:px-8 lg:px-10 py-2 rounded-xl text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 font-semibold transition">
                                Cancel
                            </a>
                            <button type="submit"
                                class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
