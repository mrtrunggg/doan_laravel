@extends('admin.app')
@section('content')

<h1>Thay đổi thông tin cá nhân </h1>
<form method="POST" acction="{{route('xylysuaTK',['TK'=>$thongtin->id])}}">
    @csrf
    <table>
        <tr>
            <th>Tên tài khoản:</th>
            <td> <input type="text" name="Tentaikhoan" value="{{$thongtin->tentaikhoan}}" required></br></td>
</tr>
<tr>
            <th>Mật khẩu:</th>
            <td>   <input type="password" name="MatKhau" value="{{$thongtin->matkhau}}" required></br></td>
</tr>
<tr>
            <th>Loại Tài khoản</th>
            <td>        
                <select name="LoaiTk" id="LoaiTk">
                    <option value="Admin">Admin</option>
                    <option value="Staff">Nhân viên</option>
                    <option value="Customer">Khách hàng</option>                                
                </select>     
            </td>
        </tr>

        <tr>
            <th>Loại Tài khoản</th>
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