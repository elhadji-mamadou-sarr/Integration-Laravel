<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Models\Evenement;
use App\Models\Reservation;
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

Route::get('/', function () {
    $evenements = Evenement::all();
    return view('welcome', compact('evenements'));
})->name('welecome');

Route::get('/dashboard', function () {
    $evenements = Evenement::all();
        $reservations = Reservation::all();
        return view('admin.index', compact('evenements', 'reservations'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('reservation', ReservationController::class);

});

require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:Administrateur'])->group(function () {
    Route::resource('evenement', AdminController::class)->except('destroy');
    Route::get('evenement/delete/{id}', [AdminController::class, 'destroy'])->name('evenement.destroy');
});
