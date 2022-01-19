<?php

use App\Http\Controllers\BackController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/detail/{id}', [HomeController::class, 'show'])->name('detail');

Route::get('/admin', [BackController::class, 'show'])->name('back');

Route::get('/admin/create', [BackController::class, 'create'])->name('create');

Route::post('/admin/create', [BackController::class, 'store'])->name('store');

Route::get('/admin/delete/{id}', [BackController::class, 'delete'])->name('delete');


// A finaliser

Route::get('/admin/edit/{id}', [BackController::class, 'edit'])->name('edit');

Route::post('/admin/update', [BackController::class, 'update'])->name('update');