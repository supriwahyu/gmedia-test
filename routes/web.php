<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/karyawan', [UserController::class, 'show'])->name('karyawan');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/karyawan/tambah', [UserController::class, 'create'])->name('create');
Route::post('/karyawan/tambah/baru', [UserController::class, 'store'])->name('store');
Route::get('/kariyawan/lihat', [UserController::class, 'view'])->name('view');
Route::get('/karyawan/edit/', [UserController::class, 'edit'])->name('edit');
Route::put('/karyawan/update', [UserController::class, 'update'])->name('update');
