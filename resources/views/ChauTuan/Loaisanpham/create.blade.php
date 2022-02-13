@extends('admin.app')

@section('content')

<h1>Thêm mới loại sản phẩmn</h1>

<a href="{{route('loaisanpham')}}">Quay lại</a>
<form method="POST" action="{{route('xulythemlsp')}}">
@csrf
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <td><input type="text" name="tenlsp" require></td>
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

