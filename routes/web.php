<?php

use App\Http\Controllers\login\DaftarController;
use App\Http\Controllers\login\LoginController;
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

Route::get('/', function () {
    return view('login\login');
});
Route::get('/daftar', [DaftarController::class,'tampil'])-> name('daftar');
Route::get('/login', [LoginController::class,'tampil'])-> name('login');
