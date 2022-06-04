<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Auth;

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


Route::resource('/cars', CarsController::class);

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

