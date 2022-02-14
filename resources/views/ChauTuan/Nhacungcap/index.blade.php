@extends('admin.app')

@section('content')
<h1>Nhà cung cấp</h1>
<p>
    <a href="{{route('themncc')}}" class="btn btn-primary pull-right">Thêm nhà cung cấp</a>
</p>

<table class="table">
        <thead>
            <tr>
                <th> Tên nhà cung cấp </th>
                <th> Thông tin liên lạc </th>
                <th> Địa chỉ </th>
                <th> SĐT </th>
                <th> Số fax </th>
                <th class="text-center text-danger"><i class="fa fa-bolt"></i></th>     
            </tr>
        </thead>
        <tbody>
        @foreach ($dsNhacungcap as $NCC)
                <tr>                 
                    <th>
                    {{ $NCC->nhacungcap_name }}
                    </th>
                    <td class="text-center">
                    {{ $NCC->thongtinlienlac }}
                    </td>       
                    <td class="column2">
                    {{ $NCC->diachi	 }}
                    </td>
                    <td class="column2">
                    {{ $NCC->sdt }}
                    </td> 
                    <td class="text-center">
                    {{ $NCC->sofax }}
                    </td>
                    <td class="column2">
                    @if ($NCC->trangthai == 1)
                    <span class="badge badge-
                    success">Yes</span>
                    @else
                    <span class="badge badge-
                    danger">No</span>
                    @endif
                    </td>
                    <td class="column2">
                        <a href="{{route('suancc',['NCC'=>$NCC->id])}}"  >Sửa</a> |  
                        <a href="{{route('xoancc',['NCC'=>$NCC->id])}}" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a>  
                    </td>
                </tr>              
        @endforeach     
        </tbody>
</table> 

@endsection

