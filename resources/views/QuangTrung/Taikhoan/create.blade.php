@extends('admin.app')

@section('content')

<h1>Thêm mới tài khoản</h1>

<a href="{{route('indexTk')}}">Quay lại</a>
<form method="POST" action="{{route('xylythemTK')}}">
@csrf
    <table>
        <tr>
            <th>Tên tài khoản</th>
            <td><input type="text" name="Tentaikhoan" require></td>
        </tr>
        <tr>
            <th>Mật khẩu</th>
            <td><input type="password" name="MatKhau" require></td>
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
            <th>Trạng thái</th>
            <td>        
                <select name="TrangThai" id="TrangThai">
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


<!-- <tr>
            <th>Mã khách hàng</th>
            <td>        
                <select name="MaKH" id="MaKH">
                    <option value="">Không nhập giá trị</option>
                    @foreach($dstaikhoan as $a)
                        <option value="{{$a->id}}">{{$a->khachhang_name}}</option>
                    @endforeach                                    
                </select>     
            </td>
        </tr> -->