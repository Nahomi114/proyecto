<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
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

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::get('/categorias/{id}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');