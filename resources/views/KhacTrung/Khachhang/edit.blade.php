@extends('admin.app')
@section('content')

<h1>Thay đổi thông tin khách hàng </h1>
<form method="POST" acction="{{route('xylysuaKH',['KH'=>$thongtin->id])}}">
    @csrf
    <table>
        <tr>
            <th>Tên khách hàng:</th>
            <td> <input type="text" name="Tenkhachhang" value="{{$thongtin->khachhang_name}}" required></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>   <input type="text" name="email" value="{{$thongtin->email}}" required></td>
        </tr>
        <tr>
            <th>ATM:</th>
            <td>   <input type="text" name="atm" value="{{$thongtin->atm}}" required></td>
        </tr>
        <tr>
            <th>Số điện thoại</th>
            <td>   <input type="text" name="sdt" value="{{$thongtin->sdt}}" required></td>
        </tr>
        <tr>
            <th>Địa chỉ:</th>
            <td>   <input type="text" name="diachi" value="{{$thongtin->diachi}}" required></td>
        </tr>
        <tr>
            <th>Hình đại diện:</th>
            <td>   <input type="text" name="tenhinhdaidien" value="{{$thongtin->hinhdaidien}}" required></td>
            <td>   <input type="file" name="hinhdaidien"></td>
        </tr>
        <tr>
            <th>Tên tài khoản</th>
            <td>        
                <select name="MaTK" id="MaTK">
                    <option value="">Không nhập giá trị</option>
                    @foreach($danhsachtaikhoan as $a)
                        <option value="{{$a->id}}">{{$a->tentaikhoan}}</option>
                    @endforeach                                    
                </select>     
            </td>
        </tr>

        <tr>
            <th>Trạng thái</th>
            <td>        
                <select name="TrangThai" id="TrangThai">
                    <option value="1">Hoạt động</option>                
                    <option value="0">Không hoạt động</option>                                
                </select>     
            </td>
        </tr>
<tr>
    <th> <button type="submit">Sửa</button></th>
</tr>
<table>

</form>
@endsection