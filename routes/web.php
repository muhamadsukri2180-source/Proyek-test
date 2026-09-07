<?php

use App\Http\Controllers\AbsenController;
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

Route::get('/', [AbsenController::class, 'index'])->name('welcome.index');

// Route CRUD dengan awalan 'welcome'
Route::post('/welcome/store', [AbsenController::class, 'store'])->name('welcome.store');
Route::put('/welcome/{absen}', [AbsenController::class, 'update'])->name('welcome.update');
Route::delete('/welcome/{absen}', [AbsenController::class, 'destroy'])->name('welcome.destroy');
