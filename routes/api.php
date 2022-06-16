<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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


Route::get('/edit', [PostController::class, 'index_Produk']); //READ

Route::post('/post/store', [PostController::class, 'store']); //CREATE

Route::put('/edit/post/{id}', [PostController::class, 'update']); //UPDATE

Route::get('/edit/{id}', [PostController::class, 'ProdukEdit']); //READ ATAU MENAMPILKAN DATA BERDASARKAN ID

Route::get('/edit/post/delete/{id}', [PostController::class, 'destroy']); //DELETE 
