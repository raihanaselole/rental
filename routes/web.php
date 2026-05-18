<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('users.index');
})->name('home');

Route::view('/about', 'users.about')->name('about');
Route::view('/services', 'users.services')->name('services');
Route::view('/contact', 'users.contact')->name('contact');

/*
|--------------------------------------------------------------------------
| USER CARS & PRICING
|--------------------------------------------------------------------------
*/

Route::get('/pricing', [CarController::class, 'pricing'])
    ->name('pricing');

Route::get('/cars', [CarController::class, 'userCars'])
    ->name('cars');


/*
|--------------------------------------------------------------------------
| BOOKING USER (LOGIN)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/booking', [BookingController::class, 'index'])
        ->name('booking');

    Route::post('/booking', [BookingController::class, 'store'])
        ->name('booking.store');

    

});


/*
|--------------------------------------------------------------------------
| MIDTRANS CALLBACK
|--------------------------------------------------------------------------
*/

Route::post('/midtrans/callback', [BookingController::class, 'callback']);


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('admin')->group(function () {

    // BOOKING ADMIN
    Route::get('/booking', [BookingController::class, 'admin'])
        ->name('admin.booking');

    Route::get('/booking/approve/{id}', [BookingController::class, 'approve'])
        ->name('admin.booking.approve');

    Route::get('/booking/reject/{id}', [BookingController::class, 'reject'])
        ->name('admin.booking.reject');
    
    Route::get('/booking/{id}', [BookingController::class, 'show'])
    ->name('admin.booking.show');


    // CRUD CARS
    Route::resource('/cars', CarController::class);

});


/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';