<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin/')->group(function () {
    Route::get('home',[HomeController::class,'index'])->name('admin.index');
    Route::get('login',[AuthController::class,'login'])->name('admin.login');
    Route::get('register',[AuthController::class,'register'])->name('admin.register');
});
