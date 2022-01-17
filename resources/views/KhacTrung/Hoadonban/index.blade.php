@extends('admin.app')

@section('content')
<p>
    <a href="{{route('formthemHDB')}}">Create New</a>
</p>

<table class="table">
        <thead>
            <tr>
                <th class="column2">
                   Id
                </th>
                <th class="column2">
                    Tên khách hàng
                </th>
                <th class="column2">
                    Ngày lập
                </th>
                <th class="column2">
                    Tổng tiền
                </th>
                <th class="column2">
                    Thông tin người nhận
                </th>
                <th class="column2">
                    Trạng thái hoá đơn
                </th>      
            </tr>
        </thead>
        <tbody>
        @foreach ($dshoadonban as $a)
            
                <tr>
                    <th class="column2">
                        {{$a->id}}
                    </th>                   
                    <th class="column2">
                        {{$a->khachhang_name}}
                    </th>
                    <td class="column2">
                        {{$a->ngaylap}}
                    </td> 
                    <td class="column2">
                        {{$a->tongtien}}
                    </td>        
                    <td class="column2">
                        {{$a->thongtinnguoinhan}}
                    </td>
                    <td>
                        @if($a->trangthai == 1)
                            <span style="color:#d35400;">Chưa xác nhận</span>
                        @elseif($a->trangthai == 2)
                            <span style="color:#27ae60;"> Đã xác nhận</span>
                        @elseif($a->trangthai == 3)
                            <span style="color:#2927ae;"> Đã giao</span>
                        @elseif($a->trangthai == 4)
                            <span style="color:#505050;"> Đã huỷ</span>
                        @endif
                    </td>
                    <td class="column2">
                        <a href="{{route('SuaHDB',['HDB'=>$a->id])}}"  >Edit</a>                                 
                        <a style="margin-left: 10px" href="{{route('xylyxoaHDB',['HDB'=>$a->id])}}" onclick="return confirm('Bạn có muốn huỷ hoá đơn không?')">Delete</a>
                    </td>
                </tr>              
        @endforeach     
        </tbody>
</table> 

@endsection