@extends('admin.app')

@section('content')

<h1>Thêm mới nhà cung cấp</h1>

<a href="{{route('nhacungcap')}}">Quay lại</a>
<form method="POST" action="{{route('xulythemncc')}}">
@csrf
    <table>
    <tr>
            <th>Tên nhà cung cấp</th>
            <td><input type="text" name="tenNCC"  require></td>
        </tr>
        
        <tr>
            <th>Thông tin liên lạc</th>
            <td><input type="text" name="thongtinlienlac"  require></td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td><input type="text" name="diachi"  require></td>
        </tr>
        <tr>
            <th>Số điện thoại</th>
            <td><input type="text" name="sdt"  require></td>
        </tr>
        <tr>
            <th>Số fax</th>
            <td><input type="text" name="sofax"  require></td>
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

