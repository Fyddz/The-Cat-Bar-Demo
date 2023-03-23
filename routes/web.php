<?php

use App\Http\Controllers\BarController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/bars', [BarController::class, 'bars'])->name('bars');
Route::get('/bar/{bar_id}', [BarController::class, 'bar'])->name('showBar');
