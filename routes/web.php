<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('index'); 
});



Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/index', [BookingController::class, 'index'])->name('booking.index');
