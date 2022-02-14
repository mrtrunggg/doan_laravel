<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Loaisanpham;
use Illuminate\Support\Facades\DB;

class LoaisanphamController extends Controller
{
    //
    function index()
    {
        $dsLoaisanpham = DB::table('Loaisanpham')->where('trangthai','=','1')->get();   
        return view('ChauTuan.Loaisanpham.index',compact('dsLoaisanpham'));
    }

    function create()
    {
        return view('ChauTuan.Loaisanpham.create');
    }

    function xulycreate(Request $req){
        $LSP = new Loaisanpham();
        $LSP->tenloaisp = $req->tenlsp;
        $LSP->trangthai = $req->trangthai;
        $LSP -> save();
        $dsLoaisanpham = Loaisanpham::all();
       return redirect()->route('loaisanpham',compact('dsLoaisanpham'));
    }

 
    function edit($id)
    {
        $thongtin = Loaisanpham::find($id);
        
        return view('ChauTuan.Loaisanpham.edit',compact('thongtin'));
    }

    function xulyedit(Request $req, $id){       
        $LSP = Loaisanpham::find($id);
        $LSP->tenloaisp = $req->tenlsp;
        $LSP->trangthai = $req->trangthai;
        $LSP -> save();
        $dsLoaisanpham = Loaisanpham::all();
       return redirect()->route('loaisanpham',compact('dsLoaisanpham'));
    }

    function xulydelete($id){       
        $LSP = Loaisanpham::find($id);
        $LSP -> trangthai = 0;
        $LSP -> save();
        $dsLoaisanpham = DB::table('Loaisanpham')->where('trangthai','=','1')->get();    
        return redirect()->route('loaisanpham',compact('dsLoaisanpham'));
    } 
}
