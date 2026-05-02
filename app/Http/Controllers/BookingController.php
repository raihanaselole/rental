<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class BookingController extends Controller
{
    // halaman booking user
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->get();
        return view('users.booking', compact('bookings'));
    }

    // simpan booking
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'phone' => 'required',
            'car_type' => 'required',
            'car_name' => 'required',
            'booking_date' => 'required|date',
            'order_date' => 'required|date',
            'dp_proof' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $path = null;

        if ($request->hasFile('dp_proof')) {
            $path = $request->file('dp_proof')->store('dp', 'public');
        }

        $file = $request->file('dp_proof')->store('dp', 'public');

        Booking::create([
        'user_id' => Auth::id(),
        'name' => $request->name,
        'age' => $request->age,
        'phone' => $request->phone,
        'car_type' => $request->car_type,
        'car_name' => $request->car_name,
        'booking_date' => $request->booking_date,
        'order_date' => $request->order_date,
        'dp_proof' => $file,
    ]);

        return redirect()->back()->with('success', 'Booking berhasil dikirim!');
    }

    // ADMIN
    public function admin()
    {
        $bookings = Booking::latest()->get();
        return view('admin.booking', compact('bookings'));
    }

    public function approve($id)
    {
        Booking::findOrFail($id)->update(['status' => 'approved']);
        return back();
    }

    public function reject($id)
    {
        Booking::findOrFail($id)->update(['status' => 'rejected']);
        return back();
    }
}
