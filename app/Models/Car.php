<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'type',
        'price',
        'image',
        'description',
        'price_hour',
        'price_day',
        'price_month'
    ];
}