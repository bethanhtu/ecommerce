@extends('fe.layout')
@section('content_web')
    <div class="container">
        <div class="entry-content single-page">
            <h2 style="text-align: center; ">Đơn hàng</h2>
            <table style=" text-align: center;" class="table">
                <thead>
                <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Tình trạng đơn hàng</th>
                    <th scope="col">Hình thức thanh toán</th>
                </tr>
                </thead>
                <tbody>
                @php
                $count = 0;
                @endphp
                @foreach($myOrder as $order)
                <tr>
                    <td>{{$order->order_code}}</td>
                    <td>{{number_format($order->total_price)}} đ</td>
                    @if($order->status == 1)
                        <td>Đang đóng gói</td>
                    @elseif($order->status == 2)
                        <td>Đang giao hàng</td>
                    @else
                        <td>Đã nhận hàng</td>
                    @endif
                    @if($order->method == 1)
                    <td>Tiền mặt</td>
                    @else
                    <td>Vnpay</td>
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection