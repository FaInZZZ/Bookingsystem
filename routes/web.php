<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('index'); 
});

Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

