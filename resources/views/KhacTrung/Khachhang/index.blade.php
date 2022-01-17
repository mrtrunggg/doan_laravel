@extends('admin.app')

@section('content')
<p>
    <a href="{{route('formthemKH')}}">Create New</a>
</p>

<table class="table">
        <thead>
            <tr>
                <th class="column2">
                    Tên khách hàng
                </th>
                <th class="column2">
                    Email
                </th>
                <th class="column2">
                    ATM
                </th>
                <th class="column2">
                    Số điện thoại
                </th>
                <th class="column2">
                    Địa chỉ
                </th>      
                <th class="column2">
                    Hình đại diện
                </th> 
            </tr>
        </thead>
        <tbody>
        @foreach ($dskhachhang as $a)
            
                <tr>                   
                    <th class="column2">
                        {{$a->khachhang_name}}
                    </th>
                    <td class="column2">
                        {{$a->email}}
                    </td> 
                    <td class="column2">
                        {{$a->atm}}
                    </td>        
                    <td class="column2">
                        {{$a->sdt}}
                    </td>
                    <td class="column2">
                        {{$a->diachi}}
                    </td> 
                    <td class="column2">
                        <img style="width:100px; height 130px" src="{!! url('frontend/images/anhdaidien/'.$a->hinhdaidien.'') !!}" >
                    </td> 
                    <td class="column2">
                        <a href="{{route('SuaKH',['KH'=>$a->id])}}"  >Edit</a>                                 
                        <a href="{{route('xylyxoaKH',['KH'=>$a->id])}}" onclick="return confirm('Bạn có muốn xoá không?')">Delete</a>
                    </td>
                </tr>              
        @endforeach     
        </tbody>
</table> 

@endsection