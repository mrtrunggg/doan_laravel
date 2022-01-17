<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Khachhang;
use Illuminate\Support\Facades\DB;

class KhachhangController extends Controller
{
    function index()
    {
        $dskhachhang = DB::table('Khachhang')->where('trangthai','=','1')->get();   
        return view('KhacTrung.khachhang.index',compact('dskhachhang'));
    }

    function create()
    {
        $danhsachtaikhoan = DB::table('Taikhoan')->where('trangthai','=','1')->get();
        $dskhachhang = DB::table('Khachhang')->where('trangthai','=','1')->get();
        $dskhachhang1 = DB::table('Nhanvien')->where('trangthai','=','1')->get();
        return view('KhacTrung.khachhang.create',compact('dskhachhang','dskhachhang1','danhsachtaikhoan'));
    }

    function xulycreate(Request $req){
        $KH = new khachhang();
        
        $KH->khachhang_name = $req->tenkhachhang;
        $KH->email = $req->email;
        $KH->atm = $req->atm;
        $KH->sdt = $req->sdt;
        $KH->diachi = $req->diachi;
        $KH->hinhdaidien = $req->hinhdaidien;
        $KH->id_taikhoan = $req->MaTK;
        $KH->trangthai = 1;
        $KH -> save();
        $dskhachhang = khachhang::all();
      
       return redirect()->route('indexKH',compact('dskhachhang'));
    }

 
    function edit($id)
    {
        $danhsachtaikhoan = DB::table('Taikhoan')->where('trangthai','=','1')->get();
        $thongtin = khachhang::find($id);
        return view('KhacTrung.khachhang.edit',compact('thongtin','danhsachtaikhoan'));
    }

    function xulyedit(Request $req, $id){       
        $KH = khachhang::find($id);
        $KH->khachhang_name = $req->Tenkhachhang;
        $KH->email = $req->email;
        $KH->atm = $req->atm;
        $KH->sdt = $req->sdt;
        $KH->diachi = $req->diachi;
        if($req->hinhdaidien == '')
        {
            $KH->hinhdaidien = $req->tenhinhdaidien;
        }else{
            $KH->hinhdaidien = $req->hinhdaidien;
        }
        $KH->trangthai = $req->TrangThai;
        $KH -> save();    
        $dskhachhang = khachhang::all();
       return redirect()->route('indexKH',compact('dskhachhang'));
    }

    function xulydelete($id){       
        $KH = khachhang::find($id);
        $KH -> trangthai = 0;
        $KH -> save();
        $dskhachhang = DB::table('khachhang')->where('trangthai','=','1')->get();    
        return redirect()->route('indexKH',compact('dskhachhang'));
    } 
}
