<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Hoadonban;
use Illuminate\Support\Facades\DB;

class HoadonbanController extends Controller
{
    function index()
    {
        $dshoadonban = DB::table('Khachhang')
    			 	->join('hoadonban', 'khachhang.id', '=', 'hoadonban.khachhang_id')
    			 	->get();   
        return view('KhacTrung.Hoadonban.index',compact('dshoadonban'));
    }

    function create()
    {
        $dsHoadonban = DB::table('Nhacungcap')->where('trangthai','=','1')->get();
        $dsHoadonban1 = DB::table('Nhanvien')->where('trangthai','=','1')->get();
        return view('KhacTrung.Hoadonban.create',compact('dsHoadonban','dsHoadonban1'));
    }

    function xulycreate(Request $req){
        $HDB = new Hoadonban();
        $HDB->nhacungcap_id = $req->MaNCC;
        $HDB->nhanvien_id = $req->MaNV;
        $HDB->ngaylap = $req->NgaylapHD;
        $HDB->tongtien = $req->Tongtien;
        $HDB->ghichu = $req->Ghichu;
        $HDB->trangthai = $req->trangthai;
        $HDB -> save();
        $dsHoadonban = Hoadonban::all();
       return redirect()->route('indexHDB',compact('dsHoadonban'));
    }

 
    function edit($id)
    {
        $thongtin = Hoadonban::find($id);
        $dshoadonban = DB::table('Khachhang')
    			 	->join('hoadonban', 'khachhang.id', '=', 'hoadonban.khachhang_id')
    			 	->get(); 
        $dscthoadonban = DB::table('Sanpham')
    			 	->join('cthoadonban', 'sanpham.id', '=', 'cthoadonban.sanpham_id')
                    -> where('hoadonban_id','=',$id)
    			 	->get();
        return view('KhacTrung.Hoadonban.edit',compact('thongtin','dscthoadonban','dshoadonban'));
    }

    function xulyedit(Request $req, $id){       
        $HDB = Hoadonban::find($id);
        $HDB->trangthai = $req->trangthai;
        $HDB -> save();   
        $dsHoadonban = Hoadonban::all();
       return redirect()->route('indexHDB',compact('dsHoadonban'));
    }

    function xulydelete($id){       
        $HDB = Hoadonban::find($id);
        $HDB -> trangthai = 4;
        $HDB -> save();
        $dsHoadonban = DB::table('Hoadonban')->get();    
        return redirect()->route('indexHDB',compact('dsHoadonban'));
    } 


}

