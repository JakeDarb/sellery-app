<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'handleLogin']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/user', function () {
    return view('/users/index');
});

Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/favourites', [ProductController::class, "favourites"]);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/products/category/{category}', [ProductController::class, 'byCategory']);
Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy']);

