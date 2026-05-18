<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'name',
        'age',
        'phone',
        'car_type',
        'car_name',
        'booking_date',
        'order_date',
        'dp_proof',

        // BOOKING STATUS
        'status',

        // MIDTRANS
        'snap_token',
        'payment_status',
        'payment_type',
        'transaction_id',
        'paid_at'

    ];
}