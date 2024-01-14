@extends('be.layout')
@section('content')

<div class="card-body p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>CHI TIẾT ĐƠN HÀNG</h2>
    </div>
    <div class="card shadow-0 border mb-4">
        <div class="card-body">
            @php
            $count=0;
            @endphp
            @foreach($orderDetail as $value)
            @php
            $count+=$value['quantity'];
            @endphp
            <div class="row">

                <div class="col-md-2">
                    <img src="{{asset($value->product->main_image)}}" class="img-fluid" alt="Phone">
                </div>
                <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">{{$value->product->name}}</p>
                </div>
                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Số lượng: {{$value->quantity}}</p>
                </div>
                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Đơn giá: {{number_format($value->price, 0) }} đ</p>
                </div>
                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Tổng tiền: {{number_format($value->total, 0) }} đ</p>
                </div>
            </div>
            @endforeach

            <hr class="mb-4" style="opacity: 1;">
        </div>
    </div>

    <div class="d-flex justify-content-between py-1 ">
        <p class="fw-bold mb-0">Mã đơn hàng</p>
        <p class="text-muted mb-0">{{$order->order_code}}</p>
    </div>

    <div class="d-flex justify-content-between pt-1">
        <p class="text-muted mb-0">Điện thoại</p>
        <p class="text-muted mb-0">{{$order->phone}}</p>
    </div>

    <div class="d-flex justify-content-between pt-1">
        <p class="text-muted mb-0">Địa chỉ giao hàng</p>
        <p class="text-muted mb-0">{{$order->address}}</p>
    </div>
    <div class="d-flex justify-content-between pt-1">
        <p class="text-muted mb-0">Ghi chú</p>
        <p class="text-muted mb-0">{{$order->note}}</p>
    </div>
    <div class="d-flex justify-content-between my-3">
        <p class="text-muted mb-0">Giá trị đơn hàng</p>
        <p class="text-muted mb-0 font-weight-bold">{{number_format($order->total_price, 0) }} đ</p>
    </div>
</div>
@endsection