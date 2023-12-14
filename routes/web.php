<?php

use App\Http\Controllers\AuthController;
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


Route::get('/home', [HomeController::class, 'index'])->name('Home');

Route::get('/', [AuthController::class, 'index'])->name('UserAuth');
Route::post('/auth/login', [AuthController::class, 'login'])->name('UserLogin');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('UserLogOut');
Route::get('/auth/register', [AuthController::class, 'register'])->name('UserRegister');
Route::post('/auth/create', [AuthController::class, 'create'])->name('UserCreate');