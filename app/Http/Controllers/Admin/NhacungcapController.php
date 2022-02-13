<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Nhacungcap;
use Illuminate\Support\Facades\DB;

class NhacungcapController extends Controller
{
    //
    function index()
    {
        $dsNhacungcap = DB::table('Nhacungcap')->where('trangthai','=','1')->get();   
        return view('ChauTuan.Nhacungcap.index',compact('dsNhacungcap'));
    }

    function create()
    {
        
        return view('ChauTuan.Nhacungcap.create');
    }

    function xulycreate(Request $req){
        $NCC = new Nhacungcap();
        $NCC->nhacungcap_name = $req->tenNCC;
        $NCC->thongtinlienlac = $req->thongtinlienlac;
        $NCC->diachi = $req->diachi;
        $NCC->sdt = $req->sdt;
        $NCC->sofax = $req->sofax;
        $NCC->trangthai = $req->trangthai;
        $NCC -> save();
        $dsNhacungcap = Nhacungcap::all();
       return redirect()->route('nhacungcap',compact('dsNhacungcap'));
    }

 
    function edit($id)
    {
        $thongtin = Nhacungcap::find($id);
        return view('ChauTuan.Nhacungcap.edit',compact('thongtin'));
    }

    function xulyedit(Request $req, $id){       
        $NCC = Nhacungcap::find($id);
        $NCC->nhacungcap_name = $req->tenNCC;
        $NCC->thongtinlienlac = $req->thongtinlienlac;
        $NCC->diachi = $req->diachi;
        $NCC->sdt = $req->sdt;
        $NCC->sofax = $req->sofax;
        $NCC->trangthai = $req->trangthai;
        $NCC -> save();
        $dsNhacungcap = Nhacungcap::all();
       return redirect()->route('nhacungcap',compact('dsNhacungcap'));
    }

    function xulydelete($id){       
        $NV = Nhacungcap::find($id);
        $NV -> trangthai = 0;
        $NV -> save();
        $dsNhacungcap = DB::table('Nhacungcap')->where('trangthai','=','1')->get();    
        return redirect()->route('nhacungcap',compact('dsNhacungcap'));
    } 
}
