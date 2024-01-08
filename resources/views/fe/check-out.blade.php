@extends('fe.layout')
@section('content_web')
<div style="position: relative">
    @if(\Illuminate\Support\Facades\Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="z-index: 3; position: absolute; top: 20%;">
        <strong>Error!</strong>{{\Illuminate\Support\Facades\Session::get('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="container">
        <form action="{{route('order')}}" class="checkout__form" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Giỏ hàng</span>
                        <span class="badge badge-secondary badge-pill"></span>
                    </h4>
                    <ul class="list-unstyled mb-3">
                        @if(session('CART'))
                        @foreach(session('CART') as $cart)
                        <li>
                            <h4>{{$cart['product']->name}}</h4>
                            <span>{{$cart['product']->price}} đ</span>
                            <hr>
                        </li>
                        @endforeach
                        <li class="list-group-item d-flex justify-content-between mt-5">
                            <span>Tổng tiền</span>
                            <strong>{{number_format($total) }}</strong>
                        </li>
                        @endif
                    </ul>

                    @if(!empty(session('CART')))
                    <button class="btn btn-black btn-lg btn-block" type="submit" class="site-btn" name="order">Đặt hàng</button>
                    @endif

                </div>
                <div class="col-md-8 order-md-1">

                    <div class="row">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="checkout__form__input">
                                    <p>Tên <span>*</span></p>
                                    <input class="form-control" required="" type="text" id="name" name="name" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="checkout__form__input">
                                    <p>Địa chỉ <span>*</span></p>
                                    <input class="form-control" required="" type="text" id="address" name="address" value="{{old('address')}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Số điện thoại <span>*</span></p>
                                    <input class="form-control" required="" type="tell" id="phone" name="phone" value="{{old('phone')}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input class="form-control" required="" type="email" id="email" name="email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="checkout__form__input">
                                    <p>Ghi chú<span>*</span></p>
                                    <input class="form-control" type="text" id="note" name="note" value="{{old('note')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">

        </form>
    </div>
</div>
@endsection