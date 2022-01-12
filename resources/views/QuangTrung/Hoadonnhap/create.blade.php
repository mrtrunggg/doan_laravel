@extends('admin.app')

@section('content')

<h1>Thêm mới tài khoản</h1>

<a href="{{route('indexHDN')}}">Quay lại</a>
<form method="POST" action="{{route('xylythemHDN')}}">
@csrf
    <table>

        <tr>
            <th>Mã nhà cung cấp</th>
            <td>        
                <select name="MaNCC" id="MaNCC">
                    <option value="">Không nhập giá trị</option>
                    @foreach($dsHoadonnhap as $a)
                        <option value="{{$a->id}}">{{$a->nhacungcap_name}}</option>
                    @endforeach                                    
                </select>     
            </td>
        </tr>
        <tr>
            <th>Mã nhân viên</th>
            <td>        
                <select name="MaNV" id="MaNV">
                    <option value="">Không nhập giá trị</option>
                    @foreach($dsHoadonnhap1 as $a)
                        <option value="{{$a->id}}">{{$a->nhanvien_name}}</option>
                    @endforeach                                    
                </select>     
            </td>
        </tr>

        <tr>
            <th>Ngày lập hóa đơn</th>
            <td><input type="date" name="NgaylapHD" require></td>
        </tr>
        <tr>
            <th>Tổng tiền</th>
            <td><input type="text" name="Tongtien" require></td>
        </tr>
        <tr>
            <th>Ghi chú</th>
            <td><input type="text" name="Ghichu" require></td>
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

