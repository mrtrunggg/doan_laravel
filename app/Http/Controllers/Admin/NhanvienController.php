<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Nhanvien;
use Illuminate\Support\Facades\DB;

class NhanvienController extends Controller
{
    //
    function index()
    {
        $dsNhanvien = DB::table('Nhanvien')->where('trangthai','=','1')->get();   
        return view('ChauTuan.Nhanvien.index',compact('dsNhanvien'));
    }

    function create()
    {
        
        return view('ChauTuan.Nhanvien.create');
    }

    function xulycreate(Request $req){
        $NV = new Nhanvien();
        $NV->nhanvien_name = $req->tenNV;
        $NV->cmnd = $req->cmnd;
        $NV->email = $req->email;
        $NV->sdt = $req->sdt;
        $NV->sotaikhoan = $req->sotaikhoan;
        $NV->diachi = $req->diachi;
        $NV->hinhdaidien = $req->hinhdaidien;
        $NV->trangthai = $req->trangthai;
        $NV -> save();
        $dsNhanvien = Nhanvien::all();
       return redirect()->route('nhanvien',compact('dsNhanvien'));
    }

 
    function edit($id)
    {
        $thongtin = Nhanvien::find($id);
       
        return view('ChauTuan.Nhanvien.edit',compact('thongtin'));
    }

    function xulyedit(Request $req, $id){       
        $NV = Nhanvien::find($id);
        $NV->nhanvien_name = $req->tenNV;
        $NV->cmnd = $req->cmnd;
        $NV->email = $req->email;
        $NV->sdt = $req->sdt;
        $NV->sotaikhoan = $req->sotaikhoan;
        $NV->diachi = $req->diachi;
        $NV->hinhdaidien = $req->hinhdaidien;
        $NV->trangthai = $req->trangthai;
        $NV -> save();
        $dsNhanvien = Nhanvien::all();
       return redirect()->route('nhanvien',compact('dsNhanvien'));
    }

    function xulydelete($id){       
        $NV = Nhanvien::find($id);
        $NV -> trangthai = 0;
        $NV -> save();
        $dsNhanvien = DB::table('Nhanvien')->where('trangthai','=','1')->get();    
        return redirect()->route('nhanvien',compact('dsNhanvien'));
    } 
}
