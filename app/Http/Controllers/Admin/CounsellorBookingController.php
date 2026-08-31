<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CounsellorBooking;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CounsellorBookingController extends Controller
{
    public function index(Request $request): View
    {
        $user = $request->user();
        $canListAll = $user->can('bookings.list');
        $isCounsellor = $user->counsellor()->exists();

        if (! $canListAll && ! $isCounsellor) {
            abort(403);
        }

        $bookings = CounsellorBooking::query()
            ->with(['counsellor.user'])
            ->when($isCounsellor && ! $canListAll, function ($query) use ($user) {
                $query->whereHas('counsellor', function ($counsellorQuery) use ($user) {
                    $counsellorQuery->where('user_id', $user->id);
                });
            })
            ->latest()
            ->paginate(10);

        return view('backend.pages.counsellor-bookings.index', compact('bookings'));
    }

    public function show(Request $request, string $bookingId): View
    {
        $user = $request->user();
        $canViewAll = $user->can('bookings.view');
        $isCounsellor = $user->counsellor()->exists();

        $booking = CounsellorBooking::query()
            ->with(['counsellor.user'])
            ->findOrFail($bookingId);

        if (! $canViewAll && (! $isCounsellor || $booking->counsellor?->user_id !== $user->id)) {
            abort(403);
        }

        return view('backend.pages.counsellor-bookings.show', compact('booking'));
    }

    public function destroy(Request $request, string $bookingId)
    {
        $request->user()->can('bookings.delete') || abort(403);

        $user = $request->user();
        $booking = CounsellorBooking::query()->findOrFail($bookingId);

        if ($user->counsellor()->exists() && $booking->counsellor?->user_id !== $user->id) {
            abort(403);
        }

        $booking->delete();

        return redirect()
            ->route('role.booking-sessions.index')
            ->with('success', 'Booking deleted successfully.');
    }

public function update(Request $request, string $bookingId)
{
    $request->user()->can('bookings.update') || abort(403);

    $request->validate([
        'status' => [
            'required',
            'in:pending,confirmed,completed,cancelled',
        ],
    ]);

    $user = $request->user();

    $booking = CounsellorBooking::query()
        ->findOrFail($bookingId);

    if (
        $user->counsellor()->exists() &&
        $booking->counsellor?->user_id !== $user->id
    ) {
        abort(403);
    }

    $booking->update([
        'status' => $request->status,
    ]);

    return redirect()
        ->route('role.booking-sessions.index')
        ->with('success', 'Booking status updated successfully.');
}
}
