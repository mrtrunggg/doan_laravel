<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Sanpham;
use App\Models\Khachhang;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    function trangchu()
    {
        
        $dsSPmoi = Sanpham::orderBy('id','DESC')->where('trangthai','=','1')->get(); 
        
        
        $dsSPbanchay = DB::select('select Sanpham.*, SUM(CTHoadonban.soluomg) as so_luong_ban_ra from Sanpham,CTHoadonban
        where Sanpham.id=CTHoadonban.sanpham_id
        group by sanpham_id
        order by Sum(CTHoadonban.soluomg) desc'); 
        return view('user.index',compact('dsSPmoi','dsSPbanchay'));
    }





    function dssp()
    {
        $dsSP = DB::table('Sanpham')->where('trangthai','=','1')->get();   
        return view('user.shop',compact('dsSP'));
    }

    function ttcn($id)
    {
        $KH =  Khachhang::find($id);      
        return view('user.profile',compact('KH'));
    }

 
    function xulyttcn(Request $req, $id)
    {
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



    function ctsp($id)
    {
        $SP =  Sanpham::find($id);      
        $dsSP = DB::table('Sanpham')->where('loaisanpham_id','=',$SP->loaisanpham_id)->get(); 
   
        return view('user.product_detail',compact('SP','dsSP'));
    }

    function timkiem(Request $req)
    {
       $dsSP= DB::table('Sanpham')->where('sanpham_name','like','%'.$req->timkiem.'%')->get();
       return view('user.timkiem',compact('dsSP'));
    }
}

