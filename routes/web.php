<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/search', [SearchController::class, 'index']);
Route::post('/search', [SearchController::class, 'search']);

Route::get('/users/create', [UserController::class, 'index']);
Route::post('/users/create', [UserController::class, 'store']);

Route::get('/users', [UserController::class, 'showAll']);
