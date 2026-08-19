@php
    /** @var \App\Models\Event|null $event */
    $event = $event ?? null;
    $isEdit = $event && $event->exists;

    $formAction = $isEdit
        ? role_route('role.events.update', ['event' => $event])
        : role_route('role.events.store');

    $fmtDate = fn ($v) => $v ? \Carbon\Carbon::parse($v)->format('Y-m-d\TH:i') : '';
    $asString = fn ($v) => is_null($v) ? '' : (string) $v;

    $normalizeTags = function ($value) {
        if (is_string($value)) {
            $value = preg_split('/\s*,\s*/', trim($value), -1, PREG_SPLIT_NO_EMPTY) ?: [];
        }

        if (!is_array($value)) {
            return [''];
        }

        $value = array_values(array_filter(array_map(
            static fn ($tag) => is_string($tag) ? trim($tag) : '',
            $value
        )));

        return $value ?: [''];
    };

    // Repeater data normalized for Alpine: old() on error -> model data -> one blank row
    $schedules = collect(old('schedules', $event->schedules ?? []))
        ->map(fn ($s) => [
            'location'   => $s['location'] ?? '',
            'start_date' => $fmtDate($s['start_date'] ?? null),
            'end_date'   => $fmtDate($s['end_date'] ?? null),
        ])->values()->all() ?: [['location' => '', 'start_date' => '', 'end_date' => '']];

    $providers = collect(old('providers', $event->providers ?? []))
        ->map(function ($p) {
            $logo = is_string($p['logo'] ?? null) ? $p['logo'] : ($p['existing_logo'] ?? '');
            return [
                'name'     => $p['name'] ?? '',
                'logo'     => $logo,
                'logo_url' => $logo ? asset($logo) : null,
            ];
        })->values()->all() ?: [['name' => '', 'logo' => '', 'logo_url' => null]];

    $faqs = collect(old('faqs', $event->faqs ?? []))
        ->map(fn ($f) => ['question' => $f['question'] ?? '', 'answer' => $f['answer'] ?? ''])
        ->values()->all() ?: [['question' => '', 'answer' => '']];

    $benefits = collect(old('benefits', $event->benefits ?? []))->values()->all() ?: [''];
    $services = collect(old('services_offered', $event->services_offered ?? []))->values()->all() ?: [''];
    $tags = $normalizeTags(old('tags', $event->tags ?? []));
@endphp

  <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

        {{-- ================= LEFT COLUMN ================= --}}
        <div class="lg:col-span-8 space-y-6">

            {{-- Basic Information --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5 bg-white dark:bg-gray-900">
                <h3 class="text-lg font-semibold mb-5 dark:text-white">Basic Information</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <x-form.input-text name="title" label="Event Title" placeholder="Enter event title"
                        :value="$asString(old('title', $event->title ?? ''))" />

                    <x-form.input-text name="slug" label="Slug" placeholder="auto-generated-if-empty"
                        :value="$asString(old('slug', $event->slug ?? ''))" />

                    <x-form.select-input name="event_type" label="Event Type"
                        :value="old('event_type', $event->event_type ?? 'webinar')"
                        :options="[
                            'webinar'    => 'Webinar',
                            'seminar'    => 'Seminar',
                            'workshop'   => 'Workshop',
                            'conference' => 'Conference',
                        ]" />

                    <x-form.input-text name="registration_link" label="Registration Link"
                        placeholder="https://hbdservices.com/event/"
                        :value="$asString(old('registration_link', $event->registration_link ?? ''))" />
                </div>

                <div class="mt-5">
                    <x-form.textarea-input name="short_description" label="Short Description" rows="3"
                        placeholder="Enter short description"
                        :value="old('short_description', $event->short_description ?? '')" />
                </div>

                <div class="mt-5">
                    <x-form.textarea-input name="description" label="Description" rows="3"
                        placeholder="Enter full description"
                        :value="old('description', $event->description ?? '')" />
                </div>

                <div class="mt-5">
                    <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-400">Banner Image</label>

                    @if($isEdit && $event->banner)
                        <div class="mb-3">
                            <img src="{{ asset($event->banner) }}" alt="Banner"
                                class="h-32 rounded-lg object-cover border border-gray-200 dark:border-gray-700">
                            <p class="mt-1 text-xs text-gray-500">Current banner — upload a new file to replace it.</p>
                        </div>
                    @endif

                    <x-form.dropzone name="banner" label="Banner" />
                </div>
            </div>

            {{-- Date & Location --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5 bg-white dark:bg-gray-900"
                x-data="{ isOnline: {{ old('is_online', $event->is_online ?? false) ? 'true' : 'false' }} }">
                <h3 class="text-lg font-semibold mb-5 dark:text-white">Date & Location</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <x-form.input-text name="start_datetime" label="Start Date & Time" type="datetime-local"
                        :value="$asString(old('start_datetime', $fmtDate($event->start_datetime ?? null)))" />

                    <x-form.input-text name="end_datetime" label="End Date & Time" type="datetime-local"
                        :value="$asString(old('end_datetime', $fmtDate($event->end_datetime ?? null)))" />

                    <x-form.input-text name="location_name" label="Location Name" placeholder="Convention Center"
                        :value="$asString(old('location_name', $event->location_name ?? ''))" />

                    <x-form.input-text name="address" label="Address" placeholder="Full address"
                        :value="$asString(old('address', $event->address ?? ''))" />

                    <x-form.input-text name="max_seats" label="Max Seats" type="number" placeholder="100"
                        :value="$asString(old('max_seats', $event->max_seats ?? ''))" />

                    <x-form.input-text name="registration_deadline" label="Registration Deadline" type="datetime-local"
                        :value="$asString(old('registration_deadline', $fmtDate($event->registration_deadline ?? null)))" />
                </div>

                <div class="mt-5 flex items-center gap-3">
                    <input type="hidden" name="is_online" value="0">
                    <label class="inline-flex items-center gap-3">
                        <input type="checkbox" name="is_online" value="1" x-model="isOnline"
                            class="h-5 w-5 rounded border-gray-300 text-brand-600 focus:ring-brand-500">
                        <span class="text-sm text-gray-600 dark:text-gray-400">This is an online event</span>
                    </label>
                </div>

                <div class="mt-5" x-show="isOnline" x-cloak>
                    <x-form.input-text name="meeting_link" label="Meeting Link (for online events)"
                        placeholder="https://zoom.us/j/..."
                        :value="$asString(old('meeting_link', $event->meeting_link ?? ''))" />
                </div>
            </div>

            {{-- Event Schedules (Alpine repeater) --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900"
                x-data="{
                    items: {{ Illuminate\Support\Js::from($schedules) }},
                    add() { this.items.push({ location: '', start_date: '', end_date: '' }) },
                    remove(i) { if (this.items.length > 1) this.items.splice(i, 1) }
                }">
                <div class="border-b border-gray-200 dark:border-gray-800 px-5 py-4">
                    <h3 class="text-lg font-semibold dark:text-white">Event Schedules</h3>
                </div>
                <div class="p-5">
                    <template x-for="(item, index) in items" :key="index">
                        <div class="border border-gray-200 dark:border-gray-700 rounded-xl p-4 mb-4">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Location</label>
                                    <input type="text" :name="`schedules[${index}][location]`" x-model="item.location"
                                        placeholder="Dhaka"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-2 dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                                </div>
                                <div>
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Start Date</label>
                                    <input type="datetime-local" :name="`schedules[${index}][start_date]`" x-model="item.start_date"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-2 dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                                </div>
                                <div>
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">End Date</label>
                                    <input type="datetime-local" :name="`schedules[${index}][end_date]`" x-model="item.end_date"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-2 dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                                </div>
                            </div>
                            <div class="flex justify-end gap-3 mt-4">
                                <button type="button" x-show="items.length > 1" @click="remove(index)"
                                    class="px-4 py-2 rounded-lg bg-red-500 text-white text-sm">Remove</button>
                                <button type="button" x-show="index === items.length - 1" @click="add()"
                                    class="px-4 py-2 rounded-lg bg-brand-600 text-white text-sm">Add More</button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Providers (Alpine repeater) --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900"
                x-data="{
                    items: {{ Illuminate\Support\Js::from($providers) }},
                    add() { this.items.push({ name: '', logo: '', logo_url: null }) },
                    remove(i) { if (this.items.length > 1) this.items.splice(i, 1) }
                }">
                <div class="border-b border-gray-200 dark:border-gray-800 px-5 py-4">
                    <h3 class="text-lg font-semibold dark:text-white">Providers / Sponsors</h3>
                </div>
                <div class="p-5">
                    <template x-for="(item, index) in items" :key="index">
                        <div class="border border-gray-200 dark:border-gray-700 rounded-xl p-4 mb-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Provider Name</label>
                                    <input type="text" :name="`providers[${index}][name]`" x-model="item.name"
                                        placeholder="Provider Name"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-2 dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                                </div>
                                <div>
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Provider Logo</label>

                                    <template x-if="item.logo_url">
                                        <div class="mb-2">
                                            <img :src="item.logo_url" alt="Logo" class="h-10 rounded object-contain">
                                            <input type="hidden" :name="`providers[${index}][existing_logo]`" :value="item.logo">
                                        </div>
                                    </template>

                                    <input type="file" :name="`providers[${index}][logo]`"
                                        class="h-11 w-full overflow-hidden rounded-lg border border-gray-300 bg-transparent text-sm text-gray-500 file:mr-5 file:cursor-pointer file:rounded-l-lg file:border-0 file:border-r file:border-gray-200 file:bg-gray-50 file:py-3 file:pr-3 file:pl-3.5 file:text-sm file:text-gray-700 dark:border-gray-700 dark:bg-gray-900 dark:file:bg-white/[0.03] dark:file:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-end gap-3 mt-4">
                                <button type="button" x-show="items.length > 1" @click="remove(index)"
                                    class="px-4 py-2 rounded-lg bg-red-500 text-white text-sm">Remove</button>
                                <button type="button" x-show="index === items.length - 1" @click="add()"
                                    class="px-4 py-2 rounded-lg bg-brand-600 text-white text-sm">Add More</button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Gallery --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5 bg-white dark:bg-gray-900">
                <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-400">Gallery Images</label>

                @if($isEdit && !empty($event->gallery_images))
                    <div class="grid grid-cols-3 md:grid-cols-4 gap-3 mb-4">
                        @foreach($event->gallery_images as $image)
                            <div class="relative">
                                <img src="{{ asset($image) }}"
                                    class="h-24 w-full rounded-lg object-cover border border-gray-200 dark:border-gray-700">
                                <label class="absolute inset-x-0 bottom-0 flex items-center justify-center gap-1 bg-black/60 text-white text-xs py-1 rounded-b-lg">
                                    <input type="checkbox" name="remove_gallery_images[]" value="{{ $image }}"> Remove
                                </label>
                            </div>
                        @endforeach
                    </div>
                @endif

                <x-form.dropzone name="gallery_images[]" multiple label="Gallery Images" value=""
                    placeholder="Upload Gallery images..." />
            </div>

            {{-- Extra Info --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5 bg-white dark:bg-gray-900">
                <h3 class="text-lg font-semibold mb-5 dark:text-white">Event Extra Info</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <x-form.input-text name="organizer" label="Organizer" placeholder="Organizer name"
                        :value="$asString(old('organizer', $event->organizer ?? ''))" />
                    <x-form.input-text name="contact_email" label="Contact Email" placeholder="contact@gmail.com"
                        :value="$asString(old('contact_email', $event->contact_email ?? ''))" />
                    <x-form.input-text name="contact_phone" label="Contact Phone" placeholder="Contact number"
                        :value="$asString(old('contact_phone', $event->contact_phone ?? ''))" />
                    <x-form.input-text name="google_map_link" label="Google Map Link" placeholder="Google map link"
                        :value="$asString(old('google_map_link', $event->google_map_link ?? ''))" />
                </div>

                <div class="mt-5">
                    <div class="rounded-xl border border-gray-200 dark:border-gray-700 p-4">
                        <h4 class="mb-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Tags</h4>
                        <div
                            x-data="{
                                items: {{ Illuminate\Support\Js::from($tags) }},
                                add() { this.items.push('') },
                                remove(i) { if (this.items.length > 1) this.items.splice(i, 1) }
                            }"
                        >
                            <template x-for="(item, index) in items" :key="index">
                                <div class="mb-3 flex items-center gap-3">
                                    <input
                                        type="text"
                                        :name="`tags[${index}]`"
                                        x-model="items[index]"
                                        placeholder="Laravel, AI, Event"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-2 dark:bg-gray-900 dark:border-gray-700 dark:text-white"
                                    >
                                    <button
                                        type="button"
                                        x-show="items.length > 1"
                                        @click="remove(index)"
                                        class="rounded-lg bg-red-500 px-3 py-2 text-sm text-white"
                                    >
                                        Remove
                                    </button>
                                    <button
                                        type="button"
                                        x-show="index === items.length - 1"
                                        @click="add()"
                                        class="rounded-lg bg-brand-600 px-3 py-2 text-sm text-white"
                                    >
                                        Add
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Benefits (Alpine repeater) --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5 bg-white dark:bg-gray-900"
                x-data="{
                    items: {{ Illuminate\Support\Js::from($benefits) }},
                    add() { this.items.push('') },
                    remove(i) { if (this.items.length > 1) this.items.splice(i, 1) }
                }">
                <h3 class="text-lg font-semibold mb-4 dark:text-white">Benefits</h3>
                <template x-for="(item, index) in items" :key="index">
                    <div class="flex items-center gap-3 mb-3">
                        <input type="text" :name="`benefits[${index}]`" x-model="items[index]" placeholder="Benefit"
                            class="w-full rounded-lg border border-gray-300 px-4 py-2 dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                        <button type="button" x-show="items.length > 1" @click="remove(index)"
                            class="px-3 py-2 rounded-lg bg-red-500 text-white text-sm">Remove</button>
                        <button type="button" x-show="index === items.length - 1" @click="add()"
                            class="px-3 py-2 rounded-lg bg-brand-600 text-white text-sm">Add</button>
                    </div>
                </template>
            </div>

            {{-- Services Offered (Alpine repeater) --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5 bg-white dark:bg-gray-900"
                x-data="{
                    items: {{ Illuminate\Support\Js::from($services) }},
                    add() { this.items.push('') },
                    remove(i) { if (this.items.length > 1) this.items.splice(i, 1) }
                }">
                <h3 class="text-lg font-semibold mb-4 dark:text-white">Services Offered</h3>
                <template x-for="(item, index) in items" :key="index">
                    <div class="flex items-center gap-3 mb-3">
                        <input type="text" :name="`services_offered[${index}]`" x-model="items[index]" placeholder="Service"
                            class="w-full rounded-lg border border-gray-300 px-4 py-2 dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                        <button type="button" x-show="items.length > 1" @click="remove(index)"
                            class="px-3 py-2 rounded-lg bg-red-500 text-white text-sm">Remove</button>
                        <button type="button" x-show="index === items.length - 1" @click="add()"
                            class="px-3 py-2 rounded-lg bg-brand-600 text-white text-sm">Add</button>
                    </div>
                </template>
            </div>

            {{-- FAQs (Alpine repeater) --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900"
                x-data="{
                    items: {{ Illuminate\Support\Js::from($faqs) }},
                    add() { this.items.push({ question: '', answer: '' }) },
                    remove(i) { if (this.items.length > 1) this.items.splice(i, 1) }
                }">
                <div class="border-b border-gray-200 dark:border-gray-800 px-5 py-4">
                    <h3 class="text-lg font-semibold dark:text-white">FAQs</h3>
                </div>
                <div class="p-5">
                    <template x-for="(item, index) in items" :key="index">
                        <div class="border border-gray-200 dark:border-gray-700 rounded-xl p-4 mb-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Question</label>
                                    <input type="text" :name="`faqs[${index}][question]`" x-model="item.question"
                                        placeholder="Question"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-2 dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                                </div>
                                <div>
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Answer</label>
                                    <input type="text" :name="`faqs[${index}][answer]`" x-model="item.answer"
                                        placeholder="Answer"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-2 dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                                </div>
                            </div>
                            <div class="flex justify-end gap-3 mt-4">
                                <button type="button" x-show="items.length > 1" @click="remove(index)"
                                    class="px-4 py-2 rounded-lg bg-red-500 text-white text-sm">Remove</button>
                                <button type="button" x-show="index === items.length - 1" @click="add()"
                                    class="px-4 py-2 rounded-lg bg-brand-600 text-white text-sm">Add More</button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

        </div>

        {{-- ================= RIGHT COLUMN ================= --}}
        <div class="lg:col-span-4">
            <div class="sticky top-6 space-y-6">
                <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5 bg-white dark:bg-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <x-form.select-input name="status" label="Status"
                                :value="old('status', $event->status ?? 'upcoming')"
                                :options="[
                                    'upcoming'  => 'Upcoming',
                                    'ongoing'   => 'Ongoing',
                                    'completed' => 'Completed',
                                    'cancelled' => 'Cancelled',
                                ]" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">Featured Event</label>
                            <input type="hidden" name="is_featured" value="0">
                            <label class="inline-flex items-center gap-3">
                                <input type="checkbox" name="is_featured" value="1"
                                    @checked(old('is_featured', $event->is_featured ?? false))
                                    class="h-5 w-5 rounded border-gray-300 text-brand-600 focus:ring-brand-500">
                                <span class="text-sm text-gray-600 dark:text-gray-400">Mark as featured</span>
                            </label>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">Active</label>
                            <input type="hidden" name="is_active" value="0">
                            <label class="inline-flex items-center gap-3">
                                <input type="checkbox" name="is_active" value="1"
                                    @checked(old('is_active', $event->is_active ?? true))
                                    class="h-5 w-5 rounded border-gray-300 text-brand-600 focus:ring-brand-500">
                                <span class="text-sm text-gray-600 dark:text-gray-400">Visible on site</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
