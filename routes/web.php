<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('login', [HomeController::class,'login'])->name('login');
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
Route::get('/penyewa', [HomeController::class,'penyewa'])->name('penyewa');
