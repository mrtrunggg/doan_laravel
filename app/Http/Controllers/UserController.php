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

// function DanhSachLop($id){
//     $danhsachlop = DB::table('lop')->join('hoc_sinh_hoc_lop','lop.id','=','hoc_sinh_hoc_lop.ma_lop')->select('lop.ma_lop','so_luong','ten_lop','trang_thai')->where('hoc_sinh_hoc_lop.ma_hoc_sinh','=',$id)->where('lop.trang_thai','=','1')->get();

//     $idhs = $id;
//     return view('hoc-sinh-danh-sach-lop',compact('danhsachlop','idhs'));
// }


// @forelse($danhsachlop as $a)
// <tr>
//     <th class="column2">{{$a->ma_lop}}</th>
//     <th class="column3">{{$a->ten_lop}}</th>
//     <th class="column3">{{$a->so_luong}}</th>
//     <th class="column3"><a href="#">View</a></th>
// </tr>
// @empty
// <tr>
//     <td colspan="3">Không có dữ liệu</td>
// </tr>
// @endforelse




// <tr>
//     <th class="column2">{{$a->ma_lop}}</th>
//     <th class="column3">{{$a->ten_lop}}</th>
//     <th class="column3">{{$a->ho_ten}}</th>
//     <th class="column6">{{$a->so_luong}}</th>
//     <th class="column6">{{$a->thoi_gian}}</th>
//     <th class="column2"><a class="btn btn--radius btn--green" href="{{route('ds-hoc-sinh',['gv'=>$a->ma_giao_vien,'id'=>$a->id])}}">Edit</a>| <a class="btn btn--radius btn--green" href="{{route('from-xoa-lop',['gv'=>$a->ma_giao_vien,'id'=>$a->id])}}" onclick="return confirm('Bạn có muốn xoá lớp học này không?')">Delete</a>
// </tr>


// function DanhSachHocSinh($idgv, $idlop){
//     $thongtinlop = DB::table('hoc_sinh')->join('hoc_sinh_hoc_lop','hoc_sinh.id','=','hoc_sinh_hoc_lop.ma_hoc_sinh')->where('ma_lop','=',$idlop)->where('trang_thai_lop','=','1')->get();
//     $lop =Lop::find($idlop);
//     $giaovien = GiaoVien::find($idgv);
   
    
// return view('edit-danh-sach-lop',compact('thongtinlop','lop','giaovien'));}