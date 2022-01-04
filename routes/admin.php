<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::group(['prefix' => '/'], function () {
    Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
    Route::get('register', [Admin\RegisterController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('register', [Admin\RegisterController::class, 'register'])->name('admin.register.post');
    Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', function () {
        return view('admin.dashboard.index');
        })->name('admin.dashboard');
    });
});