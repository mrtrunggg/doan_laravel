@extends('admin.app')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<div class="col-lg-12">
				<form acction="{{route('xylysuaHDB',['HDB'=>$thongtin->id])}}" method="POST" role="form">	
					@csrf			
					<div class="panel panel-default">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Địa chỉ</th>
											<th>Ngày đặt</th>
											<th>Tổng tiền</th>
                                            <th>Trạng thái</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{$thongtin->id}}</td>
											<td>{{$thongtin->thongtinnguoinhan}}</td>
											<td>{{$thongtin->ngaylap}}</td>
											<td>{{$thongtin->tongtien}} Vnđ</td>
                                            <td>        
                                                <select name="trangthai" id="trangthai">
                                                    <option value="1">Chưa xác nhận</option>                
                                                    <option value="2">Đã xác nhận</option>    
                                                    <option value="3">Đã giao</option>    
                                                    <option value="4">Đã huỷ</option>                                
                                                </select>     
                                            </td>
										</tr>
									</tbody>
								</table>
							</div>
						<div class="panel-heading">						 
							Chi tiết sản phẩm trong đơn đặt hàng
						</div>
						<div class="panel-body" style="font-size: 12px;">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>										
											<th>ID</th>										
											<th>Tên sản phẩm</th>
											<th>Giá bán</th>
                                            <th> Số lượng </th>
                                            <th>Thành tiền</th>
										</tr>
									</thead>
									<tbody>
										@foreach($dscthoadonban as $a)
											<tr>
												<td>{{$a->hoadonban_id}}</td>
                                                <td>{{$a->sanpham_name}}</td>
                                                <td>{{$a->dongia}}</td>
                                                
												<td>{{$a->soluomg}}</td>
												<td>{{$a->thanhtien}}</td>
												
											</tr>
										@endforeach								
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<button type="submit"  class="btn btn-danger"> Xác nhận đơn hàng </button>
				</form>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection