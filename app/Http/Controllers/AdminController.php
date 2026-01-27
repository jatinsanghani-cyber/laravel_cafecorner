<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class AdminController extends Controller
{
    public function dashboard()
    {
        $reservations = Reservation::latest()->get();
        return view('admin.dashboard', compact('reservations'));
    }
}
