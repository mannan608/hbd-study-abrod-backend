@extends('backend.layouts.app')

@section('content')
    <div class="">

        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Event Leads Management</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Manage event leads.
                </p>
            </div>
        </div>
        {{-- @include('backend.pages.event-leads.table', ['items' => $leads]) --}}
    </div>
@endsection
