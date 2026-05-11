<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class BookingController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN BOOKING USER
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        // JIKA ADMIN
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.booking');
        }

        // USER BIASA
        $bookings = Booking::where('user_id', Auth::id())
                    ->latest()
                    ->get();

        return view('users.booking', compact('bookings'));
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN BOOKING + MIDTRANS
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required',
                'age' => 'required',
                'phone' => 'required',
                'car_type' => 'required',
                'car_name' => 'required',
                'booking_date' => 'required',
                'order_date' => 'required',
            ]);

            // CONFIG MIDTRANS
            Config::$serverKey = env('MIDTRANS_SERVER_KEY');
            Config::$isProduction = false;
            Config::$isSanitized = true;
            Config::$is3ds = true;


            // SIMPAN BOOKING
            $booking = Booking::create([

                'user_id' => Auth::id(),
                'name' => $request->name,
                'age' => $request->age,
                'phone' => $request->phone,
                'car_type' => $request->car_type,
                'car_name' => $request->car_name,
                'booking_date' => $request->booking_date,
                'order_date' => $request->order_date,
                'status' => 'pending',

            ]);

            // MIDTRANS PARAMS
            $params = [

                'transaction_details' => [
                    'order_id' => 'BOOKING-'.$booking->id.'-'.time(),
                    'gross_amount' => 100000
                ],

                'customer_details' => [
                    'first_name' => $request->name,
                    'phone' => $request->phone,
                ]

            ];

            // GENERATE SNAP TOKEN
            $snapToken = Snap::getSnapToken($params);

            // UPDATE DATABASE
            $booking->update([
                'snap_token' => $snapToken
            ]);

            // RETURN JSON
            return response()->json([
                'success' => true,
                'snap_token' => $snapToken
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);

        }
    }

    /*
    |--------------------------------------------------------------------------
    | CALLBACK MIDTRANS
    |--------------------------------------------------------------------------
    */
    public function callback(Request $request)
    {
        $orderId = $request->order_id;

        $id = str_replace('BOOKING-', '', $orderId);

        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json([
                'message' => 'Booking tidak ditemukan'
            ], 404);
        }

        /*
        |--------------------------------------------------------------------------
        | STATUS PAYMENT
        |--------------------------------------------------------------------------
        */
        if ($request->transaction_status == 'settlement') {

            $booking->status = 'approved';

        } elseif (
            $request->transaction_status == 'expire' ||
            $request->transaction_status == 'cancel' ||
            $request->transaction_status == 'deny'
        ) {

            $booking->status = 'rejected';

        } else {

            $booking->status = 'pending';
        }

        $booking->save();

        return response()->json([
            'message' => 'success'
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | HALAMAN ADMIN
    |--------------------------------------------------------------------------
    */
    public function admin()
    {
        // CEK ADMIN
        if (Auth::user()->role != 'admin') {
            abort(403);
        }

        $bookings = Booking::latest()->get();

        return view('admin.booking', compact('bookings'));
    }

    /*
    |--------------------------------------------------------------------------
    | MANUAL ACC
    |--------------------------------------------------------------------------
    */
    public function approve($id)
    {
        Booking::findOrFail($id)->update([
            'status' => 'approved'
        ]);

        return back()->with('success', 'Booking berhasil di ACC');
    }

    /*
    |--------------------------------------------------------------------------
    | MANUAL REJECT
    |--------------------------------------------------------------------------
    */
    public function reject($id)
    {
        Booking::findOrFail($id)->update([
            'status' => 'rejected'
        ]);

        return back()->with('success', 'Booking berhasil ditolak');
    }
}