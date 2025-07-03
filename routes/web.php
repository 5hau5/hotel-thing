<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RoomController;

Route::resource('rooms', RoomController::class);
