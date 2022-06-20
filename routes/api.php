<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\RegisterController;
use Modules\Post\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//============================= Proses CRUD untuk ADMIN ===================//

Route::get('/edit', [PostController::class, 'index_Produk']); //READ

Route::post('/post/store', [PostController::class, 'store']); //CREATE

Route::put('/edit/post/{id}', [PostController::class, 'update']); //UPDATE

Route::get('/edit/{id}', [PostController::class, 'ProdukEdit']); //SHOW ATAU MENAMPILKAN DATA BERDASARKAN ID

Route::get('/edit/post/delete/{id}', [PostController::class, 'destroy']); //DELETE 


// ============================= Halaman Utama Web page untuk USER ========================== //

Route::get('/', [ProdukController::class, 'index']); //READ

//============= Halaman Dashboard user ketika sesudah login =================//

Route::get('/home', [ProdukController::class, 'home']); //Dashboard User / Pengunjung ketika sesudah login

// ============================= Halaman Utama Web page untuk USER ========================== //

Route::get('/{id}', [ProdukController::class, 'show']); //SHOW ATAU MENAMPILKAN DATA BERDASARKAN ID

//================ LOGIN DAN REGISTER ====================//

Route::post('/login', [UserController::class, 'loginTest']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'registerTest']);

//============= Halaman Dashboard admin ketika sesudah login =================//

Route::get('/post', [PostController::class, 'index']); //Dashboard Admin 
