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
    
    //Sản phẩm
    Route::group(['prefix' => 'Sanpham'], function() {
        Route::get('index',[Admin\SanphamController::class, 'index'])->name('sanpham');
        Route::get('create',[Admin\SanphamController::class, 'create'])->name('themsp');
        Route::post('xulycreate',[Admin\SanphamController::class, 'xulycreate'])->name('xulythemsp');
        Route::get('edit/{TK}',[Admin\SanphamController::class, 'edit'])->name('suasp');
        Route::post('edit/{TK}',[Admin\SanphamController::class, 'xulyedit'])->name('xulysuasp');
        Route::get('delete/{TK}',[Admin\SanphamController::class, 'xulydelete'])->name('xoasp');
    });

    //Loại sản phẩm
    Route::group(['prefix' => 'Loaisanpham'], function() {
        Route::get('index',[Admin\LoaisanphamController::class, 'index'])->name('loaisanpham');
        Route::get('create',[Admin\LoaisanphamController::class, 'create'])->name('themlsp');
        Route::post('xulycreate',[Admin\LoaisanphamController::class, 'xulycreate'])->name('xulythemlsp');
        Route::get('edit/{TK}',[Admin\LoaisanphamController::class, 'edit'])->name('sualsp');
        Route::post('edit/{TK}',[Admin\LoaisanphamController::class, 'xulyedit'])->name('xulysualsp');
        Route::get('delete/{TK}',[Admin\LoaisanphamController::class, 'xulydelete'])->name('xoalsp');
    });

    //Nhân viên
    Route::group(['prefix' => 'Nhanvien'], function() {
        Route::get('index',[Admin\NhanvienController::class, 'index'])->name('nhanvien');
        Route::get('create',[Admin\NhanvienController::class, 'create'])->name('themnv');
        Route::post('xulycreate',[Admin\NhanvienController::class, 'xulycreate'])->name('xulythemnv');
        Route::get('edit/{TK}',[Admin\NhanvienController::class, 'edit'])->name('suanv');
        Route::post('edit/{TK}',[Admin\NhanvienController::class, 'xulyedit'])->name('xulysuanv');
        Route::get('delete/{TK}',[Admin\NhanvienController::class, 'xulydelete'])->name('xulyxoanv');
    });
    
    //Nhà cung cấp
    Route::group(['prefix' => 'Nhacungcap'], function() {
        Route::get('index',[Admin\NhacungcapController::class, 'index'])->name('nhacungcap');
        Route::get('create',[Admin\NhacungcapController::class, 'create'])->name('themncc');
        Route::post('xulycreate',[Admin\NhacungcapController::class, 'xulycreate'])->name('xulythemncc');
        Route::get('edit/{TK}',[Admin\NhacungcapController::class, 'edit'])->name('suancc');
        Route::post('edit/{TK}',[Admin\NhacungcapController::class, 'xulyedit'])->name('xulysuancc');
        Route::get('delete/{TK}',[Admin\NhacungcapController::class, 'xulydelete'])->name('xulyxoancc');
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

    //tai khoan ne
    Route::get('/Khachhang/index',[Admin\KhachhangController::class, 'index'])->name('indexKH');
    Route::get('/Khachhang/create',[Admin\KhachhangController::class, 'create'])->name('formthemKH');
    Route::post('/Khachhang/xulycreate',[Admin\KhachhangController::class, 'xulycreate'])->name('xylythemKH');
    Route::get('/Khachhang/edit/{KH}',[Admin\KhachhangController::class, 'edit'])->name('SuaKH');
    Route::post('/Khachhang/edit/{KH}',[Admin\KhachhangController::class, 'xulyedit'])->name('xylysuaKH');
    Route::get('/Khachhang/delete/{KH}',[Admin\KhachhangController::class, 'xulydelete'])->name('xylyxoaKH');


    //Hóa đơn nhập nè
    Route::get('/Hoadonban/index',[Admin\HoadonbanController::class, 'index'])->name('indexHDB');
    Route::get('/Hoadonban/create',[Admin\HoadonbanController::class, 'create'])->name('formthemHDB');
    Route::post('/Hoadonban/xulycreate',[Admin\HoadonbanController::class, 'xulycreate'])->name('xylythemHDB');
    Route::get('/Hoadonban/edit/{HDB}',[Admin\HoadonbanController::class, 'edit'])->name('SuaHDB');
    Route::post('/Hoadonban/edit/{HDB}',[Admin\HoadonbanController::class, 'xulyedit'])->name('xylysuaHDB');
    Route::get('/Hoadonban/delete/{HDB}',[Admin\HoadonbanController::class, 'xulydelete'])->name('xylyxoaHDB');

});


