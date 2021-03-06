<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dbadminController;
use App\Http\Controllers\dbadvController;
use App\Http\Controllers\dbcsController;
use GuzzleHttp\Middleware;

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

Route::post('/', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dbadmin',[dbadminController::class, 'index'])->name('dbadmin')->middleware('check');
Route::get('/dbadv',[dbadvController::class, 'index'])->name('dbadv')->middleware('check');
Route::get('/dbcs',[dbcsController::class, 'index'])->name('dbcs')->middleware('check');
