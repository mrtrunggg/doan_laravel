@extends('admin.app')

@section('content')

<h1>Thêm mới nhân viên</h1>

<a href="{{route('nhanvien')}}">Quay lại</a>
<form method="POST" action="{{route('xulythemnv')}}">
@csrf
    <table>
    <tr>
            <th>Tên nhân viên</th>
            <td><input type="text" name="tenNV"  require></td>
        </tr>
        <tr>
            <th>CCCD</th>
            <td><input type="text" name="cmnd"  require></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email"  require></td>
        </tr>
        <tr>
            <th>Số điện thoại</th>
            <td><input type="text" name="sdt"  require></td>
        </tr>
        <tr>
            <th>Số tài khoản</th>
            <td><input type="text" name="sotaikhoan"  require></td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td><input type="text" name="diachi"  require></td>
        </tr>
        <tr>
            <th>Hình đại diện</th>
            <td><input type="text" name="hinhdaidien"  require></td>
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
            <th></th>
            <td><button type="submit">thêm</button></td>
        </tr>
</table>
</form>
@endsection

