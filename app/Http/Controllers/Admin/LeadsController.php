<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventRegistration;

class LeadsController extends Controller
{
    public function eventLeads()
    {
        $eventLeads = EventRegistration::all();
        return $eventLeads;
        return view('backend.pages.event-leads.index', compact('eventLeads'));
    }
}
