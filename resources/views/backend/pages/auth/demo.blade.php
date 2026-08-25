@extends('backend.layouts.fullscreen-layout')

@section('content')
    <div class="relative min-h-screen overflow-y-auto bg-neutral-100 dark:bg-neutral-950"
        style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=2400&q=85'); background-size: cover; background-position: center;">
        <!-- Background Overlay -->
        <div class="absolute inset-0 bg-white/75 backdrop-blur-[2px] dark:bg-neutral-950/80"></div>

        <!-- Decorative Blur -->
        <div class="absolute -left-24 -top-24 h-72 w-72 rounded-full bg-brand-400/20 blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 h-80 w-80 rounded-full bg-blue-400/20 blur-3xl"></div>

        <!-- Main Content -->
        <div class="relative z-10 flex min-h-screen w-full items-center justify-center px-4 py-8 sm:px-6 lg:px-8">

            <!-- Registration Card -->
            <div
                class="w-full max-w-xl overflow-hidden rounded-2xl border border-white/70 bg-white/90 shadow-2xl shadow-neutral-900/10 backdrop-blur-xl dark:border-neutral-700/70 dark:bg-neutral-900/90 dark:shadow-black/30">
                <div class="p-5 sm:p-7 md:p-8">

                    <!-- Header -->
                    <div class="mb-6 text-center sm:mb-7">
                        <div
                            class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-500/10 text-brand-500 dark:bg-brand-500/15">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 14C15.3137 14 18 11.3137 18 8C18 4.68629 15.3137 2 12 2C8.68629 2 6 4.68629 6 8C6 11.3137 8.68629 14 12 14Z"
                                    stroke="currentColor" stroke-width="1.7" />
                                <path d="M3.5 21.5C4.6 17.9 7.7 16 12 16C16.3 16 19.4 17.9 20.5 21.5" stroke="currentColor"
                                    stroke-width="1.7" stroke-linecap="round" />
                            </svg>
                        </div>

                        <h1 class="mb-1.5 text-2xl font-bold tracking-tight text-neutral-900 dark:text-white sm:text-3xl">
                            Create your account
                        </h1>

                        <p class="text-sm leading-6 text-neutral-500 dark:text-neutral-400 sm:text-base">
                            Enter your information to get started.
                        </p>
                    </div>

                    <!-- Divider -->
                    <div class="mb-6 flex items-center gap-3">
                        <div class="h-px flex-1 bg-neutral-200 dark:bg-neutral-800"></div>

                        <span
                            class="rounded-full border border-neutral-200 bg-white px-3 py-1 text-xs font-medium text-neutral-400 dark:border-neutral-800 dark:bg-neutral-900">
                            Register
                        </span>

                        <div class="h-px flex-1 bg-neutral-200 dark:bg-neutral-800"></div>
                    </div>

                    <form action="{{ route('register.submit') }}" method="POST">
                        @csrf

                        <div class="space-y-5">

                            <!-- Register Type -->
                            <fieldset>
                                <div x-data="{ error: @js($errors->has('role')) }"
                                    class="rounded-2xl border border-neutral-200 bg-neutral-50/80 p-4 transition-all dark:border-neutral-700 dark:bg-neutral-800/50 sm:p-5">
                                    <div class="mb-3">
                                        <p class="text-sm font-semibold text-neutral-800 dark:text-white">
                                            Register as
                                        </p>

                                        <p class="mt-1 text-xs text-neutral-500 dark:text-neutral-400">
                                            Choose your account type
                                        </p>
                                    </div>

                                    <label for="student"
                                        class="group relative flex cursor-pointer items-center gap-4 rounded-xl border border-brand-500/30 bg-white p-4 shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:border-brand-500 hover:shadow-md dark:border-brand-500/30 dark:bg-neutral-900">
                                        <div
                                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/10 text-brand-500 dark:bg-brand-500/15">
                                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4 19.5C4 17.567 5.567 16 7.5 16H16.5C18.433 16 20 17.567 20 19.5V21H4V19.5Z"
                                                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                                                <path
                                                    d="M12 14C14.7614 14 17 11.7614 17 9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9C7 11.7614 9.23858 14 12 14Z"
                                                    stroke="currentColor" stroke-width="1.7" />
                                            </svg>
                                        </div>

                                        <div class="min-w-0 flex-1">
                                            <div class="flex items-center gap-2">
                                                <span class="text-sm font-semibold text-neutral-900 dark:text-white">
                                                    Student
                                                </span>

                                                <span
                                                    class="rounded-full bg-brand-500/10 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-brand-600 dark:bg-brand-500/15 dark:text-brand-400">
                                                    Recommended
                                                </span>
                                            </div>

                                            <p class="mt-1 text-xs leading-5 text-neutral-500 dark:text-neutral-400">
                                                Create an account for student access
                                            </p>
                                        </div>

                                        <div class="shrink-0">
                                            <x-form.radio id="student" name="role" value="student" label=""
                                                required />
                                        </div>
                                    </label>
                                </div>

                                @error('role')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </fieldset>

                            <!-- Name -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300"
                                    for="name">
                                    Name
                                </label>

                                <input id="name" name="name" required autocomplete="name"
                                    class="h-12 w-full rounded-xl border border-neutral-300 bg-white/80 px-4 text-sm text-neutral-800 outline-none transition-all placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900/80 dark:text-white dark:placeholder:text-neutral-500 dark:focus:border-brand-500">

                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300"
                                    for="email">
                                    Email
                                </label>

                                <input id="email" type="email" name="email" required autocomplete="email"
                                    class="h-12 w-full rounded-xl border border-neutral-300 bg-white/80 px-4 text-sm text-neutral-800 outline-none transition-all placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900/80 dark:text-white dark:placeholder:text-neutral-500 dark:focus:border-brand-500">

                                @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300"
                                    for="phone">
                                    Phone No
                                </label>

                                <input id="phone" type="tel" name="phone" required autocomplete="tel"
                                    class="h-12 w-full rounded-xl border border-neutral-300 bg-white/80 px-4 text-sm text-neutral-800 outline-none transition-all placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900/80 dark:text-white dark:placeholder:text-neutral-500 dark:focus:border-brand-500">

                                @error('phone')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300"
                                    for="password">
                                    Password
                                </label>

                                <input id="password" type="password" name="password" autocomplete="new-password"
                                    class="h-12 w-full rounded-xl border border-neutral-300 bg-white/80 px-4 text-sm text-neutral-800 outline-none transition-all placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900/80 dark:text-white dark:placeholder:text-neutral-500 dark:focus:border-brand-500">

                                @error('password')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-neutral-700 dark:text-neutral-300"
                                    for="password_confirmation">
                                    Confirm Password
                                </label>

                                <input id="password_confirmation" type="password" name="password_confirmation"
                                    autocomplete="new-password"
                                    class="h-12 w-full rounded-xl border border-neutral-300 bg-white/80 px-4 text-sm text-neutral-800 outline-none transition-all placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-500/10 dark:border-neutral-700 dark:bg-neutral-900/80 dark:text-white dark:placeholder:text-neutral-500 dark:focus:border-brand-500">
                            </div>

                            <!-- Terms -->
                            <div>
                                <div x-data="{ checkboxToggle: false }">
                                    <label for="checkboxLabelOne"
                                        class="flex cursor-pointer items-start text-sm font-normal text-neutral-700 select-none dark:text-neutral-400">
                                        <div class="relative">
                                            <input type="checkbox" id="checkboxLabelOne" class="sr-only"
                                                @change="checkboxToggle = !checkboxToggle" />

                                            <div :class="checkboxToggle ? 'border-brand-500 bg-brand-500' :
                                                'bg-transparent border-neutral-300 dark:border-neutral-700'"
                                                class="mr-3 flex h-5 w-5 items-center justify-center rounded-md border-[1.25px] transition-colors">
                                                <span :class="checkboxToggle ? '' : 'opacity-0'">
                                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.6666 3.5L5.24992 9.91667L2.33325 7" stroke="white"
                                                            stroke-width="1.94437" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>

                                        <p
                                            class="inline-block text-xs leading-5 text-neutral-500 dark:text-neutral-400 sm:text-sm">
                                            By creating an account means you agree to the
                                            <span class="font-medium text-neutral-800 dark:text-white/90">
                                                Terms and Conditions,
                                            </span>
                                            and our
                                            <span class="font-medium text-neutral-800 dark:text-white">
                                                Privacy Policy
                                            </span>
                                        </p>
                                    </label>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="pt-1">
                                <button type="submit"
                                    class="flex h-12 w-full items-center justify-center rounded-xl bg-brand-500 px-4 text-sm font-semibold text-white shadow-lg shadow-brand-500/20 transition-all duration-200 hover:-translate-y-0.5 hover:bg-brand-600 hover:shadow-xl hover:shadow-brand-500/25 active:translate-y-0">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Login -->
                    <div class="mt-6 border-t border-neutral-200 pt-5 dark:border-neutral-800">
                        <p class="text-center text-sm font-normal text-neutral-600 dark:text-neutral-400">
                            Already have an account?
                            <a href="{{ route('login') }}"
                                class="ml-1 font-semibold text-brand-500 transition-colors hover:text-brand-600 dark:text-brand-400">
                                Sign In
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Theme Toggle -->
        <div class="fixed bottom-5 right-5 z-50 sm:bottom-6 sm:right-6">
            <button
                class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-brand-500 text-white shadow-lg shadow-brand-500/25 transition-all hover:scale-105 hover:bg-brand-600 sm:h-14 sm:w-14"
                @click.prevent="$store.theme.toggle()" aria-label="Toggle theme">
                <svg class="hidden fill-current dark:block" width="20" height="20" viewBox="0 0 20 20"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.99998 1.5415C10.4142 1.5415 10.75 1.87729 10.75 2.2915V3.5415C10.75 3.95572 10.4142 4.2915 9.99998 4.2915C9.58577 4.2915 9.24998 3.95572 9.24998 3.5415V2.2915C9.24998 1.87729 9.58577 1.5415 9.99998 1.5415ZM10.0009 6.79327C8.22978 6.79327 6.79402 8.22904 6.79402 10.0001C6.79402 11.7712 8.22978 13.207 10.0009 13.207C11.772 13.207 13.2078 11.7712 13.2078 10.0001C13.2078 8.22904 11.772 6.79327 10.0009 6.79327ZM5.29402 10.0001C5.29402 7.40061 7.40135 5.29327 10.0009 5.29327C12.6004 5.29327 14.7078 7.40061 14.7078 10.0001C14.7078 12.5997 12.6004 14.707 10.0009 14.707C7.40135 14.707 5.29402 12.5997 5.29402 10.0001ZM15.9813 5.08035C16.2742 4.78746 16.2742 4.31258 15.9813 4.01969C15.6884 3.7268 15.2135 3.7268 14.9207 4.01969L14.0368 4.90357C13.7439 5.19647 13.7439 5.67134 14.0368 5.96423C14.3297 6.25713 14.8045 6.25713 15.0974 5.96423L15.9813 5.08035ZM18.4577 10.0001C18.4577 10.4143 18.1219 10.7501 17.7077 10.7501H16.4577C16.0435 10.7501 15.7077 10.4143 15.7077 10.0001C15.7077 9.58592 16.0435 9.25013 16.4577 9.25013H17.7077C18.1219 9.25013 18.4577 9.58592 18.4577 10.0001ZM14.9207 15.9806C15.2135 16.2735 15.6884 16.2735 15.9806C16.2742 15.6877 16.2742 15.2128 15.9813 14.9199L15.0974 14.036C14.8045 13.7431 14.3297 13.7431 14.0368 14.036C13.7439 14.3289 13.7439 14.8038 14.0368 15.0967L14.9207 15.9806ZM9.99998 15.7088C10.4142 15.7088 10.75 16.0445 10.75 16.4588V17.7088C10.75 18.123 10.4142 18.4588 9.99998 18.4588C9.58577 18.4588 9.24998 18.123 9.24998 17.7088V16.4588C9.24998 16.0445 9.58577 15.7088 9.99998 15.7088ZM5.96356 15.0972C6.25646 14.8043 6.25646 14.3295 5.96356 14.0366C5.67067 13.7437 5.1958 13.7437 4.9029 14.0366L4.01902 14.9204C3.72613 15.2133 3.72613 15.6882 4.01902 15.9811C4.31191 16.274 4.78679 16.274 5.07968 15.9811L5.96356 15.0972ZM4.29224 10.0001C4.29224 10.4143 3.95645 10.7501 3.54224 10.7501H2.29224C1.87802 10.7501 1.54224 10.4143 1.54224 10.0001C1.54224 9.58592 1.87802 9.25013 2.29224 9.25013H3.54224C3.95645 9.25013 4.29224 9.58592 4.29224 10.0001ZM4.9029 5.9637C5.1958 6.25659 5.67067 6.25659 5.96356 5.9637C6.25646 5.6708 6.25646 5.19593 5.96356 4.90303L5.07968 4.01915C4.78679 3.72626 4.31191 3.72626 4.01902 4.01915C3.72613 4.31204 3.72613 4.78692 4.01902 5.07981L4.9029 5.9637Z" />
                </svg>

                <svg class="fill-current dark:hidden" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.4547 11.97L18.1799 12.1611C18.265 11.8383 18.1265 11.4982 17.8401 11.3266C17.5538 11.1551 17.1885 11.1934 16.944 11.4207L17.4547 11.97ZM8.0306 2.5459L8.57989 3.05657C8.80718 2.81209 8.84554 2.44682 8.67398 2.16046C8.50243 1.8741 8.16227 1.73559 7.83948 1.82066L8.0306 2.5459ZM12.9154 13.0035C9.64678 13.0035 6.99707 10.3538 6.99707 7.08524H5.49707C5.49707 11.1823 8.81835 14.5035 12.9154 14.5035V13.0035ZM16.944 11.4207C15.8869 12.4035 14.4721 13.0035 12.9154 13.0035V14.5035C14.8657 14.5035 16.6418 13.7499 17.9654 12.5193L16.944 11.4207ZM16.7295 11.7789C15.9437 14.7607 13.2277 16.9586 10.0003 16.9586V18.4586C13.9257 18.4586 17.2249 15.7853 18.1799 12.1611L16.7295 11.7789ZM10.0003 16.9586C6.15734 16.9586 3.04199 13.8433 3.04199 10.0003H1.54199C1.54199 14.6717 5.32892 18.4586 10.0003 18.4586V16.9586ZM3.04199 10.0003C3.04199 6.77289 5.23988 4.05695 8.22173 3.27114L7.83948 1.82066C4.21532 2.77574 1.54199 6.07486 1.54199 10.0003H3.04199ZM6.99707 7.08524C6.99707 5.52854 7.5971 4.11366 8.57989 3.05657L7.48132 2.03522C6.25073 3.35885 5.49707 5.13487 5.49707 7.08524H6.99707Z" />
                </svg>
            </button>
        </div>
    </div>
@endsection
