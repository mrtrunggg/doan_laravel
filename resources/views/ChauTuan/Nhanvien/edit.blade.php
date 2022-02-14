@extends('admin.app')
@section('content')

<h1>Thay đổi thông tin nhân viên </h1>
<form method="POST" acction="{{route('xulysuasp',['SP'=>$thongtin->id])}}">
    @csrf
    <table>
        <tr>
            <th>Tên nhân viên</th>
            <td><input type="text" name="tenNV" value="{{$thongtin->nhanvien_name}}" require></td>
        </tr>
        <tr>
            <th>CCCD</th>
            <td><input type="text" name="cmnd" value="{{$thongtin->cmnd}}" require></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" value="{{$thongtin->email}}" require></td>
        </tr>
        <tr>
            <th>Số điện thoại</th>
            <td><input type="text" name="sdt" value="{{$thongtin->sdt}}" require></td>
        </tr>
        <tr>
            <th>Số tài khoản</th>
            <td><input type="text" name="sotaikhoan" value="{{$thongtin->sotaikhoan}}" require></td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td><input type="text" name="diachi" value="{{$thongtin->diachi}}" require></td>
        </tr>
        <tr>
            <th>Hình đại diện</th>
            <td><input type="text" name="hinhdaidien" value="{{$thongtin->hinhdaidien}}" require></td>
        </tr>
        <tr>
            <th>Trạng thái</th>
            <td>        
                <select name="trangthai" id="trangthai">
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