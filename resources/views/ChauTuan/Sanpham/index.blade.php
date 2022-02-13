@extends('admin.app')

@section('content')
<h1>Sản phẩm</h1>
<p>
    <a href="{{route('themsp')}}" class="btn btn-primary pull-right">Thêm sản phẩm</a>
</p>

<table class="table">
        <thead>
            <tr>
                <th> Tên sản phẩm </th>
                <th> Loại sản phẩm </th>
                <th> Thương hiệu </th>
                <th> Đơn giá </th>
                <th> Số lượng </th>
                <th> Mô tả </th>
                <th> Chất liệu </th>
                <th> Kích thước </th>
                <th> Hình ảnh </th>
                <th> Nhà cung cấp </th>
                <th class="text-center text-danger"><i class="fa fa-bolt"></i></th>     
            </tr>
        </thead>
        <tbody>
        @foreach ($dsSanpham as $SP)
                <tr>                 
                    <th>
                    {{ $SP->sanpham_name }}
                    </th>
                    <td class="text-center">
                    
                    </td>       
                    <td class="column2">
                    {{ $SP->thuonghieu }}
                    </td>
                    <td class="column2">
                    {{ $SP->dongia }}
                    </td> 
                    <td class="text-center">
                    {{ $SP->soluong }}
                    </td>
                    <td class="column2">
                    {{ $SP->mota }}
                    </td> 
                    <td class="column2">
                    {{ $SP->chatlieu }}
                    </td> 
                    <td class="text-center">
                    {{ $SP->kichthuoc }}
                    </td> 
                    <td class="column2">
                    {{ $SP->hinhanh }}
                    </td> 
                    <td class="text-center">
                    {{ $SP->nhacungcap_id }}
                    </td> 
                    <td class="column2">
                    @if ($SP->trangthai == 1)
                    <span class="badge badge-
                    success">Yes</span>
                    @else
                    <span class="badge badge-
                    danger">No</span>
                    @endif
                    </td>
                    <td class="column2">
                        <a href="{{route('suasp',['SP'=>$SP->id])}}"  >Sửa |</a>
                        <a href="{{route('xoasp',['SP'=>$SP->id])}}" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a>  
                    </td>
                </tr>              
        @endforeach     
        </tbody>
</table> 

@endsection

