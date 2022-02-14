@extends('admin.app')

@section('content')
<h1>Nhân viên</h1>
<p>
    <a href="{{route('themnv')}}" class="btn btn-primary pull-right">Thêm nhân viên</a>
</p>

<table class="table">
        <thead>
            <tr>
                <th> Tên nhân viên </th>
                <th> CCCD </th>
                <th> Email </th>
                <th> Số điện thoại </th>
                <th> Số tài khoản </th>
                <th> Địa chỉ </th>
                <th> Hình đại diện </th>
                <th class="text-center text-danger"><i class="fa fa-bolt"></i></th>     
            </tr>
        </thead>
        <tbody>
        @foreach ($dsNhanvien as $NV)
                <tr>                 
                    <th>
                    {{ $NV->nhanvien_name }}
                    </th>
                    <td class="text-center">
                    {{ $NV->cmnd }}
                    </td>       
                    <td class="column2">
                    {{ $NV->email }}
                    </td>
                    <td class="column2">
                    {{ $NV->sdt }}
                    </td> 
                    <td class="text-center">
                    {{ $NV->sotaikhoan }}
                    </td>
                    <td class="column2">
                    {{ $NV->diachi }}
                    </td> 
                    <td class="column2">
                    {{ $NV->hinhdaidien }}
                    </td> 
                    <td class="column2">
                    @if ($NV->trangthai == 1)
                    <span class="badge badge-
                    success">Yes</span>
                    @else
                    <span class="badge badge-
                    danger">No</span>
                    @endif
                    </td>
                    <td class="column2">
                        <a href="{{route('suanv',['NV'=>$NV->id])}}"  >Sửa</a> |  
                        <a href="{{route('xoanv',['NV'=>$NV->id])}}" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a>  
                    </td>
                </tr>              
        @endforeach     
        </tbody>
</table> 

@endsection

