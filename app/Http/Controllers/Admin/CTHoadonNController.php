<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\CTHoadonN;
use Illuminate\Support\Facades\DB;


class CTHoadonNController extends Controller
{
    function index()
    {
        $dsCTHoadonN = DB::table('CTHoadonN')->where('trangthai','=','1')->get();   
        return view('QuangTrung.CTHoadonN.index',compact('dsCTHoadonN'));
    }

    function create()
    {
        $dsCTHoadonnhap = DB::table('Hoadonnhap')->where('trangthai','=','1')->get();
        $dsCTHoadonnhap1 = DB::table('Sanpham')->where('trangthai','=','1')->get();
        return view('QuangTrung.CTHoadonN.create',compact('dsCTHoadonnhap','dsCTHoadonnhap1'));
    }

    function xulycreate(Request $req){
        $CTHDN = new CTHoadonN();
        $CTHDN->hoadonnhap_id = $req->MaHDN;
        $CTHDN->sanpham_id = $req->MaSP;
        $CTHDN->soluomg = $req->soluomg;
        $CTHDN->dongia = $req->dongia;
        $CTHDN->thanhtien = $req->thanhtien;
        $CTHDN->trangthai = $req->trangthai;
        $CTHDN -> save();
        $dsCTHoadonnhap = CTHoadonN::all();
       return redirect()->route('indexCTHDN',compact('dsCTHoadonnhap'));
    }

 
    function edit($id)
    {
        $thongtin = CTHoadonN::find($id);
        $dsCTHoadonnhap = DB::table('Hoadonnhap')->where('trangthai','=','1')->get();
        $dsCTHoadonnhap1 = DB::table('Sanpham')->where('trangthai','=','1')->get();
        return view('QuangTrung.CTHoadonN.edit',compact('thongtin','dsCTHoadonnhap','dsCTHoadonnhap1'));
    }

    function xulyedit(Request $req, $id){       
        $CTHDN = CTHoadonN::find($id);
        $CTHDN->hoadonnhap_id = $req->MaHDN;
        $CTHDN->sanpham_id = $req->MaSP;
        $CTHDN->soluomg = $req->soluomg;
        $CTHDN->dongia = $req->dongia;
        $CTHDN->thanhtien = $req->thanhtien;
        $CTHDN->trangthai = $req->trangthai;
        $CTHDN -> save();
        $dsCTHoadonN = CTHoadonN::all();
       return redirect()->route('indexCTHDN',compact('dsCTHoadonN'));
    }

    function xulydelete($id){       
        $CTHDN = CTHoadonN::find($id);
        $CTHDN -> trangthai = 0;
        $CTHDN -> save();
        $dsCTHoadonN = DB::table('CTHoadonN')->where('trangthai','=','1')->get();    
        return redirect()->route('indexCTHDN',compact('dsCTHoadonN'));
    } 
}


