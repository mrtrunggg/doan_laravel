@extends('admin.app')
@section('content')

<h1>Thay đổi thông tin loại sản phẩm </h1>
<form method="POST" acction="{{route('xulysualsp',['LSP'=>$thongtin->id])}}">
    @csrf
    <table>
        <tr>
            <th>Tên loại sản phẩm</th>
            <td><input type="text" name="tenlsp" value="{{$thongtin->tenloaisp}}" require></td>
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