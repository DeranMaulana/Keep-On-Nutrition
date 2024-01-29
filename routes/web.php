<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\login\DaftarController;
use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\login\AuthController;
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

Route::get('login', [LoginController::class,'index'])->name('login');
Route::get('daftar', [DaftarController::class,'index'])->name('daftar');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');
Route::post('proses_daftar',[DaftarController::class,'store'])->name('proses_daftar');

Route::group(['middleware' => ['auth']], function () {
        Route::get('/main/landing_page', [LandingPageController::class,'index']);
    });