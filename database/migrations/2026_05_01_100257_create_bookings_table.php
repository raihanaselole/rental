<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();

        $table->string('name');
        $table->integer('age');
        $table->string('phone');

        $table->enum('car_type', ['Bensin', 'Listrik']);
        $table->string('car_name');

        $table->date('booking_date'); // tanggal booking
        $table->date('order_date');   // tanggal pemesanan

        $table->string('dp_proof'); // upload bukti

        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');

        $table->timestamps();
            });
        }
};
