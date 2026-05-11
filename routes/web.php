<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Public Routes (Bisa diakses semua orang)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('users.index');
})->name('home');

Route::view('/about', 'users.about')->name('about');
Route::view('/services', 'users.services')->name('services');
Route::view('/pricing', 'users.pricing')->name('pricing');
Route::view('/contact', 'users.contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Booking (WAJIB LOGIN)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::post('/midtrans/callback', [BookingController::class, 'callback']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/booking', [BookingController::class, 'admin'])->name('admin.booking');
    Route::get('/admin/booking/approve/{id}', [BookingController::class, 'approve']);
    Route::get('/admin/booking/reject/{id}', [BookingController::class, 'reject']);
    Route::get('/booking', [BookingController::class, 'admin'])->name('admin.booking');
});


/*
|--------------------------------------------------------------------------
| Dashboard (Default Breeze)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Profile (Default Breeze)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| Auth Routes (Login, Register, dll)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';