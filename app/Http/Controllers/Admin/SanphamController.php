<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Sanpham;
use Illuminate\Support\Facades\DB;

class SanphamController extends Controller
{
    //
    function index()
    {
        $dsSanpham = DB::table('Sanpham')->where('trangthai','=','1')->get();   
        return view('ChauTuan.Sanpham.index',compact('dsSanpham'));
    }

    function create()
    {
        $dsLoaisanpham = DB::table('Loaisanpham')->where('trangthai','=','1')->get();
        $dsNhacungcap = DB::table('Nhacungcap')->where('trangthai','=','1')->get();
        return view('ChauTuan.Sanpham.create',compact('dsLoaisanpham','dsNhacungcap'));
    }

    function xulycreate(Request $req){
        $SP = new Sanpham();
        $SP->sanpham_name = $req->tensp;
        $SP->loaisanpham_id = $req->MaLSP;
        $SP->thuonghieu = $req->thuonghieu;
        $SP->dongia = $req->dongia;
        $SP->soluong = $req->soluong;
        $SP->mota = $req->mota;
        $SP->chatlieu = $req->chatlieu;
        $SP->kichthuoc = $req->kichthuoc;
        $SP->hinhanh = $req->hinhanh;
        $SP->nhacungcap_id = $req->MaNCC;
        $SP->trangthai = $req->trangthai;
        $SP -> save();
        $dsSanpham = Sanpham::all();
       return redirect()->route('sanpham',compact('dsSanpham'));
    }

 
    function edit($id)
    {
        $thongtin = Sanpham::find($id);
        $dsLoaisanpham = DB::table('Loaisanpham')->where('trangthai','=','1')->get();
        $dsNhacungcap = DB::table('Nhacungcap')->where('trangthai','=','1')->get();
        return view('ChauTuan.Sanpham.edit',compact('thongtin','dsLoaisanpham','dsNhacungcap'));
    }

    function xulyedit(Request $req, $id){       
        $SP = Sanpham::find($id);
        $SP->sanpham_name = $req->tensp;
        $SP->loaisanpham_id = $req->MaLSP;
        $SP->thuonghieu = $req->thuonghieu;
        $SP->dongia = $req->dongia;
        $SP->soluong = $req->soluong;
        $SP->mota = $req->mota;
        $SP->chatlieu = $req->chatlieu;
        $SP->kichthuoc = $req->kichthuoc;
        $SP->hinhanh = $req->hinhanh;
        $SP->nhacungcap_id = $req->MaNCC;
        $SP->trangthai = $req->trangthai;
        $SP -> save();    
        $dsSanpham = Sanpham::all();
       return redirect()->route('sanpham',compact('dsSanpham'));
    }

    function xulydelete($id){       
        $SP = Sanpham::find($id);
        $SP -> trangthai = 0;
        $SP -> save();
        $dsSanpham = DB::table('Sanpham')->where('trangthai','=','1')->get();    
        return redirect()->route('sanpham',compact('dsSanpham'));
    } 
}
