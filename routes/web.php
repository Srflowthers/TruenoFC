<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->int_rol === 1) {
        return view('dashboard.admin');
    } elseif ($user->int_rol === 2) {
        return view('dashboard.cuerpo');
    } elseif ($user->int_rol === 3) {
        return view('dashboard.jugador');
    }

    // Default fallback just in case
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas de Administrador
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Check if the user is actually an admin could be done with a middleware, 
    // but for now relying on the dashboard redirect / specific logic if needed. 
    // We should ideally protect this route so only admin can access.
    Route::get('/members', [\App\Http\Controllers\Admin\MemberController::class, 'index'])->name('members.index');
    Route::get('/members/create', [\App\Http\Controllers\Admin\MemberController::class, 'create'])->name('members.create');
    Route::post('/members', [\App\Http\Controllers\Admin\MemberController::class, 'store'])->name('members.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
