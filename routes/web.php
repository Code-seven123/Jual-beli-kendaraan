<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
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

Route::get('/', [pageController::class, 'home']);

Route::post('/home/tambah', [pageController::class, 'tambah']);

Route::get('/home/delete/{id}', [pageController::class, 'hapus']);

Route::get('/home/edit/{id}', [pageController::class, 'edit']);

Route::post('/home/update', [pageController::class, 'update']);