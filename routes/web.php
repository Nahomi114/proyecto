<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ClienteController;
=======
>>>>>>> 6afbe6eb9cd726c453a1700c1346c64cf67d33e8

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('usuarios', UsuarioController::class);
});
<<<<<<< HEAD
Route::resource('clientes', ClienteController::class);
require __DIR__.'/auth.php';
=======

require __DIR__.'/auth.php';


Route::apiResource('proveedores', ProveedorController::class);
>>>>>>> 6afbe6eb9cd726c453a1700c1346c64cf67d33e8
