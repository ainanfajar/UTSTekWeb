<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MasukController;


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

Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'home']);
Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/guru/detail/{id_guru}', [GuruController::class, 'detail']);
Route::get('/guru/add', [GuruController::class, 'add']);
Route::post('/guru/insert', [GuruController::class, 'insert']);
Route::get('/guru/edit/{id_guru}', [GuruController::class, 'edit']);
Route::post('/guru/update/{id_guru}', [GuruController::class, 'update']);
Route::get('/guru/delete/{id_guru}', [GuruController::class, 'delete']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/detail/{id_siswa}', [SiswaController::class, 'detail']);
Route::get('/siswa/add', [SiswaController::class, 'add']);
Route::post('/siswa/insert', [SiswaController::class, 'insert']);
Route::get('/siswa/edit/{id_siswa}', [SiswaController::class, 'edit']);
Route::post('/siswa/update/{id_siswa}', [SiswaController::class, 'update']);
Route::get('/siswa/delete/{id_siswa}', [SiswaController::class, 'delete']);

Route::view('/app', 'layouts.app');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\MasukController::class, 'index'])->name('admin');
