<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController AS HomeController;
use App\Http\Controllers\Authentication\LoginController AS LoginController;

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

Route::get('/', [LoginController::class, 'index'])->name('login_view');
Route::get('/home', [HomeController::class, 'homeview'])->name('home_view');
