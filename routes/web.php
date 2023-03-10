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
Route::post('/home', [HomeController::class, 'storeVd'])->name('vd.store');
Route::get('/home/{vd}/edit',[VdsController::class, 'showEditVdForm'])->name('vd.edit');
Route::patch('/home/{vd}', [HomeController::class, 'updateVd'])->name('vd.update');
Route::get('/home/{vd}/delete', [HomeController::class, 'showDeleteVdForm'])->name('vd.delete');
Route::delete('/home/{vd}', [HomeController::class, 'destroyVd'])->name('vd.destroy');
Route::get('/{vd}',[VdsController::class, 'detail'])->name('detail');
