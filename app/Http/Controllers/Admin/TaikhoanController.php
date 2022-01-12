<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Taikhoan;
use Illuminate\Support\Facades\DB;
class TaikhoanController extends Controller
{
    function index()
    {
        $dstaikhoan = DB::table('Taikhoan')->where('trangthai','=','1')->get();   
        return view('QuangTrung.Taikhoan.index',compact('dstaikhoan'));
    }

    function create()
    {
        $dstaikhoan = DB::table('Khachhang')->where('trangthai','=','1')->get();
        $dstaikhoan1 = DB::table('Nhanvien')->where('trangthai','=','1')->get();
        return view('QuangTrung.Taikhoan.create',compact('dstaikhoan','dstaikhoan1'));
    }

    function xulycreate(Request $req){
        $TK = new Taikhoan();
        $TK->tentaikhoan = $req->Tentaikhoan;
        $TK->matkhau = $req->MatKhau;
        $TK->loaitk = $req->LoaiTk;
        $TK->trangthai = $req->TrangThai;
        $TK -> save();
        $dstaikhoan = Taikhoan::all();
      
       return redirect()->route('indexTk',compact('dstaikhoan'));
    }

 
    function edit($id)
    {
        $thongtin = Taikhoan::find($id);
        return view('QuangTrung.Taikhoan.edit',compact('thongtin'));
    }

    function xulyedit(Request $req, $id){       
        $Tk = Taikhoan::find($id);
        $Tk->tentaikhoan = $req->Tentaikhoan;
        $Tk->matkhau = $req->MatKhau;
        $Tk->loaitk = $req->LoaiTk;
        $Tk->trangthai = $req->TrangThai;
        $Tk -> save();    
        $dstaikhoan = Taikhoan::all();
       return redirect()->route('indexTk',compact('dstaikhoan'));
    }

    function xulydelete($id){       
        $Tk = Taikhoan::find($id);
        $Tk -> trangthai = 0;
        $Tk -> save();
        $dstaikhoan = DB::table('Taikhoan')->where('trangthai','=','1')->get();    
        return redirect()->route('indexTk',compact('dstaikhoan'));
    } 
}
 
