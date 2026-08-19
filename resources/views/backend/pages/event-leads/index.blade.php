@extends('backend.layouts.app')

@section('content')
    <div class="">
        @if (session('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                class="fixed top-3 right-5 z-[99999] w-full max-w-sm">
                <div class="relative">
                    <button @click="show = false" class="absolute top-3 right-3 z-10 text-gray-500 hover:text-gray-700">
                        ✕
                    </button>

                    <x-ui.alert variant="success" title="" message="{{ session('success') }}" />
                </div>
            </div>
        @endif

        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Event Leads Management</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Manage event leads.
                </p>
            </div>
        </div>
        @include('backend.pages.event-leads.table', ['items' => $eventLeads])
    </div>
@endsection
