@extends('admin.app')
@section('content')

<h1>Thay đổi thông tin nhà cung cấp </h1>
<form method="POST" acction="{{route('xulysuancc',['NCC'=>$thongtin->id])}}">
    @csrf
    <table>
        <tr>
            <th>Tên nhà cung cấp</th>
            <td><input type="text" name="tenNCC" value="{{$thongtin->nhacungcap_name}}" require></td>
        </tr>
        <tr>
            <th>Thông tin liên lạc</th>
            <td><input type="text" name="thongtinlienlac" value="{{$thongtin->thongtinlienlac}}" require></td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td><input type="text" name="diachi" value="{{$thongtin->diachi	}}" require></td>
        </tr>
        <tr>
            <th>Số điện thoại</th>
            <td><input type="text" name="sdt" value="{{$thongtin->sdt}}" require></td>
        </tr>
        <tr>
            <th>Số fax</th>
            <td><input type="text" name="sofax" value="{{$thongtin->sofax}}" require></td>
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