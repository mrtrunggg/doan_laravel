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

    //tai khoan ne
    Route::get('/Taikhoan/index',[Admin\TaikhoanController::class, 'index'])->name('indexTk');
    Route::get('/Taikhoan/create',[Admin\TaikhoanController::class, 'create'])->name('formthemTK');
    Route::post('/Taikhoan/xulycreate',[Admin\TaikhoanController::class, 'xulycreate'])->name('xylythemTK');
    Route::get('/Taikhoan/edit/{TK}',[Admin\TaikhoanController::class, 'edit'])->name('SuaTK');
    Route::post('/Taikhoan/edit/{TK}',[Admin\TaikhoanController::class, 'xulyedit'])->name('xylysuaTK');
    Route::get('/Taikhoan/delete/{TK}',[Admin\TaikhoanController::class, 'xulydelete'])->name('xylyxoaTK');


    //Hóa đơn nhập nè
    Route::get('/Hoadonnhap/index',[Admin\HoadonnhapController::class, 'index'])->name('indexHDN');
    Route::get('/Hoadonnhap/create',[Admin\HoadonnhapController::class, 'create'])->name('formthemHDN');
    Route::post('/Hoadonnhap/xulycreate',[Admin\HoadonnhapController::class, 'xulycreate'])->name('xylythemHDN');
    Route::get('/Hoadonnhap/edit/{HDN}',[Admin\HoadonnhapController::class, 'edit'])->name('SuaHDN');
    Route::post('/Hoadonnhap/edit/{HDN}',[Admin\HoadonnhapController::class, 'xulyedit'])->name('xylysuaHDN');
    Route::get('/Hoadonnhap/delete/{HDN}',[Admin\HoadonnhapController::class, 'xulydelete'])->name('xylyxoaHDN');

    //Chi tiết hóa đơn nhập nè
    Route::get('/CTHoadonN/index',[Admin\CTHoadonNController::class, 'index'])->name('indexCTHDN');
    Route::get('/CTHoadonN/create',[Admin\CTHoadonNController::class, 'create'])->name('formthemCTHDN');
    Route::post('/CTHoadonN/xulycreate',[Admin\CTHoadonNController::class, 'xulycreate'])->name('xylythemCTHDN');
    Route::get('/CTHoadonN/edit/{CTHDN}',[Admin\CTHoadonNController::class, 'edit'])->name('SuaCTHDN');
    Route::post('/CTHoadonN/edit/{CTHDN}',[Admin\CTHoadonNController::class, 'xulyedit'])->name('xylysuaCTHDN');
    Route::get('/CTHoadonN/delete/{CTHDN}',[Admin\CTHoadonNController::class, 'xulydelete'])->name('xylyxoaCTHDN');

});


