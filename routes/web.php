<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\loginController;
use App\Livewire\AdminLivewire as AdminIndex;

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


Route::get('/', [FirebaseController::class, 'index'])->name('home');
//Route::get('/search', [FirebaseController::class, 'tryQR'])->name('tryQR');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/productos/create', [dashboardController::class, 'create'])->name('productos.create')->middleware('auth');
Route::post('/productos', [dashboardController::class, 'store'])->name('productos.store')->middleware('auth');
Route::get('/productos/{producto}/edit', [dashboardController::class, 'edit'])->name('productos.edit')->middleware('auth');
Route::patch('/productos/{producto}', [dashboardController::class, 'update'])->name('productos.update')->middleware('auth');


Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store'])->name('loginSucess');
Route::post('/logout', [loginController::class, 'destroy'])->name('logout');


