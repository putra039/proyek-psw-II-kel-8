<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;

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

Route::group(['domain' => ''], function() {
    Route::get('auth',[AuthController::class, 'index'])->name('auth.index');
    Route::get('auth/register', [AuthController::class, 'register'])->name('auth.register');
    Route::prefix('auth')->name('auth.')->group(function(){
        Route::post('register',[AuthController::class, 'do_register'])->name('register');
        Route::post('login',[AuthController::class, 'do_login'])->name('login');
    });
    Route::get('logout',[AuthController::class, 'do_logout'])->name('logout');
});