<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
//use App\Http\Controllers\RegisterController;
use Modules\Post\Http\Controllers\PostController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    //logout bisa di akses ketika use sudah login atau melewati auth
    Route::post('/logout', [LoginController::class, 'logout']);
});

//================ LOGIN DAN REGISTER ====================//
Route::post('auth/login', [LoginController::class, '__invoke']); //web token

Route::post('auth/register', [RegisterController::class, '__invoke']); //ada web token

// ============================= Halaman Utama Web page untuk USER ========================== //
Route::get('/', [ProdukController::class, 'index']); //READ

//============= Halaman Dashboard user ketika sesudah login =================//
Route::get('/home', [ProdukController::class, 'home']); //Dashboard User / Pengunjung ketika sesudah login

// ============================= Halaman Utama Web page untuk USER ========================== //
Route::get('/{id}', [ProdukController::class, 'show']); //SHOW ATAU MENAMPILKAN DATA BERDASARKAN ID

//============= Halaman Dashboard admin ketika sesudah login =================//
Route::get('/post', [PostController::class, 'index']); //Dashboard Admin 
