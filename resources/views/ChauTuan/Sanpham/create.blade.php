@extends('admin.app')

@section('content')

<h1>Thêm mới sản phẩmn</h1>

<a href="{{route('sanpham')}}">Quay lại</a>
<form method="POST" action="{{route('xulythemsp')}}">
@csrf
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <td><input type="text" name="tensp" require></td>
        </tr>
        <tr>
            <th>Nhà cung cấp</th>
            <td>        
                <select name="MaNCC" id="MaNCC">
                    <option value="">Không nhập giá trị</option>
                    @foreach($dsNhacungcap as $a)
                        <option value="{{$a->id}}">{{$a->nhacungcap_name}}</option>
                    @endforeach                                    
                </select>     
            </td>
        </tr>
        <tr>
            <th>Loại sản phẩm</th>
            <td>        
                <select name="MaLSP" id="MaLSP">
                    <option value="">Không nhập giá trị</option>
                    @foreach($dsLoaisanpham as $a)
                        <option value="{{$a->id}}">{{$a->tenloaisp}}</option>
                    @endforeach                                    
                </select>     
            </td>
        </tr>

        <tr>
            <th>Thương hiệu</th>
            <td><input type="text" name="thuonghieu" require></td>
        </tr>
        <tr>
            <th>Đơn giá</th>
            <td><input type="text" name="dongia" require></td>
        </tr>
        <tr>
            <th>Số lượng</th>
            <td><input type="text" name="soluong" require></td>
        </tr>
        <tr>
            <th>Mô tả</th>
            <td><input type="text" name="mota" require></td>
        </tr>
        <tr>
            <th>Chất liệu</th>
            <td><input type="text" name="chatlieu" require></td>
        </tr>
        <tr>
            <th>Kích thước</th>
            <td><input type="text" name="kichthuoc" require></td>
        </tr>
        <tr>
            <th>Hình ảnh</th>
            <td><input type="text" name="hinhanh" require></td>
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

