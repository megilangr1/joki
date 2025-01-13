<?php

use App\Http\Controllers\MainController;
use App\Livewire\Frontend\PembayaranJoki;
use App\Livewire\Frontend\PemesananJoki;
use App\Livewire\Pesanan\MainDetail as PesananMainDetail;
use App\Livewire\Pesanan\MainIndex as PesananMainIndex;
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
Route::get('/pembayaran-joki/{kode}', PembayaranJoki::class)->name('pembayaran-joki');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

    Route::get('/pesanan', PesananMainIndex::class)->name('pesanan');
    Route::get('/pesanan/{kode}/detail', PesananMainDetail::class)->name('pesanan.detail');
});
