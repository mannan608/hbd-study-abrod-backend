<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Traits\HandlesFiles;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    use HandlesFiles;

    public function __construct(private readonly EventRepositoryInterface $eventRepository) {}

    public function index(Request $request)
    {
        abort_unless($request->user()->can('event.manage'), 403);

        $events = $this->eventRepository->paginate(15);

        return view('backend.pages.events.index', compact('events'));
    }

    public function create(Request $request)
    {
        abort_unless($request->user()->can('event.manage'), 403);

        return view('backend.pages.events.create');
    }

    public function store(StoreEventRequest $request)
    {
        $data = $request->validated();

        try {
            DB::transaction(function () use ($request, &$data) {
                if ($request->hasFile('banner')) {
                    $data['banner'] = $this->uploadFile($request->file('banner'), 'events');
                }

                if ($request->hasFile('gallery_images')) {
                    $data['gallery_images'] = collect($request->file('gallery_images'))->filter(fn($file) => $file instanceof UploadedFile)->map(fn($file) => $this->uploadFile($file, 'events/gallery'))->values()->all();
                }

                if (isset($data['providers'])) {
                    foreach ($data['providers'] as $key => &$provider) {
                        $file = $request->file("providers.{$key}.logo");

                        if ($file instanceof UploadedFile) {
                            $provider['logo'] = $this->uploadFile($file, 'events/providers');
                        }

                        unset($provider['logo_file'], $provider['existing_logo']);
                    }

                    unset($provider);

                    $data['providers'] = array_values($data['providers']);
                }

                if (isset($data['tags'])) {
                    $data['tags'] = is_string($data['tags'])
                        ? collect(explode(',', $data['tags']))
                            ->map(fn($tag) => trim($tag))
                            ->filter()
                            ->values()
                            ->all()
                        : array_values(array_filter($data['tags']));
                }

                $this->eventRepository->create($data);
            });

            return redirect()
                ->route('role.events.index', [
                    'role' => $request->route('role'),
                ])
                ->with('success', 'Event created successfully.');
        } catch (\Throwable $e) {
            if (!empty($data['banner'])) {
                $this->deleteFile($data['banner']);
            }

            foreach ($data['gallery_images'] ?? [] as $path) {
                $this->deleteFile($path);
            }

            foreach ($data['providers'] ?? [] as $provider) {
                if (!empty($provider['logo'])) {
                    $this->deleteFile($provider['logo']);
                }
            }

            return back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function show(string $role, Event $event)
    {
        return redirect()->route('role.events.edit', [
            'role' => $role,
            'event' => $event,
        ]);
    }

    public function edit(Request $request, string $role, Event $event)
    {
        abort_unless($request->user()->can('event.edit'), 403);

        return view('backend.pages.events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, string $role, Event $event)
    {
        $data = $request->validated();

        $oldBanner = $event->banner;
        $oldGallery = $event->gallery_images ?? [];
        $oldProviders = $event->providers ?? [];

        $newFiles = [];

        try {
            DB::transaction(function () use ($request, &$data, &$newFiles, $event, $oldProviders) {
                /*
                 * Banner
                 */
                if ($request->hasFile('banner')) {
                    $data['banner'] = $this->uploadFile($request->file('banner'), 'events');

                    $newFiles[] = $data['banner'];
                }

                /*
                 * Gallery
                 */
                if ($request->has('gallery_images')) {
                    $gallery = [];

                    foreach ($request->file('gallery_images', []) as $file) {
                        if ($file instanceof UploadedFile) {
                            $path = $this->uploadFile($file, 'events/gallery');

                            $gallery[] = $path;
                            $newFiles[] = $path;
                        }
                    }

                    $data['gallery_images'] = $gallery;
                }

                /*
                 * Providers
                 */
                if ($request->has('providers')) {
                    foreach ($data['providers'] ?? [] as $key => &$provider) {
                        $existingLogo = $provider['existing_logo'] ?? ($provider['logo'] ?? null);

                        $file = $request->file("providers.{$key}.logo");

                        if ($file instanceof UploadedFile) {
                            $provider['logo'] = $this->uploadFile($file, 'events/providers');

                            $newFiles[] = $provider['logo'];
                        } elseif ($existingLogo) {
                            $provider['logo'] = $existingLogo;
                        } else {
                            unset($provider['logo']);
                        }

                        unset($provider['logo_file'], $provider['existing_logo']);
                    }

                    unset($provider);

                    $data['providers'] = array_values($data['providers']);
                }

                /*
                 * Tags
                 */
                if (isset($data['tags'])) {
                    $data['tags'] = is_string($data['tags'])
                        ? collect(explode(',', $data['tags']))
                            ->map(fn($tag) => trim($tag))
                            ->filter()
                            ->values()
                            ->all()
                        : array_values(array_filter($data['tags']));
                }

                /*
                 * Event update.
                 * Slug automatically handled by Event model.
                 */
                $this->eventRepository->update($event, $data);
            });

            /*
             * Delete old banner
             */
            if (isset($data['banner']) && $data['banner'] !== $oldBanner) {
                $this->deleteFile($oldBanner);
            }

            /*
             * Delete removed gallery files
             */
            if (array_key_exists('gallery_images', $data)) {
                foreach (array_diff($oldGallery, $data['gallery_images']) as $path) {
                    $this->deleteFile($path);
                }
            }

            /*
             * Delete removed provider logos
             */
            if (array_key_exists('providers', $data)) {
                $oldLogos = collect($oldProviders)->pluck('logo')->filter();

                $newLogos = collect($data['providers'])->pluck('logo')->filter();

                foreach ($oldLogos->diff($newLogos) as $path) {
                    $this->deleteFile($path);
                }
            }

            return redirect()
                ->route('role.events.index', [
                    'role' => $role,
                ])
                ->with('success', 'Event updated successfully.');
        } catch (\Throwable $e) {
            foreach ($newFiles as $path) {
                $this->deleteFile($path);
            }

            return back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function destroy(string $role, Event $event)
    {
        try {
            DB::transaction(function () use ($event) {
                $this->deleteFile($event->banner);

                foreach ($event->gallery_images ?? [] as $path) {
                    $this->deleteFile($path);
                }

                foreach ($event->providers ?? [] as $provider) {
                    if (!empty($provider['logo'])) {
                        $this->deleteFile($provider['logo']);
                    }
                }

                $this->eventRepository->delete($event);
            });

            return redirect()
                ->route('role.events.index', [
                    'role' => $role,
                ])
                ->with('success', 'Event deleted successfully.');
        } catch (\Throwable $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}