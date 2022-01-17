@extends('admin.app')

@section('content')

<h1>Thêm mới tài khoản</h1>

<a href="{{route('loaisanpham')}}">Quay lại</a>
<form method="POST" action="{{route('xulythemlsp')}}">
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
            <td><input type="text" name="soluomg" require></td>
        </tr>
        <tr>
            <th>Đơn giá</th>
            <td><input type="text" name="dongia" require></td>
        </tr>
        <tr>
            <th>Thành tiền</th>
            <td><input type="text" name="thanhtien" require></td>
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

