<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProviderStoreRequest;
use App\Http\Requests\ProviderUpdateRequest;
use App\Models\Provider;
use App\Repositories\Interfaces\ProviderRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProviderController extends Controller
{
    public function __construct(private readonly ProviderRepositoryInterface $providers) {}

    /**
     * Display providers.
     */
    public function index(Request $request, string $role)
    {
        abort_unless($request->user()->can('provider.list'), 403);

        $providers = $this->providers->paginate(15);
        // return $providers;

        return view('backend.pages.providers.index', compact('providers'));
    }

    /**
     * Show create provider form.
     */
    public function create(Request $request, string $role): View
    {
        abort_unless($request->user()->can('provider.create'), 403);

        return view('backend.pages.providers.create', [
            'provider' => null
        ]);
    }

    /**
     * Store provider.
     */
    public function store(ProviderStoreRequest $request, string $role): RedirectResponse
    {
        $this->providers->create($request->validated());

        return redirect()
            ->route('role.providers.index', [
                'role' => $role,
            ])
            ->with('success', 'Provider created successfully.');
    }

    /**
     * Display provider details.
     */
    public function show(Request $request, string $role, Provider $provider): View
    {
        abort_unless($request->user()->can('provider.view'), 403);

        $provider = $provider->load('user');

        return view('backend.pages.providers.show', [
            'provider' => $provider,
        ]);
    }

    /**
     * Show edit provider form.
     */
    public function edit(Request $request, string $role, Provider $provider): View
    {
        abort_unless($request->user()->can('provider.edit'), 403);

        return view('backend.pages.providers.edit', [
            'provider' => $provider,
        ]);
    }

    /**
     * Update provider.
     */
    public function update(ProviderUpdateRequest $request, string $role, Provider $provider): RedirectResponse
    {
        $this->providers->update($provider, $request->validated());

        return redirect()
            ->route('role.providers.index', [
                'role' => $role,
            ])
            ->with('success', 'Provider updated successfully.');
    }

    /**
     * Delete provider.
     */
    public function destroy(Request $request, string $role, Provider $provider): RedirectResponse
    {
        abort_unless($request->user()->can('provider.delete'), 403);

        $this->providers->delete($provider);

        return redirect()
            ->route('role.providers.index', [
                'role' => $role,
            ])
            ->with('success', 'Provider deleted successfully.');
    }
}
