<?php

use App\Http\Controllers\MainController;
use App\Livewire\Frontend\PemesananJoki;
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

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/pemesanan-joki', PemesananJoki::class)->name('pemesanan-joki');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

    Route::get('/pesanan', [MainController::class, 'pesanan'])->name('pesanan');
});
