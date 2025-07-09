<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

# main page
Route::get('/', function () {
    return view('visitor.dashboard');
})->name('visitor.home');

// hotel bookign page
Route::get('/hotels/book', function () {
    return view('visitor.hotels.book');
})->name('visitor.hotel.book');

// ferry booking page
Route::get('/ferrys/book', function () {
    return view('visitor.ferrys.book');
})->name('visitor.ferry.book');

Route::get('/parks/tickets', function () {
    return view('visitor.parks.tickets');
})->name('visitor.park.tickets');

// mao
Route::get('/map', function () {
    return view('visitor.map');
})->name('visitor.map');
