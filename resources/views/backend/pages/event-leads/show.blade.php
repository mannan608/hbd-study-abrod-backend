@extends('backend.layouts.app')

@section('content')
    <div class="space-y-6">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">{{ $eventLead->full_name }}</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Event lead details
                </p>
            </div>

            <a href="{{ role_route('role.event-leads.index') }}"
                class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-gray-800">
                Back to Event Leads
            </a>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm dark:border-gray-800 dark:bg-gray-900">
            <dl class="grid gap-4 sm:grid-cols-2">
                <div>
                    <dt class="text-sm text-gray-500">Event</dt>
                    <dd class="text-sm font-medium text-gray-900 dark:text-white">
                        {{ $eventLead->event?->title ?? 'N/A' }}
                    </dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-500">Full Name</dt>
                    <dd class="text-sm font-medium text-gray-900 dark:text-white">{{ $eventLead->full_name }}</dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-500">Email</dt>
                    <dd class="text-sm font-medium text-gray-900 dark:text-white">{{ $eventLead->email }}</dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-500">Phone</dt>
                    <dd class="text-sm font-medium text-gray-900 dark:text-white">{{ $eventLead->phone ?? '-' }}</dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-500">WhatsApp</dt>
                    <dd class="text-sm font-medium text-gray-900 dark:text-white">{{ $eventLead->whatsapp ?? '-' }}</dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-500">Interested Course</dt>
                    <dd class="text-sm font-medium text-gray-900 dark:text-white">
                        {{ $eventLead->interested_course ?? '-' }}
                    </dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-500">Status</dt>
                    <dd class="text-sm font-medium text-gray-900 dark:text-white">{{ $eventLead->status }}</dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-500">Source</dt>
                    <dd class="text-sm font-medium text-gray-900 dark:text-white">{{ $eventLead->source }}</dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
