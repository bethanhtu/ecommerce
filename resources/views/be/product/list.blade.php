@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>SẢN PHẨM</h2>
        <div class="text-right" >
            <a class="btn btn" href="{{route('admin.product.doAdd')}}">Thêm</a>
        </div>
        <div><hr></div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable">
                <thead class="table">
                <tr>
                    <th>Tên</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                        <td><b>{{$item->name}}</b></td>
                        <td>
                            <img width="50px" src="{{asset($item->main_image)}}">
                        </td>
                        <td>{{$item->quantity}}</td>
                        <td>{{ number_format($item->price, 0) }} đ</td>
                        <td>
                            <a class="btn btn-link" href="{{route('admin.product.doEdit',['id'=>$item->id])}}">Sửa</a>
                            <a class="btn btn-link" href="{{route('admin.product.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có muốn xoá ?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection