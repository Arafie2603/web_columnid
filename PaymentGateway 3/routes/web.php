<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
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
Route::get('/', [DashboardController::class, 'index']);
Route::get('/payment', [WebController::class, 'index']);
Route::post('/payment', [WebController::class, 'payment_post']);
Route::post('/payments', [WebController::class, 'index']);
Route::post('transaksi', [TransaksiController::class, 'create']);
Route::post('tambah_produk', [ProdukController::class, 'store']);
Route::get('produk', [ProdukController::class, 'index']);
// Route::post('payment', [WebController::class, 'index']);

