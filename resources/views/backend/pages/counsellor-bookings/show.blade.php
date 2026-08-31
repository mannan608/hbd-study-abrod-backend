@extends('backend.layouts.app')

@section('content')
    <div class="space-y-6">
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h3 class="text-lg font-semibold text-neutral-800 dark:text-white/90">Booking Details</h3>
                <p class="text-sm text-neutral-500 dark:text-neutral-400">Review booking information.</p>
            </div>

            <a href="{{ route('role.booking-sessions.index') }}"
                class="inline-flex items-center justify-center rounded-lg border border-neutral-200 px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800">
                Back to list
            </a>
        </div>

        <div class="grid gap-6 lg:grid-cols-2">
            <div class="rounded-xl border border-neutral-100 bg-white p-6 shadow-sm dark:border-white/[0.05]">
                <h4 class="mb-4 text-base font-semibold text-neutral-800 dark:text-white/90">Client</h4>
                <dl class="space-y-3 text-sm">
                    <div class="flex justify-between gap-4">
                        <dt class="text-neutral-500">Name</dt>
                        <dd class="font-medium text-neutral-800 dark:text-neutral-200">{{ $booking->name }}</dd>
                    </div>
                    <div class="flex justify-between gap-4">
                        <dt class="text-neutral-500">Email</dt>
                        <dd class="font-medium text-neutral-800 dark:text-neutral-200">{{ $booking->email }}</dd>
                    </div>
                    <div class="flex justify-between gap-4">
                        <dt class="text-neutral-500">Phone</dt>
                        <dd class="font-medium text-neutral-800 dark:text-neutral-200">{{ $booking->phone }}</dd>
                    </div>
                    <div class="flex justify-between gap-4">
                        <dt class="text-neutral-500">Service</dt>
                        <dd class="font-medium text-neutral-800 dark:text-neutral-200">{{ $booking->service }}</dd>
                    </div>
                </dl>
            </div>

            <div class="rounded-xl border border-neutral-100 bg-white p-6 shadow-sm dark:border-white/[0.05]">
                <h4 class="mb-4 text-base font-semibold text-neutral-800 dark:text-white/90">Schedule</h4>
                <dl class="space-y-3 text-sm">
                    <div class="flex justify-between gap-4">
                        <dt class="text-neutral-500">Counsellor</dt>
                        <dd class="font-medium text-neutral-800 dark:text-neutral-200">
                            {{ $booking->counsellor?->user?->name ?? 'N/A' }}
                        </dd>
                    </div>
                    <div class="flex justify-between gap-4">
                        <dt class="text-neutral-500">Date</dt>
                        <dd class="font-medium text-neutral-800 dark:text-neutral-200">
                            {{ optional($booking->appointment_date)->format('M d, Y') ?? 'N/A' }}
                        </dd>
                    </div>
                    <div class="flex justify-between gap-4">
                        <dt class="text-neutral-500">Time</dt>
                        <dd class="font-medium text-neutral-800 dark:text-neutral-200">{{ $booking->appointment_time }}</dd>
                    </div>
                    <div class="flex justify-between gap-4">
                        <dt class="text-neutral-500">Status</dt>
                        <dd class="font-medium capitalize text-neutral-800 dark:text-neutral-200">{{ $booking->status }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
@endsection
