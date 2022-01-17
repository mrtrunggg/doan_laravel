@extends('admin.app')

@section('content')

<h1>Thêm mới khách hàng</h1>

<a href="{{route('indexKH')}}">Quay lại</a>
<form method="POST" action="{{route('xylythemKH')}}">
@csrf
    <table>
        <tr>
            <th>Tên khách hàng</th>
            <td><input type="text" name="tenkhachhang" require></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" require></td>
        </tr>
        <tr>
            <th>ATM</th>
            <td><input type="text" name="atm" require></td>
        </tr>
        <tr>
            <th>Số điện thoại</th>
            <td><input type="text" name="sdt" require></td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td><input type="text" name="diachi" require></td>
        </tr>
        <tr>
            <th>Hình đại diện</th>
            <td><input type="file" name="hinhdaidien" require></td>
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
            <th></th>
            <td><button type="submit">thêm</button></td>
        </tr>
</table>
</form>
@endsection

