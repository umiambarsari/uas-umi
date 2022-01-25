<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('dashboard/{status}', [HomeController::class, 'Showberanda']);


// CRUD
// login as Pengguna
// Route::prefix('admin')->middleware('auth:pengguna')->group(function(){
//     Route::resource('produk', ProdukController::class);
//     Route::resource('user', UserController::class);
//     Route::post('produk/filter', [ProdukController::class, 'filter']);
// });

// login as Admin
// Route::prefix('admin')->middleware('auth:admin')->group(function(){
//     Route::resource('produk', ProdukController::class);
//     Route::resource('user', UserController::class);
//     Route::post('produk/filter', [ProdukController::class, 'filter']);
// });


Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
    Route::post('produk/filter', [ProdukController::class, 'filter']);
});


// login proces
Route::get('login', [AuthController::class, 'showlogin']) -> name('login');
Route::post('login', [AuthController::class, 'loginproces']);
Route::get('logout', [AuthController::class, 'logout']);


// client

Route::get('home', [ClientController::class, 'showhome'] );
Route::get('about', [ClientController::class, 'showabout'] );
Route::get('contact', [ClientController::class, 'showcontact'] );
Route::get('produkshop', [ClientController::class, 'showprodukshop'] );
Route::get('shop', [ClientController::class, 'showshop'] );
Route::post('shop/filter', [ClientController::class, 'filter']);
Route::post('shop/filter2', [ClientController::class, 'filter2']);
Route::get('produkshop/{produk}', [ClientController::class, 'showprodukshop']);


// alamat

Route::get('alamat',[HomeController::class, 'showAlamat'] );

// setting control
Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);