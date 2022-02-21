@extends('admin.app')

@section('content')
<p>
    <a href="{{route('formthemTK')}}">Create New</a>
</p>

<table class="table">
        <thead>
            <tr>
                <th class="column2">
                    Tên tài khoản
                </th>
                <th class="column2">
                    Email
                </th>
                <th class="column2">
                    Loại tài khoản
                </th>
                <th class="column2">
                    Trạng thái
                </th>      
            </tr>
        </thead>
        <tbody>
        @foreach ($dstaikhoan as $a)
            
                <tr>                   
                    <th class="column2">
                        {{$a->name}}
                    </th>
                    <td class="column2">
                        {{$a->email}}
                    </td>       
                    <td class="column2">
                        {{$a->loaitk}}
                    </td>
                    <td class="column2">
                        {{$a->trangthai}}
                    </td> 
                    <td class="column2">
                        <a href="{{route('SuaTK',['TK'=>$a->id])}}"  >Edit</a>                                 
                        <a href="{{route('xylyxoaTK',['TK'=>$a->id])}}" onclick="return confirm('Bạn có muốn xoá không?')">Delete</a>
                    </td>
                </tr>              
        @endforeach     
        </tbody>
</table> 

@endsection