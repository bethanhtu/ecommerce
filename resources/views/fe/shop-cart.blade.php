@extends('fe.layout')
@section('content_web')
<section class="">

    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        @if(session('CART'))
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="px-3 py-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h1 class="fw-bold mb-0 text-black">Giỏ hàng</h1>
                                    </div>
                                    <hr class="my-4">
                                    @foreach(session('CART') as $cart)
                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="{{asset($cart['product']['main_image'])}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-muted">{{$cart['product']['name']}}</h6>
                                        </div>
                                        <div class="cart__quantity">
                                            <div class="pro-qty">
                                                <span class="dec qtybtn" id="{{$cart['product']['id']}}" name="{{$cart['quantity']}}">-</span>
                                                <input min="1" id="{{$cart['product']['id']}}" type="number" class="update-cart" pattern="[0-9]" value="{{$cart['quantity']}}" readonly>
                                                <span class="inc qtybtn" id="{{$cart['product']['id']}}" name="{{$cart['quantity']}}">+</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">{{number_format($cart['product']['price'], 0) }}</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a class="btn btn-link del-cart" id="{{$cart['product']['id']}}"><span class="icon_close"></span></a>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="my-2">
                                        <h6 class="mb-0"><a href="{{route('home')}}" class="text-body"><i class="fa fa-home me-2"></i>Trở về trang chủ</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Tổng tiền</h5>
                                        <h5>{{number_format($total)}} đ</h5>
                                    </div>
                                    <a href="{{route('check-out')}}" class="btn-black btn"> Đặt hàng</a>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="fw-bold mb-0 text-black">Giỏ hàng trống</h4>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="pt-5">
                                    <h6 class="mb-0"><a href="{{route('home')}}" class="text-body"><i class="fa fa-home me-2"></i>Trở về trang chủ</a></h6>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection