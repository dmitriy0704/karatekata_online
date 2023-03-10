<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VdsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [VdsController::class, 'index'])->name('index');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/add', [HomeController::class, 'showAddVdForm'])->name('vd.add');
Route::get('/home', [HomeController::class, 'storeVd'])->name('vd.store');
Route::get('/{vd}',[VdsController::class,'detail'])->name('detail');
