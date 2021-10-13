<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;

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

// front

Route::get('home', [HomeController::class, 'ShowIndex']);
Route::get('about', [HomeController::class, 'ShowAbout']);
Route::get('shop', [HomeController::class, 'Showshop']);
Route::get('contact', [HomeController::class, 'Showcontact']);

// front produk

Route::get('produkshop', [HomeController::class, 'Showproduk1']);
Route::get('produkshop2', [HomeController::class, 'Showproduk2']);
Route::get('produkshop3', [HomeController::class, 'Showproduk3']);
Route::get('produkshop4', [HomeController::class, 'Showproduk4']);
Route::get('produkshop5', [HomeController::class, 'Showproduk5']);
Route::get('produkshop6', [HomeController::class, 'Showproduk6']);


// admin 
Route::get('dashboard', [AdminController::class, 'showadmin']);
Route::get('kategori', [AdminController::class, 'kategori']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);