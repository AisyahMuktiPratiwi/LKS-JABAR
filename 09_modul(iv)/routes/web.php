<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Models\User;
use App\Models\Produk;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('depan');
});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/detail/{id}', [DashboardController::class, 'detail'])->name('detail');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/pembayaran', [HomeController::class, 'pembayaran'])->name('pembayaran');
Route::get('/pesan', [HomeController::class, 'pesan'])->name('pesan');
Route::get('cart', [DashboardController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [DashboardController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [DashboardController::class, 'update'])->name('update.cart');
Route::get('remove-from-cart', [DashboardController::class, 'remove'])->name('remove.from.cart');

Route::get('/home', [HomeController::class, 'index'])->name('dashboardadmin');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/tmbhproduk', [ProdukController::class, 'tmbhproduk'])->name('tmbhproduk');
Route::post('/tambahproduk', [ProdukController::class, 'tambahproduk'])->name('tambahproduk');
Route::get('/tampildata/{id}', [ProdukController::class, 'tampildata'])->name('tampildata');
Route::post('/editproduk/{id}', [ProdukController::class, 'editproduk'])->name('editproduk');
Route::get('/delete/{id}', [ProdukController::class, 'delete'])->name('delete');
Route::get('/inv', [ProdukController::class, 'inv'])->name('inv');
Route::get('/detailinv/{id}', [ProdukController::class, 'detailinv'])->name('detailinv');
Auth::routes();
