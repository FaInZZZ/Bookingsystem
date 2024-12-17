<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookingdata;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'date' => 'required|date',
        ]);

        $booking = new Bookingdata;
        $booking->firstname = $request->firstname;
        $booking->lastname = $request->lastname;
        $booking->email = $request->email;
        $booking->address = $request->address;
        $booking->phone = $request->phone;
        $booking->date = $request->date;
        $booking->save();
      
    }
}
