@extends('backend.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-neutral-200 dark:border-neutral-800 pb-5">
        <div>
            <h1 class="text-2xl font-bold text-neutral-900 dark:text-white">Bulk Lead Import</h1>
            <p class="text-sm text-neutral-500 dark:text-neutral-400 mt-1">Upload multiple leads using a standard CSV or Excel template.</p>
        </div>
        <a href="#" class="inline-flex items-center gap-2 text-sm font-medium text-neutral-600 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-white">
            &larr; Back to Selection
        </a>
    </div>

    <!-- Step 1 & 2 Instructions & Sample Download -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Instructions Panel -->
        <div class="lg:col-span-2 bg-blue-50/60 dark:bg-blue-950/20 border border-blue-200/80 dark:border-blue-800/50 rounded-2xl p-6">
            <div class="flex items-center gap-3 mb-3 text-blue-900 dark:text-blue-200 font-semibold">
                <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Import Guidelines</span>
            </div>
            <ul class="space-y-2 text-xs text-blue-800 dark:text-blue-300 list-disc list-inside leading-relaxed">
                <li>File extension must be <strong>.csv, .xlsx, or .xls</strong> (Max file size: 10MB).</li>
                <li>Required columns: <span class="font-mono font-bold">first_name, last_name, email</span>.</li>
                <li>Email addresses must be unique and valid format.</li>
                <li>Dates should follow the format <span class="font-mono">YYYY-MM-DD</span>.</li>
            </ul>
        </div>

        <!-- Sample Download Card -->
        <div class="bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-2xl p-6 flex flex-col justify-between shadow-sm">
            <div>
                <h4 class="text-sm font-bold text-neutral-900 dark:text-white">Need the template?</h4>
                <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-1">Download our formatted sample file to ensure smooth data processing.</p>
            </div>
            <a href="#" class="mt-4 inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-neutral-100 dark:bg-neutral-800 hover:bg-neutral-200 dark:hover:bg-neutral-700 text-neutral-800 dark:text-neutral-200 rounded-xl text-xs font-semibold transition border border-neutral-200 dark:border-neutral-700">
                <svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                Download Sample (.CSV)
            </a>
        </div>
    </div>

    <!-- Step 2: Drag & Drop File Upload Form -->
    <form action="#" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-neutral-900 rounded-2xl border border-neutral-200 dark:border-neutral-800 p-6 sm:p-8 shadow-sm space-y-6">
        @csrf
        <div>
            <label class="block text-sm font-semibold text-neutral-800 dark:text-neutral-200 mb-2">Upload Spreadsheet</label>
            <div class="relative border-2 border-dashed border-neutral-300 dark:border-neutral-700 hover:border-brand-500 dark:hover:border-brand-500 rounded-2xl p-8 text-center bg-neutral-50/50 dark:bg-neutral-800/30 transition group cursor-pointer">
                <input type="file" name="file" required class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                <div class="flex flex-col items-center justify-center space-y-3">
                    <div class="w-12 h-12 rounded-full bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-neutral-800 dark:text-neutral-200">
                            <span class="text-brand-600 hover:underline">Click to upload</span> or drag and drop
                        </p>
                        <p class="text-xs text-neutral-400 mt-1">CSV, XLSX, XLS (Max 10MB)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-3">
            <button type="submit" class="px-6 py-2.5 bg-brand-600 hover:bg-brand-700 text-white font-medium text-sm rounded-xl shadow-md transition flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                Upload and Validate
            </button>
        </div>
    </form>

    <!-- UI State: Validation Error Handling Table (Triggers when errors exist) -->
    {{-- @if(session()->has('import_errors') || isset($importErrors)) --}}
    <div class="bg-red-50/50 dark:bg-red-950/20 border border-red-200 dark:border-red-900/50 rounded-2xl p-6 space-y-4">
        <!-- Error Banner Header -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/40 text-red-600 dark:text-red-400 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div>
                    <h3 class="text-base font-bold text-red-900 dark:text-red-200">Validation Failed: Errors Found</h3>
                    <p class="text-xs text-red-700 dark:text-red-400">Please correct the highlighted rows in your file and re-upload.</p>
                </div>
            </div>
            <span class="px-3 py-1 bg-red-100 dark:bg-red-900/50 text-red-800 dark:text-red-300 font-bold text-xs rounded-full">
                3 Errors Identified
            </span>
        </div>

        <!-- Row-Wise Errors Table -->
        <div class="overflow-x-auto rounded-xl border border-red-200 dark:border-red-900/40 bg-white dark:bg-neutral-900">
            <table class="w-full text-left text-xs">
                <thead class="bg-red-100/50 dark:bg-red-950/50 text-red-900 dark:text-red-300 uppercase tracking-wider font-semibold">
                    <tr>
                        <th class="px-4 py-3 border-b border-red-200 dark:border-red-900/40">Row #</th>
                        <th class="px-4 py-3 border-b border-red-200 dark:border-red-900/40">Field</th>
                        <th class="px-4 py-3 border-b border-red-200 dark:border-red-900/40">Submitted Data</th>
                        <th class="px-4 py-3 border-b border-red-200 dark:border-red-900/40">Error Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-red-100 dark:divide-red-950/40">
                    <!-- Example Error Row 1 -->
                    <tr class="bg-red-50/70 dark:bg-red-950/30 hover:bg-red-100/50 transition">
                        <td class="px-4 py-3 font-bold text-red-700 dark:text-red-400">Row 4</td>
                        <td class="px-4 py-3 text-neutral-800 dark:text-neutral-200 font-mono">email</td>
                        <td class="px-4 py-3 text-red-600 dark:text-red-400 font-medium">john_invalid_at_gmail.com</td>
                        <td class="px-4 py-3 text-red-700 dark:text-red-300 font-semibold">Invalid email address format.</td>
                    </tr>
                    <!-- Example Error Row 2 -->
                    <tr class="bg-red-50/70 dark:bg-red-950/30 hover:bg-red-100/50 transition">
                        <td class="px-4 py-3 font-bold text-red-700 dark:text-red-400">Row 9</td>
                        <td class="px-4 py-3 text-neutral-800 dark:text-neutral-200 font-mono">first_name</td>
                        <td class="px-4 py-3 text-red-600 dark:text-red-400 font-medium italic">[ Empty ]</td>
                        <td class="px-4 py-3 text-red-700 dark:text-red-300 font-semibold">The first_name field is required.</td>
                    </tr>
                    <!-- Example Error Row 3 -->
                    <tr class="bg-red-50/70 dark:bg-red-950/30 hover:bg-red-100/50 transition">
                        <td class="px-4 py-3 font-bold text-red-700 dark:text-red-400">Row 15</td>
                        <td class="px-4 py-3 text-neutral-800 dark:text-neutral-200 font-mono">email</td>
                        <td class="px-4 py-3 text-red-600 dark:text-red-400 font-medium">sarah@company.com</td>
                        <td class="px-4 py-3 text-red-700 dark:text-red-300 font-semibold">Duplicate entry: Email already exists in system.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- @endif --}}
</div>
@endsection