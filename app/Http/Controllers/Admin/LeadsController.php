<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventRegistration;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LeadsController extends Controller
{
    /**
     * Display event leads.
     */
    public function eventLeads(): View
    {
        $eventLeads = EventRegistration::with('event')
            ->latest()
            ->paginate(20);

        return view('backend.pages.event-leads.index', compact('eventLeads'));
    }

    /**
     * Display a single event lead.
     */
    public function show(EventRegistration $eventLead): View
    {
        $eventLead->load('event');

        return view('backend.pages.event-leads.show', compact('eventLead'));
    }

    /**
     * Delete event lead.
     */
    public function destroy(string $role,EventRegistration $eventLead): RedirectResponse
    {
        $eventLead->delete();
        return redirect()
                ->route('role.event-leads.index', [
                    'role' => $role,
                ])
                ->with('success', 'Event lead deleted successfully.');
    }
}