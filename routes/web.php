<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
Route::get('/', function () {
   return view('home');
});
// Rute untuk menampilkan semua data suplier
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
// Rute untuk menambahkan data suplier baru
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
// Route untuk menampilkan form edit
Route::get('/suplier/{suplier}', [SuplierController::class, 'edit'])->name('suplier.edit');
// Route untuk mengupdate data supplier
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
// Route untuk menghapus data supplier
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');