<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Models\User;

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
Route::get('/detail', [DashboardController::class, 'detail'])->name('detail');
Route::get('/checkout', [DashboardController::class, 'checkout'])->name('checkout');
Auth::routes();
