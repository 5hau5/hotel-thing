<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('visitor.dashboard');
})->name('visitor.home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\MapController;
use App\Http\Controllers\Admin\ReportController;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

    Route::resource('ads', AdController::class);

    Route::get('/map', [MapController::class, 'edit'])->name('map.edit');
    Route::put('/map', [MapController::class, 'update'])->name('map.update');

    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
});

// hotel Manager Dashboard
use App\Http\Controllers\Hotel\HotelController;
Route::middleware(['auth'])->prefix('hotel')->name('hotel.')->group(function () {
    Route::get('/dashboard', [HotelController::class, 'index'])->name('dashboard');
});

// ferry Operator Dashboard
use App\Http\Controllers\Ferry\FerryController;
Route::middleware(['auth'])->prefix('ferry')->name('ferry.')->group(function () {
    Route::get('/dashboard', [FerryController::class, 'index'])->name('dashboard');
});

// theme Park Staff Dashboard
use App\Http\Controllers\Themepark\ThemeparkController;
Route::middleware(['auth'])->prefix('themepark')->name('themepark.')->group(function () {
    Route::get('/dashboard', [ThemeparkController::class, 'index'])->name('dashboard');
});


// visitor routes
// pblicly accessible visitor routes (no login required)
Route::prefix('visitor')->name('visitor.')->group(function () {
    Route::get('/hotels', function () {
        return view('visitor.hotels.index');
    })->name('hotels.index');

    Route::get('/ferrys', function () {
        return view('visitor.ferrys.index');
    })->name('ferrys.index');

    Route::get('/parks', function () {
        return view('visitor.parks.index');
    })->name('parks.index');

    Route::get('/map', function () {
        return view('visitor.map');
    })->name('map');
});

// booking routes (require login)
Route::middleware('auth')->prefix('visitor')->name('visitor.')->group(function () {
    Route::get('/hotels/book', function () {
        return view('visitor.hotels.book');
    })->name('hotels.book');

    Route::get('/ferrys/book', function () {
        return view('visitor.ferrys.book');
    })->name('ferrys.book');

    Route::get('/parks/tickets', function () {
        return view('visitor.parks.tickets');
    })->name('parks.tickets');
});



Route::get('/register', function () {
    return view('auth.register');
});


require __DIR__.'/auth.php';
