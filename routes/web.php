<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use Modules\Post\Http\Controllers\PostController;
use Modules\Test\Http\Controllers\TestController;



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

Route::get('/', [ProdukController::class, 'index'])->name('produks.index');


Route::get('/login', [UserController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/edit', [PostController::class, 'index_Produk']);

Route::get('/post', [PostController::class, 'index']);

Route::post('/post/store', [PostController::class, 'store'])->name('produks.store'); //CREATE .

Route::get('/edit/{id}', [PostController::class, 'ProdukEdit'])->name('produks.edit'); //READ .
Route::put('/edit/post/{id}', [PostController::class, 'update'])->name('produks.update'); //UPDATE

Route::get('/edit/post/delete/{id}', [PostController::class, 'destroy'])->name('produks.destroy'); //DELETE .ketika testing saya merubah {id} menjadi angka 1 untuk mengecek id produk 1

Route::get('/{id}', [ProdukController::class, 'show']);

Route::get('/home/cart/{id}', [HomeController::class, 'cartt'])->name('produks.cart'); //cart 

Auth::routes();
