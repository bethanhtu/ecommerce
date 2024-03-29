@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>BÀI VIẾT</h2>
        <div class="text-right" >
            <a class="btn" href="{{route('admin.post.create')}}">Thêm</a>
        </div>
        <div><hr></div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable">
                <thead class="table">
                <tr>
                    <th>Id</th>
                    <th>Tên bài viết</th>
                    <th>Ảnh</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>
                            <img src="{{asset($item->image)}}" width="100px">
                        </td>
                        <td>
                            <a class="btn btn-link" href="{{route('admin.post.doEdit', ['id'=>$item->id])}}">Sửa</a>
                            <a class="btn btn-link" href="{{route('admin.post.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có muốn xoá ?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection