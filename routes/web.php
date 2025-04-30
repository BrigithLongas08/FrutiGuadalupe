<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD

=======
Route::get('/quienes_somos', function () {
    return view('pages.quienes-somos');
})->name('quienes-somos');

Route::get('/inicio', function () {
    return view('pages.inicio');
})->name('Furtiguadalupe');

Route::get('/productos', function () {
    return view('pages.productos');
})->name('Productos');
>>>>>>> origin/brigith


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

#rutas
