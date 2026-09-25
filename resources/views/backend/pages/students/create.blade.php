@extends('backend.layouts.app')

@section('content')
 <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h3 class="text-lg font-semibold text-neutral-800 dark:text-white/90">Create New Lead</h3>
                <p class="text-sm text-neutral-500 dark:text-neutral-400">Manage your lead. </p>
            </div>
            <div class="flex gap-3">
                <a href="#"
                    class="px-4 py-2 bg-brand-600 text-white rounded-lg text-sm font-medium hover:bg-brand-600 transition-colors">
                    + Add Bulk Lead
                </a>
                <a href="#"
                    class="px-4 py-2 bg-brand-600 text-white rounded-lg text-sm font-medium hover:bg-brand-600 transition-colors">
                    + Add New Lead
                </a>
            </div>
        </div>
@endsection
