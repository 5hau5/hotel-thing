<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

# main page
Route::get('/', function () {
    return view('visitor.dashboard');
})->name('visitor.home');



Route::get('/hotel/book', function () {
    return view('visitor.hotels.book');
})->name('visitor.hotel.book');
