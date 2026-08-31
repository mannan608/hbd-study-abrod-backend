<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Counsellor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CounsellorBookingController extends Controller
{
    public function index(Request $request): View
    {
        $request->user()->can('campus.list') || abort(403);
        $counsellor_bookings = Counsellor::all();
        // return $counsellor_bookings;


        return view('backend.pages.counsellor-bookings.index');
    }

    public function view(): View
    {
        return view('backend.pages.counsellor-bookings.index');
    }
   public function destroy(): View
    {
        return view('backend.pages.counsellor-bookings.index');
    }
}
