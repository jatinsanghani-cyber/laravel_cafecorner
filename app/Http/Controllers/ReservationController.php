<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{

    // SHOW RESERVATION FORM
    public function show()
    {
        return view('reservation');
    }

    // STORE RESERVATION
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'phone'    => 'required|digits:10',
            'date'     => 'required|date|after_or_equal:today',
            'time'     => 'required',
            'guests'   => 'required|integer|min:1|max:10',
            'seating'  => 'required|string',
            'occasion' => 'nullable|string',
            'notes'    => 'nullable|string|max:500',
        ]);

        // Prevent same user booking same date & time
        $alreadyBooked = Reservation::where('user_id', auth()->id())
            ->where('date', $request->date)
            ->where('time', $request->time)
            ->exists();

        if ($alreadyBooked) {
            return back()->withErrors([
                'time' => 'You already have a reservation at this time.'
            ]);
        }

        //  Daily booking limit (anti-fake bookings)
        $dailyLimit = 20;

        if (Reservation::where('date', $request->date)->count() >= $dailyLimit) {
            return back()->withErrors([
                'date' => 'No tables available for this date.'
            ]);
        }

        // Save reservation
        Reservation::create([
            'user_id'  => auth()->id(),
            'phone'    => $request->phone,
            'date'     => $request->date,
            'time'     => $request->time,
            'guests'   => $request->guests,
            'seating'  => $request->seating,
            'occasion' => $request->occasion,
            'notes'    => $request->notes,
        ]);

        // Redirect to booking page
        return redirect('/my-bookings')
            ->with('success', 'Table reserved successfully!');
    }

    // SHOW USER BOOKINGS
    public function myBookings()
    {
        $reservations = Reservation::where('user_id', auth()->id())
            ->orderBy('date', 'desc')
            ->orderBy('time', 'desc')
            ->get();

        // IMPORTANT: matches booking.blade.php
        return view('booking', compact('reservations'));
    }
}
