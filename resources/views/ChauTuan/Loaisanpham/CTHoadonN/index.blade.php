@extends('admin.app')

@section('content')
<p>
    <a href="{{route('themlsp')}}">Create New</a>
</p>

<table class="table">
        <thead>
            <tr>
                <th class="column2">
                    Mã hóa đơn nhập
                </th>
                <th class="column2">
                    Mã sản phẩm
                </th>
                <th class="column2">
                    Số lượng 
                </th>
                <th class="column2">
                    Đơn giá
                </th> 
                <th class="column2">
                    Thành tiền
                </th> 
                <th class="column2">
                    Trạng thái
                </th>      
            </tr>
        </thead>
        <tbody>
        @foreach ($dsCTHoadonN as $a)
            
                <tr>                   
                    <th class="column2">
                        {{$a->hoadonnhap_id}}
                    </th>
                    <td class="column2">
                        {{$a->sanpham_id}}
                    </td>       
                    <td class="column2">
                        {{$a->soluomg}}
                    </td>
                    <td class="column2">
                        {{$a->dongia}}
                    </td> 
                    <td class="column2">
                        {{$a->thanhtien}}
                    </td>
                    <td class="column2">
                        {{$a->trangthai}}
                    </td> 
                    <td class="column2">
                        <a href="{{route('sualsp',['LSP'=>$a->id])}}"  >Edit</a>                                 
                        <a href="{{route('xulyxoalsp',['LSP'=>$a->id])}}" onclick="return confirm('Bạn có muốn xoá không?')">Delete</a>
                    </td>
                </tr>              
        @endforeach     
        </tbody>
</table> 

@endsection