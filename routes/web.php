<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HotelController::class, 'index'])->name('home');
Route::get('/hotel/{id}', [HotelController::class, 'show'])->name('hotel.show');

Route::get('/hotel/{id}/reservation', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/hotel/{id}/reservation', [ReservationController::class, 'store'])->name('reservation.store');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function(){ return to_route('filament.auth.login');});
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
