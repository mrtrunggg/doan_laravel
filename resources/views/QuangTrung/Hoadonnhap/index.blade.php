@extends('admin.app')

@section('content')
<p>
    <a href="{{route('formthemHDN')}}">Create New</a>
</p>

<table class="table">
        <thead>
            <tr>
                <th class="column2">
                    Mã nhà cung cấp
                </th>
                <th class="column2">
                    Mã nhân viên
                </th>
                <th class="column2">
                    Ngày lập hóa đơn
                </th>
                <th class="column2">
                    Tổng tiền
                </th> 
                <th class="column2">
                    Ghi chú
                </th> 
                <th class="column2">
                    Trạng thái
                </th>      
            </tr>
        </thead>
        <tbody>
        @foreach ($dsHoadonnhap as $a)
            
                <tr>                   
                    <th class="column2">
                        {{$a->nhacungcap_id}}
                    </th>
                    <td class="column2">
                        {{$a->nhanvien_id}}
                    </td>       
                    <td class="column2">
                        {{$a->ngaylap}}
                    </td>
                    <td class="column2">
                        {{$a->tongtien}}
                    </td> 
                    <td class="column2">
                        {{$a->ghichu}}
                    </td>
                    <td class="column2">
                        {{$a->trangthai}}
                    </td> 
                    <td class="column2">
                        <a href="{{route('SuaHDN',['HDN'=>$a->id])}}"  >Edit</a>                                 
                        <a href="{{route('xylyxoaHDN',['HDN'=>$a->id])}}" onclick="return confirm('Bạn có muốn xoá không?')">Delete</a>
                    </td>
                </tr>              
        @endforeach     
        </tbody>
</table> 

@endsection