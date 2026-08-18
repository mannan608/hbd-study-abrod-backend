<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Traits\HandlesFiles;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use HandlesFiles;

    protected EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
     * Events List
     */
    public function index()
    {
        $events = $this->eventRepository->paginate(15);

        return view('backend.pages.events.index', compact('events'));
    }

    /**
     * Create Page
     */
    public function create(Request $request)
    {
         $request->user()->can('counsellors.create') || abort(403);

        return view('backend.pages.events.create', [
            'event' => null,
        ]);
    }

    /**
     * Store Event
     */
    public function store(StoreEventRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();

        try {
            /*
             * Generate slug only if one was not supplied.
             */
            if (empty($data['slug'])) {
                $data['slug'] = $this->generateUniqueSlug($data['title']);
            } else {
                $data['slug'] = $this->generateUniqueSlug($data['slug']);
            }

            /*
             * Banner
             */
            if ($request->hasFile('banner')) {
                $data['banner'] = $this->uploadFile($request->file('banner'), 'events');
            }

            /*
             * Gallery
             */
            if ($request->hasFile('gallery_images')) {
                $galleryImages = [];

                foreach ($request->file('gallery_images') as $file) {
                    if ($file instanceof UploadedFile) {
                        $galleryImages[] = $this->uploadFile($file, 'events/gallery');
                    }
                }

                $data['gallery_images'] = $galleryImages;
            }

            /*
             * Providers
             */
            $data['providers'] = $this->processProviderUploads($request, $data['providers'] ?? []);

            /*
             * Store Event
             */
            $event = $this->eventRepository->create($data);

            DB::commit();

            return redirect()
                ->route('role.events.index', [
                    'role' => $request->route('role'),
                ])
                ->with('success', 'Event created successfully.');
        } catch (\Throwable $e) {
            DB::rollBack();

            /*
             * Delete uploaded files if database operation fails.
             */
            $this->cleanupEventFiles($data);

            return back()->withInput()->with('error', $e->getMessage());
        }
    }

    /**
     * Show Event
     */
    public function show(string $role, Event $event)
    {
        return redirect()->route('role.events.edit', [
            'role' => $role,
            'event' => $event,
        ]);
    }

    /**
     * Edit Event
     */
    public function edit(string $role, Event $event, Request $request)
    {
        $request->user()->can('counsellors.create') || abort(403);
        return view('backend.pages.events.edit', [
            'event' => $event,
        ]);
    }

    /**
     * Update Event
     *
     * TRUE PARTIAL UPDATE:
     * Only fields actually present in the request
     * will be updated.
     */
    public function update(UpdateEventRequest $request, string $role, Event $event)
    {
        $data = $request->validated();

        /*
         * Keep old values before modification.
         */
        $oldBanner = $event->banner;
        $oldGallery = $event->gallery_images ?? [];
        $oldProviders = $event->providers ?? [];

        DB::beginTransaction();

        try {
            /*
             * ---------------------------------------------------------
             * SLUG
             * ---------------------------------------------------------
             *
             * If title is being changed and slug was not explicitly
             * supplied, generate a new slug from the new title.
             *
             * If slug is explicitly supplied, use that slug.
             *
             * If neither is supplied, leave the existing slug unchanged.
             */

            if ($request->has('slug')) {
                if ($data['slug'] !== null && $data['slug'] !== '') {
                    $data['slug'] = $this->generateUniqueSlug($data['slug'], $event->id);
                }
            } elseif ($request->has('title')) {
                $data['slug'] = $this->generateUniqueSlug($data['title'], $event->id);
            }

            /*
             * ---------------------------------------------------------
             * BANNER
             * ---------------------------------------------------------
             *
             * If no banner is sent:
             *      old banner remains untouched.
             *
             * If a new banner is sent:
             *      upload new banner
             *      delete old banner
             */
            if ($request->hasFile('banner')) {
                $data['banner'] = $this->uploadFile($request->file('banner'), 'events');

                $this->deleteFile($oldBanner);
            }

            /*
             * ---------------------------------------------------------
             * GALLERY
             * ---------------------------------------------------------
             *
             * If gallery_images is missing:
             *      old gallery remains untouched.
             *
             * If gallery_images is present:
             *      it becomes the new gallery.
             *
             * This means sending an empty gallery can intentionally
             * clear all gallery images.
             */
            if ($request->has('gallery_images')) {
                $newGallery = [];

                if ($request->hasFile('gallery_images')) {
                    foreach ($request->file('gallery_images') as $file) {
                        if ($file instanceof UploadedFile) {
                            $newGallery[] = $this->uploadFile($file, 'events/gallery');
                        }
                    }
                }

                $data['gallery_images'] = $newGallery;

                /*
                 * Delete old gallery files that are no longer used.
                 */
                $this->deleteRemovedFiles($oldGallery, $newGallery);
            }

            /*
             * ---------------------------------------------------------
             * PROVIDERS
             * ---------------------------------------------------------
             */
            if ($request->has('providers')) {
                $providers = $data['providers'] ?? [];

                $providers = $this->processProviderUploads($request, $providers, $oldProviders);

                $data['providers'] = $providers;

                /*
                 * Delete provider logos that are no longer used.
                 */
                $this->deleteRemovedProviderLogos($oldProviders, $providers);
            }

            /*
             * ---------------------------------------------------------
             * UPDATE
             * ---------------------------------------------------------
             *
             * $data contains ONLY validated fields supplied by
             * the request.
             */
            $event->update($data);

            DB::commit();

            return redirect()
                ->route('role.events.index', [
                    'role' => $role,
                ])
                ->with('success', 'Event updated successfully.');
        } catch (\Throwable $e) {
            DB::rollBack();

            /*
             * If a new banner was uploaded but update failed,
             * remove the newly uploaded banner.
             */
            if (isset($data['banner']) && $data['banner'] !== $oldBanner) {
                $this->deleteFile($data['banner']);
            }

            return back()->withInput()->with('error', $e->getMessage());
        }
    }

    /**
     * Delete Event
     */
    public function destroy(string $role, Event $event)
    {
        DB::beginTransaction();

        try {
            /*
             * Delete banner.
             */
            $this->deleteFile($event->banner);

            /*
             * Delete gallery images.
             */
            foreach ($event->gallery_images ?? [] as $path) {
                $this->deleteFile($path);
            }

            /*
             * Delete provider logos.
             */
            foreach ($event->providers ?? [] as $provider) {
                if (!empty($provider['logo'])) {
                    $this->deleteFile($provider['logo']);
                }
            }

            /*
             * Delete event.
             */
            $event->delete();

            DB::commit();

            return redirect()
                ->route('role.events.index', [
                    'role' => $role,
                ])
                ->with('success', 'Event deleted successfully.');
        } catch (\Throwable $e) {
            DB::rollBack();

            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Process provider logo uploads.
     */
    private function processProviderUploads($request, array $providers, array $oldProviders = []): array
    {
        foreach ($providers as $key => &$provider) {
            /*
             * Existing logo submitted from edit form.
             */
            $existingLogo = $provider['existing_logo'] ?? ($provider['logo'] ?? null);

            /*
             * New uploaded provider logo.
             *
             * Supports:
             * providers[index][logo]
             * providers[index][logo_file]
             */
            $newLogo = $request->file("providers.{$key}.logo");

            if (!$newLogo) {
                $newLogo = $request->file("providers.{$key}.logo_file");
            }

            if ($newLogo instanceof UploadedFile) {
                $provider['logo'] = $this->uploadFile($newLogo, 'events/providers');
            } elseif ($existingLogo) {
                $provider['logo'] = $existingLogo;
            } else {
                /*
                 * No logo supplied.
                 */
                unset($provider['logo']);
            }

            /*
             * Never save temporary UploadedFile objects or
             * existing_logo helper values into JSON.
             */
            unset($provider['logo_file']);
            unset($provider['existing_logo']);
        }

        unset($provider);

        return array_values($providers);
    }

    /**
     * Delete gallery files that are no longer used.
     */
    private function deleteRemovedFiles(array $oldFiles, array $newFiles): void
    {
        $removedFiles = array_diff($oldFiles, $newFiles);

        foreach ($removedFiles as $path) {
            $this->deleteFile($path);
        }
    }

    /**
     * Delete provider logos that are no longer used.
     */
    private function deleteRemovedProviderLogos(array $oldProviders, array $newProviders): void
    {
        $oldLogos = [];

        foreach ($oldProviders as $provider) {
            if (!empty($provider['logo'])) {
                $oldLogos[] = $provider['logo'];
            }
        }

        $newLogos = [];

        foreach ($newProviders as $provider) {
            if (!empty($provider['logo'])) {
                $newLogos[] = $provider['logo'];
            }
        }

        $removedLogos = array_diff($oldLogos, $newLogos);

        foreach ($removedLogos as $path) {
            $this->deleteFile($path);
        }
    }

    /**
     * Generate unique event slug.
     */
    private function generateUniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $slug = Str::slug($value);

        if ($slug === '') {
            $slug = 'event';
        }

        $originalSlug = $slug;
        $counter = 1;

        while (
            Event::where('slug', $slug)
                ->when($ignoreId !== null, fn($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $counter++;

            $slug = $originalSlug . '-' . $counter;
        }

        return $slug;
    }

    /**
     * Cleanup uploaded files when store fails.
     */
    private function cleanupEventFiles(array $data): void
    {
        /*
         * Banner.
         */
        if (!empty($data['banner'])) {
            $this->deleteFile($data['banner']);
        }

        /*
         * Gallery.
         */
        foreach ($data['gallery_images'] ?? [] as $path) {
            $this->deleteFile($path);
        }

        /*
         * Providers.
         */
        foreach ($data['providers'] ?? [] as $provider) {
            if (!empty($provider['logo'])) {
                $this->deleteFile($provider['logo']);
            }
        }
    }
}