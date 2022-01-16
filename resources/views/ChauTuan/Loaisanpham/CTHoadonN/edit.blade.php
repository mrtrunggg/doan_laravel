@extends('admin.app')
@section('content')

<h1>Thay đổi thông tin cá nhân </h1>
<form method="POST" acction="{{route('xulysualsp',['LSP'=>$thongtin->id])}}">
    @csrf
    <table>


    <tr>
            <th>Mã hóa đơn nhập</th>
            <td>        
                <select name="MaHDN" id="MaHDN">
                    <option value="">Không nhập giá trị</option>
                    @foreach($dsCTHoadonnhap as $a)
                        <option value="{{$a->id}}">{{$a->id}}</option>
                    @endforeach                                    
                </select>     
            </td>
        </tr>
        <tr>
            <th>Mã sản phẩm</th>
            <td>        
                <select name="MaSP" id="MaSP">
                    <option value="">Không nhập giá trị</option>
                    @foreach($dsCTHoadonnhap1 as $a)
                        <option value="{{$a->id}}">{{$a->sanpham_name}}</option>
                    @endforeach                                    
                </select>     
            </td>
        </tr>

        <tr>
            <th>Số lượng</th>
            <td><input type="text" name="soluomg" value="{{$thongtin->soluomg}}" require></td>
        </tr>
        <tr>
            <th>Đơn giá</th>
            <td><input type="text" name="dongia" value="{{$thongtin->soluomg}}" require></td>
        </tr>
        <tr>
            <th>Thành tiền</th>
            <td><input type="text" name="thanhtien" value="{{$thongtin->thanhtien}}" require></td>
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