<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\UserController;
Route::get('/', function () {
   return view('home');
});

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/user/{user}', [UserController::class, 'edit'])->name('user.edit');

Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');

Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');


Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');

Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');

Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');

Route::get('/suplier/{suplier}', [SuplierController::class, 'edit'])->name('suplier.edit');

Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');

Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');