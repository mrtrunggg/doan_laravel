@extends('admin.app')

@section('content')
<h1>Loại sản phẩm</h1>
<p>
    <a href="{{route('themlsp')}}" class="btn btn-primary pull-right">Thêm loại sản phẩm</a>
</p>

<table class="table">
        <thead>
            <tr>
                <th> Tên loại </th>
                <th class="text-danger"><i class="fa fa-bolt"></i></th>     
            </tr>
        </thead>
        <tbody>
        @foreach ($dsLoaisanpham as $LSP)
                <tr>                 
                    <th>
                    {{ $LSP->tenloaisp }}
                    </th>
                    <td class="column2">
                    @if ($LSP->trangthai == 1)
                    <span class="badge badge-
                    success">Yes</span>
                    @else
                    <span class="badge badge-
                    danger">No</span>
                    @endif
                    </td>
                    <td class="column2">
                        <a href="{{route('sualsp',['LSP'=>$LSP->id])}}"  >Sửa</a> |  
                        <a href="{{route('xoalsp',['LSP'=>$LSP->id])}}" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a>  
                    </td>
                </tr>              
        @endforeach     
        </tbody>
</table> 

@endsection

