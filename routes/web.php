<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SanphamController;
use App\Http\Controllers\UserController;
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



Route::get('/index-user',[UserController::class, 'trangchu'])->name('user-trangchu');
Route::get('/shop',[UserController::class, 'dssp'])->name('user-dssp');
Route::get('/product/{SP}',[UserController::class, 'ctsp'])->name('chitietsanpham');
Route::post('/timkiem',[UserController::class, 'timkiem'])->name('timkiemsanpham');

Route::get('/index',[UserController::class, 'trangchu'])->name('user-trangchu');;
Route::get('/shop',[UserController::class, 'dssp'])->name('user-dssp');
Route::get('/profile',[UserController::class, 'ttcn'])->name('user-ttcn');








Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


