@extends('admin.app')
@section('content')

<h1>Thay đổi thông tin cá nhân </h1>
<form method="POST" acction="{{route('xylysuaHDN',['HDN'=>$thongtin->id])}}">
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
            <td><input type="date" name="NgaylapHD" value="{{$thongtin->ngaylap}}"    require></td>
        </tr>
        <tr>
            <th>Tổng tiền</th>
            <td><input type="text" name="Tongtien" value="{{$thongtin->tongtien}}" require></td>
        </tr>
        <tr>
            <th>Ghi chú</th>
            <td><input type="text" name="Ghichu" value="{{$thongtin->ghichu}}" require></td>
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