<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/product', [MainController::class,'product'] );
Route::get('/catalog', [MainController::class,'catalog'] );
Route::get('/basket', [MainController::class,'basket'] );
Route::get('/autho', [AuthController::class, 'auth']);
Route::get('/register', [AuthController::class, 'regist']);
Route::get('/personalcub', [AuthController::class, 'personal']);
